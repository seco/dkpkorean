<?php
if ($this->security()) {
// INCLUDE page_header.html
$this->assign_from_include('page_header.html');
// IF UPDATE_DONE
if ($this->_tpldata['.'][0]['UPDATE_DONE']) { 
echo '
<table width="100%" border="0" cellspacing="1" cellpadding="2">  
  <tr>
    <th colspan="3">' . ((isset($this->_tpldata['.'][0]['L_STATUS'])) ? $this->_tpldata['.'][0]['L_STATUS'] : ((isset($user->lang['STATUS'])) ? $user->lang['STATUS'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'STATUS'))) . ' 	}')) . '</th>
  </tr>
    <tr>
    <th align="left" colspan="2">' . ((isset($this->_tpldata['.'][0]['L_STATUS'])) ? $this->_tpldata['.'][0]['L_STATUS'] : ((isset($user->lang['STATUS'])) ? $user->lang['STATUS'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'STATUS'))) . ' 	}')) . '</th>
    <th align="left">' . ((isset($this->_tpldata['.'][0]['L_SQL_STRING'])) ? $this->_tpldata['.'][0]['L_SQL_STRING'] : ((isset($user->lang['SQL_STRING'])) ? $user->lang['SQL_STRING'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'SQL_STRING'))) . ' 	}')) . '</th>
  </tr>
  ';// BEGIN logs_row
$_logs_row_count = (isset($this->_tpldata['logs_row.'])) ?  sizeof($this->_tpldata['logs_row.']) : 0;
if ($_logs_row_count) {
for ($_logs_row_i = 0; $_logs_row_i < $_logs_row_count; $_logs_row_i++)
{
echo '
  <tr class="' . ((isset($this->_tpldata['logs_row.'][$_logs_row_i]['ROW_CLASS'])) ? $this->_tpldata['logs_row.'][$_logs_row_i]['ROW_CLASS'] : '') . '" onmouseover="this.className=\'rowHover\';" onmouseout="this.className=\'' . ((isset($this->_tpldata['logs_row.'][$_logs_row_i]['ROW_CLASS'])) ? $this->_tpldata['logs_row.'][$_logs_row_i]['ROW_CLASS'] : '') . '\';">
  	' . ((isset($this->_tpldata['logs_row.'][$_logs_row_i]['LOG_STRING'])) ? $this->_tpldata['logs_row.'][$_logs_row_i]['LOG_STRING'] : '') . '
  </tr>	
  ';}}
// END logs_row
echo '
  <tr>
    <th align="right" colspan=3">' . ((isset($this->_tpldata['.'][0]['QUERYS_DONE'])) ? $this->_tpldata['.'][0]['QUERYS_DONE'] : '') . ' ' . ((isset($this->_tpldata['.'][0]['SQL_FOOTER'])) ? $this->_tpldata['.'][0]['SQL_FOOTER'] : '') . '</th>
  </tr>  
</table>
<br/>

<table width="100%" border="0" cellspacing="0" cellpadding="10">  
  <tr>
    <th colspan="3">' . ((isset($this->_tpldata['.'][0]['L_EQDKP_STATUS'])) ? $this->_tpldata['.'][0]['L_EQDKP_STATUS'] : ((isset($user->lang['EQDKP_STATUS'])) ? $user->lang['EQDKP_STATUS'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'EQDKP_STATUS'))) . ' 	}')) . '</th>
  </tr>
  <tr class="row1" height="50">
  	<td align=center><b>' . ((isset($this->_tpldata['.'][0]['L_BACK_TO'])) ? $this->_tpldata['.'][0]['L_BACK_TO'] : ((isset($user->lang['BACK_TO'])) ? $user->lang['BACK_TO'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'BACK_TO'))) . ' 	}')) . ' </b> </td>
  </tr>	
  <tr>
    <th align="right" colspan="3"></th>
  </tr>  
</table>

