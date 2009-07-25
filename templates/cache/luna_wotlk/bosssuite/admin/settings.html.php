<?php
if ($this->security()) {
// INCLUDE ../../../../templates/luna_wotlk/page_header.html
$this->assign_from_include('../../../../templates/luna_wotlk/page_header.html');
// INCLUDE ../bs_accordion.html
$this->assign_from_include('../bs_accordion.html');
// INCLUDE ../bs_adm_settings.html
$this->assign_from_include('../bs_adm_settings.html');
// INCLUDE ../bs_about.html
$this->assign_from_include('../bs_about.html');
// INCLUDE ../../../../templates/luna_wotlk/page_tail.html
$this->assign_from_include('../../../../templates/luna_wotlk/page_tail.html');

}
?>