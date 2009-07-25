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
 * $Id: tier75.php 3552 2009-01-06 16:30:34Z wallenium $
 */
 
if ( !defined('EQDKP_INC') ){
  header('HTTP/1.0 404 Not Found');exit;
} 

// Tier Data
$tier_config["tier85"] = array(
      'language'      => 'en',
      'real_name'     => 'Tier 8.25',
      'pieces_total'  => 5,
      'name'          => array(
                          '12'  => 'Siegebreaker Battlegear',
                          '13'  => 'Aegis Battlegear',
                          '4'   => 'Scourgestalker Battlegear',
                          '10'  => 'Deathbringer Garb',
                          '6'   => 'Sanctification Regalia',
                          '11'  => "Kirin'dor Garb",
                          '2'   => 'Scourgestalker Battlegear',
                          '9'   => 'Worldbreaker Battlegear',
                          '7'   => 'Nightsong Battlegear',
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
                                  'Crown of the Wayward Protector',
                                  'Mantle of the Wayward Protector',
                                  'Breastplate of the Wayward Protector',
                                  'Legplates of the Wayward Protector',
                                  'Gauntlets of the Wayward Protector',
                          ),
                          '13' => array(
                                  'Crown of the Wayward Conqueror',
                                  'Mantle of the Wayward Conqueror',
                                  'Breastplate of the Wayward Conqueror',
                                  'Legplates of the Wayward Conqueror',
                                  'Gauntlets of the Wayward Conqueror',
                          ),
                          '9' => array(
                                  'Crown of the Wayward Protector',
                                  'Mantle of the Wayward Protector',
                                  'Breastplate of the Wayward Protector',
                                  'Legplates of the Wayward Protector',
                                  'Gauntlets of the Wayward Protector',
                          ),
                          '4' => array(
                                  'Crown of the Wayward Protector',
                                  'Mantle of the Wayward Protector',
                                  'Breastplate of the Wayward Protector',
                                  'Legplates of the Wayward Protector',
                                  'Gauntlets of the Wayward Protector',
                          ),
                          '10' => array(
                                  'Crown of the Wayward Conqueror',
                                  'Mantle of the Wayward Conqueror',
                                  'Breastplate of the Wayward Conqueror',
                                  'Legplates of the Wayward Conqueror',
                                  'Gauntlets of the Wayward Conqueror',
                          ),
                          '6' => array(
                                  'Crown of the Wayward Conqueror',
                                  'Mantle of the Wayward Conqueror',
                                  'Breastplate of the Wayward Conqueror',
                                  'Legplates of the Wayward Conqueror',
                                  'Gauntlets of the Wayward Conqueror',
                          ),
                          '11' => array(
                                  'Crown of the Wayward Vanquisher',
                                  'Mantle of the Wayward Vanquisher',
                                  'Breastplate of the Wayward Vanquisher',
                                  'Legplates of the Wayward Vanquisher',
                                  'Gauntlets of the Wayward Vanquisher',
                          ),
                          '2' => array(
                                  'Crown of the Wayward Vanquisher',
                                  'Mantle of the Wayward Vanquisher',
                                  'Breastplate of the Wayward Vanquisher',
                                  'Legplates of the Wayward Vanquisher',
                                  'Gauntlets of the Wayward Vanquisher',
                          ),
                          '7' => array(
                                  'Crown of the Wayward Vanquisher',
                                  'Mantle of the Wayward Vanquisher',
                                  'Breastplate of the Wayward Vanquisher',
                                  'Legplates of the Wayward Vanquisher',
                                  'Gauntlets of the Wayward Vanquisher',
                          ),
                  		    '20' => array(
                                  'Crown of the Wayward Vanquisher',
                                  'Mantle of the Wayward Vanquisher',
                                  'Breastplate of the Wayward Vanquisher',
                                  'Legplates of the Wayward Vanquisher',
                                  'Gauntlets of the Wayward Vanquisher',
                          )
                        )
);                     
?>
