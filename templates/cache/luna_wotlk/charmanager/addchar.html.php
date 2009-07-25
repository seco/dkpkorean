<?php
if ($this->security()) {
// INCLUDE ../../../../templates/luna_wotlk/page_header.html
$this->assign_from_include('../../../../templates/luna_wotlk/page_header.html');
// INCLUDE ../cm_fh.html
$this->assign_from_include('../cm_fh.html');
// INCLUDE ../cm_ac.html
$this->assign_from_include('../cm_ac.html');

}
?>