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
 * $Id: tier75.php 3310 2008-12-04 10:50:51Z wallenium $
 */
 
if ( !defined('EQDKP_INC') ){
  header('HTTP/1.0 404 Not Found');exit;
} 

// Tier Data
$tier_config["tier85"] = array(
      'language'      => 'de',
      'real_name'     => 'Tier 8.25',
      'pieces_total'  => 5,
      'name'          => array(
                          '12'  => 'Platte des Blockadenbrechers',
                          '13'  => 'Schlachtrüstung der Aegis',
                          '4'   => 'Schlachtrüstung des Geißeljägers',
                          '10'  => 'Gewand des Todesbringers',
                          '6'   => 'Gewand der Weihung',
                          '11'  => 'Gewand der Kirin\'tor',
                          '2'   => 'Schlachtrüstung der Schreckensklinge',
                          '9'   => 'Ornat des Blockadenbrechers',
                          '7'   => 'Gewand des Nachtweisen',
                          '20'  => 'Schlachtrüstung der dunklen Runen'
                        ),
      'head_names'    => array(
                          1 => $user->lang['is_Head'],
                          2 => $user->lang['is_Shoulders'],
                          3 => $user->lang['is_Chest'],
                          4 => $user->lang['is_Boots'],
                          5 => $user->lang['is_Hands'],
                        ),
      'data'          => array(
                          '12' => array(
                                  'Krone des abtrünnigen Beschützers',
                                  'Mantel des abtrünnigen Beschützers',
                                  'Brustplatte des abtrünnigen Beschützers',
                                  'Beinplatten des abtrünnigen Beschützers',
                                  'Stulpen des abtrünnigen Beschützers',
                          ),
                          '13' => array(
                                  'Krone des abtrünnigen Eroberers',
                                  'Mantel des abtrünnigen Eroberers',
                                  'Brustplatte des abtrünnigen Eroberers',
                                  'Beinplatten des abtrünnigen Eroberers',
                                  'Stulpen des abtrünnigen Eroberers',
                          ),
                          '9' => array(
                                  'Krone des abtrünnigen Beschützers',
                                  'Mantel des abtrünnigen Beschützers',
                                  'Brustplatte des abtrünnigen Beschützers',
                                  'Beinplatten des abtrünnigen Beschützers',
                                  'Stulpen des abtrünnigen Beschützers',
                          ),
                          '4' => array(
                                  'Krone des abtrünnigen Beschützers',
                                  'Mantel des abtrünnigen Beschützers',
                                  'Brustplatte des abtrünnigen Beschützers',
                                  'Beinplatten des abtrünnigen Beschützers',
                                  'Stulpen des abtrünnigen Beschützers',
                          ),
                          '10' => array(
                                  'Krone des abtrünnigen Eroberers',
                                  'Mantel des abtrünnigen Eroberers',
                                  'Brustplatte des abtrünnigen Eroberers',
                                  'Beinplatten des abtrünnigen Eroberers',
                                  'Stulpen des abtrünnigen Eroberers',
                          ),
                          '6' => array(
                                  'Krone des abtrünnigen Eroberers',
                                  'Mantel des abtrünnigen Eroberers',
                                  'Brustplatte des abtrünnigen Eroberers',
                                  'Beinplatten des abtrünnigen Eroberers',
                                  'Stulpen des abtrünnigen Eroberers',
                          ),
                          '11' => array(
                                  'Krone des abtrünnigen Bezwingers',
                                  'Mantel des abtrünnigen Bezwingers',
                                  'Brustplatte des abtrünnigen Bezwingers',
                                  'Beinplatten des abtrünnigen Bezwingers',
                                  'Stulpen des abtrünnigen Bezwingers',
                          ),
                          '2' => array(
                                  'Krone des abtrünnigen Bezwingers',
                                  'Mantel des abtrünnigen Bezwingers',
                                  'Brustplatte des abtrünnigen Bezwingers',
                                  'Beinplatten des abtrünnigen Bezwingers',
                                  'Stulpen des abtrünnigen Bezwingers',
                          ),
                          '7' => array(
                                  'Krone des abtrünnigen Bezwingers',
                                  'Mantel des abtrünnigen Bezwingers',
                                  'Brustplatte des abtrünnigen Bezwingers',
                                  'Beinplatten des abtrünnigen Bezwingers',
                                  'Stulpen des abtrünnigen Bezwingers',
                          ),
                  		    '20' => array(
                                  'Krone des abtrünnigen Bezwingers',
                                  'Mantel des abtrünnigen Bezwingers',
                                  'Brustplatte des abtrünnigen Bezwingers',
                                  'Beinplatten des abtrünnigen Bezwingers',
                                  'Stulpen des abtrünnigen Bezwingers',
                          )
                    )
);                     
?>
