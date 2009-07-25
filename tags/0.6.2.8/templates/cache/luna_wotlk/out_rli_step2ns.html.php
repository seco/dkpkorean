<?php
if ($this->security()) {
echo '<form action="' . ((isset($this->_tpldata['.'][0]['F_PARSE'])) ? $this->_tpldata['.'][0]['F_PARSE'] : '') . '" name="post" method="post">
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
        <td colspan="2">' . ((isset($this->_tpldata['.'][0]['L_VALUE'])) ? $this->_tpldata['.'][0]['L_VALUE'] : ((isset($user->lang['VALUE'])) ? $user->lang['VALUE'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'VALUE'))) . ' 	}')) . ' (' . ((isset($this->_tpldata['.'][0]['FORMEL'])) ? $this->_tpldata['.'][0]['FORMEL'] : '') . '): <input type="text" name="raids[' . ((isset($this->_tpldata['raids.'][$_raids_i]['COUNT'])) ? $this->_tpldata['raids.'][$_raids_i]['COUNT'] : '') . '][value]" value="' . ((isset($this->_tpldata['raids.'][$_raids_i]['VALUE'])) ? $this->_tpldata['raids.'][$_raids_i]['VALUE'] : '') . '" class="maininput" /> (' . ((isset($this->_tpldata['raids.'][$_raids_i]['FORMUL'])) ? $this->_tpldata['raids.'][$_raids_i]['FORMUL'] : '') . ')
        <input type="hidden" name="ns" value="true" /></td>
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
	<table width="100%" border="0" cellspacing="1" cellpadding="1">
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
	<table width="100%" border="0" cellspacing="1" cellpadding="1" id="item">
      <tr>
      	<th>' . ((isset($this->_tpldata['.'][0]['L_ITEM'])) ? $this->_tpldata['.'][0]['L_ITEM'] : ((isset($user->lang['ITEM'])) ? $user->lang['ITEM'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'ITEM'))) . ' 	}')) . '</th>
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
      	<td>' . ((isset($this->_tpldata['loots.'][$_loots_i]['LOOTNAME'])) ? $this->_tpldata['loots.'][$_loots_i]['LOOTNAME'] : '') . '</td>
      	<td>' . ((isset($this->_tpldata['loots.'][$_loots_i]['LOOTER'])) ? $this->_tpldata['loots.'][$_loots_i]['LOOTER'] : '') . '</td>
      	<td>' . ((isset($this->_tpldata['loots.'][$_loots_i]['RAID'])) ? $this->_tpldata['loots.'][$_loots_i]['RAID'] : '') . '</td>
      	<td>' . ((isset($this->_tpldata['loots.'][$_loots_i]['LOOTDKP'])) ? $this->_tpldata['loots.'][$_loots_i]['LOOTDKP'] : '') . '</td>
      </tr>
      ';}}
// END loots
echo '
    </table>
	<table width="100%" cellspacing="1" cellpadding="1" border="0" id="adj">
	';// IF S_NULL_SUM_2
if ($this->_tpldata['.'][0]['S_NULL_SUM_2']) { 
echo '
	  <tr>
	  	<th colspan="5">' . ((isset($this->_tpldata['.'][0]['L_ADJS'])) ? $this->_tpldata['.'][0]['L_ADJS'] : ((isset($user->lang['ADJS'])) ? $user->lang['ADJS'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'ADJS'))) . ' 	}')) . '</th>
	  </tr>
	  <tr>
	  	<th width="40px">&nbsp;</th><th>' . ((isset($this->_tpldata['.'][0]['L_MEMBER'])) ? $this->_tpldata['.'][0]['L_MEMBER'] : ((isset($user->lang['MEMBER'])) ? $user->lang['MEMBER'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'MEMBER'))) . ' 	}')) . '</th><th>' . ((isset($this->_tpldata['.'][0]['L_EVENT'])) ? $this->_tpldata['.'][0]['L_EVENT'] : ((isset($user->lang['EVENT'])) ? $user->lang['EVENT'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'EVENT'))) . ' 	}')) . '</th><th>' . ((isset($this->_tpldata['.'][0]['L_NOTE'])) ? $this->_tpldata['.'][0]['L_NOTE'] : ((isset($user->lang['NOTE'])) ? $user->lang['NOTE'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'NOTE'))) . ' 	}')) . '</th><th>' . ((isset($this->_tpldata['.'][0]['L_VALUE'])) ? $this->_tpldata['.'][0]['L_VALUE'] : ((isset($user->lang['VALUE'])) ? $user->lang['VALUE'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'VALUE'))) . ' 	}')) . '</th>
	  </tr>
	  ';// BEGIN adjs
