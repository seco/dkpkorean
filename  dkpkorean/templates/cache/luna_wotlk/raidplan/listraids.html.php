<?php
if ($this->security()) {
// INCLUDE ../../../../templates/luna_wotlk/page_header.html
$this->assign_from_include('../../../../templates/luna_wotlk/page_header.html');
// INCLUDE ../frontend_header.html
$this->assign_from_include('../frontend_header.html');
// INCLUDE ../inclcss.html
$this->assign_from_include('../inclcss.html');
// INCLUDE ../css/rp_calendar.html
$this->assign_from_include('../css/rp_calendar.html');
echo '
<style>
a.RP-view {
color:#EEEEEE ;
}
td.calBox {
	background:#14293b url(' . ((isset($this->_tpldata['.'][0]['EQDKP_ROOT_PATH'])) ? $this->_tpldata['.'][0]['EQDKP_ROOT_PATH'] : '') . 'templates/luna_wotlk/images/table.jpg) repeat-x top;}
td.calBoxToday {
	background:#14293b url(' . ((isset($this->_tpldata['.'][0]['EQDKP_ROOT_PATH'])) ? $this->_tpldata['.'][0]['EQDKP_ROOT_PATH'] : '') . 'templates/luna_wotlk/images/table2.jpg) repeat-x top;
}
.textLight, .textLight:link, .textLight:visited { 
	color: #AAAAAA !important; 
}
.textHighlight, .textHighlight:link, .textHighlight:visited { 
	color: #EEEEEE !important; 
}
</style>
';// INCLUDE ../lr.html
$this->assign_from_include('../lr.html');
// INCLUDE ../../../../templates/luna_wotlk/page_tail.html
$this->assign_from_include('../../../../templates/luna_wotlk/page_tail.html');

}
?>