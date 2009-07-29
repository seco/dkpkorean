<?php
 /*
 * Project:     eqdkpPLUS Library Manager
 * License:     Creative Commons - Attribution-Noncommercial-Share Alike 3.0 Unported
 * Link:		    http://creativecommons.org/licenses/by-nc-sa/3.0/
 * -----------------------------------------------------------------------
 * Began:       2008
 * Date:        $Date: 2009-03-05 13:54:06 +0100 (Do, 05 Mrz 2009) $
 * ----------------------------------------------------------------------- 
 * @author      $Author: wallenium $
 * @copyright   2008 Simon (Wallenium) Wallmann
 * @link        http://eqdkp-plus.com
 * @package     libraries
 * @version     $Rev: 4116 $
 * 
 * $Id: libraries.php5.php 4116 2009-03-05 12:54:06Z wallenium $
 */
 
if ( !defined('EQDKP_INC') ){
    header('HTTP/1.0 404 Not Found');exit;
}

require($eqdkp_root_path . 'libraries/libraries.core.php');

$libdirs = array();
if ( $dir = opendir($eqdkp_root_path . 'libraries/') ){
  while ( $d_lib_code = @readdir($dir) ){
    $cwd = $eqdkp_root_path . 'libraries/'.$d_lib_code.'/'.$d_lib_code.'.class.php'; // regenerate the link to the 'plugin'
    if((@is_file($cwd)) && FolderIsValid($d_lib_code)){  // check if valid
        @array_push($libdirs, $d_lib_code);  // add to array
    }
  }
}

function __autoload($class_name) {
  global $eqdkp_root_path, $libdirs;
  if(in_array($class_name, $libdirs)){
    $myFile = $eqdkp_root_path.'libraries/'.$class_name.'/'.$class_name.'.class.php';
    if(file_exists($myFile)){
      require_once $myFile;
    }
  }
}
?>
