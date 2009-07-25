<?php
if ($this->security()) {
echo '<!-- JQUERY -->';echo '
' . ((isset($this->_tpldata['.'][0]['JQUERY_INCLUDES'])) ? $this->_tpldata['.'][0]['JQUERY_INCLUDES'] : '') . '';
}
?>