';// ELSE
} else {
echo '
<table width="100%" border="0" cellspacing="0" cellpadding="10">  
  <tr>
    <th colspan="3">' . ((isset($this->_tpldata['.'][0]['L_EQDKP_STATUS'])) ? $this->_tpldata['.'][0]['L_EQDKP_STATUS'] : ((isset($user->lang['EQDKP_STATUS'])) ? $user->lang['EQDKP_STATUS'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'EQDKP_STATUS'))) . ' 	}')) . '</th>
  </tr>
  <tr class="row1" height="50">
  	<td align=center><b>' . ((isset($this->_tpldata['.'][0]['L_SYSTEM_STATUS'])) ? $this->_tpldata['.'][0]['L_SYSTEM_STATUS'] : ((isset($user->lang['SYSTEM_STATUS'])) ? $user->lang['SYSTEM_STATUS'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'SYSTEM_STATUS'))) . ' 	}')) . '</b></td>' . ((isset($this->_tpldata['.'][0]['SYSTEM_STATUS'])) ? $this->_tpldata['.'][0]['SYSTEM_STATUS'] : '') . '
  </tr>	
  <tr class="row2" height="50">
  	<td align=center><b>' . ((isset($this->_tpldata['.'][0]['L_TEMPLATE_STATUS'])) ? $this->_tpldata['.'][0]['L_TEMPLATE_STATUS'] : ((isset($user->lang['TEMPLATE_STATUS'])) ? $user->lang['TEMPLATE_STATUS'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'TEMPLATE_STATUS'))) . ' 	}')) . '</b></td>' . ((isset($this->_tpldata['.'][0]['TEMPLATE_STATUS'])) ? $this->_tpldata['.'][0]['TEMPLATE_STATUS'] : '') . '
  </tr>	
  <tr>
  <tr class="row1" height="50">
  	<td align=center><b>' . ((isset($this->_tpldata['.'][0]['L_GAMEFILE_STATUS'])) ? $this->_tpldata['.'][0]['L_GAMEFILE_STATUS'] : ((isset($user->lang['GAMEFILE_STATUS'])) ? $user->lang['GAMEFILE_STATUS'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'GAMEFILE_STATUS'))) . ' 	}')) . '</b></td>' . ((isset($this->_tpldata['.'][0]['GAMEFILE_STATUS'])) ? $this->_tpldata['.'][0]['GAMEFILE_STATUS'] : '') . '
  </tr>	
  <tr>
    <th align="right" colspan="3"></th>
  </tr>  
</table>
<br/>

<table width="100%" border="0" cellspacing="1" cellpadding="2">
  <tr>
    <th align="center" colspan="4">' . ((isset($this->_tpldata['.'][0]['L_EQDKP_SYSTEM_TITLE'])) ? $this->_tpldata['.'][0]['L_EQDKP_SYSTEM_TITLE'] : ((isset($user->lang['EQDKP_SYSTEM_TITLE'])) ? $user->lang['EQDKP_SYSTEM_TITLE'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'EQDKP_SYSTEM_TITLE'))) . ' 	}')) . '</th>
  </tr>
</table>

<table width="100%" border="0" cellspacing="1" cellpadding="2">  
  <tr>
    <th align="left">' . ((isset($this->_tpldata['.'][0]['L_PLUS_VERSION'])) ? $this->_tpldata['.'][0]['L_PLUS_VERSION'] : ((isset($user->lang['PLUS_VERSION'])) ? $user->lang['PLUS_VERSION'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'PLUS_VERSION'))) . ' 	}')) . '</th>
    <th align="left">' . ((isset($this->_tpldata['.'][0]['L_PLUS_FEATURE'])) ? $this->_tpldata['.'][0]['L_PLUS_FEATURE'] : ((isset($user->lang['PLUS_FEATURE'])) ? $user->lang['PLUS_FEATURE'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'PLUS_FEATURE'))) . ' 	}')) . '</th>
    <th align="left">' . ((isset($this->_tpldata['.'][0]['L_PLUS_DETAIL'])) ? $this->_tpldata['.'][0]['L_PLUS_DETAIL'] : ((isset($user->lang['PLUS_DETAIL'])) ? $user->lang['PLUS_DETAIL'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'PLUS_DETAIL'))) . ' 	}')) . '</th>
    <th align="left">' . ((isset($this->_tpldata['.'][0]['L_STATUS'])) ? $this->_tpldata['.'][0]['L_STATUS'] : ((isset($user->lang['STATUS'])) ? $user->lang['STATUS'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'STATUS'))) . ' 	}')) . '</th>
    <th align="left">' . ((isset($this->_tpldata['.'][0]['L_UPDATE'])) ? $this->_tpldata['.'][0]['L_UPDATE'] : ((isset($user->lang['UPDATE'])) ? $user->lang['UPDATE'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'UPDATE'))) . ' 	}')) . '</th>
  </tr>

	';// BEGIN update_row
