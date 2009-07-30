<?php
 /*
 * Project:     eqdkpPLUS Library Manager
 * License:     Creative Commons - Attribution-Noncommercial-Share Alike 3.0 Unported
 * Link:		    http://creativecommons.org/licenses/by-nc-sa/3.0/
 * -----------------------------------------------------------------------
 * Began:       2008
 * Date:        $Date: 2009-03-05 21:54:06 +0900 (목, 05 3 2009) $
 * ----------------------------------------------------------------------- 
 * @author      $Author: wallenium $
 * @copyright   2008 Simon (Wallenium) Wallmann
 * @link        http://eqdkp-plus.com
 * @package     libraries
 * @version     $Rev: 4116 $
 * 
 * $Id: libraries.php4.php 4116 2009-03-05 12:54:06Z wallenium $
 */
 
if ( !defined('EQDKP_INC') ){
    header('HTTP/1.0 404 Not Found');exit;
}

require($eqdkp_root_path . 'libraries/libraries.core.php');

// Load the required Library Modules
$libdirs = array();
if ( $dir = opendir($eqdkp_root_path . 'libraries/') ){
  while ( $d_lib_code = @readdir($dir) ){
    if($d_lib_code != 'ArmoryChars'){
      $cwd = $eqdkp_root_path . 'libraries/'.$d_lib_code.'/'.$d_lib_code.'.class.php'; // regenerate the link to the 'plugin'
      if((@is_file($cwd)) && FolderIsValid($d_lib_code)){  // check if valid
          require_once($cwd);
      }
    }
  }
}
?>
