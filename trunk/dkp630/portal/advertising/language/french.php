<?php
/*
 * Project:     EQdkp-Plus
 * License:     Creative Commons - Attribution-Noncommercial-Share Alike 3.0 Unported
 * Link:		http://creativecommons.org/licenses/by-nc-sa/3.0/
 * -----------------------------------------------------------------------
 * Began:       2008
 * Date:        $Date: 2008-07-30 13:56:27 +0200 (Mi, 30 Jul 2008) $
 * -----------------------------------------------------------------------
 * @author      $Author: wallenium $
 * @copyright   2006-2008 Corgan - Stefan Knaak | Wallenium & the EQdkp-Plus Developer Team
 * @link        http://eqdkp-plus.com
 * @package     eqdkp-plus
 * @version     $Rev: 2465 $
 * 
 * $Id: english.php 2465 2008-07-30 11:56:27Z wallenium $
 */

if ( !defined('EQDKP_INC') ){
    header('HTTP/1.0 404 Not Found');exit;
}

$default = '
<script type="text/javascript"><!--
google_ad_client = "pub-4383477093700412";
/* 160x600, Erstellt 09.07.08 */
google_ad_slot = "3288196719";
google_ad_width = 160;
google_ad_height = 600;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>
';




$plang = array_merge($plang, array(
  'advertising'                 => 'PublicitÚ',
  'portal_advertising_text'     => $default,
  'pk_advertising_useroutput'   => 'Code Google Adsense',
  'pk_advertising_headtext'     => 'Titre personnalisÚ',
));
?>
