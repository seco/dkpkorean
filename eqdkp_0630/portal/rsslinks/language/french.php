<?php
/*
 * Project:     EQdkp-Plus
 * License:     Creative Commons - Attribution-Noncommercial-Share Alike 3.0 Unported
 * Link:		http://creativecommons.org/licenses/by-nc-sa/3.0/
 * -----------------------------------------------------------------------
 * Began:       2008
 * Date:        $Date: 2009-02-22 01:14:37 +0100 (So, 22 Feb 2009) $
 * -----------------------------------------------------------------------
 * @author      $Author: osr-corgan $
 * @copyright   2006-2008 Corgan - Stefan Knaak | Wallenium & the EQdkp-Plus Developer Team
 * @link        http://eqdkp-plus.com
 * @package     eqdkp-plus
 * @version     $Rev: 3939 $
 * 
 * $Id: english.php 3939 2009-02-22 00:14:37Z osr-corgan $
 */

if ( !defined('EQDKP_INC') ){
    header('HTTP/1.0 404 Not Found');exit;
}

$plang = array_merge($plang, array(
  'rsslinks'                 	=> 'Raccourcis et RSS',
  'ql_next_raids'               => 'RSS des prochains raids',
  'ql_news'                 	=> 'RSS des nouvelles',
  'ql_last_items'               => 'RSS des derniers objets',
  'ql_last_raid'                => 'RSS des derniers raids',
  'ql_sb'                		=> 'RSS des Shoutbox',

  
  'ql_getdkp_link' 	            => 'GetDKP',
  'ql_getdkp_dl'             	=> 'GetDKP pour WoW',
  'ql_ctrt'             		=> 'CTRT pour WoW',
  'ql_vista_gadget'             => 'Gadget Vista EQdkp',

));
?>
