<?php
 /*
 * Project:     eqdkpPLUS Libraries: Armory
 * License:     Creative Commons - Attribution-Noncommercial-Share Alike 3.0 Unported
 * Link:		    http://creativecommons.org/licenses/by-nc-sa/3.0/
 * -----------------------------------------------------------------------
 * Began:       2007
 * Date:        $Date: 2008-11-17 16:35:58 +0100 (Mo, 17 Nov 2008) $
 * -----------------------------------------------------------------------
 * @author      $Author: wallenium $
 * @copyright   2008 Simon (Wallenium) Wallmann
 * @link        http://eqdkp-plus.com
 * @package     libraries:armory
 * @version     $Rev: 3169 $
 * 
 * $Id: jquery.class.php 3169 2008-11-17 15:35:58Z wallenium $
 */

// this class is PHP5 only... testing OOP
if (version_compare(phpversion(), "5.0.0", "<")){
  die('You need PHP5 or higher to use this class');
} 

class PHPArmory
{
	var $version 	= '2.0.0';
	var $build		= '22112007197';
	
	private $xml_timeout = 20;  // seconds to pass for timeout
	private $user_agent  = 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.1.2) Gecko/20070220 Firefox/2.0.0.2';
	protected $links		 = array(
        										'eu'		=> 'http://eu.wowarmory.com/',
        										'us'		=> 'http://www.wowarmory.com/',
        										'kr'    => 'http://kr.wowarmory.com/',
        										'cn'    => 'http://cn.wowarmory.com/',
        										'tw'    => 'http://tw.wowarmory.com/',
        									);
	private $serverlocs  = array(
                            'eu'    => 'EU',
                            'us'    => 'US',
                            'cn'    => 'CN',
                            'kr'    => 'KR',
                            'tw'    => 'TW',
                          );
	
	/**
  * Initialize the Class
  * 
  * @param $utf8test  Some Specialchars to test the Codeset
  * @param $loadme    Whcih modules to load: items, chars  
  * @param $lang      Which language to import  
  * @return bool
  */
	function __construct($utf8test, $lang='en_en'){
		$this->stringIsUTF8 = ($this->isUTF8($utf8test) == 1) ? true : false;
		$this->armoryLang   = $lang;
	}
	
	function GetLocs(){
    return $this->serverlocs;
  }
	
	function ValueOrNull($input){
    return ($input) ? $input : 0;
  }
	
	/**
  * Prepare a string for beeing sent to armory
  * 
  * @param $input 
  * @return string output
  */
	 protected function ConvertInput($input){
		$out	= ($this->stringIsUTF8) ? stripslashes(rawurlencode($input)) : stripslashes(rawurlencode(utf8_encode($input)));
    return $out;
	}
	
	/**
  * Check if Armory is online or not
  * 
  * @param $url URL to check if online 
  * @return true/array with error information
  */
  public function CheckOnlineStatus($url='wowarmory.com'){
    if (@fsockopen($url, 80, $errno, $errstr, 30)){
      return array($errstr,$errno);
    }else{
      return true;
    }
  }
	
  /**
  * Convert Armory Date in Timestamp
  * 
  * @param $armdate Input Date
  * @return Timestamp
  */
	public function Date2Timestamp($armdate){
		$tmpdate = explode(" ", trim($armdate));
		$monthnames['de_de'] = array(
      'Januar'        => 'January',
      'Februar'       => 'February',
      'März'          => 'March',
      'MÃ¤rz'         => 'March',
      'April'         => 'April',
      'Mai'           => 'May',
      'Juni'          => 'June',
      'Juli'          => 'July',
      'August'        => 'August',
      'September'     => 'September',
      'Oktober'       => 'October',
      'November'      => 'Noveber',
      'Dezember'      => 'December',
    );
    $transmonthname = ($this->armoryLang) ? $monthnames[$this->armoryLang][$this->UTF8tify($tmpdate[1])] : '';
    $tmpdate[1] = ($transmonthname) ? $transmonthname : $tmpdate[1];
    return strtotime($tmpdate[0].' '.$tmpdate[1].' '.$tmpdate[2]);
  }
	
	/**
  * Build Character Detail Array
  * 
  * @param $url URL to Download
  * @return xml
  */
	 protected function read_url($url){
	 // Try cURL first. If that isnt available, check if we're allowed to
	 // use fopen on URLs.  If that doesn't work, just die.
  	if (function_exists('curl_init5')){
  		$curl = @curl_init($url);
  		$cookie = "cookieLangId=".$this->armoryLang.";";
  
  		@curl_setopt($curl, CURLOPT_COOKIE, $cookie);
  		@curl_setopt($curl, CURLOPT_USERAGENT, $this->user_agent);
  		@curl_setopt($curl, CURLOPT_TIMEOUT, $this->xml_timeout);
  		if (!(@ini_get("safe_mode") || @ini_get("open_basedir"))) {
      	@curl_setopt($curl, CURLOPT_FOLLOWLOCATION, 1);
      }
  		@curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);

  		$xml_data = @curl_exec($curl);
  		curl_close($curl);
  	}elseif (ini_get('allow_url_fopen') == 1 && function_exists('ini_set')){
  	   @ini_set('user_agent', $this->user_agent);  // set the useragent first. if not, you'll get the source....
  	   // its a bit tricky to get the cookie to work: http://www.testticker.de/tipps/article20060414003.aspx
       $cheader   = array("http" => array ("header" => "Cookie: cookieLangId=".$this->armoryLang.";\r\n"));
       $context   = @stream_context_create($cheader);
  	   $xml_data  = @file_get_contents($url, false, $context);
  	}else{
      // Thanks to Aki Uusitalo
  			$url_array = parse_url($url);
  			$fp = fsockopen($url_array['host'], 80, $errno, $errstr, 30); 
  			stream_set_timeout($fp, $this->xml_timeout);
  			$cookie = "cookieLangId=".$this->armoryLang.";";
  			if (!$fp){
  				die("cURL isn't installed, 'allow_url_fopen' isn't set and socket opening failed. Socket failed because: <br /><br /> $errstr ($errno)");
  			}else{
  				$out  = "GET " .$url_array['path']."?".$url_array['query']." HTTP/1.0\r\n";
  				$out .= "Host: ".$url_array['host']." \r\n";
  				$out .= "User-Agent: ".$this->user_agent;
  				$out .= "Connection: Close\r\n";
  				$out .= "Cookie: ".$cookie."\r\n";
  				$out .= "\r\n";
  
  				fwrite($fp, $out);
  
  				// Get rid of the HTTP headers
  				while ($fp && !feof($fp)){
  					$headerbuffer = fgets($fp, 1024);
  					if (urlencode($headerbuffer) == "%0D%0A"){
                      // We've reached the end of the headers
  						break;
  					}
  				}
  
  				$xml_data = '';
  				// Read the raw data from the socket in 1kb chunks
  				while (!feof($fp)){
  					$xml_data .= fgets($fp, 1024);
  				}
  				fclose($fp);
  			}        
  	}
	return $xml_data;
	}
	
	/**
  * Returns <kbd>true</kbd> if the string or array of string is encoded in UTF8.
  *
  * Example of use. If you want to know if a file is saved in UTF8 format :
  * <code> $array = file('one file.txt');
  * $isUTF8 = isUTF8($array);
  * if (!$isUTF8) --> we need to apply utf8_encode() to be in UTF8
  * else --> we are in UTF8 :)
  * @param mixed A string, or an array from a file() function.
  * @return boolean
  */
	 protected function isUTF8($string){
    if (is_array($string)){
    	$enc = implode('', $string);
    	return @!((ord($enc[0]) != 239) && (ord($enc[1]) != 187) && (ord($enc[2]) != 191));
    }else{
    	return (utf8_encode(utf8_decode($string)) == $string);
    }   
	}
	
	/**
  * Check if the String is UTF8 or not
  * 
  * @return bool
  */
	public function CheckUTF8(){
		return $this->stringIsUTF8;
	}
	
	/**
  * Convert the String to UTF8 if needed
  * 
  * @param $string Input
  * @return bool UTF8 encoded string
  */
	public function UTF8tify($string){
		if($this->stringIsUTF8 || !$this->XMLIsUTF8){
			return $string;
		}else{
			return utf8_decode($string);
		}
	}
}
?>