$_adjs_count = (isset($this->_tpldata['adjs.'])) ?  sizeof($this->_tpldata['adjs.']) : 0;
if ($_adjs_count) {
for ($_adjs_i = 0; $_adjs_i < $_adjs_count; $_adjs_i++)
{
echo '
	  <tr class="' . ((isset($this->_tpldata['adjs.'][$_adjs_i]['CLASS'])) ? $this->_tpldata['adjs.'][$_adjs_i]['CLASS'] : '') . '">
	  	<td align="right"><img src="./../../../images/global/delete.png" alt="' . ((isset($this->_tpldata['.'][0]['L_DELETE'])) ? $this->_tpldata['.'][0]['L_DELETE'] : ((isset($user->lang['DELETE'])) ? $user->lang['DELETE'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'DELETE'))) . ' 	}')) . '"><input type="checkbox" name="adjs[' . ((isset($this->_tpldata['adjs.'][$_adjs_i]['KEY'])) ? $this->_tpldata['adjs.'][$_adjs_i]['KEY'] : '') . '][delete]" value="true" title="' . ((isset($this->_tpldata['.'][0]['L_DELETE'])) ? $this->_tpldata['.'][0]['L_DELETE'] : ((isset($user->lang['DELETE'])) ? $user->lang['DELETE'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'DELETE'))) . ' 	}')) . '" /></td>
	  	<td>' . ((isset($this->_tpldata['adjs.'][$_adjs_i]['MEMBER'])) ? $this->_tpldata['adjs.'][$_adjs_i]['MEMBER'] : '') . '</td>
	  	<td>' . ((isset($this->_tpldata['adjs.'][$_adjs_i]['EVENT'])) ? $this->_tpldata['adjs.'][$_adjs_i]['EVENT'] : '') . '</td>
	  	<td><input type="text" name="adjs[' . ((isset($this->_tpldata['adjs.'][$_adjs_i]['KEY'])) ? $this->_tpldata['adjs.'][$_adjs_i]['KEY'] : '') . '][reason]" value="' . ((isset($this->_tpldata['adjs.'][$_adjs_i]['NOTE'])) ? $this->_tpldata['adjs.'][$_adjs_i]['NOTE'] : '') . '" class="maininput" /></td>
	  	<td><input type="text" name="adjs[' . ((isset($this->_tpldata['adjs.'][$_adjs_i]['KEY'])) ? $this->_tpldata['adjs.'][$_adjs_i]['KEY'] : '') . '][value]" value="' . ((isset($this->_tpldata['adjs.'][$_adjs_i]['VALUE'])) ? $this->_tpldata['adjs.'][$_adjs_i]['VALUE'] : '') . '" class="maininput" /></td>
	  </tr>
	  ';}}
// END adjs
// ENDIF
}
echo '
	  <tr><th colspan="5"><input type="hidden" name="rest" value="' . ((isset($this->_tpldata['.'][0]['DATA'])) ? $this->_tpldata['.'][0]['DATA'] : '') . '" />
      		  <input type="submit" name="insert" value="' . ((isset($this->_tpldata['.'][0]['L_INSERT'])) ? $this->_tpldata['.'][0]['L_INSERT'] : ((isset($user->lang['INSERT'])) ? $user->lang['INSERT'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'INSERT'))) . ' 	}')) . '" class="mainoption" />
          </th>
      </tr>
    </table>
</form>';
}
?>