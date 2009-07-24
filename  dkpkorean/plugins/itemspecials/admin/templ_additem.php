<?php
 /*
 * Project:     EQdkp ItemSpecials
 * License:     Creative Commons - Attribution-Noncommercial-Share Alike 3.0 Unported
 * Link:		    http://creativecommons.org/licenses/by-nc-sa/3.0/
 * -----------------------------------------------------------------------
 * Began:       2006
 * Date:        $Date: 2008-11-09 14:02:22 +0100 (So, 09 Nov 2008) $
 * -----------------------------------------------------------------------
 * @author      $Author: wallenium $
 * @copyright   2005-2008 Simon (Wallenium) Wallmann
 * @link        http://eqdkp-plus.com
 * @package     itemspecials
 * @version     $Rev: 3033 $
 * 
 * $Id: templ_additem.php 3033 2008-11-09 13:02:22Z wallenium $
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

<script type="text/javascript">
 
  function check_form() {
var blubb = true;
if (!check_empty(document.sett_customs.itemname.value))
{ blubb = false; alert('<?php echo $user->lang['is_itemname_missing']; ?>'); }
return blubb;
}

  function submit_form() {
   	if (check_form())
   {	document.sett_customs.submit();}
  }
 
  function check_empty(text) {
return (text.length > 0); // returns false if empty
}

</script>

<script language="javascript" type="text/javascript" src="../include/javascripts/actb.js"></script>
<script language="javascript" type="text/javascript" src="../include/javascripts/common.js"></script>

<table width="100%" border="0" cellspacing="1" cellpadding="2">
  <tr>
    <td class="row1" width ="48px"><img src="../images/help.png" /></td>
    <td class="row1"><? echo $user->lang['is_add_item']; ?></td>
  </tr>
  <tr>
</table>
<br>
<form method="post" action="settings.php" name="sett_customs" onSubmit="return validate_form()">
<table width="100%" border="0" cellspacing="1" cellpadding="2">
			<tr>
				<td width="60%" class="row2"><? echo $user->lang['is_item_name']; ?></td>
				<td width="40%" class="row1"><input type="text" onfocus="this.select()" id="itemname" name="itemname" size="40" /></td>
			</tr>
			<tr>
			<td align="center"></td>
			</tr>
			<tr>
			<td><center><input  type="button" onclick="submit_form();" name="setitnow" value="<? echo $user->lang['is_add_item-b']; ?>" class="mainoption" /></center></td>
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
		var itemname = actb(document.getElementById("itemname"),itemary);
		itemname.actb_lim = 10;
		itemname.actb_delimiter = new Array();
}

init_ac();

</script>';
}
		?>