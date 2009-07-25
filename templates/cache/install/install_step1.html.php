<?php
if ($this->security()) {
// INCLUDE install_header.html
$this->assign_from_include('install_header.html');
echo '

<div class="dialog">
 <div class="content">
  <div class="t"></div>
  ';echo '<!-- Your content goes here -->';echo '
  <p><h1>' . ((isset($this->_tpldata['.'][0]['L_INSTALL_LANGUAGE'])) ? $this->_tpldata['.'][0]['L_INSTALL_LANGUAGE'] : ((isset($user->lang['INSTALL_LANGUAGE'])) ? $user->lang['INSTALL_LANGUAGE'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'INSTALL_LANGUAGE'))) . ' 	}')) . '</h1></p>
  <p><span style="float:left;">' . ((isset($this->_tpldata['.'][0]['L_LANGUAGE_SELECT'])) ? $this->_tpldata['.'][0]['L_LANGUAGE_SELECT'] : ((isset($user->lang['LANGUAGE_SELECT'])) ? $user->lang['LANGUAGE_SELECT'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'LANGUAGE_SELECT'))) . ' 	}')) . ':&nbsp;</span><span class="left"><form method="get" action="index.php" name="langget">
        <select name="lang" class="input" onchange="javascript:form.submit();">
          ';// BEGIN lang_row
$_lang_row_count = (isset($this->_tpldata['lang_row.'])) ?  sizeof($this->_tpldata['lang_row.']) : 0;
if ($_lang_row_count) {
for ($_lang_row_i = 0; $_lang_row_i < $_lang_row_count; $_lang_row_i++)
{
echo '
          <option value="' . ((isset($this->_tpldata['lang_row.'][$_lang_row_i]['VALUE'])) ? $this->_tpldata['lang_row.'][$_lang_row_i]['VALUE'] : '') . '" ' . ((isset($this->_tpldata['lang_row.'][$_lang_row_i]['SELECTED'])) ? $this->_tpldata['lang_row.'][$_lang_row_i]['SELECTED'] : '') . '>' . ((isset($this->_tpldata['lang_row.'][$_lang_row_i]['OPTION'])) ? $this->_tpldata['lang_row.'][$_lang_row_i]['OPTION'] : '') . '</option>
          ';}}
// END lang_row
echo '
        </select>
      </form></span></p><br/>
 </div>
 <div class="b"><div></div></div>
</div>

<div class="dialog">
 <div class="content">
  <div class="t"></div>
  ';echo '<!-- Your content goes here -->';echo '
  <p><table width="100%" border="0" cellspacing="1" cellpadding="2">
  <tr>
    <th align="left" colspan="3">' . ((isset($this->_tpldata['.'][0]['L_EQDKPPNAME'])) ? $this->_tpldata['.'][0]['L_EQDKPPNAME'] : ((isset($user->lang['EQDKPPNAME'])) ? $user->lang['EQDKPPNAME'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'EQDKPPNAME'))) . ' 	}')) . '</th>
  </tr>
  <tr>
    <td width="250" class="row2" nowrap="nowrap">' . ((isset($this->_tpldata['.'][0]['L_EQDKPPVERSION'])) ? $this->_tpldata['.'][0]['L_EQDKPPVERSION'] : ((isset($user->lang['EQDKPPVERSION'])) ? $user->lang['EQDKPPVERSION'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'EQDKPPVERSION'))) . ' 	}')) . ':</td>
    <td width="50%" class="row1">' . ((isset($this->_tpldata['.'][0]['L_EQDKPPNAME'])) ? $this->_tpldata['.'][0]['L_EQDKPPNAME'] : ((isset($user->lang['EQDKPPNAME'])) ? $user->lang['EQDKPPNAME'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'EQDKPPNAME'))) . ' 	}')) . ' ' . ((isset($this->_tpldata['.'][0]['OUR_EQDKPP_VERSION'])) ? $this->_tpldata['.'][0]['OUR_EQDKPP_VERSION'] : '') . '</td>
    <td width="100%" class="row2">' . ((isset($this->_tpldata['.'][0]['L_SERVER_VERSION'])) ? $this->_tpldata['.'][0]['L_SERVER_VERSION'] : ((isset($user->lang['SERVER_VERSION'])) ? $user->lang['SERVER_VERSION'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'SERVER_VERSION'))) . ' 	}')) . ': ' . ((isset($this->_tpldata['.'][0]['THEIR_EQDKPP_VERSION'])) ? $this->_tpldata['.'][0]['THEIR_EQDKPP_VERSION'] : '') . '</td>
  </tr>
</table></p><br/>
 </div>
 <div class="b"><div></div></div>
</div>

