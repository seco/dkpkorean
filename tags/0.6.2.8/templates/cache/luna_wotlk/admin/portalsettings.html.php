<?php
if ($this->security()) {
// INCLUDE page_header.html
$this->assign_from_include('page_header.html');
echo '
<form method="post" action="' . ((isset($this->_tpldata['.'][0]['F_SETTINGS'])) ? $this->_tpldata['.'][0]['F_SETTINGS'] : '') . '" name="post">
<table border="0" width="100%" cellspacing="1" cellpadding="2">
  ';// IF NOGAME_SELECTED
if ($this->_tpldata['.'][0]['NOGAME_SELECTED']) { 
echo '
  <tr>
    <td align="center" colspan="2" class="row2">' . ((isset($this->_tpldata['.'][0]['L_NOGAMESELECT'])) ? $this->_tpldata['.'][0]['L_NOGAMESELECT'] : ((isset($user->lang['NOGAMESELECT'])) ? $user->lang['NOGAMESELECT'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'NOGAMESELECT'))) . ' 	}')) . '</td>
  </tr>
  ';// ELSE
} else {
// BEGIN config_row
$_config_row_count = (isset($this->_tpldata['config_row.'])) ?  sizeof($this->_tpldata['config_row.']) : 0;
if ($_config_row_count) {
for ($_config_row_i = 0; $_config_row_i < $_config_row_count; $_config_row_i++)
{
echo '
	<tr>
		<td width="60%" class="row2">' . ((isset($this->_tpldata['config_row.'][$_config_row_i]['NAME'])) ? $this->_tpldata['config_row.'][$_config_row_i]['NAME'] : '') . '</td>
		<td width="40%" class="row1">' . ((isset($this->_tpldata['config_row.'][$_config_row_i]['FIELD'])) ? $this->_tpldata['config_row.'][$_config_row_i]['FIELD'] : '') . '</td>
	</tr>
	';}}
// END config_row
// ENDIF
}
// IF IMPORT_ON
if ($this->_tpldata['.'][0]['IMPORT_ON']) { 
echo '
	<tr>
    <th align="center" colspan="2">' . ((isset($this->_tpldata['.'][0]['L_IMPORT'])) ? $this->_tpldata['.'][0]['L_IMPORT'] : ((isset($user->lang['IMPORT'])) ? $user->lang['IMPORT'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'IMPORT'))) . ' 	}')) . '</th>
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
	';// ENDIF
}
echo '
	<tr><th align="center" colspan="2"><input type="submit" name="issavebu" value="' . ((isset($this->_tpldata['.'][0]['L_SUBMIT'])) ? $this->_tpldata['.'][0]['L_SUBMIT'] : ((isset($user->lang['SUBMIT'])) ? $user->lang['SUBMIT'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'SUBMIT'))) . ' 	}')) . '" class="mainoption" />
  </th></tr>
</table>
</form>';
}
?>