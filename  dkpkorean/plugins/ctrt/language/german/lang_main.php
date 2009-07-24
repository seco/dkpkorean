<?php
/**
 * English language file for CT_RaidTracker Import
 *
 * @category Plugins
 * @package CT_RaidTrackerImport
 * @copyright (c) 2006, EQdkp <http://www.eqdkp.com>
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
 *
 * @author freddy <CTRaidTrackerImport@freddy.eu.org>
 * $Rev: 275 $ $Date: 2008-09-15 01:19:35 +0200 (Mo, 15 Sep 2008) $
 */

$lang['ctrt'] = "CT_RaidTracker Import";
$lang['import_ctrt_data'] = "Importiere DKP String";

$lang['ctrt_step1_pagetitle'] = "CT_Raidtracker Importieren";
$lang['ctrt_step1_th'] = "F&uuml;ge hier den DKP String ein";
$lang['ctrt_step1_invalidstring_title'] = "Ung&uuml;ltiger DKP String";
$lang['ctrt_step1_invalidstring_msg'] = "Der DKP String ist ung&uuml;ltig.";
$lang['ctrt_step1_button_parselog'] = "Weiter";

$lang['ctrt_step2_pagetitle'] = "CT_RaidTracker Import";
$lang['ctrt_step2_foundraids'] = "Gefundene Raids";
$lang['ctrt_step2_event'] = "Event:";
$lang['ctrt_step2_raidnote'] = "Raid Notiz:";
$lang['ctrt_step2_dkpvalue'] = "DKP Wert:";
$lang['ctrt_step2_raidtime'] = "Raid Zeit:";
$lang['ctrt_step2_attendees'] = "Teilnehmer";
$lang['ctrt_step2_itemname'] = "Item Name:";
$lang['ctrt_step2_itemid'] = "Item ID:";
$lang['ctrt_step2_looter'] = "Looter:";
$lang['ctrt_step2_itemdkpvalue'] = "DKP Wert:";
$lang['ctrt_step2_dkpvaluetip'] = "F&uuml;ge Item Wert/Teilnehmer (Zero DKP) hinzu";
$lang['ctrt_step2_insertraids'] = "Raid(s) einf&uuml;gen)";
$lang['ctrt_step2_raidsdropsdetails'] = "Raid/Drop Details";

$lang['ctrt_step3_pagetitle'] = "CT_Raidtracker Import";
$lang['ctrt_step3_title'] = "Aktions log<br>\n";
$lang['ctrt_step3_alreadyexist'] = "%s (%s, %s DKP) wurden schon hinzugef&uuml;gt, &uuml;bersprungen<br>\n";
$lang['ctrt_step3_emptyraidnote'] = "%s (%s, %s DKP) hat keine Raid Notiz, &uuml;bersprungen<br>\n";
$lang['ctrt_step3_raidadded'] = "%s (%s, %s DKP) wurden hinzugef&uuml;gt<br>\n";
$lang['ctrt_step3_adjadded'] = "An adjustment of %s DKP was added to %s<br>\n";
$lang['ctrt_step3_memberadded'] = "%s (Rasse: %s, Klasse: %s, Level: %s, Rang: %s) wurden den Mitgliedern hinzugef&uuml;gt<br>\n";
$lang['ctrt_step3_memberupdated'] = "%s (Rasse: %s, Klasse: %s, Level: %s, Rang: %s) wurde geupdated: (Rasse: %s, Klasse: %s, Level: %s, Rang: %s)<br>\n";
$lang['ctrt_step3_memberlevelupdated'] = "Es sieht so aus als h&auml;tte %s ein Level up gehabt. das level wurde von %s auf %s gesetzt<br>\n";
$lang['ctrt_step3_attendeesadded'] = "%s Teilnehmer wurden hinzugef&uuml;gt<br>\n";
$lang['ctrt_step3_lootadded'] = "%s (%s DKP) wurde %s hinzugef&uuml;gt<br>\n";

/**
 * added by Stefan Knaak | corgan | corgan@eqdkp-plus.com
 */
$lang['ctrt_adminmenu_title']   = "CTRT Import";

/**
 * Admin Menu Options
 */
$lang['ctrt_adminmenu_config']          = "Einstellen";
$lang['ctrt_adminmenu_settings']        = "Einstellungen";
$lang['ctrt_adminmenu_aliases']             = "Aliases";
$lang['ctrt_adminmenu_event_triggers']      = "Event Triggers";
$lang['ctrt_adminmenu_raid_note_triggers']  = "Raid Note Triggers";
$lang['ctrt_adminmenu_own_raids']           = "Eigene Raids";
$lang['ctrt_adminmenu_add_items']           = "Items hinzufügen";
$lang['ctrt_adminmenu_ignore_items']        = "Ignorierte Items";

