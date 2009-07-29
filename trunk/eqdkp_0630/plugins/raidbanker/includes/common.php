<?php
 /*
 * Project:     EQdkp RaidBanker
 * License:     Creative Commons - Attribution-Noncommercial-Share Alike 3.0 Unported
 * Link:		    http://creativecommons.org/licenses/by-nc-sa/3.0/
 * -----------------------------------------------------------------------
 * Began:       2005
 * Date:        $Date: 2009-02-28 16:37:28 +0100 (Sa, 28 Feb 2009) $
 * -----------------------------------------------------------------------
 * @author      $Author: wallenium $
 * @copyright   2005-2008 Simon (Wallenium) Wallmann
 * @link        http://eqdkp-plus.com
 * @package     raidbanker
 * @version     $Rev: 4027 $
 * 
 * $Id: common.php 4027 2009-02-28 15:37:28Z wallenium $
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
  require_once($eqdkp_root_path . 'plugins/raidbanker/includes/libloader.inc.php');
  
  /**
  * Load the global Configuration
  */
  $sql = 'SELECT * FROM __raidbanker_config';
  if (!($settings_result = $db->query($sql))) { message_die('Could not obtain configuration data', '', __FILE__, __LINE__, $sql); }
  while($roww = $db->fetch_record($settings_result)) {
    $conf[$roww['config_name']] = $roww['config_value'];
  }
  $db->free_result($settings_result);
  
  /**
  * Money Part..
  */
  $rpgfolders = new MyGames();
  $money_file = $eqdkp_root_path.'plugins/raidbanker/games/'.$rpgfolders->GameName().'/money.config.php';
  if(!is_file($money_file)){
    // this is the default..
    $money_file = $eqdkp_root_path.'games/wow/money.config.php';
  }
  include_once($money_file);
  
  /**
  * Itemstats
  */
  if((@constant('EQDKPPLUS_VERSION') && EQDKPPLUS_VERSION >= "0.6.1.0")){
    include_once($eqdkp_root_path . 'itemstats/eqdkp_itemstats.php');
    $itemstats_plus     = true;
    $itemstats_enabled  = true;
  }else{
    if ($conf['rb_itemstats'] == 1){
      if(is_file($conf['rb_is_path'])){
        include_once($conf['rb_is_path']);
        $itemstats_plus     = false;
        $itemstats_enabled  = true;
      }
    }
  }
  include_once($eqdkp_root_path . 'plugins/raidbanker/includes/functions.php');
?>
