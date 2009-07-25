<?php
if ($this->security()) {
// INCLUDE install_header.html
$this->assign_from_include('install_header.html');
// IF S_SHOW_BUTTON
if ($this->_tpldata['.'][0]['S_SHOW_BUTTON']) { 
echo '
<form method="post" action="index.php" name="post">
<input type="hidden" name="install_step" value="6" />
';// ENDIF
}
echo '
<div class="dialog">
 <div class="content">
  <div class="t"></div>
  ';echo '<!-- Your content goes here -->';echo '
  <p>
<table width="100%" border="0" cellspacing="1" cellpadding="2">
  <tr>
    <th align="left" colspan="2">' . ((isset($this->_tpldata['.'][0]['L_ADMINACC'])) ? $this->_tpldata['.'][0]['L_ADMINACC'] : ((isset($user->lang['ADMINACC'])) ? $user->lang['ADMINACC'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'ADMINACC'))) . ' 	}')) . '</th>
  </tr>
  <tr>
    <td width="40%" class="row2" align="right">' . ((isset($this->_tpldata['.'][0]['L_ADM_USERN'])) ? $this->_tpldata['.'][0]['L_ADM_USERN'] : ((isset($user->lang['ADM_USERN'])) ? $user->lang['ADM_USERN'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'ADM_USERN'))) . ' 	}')) . ':</td>
    <td width="60%" class="row1" align="left"><input type="text" name="username" value="" class="input" /></td>
  </tr>
  <tr>
    <td width="40%" class="row2" align="right">' . ((isset($this->_tpldata['.'][0]['L_ADM_PW'])) ? $this->_tpldata['.'][0]['L_ADM_PW'] : ((isset($user->lang['ADM_PW'])) ? $user->lang['ADM_PW'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'ADM_PW'))) . ' 	}')) . ':</td>
    <td width="60%" class="row1" align="left"><input type="password" name="user_password1" value="" class="input" /></td>
  </tr>
  <tr>
    <td width="40%" class="row2" align="right">' . ((isset($this->_tpldata['.'][0]['L_ADM_PW_CONF'])) ? $this->_tpldata['.'][0]['L_ADM_PW_CONF'] : ((isset($user->lang['ADM_PW_CONF'])) ? $user->lang['ADM_PW_CONF'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'ADM_PW_CONF'))) . ' 	}')) . ':</td>
    <td width="60%" class="row1" align="left"><input type="password" name="user_password2" value="" class="input" /></td>
  </tr>
  <tr>
    <td width="40%" class="row2" align="right">' . ((isset($this->_tpldata['.'][0]['L_ADM_EMAIL'])) ? $this->_tpldata['.'][0]['L_ADM_EMAIL'] : ((isset($user->lang['ADM_EMAIL'])) ? $user->lang['ADM_EMAIL'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'ADM_EMAIL'))) . ' 	}')) . ':</td>
    <td width="60%" class="row1" align="left"><input type="text" name="user_email" value="" class="input" size="30"  /></td>
  </tr>
</table></p><br/>
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
<div align="center"><input type="button" name="back" value="' . ((isset($this->_tpldata['.'][0]['L_BUTTON_BACK'])) ? $this->_tpldata['.'][0]['L_BUTTON_BACK'] : ((isset($user->lang['BUTTON_BACK'])) ? $user->lang['BUTTON_BACK'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'BUTTON_BACK'))) . ' 	}')) . '" class="mainoption" onClick="history.back()"/>
';// IF S_SHOW_BUTTON
if ($this->_tpldata['.'][0]['S_SHOW_BUTTON']) { 
echo '
<input type="submit" name="submit" value="' . ((isset($this->_tpldata['.'][0]['L_BUTTON5'])) ? $this->_tpldata['.'][0]['L_BUTTON5'] : ((isset($user->lang['BUTTON5'])) ? $user->lang['BUTTON5'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'BUTTON5'))) . ' 	}')) . '" class="mainoption" />
</form>
';// ENDIF
}
echo '
</div>
</div>
';// INCLUDE install_tail.html
$this->assign_from_include('install_tail.html');

}
?>