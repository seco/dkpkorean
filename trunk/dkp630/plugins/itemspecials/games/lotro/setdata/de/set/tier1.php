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
                          '6'   => 'R�stung des Obersten Besch�tzers',
                          '4'   => 'Bestienmeister-R�stung',
                          '3'   => 'Auerochsen-R�stung',
                          '1'   => 'R�stung der Silbernen Stimme',
                          '7'   => 'Drachenschuppen-R�stung',
                          '2'   => 'R�stung des Kriegshauptmanns',
                          '5'   => 'Schattenpirscher-R�stung',
                          '8'   => 'R�stung des Gebildeten',
                          '9'   => 'R�stung des Speersch�ttlers',
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
                                  'Thorogs Klaue'                 => 'Helm des Obersten Besch�tzers',
                                  'Amulett des Hexenk�nigs'				=> 'Schulterpolster des Obersten Besch�tzers',
                                  'Thorogs Rei�zahn'              => 'Brustpanzer des Obersten Besch�tzers',
                                  'Thorogs Horn'                  => '�berhose des Obersten Besch�tzers',
                                  'St�ck von Storv�g�ns R�stung'  => 'Stiefel des Obersten Besch�tzers',
                                  'Zaudr�s Stachel'               => 'Handschuhe des Obersten Besch�tzers',
                          ),
                          '4' => array(
                                  'Thorogs Klaue'                 => 'Bestienmeister-Hut',
                                  'Amulett des Hexenk�nigs'				=> 'Bestienmeister-Schulterpolster',
                                  'Thorogs Rei�zahn'						  => 'Bestienmeister-Robe',
                                  'Thorogs Horn'                  => 'Bestienmeister-�berhose',
                                  'St�ck von Storv�g�ns R�stung'  => 'Bestienmeister-Stiefel',
                                  'Zaudr�s Stachel'               => 'Bestienmeister-Handschuhe',
                          ),
                          '3' => array(
                                  'Thorogs Klaue'                 => 'Auerochsen-Helm',
                                  'Amulett des Hexenk�nigs'				=> 'Auerochsen-Schulterpolster',
                                  'Thorogs Rei�zahn'              => 'Auerochsen-Brustpanzer',
                                  'Thorogs Horn'                  => 'Auerochsen-�berhose',
                                  'St�ck von Storv�g�ns R�stung'  => 'Auerochsen-Stiefel',
                                  'Zaudr�s Stachel'               => 'Auerochsen-Handschuhe',
                          ),
                          '1' => array(
                                  'Thorogs Klaue'							    => 'Helm der silbernen Stimme',
                                  'Amulett des Hexenk�nigs'				=> 'Schulterpolster der silbernen Stimme',
                                  'Thorogs Rei�zahn'						  => 'Jacke der silbernen Stimme',
                                  'Thorogs Horn'                  => '�berhose der silbernen Stimme',
                                  'St�ck von Storv�g�ns R�stung'  => 'Stiefel der silbernen Stimme',
                                  'Zaudr�s Stachel'               => 'Handschuhe der silbernen Stimme',
                          ),
                          '7' => array(
                                  'Thorogs Klaue'							    => 'Drachenschuppen-Helm',
                                  'Amulett des Hexenk�nigs'				=> 'Drachenschuppen-Schulterpolster',
                                  'Thorogs Rei�zahn'              => 'Drachenschuppen-Brustpanzer',
                                  'Thorogs Horn'                  => 'Drachenschuppen-�berhose',
                                  'St�ck von Storv�g�ns R�stung'  => 'Drachenschuppen-Stiefel',
                                  'Zaudr�s Stachel'               => 'Drachenschuppen-Panzerhandschuhe',
                          ),
                          '2' => array(
                                  'Thorogs Klaue'							    => 'Helm des Kriegshauptmanns',
                                  'Amulett des Hexenk�nigs'				=> 'Schulterpolster des Kriegshauptmanns',
                                  'Thorogs Rei�zahn'						  => 'Brustpanzer des Kriegshauptmanns',
                                  'Thorogs Horn'                  => '�berhose des Kriegshauptmanns',
                                  'St�ck von Storv�g�ns R�stung'  => 'Stiefel des Kriegshauptmanns',
                                  'Zaudr�s Stachel'               => 'Panzerhandschuhe des Kriegshauptmanns',
                          ),
                          '5' => array(
                                  'Thorogs Klaue'							    => 'Schattenpirscher-Helm',
                                  'Amulett des Hexenk�nigs'				=> 'Schattenpirscher-Schulterpolster',
                                  'Thorogs Rei�zahn'						  => 'Schattenpirscher-Jacke',
                                  'Thorogs Horn'                  => 'Schattenpirscher-�berhose',
                                  'St�ck von Storv�g�ns R�stung'  => 'Schattenpirscher-Stiefel',
                                  'Zaudr�s Stachel'               => 'Schattenpirscher-Handschuhe'
                          ),
                          '8' => array(
                                  'Thorogs Klaue'							    => 'Hut des Gebildeten',
                                  'Amulett des Hexenk�nigs'				=> 'Schulterpolster des Gebildeten',
                                  'Thorogs Rei�zahn'						  => 'Robe des Gebildeten',
                                  'Thorogs Horn'                  => 'Beinlinge des Gebildeten',
                                  'St�ck von Storv�g�ns R�stung'  => 'Schuhe des Gebildeten',
                                  'Zaudr�s Stachel'               => 'Handschuhe des Gebildeten'
                          ),
                          '9' => array(
                                  'Thorogs Klaue'							    => 'Helm des Speersch�ttlers',
                                  'Amulett des Hexenk�nigs'				=> 'Schulterpolster des Speersch�ttlers',
                                  'Thorogs Rei�zahn'						  => 'Jacke des Speersch�ttlers',
                                  'Thorogs Horn'                  => '�berhose des Speersch�ttlers',
                                  'St�ck von Storv�g�ns R�stung'  => 'Stiefel des Speersch�ttlers',
                                  'Zaudr�s Stachel'               => 'Panzerhandschuhe des Speersch�ttlers'
                          )
                        )
);                     
?>
