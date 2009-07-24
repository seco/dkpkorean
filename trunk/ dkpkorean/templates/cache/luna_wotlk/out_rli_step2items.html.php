<?php
if ($this->security()) {
echo '<script language="JavaScript" type="text/javascript">

function closeWindow(){jBox.close2(\'UCCacheWindow\');}

function RenameItems(langto, langfrom, count){
  var boxUCCacheWindow = jBox.open(\'UCCacheWindow\',\'iframe\',\'renameitems.php?actual=0&langto=\'+langto+\'&langfrom=\'+langfrom+\'&count=\'+count,\'Rename Items\',\'width=440,height=330,center=true,minimizable=true,resize=true,draggable=true,model=false,scrolling=true\');
}
</script>
<form method="post" action="' . ((isset($this->_tpldata['.'][0]['F_PARSE'])) ? $this->_tpldata['.'][0]['F_PARSE'] : '') . '" name="post">
	<table width="100%" border="0" cellspacing="1" cellpadding="2">
		<tr>
			<th colspan="4">' . ((isset($this->_tpldata['.'][0]['L_RAIDS'])) ? $this->_tpldata['.'][0]['L_RAIDS'] : ((isset($user->lang['RAIDS'])) ? $user->lang['RAIDS'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'RAIDS'))) . ' 	}')) . '</th>
		</tr>
      ';// BEGIN raids
$_raids_count = (isset($this->_tpldata['raids.'])) ?  sizeof($this->_tpldata['raids.']) : 0;
if ($_raids_count) {
for ($_raids_i = 0; $_raids_i < $_raids_count; $_raids_i++)
{
echo '
      <tr>
      	<th colspan="4">' . ((isset($this->_tpldata['raids.'][$_raids_i]['COUNT'])) ? $this->_tpldata['raids.'][$_raids_i]['COUNT'] : '') . '. ' . ((isset($this->_tpldata['.'][0]['L_RAID'])) ? $this->_tpldata['.'][0]['L_RAID'] : ((isset($user->lang['RAID'])) ? $user->lang['RAID'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'RAID'))) . ' 	}')) . ': </th>
      </tr>
      <tr class="row1">
      	<td colspan="2">' . ((isset($this->_tpldata['.'][0]['L_START'])) ? $this->_tpldata['.'][0]['L_START'] : ((isset($user->lang['START'])) ? $user->lang['START'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'START'))) . ' 	}')) . ': ' . ((isset($this->_tpldata['raids.'][$_raids_i]['START_DATE'])) ? $this->_tpldata['raids.'][$_raids_i]['START_DATE'] : '') . ' ' . ((isset($this->_tpldata['raids.'][$_raids_i]['START_TIME'])) ? $this->_tpldata['raids.'][$_raids_i]['START_TIME'] : '') . '</td>
        <td colspan="2">' . ((isset($this->_tpldata['.'][0]['L_END'])) ? $this->_tpldata['.'][0]['L_END'] : ((isset($user->lang['END'])) ? $user->lang['END'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'END'))) . ' 	}')) . ': ' . ((isset($this->_tpldata['raids.'][$_raids_i]['END_DATE'])) ? $this->_tpldata['raids.'][$_raids_i]['END_DATE'] : '') . ' ' . ((isset($this->_tpldata['raids.'][$_raids_i]['END_TIME'])) ? $this->_tpldata['raids.'][$_raids_i]['END_TIME'] : '') . '</td>
      </tr>
      <tr class="row2">
        <td colspan="2">' . ((isset($this->_tpldata['.'][0]['L_EVENT'])) ? $this->_tpldata['.'][0]['L_EVENT'] : ((isset($user->lang['EVENT'])) ? $user->lang['EVENT'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'EVENT'))) . ' 	}')) . ': ' . ((isset($this->_tpldata['raids.'][$_raids_i]['EVENT'])) ? $this->_tpldata['raids.'][$_raids_i]['EVENT'] : '') . '</td>
        <td colspan="2">' . ((isset($this->_tpldata['.'][0]['L_VALUE'])) ? $this->_tpldata['.'][0]['L_VALUE'] : ((isset($user->lang['VALUE'])) ? $user->lang['VALUE'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'VALUE'))) . ' 	}')) . ': ' . ((isset($this->_tpldata['raids.'][$_raids_i]['VALUE'])) ? $this->_tpldata['raids.'][$_raids_i]['VALUE'] : '') . '</td>
      </tr>
      <tr class="row1">
        <td colspan="4">' . ((isset($this->_tpldata['.'][0]['L_NOTE'])) ? $this->_tpldata['.'][0]['L_NOTE'] : ((isset($user->lang['NOTE'])) ? $user->lang['NOTE'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'NOTE'))) . ' 	}')) . ': ' . ((isset($this->_tpldata['raids.'][$_raids_i]['NOTE'])) ? $this->_tpldata['raids.'][$_raids_i]['NOTE'] : '') . '</td>
      </tr>
      <tr class="row2">
        <td colspan="4">' . ((isset($this->_tpldata['.'][0]['L_BOSSKILLS'])) ? $this->_tpldata['.'][0]['L_BOSSKILLS'] : ((isset($user->lang['BOSSKILLS'])) ? $user->lang['BOSSKILLS'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'BOSSKILLS'))) . ' 	}')) . ':</td>
      </tr>
      <tr class="row1">
      	<td width="33%">' . ((isset($this->_tpldata['.'][0]['L_NAME'])) ? $this->_tpldata['.'][0]['L_NAME'] : ((isset($user->lang['NAME'])) ? $user->lang['NAME'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'NAME'))) . ' 	}')) . '</td><td colspan="2" width="33%">' . ((isset($this->_tpldata['.'][0]['L_TIME'])) ? $this->_tpldata['.'][0]['L_TIME'] : ((isset($user->lang['TIME'])) ? $user->lang['TIME'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'TIME'))) . ' 	}')) . '</td><td width="33%">' . ((isset($this->_tpldata['.'][0]['L_VALUE'])) ? $this->_tpldata['.'][0]['L_VALUE'] : ((isset($user->lang['VALUE'])) ? $user->lang['VALUE'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'VALUE'))) . ' 	}')) . '</td>
      </tr>
      ' . ((isset($this->_tpldata['raids.'][$_raids_i]['BOSSKILLS'])) ? $this->_tpldata['raids.'][$_raids_i]['BOSSKILLS'] : '') . '
	  ';}}
