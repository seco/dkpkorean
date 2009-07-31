<?php
 /*
 * Project:     EQdkp CharManager 1
 * License:     Creative Commons - Attribution-Noncommercial-Share Alike 3.0 Unported
 * Link:		    http://creativecommons.org/licenses/by-nc-sa/3.0/
 * -----------------------------------------------------------------------
 * Began:       2006
 * Date:        $Date: 2009-05-20 13:18:06 +0200 (Mi, 20 Mai 2009) $
 * -----------------------------------------------------------------------
 * @author      $Author: wallenium $
 * @copyright   2005-2008 Simon (Wallenium) Wallmann
 * @link        http://eqdkp-plus.com
 * @package     charmanager
 * @version     $Rev: 4915 $
 * 
 * $Id: lang_main.php 4915 2009-05-20 11:18:06Z wallenium $
 */

//Main 
$lang['charmanager']          = 'Charakterverwaltung';
$lang['uc_manage_chars']			= 'Charactere verwalten';
$lang['uc_credit_name']				= 'EQDKP CharManager';
$lang['uc_enu_profiles']			= 'Profile';
$lang['cm_short_desc']        = 'Benutzer k�nnen Mitglieder verwalten';
$lang['cm_long_desc']         = 'Mit dem Charmanager k�nnen die Benutzer des eqdkp Mitglieder anlegen, verwalten und verkn�pfen. Es stehen ausserdem erweiterte Profilfelder zur Verf�gung.';

// Error Messages
$lang['uc_faild_memberadd']   = "Der Benutzer mit dem Namen %1\$s existiert bereits als ID %2\$s. Bitte versuche es mit einem anderen Namen.";
$lang['uc_saved_not']         = 'Beim speichern der �nderungen ist ein Fehler aufgetreten. Bitte versuche es erneut oder melde es einem Administrator';
$lang['uc_error_memberinfos']	= 'Konnte die Mitgliederinformationen des CharManagers nicht abrufen.';
$lang['uc_error_raidinfos']		= 'Konnte die Raidinformationen des CharManagers nicht abrufen.';
$lang['uc_error_iteminfos']		= 'Konnte die Gegenstandsinformationen des CharManagers nicht abrufen.';
$lang['uc_error_itemraidi']		= 'Konnte die Gegenstands-/Raidinformationen des CharManagers nicht abrufen.';
$lang['uc_not_loggedin']			= 'Du bist nicht angemeldet';
$lang['uc_not_installed']			= 'Das Character Manager PlugIn ist nicht installiert';
$lang['uc_no_prmissions']			= 'Du besitzt keine Berechtigung diese Seite zu betrachten. Bitte frage einen Administrator';
$lang['uc_php_version']				= "CharManager ben�tigt PHP %1\$s oder h�her. Dein Server l�uft mit PHP %2\$s";
$lang['uc_plus_version']			= "CharManager ben�tigt EQDKP-PLUS %1\$s oder h�her. Die installierte Version ist %2\$s";

// Info Boxes
$lang['uc_saved_succ']        = 'Die �nderungen wurden erfolgreich gespeichert';
$lang['us_char added']        = 'Der Charakter wurde erstellt.';
$lang['us_char_updated']      = 'Der Charakter wurde aktualisiert';
$lang['uc_info_box']          = 'Information';
$lang['uc_pic_changed']				= 'Das Bild wurde erfolgreich ge�ndert';
$lang['uc_pic_added']					= 'Das Bild wurde erfolgreich hinzugef�gt';

// Date functionality
$lang['uc_changedate']				= 'd.m.Y';

// Armory Menu
$lang['uc_armorylink1']				= 'Armory';
$lang['uc_armorylink2']				= 'Talente & Glyphen';
$lang['uc_armorylink3']				= 'Ruf';
$lang['uc_armorylink4']				= 'Erfolge';
$lang['uc_armorylink5']				= 'Statistiken';
$lang['uc_armorylink6']				= 'Gilde';

