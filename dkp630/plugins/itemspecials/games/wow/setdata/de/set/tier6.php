<?php
 /*
 * Project:     EQdkp ItemSpecials
 * License:     Creative Commons - Attribution-Noncommercial-Share Alike 3.0 Unported
 * Link:		    http://creativecommons.org/licenses/by-nc-sa/3.0/
 * -----------------------------------------------------------------------
 * Began:       2006
 * Date:        $Date: 2008-12-04 11:50:51 +0100 (Do, 04 Dez 2008) $
 * -----------------------------------------------------------------------
 * @author      $Author: wallenium $
 * @copyright   2005-2008 Simon (Wallenium) Wallmann
 * @link        http://eqdkp-plus.com
 * @package     itemspecials
 * @version     $Rev: 3310 $
 * 
 * $Id: tier6.php 3310 2008-12-04 10:50:51Z wallenium $
 */
 
if ( !defined('EQDKP_INC') ){
  header('HTTP/1.0 404 Not Found');exit;
} 

// Tier Data
$tier_config["tier6"] = array(
      'language'      => 'de',
      'real_name'     => 'Tier 6',
      'pieces_total'  => 8,
      'name'          => array(
                          '12'  => 'Schlachtrüstung des Ansturms',
                          '13'  => 'Rüstung des Lichtbringers',
                          '4'   => 'Rüstung des Gronnpirschers',
                          '10'  => 'Gewandung der Boshaftigkeit',
                          '6'   => 'Gewänder der Absolution',
                          '11'  => 'Ornat des Gewittersturms',
                          '2'   => 'Rüstung des Schlächters',
                          '9'   => 'Gewandung des Himmelsdonners',
                          '7'   => 'Gewandung des Donnerherzens',
                          '20'  => '--'
                        ),
      'head_names'    => array(
                          1 => $user->lang['is_Head'],
                          2 => $user->lang['is_Shoulders'],
                          3 => $user->lang['is_Chest'],
                          4 => $user->lang['is_Legs'],
                          5 => $user->lang['is_Hands'],
                          6 => $user->lang['is_Belt'],
                          7 => $user->lang['is_Wrist'],
                          8 => $user->lang['is_Boots'],
                        ),
      'data'          => array(
                          '12' => array(
                                  'Helm des vergessenen Beschützers',
                                  'Schulterstücke des vergessenen Beschützers',
                                  'Brustschutz des vergessenen Beschützers',
                                  'Gamaschen des vergessenen Beschützers',
                                  'Handschuhe des vergessenen Beschützers',
                              		'Gürtel des vergessenen Beschützers',
                              		'Armschienen des vergessenen Beschützers',
                              		'Stiefel des vergessenen Beschützers',
                          ),
                          '13' => array(
                                  'Helm des vergessenen Eroberers',
                                  'Schulterstücke des vergessenen Eroberers',
                                  'Brustschutz des vergessenen Eroberers',
                                  'Gamaschen des vergessenen Eroberers',
                                  'Handschuhe des vergessenen Eroberers',
                              		'Gürtel des vergessenen Eroberers',
                              		'Armschienen des vergessenen Eroberers',
                              		'Stiefel des vergessenen Eroberers',
                          ),
                          '9' => array(
                                  'Helm des vergessenen Beschützers',
                                  'Schulterstücke des vergessenen Beschützers',
                                  'Brustschutz des vergessenen Beschützers',
                                  'Gamaschen des vergessenen Beschützers',
                                  'Handschuhe des vergessenen Beschützers',
                              		'Gürtel des vergessenen Beschützers',
                              		'Armschienen des vergessenen Beschützers',
                              		'Stiefel des vergessenen Beschützers',
                          ),
                          '4' => array(
                                  'Helm des vergessenen Beschützers',
                                  'Schulterstücke des vergessenen Beschützers',
                                  'Brustschutz des vergessenen Beschützers',
                                  'Gamaschen des vergessenen Beschützers',
                                  'Handschuhe des vergessenen Beschützers',
                              		'Gürtel des vergessenen Beschützers',
                              		'Armschienen des vergessenen Beschützers',
                              		'Stiefel des vergessenen Beschützers',
                          ),
                          '10' => array(
                                  'Helm des vergessenen Eroberers',
                                  'Schulterstücke des vergessenen Eroberers',
                                  'Brustschutz des vergessenen Eroberers',
                                  'Gamaschen des vergessenen Eroberers',
                                  'Handschuhe des vergessenen Eroberers',
                              		'Gürtel des vergessenen Eroberers',
                              		'Armschienen des vergessenen Eroberers',
                              		'Stiefel des vergessenen Eroberers',
                          ),
                          '6' => array(
                                  'Helm des vergessenen Eroberers',
                                  'Schulterstücke des vergessenen Eroberers',
                                  'Brustschutz des vergessenen Eroberers',
                                  'Gamaschen des vergessenen Eroberers',
                                  'Handschuhe des vergessenen Eroberers',
                              		'Gürtel des vergessenen Eroberers',
                              		'Armschienen des vergessenen Eroberers',
                              		'Stiefel des vergessenen Eroberers',
                          ),
                          '11' => array(
                                  'Helm des vergessenen Bezwingers',
                                  'Schulterstücke des vergessenen Bezwingers',
                                  'Brustschutz des vergessenen Bezwingers',
                                  'Gamaschen des vergessenen Bezwingers',
                                  'Handschuhe des vergessenen Bezwingers',
                              		'Gürtel des vergessenen Bezwingers',
                              		'Armschienen des vergessenen Bezwingers',
                              		'Stiefel des vergessenen Bezwingers',
                          ),
                          '2' => array(
                                  'Helm des vergessenen Bezwingers',
                                  'Schulterstücke des vergessenen Bezwingers',
                                  'Brustschutz des vergessenen Bezwingers',
                                  'Gamaschen des vergessenen Bezwingers',
                                  'Handschuhe des vergessenen Bezwingers',
                              		'Gürtel des vergessenen Bezwingers',
                              		'Armschienen des vergessenen Bezwingers',
                              		'Stiefel des vergessenen Bezwingers',
                          ),
                          '7' => array(
                                  'Helm des vergessenen Bezwingers',
                                  'Schulterstücke des vergessenen Bezwingers',
                                  'Brustschutz des vergessenen Bezwingers',
                                  'Gamaschen des vergessenen Bezwingers',
                                  'Handschuhe des vergessenen Bezwingers',
                              		'Gürtel des vergessenen Bezwingers',
                              		'Armschienen des vergessenen Bezwingers',
                              		'Stiefel des vergessenen Bezwingers',
                          )
                        )
);                     
?>
