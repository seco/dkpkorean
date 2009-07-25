<?php
if ($this->security()) {
echo '<form method="post" action="' . ((isset($this->_tpldata['.'][0]['F_PARSE_LOG'])) ? $this->_tpldata['.'][0]['F_PARSE_LOG'] : '') . '" name="alias">
    <table width="100%" border="0" cellspacing="1" cellpadding="2">
      <tr>
      	<th>Alias Verwaltung</th>
      </tr>
      <tr>
      	<td class="row1" align="center"><a href="' . ((isset($this->_tpldata['.'][0]['U_ADD_ALIAS'])) ? $this->_tpldata['.'][0]['U_ADD_ALIAS'] : '') . '">' . ((isset($this->_tpldata['.'][0]['U_ADD_ALIAS_L'])) ? $this->_tpldata['.'][0]['U_ADD_ALIAS_L'] : '') . '</a></td>
      </tr>
      <tr>
      	<td class="row2" align="center"><a href="' . ((isset($this->_tpldata['.'][0]['U_LIST_ALIAS'])) ? $this->_tpldata['.'][0]['U_LIST_ALIAS'] : '') . '">' . ((isset($this->_tpldata['.'][0]['U_LIST_ALIAS_L'])) ? $this->_tpldata['.'][0]['U_LIST_ALIAS_L'] : '') . '</a></td>
      </tr>
      <tr>
      	<th></th>
      </tr>
    </table>
</form>';
}
?>