<?php
 /*
 * Project:     EQdkp CharManager 1
 * License:     Creative Commons - Attribution-Noncommercial-Share Alike 3.0 Unported
 * Link:		    http://creativecommons.org/licenses/by-nc-sa/3.0/
 * -----------------------------------------------------------------------
 * Began:       2006
 * Date:        $Date: 2009-02-21 16:52:18 +0100 (Sa, 21 Feb 2009) $
 * -----------------------------------------------------------------------
 * @author      $Author: wallenium $
 * @copyright   2005-2008 Simon (Wallenium) Wallmann
 * @link        http://eqdkp-plus.com
 * @package     charmanager
 * @version     $Rev: 3926 $
 * 
 * $Id: lang_main.php 3926 2009-02-21 15:52:18Z wallenium $
 */

//Main 
$lang['charmanager']          = 'Charakterverwaltung';
$lang['uc_manage_chars']			= 'Charactere verwalten';
$lang['uc_credit_name']				= 'EQDKP CharManager';
$lang['uc_enu_profiles']			= 'Profile';
$lang['cm_short_desc']        = 'Benutzer können Mitglieder verwalten';
$lang['cm_long_desc']         = 'Mit dem Charmanager können die Benutzer des eqdkp Mitglieder anlegen, verwalten und verknüpfen. Es stehen ausserdem erweiterte Profilfelder zur Verfügung.';

// Error Messages
$lang['uc_error_p1']          = 'der Benutzer mit dem Namen ';
$lang['uc_error_p2']          = ' existiert bereits als ID ';
$lang['uc_error_p3']          = ' . Bitte versuche es mit einem anderen Namen.';
$lang['uc_saved_not']         = 'Beim speichern der Änderungen ist ein Fehler aufgetreten. Bitte versuche es erneut oder melde es einem Administrator';
$lang['uc_error_memberinfos']	= 'Konnte die Mitgliederinformationen des CharManagers nicht abrufen.';
$lang['uc_error_raidinfos']		= 'Konnte die Raidinformationen des CharManagers nicht abrufen.';
$lang['uc_error_iteminfos']		= 'Konnte die Gegenstandsinformationen des CharManagers nicht abrufen.';
$lang['uc_error_itemraidi']		= 'Konnte die Gegenstands-/Raidinformationen des CharManagers nicht abrufen.';
$lang['uc_not_loggedin']			= 'Du bist nicht angemeldet';
$lang['uc_not_installed']			= 'Das Character Manager PlugIn ist nicht installiert';
$lang['uc_no_prmissions']			= 'Du besitzt keine Berechtigung diese Seite zu betrachten. Bitte frage einen Administrator';

// Info Boxes
$lang['uc_managechar']        = 'Wähle den Charakter/ die Charaktere die dir gehören aus. Du kannst mehrere auswählen, indem du einfach mehrere Checkboxen auswählst.<br/>Du kannst entweder unzugewiesene oder dir zugewiesene Charakter annehmen. <br/><br/>Sollte sich jemand anderes deinen Charakter zugewiesen haben, bitte einen Administrator kontaktieren.';
$lang['uc_select_char']       = 'Wähle den Charakter, den du bearbeiten möchtest. Es sind nur dir zugewiesene Charaktere aufgelistet. Du kannst dir unter dem Menüpunkt "Verknüpfungen" selbst Charakter zuweisen, sofern dies der Administrator erlaubt.';
$lang['uc_saved_succ']        = 'Die Änderungen wurden erfolgreich gespeichert';
$lang['us_char added']        = 'Der Charakter wurde erstellt.';
$lang['us_char_updated']      = 'Der Charakter wurde aktualisiert';
$lang['uc_info_box']          = 'Information';
$lang['uc_pic_changed']				= 'Das Bild wurde erfolgreich geändert';
$lang['uc_pic_added']					= 'Das Bild wurde erfolgreich hinzugefügt';

// Date functionality
$lang['uc_changedate']				= 'd.m.Y';

// Armory Menu
$lang['uc_armorylink1']				= 'Armory';
$lang['uc_armorylink2']				= 'Talente';
$lang['uc_armorylink3']				= 'Gilde';

