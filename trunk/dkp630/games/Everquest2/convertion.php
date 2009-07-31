<?php
 /*
 * Project:     EQdkp-Plus
 * License:     Creative Commons - Attribution-Noncommercial-Share Alike 3.0 Unported
 * Link:		http://creativecommons.org/licenses/by-nc-sa/3.0/
 * -----------------------------------------------------------------------
 * Began:       2008
 * Date:        $Date:  $
 * -----------------------------------------------------------------------
 * @author      $Author:  $
 * @copyright   2006-2008 Corgan - Stefan Knaak | Wallenium & the EQdkp-Plus Developer Team
 * @link        http://eqdkp-plus.com
 * @package     eqdkp-plus
 * @version     $Rev:  $
 * 
 * $Id:  $
 */

if ( !defined('EQDKP_INC') )
{
    header('HTTP/1.0 404 Not Found');
    exit;
}

// Convert the Classnames to english
$classconvert_array = array(
  'german'  => array(
      "Assassine"        => "Assassin",
      "Berserker"        => "Berserker",
      "Brigant"          => "Brigand",
      "Raufbold"         => "Bruiser",
      "Erzwinger"        => "Coercer",
      "Elementalist"     => "Conjuror",
      "Sch�nder"         => "Defiler",
      "Klages�nger"      => "Dirge",
      "Furie"            => "Fury",
      "W�chter"          => "Guardian",
      "Thaumaturgist"    => "Illusionist",
      "Inquisitor"       => "Inquisitor",
      "M�nch"            => "Monk",
      "Mystiker"         => "Mystic",
      "Nekromant"        => "Necromancer",
      "Paladin"          => "Paladin",
      "Waldl�ufer"       => "Ranger",
      "Schattenritter"   => "Shadowknight",
      "S�belrassler"     => "Swashbuckler",
      "Templer"          => "Templar",
      "Troubadour"       => "Troubador",
      "W�rter"           => "Warden",
      "Hexenmeister"     => "Warlock",
      "Zauberer"         => "Wizard",
  ),
);

?>
