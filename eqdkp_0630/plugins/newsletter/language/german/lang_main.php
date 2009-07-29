<?php
 /*
 * Project:     EQdkp Newsletter
 * License:     Creative Commons - Attribution-Noncommercial-Share Alike 3.0 Unported
 * Link:		    http://creativecommons.org/licenses/by-nc-sa/3.0/
 * -----------------------------------------------------------------------
 * Began:       2007
 * Date:        $Date: 2008-09-05 10:06:11 +0200 (Fr, 05 Sep 2008) $
 * -----------------------------------------------------------------------
 * @author      $Author: wallenium $
 * @copyright   2005-2008 Simon (Wallenium) Wallmann
 * @link        http://eqdkp-plus.com
 * @package     newsletter
 * @version     $Rev: 2685 $
 * 
 * $Id: lang_main.php 2685 2008-09-05 08:06:11Z wallenium $
 */

$lang['newsletter'] 											= 'Newsletter Manager';
$lang['nl_short_desc']                    = 'Sendet Newsletter an Benutzer';
$lang['nl_long_desc']                     = 'Mit dem Newsletter Manager kann man Newsletter an die Mitglieder verschicken. Newslettervorlagen vereinfachen den Versand.';

// Admin Menu
$lang['nl_manage']												= 'Verwalten';
$lang['nl_templates']                     = 'Vorlagen';
$lang['nl_settings']                      = 'Settings';
$lang['nl_recipients']										= 'Empfänger';
$lang['nl_subject']												= 'Betreff';
$lang['inl_class_only']										= 'Sende an: ';
$lang['nl_mail_body']											= 'Nachrichtentext';
$lang['nl_header_send']										= 'Newsletter erstellen';
$lang['nl_button_send']										= 'Senden';

$lang['nl_legende']												= 'Legende';
$lang['nl_legende_expl']									= 'Folgende Platzhalter können im Text verwendet werden. Diese werden automatisch durch die jeweile Funktion ersetzt (Groß-Kleinschreibung beachten!).';
$lang['nl_dkpname']												= 'Name des DKP';
$lang['nl_date']													= 'Aktuelles Datum';
$lang['nl_username']											= 'Benutzername des Empfängers';
$lang['nl_dkplink']												= 'Link zum DKP';
$lang['nl_author']												= 'Verfasser';
	
//send
$lang['nl_header_sent']										= 'Versand erfolgreich ausgeführt';
$lang['nl_txt_sent']											= 'Der Versand des Newsletters war erfolgreich. Er wurde an folgende Mitglieder versendet: ';
$lang['nl_class_all']											= 'Alle Klassen';
$lang['nl_hideinactive']                  = 'Nur an aktive Mitglieder';
$lang['nl_use_template']                  = 'Benutze Vorlage: ';

// Template Manager
$lang['nl_addtemplate']                   = 'Neue Vorlage';
$lang['nl_edittemplate']                  = 'Vorlage bearbeiten';
$lang['nl_templatename']                  = 'Name der Vorlage';
$lang['nl_button_delete']                 = 'Vorlage entfernen';
$lang['nl_templates']                     = 'E-Mailvorlagen verwalten';
$lang['nl_save_template']                 = 'Vorlage speichern';

// Settings
$lang['nl_dbversion']                     = "Version der Datenbankstruktur";
$lang['nl_force_update']                  = "DB Update erzwingen";
$lang['nl_updatecheck']										= "Benachrichtigung bei Plugin-Updates";
?>