// END raids
echo '
	</table>
	<table width="100%" border="0" cellspacing="1" cellpadding="2">
	  <tr>
	  	<th colspan="7">' . ((isset($this->_tpldata['.'][0]['L_MEMBERS'])) ? $this->_tpldata['.'][0]['L_MEMBERS'] : ((isset($user->lang['MEMBERS'])) ? $user->lang['MEMBERS'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'MEMBERS'))) . ' 	}')) . '</th>
	  </tr>
	  <tr>
	  	<th width="150">' . ((isset($this->_tpldata['.'][0]['L_MEMBER'])) ? $this->_tpldata['.'][0]['L_MEMBER'] : ((isset($user->lang['MEMBER'])) ? $user->lang['MEMBER'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'MEMBER'))) . ' 	}')) . '</th>
	  	<th>' . ((isset($this->_tpldata['.'][0]['L_RAIDS'])) ? $this->_tpldata['.'][0]['L_RAIDS'] : ((isset($user->lang['RAIDS'])) ? $user->lang['RAIDS'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'RAIDS'))) . ' 	}')) . '</th>
	  	';// IF S_CONF_ADJ
if ($this->_tpldata['.'][0]['S_CONF_ADJ']) { 
echo '
	  	<th>' . ((isset($this->_tpldata['.'][0]['L_T_DKP'])) ? $this->_tpldata['.'][0]['L_T_DKP'] : ((isset($user->lang['T_DKP'])) ? $user->lang['T_DKP'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'T_DKP'))) . ' 	}')) . '</th>
	  	<th>' . ((isset($this->_tpldata['.'][0]['L_B_DKP'])) ? $this->_tpldata['.'][0]['L_B_DKP'] : ((isset($user->lang['B_DKP'])) ? $user->lang['B_DKP'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'B_DKP'))) . ' 	}')) . '</th>
	  	';// ENDIF
}
// IF S_ATT_BEGIN
if ($this->_tpldata['.'][0]['S_ATT_BEGIN']) { 
echo '<th>' . ((isset($this->_tpldata['.'][0]['L_START'])) ? $this->_tpldata['.'][0]['L_START'] : ((isset($user->lang['START'])) ? $user->lang['START'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'START'))) . ' 	}')) . '</th>';// ENDIF
}
// IF S_ATT_END
if ($this->_tpldata['.'][0]['S_ATT_END']) { 
echo '<th>' . ((isset($this->_tpldata['.'][0]['L_END'])) ? $this->_tpldata['.'][0]['L_END'] : ((isset($user->lang['END'])) ? $user->lang['END'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'END'))) . ' 	}')) . '</th>';// ENDIF
}
echo '
	  </tr>

	  ';// BEGIN player
