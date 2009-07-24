<?php
if ($this->security()) {
// INCLUDE page_header.html
$this->assign_from_include('page_header.html');
echo '
<table width="100%" border="0" cellspacing="0" cellpadding="1" border="1">
<tr>
    <th align="center"  colspan="2" nowrap="nowrap">' . ((isset($this->_tpldata['.'][0]['GUILDTAG'])) ? $this->_tpldata['.'][0]['GUILDTAG'] : '') . ' ' . ((isset($this->_tpldata['.'][0]['NAME'])) ? $this->_tpldata['.'][0]['NAME'] : '') . ' | ' . ((isset($this->_tpldata['.'][0]['RACENAME'])) ? $this->_tpldata['.'][0]['RACENAME'] : '') . ' - ' . ((isset($this->_tpldata['.'][0]['CLASSNAME'])) ? $this->_tpldata['.'][0]['CLASSNAME'] : '') . '</th>
</tr>
<tr class="row1">
    <td valign="center" align="center">
	    <table border="0" width="100%">
	    <tr><td valign="center" align="center" nowrap >' . ((isset($this->_tpldata['.'][0]['CLASS_RACE_IMG'])) ? $this->_tpldata['.'][0]['CLASS_RACE_IMG'] : '') . '</td></tr>
	    </table>
    </td>
    <td valign="top">
   		 ';// IF IS_MULTIDKP
if ($this->_tpldata['.'][0]['IS_MULTIDKP']) { 
echo '
		<table width="500" border="0" cellspacing="0" cellpadding="2">
			<tr>
				<th align="left" width="60" nowrap="nowrap">' . ((isset($this->_tpldata['.'][0]['L_MULTI_KONTONAME_SHORT'])) ? $this->_tpldata['.'][0]['L_MULTI_KONTONAME_SHORT'] : ((isset($user->lang['MULTI_KONTONAME_SHORT'])) ? $user->lang['MULTI_KONTONAME_SHORT'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'MULTI_KONTONAME_SHORT'))) . ' 	}')) . '</th>
				<th align="left" width="60" nowrap="nowrap">' . ((isset($this->_tpldata['.'][0]['L_EARNED'])) ? $this->_tpldata['.'][0]['L_EARNED'] : ((isset($user->lang['EARNED'])) ? $user->lang['EARNED'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'EARNED'))) . ' 	}')) . '</th>
				<th align="left" width="60" nowrap="nowrap">' . ((isset($this->_tpldata['.'][0]['L_SPENT'])) ? $this->_tpldata['.'][0]['L_SPENT'] : ((isset($user->lang['SPENT'])) ? $user->lang['SPENT'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'SPENT'))) . ' 	}')) . '</th>
				<th align="left" width="60" nowrap="nowrap">' . ((isset($this->_tpldata['.'][0]['L_ADJUSTMENT'])) ? $this->_tpldata['.'][0]['L_ADJUSTMENT'] : ((isset($user->lang['ADJUSTMENT'])) ? $user->lang['ADJUSTMENT'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'ADJUSTMENT'))) . ' 	}')) . '</th>
				<th align="left" width="60" nowrap="nowrap">' . ((isset($this->_tpldata['.'][0]['L_CURRENT'])) ? $this->_tpldata['.'][0]['L_CURRENT'] : ((isset($user->lang['CURRENT'])) ? $user->lang['CURRENT'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'CURRENT'))) . ' 	}')) . '</th>
		  	</tr>
		    ';// BEGIN multidkp
