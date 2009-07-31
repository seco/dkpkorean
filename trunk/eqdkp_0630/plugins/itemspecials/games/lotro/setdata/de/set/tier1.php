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
      'language'      => 'de',
      'real_name'     => 'Tier 1',
      'pieces_total'  => 6,
      'name'          => array(
                          '6'   => 'Rüstung des Obersten Beschützers',
                          '4'   => 'Bestienmeister-Rüstung',
                          '3'   => 'Auerochsen-Rüstung',
                          '1'   => 'Rüstung der Silbernen Stimme',
                          '7'   => 'Drachenschuppen-Rüstung',
                          '2'   => 'Rüstung des Kriegshauptmanns',
                          '5'   => 'Schattenpirscher-Rüstung',
                          '8'   => 'Rüstung des Gebildeten',
                          '9'   => 'Rüstung des Speerschüttlers',
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
                                  'Thorogs Klaue'                 => 'Helm des Obersten Beschützers',
                                  'Amulett des Hexenkönigs'				=> 'Schulterpolster des Obersten Beschützers',
                                  'Thorogs Reißzahn'              => 'Brustpanzer des Obersten Beschützers',
                                  'Thorogs Horn'                  => 'Überhose des Obersten Beschützers',
                                  'Stück von Storvâgûns Rüstung'  => 'Stiefel des Obersten Beschützers',
                                  'Zaudrûs Stachel'               => 'Handschuhe des Obersten Beschützers',
                          ),
                          '4' => array(
                                  'Thorogs Klaue'                 => 'Bestienmeister-Hut',
                                  'Amulett des Hexenkönigs'				=> 'Bestienmeister-Schulterpolster',
                                  'Thorogs Reißzahn'						  => 'Bestienmeister-Robe',
                                  'Thorogs Horn'                  => 'Bestienmeister-Überhose',
                                  'Stück von Storvâgûns Rüstung'  => 'Bestienmeister-Stiefel',
                                  'Zaudrûs Stachel'               => 'Bestienmeister-Handschuhe',
                          ),
                          '3' => array(
                                  'Thorogs Klaue'                 => 'Auerochsen-Helm',
                                  'Amulett des Hexenkönigs'				=> 'Auerochsen-Schulterpolster',
                                  'Thorogs Reißzahn'              => 'Auerochsen-Brustpanzer',
                                  'Thorogs Horn'                  => 'Auerochsen-Überhose',
                                  'Stück von Storvâgûns Rüstung'  => 'Auerochsen-Stiefel',
                                  'Zaudrûs Stachel'               => 'Auerochsen-Handschuhe',
                          ),
                          '1' => array(
                                  'Thorogs Klaue'							    => 'Helm der silbernen Stimme',
                                  'Amulett des Hexenkönigs'				=> 'Schulterpolster der silbernen Stimme',
                                  'Thorogs Reißzahn'						  => 'Jacke der silbernen Stimme',
                                  'Thorogs Horn'                  => 'Überhose der silbernen Stimme',
                                  'Stück von Storvâgûns Rüstung'  => 'Stiefel der silbernen Stimme',
                                  'Zaudrûs Stachel'               => 'Handschuhe der silbernen Stimme',
                          ),
                          '7' => array(
                                  'Thorogs Klaue'							    => 'Drachenschuppen-Helm',
                                  'Amulett des Hexenkönigs'				=> 'Drachenschuppen-Schulterpolster',
                                  'Thorogs Reißzahn'              => 'Drachenschuppen-Brustpanzer',
                                  'Thorogs Horn'                  => 'Drachenschuppen-Überhose',
                                  'Stück von Storvâgûns Rüstung'  => 'Drachenschuppen-Stiefel',
                                  'Zaudrûs Stachel'               => 'Drachenschuppen-Panzerhandschuhe',
                          ),
                          '2' => array(
                                  'Thorogs Klaue'							    => 'Helm des Kriegshauptmanns',
                                  'Amulett des Hexenkönigs'				=> 'Schulterpolster des Kriegshauptmanns',
                                  'Thorogs Reißzahn'						  => 'Brustpanzer des Kriegshauptmanns',
                                  'Thorogs Horn'                  => 'Überhose des Kriegshauptmanns',
                                  'Stück von Storvâgûns Rüstung'  => 'Stiefel des Kriegshauptmanns',
                                  'Zaudrûs Stachel'               => 'Panzerhandschuhe des Kriegshauptmanns',
                          ),
                          '5' => array(
                                  'Thorogs Klaue'							    => 'Schattenpirscher-Helm',
                                  'Amulett des Hexenkönigs'				=> 'Schattenpirscher-Schulterpolster',
                                  'Thorogs Reißzahn'						  => 'Schattenpirscher-Jacke',
                                  'Thorogs Horn'                  => 'Schattenpirscher-Überhose',
                                  'Stück von Storvâgûns Rüstung'  => 'Schattenpirscher-Stiefel',
                                  'Zaudrûs Stachel'               => 'Schattenpirscher-Handschuhe'
                          ),
                          '8' => array(
                                  'Thorogs Klaue'							    => 'Hut des Gebildeten',
                                  'Amulett des Hexenkönigs'				=> 'Schulterpolster des Gebildeten',
                                  'Thorogs Reißzahn'						  => 'Robe des Gebildeten',
                                  'Thorogs Horn'                  => 'Beinlinge des Gebildeten',
                                  'Stück von Storvâgûns Rüstung'  => 'Schuhe des Gebildeten',
                                  'Zaudrûs Stachel'               => 'Handschuhe des Gebildeten'
                          ),
                          '9' => array(
                                  'Thorogs Klaue'							    => 'Helm des Speerschüttlers',
                                  'Amulett des Hexenkönigs'				=> 'Schulterpolster des Speerschüttlers',
                                  'Thorogs Reißzahn'						  => 'Jacke des Speerschüttlers',
                                  'Thorogs Horn'                  => 'Überhose des Speerschüttlers',
                                  'Stück von Storvâgûns Rüstung'  => 'Stiefel des Speerschüttlers',
                                  'Zaudrûs Stachel'               => 'Panzerhandschuhe des Speerschüttlers'
                          )
                        )
);                     
?>
