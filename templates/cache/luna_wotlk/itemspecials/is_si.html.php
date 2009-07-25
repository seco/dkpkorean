<?php
if ($this->security()) {
echo '<script language="JavaScript" type="text/javascript">
function AboutDialog() {
  ' . ((isset($this->_tpldata['.'][0]['JS_ABOUT'])) ? $this->_tpldata['.'][0]['JS_ABOUT'] : '') . '
}
</script>
';// IF ITEMSTATS_TRUE
if ($this->_tpldata['.'][0]['ITEMSTATS_TRUE']) { 
echo '
<style type=\'text/css\'>
.middleitemicon { width: ' . ((isset($this->_tpldata['.'][0]['ICON_WIDTH'])) ? $this->_tpldata['.'][0]['ICON_WIDTH'] : '') . '; height: ' . ((isset($this->_tpldata['.'][0]['ICON_HEIGHT'])) ? $this->_tpldata['.'][0]['ICON_HEIGHT'] : '') . '; }
 </style>
';// ENDIF
}
echo '
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr><td>
';// IF S_NOTMM
if ($this->_tpldata['.'][0]['S_NOTMM']) { 
echo '
<form method="get" action="specialitems.php">
<input type="hidden" name="' . ((isset($this->_tpldata['.'][0]['URI_SESSION'])) ? $this->_tpldata['.'][0]['URI_SESSION'] : '') . '" value="' . ((isset($this->_tpldata['.'][0]['V_SID'])) ? $this->_tpldata['.'][0]['V_SID'] : '') . '" />
<table width="100%" border="0" cellspacing="1" cellpadding="2"class=\'borderless\'>
  <tr>
    <th align="right" width="56" nowrap="nowrap">' . ((isset($this->_tpldata['.'][0]['L_FILTER'])) ? $this->_tpldata['.'][0]['L_FILTER'] : ((isset($user->lang['FILTER'])) ? $user->lang['FILTER'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'FILTER'))) . ' 	}')) . ':</th>
    <th align="left">&nbsp;
      <select name="filter" class="input" onchange="javascript:form.submit();">
        ';// BEGIN filter_row
$_filter_row_count = (isset($this->_tpldata['filter_row.'])) ?  sizeof($this->_tpldata['filter_row.']) : 0;
if ($_filter_row_count) {
for ($_filter_row_i = 0; $_filter_row_i < $_filter_row_count; $_filter_row_i++)
{
echo '
        <option value="' . ((isset($this->_tpldata['filter_row.'][$_filter_row_i]['VALUE'])) ? $this->_tpldata['filter_row.'][$_filter_row_i]['VALUE'] : '') . '"' . ((isset($this->_tpldata['filter_row.'][$_filter_row_i]['SELECTED'])) ? $this->_tpldata['filter_row.'][$_filter_row_i]['SELECTED'] : '') . '>' . ((isset($this->_tpldata['filter_row.'][$_filter_row_i]['OPTION'])) ? $this->_tpldata['filter_row.'][$_filter_row_i]['OPTION'] : '') . '</option>
        ';}}
// END filter_row
echo '
      </select>
    </th>
  </tr>
</table>
</form>
</tr></td><tr><td>
';// ENDIF
}
echo '
<form method="post" action="' . ((isset($this->_tpldata['.'][0]['F_MEMBERS'])) ? $this->_tpldata['.'][0]['F_MEMBERS'] : '') . '" name="post">
<table width="100%" border="0" cellspacing="1" cellpadding="2" class=\'borderless\'>
  <tr>
    <th align="left" width="15" nowrap="nowrap">&nbsp;</th>
    <th align="left"><a href="' . ((isset($this->_tpldata['.'][0]['U_LIST_MEMBERS'])) ? $this->_tpldata['.'][0]['U_LIST_MEMBERS'] : '') . 'o=' . ((isset($this->_tpldata['.'][0]['O_NAME'])) ? $this->_tpldata['.'][0]['O_NAME'] : '') . '' . ((isset($this->_tpldata['.'][0]['URI_ADDON'])) ? $this->_tpldata['.'][0]['URI_ADDON'] : '') . '">' . ((isset($this->_tpldata['.'][0]['L_NAME'])) ? $this->_tpldata['.'][0]['L_NAME'] : ((isset($user->lang['NAME'])) ? $user->lang['NAME'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'NAME'))) . ' 	}')) . '</a></th>
    ';// IF SHOW_USR_RANK
if ($this->_tpldata['.'][0]['SHOW_USR_RANK']) { 
echo '
    <th align="left" width="80" nowrap="nowrap"><a href="' . ((isset($this->_tpldata['.'][0]['U_LIST_MEMBERS'])) ? $this->_tpldata['.'][0]['U_LIST_MEMBERS'] : '') . 'o=' . ((isset($this->_tpldata['.'][0]['O_RANK'])) ? $this->_tpldata['.'][0]['O_RANK'] : '') . '' . ((isset($this->_tpldata['.'][0]['URI_ADDON'])) ? $this->_tpldata['.'][0]['URI_ADDON'] : '') . '">' . ((isset($this->_tpldata['.'][0]['L_RANK'])) ? $this->_tpldata['.'][0]['L_RANK'] : ((isset($user->lang['RANK'])) ? $user->lang['RANK'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'RANK'))) . ' 	}')) . '</a></th>
    ';// ENDIF
}
// IF SHOW_USR_CLASS
if ($this->_tpldata['.'][0]['SHOW_USR_CLASS']) { 
echo '
   <th align="left" width="105" nowrap="nowrap"><a href="' . ((isset($this->_tpldata['.'][0]['U_LIST_MEMBERS'])) ? $this->_tpldata['.'][0]['U_LIST_MEMBERS'] : '') . 'o=' . ((isset($this->_tpldata['.'][0]['O_CLASS'])) ? $this->_tpldata['.'][0]['O_CLASS'] : '') . '' . ((isset($this->_tpldata['.'][0]['URI_ADDON'])) ? $this->_tpldata['.'][0]['URI_ADDON'] : '') . '">' . ((isset($this->_tpldata['.'][0]['L_CLASS'])) ? $this->_tpldata['.'][0]['L_CLASS'] : ((isset($user->lang['CLASS'])) ? $user->lang['CLASS'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'CLASS'))) . ' 	}')) . '</a></th>
    ';// ENDIF
}
// IF SHOW_CURR_DKP
if ($this->_tpldata['.'][0]['SHOW_CURR_DKP']) { 
echo '
    <th align="left" width="28" nowrap="nowrap"><a href="' . ((isset($this->_tpldata['.'][0]['U_LIST_MEMBERS'])) ? $this->_tpldata['.'][0]['U_LIST_MEMBERS'] : '') . 'o=' . ((isset($this->_tpldata['.'][0]['O_CURRENT'])) ? $this->_tpldata['.'][0]['O_CURRENT'] : '') . '' . ((isset($this->_tpldata['.'][0]['URI_ADDON'])) ? $this->_tpldata['.'][0]['URI_ADDON'] : '') . '">' . ((isset($this->_tpldata['.'][0]['L_CURRENT'])) ? $this->_tpldata['.'][0]['L_CURRENT'] : ((isset($user->lang['CURRENT'])) ? $user->lang['CURRENT'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'CURRENT'))) . ' 	}')) . '</a></th>
    ';// ENDIF
}
// IF SHOW_TOTAL_DKP
if ($this->_tpldata['.'][0]['SHOW_TOTAL_DKP']) { 
echo '
    <th align="left" width="28" nowrap="nowrap"><a href="' . ((isset($this->_tpldata['.'][0]['U_LIST_MEMBERS'])) ? $this->_tpldata['.'][0]['U_LIST_MEMBERS'] : '') . 'o=' . ((isset($this->_tpldata['.'][0]['O_TOTAL'])) ? $this->_tpldata['.'][0]['O_TOTAL'] : '') . '' . ((isset($this->_tpldata['.'][0]['URI_ADDON'])) ? $this->_tpldata['.'][0]['URI_ADDON'] : '') . '">' . ((isset($this->_tpldata['.'][0]['L_TOTAL'])) ? $this->_tpldata['.'][0]['L_TOTAL'] : ((isset($user->lang['TOTAL'])) ? $user->lang['TOTAL'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'TOTAL'))) . ' 	}')) . '</a></th>
    ';// ENDIF
}
// BEGIN custom_header
$_custom_header_count = (isset($this->_tpldata['custom_header.'])) ?  sizeof($this->_tpldata['custom_header.']) : 0;
if ($_custom_header_count) {
for ($_custom_header_i = 0; $_custom_header_i < $_custom_header_count; $_custom_header_i++)
{
echo '
    <th width="55" nowrap="nowrap"><div align="center">' . ((isset($this->_tpldata['custom_header.'][$_custom_header_i]['HEADER'])) ? $this->_tpldata['custom_header.'][$_custom_header_i]['HEADER'] : '') . '</div></th>
    ';}}
// END custom_header
echo '
  </tr>
  ';// BEGIN members_row
$_members_row_count = (isset($this->_tpldata['members_row.'])) ?  sizeof($this->_tpldata['members_row.']) : 0;
if ($_members_row_count) {
for ($_members_row_i = 0; $_members_row_i < $_members_row_count; $_members_row_i++)
{
echo '
  <tr class="' . ((isset($this->_tpldata['members_row.'][$_members_row_i]['ROW_CLASS'])) ? $this->_tpldata['members_row.'][$_members_row_i]['ROW_CLASS'] : '') . '">
    <td width="15" nowrap="nowrap" align="right">' . ((isset($this->_tpldata['members_row.'][$_members_row_i]['COUNT'])) ? $this->_tpldata['members_row.'][$_members_row_i]['COUNT'] : '') . '</td>
    <td ><a href="' . ((isset($this->_tpldata['members_row.'][$_members_row_i]['U_VIEW_MEMBER'])) ? $this->_tpldata['members_row.'][$_members_row_i]['U_VIEW_MEMBER'] : '') . '">' . ((isset($this->_tpldata['members_row.'][$_members_row_i]['NAME'])) ? $this->_tpldata['members_row.'][$_members_row_i]['NAME'] : '') . '</a></td>
    ';// IF SHOW_USR_RANK
if ($this->_tpldata['.'][0]['SHOW_USR_RANK']) { 
echo '
    <td width="80" nowrap="nowrap">' . ((isset($this->_tpldata['members_row.'][$_members_row_i]['RANK'])) ? $this->_tpldata['members_row.'][$_members_row_i]['RANK'] : '') . '</td>
    ';// ENDIF
}
// IF SHOW_USR_CLASS
if ($this->_tpldata['.'][0]['SHOW_USR_CLASS']) { 
echo '
		 <td width="100" align="left" class="' . ((isset($this->_tpldata['members_row.'][$_members_row_i]['CLASS_EN'])) ? $this->_tpldata['members_row.'][$_members_row_i]['CLASS_EN'] : '') . '">
		  ';// IF SHOW_CLSS_IMG
if ($this->_tpldata['.'][0]['SHOW_CLSS_IMG']) { 
echo '
       ' . ((isset($this->_tpldata['members_row.'][$_members_row_i]['CLASSIMG'])) ? $this->_tpldata['members_row.'][$_members_row_i]['CLASSIMG'] : '') . ' ' . ((isset($this->_tpldata['members_row.'][$_members_row_i]['CLASS'])) ? $this->_tpldata['members_row.'][$_members_row_i]['CLASS'] : '') . '
      ';// ELSE
} else {
echo '
        ' . ((isset($this->_tpldata['members_row.'][$_members_row_i]['CLASS'])) ? $this->_tpldata['members_row.'][$_members_row_i]['CLASS'] : '') . '
      ';// ENDIF
}
echo '
        </td>
		';// ENDIF
}
// IF SHOW_CURR_DKP
if ($this->_tpldata['.'][0]['SHOW_CURR_DKP']) { 
echo '
    <td nowrap="nowrap" class="' . ((isset($this->_tpldata['members_row.'][$_members_row_i]['C_CURRENT'])) ? $this->_tpldata['members_row.'][$_members_row_i]['C_CURRENT'] : '') . '">' . ((isset($this->_tpldata['members_row.'][$_members_row_i]['CURRENT'])) ? $this->_tpldata['members_row.'][$_members_row_i]['CURRENT'] : '') . '</td>
    ';// ENDIF
}
// IF SHOW_TOTAL_DKP
if ($this->_tpldata['.'][0]['SHOW_TOTAL_DKP']) { 
echo '
    <td nowrap="nowrap" class="' . ((isset($this->_tpldata['members_row.'][$_members_row_i]['C_TOTAL'])) ? $this->_tpldata['members_row.'][$_members_row_i]['C_TOTAL'] : '') . '">' . ((isset($this->_tpldata['members_row.'][$_members_row_i]['TOTAL'])) ? $this->_tpldata['members_row.'][$_members_row_i]['TOTAL'] : '') . '</td>
    ';// ENDIF
}
// BEGIN custom_items
$_custom_items_count = (isset($this->_tpldata['members_row.'][$_members_row_i]['custom_items.'])) ? sizeof($this->_tpldata['members_row.'][$_members_row_i]['custom_items.']) : 0;
if ($_custom_items_count) {
for ($_custom_items_i = 0; $_custom_items_i < $_custom_items_count; $_custom_items_i++)
{
echo '
    <td nowrap="nowrap"><div align="center">' . ((isset($this->_tpldata['members_row.'][$_members_row_i]['custom_items.'][$_custom_items_i]['COUNT'])) ? $this->_tpldata['members_row.'][$_members_row_i]['custom_items.'][$_custom_items_i]['COUNT'] : '') . '' . ((isset($this->_tpldata['members_row.'][$_members_row_i]['custom_items.'][$_custom_items_i]['IMAGE'])) ? $this->_tpldata['members_row.'][$_members_row_i]['custom_items.'][$_custom_items_i]['IMAGE'] : '') . '</div></td>
    ';}}
// END custom_items
echo ' 
  </tr>
  ';}}
// END members_row
// IF SHOW_FOOTER_STAT
if ($this->_tpldata['.'][0]['SHOW_FOOTER_STAT']) { 
echo '
    <tr class="row1">
    <td width="15" nowrap="nowrap" align="right"></td>
    <td ></td>
    ';// IF SHOW_USR_RANK
if ($this->_tpldata['.'][0]['SHOW_USR_RANK']) { 
echo '
    <td width="80" nowrap="nowrap"></td>
    ';// ENDIF
}
// IF SHOW_USR_CLASS
if ($this->_tpldata['.'][0]['SHOW_USR_CLASS']) { 
echo '
		 <td width="100" align="left"></td>
		';// ENDIF
}
// IF SHOW_CURR_DKP
if ($this->_tpldata['.'][0]['SHOW_CURR_DKP']) { 
echo '
    <td nowrap="nowrap" ></td>
    ';// ENDIF
}
// IF SHOW_TOTAL_DKP
if ($this->_tpldata['.'][0]['SHOW_TOTAL_DKP']) { 
echo '
    <td nowrap="nowrap" ></td>
    ';// ENDIF
}
// BEGIN dyn_counts
$_dyn_counts_count = (isset($this->_tpldata['dyn_counts.'])) ?  sizeof($this->_tpldata['dyn_counts.']) : 0;
if ($_dyn_counts_count) {
for ($_dyn_counts_i = 0; $_dyn_counts_i < $_dyn_counts_count; $_dyn_counts_i++)
{
echo '
    <td nowrap="nowrap"><div align="center">(' . ((isset($this->_tpldata['dyn_counts.'][$_dyn_counts_i]['ITEMS'])) ? $this->_tpldata['dyn_counts.'][$_dyn_counts_i]['ITEMS'] : '') . '/' . ((isset($this->_tpldata['dyn_counts.'][$_dyn_counts_i]['MEMBER'])) ? $this->_tpldata['dyn_counts.'][$_dyn_counts_i]['MEMBER'] : '') . ')</div></td>
    ';}}
// END dyn_counts
echo '
  </tr>
  ';// ENDIF
}
echo '
  
  </th>
  </table>
  <tr>
    <th colspan="14" class="footer">' . ((isset($this->_tpldata['.'][0]['LISTMEMBERS_FOOTCOUNT'])) ? $this->_tpldata['.'][0]['LISTMEMBERS_FOOTCOUNT'] : '') . '</th>
  </tr>

    
  </tr>
</table>
</form>
<br /><center><span class="copyis"><a onclick="javascript:AboutDialog()" style="cursor:pointer;" onmouseover="style.textDecoration=\'underline\';" onmouseout="style.textDecoration=\'none\';"><img src="images/info.png" alt="Credits" border="0" /> Credits</a></span>
<br />' . ((isset($this->_tpldata['.'][0]['IS_COPYRIGHT'])) ? $this->_tpldata['.'][0]['IS_COPYRIGHT'] : '') . '</center>';
}
?>