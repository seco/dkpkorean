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

// required file:
require_once('armory.class.php');
require_once('trans.func.php');

class ArmoryChars extends PHPArmory
{
  /**
  * Download Character Information
  * 
  * @param $user Character Name
  * @param $realm Realm Name
  * @param $loc Server Location (us/eu)
  * @param $lang Language of output (en_us/de_de/fr_fr) 
  * @param $parse Parsed Output (true) or XML (false)       
  * @return bol
  */
	public function GetCharacterData($user, $realm, $loc='us', $lang='en_us', $parse=true){
	  $wowurl = $this->links[$loc].'character-sheet.xml?r='.$this->ConvertInput($realm).'&n='.$this->ConvertInput($user);
		if($parse == true){
			$xml = simplexml_load_string($this->read_url($wowurl, $lang));
			return $xml->xpath("/page/characterInfo");	
		}else{
			return $this->read_url($wowurl, $lang);
		}
	}
	
	/**
  * Download the Guild List of Armory
  * 
  * @param $guild Guildname on Realm
  * @param $realm Name of Realm
  * @param $loc Server Location (us/eu)
  * @param $minLevel Minimut Character Level to fetch
  * @param $clsFilter Classname, if set --> List users of that class only
  * @param $lang Language of output (en_us/de_de/fr_fr)
  * @param $parse Parsed Output (true) or XML (false)  
  * @return bool
  */
	public function GetGuildMembers($guild, $realm, $loc='us', $minLevel, $clsFilter, $lang='en_us', $parse=true) {
    $wowurl = $this->links[$loc]."guild-info.xml?r=".$this->ConvertInput($realm)."&n=".$this->ConvertInput($guild)."&p=1";
		$xmldata = $this->read_url($wowurl, $lang);
		if($parse == true){
			$xml = simplexml_load_string($xmldata);
			return $this->getCharacterList($xml, $minLevel, $clsFilter);
		}else{
			return $xmldata;
		}
	}
	
	/**
  * Build Character List with some details out of Guild List
  * 
  * @param $xml XML Input of Armory
  * @param $minLevel List users higher than this Level only
  * @param $class List users of that Class only
  * @return bol List Array
  */
	private function getCharacterList($xml, $minLevel, $class) {
		$cList = array();
		$characters = $xml->xpath("/page/guildInfo/guild/members/character");
		if(sizeof($characters) == 0) {
			echo "<font style='color: #f00; font-weight: bold;'>Warning! No characters found!</font><p />";
		}else{
  		foreach($characters as $character) {
  			$attribs = $character->attributes();
  			// This is an ugly workaround for an encoding error in the armory
  			if ( substr($attribs["class"] ,0,1) == 'J' && substr($attribs["class"] ,-3) == 'ger' ) {
          $attribs["class"] = utf8_encode('Jäger');
        }
        // end of encoding problem fix
  			if((int)($attribs["level"]) >= $minLevel) {
  				if (!$class || $class == $attribs["class"]) {
  					$cList[] = array($attribs["name"], $attribs["level"], $attribs["class"]);
  				}
  			}
  		} // end of foreach
  	} // end of check
		return $cList;
	}
	
  protected function CheckIfChar($chardata){
    $error = '';
    if($chardata->attributes()){
      foreach($chardata->attributes() as $a=>$b){
        if($a === "errCode"){
          $error = 'no_char';
        }
      }
    }else{
      if(empty($chardata->characterTab)){
        $error = 'old_char';
      }
    }
    return $error;
  }
	
	public function CheckError(){
    return ($this->error) ? $this->error : false;
  }
	
	/**
  * Build Character Detail Array
  * 
  * @param $xml XML Input of Armory
  * @return bol List Array
  */
	public function BuildMemberArray($chardata){
		$dataarray = $memberarray = array();
		$myerror = $this->CheckIfChar($chardata);
		
		if(!$myerror){
  		foreach($chardata->character->attributes() as $a => $b) {
  		// This is an ugly workaround for an encoding error in the armory
  		  if ( substr($b ,0,1) == 'J' && substr($b ,-3) == 'ger' ) {
          $b = utf8_encode('Jäger');
        }
        if ( substr($b ,0,1) == 'M' && substr($b ,-6) == 'nnlich' ) {
          $b = utf8_encode('Männlich');
        }
        // end of encoding problem fix
      	$dataarray[strtolower($a)] = $b;
  		}
  		foreach($chardata->characterTab->talentSpec->attributes() as $a => $b) {
      	$dataarray[strtolower($a)] = $b;
  		}
  
  		foreach($chardata->characterTab->professions as $a => $b) {
      	$dataarray[strtolower($a)] = $b;
  		}
  		foreach($chardata->characterTab->resistances as $a => $b) {
      	$dataarray[strtolower($a)] = $b;
  		}
  		foreach($chardata->characterTab->baseStats as $a => $b) {
      	$dataarray[strtolower($a)] = $b;
  		}
  		foreach($chardata->characterTab->characterBars as $a => $b) {
      	$dataarray[strtolower($a)] = $b;
  		}
  		$dataarray['honoredkills'] = $chardata->characterTab->pvp->lifetimehonorablekills['value'];
  		return $dataarray;
		}else{
      return $myerror;
    }
	}
}
