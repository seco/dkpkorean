<?php
 /*
 * Project:     EQdkp ItemSpecials
 * License:     Creative Commons - Attribution-Noncommercial-Share Alike 3.0 Unported
 * Link:		    http://creativecommons.org/licenses/by-nc-sa/3.0/
 * -----------------------------------------------------------------------
 * Began:       2006
 * Date:        $Date: 2009-03-31 08:23:13 +0200 (Di, 31 Mrz 2009) $
 * -----------------------------------------------------------------------
 * @author      $Author: wallenium $
 * @copyright   2005-2008 Simon (Wallenium) Wallmann
 * @link        http://eqdkp-plus.com
 * @package     itemspecials
 * @version     $Rev: 4475 $
 * 
 * $Id: tier3.php 4475 2009-03-31 06:23:13Z wallenium $
 */
 
if ( !defined('EQDKP_INC') ){
  header('HTTP/1.0 404 Not Found');exit;
} 

// Tier Data
$tier_config["tier3"] = array(
      'language'      => 'en',
      'real_name'     => 'Tier 3',
      'pieces_total'  => 8,
      'name'          => array(
                          '6'   => 'Armour of Durin\'s Guard',
                          '4'   => 'Stone-reader\'s Armour',
                          '3'   => 'Armour of the Great Bow',
                          '1'   => 'Armour of the Mighty Verse',
                          '7'   => 'Blademaster\'s Armour',
                          '2'   => 'Hall-general\'s Armour',
                          '5'   => 'Armour of the Silent Knife',
                          '8'   => 'Word-smith\'s Armour',
                          '9'   => 'Spear-hurler\'s Armour',
                        ),
      'head_names'    => array(
                          1 => $user->lang['is_Head'],
                          2 => $user->lang['is_Shoulders'],
                          3 => $user->lang['is_Chest'],
                          4 => $user->lang['is_Legs'],
                          5 => $user->lang['is_Boots'],
                          6 => $user->lang['is_Hands'],
                          7 => $user->lang['is_Shoulders'],
                          8 => $user->lang['is_Head'],
                        ),
      'data'          => array(
                          '6' => array(
                                  'Platinum Coin of Spirit'           => 'Helm of Durin\'s Guard',
                                  'Platinum Coin of Heart'            => 'Shoulders of Durin\'s Guard',
                                  'Platinum Coin of Strength'         => 'Breastplate of Durin\'s Guard',
                                  'Platinum Coin of Resolve'          => 'Leggings of Durin\'s Guard',
                                  'Platinum Coin of Courage'          => 'Boots of Durin\'s Guard',
                                  'Platinum Coin of Hand'             => 'Gauntlets of Durin\'s Guard',
                                  'Iron Coin of Fortitude'            => 'Maethranc',
                                  'Iron Coin of Knowledge'            => 'Ríanhar',
                          ),
                          '4' => array(
                                  'Platinum Coin of Spirit'           => 'Stone-reader\'s Hat',
                                  'Platinum Coin of Heart'            => 'Stone-reader\'s Shoulders',
                                  'Platinum Coin of Strength'         => 'Stone-reader\'s Robe',
                                  'Platinum Coin of Resolve'          => 'Stone-reader\'s Trousers',
                                  'Platinum Coin of Courage'          => 'Stone-reader\'s Shoes',
                                  'Platinum Coin of Hand'             => 'Stone-reader\'s Gloves',
                                  'Iron Coin of Fortitude'            => 'Baladhranc',
                                  'Iron Coin of Knowledge'            => 'Beleghar',
                          ),
                          '3' => array(
                                  'Platinum Coin of Spirit'           => 'Helm of the Great Bow',
                                  'Platinum Coin of Heart'            => 'Shoulders of the Great Bow',
                                  'Platinum Coin of Strength'         => 'Jacket of the Great Bow',
                                  'Platinum Coin of Resolve'          => 'Leggings of the Great Bow',
                                  'Platinum Coin of Courage'          => 'Boots of the Great Bow',
                                  'Platinum Coin of Hand'             => 'Gauntlets of the Great Bow',
                                  'Iron Coin of Fortitude'            => 'Hallanc',
                                  'Iron Coin of Knowledge'            => 'Curuthol',
                          ),
                          '1' => array(
                                  'Platinum Coin of Spirit'           => 'Hat of the Mighty Verse',
                                  'Platinum Coin of Heart'            => 'Shoulders of the Mighty Verse',
                                  'Platinum Coin of Strength'         => 'Robe of the Mighty Verse',
                                  'Platinum Coin of Resolve'          => 'Trousers of the Mighty Verse',
                                  'Platinum Coin of Courage'          => 'Shoes of the Mighty Verse',
                                  'Platinum Coin of Hand'             => 'Gloves of the Mighty Verse',
                                  'Iron Coin of Fortitude'            => 'Isduranc',
                                  'Iron Coin of Knowledge'            => 'Saelhar',
                          ),
                          '7' => array(
                                  'Platinum Coin of Spirit'           => 'Blademaster\'s Helm',
                                  'Platinum Coin of Heart'            => 'Blademaster\'s Shoulders',
                                  'Platinum Coin of Strength'         => 'Blademaster\'s Breastplate',
                                  'Platinum Coin of Resolve'          => 'Blademaster\'s Leggings',
                                  'Platinum Coin of Courage'          => 'Blademaster\'s Boots',
                                  'Platinum Coin of Hand'             => 'Blademaster\'s Gauntlets',
                                  'Iron Coin of Fortitude'            => 'Dagoranc',
                                  'Iron Coin of Knowledge'            => 'Heronhar',
                          ),
                          '2' => array(
                                  'Platinum Coin of Spirit'           => 'Hall-general\'s Helm',
                                  'Platinum Coin of Heart'            => 'Hall-general\'s Shoulders',
                                  'Platinum Coin of Strength'         => 'Hall-general\'s Breastplate',
                                  'Platinum Coin of Resolve'          => 'Hall-general\'s Leggings',
                                  'Platinum Coin of Courage'          => 'Hall-general\'s Boots',
                                  'Platinum Coin of Hand'             => 'Hall-general\'s Gauntlets',
                                  'Iron Coin of Fortitude'            => 'Túranc',
                                  'Iron Coin of Knowledge'            => 'Rodonhar',
                          ),
                          '5' => array(
                                  'Platinum Coin of Spirit'           => 'Helm of the Silent Knife',
                                  'Platinum Coin of Heart'            => 'Shoulders of the Silent Knife',
                                  'Platinum Coin of Strength'         => 'Jacket of the Silent Knife',
                                  'Platinum Coin of Resolve'          => 'Leggings of the Silent Knife',
                                  'Platinum Coin of Courage'          => 'Boots of the Silent Knife',
                                  'Platinum Coin of Hand'             => 'Gauntlets of the Silent Knife',
                                  'Iron Coin of Fortitude'            => 'Arthranc',
                                  'Iron Coin of Knowledge'            => 'Túrthol',
                          ),
                          '8' => array(
                                  'Platinum Coin of Spirit'           => 'Word-smith\'s Hat',
                                  'Platinum Coin of Heart'            => 'Word-smith\'s Shoulders',
                                  'Platinum Coin of Strength'         => 'Word-smith\'s Robe',
                                  'Platinum Coin of Resolve'          => 'Word-smith\'s Trousers',
                                  'Platinum Coin of Courage'          => 'Word-smith\'s Shoes',
                                  'Platinum Coin of Hand'             => 'Word-smith\'s Gloves',
                                  'Iron Coin of Fortitude'            => 'Ithrodhranc',
                                  'Iron Coin of Knowledge'            => 'Manathar',
                          ),
                          '9' => array(
                                  'Platinum Coin of Spirit'           => 'Spear-hurler\'s Helm',
                                  'Platinum Coin of Heart'            => 'Spear-hurler\'s Shoulders',
                                  'Platinum Coin of Strength'         => 'Spear-hurler\'s Jacket',
                                  'Platinum Coin of Resolve'          => 'Spear-hurler\'s Leggings',
                                  'Platinum Coin of Courage'          => 'Spear-hurler\'s Boots',
                                  'Platinum Coin of Hand'             => 'Spear-hurler\'s Gauntlets',
                                  'Iron Coin of Fortitude'            => 'Longranc',
                                  'Iron Coin of Knowledge'            => 'Curuchar',
                          )
                        )
);                     
?>
