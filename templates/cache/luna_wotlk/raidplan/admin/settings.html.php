<?php
if ($this->security()) {
// INCLUDE ../../../../templates/luna_wotlk/page_header.html
$this->assign_from_include('../../../../templates/luna_wotlk/page_header.html');
// INCLUDE ../inclcss.html
$this->assign_from_include('../inclcss.html');
// INCLUDE ../backend_header.html
$this->assign_from_include('../backend_header.html');
// INCLUDE ../ad_se.html
$this->assign_from_include('../ad_se.html');
// INCLUDE ../../../../templates/luna_wotlk/page_tail.html
$this->assign_from_include('../../../../templates/luna_wotlk/page_tail.html');

}
?>