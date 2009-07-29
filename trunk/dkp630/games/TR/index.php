<?php
 /*
 * Project:     EQdkp-Plus
 * License:     Creative Commons - Attribution-Noncommercial-Share Alike 3.0 Unported
 * Link:		http://creativecommons.org/licenses/by-nc-sa/3.0/
 * -----------------------------------------------------------------------
 * Began:       2008
 * Date:        $Date: 2009-01-14 12:12:58 +0100 (Mi, 14 Jan 2009) $
 * -----------------------------------------------------------------------
 * @author      $Author: wallenium $
 * @copyright   2006-2008 Corgan - Stefan Knaak | Wallenium & the EQdkp-Plus Developer Team
 * @link        http://eqdkp-plus.com
 * @package     eqdkp-plus
 * @version     $Rev: 3575 $
 * 
 * $Id: index.php 3575 2009-01-14 11:12:58Z wallenium $
 */

if ( !defined('EQDKP_INC') )
{
    header('HTTP/1.0 404 Not Found');
    exit;
}

class Manage_Game
{
  var $gamename = 'TR';
  var $maxlevel = 50;
  var $version  = '1.0';

  function do_it($install,$lang)
  {
    global $db;
    if($lang == 'de')
    {
      $classes = array(
        array('Unknown', 'Motor Assist',0,50),
        array('Soldat', 'Reflexionspanzerung',5,14),
        array('Spezialist', 'Hazmatpanzerung',5,14),
        array('Kommandosoldat', 'Gravitationspanzerung',15,29),
        array('Aufkl�rer', 'Tarnpanzerung',15,29),
        array('Pionier', 'Mech-Panzerung',15,29),
        array('Biotechniker', 'Organische Panzerung',15,29),
        array('Grenadier', 'Gravitationspanzerung',30,50),
        array('Gardist', 'Gravitationspanzerung',30,50),
        array('Spion', 'Tarnpanzerung',30,50),
        array('Scharfsch�tze', 'Tarnpanzerung',30,50),
        array('Saboteur', 'Mech-Panzerung',30,50),
        array('Ingenieur', 'Mech-Panzerung',30,50),
        array('Mikrobiologe', 'Organische Panzerung',30,50),
        array('Xenobiologe', 'Organische Panzerung',30,50)
      );

      $races = array(
        'Unknown',
        'Mensch'
      );

      $factions = array(
        'AFS'
      );
    }else{
      $classes = array(
        array('Unknown', 'Plate',0,50),
        array('Recruit', 'Motor Assist',0,4),
        array('Soldier', 'Reflective Armor',5,14),
        array('Specialist', 'Hazmat Suit',5,14),
        array('Commando', 'Graviton Armor',15,29),
        array('Ranger', 'Stealth Armor',15,29),
        array('Sapper', 'Mech Body Armor',15,29),
        array('Biotechnician', 'Bio Suit',15,29),
        array('Grenadier', 'Graviton Armor',30,50),
        array('Guardian', 'Graviton Body Armor',30,50),
        array('Spy', 'Stealth Body Armor',30,50),
        array('Sniper', 'Stealth Body Armor',30,50),
        array('Demolitionist', 'Mech Body Armor',30,50),
        array('Engineer', 'Mech Body Armor',30,50),
        array('Medic', 'Bio Body Armor',30,50),
        array('Exobiologist', 'Bio Body Armor',30,50)
      );

      $races = array(
        'Unknown',
        'Human'
      );

      $factions = array(
        'AFS'
      );
    }
    
    //lets do some tweak on the templates dependent on the game
    $aq =  array();
    array_push($aq, "UPDATE __style_config SET logo_path='logo_plus.gif' WHERE logo_path='bc_header3.gif' ;");
    array_push($aq, "UPDATE __style_config SET logo_path='/logo/logo_plus.gif' WHERE logo_path='/logo/logo_wow.gif' ;");
    array_push($aq, "UPDATE __style_config SET logo_path='logo_plus.gif' WHERE logo_path='logo_wow.gif' ;" );

    //Do this SQL Query NOT if the Eqdkp is installed -> only @ the first install
    if($install)
    {
    	array_push($aq, "UPDATE __config SET config_value = 32 WHERE config_name='default_style' ;");
    	array_push($aq, "UPDATE __users SET user_style = '32' ;");
    }

    //Itemstats
    array_push($aq, "UPDATE __plus_config SET config_value = '0' WHERE config_name = 'pk_itemstats' ;");
    array_push($aq, "UPDATE __plus_config SET config_value = '0' WHERE config_name = 'pk_is_autosearch' ;");


    // this is the fix stuff.. instert the new information
    // into the database. moved it to a new class, its easier to
    // handle
    $gmanager = new GameManagerPlus();
    $game_config = array(
      'classes'       => $classes,
      'races'         => $races,
      'factions'      => $factions,
      'class_colors'  => false,
      'max_level'     => $this->maxlevel,
      'add_sql'       => $aq,
      'version'       => $this->version,
    );
    
    $gmanager->ChangeGame($this->gamename, $game_config, $lang);
   }
}

?>
