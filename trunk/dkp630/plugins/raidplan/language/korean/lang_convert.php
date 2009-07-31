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
        '����̵�'          => 'Druid',
        '�����'         => 'Paladin',
        '�渶����'    => 'Warlock',
        '��ɲ�'           => 'Hunter',
        '����'         => 'Warrior',
        '������'          => 'Mage',
        '����'        => 'Priest',
        '����'         => 'Rogue',
        '�ּ���'        => 'Shaman',
        '������ ���'     => 'Death Knight'
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
        '��'       => 'Unknown',
  		'���'            => 'Gnome',
        '�ΰ�'          => 'Human',
        '�����'           => 'Dwarf',
        '����Ʈ����'        => 'Night Elf',
        '�𵥵�'         => 'Undead',
        '��ũ'             => 'Orc',
        'Ÿ�췻'           => 'Tauren'
      ),
    'aoc' => array(
        'Aquilonier'      => 'Aquilonian',
        'Cimmerier'       => 'Cimmerian',
        'Stygier'         => 'Stygian'
      )
    );

?>
