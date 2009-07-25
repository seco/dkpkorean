<?php
if ($this->security()) {
echo '' . ((isset($this->_tpldata['.'][0]['UPD_IK'])) ? $this->_tpldata['.'][0]['UPD_IK'] : '') . '' . ((isset($this->_tpldata['.'][0]['UPD_CHECK'])) ? $this->_tpldata['.'][0]['UPD_CHECK'] : '') . '
';// IF S_GERMAN
if ($this->_tpldata['.'][0]['S_GERMAN']) { 
echo '
<table width="90%" cellpadding="2" cellspacing="0" border="0" align="center">
  <tr><th>&nbsp;</th></tr>
  <tr class="row1"><td>&nbsp;</td></tr>
  <tr class="row1">
  	<td align="center">' . ((isset($this->_tpldata['.'][0]['L_MANUAL'])) ? $this->_tpldata['.'][0]['L_MANUAL'] : ((isset($user->lang['MANUAL'])) ? $user->lang['MANUAL'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'MANUAL'))) . ' 	}')) . '</td>
  </tr>
  <tr class="row1"><td>&nbsp;</td></tr>
  <tr><th>&nbsp;</th></tr>
  <tr><td>&nbsp;</td></tr>
</table>
';// ENDIF
}
echo '
<form action="' . ((isset($this->_tpldata['.'][0]['F_PARSE_LOG'])) ? $this->_tpldata['.'][0]['F_PARSE_LOG'] : '') . '" method="post">
<table width="100%" cellpadding="2" cellspacing="1" border="0">
	<tr>
		<th colspan="2">' . ((isset($this->_tpldata['.'][0]['L_CONFIG'])) ? $this->_tpldata['.'][0]['L_CONFIG'] : ((isset($user->lang['CONFIG'])) ? $user->lang['CONFIG'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'CONFIG'))) . ' 	}')) . '</th>
	</tr>
	';// BEGIN holder
$_holder_count = (isset($this->_tpldata['holder.'])) ?  sizeof($this->_tpldata['holder.']) : 0;
if ($_holder_count) {
for ($_holder_i = 0; $_holder_i < $_holder_count; $_holder_i++)
{
echo '
	<tr><th colspan="2">' . ((isset($this->_tpldata['holder.'][$_holder_i]['TITLE'])) ? $this->_tpldata['holder.'][$_holder_i]['TITLE'] : '') . '</th></tr>
		';// BEGIN config
$_config_count = (isset($this->_tpldata['holder.'][$_holder_i]['config.'])) ? sizeof($this->_tpldata['holder.'][$_holder_i]['config.']) : 0;
if ($_config_count) {
for ($_config_i = 0; $_config_i < $_config_count; $_config_i++)
{
echo '
		<tr class="' . ((isset($this->_tpldata['holder.'][$_holder_i]['config.'][$_config_i]['CLASS'])) ? $this->_tpldata['holder.'][$_holder_i]['config.'][$_config_i]['CLASS'] : '') . '">
			<td>' . ((isset($this->_tpldata['holder.'][$_holder_i]['config.'][$_config_i]['NAME'])) ? $this->_tpldata['holder.'][$_holder_i]['config.'][$_config_i]['NAME'] : '') . '</td><td>' . ((isset($this->_tpldata['holder.'][$_holder_i]['config.'][$_config_i]['VALUE'])) ? $this->_tpldata['holder.'][$_holder_i]['config.'][$_config_i]['VALUE'] : '') . '</td>
		</tr>
		';}}
// END config
}}
// END holder
echo '
	<tr>
		<th colspan="2"><input type="submit" name="update" value="' . ((isset($this->_tpldata['.'][0]['L_SAVE'])) ? $this->_tpldata['.'][0]['L_SAVE'] : ((isset($user->lang['SAVE'])) ? $user->lang['SAVE'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'SAVE'))) . ' 	}')) . '" class="mainoption" /></th>
	</tr>
</table>
</form>';
}
?>