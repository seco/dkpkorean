<?php
 /*
 * Project:     EQdkp-Plus
 * License:     Creative Commons - Attribution-Noncommercial-Share Alike 3.0 Unported
 * Link:		http://creativecommons.org/licenses/by-nc-sa/3.0/
 * -----------------------------------------------------------------------
 * Began:       2008
 * Date:        $Date: 2009-03-11 10:29:03 +0900 (수, 11 3 2009) $
 * -----------------------------------------------------------------------
 * @author      $Author: osr-corgan $
 * @copyright   2006-2008 Corgan - Stefan Knaak | Wallenium & the EQdkp-Plus Developer Team
 * @link        http://eqdkp-plus.com
 * @package     eqdkp-plus
 * @version     $Rev: 4184 $
 * 
 * $Id: convertion.php 4184 2009-03-11 01:29:03Z osr-corgan $
 */

if ( !defined('EQDKP_INC') )
{
    header('HTTP/1.0 404 Not Found');
    exit;
}

// Convert the Classnames to english
$classconvert_array = array(
  'german'  => array(
        "Druide"          => "Druid",
        "Hexenmeister"    => "Warlock",
        "J�ger"           => "Hunter",
        "Krieger"         => "Warrior",
        "Magier"          => "Mage",
        "Paladin"         => "Paladin",
        "Priester"        => "Priest",
        "Schurke"         => "Rogue",
        "Schamane"        => "Shaman",        
        "Todesritter"     => "Death Knight"
  ),
  'french'  => array(
        "Druide"          => "Druid",
        "D�moniste"    => "Warlock",
        "Chasseur"           => "Hunter",
        "Guerrier"         => "Warrior",
        "Mage"          => "Mage",
        "Paladin"         => "Paladin",
        "Pr�tre"        => "Priest",
        "Voleur"         => "Rogue",
        "Chaman"        => "Shaman",        
        "Chevalier de la mort"     => "Death Knight"
  ),
  'russian'  => array(
        "���������"       => "Druid",
        "�������"           => "Warlock",
        "����"              => "Hunter",
        "�����"             => "Warrior",
        "�����"             => "Mage",
        "������"            => "Paladin",
        "���"               => "Priest",
        "����"              => "Rogue",
        "�������"           => "Shaman",
        "Todesritter"     	=> "Death Knight",
  )
);

?>
