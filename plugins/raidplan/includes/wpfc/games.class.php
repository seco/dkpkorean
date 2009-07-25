<?php
 /*
 * Project:     EQdkp Plugin WPFC Classes
 * License:     Creative Commons - Attribution-Noncommercial-Share Alike 3.0 Unported
 * Link:		    http://creativecommons.org/licenses/by-nc-sa/3.0/
 * -----------------------------------------------------------------------
 * Began:       2008
 * Date:        $Date: 2008-10-11 11:41:00 +0200 (Sa, 11 Okt 2008) $
 * ----------------------------------------------------------------------- 
 * This Class is part of the "WalleniuMs Plugin (Developer) Framework Kit" WPFC. 
 * You can ask for permission and use this classes in your Plugins but not 
 * remove this Copyright  
 * -----------------------------------------------------------------------
 * @author      $Author: wallenium $
 * @copyright   2007-2008 Simon (Wallenium) Wallmann
 * @link        http://eqdkp-plus.com
 * @package     wpfc
 * @version     $Rev: 2799 $
 * 
 * $Id: games.class.php 2799 2008-10-11 09:41:00Z wallenium $
 */

if ( !defined('EQDKP_INC') ){
    header('HTTP/1.0 404 Not Found');exit;
}

if (!class_exists("MyGames")) {
  class MyGames
  {
    var $version = '1.0.11'; // Version of this class
    var $gamelist = array(
                      'wow'           => 'wow',
                      'wow_german'    => 'wow',
                      'wow_english'   => 'wow',
                      
                      'lotro'         => 'lotro',
                      'lotro_german'  => 'lotro',
                      'lotro_english' => 'lotro',
                      
                      'vanguard-soh'  => 'vanguard',
                      'everquest'     => 'eq',
                      'everquest2'    => 'eq',
                      'aoc'           => 'aoc',
                    );
    
    // Get the actual game name
    function MyGames($gname=''){
      global $eqdkp;
      $gname = ($gname) ? strtolower($gname) : strtolower($eqdkp->config['default_game']);
    	$this->game = $this->gamelist[$gname];
    	return ($this->game) ? $this->game : $gname;
    }
  
    // Return the game name
    function GameName(){
      return $this->game;
    }
  }
}
?>