$lang['ctrt_adminmenu_add']     = "Hinzufügen";
$lang['ctrt_adminmenu_list']    = "Anzeigen";
$lang['ctrt_adminmenu_export']  = "Exportieren";
$lang['ctrt_adminmenu_import']  = "Importieren";

/**
 * Configure page
 */
$lang['ctrt_min_quality']       = "Minimum Qualität";
$lang['ctrt_add_loot_dkp']      = "Loot DKP Checkbox";
$lang['ctrt_ignored_looter']    = "Ignoriere Spieler";
$lang['ctrt_convert_names']             = "Konvertierte Namen";
$lang['ctrt_loot_note_event_trigger']     = "Loot Note Event Trigger";
$lang['ctrt_default_rank']      = "Standart Rang";
$lang['ctrt_attendance_filter'] = "Anwesenheits Filter";
$lang['ctrt_skip_raids']        = "Raids ohne Note überspringen";
$lang['ctrt_default_dkp']       = "Standart DKP Kosten";
$lang['ctrt_starting_dkp']      = "Start DKP";
$lang['ctrt_create_start_raid'] = "Erstelle Start Raid";
$lang['ctrt_start_raid_dkp']    = "Start Raid DKP";
$lang['ctrt_simulate']          = "Simmulation";
$lang['ctrt_simulate_warning']  = "Simmulation ist an - Dies würde getan werden:<br><br>";

/**
 * Config help
 */
$lang['ctrt_help_min_quality']          = "Niedrigste Qualität der zu erfassenden Items.";
$lang['ctrt_help_add_loot_dkp']         = "Deaktivieren, um die Checkbox (Loot DKP - Add Item value/attendees) auszuschalten(empfohlen).";
$lang['ctrt_help_ignored_looter']       = "Die Namen dieser Looter werden ignoriert.";
$lang['ctrt_help_convert_names']            = "Aktivieren um Namen zu konvertieren (z.b. \"Âvâtâr\" in \"Avatar\".)";
$lang['ctrt_help_loot_note_event_trigger']  = "Auf Event Trigger in den Notes prüfen (z.b. wenn ihr solche Events habt \"MC (Lucifron), MC (Magmadar), ...\" &amp; diese aber nur in einem Raid eintragen wollt.)";
$lang['ctrt_help_default_rank']             = "Standart Rang für Member die CTRT anlegt wenn ein Raid eingetragen wird.";
$lang['ctrt_help_attendance_filter']        = "Anwesendheits Filter setzen.";
$lang['ctrt_help_skip_raids']               = "Aktivieren um Raids mit einer leeren Raidnote zu ignorieren.";
$lang['ctrt_help_default_dkp']              = "Die Kosten von Items die ohne DKP gelogt werden.";
$lang['ctrt_help_starting_dkp']             = "Wenn die Zahl größer null ist, dann wird für jeden neuen Member, den CTRT anlegt dieser Wert als StartDKP hinzugefügt.";
$lang['ctrt_help_create_start_raid']        = "Aktivieren, wenn CTRT einen Start Raid anlegen soll, wenn der Anwesenheits Filter auf Boss-Kill steht.";
$lang['ctrt_help_start_raid_dkp']           = "Standartwert für Start DKP Punkte.";
$lang['ctrt_help_simulate']                 = "Aktivieren für Simulationsmodus.";

/*
* Alias Hilfe
 */

$lang['ctrt_help_alias']                = "Benutze den Alias, wenn ein Spieler einen anderen Charakter zum Raid mitbringt, Ihr aber nur einen Charakter für das DKP aufzeichnen wollt (z.B. wenn der Twink eines Mainchars aushilft, aber nur der Mainchar DKP-Punkte bekommen soll)";
$lang['ctrt_help_alias_name']           = "Immer wenn dieser Name erkannt wird, dann wird der Name durch den eingegebenen Namen ersetzt";
$lang['ctrt_help_alias_member']         = "Das Mitglied, das die DKP-Punkte eines Alias bekommt.";
$lang['ctrt_help_alias_export']         = "Kopiere den folgenden Text und füge diesen in deinen Lieblilngseditor ein.";
$lang['ctrt_help_alias_import']         = "Fügt den folgenden Text ein um Eure Aliase zu importieren.";
$lang['ctrt_help_alias_import_format']  = "Der Import ist unabhänig von Groß- und Kleinschreibung und sollte dieses Format haben";


/*
 * Event Trigger Hilfe
*/
 
$lang['ctrt_help_event_trigger']        =  $lang['ctrt_help_loot_note_event_trigger'];
$lang['ctrt_help_event_trigger_name']   = "Gib den Namen des Events ein, dass mit dem Ergebnis ersetzt wird.";
$lang['ctrt_help_event_trigger_result'] = "Gebe den Namen ein, der statt dem Trigger angezeigt werden soll";

