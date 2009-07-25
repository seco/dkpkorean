<?php
if ($this->security()) {
echo '<!-- JQUERY -->';echo ' ' . ((isset($this->_tpldata['.'][0]['JQUERY_INCLUDES'])) ? $this->_tpldata['.'][0]['JQUERY_INCLUDES'] : '') . '
<form action="login.php">
  <table width="100%" cellspacing="0" cellpadding="6">
    ';// IF OUTPUT
if ($this->_tpldata['.'][0]['OUTPUT']) { 
echo '
    <tr class="row2">
      <td colspan="6" align="center">
        <table width="100%" cellpadding="10">
          <tr>
            <td align="left">
              <img src="../../images/false.png"></td><td align="center"><H2>' . ((isset($this->_tpldata['.'][0]['OUTPUT'])) ? $this->_tpldata['.'][0]['OUTPUT'] : '') . '</H2></td><td align="right"><img src="../../images/false.png">
            </td>
          </tr>
        </table>
      </td>
    </tr>
    <tr>
      <td>&nbsp;</td>
    </tr>
    ';// ENDIF
}
echo '
    <tr class="row1">
      <th colspan="5">' . ((isset($this->_tpldata['.'][0]['GR_WRITE_HEADLINE'])) ? $this->_tpldata['.'][0]['GR_WRITE_HEADLINE'] : '') . '</td>
      <th width="40">
          <input type="submit" class="mainoption" name="login" value="Login">
      </th>
    </tr>
    <tr class="row2">
      <td colspan="6" align="center"><p>' . ((isset($this->_tpldata['.'][0]['GR_WRITE_WELCOME'])) ? $this->_tpldata['.'][0]['GR_WRITE_WELCOME'] : '') . '</p></td>
    </tr>
  </table>
</form>
<form action="writerequest.php" name="inputform" method="POST">
  <table width="100%" cellspacing="0" cellpadding="6">
    <tr class="row1">
      <td>&nbsp;</td>
      <td align="right">' . ((isset($this->_tpldata['.'][0]['GR_USERNAME_F'])) ? $this->_tpldata['.'][0]['GR_USERNAME_F'] : '') . '</td>
      <td><input name="username" type="text" size="50" value="' . ((isset($this->_tpldata['.'][0]['GR_USERNAME'])) ? $this->_tpldata['.'][0]['GR_USERNAME'] : '') . '"></td>
      <td align="right">' . ((isset($this->_tpldata['.'][0]['GR_EMAIL_F'])) ? $this->_tpldata['.'][0]['GR_EMAIL_F'] : '') . '</td>
      <td><input name="email" type="text" size="50" value="' . ((isset($this->_tpldata['.'][0]['GR_EMAIL'])) ? $this->_tpldata['.'][0]['GR_EMAIL'] : '') . '"></td>
      <td>&nbsp;</td>
    <tr class="row2">
      <td>&nbsp;</td>
      <td align="right">' . ((isset($this->_tpldata['.'][0]['GR_PASSWORD_F'])) ? $this->_tpldata['.'][0]['GR_PASSWORD_F'] : '') . '</td>
      <td colspan="4"><input name="password" type="password" size="50" value="' . ((isset($this->_tpldata['.'][0]['GR_PASSWORD'])) ? $this->_tpldata['.'][0]['GR_PASSWORD'] : '') . '"></td>
    </tr>
    <tr class="row1">
      <td>&nbsp;</td>
      <td align="right" valign="top">' . ((isset($this->_tpldata['.'][0]['GR_TEXT_F'])) ? $this->_tpldata['.'][0]['GR_TEXT_F'] : '') . '</td>
      <td colspan="4" valign="top">
       ' . ((isset($this->_tpldata['.'][0]['GR_EDITOR'])) ? $this->_tpldata['.'][0]['GR_EDITOR'] : '') . '<textarea id="requesttext" name="text" class="jTagEditor">' . ((isset($this->_tpldata['.'][0]['GR_TEXT'])) ? $this->_tpldata['.'][0]['GR_TEXT'] : '') . '</textarea></td>
      </td>
    </tr>
    <tr class="row2">
      <td colspan="6">
        <input type="submit" class="mainoption" name="gr_submit" value="' . ((isset($this->_tpldata['.'][0]['GR_SENDREQUEST'])) ? $this->_tpldata['.'][0]['GR_SENDREQUEST'] : '') . '">
        <input type="reset"  class="liteoption"  value="' . ((isset($this->_tpldata['.'][0]['GR_RESET'])) ? $this->_tpldata['.'][0]['GR_RESET'] : '') . '">
      </td>
    </tr>
  </table>
</form>';
}
?>