<?php
if ($this->security()) {
// INCLUDE install_header.html
$this->assign_from_include('install_header.html');
// IF S_SHOW_BUTTON
if ($this->_tpldata['.'][0]['S_SHOW_BUTTON']) { 
echo '
<form method="post" action="index.php" name="post">
<input type="hidden" name="install_step" value="5" />

<input type="hidden" name="table_prefix" size="25" value="' . ((isset($this->_tpldata['.'][0]['TABLE_PREFIX'])) ? $this->_tpldata['.'][0]['TABLE_PREFIX'] : '') . '" />
<input type="hidden" name="dbpass" size="25" value="' . ((isset($this->_tpldata['.'][0]['DB_PASS'])) ? $this->_tpldata['.'][0]['DB_PASS'] : '') . '" />
<input type="hidden" name="dbuser" size="25" value="' . ((isset($this->_tpldata['.'][0]['DB_USER'])) ? $this->_tpldata['.'][0]['DB_USER'] : '') . '" />
<input type="hidden" name="dbname" size="25" value="' . ((isset($this->_tpldata['.'][0]['DB_NAME'])) ? $this->_tpldata['.'][0]['DB_NAME'] : '') . '" />
<input type="hidden" name="dbhost" size="25" value="' . ((isset($this->_tpldata['.'][0]['DB_HOST'])) ? $this->_tpldata['.'][0]['DB_HOST'] : '') . '" />
<input type="hidden" name="dbtype" size="25" value="' . ((isset($this->_tpldata['.'][0]['DB_TYPE'])) ? $this->_tpldata['.'][0]['DB_TYPE'] : '') . '" />

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
    <th align="left" colspan="2">' . ((isset($this->_tpldata['.'][0]['L_LANG_CONF'])) ? $this->_tpldata['.'][0]['L_LANG_CONF'] : ((isset($user->lang['LANG_CONF'])) ? $user->lang['LANG_CONF'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'LANG_CONF'))) . ' 	}')) . '</th>
  </tr>
  <tr>
    <td width="40%" class="row2" align="right">' . ((isset($this->_tpldata['.'][0]['L_DEF_LANG'])) ? $this->_tpldata['.'][0]['L_DEF_LANG'] : ((isset($user->lang['DEF_LANG'])) ? $user->lang['DEF_LANG'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'DEF_LANG'))) . ' 	}')) . ':</td>
    <td width="60%" class="row1">
      <select name="default_lang" class="input">
        ';// BEGIN language_row
