<?php
/*
 * Project:     EQdkp-Plus
 * License:     Creative Commons - Attribution-Noncommercial-Share Alike 3.0 Unported
 * Link:		http://creativecommons.org/licenses/by-nc-sa/3.0/
 * -----------------------------------------------------------------------
 * Began:       2008
 * Date:        $Date: 2008-10-06 18:51:30 +0200 (Mo, 06 Okt 2008) $
 * -----------------------------------------------------------------------
 * @author      $Author: wallenium $
 * @copyright   2006-2008 Corgan - Stefan Knaak | Wallenium & the EQdkp-Plus Developer Team
 * @link        http://eqdkp-plus.com
 * @package     eqdkp-plus
 * @version     $Rev: 2777 $
 * 
 * $Id: english.php 2777 2008-10-06 16:51:30Z wallenium $
 */


if ( !defined('EQDKP_INC') ){
    header('HTTP/1.0 404 Not Found');exit;
}
 
$plang = array_merge($plang, array(
  'teamspeak'                   => 'Teamspeak',
  'pk_portal_tsvoice'           => 'Serveur vocal',
  'pk_set_ts_title'             => 'Nom du serveur TS',
  'pk_set_ts_serverAddress'     => 'IP du serveur TS',
  'pk_set_ts_serverQueryPort'   => 'Port de requête',
  'pk_set_ts_serverUDPPort'     => 'Port UDP',
  'pk_set_ts_serverPasswort'    => 'Mot de passe serveur',
  'pk_set_ts_channelflags'      => 'Affiche le type des canaux (R,M,S,P etc.)',
  'pk_set_ts_userstatus'        => 'Affiche le statut des utilisateurs (U,R,SA etc.)',
  'pk_set_ts_showchannel'       => 'Affiche les canaux ? (0 = uniquement Joueur)',
  'pk_set_ts_showEmptychannel'  => 'Affiche les canaux vides ?',
  'pk_set_ts_overlib_mouseover' => 'Affiche les informations au pointeur de souris (allemand uniquement)',
  'pk_set_ts_joinable'          => 'Affiche le lien pour rejoindre le serveur ?',
  'pk_set_ts_joinableMember'    => 'Affiche le lien uniquement aux utilisateurs enregistrés ?',
  'pk_ts_shortmemnames'         => 'Tronquer les noms trop long',
  'pk_ts_memnamelength'         => 'Longueur max du nom des utilisateurs, tronque après x lettres.',
));
?>
