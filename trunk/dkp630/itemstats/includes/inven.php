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

// �κ� ���� ���� ����    

    $host = "www.inven.co.kr"; //�����ϰ����ϴ� ������
    $port = "80"; //�Ϲ����� ��������Ʈ
    $fullpath = "http://www.inven.co.kr/wow/dataninfo/wdb/edb_item/list.php?name=" . $encoded_name; // �˻��ϰ��� �ϴ� �������� ������ ���� ��ü �ּ�

//check to see if we have the fkr cached

	//get the id / guess it
    	if(!($fp = fsockopen($host, $port, &$errno, &$errstr, 30))) // URL�� ���� ����
      	{
    		return array(1,"���Ͽ��� - �˻��� ������", "9");
    		exit;
      	}

    fputs($fp, "GET ".$fullpath." HTTP/1.0\r\n"."Host: $host:${port}\r\n"."User-Agent: Web 0.1\r\n"."\r\n"); // ������ URL ������ ��û

  	while( !feof( $fp ) ) // �������� ��� ������ ����
	  {
		  $output .= fgets( $fp, 1024 );
      
  	}

    preg_match("/wowEdbItemLayer_show\(([0-9]*)\)/", $output, $matches); // ������ ��ȣ
    preg_match("/image\/wow\/dataninfo\/edb_item\/icon\/([A-z0-9_-]*)\.gif/", $output, $iconmatch); //����������
    $item_id = $matches[1];
		$item['id'] = $item_id;
		$item['icon'] = $iconmatch[1];

#	  $path = "http://wow.inven.co.kr/dataninfo/wdb/edb_item/detail.php?id=" . $matches[1];
# 
#		if(!($fp = fsockopen($host, $port, &$errno, &$errstr, 30))) // URL�� ���� ����
#	{
#		return array(1,"���Ͽ��� - �˻��� ������", "9");
#		exit;
#	}
#
#	fputs($fp, "GET ".$path." HTTP/1.0\r\n"."Host: $host:${port}\r\n"."User-Agent: Web 0.1\r\n"."\r\n"); // ������ URL ������ ��û
#
#	while( !feof( $fp ) ) // �������� ��� ������ ����
#	{
#		$put .= fgets( $fp, 1024 );
#
#	}
#	
#	list ($put, $iteminfo) = split ('<td style="width:314px;padding:0 10 0 10;">', $put);// ���������� �߶󳻱�
#	list ($iteminfo, $put) = split ('<\/table><\/td>', $iteminfo); // ���������� �߶󳻱�  
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
  } // getItem ��

	function getItemId($item_id, $item_name='', $item)
	{

		$item_url = 'http://wow.inven.co.kr/dataninfo/wdb/edb_item/detail.php?id=' . $item_id ;


		$item['link'] = $item_url;
		return $this->buildTooltip($this->getItemData($item_url), $item_name, $item);
	} // getItemId ��


	function getItemData($item_url)
	{

    $host = "www.inven.co.kr"; //�����ϰ����ϴ� ������
    $port = "80"; //�Ϲ����� ��������Ʈ
  	if(!($fp = fsockopen($host, $port, &$errno, &$errstr, 30))) // URL�� ���� ����
	{
		return array(1,"���Ͽ��� - �˻��� ������", "9");
		exit;
	}

  	fputs($fp, "GET ".$item_url." HTTP/1.0\r\n"."Host: $host:${port}\r\n"."User-Agent: Web 0.1\r\n"."\r\n"); // ������ URL ������ ��û
  
  	while( !feof( $fp ) ) // �������� ��� ������ ����
  	{
  		$put .= fgets( $fp, 1024 );
  
    }

	
  	list ($put, $item_data) = split ('<td style="width:314px;padding:0 10 0 10;">', $put);// ���������� �߶󳻱�
  	list ($item_data, $put) = split ('<\/table><\/td>', $item_data); // ���������� �߶󳻱�  



		if ($item_data == '') {
			return false;
		}
		// apparantly weve got valid item data

		return $item_data;
	} // getItemData ��



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

  	preg_match("/<td colspan=2 style=width:100%;font-weight:bold;><font color=#([A-z0-9_-]*)/", $item_data, $itemnamecolor); //������ ��� ����

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






} // class ��



