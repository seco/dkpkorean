<?php
if ($this->security()) {
echo '' . ((isset($this->_tpldata['.'][0]['JQUERY_INCLUDES'])) ? $this->_tpldata['.'][0]['JQUERY_INCLUDES'] : '') . '
<script type="text/javascript">
  function EntityConf(mode, entity){
    ' . ((isset($this->_tpldata['.'][0]['JS_POPUP_FUNC'])) ? $this->_tpldata['.'][0]['JS_POPUP_FUNC'] : '') . '
  }
</script>

<form method="get" action="' . ((isset($this->_tpldata['.'][0]['F_CONFIG'])) ? $this->_tpldata['.'][0]['F_CONFIG'] : '') . '" name="conf_pack">
  ' . ((isset($this->_tpldata['.'][0]['CONFIGURE_PACK'])) ? $this->_tpldata['.'][0]['CONFIGURE_PACK'] : '') . '
</form>';
}
?>