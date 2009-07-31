<?php
 /*
 * Project:     EQdkp ItemSpecials
 * License:     Creative Commons - Attribution-Noncommercial-Share Alike 3.0 Unported
 * Link:		    http://creativecommons.org/licenses/by-nc-sa/3.0/
 * -----------------------------------------------------------------------
 * Began:       2006
 * Date:        $Date: 2009-06-01 13:23:19 +0200 (Mo, 01 Jun 2009) $
 * -----------------------------------------------------------------------
 * @author      $Author: wallenium $
 * @copyright   2005-2008 Simon (Wallenium) Wallmann
 * @link        http://eqdkp-plus.com
 * @package     itemspecials
 * @version     $Rev: 5002 $
 * 
 * $Id: common.php 5002 2009-06-01 11:23:19Z wallenium $
 */

  if ( !defined('EQDKP_INC') ){
    header('HTTP/1.0 404 Not Found');exit;
  } 

  if (!isset($eqdkp_root_path) ){
    $eqdkp_root_path = './';
  }
  include_once($eqdkp_root_path . 'common.php');
 
  /**
  * Framework include
  **/
  require_once($eqdkp_root_path . 'plugins/itemspecials/include/libloader.inc.php');

  /**
  * Load the global Configuration
  */
  $sql = 'SELECT * FROM __itemspecials_config';
  if (!($settings_result = $db->query($sql))) { message_die($user->lang['is_sqlerror_config'], '', __FILE__, __LINE__, $sql); }
  while($roww = $db->fetch_record($settings_result)) {
    $conf[$roww['config_name']] = $roww['config_value'];
  }

  /**
  * Itemstats Loader
  */
  if($conf['is_ispath'] && $conf['is_ispath'] != ''){
  	define('IS_ITEMSTATS_PATH', $conf['is_ispath'].'eqdkp_itemstats.php');
  	define('IS_ITEMSTATS_PATH_ADMIN', '../'.$conf['is_ispath'].'eqdkp_itemstats.php');
  }else{
  	define('IS_ITEMSTATS_PATH', $eqdkp_root_path.'itemstats/eqdkp_itemstats.php');
  	define('IS_ITEMSTATS_PATH_ADMIN', $eqdkp_root_path.'itemstats/eqdkp_itemstats.php');
  }

  /**
  * Load the global Configuration
  */
  $rpgfolders = new MyGames();
  include_once($eqdkp_root_path . '/plugins/itemspecials/include/functions.php');
  include_once($eqdkp_root_path . '/plugins/itemspecials/include/itemstatsadditions.class.php');
  include_once($eqdkp_root_path . '/plugins/itemspecials/include/itemspecials.class.php');
  $myISclass = new ItemSpecials();
  
  /**
  * Load Class names
  */
  $sql = "SELECT COUNT(member_name) as anzahl, c.class_id, c.class_name 
            FROM __members m, __classes c
            WHERE c.class_id = m.member_class_id
            AND c.class_id <> '0'
            GROUP BY m.member_class_id
            ORDER BY c.class_name";
  $result = $db->query($sql);
  $classname = $membersperclass = array();
  while ($row = $db->fetch_record($result)){
    $classname[$row['class_id']] = $row['class_name'];
    $membersperclass[$row['class_id']] = $row['anzahl'];
  }
  
  /**
  * JQUEry
  */
  $tpl->assign_vars(array('JQUERY_INCLUDES'   => $jquery->Header()));
  
  /**
  * Set/Nonset Tables
  */
  if ($conf['nonset_set'] == 1 && !$_HMODE){
	  if (!defined('IS_NONSET_TABLE')) { define('IS_NONSET_TABLE', $conf['nonsettable']); }
	  if (!defined('IS_SET_TABLE')) { define('IS_SET_TABLE', $conf['settable']); }
	  $NSitemtable  = IS_NONSET_TABLE; // NonSet Items
	  $Sitemtable   = IS_SET_TABLE; // SetItems
	}else{
	  $NSitemtable  = '__items'; // NonSet Items
	  $Sitemtable   = '__items'; // SetItems
	}
	
	/**
  * Check requirements..
  */
  $ucReqVersions = array('php' => '4.2.0', 'eqdkp' => '0.6.2.7');
  if (version_compare(phpversion(), $ucReqVersions['php'], "<")){
  	message_die(sprintf($user->lang['is_php_version'], $ucReqVersions['php'], phpversion()));
	}
	if (version_compare(EQDKPPLUS_VERSION, $ucReqVersions['eqdkp'], "<")){
  	message_die(sprintf($user->lang['is_plus_version'], $ucReqVersions['eqdkp'], ((EQDKPPLUS_VERSION > 0) ? EQDKPPLUS_VERSION : '[non-PLUS]')));
	}
?>