//User Settings
$lang['uc_charmanager']       = 'Mitgliedsverwaltung';
$lang['uc_change_pic']				= 'Bild �ndern';
$lang['uc_add_pic']						= 'Bild hinzuf�gen';
$lang['uc_add_char']          = 'Charakter hinzuf�gen';
$lang['uc_add_char_plain']		= 'Neu erstellen';
$lang['uc_add_char_armory']		= 'Importieren';
$lang['uc_save_char']					= 'Charakter speichern';
$lang['overtake_char']        = 'Charakter zu deinem Account zuweisen';
$lang['uc_edit_char']         = 'Charakter bearbeiten';
$lang['uc_conn_members']			= 'Verkn�pfte Charaktere';
$lang['uc_connections']				= 'Verkn�pfungen';
$lang['uc_button_cancel']     = 'Abbrechen';
$lang['uc_button_edit']				= 'Bearbeiten';
$lang['uc_tt_n1']							= 'W�hle den Charakter, den du<br/> bearbeiten m�chtest';
$lang['uc_tt_n2']							= 'Verkn�pfe Dein Benutzeraccount<br/> mit Deinen Charakteren,<br/>die schon im DKP-System <br/>vorhanden sind';
$lang['uc_tt_n3']							= 'Erstelle einen Charakter der <br/>noch nicht im DKP-System <br/>vorhanden ist';
$lang['uc_prifler_expl']			= 'Die Profiler werden nur als Links angezeigt, es erfolgt kein Import!';
$lang['uc_ext_import_sh']			= 'Daten importieren';
$lang['uc_connectme']         = 'Speichern';
$lang['uc_updat_armory']			= 'Von Armory aktualisieren';
$lang['uc_add_massupdate']		= 'Alle aktualisieren';
$lang['uc_need_confirmation']	= '[Muss noch freigeben werden]';

// Member Tasks
$lang['uc_del_warning']				= 'Soll der Charakter wirklick gel�scht werden? Alle Punkte und Gegenst�nde gehen unweigerlich verloren.';
$lang['uc_del_msg_all']				= 'Sollen wirklich alle Charakter gel�scht werden?';
$lang['uc_confirm_msg_all']		= 'Sollen wirklich alle Charakter freigegeben werden?';
$lang['cm_todo_txt']					= "Es warten %1\$s Aufgabe(n) auf Erledigung";
$lang['cm_todo_head']					= 'Charmanager Administrationsaufgaben';
$lang['uc_delete_manager']		= 'Verwaltung von Aufgaben';
$lang['uc_rewoke_char']				= 'Charakter wiederherstellen';
$lang['uc_delete_char']				= 'Charakter l�schen';
$lang['uc_delete_allchar']		= 'Alle l�schen';
$lang['uc_confirm_list']			= 'Charakter zum Best�tigen';
$lang['uc_delete_list']				= 'Charakter zum L�schen';

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
$lang['uc_charfound3']				= 'ACHTUNG: Beim Import werden bisher gespeicherte Daten �berschrieben!';
$lang['uc_armory_confail']		= 'Keine Verbindung zu Armory. Daten konnten nicht �bermittelt werden.';
$lang['uc_armory_imported']		= 'Importiert';
$lang['uc_armory_impfailed']	= 'Fehlgeschlagen';
$lang['uc_armory_impduplex']	= 'bereits vorhanden';
$lang['uc_class_filter']			= 'Nur Mitglieder der Klasse';
$lang['uc_class_nofilter']		= 'Nicht filtern';
$lang['uc_guild_name']				= 'Name der Gilde';
$lang['uc_level_filter']			= 'Alle Charakter mit Level gr��er als';
$lang['uc_imp_novariables']		= 'Du musst zuerst einen Server und einen Serverstandort in den Einstellungen setzen.';
$lang['uc_imp_noguildname']		= 'Es wurde kein Gildenname angegeben';
$lang['uc_gimp_header_load']	= 'Gilde wird importiert, bitte warten...';
$lang['uc_gimp_header_fnsh']	= 'Import der Gilde beendet';
$lang['uc_gimp_finish_note']	= 'Notiz: Beim Gildenimport werden nur der Charktername, die Rasse, die Klasse und das Level importiert. Um die restlichen Daten zu importieren, einfach den Armory-Updater benutzen.';
$lang['uc_gimp_infotxt']			= 'Die Script Ausf�hrzeit sollte gr��er 60s sein, das Memory Limit gr��er 32M. Bitte herunterscrollen um zu sehen ob das script fertig ist.';
$lang['uc_startdkp']					= 'Start-DKP vergeben';
$lang['uc_noprofile_found']		= 'Kein Profil gefunden';
$lang['uc_profiles_complete']	= 'Profile erfolgreich aktualisiert';
$lang['uc_notyetupdated']			= 'Keine neuen Daten (Inaktiver Charakter)';
$lang['uc_error_with_id']			= 'Fehler mit der Member ID, Charakter �bersprungen';

// Edit Profile tabs
$lang['uc_tab_profilers']			= 'Profiler';
$lang['uc_tab_Character']			= 'Charakter';
$lang['uc_tab_skills']				= 'Skillung';
$lang['uc_tab_raidinfo']			= 'Raid Info';
$lang['uc_tab_raids']					= 'Raids';
$lang['uc_tab_items']					= 'Gegenst�nde';
$lang['uc_tab_profession']		= 'Berufe';
$lang['uc_tab_notes']         = 'Notizen';

