<?php
if ($this->security()) {
echo '<script language="JavaScript" type="text/javascript">

function UpdateProfiles(){
	' . ((isset($this->_tpldata['.'][0]['JS_UPDATEPROF'])) ? $this->_tpldata['.'][0]['JS_UPDATEPROF'] : '') . '
}

function ImportGuild(){
	' . ((isset($this->_tpldata['.'][0]['JS_IMPORTGUILD'])) ? $this->_tpldata['.'][0]['JS_IMPORTGUILD'] : '') . '
}
</script>
' . ((isset($this->_tpldata['.'][0]['UPDATE_BOX'])) ? $this->_tpldata['.'][0]['UPDATE_BOX'] : '') . '
' . ((isset($this->_tpldata['.'][0]['UPDCHECK_BOX'])) ? $this->_tpldata['.'][0]['UPDCHECK_BOX'] : '') . '

<form method="post" action="' . ((isset($this->_tpldata['.'][0]['F_CONFIG'])) ? $this->_tpldata['.'][0]['F_CONFIG'] : '') . '" name="post">
<table border="0" width="100%" cellspacing="1" cellpadding="2">
<tr>
    <th align="center" colspan="2">' . ((isset($this->_tpldata['.'][0]['L_GENERAL'])) ? $this->_tpldata['.'][0]['L_GENERAL'] : ((isset($user->lang['GENERAL'])) ? $user->lang['GENERAL'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'GENERAL'))) . ' 	}')) . '</th>
</tr>
			<tr>
				<td width="60%" class="row2">' . ((isset($this->_tpldata['.'][0]['L_USE_UPDATECH'])) ? $this->_tpldata['.'][0]['L_USE_UPDATECH'] : ((isset($user->lang['USE_UPDATECH'])) ? $user->lang['USE_UPDATECH'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'USE_UPDATECH'))) . ' 	}')) . '</td>
				<td width="40%" class="row1"><input type="checkbox" name="uc_updtcheck_on" value="1" ' . ((isset($this->_tpldata['.'][0]['USE_UPDATECH'])) ? $this->_tpldata['.'][0]['USE_UPDATECH'] : '') . ' /></td>
			</tr>
			<tr>
				<td width="60%" class="row2">' . ((isset($this->_tpldata['.'][0]['L_REQ_CONFIRM'])) ? $this->_tpldata['.'][0]['L_REQ_CONFIRM'] : ((isset($user->lang['REQ_CONFIRM'])) ? $user->lang['REQ_CONFIRM'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'REQ_CONFIRM'))) . ' 	}')) . '</td>
				<td width="40%" class="row1"><input type="checkbox" name="uc_reqconfirm" value="1" ' . ((isset($this->_tpldata['.'][0]['REQCONFIRM'])) ? $this->_tpldata['.'][0]['REQCONFIRM'] : '') . ' /></td>
			</tr>
			<tr>
				<td width="60%" class="row2">' . ((isset($this->_tpldata['.'][0]['L_DEFRANK'])) ? $this->_tpldata['.'][0]['L_DEFRANK'] : ((isset($user->lang['DEFRANK'])) ? $user->lang['DEFRANK'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'DEFRANK'))) . ' 	}')) . '</td>
				<td width="40%" class="row1">' . ((isset($this->_tpldata['.'][0]['DRPWN_RANK'])) ? $this->_tpldata['.'][0]['DRPWN_RANK'] : '') . '</td>
		</tr>
		<tr>
				<td width="60%" class="row2">' . ((isset($this->_tpldata['.'][0]['L_LP_HIDERESI'])) ? $this->_tpldata['.'][0]['L_LP_HIDERESI'] : ((isset($user->lang['LP_HIDERESI'])) ? $user->lang['LP_HIDERESI'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'LP_HIDERESI'))) . ' 	}')) . '</td>
				<td width="40%" class="row1"><input type="checkbox" name="uc_lphideresi" value="1" ' . ((isset($this->_tpldata['.'][0]['LP_HIDERESI'])) ? $this->_tpldata['.'][0]['LP_HIDERESI'] : '') . ' /></td>
		</tr>
		';// IF U_HAS_IMPORT