$_language_row_count = (isset($this->_tpldata['language_row.'])) ?  sizeof($this->_tpldata['language_row.']) : 0;
if ($_language_row_count) {
for ($_language_row_i = 0; $_language_row_i < $_language_row_count; $_language_row_i++)
{
echo '
        <option value="' . ((isset($this->_tpldata['language_row.'][$_language_row_i]['VALUE'])) ? $this->_tpldata['language_row.'][$_language_row_i]['VALUE'] : '') . '" ' . ((isset($this->_tpldata['language_row.'][$_language_row_i]['SELECTED'])) ? $this->_tpldata['language_row.'][$_language_row_i]['SELECTED'] : '') . '>' . ((isset($this->_tpldata['language_row.'][$_language_row_i]['OPTION'])) ? $this->_tpldata['language_row.'][$_language_row_i]['OPTION'] : '') . '</option>
        ';}}
// END language_row
echo '
      </select>
    </td>
  </tr>
  <tr>
    <td width="40%" class="row2" align="right">' . ((isset($this->_tpldata['.'][0]['L_DEF_LOCA'])) ? $this->_tpldata['.'][0]['L_DEF_LOCA'] : ((isset($user->lang['DEF_LOCA'])) ? $user->lang['DEF_LOCA'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'DEF_LOCA'))) . ' 	}')) . ':</td>
    <td width="60%" class="row1">
      <select name="default_locale" class="input">
        ';// BEGIN locale_row
$_locale_row_count = (isset($this->_tpldata['locale_row.'])) ?  sizeof($this->_tpldata['locale_row.']) : 0;
if ($_locale_row_count) {
for ($_locale_row_i = 0; $_locale_row_i < $_locale_row_count; $_locale_row_i++)
{
echo '
        <option value="' . ((isset($this->_tpldata['locale_row.'][$_locale_row_i]['VALUE'])) ? $this->_tpldata['locale_row.'][$_locale_row_i]['VALUE'] : '') . '" ' . ((isset($this->_tpldata['locale_row.'][$_locale_row_i]['SELECTED'])) ? $this->_tpldata['locale_row.'][$_locale_row_i]['SELECTED'] : '') . '>' . ((isset($this->_tpldata['locale_row.'][$_locale_row_i]['OPTION'])) ? $this->_tpldata['locale_row.'][$_locale_row_i]['OPTION'] : '') . '</option>
        ';}}
// END locale_row
echo '
      </select>
    </td>
  </tr>
</table><br />
<table width="100%" border="0" cellspacing="1" cellpadding="2">
  <tr>
    <th align="left" colspan="2">' . ((isset($this->_tpldata['.'][0]['L_GAME_CONF'])) ? $this->_tpldata['.'][0]['L_GAME_CONF'] : ((isset($user->lang['GAME_CONF'])) ? $user->lang['GAME_CONF'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'GAME_CONF'))) . ' 	}')) . '</th>
  </tr>
  <tr>
    <td width="40%" class="row2" align="right">' . ((isset($this->_tpldata['.'][0]['L_DEF_GAME'])) ? $this->_tpldata['.'][0]['L_DEF_GAME'] : ((isset($user->lang['DEF_GAME'])) ? $user->lang['DEF_GAME'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'DEF_GAME'))) . ' 	}')) . ':</td>
    <td width="60%" class="row1">
      <select name="default_game" class="input">
        ';// BEGIN game_row
$_game_row_count = (isset($this->_tpldata['game_row.'])) ?  sizeof($this->_tpldata['game_row.']) : 0;
if ($_game_row_count) {
for ($_game_row_i = 0; $_game_row_i < $_game_row_count; $_game_row_i++)
{
echo '
        <option value="' . ((isset($this->_tpldata['game_row.'][$_game_row_i]['VALUE'])) ? $this->_tpldata['game_row.'][$_game_row_i]['VALUE'] : '') . '"' . ((isset($this->_tpldata['game_row.'][$_game_row_i]['SELECTED'])) ? $this->_tpldata['game_row.'][$_game_row_i]['SELECTED'] : '') . '>' . ((isset($this->_tpldata['game_row.'][$_game_row_i]['OPTION'])) ? $this->_tpldata['game_row.'][$_game_row_i]['OPTION'] : '') . '</option>
        ';}}
// END game_row
echo '
      </select>
      <select name="game_language" class="input">
        ';// BEGIN gamelang_row
$_gamelang_row_count = (isset($this->_tpldata['gamelang_row.'])) ?  sizeof($this->_tpldata['gamelang_row.']) : 0;
if ($_gamelang_row_count) {
for ($_gamelang_row_i = 0; $_gamelang_row_i < $_gamelang_row_count; $_gamelang_row_i++)
{
echo '
        <option value="' . ((isset($this->_tpldata['gamelang_row.'][$_gamelang_row_i]['VALUE'])) ? $this->_tpldata['gamelang_row.'][$_gamelang_row_i]['VALUE'] : '') . '"' . ((isset($this->_tpldata['gamelang_row.'][$_gamelang_row_i]['SELECTED'])) ? $this->_tpldata['gamelang_row.'][$_gamelang_row_i]['SELECTED'] : '') . '>' . ((isset($this->_tpldata['gamelang_row.'][$_gamelang_row_i]['OPTION'])) ? $this->_tpldata['gamelang_row.'][$_gamelang_row_i]['OPTION'] : '') . '</option>
        ';}}
// END gamelang_row
echo '
      </select>
    </td>
  </tr>
</table>
<br />
<table width="100%" border="0" cellspacing="1" cellpadding="2">
  <tr>
    <th align="left" colspan="2">' . ((isset($this->_tpldata['.'][0]['L_SERVER_CONF'])) ? $this->_tpldata['.'][0]['L_SERVER_CONF'] : ((isset($user->lang['SERVER_CONF'])) ? $user->lang['SERVER_CONF'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'SERVER_CONF'))) . ' 	}')) . '</th>
  </tr>
  <tr>
    <td width="40%" class="row2" align="right">' . ((isset($this->_tpldata['.'][0]['L_SERVERNAME'])) ? $this->_tpldata['.'][0]['L_SERVERNAME'] : ((isset($user->lang['SERVERNAME'])) ? $user->lang['SERVERNAME'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'SERVERNAME'))) . ' 	}')) . ':</td>
    <td width="60%" class="row1"><input type="text" name="server_name" size="25" value="' . ((isset($this->_tpldata['.'][0]['SERVER_NAME'])) ? $this->_tpldata['.'][0]['SERVER_NAME'] : '') . '" class="input" /></td>
  </tr>
  <tr>
    <td width="40%" class="row2" align="right">' . ((isset($this->_tpldata['.'][0]['L_SERVERPORT'])) ? $this->_tpldata['.'][0]['L_SERVERPORT'] : ((isset($user->lang['SERVERPORT'])) ? $user->lang['SERVERPORT'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'SERVERPORT'))) . ' 	}')) . ':</td>
    <td width="60%" class="row1"><input type="text" name="server_port" size="25" value="' . ((isset($this->_tpldata['.'][0]['SERVER_PORT'])) ? $this->_tpldata['.'][0]['SERVER_PORT'] : '') . '" class="input" /></td>
  </tr>
  <tr>
    <td width="40%" class="row2" align="right">' . ((isset($this->_tpldata['.'][0]['L_SERVERPATH'])) ? $this->_tpldata['.'][0]['L_SERVERPATH'] : ((isset($user->lang['SERVERPATH'])) ? $user->lang['SERVERPATH'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'SERVERPATH'))) . ' 	}')) . ':</td>
    <td width="60%" class="row1"><input type="text" name="server_path" size="25" value="' . ((isset($this->_tpldata['.'][0]['SERVER_PATH'])) ? $this->_tpldata['.'][0]['SERVER_PATH'] : '') . '" class="input" /></td>
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
<br />
';// ENDIF
}
echo '
<div align="center"><input type="button" name="back" value="' . ((isset($this->_tpldata['.'][0]['L_BUTTON_BACK'])) ? $this->_tpldata['.'][0]['L_BUTTON_BACK'] : ((isset($user->lang['BUTTON_BACK'])) ? $user->lang['BUTTON_BACK'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'BUTTON_BACK'))) . ' 	}')) . '" class="mainoption" onClick="history.back()"/>
';// IF S_SHOW_BUTTON
if ($this->_tpldata['.'][0]['S_SHOW_BUTTON']) { 
echo '
<input type="submit" name="submit" value="' . ((isset($this->_tpldata['.'][0]['L_BUTTON4'])) ? $this->_tpldata['.'][0]['L_BUTTON4'] : ((isset($user->lang['BUTTON4'])) ? $user->lang['BUTTON4'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'BUTTON4'))) . ' 	}')) . '" class="mainoption" />
</form>
';// ENDIF
}
echo '
</div>
';// INCLUDE install_tail.html
$this->assign_from_include('install_tail.html');

}
?>