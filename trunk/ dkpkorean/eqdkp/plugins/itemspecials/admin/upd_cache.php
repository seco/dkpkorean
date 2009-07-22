<?php
 /*
 * Project:     EQdkp ItemSpecials
 * License:     Creative Commons - Attribution-Noncommercial-Share Alike 3.0 Unported
 * Link:		    http://creativecommons.org/licenses/by-nc-sa/3.0/
 * -----------------------------------------------------------------------
 * Began:       2006
 * Date:        $Date: 2009-02-28 19:38:16 +0100 (Sa, 28 Feb 2009) $
 * -----------------------------------------------------------------------
 * @author      $Author: wallenium $
 * @copyright   2005-2008 Simon (Wallenium) Wallmann
 * @link        http://eqdkp-plus.com
 * @package     itemspecials
 * @version     $Rev: 4031 $
 * 
 * $Id: upd_cache.php 4031 2009-02-28 18:38:16Z wallenium $
 */
 
// EQdkp required files/vars
define('EQDKP_INC', true);
define('IN_ADMIN', true);
define('PLUGIN', 'itemspecials');
$eqdkp_root_path = './../../../';
include_once('../include/common.php');

$isdb = new AdditionalDB('itemspecials_config');
$output = '';

// Check user permission
$user->check_auth('a_itemspecials_conf');

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
			
			$output .= '<table>
									<tr>
										<td width="48px">
										<img src="../images/cacheupdate.png" alt="update" \>
										</td><td>';
			$output .= $user->lang['is_cacheupd_txt'].'...  <img src="../images/progress.gif" alt"Loading" />';
			$output .= '<iframe src="updateitem.php?count='.$no_items.'&actual=0" width="100%" height="50" name="item_update" frameborder=0 scrolling="no">
			</iframe>
			</td></tr>
			</table>';
			echo $output;
      }else{
        die('No Itemstats detected. Please go to the config and edit the path.');
      }
?>
