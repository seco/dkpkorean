<?php
 /*
 * Project:     EQdkp-Plus
 * License:     Creative Commons - Attribution-Noncommercial-Share Alike 3.0 Unported
 * Link:		http://creativecommons.org/licenses/by-nc-sa/3.0/
 * -----------------------------------------------------------------------
 * Began:       2008
 * Date:        $Date: 2009-03-10 07:43:44 +0900 (화, 10 3 2009) $
 * -----------------------------------------------------------------------
 * @author      $Author: osr-corgan $
 * @copyright   2006-2008 Corgan - Stefan Knaak | Wallenium & the EQdkp-Plus Developer Team
 * @link        http://eqdkp-plus.com
 * @package     eqdkp-plus
 * @version     $Rev: 4164 $
 * 
 * $Id: index.php 4164 2009-03-09 22:43:44Z osr-corgan $
 */

if ( !defined('EQDKP_INC') )
{
    header('HTTP/1.0 404 Not Found');
    exit;
}

class Manage_Game
{
  var $gamename = 'Everquest2';
  var $maxlevel = 80;
  var $version  = '1.1';

  function do_it($install,$lang)
  {
    global $db;
    if($lang == 'de')
	{
	  $classes = array(
        array('Beliebig','Beliebig',0,0),
        array('Assassine', 'Kette',1,80),
        array('Berserker', 'Platte',1,80),
        array('Brigant', 'Kette',1,80),
        array('Raufbold', 'Leder',1,80),
        array('Erzwinger', 'Stoff',1,80),
        array('Elementalist', 'Stoff',1,80),
        array('Sch�nder', 'Kette',1,80),
        array('Klages�nger', 'Kette',1,80),
        array('Furie', 'Leder',1,80),
        array('W�chter', 'Platte',1,80),
        array('Thaumaturgist', 'Stoff',1,80),
        array('Inquisitor', 'Platte',1,80),
        array('M�nch', 'Leder',1,80),
        array('Mystiker', 'Kette',1,80),
        array('Nekromant', 'Stoff',1,80),
        array('Paladin', 'Platte',1,80),
        array('Waldl�ufer', 'Kette',1,80),
        array('Schattenritter', 'Platte',1,80),
        array('S�belrassler', 'Kette',1,80),
        array('Templer', 'Platte',1,80),
        array('Troubadour', 'Kette',1,80),
        array('W�rter', 'Leder',1,80),
        array('Hexenmeister', 'Stoff',1,80),
        array('Zauberer', 'Stoff',1,80)
      );

      $races = array(
        'Unbekannt',
        'Sarnak',
        'Gnom',
        'Mensch',
        'Barbar',
        'Zwerg',
        'Hochelf',
        'Dunkelelf',
        'Waldelf',
        'Halbelf',
        'Kerraner',
        'Troll',
        'Oger',
        'Froschlok',
        'Erudit',
        'Iksar',
        'Rattonga',
        'Halbling',
        'Arasai',
        'Fee'
      );

      $factions = array(
        'Gut',
        'B�se',
        'Neutral'
      );

      // The Class colors
      $classColorsCSS = array(
        'Beliebig'        => '#E1E1E1',
        'Assassine'       => '#E1E100',
        'Berserker'       => '#E10000',
        'Brigant'         => '#E1E100',
        'Raufbold'        => '#E10000',
        'Erzwinger'       => '#0000E1',
        'Elementalist'    => '#0000E1',
        'Sch�nder'        => '#00E100',
        'Klages�nger'     => '#E1E100',
        'Furie'           => '#00E100',
        'W�chter'         => '#E10000',
        'Thaumaturgist'   => '#0000E1',
        'Inquisitor'      => '#00E100',
        'M�nch'           => '#E10000',
        'Mystiker'        => '#00E100',
        'Nekromant'       => '#0000E1',
        'Paladin'         => '#E10000',
        'Waldl�ufer'      => '#E1E100',
        'Schattenritter'  => '#E10000',
        'S�belrassler'    => '#E1E100',
        'Templer'         => '#00E100',
        'Troubadour'      => '#E1E100',
        'W�rter'          => '#00E100',
        'Hexenmeister'    => '#0000E1',
        'Zauberer'        => '#0000E1',
      );
    } else {
	  $classes = array(
        array('Unknown','Unknown',0,0),
        array('Assassin', 'Medium',1,80),
        array('Berserker', 'Heavy',1,80),
        array('Brigand', 'Medium',1,80),
        array('Bruiser', 'Light',1,80),
        array('Coercer', 'VeryLight',1,80),
        array('Conjuror', 'VeryLight',1,80),
        array('Defiler', 'Medium',1,80),
        array('Dirge', 'Medium',1,80),
        array('Fury', 'Light',1,80),
        array('Guardian', 'Heavy',1,80),
        array('Illusionist', 'VeryLight',1,80),
        array('Inquisitor', 'Heavy',1,80),
        array('Monk', 'Light',1,80),
        array('Mystic', 'Medium',1,80),
        array('Necromancer', 'VeryLight',1,80),
        array('Paladin', 'Heavy',1,80),
        array('Ranger', 'Medium',1,80),
        array('Shadowknight', 'Heavy',1,80),
        array('Swashbuckler', 'Medium',1,80),
        array('Templar', 'Heavy',1,80),
        array('Troubador', 'Medium',1,80),
        array('Warden', 'Light',1,80),
        array('Warlock', 'VeryLight',1,80),
        array('Wizard', 'VeryLight',1,80)
      );

      $races = array(
        'Unknown',
        'Sarnak',
        'Gnome',
        'Human',
        'Barbarian',
        'Dwarf',
        'High Elf',
        'Dark Elf',
        'Wood Elf',
        'Half Elf',
        'Kerra',
        'Troll',
        'Ogre',
        'Froglok',
        'Erudite',
        'Iksar',
        'Ratonga',
        'Halfling',
        'Arasai',
        'Fae'
      );

      $factions = array(
        'Good',
        'Evil',
        'Neutral'
      );

      // The Class colors
      $classColorsCSS = array(
        'Unknown'       => '#E1E1E1',
        'Assassin'      => '#E1E100',
        'Berserker'     => '#E10000',
        'Brigand'       => '#E1E100',
        'Bruiser'       => '#E10000',
        'Coercer'       => '#0000E1',
        'Conjuror'      => '#0000E1',
        'Defiler'       => '#00E100',
        'Dirge'         => '#E1E100',
        'Fury'          => '#00E100',
        'Guardian'      => '#E10000',
        'Illusionist'   => '#0000E1',
        'Inquisitor'    => '#00E100',
        'Monk'          => '#E10000',
        'Mystic'        => '#00E100',
        'Necromancer'   => '#0000E1',
        'Paladin'       => '#E10000',
        'Ranger'        => '#E1E100',
        'Shadowknight'  => '#E10000',
        'Swashbuckler'  => '#E1E100',
        'Templar'       => '#00E100',
        'Troubador'     => '#E1E100',
        'Warden'        => '#00E100',
        'Warlock'       => '#0000E1',
        'Wizard'        => '#0000E1',
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
      'class_colors'  => $classColorsCSS,
      'max_level'     => $this->maxlevel,
      'add_sql'       => $aq,
      'version'       => $this->version,
    );
    
    $gmanager->ChangeGame($this->gamename, $game_config, $lang);
   }
}

?>