/**
 * Raid Note Trigger Hilfe
 */
$lang['ctrt_help_raid_note_trigger']        = "Hier kannst Du die Trigger für die EQdkp Raid Note bestimmen (CT_RaidRracker Raid note und die Loot Notes werden geparsed (Loot Notes überschreiben die Raid Note))";
$lang['ctrt_help_raid_note_trigger_name']   = "Gebe den Namen der Raid Note ein, die durch das Ergebnis ersetzt wird.";
$lang['ctrt_help_raid_note_trigger_result'] = "Gebe den Text ein, den Du anstelle des Triggers haben willst";

/**
 * Eigene Raids Hilfe
 */
$lang['ctrt_help_own_raid']        = "Raid Notes, die immer als \"Eigener Raid\" behandelt werden sollen";
$lang['ctrt_help_own_raid_name']   = "Gebe den Namen des Raids ein, der benutzt wird.";

/**
 * Immer Items hinzufügen
 */
$lang['ctrt_help_add_items']        = "Diese Items werden immer hinzugefügt, unabhängig von dem im CTRaid Tracker Import eingestellten Items.";
$lang['ctrt_help_add_items_wow'] = "Gebe die WoW-Item ID oder den Item-Namen ein, der hinzugefügt werden soll.";

/**
 * Items immer ignorieren
 */
$lang['ctrt_help_ignore_items']     = "Diese items werden immer ignoriert, unabhängig von dem im CTRaid Tracker Import eingestellten Items.";
$lang['ctrt_help_ignore_items_wow'] = "Gebe die WoW-Item ID oder den Item-Namen ein, der ignoriert werden soll";


$lang['ctrt_help_export']         = " Kopiere den folgenden Text und füge diesen in deinen Lieblingseditor zum speichern ein.";
$lang['ctrt_help_import']         = "Kopiere den folgenden Text um Eure Aliase zu importieren.";
$lang['ctrt_help_import_format']  =" Der Import ist unabhänig von Groß- und Kleinschreibung und sollte dieses Format haben";
/**
 * Item Quality
 */
$lang['ctrt_iq_poor']                = "Dürftig";
$lang['ctrt_iq_common']         = "Gewöhnlich";
$lang['ctrt_iq_uncommon']       = "Selten";
$lang['ctrt_iq_rare']           = "Rar";
$lang['ctrt_iq_epic']           = "Episch";
$lang['ctrt_iq_ledgendary']     = "Legendär";

/**
 * Attendance Filter
 */
$lang['ctrt_af_none']            = "Kein";
$lang['ctrt_af_loot_time']      = "Loot Zeit";
$lang['ctrt_af_boss_kill']      = "Boss Kill";

/**
 * Buttons
 */

/**
 * Labels
 */
$lang['ctrt_alias']         = "Alias";
$lang['ctrt_aliases']       = "Aliase";
$lang['ctrt_result']        = "Ergebnis";
$lang['ctrt_trigger']       = "Trigger";
$lang['ctrt_import']        = "Import";
$lang['ctrt_raid_note']     = "Raid Note";
$lang['ctrt_own_raid']      = "Eigener Raid";
$lang['ctrt_item_wow']      = "WoW Item";
$lang['ctrt_item_wow_id']   = "WoW Item ID";

/*
 * User messages
 */

$lang['ctrt_alias_duplicate']           = "Folgender Member kann nicht zugeordnet werden<span class=\"negative\">%s</span>; member <span class=\"negative\">%s</span> ";
$lang['ctrt_add_alias_success']     = "Alias <span class=\"positive\">%s</span> erfolgreich für den Member hinzugefügt <span class=\"positive\">%s</span>. ";
$lang['ctrt_alias_update_success']      = "Alias <span class=\"positive\">%s</span> aktualisiert  <span class=\"positive\">%s</span> für Member <span class=\"positive\">%s</span>. ";
$lang['ctrt_no_alias_selected']     = "Kein Alias ausgewählt.";
$lang['ctrt_confirm_delete_alias']  = "Bist Du sicher folgende Aliase entfernen zu wollen? ";
$lang['ctrt_alias_deleted']         = "Alias <span class=\"positive\">%s</span> entfernt von Member <span class=\"positive\">%s</span>. ";
$lang['ctrt_alias_import_missing_member'] = "Kann keinen Alias erstellen <span class=\"negative\">%s</span>. Member <span class=\"negative\">%s</span> existiert nicht";
$lang['ctrt_settings_update_success']   = "Settings aktualisiert!!";

