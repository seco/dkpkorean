<?php
if ($this->security()) {
echo '<!-- Thats the data table ;) we don\'t change anything here :P -->';echo '
<table width="100%" align="center" border="0" cellspacing="1" cellpadding="2">
   <tr><th>' . ((isset($this->_tpldata['.'][0]['INFO_PAGE_TITLE'])) ? $this->_tpldata['.'][0]['INFO_PAGE_TITLE'] : '') . '</th></tr>
   <tr><td class="row1">' . ((isset($this->_tpldata['.'][0]['INFO_PAGE_CONTENT'])) ? $this->_tpldata['.'][0]['INFO_PAGE_CONTENT'] : '') . '</td></tr>
   <tr><th class="footer">' . ((isset($this->_tpldata['.'][0]['EDITED'])) ? $this->_tpldata['.'][0]['EDITED'] : '') . '</th></tr>
</table>
<br /><center><span class="copy">' . ((isset($this->_tpldata['.'][0]['CREDITS'])) ? $this->_tpldata['.'][0]['CREDITS'] : '') . '</span></center>
';echo '<!-- That\'s the End of the Data Table ;) -->';
}
?>