<?php
if ($this->security()) {
// INCLUDE ../../../../templates/luna_wotlk/page_header.html
$this->assign_from_include('../../../../templates/luna_wotlk/page_header.html');
// INCLUDE ../cm_fh.html
$this->assign_from_include('../cm_fh.html');
echo '
<link href=\'templates/luna_wotlk/css/profiles.css\' rel=\'stylesheet\' type=\'text/css\' ></link>
';// INCLUDE ../cm_pr.html
$this->assign_from_include('../cm_pr.html');
// INCLUDE ../../../../templates/luna_wotlk/page_tail.html
$this->assign_from_include('../../../../templates/luna_wotlk/page_tail.html');

}
?>