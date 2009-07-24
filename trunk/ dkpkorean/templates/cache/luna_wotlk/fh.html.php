<?php
if ($this->security()) {
echo '<!-- JQUERY -->';echo '
' . ((isset($this->_tpldata['.'][0]['JQUERY_INCLUDES'])) ? $this->_tpldata['.'][0]['JQUERY_INCLUDES'] : '') . '

';echo '<!--  Overlib OnNeed Loader -->';echo '
<script>
	if(typeof(window.overlib) == "undefined") {
   document.write("<scr" + "ipt language=\'JavaScript\' type=\'text\\/javascript\' src=\'includes\\/wpfc\\/overlib\\/overlib.js\'><\\/scr" + "ipt>");
	}
</script>

<style>

p {
  text-align: left;
  padding: 0px;
	margin-top: 0em;
}

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

/* Tooltip */
.rb_iteminfo td, .rb_charinfo td{
	color: black;
	font-family: Verdana, Tahoma, Arial;
	font-size: 11px;
}

.rb_iteminfo th, .rb_charinfo th{
	color: #14293B;
	width:100%;
	font-family: Verdana, Tahoma, Arial;
	font-size: 12px;
	background: none;
	text-align: center;
	font-weight: bold;
	border-bottom: 1px dashed #000000;
}

.rb_iteminfo {
  width: 200px;
  min-height:100px;
	background:#fff url(images/tooltip/bg_info.jpg) bottom right no-repeat;
  border:1px solid #4f6d81;
}

.rb_charinfo {
  width: 200px;
  min-height:100px;
	background:#fff url(images/tooltip/bg_personal.jpg) bottom right no-repeat;
  border:1px solid #115aaf;
}

</style>';
}
?>