$_update_row_count = (isset($this->_tpldata['update_row.'])) ?  sizeof($this->_tpldata['update_row.']) : 0;
if ($_update_row_count) {
for ($_update_row_i = 0; $_update_row_i < $_update_row_count; $_update_row_i++)
{
echo '
	<tr class="' . ((isset($this->_tpldata['update_row.'][$_update_row_i]['ROW_CLASS'])) ? $this->_tpldata['update_row.'][$_update_row_i]['ROW_CLASS'] : '') . '" onmouseover="this.className=\'rowHover\';" onmouseout="this.className=\'' . ((isset($this->_tpldata['update_row.'][$_update_row_i]['ROW_CLASS'])) ? $this->_tpldata['update_row.'][$_update_row_i]['ROW_CLASS'] : '') . '\';">
    <td align="left">' . ((isset($this->_tpldata['update_row.'][$_update_row_i]['VERSION'])) ? $this->_tpldata['update_row.'][$_update_row_i]['VERSION'] : '') . '</td>
    <td align="left">' . ((isset($this->_tpldata['update_row.'][$_update_row_i]['NAME'])) ? $this->_tpldata['update_row.'][$_update_row_i]['NAME'] : '') . '</td>
    <td align="left">' . ((isset($this->_tpldata['update_row.'][$_update_row_i]['DETAIL'])) ? $this->_tpldata['update_row.'][$_update_row_i]['DETAIL'] : '') . '</td>
    <td align="left">' . ((isset($this->_tpldata['update_row.'][$_update_row_i]['STATE'])) ? $this->_tpldata['update_row.'][$_update_row_i]['STATE'] : '') . '</td>
    <td align="left">' . ((isset($this->_tpldata['update_row.'][$_update_row_i]['LINK'])) ? $this->_tpldata['update_row.'][$_update_row_i]['LINK'] : '') . '</td>
  </tr>
	';}}
// END update_row
echo '
  
</table>
<br/>
<table width="100%" border="0" cellspacing="1" cellpadding="2">
  <tr>
    <th align="center" colspan="4">' . ((isset($this->_tpldata['.'][0]['L_EQDKP_TEMPLATE_TITLE'])) ? $this->_tpldata['.'][0]['L_EQDKP_TEMPLATE_TITLE'] : ((isset($user->lang['EQDKP_TEMPLATE_TITLE'])) ? $user->lang['EQDKP_TEMPLATE_TITLE'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'EQDKP_TEMPLATE_TITLE'))) . ' 	}')) . '</th>
  </tr>
</table>

<table width="100%" border="0" cellspacing="1" cellpadding="2">  
  <tr>
    <th align="left">' . ((isset($this->_tpldata['.'][0]['L_PLUS_VERSION'])) ? $this->_tpldata['.'][0]['L_PLUS_VERSION'] : ((isset($user->lang['PLUS_VERSION'])) ? $user->lang['PLUS_VERSION'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'PLUS_VERSION'))) . ' 	}')) . '</th>
    <th align="left">' . ((isset($this->_tpldata['.'][0]['L_TEMPLATE_NAME'])) ? $this->_tpldata['.'][0]['L_TEMPLATE_NAME'] : ((isset($user->lang['TEMPLATE_NAME'])) ? $user->lang['TEMPLATE_NAME'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'TEMPLATE_NAME'))) . ' 	}')) . '</th>
    <th align="left">' . ((isset($this->_tpldata['.'][0]['L_TEMPLATE_STATE'])) ? $this->_tpldata['.'][0]['L_TEMPLATE_STATE'] : ((isset($user->lang['TEMPLATE_STATE'])) ? $user->lang['TEMPLATE_STATE'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'TEMPLATE_STATE'))) . ' 	}')) . '</th>
    <th align="left">' . ((isset($this->_tpldata['.'][0]['L_TEMPLATE_FILESTATE'])) ? $this->_tpldata['.'][0]['L_TEMPLATE_FILESTATE'] : ((isset($user->lang['TEMPLATE_FILESTATE'])) ? $user->lang['TEMPLATE_FILESTATE'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'TEMPLATE_FILESTATE'))) . ' 	}')) . '</th>
    <th align="left">' . ((isset($this->_tpldata['.'][0]['L_UPDATE'])) ? $this->_tpldata['.'][0]['L_UPDATE'] : ((isset($user->lang['UPDATE'])) ? $user->lang['UPDATE'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'UPDATE'))) . ' 	}')) . '</th>
  </tr>
    ';// BEGIN styles_row
