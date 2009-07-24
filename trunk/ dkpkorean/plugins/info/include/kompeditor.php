<?php
 /*
 * Project:     InfoPages
 * License:     Creative Commons - Attribution-Noncommercial-Share Alike 3.0 Unported
 * Link:		    http://creativecommons.org/licenses/by-nc-sa/3.0/
 * -----------------------------------------------------------------------
 * Began:       2007
 * Date:        $Date: 2009-02-25 18:06:31 +0100 (Mi, 25 Feb 2009) $
 * -----------------------------------------------------------------------
 * @author      $Author: sz3 $
 * @copyright   2007-2008 sz3
 * @link        http://eqdkp-plus.com
 * @package     info
 * @version     $Rev: 3992 $
 *
 * $Id: kompeditor.php 3992 2009-02-25 17:06:31Z sz3 $
 */
if ( !defined('EQDKP_INC') ){
  header('HTTP/1.0 404 Not Found');exit;
} 

class kompEditor
{
	function generate($settings, $rootpath)
	{
		( !$settings['language'] ) ? $language = "en" : $language = $settings['language'];
		
	$output = 	'<link href="'.$rootpath.'plugins/info/include/kompStyles/kompstyle.css" rel="stylesheet" type="text/css" />
<script language="javascript" type="text/javascript" src="'.$rootpath.'plugins/info/include/javascript/tiny_mce/tiny_mce.js"></script>
<script language="javascript" type="text/javascript">
tinyMCE.init({
	mode : "specific_textareas",
	editor_selector : "mceEditor",
	remove_script_host : false,
	relative_urls : false,
	theme : "advanced",
	language : "'.$language.'",
	plugins : "table,advhr,advimage,advlink,emotions,iespell,insertdatetime,preview,zoom,flash,searchreplace,print,contextmenu",
	theme_advanced_buttons1_add : "fontselect,fontsizeselect",
	theme_advanced_buttons2_add : "separator,insertdate,inserttime,preview,zoom,separator,forecolor,backcolor",
	theme_advanced_buttons2_add_before: "cut,copy,paste,separator,search,replace,separator",
	theme_advanced_buttons3_add_before : "tablecontrols,separator",
	theme_advanced_buttons3_add : "emotions,iespell,flash,advhr,separator,print",
	theme_advanced_toolbar_location : "top",
	theme_advanced_toolbar_align : "left",
	theme_advanced_path_location : "bottom",
	plugin_insertdate_dateFormat : "%Y-%m-%d",
	plugin_insertdate_timeFormat : "%H:%M:%S",
	extended_valid_elements : "+iframe[align<bottom?left?middle?right?top|class|frameborder|height|id|longdesc|marginheight|marginwidth|name|scrolling<auto?no?yes|src|style|title|width],a[name|href|target|title|onclick],img[class|src|border=0|alt|title|hspace|vspace|width|height|align|onmouseover|onmouseout|name],hr[class|width|size|noshade],font[face|size|color|style],span[class|align|style]"
});
</script>';
return $output;
	}
	
	function textbox($input, $settings){
		( !$settings['textbox_cols'] ) ? $text_cols = "85" : $text_cols = $settings['textbox_cols'];
		( !$settings['textbox_rows'] ) ? $text_rows = "15" : $text_rows = $settings['textbox_rows'];
		( !$settings['textbox_name'] ) ? $textbox = "content" : $textbox = $settings['textbox_name'];
		
			$textdata =	('<textarea name="'.$textbox.'" class="mceEditor" cols="'.$text_cols.'" rows="'.$text_rows.'">'.$input.'</textarea>');
		return $textdata;
	}
	
	function encode($input){
		$encode = addslashes(htmlentities($input));
		return $encode;
	}
	
	function decode($input){
		$decode = html_entity_decode(stripslashes($input));
		return $decode;
	}
}

?>
