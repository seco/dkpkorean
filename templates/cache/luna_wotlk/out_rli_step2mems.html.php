<?php
if ($this->security()) {
echo '' . ((isset($this->_tpldata['.'][0]['JQUERY_INCLUDES'])) ? $this->_tpldata['.'][0]['JQUERY_INCLUDES'] : '') . '
<form method="post" action="' . ((isset($this->_tpldata['.'][0]['F_PARSE'])) ? $this->_tpldata['.'][0]['F_PARSE'] : '') . '" name="post">
	<table width="100%" border="0" cellspacing="1" cellpadding="1">
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
	<table width="100%" border="0" cellspacing="1" cellpadding="1" id="member">
	  <tr>
	  	<th colspan="7">' . ((isset($this->_tpldata['.'][0]['L_MEMBERS'])) ? $this->_tpldata['.'][0]['L_MEMBERS'] : ((isset($user->lang['MEMBERS'])) ? $user->lang['MEMBERS'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'MEMBERS'))) . ' 	}')) . '</th>
	  </tr>
	  <tr>
        <th width="45px">&nbsp;</th>
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
         <td align="right">' . ((isset($this->_tpldata['player.'][$_player_i]['NR'])) ? $this->_tpldata['player.'][$_player_i]['NR'] : '') . '&nbsp;<img src="./../../../images/global/delete.png" alt="' . ((isset($this->_tpldata['.'][0]['L_DELETE'])) ? $this->_tpldata['.'][0]['L_DELETE'] : ((isset($user->lang['DELETE'])) ? $user->lang['DELETE'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'DELETE'))) . ' 	}')) . '"><input type="checkbox" name="members[' . ((isset($this->_tpldata['player.'][$_player_i]['KEY'])) ? $this->_tpldata['player.'][$_player_i]['KEY'] : '') . '][delete]" value="true" title="' . ((isset($this->_tpldata['.'][0]['L_DELETE'])) ? $this->_tpldata['.'][0]['L_DELETE'] : ((isset($user->lang['DELETE'])) ? $user->lang['DELETE'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'DELETE'))) . ' 	}')) . '" /></td>
	     <td width="300"><input type="text" name="members[' . ((isset($this->_tpldata['player.'][$_player_i]['KEY'])) ? $this->_tpldata['player.'][$_player_i]['KEY'] : '') . '][name]" value="' . ((isset($this->_tpldata['player.'][$_player_i]['MITGLIED'])) ? $this->_tpldata['player.'][$_player_i]['MITGLIED'] : '') . '" /> ' . ((isset($this->_tpldata['player.'][$_player_i]['ALIAS'])) ? $this->_tpldata['player.'][$_player_i]['ALIAS'] : '') . ' ' . ((isset($this->_tpldata['player.'][$_player_i]['RANK'])) ? $this->_tpldata['player.'][$_player_i]['RANK'] : '') . '</td>
	     <td>' . ((isset($this->_tpldata['player.'][$_player_i]['RAID_LIST'])) ? $this->_tpldata['player.'][$_player_i]['RAID_LIST'] : '') . '</td>
	     ';// IF S_CONF_ADJ
if ($this->_tpldata['.'][0]['S_CONF_ADJ']) { 
echo '
	     <td align="right"><input type="text" name="members[' . ((isset($this->_tpldata['player.'][$_player_i]['KEY'])) ? $this->_tpldata['player.'][$_player_i]['KEY'] : '') . '][timedkp]" class="maininput" value="' . ((isset($this->_tpldata['player.'][$_player_i]['ZEITDKP'])) ? $this->_tpldata['player.'][$_player_i]['ZEITDKP'] : '') . '" size="5" /></td>
	     <td align="right"><input type="text" name="members[' . ((isset($this->_tpldata['player.'][$_player_i]['KEY'])) ? $this->_tpldata['player.'][$_player_i]['KEY'] : '') . '][bossdkp]" class="maininput" value="' . ((isset($this->_tpldata['player.'][$_player_i]['BOSSDKP'])) ? $this->_tpldata['player.'][$_player_i]['BOSSDKP'] : '') . '" size="5" /></td>
	     ';// ENDIF
}
// IF S_ATT_BEGIN
if ($this->_tpldata['.'][0]['S_ATT_BEGIN']) { 
echo '
	     	<td align="right"><input type="checkbox" name="members[' . ((isset($this->_tpldata['player.'][$_player_i]['KEY'])) ? $this->_tpldata['player.'][$_player_i]['KEY'] : '') . '][att_begin]" class="maininput" value="true" ' . ((isset($this->_tpldata['player.'][$_player_i]['ATT_BEGIN'])) ? $this->_tpldata['player.'][$_player_i]['ATT_BEGIN'] : '') . ' size="5" /></td>
	     ';// ENDIF
}
// IF S_ATT_END
if ($this->_tpldata['.'][0]['S_ATT_END']) { 
echo '
	     	<td align="right"><input type="checkbox" name="members[' . ((isset($this->_tpldata['player.'][$_player_i]['KEY'])) ? $this->_tpldata['player.'][$_player_i]['KEY'] : '') . '][att_end]" class="maininput" value="true" ' . ((isset($this->_tpldata['player.'][$_player_i]['ATT_END'])) ? $this->_tpldata['player.'][$_player_i]['ATT_END'] : '') . ' size="5" /></td>
	     ';// ENDIF
}
echo '
	  </tr>
      ';}}