$lang['ctrt_trigger_confirm_delete']    = "Bist Du sicher folgende Trigger entfernen zu wollen?";
$lang['ctrt_trigger_not_selected']      = "Keine Trigger ausgewählt.";
$lang['ctrt_trigger_duplicate']         = "Trigger <span class=\"negative\">%s</span> für <span class=\"negative\">%s</span> existiert bereits.";
$lang['ctrt_trigger_success_add']       = "Trigger <span class=\"positive\">%s</span> hinzugefügt für <span class=\"positive\">%s</span>. ";
$lang['ctrt_trigger_success_update']    = "Trigger aktualisiert.";
$lang['ctrt_trigger_success_delete']    = "Trigger <span class=\"positive\">%s</span> entfernt für <span class=\"positive\">%s</span>. ";

$lang['ctrt_own_raid_confirm_delete']   = "Bist Du sicher folgende Raids löschen zu wollen?";
$lang['ctrt_own_raid_not_selected']     = "Keine Raids ausgewählt.";
$lang['ctrt_own_raid_duplicate']        = "Raid <span class=\"negative\">%s</span> existiert bereits.";
$lang['ctrt_own_raid_success_add']      = "Raid <span class=\"positive\">%s</span> hinzugefügt.";
$lang['ctrt_own_raid_success_update']   = "Raid aktualisiert.";
$lang['ctrt_own_raid_success_delete']   = "Raid <span class=\"positive\">%s</span> entfernt.";

$lang['ctrt_item_confirm_delete']   = "Bist Du sicher folgende Items entfernen zu wollen?";
$lang['ctrt_item_not_selected']     = "Keine Items ausgewählt.";
$lang['ctrt_item_duplicate']        = "Item <span class=\"negative\">%s</span> existiert bereits.";
$lang['ctrt_item_not_found']        = "Item <span class=\"negative\">%s</span> nicht gefunden!.";
$lang['ctrt_item_success_add']      = "Item <span class=\"positive\">%s</span> hinzugefügt.";
$lang['ctrt_item_success_update']   = "Item aktualisiert.";
$lang['ctrt_item_success_delete']   = "Item <span class=\"positive\">%s</span> entfernt.";

/**
 * Form validation messages
 */
$lang['ctrt_fv_invalid_xml']        = "Kann ungültigen XML-String nicht importieren. Vergleiche mit folgenden Beispielen.";

/**
 * Log Actions
 */
$lang['action_ctrt_config_updated'] = $lang['ctrt'] ." Updated";
$lang['action_ctrt_alias_added']    = $lang['ctrt'] ." Alias hinzugefügt";
$lang['action_ctrt_alias_updated']  = $lang['ctrt'] ." Alias aktualisiert";
$lang['action_ctrt_alias_deleted']  = $lang['ctrt'] ." Alias entfernt";
$lang['ctrt_alias_name_before']     = "Alias vorher";
$lang['ctrt_alias_name_after']      = "Alias nachher";
$lang['ctrt_member_name_before']    = "Member vorher";
$lang['ctrt_member_name_after']     = "Member nachher";

/**
 * Verbose Log Messages
 */
$lang['vlog_ctrt_config_updated']   = "%s CT RaidTracker config aktualisert.";
$lang['vlog_ctrt_alias_added']      = "%s CT RaidTracker alias hinzugefügt '%s' für member '%s'.";
$lang['vlog_ctrt_alias_updated']    = "%s CT RaidTracker alias aktualisiert '%s' für member '%s'.";
$lang['vlog_ctrt_alias_deleted']    = "%s CT RaidTracker alias entfernt '%s' von member '%s'.";

/**
 * Log labels
 */
$lang['ctrt_label_alias_name']  = "Alias Name";
$lang['ctrt_label_member_name'] = "Member Name";

/*
 * Race Names
 */
$lang['blood_elf']  = 'Blutelf';
$lang['draenei']    = 'Draenei';
$lang['dwarf']      = 'Zwerg';
$lang['gnome']      = 'Gnom';
$lang['human']      = 'Mensch';
$lang['night_elf']  = 'Nachtelf';
$lang['orc']        = 'Ork';
$lang['undead']     = 'Untoter';
$lang['tauren']     = 'Taure';
$lang['troll']      = 'Troll';

/*
 * Class Names
 */
$lang['warrior']     = 'Krieger';
$lang['rogue']       = 'Schurke';
$lang['hunter']      = 'Jäger';
$lang['paladin']     = 'Paladin';
$lang['priest']      = 'Priester';
$lang['druid']       = 'Druide';
$lang['shaman']      = 'Schamane';
$lang['warlock']     = 'Hexenmeister';
$lang['mage']        = 'Magier';
$lang['deathknight'] = 'Todesritter';

// Plus only
$lang['ctrt_short_desc']  = "Importiere WoW CTRT Logs";
$lang['ctrt_long_desc']   = "Importiere World of Warcraft CTRaidTracker Logs in das DKP";

?>