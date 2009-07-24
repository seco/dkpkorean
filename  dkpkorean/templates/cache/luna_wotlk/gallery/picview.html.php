<?php
if ($this->security()) {
// INCLUDE ../../../../templates/luna_wotlk/page_header.html
$this->assign_from_include('../../../../templates/luna_wotlk/page_header.html');
// INCLUDE ../gl_pv.html
$this->assign_from_include('../gl_pv.html');
// INCLUDE ../../../../templates/luna_wotlk/page_tail.html
$this->assign_from_include('../../../../templates/luna_wotlk/page_tail.html');

}
?>