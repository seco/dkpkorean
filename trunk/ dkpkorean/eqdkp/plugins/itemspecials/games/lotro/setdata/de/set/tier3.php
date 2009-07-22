<?php
 /*
 * Project:     EQdkp ItemSpecials
 * License:     Creative Commons - Attribution-Noncommercial-Share Alike 3.0 Unported
 * Link:		    http://creativecommons.org/licenses/by-nc-sa/3.0/
 * -----------------------------------------------------------------------
 * Began:       2006
 * Date:        $Date: 2008-12-20 23:14:40 +0100 (Sa, 20 Dez 2008) $
 * -----------------------------------------------------------------------
 * @author      $Author: wallenium $
 * @copyright   2005-2008 Simon (Wallenium) Wallmann
 * @link        http://eqdkp-plus.com
 * @package     itemspecials
 * @version     $Rev: 3475 $
 * 
 * $Id: tier3.php 3475 2008-12-20 22:14:40Z wallenium $
 */
 
if ( !defined('EQDKP_INC') ){
  header('HTTP/1.0 404 Not Found');exit;
} 

// Tier Data
$tier_config["tier3"] = array(
      'language'      => 'de',
      'real_name'     => 'Tier 3',
      'pieces_total'  => 8,
      'name'          => array(
                          '6'   => 'Rüstung von Durins Wache',
                          '4'   => 'Rüstung des Steindeuters',
                          '3'   => 'Rüstung des großen Bogens',
                          '1'   => 'Rüstung der mächtigen Verse',
                          '7'   => 'Rüstung des Klingenmeisters',
                          '2'   => 'Rüstung des Hallen-Generals',
                          '5'   => 'Rüstung des lautlosen Messers',
                          '8'   => 'Rüstung des Wortschmieds',
                          '9'   => 'Rüstung des Speerschmeißers',
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
                                  'Platinmünze des Geistes'           => 'Helm der Wache Durins',
                                  'Platinmünze des Herzens'           => 'Schulterpolster der Wache Durins',
                                  'Platinmünze der Stärke'            => 'Brustpanzer der Wache Durins',
                                  'Platinmünze der Entschlossenheit'	=> 'Überhose der Wache Durins',
                                  'Platinmünze der Furchtlosigkeit'   => 'Stiefel der Wache Durins',
                                  'Platinmünze der Hand'              => 'Panzerhandschuhe der Wache Durins',
                                  'Eisenmünze der Standhaftigkeit'    => 'Maethoranc',
                                  'Eisenmünze des Wissens'            => 'Ríanhar',
                          ),
                          '4' => array(
                                  'Platinmünze des Geistes'           => 'Hut des Steindeuters',
                                  'Platinmünze des Herzens'           => 'Schulterpolster des Steindeuters',
                                  'Platinmünze der Stärke'            => 'Robe des Steindeuters',
                                  'Platinmünze der Entschlossenheit'	=> 'Beinlinge des Steindeuters',
                                  'Platinmünze der Furchtlosigkeit'   => 'Schuhe des Steindeuters',
                                  'Platinmünze der Hand'              => 'Handschuhe des Steindeuters',
                                  'Eisenmünze der Standhaftigkeit'    => 'Baladhranc',
                                  'Eisenmünze des Wissens'            => 'Beleghar',
                          ),
                          '3' => array(
                                  'Platinmünze des Geistes'           => 'Helm des großen Bogens',
                                  'Platinmünze des Herzens'           => 'Schulterpolster des großen Bogens',
                                  'Platinmünze der Stärke'            => 'Jacke des großen Bogens',
                                  'Platinmünze der Entschlossenheit'  => 'Überhose des großen Bogens',
                                  'Platinmünze der Furchtlosigkeit'   => 'Stiefel des großen Bogens',
                                  'Platinmünze der Hand'              => 'Panzerhandschuhe des großen Bogens',
                                  'Eisenmünze der Standhaftigkeit'    => 'Hallanc',
                                  'Eisenmünze des Wissens'            => 'Curuthol',
                          ),
                          '1' => array(
                                  'Platinmünze des Geistes'           => 'Hut der mächtigen Verse',
                                  'Platinmünze des Herzens'           => 'Schulterpolster der mächtigen Verse',
                                  'Platinmünze der Stärke'            => 'Robe der mächtigen Verse',
                                  'Platinmünze der Entschlossenheit'  => 'Beinlinge der mächtigen Verse',
                                  'Platinmünze der Furchtlosigkeit'   => 'Schuhe der mächtigen Verse',
                                  'Platinmünze der Hand'              => 'Handschuhe der mächtigen Verse',
                                  'Eisenmünze der Standhaftigkeit'    => 'Isduranc',
                                  'Eisenmünze des Wissens'            => 'Saelhar',
                          ),
                          '7' => array(
                                  'Platinmünze des Geistes'           => 'Helm des Klingenmeisters',
                                  'Platinmünze des Herzens'           => 'Schulterpolster des Klingenmeisters',
                                  'Platinmünze der Stärke'            => 'Brustpanzer des Klingenmeisters',
                                  'Platinmünze der Entschlossenheit'	=> 'Überhose des Klingenmeisters',
                                  'Platinmünze der Furchtlosigkeit'   => 'Stiefel des Klingenmeisters',
                                  'Platinmünze der Hand'              => 'Panzerhandschuhe des Klingenmeisters',
                                  'Eisenmünze der Standhaftigkeit'    => 'Dagoranc',
                                  'Eisenmünze des Wissens'            => 'Heronhar',
                          ),
                          '2' => array(
                                  'Platinmünze des Geistes'           => 'Helm des Hallengenerals',
                                  'Platinmünze des Herzens'           => 'Schulterpolster des Hallengenerals',
                                  'Platinmünze der Stärke'            => 'Brustpanzer des Hallengenerals',
                                  'Platinmünze der Entschlossenheit'  => 'Überhose des Hallengenerals',
                                  'Platinmünze der Furchtlosigkeit'   => 'Stiefel des Hallengenerals',
                                  'Platinmünze der Hand'              => 'Panzerhandschuhe des Hallengenerals',
                                  'Eisenmünze der Standhaftigkeit'    => 'Túranc',
                                  'Eisenmünze des Wissens'            => 'Rodonhar',
                          ),
                          '5' => array(
                                  'Platinmünze des Geistes'           => 'Helm des lautlosen Messers',
                                  'Platinmünze des Herzens'           => 'Schulterpolster des lautlosen Messers',
                                  'Platinmünze der Stärke'            => 'Jacke des lautlosen Messers',
                                  'Platinmünze der Entschlossenheit'  => 'Überhose des lautlosen Messers',
                                  'Platinmünze der Furchtlosigkeit'   => 'Stiefel des lautlosen Messers',
                                  'Platinmünze der Hand'              => 'Panzerhandschuhe des lautlosen Messers',
                                  'Eisenmünze der Standhaftigkeit'    => 'Arthranc',
                                  'Eisenmünze des Wissens'            => 'Túrthol',
                          ),
                          '8' => array(
                                  'Platinmünze des Geistes'           => 'Hut des Wortschmieds',
                                  'Platinmünze des Herzens'           => 'Schulterpolster des Wortschmieds',
                                  'Platinmünze der Stärke'            => 'Robe des Wortschmieds',
                                  'Platinmünze der Entschlossenheit'  => 'Beinlinge des Wortschmieds',
                                  'Platinmünze der Furchtlosigkeit'   => 'Schuhe des Wortschmieds',
                                  'Platinmünze der Hand'              => 'Handschuhe des Wortschmieds',
                                  'Eisenmünze der Standhaftigkeit'    => 'Ithrodhranc',
                                  'Eisenmünze des Wissens'            => 'Manathar',
                          ),
                          '9' => array(
                                  'Platinmünze des Geistes'           => 'Helm des Speerschmeißers',
                                  'Platinmünze des Herzens'           => 'Schulterpolster des Speerschmeißers',
                                  'Platinmünze der Stärke'            => 'Jacke des Speerschmeißers',
                                  'Platinmünze der Entschlossenheit'  => 'Überhose des Speerschmeißers',
                                  'Platinmünze der Furchtlosigkeit'   => 'Stiefel des Speerschmeißers',
                                  'Platinmünze der Hand'              => 'Panzerhandschuhe des Speerschmeißers',
                                  'Eisenmünze der Standhaftigkeit'    => 'Longranc',
                                  'Eisenmünze des Wissens'            => 'Curuchar',
                          )
                        )
);                     
?>
