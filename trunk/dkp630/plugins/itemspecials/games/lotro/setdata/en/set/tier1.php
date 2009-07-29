<?php
 /*
 * Project:     EQdkp ItemSpecials
 * License:     Creative Commons - Attribution-Noncommercial-Share Alike 3.0 Unported
 * Link:		    http://creativecommons.org/licenses/by-nc-sa/3.0/
 * -----------------------------------------------------------------------
 * Began:       2006
 * Date:        $Date: 2008-12-05 09:04:42 +0100 (Fr, 05 Dez 2008) $
 * -----------------------------------------------------------------------
 * @author      $Author: wallenium $
 * @copyright   2005-2008 Simon (Wallenium) Wallmann
 * @link        http://eqdkp-plus.com
 * @package     itemspecials
 * @version     $Rev: 3318 $
 * 
 * $Id: tier1.php 3318 2008-12-05 08:04:42Z wallenium $
 */
 
if ( !defined('EQDKP_INC') ){
  header('HTTP/1.0 404 Not Found');exit;
} 

// Tier Data
$tier_config["tier1"] = array(
      'language'      => 'en',
      'real_name'     => 'Tier 1',
      'pieces_total'  => 6,
      'name'          => array(
                          '6'   => 'High-protector\'s Armour',
                          '4'   => 'Beast-master Armour',
                          '3'   => 'Armour of the Aurochs',
                          '1'   => 'Silver-voice Armour',
                          '7'   => 'Dragon-scale Armour',
                          '2'   => 'War-captain\'s Armour',
                          '5'   => 'Shadow-stalker Armour',
                          '8'   => 'Armour of the Learned',
                          '9'   => 'Spear-shaker\'s Armour',
                        ),
      'head_names'    => array(
                          1 => $user->lang['is_Head'],
                          2 => $user->lang['is_Shoulders'],
                          3 => $user->lang['is_Chest'],
                          4 => $user->lang['is_Legs'],
                          5 => $user->lang['is_Boots'],
                          6 => $user->lang['is_Hands'],
                        ),
      'data'          => array(
                          '6' => array(
                                  'Thorog\'s Claw'                => 'High-protector\'s Helm',
                                  'Amulet of the Witch-King'			=> 'High-protector\'s Shoulders',
                                  'Thorog\'s Fang'                => 'High-protector\'s Breastplate',
                                  'Thorog\'s Horn'                => 'High-protector\'s Leggings',
                                  'Scrap of Storvâgûn\'s Armour'  => 'High-protector\'s Boots',
                                  'Zaudru\'s Stinger'             => 'High-protector\'s Gloves',
                          ),
                          '4' => array(
                                  'Thorog\'s Claw'                => 'Beast-master Hat',
                                  'Amulet of the Witch-King'			=> 'Beast-master Shoulders',
                                  'Thorog\'s Fang'                => 'Beast-master Robe',
                                  'Thorog\'s Horn'                => 'Beast-master Leggings',
                                  'Scrap of Storvâgûn\'s Armour'  => 'Beast-master Boots',
                                  'Zaudru\'s Stinger'             => 'Beast-master Gloves',
                          ),
                          '3' => array(
                                  'Thorog\'s Claw'                => 'Helm of the Aurochs',
                                  'Amulet of the Witch-King'			=> 'Shoulders of the Aurochs',
                                  'Thorog\'s Fang'                => 'Breastplate of the Aurochs',
                                  'Thorog\'s Horn'                => 'Leggings of the Aurochs',
                                  'Scrap of Storvâgûn\'s Armour'  => 'Boots of the Aurochs',
                                  'Zaudru\'s Stinger'             => 'Gloves of the Aurochs',
                          ),
                          '1' => array(
                                  'Thorog\'s Claw'                => 'Silver-voice Helm',
                                  'Amulet of the Witch-King'			=> 'Silver-voice Shoulders',
                                  'Thorog\'s Fang'                => 'Silver-voice Robe',
                                  'Thorog\'s Horn'                => 'Silver-voice Leggings',
                                  'Scrap of Storvâgûn\'s Armour'  => 'Silver-voice Boots',
                                  'Zaudru\'s Stinger'             => 'Silver-voice Gloves',
                          ),
                          '7' => array(
                                   'Thorog\'s Claw'               => 'Dragon-scale Helm',
                                  'Amulet of the Witch-King'			=> 'Dragon-scale Shoulders',
                                  'Thorog\'s Fang'                => 'Dragon-scale Breastplate',
                                  'Thorog\'s Horn'                => 'Dragon-scale Leggings',
                                  'Scrap of Storvâgûn\'s Armour'  => 'Dragon-scale Boots',
                                  'Zaudru\'s Stinger'             => 'Dragon-scale Gloves',
                          ),
                          '2' => array(
                                  'Thorog\'s Claw'                => 'War-captain\'s Helm',
                                  'Amulet of the Witch-King'			=> 'War-captain\'s Shoulders',
                                  'Thorog\'s Fang'                => 'War-captain\'s Breastplate',
                                  'Thorog\'s Horn'                => 'War-captain\'s Leggings',
                                  'Scrap of Storvâgûn\'s Armour'  => 'War-captain\'s Boots',
                                  'Zaudru\'s Stinger'             => 'War-captain\'s Gloves',
                          ),
                          '5' => array(
                                  'Thorog\'s Claw'                => 'Shadow-stalker Helm',
                                  'Amulet of the Witch-King'			=> 'Shadow-stalker Shoulders',
                                  'Thorog\'s Fang'                => 'Shadow-stalker Jacket',
                                  'Thorog\'s Horn'                => 'Shadow-stalker Leggings',
                                  'Scrap of Storvâgûn\'s Armour'  => 'Shadow-stalker Boots',
                                  'Zaudru\'s Stinger'             => 'Shadow-stalker Gloves',
                          ),
                          '8' => array(
                                  'Thorog\'s Claw'                => 'Hat of the Learned',
                                  'Amulet of the Witch-King'			=> 'Shoulders of the Learned',
                                  'Thorog\'s Fang'                => 'Robe of the Learned',
                                  'Thorog\'s Horn'                => 'Trousers of the Learned',
                                  'Scrap of Storvâgûn\'s Armour'  => 'Shoes of the Learned',
                                  'Zaudru\'s Stinger'             => 'Gloves of the Learned',
                          ),
                          '9' => array(
                                  'Thorog\'s Claw'                => 'Spear-shaker\'s Helm',
                                  'Amulet of the Witch-King'			=> 'Spear-shaker\'s Shoulders',
                                  'Thorog\'s Fang'                => 'Spear-shaker\'s Jacket',
                                  'Thorog\'s Horn'                => 'Spear-shaker\'s Leggings',
                                  'Scrap of Storvâgûn\'s Armour'  => 'Spear-shaker\'s Boots',
                                  'Zaudru\'s Stinger'             => 'Spear-shaker\'s Gauntlets',
                          )
                        )
);                     
?>
