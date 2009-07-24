<?php
if ($this->security()) {
// INCLUDE ../../../../templates/luna_wotlk/page_header.html
$this->assign_from_include('../../../../templates/luna_wotlk/page_header.html');
// INCLUDE ../bp_header.html
$this->assign_from_include('../bp_header.html');
// INCLUDE ../bp_view.html
$this->assign_from_include('../bp_view.html');
// INCLUDE ../bs_about.html
$this->assign_from_include('../bs_about.html');
// INCLUDE ../../../../templates/luna_wotlk/page_tail.html
$this->assign_from_include('../../../../templates/luna_wotlk/page_tail.html');

}
?>