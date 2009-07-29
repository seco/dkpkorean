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
                          '6'   => 'Rüstung der Verteidigung der Herrin',
                          '4'   => 'Rüstung der Weisheit der Herrin',
                          '3'   => 'Rüstung der Einsicht der Herrin',
                          '1'   => 'Rüstung der Anmut der Herrin',
                          '7'   => 'Rüstung der Kraft der Herrin',
                          '2'   => 'Rüstung des Mutes der Herrin',
                          '5'   => 'Rüstung der Heimlichkeit der Herrin',
                          '8'   => 'Rüstung der Vorraussicht der Herrin',
                          '9'   => 'Rüstung der Gunst der Herrin',
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
                                  'Großer Elbenstein des Geistes'           => 'Helm der Verteidigung der Herrin',
                                  'Großer Elbenstein des Herzens'           => 'Schulterpanzer der Verteidigung der Herrin',
                                  'Großer Elbenstein der Stärke'            => 'Brustpanzer der Verteidigung der Herrin',
                                  'Großer Elbenstein der Entschlossenheit'	=> 'Überhose der Verteidigung der Herrin',
                                  'Großer Elbenstein der Furchtlosigkeit'   => 'Stiefel der Verteidigung der Herrin',
                                  'Großer Elbenstein der Hand'              => 'Panzerhandschuhe der Verteidigung der Herrin',

                          ),
                          '4' => array(
                                  'Großer Elbenstein des Geistes'           => 'Hut der Weisheit der Herrin',
                                  'Großer Elbenstein des Herzens'           => 'Schultern der Weisheit der Herrin',
                                  'Großer Elbenstein der Stärke'            => 'Robe der Weisheit der Herrin',
                                  'Großer Elbenstein der Entschlossenheit'	=> 'Beinlinge der Weisheit der Herrin',
                                  'Großer Elbenstein der Furchtlosigkeit'   => 'Schuhe der Weisheit der Herrin',
                                  'Großer Elbenstein der Hand'              => 'Handschuhe der Weisheit der Herrin',

                          ),
                          '3' => array(
                                  'Großer Elbenstein des Geistes'           => 'Helm der Einsicht der Herrin',
                                  'Großer Elbenstein des Herzens'           => 'Schulterpolster der Einsicht der Herrin',
                                  'Großer Elbenstein der Stärke'            => 'Jacke der Einsicht der Herrin',
                                  'Großer Elbenstein der Entschlossenheit'  => 'Überhose der Einsicht der Herrin',
                                  'Großer Elbenstein der Furchtlosigkeit'   => 'Stiefel der Einsicht der Herrin',
                                  'Großer Elbenstein der Hand'              => 'Panzerhandschuhe der Einsicht der Herrin',

                          ),
                          '1' => array(
                                  'Großer Elbenstein des Geistes'           => 'Hut der Anmut der Herrin',
                                  'Großer Elbenstein des Herzens'           => 'Schultern des Anmutes der Herrin',
                                  'Großer Elbenstein der Stärke'            => 'Robe der Anmut der Herrin',
                                  'Großer Elbenstein der Entschlossenheit'  => 'Beinlinge des Anmutes der Herrin',
                                  'Großer Elbenstein der Furchtlosigkeit'   => 'Schuhe des Anmutes der Herrin',
                                  'Großer Elbenstein der Hand'              => 'Handschuhe des Anmutes der Herrin',

                          ),
                          '7' => array(
                                  'Großer Elbenstein des Geistes'           => 'Helm der Kraft der Herrin',
                                  'Großer Elbenstein des Herzens'           => 'Schulterpanzer der Kraftt der Herrin',
                                  'Großer Elbenstein der Stärke'            => 'Brustpanzer der Kraft der Herrin',
                                  'Großer Elbenstein der Entschlossenheit'	=> 'Überhose der Kraft der Herrin',
                                  'Großer Elbenstein der Furchtlosigkeit'   => 'Stiefel der Kraft der Herrin',
                                  'Großer Elbenstein der Hand'              => 'Panzerhandschuhe der Kraft der Herrin',

                          ),
                          '2' => array(
                                  'Großer Elbenstein des Geistes'           => 'Helm des Mutes der Herrin',
                                  'Großer Elbenstein des Herzens'           => 'Schulterpanzer des Mutes der Herrin',
                                  'Großer Elbenstein der Stärke'            => 'Brustpanzer des Mutes der Herrin',
                                  'Großer Elbenstein der Entschlossenheit'  => 'Überhose des Mutes der Herrin',
                                  'Großer Elbenstein der Furchtlosigkeit'   => 'Stiefel des Mutes der Herrin',
                                  'Großer Elbenstein der Hand'              => 'Panzerhandschuhe des Mutes der Herrin',

                          ),
                          '5' => array(
                                  'Großer Elbenstein des Geistes'           => 'Helm der Heimlichkeit der Herrin',
                                  'Großer Elbenstein des Herzens'           => 'Schulterpolster der Heimlichkeit der Herrin',
                                  'Großer Elbenstein der Stärke'            => 'Jacke der Heimlichkeit der Herrin',
                                  'Großer Elbenstein der Entschlossenheit'  => 'Überhose der Heimlichkeit der Herrin',
                                  'Großer Elbenstein der Furchtlosigkeit'   => 'Stiefel der Heimlichkeit der Herrin',
                                  'Großer Elbenstein der Hand'              => 'Panzerhandschuhe der Heimlichkeit der Herrin',

                          ),
                          '8' => array(
                                  'Großer Elbenstein des Geistes'           => 'Hut der Voraussicht der Herrin',
                                  'Großer Elbenstein des Herzens'           => 'Schultern der Voraussicht der Herrin',
                                  'Großer Elbenstein der Stärke'            => 'Robe der Voraussicht der Herrin',
                                  'Großer Elbenstein der Entschlossenheit'  => 'Beinlinge der Voraussicht der Herrin',
                                  'Großer Elbenstein der Furchtlosigkeit'   => 'Schuhe der Voraussicht der Herrin',
                                  'Großer Elbenstein der Hand'              => 'Handschuhe der Voraussicht der Herrin',

                          ),
                          '9' => array(
                                  'Großer Elbenstein des Geistes'           => 'Helm der Gunst der Herrin',
                                  'Großer Elbenstein des Herzens'           => 'Schulterpolster der Gunst der Herrin',
                                  'Großer Elbenstein der Stärke'            => 'Jacke der Gunst der Herrin',
                                  'Großer Elbenstein der Entschlossenheit'  => 'Überhose der Gunst der Herrin',
                                  'Großer Elbenstein der Furchtlosigkeit'   => 'Stiefel der Gunst der Herrin',
                                  'Großer Elbenstein der Hand'              => 'Panzerhandschuhe der Gunst der Herrin',

                          )
                        )
);
?>