<?php
if ($this->security()) {
// INCLUDE ../../../../templates/m9wotlk/page_header.html
$this->assign_from_include('../../../../templates/m9wotlk/page_header.html');
// INCLUDE ../cm_fh.html
$this->assign_from_include('../cm_fh.html');
// INCLUDE ../cm_lp.html
$this->assign_from_include('../cm_lp.html');
// INCLUDE ../../../../templates/m9wotlk/page_tail.html
$this->assign_from_include('../../../../templates/m9wotlk/page_tail.html');

}
?>