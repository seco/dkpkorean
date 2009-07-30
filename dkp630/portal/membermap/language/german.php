<?php
/*
 * Project:     EQdkp-Plus
 * License:     Creative Commons - Attribution-Noncommercial-Share Alike 3.0 Unported
 * Link:		http://creativecommons.org/licenses/by-nc-sa/3.0/
 * -----------------------------------------------------------------------
 * Began:       2008
 * Date:        $Date: 2009-05-02 23:42:24 +0900 (토, 02 5 2009) $
 * -----------------------------------------------------------------------
 * @author      $Author: wallenium $
 * @copyright   2006-2008 Corgan - Stefan Knaak | Wallenium & the EQdkp-Plus Developer Team
 * @link        http://eqdkp-plus.com
 * @package     eqdkp-plus
 * @version     $Rev: 4712 $
 * 
 * $Id: german.php 4712 2009-05-02 14:42:24Z wallenium $
 */

if ( !defined('EQDKP_INC') ){
    header('HTTP/1.0 404 Not Found');exit;
}

$plang = array_merge($plang, array(
  'membermap'             => 'Mitgliederkarte',
  'pk_membermap_no_data'  => 'Es wurde keine Adresse oder keine Stadt in deinem Userprofil gesetzt. MemberMap wird nur mit diesen Informationen funktionieren.',
  'pk_mmp_googlekey'      => 'Google Maps API Key<br/><a href="http://code.google.com/intl/en/apis/maps/signup.html" target="blank">Kostenlosen API Key generieren</a>',
  'pk_membermap_no_gmapi' => 'Es wurde kein <i>Google Maps</i> API Key eingegeben. Dieser kann <a href="http://code.google.com/intl/en/apis/maps/signup.html" target="blank">auf dieser Seite</a> kostenlos erstellt werden.',
  'pk_membermap_window'   => 'Mitgliederkarte',
  'pk_membermap_noaccess'	=> 'Kein Zugriff, bitte Einloggen',
));
?>