$_multidkp_count = (isset($this->_tpldata['multidkp.'])) ?  sizeof($this->_tpldata['multidkp.']) : 0;
if ($_multidkp_count) {
for ($_multidkp_i = 0; $_multidkp_i < $_multidkp_count; $_multidkp_i++)
{
echo '
		    <tr class="' . ((isset($this->_tpldata['multidkp.'][$_multidkp_i]['ROW_CLASS'])) ? $this->_tpldata['multidkp.'][$_multidkp_i]['ROW_CLASS'] : '') . '" onmouseover="this.className=\'rowHover\';" onmouseout="this.className=\'' . ((isset($this->_tpldata['multidkp.'][$_multidkp_i]['ROW_CLASS'])) ? $this->_tpldata['multidkp.'][$_multidkp_i]['ROW_CLASS'] : '') . '\';">
		    	<td width="65" nowrap="nowrap" >' . ((isset($this->_tpldata['multidkp.'][$_multidkp_i]['NNAME'])) ? $this->_tpldata['multidkp.'][$_multidkp_i]['NNAME'] : '') . '</td>
		    	<td width="65" nowrap="nowrap" class="' . ((isset($this->_tpldata['multidkp.'][$_multidkp_i]['C_EARNED'])) ? $this->_tpldata['multidkp.'][$_multidkp_i]['C_EARNED'] : '') . '">' . ((isset($this->_tpldata['multidkp.'][$_multidkp_i]['EARNED'])) ? $this->_tpldata['multidkp.'][$_multidkp_i]['EARNED'] : '') . '</td>
		    	<td width="65" nowrap="nowrap" class="negative">' . ((isset($this->_tpldata['multidkp.'][$_multidkp_i]['SPENT'])) ? $this->_tpldata['multidkp.'][$_multidkp_i]['SPENT'] : '') . '</td>
		    	<td width="65" nowrap="nowrap" class="' . ((isset($this->_tpldata['multidkp.'][$_multidkp_i]['C_ADJUST'])) ? $this->_tpldata['multidkp.'][$_multidkp_i]['C_ADJUST'] : '') . '">' . ((isset($this->_tpldata['multidkp.'][$_multidkp_i]['ADJUST'])) ? $this->_tpldata['multidkp.'][$_multidkp_i]['ADJUST'] : '') . '</td>
		    	<td width="65" nowrap="nowrap" class="' . ((isset($this->_tpldata['multidkp.'][$_multidkp_i]['C_CURRENT'])) ? $this->_tpldata['multidkp.'][$_multidkp_i]['C_CURRENT'] : '') . '"><b>' . ((isset($this->_tpldata['multidkp.'][$_multidkp_i]['CURRENT'])) ? $this->_tpldata['multidkp.'][$_multidkp_i]['CURRENT'] : '') . '</b></td>
		    </tr>
		    ';}}
// END multidkp
echo '
    	</table>
    	<br>
    	<table width="500" border="0" cellspacing="0" cellpadding="1">
    		<tr>
				<th align="center" colspan="2" nowrap="nowrap">' . ((isset($this->_tpldata['.'][0]['L_ATTENDANCE_BY_EVENT'])) ? $this->_tpldata['.'][0]['L_ATTENDANCE_BY_EVENT'] : ((isset($user->lang['ATTENDANCE_BY_EVENT'])) ? $user->lang['ATTENDANCE_BY_EVENT'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'ATTENDANCE_BY_EVENT'))) . ' 	}')) . '</th> </tr>
        <tr class="row1"><td align="left" width="20%" nowrap="nowrap"><b>' . ((isset($this->_tpldata['.'][0]['L_RAIDS_30_DAYS'])) ? $this->_tpldata['.'][0]['L_RAIDS_30_DAYS'] : ((isset($user->lang['RAIDS_30_DAYS'])) ? $user->lang['RAIDS_30_DAYS'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'RAIDS_30_DAYS'))) . ' 	}')) . '</b>:</td><td> <span class="' . ((isset($this->_tpldata['.'][0]['C_RAIDS_30_DAYS'])) ? $this->_tpldata['.'][0]['C_RAIDS_30_DAYS'] : '') . '">' . ((isset($this->_tpldata['.'][0]['RAIDS_30_DAYS'])) ? $this->_tpldata['.'][0]['RAIDS_30_DAYS'] : '') . '</span></td></tr>
        <tr class="row2"><td align="left" width="20%" nowrap="nowrap"><b>' . ((isset($this->_tpldata['.'][0]['L_RAIDS_60_DAYS'])) ? $this->_tpldata['.'][0]['L_RAIDS_60_DAYS'] : ((isset($user->lang['RAIDS_60_DAYS'])) ? $user->lang['RAIDS_60_DAYS'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'RAIDS_60_DAYS'))) . ' 	}')) . '</b>:</td><td> <span class="' . ((isset($this->_tpldata['.'][0]['C_RAIDS_30_DAYS'])) ? $this->_tpldata['.'][0]['C_RAIDS_30_DAYS'] : '') . '">' . ((isset($this->_tpldata['.'][0]['RAIDS_60_DAYS'])) ? $this->_tpldata['.'][0]['RAIDS_60_DAYS'] : '') . '</span></td></tr>
        <tr class="row1"><td align="left" width="20%" nowrap="nowrap"><b>' . ((isset($this->_tpldata['.'][0]['L_RAIDS_90_DAYS'])) ? $this->_tpldata['.'][0]['L_RAIDS_90_DAYS'] : ((isset($user->lang['RAIDS_90_DAYS'])) ? $user->lang['RAIDS_90_DAYS'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'RAIDS_90_DAYS'))) . ' 	}')) . '</b>:</td><td> <span class="' . ((isset($this->_tpldata['.'][0]['C_RAIDS_90_DAYS'])) ? $this->_tpldata['.'][0]['C_RAIDS_90_DAYS'] : '') . '">' . ((isset($this->_tpldata['.'][0]['RAIDS_90_DAYS'])) ? $this->_tpldata['.'][0]['RAIDS_90_DAYS'] : '') . '</span></td>
        <tr class="row2"><td align="left" width="40%" nowrap="nowrap"><b>' . ((isset($this->_tpldata['.'][0]['L_RAIDS_LIFETIME'])) ? $this->_tpldata['.'][0]['L_RAIDS_LIFETIME'] : ((isset($user->lang['RAIDS_LIFETIME'])) ? $user->lang['RAIDS_LIFETIME'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'RAIDS_LIFETIME'))) . ' 	}')) . '</b>:</td><td> <span class="' . ((isset($this->_tpldata['.'][0]['C_RAIDS_LIFETIME'])) ? $this->_tpldata['.'][0]['C_RAIDS_LIFETIME'] : '') . '">' . ((isset($this->_tpldata['.'][0]['RAIDS_LIFETIME'])) ? $this->_tpldata['.'][0]['RAIDS_LIFETIME'] : '') . '</span></td></tr>
    </table>
    ';// ELSE
} else {
echo '
    <table height="184" width="500" border="0" cellspacing="0" cellpadding="1">
        <tr><td align="left" class="row1" width="20%" nowrap="nowrap"><b>' . ((isset($this->_tpldata['.'][0]['L_EARNED'])) ? $this->_tpldata['.'][0]['L_EARNED'] : ((isset($user->lang['EARNED'])) ? $user->lang['EARNED'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'EARNED'))) . ' 	}')) . '</b>: <span class="positive">' . ((isset($this->_tpldata['.'][0]['EARNED'])) ? $this->_tpldata['.'][0]['EARNED'] : '') . '</span></td></tr>
        <tr><td align="left" class="row2" width="20%" nowrap="nowrap"><b>' . ((isset($this->_tpldata['.'][0]['L_SPENT'])) ? $this->_tpldata['.'][0]['L_SPENT'] : ((isset($user->lang['SPENT'])) ? $user->lang['SPENT'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'SPENT'))) . ' 	}')) . '</b>: <span class="negative">' . ((isset($this->_tpldata['.'][0]['SPENT'])) ? $this->_tpldata['.'][0]['SPENT'] : '') . '</span></td></tr>
        <tr><td align="left" class="row1" width="20%" nowrap="nowrap"><b>' . ((isset($this->_tpldata['.'][0]['L_ADJUSTMENT'])) ? $this->_tpldata['.'][0]['L_ADJUSTMENT'] : ((isset($user->lang['ADJUSTMENT'])) ? $user->lang['ADJUSTMENT'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'ADJUSTMENT'))) . ' 	}')) . '</b>: <span class="' . ((isset($this->_tpldata['.'][0]['C_ADJUSTMENT'])) ? $this->_tpldata['.'][0]['C_ADJUSTMENT'] : '') . '">' . ((isset($this->_tpldata['.'][0]['ADJUSTMENT'])) ? $this->_tpldata['.'][0]['ADJUSTMENT'] : '') . '</span></td></tr>
        <tr><td align="left" class="row2" width="40%" nowrap="nowrap"><b>' . ((isset($this->_tpldata['.'][0]['L_CURRENT'])) ? $this->_tpldata['.'][0]['L_CURRENT'] : ((isset($user->lang['CURRENT'])) ? $user->lang['CURRENT'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'CURRENT'))) . ' 	}')) . '</b>: <span class="' . ((isset($this->_tpldata['.'][0]['C_CURRENT'])) ? $this->_tpldata['.'][0]['C_CURRENT'] : '') . '">' . ((isset($this->_tpldata['.'][0]['CURRENT'])) ? $this->_tpldata['.'][0]['CURRENT'] : '') . '</span></td></tr>
        <tr><td align="left" class="row1" width="20%" nowrap="nowrap"><b>' . ((isset($this->_tpldata['.'][0]['L_RAIDS_30_DAYS'])) ? $this->_tpldata['.'][0]['L_RAIDS_30_DAYS'] : ((isset($user->lang['RAIDS_30_DAYS'])) ? $user->lang['RAIDS_30_DAYS'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'RAIDS_30_DAYS'))) . ' 	}')) . '</b>: <span class="' . ((isset($this->_tpldata['.'][0]['C_RAIDS_30_DAYS'])) ? $this->_tpldata['.'][0]['C_RAIDS_30_DAYS'] : '') . '">' . ((isset($this->_tpldata['.'][0]['RAIDS_30_DAYS'])) ? $this->_tpldata['.'][0]['RAIDS_30_DAYS'] : '') . '</span></td></tr>
        <tr><td align="left" class="row2" width="20%" nowrap="nowrap"><b>' . ((isset($this->_tpldata['.'][0]['L_RAIDS_60_DAYS'])) ? $this->_tpldata['.'][0]['L_RAIDS_60_DAYS'] : ((isset($user->lang['RAIDS_60_DAYS'])) ? $user->lang['RAIDS_60_DAYS'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'RAIDS_60_DAYS'))) . ' 	}')) . '</b>: <span class="' . ((isset($this->_tpldata['.'][0]['C_RAIDS_30_DAYS'])) ? $this->_tpldata['.'][0]['C_RAIDS_30_DAYS'] : '') . '">' . ((isset($this->_tpldata['.'][0]['RAIDS_60_DAYS'])) ? $this->_tpldata['.'][0]['RAIDS_60_DAYS'] : '') . '</span></td></tr>
        <tr><td align="left" class="row1" width="20%" nowrap="nowrap"><b>' . ((isset($this->_tpldata['.'][0]['L_RAIDS_90_DAYS'])) ? $this->_tpldata['.'][0]['L_RAIDS_90_DAYS'] : ((isset($user->lang['RAIDS_90_DAYS'])) ? $user->lang['RAIDS_90_DAYS'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'RAIDS_90_DAYS'))) . ' 	}')) . '</b>: <span class="' . ((isset($this->_tpldata['.'][0]['C_RAIDS_90_DAYS'])) ? $this->_tpldata['.'][0]['C_RAIDS_90_DAYS'] : '') . '">' . ((isset($this->_tpldata['.'][0]['RAIDS_90_DAYS'])) ? $this->_tpldata['.'][0]['RAIDS_90_DAYS'] : '') . '</span></td>
        <tr><td align="left" class="row2" width="40%" nowrap="nowrap"><b>' . ((isset($this->_tpldata['.'][0]['L_RAIDS_LIFETIME'])) ? $this->_tpldata['.'][0]['L_RAIDS_LIFETIME'] : ((isset($user->lang['RAIDS_LIFETIME'])) ? $user->lang['RAIDS_LIFETIME'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'RAIDS_LIFETIME'))) . ' 	}')) . '</b>: <span class="' . ((isset($this->_tpldata['.'][0]['C_RAIDS_LIFETIME'])) ? $this->_tpldata['.'][0]['C_RAIDS_LIFETIME'] : '') . '">' . ((isset($this->_tpldata['.'][0]['RAIDS_LIFETIME'])) ? $this->_tpldata['.'][0]['RAIDS_LIFETIME'] : '') . '</span></td></tr>
    </table>
    ';// ENDIF
}
echo '
    </td>