$_styles_row_count = (isset($this->_tpldata['styles_row.'])) ?  sizeof($this->_tpldata['styles_row.']) : 0;
if ($_styles_row_count) {
for ($_styles_row_i = 0; $_styles_row_i < $_styles_row_count; $_styles_row_i++)
{
echo '
  <tr class="' . ((isset($this->_tpldata['styles_row.'][$_styles_row_i]['ROW_CLASS'])) ? $this->_tpldata['styles_row.'][$_styles_row_i]['ROW_CLASS'] : '') . '" onmouseover="this.className=\'rowHover\';" onmouseout="this.className=\'' . ((isset($this->_tpldata['styles_row.'][$_styles_row_i]['ROW_CLASS'])) ? $this->_tpldata['styles_row.'][$_styles_row_i]['ROW_CLASS'] : '') . '\';">
    <td nowrap="nowrap">EQDKP Plus ' . ((isset($this->_tpldata['styles_row.'][$_styles_row_i]['STYLE_VERSION'])) ? $this->_tpldata['styles_row.'][$_styles_row_i]['STYLE_VERSION'] : '') . '</td>
    <td nowrap="nowrap">' . ((isset($this->_tpldata['styles_row.'][$_styles_row_i]['STYLE_NAME'])) ? $this->_tpldata['styles_row.'][$_styles_row_i]['STYLE_NAME'] : '') . '</td>
    <td nowrap="nowrap">' . ((isset($this->_tpldata['styles_row.'][$_styles_row_i]['STYLE_STATE'])) ? $this->_tpldata['styles_row.'][$_styles_row_i]['STYLE_STATE'] : '') . '</td>
    <td nowrap="nowrap">' . ((isset($this->_tpldata['styles_row.'][$_styles_row_i]['STYLE_FILESTATE'])) ? $this->_tpldata['styles_row.'][$_styles_row_i]['STYLE_FILESTATE'] : '') . '</td>
    <td nowrap="nowrap">' . ((isset($this->_tpldata['styles_row.'][$_styles_row_i]['STYLE_LINK'])) ? $this->_tpldata['styles_row.'][$_styles_row_i]['STYLE_LINK'] : '') . '</td>
  </tr>
  ';}}
// END styles_row
echo '
  <tr>
    <th align="left" colspan="5"></th>
    
  </tr>
</table>

<br/>
<table width="100%" border="0" cellspacing="1" cellpadding="2">
  <tr>
    <th align="center" colspan="4">' . ((isset($this->_tpldata['.'][0]['L_EQDKP_GAMEFILE_TITLE'])) ? $this->_tpldata['.'][0]['L_EQDKP_GAMEFILE_TITLE'] : ((isset($user->lang['EQDKP_GAMEFILE_TITLE'])) ? $user->lang['EQDKP_GAMEFILE_TITLE'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'EQDKP_GAMEFILE_TITLE'))) . ' 	}')) . '</th>
  </tr>
</table>
<table width="100%" border="0" cellspacing="1" cellpadding="2">  
  <tr class="row1" onmouseover="this.className=\'rowHover\';" onmouseout="this.className=\'row1\';">
    <td nowrap="nowrap">' . ((isset($this->_tpldata['.'][0]['L_GF_INST_VERSION'])) ? $this->_tpldata['.'][0]['L_GF_INST_VERSION'] : ((isset($user->lang['GF_INST_VERSION'])) ? $user->lang['GF_INST_VERSION'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'GF_INST_VERSION'))) . ' 	}')) . ': ' . ((isset($this->_tpldata['.'][0]['GF_GAMENAME'])) ? $this->_tpldata['.'][0]['GF_GAMENAME'] : '') . ' V.' . ((isset($this->_tpldata['.'][0]['GF_INST_VERSION'])) ? $this->_tpldata['.'][0]['GF_INST_VERSION'] : '') . '</td>
    <td nowrap="nowrap">' . ((isset($this->_tpldata['.'][0]['L_GF_AVAIL_VERSION'])) ? $this->_tpldata['.'][0]['L_GF_AVAIL_VERSION'] : ((isset($user->lang['GF_AVAIL_VERSION'])) ? $user->lang['GF_AVAIL_VERSION'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'GF_AVAIL_VERSION'))) . ' 	}')) . ': ' . ((isset($this->_tpldata['.'][0]['GF_GAMENAME'])) ? $this->_tpldata['.'][0]['GF_GAMENAME'] : '') . ' V.' . ((isset($this->_tpldata['.'][0]['GF_AVAIL_VERSION'])) ? $this->_tpldata['.'][0]['GF_AVAIL_VERSION'] : '') . '</td>
    <td nowrap="nowrap">' . ((isset($this->_tpldata['.'][0]['GF_STATUS'])) ? $this->_tpldata['.'][0]['GF_STATUS'] : '') . '</td>
    <td nowrap="nowrap">' . ((isset($this->_tpldata['.'][0]['GF_LINK'])) ? $this->_tpldata['.'][0]['GF_LINK'] : '') . '</td>
  </tr>
  <tr>
    <th align="left" colspan="5"></th>
  </tr>
</table>
';// ENDIF
}
// INCLUDE page_tail.html
$this->assign_from_include('page_tail.html');

}
?>