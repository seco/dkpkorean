<?php
 /*
 * Project:     EQdkp Plugin WPFC Classes
 * License:     Creative Commons - Attribution-Noncommercial-Share Alike 3.0 Unported
 * Link:		    http://creativecommons.org/licenses/by-nc-sa/3.0/
 * -----------------------------------------------------------------------
 * Began:       2005
 * Date:        $Date: 2008-10-09 13:53:57 +0200 (Do, 09 Okt 2008) $
 * ----------------------------------------------------------------------- 
 * This Class is part of the "WalleniuMs Plugin (Developer) Framework Kit" WPFC. 
 * You can ask for permission and use this classes in your Plugins but not 
 * remove this Copyright  
 * -----------------------------------------------------------------------
 * @author      $Author: wallenium $
 * @copyright   2007-2008 Simon (Wallenium) Wallmann
 * @link        http://eqdkp-plus.com
 * @package     wpfc
 * @version     $Rev: 2787 $
 * 
 * $Id: init.pwc.php 2787 2008-10-09 11:53:57Z wallenium $
 */
 
if ( !defined('EQDKP_INC') ){
    header('HTTP/1.0 404 Not Found');exit;
}

if (!class_exists("InitWPFC")) {
  class InitWPFC {
    function InitWPFC($path_to_wpfc){
      global $user;
      $this->path_to_wpfc = $path_to_wpfc;
      $lang_file = $this->path_to_wpfc.'language/'.$user->lang_name.'.php';
      if ( file_exists($lang_file) ){
        include_once($lang_file);
        $user->lang = ( @is_array($lang) ) ? array_merge($user->lang, $lang) : $user->lang;
      }
      include_once($this->path_to_wpfc.'db.class.php');           // Load the Database Helper Class
      include_once($this->path_to_wpfc.'html.class.php');         // Load the html Class
      include_once($this->path_to_wpfc.'jquery.class.php');       // Load the jquery Class
      include_once($this->path_to_wpfc.'games.class.php');        // Load the games Class
      $jquery = new jQuery($this->path_to_wpfc); 
    }
    
    function InitJquery(){
      global $user;
      return  new jQuery($this->path_to_wpfc, $user->lang['ucc_shortlangtag']); 
    }
    
    function InitAdmin(){
      include_once($this->path_to_wpfc.'updater.class.php');
      include_once($this->path_to_wpfc.'updater2.class.php');
      include_once($this->path_to_wpfc.'updcheck.class.php');
    }
    
    function InitUpgradeWarn($pluginlist, $db_table, $db_fieldprefix){
      include_once($this->path_to_wpfc.'updatewarn.class.php');
      $uwarn = new PluginUpdWarn($pluginlist, $this->path_to_wpfc, $db_table, $db_fieldprefix);
      return $uwarn->OutputHTML();
    }
  }
}
?>
