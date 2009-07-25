<?php
if ($this->security()) {
// INCLUDE install_header.html
$this->assign_from_include('install_header.html');
// IF S_SHOW_BUTTON
if ($this->_tpldata['.'][0]['S_SHOW_BUTTON']) { 
echo '
<form method="post" action="index.php" name="post">
<input type="hidden" name="install_step" value="4" />

<input type="hidden" name="table_prefix" size="25" value="' . ((isset($this->_tpldata['.'][0]['TABLE_PREFIX'])) ? $this->_tpldata['.'][0]['TABLE_PREFIX'] : '') . '" />
<input type="hidden" name="dbpass" size="25" value="' . ((isset($this->_tpldata['.'][0]['DB_PASS'])) ? $this->_tpldata['.'][0]['DB_PASS'] : '') . '" />
<input type="hidden" name="dbuser" size="25" value="' . ((isset($this->_tpldata['.'][0]['DB_USER'])) ? $this->_tpldata['.'][0]['DB_USER'] : '') . '" />
<input type="hidden" name="dbname" size="25" value="' . ((isset($this->_tpldata['.'][0]['DB_NAME'])) ? $this->_tpldata['.'][0]['DB_NAME'] : '') . '" />
<input type="hidden" name="dbhost" size="25" value="' . ((isset($this->_tpldata['.'][0]['DB_HOST'])) ? $this->_tpldata['.'][0]['DB_HOST'] : '') . '" />
<input type="hidden" name="dbtype" size="25" value="' . ((isset($this->_tpldata['.'][0]['DB_TYPE'])) ? $this->_tpldata['.'][0]['DB_TYPE'] : '') . '" />

';// ENDIF
}
echo '
<br />
';// IF MSG_TEXT != ''
if ($this->_tpldata['.'][0]['MSG_TEXT'] != '') { 
echo '

  <div class="dialog">
 <div class="content">
  <div class="t"></div>
  ';echo '<!-- Your content goes here -->';echo '
  <p><h1>' . ((isset($this->_tpldata['.'][0]['MSG_TITLE'])) ? $this->_tpldata['.'][0]['MSG_TITLE'] : '') . '</h1></p>
  <div class="msgtext" style="padding:10px;height:70px;">' . ((isset($this->_tpldata['.'][0]['MSG_TEXT'])) ? $this->_tpldata['.'][0]['MSG_TEXT'] : '') . '</div>
 </div>
 <div class="b"><div></div></div>
</div>
';// ENDIF
}
// IF SHOW_SQLINFO
if ($this->_tpldata['.'][0]['SHOW_SQLINFO']) { 
echo '
  <div class="dialog">
 <div class="content">
  <div class="t"></div>
  ';echo '<!-- Your content goes here -->';echo '
    <p><h1>' . ((isset($this->_tpldata['.'][0]['SQL_TITLE'])) ? $this->_tpldata['.'][0]['SQL_TITLE'] : '') . '</h1></p>
	<p><div class="msgtext">' . ((isset($this->_tpldata['.'][0]['SQL_TEXT'])) ? $this->_tpldata['.'][0]['SQL_TEXT'] : '') . '</div>
	</div>
 <div class="b"><div></div></div>
</div>
';// ENDIF
}
echo '

<br/>
<div align="center"><input type="button" name="back" value="' . ((isset($this->_tpldata['.'][0]['L_BUTTON_BACK'])) ? $this->_tpldata['.'][0]['L_BUTTON_BACK'] : ((isset($user->lang['BUTTON_BACK'])) ? $user->lang['BUTTON_BACK'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'BUTTON_BACK'))) . ' 	}')) . '" class="mainoption" onClick="history.back()"/>
';// IF S_SHOW_BUTTON
if ($this->_tpldata['.'][0]['S_SHOW_BUTTON']) { 
echo '
<input type="submit" name="submit" value="' . ((isset($this->_tpldata['.'][0]['L_BUTTON3'])) ? $this->_tpldata['.'][0]['L_BUTTON3'] : ((isset($user->lang['BUTTON3'])) ? $user->lang['BUTTON3'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'BUTTON3'))) . ' 	}')) . '" class="mainoption" />
</form>
';// ENDIF
}
echo '
</div>
';// INCLUDE install_tail.html
$this->assign_from_include('install_tail.html');

}
?>