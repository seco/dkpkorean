<?php
/******************************
 * EQdkp
 * Copyright 2002-2003
 * Licensed under the GNU GPL.  See COPYING for full terms.
 * ------------------
 * file.php
 * Began: Day January 1 2003
 *
 * $Id: lang_install.php 3875 2009-02-19 17:42:26Z Lightstalker $
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
'game_language'             => 'fr',
'default_lang'              => 'french',
'default_locale'            => 'fr_FR',

// ===========================================================
//	Prepare Installation
// ===========================================================
'installation_message'      => 'Note d\'installation',
'installation_messages'     => 'Notes d\'installation',
'error'                     => 'Erreur',
'errors'                    => 'Erreurs',
'lerror'                    => 'ERREUR',
'notice'                    => 'NOTICE',
'install_error'             => 'Erreur d\'installation',
'inst_step'                 => 'Etape',
'error_nostructure'         => 'N\'a pas pu obtenir la structure de donn�es SQL.',
'error_template'            => "N\'a pas pu inclure '%s' includes/class_template.php - v�rifiez que le fichier existe.",

// ===========================================================
//	Stepnames
// ===========================================================
'stepname_1'                => 'Informations',
'stepname_2'                => 'Base de donn�es',
'stepname_3'                => 'V�rification de la base',
'stepname_4'                => 'Infos serveur',
'stepname_5'                => 'Compte',
'stepname_6'                => 'Terminer',

// ===========================================================
//	Step 1: PHP / Mysql Environment
// ===========================================================
'language_selector'         => 'S�lectionnez la langue souhait�',
'install_language'          => 'Langue d\'installation',
'already_installed'         => 'EQdkp est d�j� install� - supprimer le dossier <b>install/</b> de ce r�pertoire.',
'conf_not_write'            => 'Le fichier <b>config.php</b> n\'existe pas et n\'a pas pu �tre cr�� dans la racine du r�pertoire EQdkp<br />
                                Vous devez cr�er un fichier vide config.php sur votre serveur avant de poursuivre.',
'conf_written'              => 'Le fichier <b>config.php</b> a �t� cr�� dans la racine du r�pertoire EQdkp<br />
                                La suppression de ce fichier provoque une mauvaise installation de EQdkp',
'conf_chmod'                => 'Le fichier <b>config.php</b> n\'est pas modifiable ou accessible, et ne peut �tre modifi� automatiquement.
                                <br />Veuillez configurer les permissions � 0666 manuellement avec la commande <b>chmod 0666 config.php</b> sur votre serveur.',
'conf_writable'             => '<b>config.php</b> a �t� rendu modifiable et accessible afin de permettre l\'installation automatique.',
'templcache_created'        => "The directory '%1\$s' was created, removing this directory could interfere with the operation of your EQdkp installation.",
'templcache_notcreated'     => "The directory '%1\$s' could not be created, please create one manually in the templates directory.
                                <br />You can do this by changing to the EQdkp root directory and typing <b>mkdir -p %1\$s</b>",
'templcache_notwritable'    => "The directory '%1\$s' exists, but is not set to be writeable and could not be changed automatically.
                                <br />Please change the permissions to 0777 manually by executing <b>chmod 0777 %1\$s</b> on your server.",
'templatecache_ok'          => "The '%1\$s' directory has been set to be writeable in order to let EQDKP-PLUS create files in these folders.",
'cachefolder_out'           => "The folder '%1\$s' has been %2\$s and is %3\$s",
'connection_failed'         => 'La connexion � EQdkp-PLUS.com � �chou�e..',
'curl_notavailable'         => 'cURL n\'est pas disponible. Itemstats ne fonctionnera probablement pas.',
'fopen_notavailable'        => 'fopen n\'est pas disponible. Itemstats ne fonctionnera probablement pas.',
'safemode_on'               => 'PHP Safe Mode is enabled. EQDKP-PLUS will not run in Safe Mode because of the Data write operations.',

'minimal_requ_notfilled'    => 'D�sol�, votre serveur ne satisfait pas aux caract�risques minimales pour EQdkp',
'minimal_requ_filled'       => 'EQdkp a analys� votre serveur et il satisfait aux caract�ristiques minimales pour l\'installation.',

'inst_unknown'              => 'Inconnu',
'eqdkp_name'                => 'EQdkp PLUS',
'inst_eqdkpv'               => 'Version EQDKP Plus',
'inst_latest'               => 'Derni�re stable',

'inst_php'                  => 'PHP',
'inst_view'                 => 'Voir phpinfo()',
'inst_version'              => 'Version',
'inst_required'             => 'Requise',
'inst_available'            => 'Disponible',
'inst_enabled'              => 'Enabled',
'inst_using'                => 'Utilise',
'inst_yes'                  => 'Oui',
'inst_no'                   => 'Non',

'inst_mysqlmodule'          => 'Module MySQL',
'inst_zlibmodule'           => 'Module zLib',
'inst_curlmodule'           => 'Module cURL',
'inst_fopen'                => 'fopen',
'inst_safemode'             => 'Safe Mode',

'inst_php_modules'          => 'Modules PHP',
'inst_Supported'            => 'Support�',

'inst_found'                => 'Found',
'inst_writable'             => 'Writable',
'inst_notfound'             => 'Not Found',
'inst_unwritable'           => 'Unwritable',

'inst_button1'              => 'D�marrer l\'installation',

// ===========================================================
//	Step 2: Database
// ===========================================================
'inst_database_conf'        => 'Configuration de la base de donn�es',
'inst_dbtype'               => 'Type de la base de donn�es',
'inst_dbhost'               => 'Serveur de la base de donn�es',
'inst_dbname'               => 'Nom de la base de donn�es',
'inst_dbuser'               => 'Utilisateur de la base de donn�es',
'inst_dbpass'               => 'Mot de passe de la base de donn�es',
'inst_table_prefix'         => 'Prefix des tables EQdkp',
'inst_button2'              => 'Test de la base de donn�es',

// ===========================================================
//	Step 3: Database cofirmation
// ===========================================================
'inst_error_nodbname'       => 'Aucun nom de base de donn�es !',
'inst_error_prefix'         => 'Pas de pr�fixe de table. Revenez en arri�re.',
'inst_error_prefix_inval'   => 'Prefixe invalide',
'inst_error_prefix_toolong' => 'prefixe trop long !',
'inserror_dbconnect'        => 'Echec de la connexion � la base',
'insterror_no_mysql'        => 'La base de donn�es n\'est pas MySQL!',
'inst_redoit'               => 'Recommencer l\'instalation',
'db_warning'                => 'Alerte',
'db_information'            => 'Informations',
'inst_sqlheaderbox'         => 'Informations SQL',
'inst_mysqlinfo'            => "Le client MySQL <b>et</b> la version du serveurr 4.0.4 ou plus ainsi que le support des tables InnoDB sont n�cessaires pour EQdkp.<br>
                                <b><br>Vous utilisez la version serveur <ul>%s</ul> et la version client <ul>%s.</ul></b><br>
                                les versions MySQL ant�rieures � 4.0.4 ne fonctionnent pas et ne sont pas support�es. Les versions ant�rieures � 4.0.4<br>
                                posent des probl�mes de corruption de donn�es, et nous ne fourniront aucun support sur ces installations.<br><br>",
'inst_button3'              => 'Continuer',
'inst_button_back'          => 'Retour',
'inst_sql_error'            => "Erreur ! Echec d'\'ex�cution de la requ�te SQL : <br><br><ul>%1\$s</ul><br>Erreur : %2\$s [%3\$s]",
'insinfo_dbready'           => 'La connexion � la base a �t� v�rifi�e et aucune erreur n\'a �t� d�tect�e. Vous pouvez continuer l\'installation.',

// Errors
'INST_ERR'                  => 'Erreur d\'installation',
'INST_ERR_PREFIX'           => 'Le pr�fixe de la base existe d�j�. Veuillez revenir en arri�re et choisissez un autre pr�fixe ou vos donn�es seront perdues !',
'INST_ERR_DB_CONNECT'       => 'Impossible de se connecter � la base, voir le message d\'erreur ci-dessous.',
'INST_ERR_DB_NO_ERROR'      => 'Pas de message d\'erreur indiqu�.',
'INST_ERR_DB_NO_MYSQLI'     => 'La version de MySQL install�e sur cette machine est incompatible avec l\'option �MySQL with MySQLi Extension� choisie. Veuillez essayer l\'option �MySQL� � la place.',
'INST_ERR_DB_NO_NAME'       => 'Pas de nom de base indiqu�.',
'INST_ERR_PREFIX_INVALID'   => 'Le pr�fixe de table indiqu� n\'est pas valide pour votre base de donn�es. Veuillez en choisir un autre, en �tant les caract�res comme hyph�nation, apostrophe ou les barres obliques.',
'INST_ERR_PREFIX_TOO_LONG'  => 'Le pr�fixe de tabe indiqu� est trop long. La longueur maximale est de %d caract�res.',

// ===========================================================
//	Step 4: Server
// ===========================================================
'inst_language_config'      => 'Configuration de la langue',
'inst_default_lang'         => 'Langue par d�faut',
'inst_default_locale'       => 'Local par d�faut',

'inst_game_config'          => 'Configuration du jeu',
'inst_default_game'         => 'Jeu par d�faut',

'inst_server_config'        => 'Configuration du serveur',
'inst_server_name'          => 'Nom de domaine',
'inst_server_port'          => 'Port du serveur',
'inst_server_path'          => 'Chemin du script',

'inst_button4'              => 'Installer la base',

// ===========================================================
//	Step 5: Accounts
// ===========================================================
'inst_administrator_config' => 'Configuration du compte administrateur',
'inst_username'             => 'Nom de l\'administrateur',
'inst_user_password'        => 'Mot de passe de l\'administrateur',
'inst_user_pw_confirm'      => 'Confirmer le mot de passe',
'inst_user_email'           => 'Adresse email de l\'administrateur',

'inst_button5'              => 'Installer les comptes',

'inst_writerr_confile'      => 'le fichier <b>config.php</b> n\'a pas pu �tre ouvert pour l\'�criture. Copier-coller les lignes suivantes dans le fichier config.php
                                et sauvegarder pour continuer:',
'inst_confwritten'          => 'Votre fichier de configuration a �t� enregistr� avec les valeurs initiales, maisn l\installation ne pourra pas se termniner avant
                                de cr�er un compte administrateur � la prochaine �tape.',
'inst_checkifdbexists'      => 'Avant de continuer, veuillez v�rifier que la base de donn�es avec le nom indiqu� est d�j� cr��e et que l\'utilisateur pr�cis� � les permission pour cr�er des tables.',
'inst_wrong_dbtype'         => "Impossible de trouver la couche d\'abstraction de la base pour <b>%s</b>, v�rifiez que %s existe.",
'inst_failedconhost'        => "Echec de la connexion � la base <b>%s</b> comme <b>%s@%s</b>
                                <br /><br /><a href='index.php'>Recommencer l\'installation</a>",
'inst_failedversioninfo'    => "Impossible d\'obtenir les informatiosn de version pour la base database <b>%s</b> comme <b>%s@%s</b>
                                <br /><br /><a href='index.php'>Recommencer l\'installation</a>",

// ===========================================================
//	Step 5: Finish
// ===========================================================
'login'                     => 'Connexion',
'username'                  => 'Utilisateur',
'password'                  => 'Mot de passe',
'remember_password'         => 'Se souvenir de moi (cookie)',

'login_button'              => 'Connexion',

'inst_passwordnotmatch'     => 'Votre mot de passe est incorrect, il a donc �t� r�initialis� avec <b>admin</b>.  Vous pouvez le changer en acc�dant � vos param�tres de compte apr�s votre connexion.',
'inst_admin_created'        => 'Votre compte administrateur a �t� cr��, veuillez vous connecter pour acc�der � la page de configuration.',
);
?>
