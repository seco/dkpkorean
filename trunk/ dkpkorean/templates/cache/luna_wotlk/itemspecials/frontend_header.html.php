<?php
if ($this->security()) {
echo '<!-- JQUERY -->';echo '
' . ((isset($this->_tpldata['.'][0]['JQUERY_INCLUDES'])) ? $this->_tpldata['.'][0]['JQUERY_INCLUDES'] : '') . '

<style type="text/css">
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

/* the new dynamic class names */
#header_clsname{
	font-family: Georgia, "Times New Roman", Times, serif;
	text-transform: uppercase;
	font-size: 38px;
	color: #FFFFFF;
  letter-spacing: .6ex;
}

/* About iframe thing*/
#AboutUs_content {
	border:0px;
}

/* This is the Statusbar Part */
	div.kProgressBar {
	text-align:left;
		position : relative;
		top : -1px;
		left : -1px;
		margin-right : 1px;
		border : solid 1px #696969;
		padding : 1px;
		background : #ffffff;
		border : solid 1px #ccc;
		height : 14px;
		width : 100px;
		position : relative;
		-moz-border-radius : 4px;
	}
	
	div.kProgressBar div.kpercent {
		position : absolute;
		width : 100%;
		font-size : 10px;
		font-family : Arial, sans-serif;
		font-weight : bold;
		text-align : center;
	}
	
	div.kProgressBar div.kprogress {
		position : absolute;
		font-size : 1px;
		height : 13px;
		background-color: #ACE97C;
	}
	
	div.kProgressBar div.kpercent {
		position : absolute;
		top : 0;
		left : 0;
		width : 100%;
		display : block;
		margin : auto 0;
		background : 0;
		vertical-align : middle;
		font: 12px Arial,sans-serif;
		color: black;
  	text-align: center
	}
	
	div.kProgressBar div.kprogress {
		position : relative;
		top : 0;
		left : 0;
		display : block;
		height : 100%;
		background-color: #ACE97C;
		-moz-border-radius : 3px;
	}
</style>';
}
?>