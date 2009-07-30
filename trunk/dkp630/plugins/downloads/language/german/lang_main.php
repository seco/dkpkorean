<?php
// Global Strings
$lang['downloads'] 					= 'EQdkp-Plus Downloads';
$lang['dl_about_header'] 			= '�ber das Download-Plugin';
$lang['dl_created_devteam'] 		= ' von GodMod';
$lang['dl_additionals'] 			= 'Beitr�ge zum Download-Plugin';
$lang['dl_licence'] 				= 'Lizenz';


// Install and Menu entrys
$lang['dl_view'] 					= 'Downloads';
$lang['dl_ad_delete'] 				= 'L�schen';
$lang['dl_ad_reset'] 				= 'Zur�cksetzen';
$lang['dl_ad_send'] 				= 'Speichern';
$lang['dl_ad_go'] 					= 'Los';
$lang['dl_shortdesc']				= 'Eine Download-Verwaltung f�r EQdkp';
$lang['dl_description']				= 'Einfache Download-Verwaltung f�r EQdkp';
$lang['dl_ad_manage_categories'] 	= 'Kategorien';
$lang['dl_ad_manage_links'] 		= 'Downloads';
$lang['dl_ad_manage_categories_ov']	= 'Kategorien verwalten';
$lang['dl_ad_manage_links_ov']		= 'Downloads verwalten';
$lang['dl_ad_manage_config'] 		= 'Einstellungen';
$lang['dl_ad_manage_config_ov'] 	= 'Konfigurationseinstellungen';
$lang['dl_ad_manage_upload_ov'] 	= 'Upload';
$lang['dl_ad_cat_footcount'] 		= "... insgesamt %d Kategorie(n)";
$lang['dl_mirror_footcount'] 		= "... insgesamt %d Mirror(s)";
$lang['dl_view_downloads_ov'] 		= 'Ansehen';

//Error/Succes-messages
$lang['dl_ad_delete_success'] 		= '<img src="'.$eqdkp_root_path.'/plugins/downloads/images/ok.png">Die ausgew�hlten Downloads wurden erfolgreich gel�scht.';
$lang['dl_ad_update_success'] 		= '<img src="'.$eqdkp_root_path.'/plugins/downloads/images/ok.png">Der Download wurde erfolgreich bearbeitet.';
$lang['dl_ad_fields_empty'] 		= '<img src="'.$eqdkp_root_path.'/plugins/downloads/images/error.png">Es wurden nicht alle notwendigen Felder ausgef�llt.';
$lang['dl_ad_upload_file_exists'] 	= '<img src="'.$eqdkp_root_path.'/plugins/downloads/images/error.png">Diese Datei wurde bereits hochgeladen.';
$lang['dl_ad_upload_fail_file'] 	= '<img src="'.$eqdkp_root_path.'/plugins/downloads/images/error.png">Dieser Datei-Typ darf nicht hochgeladen werden.';
$lang['dl_ad_upload_success'] 		= '<img src="'.$eqdkp_root_path.'/plugins/downloads/images/ok.png">Die Datei wurde erfolgreich hochgeladen.';
$lang['dl_ov_download_file_not_found'] 		= '<img src="'.$eqdkp_root_path.'/plugins/downloads/images/error.png">Die Datei wurde auf dem Webspace nicht mehr gefunden. Bitte kontaktiere den Administrator.';
$lang['dl_ov_category_created'] 		= '<img src="'.$eqdkp_root_path.'/plugins/downloads/images/ok.png">Die Kategorie <b>"%s"</b> wurde erfolgreich erstellt.';

// Permission
$lang['dl_perm_public'] 			= '�ffentlich';
$lang['dl_perm_registered'] 		= 'Registriert';


