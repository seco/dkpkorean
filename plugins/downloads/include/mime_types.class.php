<?php
/*************************************************\
*             Downloads 4 EQdkp plus              *
* ----------------------------------------------- *
* Project Start: 05/2009                          *
* Author: GodMod                                  *
* Copyright: GodMod 				              *
* Link: http://eqdkp-plus.com/forum               *
* Version: 0.1.0a                                 *
* ----------------------------------------------- *
* Based on EQdkp-Plus Gallery by Badtwin & Lunary *
\*************************************************/
//License: Creative Commons - Attribution-Noncommercial-Share Alike 3.0 Unported
//License-Link: http://creativecommons.org/licenses/by-nc-sa/3.0/

  if ( !defined('EQDKP_INC') ){
    header('HTTP/1.0 404 Not Found');exit;
  } 
  
  if (!class_exists("MimeTypeClass")){
  	class MimeTypeClass
  	{
	  
  function get_mime_types(){
	
	$mimetypes_array = array(

//Edit nothing above here	
	
	
  //Add your own extensions and mime-types:
  //Switch on the debug-mode in the plugin-settings and try to upload your file: you get the file-extension and the mime-type.
  //If the Extension is already existing, just add the mime-type (seperate Mime-Types with Comma, here on this page are enought examples...)
  //else Copy an Extension and paste your mime-type.
  //dont't forget to disable the debug-mode.
	
	
	//Office-Documents
	'xls' 	=> array('application/msexcel', 'application/vnd.ms-excel', 'application/excel', 'application/x-excel', 'application/x-msexcel'),
	'xla' 	=> array('application/msexcel'),
	'ppt' 	=> array('application/mspowerpoint','application/vnd.ms-powerpoint', 'application/powerpoint'),
	'ppz' 	=> array('application/mspowerpoint','application/vnd.ms-powerpoint', 'application/powerpoint'),
	'pps' 	=> array('application/mspowerpoint','application/vnd.ms-powerpoint', 'application/powerpoint'),
	'pot' 	=> array('application/mspowerpoint','application/vnd.ms-powerpoint', 'application/powerpoint'),
	'doc' 	=> array('application/msword', 'application/xms-word'),
	'dot' 	=> array('application/msword', 'application/xms-word'),
	
	//Documents
	'pdf' 	=> array('application/pdf', 'application/x-pdf'),
	'rtf' 	=> array('application/rtf'),
	'exe'	=> array('application/octet-stream'),
	'txt'	=> array('text/plain'),
	'rtf'	=> array('text/rtf'),
	'xml'	=> array('text/xml'),
	'icon'	=> array('image/x-icon'),

	//Archives
	'gz' 	=> array('application/x-gzip', 'application/gzip','x-compressed', 'application/x-tar-gz'),
	'gtar' 	=> array('application/x-gtar','x-compressed',  'application/x-tar-gz'),
	'zip' 	=> array('application/zip','x-compressed', 'application/x-zip', 'application/x-zip-compressed'),
	'rar' 	=> array('application/rar','x-compressed'),
	'bz2'	=> array('application/x-bzip2', 'x-compressed'),
	'bz'	=> array('application/x-bzip2', 'x-compressed'),
	'tar'	=> array('application/x-tar'),
	
	//Audio/Video
	'wav' 	=> array('audio/x-wav'),
	'swf' 	=> array('application/x-shockwave-flash'),
	'mpeg'	=> array('video/mpeg'),
	'mpg'	=> array('video/mpeg'),
	'mpe'	=> array('video/mpeg'),
	'qt'	=> array('video/quicktime'),
	'mov'	=> array('video/quicktime'),
	'avi'	=> array('video/x-msvideo'),
	'mp3'	=> array('audio/mp3','audio/x-mp3'),
 
	//Images
	'gif' 	=> array('image/gif'),
	'jpg' 	=> array('image/jpg','image/jpeg', 'image/pjpg', 'image/pjpeg'),
	'jpeg' 	=> array('image/jpg','image/jpeg', 'image/pjpg', 'image/pjpeg'),
	'jpe' 	=> array('image/jpg','image/jpeg', 'image/pjpg', 'image/pjpeg'),
	'png' 	=> array('image/png'),
	'tif' 	=> array('image/tiff', 'image/x-tiff'),
	'tiff' 	=> array('image/tiff', 'image/x-tiff'),
	'bmp' 	=> array('image/bmp','image/x-windows-bmp'),
	'psd'	=> array('application/x-photoshop', 'application/octet-stream'),
	'ps'	=> array('application/postscript'),
	'eps'	=> array('application/postscript'),




//Edit nothing beyond here
	);
	
 return $mimetypes_array;
 }
	}//END Class
  }
?>
