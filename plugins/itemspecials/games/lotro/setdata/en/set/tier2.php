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
 * $Id: tier2.php 3318 2008-12-05 08:04:42Z wallenium $
 */
 
if ( !defined('EQDKP_INC') ){
  header('HTTP/1.0 404 Not Found');exit;
} 

// Tier Data
$tier_config["tier2"] = array(
      'language'      => 'en',
      'real_name'     => 'Tier 2',
      'pieces_total'  => 7,
      'name'          => array(
                          '6'   => 'Rift-defender\'s Armour',
                          '4'   => 'Elder Days Armour',
                          '3'   => 'Doom-hunter\'s Armour',
                          '1'   => 'Armour of the Wandering Bard',
                          '7'   => 'Armour of the Gloom-bane',
                          '2'   => 'Armour of the North Star',
                          '5'   => 'Thrill-seeker\'s Armour',
                          '8'   => 'Armour of Graven Word',
                          '9'   => 'Town-saver\'s Armour',
                        ),
      'head_names'    => array(
                          1 => $user->lang['is_Head'],
                          2 => $user->lang['is_Shoulders'],
                          3 => $user->lang['is_Chest'],
                          4 => $user->lang['is_Legs'],
                          5 => $user->lang['is_Boots'],
                          6 => $user->lang['is_Hands'],
                          7 => $user->lang['is_Weapon'],
                        ),
      'data'          => array(
                          '6' => array(
                                  'Pristine Opal'                 => 'Rift-defender\'s Helm',
                                  'Dazzling Emerald'              => 'Rift-defender\'s Shoulders',
                                  'Glowing Red Ruby'              => 'Rift-defender\'s Breastplate',
                                  'Glinting Amethyst'             => 'Rift-defender\'s Leggings',
                                  'Near Perfect Sapphire'         => 'Rift-defender\'s Boots',
                                  'Sparkling Diamond'             => 'Rift-defender\'s Gloves',
                                  'Firey Quartz'                  => 'Congrist',
                          ),
                          '4' => array(
                                  'Pristine Opal'                 => 'Hat of the Elder Days',
                                  'Dazzling Emerald'              => 'Shoulders of the Elder Days',
                                  'Glowing Red Ruby'              => 'Robe of the Elder Days',
                                  'Glinting Amethyst'             => 'Leggings of the Elder Days',
                                  'Near Perfect Sapphire'         => 'Boots of the Elder Days',
                                  'Sparkling Diamond'             => 'Gloves of the Elder Days',
                                  'Firey Quartz'                  => 'Noris',
                          ),
                          '3' => array(
                                  'Pristine Opal'                 => 'Doom-hunter\'s Helm',
                                  'Dazzling Emerald'              => 'Doom-hunter\'s Shoulders',
                                  'Glowing Red Ruby'              => 'Doom-hunter\'s Breastplate',
                                  'Glinting Amethyst'             => 'Doom-hunter\'s Leggings',
                                  'Near Perfect Sapphire'         => 'Doom-hunter\'s Boots',
                                  'Sparkling Diamond'             => 'Doom-hunter\'s Gloves',
                                  'Firey Quartz'                  => 'Cumaen',
                          ),
                          '1' => array(
                                  'Pristine Opal'                 => 'Wandering Bard\'s Helm',
                                  'Dazzling Emerald'              => 'Wandering Bard\'s Shoulders',
                                  'Glowing Red Ruby'              => 'Wandering Bard\'s Robe',
                                  'Glinting Amethyst'             => 'Wandering Bard\'s Leggings',
                                  'Near Perfect Sapphire'         => 'Wandering Bard\'s Boots',
                                  'Sparkling Diamond'             => 'Wandering Bard\'s Gloves',
                                  'Firey Quartz'                  => 'Goldram',
                          ),
                          '7' => array(
                                  'Pristine Opal'                 => 'Helm of the Gloom-bane',
                                  'Dazzling Emerald'              => 'Shoulders of the Gloom-bane',
                                  'Glowing Red Ruby'              => 'Breastplate of the Gloom-bane',
                                  'Glinting Amethyst'             => 'Leggings of the Gloom-bane',
                                  'Near Perfect Sapphire'         => 'Boots of the Gloom-bane',
                                  'Sparkling Diamond'             => 'Gloves of the Gloom-bane',
                                  'Firey Quartz'                  => 'Othdring',
                          ),
                          '2' => array(
                                  'Pristine Opal'                 => 'Helm of the North Star',
                                  'Dazzling Emerald'              => 'Shoulders of the North Star',
                                  'Glowing Red Ruby'              => 'Breastplate of the North Star',
                                  'Glinting Amethyst'             => 'Leggings of the North Star',
                                  'Near Perfect Sapphire'         => 'Boots of the North Star',
                                  'Sparkling Diamond'             => 'Gloves of the North Star',
                                  'Firey Quartz'                  => 'Torchathol',
                          ),
                          '5' => array(
                                  'Pristine Opal'                 => 'Thrill-seeker\'s Helm',
                                  'Dazzling Emerald'              => 'Thrill-seeker\'s Shoulders',
                                  'Glowing Red Ruby'              => 'Thrill-seeker\'s Jacket',
                                  'Glinting Amethyst'             => 'Thrill-seeker\'s Leggings',
                                  'Near Perfect Sapphire'         => 'Thrill-seeker\'s Boots',
                                  'Sparkling Diamond'             => 'Thrill-seeker\'s Gloves',
                                  'Firey Quartz'                  => 'Aeglang',
                          ),
                          '8' => array(
                                  'Pristine Opal'                 => 'Hat of Graven Word',
                                  'Dazzling Emerald'              => 'Shoulders of Graven Word',
                                  'Glowing Red Ruby'              => 'Robe of Graven Word',
                                  'Glinting Amethyst'             => 'Trousers of Graven Word',
                                  'Near Perfect Sapphire'         => 'Shoes of Graven Word',
                                  'Sparkling Diamond'             => 'Gloves of Graven Word',
                                  'N/A'                           => 'N/A',
                          ),
                          '9' => array(
                                  'Pristine Opal'                 => 'Town-saver\'s Helm',
                                  'Dazzling Emerald'              => 'Town-saver\'s Shoulders',
                                  'Glowing Red Ruby'              => 'Town-saver\'s Jacket',
                                  'Glinting Amethyst'             => 'Town-saver\'s Leggings',
                                  'Near Perfect Sapphire'         => 'Town-saver\'s Boots',
                                  'Sparkling Diamond'             => 'Town-saver\'s Gauntlets',
                                  'Firey Quartz'                  => 'Warden\'s War Shield',
                          )
                        )
);                     
?>
