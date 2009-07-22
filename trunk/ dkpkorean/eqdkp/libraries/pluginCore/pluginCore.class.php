<?php
 /*
 * Project:     eqdkpPLUS Libraries: pluginCore
 * License:     Creative Commons - Attribution-Noncommercial-Share Alike 3.0 Unported
 * Link:		    http://creativecommons.org/licenses/by-nc-sa/3.0/
 * -----------------------------------------------------------------------
 * Began:       2008
 * Date:        $Date: 2009-02-21 16:54:02 +0100 (Sa, 21 Feb 2009) $
 * -----------------------------------------------------------------------
 * @author      $Author: wallenium $
 * @copyright   2008 Simon (Wallenium) Wallmann
 * @link        http://eqdkp-plus.com
 * @package     libraries:pluginCore
 * @version     $Rev: 3927 $
 * 
 * $Id: pluginCore.class.php 3927 2009-02-21 15:54:02Z wallenium $
 */
 
if ( !defined('EQDKP_INC') ){
    header('HTTP/1.0 404 Not Found');exit;
}

if (!class_exists("pluginCore")) {
  class pluginCore {
    
    var $version  = '1.0.3';
  
    function pluginCore(){
      global $user, $eqdkp_root_path;
      $this->path2lib = $eqdkp_root_path.'libraries/pluginCore/';
      
      // Language
      $lang_file = $this->path2lib.'language/'.$user->lang_name.'.php';
      if ( file_exists($lang_file) ){
        include_once($lang_file);
        $user->lang = ( @is_array($lang) ) ? array_merge($user->lang, $lang) : $user->lang;
      }
      
      include_once($this->path2lib.'db.class.php');           // Load the Database Helper Class
      include_once($this->path2lib.'html.class.php');         // Load the html Class
      include_once($this->path2lib.'games.class.php');        // Load the games Class
    }
    
    function InitAdmin(){
      include_once($this->path2lib.'updater.class.php');
      include_once($this->path2lib.'updcheck.class.php');
    }
  }
}
?>
