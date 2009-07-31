<?php
 /*
 * Project:     EQdkp RaidBanker
 * License:     Creative Commons - Attribution-Noncommercial-Share Alike 3.0 Unported
 * Link:		    http://creativecommons.org/licenses/by-nc-sa/3.0/
 * -----------------------------------------------------------------------
 * Began:       2005
 * Date:        $Date: 2008-11-06 16:51:42 +0100 (Do, 06 Nov 2008) $
 * -----------------------------------------------------------------------
 * @author      $Author: wallenium $
 * @copyright   2005-2008 Simon (Wallenium) Wallmann
 * @link        http://eqdkp-plus.com
 * @package     raidbanker
 * @version     $Rev: 3006 $
 * 
 * $Id: lang_main.php 3006 2008-11-06 15:51:42Z wallenium $
 */

// General Shit
$lang['raidbanker'] 						      = "Raid Banker";
$lang['raidbanker_title'] 			      = "Raid Bankier";
$lang['rb_date_format']               = "%A, %d.%m.%Y, %H:%M";
$lang['rb_local_format']              = "German";
$lang['rb_short_desc']                = "Banken des Raids verwalten";
$lang['rb_long_desc']                 = "Import von Raidbanken per Logfile, anlegen von Banken per Hand, Itemvergabe u.v.m";

// Buttons
$lang['rb_import']							      = "Importieren";
$lang['rb_add']                       = "Zuf�gen";
$lang['rb_edit']							        = "Bearbeiten";
$lang['rb_delete']							      = "L�schen";
$lang['rb_view']                      = "Ansehen";
$lang['rb_config']                    = "Einstellungen";
$lang['lang_couldnt_info']            = "Konnte Item-Infos nicht nicht parsen";
$lang['lang_couldnt_char']						= "Konnte die Charakterinformationen nicht abrufen";
$lang['rb_close']                     = "Schliessen";

// User Menu
$lang['rb_usermenu_raidbanker']	      = "Raid Banker";

// Admin Menu
$lang['rb_adminmenu_raidbanker']			= "Raid Banker";
$lang["rb_step1_pagetitle"]					  = "Raid Banker - Importiere Logdatei";
$lang["rb_step1_th"]						      = "F�ge Raid Banker Log unten ein";
$lang["rb_step1_button_parselog"]			= "Verarbeite Log";
$lang["rb_step2_pagetitle"]					  = "Raid Banker - Verarbeitete Logdatei";
$lang["rb_edit_pagetitle"]					  = "Raid Banker - Bearbeite Bankier";

//output
$lang['rb_Bank_Items']                = "Gegenst�nde auf der Bank";
$lang['rb_Banker']                    = "Bankier";
$lang['rb_all_Banker']                = "Alle Bankiers";
$lang['rb_not_avail']                 = "n.v.";
$lang['rb_Item_Name']                 = "Gegenstand";
$lang['rb_Bank_Type']                 = "Art";
$lang['rb_Bank_QTY']                  = "Menge";
$lang['rb_Bank_Quality']              = "Qualit�t";
$lang['rb_Update']                    = "Aktualisierung";
$lang['rb_AllBankers']                = "Alle Banken";
$lang['rb_TotBankers']                = "Verm�gen aller Banken";
$lang['rb_mainchar_out']              = "Hauptcharakter";
$lang['rb_note_out']                  = "Notiz";

//import
$lang['Character_Data']               = "Characterdaten";
$lang['lang_with']                    = "mit";
$lang['lang_g']                       = "g";
$lang['lang_s']                       = "s";
$lang['lang_c']                       = "k";
$lang['lang_gold']                    = "Gold";
$lang['lang_silver']                  = "Silber";
$lang['lang_copper']                  = "Kupfer";
$lang['lang_amount']                  = "Anzahl";
$lang['lang_name']                    = "Name";
$lang['lang_itemid']                  = "Gegenstands ID";
$lang['lang_quality']                 = "Qualit�t";
$lang['lang_skip']                    = "�berspringen";
$lang['lang_update_data']             = "Bank Daten aktualisieren";
$lang['lang_found_log']               = "Gegenst�nde im Log gefunden";
$lang['lang_skipped_items']           = "<b>�bersprungene</b> Gegenst�nde";
$lang['lang_cleared_data']            = "Alle Charakterdaten gel�scht f�r";
$lang['lang_added_data']              = "Charakterdaten hinzugef�gt f�r";
$lang['lang_adding_item']             = "Gegenstand hinzugef�gt: ";
$lang['lang_deleting_item']           = "Gegenstand entfernt";
$lang['rb_add_item']                  = "Gegenstand hinzuf�gen";
$lang['rb_insert']                    = "Gegenstand speichern";
$lang['rb_insert_banker']             = "Bankier hinzuf�gen";
$lang['rb_add_banker_l']              = "Bankier hinzuf�gen";
$lang['rb_money_val']                 = "Kosten in Gold";
$lang['rb_dkp_val']                   = "Kosten in DKP";
$lang['rb_mainchar']                  = "Name des Hauptcharakters";
$lang['rb_note']                      = "Notiz zu diesem Bankier";

