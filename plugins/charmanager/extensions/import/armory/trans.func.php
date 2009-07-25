<?php
 /*
 * Project:     EQdkp CharManager 1
 * License:     Creative Commons - Attribution-Noncommercial-Share Alike 3.0 Unported
 * Link:		    http://creativecommons.org/licenses/by-nc-sa/3.0/
 * -----------------------------------------------------------------------
 * Began:       2006
 * Date:        $Date: 2008-11-19 09:26:11 +0100 (Mi, 19 Nov 2008) $
 * -----------------------------------------------------------------------
 * @author      $Author: wallenium $
 * @copyright   2005-2008 Simon (Wallenium) Wallmann
 * @link        http://eqdkp-plus.com
 * @package     charmanager
 * @version     $Rev: 3189 $
 * 
 * $Id: trans.func.php 3189 2008-11-19 08:26:11Z wallenium $
 */

$myDataArray = array(
  'Druide'        => 'Druid',
  'Hexenmeister'  => 'Warlock',
  'Jäger'         => 'Hunter',
  'Krieger'       => 'Warrior',
  'Magier'        => 'Mage',
  'Paladin'       => 'Paladin',
  'Priester'      => 'Priest',
  'Schurke'       => 'Rogue',
  'Schamane'      => 'Shaman',
  'Todesritter'   => 'Death Knight',
  
  'Nachtelf'      => 'Night Elf',
  'Gnom'          => 'Gnome',
  'Mensch'        => 'Human',
  'Zwerg'         => 'Dwarf',
  'Troll'         => 'Troll',
  'Untoter'       => 'Undead',
  'Ork'           => 'Orc',
  'Taure'         => 'Tauren',
  'Draenei'       => 'Draenei',
  'Blutelf'       => 'Blood Elf',
);

function de_to_en($classname){
  global $myDataArray;
	return ($myDataArray[$classname]) ? $myDataArray[$classname] : $classname;
}
?>
