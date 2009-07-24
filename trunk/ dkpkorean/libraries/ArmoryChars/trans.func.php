<?php
 /*
 * Project:     eqdkpPLUS Libraries: Armory
 * License:     Creative Commons - Attribution-Noncommercial-Share Alike 3.0 Unported
 * Link:		    http://creativecommons.org/licenses/by-nc-sa/3.0/
 * -----------------------------------------------------------------------
 * Began:       2007
 * Date:        $Date: 2008-11-17 16:35:58 +0100 (Mo, 17 Nov 2008) $
 * -----------------------------------------------------------------------
 * @author      $Author: wallenium $
 * @copyright   2008 Simon (Wallenium) Wallmann
 * @link        http://eqdkp-plus.com
 * @package     libraries:armory
 * @version     $Rev: 3169 $
 * 
 * $Id: jquery.class.php 3169 2008-11-17 15:35:58Z wallenium $
 */

$myDataArray = array(
  'Druide'                => 'Druid',
  'Hexenmeister'          => 'Warlock',
  'Jäger'                 => 'Hunter',
  'Krieger'               => 'Warrior',
  'Magier'                => 'Mage',
  'Paladin'               => 'Paladin',
  'Priester'              => 'Priest',
  'Schurke'               => 'Rogue',
  'Schamane'              => 'Shaman',
  'Todesritter'           => 'Death Knight',
  
  'Druide'                => 'Druid',
  'Démoniste'	            => 'Warlock',
  'Chasseur'              => 'Hunter',
  'Guerrier'              => 'Warrior',
  'Prêtre'                => 'Priest',
  'Voleur'                => 'Rogue',
  'Chaman'                => 'Shaman',
  'Chevalier de la mort'  => 'Death Knight',
  
  'Elfe de la nuit'       => 'Night Elf',
  'Gnome'                 => 'Gnome',
  'Humain'                => 'Human',
  'Nain'                  => 'Dwarf',
  'Troll'                 => 'Troll',
  'Mort-vivant'           => 'Undead',
  'Orc'                   => 'Orc',
  'Tauren'                => 'Tauren',
  'Draeneï'               => 'Draenei',
  'Elfe de sang'          => 'Blood Elf',

  'Nachtelf'              => 'Night Elf',
  'Gnom'                  => 'Gnome',
  'Mensch'                => 'Human',
  'Zwerg'                 => 'Dwarf',
  'Troll'                 => 'Troll',
  'Untoter'               => 'Undead',
  'Ork'                   => 'Orc',
  'Taure'                 => 'Tauren',
  'Draenei'               => 'Draenei',
  'Blutelf'               => 'Blood Elf',
);

function de_to_en($classname){
  global $myDataArray;
	return ($myDataArray[$classname]) ? $myDataArray[$classname] : $classname;
}
?>
