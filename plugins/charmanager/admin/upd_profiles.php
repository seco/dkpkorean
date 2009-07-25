<?php
 /*
 * Project:     EQdkp CharManager 1
 * License:     Creative Commons - Attribution-Noncommercial-Share Alike 3.0 Unported
 * Link:		    http://creativecommons.org/licenses/by-nc-sa/3.0/
 * -----------------------------------------------------------------------
 * Began:       2006
 * Date:        $Date: 2008-08-17 01:47:56 +0200 (So, 17 Aug 2008) $
 * -----------------------------------------------------------------------
 * @author      $Author: wallenium $
 * @copyright   2005-2008 Simon (Wallenium) Wallmann
 * @link        http://eqdkp-plus.com
 * @package     charmanager
 * @version     $Rev: 2560 $
 * 
 * $Id: upd_profiles.php 2560 2008-08-16 23:47:56Z wallenium $
 */
 
// EQdkp required files/vars
define('EQDKP_INC', true);
define('IN_ADMIN', true);
define('PLUGIN', 'charmanager');
$eqdkp_root_path = './../../../';
include_once('../include/common.php');
include_once('../include/functions.php');

$output = "
<html>
<head>

<script>
function closeWindow()
{
		parent.jBox.close2('UCCacheWindow');
}</script>
<meta http-equiv='Content-Type' content='text/html; charset=".$user->lang['ENCODING']."' />
";

$user->check_auth('a_charmanager_config');

if($_GET['step'] == 2){
// Check user permission

      $sql = "SELECT member_name FROM " . MEMBERS_TABLE ." ORDER BY member_name";
      $members = array();
      $ii = 0;
      if (!($result = $db->query($sql))) { message_die('Could not obtain custom item data', '', __FILE__, __LINE__, $sql); }
        while($row = $db->fetch_record($result)) {
          $members[$ii] = $row['member_name'];
          $ii++;
        }
			
			$output .= '<span id="loadingtext" style="display:inline;"><table>
									<tr>
										<td width="48px">
										<img src="../images/cacheupdate.png" alt="update" \>
										</td><td>';
			$output .= ''.$user->lang['uc_profile_updater'].'...  <img src="../images/progress.gif" alt="'.$user->lang['uc_ajax_loading'].'" />';
			$output .= '<iframe src="../extensions/import/'.$_POST['list'].'/updateprofile.php?count='.$ii.'&actual=0" width="100%" height="50" name="item_update" frameborder=0 scrolling="no">
			</iframe>
			</td></tr>
			</table></span>';
			echo $output;
}else{
	$CharTools = new CharTools();

include_once('../extensions/import/import_list.php');
	$hmtlout .= ' <form name="iplugin" method="post" action="upd_profiles.php?step=2">
								<select name="list" size="1"">';
foreach ($importer_list as $name => $link){
	$tmpurlchk = CheckUptime($importer_updcheck[$link]);
	$hmtlout .= '<option value="'.$link.'">'.$name.' ['.$tmpurlchk.']</option>';
}
	$hmtlout .= '</select> ';
	$hmtlout .= '<input type="submit" name="submiti" value="'.$user->lang['uc_import_forw'].'" class="mainoption"  
								/>';
  $hmtlout .= '</form>';
	echo $hmtlout;
}
?>
