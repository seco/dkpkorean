<?php
/*************************************************\
*             Downloads 4 EQdkp plus              *
* ----------------------------------------------- *
* Project Start: 05/2009                          *
* Author: GodMod                                  *
* Copyright: GodMod 				              *
* Link: http://eqdkp-plus.com/forum               *
* Version: 0.0.1a                                 *
* ----------------------------------------------- *
* Based on EQdkp-Plus Gallery by Badtwin & Lunary *
\*************************************************/
//License: Creative Commons - Attribution-Noncommercial-Share Alike 3.0 Unported
//License-Link: http://creativecommons.org/licenses/by-nc-sa/3.0/

  if ( !defined('EQDKP_INC') ){
    header('HTTP/1.0 404 Not Found');exit;
  } 
  
  if (!isset($eqdkp_root_path) ){
    $eqdkp_root_path = './';
  }
  include_once($eqdkp_root_path . 'common.php');
  
   /**
  * Load the global Configuration
  */
	
	//Cache: plugin.downloads.config
	
  	$config_cache = $pdc->get('plugin.downloads.config',false,true);
	if (!$config_cache) {
  		$sql = 'SELECT * FROM __downloads_config';
  		if (!($settings_result = $db->query($sql))) { message_die('Could not obtain configuration data', '', __FILE__, __LINE__, $sql); }
  		$roww = $db->fetch_record_set($settings_result);
		$pdc->put('plugin.downloads.config',$roww,86400,false,true);
	} else{
		$roww = $config_cache;
	};
  
  foreach($roww as $elem) {
    $conf[$elem['config_name']] = $elem['config_value'];

  }
  
  /**
  * Framework include
  **/
  require_once($eqdkp_root_path . 'plugins/downloads/include/libloader.inc.php');
	

  /**
  * Load rest of Libraries
  */
  include_once($eqdkp_root_path . '/plugins/downloads/include/downloads.class.php');
  $dlclass = new DownloadsClass();
  
  
  
?>
