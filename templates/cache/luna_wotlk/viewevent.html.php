<?php
if ($this->security()) {
// INCLUDE page_header.html
$this->assign_from_include('page_header.html');
echo '
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td>
      <table width="100%" border="0" cellspacing="1" cellpadding="2" class="borderless">
        <tr>
          <th align="center" colspan="2">' . ((isset($this->_tpldata['.'][0]['L_RECORDED_RAID_HISTORY'])) ? $this->_tpldata['.'][0]['L_RECORDED_RAID_HISTORY'] : ((isset($user->lang['RECORDED_RAID_HISTORY'])) ? $user->lang['RECORDED_RAID_HISTORY'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'RECORDED_RAID_HISTORY'))) . ' 	}')) . '</th>
        </tr>
        <tr>
          <td width="50%" class="row1"><b>' . ((isset($this->_tpldata['.'][0]['L_ADDED_BY'])) ? $this->_tpldata['.'][0]['L_ADDED_BY'] : ((isset($user->lang['ADDED_BY'])) ? $user->lang['ADDED_BY'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'ADDED_BY'))) . ' 	}')) . ':</b> ' . ((isset($this->_tpldata['.'][0]['EVENT_ADDED_BY'])) ? $this->_tpldata['.'][0]['EVENT_ADDED_BY'] : '') . '</td>
          <td width="50%" class="row2"><b>' . ((isset($this->_tpldata['.'][0]['L_UPDATED_BY'])) ? $this->_tpldata['.'][0]['L_UPDATED_BY'] : ((isset($user->lang['UPDATED_BY'])) ? $user->lang['UPDATED_BY'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'UPDATED_BY'))) . ' 	}')) . ':</b> ' . ((isset($this->_tpldata['.'][0]['EVENT_UPDATED_BY'])) ? $this->_tpldata['.'][0]['EVENT_UPDATED_BY'] : '') . '</td>
        </tr>
      </table>
      <table width="100%" border="0" cellspacing="1" cellpadding="2" class="borderless">
        <tr>
          <th align="center" width="16" nowrap="nowrap">&nbsp;</th>
          <th align="left" width="70" nowrap="nowrap"><a href="' . ((isset($this->_tpldata['.'][0]['U_VIEW_EVENT'])) ? $this->_tpldata['.'][0]['U_VIEW_EVENT'] : '') . 'o=' . ((isset($this->_tpldata['.'][0]['O_DATE'])) ? $this->_tpldata['.'][0]['O_DATE'] : '') . '">' . ((isset($this->_tpldata['.'][0]['L_DATE'])) ? $this->_tpldata['.'][0]['L_DATE'] : ((isset($user->lang['DATE'])) ? $user->lang['DATE'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'DATE'))) . ' 	}')) . '</a></th>
          <th align="left" width="100" nowrap="nowrap" class="rowhead">' . ((isset($this->_tpldata['.'][0]['L_ATTENDEES'])) ? $this->_tpldata['.'][0]['L_ATTENDEES'] : ((isset($user->lang['ATTENDEES'])) ? $user->lang['ATTENDEES'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'ATTENDEES'))) . ' 	}')) . '</th>
          <th align="left" width="50" nowrap="nowrap">' . ((isset($this->_tpldata['.'][0]['L_DROPS'])) ? $this->_tpldata['.'][0]['L_DROPS'] : ((isset($user->lang['DROPS'])) ? $user->lang['DROPS'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'DROPS'))) . ' 	}')) . '</th>
          <th align="left" width="100%"><a href="' . ((isset($this->_tpldata['.'][0]['U_VIEW_EVENT'])) ? $this->_tpldata['.'][0]['U_VIEW_EVENT'] : '') . 'o=' . ((isset($this->_tpldata['.'][0]['O_NOTE'])) ? $this->_tpldata['.'][0]['O_NOTE'] : '') . '">' . ((isset($this->_tpldata['.'][0]['L_NOTE'])) ? $this->_tpldata['.'][0]['L_NOTE'] : ((isset($user->lang['NOTE'])) ? $user->lang['NOTE'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'NOTE'))) . ' 	}')) . '</a></th>
          <th align="left" width="60" nowrap="nowrap"><a href="' . ((isset($this->_tpldata['.'][0]['U_VIEW_EVENT'])) ? $this->_tpldata['.'][0]['U_VIEW_EVENT'] : '') . 'o=' . ((isset($this->_tpldata['.'][0]['O_VALUE'])) ? $this->_tpldata['.'][0]['O_VALUE'] : '') . '">' . ((isset($this->_tpldata['.'][0]['L_VALUE'])) ? $this->_tpldata['.'][0]['L_VALUE'] : ((isset($user->lang['VALUE'])) ? $user->lang['VALUE'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'VALUE'))) . ' 	}')) . '</a></th>
        </tr>
        ';// BEGIN raids_row
