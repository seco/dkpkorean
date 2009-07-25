<?php
 /*
 * Project:     EQdkp ItemSpecials
 * License:     Creative Commons - Attribution-Noncommercial-Share Alike 3.0 Unported
 * Link:		    http://creativecommons.org/licenses/by-nc-sa/3.0/
 * -----------------------------------------------------------------------
 * Began:       2006
 * Date:        $Date: 2009-01-06 17:30:34 +0100 (Di, 06 Jan 2009) $
 * -----------------------------------------------------------------------
 * @author      $Author: wallenium $
 * @copyright   2005-2008 Simon (Wallenium) Wallmann
 * @link        http://eqdkp-plus.com
 * @package     itemspecials
 * @version     $Rev: 3552 $
 * 
 * $Id: tier6.php 3552 2009-01-06 16:30:34Z wallenium $
 */
 
if ( !defined('EQDKP_INC') ){
  header('HTTP/1.0 404 Not Found');exit;
} 

// Tier Data
$tier_config["tier6"] = array(
      'language'      => 'de',
      'real_name'     => 'Tier 6',
      'pieces_total'  => 8,
      'name'          => array(
                          '12'      => 'Onslaught Battlegear',
                          '13'      => 'Lightbringer Armor',
                          '4'       => 'Gronnstalker\'s Armor',
                          '10'      => 'Malefic Raiment',
                          '6'       => 'Absolution Regalia',
                          '11'      => 'Tempest Regalia',
                          '2'       => 'Slayer\'s Armor',
                          '9'       => 'Skyshatter Regalia',
                          '7'       => 'Thunderheart Raiment',
                          '20'      => '--'
                        ),
      'head_names'    => array(
                          1 => $user->lang['is_Head'],
                          2 => $user->lang['is_Shoulders'],
                          3 => $user->lang['is_Chest'],
                          4 => $user->lang['is_Legs'],
                          5 => $user->lang['is_Hands'],
                          6 => $user->lang['is_Belt'],
                          7 => $user->lang['is_Wrist'],
                          8 => $user->lang['is_Boots'],
                        ),
      'data'          => array(
                          '12' => array(
                                  'Helm of the Forgotten Protector',
                                  'Pauldrons of the Forgotten Protector',
                                  'Chestguard of the Forgotten Protector',
                                  'Leggings of the Forgotten Protector',
                                  'Gloves of the Forgotten Protector',
                              		'Belt of the Forgotten Protector',
                              		'Bracers of the Forgotten Protector',
                              		'Boots of the Forgotten Protector',
                          ),
                          '13' => array(
                                  'Helm of the Forgotten Protector',
                                  'Pauldrons of the Forgotten Protector',
                                  'Chestguard of the Forgotten Protector',
                                  'Leggings of the Forgotten Protector',
                                  'Gloves of the Forgotten Protector',
                              		'Belt of the Forgotten Protector',
                              		'Bracers of the Forgotten Protector',
                              		'Boots of the Forgotten Protector',
                          ),
                          '9' => array(
                                  'Helm of the Forgotten Protector',
                                  'Pauldrons of the Forgotten Protector',
                                  'Chestguard of the Forgotten Protector',
                                  'Leggings of the Forgotten Conqueror',
                                  'Gloves of the Forgotten Protector',
                              		'Belt of the Forgotten Protector',
                              		'Bracers of the Forgotten Protector',
                              		'Boots of the Forgotten Protector',
                          ),
                          '4' => array(
                                  'Helm of the Forgotten Conqueror',
                                  'Pauldrons of the Forgotten Conqueror',
                                  'Chestguard of the Forgotten Conqueror',
                                  'Leggings of the Forgotten Conqueror',
                                  'Gloves of the Forgotten Conqueror',
                              		'Belt of the Forgotten Conqueror',
                              		'Bracers of the Forgotten Conqueror',
                              		'Boots of the Forgotten Conqueror',
                          ),
                          '10' => array(
                                  'Helm of the Forgotten Conqueror',
                                  'Pauldrons of the Forgotten Conqueror',
                                  'Chestguard of the Forgotten Conqueror',
                                  'Leggings of the Forgotten Conqueror',
                                  'Gloves of the Forgotten Conqueror',
                              		'Belt of the Forgotten Conqueror',
                              		'Bracers of the Forgotten Conqueror',
                              		'Boots of the Forgotten Conqueror',
                          ),
                          '6' => array(
                                  'Helm of the Forgotten Conqueror',
                                  'Pauldrons of the Forgotten Conqueror',
                                  'Chestguard of the Forgotten Conqueror',
                                  'Leggings of the Forgotten Conqueror',
                                  'Gloves of the Forgotten Conqueror',
                              		'Belt of the Forgotten Conqueror',
                              		'Bracers of the Forgotten Conqueror',
                              		'Boots of the Forgotten Conqueror',
                          ),
                          '11' => array(
                                  'Helm of the Forgotten Vanquisher',
                                  'Pauldrons of the Forgotten Vanquisher',
                                  'Chestguard of the Forgotten Vanquisher',
                                  'Leggings of the Forgotten Vanquisher',
                                  'Gloves of the Forgotten Vanquisher',
                              		'Belt of the Forgotten Vanquisher',
                              		'Bracers of the Forgotten Vanquisher',
                              		'Boots of the Forgotten Vanquisher',
                          ),
                          '2' => array(
                                  'Helm of the Forgotten Vanquisher',
                                  'Pauldrons of the Forgotten Vanquisher',
                                  'Chestguard of the Forgotten Vanquisher',
                                  'Leggings of the Forgotten Vanquisher',
                                  'Gloves of the Forgotten Vanquisher',
                              		'Belt of the Forgotten Vanquisher',
                              		'Bracers of the Forgotten Vanquisher',
                              		'Boots of the Forgotten Vanquisher',
                          ),
                          '7' => array(
                                  'Helm of the Forgotten Vanquisher',
                                  'Pauldrons of the Forgotten Vanquisher',
                                  'Chestguard of the Forgotten Vanquisher',
                                  'Leggings of the Forgotten Vanquisher',
                                  'Gloves of the Forgotten Vanquisher',
                              		'Belt of the Forgotten Vanquisher',
                              		'Bracers of the Forgotten Vanquisher',
                              		'Boots of the Forgotten Vanquisher',
                          )
                        )
);                     
?>
