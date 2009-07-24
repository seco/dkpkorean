<?php
if ($this->security()) {
// INCLUDE install_header.html
$this->assign_from_include('install_header.html');
// IF S_SHOW_BUTTON
if ($this->_tpldata['.'][0]['S_SHOW_BUTTON']) { 
echo '
<form method="post" action="index.php" name="post">
<input type="hidden" name="install_step" value="3" />
';// ENDIF
}
echo '

 <div class="dialog">
 <div class="content">
  <div class="t"></div>
  ';echo '<!-- Your content goes here -->';echo '
  <br/>
<table width="100%" border="0" cellspacing="1" cellpadding="2">
  <tr>
    <th align="left" colspan="2">' . ((isset($this->_tpldata['.'][0]['L_DATABASE_CONF'])) ? $this->_tpldata['.'][0]['L_DATABASE_CONF'] : ((isset($user->lang['DATABASE_CONF'])) ? $user->lang['DATABASE_CONF'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'DATABASE_CONF'))) . ' 	}')) . '</th>
  </tr>
  <tr>
    <td width="40%" class="row2" align="right">' . ((isset($this->_tpldata['.'][0]['L_DATABASE_TYPE'])) ? $this->_tpldata['.'][0]['L_DATABASE_TYPE'] : ((isset($user->lang['DATABASE_TYPE'])) ? $user->lang['DATABASE_TYPE'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'DATABASE_TYPE'))) . ' 	}')) . ':</td>
    <td width="60%" class="row1">
      <select name="dbtype" class="input">
        ';// BEGIN dbal_row
$_dbal_row_count = (isset($this->_tpldata['dbal_row.'])) ?  sizeof($this->_tpldata['dbal_row.']) : 0;
if ($_dbal_row_count) {
for ($_dbal_row_i = 0; $_dbal_row_i < $_dbal_row_count; $_dbal_row_i++)
{
echo '
        <option value="' . ((isset($this->_tpldata['dbal_row.'][$_dbal_row_i]['VALUE'])) ? $this->_tpldata['dbal_row.'][$_dbal_row_i]['VALUE'] : '') . '">' . ((isset($this->_tpldata['dbal_row.'][$_dbal_row_i]['OPTION'])) ? $this->_tpldata['dbal_row.'][$_dbal_row_i]['OPTION'] : '') . '</option>
        ';}}
// END dbal_row
echo '
      </select>
    </td>
  </tr>
  <tr>
    <td width="40%" class="row2" align="right">' . ((isset($this->_tpldata['.'][0]['L_DATABASE_HOST'])) ? $this->_tpldata['.'][0]['L_DATABASE_HOST'] : ((isset($user->lang['DATABASE_HOST'])) ? $user->lang['DATABASE_HOST'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'DATABASE_HOST'))) . ' 	}')) . ':</td>
    <td width="60%" class="row1"><input type="text" name="dbhost" size="25" value="' . ((isset($this->_tpldata['.'][0]['DB_HOST'])) ? $this->_tpldata['.'][0]['DB_HOST'] : '') . '" class="input" /></td>
  </tr>
  <tr>
    <td width="40%" class="row2" align="right">' . ((isset($this->_tpldata['.'][0]['L_DATABASE_NAME'])) ? $this->_tpldata['.'][0]['L_DATABASE_NAME'] : ((isset($user->lang['DATABASE_NAME'])) ? $user->lang['DATABASE_NAME'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'DATABASE_NAME'))) . ' 	}')) . ':</td>
    <td width="60%" class="row1"><input type="text" name="dbname" size="25" value="" class="input" /></td>
  </tr>
  <tr>
    <td width="40%" class="row2" align="right">' . ((isset($this->_tpldata['.'][0]['L_DATABASE_USER'])) ? $this->_tpldata['.'][0]['L_DATABASE_USER'] : ((isset($user->lang['DATABASE_USER'])) ? $user->lang['DATABASE_USER'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'DATABASE_USER'))) . ' 	}')) . ':</td>
    <td width="60%" class="row1"><input type="text" name="dbuser" size="25" value="" class="input" /></td>
  </tr>
  <tr>
    <td width="40%" class="row2" align="right">' . ((isset($this->_tpldata['.'][0]['L_DATABASE_PW'])) ? $this->_tpldata['.'][0]['L_DATABASE_PW'] : ((isset($user->lang['DATABASE_PW'])) ? $user->lang['DATABASE_PW'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'DATABASE_PW'))) . ' 	}')) . ':</td>
    <td width="60%" class="row1"><input type="password" name="dbpass" size="25" value="" class="input" /></td>
  </tr>
  <tr>
    <td width="40%" class="row2" align="right">' . ((isset($this->_tpldata['.'][0]['L_DATABASE_PREFIX'])) ? $this->_tpldata['.'][0]['L_DATABASE_PREFIX'] : ((isset($user->lang['DATABASE_PREFIX'])) ? $user->lang['DATABASE_PREFIX'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'DATABASE_PREFIX'))) . ' 	}')) . ':</td>
    <td width="60%" class="row1"><input type="text" name="table_prefix" size="25" value="' . ((isset($this->_tpldata['.'][0]['TABLE_PREFIX'])) ? $this->_tpldata['.'][0]['TABLE_PREFIX'] : '') . '" class="input" /></td>
  </tr>
  </table><br/>
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
  <p><div class="msgtext"><img src="../templates/install/images/file_conflict.gif">&nbsp;' . ((isset($this->_tpldata['.'][0]['MSG_TEXT'])) ? $this->_tpldata['.'][0]['MSG_TEXT'] : '') . '</div></p>
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
<input type="submit" name="submit" value="' . ((isset($this->_tpldata['.'][0]['L_BUTTON_2'])) ? $this->_tpldata['.'][0]['L_BUTTON_2'] : ((isset($user->lang['BUTTON_2'])) ? $user->lang['BUTTON_2'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'BUTTON_2'))) . ' 	}')) . '" class="mainoption" />
</form>
';// ENDIF
}
echo '
</div>
';// INCLUDE install_tail.html
$this->assign_from_include('install_tail.html');

}
?>