</tr>

</table>
<br />
<table width="100%" border="0" cellspacing="1" cellpadding="2">
  <tr>
    <th align="center" colspan="5">' . ((isset($this->_tpldata['.'][0]['L_RAID_ATTENDANCE_HISTORY'])) ? $this->_tpldata['.'][0]['L_RAID_ATTENDANCE_HISTORY'] : ((isset($user->lang['RAID_ATTENDANCE_HISTORY'])) ? $user->lang['RAID_ATTENDANCE_HISTORY'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'RAID_ATTENDANCE_HISTORY'))) . ' 	}')) . '</th>
  </tr>
  <tr>
    <th align="left" width="70" nowrap="nowrap">' . ((isset($this->_tpldata['.'][0]['L_DATE'])) ? $this->_tpldata['.'][0]['L_DATE'] : ((isset($user->lang['DATE'])) ? $user->lang['DATE'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'DATE'))) . ' 	}')) . '</th>
    <th align="left" width="35%">' . ((isset($this->_tpldata['.'][0]['L_NAME'])) ? $this->_tpldata['.'][0]['L_NAME'] : ((isset($user->lang['NAME'])) ? $user->lang['NAME'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'NAME'))) . ' 	}')) . '</th>
    <th align="left" width="65%">' . ((isset($this->_tpldata['.'][0]['L_NOTE'])) ? $this->_tpldata['.'][0]['L_NOTE'] : ((isset($user->lang['NOTE'])) ? $user->lang['NOTE'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'NOTE'))) . ' 	}')) . '</th>
    <th align="left" width="60" nowrap="nowrap">' . ((isset($this->_tpldata['.'][0]['L_EARNED'])) ? $this->_tpldata['.'][0]['L_EARNED'] : ((isset($user->lang['EARNED'])) ? $user->lang['EARNED'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'EARNED'))) . ' 	}')) . '</th>
    ';// IF IS_MULTIDKP