$_player_count = (isset($this->_tpldata['player.'])) ?  sizeof($this->_tpldata['player.']) : 0;
if ($_player_count) {
for ($_player_i = 0; $_player_i < $_player_count; $_player_i++)
{
echo '
      <tr class="' . ((isset($this->_tpldata['player.'][$_player_i]['ZAHL'])) ? $this->_tpldata['player.'][$_player_i]['ZAHL'] : '') . '">
	     <td width="150">' . ((isset($this->_tpldata['player.'][$_player_i]['MITGLIED'])) ? $this->_tpldata['player.'][$_player_i]['MITGLIED'] : '') . ' ' . ((isset($this->_tpldata['player.'][$_player_i]['ALIAS'])) ? $this->_tpldata['player.'][$_player_i]['ALIAS'] : '') . '</td>
	     <td>' . ((isset($this->_tpldata['player.'][$_player_i]['RAID_LIST'])) ? $this->_tpldata['player.'][$_player_i]['RAID_LIST'] : '') . '</td>
	     ';// IF S_CONF_ADJ
if ($this->_tpldata['.'][0]['S_CONF_ADJ']) { 
echo '
	     <td align="right">' . ((isset($this->_tpldata['player.'][$_player_i]['ZEITDKP'])) ? $this->_tpldata['player.'][$_player_i]['ZEITDKP'] : '') . '</td>
	     <td align="right">' . ((isset($this->_tpldata['player.'][$_player_i]['BOSSDKP'])) ? $this->_tpldata['player.'][$_player_i]['BOSSDKP'] : '') . '</td>
	     ';// ENDIF
}
// IF S_ATT_BEGIN
if ($this->_tpldata['.'][0]['S_ATT_BEGIN']) { 
echo '
	     	<td align="right">' . ((isset($this->_tpldata['player.'][$_player_i]['ATT_BEGIN'])) ? $this->_tpldata['player.'][$_player_i]['ATT_BEGIN'] : '') . '</td>
	     ';// ENDIF
}
// IF S_ATT_END
if ($this->_tpldata['.'][0]['S_ATT_END']) { 
echo '
	     	<td align="right">' . ((isset($this->_tpldata['player.'][$_player_i]['ATT_END'])) ? $this->_tpldata['player.'][$_player_i]['ATT_END'] : '') . '</td>
	     ';// ENDIF
}
echo '
	  </tr>
      ';}}
// END player
echo '
    </table>
	<table width="100%" border="0" cellspacing="1" cellpadding="2" id="item">
      <tr>
      	<th colspan="2">' . ((isset($this->_tpldata['.'][0]['L_ITEM'])) ? $this->_tpldata['.'][0]['L_ITEM'] : ((isset($user->lang['ITEM'])) ? $user->lang['ITEM'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'ITEM'))) . ' 	}')) . '</th>
      	<th>' . ((isset($this->_tpldata['.'][0]['L_ITEM_ID'])) ? $this->_tpldata['.'][0]['L_ITEM_ID'] : ((isset($user->lang['ITEM_ID'])) ? $user->lang['ITEM_ID'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'ITEM_ID'))) . ' 	}')) . '</th>
      	<th>' . ((isset($this->_tpldata['.'][0]['L_LOOTER'])) ? $this->_tpldata['.'][0]['L_LOOTER'] : ((isset($user->lang['LOOTER'])) ? $user->lang['LOOTER'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'LOOTER'))) . ' 	}')) . '</th>
        <th>' . ((isset($this->_tpldata['.'][0]['L_RAID'])) ? $this->_tpldata['.'][0]['L_RAID'] : ((isset($user->lang['RAID'])) ? $user->lang['RAID'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'RAID'))) . ' 	}')) . '</th>
      	<th>' . ((isset($this->_tpldata['.'][0]['L_COST'])) ? $this->_tpldata['.'][0]['L_COST'] : ((isset($user->lang['COST'])) ? $user->lang['COST'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'COST'))) . ' 	}')) . '</th>
      </tr>
      ';// BEGIN loots
