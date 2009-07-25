<?php
if ($this->security()) {
// INCLUDE page_header.html
$this->assign_from_include('page_header.html');
echo '
<script>
function Settings(moduleid){
  ' . ((isset($this->_tpldata['.'][0]['JS_SETTINGS'])) ? $this->_tpldata['.'][0]['JS_SETTINGS'] : '') . '
}
</script>
<form method="post" action="' . ((isset($this->_tpldata['.'][0]['F_PLUGINS'])) ? $this->_tpldata['.'][0]['F_PLUGINS'] : '') . '" name="post">

<table width="100%" border="0" cellspacing="1" cellpadding="2">
  <tr>
    <th align="left" width="100%">' . ((isset($this->_tpldata['.'][0]['L_NAME'])) ? $this->_tpldata['.'][0]['L_NAME'] : ((isset($user->lang['NAME'])) ? $user->lang['NAME'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'NAME'))) . ' 	}')) . '</th>
    <th align="left" width="40" nowrap="nowrap">' . ((isset($this->_tpldata['.'][0]['L_ENABLED'])) ? $this->_tpldata['.'][0]['L_ENABLED'] : ((isset($user->lang['ENABLED'])) ? $user->lang['ENABLED'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'ENABLED'))) . ' 	}')) . '</th>
    <th align="left" width="40" nowrap="nowrap">' . ((isset($this->_tpldata['.'][0]['L_ORIENTATION'])) ? $this->_tpldata['.'][0]['L_ORIENTATION'] : ((isset($user->lang['ORIENTATION'])) ? $user->lang['ORIENTATION'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'ORIENTATION'))) . ' 	}')) . '</th>
    <th align="left" width="40" nowrap="nowrap">' . ((isset($this->_tpldata['.'][0]['L_POSITION'])) ? $this->_tpldata['.'][0]['L_POSITION'] : ((isset($user->lang['POSITION'])) ? $user->lang['POSITION'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'POSITION'))) . ' 	}')) . '</th>
    <th align="left" width="40" nowrap="nowrap">' . ((isset($this->_tpldata['.'][0]['L_RIGHTS'])) ? $this->_tpldata['.'][0]['L_RIGHTS'] : ((isset($user->lang['RIGHTS'])) ? $user->lang['RIGHTS'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'RIGHTS'))) . ' 	}')) . '</th>
    <th align="left" width="40" nowrap="nowrap">' . ((isset($this->_tpldata['.'][0]['L_COLLAPSE'])) ? $this->_tpldata['.'][0]['L_COLLAPSE'] : ((isset($user->lang['COLLAPSE'])) ? $user->lang['COLLAPSE'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'COLLAPSE'))) . ' 	}')) . '</th>
    <th align="left" width="40" nowrap="nowrap">' . ((isset($this->_tpldata['.'][0]['L_CONTACT'])) ? $this->_tpldata['.'][0]['L_CONTACT'] : ((isset($user->lang['CONTACT'])) ? $user->lang['CONTACT'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'CONTACT'))) . ' 	}')) . '</th>
    <th align="left" width="100" nowrap="nowrap">' . ((isset($this->_tpldata['.'][0]['L_VERSION_N'])) ? $this->_tpldata['.'][0]['L_VERSION_N'] : ((isset($user->lang['VERSION_N'])) ? $user->lang['VERSION_N'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'VERSION_N'))) . ' 	}')) . '</th>
    <th align="left" width="40" nowrap="nowrap">' . ((isset($this->_tpldata['.'][0]['L_SETTINGS'])) ? $this->_tpldata['.'][0]['L_SETTINGS'] : ((isset($user->lang['SETTINGS'])) ? $user->lang['SETTINGS'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'SETTINGS'))) . ' 	}')) . '</th>  
  </tr>
  ';// BEGIN plugins_row
