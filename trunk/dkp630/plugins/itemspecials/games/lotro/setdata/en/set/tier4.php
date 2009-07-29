<?php
 /*
 * Project:     EQdkp ItemSpecials
 * License:     Creative Commons - Attribution-Noncommercial-Share Alike 3.0 Unported
 * Link:		    http://creativecommons.org/licenses/by-nc-sa/3.0/
 * -----------------------------------------------------------------------
 * Began:       2006
 * Date:        $Date: 2008-12-18 13:27:18 +0100 (Do, 18 Dez 2008) $
 * -----------------------------------------------------------------------
 * @author      $Author: wallenium $
 * @copyright   2005-2008 Simon (Wallenium) Wallmann
 * @link        http://eqdkp-plus.com
 * @package     itemspecials
 * @version     $Rev: 3434 $
 *
 * $Id: tier3.php 3434 2008-12-18 12:27:18Z wallenium $
 */

if ( !defined('EQDKP_INC') ){
  header('HTTP/1.0 404 Not Found');exit;
}

// Tier Data
$tier_config["tier4"] = array(
      'language'      => 'en',
      'real_name'     => 'Tier 4',
      'pieces_total'  => 6,
      'name'          => array(
                          '6'   => 'Armour of the Lady\'s Defence',
                          '4'   => 'Armour of the Lady\'s Wisdom',
                          '3'   => 'Armour of the Lady\'s Discernment',
                          '1'   => 'Armour of the Lady\'s Grace',
                          '7'   => 'Armour of the Lady\'s Power',
                          '2'   => 'Armour of the Lady\'s Courage',
                          '5'   => 'Armour of the Lady\'s Secrecy',
                          '8'   => 'Armour of the Lady\'s Foresight',
                          '9'   => 'Armour of the Lady\'s Favour',
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
                                  'Greater Elf-stone of Spirit'           => 'Helm of the Lady\'s Defence',
                                  'Greater Elf-stone of Heart'            => 'Shoulders of the Lady\'s Defence',
                                  'Greater Elf-stone of Strength'         => 'Breastplate of the Lady\'s Defence',
                                  'Greater Elf-stone of Resolve'          => 'Leggings of the Lady\'s Defence',
                                  'Greater Elf-stone of Courage'          => 'Boots of the Lady\'s Defence',
                                  'Greater Elf-stone of Hand'             => 'Gauntlets of the Lady\'s Defence',

                          ),
                          '4' => array(
                                  'Greater Elf-stone of Spirit'           => 'Hat of the Lady\'s Wisdom',
                                  'Greater Elf-stone of Heart'            => 'Shoulders of the Lady\'s Wisdom',
                                  'Greater Elf-stone of Strength'         => 'Robe of the Lady\'s Wisdom',
                                  'Greater Elf-stone of Resolve'          => 'Trousers of the Lady\'s Wisdom',
                                  'Greater Elf-stone of Courage'          => 'Shoes of the Lady\'s Wisdom',
                                  'Greater Elf-stone of Hand'             => 'Gloves of the Lady\'s Wisdom',

                          ),
                          '3' => array(
                                  'Greater Elf-stone of Spirit'           => 'Helm of the Lady\'s Discernment',
                                  'Greater Elf-stone of Heart'            => 'Shoulders of the Lady\'s Discernment',
                                  'Greater Elf-stone of Strength'         => 'Jacket of the Lady\'s Discernment',
                                  'Greater Elf-stone of Resolve'          => 'Leggings of the Lady\'s Discernment',
                                  'Greater Elf-stone of Courage'          => 'Boots of the Lady\'s Discernment',
                                  'Greater Elf-stone of Hand'             => 'Gauntlets of the Lady\'s Discernment',

                          ),
                          '1' => array(
                                  'Greater Elf-stone of Spirit'           => 'Hat of the Lady\'s Grace',
                                  'Greater Elf-stone of Heart'            => 'Shoulders of the Lady\'s Grace',
                                  'Greater Elf-stone of Strength'         => 'Robe of the Lady\'s Grace',
                                  'Greater Elf-stone of Resolve'          => 'Trousers of the Lady\'s Grace',
                                  'Greater Elf-stone of Courage'          => 'Shoes of the Lady\'s Grace',
                                  'Greater Elf-stone of Hand'             => 'Gloves of the Lady\'s Grace',

                          ),
                          '7' => array(
                                  'Greater Elf-stone of Spirit'           => 'Helm of the Lady\'s Power',
                                  'Greater Elf-stone of Heart'            => 'Shoulders of the Lady\'s Power',
                                  'Greater Elf-stone of Strength'         => 'Breastplate of the Lady\'s Power',
                                  'Greater Elf-stone of Resolve'          => 'Leggings of the Lady\'s Power',
                                  'Greater Elf-stone of Courage'          => 'Boots of the Lady\'s Power',
                                  'Greater Elf-stone of Hand'             => 'Gauntlets of the Lady\'s Power',

                          ),
                          '2' => array(
                                  'Greater Elf-stone of Spirit'           => 'Helm of the Lady\'s Courage',
                                  'Greater Elf-stone of Heart'            => 'Shoulders of the Lady\'s Courage',
                                  'Greater Elf-stone of Strength'         => 'Breastplate of the Lady\'s Courage',
                                  'Greater Elf-stone of Resolve'          => 'Leggings of the Lady\'s Courage',
                                  'Greater Elf-stone of Courage'          => 'Boots of the Lady\'s Courage',
                                  'Greater Elf-stone of Hand'             => 'Gauntlets of the Lady\'s Courage',

                          ),
                          '5' => array(
                                  'Greater Elf-stone of Spirit'           => 'Helm of the Lady\'s Secrecy',
                                  'Greater Elf-stone of Heart'            => 'Shoulders of the Lady\'s Secrecy',
                                  'Greater Elf-stone of Strength'         => 'Jacket of the Lady\'s Secrecy',
                                  'Greater Elf-stone of Resolve'          => 'Leggings of the Lady\'s Secrecy',
                                  'Greater Elf-stone of Courage'          => 'Boots of the Lady\'s Secrecy',
                                  'Greater Elf-stone of Hand'             => 'Gauntlets of the Lady\'s Secrecy',

                          ),
                          '8' => array(
                                  'Greater Elf-stone of Spirit'           => 'Hat of the Lady\'s Foresight',
                                  'Greater Elf-stone of Heart'            => 'Shoulders of the Lady\'s Foresight',
                                  'Greater Elf-stone of Strength'         => 'Robe of the Lady\'s Foresight',
                                  'Greater Elf-stone of Resolve'          => 'Trousers of the Lady\'s Foresight',
                                  'Greater Elf-stone of Courage'          => 'Shoes of the Lady\'s Foresight',
                                  'Greater Elf-stone of Hand'             => 'Gloves of the Lady\'s Foresight',

                          ),
                          '9' => array(
                                  'Greater Elf-stone of Spirit'           => 'Helm of the Lady\'s Favour',
                                  'Greater Elf-stone of Heart'            => 'Shoulders of the Lady\'s Favour',
                                  'Greater Elf-stone of Strength'         => 'Jacket of the Lady\'s Favour',
                                  'Greater Elf-stone of Resolve'          => 'Leggings of the Lady\'s Favour',
                                  'Greater Elf-stone of Courage'          => 'Boots of the Lady\'s Favour',
                                  'Greater Elf-stone of Hand'             => 'Gauntlets of the Lady\'s Favour',

                          )
                        )
);
?>