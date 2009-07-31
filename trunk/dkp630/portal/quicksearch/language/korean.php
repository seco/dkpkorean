<?php
/*
 * Project:     EQdkp-Plus
 * License:     Creative Commons - Attribution-Noncommercial-Share Alike 3.0 Unported
 * Link:		    http://creativecommons.org/licenses/by-nc-sa/3.0/
 * -----------------------------------------------------------------------
 * Began:       2008
 * Date:        $Date: 2008-12-13 18:54:23 +0100 (Sa, 13 Dec 2008) $
 * -----------------------------------------------------------------------
 * @author      $Author: BadTwin $
 * @copyright   2006-2008 Corgan - Stefan Knaak | Wallenium & the EQdkp-Plus Developer Team
 * @link        http://eqdkp-plus.com
 * @package     eqdkp-plus
 * @version     $Rev:  $
 * 
 * $Id: english.php 2896 2008-10-27 13:44:54Z BadTwin $
 */

if ( !defined('EQDKP_INC') ){
    header('HTTP/1.0 404 Not Found');
    exit;
}

$plang = array_merge($plang, array(
  'quicksearch' => 'Quick Search',
  'pm_qs_search'   => '���� �˻�:',
  'pm_qs_db'       => 'Database:',
  'pm_qs_button'   => '�˻�',
  'pm_qs_newwindow'  => 'Open the Result in an new Window',
  'pm_qs_not_supp'  => 'Sorry, your game is not supported.',
));
?>