//User Settings
$lang['uc_charmanager']       = 'Mitgliedsverwaltung';
$lang['uc_change_pic']				= 'Bild ändern';
$lang['uc_add_pic']						= 'Bild hinzufügen';
$lang['uc_add_char']          = 'Charakter hinzufügen';
$lang['uc_save_char']					= 'Charakter speichern';
$lang['overtake_char']        = 'Charakter zu deinem Account zuweisen';
$lang['uc_edit_char']         = 'Bearbeite den Charakter';
$lang['uc_conn_members']			= 'Verknüpfte Charaktere';
$lang['uc_connections']				= 'Verknüpfungen';
$lang['uc_button_cancel']     = 'Abbrechen';
$lang['uc_button_edit']				= 'Bearbeiten';
$lang['uc_tt_n1']							= 'Wähle den Charakter, den du<br/> bearbeiten möchtest';
$lang['uc_tt_n2']							= 'Verknüpfe Dein Benutzeraccount<br/> mit Deinen Charakteren,<br/>die schon im DKP-System <br/>vorhanden sind';
$lang['uc_tt_n3']							= 'Erstelle einen Charakter der <br/>noch nicht im DKP-System <br/>vorhanden ist';
$lang['uc_prifler_expl']			= 'Die Profiler werden nur als Links angezeigt, es erfolgt kein Import!';
$lang['uc_ext_import']				= 'Daten von Externer Quelle importieren';
$lang['uc_ext_import_sh']			= 'Daten importieren';

// Import
$lang['uc_prof_import']				= 'importieren';
$lang['uc_import_forw']				= 'weiter';
$lang['uc_imp_succ']					= 'Die Daten wurden erfolgreich importiert';
$lang['uc_upd_succ']					= 'Die Daten wurden erfolgreich aktualisiert';
$lang['uc_imp_failed']				= 'Beim Import der Daten trat ein Fehler auf. Bitte versuche es erneut.';

// Armory Import
$lang['uc_armory_loc']				= 'Serverstandort';
$lang['uc_charname']					= 'Charaktername';
$lang['uc_servername']				= 'Servername';
$lang['uc_charfound']					= "Der Charakter  <b>%1\$s</b> wurde auf Armory gefunden.";
$lang['uc_charfound2']				= "Das letzte Update dieses Charakters war am <b>%1\$s</b>.";
$lang['uc_charfound3']				= 'ACHTUNG: Beim Import werden bisher gespeicherte Daten überschrieben!';
$lang['uc_armory_confail']		= 'Keine Verbindung zu Armory. Daten konnten nicht übermittelt werden.';

// Edit Profile tabs
$lang['uc_tab_profilers']			= 'Profiler';
$lang['uc_tab_Character']			= 'Charakter';
$lang['uc_tab_skills']				= 'Skillung';
$lang['uc_tab_import']				= 'Import';
$lang['uc_tab_raidinfo']			= 'Raid Info';
$lang['uc_tab_raids']					= 'Raids';
$lang['uc_tab_items']					= 'Gegenstände';
$lang['uc_tab_profession']		= 'Berufe';
$lang['uc_tab_notes']         = 'Notizen';

// Professions
$lang['uc_first_prof']				= 'Erster Hauptberuf';
$lang['uc_second_prof']				= 'Zweiter Hautberuf';
$lang['uc_prof_skill']				= 'Skill';
$lang['professionsarray']			= array(
																'Alchemy'					=> 'Alchimie',
																'Mining'					=> 'Bergbau',
																'Engineering'			=> 'Ingenieurskunst',
																'Skinning'				=> 'Kürschnerei',
																'Herbalism'				=> 'Kräuterkunde',
																'Leatherworking'	=> 'Lederverarbeitung',
																'Blacksmithing'		=> 'Schmiedekunst',
																'Tailoring'				=> 'Schneiderei',
																'Enchanting' 			=> 'Verzauberkunst',
																'Jewelcrafting'		=> 'Juwelenschleifen',
																'Inscription'     => 'Inschriftenkunde'
															);
$lang['uc_gender']				= 'Geschlecht';
$lang['genderarray']			= array(
																'Male'						=> 'Männlich',
																'Female'					=> 'Weiblich',
															);
$lang['uc_faction']						= 'Fraktion';
$lang['factionarray']					= array(
																'Horde'						=> 'Horde',
																'Alliance'				=> 'Allianz',
															);

// resistences
$lang['uc_resitence']				  = 'Resitenzen';
$lang['uc_res_fire']					= 'Feuer';
$lang['uc_res_frost']					= 'Eis';
$lang['uc_res_arcane']				= 'Arkan';
$lang['uc_res_nature']				= 'Natur';
$lang['uc_res_shadow']				= 'Schatten';

// Bars
$lang['uc_bar_health']				= "Gesundheit";
$lang['uc_bar_energy']				= "Energie";
$lang['uc_bar_mana']					= "Mana";
$lang['uc_bar_rage']					= "Wut";

// Add Picture
$lang['uc_save_pic']					= 'Speichern';
$lang['uc_load_pic']					= 'Bild laden';
$lang['uc_allowed_types']			= 'Erlaubte Bildarten';
$lang['uc_max_resolution']		= 'max. Auflösung';
$lang['uc_pixel']							= 'Pixel';
$lang['uc_not_writable']			= 'Der Ordner \'data\' ist nicht beschreibbar (kein CHMOD 777). Bitte informieren einen Administrator.';

