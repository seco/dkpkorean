<?php
if ($this->security()) {
echo '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=' . ((isset($this->_tpldata['.'][0]['ENCODING'])) ? $this->_tpldata['.'][0]['ENCODING'] : '') . '" />
' . ((isset($this->_tpldata['.'][0]['META'])) ? $this->_tpldata['.'][0]['META'] : '') . '
<title>' . ((isset($this->_tpldata['.'][0]['PAGE_TITLE'])) ? $this->_tpldata['.'][0]['PAGE_TITLE'] : '') . '</title>
<link rel="stylesheet" href="' . ((isset($this->_tpldata['.'][0]['EQDKP_ROOT_PATH'])) ? $this->_tpldata['.'][0]['EQDKP_ROOT_PATH'] : '') . 'templates/m9wotlk/m9wotlk.css" type="text/css" />
<script type="text/javascript" src="' . ((isset($this->_tpldata['.'][0]['EQDKP_ROOT_PATH'])) ? $this->_tpldata['.'][0]['EQDKP_ROOT_PATH'] : '') . '/pluskernel/include/javascripts/overlib.js"></script>
';// IF ITEMSTATS_CSS_PATH
if ($this->_tpldata['.'][0]['ITEMSTATS_CSS_PATH']) { 
echo '
<link REL=StyleSheet HREF="' . ((isset($this->_tpldata['.'][0]['EQDKP_ROOT_PATH'])) ? $this->_tpldata['.'][0]['EQDKP_ROOT_PATH'] : '') . '' . ((isset($this->_tpldata['.'][0]['ITEMSTATS_PATH'])) ? $this->_tpldata['.'][0]['ITEMSTATS_PATH'] : '') . '' . ((isset($this->_tpldata['.'][0]['ITEMSTATS_CSS_PATH'])) ? $this->_tpldata['.'][0]['ITEMSTATS_CSS_PATH'] : '') . '" TYPE="text/css" MEDIA=screen />
';// ENDIF
}
echo '
<link rel="shortcut icon" href="' . ((isset($this->_tpldata['.'][0]['EQDKP_ROOT_PATH'])) ? $this->_tpldata['.'][0]['EQDKP_ROOT_PATH'] : '') . 'templates/m9wotlk/images/favicon.png" type="image/png">
<link rel="icon" href="' . ((isset($this->_tpldata['.'][0]['EQDKP_ROOT_PATH'])) ? $this->_tpldata['.'][0]['EQDKP_ROOT_PATH'] : '') . 'templates/m9wotlk/images/favicon.png" type="image/png">
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
/**
 * EQDKP Comment System
 * Wallenium
 * StyleSheet
 */

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

/* Bad Fix to prevent the glassy Background */
div.jGrowl div.eqdkp-green {
  background: #A2DF6F;
}

</style>

</head>

<body' . ((isset($this->_tpldata['.'][0]['ONLOAD'])) ? $this->_tpldata['.'][0]['ONLOAD'] : '') . '>
';// IF S_NORMAL_HEADER
if ($this->_tpldata['.'][0]['S_NORMAL_HEADER']) { 
echo '
<table class="bodyline" width="100%" cellspacing="0" cellpadding="0" border="0">
	<tr colspan="3"><img id="formStyleTestImage" src="' . ((isset($this->_tpldata['.'][0]['EQDKP_ROOT_PATH'])) ? $this->_tpldata['.'][0]['EQDKP_ROOT_PATH'] : '') . 'templates/m9wotlk/images/spacer.gif" /></tr>
	<tr>
		<td class="border_top_left"></td>
		<td>

			<table class="header_background" width="100%" cellspacing="0" cellpadding="0" border=0">
				<tr>
				<td rowspan="2"><img src="' . ((isset($this->_tpldata['.'][0]['HEADER_LOGO'])) ? $this->_tpldata['.'][0]['HEADER_LOGO'] : '') . '" alt="Logo" /></td>
				<td class="header_background" height="65px" align="right" valign="bottom">
				<span class="maintitle">' . ((isset($this->_tpldata['.'][0]['MAIN_TITLE'])) ? $this->_tpldata['.'][0]['MAIN_TITLE'] : '') . '</span><br />
      			<span class="subtitle">' . ((isset($this->_tpldata['.'][0]['SUB_TITLE'])) ? $this->_tpldata['.'][0]['SUB_TITLE'] : '') . '</span>
				</td>
				</tr>
			</table>
			<table border="0" cellpadding="0" cellspacing="0" width="100%" align="left">
				<tr valign="top">
				<td>
					<a href="' . ((isset($this->_tpldata['.'][0]['PORTAL_URL'])) ? $this->_tpldata['.'][0]['PORTAL_URL'] : '') . '"> <img src="' . ((isset($this->_tpldata['.'][0]['TEMPLATE_PATH'])) ? $this->_tpldata['.'][0]['TEMPLATE_PATH'] : '') . '/images/qportal.jpg"></a>

					';// IF PORTAL_IS_FORUM
if ($this->_tpldata['.'][0]['PORTAL_IS_FORUM']) { 
echo '
					<a href="' . ((isset($this->_tpldata['.'][0]['PORTAL_FORUM_URL'])) ? $this->_tpldata['.'][0]['PORTAL_FORUM_URL'] : '') . '"><img src="' . ((isset($this->_tpldata['.'][0]['TEMPLATE_PATH'])) ? $this->_tpldata['.'][0]['TEMPLATE_PATH'] : '') . '/images/qforum.jpg"></a>
				    ';// ENDIF
}
echo '

					<a href="' . ((isset($this->_tpldata['.'][0]['PORTAL_DKP_URL'])) ? $this->_tpldata['.'][0]['PORTAL_DKP_URL'] : '') . '"><img src="' . ((isset($this->_tpldata['.'][0]['TEMPLATE_PATH'])) ? $this->_tpldata['.'][0]['TEMPLATE_PATH'] : '') . '/images/qdkp.jpg"></a>

				    ';// IF IS_RP_INSTALLED
if ($this->_tpldata['.'][0]['IS_RP_INSTALLED']) { 
echo '
				    <a href="' . ((isset($this->_tpldata['.'][0]['IS_RP_URL'])) ? $this->_tpldata['.'][0]['IS_RP_URL'] : '') . '"><img src="' . ((isset($this->_tpldata['.'][0]['TEMPLATE_PATH'])) ? $this->_tpldata['.'][0]['TEMPLATE_PATH'] : '') . '/images/qraidplan.jpg"></a>
				    ';// ENDIF
}
echo '

				    <!--
				    <a href=""><img src="' . ((isset($this->_tpldata['.'][0]['TEMPLATE_PATH'])) ? $this->_tpldata['.'][0]['TEMPLATE_PATH'] : '') . '/images/qalbum.jpg"></a>
				    <a href=""><img src="' . ((isset($this->_tpldata['.'][0]['TEMPLATE_PATH'])) ? $this->_tpldata['.'][0]['TEMPLATE_PATH'] : '') . '/images/qdownload.jpg"></a>
				    -->
				    <img src="' . ((isset($this->_tpldata['.'][0]['TEMPLATE_PATH'])) ? $this->_tpldata['.'][0]['TEMPLATE_PATH'] : '') . '/images/qlinks_right.gif"></td>
				</tr>
			</table>

		</td>
		<td class="border_top_right"></td>
	</tr>
	<tr>
		<td class="border_side_left"></td>
		<td>
			<table width="100%" border="0" cellspacing="0" cellpadding="10">
			<tr>
				<td width="100%" class="doiley">
					<table border="0" width="100%" align="right" cellspacing="0" cellpadding="2">
						<tr>
							<td width="5%" valign="top" >
							  ' . ((isset($this->_tpldata['.'][0]['PORTAL_LEFT1'])) ? $this->_tpldata['.'][0]['PORTAL_LEFT1'] : '') . '
								' . ((isset($this->_tpldata['.'][0]['MAIN_MENU1_V'])) ? $this->_tpldata['.'][0]['MAIN_MENU1_V'] : '') . '
								' . ((isset($this->_tpldata['.'][0]['MAIN_MENU2_V'])) ? $this->_tpldata['.'][0]['MAIN_MENU2_V'] : '') . '
								' . ((isset($this->_tpldata['.'][0]['MAIN_MENU3_V'])) ? $this->_tpldata['.'][0]['MAIN_MENU3_V'] : '') . '
								<br>
								' . ((isset($this->_tpldata['.'][0]['PORTAL_LEFT2'])) ? $this->_tpldata['.'][0]['PORTAL_LEFT2'] : '') . '
							</td>
						<td valign="top">
							' . ((isset($this->_tpldata['.'][0]['NEWS_TICKER_H'])) ? $this->_tpldata['.'][0]['NEWS_TICKER_H'] : '') . '
				';// IF S_IN_ADMIN
if ($this->_tpldata['.'][0]['S_IN_ADMIN']) { 
echo '
				<table width="100%" border="0" cellspacing="0" cellpadding="2">
				<tr>
					<td width="175" valign="top" nowrap="nowrap">
						<table width="100%" border="0" cellspacing="1" cellpadding="2" bgcolor="#000000" class="forumline">
						<tr>
							<th class="smalltitle" align="center">' . ((isset($this->_tpldata['.'][0]['L_ADMINISTRATION'])) ? $this->_tpldata['.'][0]['L_ADMINISTRATION'] : ((isset($user->lang['ADMINISTRATION'])) ? $user->lang['ADMINISTRATION'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'ADMINISTRATION'))) . ' 	}')) . '</th>
        				</tr>
        				<tr>
          					<td class="row1">&nbsp;<img src="' . ((isset($this->_tpldata['.'][0]['EQDKP_ROOT_PATH'])) ? $this->_tpldata['.'][0]['EQDKP_ROOT_PATH'] : '') . 'images/arrow.gif" alt="arrow" />&nbsp;<a href="' . ((isset($this->_tpldata['.'][0]['EQDKP_ROOT_PATH'])) ? $this->_tpldata['.'][0]['EQDKP_ROOT_PATH'] : '') . 'admin/index.php' . ((isset($this->_tpldata['.'][0]['SID'])) ? $this->_tpldata['.'][0]['SID'] : '') . '">' . ((isset($this->_tpldata['.'][0]['L_ADMIN_INDEX'])) ? $this->_tpldata['.'][0]['L_ADMIN_INDEX'] : ((isset($user->lang['ADMIN_INDEX'])) ? $user->lang['ADMIN_INDEX'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'ADMIN_INDEX'))) . ' 	}')) . '</a></td>
        				</tr>
        				<tr>
          					<td class="row2">&nbsp;<img src="' . ((isset($this->_tpldata['.'][0]['EQDKP_ROOT_PATH'])) ? $this->_tpldata['.'][0]['EQDKP_ROOT_PATH'] : '') . 'images/arrow.gif" alt="arrow" />&nbsp;<a href="' . ((isset($this->_tpldata['.'][0]['EQDKP_ROOT_PATH'])) ? $this->_tpldata['.'][0]['EQDKP_ROOT_PATH'] : '') . '' . ((isset($this->_tpldata['.'][0]['SID'])) ? $this->_tpldata['.'][0]['SID'] : '') . '">' . ((isset($this->_tpldata['.'][0]['L_EQDKP_INDEX'])) ? $this->_tpldata['.'][0]['L_EQDKP_INDEX'] : ((isset($user->lang['EQDKP_INDEX'])) ? $user->lang['EQDKP_INDEX'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'EQDKP_INDEX'))) . ' 	}')) . '</a></td>
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
        				<tr class="' . ((isset($this->_tpldata['header_row.'][$_header_row_i]['menu_row.'][$_menu_row_i]['ROW_CLASS'])) ? $this->_tpldata['header_row.'][$_header_row_i]['menu_row.'][$_menu_row_i]['ROW_CLASS'] : '') . '" onmouseover="this.className=\'rowHover\';" onmouseout="this.className=\'' . ((isset($this->_tpldata['header_row.'][$_header_row_i]['menu_row.'][$_menu_row_i]['ROW_CLASS'])) ? $this->_tpldata['header_row.'][$_header_row_i]['menu_row.'][$_menu_row_i]['ROW_CLASS'] : '') . '\';">
          					<td>&nbsp;<img src="' . ((isset($this->_tpldata['.'][0]['EQDKP_ROOT_PATH'])) ? $this->_tpldata['.'][0]['EQDKP_ROOT_PATH'] : '') . 'images/arrow.gif" alt="arrow" />&nbsp;' . ((isset($this->_tpldata['header_row.'][$_header_row_i]['menu_row.'][$_menu_row_i]['LINK'])) ? $this->_tpldata['header_row.'][$_header_row_i]['menu_row.'][$_menu_row_i]['LINK'] : '') . ' </td>
        				</tr>
        				';}}
// END menu_row
}}
// END header_row
echo '
						</table>
    				</td>
    				<td width="100%" valign="top">
';// ENDIF
}
echo '
                    ' . ((isset($this->_tpldata['.'][0]['PORTAL_MIDDLE'])) ? $this->_tpldata['.'][0]['PORTAL_MIDDLE'] : '') . '
                    ';// ENDIF
}
echo '
                    ' . ((isset($this->_tpldata['.'][0]['TOP'])) ? $this->_tpldata['.'][0]['TOP'] : '') . '';
}
?>