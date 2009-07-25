<?php
if ($this->security()) {
echo '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

<title>' . ((isset($this->_tpldata['.'][0]['L_HEADER'])) ? $this->_tpldata['.'][0]['L_HEADER'] : ((isset($user->lang['HEADER'])) ? $user->lang['HEADER'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'HEADER'))) . ' 	}')) . ' - ' . ((isset($this->_tpldata['.'][0]['L_STEP'])) ? $this->_tpldata['.'][0]['L_STEP'] : ((isset($user->lang['STEP'])) ? $user->lang['STEP'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'STEP'))) . ' 	}')) . ' ' . ((isset($this->_tpldata['.'][0]['INSTALL_STEP'])) ? $this->_tpldata['.'][0]['INSTALL_STEP'] : '') . '</title>
<style type="text/css">
';// INCLUDE install_css.html
$this->assign_from_include('install_css.html');
echo '
</style>
</head>

<body>

<div id="outer">
<div id="hdr" align="left">
 <table width="100%" border="0" cellspacing="1" cellpadding="2" class="borderless">
  <tr>
    <td width="100%">
      <center>
	  <img src="../images/logo_eqdkp_plus.gif" alt="Logo" />
      <span class="maintitle">' . ((isset($this->_tpldata['.'][0]['L_HEADER'])) ? $this->_tpldata['.'][0]['L_HEADER'] : ((isset($user->lang['HEADER'])) ? $user->lang['HEADER'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'HEADER'))) . ' 	}')) . '</span><br />
      </center>
    </td>
  </tr>
</table>

<div id="bodyblock" align="right">
<div id="l-col" align="left">
<div id="StepIndicatorList">
        <ol>
          ';// BEGIN step_row
$_step_row_count = (isset($this->_tpldata['step_row.'])) ?  sizeof($this->_tpldata['step_row.']) : 0;
if ($_step_row_count) {
for ($_step_row_i = 0; $_step_row_i < $_step_row_count; $_step_row_i++)
{
echo '
          <li' . ((isset($this->_tpldata['step_row.'][$_step_row_i]['SELECTED'])) ? $this->_tpldata['step_row.'][$_step_row_i]['SELECTED'] : '') . '>' . ((isset($this->_tpldata['step_row.'][$_step_row_i]['VALUE'])) ? $this->_tpldata['step_row.'][$_step_row_i]['VALUE'] : '') . '</li>
          ';}}
// END step_row
echo '
        </ol>
      </div>
</div>

<div id="cont">';
}
?>