if ($this->_tpldata['.'][0]['IS_MULTIDKP']) { 
// ELSE
} else {
echo '
    <th align="left" width="70" nowrap="nowrap">' . ((isset($this->_tpldata['.'][0]['L_CURRENT'])) ? $this->_tpldata['.'][0]['L_CURRENT'] : ((isset($user->lang['CURRENT'])) ? $user->lang['CURRENT'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'CURRENT'))) . ' 	}')) . '</th>
    ';// ENDIF
}
echo '
  </tr>
  ';// BEGIN raids_row
$_raids_row_count = (isset($this->_tpldata['raids_row.'])) ?  sizeof($this->_tpldata['raids_row.']) : 0;
if ($_raids_row_count) {
for ($_raids_row_i = 0; $_raids_row_i < $_raids_row_count; $_raids_row_i++)
{
echo '
  <tr class="' . ((isset($this->_tpldata['raids_row.'][$_raids_row_i]['ROW_CLASS'])) ? $this->_tpldata['raids_row.'][$_raids_row_i]['ROW_CLASS'] : '') . '" onmouseover="this.className=\'rowHover\';" onmouseout="this.className=\'' . ((isset($this->_tpldata['raids_row.'][$_raids_row_i]['ROW_CLASS'])) ? $this->_tpldata['raids_row.'][$_raids_row_i]['ROW_CLASS'] : '') . '\';">
    <td width="70" nowrap="nowrap">' . ((isset($this->_tpldata['raids_row.'][$_raids_row_i]['DATE'])) ? $this->_tpldata['raids_row.'][$_raids_row_i]['DATE'] : '') . '</td>
    <td width="35%"><a href="' . ((isset($this->_tpldata['raids_row.'][$_raids_row_i]['U_VIEW_RAID'])) ? $this->_tpldata['raids_row.'][$_raids_row_i]['U_VIEW_RAID'] : '') . '">' . ((isset($this->_tpldata['raids_row.'][$_raids_row_i]['NAME'])) ? $this->_tpldata['raids_row.'][$_raids_row_i]['NAME'] : '') . '</a></td>
    <td width="65%">' . ((isset($this->_tpldata['raids_row.'][$_raids_row_i]['NOTE'])) ? $this->_tpldata['raids_row.'][$_raids_row_i]['NOTE'] : '') . '</td>
    <td width="60" nowrap="nowrap" class="positive">' . ((isset($this->_tpldata['raids_row.'][$_raids_row_i]['EARNED'])) ? $this->_tpldata['raids_row.'][$_raids_row_i]['EARNED'] : '') . '</td>
    ';// IF IS_MULTIDKP
if ($this->_tpldata['.'][0]['IS_MULTIDKP']) { 
// ELSE
} else {
echo '
    <td width="70" nowrap="nowrap" class="positive">' . ((isset($this->_tpldata['raids_row.'][$_raids_row_i]['CURRENT_EARNED'])) ? $this->_tpldata['raids_row.'][$_raids_row_i]['CURRENT_EARNED'] : '') . '</td>
    ';// ENDIF
}
echo '
  </tr>
  ';}}
// END raids_row
echo '
  <tr>
    <th colspan="5" class="footer">' . ((isset($this->_tpldata['.'][0]['RAID_FOOTCOUNT'])) ? $this->_tpldata['.'][0]['RAID_FOOTCOUNT'] : '') . '</th>
  </tr>
</table>
<table width="100%" border="0" cellspacing="1" cellpadding="2" class="borderless">
  <tr>
    <td align="center" class="menu">' . ((isset($this->_tpldata['.'][0]['RAID_PAGINATION'])) ? $this->_tpldata['.'][0]['RAID_PAGINATION'] : '') . '</td>
  </tr>
</table>
<br />
<table width="100%" border="0" cellspacing="1" cellpadding="2">
  <tr>
    <th align="center" colspan="5">' . ((isset($this->_tpldata['.'][0]['L_ITEM_PURCHASE_HISTORY'])) ? $this->_tpldata['.'][0]['L_ITEM_PURCHASE_HISTORY'] : ((isset($user->lang['ITEM_PURCHASE_HISTORY'])) ? $user->lang['ITEM_PURCHASE_HISTORY'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'ITEM_PURCHASE_HISTORY'))) . ' 	}')) . '</th>
  </tr>
  <tr>
    <th align="left" width="70" nowrap="nowrap">' . ((isset($this->_tpldata['.'][0]['L_DATE'])) ? $this->_tpldata['.'][0]['L_DATE'] : ((isset($user->lang['DATE'])) ? $user->lang['DATE'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'DATE'))) . ' 	}')) . '</th>
    <th align="left" width="50%">' . ((isset($this->_tpldata['.'][0]['L_NAME'])) ? $this->_tpldata['.'][0]['L_NAME'] : ((isset($user->lang['NAME'])) ? $user->lang['NAME'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'NAME'))) . ' 	}')) . '</th>
    <th align="left" width="50%">' . ((isset($this->_tpldata['.'][0]['L_RAID'])) ? $this->_tpldata['.'][0]['L_RAID'] : ((isset($user->lang['RAID'])) ? $user->lang['RAID'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'RAID'))) . ' 	}')) . '</th>
    <th align="left" width="60" nowrap="nowrap">' . ((isset($this->_tpldata['.'][0]['L_SPENT'])) ? $this->_tpldata['.'][0]['L_SPENT'] : ((isset($user->lang['SPENT'])) ? $user->lang['SPENT'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'SPENT'))) . ' 	}')) . '</th>
    ';// IF IS_MULTIDKP