$_plugins_row_count = (isset($this->_tpldata['plugins_row.'])) ?  sizeof($this->_tpldata['plugins_row.']) : 0;
if ($_plugins_row_count) {
for ($_plugins_row_i = 0; $_plugins_row_i < $_plugins_row_count; $_plugins_row_i++)
{
echo '
  <tr class="' . ((isset($this->_tpldata['plugins_row.'][$_plugins_row_i]['ROW_CLASS'])) ? $this->_tpldata['plugins_row.'][$_plugins_row_i]['ROW_CLASS'] : '') . '" onmouseover="this.className=\'rowHover\';" onmouseout="this.className=\'' . ((isset($this->_tpldata['plugins_row.'][$_plugins_row_i]['ROW_CLASS'])) ? $this->_tpldata['plugins_row.'][$_plugins_row_i]['ROW_CLASS'] : '') . '\';">
    <td width="100%" nowrap="nowrap"><input type="hidden" name="processid[]" value="' . ((isset($this->_tpldata['plugins_row.'][$_plugins_row_i]['ID'])) ? $this->_tpldata['plugins_row.'][$_plugins_row_i]['ID'] : '') . '"/>' . ((isset($this->_tpldata['plugins_row.'][$_plugins_row_i]['NAME'])) ? $this->_tpldata['plugins_row.'][$_plugins_row_i]['NAME'] : '') . ' ';// IF plugins_row.S_PLUGIN
if ($this->_tpldata['plugins_row.'][$_plugins_row_i]['S_PLUGIN']) { 
echo '<img src="../images/admin/plugin.png" alt="" />';// ENDIF
}
echo '</td>
    <td width="35" nowrap="nowrap" align="center">' . ((isset($this->_tpldata['plugins_row.'][$_plugins_row_i]['ENABLED'])) ? $this->_tpldata['plugins_row.'][$_plugins_row_i]['ENABLED'] : '') . '</td>
    <td width="40" nowrap="nowrap" align="center">' . ((isset($this->_tpldata['plugins_row.'][$_plugins_row_i]['POSITION'])) ? $this->_tpldata['plugins_row.'][$_plugins_row_i]['POSITION'] : '') . '</td>
    <td width="40" nowrap="nowrap"><input type="text" name="number[' . ((isset($this->_tpldata['plugins_row.'][$_plugins_row_i]['ID'])) ? $this->_tpldata['plugins_row.'][$_plugins_row_i]['ID'] : '') . ']" size="4" value="' . ((isset($this->_tpldata['plugins_row.'][$_plugins_row_i]['NUMBER'])) ? $this->_tpldata['plugins_row.'][$_plugins_row_i]['NUMBER'] : '') . '" class="input" /></td>
    <td width="40" nowrap="nowrap">' . ((isset($this->_tpldata['plugins_row.'][$_plugins_row_i]['RIGHTS'])) ? $this->_tpldata['plugins_row.'][$_plugins_row_i]['RIGHTS'] : '') . '</td>
    <td width="40" nowrap="nowrap">' . ((isset($this->_tpldata['plugins_row.'][$_plugins_row_i]['COLLAPSABLE'])) ? $this->_tpldata['plugins_row.'][$_plugins_row_i]['COLLAPSABLE'] : '') . '</td>
    <td width="40" nowrap="nowrap">' . ((isset($this->_tpldata['plugins_row.'][$_plugins_row_i]['CONTACT'])) ? $this->_tpldata['plugins_row.'][$_plugins_row_i]['CONTACT'] : '') . '</td>
    <td width="100" nowrap="nowrap">' . ((isset($this->_tpldata['plugins_row.'][$_plugins_row_i]['VERSION'])) ? $this->_tpldata['plugins_row.'][$_plugins_row_i]['VERSION'] : '') . '</td>
    <td width="40" nowrap="nowrap">';// IF plugins_row.S_SETTINGS
if ($this->_tpldata['plugins_row.'][$_plugins_row_i]['S_SETTINGS']) { 
echo '<input type="button" value="' . ((isset($this->_tpldata['.'][0]['L_EDIT'])) ? $this->_tpldata['.'][0]['L_EDIT'] : ((isset($user->lang['EDIT'])) ? $user->lang['EDIT'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'EDIT'))) . ' 	}')) . '" onclick="Settings(\'' . ((isset($this->_tpldata['plugins_row.'][$_plugins_row_i]['ID'])) ? $this->_tpldata['plugins_row.'][$_plugins_row_i]['ID'] : '') . '\')"/>';// ENDIF
}
echo '</td>
  </tr>
  ';}}
// END plugins_row
echo '
  <tr>
    <th align="center" colspan="9">
    <input type="submit" name="choose" value="' . ((isset($this->_tpldata['.'][0]['L_SAVE'])) ? $this->_tpldata['.'][0]['L_SAVE'] : ((isset($user->lang['SAVE'])) ? $user->lang['SAVE'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'SAVE'))) . ' 	}')) . '" class="mainoption" />
       </th>
  </tr>
</table>
</form>
<br/>
' . ((isset($this->_tpldata['.'][0]['L_MORE'])) ? $this->_tpldata['.'][0]['L_MORE'] : ((isset($user->lang['MORE'])) ? $user->lang['MORE'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'MORE'))) . ' 	}')) . '
';// INCLUDE page_tail.html
$this->assign_from_include('page_tail.html');

}
?>