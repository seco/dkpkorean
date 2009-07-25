<?php
 /*
 * Project:     EQdkp RaidPlanner
 * License:     Creative Commons - Attribution-Noncommercial-Share Alike 3.0 Unported
 * Link:		    http://creativecommons.org/licenses/by-nc-sa/3.0/
 * -----------------------------------------------------------------------
 * Began:       2005
 * Date:        $Date: 2009-04-26 23:08:06 +0200 (So, 26 Apr 2009) $
 * -----------------------------------------------------------------------
 * @author      $Author: wallenium $
 * @copyright   2005-2008 Simon (Wallenium) Wallmann
 * @link        http://eqdkp-plus.com
 * @package     raidplan
 * @version     $Rev: 4666 $
 * 
 * $Id: lang_convert.php 4666 2009-04-26 21:08:06Z wallenium $
 */
 
if ( !defined('EQDKP_INC') ){
    header('HTTP/1.0 404 Not Found');exit;
}

// The Class Name Convertion array
$classconversion = array(
    'eq' => array(
        'Raufbold'        => 'Bruiser',
        'M�nch'           => 'Monk',
        'W�chter'         => 'Guardian',
        'Schattenritter'  => 'Shadowknight',
        'Erzwinger'       => 'Coercer',
        'Zauberer'        => 'Wizard',
        'Hexenmeister'    => 'Warlock',
        'Nekromant'       => 'Necromancer',
        'Thaumaturge'     => 'Illusionist',
        'Elementalist'    => 'Conjuror',
        'Templer'         => 'Templar',
       	'W�rter'          => 'Warden',
        'Sch�nder'        => 'Defiler',
        'Mystiker'        => 'Mystic',
        'Furie'           => 'Fury',
        'S�belrassler'    => 'Swashbuckler',
        'Brigant'         => 'Brigand',
        'Klages�nger'     => 'Dirge',
        'Troubadour'      => 'Troubador',
        'Waldl�ufer'      => 'Ranger',
        'Assassine'       => 'Assassin'
      ),
    'wow' => array(
        'Druide'          => 'Druid',
        'Paladin'         => 'Paladin',
        'Hexenmeister'    => 'Warlock',
        'J�ger'           => 'Hunter',
        'Krieger'         => 'Warrior',
        'Magier'          => 'Mage',
        'Priester'        => 'Priest',
        'Schurke'         => 'Rogue',
        'Schamane'        => 'Shaman',
        'Todesritter'     => 'DeathKnight'
      ),
    'lotro' => array(
        'Barde'           => 'Minstrel',
        'Hauptmann'       => 'Captain',
        'J�ger'           => 'Hunter',
        'Kundiger'        => 'Lore-master',
        'Schurke'         => 'Burglar',
        'W�chter'         => 'Guardian',
        'Waffenmeister'   => 'Champion',
        'Runenbewahrer'   => 'Runekeeper',
        'H�ter'		  => 'Warden'
      ),
    'aoc' => array(
        'Assassin'        => 'Assassin',
        'Barbar'          => 'Barbarian',
        'Waldl�ufer'      => 'Ranger',
        'Eroberer'        => 'Conqueror',
        'W�chter'         => 'Guardian',
        'Dunkler Templer' => 'Dark Templar',
        'D�monologe'      => 'Demonologist',
        'Herold des Xotli'=> 'Herald of Xotli',
        'Nekromant'       => 'Necromancer',
        'Mitrapriester'   => 'Priest of Mitra',
        'B�renschamane'   => 'Bear Shaman',
        'Vollstrecker Sets'=> 'Tempest of Set',
      )
    );

// The Racename convertion Array
$raceconversion = array(
    'eq' => array(
        'Barbar'          => 'Barbarian',
        'Hochelf'         => 'High Elf',
        'Dunkelelf'       => 'Dark Elf',
        'Waldelf'         => 'Wood Elf',
        'Halbelf'         => 'Half Elf',
        'Kerraner'        => 'Kerra',
        'Oger'            => 'Ogre',
        'Froschlog'       => 'Froglok',
        'Erudit'          => 'Erudite',
        'Halbling'        => 'Halfling',
        'Fee'             => 'Fae',
        'Gnom'            => 'Gnome',
        'Zwerg'           => 'Dwarf',
        'Mensch'          => 'Human',
        'Rattonga'        => 'Ratonga'
      ),
    'wow' => array(
        'Unbekannt'       => 'Unknown',
  			'Gnom'            => 'Gnome',
        'Mensch'          => 'Human',
        'Zwerg'           => 'Dwarf',
        'Nachtelf'        => 'Night Elf',
        'Untoter'         => 'Undead',
        'Ork'             => 'Orc',
        'Taure'           => 'Tauren'
      ),
    'aoc' => array(
        'Aquilonier'      => 'Aquilonian',
        'Cimmerier'       => 'Cimmerian',
        'Stygier'         => 'Stygian'
      )
    );

?>
