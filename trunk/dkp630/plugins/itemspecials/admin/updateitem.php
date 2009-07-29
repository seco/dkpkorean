<?php
 /*
 * Project:     EQdkp ItemSpecials
 * License:     Creative Commons - Attribution-Noncommercial-Share Alike 3.0 Unported
 * Link:		    http://creativecommons.org/licenses/by-nc-sa/3.0/
 * -----------------------------------------------------------------------
 * Began:       2006
 * Date:        $Date: 2009-06-13 22:39:37 +0200 (Sa, 13 Jun 2009) $
 * -----------------------------------------------------------------------
 * @author      $Author: wallenium $
 * @copyright   2005-2008 Simon (Wallenium) Wallmann
 * @link        http://eqdkp-plus.com
 * @package     itemspecials
 * @version     $Rev: 5077 $
 * 
 * $Id: updateitem.php 5077 2009-06-13 20:39:37Z wallenium $
 */
 
define('EQDKP_INC', true);
define('IN_ADMIN', true);
define('PLUGIN', 'itemspecials');
$eqdkp_root_path = './../../../';
include_once('../include/common.php');

echo '<link REL=StyleSheet HREF="'.$eqdkp_root_path.'itemstats/templates/itemstats.css" TYPE="text/css" MEDIA=screen />
<script type="text/javascript" src="'.$eqdkp_root_path.'itemstats/overlib/overlib.js"><!-- overLIB (c) Erik Bosrup --></script>';

$isdb = new AdditionalDB('itemspecials_config');

$items = array();
foreach( $conf as $stupid_crap => $enabled ){
  $tuedeldue = explode('_', $stupid_crap);
  if($tuedeldue[0] == 'set' && $tuedeldue[1] == 'show'){
    if( $enabled == '1' ) {
      $myTierFile = '../games/'.$rpgfolders->GameName().'/setdata/'.$conf['locale'].'/set/'.strtolower($tuedeldue[2]).'.php';
      if(is_file($myTierFile)){
        include_once($myTierFile);
        $items = array_merge_recursive($items, array_values_recursive($tier_config[$tuedeldue[2]]['data']));
      }
    }
  }
}

// Load the itemspecials Data!
if ($conf['itemstats'] == true){
  include_once(IS_ITEMSTATS_PATH_ADMIN);
  $sql = "SELECT * FROM __itemspecials_custom";
  $custom = array();
  if (!($custom_result = $db->query($sql))) { message_die('Could not obtain custom item data', '', __FILE__, __LINE__, $sql); }
  while($customrow = $db->fetch_record($custom_result)) {
    $custom[] = $customrow['item_name'];
  }
  $items = array_merge_recursive($items, $custom);
  $no_items = count($items);

  if($in->get('actual', 0) < $in->get('count', 0)){
  	$nextcount = $in->get('actual', 0)+1;
  	$item_stats = new ItemStats();
  	$item_stats->updateItem($items[$in->get('actual', 0)]);
  	echo '('.($in->get('actual', 0)+1).'/'.$in->get('count', 0).') ';
  	echo itemstats_decorate_name($items[$in->get('actual', 0)]);
  	redirect('plugins/itemspecials/admin/updateitem.php?count='.$in->get('count', 0).'&actual='.$nextcount);
  }
	if($in->get('actual', 0) == $in->get('count', 0) && $in->get('count', 0) > 0){
    $dataSet = array('download_cache'=> '1');
    $isdb->UpdateConfig($dataSet, $isdb->CheckDBFields('config_name'));
		echo $user->lang['is_cacheupd_complete'];
	}
}
?>