$_raids_row_count = (isset($this->_tpldata['raids_row.'])) ?  sizeof($this->_tpldata['raids_row.']) : 0;
if ($_raids_row_count) {
for ($_raids_row_i = 0; $_raids_row_i < $_raids_row_count; $_raids_row_i++)
{
echo '
        <tr class="' . ((isset($this->_tpldata['raids_row.'][$_raids_row_i]['ROW_CLASS'])) ? $this->_tpldata['raids_row.'][$_raids_row_i]['ROW_CLASS'] : '') . '">
          <td width="16" align="center" nowrap="nowrap"><a href="' . ((isset($this->_tpldata['raids_row.'][$_raids_row_i]['U_VIEW_RAID'])) ? $this->_tpldata['raids_row.'][$_raids_row_i]['U_VIEW_RAID'] : '') . '"><img src="' . ((isset($this->_tpldata['.'][0]['EQDKP_ROOT_PATH'])) ? $this->_tpldata['.'][0]['EQDKP_ROOT_PATH'] : '') . 'images/glyphs/view.png" width="16" height="16" alt="View" /></a></td>
          <td width="70" nowrap="nowrap">' . ((isset($this->_tpldata['raids_row.'][$_raids_row_i]['DATE'])) ? $this->_tpldata['raids_row.'][$_raids_row_i]['DATE'] : '') . '</td>
          <td width="100" nowrap="nowrap">' . ((isset($this->_tpldata['raids_row.'][$_raids_row_i]['ATTENDEES'])) ? $this->_tpldata['raids_row.'][$_raids_row_i]['ATTENDEES'] : '') . '</td>
          <td width="50" nowrap="nowrap">' . ((isset($this->_tpldata['raids_row.'][$_raids_row_i]['DROPS'])) ? $this->_tpldata['raids_row.'][$_raids_row_i]['DROPS'] : '') . '</td>
          <td width="100%">' . ((isset($this->_tpldata['raids_row.'][$_raids_row_i]['NOTE'])) ? $this->_tpldata['raids_row.'][$_raids_row_i]['NOTE'] : '') . '</td>
          <td width="60" nowrap="nowrap" class="positive">' . ((isset($this->_tpldata['raids_row.'][$_raids_row_i]['VALUE'])) ? $this->_tpldata['raids_row.'][$_raids_row_i]['VALUE'] : '') . '</td>
        </tr>
        ';}}
// END raids_row
echo '
        <tr class="rowhead">
          <th colspan="6">&nbsp;</th>
        </tr>
        <tr class="' . ((isset($this->_tpldata['.'][0]['ROW_CLASS'])) ? $this->_tpldata['.'][0]['ROW_CLASS'] : '') . '">
          <td colspan="2" nowrap="nowrap" class="' . ((isset($this->_tpldata['.'][0]['ROW_CLASS'])) ? $this->_tpldata['.'][0]['ROW_CLASS'] : '') . '"><b>' . ((isset($this->_tpldata['.'][0]['L_AVERAGE'])) ? $this->_tpldata['.'][0]['L_AVERAGE'] : ((isset($user->lang['AVERAGE'])) ? $user->lang['AVERAGE'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'AVERAGE'))) . ' 	}')) . ':</b></td>
          <td width="100" nowrap="nowrap" class="' . ((isset($this->_tpldata['.'][0]['ROW_CLASS'])) ? $this->_tpldata['.'][0]['ROW_CLASS'] : '') . '">' . ((isset($this->_tpldata['.'][0]['AVERAGE_ATTENDEES'])) ? $this->_tpldata['.'][0]['AVERAGE_ATTENDEES'] : '') . '</td>
          <td width="50" nowrap="nowrap" class="' . ((isset($this->_tpldata['.'][0]['ROW_CLASS'])) ? $this->_tpldata['.'][0]['ROW_CLASS'] : '') . '">' . ((isset($this->_tpldata['.'][0]['AVERAGE_DROPS'])) ? $this->_tpldata['.'][0]['AVERAGE_DROPS'] : '') . '</td>
          <td align="right" class="' . ((isset($this->_tpldata['.'][0]['ROW_CLASS'])) ? $this->_tpldata['.'][0]['ROW_CLASS'] : '') . '"><b>' . ((isset($this->_tpldata['.'][0]['L_TOTAL_EARNED'])) ? $this->_tpldata['.'][0]['L_TOTAL_EARNED'] : ((isset($user->lang['TOTAL_EARNED'])) ? $user->lang['TOTAL_EARNED'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'TOTAL_EARNED'))) . ' 	}')) . ':</b></td>
          <td width="60" nowrap="nowrap" class="positive">' . ((isset($this->_tpldata['.'][0]['TOTAL_EARNED'])) ? $this->_tpldata['.'][0]['TOTAL_EARNED'] : '') . '</td>
        </tr>
        <tr>
          <th colspan="6" class="footer">' . ((isset($this->_tpldata['.'][0]['VIEWEVENT_FOOTCOUNT'])) ? $this->_tpldata['.'][0]['VIEWEVENT_FOOTCOUNT'] : '') . '</th>
        </tr>
      </table>
    </td>
  </tr>
