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
    <th colspan="3">' . ((isset($this->_tpldata['.'][0]['L_STATUS'])) ? $this->_tpldata['.'][0]['L_STATUS'] : ((isset($user->lang['STATUS'])) ? $user->lang['STATUS'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'STATUS'))) . ' 	}')) . '</th>
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
<form method="post" action="' . ((isset($this->_tpldata['.'][0]['F_ADD_ADJUSTMENT'])) ? $this->_tpldata['.'][0]['F_ADD_ADJUSTMENT'] : '') . '" name="post">

<table width="100%" border="0" cellspacing="1" cellpadding="2">
  <tr>
    <th align="center" colspan="4">' . ((isset($this->_tpldata['.'][0]['L_RESET_HEADER'])) ? $this->_tpldata['.'][0]['L_RESET_HEADER'] : ((isset($user->lang['RESET_HEADER'])) ? $user->lang['RESET_HEADER'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'RESET_HEADER'))) . ' 	}')) . '</th>
  </tr>
    <tr class="row1" height="50">
  	<td align=center><img src=\'../images/false.png\'></td> <td> ' . ((isset($this->_tpldata['.'][0]['L_RESET_INFO'])) ? $this->_tpldata['.'][0]['L_RESET_INFO'] : ((isset($user->lang['RESET_INFO'])) ? $user->lang['RESET_INFO'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'RESET_INFO'))) . ' 	}')) . ' </td>
  	<td nowrap="nowrap">' . ((isset($this->_tpldata['.'][0]['L_RESET_CONFIRM'])) ? $this->_tpldata['.'][0]['L_RESET_CONFIRM'] : ((isset($user->lang['RESET_CONFIRM'])) ? $user->lang['RESET_CONFIRM'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'RESET_CONFIRM'))) . ' 	}')) . ' ' . ((isset($this->_tpldata['.'][0]['L_RESET_CONFIRM_TEXT'])) ? $this->_tpldata['.'][0]['L_RESET_CONFIRM_TEXT'] : ((isset($user->lang['RESET_CONFIRM_TEXT'])) ? $user->lang['RESET_CONFIRM_TEXT'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'RESET_CONFIRM_TEXT'))) . ' 	}')) . ' <input type="text" name="confirm_box" class="input" >  </td>
  </tr>	

</table>

<table width="100%" border="0" cellspacing="1" cellpadding="2">  
  <tr>
    <th align="left">' . ((isset($this->_tpldata['.'][0]['L_RESET_TYPE'])) ? $this->_tpldata['.'][0]['L_RESET_TYPE'] : ((isset($user->lang['RESET_TYPE'])) ? $user->lang['RESET_TYPE'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'RESET_TYPE'))) . ' 	}')) . '</th>
    <th align="left">' . ((isset($this->_tpldata['.'][0]['L_RESET_DISC'])) ? $this->_tpldata['.'][0]['L_RESET_DISC'] : ((isset($user->lang['RESET_DISC'])) ? $user->lang['RESET_DISC'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'RESET_DISC'))) . ' 	}')) . '</th>
    <th align="left">' . ((isset($this->_tpldata['.'][0]['L_RESET_ACTION'])) ? $this->_tpldata['.'][0]['L_RESET_ACTION'] : ((isset($user->lang['RESET_ACTION'])) ? $user->lang['RESET_ACTION'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'RESET_ACTION'))) . ' 	}')) . '</th>
  </tr>
    ';// BEGIN reset_row
$_reset_row_count = (isset($this->_tpldata['reset_row.'])) ?  sizeof($this->_tpldata['reset_row.']) : 0;
if ($_reset_row_count) {
for ($_reset_row_i = 0; $_reset_row_i < $_reset_row_count; $_reset_row_i++)
{
echo '
  <tr class="' . ((isset($this->_tpldata['reset_row.'][$_reset_row_i]['ROW_CLASS'])) ? $this->_tpldata['reset_row.'][$_reset_row_i]['ROW_CLASS'] : '') . '" onmouseover="this.className=\'rowHover\';" onmouseout="this.className=\'' . ((isset($this->_tpldata['reset_row.'][$_reset_row_i]['ROW_CLASS'])) ? $this->_tpldata['reset_row.'][$_reset_row_i]['ROW_CLASS'] : '') . '\';">
    <td nowrap="nowrap">' . ((isset($this->_tpldata['reset_row.'][$_reset_row_i]['TYPE'])) ? $this->_tpldata['reset_row.'][$_reset_row_i]['TYPE'] : '') . '</td>
    <td >' . ((isset($this->_tpldata['reset_row.'][$_reset_row_i]['DISC'])) ? $this->_tpldata['reset_row.'][$_reset_row_i]['DISC'] : '') . '</td>
    <td nowrap="nowrap"><input type="submit" name="' . ((isset($this->_tpldata['reset_row.'][$_reset_row_i]['VAL_NAME'])) ? $this->_tpldata['reset_row.'][$_reset_row_i]['VAL_NAME'] : '') . '" value="' . ((isset($this->_tpldata['.'][0]['L_RESET_ACTION'])) ? $this->_tpldata['.'][0]['L_RESET_ACTION'] : ((isset($user->lang['RESET_ACTION'])) ? $user->lang['RESET_ACTION'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'RESET_ACTION'))) . ' 	}')) . '" class="mainoption" /> </td>
  </tr>
  ';}}
// END reset_row
echo '
  
  <tr>
    <th align="left" colspan="5"></th>
    
  </tr>
</table>
';// ENDIF
}
echo '
</form>
';// INCLUDE page_tail.html
$this->assign_from_include('page_tail.html');

}
?>