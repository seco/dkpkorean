<?php
 /*
 * Project:     eqdkpPLUS Library Manager
 * License:     Creative Commons - Attribution-Noncommercial-Share Alike 3.0 Unported
 * Link:		    http://creativecommons.org/licenses/by-nc-sa/3.0/
 * -----------------------------------------------------------------------
 * Began:       2008
 * Date:        $Date: 2009-03-05 13:55:22 +0100 (Do, 05 Mrz 2009) $
 * ----------------------------------------------------------------------- 
 * @author      $Author: wallenium $
 * @copyright   2008 Simon (Wallenium) Wallmann
 * @link        http://eqdkp-plus.com
 * @package     libraries
 * @version     $Rev: 4117 $
 * 
 * $Id: libraries.core.php 4117 2009-03-05 12:55:22Z wallenium $
 */
 
if ( !defined('EQDKP_INC') ){
    header('HTTP/1.0 404 Not Found');exit;
}

$myLibCoreVersion = '1.0.4';

function CheckLibVersion($libname, $version_lib, $version_req, $libversion=0){
  global $user, $myLibCoreVersion;
  
  $libversion     = ($libversion != '0') ? $libversion : $version_req;
  
  // The static Language Files:
  $download_link  = 'https://sourceforge.net/project/showfiles.php?group_id=167016&package_id=301378';
  $langLibMain    = "Library Loader too old! Version ".$version_req." or higher required. 
                    <br/> Download: <a href='".$download_link."' target='blank'>Libraries Download</a><br/>
                    Please download, and overwrite the existing 'eqdkp/libraries/' folder with the one you downloaded.";
  $langLibPlug    = "The Library Module '".$libname."' is outdated. Version ".$version_req." or higher is required. 
                    This is included in the Libraries ".$libversion." or higher. Your current Libraries Version is ".$myLibCoreVersion."<br/> 
                    Download: <a href='".$download_link."' target='blank'>Libraries Download</a><br/>
                    Please download, and overwrite the existing 'eqdkp/libraries/' folder with the one you downloaded!";
  
  if($version_lib < $version_req){
    if($libname == 'LibraryCore'){
      $libnothere_txt = ($user->lang['libloader_tooold']) ? sprintf($user->lang['libloader_tooold'], $libname, $version_req, $download_link, $myLibCoreVersion) : $langLibMain;
    }else{
      $libnothere_txt = ($user->lang['libloader_tooold_plug']) ? sprintf($user->lang['libloader_tooold_plug'], $libname, $version_req, $download_link, $libversion, $myLibCoreVersion) : $langLibPlug;
    }
    message_die($libnothere_txt);
  }
}

function FolderIsValid($path){
  $ignore = array('.', '..', '.svn', 'CVS', 'cache', 'install', 'index.html', '.htaccess', 'dev docs');
  if (isset($path)){
    if (!is_file($path) && !is_link($path) && !in_array(basename($path), $ignore)){
      return true;
    }    	
  }
  return false;
}
?>
