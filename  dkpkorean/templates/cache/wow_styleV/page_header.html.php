<?php
if ($this->security()) {
echo '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=' . ((isset($this->_tpldata['.'][0]['ENCODING'])) ? $this->_tpldata['.'][0]['ENCODING'] : '') . '" />
' . ((isset($this->_tpldata['.'][0]['META'])) ? $this->_tpldata['.'][0]['META'] : '') . '
<title>' . ((isset($this->_tpldata['.'][0]['PAGE_TITLE'])) ? $this->_tpldata['.'][0]['PAGE_TITLE'] : '') . '</title>
 <script type="text/javascript" src="' . ((isset($this->_tpldata['.'][0]['EQDKP_ROOT_PATH'])) ? $this->_tpldata['.'][0]['EQDKP_ROOT_PATH'] : '') . '/pluskernel/include/javascripts/overlib.js"></script>
';// IF ITEMSTATS_CSS_PATH
if ($this->_tpldata['.'][0]['ITEMSTATS_CSS_PATH']) { 
echo '
<link REL=StyleSheet HREF="' . ((isset($this->_tpldata['.'][0]['EQDKP_ROOT_PATH'])) ? $this->_tpldata['.'][0]['EQDKP_ROOT_PATH'] : '') . '' . ((isset($this->_tpldata['.'][0]['ITEMSTATS_PATH'])) ? $this->_tpldata['.'][0]['ITEMSTATS_PATH'] : '') . '' . ((isset($this->_tpldata['.'][0]['ITEMSTATS_CSS_PATH'])) ? $this->_tpldata['.'][0]['ITEMSTATS_CSS_PATH'] : '') . '" TYPE="text/css" MEDIA=screen />
';// ENDIF
}
echo '
' . ((isset($this->_tpldata['.'][0]['PLUS_HEADER'])) ? $this->_tpldata['.'][0]['PLUS_HEADER'] : '') . '
' . ((isset($this->_tpldata['.'][0]['PLUS_JS_WIN'])) ? $this->_tpldata['.'][0]['PLUS_JS_WIN'] : '') . '
' . ((isset($this->_tpldata['.'][0]['EXTRA_CSS'])) ? $this->_tpldata['.'][0]['EXTRA_CSS'] : '') . '
' . ((isset($this->_tpldata['.'][0]['PORTAL_JAVASCRIPT'])) ? $this->_tpldata['.'][0]['PORTAL_JAVASCRIPT'] : '') . '

';// IF S_IMG_RESIZE_ENABLE
if ($this->_tpldata['.'][0]['S_IMG_RESIZE_ENABLE']) { 
echo '
<link rel="stylesheet" href="' . ((isset($this->_tpldata['.'][0]['EQDKP_ROOT_PATH'])) ? $this->_tpldata['.'][0]['EQDKP_ROOT_PATH'] : '') . 'pluskernel/include/css/lytebox.css" type="text/css" />
 <script type="text/javascript" src="' . ((isset($this->_tpldata['.'][0]['EQDKP_ROOT_PATH'])) ? $this->_tpldata['.'][0]['EQDKP_ROOT_PATH'] : '') . 'pluskernel/include/javascripts/lytebox.js"></script>
 <script type="text/javascript" >
 	if (window.addEventListener) {
 		window.addEventListener("load",initLytebox,false);
 	} else if (window.attachEvent) {
 		window.attachEvent("onload",initLytebox);
 	} else {
 		window.onload = function() {initLytebox();}
 	}
 	function initLytebox() 
 	{
 		myLytebox = new LyteBox(' . ((isset($this->_tpldata['.'][0]['S_MAX_POST_IMG_RESIZE_WIDTH'])) ? $this->_tpldata['.'][0]['S_MAX_POST_IMG_RESIZE_WIDTH'] : '') . ', \'' . ((isset($this->_tpldata['.'][0]['S_IMG_RESIZE_WARNING'])) ? $this->_tpldata['.'][0]['S_IMG_RESIZE_WARNING'] : '') . '\', \'' . ((isset($this->_tpldata['.'][0]['S_LYTEBOX_THEME'])) ? $this->_tpldata['.'][0]['S_LYTEBOX_THEME'] : '') . '\', ' . ((isset($this->_tpldata['.'][0]['S_LYTEBOX_AUTO_RESIZE'])) ? $this->_tpldata['.'][0]['S_LYTEBOX_AUTO_RESIZE'] : '') . ', ' . ((isset($this->_tpldata['.'][0]['S_LYTEBOX_ANIMATION'])) ? $this->_tpldata['.'][0]['S_LYTEBOX_ANIMATION'] : '') . ',\'' . ((isset($this->_tpldata['.'][0]['S_IMG_WARNING_ACTIVE'])) ? $this->_tpldata['.'][0]['S_IMG_WARNING_ACTIVE'] : '') . '\') ;
 	}
 </script>
';// ENDIF
}
echo '

<style type="text/css">
';// BEGIN classcolor_row
$_classcolor_row_count = (isset($this->_tpldata['classcolor_row.'])) ?  sizeof($this->_tpldata['classcolor_row.']) : 0;
if ($_classcolor_row_count) {
for ($_classcolor_row_i = 0; $_classcolor_row_i < $_classcolor_row_count; $_classcolor_row_i++)
{
echo '
.' . ((isset($this->_tpldata['classcolor_row.'][$_classcolor_row_i]['NAME'])) ? $this->_tpldata['classcolor_row.'][$_classcolor_row_i]['NAME'] : '') . ', .' . ((isset($this->_tpldata['classcolor_row.'][$_classcolor_row_i]['NAME'])) ? $this->_tpldata['classcolor_row.'][$_classcolor_row_i]['NAME'] : '') . ':link, .' . ((isset($this->_tpldata['classcolor_row.'][$_classcolor_row_i]['NAME'])) ? $this->_tpldata['classcolor_row.'][$_classcolor_row_i]['NAME'] : '') . ':visited, .' . ((isset($this->_tpldata['classcolor_row.'][$_classcolor_row_i]['NAME'])) ? $this->_tpldata['classcolor_row.'][$_classcolor_row_i]['NAME'] : '') . ':active,
.' . ((isset($this->_tpldata['classcolor_row.'][$_classcolor_row_i]['NAME'])) ? $this->_tpldata['classcolor_row.'][$_classcolor_row_i]['NAME'] : '') . ':link:hover, td.' . ((isset($this->_tpldata['classcolor_row.'][$_classcolor_row_i]['NAME'])) ? $this->_tpldata['classcolor_row.'][$_classcolor_row_i]['NAME'] : '') . ' a:hover, td.' . ((isset($this->_tpldata['classcolor_row.'][$_classcolor_row_i]['NAME'])) ? $this->_tpldata['classcolor_row.'][$_classcolor_row_i]['NAME'] : '') . ' a:active,
td.' . ((isset($this->_tpldata['classcolor_row.'][$_classcolor_row_i]['NAME'])) ? $this->_tpldata['classcolor_row.'][$_classcolor_row_i]['NAME'] : '') . ', td.' . ((isset($this->_tpldata['classcolor_row.'][$_classcolor_row_i]['NAME'])) ? $this->_tpldata['classcolor_row.'][$_classcolor_row_i]['NAME'] : '') . ' a:link, td.' . ((isset($this->_tpldata['classcolor_row.'][$_classcolor_row_i]['NAME'])) ? $this->_tpldata['classcolor_row.'][$_classcolor_row_i]['NAME'] : '') . ' a:visited, 
.classes' . ((isset($this->_tpldata['classcolor_row.'][$_classcolor_row_i]['ID'])) ? $this->_tpldata['classcolor_row.'][$_classcolor_row_i]['ID'] : '') . ', .classes' . ((isset($this->_tpldata['classcolor_row.'][$_classcolor_row_i]['ID'])) ? $this->_tpldata['classcolor_row.'][$_classcolor_row_i]['ID'] : '') . ':link, .classes' . ((isset($this->_tpldata['classcolor_row.'][$_classcolor_row_i]['ID'])) ? $this->_tpldata['classcolor_row.'][$_classcolor_row_i]['ID'] : '') . ':visited, .classes' . ((isset($this->_tpldata['classcolor_row.'][$_classcolor_row_i]['ID'])) ? $this->_tpldata['classcolor_row.'][$_classcolor_row_i]['ID'] : '') . ':active,
.classes' . ((isset($this->_tpldata['classcolor_row.'][$_classcolor_row_i]['ID'])) ? $this->_tpldata['classcolor_row.'][$_classcolor_row_i]['ID'] : '') . ':link:hover, td.classes' . ((isset($this->_tpldata['classcolor_row.'][$_classcolor_row_i]['ID'])) ? $this->_tpldata['classcolor_row.'][$_classcolor_row_i]['ID'] : '') . ' a:hover, td.classes' . ((isset($this->_tpldata['classcolor_row.'][$_classcolor_row_i]['ID'])) ? $this->_tpldata['classcolor_row.'][$_classcolor_row_i]['ID'] : '') . ' a:active,
td.classes' . ((isset($this->_tpldata['classcolor_row.'][$_classcolor_row_i]['ID'])) ? $this->_tpldata['classcolor_row.'][$_classcolor_row_i]['ID'] : '') . ', td.classes' . ((isset($this->_tpldata['classcolor_row.'][$_classcolor_row_i]['ID'])) ? $this->_tpldata['classcolor_row.'][$_classcolor_row_i]['ID'] : '') . ' a:link, td.classes' . ((isset($this->_tpldata['classcolor_row.'][$_classcolor_row_i]['ID'])) ? $this->_tpldata['classcolor_row.'][$_classcolor_row_i]['ID'] : '') . ' a:visited 
{
  text-decoration: none; 
  color: ' . ((isset($this->_tpldata['classcolor_row.'][$_classcolor_row_i]['COLOR'])) ? $this->_tpldata['classcolor_row.'][$_classcolor_row_i]['COLOR'] : '') . ';
}
';}}
// END classcolor_row
echo '

/* PLUScomments CSS */
.floatLeft { 
  float:left;
}
.floatRight { 
  float:right;
}
.clear {
  clear:both;
}

.bold	{
  font-weight:bold;
}
.italic	{
  font-style:italic;
}

.small {
  font-size:0.93em;
}

.hand {
  cursor: pointer;
  text-decoration: none;
}

.clearfix:after {
  content:".";
  display:block;
  height:0;
  clear:both;
  visibility:hidden;
}
.clearfix {
  display:inline-block;
}
/* Hide from IE Mac \\*/
.clearfix {
  display:block;
}
/* End hide from IE Mac */ 

div.contentBox {
  background-color:#' . ((isset($this->_tpldata['.'][0]['T_TR_COLOR1'])) ? $this->_tpldata['.'][0]['T_TR_COLOR1'] : '') . ';
  border:1px solid #' . ((isset($this->_tpldata['.'][0]['T_TABLE_BORDER_COLOR'])) ? $this->_tpldata['.'][0]['T_TABLE_BORDER_COLOR'] : '') . ';
  color: #' . ((isset($this->_tpldata['.'][0]['T_FONTCOLOR1'])) ? $this->_tpldata['.'][0]['T_FONTCOLOR1'] : '') . ';
  padding: 8px 8px 8px 8px;
  margin-bottom: 10px;
}
.contentBox .boxHeader {
  padding-bottom: 3px;
  border-bottom:1px solid #' . ((isset($this->_tpldata['.'][0]['T_TABLE_BORDER_COLOR'])) ? $this->_tpldata['.'][0]['T_TABLE_BORDER_COLOR'] : '') . ';
}
.contentBox .boxHeader h1	{
  font-size: 12px;
  color: #' . ((isset($this->_tpldata['.'][0]['T_TABLE_BORDER_COLOR'])) ? $this->_tpldata['.'][0]['T_TABLE_BORDER_COLOR'] : '') . ';
}
.contentBox .boxContent	{
  padding-top: 6px;
}
.contentBox .boxContent h2 a {
  font-weight:bold;
  font-size: 12px;
}

.boxContent .comment_text {
  font-size: 12px;
}

.rowcolor1 {
  padding: 10px;
  background-color:#' . ((isset($this->_tpldata['.'][0]['T_TR_COLOR1'])) ? $this->_tpldata['.'][0]['T_TR_COLOR1'] : '') . ';
}
.rowcolor2 {
  padding: 10px;
  background-color: #' . ((isset($this->_tpldata['.'][0]['T_TR_COLOR2'])) ? $this->_tpldata['.'][0]['T_TR_COLOR2'] : '') . ';
}

.boxContent .comment_link, .boxContent  .comment_link a, .boxContent  .comment_link a:visited {
  color: ' . ((isset($this->_tpldata['.'][0]['T_BODY_LINK'])) ? $this->_tpldata['.'][0]['T_BODY_LINK'] : '') . ';
  text-decoration: none;
}

.boxContent .comment_link a:hover {
  text-decoration: underline;
  color: #' . ((isset($this->_tpldata['.'][0]['T_BODY_HLINK'])) ? $this->_tpldata['.'][0]['T_BODY_HLINK'] : '') . ';
}

/* Default EQDKP CSS */
form { display: inline; }
img { vertical-align: middle; border: 0px; }

BODY { font-family: ' . ((isset($this->_tpldata['.'][0]['T_FONTFACE1'])) ? $this->_tpldata['.'][0]['T_FONTFACE1'] : '') . '; font-size: ' . ((isset($this->_tpldata['.'][0]['T_FONTSIZE2'])) ? $this->_tpldata['.'][0]['T_FONTSIZE2'] : '') . 'px; color: #' . ((isset($this->_tpldata['.'][0]['T_FONTCOLOR1'])) ? $this->_tpldata['.'][0]['T_FONTCOLOR1'] : '') . '; margin-left: 1%; margin-right: 1%; margin-top: 1%; background-color: #' . ((isset($this->_tpldata['.'][0]['T_BODY_BACKGROUND'])) ? $this->_tpldata['.'][0]['T_BODY_BACKGROUND'] : '') . '; }
TABLE { border-top: ' . ((isset($this->_tpldata['.'][0]['T_TABLE_BORDER_WIDTH'])) ? $this->_tpldata['.'][0]['T_TABLE_BORDER_WIDTH'] : '') . 'px; border-right: ' . ((isset($this->_tpldata['.'][0]['T_TABLE_BORDER_WIDTH'])) ? $this->_tpldata['.'][0]['T_TABLE_BORDER_WIDTH'] : '') . 'px; border-bottom: ' . ((isset($this->_tpldata['.'][0]['T_TABLE_BORDER_WIDTH'])) ? $this->_tpldata['.'][0]['T_TABLE_BORDER_WIDTH'] : '') . 'px; border-left: ' . ((isset($this->_tpldata['.'][0]['T_TABLE_BORDER_WIDTH'])) ? $this->_tpldata['.'][0]['T_TABLE_BORDER_WIDTH'] : '') . 'px; border-color: #' . ((isset($this->_tpldata['.'][0]['T_TABLE_BORDER_COLOR'])) ? $this->_tpldata['.'][0]['T_TABLE_BORDER_COLOR'] : '') . '; border-style: ' . ((isset($this->_tpldata['.'][0]['T_TABLE_BORDER_STYLE'])) ? $this->_tpldata['.'][0]['T_TABLE_BORDER_STYLE'] : '') . '; }
TABLE.borderless { border-style: none; }

th { font-weight: bold; color: #' . ((isset($this->_tpldata['.'][0]['T_HEADER_LINK'])) ? $this->_tpldata['.'][0]['T_HEADER_LINK'] : '') . '; background-color: #' . ((isset($this->_tpldata['.'][0]['T_TH_COLOR1'])) ? $this->_tpldata['.'][0]['T_TH_COLOR1'] : '') . '; white-space: nowrap; }
tr, td { font-family: ' . ((isset($this->_tpldata['.'][0]['T_FONTFACE1'])) ? $this->_tpldata['.'][0]['T_FONTFACE1'] : '') . '; font-size: ' . ((isset($this->_tpldata['.'][0]['T_FONTSIZE2'])) ? $this->_tpldata['.'][0]['T_FONTSIZE2'] : '') . 'px; color: #' . ((isset($this->_tpldata['.'][0]['T_FONTCOLOR1'])) ? $this->_tpldata['.'][0]['T_FONTCOLOR1'] : '') . '; }

a:link, a:visited, a:active { text-decoration: ' . ((isset($this->_tpldata['.'][0]['T_BODY_LINK_STYLE'])) ? $this->_tpldata['.'][0]['T_BODY_LINK_STYLE'] : '') . '; color: #' . ((isset($this->_tpldata['.'][0]['T_BODY_LINK'])) ? $this->_tpldata['.'][0]['T_BODY_LINK'] : '') . '; }
a:hover { text-decoration: ' . ((isset($this->_tpldata['.'][0]['T_BODY_HLINK_STYLE'])) ? $this->_tpldata['.'][0]['T_BODY_HLINK_STYLE'] : '') . '; color: #' . ((isset($this->_tpldata['.'][0]['T_BODY_HLINK'])) ? $this->_tpldata['.'][0]['T_BODY_HLINK'] : '') . '; }

th a:link, th a:visited, th a:active { text-decoration: ' . ((isset($this->_tpldata['.'][0]['T_HEADER_LINK_STYLE'])) ? $this->_tpldata['.'][0]['T_HEADER_LINK_STYLE'] : '') . '; color: #' . ((isset($this->_tpldata['.'][0]['T_HEADER_LINK'])) ? $this->_tpldata['.'][0]['T_HEADER_LINK'] : '') . '; font-weight: bold; }
th a:hover { text-decoration: ' . ((isset($this->_tpldata['.'][0]['T_HEADER_HLINK_STYLE'])) ? $this->_tpldata['.'][0]['T_HEADER_HLINK_STYLE'] : '') . '; color: #' . ((isset($this->_tpldata['.'][0]['T_HEADER_HLINK'])) ? $this->_tpldata['.'][0]['T_HEADER_HLINK'] : '') . '; font-weight: bold; }

th.smalltitle { font-weight: bold; color: #' . ((isset($this->_tpldata['.'][0]['T_HEADER_LINK'])) ? $this->_tpldata['.'][0]['T_HEADER_LINK'] : '') . '; background-color: #' . ((isset($this->_tpldata['.'][0]['T_TH_COLOR1'])) ? $this->_tpldata['.'][0]['T_TH_COLOR1'] : '') . '; white-space: nowrap; font-size: ' . ((isset($this->_tpldata['.'][0]['T_FONTSIZE1'])) ? $this->_tpldata['.'][0]['T_FONTSIZE1'] : '') . 'px; }
th.smalltitle a:link, th.smalltitle a:visited, th.smalltitle a:active { text-decoration: ' . ((isset($this->_tpldata['.'][0]['T_HEADER_LINK_STYLE'])) ? $this->_tpldata['.'][0]['T_HEADER_LINK_STYLE'] : '') . '; color: #' . ((isset($this->_tpldata['.'][0]['T_HEADER_LINK'])) ? $this->_tpldata['.'][0]['T_HEADER_LINK'] : '') . '; font-weight: bold; font-size: ' . ((isset($this->_tpldata['.'][0]['T_FONTSIZE1'])) ? $this->_tpldata['.'][0]['T_FONTSIZE1'] : '') . 'px; }
th.smalltitle a:hover { color: #' . ((isset($this->_tpldata['.'][0]['T_HEADER_HLINK'])) ? $this->_tpldata['.'][0]['T_HEADER_HLINK'] : '') . '; font-weight: bold; font-size: ' . ((isset($this->_tpldata['.'][0]['T_FONTSIZE1'])) ? $this->_tpldata['.'][0]['T_FONTSIZE1'] : '') . 'px; text-decoration: ' . ((isset($this->_tpldata['.'][0]['T_HEADER_HLINK_STYLE'])) ? $this->_tpldata['.'][0]['T_HEADER_HLINK_STYLE'] : '') . '; }

th.footer { color: #' . ((isset($this->_tpldata['.'][0]['T_HEADER_LINK'])) ? $this->_tpldata['.'][0]['T_HEADER_LINK'] : '') . '; text-align: right; background-color: #' . ((isset($this->_tpldata['.'][0]['T_TH_COLOR1'])) ? $this->_tpldata['.'][0]['T_TH_COLOR1'] : '') . '; white-space: nowrap; font-weight: normal; }
th.footer a:link, th.footer a:visited, th.footer a:active { color: #' . ((isset($this->_tpldata['.'][0]['T_HEADER_LINK'])) ? $this->_tpldata['.'][0]['T_HEADER_LINK'] : '') . '; text-decoration: ' . ((isset($this->_tpldata['.'][0]['T_HEADER_LINK_STYLE'])) ? $this->_tpldata['.'][0]['T_HEADER_LINK_STYLE'] : '') . ';  font-weight: normal; }
th.footer a:hover { color: #' . ((isset($this->_tpldata['.'][0]['T_HEADER_HLINK'])) ? $this->_tpldata['.'][0]['T_HEADER_HLINK'] : '') . '; text-decoration: ' . ((isset($this->_tpldata['.'][0]['T_HEADER_HLINK_STYLE'])) ? $this->_tpldata['.'][0]['T_HEADER_HLINK_STYLE'] : '') . '; font-weight: normal; }

.row1 { background-color: #' . ((isset($this->_tpldata['.'][0]['T_TR_COLOR1'])) ? $this->_tpldata['.'][0]['T_TR_COLOR1'] : '') . '; }
.row2 { background-color: #' . ((isset($this->_tpldata['.'][0]['T_TR_COLOR2'])) ? $this->_tpldata['.'][0]['T_TR_COLOR2'] : '') . '; }

.quote1 { background-color: #' . ((isset($this->_tpldata['.'][0]['T_TR_COLOR2'])) ? $this->_tpldata['.'][0]['T_TR_COLOR2'] : '') . '; font-size: ' . ((isset($this->_tpldata['.'][0]['T_FONTSIZE2'])) ? $this->_tpldata['.'][0]['T_FONTSIZE2'] : '') . 'px; line-height: 125%; }
.quote2 { background-color: #' . ((isset($this->_tpldata['.'][0]['T_TR_COLOR1'])) ? $this->_tpldata['.'][0]['T_TR_COLOR1'] : '') . '; font-size: ' . ((isset($this->_tpldata['.'][0]['T_FONTSIZE2'])) ? $this->_tpldata['.'][0]['T_FONTSIZE2'] : '') . 'px; line-height: 125%; }

.positive { color: #' . ((isset($this->_tpldata['.'][0]['T_FONTCOLOR_POS'])) ? $this->_tpldata['.'][0]['T_FONTCOLOR_POS'] : '') . '; }
.negative { color: #' . ((isset($this->_tpldata['.'][0]['T_FONTCOLOR_NEG'])) ? $this->_tpldata['.'][0]['T_FONTCOLOR_NEG'] : '') . '; }
.neutral  { color: #' . ((isset($this->_tpldata['.'][0]['T_FONTCOLOR1'])) ? $this->_tpldata['.'][0]['T_FONTCOLOR1'] : '') . '; }

.maintitle { font-size: 18px; font-weight: bold; color: #' . ((isset($this->_tpldata['.'][0]['T_FONTCOLOR2'])) ? $this->_tpldata['.'][0]['T_FONTCOLOR2'] : '') . '; }
.subtitle  { font-size: 12px; color: #' . ((isset($this->_tpldata['.'][0]['T_FONTCOLOR2'])) ? $this->_tpldata['.'][0]['T_FONTCOLOR2'] : '') . '; }

.menu { font-size: ' . ((isset($this->_tpldata['.'][0]['T_FONTSIZE1'])) ? $this->_tpldata['.'][0]['T_FONTSIZE1'] : '') . 'px; color: #' . ((isset($this->_tpldata['.'][0]['T_FONTCOLOR2'])) ? $this->_tpldata['.'][0]['T_FONTCOLOR2'] : '') . '; }
.menu a:link, .menu a:active, .menu a:visited { text-decoration: none; font-size: ' . ((isset($this->_tpldata['.'][0]['T_FONTSIZE1'])) ? $this->_tpldata['.'][0]['T_FONTSIZE1'] : '') . 'px; color: #' . ((isset($this->_tpldata['.'][0]['T_FONTCOLOR2'])) ? $this->_tpldata['.'][0]['T_FONTCOLOR2'] : '') . '; }
.menu a:hover { text-decoration: underline; font-size: ' . ((isset($this->_tpldata['.'][0]['T_FONTSIZE1'])) ? $this->_tpldata['.'][0]['T_FONTSIZE1'] : '') . 'px; color: #' . ((isset($this->_tpldata['.'][0]['T_HEADER_HLINK'])) ? $this->_tpldata['.'][0]['T_HEADER_HLINK'] : '') . '; }

.small { font-size: ' . ((isset($this->_tpldata['.'][0]['T_FONTSIZE1'])) ? $this->_tpldata['.'][0]['T_FONTSIZE1'] : '') . 'px; }

.copy { font-size: ' . ((isset($this->_tpldata['.'][0]['T_FONTSIZE1'])) ? $this->_tpldata['.'][0]['T_FONTSIZE1'] : '') . 'px; color: #' . ((isset($this->_tpldata['.'][0]['T_FONTCOLOR2'])) ? $this->_tpldata['.'][0]['T_FONTCOLOR2'] : '') . '; }
.copy a:link, .copy a:active, .copy a:visited { font-size: ' . ((isset($this->_tpldata['.'][0]['T_FONTSIZE1'])) ? $this->_tpldata['.'][0]['T_FONTSIZE1'] : '') . 'px; color: #' . ((isset($this->_tpldata['.'][0]['T_FONTCOLOR2'])) ? $this->_tpldata['.'][0]['T_FONTCOLOR2'] : '') . '; }
.copy a:hover { font-size: ' . ((isset($this->_tpldata['.'][0]['T_FONTSIZE1'])) ? $this->_tpldata['.'][0]['T_FONTSIZE1'] : '') . 'px; color: #' . ((isset($this->_tpldata['.'][0]['T_HEADER_HLINK'])) ? $this->_tpldata['.'][0]['T_HEADER_HLINK'] : '') . '; }

.input, textarea { font-family: ' . ((isset($this->_tpldata['.'][0]['T_FONTFACE2'])) ? $this->_tpldata['.'][0]['T_FONTFACE2'] : '') . '; font-size: ' . ((isset($this->_tpldata['.'][0]['T_FONTSIZE1'])) ? $this->_tpldata['.'][0]['T_FONTSIZE1'] : '') . 'px; color: #' . ((isset($this->_tpldata['.'][0]['T_FONTCOLOR3'])) ? $this->_tpldata['.'][0]['T_FONTCOLOR3'] : '') . '; background-color: #' . ((isset($this->_tpldata['.'][0]['T_INPUT_BACKGROUND'])) ? $this->_tpldata['.'][0]['T_INPUT_BACKGROUND'] : '') . ';
         border-top: ' . ((isset($this->_tpldata['.'][0]['T_INPUT_BORDER_WIDTH'])) ? $this->_tpldata['.'][0]['T_INPUT_BORDER_WIDTH'] : '') . 'px; border-right: ' . ((isset($this->_tpldata['.'][0]['T_INPUT_BORDER_WIDTH'])) ? $this->_tpldata['.'][0]['T_INPUT_BORDER_WIDTH'] : '') . 'px; border-bottom: ' . ((isset($this->_tpldata['.'][0]['T_INPUT_BORDER_WIDTH'])) ? $this->_tpldata['.'][0]['T_INPUT_BORDER_WIDTH'] : '') . 'px; border-left: ' . ((isset($this->_tpldata['.'][0]['T_INPUT_BORDER_WIDTH'])) ? $this->_tpldata['.'][0]['T_INPUT_BORDER_WIDTH'] : '') . 'px; border-color: #' . ((isset($this->_tpldata['.'][0]['T_INPUT_BORDER_COLOR'])) ? $this->_tpldata['.'][0]['T_INPUT_BORDER_COLOR'] : '') . '; border-style: ' . ((isset($this->_tpldata['.'][0]['T_INPUT_BORDER_STYLE'])) ? $this->_tpldata['.'][0]['T_INPUT_BORDER_STYLE'] : '') . '; }

input.helpline1 { background-color: #' . ((isset($this->_tpldata['.'][0]['T_TR_COLOR1'])) ? $this->_tpldata['.'][0]['T_TR_COLOR1'] : '') . '; border-style: none; }
input.helpline2 { background-color: #' . ((isset($this->_tpldata['.'][0]['T_TR_COLOR2'])) ? $this->_tpldata['.'][0]['T_TR_COLOR2'] : '') . '; border-style: none; }

input.mainoption { font-family: ' . ((isset($this->_tpldata['.'][0]['T_FONTFACE2'])) ? $this->_tpldata['.'][0]['T_FONTFACE2'] : '') . '; font-size: ' . ((isset($this->_tpldata['.'][0]['T_FONTSIZE1'])) ? $this->_tpldata['.'][0]['T_FONTSIZE1'] : '') . 'px; font-weight: bold; color: #' . ((isset($this->_tpldata['.'][0]['T_HEADER_LINK'])) ? $this->_tpldata['.'][0]['T_HEADER_LINK'] : '') . '; background-color: #' . ((isset($this->_tpldata['.'][0]['T_TH_COLOR1'])) ? $this->_tpldata['.'][0]['T_TH_COLOR1'] : '') . '; border-top: ' . ((isset($this->_tpldata['.'][0]['T_INPUT_BORDER_WIDTH'])) ? $this->_tpldata['.'][0]['T_INPUT_BORDER_WIDTH'] : '') . 'px;
                   border-right: ' . ((isset($this->_tpldata['.'][0]['T_INPUT_BORDER_WIDTH'])) ? $this->_tpldata['.'][0]['T_INPUT_BORDER_WIDTH'] : '') . 'px; border-bottom: ' . ((isset($this->_tpldata['.'][0]['T_INPUT_BORDER_WIDTH'])) ? $this->_tpldata['.'][0]['T_INPUT_BORDER_WIDTH'] : '') . 'px; border-left: ' . ((isset($this->_tpldata['.'][0]['T_INPUT_BORDER_WIDTH'])) ? $this->_tpldata['.'][0]['T_INPUT_BORDER_WIDTH'] : '') . 'px; border-color: #' . ((isset($this->_tpldata['.'][0]['T_HEADER_LINK'])) ? $this->_tpldata['.'][0]['T_HEADER_LINK'] : '') . '; border-style: ' . ((isset($this->_tpldata['.'][0]['T_INPUT_BORDER_STYLE'])) ? $this->_tpldata['.'][0]['T_INPUT_BORDER_STYLE'] : '') . '; }
input.liteoption { font-family: ' . ((isset($this->_tpldata['.'][0]['T_FONTFACE2'])) ? $this->_tpldata['.'][0]['T_FONTFACE2'] : '') . '; font-size: ' . ((isset($this->_tpldata['.'][0]['T_FONTSIZE1'])) ? $this->_tpldata['.'][0]['T_FONTSIZE1'] : '') . 'px; font-weight: normal; color: #' . ((isset($this->_tpldata['.'][0]['T_HEADER_LINK'])) ? $this->_tpldata['.'][0]['T_HEADER_LINK'] : '') . '; background-color: #' . ((isset($this->_tpldata['.'][0]['T_TH_COLOR1'])) ? $this->_tpldata['.'][0]['T_TH_COLOR1'] : '') . '; border-top: ' . ((isset($this->_tpldata['.'][0]['T_INPUT_BORDER_WIDTH'])) ? $this->_tpldata['.'][0]['T_INPUT_BORDER_WIDTH'] : '') . 'px;
                   border-right: ' . ((isset($this->_tpldata['.'][0]['T_INPUT_BORDER_WIDTH'])) ? $this->_tpldata['.'][0]['T_INPUT_BORDER_WIDTH'] : '') . 'px; border-bottom: ' . ((isset($this->_tpldata['.'][0]['T_INPUT_BORDER_WIDTH'])) ? $this->_tpldata['.'][0]['T_INPUT_BORDER_WIDTH'] : '') . 'px; border-left: ' . ((isset($this->_tpldata['.'][0]['T_INPUT_BORDER_WIDTH'])) ? $this->_tpldata['.'][0]['T_INPUT_BORDER_WIDTH'] : '') . 'px; border-color: #' . ((isset($this->_tpldata['.'][0]['T_HEADER_LINK'])) ? $this->_tpldata['.'][0]['T_HEADER_LINK'] : '') . '; border-style: ' . ((isset($this->_tpldata['.'][0]['T_INPUT_BORDER_STYLE'])) ? $this->_tpldata['.'][0]['T_INPUT_BORDER_STYLE'] : '') . '; }

div.graph { position: relative; width: 98%; border: 1px solid #' . ((isset($this->_tpldata['.'][0]['T_HEADER_LINK'])) ? $this->_tpldata['.'][0]['T_HEADER_LINK'] : '') . '; padding: 2px; margin: 2px 0; }
div.graph .bar { display: block; position: relative; background: #' . ((isset($this->_tpldata['.'][0]['T_TR_COLOR2'])) ? $this->_tpldata['.'][0]['T_TR_COLOR2'] : '') . '; text-align: center; color: #' . ((isset($this->_tpldata['.'][0]['T_HEADER_LINK'])) ? $this->_tpldata['.'][0]['T_HEADER_LINK'] : '') . '; height: 1.3em; line-height: 1.3em; }
div.graph .bar span { position: absolute; left: 1em; }

/* News Accodrion */
#rrs_news  {
	width: 260px;
	font-family: verdana;
	margin:  0px;
	padding: 0px;
	border: 1px solid black;
}
#rrs_news div.content {
	margin-bottom : 10px;
	border: none;
	color: #000000;
	text-decoration: none;
	font-size: 10px;
	margin: 0px;
	padding: 10px;
	background-color: #' . ((isset($this->_tpldata['.'][0]['T_TR_COLOR1'])) ? $this->_tpldata['.'][0]['T_TR_COLOR1'] : '') . ';
	overflow: hidden;
	height: 10em;
}
#rrs_news div.title {
	cursor:pointer;
	display:block;
	padding:5px;
	margin-top: 0;
	text-decoration: none;
	font-weight: bold;
	font-size: 10px;
	color:#EDD76F;
	background:#161616;
	border: 1px solid #252525;
}
#rrs_news div.title:hover {
	color: #EDD76F;
	background-color: #3a3a3a;
}
#rrs_news div.title.selected {
	color: white;
	background-color: #3a3a3a;
	border-bottom: 1px solid black;
}
/* Forum */
.rowth{
  font-weight: bold;
  color: #' . ((isset($this->_tpldata['.'][0]['T_HEADER_LINK'])) ? $this->_tpldata['.'][0]['T_HEADER_LINK'] : '') . ';
  background-color: #' . ((isset($this->_tpldata['.'][0]['T_TH_COLOR1'])) ? $this->_tpldata['.'][0]['T_TH_COLOR1'] : '') . ';
  white-space: nowrap;
}

#inner_wrapper 
{
	width:720px;
	margin-top: 10px;
	margin-right : auto;
	margin-bottom: 10px;
	margin-left:auto;
}


.member_wrapper 
{
	width:690px;
	margin-top: 10px;
	margin-right : auto;
	margin-bottom: 10px;
	margin-left:auto;
}

.class_header
{
	font-weight:bold
	font-weight: bold;
	font-size: 15px;	
}

.roster_hr_member
{
	border: none 0;
	border-top: 1px dashed ;
	height: 1px;
}


roster_member_right
{
	align:right;
	text-align: right;
}


.floatR 
{
	float:right;
	
}

.right {
	text-align:right;
	margin-top: 8px;
	
}

/* News Style */
.newscontainer {
  margin-top: 10px;
  margin-left: 30px;
  margin-right: 10px;
  margin-bottom: 3.5em;
}

blockquote {
  margin-bottom: 0.5em;
  margin-top: 0.5em;
  margin-left: 0.1em;
  padding: 0;
  color: #' . ((isset($this->_tpldata['.'][0]['T_BODY_LINK'])) ? $this->_tpldata['.'][0]['T_BODY_LINK'] : '') . ';
  padding-left: 0.6em;
  border-left: solid 4px #' . ((isset($this->_tpldata['.'][0]['T_TABLE_BORDER_COLOR'])) ? $this->_tpldata['.'][0]['T_TABLE_BORDER_COLOR'] : '') . ';
  background-image: none;
}

' . ((isset($this->_tpldata['.'][0]['EXTRA_CSS'])) ? $this->_tpldata['.'][0]['EXTRA_CSS'] : '') . '
</style>
';// INCLUDE ../css_comment.html
$this->assign_from_include('../css_comment.html');
echo '
</head>

<body' . ((isset($this->_tpldata['.'][0]['ONLOAD'])) ? $this->_tpldata['.'][0]['ONLOAD'] : '') . '>
<base target="_self">

';// IF S_NORMAL_HEADER
if ($this->_tpldata['.'][0]['S_NORMAL_HEADER']) { 
echo '<!-- <table width="100%" border="0" cellspacing="1" cellpadding="2" class="borderless" align=center>
  <tr>
    <td width="200" nowrap="nowrap" align=center><img src="' . ((isset($this->_tpldata['.'][0]['TEMPLATE_PATH'])) ? $this->_tpldata['.'][0]['TEMPLATE_PATH'] : '') . '/images/' . ((isset($this->_tpldata['.'][0]['LOGO_PATH'])) ? $this->_tpldata['.'][0]['LOGO_PATH'] : '') . '" alt="Logo" /><br /></td>
	<td width="100%">
      <center><span class="maintitle">' . ((isset($this->_tpldata['.'][0]['MAIN_TITLE'])) ? $this->_tpldata['.'][0]['MAIN_TITLE'] : '') . '</span><br />
      <span class="subtitle">' . ((isset($this->_tpldata['.'][0]['SUB_TITLE'])) ? $this->_tpldata['.'][0]['SUB_TITLE'] : '') . '</span>
	</td>
  </tr>
</table>
<br /> -->';echo '

<table width="100%" align="center" border="0" cellpadding="0" cellspacing="0" class="borderless">
<tr><td colspan=3>
		<table width="100%" align="center" border="0" cellspacing="0" cellpadding="0" class="borderless">
		  <tr style="background:url(' . ((isset($this->_tpldata['.'][0]['TEMPLATE_PATH'])) ? $this->_tpldata['.'][0]['TEMPLATE_PATH'] : '') . '/images/top/topborder.gif); background-repeat:repeat-x; background-position:bottom" >
		  	<td align="left" valign="bottom"><img src="' . ((isset($this->_tpldata['.'][0]['TEMPLATE_PATH'])) ? $this->_tpldata['.'][0]['TEMPLATE_PATH'] : '') . '/images/top/gryph-left.gif"/></td>
			<td align="center"><img src="' . ((isset($this->_tpldata['.'][0]['HEADER_LOGO'])) ? $this->_tpldata['.'][0]['HEADER_LOGO'] : '') . '"/></td>
			<td align="right" valign="bottom"><img src="' . ((isset($this->_tpldata['.'][0]['TEMPLATE_PATH'])) ? $this->_tpldata['.'][0]['TEMPLATE_PATH'] : '') . '/images/top/gryph-right.gif" /></td>
		  </tr>
		</table>
</td></tr>

<td valign="top" width="160">
	<table width="160" border="0" cellspacing="0" cellpadding="0" class="borderless">
	<tr valign="top">
		<td style="background:url(' . ((isset($this->_tpldata['.'][0]['TEMPLATE_PATH'])) ? $this->_tpldata['.'][0]['TEMPLATE_PATH'] : '') . '/images/data_border/top_left.gif); background-repeat:no-repeat; background-position:right;"><img src="' . ((isset($this->_tpldata['.'][0]['TEMPLATE_PATH'])) ? $this->_tpldata['.'][0]['TEMPLATE_PATH'] : '') . '/images/therest/spacer.gif" width="12"/></td>
		<td style="background:url(' . ((isset($this->_tpldata['.'][0]['TEMPLATE_PATH'])) ? $this->_tpldata['.'][0]['TEMPLATE_PATH'] : '') . '/images/data_border/top.gif); background-repeat:repeat-x;"><img src="' . ((isset($this->_tpldata['.'][0]['TEMPLATE_PATH'])) ? $this->_tpldata['.'][0]['TEMPLATE_PATH'] : '') . '/images/therest/spacer.gif" height="12"/></td>
		<td style="background:url(' . ((isset($this->_tpldata['.'][0]['TEMPLATE_PATH'])) ? $this->_tpldata['.'][0]['TEMPLATE_PATH'] : '') . '/images/data_border/top_right.gif); background-repeat:no-repeat;"><img src="' . ((isset($this->_tpldata['.'][0]['TEMPLATE_PATH'])) ? $this->_tpldata['.'][0]['TEMPLATE_PATH'] : '') . '/images/therest/spacer.gif" width="12"/></td>
	</tr>
	<tr>
		<td style="background:url(' . ((isset($this->_tpldata['.'][0]['TEMPLATE_PATH'])) ? $this->_tpldata['.'][0]['TEMPLATE_PATH'] : '') . '/images/data_border/left.gif); background-repeat:repeat-y; background-position:right;"><img src="' . ((isset($this->_tpldata['.'][0]['TEMPLATE_PATH'])) ? $this->_tpldata['.'][0]['TEMPLATE_PATH'] : '') . '/images/therest/spacer.gif" width="12" /></td>
		<td style="background:url(' . ((isset($this->_tpldata['.'][0]['TEMPLATE_PATH'])) ? $this->_tpldata['.'][0]['TEMPLATE_PATH'] : '') . '/images/data_border/back.jpg); background-repeat:repeat">

' . ((isset($this->_tpldata['.'][0]['PORTAL_LEFT1'])) ? $this->_tpldata['.'][0]['PORTAL_LEFT1'] : '') . '
' . ((isset($this->_tpldata['.'][0]['MAIN_MENU1_V'])) ? $this->_tpldata['.'][0]['MAIN_MENU1_V'] : '') . '
' . ((isset($this->_tpldata['.'][0]['MAIN_MENU2_V'])) ? $this->_tpldata['.'][0]['MAIN_MENU2_V'] : '') . '
' . ((isset($this->_tpldata['.'][0]['MAIN_MENU3_V'])) ? $this->_tpldata['.'][0]['MAIN_MENU3_V'] : '') . '
' . ((isset($this->_tpldata['.'][0]['PORTAL_LEFT2'])) ? $this->_tpldata['.'][0]['PORTAL_LEFT2'] : '') . '

		</td>
		<td style="background:url(' . ((isset($this->_tpldata['.'][0]['TEMPLATE_PATH'])) ? $this->_tpldata['.'][0]['TEMPLATE_PATH'] : '') . '/images/data_border/right.gif); background-repeat:repeat-y; "><img src="' . ((isset($this->_tpldata['.'][0]['TEMPLATE_PATH'])) ? $this->_tpldata['.'][0]['TEMPLATE_PATH'] : '') . '/images/therest/spacer.gif" width="12" /></td>
	</tr>
	<tr>
		<td style="background:url(' . ((isset($this->_tpldata['.'][0]['TEMPLATE_PATH'])) ? $this->_tpldata['.'][0]['TEMPLATE_PATH'] : '') . '/images/data_border/bottom_left.gif); background-repeat:no-repeat; background-position:right;"><img src="' . ((isset($this->_tpldata['.'][0]['TEMPLATE_PATH'])) ? $this->_tpldata['.'][0]['TEMPLATE_PATH'] : '') . '/images/therest/spacer.gif" width="12"/></td>
		<td style="background:url(' . ((isset($this->_tpldata['.'][0]['TEMPLATE_PATH'])) ? $this->_tpldata['.'][0]['TEMPLATE_PATH'] : '') . '/images/data_border/bottom.gif); background-repeat:repeat-x;"><img src="' . ((isset($this->_tpldata['.'][0]['TEMPLATE_PATH'])) ? $this->_tpldata['.'][0]['TEMPLATE_PATH'] : '') . '/images/therest/spacer.gif" height="12"/></td>
		<td style="background:url(' . ((isset($this->_tpldata['.'][0]['TEMPLATE_PATH'])) ? $this->_tpldata['.'][0]['TEMPLATE_PATH'] : '') . '/images/data_border/bottom_right.gif); background-repeat:no-repeat;"><img src="' . ((isset($this->_tpldata['.'][0]['TEMPLATE_PATH'])) ? $this->_tpldata['.'][0]['TEMPLATE_PATH'] : '') . '/images/therest/spacer.gif" width="12"/></td>
	</tr>
	</table>
</td>

';// IF S_IN_ADMIN
if ($this->_tpldata['.'][0]['S_IN_ADMIN']) { 
echo '
<td width="150" align="left" valign="top">
	<table width="100%" border="0" cellspacing="0" cellpadding="0">
	<tr valign="top">
		<td style="background:url(' . ((isset($this->_tpldata['.'][0]['TEMPLATE_PATH'])) ? $this->_tpldata['.'][0]['TEMPLATE_PATH'] : '') . '/images/data_border/top_left.gif); background-repeat:no-repeat; background-position:right;"><img src="' . ((isset($this->_tpldata['.'][0]['TEMPLATE_PATH'])) ? $this->_tpldata['.'][0]['TEMPLATE_PATH'] : '') . '/images/therest/spacer.gif" width="12"/></td>
		<td style="background:url(' . ((isset($this->_tpldata['.'][0]['TEMPLATE_PATH'])) ? $this->_tpldata['.'][0]['TEMPLATE_PATH'] : '') . '/images/data_border/top.gif); background-repeat:repeat-x;"><img src="' . ((isset($this->_tpldata['.'][0]['TEMPLATE_PATH'])) ? $this->_tpldata['.'][0]['TEMPLATE_PATH'] : '') . '/images/therest/spacer.gif" height="12"/></td>
		<td style="background:url(' . ((isset($this->_tpldata['.'][0]['TEMPLATE_PATH'])) ? $this->_tpldata['.'][0]['TEMPLATE_PATH'] : '') . '/images/data_border/top_right.gif); background-repeat:no-repeat;"><img src="' . ((isset($this->_tpldata['.'][0]['TEMPLATE_PATH'])) ? $this->_tpldata['.'][0]['TEMPLATE_PATH'] : '') . '/images/therest/spacer.gif" width="12"/></td>
	</tr>
		<td style="background:url(' . ((isset($this->_tpldata['.'][0]['TEMPLATE_PATH'])) ? $this->_tpldata['.'][0]['TEMPLATE_PATH'] : '') . '/images/data_border/left.gif); background-repeat:repeat-y; background-position:right;"><img src="' . ((isset($this->_tpldata['.'][0]['TEMPLATE_PATH'])) ? $this->_tpldata['.'][0]['TEMPLATE_PATH'] : '') . '/images/therest/spacer.gif" width="12" /></td>
		<td style="background:url(' . ((isset($this->_tpldata['.'][0]['TEMPLATE_PATH'])) ? $this->_tpldata['.'][0]['TEMPLATE_PATH'] : '') . '/images/data_border/back.jpg); background-repeat:repeat">
			<table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <th class="smalltitle" align="center">' . ((isset($this->_tpldata['.'][0]['L_ADMINISTRATION'])) ? $this->_tpldata['.'][0]['L_ADMINISTRATION'] : ((isset($user->lang['ADMINISTRATION'])) ? $user->lang['ADMINISTRATION'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'ADMINISTRATION'))) . ' 	}')) . '</th>
            </tr>
            <tr>
              <td class="row1"> <img src="' . ((isset($this->_tpldata['.'][0]['EQDKP_ROOT_PATH'])) ? $this->_tpldata['.'][0]['EQDKP_ROOT_PATH'] : '') . 'images/arrow.gif" alt="arrow" /> <a href="' . ((isset($this->_tpldata['.'][0]['EQDKP_ROOT_PATH'])) ? $this->_tpldata['.'][0]['EQDKP_ROOT_PATH'] : '') . 'admin/index.php' . ((isset($this->_tpldata['.'][0]['SID'])) ? $this->_tpldata['.'][0]['SID'] : '') . '">' . ((isset($this->_tpldata['.'][0]['L_ADMIN_INDEX'])) ? $this->_tpldata['.'][0]['L_ADMIN_INDEX'] : ((isset($user->lang['ADMIN_INDEX'])) ? $user->lang['ADMIN_INDEX'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'ADMIN_INDEX'))) . ' 	}')) . '</a></td>
            </tr>
            <tr>
              <td class="row2"> <img src="' . ((isset($this->_tpldata['.'][0]['EQDKP_ROOT_PATH'])) ? $this->_tpldata['.'][0]['EQDKP_ROOT_PATH'] : '') . 'images/arrow.gif" alt="arrow" /> <a href="' . ((isset($this->_tpldata['.'][0]['EQDKP_ROOT_PATH'])) ? $this->_tpldata['.'][0]['EQDKP_ROOT_PATH'] : '') . '' . ((isset($this->_tpldata['.'][0]['SID'])) ? $this->_tpldata['.'][0]['SID'] : '') . '">' . ((isset($this->_tpldata['.'][0]['L_EQDKP_INDEX'])) ? $this->_tpldata['.'][0]['L_EQDKP_INDEX'] : ((isset($user->lang['EQDKP_INDEX'])) ? $user->lang['EQDKP_INDEX'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'EQDKP_INDEX'))) . ' 	}')) . '</a></td>
            </tr>
            ';// BEGIN header_row
$_header_row_count = (isset($this->_tpldata['header_row.'])) ?  sizeof($this->_tpldata['header_row.']) : 0;
if ($_header_row_count) {
for ($_header_row_i = 0; $_header_row_i < $_header_row_count; $_header_row_i++)
{
echo '
            <tr>
              <th align="left" class="smalltitle"><img src="' . ((isset($this->_tpldata['.'][0]['EQDKP_ROOT_PATH'])) ? $this->_tpldata['.'][0]['EQDKP_ROOT_PATH'] : '') . 'images/admin/' . ((isset($this->_tpldata['header_row.'][$_header_row_i]['HEADER_IMG'])) ? $this->_tpldata['header_row.'][$_header_row_i]['HEADER_IMG'] : '') . '" alt="img" /> ' . ((isset($this->_tpldata['header_row.'][$_header_row_i]['HEADER'])) ? $this->_tpldata['header_row.'][$_header_row_i]['HEADER'] : '') . '</th>
            </tr>
            ';// BEGIN menu_row
$_menu_row_count = (isset($this->_tpldata['header_row.'][$_header_row_i]['menu_row.'])) ? sizeof($this->_tpldata['header_row.'][$_header_row_i]['menu_row.']) : 0;
if ($_menu_row_count) {
for ($_menu_row_i = 0; $_menu_row_i < $_menu_row_count; $_menu_row_i++)
{
echo '
            <tr>
              <td class="' . ((isset($this->_tpldata['header_row.'][$_header_row_i]['menu_row.'][$_menu_row_i]['ROW_CLASS'])) ? $this->_tpldata['header_row.'][$_header_row_i]['menu_row.'][$_menu_row_i]['ROW_CLASS'] : '') . '"> <img src="' . ((isset($this->_tpldata['.'][0]['EQDKP_ROOT_PATH'])) ? $this->_tpldata['.'][0]['EQDKP_ROOT_PATH'] : '') . 'images/arrow.gif" alt="arrow" /> ' . ((isset($this->_tpldata['header_row.'][$_header_row_i]['menu_row.'][$_menu_row_i]['LINK'])) ? $this->_tpldata['header_row.'][$_header_row_i]['menu_row.'][$_menu_row_i]['LINK'] : '') . '</td>
            </tr>
            ';}}
// END menu_row
}}
// END header_row
echo '
			</table>
		</td>
		<td style="background:url(' . ((isset($this->_tpldata['.'][0]['TEMPLATE_PATH'])) ? $this->_tpldata['.'][0]['TEMPLATE_PATH'] : '') . '/images/data_border/right.gif); background-repeat:repeat-y; "><img src="' . ((isset($this->_tpldata['.'][0]['TEMPLATE_PATH'])) ? $this->_tpldata['.'][0]['TEMPLATE_PATH'] : '') . '/images/therest/spacer.gif" width="12" /></td>
	</tr>
	<tr>
		<td style="background:url(' . ((isset($this->_tpldata['.'][0]['TEMPLATE_PATH'])) ? $this->_tpldata['.'][0]['TEMPLATE_PATH'] : '') . '/images/data_border/bottom_left.gif); background-repeat:no-repeat; background-position:right;"><img src="' . ((isset($this->_tpldata['.'][0]['TEMPLATE_PATH'])) ? $this->_tpldata['.'][0]['TEMPLATE_PATH'] : '') . '/images/therest/spacer.gif" width="12"/></td>
		<td style="background:url(' . ((isset($this->_tpldata['.'][0]['TEMPLATE_PATH'])) ? $this->_tpldata['.'][0]['TEMPLATE_PATH'] : '') . '/images/data_border/bottom.gif); background-repeat:repeat-x;"><img src="' . ((isset($this->_tpldata['.'][0]['TEMPLATE_PATH'])) ? $this->_tpldata['.'][0]['TEMPLATE_PATH'] : '') . '/images/therest/spacer.gif" height="12"/></td>
		<td style="background:url(' . ((isset($this->_tpldata['.'][0]['TEMPLATE_PATH'])) ? $this->_tpldata['.'][0]['TEMPLATE_PATH'] : '') . '/images/data_border/bottom_right.gif); background-repeat:no-repeat;"><img src="' . ((isset($this->_tpldata['.'][0]['TEMPLATE_PATH'])) ? $this->_tpldata['.'][0]['TEMPLATE_PATH'] : '') . '/images/therest/spacer.gif" width="12"/></td>
	</tr>
	</table>
</td>
';// ENDIF
}
echo '
<td valign="top">
	<table width="100%" border="0" cellspacing="0" cellpadding="0" class="borderless">
	<tr valign="top">
		<td style="background:url(' . ((isset($this->_tpldata['.'][0]['TEMPLATE_PATH'])) ? $this->_tpldata['.'][0]['TEMPLATE_PATH'] : '') . '/images/data_border/top_left.gif); background-repeat:no-repeat; background-position:right;"><img src="' . ((isset($this->_tpldata['.'][0]['TEMPLATE_PATH'])) ? $this->_tpldata['.'][0]['TEMPLATE_PATH'] : '') . '/images/therest/spacer.gif" width="12"/></td>
		<td style="background:url(' . ((isset($this->_tpldata['.'][0]['TEMPLATE_PATH'])) ? $this->_tpldata['.'][0]['TEMPLATE_PATH'] : '') . '/images/data_border/top.gif); background-repeat:repeat-x;"><img src="' . ((isset($this->_tpldata['.'][0]['TEMPLATE_PATH'])) ? $this->_tpldata['.'][0]['TEMPLATE_PATH'] : '') . '/images/therest/spacer.gif" height="12"/></td>
		<td style="background:url(' . ((isset($this->_tpldata['.'][0]['TEMPLATE_PATH'])) ? $this->_tpldata['.'][0]['TEMPLATE_PATH'] : '') . '/images/data_border/top_right.gif); background-repeat:no-repeat;"><img src="' . ((isset($this->_tpldata['.'][0]['TEMPLATE_PATH'])) ? $this->_tpldata['.'][0]['TEMPLATE_PATH'] : '') . '/images/therest/spacer.gif" width="12"/></td>
	</tr>
	<tr>
		<td style="background:url(' . ((isset($this->_tpldata['.'][0]['TEMPLATE_PATH'])) ? $this->_tpldata['.'][0]['TEMPLATE_PATH'] : '') . '/images/data_border/left.gif); background-repeat:repeat-y; background-position:right;"><img src="' . ((isset($this->_tpldata['.'][0]['TEMPLATE_PATH'])) ? $this->_tpldata['.'][0]['TEMPLATE_PATH'] : '') . '/images/therest/spacer.gif" width="12" /></td>
		<td style="background:url(' . ((isset($this->_tpldata['.'][0]['TEMPLATE_PATH'])) ? $this->_tpldata['.'][0]['TEMPLATE_PATH'] : '') . '/images/data_border/back.jpg); background-repeat:repeat">

		' . ((isset($this->_tpldata['.'][0]['NEWS_TICKER_H'])) ? $this->_tpldata['.'][0]['NEWS_TICKER_H'] : '') . '
                    ' . ((isset($this->_tpldata['.'][0]['PORTAL_MIDDLE'])) ? $this->_tpldata['.'][0]['PORTAL_MIDDLE'] : '') . '
                    ';// ENDIF
}
echo '
                    ' . ((isset($this->_tpldata['.'][0]['TOP'])) ? $this->_tpldata['.'][0]['TOP'] : '') . '';
}
?>