<?php
// Global Strings
$lang['gallery'] = 'EQdkp-Plus Gallery';
$lang['gl_about_header'] = '�ber die Gallery';
$lang['gl_created_devteam'] = ' von Badtwin & Lunary';

// About Window
$lang['gl_additionals'] = 'Beitr�ge zur Gallery';

// Install and Menu entrys
$lang['gl_view'] = 'Galerie';
$lang['gl_upload'] = 'Upload';
$lang['gl_shortdesc']			= 'Eine Bildgalerie f�r EQdkp';
$lang['gl_description']			= 'Einfache Bildgalerie mit Kommentarfunktion f�r EQdkp';
$lang['gl_ad_manage_categories'] = 'Kategorien';
$lang['gl_ad_manage_pictures'] = 'Bilder';
$lang['gl_ad_manage_categories_ov']	= 'Kategorien verwalten';
$lang['gl_ad_manage_pictures_ov']	= 'Bilder verwalten';
//$lang['gl_ad_manage_comments']		= 'Kommentare';
//$lang['gl_ad_manage_comments_ov']		= 'Kommentare verwalten';
$lang['gl_ad_manage_config'] = 'Konfiguration';
$lang['gl_ad_manage_config_ov'] = 'Konfigurationseinstellungen';

// Admin Categories
$lang['gl_ad_created'] = ' wurde erstellt.';
$lang['gl_ad_deleted'] = ' wurde gel�scht.';
$lang['gl_ad_categories'] = 'Vorhandene Kategorien';
$lang['gl_up_category'] = 'Kategorie: ';
$lang['gl_ad_input_comment'] = 'Beschreibung: ';
//$lang['gl_ad_manage_pictures'] = '';
$lang['gl_ad_manage_cat_order'] = 'Reihenfolge';
$lang['gl_ad_manage_cat_update'] = 'Aktualisieren';
$lang['gl_ad_new_cat'] = 'Neue Kategorie erstellen';
$lang['gl_ad_send'] = 'erstellen';
$lang['gl_ad_reset'] = 'zur�cksetzen';
//$lang['gl_ad_manage_categories_ov'] = '';
$lang['gl_ad_cat_delall']			= 'Alle Kategorien l�schen';
$lang['gl_ad_cat_all_deleted']		= 'Alle Kategorien wurden gel�scht!';
	
// Admin Config
$lang['gl_ad_conf_gen'] = 'Allgemein';
$lang['gl_ad_conf_shown_mthumbs'] = 'Angezeigte Miniaturbilder pro Seite:';
$lang['gl_ad_conf_shown_cats'] = 'Angezeigte Kategorien pro Seite:';
$lang['gl_ad_textstamp_f'] = 'Angezeigter Text in der externen Ansicht:';
$lang['gl_ad_conf_extern'] = 'Sollen die Bilder von Ausserhalb erreichbar sein?';

// Admin Pictures
$lang['gl_index_headline'] = 'Galerie - �bersicht';
//gl_up_category
$lang['gl_ad_pic_del_title'] = 'l�schen?';
$lang['gl_ad_pic_delcheck'] = 'Soll das Bild wirklich gel�scht werden?';
$lang['gl_ad_pic_del_yes'] = 'Ja';
$lang['gl_ad_pic_del_no'] = 'Nein';
$lang['gl_short_up_from'] = 'von ';
$lang['gl_up_filename'] = 'Dateiname: ';
$lang['gl_up_description'] = 'Beschreibung: ';
$lang['gl_up_from'] = 'Hochgeladen von: ';
$lang['gl_up_date'] = 'Hochgeladen am: ';
//gl_up_category
$lang['gl_pic_resolution'] = 'Aufl�sung: ';
$lang['gl_ad_pic_nopics'] = 'Es sind keine Bilder vorhanden!';

// Gallery Insertpic
$lang['gl_up_suc_text1'] = 'Das Bild wurde erfolgreich unter ';
$lang['gl_up_suc_text2'] = ' gespeichert.';
$lang['gl_up_suc_status'] = 'Datei gespeichert.';
$lang['gl_up_fail_toobig'] = 'Das Bild darf nicht gr��er als 1 MB sein.';
$lang['gl_up_fail_status'] = 'DATEI WURDE NICHT HOCHGELADEN!';
$lang['gl_up_fail_format'] = 'Bitte nur Bilder im JPG-, PNG- bzw. GIF-Format hochladen.';
//gl_up_fail_status
//gl_index_headline
$lang['gl_up_header'] = 'Dateiupload';
//gl_up_filename
$lang['gl_up_size'] = 'Dateigr��e: ';
$lang['gl_up_cat'] = 'Kategorie: ';
$lang['gl_up_comment'] = 'Beschreibung: ';
$lang['gl_up_user'] = 'Benutzername:';
//gl_up_date
$lang['gl_up_new'] = 'Neues Bild hochladen';
$lang['gl_up_btt'] = 'Zur�ck zur �bersicht';
//air_img_resize_warning

