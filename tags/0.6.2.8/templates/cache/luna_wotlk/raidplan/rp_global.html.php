<?php
if ($this->security()) {
echo '<style type="text/css">
/******************************
 * Styles for EQdkp RaidPlan
 * global Footer Style 
 * (c) 2007 by Wallenium 
 * ---------------------------
 * $Id: global.css 606 2007-08-06 10:36:21Z wallenium $
 ******************************/

.copyis { 
font-size: 10px; 
color: #CECFEF; 
}

.copyis a:link, .copyis a:active, .copyis a:visited { 
font-size: 10px; 
color: #CECFEF;
text-decoration: none;
font-weight: bold
}

.copyis a:hover { 
font-size: 10px; 
color: #E6E6F5;
text-decoration: underline;
}

/* About iframe thing*/
#AboutUs_content {
	border:0px;
}
</style>';
}
?>