//Admin
$lang['is_adminmenu_uc']			= 'Character Manager';
$lang['uc_manage']            = 'Verwalten';
$lang['uc_add']            		= 'Hinzufügen';
$lang['uc_connect']						= 'Charakter verknüpfen';
$lang['uc_view']							= 'Profile ansehen';
$lang['uc_edit_all']					= 'Alles bearbeiten';
$lang['uc_config']						= 'Einstellungen';

// About Dialog
$lang['about_header']					= 'Credits';

// AJAX trans
$lang['uc_ajax_loading']			= 'Läd...';

// Profile
$lang['uc_char_info']					= 'Character Informationen';
$lang['uc_last_5_raids']			= 'Letzte 5 Raidteilnahmen';
$lang['uc_last_5_items']			= 'Letze 5 Gegenstände';
$lang['uc_ext_profile']				= 'Externe Profile';
$lang['uc_buffed']						= 'Buffed.de';
$lang['uc_allakhazam']				= 'Allakhazam';
$lang['uc_curse_profiler']		= 'Curse Profiler';
$lang['uc_ctprofiles']				= 'CT Profile';
$lang['uc_receives']					= 'Berufe';
$lang['uc_guild']							= 'Gilde';
$lang['uc_raid_infos'] 				= 'Raid Informationen';
$lang['uc_talentplaner']			= 'Talentplaner';
$lang['uc_unknown']						= 'Unbekannt';
$lang['uc_lastupdate']				= 'Letzte Aktualisierung';
$lang['uc_level_out']					= 'Stufe';
$lang['uc_notes']             = 'Notizen';
														
// About dialog
$lang['uc_copyright'] 				= 'Copyright';
$lang['uc_created_devteam']		= 'by WalleniuM';
$lang['uc_url_web']           = 'Web';
$lang['uc_dialog_header']			= 'Über CharManager';
$lang['uc_additions']         = 'Beiträge zum PlugIn';

// config
$lang['uc_info_box']					= 'Informationen';
$lang['uc_setting_saved']			= 'Die Einstellungen wurden erfolgreich gespeichert';
$lang['uc_setting_failed']		= 'Beim speichern der Einstellungen ist ein Fehler aufgetreten. Bitte versuche es erneut, oder kontaktiere einen Administrator';
$lang['uc_header_global']			= 'Charmanager Einstellungen';
$lang['uc_enabl_updatecheck']	= 'Updatecheck einschalten';
$lang['uc_servername']				= 'Servername des Spielservers (z.B. Mal\'Ganis)';
$lang['uc_lock_server']				= 'Servername für den Benutzer unveränderbar machen';
$lang['uc_update_all']				= 'Alle Profilinformationen mit Profilerdaten aktualisieren';
$lang['uc_bttn_update']				= 'Aktualisieren';
$lang['uc_cache_update']			= 'Benutzerprofile aktualisieren';
$lang['uc_profile_updater']		= 'Lädt Profilinformationen. Dies kann mehrere Minuten dauern. Bitte warten......';
$lang['uc_server_loc']				= 'Server Standort';
$lang['uc_profile_ready']			= 'Die Profile wurden erfolgreich importiert. Das Fenster kann <a href="#" onclick="javascript:closeWindow()" >geschlossen</a> werden.';
$lang['uc_last_updated']			= 'Letzte Aktualisierung';
$lang['uc_never_updated']			= 'Nie aktualisiert';	
$lang['uc_noprofile_found']		= 'kein Profil gefunden';
$lang['uc_profiles_complete']	= 'Profile erfolgreich aktualisiert';
$lang['uc_notyetupdated']			= 'Keine Profiler Daten vorhanden (Inaktiver Charakter)';
$lang['uc_armory_link']				= 'Profilliste: Menü mit Armory Links anzeigen';
$lang['uc_no_wow']						= 'Felder von World of Warcraft ausblenden';
$lang['uc_no_resi_save']			= 'Resistenzen nicht mit Importieren';
$lang['uc_lp_hideresis']      = 'Verstecke Resistenzen in der Profilliste';


$lang['talents'] = array(
'Paladin'       => array('Heilig','Schutz','Vergeltung'),
'Rogue'         => array('Meucheln','Kampf','Täuschung'),
'Warrior'       => array('Waffen','Furor','Schutz'),
'Hunter'        => array('Tierherrschaft','Treffsicherheit','Überleben'),
'Priest'        => array('Disziplin','Heilig','Schatten'),
'Warlock'       => array('Gebrechen','Dämonologie','Zerstörung'),
'Druid'         => array('Gleichgewicht','Wilder Kampf','Wiederherstellung'),
'Mage'          => array('Arkan','Feuer','Frost'),
'Shaman'        => array('Elementar','Verstärkung','Wiederherstellung'),
'Death Knight'  => array('Blut','Frost','Unheilig')
);

$lang['uc_hybrid']									= "Hybrid";
?>