if ($this->_tpldata['.'][0]['IS_MULTIDKP']) { 
// ELSE
} else {
echo '
    <th align="left" width="70" nowrap="nowrap">' . ((isset($this->_tpldata['.'][0]['L_CURRENT'])) ? $this->_tpldata['.'][0]['L_CURRENT'] : ((isset($user->lang['CURRENT'])) ? $user->lang['CURRENT'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'CURRENT'))) . ' 	}')) . '</th>
    ';// ENDIF
}
echo '
  </tr>
  ';// BEGIN items_row
$_items_row_count = (isset($this->_tpldata['items_row.'])) ?  sizeof($this->_tpldata['items_row.']) : 0;
if ($_items_row_count) {
for ($_items_row_i = 0; $_items_row_i < $_items_row_count; $_items_row_i++)
{
echo '
  <tr class="' . ((isset($this->_tpldata['items_row.'][$_items_row_i]['ROW_CLASS'])) ? $this->_tpldata['items_row.'][$_items_row_i]['ROW_CLASS'] : '') . '" onmouseover="this.className=\'rowHover\';" onmouseout="this.className=\'' . ((isset($this->_tpldata['items_row.'][$_items_row_i]['ROW_CLASS'])) ? $this->_tpldata['items_row.'][$_items_row_i]['ROW_CLASS'] : '') . '\';">
    <td width="70" nowrap="nowrap">' . ((isset($this->_tpldata['items_row.'][$_items_row_i]['DATE'])) ? $this->_tpldata['items_row.'][$_items_row_i]['DATE'] : '') . '</td>
    <td width="50%"><a href="' . ((isset($this->_tpldata['items_row.'][$_items_row_i]['U_VIEW_ITEM'])) ? $this->_tpldata['items_row.'][$_items_row_i]['U_VIEW_ITEM'] : '') . '">' . ((isset($this->_tpldata['items_row.'][$_items_row_i]['NAME'])) ? $this->_tpldata['items_row.'][$_items_row_i]['NAME'] : '') . '</a></td>
    <td width="50%"><a href="' . ((isset($this->_tpldata['items_row.'][$_items_row_i]['U_VIEW_RAID'])) ? $this->_tpldata['items_row.'][$_items_row_i]['U_VIEW_RAID'] : '') . '">' . ((isset($this->_tpldata['items_row.'][$_items_row_i]['RAID'])) ? $this->_tpldata['items_row.'][$_items_row_i]['RAID'] : '') . '</a></td>
    <td width="60" nowrap="nowrap" class="negative">' . ((isset($this->_tpldata['items_row.'][$_items_row_i]['SPENT'])) ? $this->_tpldata['items_row.'][$_items_row_i]['SPENT'] : '') . '</td>
   ';// IF IS_MULTIDKP
if ($this->_tpldata['.'][0]['IS_MULTIDKP']) { 
// ELSE
} else {
echo '
    <td width="70" nowrap="nowrap" class="negative">' . ((isset($this->_tpldata['items_row.'][$_items_row_i]['CURRENT_SPENT'])) ? $this->_tpldata['items_row.'][$_items_row_i]['CURRENT_SPENT'] : '') . '</td>
    ';// ENDIF
}
echo '
  </tr>
  ';}}
// END items_row
echo '
  <tr>
    <th colspan="5" class="footer">' . ((isset($this->_tpldata['.'][0]['ITEM_FOOTCOUNT'])) ? $this->_tpldata['.'][0]['ITEM_FOOTCOUNT'] : '') . '</th>
  </tr>
</table>
<table width="100%" border="0" cellspacing="1" cellpadding="2" class="borderless">
  <tr>
    <td align="center" class="menu">' . ((isset($this->_tpldata['.'][0]['ITEM_PAGINATION'])) ? $this->_tpldata['.'][0]['ITEM_PAGINATION'] : '') . '</td>
  </tr>
</table>
<br />
<table width="100%" border="0" cellspacing="1" cellpadding="2">
  <tr>
    <th align="center" colspan="4">' . ((isset($this->_tpldata['.'][0]['L_INDIVIDUAL_ADJUSTMENT_HISTORY'])) ? $this->_tpldata['.'][0]['L_INDIVIDUAL_ADJUSTMENT_HISTORY'] : ((isset($user->lang['INDIVIDUAL_ADJUSTMENT_HISTORY'])) ? $user->lang['INDIVIDUAL_ADJUSTMENT_HISTORY'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'INDIVIDUAL_ADJUSTMENT_HISTORY'))) . ' 	}')) . '</th>
  </tr>
  <tr>
    <th align="left" width="70" nowrap="nowrap">' . ((isset($this->_tpldata['.'][0]['L_DATE'])) ? $this->_tpldata['.'][0]['L_DATE'] : ((isset($user->lang['DATE'])) ? $user->lang['DATE'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'DATE'))) . ' 	}')) . '</th>
    <th align="left" width="80" nowrap="nowrap">' . ((isset($this->_tpldata['.'][0]['L_RAID'])) ? $this->_tpldata['.'][0]['L_RAID'] : ((isset($user->lang['RAID'])) ? $user->lang['RAID'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'RAID'))) . ' 	}')) . '</th>
    <th align="left" width="100%">' . ((isset($this->_tpldata['.'][0]['L_REASON'])) ? $this->_tpldata['.'][0]['L_REASON'] : ((isset($user->lang['REASON'])) ? $user->lang['REASON'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'REASON'))) . ' 	}')) . '</th>
    <th align="left" width="90" nowrap="nowrap">' . ((isset($this->_tpldata['.'][0]['L_ADJUSTMENT'])) ? $this->_tpldata['.'][0]['L_ADJUSTMENT'] : ((isset($user->lang['ADJUSTMENT'])) ? $user->lang['ADJUSTMENT'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'ADJUSTMENT'))) . ' 	}')) . '</th>
  </tr>
  ';// BEGIN adjustments_row
