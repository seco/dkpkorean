<?php
 /*
 * Project:     EQdkp Plugin WPFC Classes
 * License:     Creative Commons - Attribution-Noncommercial-Share Alike 3.0 Unported
 * Link:		    http://creativecommons.org/licenses/by-nc-sa/3.0/
 * -----------------------------------------------------------------------
 * Began:       2005
 * Date:        $Date: 2008-07-29 13:41:36 +0200 (Di, 29 Jul 2008) $
 * ----------------------------------------------------------------------- 
 * This Class is part of the "WalleniuMs Plugin (Developer) Framework Kit" WPFC. 
 * You can ask for permission and use this classes in your Plugins but not 
 * remove this Copyright  
 * -----------------------------------------------------------------------
 * @author      $Author: wallenium $
 * @copyright   2007-2008 Simon (Wallenium) Wallmann
 * @link        http://eqdkp-plus.com
 * @package     wpfc
 * @version     $Rev: 2454 $
 * 
 * $Id: db.class.php 2454 2008-07-29 11:41:36Z wallenium $
 */
 
if ( !defined('EQDKP_INC') ){
    header('HTTP/1.0 404 Not Found');exit;
}

if (!class_exists("AdditionalDB")) {
  class AdditionalDB {
  	
  	function AdditionalDB($tablename){
  		global $table_prefix;
  		$this->table = $table_prefix.$tablename;	
  	}
  	
  	// the "Save my Data to the Database" :D
    function UpdateConfig($dataarray, $confarray, $userid=false){
          global $eqdkp_root_path, $user, $SID, $db;
          foreach($dataarray as $key=>$value) {
          	if(!in_array($key, $confarray)){
          		$this->InsertConfig($key, $userid);
          	}
        $value = (is_array($value)) ? implode("|", $value) : strip_tags(htmlspecialchars($value));
        if($userid){
        	$sql = "UPDATE `".$this->table."` SET config_value='".$value."' WHERE config_name='".$key."' AND user_id='".$userid."';";
        }else{
        	$sql = "UPDATE `".$this->table."` SET config_value='".$value."' WHERE config_name='".$key."';";
        }
        $db->query($sql);
  		}
    	return true;
  	}
      
      function InsertConfig($name, $userid=false){
          global $db;
          if($userid){
          	$sql = "INSERT INTO `" . $this->table . "` ( `config_name`, `user_id` ) VALUES ('".$name."', '".$userid."');";
          }else{
          	$sql = "INSERT INTO `" . $this->table . "` ( `config_name` ) VALUES ('".$name."');";
          }
          	$blubb = $db->query($sql);
        }
      
      function CheckDBFields($field, $userid=false){
      	global $db;
      	$il = 1;
      	$output = array();
      	if($userid){
      		$sql = "SELECT ".$field." FROM `" . $this->table . "` WHERE user_id='".$userid."';";
      	}else{
      		$sql = "SELECT ".$field." FROM `" . $this->table . "`;";
      	}
        $blubb = $db->query($sql);
        while ( $blubber = $db->fetch_record($blubb) ){
        	$output[$il] = $blubber['config_name'];
        	$il++;
        }
        $db->free_result($blubb);
        return $output;
      }
      
      // add the item strip function (a-z, A-Z, 0-9)
  		function stripName($string) { 
   			return(preg_replace("/[^A-Za-z\s]/",'', $string));
  		}
  		
  		function isChecked($value){
        return ( $value == 1 ) ? ' checked="checked"' : '';
      }
    	
  }// end of class
}
?>