// Result page
$lang['rb_user_link']                 = "Zur�ck zur vorherigen Seite";
$lang['Lang_actions_performed']       = "Aktionen ausgef�hrt";

// acl shit
$lang['rb_add_acl']                   = "Buchung hinzuf�gen";
$lang['rb_acl_action']                = "Buchungsart";
$lang['rb_ac_spent']                  = "Spieler an Bank";
$lang['rb_ac_got']                    = "Bank an Spieler";
$lang['rb_item_name']                 = "Name des Gegenstands";
$lang['rb_acl_save']                  = "Buchung speichern";
$lang['rb_list_acl']                  = "Alle Buchungen auflisten";
$lang['rb_char_name']                 = "Mitgliedsname";
$lang['rb_id']                        = "ID";
$lang['rb_acl']                       = "Gegenstandskonten";
$lang['rb_banker']                    = "Bankier";
$lang['rb_char_data']                 = "Charakterdaten";
$lang['itemcost_money']               = "Itemkosten (Gold)";
$lang['itemcost_dkp']                 = "Itemkosten (DKP)";
$lang['rb_adjust_reason']             = "von RaidBank erhalten";
$lang['rb_banker2charge']							= "Von Banker abbuchen";

// Log things
$lang['action_rbacl_added']           = "Buchung hinzugef�gt";
$lang['action_rbacl_del']             = "Buchung(en) gel�scht";
$lang['action_rb_imported']           = "RaidBanker Log importiert";
$lang['action_rbbank_del']            = "Bankier gel�scht";

// Proprity
$lang['rb_priority']                  = "Priorit�t";
$lang['rb_prio_4']                    = "sehr hoch";
$lang['rb_prio_3']                    = "hoch";
$lang['rb_prio_2']                    = "mittel";
$lang['rb_prio_1']                    = "niedrig";
$lang['rb_prio_0']                    = "keine";

//edit
$lang['admin_delete_bank_success']    = "Bankier erfolgreich gel�scht.";

// configuration
$lang['rb_header_global']             = "RaidBanker Einstellungen";
$lang['rb_use_itemstats']             = "Benutze Itemstats";
$lang['rb_hide_banker']               = "Andere Banker nach Auswahl eines Bankers verstecken";
$lang['rb_hide_money']                = "Zeige Bankverm�gen (wenn aus: Keine Goldanzeige)";
$lang['rb_no_banker']                 = "Alle Banken zusammenfassen";
$lang['rb_is_cache']                  = "Itemstats Cache: wenn 'true' werden die Gegenstandsinfos durch einen Klick auf den Gegenstand geladen.";
$lang['rb_is_path']                   = "Pfad zu Itemstats";
$lang['rb_saved']                     = "Die Einstellungen wurden erfolgreich gespeichert";
$lang['rb_failed']                    = "Beim Speichern der Einstellungen ist ein Fehler aufgetreten. Bitte versuche es erneut. Sollte dieser Fehler nochmals auftreten, kontaktiere Bitte einen Administrator.";
$lang['rb_info_box']                  = "Information";
$lang['rb_list_lang']                 = "Gegenstandssprache";
$lang['rb_locale_de']                 = "Deutsch";
$lang['rb_locale_en']                 = "Englisch";
$lang['rb_locale_ru']                 = "Russisch";
$lang['rb_locale_ch']                 = "Chinesisch";
$lang['rb_show_tooltip']              = "Zeige Info-Tooltips<br />(ACHTUNG: Ladzeiten k�nnen l�nger sein!)";
$lang['rb_auto_adjust']               = "Automatische DKP Korrektur bei Itemvergabe";
$lang['rb_is_oldstyle']								= "OldStyle Layout: Zeige die Gegenst�nde jedes Bankiers (nicht nach Gegenst�nden Gruppieren): Beim Einschalten dieser Funktion werden Megrfachnennungen von Gegegnst�nden vor kommen.";

//filter translations
$lang['rb_filter_banker']             = "Bankier ausw�hlen";
$lang['rb_filter_type']               = "Gegenstandsart ausw�hlen";
$lang['rb_filter_prio']               = "Priorit�t ausw�hlen";

// View Item PopUP
$lang['rb_char_got']                  = "Gegenstand von Bank:";
$lang['rb_char_spent']                = "Gegenstand an Bank:";
$lang['rb_gold_value']                = "Kosten in Gold";
$lang['rb_dkp_value']                 = "Kosten in DKP";
$lang['rb_total_amount']              = "Gesamte Anzahl";
$lang['rb_dkp']                       = "DKP";
$lang['rb_item_header']								= "Gegenstandsinformationen";

// About dialog
$lang['rb_created by']                = "geschrieben von";
$lang['rb_contact_info']              = "Kontaktinformationen";
$lang['rb_url_personal']              = "Privat";
$lang['rb_url_web']                   = "Web";
$lang['rb_sponsors']                  = "Spender";
$lang['rb_dialog_header']						  = "�ber RaidBanker";
$lang['rb_dialog_item']               = "Gegenstandsinformation";
$lang['rb_additions']                 = "Beitr�ge zum PlugIn";
$lang['rb_loading']                   = "Seite wird geladen";
?>
