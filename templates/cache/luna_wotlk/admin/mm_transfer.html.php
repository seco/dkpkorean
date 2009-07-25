<?php
if ($this->security()) {
// INCLUDE page_header.html
$this->assign_from_include('page_header.html');
echo '
<form method="post" action="' . ((isset($this->_tpldata['.'][0]['F_TRANSFER'])) ? $this->_tpldata['.'][0]['F_TRANSFER'] : '') . '" name="post">
<table width="100%" border="0" cellspacing="1" cellpadding="2">
  <tr>
    <th align="center" colspan="2">' . ((isset($this->_tpldata['.'][0]['L_TRANSFER_MEMBER_HISTORY'])) ? $this->_tpldata['.'][0]['L_TRANSFER_MEMBER_HISTORY'] : ((isset($user->lang['TRANSFER_MEMBER_HISTORY'])) ? $user->lang['TRANSFER_MEMBER_HISTORY'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'TRANSFER_MEMBER_HISTORY'))) . ' 	}')) . '</td>
  </tr>
  <tr>
    <td colspan="2" align="center" class="row1">' . ((isset($this->_tpldata['.'][0]['L_TRANSFER_MEMBER_HISTORY_DESCRIPTION'])) ? $this->_tpldata['.'][0]['L_TRANSFER_MEMBER_HISTORY_DESCRIPTION'] : ((isset($user->lang['TRANSFER_MEMBER_HISTORY_DESCRIPTION'])) ? $user->lang['TRANSFER_MEMBER_HISTORY_DESCRIPTION'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'TRANSFER_MEMBER_HISTORY_DESCRIPTION'))) . ' 	}')) . '' . ((isset($this->_tpldata['.'][0]['FV_TRANSFER'])) ? $this->_tpldata['.'][0]['FV_TRANSFER'] : '') . '</td>
  </tr>
  <tr>
    <td width="50%" align="center" class="row2">
    <b>' . ((isset($this->_tpldata['.'][0]['L_FROM'])) ? $this->_tpldata['.'][0]['L_FROM'] : ((isset($user->lang['FROM'])) ? $user->lang['FROM'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'FROM'))) . ' 	}')) . ':</b>
      <select name="transfer_from" class="input">
        <option value="">' . ((isset($this->_tpldata['.'][0]['L_SELECT_1_OF_X_MEMBERS'])) ? $this->_tpldata['.'][0]['L_SELECT_1_OF_X_MEMBERS'] : ((isset($user->lang['SELECT_1_OF_X_MEMBERS'])) ? $user->lang['SELECT_1_OF_X_MEMBERS'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'SELECT_1_OF_X_MEMBERS'))) . ' 	}')) . '</option>
        ';// BEGIN transfer_from_row
$_transfer_from_row_count = (isset($this->_tpldata['transfer_from_row.'])) ?  sizeof($this->_tpldata['transfer_from_row.']) : 0;
if ($_transfer_from_row_count) {
for ($_transfer_from_row_i = 0; $_transfer_from_row_i < $_transfer_from_row_count; $_transfer_from_row_i++)
{
echo '
        <option value="' . ((isset($this->_tpldata['transfer_from_row.'][$_transfer_from_row_i]['VALUE'])) ? $this->_tpldata['transfer_from_row.'][$_transfer_from_row_i]['VALUE'] : '') . '"' . ((isset($this->_tpldata['transfer_from_row.'][$_transfer_from_row_i]['SELECTED'])) ? $this->_tpldata['transfer_from_row.'][$_transfer_from_row_i]['SELECTED'] : '') . '>' . ((isset($this->_tpldata['transfer_from_row.'][$_transfer_from_row_i]['OPTION'])) ? $this->_tpldata['transfer_from_row.'][$_transfer_from_row_i]['OPTION'] : '') . '</option>
        ';}}
// END transfer_from_row
echo '
      </select>
    </td>
    <td width="50%" align="center" class="row2">
    <b>' . ((isset($this->_tpldata['.'][0]['L_TO'])) ? $this->_tpldata['.'][0]['L_TO'] : ((isset($user->lang['TO'])) ? $user->lang['TO'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'TO'))) . ' 	}')) . ':</b>
      <select name="transfer_to" class="input">
        <option value="">' . ((isset($this->_tpldata['.'][0]['L_SELECT_1_OF_X_MEMBERS'])) ? $this->_tpldata['.'][0]['L_SELECT_1_OF_X_MEMBERS'] : ((isset($user->lang['SELECT_1_OF_X_MEMBERS'])) ? $user->lang['SELECT_1_OF_X_MEMBERS'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'SELECT_1_OF_X_MEMBERS'))) . ' 	}')) . '</option>
        ';// BEGIN transfer_to_row
$_transfer_to_row_count = (isset($this->_tpldata['transfer_to_row.'])) ?  sizeof($this->_tpldata['transfer_to_row.']) : 0;
if ($_transfer_to_row_count) {
for ($_transfer_to_row_i = 0; $_transfer_to_row_i < $_transfer_to_row_count; $_transfer_to_row_i++)
{
echo '
        <option value="' . ((isset($this->_tpldata['transfer_to_row.'][$_transfer_to_row_i]['VALUE'])) ? $this->_tpldata['transfer_to_row.'][$_transfer_to_row_i]['VALUE'] : '') . '"' . ((isset($this->_tpldata['transfer_to_row.'][$_transfer_to_row_i]['SELECTED'])) ? $this->_tpldata['transfer_to_row.'][$_transfer_to_row_i]['SELECTED'] : '') . '>' . ((isset($this->_tpldata['transfer_to_row.'][$_transfer_to_row_i]['OPTION'])) ? $this->_tpldata['transfer_to_row.'][$_transfer_to_row_i]['OPTION'] : '') . '</option>
        ';}}
// END transfer_to_row
echo '
      </select>
    </td>
  </tr>
  <tr>
    <th align="center" colspan="2"><input type="submit" name="transfer" value="' . ((isset($this->_tpldata['.'][0]['L_TRANSFER_HISTORY'])) ? $this->_tpldata['.'][0]['L_TRANSFER_HISTORY'] : ((isset($user->lang['TRANSFER_HISTORY'])) ? $user->lang['TRANSFER_HISTORY'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'TRANSFER_HISTORY'))) . ' 	}')) . '" class="mainoption" /></th>
  </tr>
</table>
</form>
';// INCLUDE page_tail.html
$this->assign_from_include('page_tail.html');

}
?>