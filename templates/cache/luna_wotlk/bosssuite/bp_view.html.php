<?php
if ($this->security()) {
echo '<!-- Thats the data table ;) we don\'t change anything here :P -->';echo '
<table align="center" border="0">
<tr>
<th colspan="4">BossProgress
</th>
</tr>
' . ((isset($this->_tpldata['.'][0]['BOSSKILLVV'])) ? $this->_tpldata['.'][0]['BOSSKILLVV'] : '') . '
</table>
';echo '<!-- That\'s the End of the Data Table ;) -->';
}
?>