// END player
echo '
	  <tr class="row2">
	  	<td colspan="2"><select name="members_add">
	  		  <option value="0">0..' . ((isset($this->_tpldata['.'][0]['L_MEMS_ADD'])) ? $this->_tpldata['.'][0]['L_MEMS_ADD'] : ((isset($user->lang['MEMS_ADD'])) ? $user->lang['MEMS_ADD'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'MEMS_ADD'))) . ' 	}')) . '</option>
	  		  <option value="1">1..' . ((isset($this->_tpldata['.'][0]['L_MEM_ADD'])) ? $this->_tpldata['.'][0]['L_MEM_ADD'] : ((isset($user->lang['MEM_ADD'])) ? $user->lang['MEM_ADD'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'MEM_ADD'))) . ' 	}')) . '</option>
	  		  <option value="2">2..' . ((isset($this->_tpldata['.'][0]['L_MEMS_ADD'])) ? $this->_tpldata['.'][0]['L_MEMS_ADD'] : ((isset($user->lang['MEMS_ADD'])) ? $user->lang['MEMS_ADD'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'MEMS_ADD'))) . ' 	}')) . '</option>
	  		  <option value="3">3..' . ((isset($this->_tpldata['.'][0]['L_MEMS_ADD'])) ? $this->_tpldata['.'][0]['L_MEMS_ADD'] : ((isset($user->lang['MEMS_ADD'])) ? $user->lang['MEMS_ADD'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'MEMS_ADD'))) . ' 	}')) . '</option>
	  		  <option value="4">4..' . ((isset($this->_tpldata['.'][0]['L_MEMS_ADD'])) ? $this->_tpldata['.'][0]['L_MEMS_ADD'] : ((isset($user->lang['MEMS_ADD'])) ? $user->lang['MEMS_ADD'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'MEMS_ADD'))) . ' 	}')) . '</option>
	  		  <option value="5">5..' . ((isset($this->_tpldata['.'][0]['L_MEMS_ADD'])) ? $this->_tpldata['.'][0]['L_MEMS_ADD'] : ((isset($user->lang['MEMS_ADD'])) ? $user->lang['MEMS_ADD'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'MEMS_ADD'))) . ' 	}')) . '</option>
	  		</select>
	  		<input type="submit" name="checkmem" value="' . ((isset($this->_tpldata['.'][0]['L_UPD'])) ? $this->_tpldata['.'][0]['L_UPD'] : ((isset($user->lang['UPD'])) ? $user->lang['UPD'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'UPD'))) . ' 	}')) . '" class="mainoption" />
	  	</td>
	  	<td class="row2" colspan="6">&nbsp;</td>
	  </tr>
    </table>
    <table width="100%" border="0" cellspacing="1" cellpadding="1">
      <tr>
        <th align="center" colspan="8">
      	   <input type="hidden" name="add_mem_data" value=\'' . ((isset($this->_tpldata['.'][0]['ADD_MEM_DATA'])) ? $this->_tpldata['.'][0]['ADD_MEM_DATA'] : '') . '\' />
      	   <input type="hidden" name="rest" value="' . ((isset($this->_tpldata['.'][0]['DATA'])) ? $this->_tpldata['.'][0]['DATA'] : '') . '" />
      	   <input type="submit" name="checkraid" value="' . ((isset($this->_tpldata['.'][0]['L_BACK2RAID'])) ? $this->_tpldata['.'][0]['L_BACK2RAID'] : ((isset($user->lang['BACK2RAID'])) ? $user->lang['BACK2RAID'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'BACK2RAID'))) . ' 	}')) . '" class="mainoption" />
		   <input type="submit" name="checkitem" value="' . ((isset($this->_tpldata['.'][0]['L_CHECKITEMS'])) ? $this->_tpldata['.'][0]['L_CHECKITEMS'] : ((isset($user->lang['CHECKITEMS'])) ? $user->lang['CHECKITEMS'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'CHECKITEMS'))) . ' 	}')) . '" class="mainoption" /></th>
      </tr>
	</table>
</form>';
}
?>