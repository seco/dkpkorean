<?php
/*
 * Project:     EQdkp-Plus
 * License:     Creative Commons - Attribution-Noncommercial-Share Alike 3.0 Unported
 * Link:		http://creativecommons.org/licenses/by-nc-sa/3.0/
 * -----------------------------------------------------------------------
 * Began:       2008
 * Date:        $Date: 2009-04-16 21:56:53 +0200 (Do, 16 Apr 2009) $
 * -----------------------------------------------------------------------
 * @author      $Author: wallenium $
 * @copyright   2006-2008 Corgan - Stefan Knaak | Wallenium & the EQdkp-Plus Developer Team
 * @link        http://eqdkp-plus.com
 * @package     eqdkp-plus
 * @version     $Rev: 4613 $
 * 
 * $Id: german.php 4613 2009-04-16 19:56:53Z wallenium $
 */

if ( !defined('EQDKP_INC') ){
    header('HTTP/1.0 404 Not Found');exit;
}


$plang = array_merge($plang, array(
  'weather'             => 'Wetter',
  'pk_weather_no_data'  => 'Es wurde kein Land oder keine PLZ in deinem Userprofil gesetzt. MemberMap wird nur mit diesen Informationen funktionieren.',
  'pk_weather_xml_err'  => 'Wetterdatenkonnten nicht abgerufen werden. Bitte versuche es später erneut...',
  'pk_weather_temp'     => 'Temperatur',
   'pk_weather_hours'		=> 'Stunden zum cachen der Wetterdaten (Standard: 6)',
));
?>
