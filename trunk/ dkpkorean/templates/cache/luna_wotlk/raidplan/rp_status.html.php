<?php
if ($this->security()) {
echo '<style type="text/css">
/******************************
 * Styles for EQdkp RaidPlan
 * PopUp Style 
 * (c) 2007 by Wallenium 
 * ---------------------------
 * $Id: status.css 606 2007-08-06 10:36:21Z wallenium $
 ******************************/
 
.status0 {
	color	: ' . ((isset($this->_tpldata['.'][0]['COLOR_STATUS_0'])) ? $this->_tpldata['.'][0]['COLOR_STATUS_0'] : '') . ';
	align	: right;
}
.status1 {
	color	: ' . ((isset($this->_tpldata['.'][0]['COLOR_STATUS_1'])) ? $this->_tpldata['.'][0]['COLOR_STATUS_1'] : '') . ';
	align	: right;
}
.status2 {
	color	: ' . ((isset($this->_tpldata['.'][0]['COLOR_STATUS_2'])) ? $this->_tpldata['.'][0]['COLOR_STATUS_2'] : '') . ';
	align	: right;
}
.status3 {
	color	: ' . ((isset($this->_tpldata['.'][0]['COLOR_STATUS_3'])) ? $this->_tpldata['.'][0]['COLOR_STATUS_3'] : '') . ';
	align	: right;
}
.status4 {
	align	: right;
}
.status10 {
	color	: blue;
	align	: right;
}

.status_total {
  font-weight: bold;
  color: black;
}
</style>';
}
?>