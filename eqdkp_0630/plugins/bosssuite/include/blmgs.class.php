<?php
 /*
 * Project:     BossSuite v4 MGS
 * License:     Creative Commons - Attribution-Noncommercial-Share Alike 3.0 Unported
 * Link:		    http://creativecommons.org/licenses/by-nc-sa/3.0/
 * -----------------------------------------------------------------------
 * Began:       2006
 * Date:        $Date: 2009-04-19 17:36:34 +0200 (So, 19 Apr 2009) $
 * -----------------------------------------------------------------------
 * @author      $Author: sz3 $
 * @copyright   2006-2008 sz3
 * @link        http://eqdkp-plus.com
 * @package     bosssuite
 * @version     $Rev: 4626 $
 *
 * $Id: blmgs.class.php 4626 2009-04-19 15:36:34Z sz3 $
 */

if ( !defined('EQDKP_INC') ){
  die('Do not access this file directly.');
}

if ( !class_exists( "BLMGS" ) ) {
  class BLMGS{
    var $game;
    var $user_lang;
    
    function BLMGS(){
      $this->game = $this->bl_get_current_game();
      $this->user_lang = $this->bl_get_current_language();
    }
    
    function bl_get_current_game(){
      global $eqdkp;
      $game_arr = explode('_', $eqdkp->config['default_game']);
      return $game_arr[0];
    }
  
    function bl_get_current_language(){
      global $user;
      return $user->lang_name;
    }
    
    
  
    function bl_get_language_strings(){
        require(dirname(__FILE__).'/../games/'.$this->game.'/lang/'.$this->user_lang.'/lang_bossloot.php');
        return $bl_lang;
    }
  
    function bl_game_supported(){
      return file_exists(dirname(__FILE__).'/../games/'.$this->game.'/index.php');
    }
  
    function bl_get_loottable($item_lang, $bossid, $item_minqual=0){
      $lootlistfile = dirname(__FILE__).'/../games/'.$this->game.'/lootlists/'.$item_lang.'/loot_'.$bossid.'.php';
      if ( ($item_lang != 'none') && (file_exists($lootlistfile)) ){
        require(dirname(__FILE__).'/../games/'.$this->game.'/lootlists/'.$item_lang.'/loot_'.$bossid.'.php');
        $rloot = array();
        foreach($loot as $item){
  	       if($item['qual'] >= $item_minqual)
  			       $rloot[$item['id']] =  $item['name'];
        }
        return $rloot;
      }else{
        return array();
      }
    }
       
    function bl_get_item_qualities(){
      $file = dirname(__FILE__).'/../games/'.$this->game.'/index.php';
      $item_quals = array('-1');
      
      if (file_exists($file)){
        require(dirname(__FILE__).'/../games/'.$this->game.'/index.php');
        $item_quals = array_merge($item_quals, $item_qualities); 
      }
      return $item_quals;
    }
    
    function bl_get_supported_item_languages(){
      $item_languages[] = 'none';
      if ($handle = opendir(dirname(__FILE__).'/../games/'.$this->game.'/lootlists')) {       
        while (false !== ($file = readdir($handle))) {
          if ($file != "." && $file != ".." && $file != ".svn" && $file != "index.html") {
            $item_languages[] = "$file";
          }
        }
      closedir($handle);
      }
      return $item_languages;
    }
    
    function bl_get_bossimage($bossid){
    global $user, $bs_image_map;
      if(isset($bs_image_map) && isset($bs_image_map[$bossid])){
        $bossid = $bs_image_map[$bossid];
      }
      if(isset($bs_image_suffix) && isset($bs_image_suffix['boss']['big'])){
        $suffix = $bs_image_suffix['boss']['big'];
      }else{
        $suffix = '.gif';
      }
      
      if (file_exists('games/'.$this->game.'/images/bosses/big/' . $bossid.$suffix)) {
        return '<img src="./games/'.$this->game.'/images/bosses/big/'.$bossid.$suffix.'" alt="'.$bossid.'" _base_target="_self">';
      }else{
        return '<img src="./games/default/images/bosses/big/unknown.gif" alt="'.$bossid.'" _base_target="_self"><br />'.$user->lang['bs_image_not_found'];
      }
    }
    
    function bl_get_bossmodel($bossid){
      include('./games/'.$this->game.'/linklist.php');
      $mv = array_pop($modelviewer);
      $rid = $idlist[$mv['idlist']][$bossid];
      
      if(!isset($rid) || empty($rid)){
        //fallback
        return $this->bl_get_bossimage($bossid);
      }else{
        return sprintf($mv['object'], $rid);
      }
    }
    

    function bl_get_lootlist_credits($lootlist){
        global $user;
        $creditsfile = dirname(__FILE__).'/../games/'.$this->game.'/lootlists/'.$lootlist.'/credits.php';
        if (file_exists($creditsfile)){
            require($creditsfile);  
            $llcredit = ( !($credits[$this->user_lang] == '') ) ? $credits[$this->user_lang] : reset($credits);
            return $llcredit;
        }else{
            return $user->lang['bl_no_lootlist_credits'];
        }
    }
    
    function bl_get_bossimages_credits(){
        global $user;
        $creditsfile = dirname(__FILE__).'/../games/'.$this->game.'/images/bosses/big/credits.php';
        if (file_exists($creditsfile)){
            require($creditsfile);  
            $bicredit = ( !($credits[$this->user_lang] == '') ) ? $credits[$this->user_lang] : reset($credits);
            return $bicredit;
        }else{
            return $user->lang['bl_no_bossimages_credits'];
        }
    }
    
    function modelviewer_supported(){
      $file = dirname(__FILE__).'/../games/'.$this->game.'/index.php';     
      if (file_exists($file)){
        require(dirname(__FILE__).'/../games/'.$this->game.'/index.php');
        if ( !isset($mv_support) )
          return false;
        return $mv_support; 
      }
    }
    
  }
}

?>