</table>
<br />
<table width="100%" border="0" cellspacing="1" cellpadding="2">
  <tr>
    <th align="center" colspan="5">' . ((isset($this->_tpldata['.'][0]['L_ITEMS'])) ? $this->_tpldata['.'][0]['L_ITEMS'] : ((isset($user->lang['ITEMS'])) ? $user->lang['ITEMS'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'ITEMS'))) . ' 	}')) . '</th>
  </tr>
  <tr>
    <th align="center" width="16" nowrap="nowrap">&nbsp;</th>
    <th align="left" width="70" nowrap="nowrap">' . ((isset($this->_tpldata['.'][0]['L_DATE'])) ? $this->_tpldata['.'][0]['L_DATE'] : ((isset($user->lang['DATE'])) ? $user->lang['DATE'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'DATE'))) . ' 	}')) . '</th>
    <th align="left" width="15%" nowrap="nowrap">' . ((isset($this->_tpldata['.'][0]['L_BUYER'])) ? $this->_tpldata['.'][0]['L_BUYER'] : ((isset($user->lang['BUYER'])) ? $user->lang['BUYER'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'BUYER'))) . ' 	}')) . '</th>
    <th align="left" width="100%">' . ((isset($this->_tpldata['.'][0]['L_NAME'])) ? $this->_tpldata['.'][0]['L_NAME'] : ((isset($user->lang['NAME'])) ? $user->lang['NAME'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'NAME'))) . ' 	}')) . '</th>
    <th align="left" width="60" nowrap="nowrap">' . ((isset($this->_tpldata['.'][0]['L_SPENT'])) ? $this->_tpldata['.'][0]['L_SPENT'] : ((isset($user->lang['SPENT'])) ? $user->lang['SPENT'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'SPENT'))) . ' 	}')) . '</th>
  </tr>
  ';// BEGIN items_row
$_items_row_count = (isset($this->_tpldata['items_row.'])) ?  sizeof($this->_tpldata['items_row.']) : 0;
if ($_items_row_count) {
for ($_items_row_i = 0; $_items_row_i < $_items_row_count; $_items_row_i++)
{
echo '
  <tr class="' . ((isset($this->_tpldata['items_row.'][$_items_row_i]['ROW_CLASS'])) ? $this->_tpldata['items_row.'][$_items_row_i]['ROW_CLASS'] : '') . '">
    <td width="16" align="center" nowrap="nowrap"><a href="' . ((isset($this->_tpldata['items_row.'][$_items_row_i]['U_VIEW_RAID'])) ? $this->_tpldata['items_row.'][$_items_row_i]['U_VIEW_RAID'] : '') . '"><img src="' . ((isset($this->_tpldata['.'][0]['EQDKP_ROOT_PATH'])) ? $this->_tpldata['.'][0]['EQDKP_ROOT_PATH'] : '') . 'images/glyphs/view.png" width="16" height="16" alt="View" /></a></td>
    <td width="70" nowrap="nowrap">' . ((isset($this->_tpldata['items_row.'][$_items_row_i]['DATE'])) ? $this->_tpldata['items_row.'][$_items_row_i]['DATE'] : '') . '</td>
    <td width="150" nowrap="nowrap"><a href="' . ((isset($this->_tpldata['items_row.'][$_items_row_i]['U_VIEW_MEMBER'])) ? $this->_tpldata['items_row.'][$_items_row_i]['U_VIEW_MEMBER'] : '') . '">' . ((isset($this->_tpldata['items_row.'][$_items_row_i]['BUYER'])) ? $this->_tpldata['items_row.'][$_items_row_i]['BUYER'] : '') . '</a></td>
    <td width="100%"><a href="' . ((isset($this->_tpldata['items_row.'][$_items_row_i]['U_VIEW_ITEM'])) ? $this->_tpldata['items_row.'][$_items_row_i]['U_VIEW_ITEM'] : '') . '">' . ((isset($this->_tpldata['items_row.'][$_items_row_i]['NAME'])) ? $this->_tpldata['items_row.'][$_items_row_i]['NAME'] : '') . '</a></td>
    <td width="60" nowrap="nowrap" class="negative">' . ((isset($this->_tpldata['items_row.'][$_items_row_i]['SPENT'])) ? $this->_tpldata['items_row.'][$_items_row_i]['SPENT'] : '') . '</td>
  </tr>
  ';}}
// END items_row
echo '
  <tr>
    <th colspan="5" class="footer">' . ((isset($this->_tpldata['.'][0]['ITEM_FOOTCOUNT'])) ? $this->_tpldata['.'][0]['ITEM_FOOTCOUNT'] : '') . '</th>
  </tr>
</table>
';// INCLUDE page_tail.html
$this->assign_from_include('page_tail.html');

}
?>