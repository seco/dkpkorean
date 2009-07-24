<?php
if ($this->security()) {
echo '<form method="post" action="' . ((isset($this->_tpldata['.'][0]['F_SETTINGS'])) ? $this->_tpldata['.'][0]['F_SETTINGS'] : '') . '" name="post">
' . ((isset($this->_tpldata['.'][0]['SETTINGS'])) ? $this->_tpldata['.'][0]['SETTINGS'] : '') . '
<table width="100%" border="0" cellspacing="1" cellpadding="2">
 <tr><th align="center" colspan="2"><input type="submit" name="bpsavebu" value="' . ((isset($this->_tpldata['.'][0]['L_SUBMIT'])) ? $this->_tpldata['.'][0]['L_SUBMIT'] : ((isset($user->lang['SUBMIT'])) ? $user->lang['SUBMIT'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'SUBMIT'))) . ' 	}')) . '" class="mainoption" /></th></tr>
</table>
</form>';
}
?>