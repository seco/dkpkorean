<?php
if ($this->security()) {
// INCLUDE page_header.html
$this->assign_from_include('page_header.html');
echo '
<center>
';// IF SEARCH_SET
if ($this->_tpldata['.'][0]['SEARCH_SET']) { 
echo '
<table width="100%" border="0" cellspacing="0" cellpadding="3" class="borderless">
  <tr>
    <td align="center" >' . ((isset($this->_tpldata['.'][0]['ITEM_PAGINATION'])) ? $this->_tpldata['.'][0]['ITEM_PAGINATION'] : '') . '</td>
  </tr>
</table>
';// ENDIF
}
echo '
<form method="get">
<table width="100%" border="0" cellspacing="0" cellpadding="3">
  <tr>
    <th align="right" nowrap="nowrap" >' . ((isset($this->_tpldata['.'][0]['SEARCH'])) ? $this->_tpldata['.'][0]['SEARCH'] : '') . '  </th>
    <th align="left">&nbsp;<input name="search" class="input" type="text" size="40" /></th>
 	<th align="right" nowrap="nowrap" >&nbsp ' . ((isset($this->_tpldata['.'][0]['SEARCHBY'])) ? $this->_tpldata['.'][0]['SEARCHBY'] : '') . '</th>
	<th align="left" ><input name="search_type" class="input" type="radio"value="itemname" checked>' . ((isset($this->_tpldata['.'][0]['ITEMM'])) ? $this->_tpldata['.'][0]['ITEMM'] : '') . '<input name="search_type" class="input" type="radio"value="buyer">' . ((isset($this->_tpldata['.'][0]['BUYERR'])) ? $this->_tpldata['.'][0]['BUYERR'] : '') . ' <input name="search_type" class="input" type="radio"value="raidname">' . ((isset($this->_tpldata['.'][0]['RAIDD'])) ? $this->_tpldata['.'][0]['RAIDD'] : '') . ' </th>
 	<th align="right" nowrap="nowrap" >&nbsp ' . ((isset($this->_tpldata['.'][0]['UNIQUE'])) ? $this->_tpldata['.'][0]['UNIQUE'] : '') . '</th>
	<th align="left" ><input name="unique_result" class="input" type="radio"value="no" checked>' . ((isset($this->_tpldata['.'][0]['NO'])) ? $this->_tpldata['.'][0]['NO'] : '') . ' <input name="unique_result" class="input" type="radio"value="yes">' . ((isset($this->_tpldata['.'][0]['YES'])) ? $this->_tpldata['.'][0]['YES'] : '') . '</th>
  </tr>
</table>
</form>
';// IF SEARCH_SET
if ($this->_tpldata['.'][0]['SEARCH_SET']) { 
echo '
<table width="100%" border="0" cellspacing="0" cellpadding="1" style="border-top: none">
  <tr>
    <th align="left" width="70" nowrap="nowrap"><a href="' . ((isset($this->_tpldata['.'][0]['U_LIST_ITEMS'])) ? $this->_tpldata['.'][0]['U_LIST_ITEMS'] : '') . 'o=' . ((isset($this->_tpldata['.'][0]['O_DATE'])) ? $this->_tpldata['.'][0]['O_DATE'] : '') . '&amp;start=' . ((isset($this->_tpldata['.'][0]['START'])) ? $this->_tpldata['.'][0]['START'] : '') . '">' . ((isset($this->_tpldata['.'][0]['L_DATE'])) ? $this->_tpldata['.'][0]['L_DATE'] : ((isset($user->lang['DATE'])) ? $user->lang['DATE'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'DATE'))) . ' 	}')) . '</a></th>
    <th align="left" width="100" nowrap="nowrap"><a href="' . ((isset($this->_tpldata['.'][0]['U_LIST_ITEMS'])) ? $this->_tpldata['.'][0]['U_LIST_ITEMS'] : '') . 'o=' . ((isset($this->_tpldata['.'][0]['O_BUYER'])) ? $this->_tpldata['.'][0]['O_BUYER'] : '') . '&amp;start=' . ((isset($this->_tpldata['.'][0]['START'])) ? $this->_tpldata['.'][0]['START'] : '') . '">' . ((isset($this->_tpldata['.'][0]['L_BUYER'])) ? $this->_tpldata['.'][0]['L_BUYER'] : ((isset($user->lang['BUYER'])) ? $user->lang['BUYER'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'BUYER'))) . ' 	}')) . '</a></th>
    <th align="left" width="65%"><a href="' . ((isset($this->_tpldata['.'][0]['U_LIST_ITEMS'])) ? $this->_tpldata['.'][0]['U_LIST_ITEMS'] : '') . 'o=' . ((isset($this->_tpldata['.'][0]['O_NAME'])) ? $this->_tpldata['.'][0]['O_NAME'] : '') . '&amp;start=' . ((isset($this->_tpldata['.'][0]['START'])) ? $this->_tpldata['.'][0]['START'] : '') . '">' . ((isset($this->_tpldata['.'][0]['L_ITEM'])) ? $this->_tpldata['.'][0]['L_ITEM'] : ((isset($user->lang['ITEM'])) ? $user->lang['ITEM'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'ITEM'))) . ' 	}')) . '</a></th>
    <th align="left" width="35%"><a href="' . ((isset($this->_tpldata['.'][0]['U_LIST_ITEMS'])) ? $this->_tpldata['.'][0]['U_LIST_ITEMS'] : '') . 'o=' . ((isset($this->_tpldata['.'][0]['O_RAID'])) ? $this->_tpldata['.'][0]['O_RAID'] : '') . '&amp;start=' . ((isset($this->_tpldata['.'][0]['START'])) ? $this->_tpldata['.'][0]['START'] : '') . '">' . ((isset($this->_tpldata['.'][0]['L_RAID'])) ? $this->_tpldata['.'][0]['L_RAID'] : ((isset($user->lang['RAID'])) ? $user->lang['RAID'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'RAID'))) . ' 	}')) . '</a></th>
    <th align="right" width="60" nowrap="nowrap"><a href="' . ((isset($this->_tpldata['.'][0]['U_LIST_ITEMS'])) ? $this->_tpldata['.'][0]['U_LIST_ITEMS'] : '') . 'o=' . ((isset($this->_tpldata['.'][0]['O_VALUE'])) ? $this->_tpldata['.'][0]['O_VALUE'] : '') . '&amp;start=' . ((isset($this->_tpldata['.'][0]['START'])) ? $this->_tpldata['.'][0]['START'] : '') . '">' . ((isset($this->_tpldata['.'][0]['L_VALUE'])) ? $this->_tpldata['.'][0]['L_VALUE'] : ((isset($user->lang['VALUE'])) ? $user->lang['VALUE'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'VALUE'))) . ' 	}')) . '</a></th>
  </tr>
  ';// BEGIN items_row
