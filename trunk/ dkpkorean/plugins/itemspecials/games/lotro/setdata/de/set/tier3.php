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
      'language'      => 'de',
      'real_name'     => 'Tier 3',
      'pieces_total'  => 8,
      'name'          => array(
                          '6'   => 'R�stung von Durins Wache',
                          '4'   => 'R�stung des Steindeuters',
                          '3'   => 'R�stung des gro�en Bogens',
                          '1'   => 'R�stung der m�chtigen Verse',
                          '7'   => 'R�stung des Klingenmeisters',
                          '2'   => 'R�stung des Hallen-Generals',
                          '5'   => 'R�stung des lautlosen Messers',
                          '8'   => 'R�stung des Wortschmieds',
                          '9'   => 'R�stung des Speerschmei�ers',
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
                                  'Platinm�nze des Geistes'           => 'Helm der Wache Durins',
                                  'Platinm�nze des Herzens'           => 'Schulterpolster der Wache Durins',
                                  'Platinm�nze der St�rke'            => 'Brustpanzer der Wache Durins',
                                  'Platinm�nze der Entschlossenheit'	=> '�berhose der Wache Durins',
                                  'Platinm�nze der Furchtlosigkeit'   => 'Stiefel der Wache Durins',
                                  'Platinm�nze der Hand'              => 'Panzerhandschuhe der Wache Durins',
                                  'Eisenm�nze der Standhaftigkeit'    => 'Maethranc',
                                  'Eisenm�nze des Wissens'            => 'R�anhar',
                          ),
                          '4' => array(
                                  'Platinm�nze des Geistes'           => 'Hut des Steindeuters',
                                  'Platinm�nze des Herzens'           => 'Schulterpolster des Steindeuters',
                                  'Platinm�nze der St�rke'            => 'Robe des Steindeuters',
                                  'Platinm�nze der Entschlossenheit'	=> 'Beinlinge des Steindeuters',
                                  'Platinm�nze der Furchtlosigkeit'   => 'Schuhe des Steindeuters',
                                  'Platinm�nze der Hand'              => 'Handschuhe des Steindeuters',
                                  'Eisenm�nze der Standhaftigkeit'    => 'Baladhranc',
                                  'Eisenm�nze des Wissens'            => 'Beleghar',
                          ),
                          '3' => array(
                                  'Platinm�nze des Geistes'           => 'Helm des gro�en Bogens',
                                  'Platinm�nze des Herzens'           => 'Schulterpolster des gro�en Bogens',
                                  'Platinm�nze der St�rke'            => 'Jacke des gro�en Bogens',
                                  'Platinm�nze der Entschlossenheit'  => '�berhose des gro�en Bogens',
                                  'Platinm�nze der Furchtlosigkeit'   => 'Stiefel des gro�en Bogens',
                                  'Platinm�nze der Hand'              => 'Panzerhandschuhe des gro�en Bogens',
                                  'Eisenm�nze der Standhaftigkeit'    => 'Hallanc',
                                  'Eisenm�nze des Wissens'            => 'Curuthol',
                          ),
                          '1' => array(
                                  'Platinm�nze des Geistes'           => 'Hut der m�chtigen Verse',
                                  'Platinm�nze des Herzens'           => 'Schulterpolster der m�chtigen Verse',
                                  'Platinm�nze der St�rke'            => 'Robe der m�chtigen Verse',
                                  'Platinm�nze der Entschlossenheit'  => 'Beinlinge der m�chtigen Verse',
                                  'Platinm�nze der Furchtlosigkeit'   => 'Schuhe der m�chtigen Verse',
                                  'Platinm�nze der Hand'              => 'Handschuhe der m�chtigen Verse',
                                  'Eisenm�nze der Standhaftigkeit'    => 'Isduranc',
                                  'Eisenm�nze des Wissens'            => 'Saelhar',
                          ),
                          '7' => array(
                                  'Platinm�nze des Geistes'           => 'Helm des Klingenmeisters',
                                  'Platinm�nze des Herzens'           => 'Schulterpolster des Klingenmeisters',
                                  'Platinm�nze der St�rke'            => 'Brustpanzer des Klingenmeisters',
                                  'Platinm�nze der Entschlossenheit'	=> '�berhose des Klingenmeisters',
                                  'Platinm�nze der Furchtlosigkeit'   => 'Stiefel des Klingenmeisters',
                                  'Platinm�nze der Hand'              => 'Panzerhandschuhe des Klingenmeisters',
                                  'Eisenm�nze der Standhaftigkeit'    => 'Dagoranc',
                                  'Eisenm�nze des Wissens'            => 'Heronhar',
                          ),
                          '2' => array(
                                  'Platinm�nze des Geistes'           => 'Helm des Hallengenerals',
                                  'Platinm�nze des Herzens'           => 'Schulterpolster des Hallengenerals',
                                  'Platinm�nze der St�rke'            => 'Brustpanzer des Hallengenerals',
                                  'Platinm�nze der Entschlossenheit'  => '�berhose des Hallengenerals',
                                  'Platinm�nze der Furchtlosigkeit'   => 'Stiefel des Hallengenerals',
                                  'Platinm�nze der Hand'              => 'Panzerhandschuhe des Hallengenerals',
                                  'Eisenm�nze der Standhaftigkeit'    => 'T�ranc',
                                  'Eisenm�nze des Wissens'            => 'Rodonhar',
                          ),
                          '5' => array(
                                  'Platinm�nze des Geistes'           => 'Helm des lautlosen Messers',
                                  'Platinm�nze des Herzens'           => 'Schulterpolster des lautlosen Messers',
                                  'Platinm�nze der St�rke'            => 'Jacke des lautlosen Messers',
                                  'Platinm�nze der Entschlossenheit'  => '�berhose des lautlosen Messers',
                                  'Platinm�nze der Furchtlosigkeit'   => 'Stiefel des lautlosen Messers',
                                  'Platinm�nze der Hand'              => 'Panzerhandschuhe des lautlosen Messers',
                                  'Eisenm�nze der Standhaftigkeit'    => 'Arthranc',
                                  'Eisenm�nze des Wissens'            => 'T�rthol',
                          ),
                          '8' => array(
                                  'Platinm�nze des Geistes'           => 'Hut des Wortschmieds',
                                  'Platinm�nze des Herzens'           => 'Schulterpolster des Wortschmieds',
                                  'Platinm�nze der St�rke'            => 'Robe des Wortschmieds',
                                  'Platinm�nze der Entschlossenheit'  => 'Beinlinge des Wortschmieds',
                                  'Platinm�nze der Furchtlosigkeit'   => 'Schuhe des Wortschmieds',
                                  'Platinm�nze der Hand'              => 'Handschuhe des Wortschmieds',
                                  'Eisenm�nze der Standhaftigkeit'    => 'Ithrodhranc',
                                  'Eisenm�nze des Wissens'            => 'Manathar',
                          ),
                          '9' => array(
                                  'Platinm�nze des Geistes'           => 'Helm des Speerschmei�ers',
                                  'Platinm�nze des Herzens'           => 'Schulterpolster des Speerschmei�ers',
                                  'Platinm�nze der St�rke'            => 'Jacke des Speerschmei�ers',
                                  'Platinm�nze der Entschlossenheit'  => '�berhose des Speerschmei�ers',
                                  'Platinm�nze der Furchtlosigkeit'   => 'Stiefel des Speerschmei�ers',
                                  'Platinm�nze der Hand'              => 'Panzerhandschuhe des Speerschmei�ers',
                                  'Eisenm�nze der Standhaftigkeit'    => 'Longranc',
                                  'Eisenm�nze des Wissens'            => 'Curuchar',
                          )
                        )
);                     
?>
