<?php
 /*
 * Project:     EQdkp ItemSpecials
 * License:     Creative Commons - Attribution-Noncommercial-Share Alike 3.0 Unported
 * Link:		    http://creativecommons.org/licenses/by-nc-sa/3.0/
 * -----------------------------------------------------------------------
 * Began:       2006
 * Date:        $Date: 2009-04-27 23:52:00 +0200 (Mo, 27 Apr 2009) $
 * -----------------------------------------------------------------------
 * @author      $Author: wallenium $
 * @copyright   2005-2008 Simon (Wallenium) Wallmann
 * @link        http://eqdkp-plus.com
 * @package     itemspecials
 * @version     $Rev: 4680 $
 * 
 * $Id: tier75.php 4680 2009-04-27 21:52:00Z wallenium $
 */
 
if ( !defined('EQDKP_INC') ){
  header('HTTP/1.0 404 Not Found');exit;
} 

// Tier Data
$tier_config["tier75"] = array(
      'language'      => 'de',
      'real_name'     => 'Tier 7.25',
      'pieces_total'  => 5,
      'name'          => array(
                          '12'  => 'Schreckenspanzerschlachtr�stung',
                          '13'  => 'Schlachtr�stung der Erl�sung',
                          '4'   => 'Schlachtr�stung des Gruftpirschers',
                          '10'  => 'Gewand des versuchten Herzens',
                          '6'   => 'Ornat des Glaubens',
                          '11'  => 'Frostfeuergewand',
                          '2'   => 'Schlachtr�stung der Knochensense',
                          '9'   => 'Erdspaltergewand',
                          '7'   => 'Ornat des Traumwandlers',
                          '20'  => 'Schlachtr�stung des Gei�elerben'
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
                                  'Krone des verlorenen Besch�tzers',
                                  'Mantel des verlorenen Besch�tzers',
                                  'Brustplatte des verlorenen Besch�tzers',
                                  'Beinplatten des verlorenen Besch�tzers',
                                  'Stulpen des verlorenen Besch�tzers',
                          ),
                          '13' => array(
                                  'Krone des verlorenen Eroberers',
                                  'Mantel des verlorenen Eroberers',
                                  'Brustplatte des verlorenen Eroberers',
                                  'Beinplatten des verlorenen Eroberers',
                                  'Stulpen des verlorenen Eroberers',
                          ),
                          '9' => array(
                                  'Krone des verlorenen Besch�tzers',
                                  'Mantel des verlorenen Besch�tzers',
                                  'Brustplatte des verlorenen Besch�tzers',
                                  'Beinplatten des verlorenen Besch�tzers',
                                  'Stulpen des verlorenen Besch�tzers',
                          ),
                          '4' => array(
                                  'Krone des verlorenen Besch�tzers',
                                  'Mantel des verlorenen Besch�tzers',
                                  'Brustplatte des verlorenen Besch�tzers',
                                  'Beinplatten des verlorenen Besch�tzers',
                                  'Stulpen des verlorenen Besch�tzers',
                          ),
                          '10' => array(
                                  'Krone des verlorenen Eroberers',
                                  'Mantel des verlorenen Eroberers',
                                  'Brustplatte des verlorenen Eroberers',
                                  'Beinplatten des verlorenen Eroberers',
                                  'Stulpen des verlorenen Eroberers',
                          ),
                          '6' => array(
                                  'Krone des verlorenen Eroberers',
                                  'Mantel des verlorenen Eroberers',
                                  'Brustplatte des verlorenen Eroberers',
                                  'Beinplatten des verlorenen Eroberers',
                                  'Stulpen des verlorenen Eroberers',
                          ),
                          '11' => array(
                                  'Krone des verlorenen Bezwingers',
                                  'Mantel des verlorenen Bezwingers',
                                  'Brustplatte des verlorenen Bezwingers',
                                  'Beinplatten des verlorenen Bezwingers',
                                  'Stulpen des verlorenen Bezwingers',
                          ),
                          '2' => array(
                                  'Krone des verlorenen Bezwingers',
                                  'Mantel des verlorenen Bezwingers',
                                  'Brustplatte des verlorenen Bezwingers',
                                  'Beinplatten des verlorenen Bezwingers',
                                  'Stulpen des verlorenen Bezwingers',
                          ),
                          '7' => array(
                                  'Krone des verlorenen Bezwingers',
                                  'Mantel des verlorenen Bezwingers',
                                  'Brustplatte des verlorenen Bezwingers',
                                  'Beinplatten des verlorenen Bezwingers',
                                  'Stulpen des verlorenen Bezwingers',
                          ),
                  		    '20' => array(
                                  'Krone des verlorenen Bezwingers',
                                  'Mantel des verlorenen Bezwingers',
                                  'Brustplatte des verlorenen Bezwingers',
                                  'Beinplatten des verlorenen Bezwingers',
                                  'Stulpen des verlorenen Bezwingers',
                          )
                    )
);                     
?>