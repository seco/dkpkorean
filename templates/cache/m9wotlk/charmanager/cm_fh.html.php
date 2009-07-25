<?php
if ($this->security()) {
// IF TAB_HEADER
if ($this->_tpldata['.'][0]['TAB_HEADER']) { 
echo '
  ' . ((isset($this->_tpldata['.'][0]['TAB_HEADER'])) ? $this->_tpldata['.'][0]['TAB_HEADER'] : '') . '
  <link href=\'templates/' . ((isset($this->_tpldata['.'][0]['TEMPLATENAME'])) ? $this->_tpldata['.'][0]['TEMPLATENAME'] : '') . '/css/tab.css\' rel=\'stylesheet\' type=\'text/css\' ></link>
';// ENDIF
}
echo '<!-- JQUERY -->';echo '
' . ((isset($this->_tpldata['.'][0]['JQUERY_INCLUDES'])) ? $this->_tpldata['.'][0]['JQUERY_INCLUDES'] : '') . '

';echo '<!--  Mini Hover -->';echo '
<script language="JavaScript" type="text/javascript" src="include/javascripts/minihover.js"></script>
<script>
	if(typeof(window.showmenu) == "undefined") {
   document.write("<scr" + "ipt language=\'JavaScript\' type=\'text\\/javascript\' src=\'include\\/javascripts\\/menu.js\'><\\/scr" + "ipt>");
	}
</script>

<style>
/* Copyright thing */
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

.minitooltip {
	position: absolute;
	text-decoration: none;
	font-family: arial, sans-serif;
	font-size: 12px;
	font-weight:normal;
	color: black;
	display: none;
	background-color: #FFFFFF;
	border-width: 1px;
	border-style: solid;
	border-color: #000000;
	padding: 2px;
}

/* PopUp Style */
#popitmenu{
  position: absolute;
  background-color: white;
  border:1px solid black;
  font: normal 12px Verdana;
  line-height: 18px;
  z-index: 100;
  visibility: hidden;
}

#popitmenu a{
  text-decoration: none;
  padding-left: 6px;
  color: black;
  display: block;
}

#popitmenu a:hover{ /*hover background color*/
  background-color: #CCFF9D;
}

.resists { 
  width: 27px;
  text-align: center;
  color: white;
  font-weight: bold;
  font-size: 12px !important;
}

.uc_profmenu {
  text-align: right;
}
</style>';
}
?>