if ($this->_tpldata['.'][0]['U_HAS_IMPORT']) { 
echo '
		<tr>
			<th colspan="2">' . ((isset($this->_tpldata['.'][0]['L_IMPORT'])) ? $this->_tpldata['.'][0]['L_IMPORT'] : ((isset($user->lang['IMPORT'])) ? $user->lang['IMPORT'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'IMPORT'))) . ' 	}')) . '</th>
		</tr>
		<tr>
				<td width="60%" class="row2">' . ((isset($this->_tpldata['.'][0]['L_SHOW_ARMLINK'])) ? $this->_tpldata['.'][0]['L_SHOW_ARMLINK'] : ((isset($user->lang['SHOW_ARMLINK'])) ? $user->lang['SHOW_ARMLINK'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'SHOW_ARMLINK'))) . ' 	}')) . '</td>
				<td width="40%" class="row1"><input type="checkbox" name="uc_showarmlink" value="1" ' . ((isset($this->_tpldata['.'][0]['SHOW_ARM_LINK'])) ? $this->_tpldata['.'][0]['SHOW_ARM_LINK'] : '') . ' /></td>
		</tr>
	   <tr>
				<td width="60%" class="row2">' . ((isset($this->_tpldata['.'][0]['L_SERVERLOC'])) ? $this->_tpldata['.'][0]['L_SERVERLOC'] : ((isset($user->lang['SERVERLOC'])) ? $user->lang['SERVERLOC'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'SERVERLOC'))) . ' 	}')) . '</td>
				<td width="40%" class="row1">' . ((isset($this->_tpldata['.'][0]['DRPWN_SERVERLOC'])) ? $this->_tpldata['.'][0]['DRPWN_SERVERLOC'] : '') . '</td>
		</tr>
		<tr>
				<td width="60%" class="row2">' . ((isset($this->_tpldata['.'][0]['L_SERVERLANG'])) ? $this->_tpldata['.'][0]['L_SERVERLANG'] : ((isset($user->lang['SERVERLANG'])) ? $user->lang['SERVERLANG'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'SERVERLANG'))) . ' 	}')) . '</td>
				<td width="40%" class="row1">' . ((isset($this->_tpldata['.'][0]['DRPWN_SRVLANG'])) ? $this->_tpldata['.'][0]['DRPWN_SRVLANG'] : '') . '</td>
		</tr>
	   <tr>
				<td width="60%" class="row2">' . ((isset($this->_tpldata['.'][0]['L_SERVERNAME'])) ? $this->_tpldata['.'][0]['L_SERVERNAME'] : ((isset($user->lang['SERVERNAME'])) ? $user->lang['SERVERNAME'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'SERVERNAME'))) . ' 	}')) . '</td>
				<td width="40%" class="row1"><input type="text" name="uc_servername" size="32" value="' . ((isset($this->_tpldata['.'][0]['SERVERNAME'])) ? $this->_tpldata['.'][0]['SERVERNAME'] : '') . '" class="input" /></td>
		</tr>
		<tr>
				<td width="60%" class="row2">' . ((isset($this->_tpldata['.'][0]['L_LOCK_SERVER'])) ? $this->_tpldata['.'][0]['L_LOCK_SERVER'] : ((isset($user->lang['LOCK_SERVER'])) ? $user->lang['LOCK_SERVER'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'LOCK_SERVER'))) . ' 	}')) . '</td>
				<td width="40%" class="row1"><input type="checkbox" name="uc_lockserver" value="1" ' . ((isset($this->_tpldata['.'][0]['LOCK_SERVERFLD'])) ? $this->_tpldata['.'][0]['LOCK_SERVERFLD'] : '') . ' /></td>
		</tr>
		<tr>
				<td width="60%" class="row2">' . ((isset($this->_tpldata['.'][0]['L_NO_RESISAVE'])) ? $this->_tpldata['.'][0]['L_NO_RESISAVE'] : ((isset($user->lang['NO_RESISAVE'])) ? $user->lang['NO_RESISAVE'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'NO_RESISAVE'))) . ' 	}')) . '</td>
				<td width="40%" class="row1"><input type="checkbox" name="uc_noresisave" value="1" ' . ((isset($this->_tpldata['.'][0]['NO_RESISAVE'])) ? $this->_tpldata['.'][0]['NO_RESISAVE'] : '') . ' /></td>
		</tr>
		<tr>
				<td width="60%" class="row2">' . ((isset($this->_tpldata['.'][0]['L_UPDATE_ALL'])) ? $this->_tpldata['.'][0]['L_UPDATE_ALL'] : ((isset($user->lang['UPDATE_ALL'])) ? $user->lang['UPDATE_ALL'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'UPDATE_ALL'))) . ' 	}')) . '</td>
				<td width="40%" class="row1">
				    ';// IF U_IMPORT_DISBLD
