<?php
if ($this->security()) {
echo '<script language="JavaScript" type="text/javascript">
function AboutDialog() {
  ' . ((isset($this->_tpldata['.'][0]['JS_ABOUT'])) ? $this->_tpldata['.'][0]['JS_ABOUT'] : '') . '
}

function ViewInfos(id) {
  ' . ((isset($this->_tpldata['.'][0]['JS_VIEWINFO'])) ? $this->_tpldata['.'][0]['JS_VIEWINFO'] : '') . '
}

</script>
<table width="100%" border="0" cellspacing="1" cellpadding="2" class="borderless">
  <tr><td width="65%" valign="top">
<table width="100%" border="0" cellspacing="1" cellpadding="2">
  <tr>
    <th align="left" width="100%" nowrap="nowrap">' . ((isset($this->_tpldata['.'][0]['Lang_Banker'])) ? $this->_tpldata['.'][0]['Lang_Banker'] : '') . '</th>
    ';// IF SHOW_NO_MONEY
if ($this->_tpldata['.'][0]['SHOW_NO_MONEY']) { 
// BEGIN money_row
$_money_row_count = (isset($this->_tpldata['money_row.'])) ?  sizeof($this->_tpldata['money_row.']) : 0;
if ($_money_row_count) {
for ($_money_row_i = 0; $_money_row_i < $_money_row_count; $_money_row_i++)
{
echo '
    <th align="center" width="50px"><img src="' . ((isset($this->_tpldata['money_row.'][$_money_row_i]['IMAGE'])) ? $this->_tpldata['money_row.'][$_money_row_i]['IMAGE'] : '') . '" alt="' . ((isset($this->_tpldata['money_row.'][$_money_row_i]['LANGUAGE'])) ? $this->_tpldata['money_row.'][$_money_row_i]['LANGUAGE'] : '') . '" title="' . ((isset($this->_tpldata['money_row.'][$_money_row_i]['LANGUAGE'])) ? $this->_tpldata['money_row.'][$_money_row_i]['LANGUAGE'] : '') . '" /></th>
    ';}}
// END money_row
// ENDIF
}
echo '
    <th align="left" width="100%" nowrap="nowrap">' . ((isset($this->_tpldata['.'][0]['Lang_Update'])) ? $this->_tpldata['.'][0]['Lang_Update'] : '') . '</th> 
  </tr>
  ';// IF SHOW_NO_BANKERS
if ($this->_tpldata['.'][0]['SHOW_NO_BANKERS']) { 
echo '
  <tr class="row1">
      <td align="left" nowrap="nowrap">' . ((isset($this->_tpldata['.'][0]['L_ALL_BANKERS'])) ? $this->_tpldata['.'][0]['L_ALL_BANKERS'] : ((isset($user->lang['ALL_BANKERS'])) ? $user->lang['ALL_BANKERS'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'ALL_BANKERS'))) . ' 	}')) . '</td>
      ';// IF SHOW_NO_MONEY
if ($this->_tpldata['.'][0]['SHOW_NO_MONEY']) { 
// BEGIN money_row
$_money_row_count = (isset($this->_tpldata['money_row.'])) ?  sizeof($this->_tpldata['money_row.']) : 0;
if ($_money_row_count) {
for ($_money_row_i = 0; $_money_row_i < $_money_row_count; $_money_row_i++)
{
echo '
        <td align="center" nowrap="nowrap">' . ((isset($this->_tpldata['money_row.'][$_money_row_i]['VALUE'])) ? $this->_tpldata['money_row.'][$_money_row_i]['VALUE'] : '') . '</td>
        ';}}
// END money_row
// ENDIF
}
echo '
      <td align="left" nowrap="nowrap">' . ((isset($this->_tpldata['.'][0]['L_RB_NA'])) ? $this->_tpldata['.'][0]['L_RB_NA'] : ((isset($user->lang['RB_NA'])) ? $user->lang['RB_NA'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'RB_NA'))) . ' 	}')) . '</td>
  </tr>
  ';// ELSE
} else {
// BEGIN chars_row
$_chars_row_count = (isset($this->_tpldata['chars_row.'])) ?  sizeof($this->_tpldata['chars_row.']) : 0;
if ($_chars_row_count) {
for ($_chars_row_i = 0; $_chars_row_i < $_chars_row_count; $_chars_row_i++)
{
echo '
  <tr class="' . ((isset($this->_tpldata['chars_row.'][$_chars_row_i]['ROW_CLASS'])) ? $this->_tpldata['chars_row.'][$_chars_row_i]['ROW_CLASS'] : '') . '">
  	';// IF SHOW_INFO_TOOLTIP
if ($this->_tpldata['.'][0]['SHOW_INFO_TOOLTIP']) { 
echo '
      <td align="right" nowrap="nowrap" >
      <a ' . ((isset($this->_tpldata['chars_row.'][$_chars_row_i]['TOOLTIP'])) ? $this->_tpldata['chars_row.'][$_chars_row_i]['TOOLTIP'] : '') . '>' . ((isset($this->_tpldata['chars_row.'][$_chars_row_i]['NAME'])) ? $this->_tpldata['chars_row.'][$_chars_row_i]['NAME'] : '') . ' ' . ((isset($this->_tpldata['chars_row.'][$_chars_row_i]['MAINCHAR'])) ? $this->_tpldata['chars_row.'][$_chars_row_i]['MAINCHAR'] : '') . '</a>
      </td>
       ';// ELSE
} else {
echo '
       <td align="left" nowrap="nowrap" >
       ' . ((isset($this->_tpldata['chars_row.'][$_chars_row_i]['NAME'])) ? $this->_tpldata['chars_row.'][$_chars_row_i]['NAME'] : '') . ' ' . ((isset($this->_tpldata['chars_row.'][$_chars_row_i]['MAINCHAR'])) ? $this->_tpldata['chars_row.'][$_chars_row_i]['MAINCHAR'] : '') . '
       </td>
        ';// ENDIF
}
// IF SHOW_NO_MONEY
if ($this->_tpldata['.'][0]['SHOW_NO_MONEY']) { 
// BEGIN cmoney_row
$_cmoney_row_count = (isset($this->_tpldata['chars_row.'][$_chars_row_i]['cmoney_row.'])) ? sizeof($this->_tpldata['chars_row.'][$_chars_row_i]['cmoney_row.']) : 0;
if ($_cmoney_row_count) {
for ($_cmoney_row_i = 0; $_cmoney_row_i < $_cmoney_row_count; $_cmoney_row_i++)
{
echo '
        <td align="center" nowrap="nowrap">' . ((isset($this->_tpldata['chars_row.'][$_chars_row_i]['cmoney_row.'][$_cmoney_row_i]['VALUE'])) ? $this->_tpldata['chars_row.'][$_chars_row_i]['cmoney_row.'][$_cmoney_row_i]['VALUE'] : '') . '</td>
      ';}}
// END cmoney_row
// ENDIF
}
echo '
      <td align="left" nowrap="nowrap">' . ((isset($this->_tpldata['chars_row.'][$_chars_row_i]['UPDATE'])) ? $this->_tpldata['chars_row.'][$_chars_row_i]['UPDATE'] : '') . '</td>
  </tr>
  ';}}
// END chars_row
echo '
  <tr class="row1">
      <td align="left" nowrap="nowrap">' . ((isset($this->_tpldata['.'][0]['L_TOT_BANKERS'])) ? $this->_tpldata['.'][0]['L_TOT_BANKERS'] : ((isset($user->lang['TOT_BANKERS'])) ? $user->lang['TOT_BANKERS'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'TOT_BANKERS'))) . ' 	}')) . '</td>
      ';// IF SHOW_NO_MONEY
if ($this->_tpldata['.'][0]['SHOW_NO_MONEY']) { 
// BEGIN money_row
$_money_row_count = (isset($this->_tpldata['money_row.'])) ?  sizeof($this->_tpldata['money_row.']) : 0;
if ($_money_row_count) {
for ($_money_row_i = 0; $_money_row_i < $_money_row_count; $_money_row_i++)
{
echo '
        <td align="center" nowrap="nowrap">' . ((isset($this->_tpldata['money_row.'][$_money_row_i]['VALUE'])) ? $this->_tpldata['money_row.'][$_money_row_i]['VALUE'] : '') . '</td>
        ';}}
// END money_row
// ENDIF
}
echo '
      <td align="center" nowrap="nowrap">---</td>
  </tr>
  ';// ENDIF
}
echo '
  </table>
  </td><td  width="35%" valign="top">
  <form method="get" action="' . ((isset($this->_tpldata['.'][0]['U_RAIDBANKER'])) ? $this->_tpldata['.'][0]['U_RAIDBANKER'] : '') . '">
    <table width="100%" border="0" cellspacing="1" cellpadding="2">
    <tr>
    <th align="left" width="100%" nowrap="nowrap" colspan="2">Filter</th>
    </tr>
    
    <tr class="row1">
      <td align="left" nowrap="nowrap">' . ((isset($this->_tpldata['.'][0]['L_FILTER_BANK'])) ? $this->_tpldata['.'][0]['L_FILTER_BANK'] : ((isset($user->lang['FILTER_BANK'])) ? $user->lang['FILTER_BANK'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'FILTER_BANK'))) . ' 	}')) . '</td>
      <td align="left" nowrap="nowrap">' . ((isset($this->_tpldata['.'][0]['BANKER_DROPDOWN'])) ? $this->_tpldata['.'][0]['BANKER_DROPDOWN'] : '') . '</td>
    </tr>
    <tr class="row1">
      <td align="left" nowrap="nowrap">' . ((isset($this->_tpldata['.'][0]['L_FILTER_TYPE'])) ? $this->_tpldata['.'][0]['L_FILTER_TYPE'] : ((isset($user->lang['FILTER_TYPE'])) ? $user->lang['FILTER_TYPE'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'FILTER_TYPE'))) . ' 	}')) . '</td>
      <td align="left" nowrap="nowrap">' . ((isset($this->_tpldata['.'][0]['TYPE_DROPDOWN'])) ? $this->_tpldata['.'][0]['TYPE_DROPDOWN'] : '') . '</td>
    </tr>
    <tr class="row1">
      <td align="left" nowrap="nowrap">' . ((isset($this->_tpldata['.'][0]['L_FILTER_PRIO'])) ? $this->_tpldata['.'][0]['L_FILTER_PRIO'] : ((isset($user->lang['FILTER_PRIO'])) ? $user->lang['FILTER_PRIO'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'FILTER_PRIO'))) . ' 	}')) . '</td>
      <td align="left" nowrap="nowrap">' . ((isset($this->_tpldata['.'][0]['PRIORITY_DROPDOWN'])) ? $this->_tpldata['.'][0]['PRIORITY_DROPDOWN'] : '') . '</td>
    </tr>
    </table>
  </form>
  </td></tr>
</table>
<br />
<table width="100%" border="0" cellspacing="1" cellpadding="2">
  <tr>
  	<th colspan="6">' . ((isset($this->_tpldata['.'][0]['Bank_Items'])) ? $this->_tpldata['.'][0]['Bank_Items'] : '') . '</th>
  </tr>
  <tr>
  ';// IF SHOW_INFO_TOOLTIP
if ($this->_tpldata['.'][0]['SHOW_INFO_TOOLTIP']) { 
echo '
    <th align="left" width="75px"></th>
  ';// ENDIF
}
echo '
    <th align="left" width="75px"></th>
    <th align="left" width="50px"><a href="' . ((isset($this->_tpldata['.'][0]['QTY_LINK'])) ? $this->_tpldata['.'][0]['QTY_LINK'] : '') . '">' . ((isset($this->_tpldata['.'][0]['Lang_QTY'])) ? $this->_tpldata['.'][0]['Lang_QTY'] : '') . '</a></th>
    <th align="left" width="225px"><a href="' . ((isset($this->_tpldata['.'][0]['NAME_LINK'])) ? $this->_tpldata['.'][0]['NAME_LINK'] : '') . '">' . ((isset($this->_tpldata['.'][0]['Lang_Name'])) ? $this->_tpldata['.'][0]['Lang_Name'] : '') . '</a></th>
    <th align="left" width="200px"><a href="' . ((isset($this->_tpldata['.'][0]['TYPE_LINK'])) ? $this->_tpldata['.'][0]['TYPE_LINK'] : '') . '">' . ((isset($this->_tpldata['.'][0]['Lang_Type'])) ? $this->_tpldata['.'][0]['Lang_Type'] : '') . '</a></th>
    <th align="left" nowrap="nowrap"><a href="' . ((isset($this->_tpldata['.'][0]['BANKER_LINK'])) ? $this->_tpldata['.'][0]['BANKER_LINK'] : '') . '">' . ((isset($this->_tpldata['.'][0]['Lang_Banker'])) ? $this->_tpldata['.'][0]['Lang_Banker'] : '') . '</a></th>
  </tr>
  ';// BEGIN items_row
$_items_row_count = (isset($this->_tpldata['items_row.'])) ?  sizeof($this->_tpldata['items_row.']) : 0;
if ($_items_row_count) {
for ($_items_row_i = 0; $_items_row_i < $_items_row_count; $_items_row_i++)
{
echo '
  <tr class="' . ((isset($this->_tpldata['items_row.'][$_items_row_i]['ROW_CLASS'])) ? $this->_tpldata['items_row.'][$_items_row_i]['ROW_CLASS'] : '') . '">
  ';// IF SHOW_INFO_TOOLTIP
if ($this->_tpldata['.'][0]['SHOW_INFO_TOOLTIP']) { 
echo '
      <td align="right" nowrap="nowrap" >
      <p><img src="images/info.png" alt="" border=0 ' . ((isset($this->_tpldata['items_row.'][$_items_row_i]['TOOLTIP'])) ? $this->_tpldata['items_row.'][$_items_row_i]['TOOLTIP'] : '') . ' /></p>
      </div>
      </td>
      ';// ENDIF
}
echo '
      <td align="right" nowrap="nowrap" ><img src="images/prio/' . ((isset($this->_tpldata['items_row.'][$_items_row_i]['PRIO'])) ? $this->_tpldata['items_row.'][$_items_row_i]['PRIO'] : '') . '.png" alt="" /></td>
  	  <td align="right" nowrap="nowrap" >' . ((isset($this->_tpldata['items_row.'][$_items_row_i]['QTY'])) ? $this->_tpldata['items_row.'][$_items_row_i]['QTY'] : '') . '</td>
      ';// IF SHOW_CLASSIC_LINKS
if ($this->_tpldata['.'][0]['SHOW_CLASSIC_LINKS']) { 
echo '
      <td nowrap="nowrap" width="100%"><a href="' . ((isset($this->_tpldata['items_row.'][$_items_row_i]['LINK'])) ? $this->_tpldata['items_row.'][$_items_row_i]['LINK'] : '') . '">' . ((isset($this->_tpldata['items_row.'][$_items_row_i]['NAME'])) ? $this->_tpldata['items_row.'][$_items_row_i]['NAME'] : '') . '</a></td>
      ';// ELSE
} else {
echo '
      <td nowrap="nowrap" width="100%"><a style="cursor:pointer;" onclick="javascript:ViewInfos(\'' . ((isset($this->_tpldata['items_row.'][$_items_row_i]['LINKNAME'])) ? $this->_tpldata['items_row.'][$_items_row_i]['LINKNAME'] : '') . '\');">' . ((isset($this->_tpldata['items_row.'][$_items_row_i]['NAME'])) ? $this->_tpldata['items_row.'][$_items_row_i]['NAME'] : '') . '</a></td>
      ';// ENDIF
}
echo '
      <td nowrap="nowrap">' . ((isset($this->_tpldata['items_row.'][$_items_row_i]['TYPE'])) ? $this->_tpldata['items_row.'][$_items_row_i]['TYPE'] : '') . '</td>
      <td nowrap="nowrap">' . ((isset($this->_tpldata['items_row.'][$_items_row_i]['BANKER'])) ? $this->_tpldata['items_row.'][$_items_row_i]['BANKER'] : '') . '</td>
  </tr>
  ';}}
// END items_row
echo '
</table>
<center><br /><span class="copyis"><a onclick="javascript:AboutDialog()" style="cursor:pointer;" onmouseover="style.textDecoration=\'underline\';" onmouseout="style.textDecoration=\'none\';"><img src="images/info.png" alt="Credits" border="0" /> Credits</a></span>
<br /><span class="copy">Raidbanker ' . ((isset($this->_tpldata['.'][0]['L_VERSION'])) ? $this->_tpldata['.'][0]['L_VERSION'] : ((isset($user->lang['VERSION'])) ? $user->lang['VERSION'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'VERSION'))) . ' 	}')) . ' &copy; 2006 - ' . ((isset($this->_tpldata['.'][0]['L_YEAR'])) ? $this->_tpldata['.'][0]['L_YEAR'] : ((isset($user->lang['YEAR'])) ? $user->lang['YEAR'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'YEAR'))) . ' 	}')) . ' by <a href="http://www.eqdkp-plus.com" target="blank">Wallenium</a></span></center>';
}
?>