$_items_row_count = (isset($this->_tpldata['items_row.'])) ?  sizeof($this->_tpldata['items_row.']) : 0;
if ($_items_row_count) {
for ($_items_row_i = 0; $_items_row_i < $_items_row_count; $_items_row_i++)
{
echo '
  <tr class="' . ((isset($this->_tpldata['items_row.'][$_items_row_i]['ROW_CLASS'])) ? $this->_tpldata['items_row.'][$_items_row_i]['ROW_CLASS'] : '') . '">
    <td width="70" nowrap="nowrap">' . ((isset($this->_tpldata['items_row.'][$_items_row_i]['DATE'])) ? $this->_tpldata['items_row.'][$_items_row_i]['DATE'] : '') . '&nbsp</td>
    <td align="left" width="100" nowrap="nowrap"><a href="' . ((isset($this->_tpldata['items_row.'][$_items_row_i]['U_VIEW_BUYER'])) ? $this->_tpldata['items_row.'][$_items_row_i]['U_VIEW_BUYER'] : '') . '">' . ((isset($this->_tpldata['items_row.'][$_items_row_i]['BUYER'])) ? $this->_tpldata['items_row.'][$_items_row_i]['BUYER'] : '') . '&nbsp</a></td>
    <td align="left" width="65%"><a href="' . ((isset($this->_tpldata['items_row.'][$_items_row_i]['U_VIEW_ITEM'])) ? $this->_tpldata['items_row.'][$_items_row_i]['U_VIEW_ITEM'] : '') . '">' . ((isset($this->_tpldata['items_row.'][$_items_row_i]['NAME'])) ? $this->_tpldata['items_row.'][$_items_row_i]['NAME'] : '') . '</a></td>
    <td align="left" width="35%"><a href="' . ((isset($this->_tpldata['items_row.'][$_items_row_i]['U_VIEW_RAID'])) ? $this->_tpldata['items_row.'][$_items_row_i]['U_VIEW_RAID'] : '') . '">' . ((isset($this->_tpldata['items_row.'][$_items_row_i]['RAID'])) ? $this->_tpldata['items_row.'][$_items_row_i]['RAID'] : '') . '</a></td>
    <td align="right" width="60" nowrap="nowrap" class="negative">' . ((isset($this->_tpldata['items_row.'][$_items_row_i]['VALUE'])) ? $this->_tpldata['items_row.'][$_items_row_i]['VALUE'] : '') . '</td>
  </tr>
  ';}}
// END items_row
echo '
  <tr>
    <th colspan="5" class="footer">' . ((isset($this->_tpldata['.'][0]['LISTITEMS_FOOTCOUNT'])) ? $this->_tpldata['.'][0]['LISTITEMS_FOOTCOUNT'] : '') . '</th>
  </tr>
</table>
<table width="800" border="0" cellspacing="0" cellpadding="1" class="borderless">
  <tr>
    <td align="center" >' . ((isset($this->_tpldata['.'][0]['ITEM_PAGINATION'])) ? $this->_tpldata['.'][0]['ITEM_PAGINATION'] : '') . '</td>
  </tr>
</table>
';// ENDIF
}
echo '
</center>
';// INCLUDE page_tail.html
$this->assign_from_include('page_tail.html');

}
?>