<?php
if ($this->security()) {
// INCLUDE ../../../../templates/luna_wotlk/page_header.html
$this->assign_from_include('../../../../templates/luna_wotlk/page_header.html');
// INCLUDE ./../out_rli_step2ns.html
$this->assign_from_include('./../out_rli_step2ns.html');
// INCLUDE ../../../../templates/luna_wotlk/page_tail.html
$this->assign_from_include('../../../../templates/luna_wotlk/page_tail.html');

}
?>