// Professions
$lang['uc_first_prof']				= 'Erster Hauptberuf';
$lang['uc_second_prof']				= 'Zweiter Hautberuf';
$lang['uc_prof_skill']				= 'Skill';
$lang['professionsarray']			= array(
																'alchemy'					=> 'Alchimie',
																'mining'					=> 'Bergbau',
																'engineering'			=> 'Ingenieurskunst',
																'skinning'				=> 'K�rschnerei',
																'herbalism'				=> 'Kr�uterkunde',
																'leatherworking'	=> 'Lederverarbeitung',
																'blacksmithing'		=> 'Schmiedekunst',
																'tailoring'				=> 'Schneiderei',
																'enchanting' 			=> 'Verzauberkunst',
																'jewelcrafting'		=> 'Juwelenschleifen',
																'inscription'     => 'Inschriftenkunde'
															);
$lang['uc_gender']				= 'Geschlecht';
$lang['genderarray']			= array(
																'Male'						=> 'M�nnlich',
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
$lang['uc_max_resolution']		= 'max. Aufl�sung';
$lang['uc_pixel']							= 'Pixel';
$lang['uc_not_writable']			= 'Der Ordner \'data\' ist nicht beschreibbar (kein CHMOD 777). Bitte informieren einen Administrator.';

//Admin
$lang['is_adminmenu_uc']			= 'Character Manager';
$lang['uc_manage']            = 'Verwalten';
$lang['uc_add']            		= 'Hinzuf�gen';
$lang['uc_connect']						= 'Charakter verkn�pfen';
$lang['uc_view']							= 'Profile ansehen';
$lang['uc_edit_all']					= 'Alles bearbeiten';
$lang['uc_config']						= 'Einstellungen';
$lang['uc_delete']						= 'Eigene Charakter l�schen';
$lang['uc_delmanager']				= 'Aufgaben verwalten';

// About Dialog
$lang['about_header']					= 'Credits';

// Profile
$lang['uc_char_info']					= 'Character Informationen';
$lang['uc_last_5_raids']			= 'Letzte 5 Raidteilnahmen';
$lang['uc_last_5_items']			= 'Letze 5 Gegenst�nde';
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
$lang['uc_dialog_header']			= '�ber CharManager';
$lang['uc_additions']         = 'Beitr�ge zum PlugIn';

// config
$lang['uc_setting_saved_h']   = 'Einstellungen gespeichert';
$lang['uc_setting_saved']			= 'Die Charmanager Einstellungen wurden erfolgreich gespeichert';
$lang['uc_setting_failed']		= 'Beim speichern der Einstellungen ist ein Fehler aufgetreten. Bitte versuche es erneut, oder kontaktiere einen Administrator';
$lang['uc_header_global']			= 'Charmanager Einstellungen';
$lang['uc_enabl_updatecheck']	= 'Updatecheck einschalten';
$lang['uc_servername']				= 'Servername des Spielservers (z.B. Mal\'Ganis)';
$lang['uc_lock_server']				= 'Servername f�r den Benutzer unver�nderbar machen';
$lang['uc_update_all']				= 'Alle Profilinformationen mit Profilerdaten aktualisieren';
$lang['uc_bttn_update']				= 'Aktualisieren';
$lang['uc_cache_update']			= 'Benutzerprofile aktualisieren';
$lang['uc_profile_updater']		= 'Lade Profilinformationen, bitte warten...';
$lang['uc_server_loc']				= 'Server Standort';
$lang['uc_profile_ready']			= 'Die Profile wurden erfolgreich importiert. Das Fenster kann geschlossen</a> werden.';
$lang['uc_last_updated']			= 'Letzte Aktualisierung';
$lang['uc_never_updated']			= 'Nie aktualisiert';	
$lang['uc_armory_link']				= 'Profilliste: Men� mit Armory Links anzeigen';
$lang['uc_no_resi_save']			= 'Resistenzen nicht mit Importieren';
$lang['uc_lp_hideresis']      = 'Verstecke Resistenzen in der Profilliste';
$lang['uc_defaultrank']				= 'Rang beim Erstellen eines neuen Member';
$lang['uc_defaultrank_none']	= 'Keinen';
$lang['uc_reqconfirm']				= 'Von Usern erstellte Mitgliedern m�ssen von Administrator freigegeben werden';
$lang['uc_confirm_char']			= 'Charakter best�tigen';
$lang['uc_confirm_allchar']		= 'Alle freigeben';
$lang['uc_limport']						= 'Importeinstellungen';
$lang['uc_import_guild']			= 'Importiere ganze Gilde';
$lang['uc_import_guildb']			= 'Gilde importieren';
$lang['uc_import_srvlang']    = 'Sprache von Armory';
?>