if ($this->_tpldata['.'][0]['U_IMPORT_DISBLD']) { 
echo '
				      <input type="button" name="add" value="' . ((isset($this->_tpldata['.'][0]['L_BTTN_UPDATE'])) ? $this->_tpldata['.'][0]['L_BTTN_UPDATE'] : ((isset($user->lang['BTTN_UPDATE'])) ? $user->lang['BTTN_UPDATE'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'BTTN_UPDATE'))) . ' 	}')) . '" disabled=true />	[' . ((isset($this->_tpldata['.'][0]['LAST_UPDATED'])) ? $this->_tpldata['.'][0]['LAST_UPDATED'] : '') . ']
				    ';// ELSE
} else {
echo '
						  <input type="button" name="add" value="' . ((isset($this->_tpldata['.'][0]['L_BTTN_UPDATE'])) ? $this->_tpldata['.'][0]['L_BTTN_UPDATE'] : ((isset($user->lang['BTTN_UPDATE'])) ? $user->lang['BTTN_UPDATE'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'BTTN_UPDATE'))) . ' 	}')) . '" class="mainoption" onclick="javascript:UpdateProfiles()" />	[' . ((isset($this->_tpldata['.'][0]['LAST_UPDATED'])) ? $this->_tpldata['.'][0]['LAST_UPDATED'] : '') . ']
				    ';// ENDIF
}
echo '
        </td>
		</tr>
		<tr>
				<td width="60%" class="row2">' . ((isset($this->_tpldata['.'][0]['L_IMPORT_GUILD'])) ? $this->_tpldata['.'][0]['L_IMPORT_GUILD'] : ((isset($user->lang['IMPORT_GUILD'])) ? $user->lang['IMPORT_GUILD'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'IMPORT_GUILD'))) . ' 	}')) . '</td>
				<td width="40%" class="row1">
				    ';// IF U_IMPORT_DISBLD
if ($this->_tpldata['.'][0]['U_IMPORT_DISBLD']) { 
echo '
				      <input type="button" name="add" value="' . ((isset($this->_tpldata['.'][0]['L_BTTN_GIMP'])) ? $this->_tpldata['.'][0]['L_BTTN_GIMP'] : ((isset($user->lang['BTTN_GIMP'])) ? $user->lang['BTTN_GIMP'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'BTTN_GIMP'))) . ' 	}')) . '" disabled=true />
				    ';// ELSE
} else {
echo '
						  <input type="button" name="add" value="' . ((isset($this->_tpldata['.'][0]['L_BTTN_GIMP'])) ? $this->_tpldata['.'][0]['L_BTTN_GIMP'] : ((isset($user->lang['BTTN_GIMP'])) ? $user->lang['BTTN_GIMP'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'BTTN_GIMP'))) . ' 	}')) . '" class="mainoption" onclick="javascript:ImportGuild()" />
				    ';// ENDIF
}
echo '
        </td>
		</tr>
		';// ENDIF
}
echo '
		
	<tr><th align="center" colspan="2"><input type="submit" name="issavebu" value="' . ((isset($this->_tpldata['.'][0]['L_SUBMIT'])) ? $this->_tpldata['.'][0]['L_SUBMIT'] : ((isset($user->lang['SUBMIT'])) ? $user->lang['SUBMIT'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'SUBMIT'))) . ' 	}')) . '" class="mainoption" />
  </th></tr>
</table>
</form>';
}
?>