$_adjustments_row_count = (isset($this->_tpldata['adjustments_row.'])) ?  sizeof($this->_tpldata['adjustments_row.']) : 0;
if ($_adjustments_row_count) {
for ($_adjustments_row_i = 0; $_adjustments_row_i < $_adjustments_row_count; $_adjustments_row_i++)
{
echo '
  <tr class="' . ((isset($this->_tpldata['adjustments_row.'][$_adjustments_row_i]['ROW_CLASS'])) ? $this->_tpldata['adjustments_row.'][$_adjustments_row_i]['ROW_CLASS'] : '') . '" onmouseover="this.className=\'rowHover\';" onmouseout="this.className=\'' . ((isset($this->_tpldata['adjustments_row.'][$_adjustments_row_i]['ROW_CLASS'])) ? $this->_tpldata['adjustments_row.'][$_adjustments_row_i]['ROW_CLASS'] : '') . '\';">
    <td width="70" nowrap="nowrap">' . ((isset($this->_tpldata['adjustments_row.'][$_adjustments_row_i]['DATE'])) ? $this->_tpldata['adjustments_row.'][$_adjustments_row_i]['DATE'] : '') . '</td>
    <td width="80" nowrap="nowrap">' . ((isset($this->_tpldata['adjustments_row.'][$_adjustments_row_i]['RAIDNAME'])) ? $this->_tpldata['adjustments_row.'][$_adjustments_row_i]['RAIDNAME'] : '') . '</td>
    <td width="100%">' . ((isset($this->_tpldata['adjustments_row.'][$_adjustments_row_i]['REASON'])) ? $this->_tpldata['adjustments_row.'][$_adjustments_row_i]['REASON'] : '') . '</td>
    <td width="90" nowrap="nowrap" class="' . ((isset($this->_tpldata['adjustments_row.'][$_adjustments_row_i]['C_INDIVIDUAL_ADJUSTMENT'])) ? $this->_tpldata['adjustments_row.'][$_adjustments_row_i]['C_INDIVIDUAL_ADJUSTMENT'] : '') . '">' . ((isset($this->_tpldata['adjustments_row.'][$_adjustments_row_i]['INDIVIDUAL_ADJUSTMENT'])) ? $this->_tpldata['adjustments_row.'][$_adjustments_row_i]['INDIVIDUAL_ADJUSTMENT'] : '') . '</td>
  </tr>
  ';}}
// END adjustments_row
echo '
  <tr>
    <th colspan="4" class="footer">' . ((isset($this->_tpldata['.'][0]['ADJUSTMENT_FOOTCOUNT'])) ? $this->_tpldata['.'][0]['ADJUSTMENT_FOOTCOUNT'] : '') . '</th>
  </tr>
</table>
<br />
<a name="byevent"></a>
<table width="100%" border="0" cellspacing="1" cellpadding="2">
  <tr>
    <th align="center" colspan="2">' . ((isset($this->_tpldata['.'][0]['L_ATTENDANCE_BY_EVENT'])) ? $this->_tpldata['.'][0]['L_ATTENDANCE_BY_EVENT'] : ((isset($user->lang['ATTENDANCE_BY_EVENT'])) ? $user->lang['ATTENDANCE_BY_EVENT'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'ATTENDANCE_BY_EVENT'))) . ' 	}')) . '</th>
  </tr>
  <tr>
    <th align="left" width="200"><a href="' . ((isset($this->_tpldata['.'][0]['U_VIEW_MEMBER'])) ? $this->_tpldata['.'][0]['U_VIEW_MEMBER'] : '') . 'o=' . ((isset($this->_tpldata['.'][0]['O_EVENT'])) ? $this->_tpldata['.'][0]['O_EVENT'] : '') . '#byevent">' . ((isset($this->_tpldata['.'][0]['L_EVENT'])) ? $this->_tpldata['.'][0]['L_EVENT'] : ((isset($user->lang['EVENT'])) ? $user->lang['EVENT'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'EVENT'))) . ' 	}')) . '</a></th>
    <th align="left" width="100%"><a href="' . ((isset($this->_tpldata['.'][0]['U_VIEW_MEMBER'])) ? $this->_tpldata['.'][0]['U_VIEW_MEMBER'] : '') . 'o=' . ((isset($this->_tpldata['.'][0]['O_PERCENT'])) ? $this->_tpldata['.'][0]['O_PERCENT'] : '') . '#byevent">' . ((isset($this->_tpldata['.'][0]['L_PERCENT'])) ? $this->_tpldata['.'][0]['L_PERCENT'] : ((isset($user->lang['PERCENT'])) ? $user->lang['PERCENT'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'PERCENT'))) . ' 	}')) . '</a></th>
  </tr>
  ';// BEGIN event_row
