<?php
if ($this->security()) {
echo '<script language="JavaScript" type="text/javascript">
function AboutDialog(){
  ' . ((isset($this->_tpldata['.'][0]['JS_ABOUT'])) ? $this->_tpldata['.'][0]['JS_ABOUT'] : '') . '
}
</script>

<center>
  <span class="copy">
    <a onclick="javascript:AboutDialog()" style="cursor:pointer;" onmouseover="style.textDecoration=\'underline\';" onmouseout="style.textDecoration=\'none\';"><img src="' . ((isset($this->_tpldata['.'][0]['BS_INFO_IMG'])) ? $this->_tpldata['.'][0]['BS_INFO_IMG'] : '') . '" alt="Credits" border="0" /> Credits</a>
  </span>
  <br />
  <span class="copy">
    ' . ((isset($this->_tpldata['.'][0]['L_CREDITS'])) ? $this->_tpldata['.'][0]['L_CREDITS'] : ((isset($user->lang['CREDITS'])) ? $user->lang['CREDITS'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'CREDITS'))) . ' 	}')) . '
  </span>
</center>';
}
?>