<div class="dialog">
 <div class="content">
  <div class="t"></div>
  <p><table width="100%" border="0" cellspacing="1" cellpadding="2">
  <tr>
    <th align="left" colspan="3">' . ((isset($this->_tpldata['.'][0]['L_INST_PHP'])) ? $this->_tpldata['.'][0]['L_INST_PHP'] : ((isset($user->lang['INST_PHP'])) ? $user->lang['INST_PHP'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'INST_PHP'))) . ' 	}')) . '</th>
  </tr>
  <tr>
    <td colspan="3" class="row2"><a href="index.php?mode=phpinfo" target="_blank">' . ((isset($this->_tpldata['.'][0]['L_VIEWPHPINFO'])) ? $this->_tpldata['.'][0]['L_VIEWPHPINFO'] : ((isset($user->lang['VIEWPHPINFO'])) ? $user->lang['VIEWPHPINFO'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'VIEWPHPINFO'))) . ' 	}')) . '</a></td>
  </tr>
  <tr>
    <td width="300" class="row2" nowrap="nowrap">' . ((isset($this->_tpldata['.'][0]['L_VERSION'])) ? $this->_tpldata['.'][0]['L_VERSION'] : ((isset($user->lang['VERSION'])) ? $user->lang['VERSION'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'VERSION'))) . ' 	}')) . ':</td>
    <td width="50%" class="row1">' . ((isset($this->_tpldata['.'][0]['L_USING'])) ? $this->_tpldata['.'][0]['L_USING'] : ((isset($user->lang['USING'])) ? $user->lang['USING'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'USING'))) . ' 	}')) . ': ' . ((isset($this->_tpldata['.'][0]['OUR_PHP_VERSION'])) ? $this->_tpldata['.'][0]['OUR_PHP_VERSION'] : '') . '</td>
    <td width="50%" class="row2">' . ((isset($this->_tpldata['.'][0]['L_REQUIRED'])) ? $this->_tpldata['.'][0]['L_REQUIRED'] : ((isset($user->lang['REQUIRED'])) ? $user->lang['REQUIRED'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'REQUIRED'))) . ' 	}')) . ': ' . ((isset($this->_tpldata['.'][0]['THEIR_PHP_VERSION'])) ? $this->_tpldata['.'][0]['THEIR_PHP_VERSION'] : '') . '</td>
  </tr>
  <tr>
    <td width="300" class="row2" nowrap="nowrap">' . ((isset($this->_tpldata['.'][0]['L_MYSQLMODULE'])) ? $this->_tpldata['.'][0]['L_MYSQLMODULE'] : ((isset($user->lang['MYSQLMODULE'])) ? $user->lang['MYSQLMODULE'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'MYSQLMODULE'))) . ' 	}')) . ':</td>
    <td width="50%" class="row1">' . ((isset($this->_tpldata['.'][0]['L_AVAILABLE'])) ? $this->_tpldata['.'][0]['L_AVAILABLE'] : ((isset($user->lang['AVAILABLE'])) ? $user->lang['AVAILABLE'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'AVAILABLE'))) . ' 	}')) . ': ' . ((isset($this->_tpldata['.'][0]['OUR_MYSQL'])) ? $this->_tpldata['.'][0]['OUR_MYSQL'] : '') . '</td>
    <td width="50%" class="row2">' . ((isset($this->_tpldata['.'][0]['L_REQUIRED'])) ? $this->_tpldata['.'][0]['L_REQUIRED'] : ((isset($user->lang['REQUIRED'])) ? $user->lang['REQUIRED'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'REQUIRED'))) . ' 	}')) . ': ' . ((isset($this->_tpldata['.'][0]['THEIR_MYSQL'])) ? $this->_tpldata['.'][0]['THEIR_MYSQL'] : '') . '</td>
  </tr>
  <tr>
    <td width="300" class="row2" nowrap="nowrap">' . ((isset($this->_tpldata['.'][0]['L_ZLIBMODULE'])) ? $this->_tpldata['.'][0]['L_ZLIBMODULE'] : ((isset($user->lang['ZLIBMODULE'])) ? $user->lang['ZLIBMODULE'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'ZLIBMODULE'))) . ' 	}')) . ':</td>
    <td width="50%" class="row1">' . ((isset($this->_tpldata['.'][0]['L_AVAILABLE'])) ? $this->_tpldata['.'][0]['L_AVAILABLE'] : ((isset($user->lang['AVAILABLE'])) ? $user->lang['AVAILABLE'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'AVAILABLE'))) . ' 	}')) . ': ' . ((isset($this->_tpldata['.'][0]['OUR_ZLIB'])) ? $this->_tpldata['.'][0]['OUR_ZLIB'] : '') . '</td>
    <td width="50%" class="row2">' . ((isset($this->_tpldata['.'][0]['L_REQUIRED'])) ? $this->_tpldata['.'][0]['L_REQUIRED'] : ((isset($user->lang['REQUIRED'])) ? $user->lang['REQUIRED'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'REQUIRED'))) . ' 	}')) . ': ' . ((isset($this->_tpldata['.'][0]['THEIR_ZLIB'])) ? $this->_tpldata['.'][0]['THEIR_ZLIB'] : '') . '</td>
  </tr>
  <tr>
    <td width="300" class="row2" nowrap="nowrap">' . ((isset($this->_tpldata['.'][0]['L_SAFEMODE'])) ? $this->_tpldata['.'][0]['L_SAFEMODE'] : ((isset($user->lang['SAFEMODE'])) ? $user->lang['SAFEMODE'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'SAFEMODE'))) . ' 	}')) . ':</td>
    <td width="50%" class="row1">' . ((isset($this->_tpldata['.'][0]['L_ENABLED'])) ? $this->_tpldata['.'][0]['L_ENABLED'] : ((isset($user->lang['ENABLED'])) ? $user->lang['ENABLED'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'ENABLED'))) . ' 	}')) . ': ' . ((isset($this->_tpldata['.'][0]['OUR_SAFEMODE'])) ? $this->_tpldata['.'][0]['OUR_SAFEMODE'] : '') . '</td>
    <td width="50%" class="row2">' . ((isset($this->_tpldata['.'][0]['L_REQUIRED'])) ? $this->_tpldata['.'][0]['L_REQUIRED'] : ((isset($user->lang['REQUIRED'])) ? $user->lang['REQUIRED'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'REQUIRED'))) . ' 	}')) . ': ' . ((isset($this->_tpldata['.'][0]['THEIR_SAFEMODE'])) ? $this->_tpldata['.'][0]['THEIR_SAFEMODE'] : '') . '</td>
  </tr>
  <tr valign="top">
    <td width="300" class="row2" nowrap="nowrap">' . ((isset($this->_tpldata['.'][0]['L_CURLMODULE'])) ? $this->_tpldata['.'][0]['L_CURLMODULE'] : ((isset($user->lang['CURLMODULE'])) ? $user->lang['CURLMODULE'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'CURLMODULE'))) . ' 	}')) . ':</td>
    <td width="50%" class="row1">' . ((isset($this->_tpldata['.'][0]['L_AVAILABLE'])) ? $this->_tpldata['.'][0]['L_AVAILABLE'] : ((isset($user->lang['AVAILABLE'])) ? $user->lang['AVAILABLE'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'AVAILABLE'))) . ' 	}')) . ': ' . ((isset($this->_tpldata['.'][0]['OUR_CURL'])) ? $this->_tpldata['.'][0]['OUR_CURL'] : '') . '</td>
    <td width="50%" class="row2">' . ((isset($this->_tpldata['.'][0]['L_REQUIRED'])) ? $this->_tpldata['.'][0]['L_REQUIRED'] : ((isset($user->lang['REQUIRED'])) ? $user->lang['REQUIRED'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'REQUIRED'))) . ' 	}')) . ': ' . ((isset($this->_tpldata['.'][0]['THEIR_CURL'])) ? $this->_tpldata['.'][0]['THEIR_CURL'] : '') . '</td>
  </tr>
    <tr>
    <td width="300" class="row2" nowrap="nowrap">' . ((isset($this->_tpldata['.'][0]['L_FOPEN'])) ? $this->_tpldata['.'][0]['L_FOPEN'] : ((isset($user->lang['FOPEN'])) ? $user->lang['FOPEN'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'FOPEN'))) . ' 	}')) . ':</td>
    <td width="50%" class="row1">' . ((isset($this->_tpldata['.'][0]['L_AVAILABLE'])) ? $this->_tpldata['.'][0]['L_AVAILABLE'] : ((isset($user->lang['AVAILABLE'])) ? $user->lang['AVAILABLE'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'AVAILABLE'))) . ' 	}')) . ': ' . ((isset($this->_tpldata['.'][0]['OUR_FOPEN'])) ? $this->_tpldata['.'][0]['OUR_FOPEN'] : '') . '</td>
    <td width="50%" class="row2">' . ((isset($this->_tpldata['.'][0]['L_REQUIRED'])) ? $this->_tpldata['.'][0]['L_REQUIRED'] : ((isset($user->lang['REQUIRED'])) ? $user->lang['REQUIRED'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'REQUIRED'))) . ' 	}')) . ': ' . ((isset($this->_tpldata['.'][0]['THEIR_FOPEN'])) ? $this->_tpldata['.'][0]['THEIR_FOPEN'] : '') . '</td>
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
  <p><div class="msgtext">' . ((isset($this->_tpldata['.'][0]['MSG_TEXT'])) ? $this->_tpldata['.'][0]['MSG_TEXT'] : '') . '</div></p><br/>
 </div>
 <div class="b"><div></div></div>
</div>
';// ENDIF
}
echo '
<br/>


';// IF S_SHOW_BUTTON
if ($this->_tpldata['.'][0]['S_SHOW_BUTTON']) { 
echo '
<form method="post" action="index.php" name="post">
<input type="hidden" name="install_step" value="2" />
<div align="center"><input type="submit" name="submit" value="' . ((isset($this->_tpldata['.'][0]['L_INST_BUTTON1'])) ? $this->_tpldata['.'][0]['L_INST_BUTTON1'] : ((isset($user->lang['INST_BUTTON1'])) ? $user->lang['INST_BUTTON1'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'INST_BUTTON1'))) . ' 	}')) . '" class="mainoption" /></div>
</form>
';// ENDIF
}
// INCLUDE install_tail.html
$this->assign_from_include('install_tail.html');

}
?>