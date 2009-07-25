<?php
if ($this->security()) {
// IF TAB_HEADER
if ($this->_tpldata['.'][0]['TAB_HEADER']) { 
echo '
  ' . ((isset($this->_tpldata['.'][0]['TAB_HEADER'])) ? $this->_tpldata['.'][0]['TAB_HEADER'] : '') . '
  <link href=\'templates/' . ((isset($this->_tpldata['.'][0]['TEMPLATENAME'])) ? $this->_tpldata['.'][0]['TEMPLATENAME'] : '') . '/css/tab.css\' rel=\'stylesheet\' type=\'text/css\' ></link>
';// ENDIF
}
echo '<!-- JQUERY -->';echo '
' . ((isset($this->_tpldata['.'][0]['JQUERY_INCLUDES'])) ? $this->_tpldata['.'][0]['JQUERY_INCLUDES'] : '') . '

<style>
.copyis { 
  font-size: 10px; 
  color: #CECFEF; 
}

.copyis a:link, .copyis a:active, .copyis a:visited { 
  font-size: 10px; 
  color: #CECFEF;
  text-decoration: none;
  font-weight: bold
}

.copyis a:hover { 
  font-size: 10px; 
  color: #E6E6F5;
  text-decoration: underline;
}
.resists { 
  width: 27px;
  text-align: center;
  color: white;
  font-weight: bold;
  font-size: 12px !important;
}

.uc_profmenu {
  text-align: right;
}
</style>';
}
?>