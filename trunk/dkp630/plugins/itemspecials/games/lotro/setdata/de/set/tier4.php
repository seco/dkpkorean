<?php
 /*
 * Project:     EQdkp ItemSpecials
 * License:     Creative Commons - Attribution-Noncommercial-Share Alike 3.0 Unported
 * Link:		    http://creativecommons.org/licenses/by-nc-sa/3.0/
 * -----------------------------------------------------------------------
 * Began:       2006
 * Date:        $Date: 2008-12-20 23:14:40 +0100 (Sat, 20 Dec 2008) $
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
$tier_config["tier4"] = array(
      'language'      => 'de',
      'real_name'     => 'Tier 4',
      'pieces_total'  => 6,
      'name'          => array(
                          '6'   => 'R�stung der Verteidigung der Herrin',
                          '4'   => 'R�stung der Weisheit der Herrin',
                          '3'   => 'R�stung der Einsicht der Herrin',
                          '1'   => 'R�stung der Anmut der Herrin',
                          '7'   => 'R�stung der Kraft der Herrin',
                          '2'   => 'R�stung des Mutes der Herrin',
                          '5'   => 'R�stung der Heimlichkeit der Herrin',
                          '8'   => 'R�stung der Vorraussicht der Herrin',
                          '9'   => 'R�stung der Gunst der Herrin',
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
                                  'Gro�er Elbenstein des Geistes'           => 'Helm der Verteidigung der Herrin',
                                  'Gro�er Elbenstein des Herzens'           => 'Schulterpanzer der Verteidigung der Herrin',
                                  'Gro�er Elbenstein der St�rke'            => 'Brustpanzer der Verteidigung der Herrin',
                                  'Gro�er Elbenstein der Entschlossenheit'	=> '�berhose der Verteidigung der Herrin',
                                  'Gro�er Elbenstein der Furchtlosigkeit'   => 'Stiefel der Verteidigung der Herrin',
                                  'Gro�er Elbenstein der Hand'              => 'Panzerhandschuhe der Verteidigung der Herrin',

                          ),
                          '4' => array(
                                  'Gro�er Elbenstein des Geistes'           => 'Hut der Weisheit der Herrin',
                                  'Gro�er Elbenstein des Herzens'           => 'Schultern der Weisheit der Herrin',
                                  'Gro�er Elbenstein der St�rke'            => 'Robe der Weisheit der Herrin',
                                  'Gro�er Elbenstein der Entschlossenheit'	=> 'Beinlinge der Weisheit der Herrin',
                                  'Gro�er Elbenstein der Furchtlosigkeit'   => 'Schuhe der Weisheit der Herrin',
                                  'Gro�er Elbenstein der Hand'              => 'Handschuhe der Weisheit der Herrin',

                          ),
                          '3' => array(
                                  'Gro�er Elbenstein des Geistes'           => 'Helm der Einsicht der Herrin',
                                  'Gro�er Elbenstein des Herzens'           => 'Schulterpolster der Einsicht der Herrin',
                                  'Gro�er Elbenstein der St�rke'            => 'Jacke der Einsicht der Herrin',
                                  'Gro�er Elbenstein der Entschlossenheit'  => '�berhose der Einsicht der Herrin',
                                  'Gro�er Elbenstein der Furchtlosigkeit'   => 'Stiefel der Einsicht der Herrin',
                                  'Gro�er Elbenstein der Hand'              => 'Panzerhandschuhe der Einsicht der Herrin',

                          ),
                          '1' => array(
                                  'Gro�er Elbenstein des Geistes'           => 'Hut der Anmut der Herrin',
                                  'Gro�er Elbenstein des Herzens'           => 'Schultern des Anmutes der Herrin',
                                  'Gro�er Elbenstein der St�rke'            => 'Robe der Anmut der Herrin',
                                  'Gro�er Elbenstein der Entschlossenheit'  => 'Beinlinge des Anmutes der Herrin',
                                  'Gro�er Elbenstein der Furchtlosigkeit'   => 'Schuhe des Anmutes der Herrin',
                                  'Gro�er Elbenstein der Hand'              => 'Handschuhe des Anmutes der Herrin',

                          ),
                          '7' => array(
                                  'Gro�er Elbenstein des Geistes'           => 'Helm der Kraft der Herrin',
                                  'Gro�er Elbenstein des Herzens'           => 'Schulterpanzer der Kraftt der Herrin',
                                  'Gro�er Elbenstein der St�rke'            => 'Brustpanzer der Kraft der Herrin',
                                  'Gro�er Elbenstein der Entschlossenheit'	=> '�berhose der Kraft der Herrin',
                                  'Gro�er Elbenstein der Furchtlosigkeit'   => 'Stiefel der Kraft der Herrin',
                                  'Gro�er Elbenstein der Hand'              => 'Panzerhandschuhe der Kraft der Herrin',

                          ),
                          '2' => array(
                                  'Gro�er Elbenstein des Geistes'           => 'Helm des Mutes der Herrin',
                                  'Gro�er Elbenstein des Herzens'           => 'Schulterpanzer des Mutes der Herrin',
                                  'Gro�er Elbenstein der St�rke'            => 'Brustpanzer des Mutes der Herrin',
                                  'Gro�er Elbenstein der Entschlossenheit'  => '�berhose des Mutes der Herrin',
                                  'Gro�er Elbenstein der Furchtlosigkeit'   => 'Stiefel des Mutes der Herrin',
                                  'Gro�er Elbenstein der Hand'              => 'Panzerhandschuhe des Mutes der Herrin',

                          ),
                          '5' => array(
                                  'Gro�er Elbenstein des Geistes'           => 'Helm der Heimlichkeit der Herrin',
                                  'Gro�er Elbenstein des Herzens'           => 'Schulterpolster der Heimlichkeit der Herrin',
                                  'Gro�er Elbenstein der St�rke'            => 'Jacke der Heimlichkeit der Herrin',
                                  'Gro�er Elbenstein der Entschlossenheit'  => '�berhose der Heimlichkeit der Herrin',
                                  'Gro�er Elbenstein der Furchtlosigkeit'   => 'Stiefel der Heimlichkeit der Herrin',
                                  'Gro�er Elbenstein der Hand'              => 'Panzerhandschuhe der Heimlichkeit der Herrin',

                          ),
                          '8' => array(
                                  'Gro�er Elbenstein des Geistes'           => 'Hut der Voraussicht der Herrin',
                                  'Gro�er Elbenstein des Herzens'           => 'Schultern der Voraussicht der Herrin',
                                  'Gro�er Elbenstein der St�rke'            => 'Robe der Voraussicht der Herrin',
                                  'Gro�er Elbenstein der Entschlossenheit'  => 'Beinlinge der Voraussicht der Herrin',
                                  'Gro�er Elbenstein der Furchtlosigkeit'   => 'Schuhe der Voraussicht der Herrin',
                                  'Gro�er Elbenstein der Hand'              => 'Handschuhe der Voraussicht der Herrin',

                          ),
                          '9' => array(
                                  'Gro�er Elbenstein des Geistes'           => 'Helm der Gunst der Herrin',
                                  'Gro�er Elbenstein des Herzens'           => 'Schulterpolster der Gunst der Herrin',
                                  'Gro�er Elbenstein der St�rke'            => 'Jacke der Gunst der Herrin',
                                  'Gro�er Elbenstein der Entschlossenheit'  => '�berhose der Gunst der Herrin',
                                  'Gro�er Elbenstein der Furchtlosigkeit'   => 'Stiefel der Gunst der Herrin',
                                  'Gro�er Elbenstein der Hand'              => 'Panzerhandschuhe der Gunst der Herrin',

                          )
                        )
);
?>