<?php
if ($this->security()) {
echo '<!-- Thats the data table ;) we don\'t change anything here :P -->';echo '
' . ((isset($this->_tpldata['.'][0]['UPDATER'])) ? $this->_tpldata['.'][0]['UPDATER'] : '') . '
' . ((isset($this->_tpldata['.'][0]['UPDCHECK_BOX'])) ? $this->_tpldata['.'][0]['UPDCHECK_BOX'] : '') . '
<form method="post" action="' . ((isset($this->_tpldata['.'][0]['F_ACTION'])) ? $this->_tpldata['.'][0]['F_ACTION'] : '') . '" name="post">
<table width="100%" border="0" cellspacing="1" cellpadding="2">
 	<tr><th align="center" colspan="2">' . ((isset($this->_tpldata['.'][0]['L_INFO_SETTINGS'])) ? $this->_tpldata['.'][0]['L_INFO_SETTINGS'] : ((isset($user->lang['INFO_SETTINGS'])) ? $user->lang['INFO_SETTINGS'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'INFO_SETTINGS'))) . ' 	}')) . '</th></tr>
	<tr>
    	<td width="30%" class="row2">' . ((isset($this->_tpldata['.'][0]['L_INFO_EUCHK'])) ? $this->_tpldata['.'][0]['L_INFO_EUCHK'] : ((isset($user->lang['INFO_EUCHK'])) ? $user->lang['INFO_EUCHK'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'INFO_EUCHK'))) . ' 	}')) . '</td>
		<td width="70%" class="row1"><input type="checkbox" name="euchk" value="1" ' . ((isset($this->_tpldata['.'][0]['INFO_EUCHK'])) ? $this->_tpldata['.'][0]['INFO_EUCHK'] : '') . ' /></td>
	</tr>
  <tr>
    	<td width="30%" class="row2">' . ((isset($this->_tpldata['.'][0]['L_INFO_EE'])) ? $this->_tpldata['.'][0]['L_INFO_EE'] : ((isset($user->lang['INFO_EE'])) ? $user->lang['INFO_EE'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'INFO_EE'))) . ' 	}')) . '</td>
		<td width="70%" class="row1"><input type="checkbox" name="ee" value="1" ' . ((isset($this->_tpldata['.'][0]['INFO_EE'])) ? $this->_tpldata['.'][0]['INFO_EE'] : '') . ' /></td>
	</tr>
	<tr>
		<td class="row2">' . ((isset($this->_tpldata['.'][0]['L_INFO_EC'])) ? $this->_tpldata['.'][0]['L_INFO_EC'] : ((isset($user->lang['INFO_EC'])) ? $user->lang['INFO_EC'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'INFO_EC'))) . ' 	}')) . '</td>
		<td class="row1"><input type="text" name="ec" size="6" maxlength="3" value="' . ((isset($this->_tpldata['.'][0]['INFO_EC'])) ? $this->_tpldata['.'][0]['INFO_EC'] : '') . '" class="input" /></td>
	</tr>
	<tr>
		<td class="row2">' . ((isset($this->_tpldata['.'][0]['L_INFO_ER'])) ? $this->_tpldata['.'][0]['L_INFO_ER'] : ((isset($user->lang['INFO_ER'])) ? $user->lang['INFO_ER'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'INFO_ER'))) . ' 	}')) . '</td>
		<td class="row1"><input type="text" name="er" size="6" maxlength="3" value="' . ((isset($this->_tpldata['.'][0]['INFO_ER'])) ? $this->_tpldata['.'][0]['INFO_ER'] : '') . '" class="input" /></td>
	</tr>
  <tr><th align="center" colspan="2"><input type="submit" name="infosavebu" value="Save" class="mainoption" /></th></tr>
</table>
</form>
<br /><center><span class="copy">' . ((isset($this->_tpldata['.'][0]['CREDITS'])) ? $this->_tpldata['.'][0]['CREDITS'] : '') . '</span></center>
';echo '<!-- That\'s the End of the Data Table ;) -->';
}
?>