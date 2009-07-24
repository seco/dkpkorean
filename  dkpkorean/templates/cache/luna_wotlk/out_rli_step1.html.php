<?php
if ($this->security()) {
echo '<form method="post" action="' . ((isset($this->_tpldata['.'][0]['F_PARSE_LOG'])) ? $this->_tpldata['.'][0]['F_PARSE_LOG'] : '') . '" name="post">
    <table width="100%" border="0" cellspacing="1" cellpadding="2">
      <tr>
        <th align="center" width="100%">' . ((isset($this->_tpldata['.'][0]['L_INSERT'])) ? $this->_tpldata['.'][0]['L_INSERT'] : ((isset($user->lang['INSERT'])) ? $user->lang['INSERT'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'INSERT'))) . ' 	}')) . '</th>
      </tr>
      <tr>
        <td width="100%" align="center" class="row2">&nbsp;<br /><textarea name="log" rows="20" cols="60" id="log" style="width: 100%" class="post"></textarea><br />&nbsp;</td>
      </tr>
      <tr>
      	<td width="100%" class="row1">' . ((isset($this->_tpldata['.'][0]['WHICH_LANG'])) ? $this->_tpldata['.'][0]['WHICH_LANG'] : '') . '' . ((isset($this->_tpldata['.'][0]['LANG_SELECT'])) ? $this->_tpldata['.'][0]['LANG_SELECT'] : '') . '
      	</td>
      </tr>
      <tr>
        <th align="center"><input type="submit" name="checkraid" value="' . ((isset($this->_tpldata['.'][0]['L_SEND'])) ? $this->_tpldata['.'][0]['L_SEND'] : ((isset($user->lang['SEND'])) ? $user->lang['SEND'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'SEND'))) . ' 	}')) . '" class="mainoption" /></th>
      </tr>
    </table>
</form>';
}
?>