//Settings
$lang['dl_ad_conf_gen'] 						= 'Allgemeine Einstellungen: ';
$lang['dl_ad_conf_view'] 						= 'Anzeigeoptionen: ';
$lang['dl_ad_conf_extended'] 					= 'Erweiterte Einstellungen: ';
$lang['dl_ad_conf_accepted_file_types'] 		= 'Erlaubte Dateiendungen: ';
$lang['dl_ad_conf_htcheck_disabled_warning'] 	= 'Mit dem Deaktivieren dieser Funktion wird nicht mehr gepr�ft, ob sich in dem Download-Verzeichnis eine .htaccess-Datei befindet.<br>Diese Datei verhindert, dass Downloads unberechtigterweise heruntergeladen werden k�nnen. <br><br><b><span style="color:#ff0000">Dass Deaktivieren dieser Funktion wird nicht empfohlen!</span></b>';
$lang['dl_ad_conf_htcheck_disabled'] 			= 'Deaktivieren der .htaccess-Pr�fung:';
$lang['dl_ad_conf_cat_disabled'] 				= 'Kategorien deaktivieren:';
$lang['dl_ad_conf_related_links'] 				= 'Zugeh�rige Downloads aktivieren:';
$lang['dl_ad_conf_mirrors'] 					= 'Alternative Downloadserver d�rfen eingegeben werden:';
$lang['dl_ad_conf_traffic_limit'] 				= 'Maximaler monatlicher Traffic:';
$lang['dl_ad_conf_comments'] 					= 'User d�rfen Downloads kommentieren:';
$lang['dl_ad_conf_save_sucess'] 				= 'Die Einstellungen wurden erfolgreich gespeichert.';
$lang['dl_ad_conf_captcha'] 					= 'Unregistierte User m�ssen zum Downloaden CAPTCHA ausf�llen:';
$lang['dl_ad_conf_captcha_private_key'] 		= 'Privater Key von reCATPCHA:';
$lang['dl_ad_conf_captcha_public_key'] 			= '�ffentlicher Key von reCATPCHA:';
$lang['dl_ad_conf_statistics'] 					= 'Statistiken auf der �bersichts-Seite anzeigen:';
$lang['dl_ad_conf_updatecheck'] 				= 'Benachrichtigung bei Plugin-Updates:';
$lang['dl_ad_conf_debug'] 						= 'Debug-Modus anschalten:';
$lang['dl_ad_conf_items_per_page'] 				= 'Downloads pro Seite:';
$lang['dl_ad_conf_show_downloads_tab'] 			= 'Zeige Link zum Download-Bereich im Reiter oben rechts:';
$lang['dl_ad_conf_force_db_update']				= 'Datenbank-Update erzwingen';
$lang['dl_ad_conf_force_db_warn']               = 'Soll das Datenbankupdate erzwungen werden? Danach wird der Updater erscheinen, ein Datenbankupdate wird notwendig!';




