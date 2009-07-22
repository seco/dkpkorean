<?php
 /*
 * Project:     EQdkp ItemSpecials
 * License:     Creative Commons - Attribution-Noncommercial-Share Alike 3.0 Unported
 * Link:		    http://creativecommons.org/licenses/by-nc-sa/3.0/
 * -----------------------------------------------------------------------
 * Began:       2006
 * Date:        $Date: 2009-03-02 21:36:50 +0100 (Mo, 02 Mrz 2009) $
 * -----------------------------------------------------------------------
 * @author      $Author: wallenium $
 * @copyright   2005-2008 Simon (Wallenium) Wallmann
 * @link        http://eqdkp-plus.com
 * @package     itemspecials
 * @version     $Rev: 4068 $
 * 
 * $Id: common.php 4068 2009-03-02 20:36:50Z wallenium $
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
  $sql = "SELECT class_id, class_name
      		FROM __classes
      		WHERE class_id <> '0'
      		GROUP BY class_name
      		ORDER BY class_name";
  $result = $db->query($sql);
  $classname = array();
  while ($row = $db->fetch_record($result)){
    $classname[$row['class_id']] = $row['class_name'];
  }
  
  /**
  * JQUEry
  */
  $tpl->assign_vars(array('JQUERY_INCLUDES'   => $jquery->Header()));
?>