$_event_row_count = (isset($this->_tpldata['event_row.'])) ?  sizeof($this->_tpldata['event_row.']) : 0;
if ($_event_row_count) {
for ($_event_row_i = 0; $_event_row_i < $_event_row_count; $_event_row_i++)
{
echo '
  <tr>
    <td width="200" class="row2" nowrap="nowrap"><a href="' . ((isset($this->_tpldata['event_row.'][$_event_row_i]['U_VIEW_EVENT'])) ? $this->_tpldata['event_row.'][$_event_row_i]['U_VIEW_EVENT'] : '') . '" class="small">' . ((isset($this->_tpldata['event_row.'][$_event_row_i]['EVENT'])) ? $this->_tpldata['event_row.'][$_event_row_i]['EVENT'] : '') . '</a></td>
    <td width="100%" class="row1">' . ((isset($this->_tpldata['event_row.'][$_event_row_i]['BAR'])) ? $this->_tpldata['event_row.'][$_event_row_i]['BAR'] : '') . '</td>
  </tr>
  ';}}
// END event_row
echo '
  <tr>
    <th colspan="2">&nbsp;</th>
  </tr>
</table>
<br>
' . ((isset($this->_tpldata['.'][0]['COMMENT'])) ? $this->_tpldata['.'][0]['COMMENT'] : '') . '
<br>
<table width="100%" border="0" cellspacing="0" cellpadding="1" border="1">
	<tr>
		<th>
			<span id="config1-title" class="iconspan"><img src="./pluskernel/images/minus.gif" alt="" border="0" height="9" width="9"></span> ' . ((isset($this->_tpldata['.'][0]['L_SERVICE'])) ? $this->_tpldata['.'][0]['L_SERVICE'] : ((isset($user->lang['SERVICE'])) ? $user->lang['SERVICE'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'SERVICE'))) . ' 	}')) . '
		</th>
	<tr>
		<td class="row1">
			<div id="config1" class="icongroup1">
			<table class="borderless" align="center" border="0" cellpadding="0" cellspacing="5" width="100%">
				<tr>
					<td>' . ((isset($this->_tpldata['.'][0]['SIGNATUR'])) ? $this->_tpldata['.'][0]['SIGNATUR'] : '') . '</td>
					<td>' . ((isset($this->_tpldata['.'][0]['SHIRT_SHOP'])) ? $this->_tpldata['.'][0]['SHIRT_SHOP'] : '') . '</td>
				</tr>
			</table>
			</div>
		</td>
	</tr>
</table>

<script type="text/javascript">
var csetting=new switchicon("icongroup1", "div") //Limit scanning of switch contents to just "div" elements
csetting.setHeader(\'<img src="./pluskernel/images/minus.gif" />\', \'<img src="./pluskernel/images/plus.gif" />\') //set icon HTML
csetting.collapsePrevious(false) //Allow only 1 content open at any time
csetting.defaultExpanded(0) //Set 1st content to be expanded by default
csetting.setPersist(true) //No persistence enabled
csetting.init()
</script>

';// INCLUDE page_tail.html
$this->assign_from_include('page_tail.html');

}
?>