//Help-messages
$lang['dl_help_file_types']			= 'F�ge hier (mit Komma getrennt) alle zul�ssigen Dateiendungen ein. Dies bezieht sich nur auf Dateien, die hochgeladen werden, nicht auf Verlinkungen. Als Dateiendung z�hlen nur die Buchstaben nach dem letzten Punkt, d.h. "tar.gz" ist nicht richtig, "gz" schon.';
$lang['dl_help_cat_disabled']		= 'Die Kategorieverwaltung kann hier abgeschaltet werden. Dadurch erscheinen alle Downloads in einer gro�en Liste.';
$lang['dl_help_htcheck']			= 'Eine Funktion pr�ft st�ndig, ob das Download-Verzeichnis mit einer .htaccess-Datei gegen unerlaubten Zugriff gesch�tzt ist. Diese Funktion kann hier abgeschaltet werden. <b><span style="color:#ff0000">Es wird nicht empfohlen, diese Funktion zu deaktivieren!</span> Dies ist nur etwas f�r erfahrene Administratoren!</b>';
$lang['dl_help_related_links']		= 'Zu einem Download k�nnen IDs von weiteren Downloads eingegeben werden, die dann unter dem jeweiligen Download als "Zugeh�rige Dateien" erscheinen.';
$lang['dl_help_mirrors']			= 'Um den Usern eine st�ndige Verf�gbarkeit von Downloads zu bieten, k�nnen alternative Downloadserver (sog. "Mirrors") eingetragen werden, also Links zu Servern, die die gleiche Datei vorhalten.';
$lang['dl_help_mirrors_upload']		= 'Trage hier einen oder mehrere Links zu anderen Servern ein, die die gleiche Datei zum Download bereithalten.';
$lang['dl_help_comments']			= 'User k�nnen Downloads ihre Meinung �ber Downloads in Form von Kommentaren abgeben. Die Bewertungsfunktion bleibt davon unber�hrt.';
$lang['dl_help_traffic_limit']		= 'Gib hier das monatliche Traffic-Limit f�r den Download von lokalen Dateien ein. Lasse dieses Feld leer, wenn kein Limit erw�nscht ist. Trage "0" ein, um den Download von allen lokalen Dateien zu verhindern.';
$lang['dl_help_filesize']			= 'Die Dateigr��e ist nur f�r externe Links. Bei hochgeladenen Dateien wird sie automatisch berechnet.';
$lang['dl_help_related_links']		= 'Dies erlaubt die M�glichkeit, bei einem Download IDs von anderen Downloads einzutragen, die dann als "zugeh�rige Downloads" bei diesem Download erscheinen. Die ID bekommst du z.B. aus der URL: "../downloads.php?file=3". Hier w�re die ID "3".';
$lang['dl_help_recaptcha']			= 'Nicht registrierte User m�ssen vor dem Download eines lokalen Downloads ein CAPTCHA l�sen. Die Aktivierung dieser Funktion spart Traffic, da nur Menschen eine Datei herunterladen k�nnen. Ein kostenloser Account bei reCAPTCHA.net ist daf�r erforderlich.';
$lang['dl_help_recaptcha_private_key']			= 'Trage hier den privaten Key deines Account auf reCAPTCHA.net ein.';
$lang['dl_help_recaptcha_public_key']			= 'Trage hier den �ffentlichen Key deines Account auf reCAPTCHA.net ein.';
$lang['dl_help_statistics']			= 'Blendet Statistiken wie z.B. monatlicher und totaler Traffic, neuester Downloads, TOP5-Downloads usw. auf der �bersichts-Seite ein.';
$lang['dl_help_debug']				= 'Mit dem Debug-Modus werden Fehlermeldungen beim Dateiupload angezeigt. <b>Nur zum Testen aktivieren!</b>';
$lang['dl_help_dbreset']			= 'Beim Upgraden von unfertigen Versionen muss das Update von Hand erzwungen werden. Klicke hierzu auf den Button hinter der Version, um ein Update der Datenbankstruktur zu erzwingen.<br>Wenn Du von einer nicht fertigen Version updatest, kann es sein, dass einige Updateschritte Fehlschlagen, da diese �nderungen schon existieren.';

//Categories
$lang['dl_cat_footcount']   			= "... insgesamt %1\$d Download(s) in dieser Kategorie / %2\$d pro Seite";
$lang['dl_cat_footcount_without_pagination']   	= "... insgesamt %1\$d Download(s) in dieser Kategorie";
$lang['dl_cat_footcount_catsdisabled'] 	= "... insgesamt %1\$d Download(s) / %2\$d pro Seite";
$lang['dl_related_links_footcount'] 	= "... insgesamt %d zugeh�rige Download(s)";
$lang['dl_ov_footcount']   				= "... insgesamt %1\$s Download(s) in %2\$s Kategorie(n)";
$lang['dl_cat_nolinks'] 				= '<i>Es sind keine Downloads in dieser Kategorie vorhanden.</i>';
$lang['dl_cat_headline'] 				= 'Kategorie';
$lang['dl_edit_headline'] 				= 'Download bearbeiten';
$lang['dl_select_file_headline'] 		= 'Datei ausw�hlen';
$lang['dl_select_type_headline'] 		= 'Typ ausw�hlen';
$lang['dl_upload_headline'] 			= 'Neuen Download erstellen';
$lang['dl_url_headline'] 				= 'Externer Link';
$lang['dl_type_headline'] 				= 'Typ';
$lang['dl_filesize_headline'] 			= 'Gr��e';
$lang['dl_desc_headline'] 				= 'Beschreibung';
$lang['dl_name_headline'] 				= 'Name';
$lang['dl_perm_headline'] 				= 'Berechtigung';
$lang['dl_views_headline'] 				= 'Zugriffe';
$lang['dl_date_headline'] 				= 'Datum';
$lang['dl_action_headline'] 			= 'Aktion';
$lang['dl_ad_all_marked'] 				= 'markierte';
$lang['dl_ad_select_all'] 				= 'Alle Ausw�hlen';
$lang['dl_ad_deselect_all'] 			= 'Auswahl entfernen';
$lang['dl_no_cats'] 					= 'Es sind keine Kategorien vorhanden.';
$lang['dl_rating_headline'] 			= 'Bewertung';
$lang['dl_stat_headline'] 				= 'Statistiken';
$lang['dl_top5_headline'] 				= 'TOP5-Downloads';
$lang['dl_file_headline'] 				= 'Datei';
$lang['dl_file_info_headline'] 			= 'Datei-Informationen';
$lang['dl_files_headline'] 				= 'Dateien';
$lang['dl_related_links_headline'] 		= 'Zugeh�rige Downloads';

