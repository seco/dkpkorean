<?php

include_once(dirname(__FILE__) . '/urlreader.php');

// The main interface to the Thottbot.
class ParseInven
{
  function ParseInven() 
  {
   
  }

  function getItem($name)
  {
		$name = trim($name);

		if (empty($name)) { return null; }

		$item = array('name' => $name);

		$encoded_name = urlencode(($name));

// 인벤 소켓 연결 시작    

    $host = "www.inven.co.kr"; //접속하고자하는 도메인
    $port = "80"; //일반적인 웹서버포트
    $fullpath = "http://www.inven.co.kr/wow/dataninfo/wdb/edb_item/list.php?name=" . $encoded_name; // 검색하고자 하는 페이지의 도메인 포함 전체 주소

//check to see if we have the fkr cached

	//get the id / guess it
    	if(!($fp = fsockopen($host, $port, &$errno, &$errstr, 30))) // URL에 소켓 연결
      	{
    		return array(1,"소켓에러 - 검색이 중지됨", "9");
    		exit;
      	}

    fputs($fp, "GET ".$fullpath." HTTP/1.0\r\n"."Host: $host:${port}\r\n"."User-Agent: Web 0.1\r\n"."\r\n"); // 서버에 URL 페이지 요청

  	while( !feof( $fp ) ) // 페이지내 모든 내용을 저장
	  {
		  $output .= fgets( $fp, 1024 );
      
  	}

    preg_match("/wowEdbItemLayer_show\(([0-9]*)\)/", $output, $matches); // 아이템 번호
    preg_match("/image\/wow\/dataninfo\/edb_item\/icon\/([A-z0-9_-]*)\.gif/", $output, $iconmatch); //아이콘정보
    $item_id = $matches[1];
		$item['id'] = $item_id;
		$item['icon'] = $iconmatch[1];

#	  $path = "http://wow.inven.co.kr/dataninfo/wdb/edb_item/detail.php?id=" . $matches[1];
# 
#		if(!($fp = fsockopen($host, $port, &$errno, &$errstr, 30))) // URL에 소켓 연결
#	{
#		return array(1,"소켓에러 - 검색이 중지됨", "9");
#		exit;
#	}
#
#	fputs($fp, "GET ".$path." HTTP/1.0\r\n"."Host: $host:${port}\r\n"."User-Agent: Web 0.1\r\n"."\r\n"); // 서버에 URL 페이지 요청
#
#	while( !feof( $fp ) ) // 페이지내 모든 내용을 저장
#	{
#		$put .= fgets( $fp, 1024 );
#
#	}
#	
#	list ($put, $iteminfo) = split ('<td style="width:314px;padding:0 10 0 10;">', $put);// 아이템정보 잘라내기
#	list ($iteminfo, $put) = split ('<\/table><\/td>', $iteminfo); // 아이템정보 잘라내기  
#  
# 
#  $item_data = $iteminfo;

  
// echo $item_data;
// echo $item_id;
  


		if($item_id)
		{
			return $this->getItemId($item_id, $name, $item);
		}
		else
		{
			return array();
		}
  } // getItem 끝

	function getItemId($item_id, $item_name='', $item)
	{

		$item_url = 'http://wow.inven.co.kr/dataninfo/wdb/edb_item/detail.php?id=' . $item_id ;


		$item['link'] = $item_url;
		return $this->buildTooltip($this->getItemData($item_url), $item_name, $item);
	} // getItemId 끝


	function getItemData($item_url)
	{

    $host = "www.inven.co.kr"; //접속하고자하는 도메인
    $port = "80"; //일반적인 웹서버포트
  	if(!($fp = fsockopen($host, $port, &$errno, &$errstr, 30))) // URL에 소켓 연결
	{
		return array(1,"소켓에러 - 검색이 중지됨", "9");
		exit;
	}

  	fputs($fp, "GET ".$item_url." HTTP/1.0\r\n"."Host: $host:${port}\r\n"."User-Agent: Web 0.1\r\n"."\r\n"); // 서버에 URL 페이지 요청
  
  	while( !feof( $fp ) ) // 페이지내 모든 내용을 저장
  	{
  		$put .= fgets( $fp, 1024 );
  
    }

	
  	list ($put, $item_data) = split ('<td style="width:314px;padding:0 10 0 10;">', $put);// 아이템정보 잘라내기
  	list ($item_data, $put) = split ('<\/table><\/td>', $item_data); // 아이템정보 잘라내기  



		if ($item_data == '') {
			return false;
		}
		// apparantly weve got valid item data

		return $item_data;
	} // getItemData 끝



	function buildTooltip($item_data, $item_name='', $item)
	{
		if (!$item_data) {
			unset($item['link']);
			return $item;
		}

		$item['name'] = $item_name;
		$item['lang'] = 'kr';


		// if download icons is enabled, download the icon
		if (DOWNLOAD_ICONS) {
			if (!$this->downloadIcon($item['icon'])) {
				// failed to download the icon, use default
				$item['icon'] = DEFAULT_ICON;
			}
		}

  	preg_match("/<td colspan=2 style=width:100%;font-weight:bold;><font color=#([A-z0-9_-]*)/", $item_data, $itemnamecolor); //아이템 등급 색깔

		// set the item color based on the item quality
		switch (strtolower($itemnamecolor[1])) {
			case "666666":
				$item['color'] = 'greyname';
				break;
			case "ffffff":
				$item['color'] = 'whitename';
				break;
			case "00ff00":
				$item['color'] = 'greenname';
				break;
			case "0070dd":
				$item['color'] = 'bluename';
				break;
			case "a335ee":
				$item['color'] = 'purplename';
				break;
			case "e17d13":
				$item['color'] = 'orangename';
				break;
			case "bb0000":
				$item['color'] = 'redname';
				break;
			default:
				$item['color'] = 'greyname';
				break;
		}
		

//	$item_data = str_replace("<td colspan=2 style=width:100%;font-weight:bold;><font color=#" . $itemnamecolor[1] . ">", "<td colspan='2'><font class='" . $fontclass . "' style=font-size:13px>", $item_data); 
	$item_data = str_replace("colspan=2 style=", "colspan=2 style=font-size:9pt;font-weight:normal;", $item_data);
	$item_data = str_replace("style=color:#FFFFFF", "style=color:#FFFFFF;font-size:9pt;font-weight:normal;", $item_data);
	$item_data = str_replace("color:FFD200", "color:#FFD200", $item_data);
	$item_data = str_replace("http://img.inven.co.kr/image/wow/dataninfo/edb_item/" , "./itemstats/templates/inven/", $item_data);

	$item_data = str_replace("\"", "'", $item_data);



  $item['html'] = $item_data;

		return $item;
	}






} // class 끝



