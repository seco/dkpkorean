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
  'quicksearch' => 'Recherche rapide',
  'pm_qs_search'   => 'Objet :',
  'pm_qs_db'       => 'Base :',
  'pm_qs_button'   => 'rechercher',
  'pm_qs_newwindow'  => 'Afficher le résultat dans une nouvelle fenêtre',
  'pm_qs_not_supp'  => 'Désolé, votre jeu n\'est pas compatible.',
));
?>