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
                          '12'  => 'Blockadenbrecherschlachtrüstung',
                          '13'  => 'Aegisplattenrüstung',
                          '4'   => 'Geiseljägerschlachtrüstung',
                          '10'  => 'Todesbringergewandung',
                          '6'   => 'Weihegewandung',
                          '11'  => 'Gewand der Kirin Tor',
                          '2'   => 'Schreckensklingenschlachtrüstung',
                          '9'   => 'Weltenbrecherornat',
                          '7'   => 'Nachtweisenornat',
                          '20'  => 'Dunkle Plattenrüstung'
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
                                  'Helm des abtrünnigen Beschützers',
                                  'Schiftung des abtrünnigen Beschützers',
                                  'Brustschutz des abtrünnigen Beschützers',
                                  'Gamaschen des abtrünnigen Beschützers',
                                  'Handschuhe des abtrünnigen Beschützers',
                          ),
                          '13' => array(
                                  'Helm des abtrünnigen Eroberers',
                                  'Schiftung des abtrünnigen Eroberers',
                                  'Brustschutz des abtrünnigen Eroberers',
                                  'Gamaschen des abtrünnigen Eroberers',
                                  'Handschuhe des abtrünnigen Eroberers',
                          ),
                          '9' => array(
                                  'Helm des abtrünnigen Beschützers',
                                  'Schiftung des abtrünnigen Beschützers',
                                  'Brustschutz des abtrünnigen Beschützers',
                                  'Gamaschen des abtrünnigen Beschützers',
                                  'Handschuhe des abtrünnigen Beschützers',
                          ),
                          '4' => array(
                                  'Helm des abtrünnigen Beschützers',
                                  'Schiftung des abtrünnigen Beschützers',
                                  'Brustschutz des abtrünnigen Beschützers',
                                  'Gamaschen des abtrünnigen Beschützers',
                                  'Handschuhe des abtrünnigen Beschützers',
                          ),
                          '10' => array(
                                  'Helm des abtrünnigen Eroberers',
                                  'Schiftung des abtrünnigen Eroberers',
                                  'Brustschutz des abtrünnigen Eroberers',
                                  'Gamaschen des abtrünnigen Eroberers',
                                  'Handschuhe des abtrünnigen Eroberers',
                          ),
                          '6' => array(
                                  'Helm des abtrünnigen Eroberers',
                                  'Schiftung des abtrünnigen Eroberers',
                                  'Brustschutz des abtrünnigen Eroberers',
                                  'Gamaschen des abtrünnigen Eroberers',
                                  'Handschuhe des abtrünnigen Eroberers',
                          ),
                          '11' => array(
                                  'Helm des abtrünnigen Bezwingers',
                                  'Schiftung des abtrünnigen Bezwingers',
                                  'Brustschutz des abtrünnigen Bezwingers',
                                  'Gamaschen des abtrünnigen Bezwingers',
                                  'Handschuhe des abtrünnigen Bezwingers',
                          ),
                          '2' => array(
                                  'Helm des abtrünnigen Bezwingers',
                                  'Schiftung des abtrünnigen Bezwingers',
                                  'Brustschutz des abtrünnigen Bezwingers',
                                  'Gamaschen des abtrünnigen Bezwingers',
                                  'Handschuhe des abtrünnigen Bezwingers',
                          ),
                          '7' => array(
                                  'Helm des abtrünnigen Bezwingers',
                                  'Schiftung des abtrünnigen Bezwingers',
                                  'Brustschutz des abtrünnigen Bezwingers',
                                  'Gamaschen des abtrünnigen Bezwingers',
                                  'Handschuhe des abtrünnigen Bezwingers',
                          ),
                  		    '20' => array(
                                  'Helm des abtrünnigen Bezwingers',
                                  'Schiftung des abtrünnigen Bezwingers',
                                  'Brustschutz des abtrünnigen Bezwingers',
                                  'Gamaschen des abtrünnigen Bezwingers',
                                  'Handschuhe des abtrünnigen Bezwingers',
                          )
                        )
);                     
?>
