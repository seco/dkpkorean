<?php
if ($this->security()) {
echo '' . ((isset($this->_tpldata['.'][0]['JQUERY_INCLUDES'])) ? $this->_tpldata['.'][0]['JQUERY_INCLUDES'] : '') . '
<table width="100%" align="center" class="borderless" cellpadding="1" cellspacing="1">
	<form method="get" action="' . ((isset($this->_tpldata['.'][0]['F_ACTION'])) ? $this->_tpldata['.'][0]['F_ACTION'] : '') . '" name="get">
    ' . ((isset($this->_tpldata['.'][0]['BOSSLOOT'])) ? $this->_tpldata['.'][0]['BOSSLOOT'] : '') . '
</table>';
}
?>