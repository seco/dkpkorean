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
 * $Id: tier8.php 4680 2009-04-27 21:52:00Z wallenium $
 */
 
if ( !defined('EQDKP_INC') ){
  header('HTTP/1.0 404 Not Found');exit;
} 

// Tier Data
$tier_config["tier8"] = array(
      'language'      => 'en',
      'real_name'     => 'Tier 8.10',
      'pieces_total'  => 5,
      'name'          => array(
                          '12'  => 'Siegebreaker Plate',
                          '13'  => 'Aegis Battlegear',
                          '4'   => 'Scourgestalker Battlegear',
                          '10'  => 'Deathbringer Garb',
                          '6'   => 'Sanctification Garb',
                          '11'  => 'Kirin Tor Garb',
                          '2'   => 'Terrorblade Battlegear',
                          '9'   => 'Worldbreaker Battlegear',
                          '7'   => 'Nightsong Garb',
                          '20'  => 'Darkruned Battlegear'
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
                                  'Helm of the Wayward Protector',
                                  'Spaulders of the Wayward Protector',
                                  'Chestguard of the Wayward Protector',
                                  'Leggings of the Wayward Protector',
                                  'Gloves of the Wayward Protector',
                          ),
                          '13' => array(
                                  'Helm of the Wayward Conqueror',
                                  'Spaulders of the Wayward Conqueror',
                                  'Chestguard of the Wayward Conqueror',
                                  'Leggings of the Wayward Conqueror',
                                  'Gloves of the Wayward Conqueror',
                          ),
                          '9' => array(
                                  'Helm of the Wayward Protector',
                                  'Spaulders of the Wayward Protector',
                                  'Chestguard of the Wayward Protector',
                                  'Leggings of the Wayward Protector',
                                  'Gloves of the Wayward Protector',
                          ),
                          '4' => array(
                                  'Helm of the Wayward Protector',
                                  'Spaulders of the Wayward Protector',
                                  'Chestguard of the Wayward Protector',
                                  'Leggings of the Wayward Protector',
                                  'Gloves of the Wayward Protector',
                          ),
                          '10' => array(
                                  'Helm of the Wayward Conqueror',
                                  'Spaulders of the Wayward Conqueror',
                                  'Chestguard of the Wayward Conqueror',
                                  'Leggings of the Wayward Conqueror',
                                  'Gloves of the Wayward Conqueror',
                          ),
                          '6' => array(
                                  'Helm of the Wayward Conqueror',
                                  'Spaulders of the Wayward Conqueror',
                                  'Chestguard of the Wayward Conqueror',
                                  'Leggings of the Wayward Conqueror',
                                  'Gloves of the Wayward Conqueror',
                          ),
                          '11' => array(
                                  'Helm of the Wayward Vanquisher',
                                  'Spaulders of the Wayward Vanquisher',
                                  'Breastplate of the Wayward Vanquisher',
                                  'Leggings of the Wayward Vanquisher',
                                  'Gloves of the Wayward Vanquisher',
                          ),
                          '2' => array(
                                  'Helm of the Wayward Vanquisher',
                                  'Spaulders of the Wayward Vanquisher',
                                  'Breastplate of the Wayward Vanquisher',
                                  'Leggings of the Wayward Vanquisher',
                                  'Gloves of the Wayward Vanquisher',
                          ),
                          '7' => array(
                                  'Helm of the Wayward Vanquisher',
                                  'Spaulders of the Wayward Vanquisher',
                                  'Breastplate of the Wayward Vanquisher',
                                  'Leggings of the Wayward Vanquisher',
                                  'Gloves of the Wayward Vanquisher',
                          ),
                  		    '20' => array(
                                  'Helm of the Wayward Vanquisher',
                                  'Spaulders of the Wayward Vanquisher',
                                  'Breastplate of the Wayward Vanquisher',
                                  'Leggings of the Wayward Vanquisher',
                                  'Gloves of the Wayward Vanquisher',
                          )
                  )
);                     
?>
