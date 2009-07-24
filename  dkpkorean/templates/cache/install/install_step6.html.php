<?php
if ($this->security()) {
// INCLUDE install_header.html
$this->assign_from_include('install_header.html');
echo '
<form method="post" action="../login.php" name="post">
<input type="hidden" name="redirect" value="admin/settings.php" />

<div class="dialog">
 <div class="content">
  <div class="t"></div>
  ';echo '<!-- Your content goes here -->';echo '
  <p>
<table width="100%" border="0" cellspacing="1" cellpadding="7">
  <tr>
    <th align="center">' . ((isset($this->_tpldata['.'][0]['L_LOGIN'])) ? $this->_tpldata['.'][0]['L_LOGIN'] : ((isset($user->lang['LOGIN'])) ? $user->lang['LOGIN'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'LOGIN'))) . ' 	}')) . '</th>
  </tr>
  <tr>
    <td class="row1" align="center">
      <table border="0" cellspacing="0" cellpadding="3" align="center" class="borderless">
        <tr>
          <td class="row1" width="40" nowrap="nowrap" align="center">' . ((isset($this->_tpldata['.'][0]['L_USERNAME'])) ? $this->_tpldata['.'][0]['L_USERNAME'] : ((isset($user->lang['USERNAME'])) ? $user->lang['USERNAME'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'USERNAME'))) . ' 	}')) . ':</td>
          <td class="row1" width="100" align="center"><input type="text" name="username" size="20" maxlength="30" class="input" /></td>
        </tr>
        <tr>
          <td class="row1" width="40" nowrap="nowrap">' . ((isset($this->_tpldata['.'][0]['L_PASSWORD'])) ? $this->_tpldata['.'][0]['L_PASSWORD'] : ((isset($user->lang['PASSWORD'])) ? $user->lang['PASSWORD'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'PASSWORD'))) . ' 	}')) . ':</td>
          <td class="row1" width="100"><input type="password" name="password" size="20" maxlength="32" class="input" /></td>
        </tr>
        <tr>
          <td class="row1" colspan="2" valign="middle">
            ' . ((isset($this->_tpldata['.'][0]['L_COOKIE_SET'])) ? $this->_tpldata['.'][0]['L_COOKIE_SET'] : ((isset($user->lang['COOKIE_SET'])) ? $user->lang['COOKIE_SET'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'COOKIE_SET'))) . ' 	}')) . ': <input type="checkbox" name="auto_login" class="checkbox" />
          </td>
        </tr>
      </table>
    </td>
  </tr>
  <tr>
    <th align="center"><input type="submit" name="login" value="' . ((isset($this->_tpldata['.'][0]['L_LOGBUTTON'])) ? $this->_tpldata['.'][0]['L_LOGBUTTON'] : ((isset($user->lang['LOGBUTTON'])) ? $user->lang['LOGBUTTON'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'LOGBUTTON'))) . ' 	}')) . '" class="mainoption" /></th>
  </tr>
</table>
</p><br/>
</div>
 <div class="b"><div></div></div>
</div>

';// IF MSG_TEXT != ''
if ($this->_tpldata['.'][0]['MSG_TEXT'] != '') { 
echo '
<div class="dialog">
 <div class="content">
  <div class="t"></div>
  ';echo '<!-- Your content goes here -->';echo '
  <p><h1>' . ((isset($this->_tpldata['.'][0]['MSG_TITLE'])) ? $this->_tpldata['.'][0]['MSG_TITLE'] : '') . '</h1></p>
  <p><div class="msgtext">&nbsp;' . ((isset($this->_tpldata['.'][0]['MSG_TEXT'])) ? $this->_tpldata['.'][0]['MSG_TEXT'] : '') . '</div><br/>
 </div>
 <div class="b"><div></div></div>
</div>

';// ENDIF
}
echo '
</form>
';// INCLUDE install_tail.html
$this->assign_from_include('install_tail.html');

}
?>