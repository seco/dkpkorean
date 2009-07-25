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
 * $Id: templ_addtollfree.php 4031 2009-02-28 18:38:16Z wallenium $
 */
 
define('EQDKP_INC', true);
define('PLUGIN', 'itemspecials');
$eqdkp_root_path = './../../../';
include_once('../include/common.php');
$user->check_auth('a_itemspecials_conf');

if ($conf['itemstats'] == 1){
// get a list of all valid items from the itemstats database (for auto-complete)
include_once(IS_ITEMSTATS_PATH_ADMIN);
$itemlist = array();
$res = $db->query("SELECT item_name FROM " . item_cache_table . " WHERE NOT ISNULL(item_link) ORDER BY item_name");
while ($row = $db->fetch_record($res)) {
	$itemlist[] = $row['item_name'];
}
}
?>

<style type="text/css">
img { 
vertical-align: middle; 
border: 0px; 
}

BODY { 
font-family: Verdana, Tahoma, Arial;
font-size: 11px;
color: #000000;
}

tr, td { 
font-family: Verdana, Tahoma, Arial;
font-size: 11px;
color: #000000; 
}

.input { font-family: Verdana, Tahoma, Arial; font-size: 10px; color: #000000; background-color: #FFFFFF;
         border-top: 1px; border-right: 1px; border-bottom: 1px; border-left: 1px; border-color: #000000; border-style: solid; }

input.helpline1 { background-color: #EFEFEF; border-style: none; }
input.helpline2 { background-color: #FFFFFF; border-style: none; }

input.mainoption { font-family: Verdana, Tahoma, Arial; font-size: 10px; font-weight: bold; color: #CECFEF; background-color: #424563; border-top: 1px;
                   border-right: 1px; border-bottom: 1px; border-left: 1px; border-color: #CECFEF; border-style: solid; }
input.liteoption { font-family: Verdana, Tahoma, Arial; font-size: 10px; font-weight: normal; color: #CECFEF; background-color: #424563; border-top: 1px;
                   border-right: 1px; border-bottom: 1px; border-left: 1px; border-color: #CECFEF; border-style: solid; }

</style>

<script language="javascript" type="text/javascript" src="../include/javascripts/actb.js"></script>
<script language="javascript" type="text/javascript" src="../include/javascripts/common.js"></script>

<table width="100%" border="0" cellspacing="1" cellpadding="2">
  <tr>
    <td class="row1" width ="48px"><img src="../images/help.png" /></td>
    <td class="row1"><? echo $user->lang['is_add_item2']; ?></td>
  </tr>
  <tr>
</table>
<br>
<form method="post" action="tollfreeitems.php" name="sett_items" >

<table width="100%" border="0" cellspacing="1" cellpadding="2">
			<tr>
				<td width="60%" class="row2"><? echo $user->lang['is_item_name2']; ?></td>
				<td width="40%" class="row1"><input type="text"  onfocus="this.select()" id="item_name" name="item_name" size="40" AUTOCOMPLETE="OFF" /></td>
			</tr>
			<tr>
				<td width="60%" class="row2"><? echo $user->lang['is_owner']; ?></td>
				<td width="40%" class="row1">
					<select name="item_buyer" >
						<?php
						$sql = 'SELECT member_name, member_id
                FROM __members
                ORDER BY member_name';
        $result = $db->query($sql);
        while ( $row = $db->fetch_record($result) )
        {
        	echo "<option value='".$row['member_id']."'>".$row['member_name']."</option>";
        }
						?>
					</select>
				</td>
			</tr>
			<tr>
			<td align="center"></td>
			</tr>
			<tr>
			<td><center><input  type="submit" name="new_item" value="<? echo $user->lang['is_add_item-b']; ?>" class="mainoption" /></center></td>
			</tr>
		</table>
</form>

<?php
if ($conf['itemstats'] == 1){
 echo '<script type="text/javascript" language="javascript/1.2">
	var itemary = new Array(';
		for ($i=0; $i<count($itemlist); $i++) {
		$name = "'".addslashes($itemlist[$i])."'";
		$coma = $i+1 < count($itemlist) ? ',' : '';
		echo $name.$coma;
}

echo ');

function init_ac() {
		var itemname = actb(document.getElementById("item_name"),itemary);
		itemname.actb_lim = 10;
		itemname.actb_delimiter = new Array();
}

init_ac();

</script>';
}
		?>