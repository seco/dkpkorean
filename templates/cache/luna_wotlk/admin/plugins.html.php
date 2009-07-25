<?php
if ($this->security()) {
// INCLUDE page_header.html
$this->assign_from_include('page_header.html');
echo '
<table width="100%" border="0" cellspacing="1" cellpadding="4">
  <tr>
    <th align="left" width="16">&nbsp;</th>
    <th align="left" nowrap="nowrap">' . ((isset($this->_tpldata['.'][0]['L_ACTION'])) ? $this->_tpldata['.'][0]['L_ACTION'] : ((isset($user->lang['ACTION'])) ? $user->lang['ACTION'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'ACTION'))) . ' 	}')) . '</th>
    <th align="left" nowrap="nowrap">' . ((isset($this->_tpldata['.'][0]['L_NAME'])) ? $this->_tpldata['.'][0]['L_NAME'] : ((isset($user->lang['NAME'])) ? $user->lang['NAME'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'NAME'))) . ' 	}')) . '</th>
    <th align="left" nowrap="nowrap">' . ((isset($this->_tpldata['.'][0]['L_VERSION'])) ? $this->_tpldata['.'][0]['L_VERSION'] : ((isset($user->lang['VERSION'])) ? $user->lang['VERSION'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'VERSION'))) . ' 	}')) . '</th>
    <th align="left" nowrap="nowrap">' . ((isset($this->_tpldata['.'][0]['L_CONTACT'])) ? $this->_tpldata['.'][0]['L_CONTACT'] : ((isset($user->lang['CONTACT'])) ? $user->lang['CONTACT'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'CONTACT'))) . ' 	}')) . '</th>
    <th align="left" nowrap="nowrap">' . ((isset($this->_tpldata['.'][0]['L_DESCRIPTION'])) ? $this->_tpldata['.'][0]['L_DESCRIPTION'] : ((isset($user->lang['DESCRIPTION'])) ? $user->lang['DESCRIPTION'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'DESCRIPTION'))) . ' 	}')) . '</th>
    <th align="left" nowrap="nowrap">' . ((isset($this->_tpldata['.'][0]['L_INFOS'])) ? $this->_tpldata['.'][0]['L_INFOS'] : ((isset($user->lang['INFOS'])) ? $user->lang['INFOS'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'INFOS'))) . ' 	}')) . '</th>
  </tr>
  ';// IF NO_PLUGS
if ($this->_tpldata['.'][0]['NO_PLUGS']) { 
echo '
    <tr class="row1">
    <td width="16" align="center" nowrap="nowrap" colspan=6>' . ((isset($this->_tpldata['.'][0]['L_NO_PLUG'])) ? $this->_tpldata['.'][0]['L_NO_PLUG'] : ((isset($user->lang['NO_PLUG'])) ? $user->lang['NO_PLUG'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'NO_PLUG'))) . ' 	}')) . '</td>
    </tr>
  ';// ELSE
} else {
// BEGIN plugins_row
$_plugins_row_count = (isset($this->_tpldata['plugins_row.'])) ?  sizeof($this->_tpldata['plugins_row.']) : 0;
if ($_plugins_row_count) {
for ($_plugins_row_i = 0; $_plugins_row_i < $_plugins_row_count; $_plugins_row_i++)
{
echo '
  <tr class="' . ((isset($this->_tpldata['plugins_row.'][$_plugins_row_i]['ROW_CLASS'])) ? $this->_tpldata['plugins_row.'][$_plugins_row_i]['ROW_CLASS'] : '') . '">
    <td width="16" align="center" nowrap="nowrap"><img src="' . ((isset($this->_tpldata['.'][0]['EQDKP_ROOT_PATH'])) ? $this->_tpldata['.'][0]['EQDKP_ROOT_PATH'] : '') . 'images/glyphs/' . ((isset($this->_tpldata['plugins_row.'][$_plugins_row_i]['glyph'])) ? $this->_tpldata['plugins_row.'][$_plugins_row_i]['glyph'] : '') . '" width="16" height="16" alt="Plugin" /></td>
    <td nowrap="nowrap"><a href="' . ((isset($this->_tpldata['plugins_row.'][$_plugins_row_i]['U_ACTION'])) ? $this->_tpldata['plugins_row.'][$_plugins_row_i]['U_ACTION'] : '') . '">' . ((isset($this->_tpldata['plugins_row.'][$_plugins_row_i]['ACTION'])) ? $this->_tpldata['plugins_row.'][$_plugins_row_i]['ACTION'] : '') . '</a></td>
    <td nowrap="nowrap">' . ((isset($this->_tpldata['plugins_row.'][$_plugins_row_i]['NAME'])) ? $this->_tpldata['plugins_row.'][$_plugins_row_i]['NAME'] : '') . '</td>
    <td nowrap="nowrap">' . ((isset($this->_tpldata['plugins_row.'][$_plugins_row_i]['VERSION'])) ? $this->_tpldata['plugins_row.'][$_plugins_row_i]['VERSION'] : '') . '</td>
    <td nowrap="nowrap">' . ((isset($this->_tpldata['plugins_row.'][$_plugins_row_i]['CONTACT'])) ? $this->_tpldata['plugins_row.'][$_plugins_row_i]['CONTACT'] : '') . '</td>
    <td >' . ((isset($this->_tpldata['plugins_row.'][$_plugins_row_i]['DESCRIPTION'])) ? $this->_tpldata['plugins_row.'][$_plugins_row_i]['DESCRIPTION'] : '') . '</td>
    <td nowrap="nowrap">' . ((isset($this->_tpldata['plugins_row.'][$_plugins_row_i]['LONG_DESCRIPTION'])) ? $this->_tpldata['plugins_row.'][$_plugins_row_i]['LONG_DESCRIPTION'] : '') . '  ' . ((isset($this->_tpldata['plugins_row.'][$_plugins_row_i]['HOMEPAGE'])) ? $this->_tpldata['plugins_row.'][$_plugins_row_i]['HOMEPAGE'] : '') . ' ' . ((isset($this->_tpldata['plugins_row.'][$_plugins_row_i]['MANUAL'])) ? $this->_tpldata['plugins_row.'][$_plugins_row_i]['MANUAL'] : '') . '</td> 
  ';}}
// END plugins_row
// ENDIF
}
echo '
</table>
<br />
' . ((isset($this->_tpldata['.'][0]['L_MORE'])) ? $this->_tpldata['.'][0]['L_MORE'] : ((isset($user->lang['MORE'])) ? $user->lang['MORE'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'MORE'))) . ' 	}')) . '
<br />
';// INCLUDE page_tail.html
$this->assign_from_include('page_tail.html');

}
?>