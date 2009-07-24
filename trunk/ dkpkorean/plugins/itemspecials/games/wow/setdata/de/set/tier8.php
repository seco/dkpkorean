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
 * $Id: tier8.php 4680 2009-04-27 21:52:00Z wallenium $
 */
 
if ( !defined('EQDKP_INC') ){
  header('HTTP/1.0 404 Not Found');exit;
} 

// Tier Data
$tier_config["tier8"] = array(
      'language'      => 'de',
      'real_name'     => 'Tier 8.10',
      'pieces_total'  => 5,
      'name'          => array(
                          '12'  => 'Blockadenbrecherschlachtr�stung',
                          '13'  => 'Aegisplattenr�stung',
                          '4'   => 'Geiselj�gerschlachtr�stung',
                          '10'  => 'Todesbringergewandung',
                          '6'   => 'Weihegewandung',
                          '11'  => 'Gewand der Kirin Tor',
                          '2'   => 'Schreckensklingenschlachtr�stung',
                          '9'   => 'Weltenbrecherornat',
                          '7'   => 'Nachtweisenornat',
                          '20'  => 'Dunkle Plattenr�stung'
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
                                  'Helm des abtr�nnigen Besch�tzers',
                                  'Schiftung des abtr�nnigen Besch�tzers',
                                  'Brustschutz des abtr�nnigen Besch�tzers',
                                  'Gamaschen des abtr�nnigen Besch�tzers',
                                  'Handschuhe des abtr�nnigen Besch�tzers',
                          ),
                          '13' => array(
                                  'Helm des abtr�nnigen Eroberers',
                                  'Schiftung des abtr�nnigen Eroberers',
                                  'Brustschutz des abtr�nnigen Eroberers',
                                  'Gamaschen des abtr�nnigen Eroberers',
                                  'Handschuhe des abtr�nnigen Eroberers',
                          ),
                          '9' => array(
                                  'Helm des abtr�nnigen Besch�tzers',
                                  'Schiftung des abtr�nnigen Besch�tzers',
                                  'Brustschutz des abtr�nnigen Besch�tzers',
                                  'Gamaschen des abtr�nnigen Besch�tzers',
                                  'Handschuhe des abtr�nnigen Besch�tzers',
                          ),
                          '4' => array(
                                  'Helm des abtr�nnigen Besch�tzers',
                                  'Schiftung des abtr�nnigen Besch�tzers',
                                  'Brustschutz des abtr�nnigen Besch�tzers',
                                  'Gamaschen des abtr�nnigen Besch�tzers',
                                  'Handschuhe des abtr�nnigen Besch�tzers',
                          ),
                          '10' => array(
                                  'Helm des abtr�nnigen Eroberers',
                                  'Schiftung des abtr�nnigen Eroberers',
                                  'Brustschutz des abtr�nnigen Eroberers',
                                  'Gamaschen des abtr�nnigen Eroberers',
                                  'Handschuhe des abtr�nnigen Eroberers',
                          ),
                          '6' => array(
                                  'Helm des abtr�nnigen Eroberers',
                                  'Schiftung des abtr�nnigen Eroberers',
                                  'Brustschutz des abtr�nnigen Eroberers',
                                  'Gamaschen des abtr�nnigen Eroberers',
                                  'Handschuhe des abtr�nnigen Eroberers',
                          ),
                          '11' => array(
                                  'Helm des abtr�nnigen Bezwingers',
                                  'Schiftung des abtr�nnigen Bezwingers',
                                  'Brustschutz des abtr�nnigen Bezwingers',
                                  'Gamaschen des abtr�nnigen Bezwingers',
                                  'Handschuhe des abtr�nnigen Bezwingers',
                          ),
                          '2' => array(
                                  'Helm des abtr�nnigen Bezwingers',
                                  'Schiftung des abtr�nnigen Bezwingers',
                                  'Brustschutz des abtr�nnigen Bezwingers',
                                  'Gamaschen des abtr�nnigen Bezwingers',
                                  'Handschuhe des abtr�nnigen Bezwingers',
                          ),
                          '7' => array(
                                  'Helm des abtr�nnigen Bezwingers',
                                  'Schiftung des abtr�nnigen Bezwingers',
                                  'Brustschutz des abtr�nnigen Bezwingers',
                                  'Gamaschen des abtr�nnigen Bezwingers',
                                  'Handschuhe des abtr�nnigen Bezwingers',
                          ),
                  		    '20' => array(
                                  'Helm des abtr�nnigen Bezwingers',
                                  'Schiftung des abtr�nnigen Bezwingers',
                                  'Brustschutz des abtr�nnigen Bezwingers',
                                  'Gamaschen des abtr�nnigen Bezwingers',
                                  'Handschuhe des abtr�nnigen Bezwingers',
                          )
                        )
);                     
?>
