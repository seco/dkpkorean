<?php
 /*
 * Project:     EQdkp ItemSpecials
 * License:     Creative Commons - Attribution-Noncommercial-Share Alike 3.0 Unported
 * Link:		    http://creativecommons.org/licenses/by-nc-sa/3.0/
 * -----------------------------------------------------------------------
 * Began:       2006
 * Date:        $Date: 2009-04-25 13:57:42 +0200 (Sa, 25 Apr 2009) $
 * -----------------------------------------------------------------------
 * @author      $Author: wallenium $
 * @copyright   2005-2008 Simon (Wallenium) Wallmann
 * @link        http://eqdkp-plus.com
 * @package     itemspecials
 * @version     $Rev: 4654 $
 * 
 * $Id: upd_cache.php 4654 2009-04-25 11:57:42Z wallenium $
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
    if ($conf['itemstats'] == true && $conf_plus['pk_itemstats'] == 1){
      include_once(IS_ITEMSTATS_PATH_ADMIN);
      $sql = "SELECT * FROM __itemspecials_custom";
      $custom = array();
      if (!($custom_result = $db->query($sql))) { message_die('Could not obtain custom item data', '', __FILE__, __LINE__, $sql); }
      while($customrow = $db->fetch_record($custom_result)) {
        $custom[] = $customrow['item_name'];
      }
      $items = array_merge_recursive($items, $custom);
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
			}elseif($conf['itemstats'] == true && $conf_plus['pk_itemstats'] != 1){
			 die($user->lang['is_plus_itemstats_off']);
      }else{
        die($user->lang['is_itemstats_nopath']);
      }
?>
