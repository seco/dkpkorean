<?php
/******************************
 * EQdkp
 * Copyright 2002-2003
 * Licensed under the GNU GPL.  See COPYING for full terms.
 * ------------------
 * file.php
 * Began: Day January 1 2003
 *
 * $Id: lang_install.php 4564 2009-04-07 19:09:34Z wallenium $
 *
 ******************************/

// Do not remove. Security Option!
if ( !defined('EQDKP_INC') ){
    header('HTTP/1.0 404 Not Found');exit;
}

$lang = array(
'inst_header'               => 'Installation',

// ===========================================================
//	Per Language default settings
// ===========================================================
'game_language'             => 'de',
'default_lang'              => 'german',
'default_locale'            => 'de_DE',

// ===========================================================
//	Prepare Installation
// ===========================================================
'installation_message'      => 'Meldung',
'installation_messages'     => 'Meldungen',
'error'                     => 'Fehler',
'errors'                    => 'Fehler',
'lerror'                    => 'FEHLER',
'notice'                    => 'MITTEILUNG',
'install_error'             => 'Installationsfehler',
'inst_step'                 => 'Schritt',
'error_nostructure'         => 'Konnte die SQL Struktur/Daten nicht finden',
'error_template'            => "Konnte '%s' includes/class_template.php nicht finden.",

// ===========================================================
//	Stepnames
// ===========================================================
'stepname_1'                => 'Informationen',
'stepname_2'                => 'Datenbank',
'stepname_3'                => 'DB pr�fen',
'stepname_4'                => 'Serverinfos',
'stepname_5'                => 'Zug�nge',
'stepname_6'                => 'Fertigstellen',

// ===========================================================
//	Step 1: PHP / Mysql Environment
// ===========================================================
'language_selector'         => 'Bitte w�hle die gew�nschte Sprache',
'install_language'          => 'Sprache der Installation',
'already_installed'         => 'EQdkp ist bereits installiert - entferne den <b>install/</b> Ordner in diesem Verzeichnis.',
'conf_not_write'            => 'Die Datei <b>config.php</b> wurde nicht gefunden und konnte nicht im EQdkp\'s root Ordner erstellt werden.<br />
                                Erstelle h�ndisch eine config.php im Eqdkp Root Ordner.',
'conf_written'              => 'Die Datei <b>config.php</b> wurde erstellt. Die Datei nicht l�schen!',
'conf_chmod'                => 'Die Datei <b>config.php</b> ist nicht beschreibbar.
                                <br />Bitte die Berechtigung richtig setzen. <b>chmod 0666 config.php</b>.',
'conf_writable'             => '<b>config.php</b> muss beschreibbar sein, damit das Setup automatisch ablaufen kann.',
'templcache_created'        => "Das Verzeichnis '%1\$s' wurde erstellt. Ein L�schen dieses Verzeichnisses wird das Betreiben von EQDKP-PLUS unm�glich machen.",
'templcache_notcreated'     => "Das Verzeichnis '%1\$s' konnte nicht erstellt werden, bitte erstelle das Verzeichnis manuell.
                                <br />Du kannst dies auf Rootservern recht einfach, indem du in der Konsole folgendes eingibst: <b>mkdir -p %1\$s</b>",
'templcache_notwritable'     => "Das Verzeichnis '%1\$s' existiert, aber ist weder schreibbar noch konnte es automatisch schreibbar gemacht werden.
                                <br />Bitte �ndere die Ordnerrechte manuell zu 0777, bei einem Rootserver hilft: <b>chmod 0777 %1\$s</b>.",
'templatecache_ok'          => "Der Ordner '%1\$s' wurde auf chmod 777 gesetzt, um dem EQDKP-PLUS zu erlauben, Daten in diese Ordner zu schreiben.",
'cachefolder_out'           => "Das Verzeichnis '%1\$s' wurde %2\$s und ist %3\$s",
'connection_failed'         => 'Die Verbindung zu EQdkp-PLUS.com ist fehlgeschlagen.',
'curl_notavailable'         => 'cURL ist nicht verf�gbar. Itemstats k�nnte Probleme beim Abrufen der Gegenst�nde haben.',
'fopen_notavailable'        => 'fopen ist nicht verf�gbar. Itemstats k�nnte Probleme beim Abrufen der Gegenst�nde haben.',
'safemode_on'               => 'PHP Safe Mode ist eingeschaltet. EQDKP-PLUS wird im Safe Mode nicht richtig funktionieren, da die Cache-Schreibotionen nicht in vollem Umfang zur Verf�gung stehen.',

'minimal_requ_notfilled'    => 'Entschuldigung, der Server entspricht nicht den Mindestanforderungen f�r EQdkp Plus',
'minimal_requ_filled'       => 'EQdkp Plus hat den Server untersucht und festgestellt, dass er die Mindestanforderungen zur Installation und zum Betrieb von EQdkp Plus erf�llt.',

'inst_unknown'              => 'Unbekannt',
'eqdkp_name'                => 'EQdkp PLUS',
'inst_eqdkpv'               => 'EQDKP Plus Version',
'inst_latest'               => 'Neueste Stabile Version',

'inst_php'                  => 'PHP',
'inst_view'                 => 'phpinfo() ansehen',
'inst_version'              => 'Version',
'inst_required'             => 'Ben�tigt',
'inst_available'            => 'Verf�gbar',
'inst_enabled'              => 'Aktiviert',
'inst_using'                => 'Benutzt',
'inst_yes'                  => 'Ja',
'inst_no'                   => 'Nein',

'inst_mysqlmodule'          => 'MySQL Modul',
'inst_zlibmodule'           => 'zLib Modul',
'inst_curlmodule'           => 'cURL Modul',
'inst_fopen'                => 'fopen',
'inst_safemode'             => 'Safe Mode',

'inst_php_modules'          => 'PHP Module',
'inst_Supported'            => 'Unterst�tzt',

'inst_found'                => 'gefunden',
'inst_writable'             => 'schreibbar',
'inst_notfound'             => 'nicht gefunden',
'inst_unwritable'           => 'schreibgesch�tzt',

'inst_button1'              => 'Installation beginnen',

// ===========================================================
//	Step 2: Database
// ===========================================================
'inst_database_conf'        => 'Datenbank Konfiguration',
'inst_dbtype'               => 'Datenbanktyp',
'inst_dbhost'               => 'Datenbankhost',
'inst_dbname'               => 'Datenbankname',
'inst_dbuser'               => 'Datenbank Benutzername',
'inst_dbpass'               => 'Datenbank Passwort',
'inst_table_prefix'         => 'Pr�fix f�r die EQdkp Tabellen',
'inst_button2'              => 'Datenbank testen',

// ===========================================================
//	Step 3: Database cofirmation
// ===========================================================
'inst_error_nodbname'       => 'Kein Datenbankname angegeben! Bitte gehe zur�ck und gib einen Tabellennamen an.',
'inst_error_prefix'         => 'Kein Datenbank Prefix angegeben! Bitte gehe zur�ck und gib ein Prefix an.',
'inst_error_prefix_inval'   => 'Ung�ltiges Tabellen Prefix.',
'inst_error_prefix_toolong' => 'Tabellen Pr�fix ist zu lang! Bitte gib ein k�rzeres Prefix ein!',
'inserror_dbconnect'        => 'Verbindung zur Datenbank ist fehlgeschlagen.',
'insterror_no_mysql'        => 'Keine MySQL Datenbank gefunden!',
'inst_redoit'               => 'Installation wiederholen',
'db_warning'                => 'Warnung',
'db_information'            => 'Informationen',
'inst_sqlheaderbox'         => 'SQL Informationen',
'inst_mysqlinfo'            => "MySQL Client <b>und</b> Serverversion 4.0.4 oder h�her und InnoDB Tabellenunterst�tzung werden f�r den Betrieb von EQdkp ben�tigt.<br>
                                <b><br>Auf dem Server l�uft <ul>%s</ul> und Client Version <ul>%s.</ul></b><br>
                                MySQL Versionen unterhalb von 4.0.4 werden nicht mehr unterst�tzt. Versionen unterhalb von 4.0.4<br>
                                werden zu Datenverlust f�hren. Das EQdkp Plus Support Team wird keine Anfragen bearbeiten, wenn Euer Server diese Anforderung nicht erf�llt.<br><br>",
'inst_button3'              => 'Weiter',
'inst_button_back'          => 'Zur�ck',
'inst_sql_error'            => "Fehler! Beim Ausr�hren folgender SQL Anweisung ist ein Fehler aufgetreten: <br><br><ul>%1\$s</ul><br/>",
'insinfo_dbready'           => 'Die Datenbank wurde �berpr�ft. Es wurden keine Fehler oder Konflikte gefunden. Die Installation kann bedenkenlos fortgesetzt werden.',

// Errors
'INST_ERR'                  => 'Installationsfehler',
'INST_ERR_PREFIX'           => 'Eine EQdkp Installation mit diesem Pr�fix existiert bereits. Beim Fortsetzen der Installation werden alle vorhandenen Tabellen gel�scht, alle Daten gehen dabei unwiderruflich verloren! Benutze den Zur�ck-Button des Browsers um ein anderes Pr�fix anzugeben, oder klicke auf "Weiter", um mit der Installation fortzufahren.',
'INST_ERR_DB_CONNECT'       => 'Konnte keine Verbindung mit der Datenbank herstellen, siehe untenstehende Fehlermeldung.',
'INST_ERR_DB_NO_ERROR'      => 'Keine Fehlermeldung angegeben.',
'INST_ERR_DB_NO_MYSQLI'     => 'Die auf dieser Maschine installierte Version von MySQL ist nicht kompatibel mit der ausgew�hlten �MySQL with MySQLi Extension� Option. Bitte versuche stattdessen �MySQL�.',
'INST_ERR_DB_NO_NAME'       => 'Kein Datenbankname angegeben.',
'INST_ERR_PREFIX_INVALID'   => 'Der angegebene Datenbank-Prefix ist f�r diesen Datenbanktyp nicht g�ltig. Bitte versuche einen anderen, entferne alle Zeichen wie Bindestriche, Apostrophe, Slashes oder Backslashes.',
'INST_ERR_PREFIX_TOO_LONG'  => 'Der eingegebene Datenbankprefix ist zu lang. Die maximale L�nge betr�gt %d Zeichen.',

// ===========================================================
//	Step 4: Server
// ===========================================================
'inst_language_config'      => 'Spracheinstellungen',
'inst_default_lang'         => 'Standardsprache',
'inst_default_locale'       => 'Standard Lokalisierung',

'inst_game_config'          => 'Spieleinstellungen',
'inst_default_game'         => 'Standard Spiel',

'inst_server_config'        => 'Server Einstellungen',
'inst_server_name'          => 'Domainname',
'inst_server_port'          => 'Serverport',
'inst_server_path'          => 'Scriptpfad',

'inst_button4'              => 'Datenbank installieren',

// ===========================================================
//	Step 5: Accounts
// ===========================================================
'inst_administrator_config' => 'Administrator Account Erstellung',
'inst_username'             => 'Administrator Benutzername',
'inst_user_password'        => 'Administrator Passwort',
'inst_user_pw_confirm'      => 'Best�tige Administrator Passwort',
'inst_user_email'           => 'Administrator E-Mail-Adresse',

'inst_button5'              => 'Zugang anlegen',

'inst_writerr_confile'      => 'Die Datei <b>config.php</b> konnte nicht beschrieben werden.  Speichere eine leere Textdatei, benenne sie um in "config.php" und f�ge folgenden Inhalt ein:',
'inst_confwritten'          => 'Die Konfiguarationsdatei wurde erstellt.. Erstelle nun einen Admin-Account.',
'inst_checkifdbexists'      => 'Datenbank vorhanden. Tabellen werden im n�chsten Schritt angeleget.',
'inst_wrong_dbtype'         => "Konnte die Datenbank Abstrakttionsschicht nicht finden <b>%s</b>, stelle sicher das %s existiert.",
'inst_failedconhost'        => "Konnte nicht auf die Datenbank <b>%s</b> als <b>%s@%s verbinden!</b>
                                <br /><br /><a href='index.php'>Installation wiederholen</a>",
'inst_failedversioninfo'    => "Konnte keine Versionsinformationen der Datenbank <b>%s</b> als <b>%s@%s abrufen.</b>
                                <br /><br /><a href='index.php'>Installation wiederholen</a>",

// ===========================================================
//	Step 5: Finish
// ===========================================================
'login'                     => 'Anmelden',
'username'                  => 'Benutzername',
'password'                  => 'Passwort',
'remember_password'         => 'Anmeldung speichern',

'login_button'              => 'Anmelden',

'inst_passwordnotmatch'     => 'Das Passwort passte nicht, so das es auf <b>admin</b> zur�ck gesetzt wurde.  Es kann aber jederzeit �ber Einstellungen ge�ndert werden.',
'inst_admin_created'        => 'Das Administratorenkonto wurde erfolgreich angelegt. Als letzten Schritt bitte einloggen, um EQdkp Plus weiter einzurichten.',
);
?>
