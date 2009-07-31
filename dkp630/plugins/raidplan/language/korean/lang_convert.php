<?php
 /*
 * Project:     EQdkp RaidPlanner
 * License:     Creative Commons - Attribution-Noncommercial-Share Alike 3.0 Unported
 * Link:		    http://creativecommons.org/licenses/by-nc-sa/3.0/
 * -----------------------------------------------------------------------
 * Began:       2005
 * Date:        $Date: 2009-01-11 14:08:26 +0100 (So, 11 Jan 2009) $
 * -----------------------------------------------------------------------
 * @author      $Author: wallenium $
 * @copyright   2005-2008 Simon (Wallenium) Wallmann
 * @link        http://eqdkp-plus.com
 * @package     raidplan
 * @version     $Rev: 3561 $
 * 
 * $Id: lang_convert.php 3561 2009-01-11 13:08:26Z wallenium $
 */
 
if ( !defined('EQDKP_INC') ){
    header('HTTP/1.0 404 Not Found');exit;
}

// The Class Name Convertion array
$classconversion = array(
    'eq' => array(
        'Raufbold'        => 'Bruiser',
        'M?ch'           => 'Monk',
        'W?hter'         => 'Guardian',
        'Schattenritter'  => 'Shadowknight',
        'Erzwinger'       => 'Coercer',
        'Zauberer'        => 'Wizard',
        'Hexenmeister'    => 'Warlock',
        'Nekromant'       => 'Necromancer',
        'Thaumaturge'     => 'Illusionist',
        'Elementalist'    => 'Conjuror',
        'Templer'         => 'Templar',
       	'W?ter'          => 'Warden',
        'Sch?der'        => 'Defiler',
        'Mystiker'        => 'Mystic',
        'Furie'           => 'Fury',
        'S?elrassler'    => 'Swashbuckler',
        'Brigant'         => 'Brigand',
        'Klages?ger'     => 'Dirge',
        'Troubadour'      => 'Troubador',
        'Waldl?fer'      => 'Ranger',
        'Assassine'       => 'Assassin'
      ),
    'wow' => array(
        '드루이드'          => 'Druid',
        '성기사'         => 'Paladin',
        '흑마법사'    => 'Warlock',
        '사냥꾼'           => 'Hunter',
        '전사'         => 'Warrior',
        '마법사'          => 'Mage',
        '사제'        => 'Priest',
        '도적'         => 'Rogue',
        '주술사'        => 'Shaman',
        '죽음의 기사'     => 'Death Knight'
      ),
    'lotro' => array(
        'Barde'           => 'Minstrel',
        'Hauptmann'       => 'Captain',
        'J?er'           => 'Hunter',
        'Kundiger'        => 'Lore-master',
        'Schurke'         => 'Burglar',
        'W?hter'         => 'Guardian',
        'Waffenmeister'   => 'Champion',
        'Runenbewahrer'   => 'Runekeeper',
        'H?er'		  => 'Warden'
      ),
    'aoc' => array(
        'Assassin'        => 'Assassin',
        'Barbar'          => 'Barbarian',
        'Waldl?fer'      => 'Ranger',
        'Eroberer'        => 'Conqueror',
        'W?hter'         => 'Dark Templar',
        'Dunkler Templer' => 'Guardian',
        'D?onologe'      => 'Demonologist',
        'Herold des Xotli'=> 'Herald of Xotli',
        'Nekromant'       => 'Necromancer',
        'Mitrapriester'   => 'Priest of Mitra',
        'B?enschamane'   => 'Bear Shaman',
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
        '모름'       => 'Unknown',
  		'노움'            => 'Gnome',
        '인간'          => 'Human',
        '드워프'           => 'Dwarf',
        '나이트엘프'        => 'Night Elf',
        '언데드'         => 'Undead',
        '오크'             => 'Orc',
        '타우렌'           => 'Tauren'
      ),
    'aoc' => array(
        'Aquilonier'      => 'Aquilonian',
        'Cimmerier'       => 'Cimmerian',
        'Stygier'         => 'Stygian'
      )
    );

?>
