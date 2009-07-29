<?php
 /*
 * Project:     EQdkp ItemSpecials
 * License:     Creative Commons - Attribution-Noncommercial-Share Alike 3.0 Unported
 * Link:		    http://creativecommons.org/licenses/by-nc-sa/3.0/
 * -----------------------------------------------------------------------
 * Began:       2006
 * Date:        $Date: 2009-04-27 23:52:00 +0200 (Mo, 27 Apr 2009) $
 * -----------------------------------------------------------------------
 * @author      $Author: wallenium $
 * @copyright   2005-2008 Simon (Wallenium) Wallmann
 * @link        http://eqdkp-plus.com
 * @package     itemspecials
 * @version     $Rev: 4680 $
 * 
 * $Id: tier7.php 4680 2009-04-27 21:52:00Z wallenium $
 */
 
if ( !defined('EQDKP_INC') ){
  header('HTTP/1.0 404 Not Found');exit;
} 

// Tier Data
$tier_config["tier7"] = array(
      'language'      => 'en',
      'real_name'     => 'Tier 7.10',
      'pieces_total'  => 5,
      'name'          => array(
                          '12'  => 'Dreadnaught Battlegear',
                          '13'  => 'Redemption Battlegear',
                          '4'   => 'Cryptstalker Battlegear',
                          '10'  => 'Plagueheart Garb',
                          '6'   => 'Regalia of Faith',
                          '11'  => 'Frostfire Garb',
                          '2'   => 'Bonescythe Battlegear',
                          '9'   => 'Earthshatter Battlegear',
                          '7'   => 'Dreamwalker Battlegear',
                          '20'  => 'Scourgeborne Battlegear'
                        ),
      'head_names'    => array(
                          1 => $user->lang['is_Head'],
                          2 => $user->lang['is_Shoulders'],
                          3 => $user->lang['is_Chest'],
                          4 => $user->lang['is_Boots'],
                          5 => $user->lang['is_Hands'],
                        ),
      'data'          => array(
                          '12' => array(
                                  'Helm of the Lost Protector',
                                  'Spaulders of the Lost Protector',
                                  'Chestguard of the Lost Protector',
                                  'Leggings of the Lost Protector',
                                  'Gloves of the Lost Protector',
                          ),
                          '13' => array(
                                  'Helm of the Lost Conqueror',
                                  'Spaulders of the Lost Conqueror',
                                  'Chestguard of the Lost Conqueror',
                                  'Leggings of the Lost Conqueror',
                                  'Gloves of the Lost Conqueror',
                          ),
                          '9' => array(
                                  'Helm of the Lost Protector',
                                  'Spaulders of the Lost Protector',
                                  'Chestguard of the Lost Protector',
                                  'Leggings of the Lost Protector',
                                  'Gloves of the Lost Protector',
                          ),
                          '4' => array(
                                  'Helm of the Lost Protector',
                                  'Spaulders of the Lost Protector',
                                  'Chestguard of the Lost Protector',
                                  'Leggings of the Lost Protector',
                                  'Gloves of the Lost Protector',
                          ),
                          '10' => array(
                                  'Helm of the Lost Conqueror',
                                  'Spaulders of the Lost Conqueror',
                                  'Chestguard of the Lost Conqueror',
                                  'Leggings of the Lost Conqueror',
                                  'Gloves of the Lost Conqueror',
                          ),
                          '6' => array(
                                  'Helm of the Lost Conqueror',
                                  'Spaulders of the Lost Conqueror',
                                  'Chestguard of the Lost Conqueror',
                                  'Leggings of the Lost Conqueror',
                                  'Gloves of the Lost Conqueror',
                          ),
                          '11' => array(
                                  'Helm of the Lost Vanquisher',
                                  'Spaulders of the Lost Vanquisher',
                                  'Breastplate of the Lost Vanquisher',
                                  'Leggings of the Lost Vanquisher',
                                  'Gloves of the Lost Vanquisher',
                          ),
                          '2' => array(
                                  'Helm of the Lost Vanquisher',
                                  'Spaulders of the Lost Vanquisher',
                                  'Breastplate of the Lost Vanquisher',
                                  'Leggings of the Lost Vanquisher',
                                  'Gloves of the Lost Vanquisher',
                          ),
                          '7' => array(
                                  'Helm of the Lost Vanquisher',
                                  'Spaulders of the Lost Vanquisher',
                                  'Breastplate of the Lost Vanquisher',
                                  'Leggings of the Lost Vanquisher',
                                  'Gloves of the Lost Vanquisher',
                          ),
                  		    '20' => array(
                                  'Helm of the Lost Vanquisher',
                                  'Spaulders of the Lost Vanquisher',
                                  'Breastplate of the Lost Vanquisher',
                                  'Leggings of the Lost Vanquisher',
                                  'Gloves of the Lost Vanquisher',
                          )
                  )
);                     
?>
