<?php
 /*
 * Project:     EQdkp ItemSpecials
 * License:     Creative Commons - Attribution-Noncommercial-Share Alike 3.0 Unported
 * Link:		    http://creativecommons.org/licenses/by-nc-sa/3.0/
 * -----------------------------------------------------------------------
 * Began:       2006
 * Date:        $Date: 2009-03-02 20:49:57 +0100 (Mo, 02 Mrz 2009) $
 * -----------------------------------------------------------------------
 * @author      $Author: wallenium $
 * @copyright   2005-2008 Simon (Wallenium) Wallmann
 * @link        http://eqdkp-plus.com
 * @package     itemspecials
 * @version     $Rev: 4066 $
 * 
 * $Id: updateitem.php 4066 2009-03-02 19:49:57Z wallenium $
 */
 
define('EQDKP_INC', true);
define('IN_ADMIN', true);
define('PLUGIN', 'itemspecials');
$eqdkp_root_path = './../../../';
include_once('../include/common.php');

// start output-buffer
if(function_exists('my_ob_start')){
  my_ob_start();
}else{
  ob_start();
}

echo '<link REL=StyleSheet HREF="'.$eqdkp_root_path.'itemstats/templates/itemstats.css" TYPE="text/css" MEDIA=screen />
<script type="text/javascript" src="'.$eqdkp_root_path.'itemstats/overlib/overlib.js"><!-- overLIB (c) Erik Bosrup --></script>';

$isdb = new AdditionalDB('itemspecials_config');

include_once('../games/'.$rpgfolders->GameName().'/setdata/'.$conf['locale'].'/set/Tier3.php');
include_once('../games/'.$rpgfolders->GameName().'/setdata/'.$conf['locale'].'/set/Tier4.php');
include_once('../games/'.$rpgfolders->GameName().'/setdata/'.$conf['locale'].'/set/Tier5.php');
include_once('../games/'.$rpgfolders->GameName().'/setdata/'.$conf['locale'].'/set/Tier6.php');
include_once('../games/'.$rpgfolders->GameName().'/setdata/'.$conf['locale'].'/set/TierAQ.php');
include_once('../games/'.$rpgfolders->GameName().'/setdata/'.$conf['locale'].'/special.php');

// Load the itemspecials Data!
    if ($conf['itemstats'] == true){
      include_once(IS_ITEMSTATS_PATH_ADMIN);
      $isaddition = new ItemstatsAddition();
      $is_version2 = ($isaddition->GetItemstatsVersion()) ? true : false;
      $sql = "SELECT * FROM __itemspecials_custom";
      $custom = array();
      if (!($custom_result = $db->query($sql))) { message_die('Could not obtain custom item data', '', __FILE__, __LINE__, $sql); }
        while($customrow = $db->fetch_record($custom_result)) {
          $custom[] = $customrow['item_name'];
        }

      //get the Tier Infos which are not shown directly
      $array_name1 = $tier_config["Tier6"]['data'];
      $array_name2 = $tier_config["Tier7"]['data'];
      $array_name3 = $tier_config["Tier75"]['data'];
      $merge1 = array_merge_recursive($array_name1, $array_name2, $array_name3);
      $merge1 = array_values_recursive($merge1);
      $items = array_merge_recursive($merge1, $custom);
			// count the number of items
			$no_items = count($items);

if($_GET['actual'] < $_GET['count']){
	$nextcount = $_GET['actual']+1;
	$item_stats = new ItemStats();
	$temp_itemname = $items[$_GET['actual']];
	$item_stats->updateItem($temp_itemname);
	echo '('.($_GET['actual']+1).'/'.$_GET['count'].') ';
	echo itemstats_decorate_name($temp_itemname);
	header('Refresh: 1; url=updateitem.php?count='.$_GET['count'].'&actual='.$nextcount);
	ob_get_contents();
}
		if($_GET['actual'] == $_GET['count']){
      $dataSet = array('download_cache'=> '1');
      $isdb->UpdateConfig($dataSet, $isdb->CheckDBFields('config_name'));
			echo $user->lang['is_cacheupd_complete'];
		}
}
?>