$lang['dl_l_cats'] 						= 'Kategorien';
$lang['dl_l_files'] 					= 'Dateien';
$lang['dl_l_traffic'] 					= 'Traffic';
$lang['dl_l_traffic_month'] 			= 'Traffic diesen Monat';
$lang['dl_l_traffic_total'] 			= 'Traffic gesamt';
$lang['dl_l_traffic_of'] 				= 'von';
$lang['dl_l_last_uploaded'] 			= 'Letzte hochgeladene Datei';
$lang['dl_l_filename'] 					= 'Dateiname';
$lang['dl_l_md5'] 						= 'MD5-Hash';
$lang['dl_l_filesize'] 					= 'Dateigr��e';
$lang['dl_l_uploader'] 					= 'Hochgeladen von';
$lang['dl_l_upload_date'] 				= 'Hochgelanden am';
$lang['dl_l_views'] 					= 'Anzahl der Downloads';
$lang['dl_l_report_dead_link'] 			= 'Defekten Download melden';
$lang['dl_l_report_dead_link_info'] 	= 'Um den defekten Download zu melden, klicke  einfach unten auf den Button. Wenn Du einen anderen oder richtigen Link zu der Datei kennst, schreibe ihn bitte in das unten stehende Feld und hinterlasse eine kurze Beschreibung dazu.';
$lang['dl_l_rating'] 					= 'Bewerten';
$lang['dl_l_thanks_for_rating'] 		= 'Vielen Dank f�r Deine Bewertung!';
$lang['dl_l_good'] 						= 'sehr gut';
$lang['dl_l_bad'] 						= 'sehr schlecht';
$lang['dl_l_select_rating'] 			= 'Bewertung ausw�hlen';
$lang['dl_l_votes'] 					= 'Bewertungen';
$lang['dl_l_mirrors'] 					= 'Alternative Download-Server';
$lang['dl_l_mirrors_download'] 		    = 'Datei vom alternativen Download-Server #%d herunterladen';
$lang['dl_l_cat_not_existing'] 		    = 'Diese Kategorie existiert nicht.';
$lang['dl_l_download_it'] 		    	= '%s jetzt herunterladen!';

$lang['dl_l_preview_image'] 			= "Vorschau-Bild";
$lang['dl_l_preview'] 					= "Vorschau";

// Admin Categories
$lang['dl_ad_created'] 			= ' wurde erstellt.';
$lang['dl_ad_deleted'] 			= ' wurde gel�scht.';
$lang['dl_ad_categories'] 		= 'Vorhandene Kategorien';
$lang['dl_up_category'] 		= 'Kategorie: ';
$lang['dl_ad_input_comment'] 	= 'Beschreibung: ';
$lang['dl_ad_cats_disabled'] 	= '<img src="'.$eqdkp_root_path.'plugins/downloads/images/credits/info.png"><b>Kategorien wurden deaktiviert. Sie k�nnen die Kategorieverwaltung <a href="'.$eqdkp_root_path.'plugins/downloads/admin/settings.php">hier</a> wieder aktivieren.</b>';
$lang['dl_ad_will_linked'] 		= 'Hinweis: URLs werden nur verlinkt!';
$lang['dl_ad_nocats'] 			= '<img src="'.$eqdkp_root_path.'plugins/downloads/images/credits/info.png">Es sind keine Kategorien vorhanden. Bitte erstellen Sie in der <a href="'.$eqdkp_root_path.'plugins/downloads/admin/categories.php">Kategorie-Verwaltung</a> eine neue Kategorie.<br><br>';
$lang['dl_ad_name_uncategorized_cat'] = 'Unkategorisiert';
$lang['dl_ad_comment_uncategorized_cat'] = 'F�r alle unkategorisierten Downloads';
$lang['dl_ad_manage_cat_order'] 	= 'Reihenfolge';
$lang['dl_ad_manage_cat_update'] 	= 'Aktualisieren';
$lang['dl_ad_new_cat'] 				= 'Neue Kategorie erstellen';
$lang['dl_ad_create'] 				= 'Erstellen';
$lang['dl_ad_reset'] 				= 'Zur�cksetzen';
$lang['dl_ad_no_cats'] 				= '<i>Es sind keine Kategorien vorhanden. Bitte erstellen Sie eine Kategorie.</i>';
$lang['dl_ad_cat_delall']			= 'Alle Kategorien l�schen';
$lang['dl_ad_cat_all_deleted']		= 'Alle Kategorien wurden gel�scht!';