$_loots_count = (isset($this->_tpldata['loots.'])) ?  sizeof($this->_tpldata['loots.']) : 0;
if ($_loots_count) {
for ($_loots_i = 0; $_loots_i < $_loots_count; $_loots_i++)
{
echo '
      <tr class="' . ((isset($this->_tpldata['loots.'][$_loots_i]['CLASS'])) ? $this->_tpldata['loots.'][$_loots_i]['CLASS'] : '') . '">
        <td width="40px"><img src="./../../../images/global/delete.png" alt="' . ((isset($this->_tpldata['.'][0]['L_DELETE'])) ? $this->_tpldata['.'][0]['L_DELETE'] : ((isset($user->lang['DELETE'])) ? $user->lang['DELETE'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'DELETE'))) . ' 	}')) . '"><input type="checkbox" name="loots[' . ((isset($this->_tpldata['loots.'][$_loots_i]['KEY'])) ? $this->_tpldata['loots.'][$_loots_i]['KEY'] : '') . '][delete]" value="true" title="' . ((isset($this->_tpldata['.'][0]['L_DELETE'])) ? $this->_tpldata['.'][0]['L_DELETE'] : ((isset($user->lang['DELETE'])) ? $user->lang['DELETE'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'DELETE'))) . ' 	}')) . '" /></td>
      	<td><input type="text" name="loots[' . ((isset($this->_tpldata['loots.'][$_loots_i]['KEY'])) ? $this->_tpldata['loots.'][$_loots_i]['KEY'] : '') . '][name]" class="maininput" value="' . ((isset($this->_tpldata['loots.'][$_loots_i]['LOOTNAME'])) ? $this->_tpldata['loots.'][$_loots_i]['LOOTNAME'] : '') . '" size="40" ' . ((isset($this->_tpldata['loots.'][$_loots_i]['READONLY'])) ? $this->_tpldata['loots.'][$_loots_i]['READONLY'] : '') . ' /></td>
      	<td><input type="text" name="loots[' . ((isset($this->_tpldata['loots.'][$_loots_i]['KEY'])) ? $this->_tpldata['loots.'][$_loots_i]['KEY'] : '') . '][id]" class="maininput" value="' . ((isset($this->_tpldata['loots.'][$_loots_i]['ITEMID'])) ? $this->_tpldata['loots.'][$_loots_i]['ITEMID'] : '') . '" /></td>
      	<td>' . ((isset($this->_tpldata['loots.'][$_loots_i]['LOOTER'])) ? $this->_tpldata['loots.'][$_loots_i]['LOOTER'] : '') . '</td>
      	<td>' . ((isset($this->_tpldata['loots.'][$_loots_i]['RAID'])) ? $this->_tpldata['loots.'][$_loots_i]['RAID'] : '') . '</td>
      	<td><input type="text" name="loots[' . ((isset($this->_tpldata['loots.'][$_loots_i]['KEY'])) ? $this->_tpldata['loots.'][$_loots_i]['KEY'] : '') . '][dkp]" value="' . ((isset($this->_tpldata['loots.'][$_loots_i]['LOOTDKP'])) ? $this->_tpldata['loots.'][$_loots_i]['LOOTDKP'] : '') . '" class="maininput" size="7" /></td>
      </tr>
      ';}}
// END loots
echo '
      <tr class="row2">
      	<td colspan="6">
      		&nbsp;<input type="button" size="20" name="rename" value="' . ((isset($this->_tpldata['.'][0]['L_TRANSLATE_ITEMS'])) ? $this->_tpldata['.'][0]['L_TRANSLATE_ITEMS'] : ((isset($user->lang['TRANSLATE_ITEMS'])) ? $user->lang['TRANSLATE_ITEMS'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'TRANSLATE_ITEMS'))) . ' 	}')) . '" class="mainoption" onclick="javascript:RenameItems(\'' . ((isset($this->_tpldata['.'][0]['LANGTO'])) ? $this->_tpldata['.'][0]['LANGTO'] : '') . '\', \'' . ((isset($this->_tpldata['.'][0]['LANGFROM'])) ? $this->_tpldata['.'][0]['LANGFROM'] : '') . '\', \'' . ((isset($this->_tpldata['.'][0]['MAXCOUNT'])) ? $this->_tpldata['.'][0]['MAXCOUNT'] : '') . '\')" />
      		(' . ((isset($this->_tpldata['.'][0]['LANGFROM'])) ? $this->_tpldata['.'][0]['LANGFROM'] : '') . ' => ' . ((isset($this->_tpldata['.'][0]['LANGTO'])) ? $this->_tpldata['.'][0]['LANGTO'] : '') . ')&nbsp;&nbsp;' . ((isset($this->_tpldata['.'][0]['L_TRANSLATE_ITEMS_TIP'])) ? $this->_tpldata['.'][0]['L_TRANSLATE_ITEMS_TIP'] : ((isset($user->lang['TRANSLATE_ITEMS_TIP'])) ? $user->lang['TRANSLATE_ITEMS_TIP'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'TRANSLATE_ITEMS_TIP'))) . ' 	}')) . '
      	</td>
      </tr>
	  <tr class="row1">
	  	<td colspan="2"><select name="items_add">
	  		  <option value="0">0..' . ((isset($this->_tpldata['.'][0]['L_ITEMS_ADD'])) ? $this->_tpldata['.'][0]['L_ITEMS_ADD'] : ((isset($user->lang['ITEMS_ADD'])) ? $user->lang['ITEMS_ADD'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'ITEMS_ADD'))) . ' 	}')) . '</option>
	  		  <option value="1">1..' . ((isset($this->_tpldata['.'][0]['L_ITEM_ADD'])) ? $this->_tpldata['.'][0]['L_ITEM_ADD'] : ((isset($user->lang['ITEM_ADD'])) ? $user->lang['ITEM_ADD'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'ITEM_ADD'))) . ' 	}')) . '</option>
	  		  <option value="2">2..' . ((isset($this->_tpldata['.'][0]['L_ITEMS_ADD'])) ? $this->_tpldata['.'][0]['L_ITEMS_ADD'] : ((isset($user->lang['ITEMS_ADD'])) ? $user->lang['ITEMS_ADD'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'ITEMS_ADD'))) . ' 	}')) . '</option>
	  		  <option value="3">3..' . ((isset($this->_tpldata['.'][0]['L_ITEMS_ADD'])) ? $this->_tpldata['.'][0]['L_ITEMS_ADD'] : ((isset($user->lang['ITEMS_ADD'])) ? $user->lang['ITEMS_ADD'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'ITEMS_ADD'))) . ' 	}')) . '</option>
	  		  <option value="4">4..' . ((isset($this->_tpldata['.'][0]['L_ITEMS_ADD'])) ? $this->_tpldata['.'][0]['L_ITEMS_ADD'] : ((isset($user->lang['ITEMS_ADD'])) ? $user->lang['ITEMS_ADD'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'ITEMS_ADD'))) . ' 	}')) . '</option>
	  		  <option value="5">5..' . ((isset($this->_tpldata['.'][0]['L_ITEMS_ADD'])) ? $this->_tpldata['.'][0]['L_ITEMS_ADD'] : ((isset($user->lang['ITEMS_ADD'])) ? $user->lang['ITEMS_ADD'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'ITEMS_ADD'))) . ' 	}')) . '</option>
	  		</select>
	  	</td>
	  	<td colspan="5">&nbsp;</td>
	  </tr>
      <tr>
      	<th colspan="6"><input type="hidden" name="rest" value="' . ((isset($this->_tpldata['.'][0]['DATA'])) ? $this->_tpldata['.'][0]['DATA'] : '') . '" />
      					<input type="hidden" name="add_item_data" value=\'' . ((isset($this->_tpldata['.'][0]['ADD_ITEM_DATA'])) ? $this->_tpldata['.'][0]['ADD_ITEM_DATA'] : '') . '\' />
      					<input type="submit" name="checkraid" value="' . ((isset($this->_tpldata['.'][0]['L_BACK2RAID'])) ? $this->_tpldata['.'][0]['L_BACK2RAID'] : ((isset($user->lang['BACK2RAID'])) ? $user->lang['BACK2RAID'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'BACK2RAID'))) . ' 	}')) . '" class="mainoption" />
      					<input type="submit" name="checkmem" value="' . ((isset($this->_tpldata['.'][0]['L_BACK2MEM'])) ? $this->_tpldata['.'][0]['L_BACK2MEM'] : ((isset($user->lang['BACK2MEM'])) ? $user->lang['BACK2MEM'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'BACK2MEM'))) . ' 	}')) . '" class="mainoption" />
      					' . ((isset($this->_tpldata['.'][0]['NEXT_BUTTON'])) ? $this->_tpldata['.'][0]['NEXT_BUTTON'] : '') . '
	  					<input type="submit" name="checkitem" value="' . ((isset($this->_tpldata['.'][0]['L_UPD'])) ? $this->_tpldata['.'][0]['L_UPD'] : ((isset($user->lang['UPD'])) ? $user->lang['UPD'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'UPD'))) . ' 	}')) . '" class="mainoption" />
      	</th>
      </tr>
    </table>
</form>';
}
?>