<?php
 /*
 * Project:     EQdkp CharManager 1
 * License:     Creative Commons - Attribution-Noncommercial-Share Alike 3.0 Unported
 * Link:		    http://creativecommons.org/licenses/by-nc-sa/3.0/
 * -----------------------------------------------------------------------
 * Began:       2006
 * Date:        $Date: 2009-02-21 16:52:18 +0100 (Sa, 21 Feb 2009) $
 * -----------------------------------------------------------------------
 * @author      $Author: wallenium $
 * @copyright   2005-2008 Simon (Wallenium) Wallmann
 * @link        http://eqdkp-plus.com
 * @package     charmanager
 * @version     $Rev: 3926 $
 * 
 * $Id: common.php 3926 2009-02-21 15:52:18Z wallenium $
 */

  if ( !defined('EQDKP_INC') ){
    header('HTTP/1.0 404 Not Found');exit;
  } 
  
  if (!isset($eqdkp_root_path) ){
    $eqdkp_root_path = './';
  }
  include_once($eqdkp_root_path . 'common.php');
  
  /**
  * Database Tables
  **/
  if (!defined('UC_CONFIG_TABLE')) 				{ define('UC_CONFIG_TABLE', $table_prefix . 'charmanager_config'); }
  if (!defined('MEMBER_ADDITION_TABLE')) 	{ define('MEMBER_ADDITION_TABLE', $table_prefix . 'member_additions'); }
  
  /**
  * Framework include
  **/
  require_once($eqdkp_root_path . 'plugins/charmanager/include/libloader.inc.php');
  $wpfcdb     = new AdditionalDB('charmanager_config');
  
  // Load Charmanager Library
  require_once($eqdkp_root_path . 'plugins/charmanager/include/usermanagement.class.php');
  $CharTools  = new CharTools();
  
  /**
  * Load the global Configuration
  */
  $sql = 'SELECT * FROM ' . UC_CONFIG_TABLE;
  $settings_result = $db->query($sql);
  while($roww = $db->fetch_record($settings_result)) {
    $conf[$roww['config_name']] = $roww['config_value'];
  }
  $db->free_result($settings_result);

 /**
  * JQUEry
  */
  $tpl->assign_vars(array('JQUERY_INCLUDES'   => $jquery->Header()));
  
  if(!is_object($pcache)){
    $pcache = new cacheHandler;
  }
?>
