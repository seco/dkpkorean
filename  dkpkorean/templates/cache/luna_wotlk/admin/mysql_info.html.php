<?php
if ($this->security()) {
// INCLUDE page_header.html
$this->assign_from_include('page_header.html');
echo '
<table width="100%" border="0" cellspacing="1" cellpadding="2">
  <tr>
    <th align="center" colspan="5">' . ((isset($this->_tpldata['.'][0]['L_EQDKP_TABLES'])) ? $this->_tpldata['.'][0]['L_EQDKP_TABLES'] : ((isset($user->lang['EQDKP_TABLES'])) ? $user->lang['EQDKP_TABLES'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'EQDKP_TABLES'))) . ' 	}')) . '</th>
  </tr>
  <tr>
    <th align="left" width="25" nowrap="nowrap">&nbsp;</th>
    <th align="left">' . ((isset($this->_tpldata['.'][0]['L_TABLE_NAME'])) ? $this->_tpldata['.'][0]['L_TABLE_NAME'] : ((isset($user->lang['TABLE_NAME'])) ? $user->lang['TABLE_NAME'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'TABLE_NAME'))) . ' 	}')) . ' (' . ((isset($this->_tpldata['.'][0]['NUM_TABLES'])) ? $this->_tpldata['.'][0]['NUM_TABLES'] : '') . ')</th>
    <th align="left" nowrap="nowrap">' . ((isset($this->_tpldata['.'][0]['L_ROWS'])) ? $this->_tpldata['.'][0]['L_ROWS'] : ((isset($user->lang['ROWS'])) ? $user->lang['ROWS'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'ROWS'))) . ' 	}')) . '</th>
    <th align="left" nowrap="nowrap">' . ((isset($this->_tpldata['.'][0]['L_TABLE_SIZE'])) ? $this->_tpldata['.'][0]['L_TABLE_SIZE'] : ((isset($user->lang['TABLE_SIZE'])) ? $user->lang['TABLE_SIZE'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'TABLE_SIZE'))) . ' 	}')) . '</th>
    <th align="left" nowrap="nowrap">' . ((isset($this->_tpldata['.'][0]['L_INDEX_SIZE'])) ? $this->_tpldata['.'][0]['L_INDEX_SIZE'] : ((isset($user->lang['INDEX_SIZE'])) ? $user->lang['INDEX_SIZE'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'INDEX_SIZE'))) . ' 	}')) . '</th>
  </tr>
  ';// BEGIN table_row
$_table_row_count = (isset($this->_tpldata['table_row.'])) ?  sizeof($this->_tpldata['table_row.']) : 0;
if ($_table_row_count) {
for ($_table_row_i = 0; $_table_row_i < $_table_row_count; $_table_row_i++)
{
echo '
  <tr class="' . ((isset($this->_tpldata['table_row.'][$_table_row_i]['ROW_CLASS'])) ? $this->_tpldata['table_row.'][$_table_row_i]['ROW_CLASS'] : '') . '">
    <td width="25" nowrap="nowrap">&nbsp;</td>
    <td nowrap="nowrap">' . ((isset($this->_tpldata['table_row.'][$_table_row_i]['TABLE_NAME'])) ? $this->_tpldata['table_row.'][$_table_row_i]['TABLE_NAME'] : '') . '</td>
    <td nowrap="nowrap">' . ((isset($this->_tpldata['table_row.'][$_table_row_i]['ROWS'])) ? $this->_tpldata['table_row.'][$_table_row_i]['ROWS'] : '') . '</td>
    <td nowrap="nowrap">' . ((isset($this->_tpldata['table_row.'][$_table_row_i]['TABLE_SIZE'])) ? $this->_tpldata['table_row.'][$_table_row_i]['TABLE_SIZE'] : '') . '</td>
    <td nowrap="nowrap">' . ((isset($this->_tpldata['table_row.'][$_table_row_i]['INDEX_SIZE'])) ? $this->_tpldata['table_row.'][$_table_row_i]['INDEX_SIZE'] : '') . '</td>
  </tr>
  ';}}
// END table_row
echo '
  <tr>
    <th align="left" colspan="3"><b>' . ((isset($this->_tpldata['.'][0]['L_TOTALS'])) ? $this->_tpldata['.'][0]['L_TOTALS'] : ((isset($user->lang['TOTALS'])) ? $user->lang['TOTALS'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'TOTALS'))) . ' 	}')) . ':</b> ' . ((isset($this->_tpldata['.'][0]['TOTAL_SIZE'])) ? $this->_tpldata['.'][0]['TOTAL_SIZE'] : '') . '</th>
    <th align="left" width="75">' . ((isset($this->_tpldata['.'][0]['TOTAL_TABLE_SIZE'])) ? $this->_tpldata['.'][0]['TOTAL_TABLE_SIZE'] : '') . '</th>
    <th align="left" width="100">' . ((isset($this->_tpldata['.'][0]['TOTAL_INDEX_SIZE'])) ? $this->_tpldata['.'][0]['TOTAL_INDEX_SIZE'] : '') . '</th>
  </tr>
</table>
';// INCLUDE page_tail.html
$this->assign_from_include('page_tail.html');

}
?>