// Category View
$lang['gl_index_upload'] = 'Neues Bild hochladen';
//gl_index_headline
//gl_up_category
//gl_up_comment
$lang['gl_cat_picture_count'] = 'Anzahl der Bilder:';
$lang['gl_cat_note'] = 'Bitte klicke den Kategorie-Namen an um das erste Bild dieser Kategorie zu sehen oder klicke ein Zufallsbild an um dieses direkt anzuschauen.';
$lang['gl_no_cat_created'] = 'FEHLER - Es wurde noch keine Kategorie erstellt!';
$lang['gl_no_gdlib2'] = 'FEHLER - GDLib2 ist auf diesem Server nicht installiert!';
$lang['gl_back_btn'] = 'Zur�ck';

// gl_picview
$lang['gl_pic_descript_warn'] = '[keine Beschreibung vorhanden]';
//gl_index_upload
//gl_short_up_from
//gl_index_headline
//gl_up_category
//gl_short_up_from
//gl_up_filename
//gl_up_description
//gl_up_from
//gl_up_date
$lang['gl_index_hits'] = 'Angesehen:';
//gl_pic_resolution
$lang['gl_pic_url'] = 'URL des Bildes: ';
$lang['gl_pic_bbc'] = 'BB-Code (f�r Foren): ';
//air_img_resize_warning

// Upload View
$lang['gl_up_not_writeable'] = 'Der Upload-Ordner ist nicht beschreibbar!! (chmod 0777)';
$lang['gl_thumb_not_writeable'] = 'Der thumb-Ordner ist nicht beschreibbar!! (chmod 0777)';
$lang['gl_mthumb_not_writeable'] = 'Der mthumb-Ordner ist nicht beschreibbar!! (chmod 0777)';
$lang['gl_prefix_not_writeable'] = 'Der Unterordner <i>'.md5($dbname).'</i> ist nicht beschreibbar!! (chmod 0777)';
$lang['gl_thumb_error_creating_folder'] = 'Fehler beim erstellen eines Unterordners!!';
//gl_index_headline
//gl_up_header
$lang['gl_up_file'] = 'Datei: ';
$lang['gl_up_name'] = 'Name: ';
//gl_up_category
//gl_up_description
$lang['gl_info'] = 'Info';
$lang['gl_filename_describe'] = 'Klicke auf den Durchsuchen-Button um eine Datei auszuw�hlen, die du hochladen willst.<br /><br /> Erlaubte Formate sind "*.jpg", "*.gif" und "*.png"';
$lang['gl_name_describe'] = 'Gib hier einen Namen an, der als Anzeige-Name verwendet werden soll. Gibst du keinen Namen an, so wird automatisch der Dateiname verwendet.';
$lang['gl_cat_describe'] = 'Hier wird festgelegt, unter welcher Kategorie dein Bild gespeichert werden soll. W�hle die gew�nschte Kategorie aus dem Men� aus.';
$lang['gl_describtion_describe'] = 'In diese Feld k�nnen n�here Angaben zum Bild gemacht werden.<br />In diesem Feld ist KEIN BBCode und auch kein HTML erlaubt.';
$lang['gl_up_send'] = 'absenden';
$lang['gl_up_reset'] = 'zur�cksetzen';

// Include
$lang['gl_ov_no_pics_in_cat'] = 'Keine Bilder in der aktuellen Kategorie vorhanden.';
//gl_pic_descript_warn
//gl_up_description
//gl_up_from
//gl_up_date
//gl_index_hits
$lang['gl_pic_comm_head'] = 'Kommentare';
//gl_pic_resolution
$lang['ad_sel_all_cat'] = 'Alle Kategorien';

// Portal Module
$lang['gl_ad_selall'] = 'Alle Bilder';
//gl_up_cat
//gl_up_description
//gl_up_from
//gl_up_date
//gl_index_hits
//gl_pic_resolution
$lang['pm_potm_maxwidth'] = 'Maximale Breite (100-200 px):';
$lang['pm_potm_maxheight'] = 'Maximale H�he (100-200 px):';
$lang['picofthemoment'] = 'Pic of the Moment';
$lang['pm_potm_catshow'] = 'Angezeigte Kategorie:';
$lang['pm_potm_tooltip']	=	'Tooltip anzeigen?';
?>