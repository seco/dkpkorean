<?php
if ($this->security()) {
// INCLUDE ../../../../templates/luna_wotlk/page_header.html
$this->assign_from_include('../../../../templates/luna_wotlk/page_header.html');
// INCLUDE ../dl_ad_downloads.html
$this->assign_from_include('../dl_ad_downloads.html');
// INCLUDE ../../../../templates/luna_wotlk/page_tail.html
$this->assign_from_include('../../../../templates/luna_wotlk/page_tail.html');

}
?>