//Report download
$lang['dl_report_email_subject'] 		= 'Defekter Download';
$lang['dl_report_email_body'] 			= 'Es wurde ein defekter Download gemeldet:';
$lang['dl_report_email_reported_by'] 	= 'Gemeldet von';
$lang['dl_report_email_comment'] 		= 'Kommentar von';
$lang['dl_report_not_logged_in'] 		= 'Defekte Downloads k�nnen nur von eingeloggten Benutzern gemeldet werden.';

//Search
$lang['dl_search_no_matches'] 		= 'Die Suche nach <b>"%s"</b> brachte keine Ergebnisse.';
$lang['dl_search_matches'] 			= "Die Suche nach \"%1\$s\" brachte %2\$s Ergebnisse:";
$lang['dl_search_footcount'] 		= "... %1\$d Download(s) gefunden / %2\$d pro Seite";
$lang['dl_search_headline'] 		= "Suche";
$lang['dl_search_inputvalue'] 		= "Suche...";
$lang['dl_search_no_value'] 		= '<img src="'.$eqdkp_root_path.'plugins/downloads/images/error.png">Es wurde kein Suchbegriff eingegeben. Bitte gebe einen Suchbegriff ein.';


//Overview
$lang['dl_index_headline']		= 'Downloads';
$lang['dl_download_headline']	= 'Download';
$lang['dl_title_cat_edit']		= 'Kategorie bearbeiten';
$lang['dl_title_link_delete']	= 'Download l�schen';
$lang['dl_title_link_edit']		= 'Download bearbeiten';
$lang['dl_index_error_perm'] 	= '<img src="'.$eqdkp_root_path.'plugins/downloads/images/error.png">Diese Datei existiert nicht oder Du hast keine Berechtigung.';
$lang['dl_index_error_perm'] 	= '<img src="'.$eqdkp_root_path.'plugins/downloads/images/error.png">Diese Datei existiert nicht oder Du hast keine Berechtigung.';
$lang['dl_l_cat_not_existing'] 	= '<img src="'.$eqdkp_root_path.'plugins/downloads/images/error.png">Diese Kategorie existiert nicht oder Du hast keine Berechtigung.';
$lang['dl_index_error_traffic'] = '<img src="'.$eqdkp_root_path.'plugins/downloads/images/error.png">Das monatliche Traffic-Limit ist erreicht. Bitte Lade die Datei von einem alternativen Downloadserver (falls angegeben) oder n�chsten Monat herunter.';

//CAPTCHA
$lang['dl_captcha']		= '<img src="'.$eqdkp_root_path.'plugins/downloads/images/credits/info.png">Bitte gib\' den Best�tigungscode ein, um die Datei <b>"%s"</b> herunterzuladen.';
$lang['dl_captcha_wrong']	= '<img src="'.$eqdkp_root_path.'plugins/downloads/images/error.png">Der eingegebene Best�tigungscode war nicht korrekt. <br><br>Bitte gebe den unten stehenden Best�tigungscode ein, um die Datei <b>%s</b> herunterzuladen.';
$lang['dl_captcha_headline'] = 'Best�tigungscode';
$lang['dl_captcha_insert_words'] = 'Gib die oben stehenden W�rter ein: ';
$lang['dl_captcha_insert_numbers'] = 'Gib die Nummern ein, die Du h�rst: ';
$lang['dl_captcha_submit'] = 'Best�tigungscode abschicken';

// Portal Module

$lang['lastuploads']		= 'Aktuelle Downloads:';
$lang['pm_lu_maxlinks']		= 'Maximal angezeigte Downloads:';
$lang['pm_lu_tooltip'] 		= 'Tooltip anzeigen:';
$lang['pm_lu_nolinks'] 		= 'Es sind keine Downloads vorhanden.';

?>