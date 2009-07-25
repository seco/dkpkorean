<?php
if ($this->security()) {
// INCLUDE page_header.html
$this->assign_from_include('page_header.html');
echo '

' . ((isset($this->_tpldata['.'][0]['BOARD_OUPUT'])) ? $this->_tpldata['.'][0]['BOARD_OUPUT'] : '') . '

';// INCLUDE page_tail.html
$this->assign_from_include('page_tail.html');

}
?>