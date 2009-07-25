<?php
/******************************
 * EQdkp
 * Copyright 2002-2003
 * Licensed under the GNU GPL.  See COPYING for full terms.
 * ------------------
 * lang_admin.php
 * Began: Fri January 3 2003
 *
 * $Id: lang_admin.php 4184 2009-03-11 01:29:03Z osr-corgan $
 *
 ******************************/

if ( !defined('EQDKP_INC') )
{
     die('Do not access this file directly.');
}

// %1\$<type> prevents a possible error in strings caused
//      by another language re-ordering the variables
// $s is a string, $d is an integer, $f is a float

$lang['ENCODING'] = 'iso-8859-1';
$lang['XML_LANG'] = 'fr';

// Titles
$lang['addadj_title']         = 'Ajouter un ajustement de groupe';
$lang['addevent_title']       = 'Ajouter un �v�nement';
$lang['addiadj_title']        = 'Ajouter un ajustement individuel';
$lang['additem_title']        = 'Ajouter l\'achat d\'un objet';
$lang['addmember_title']      = 'Ajouter un membre';
$lang['addnews_title']        = 'Ajouter une nouvelle';
$lang['addraid_title']        = 'Ajouter un raid';
$lang['addturnin_title']      = "Ajouter une restitution - Etape %1\$d";
$lang['admin_index_title']    = 'Administration EQdkp';
$lang['config_title']         = 'Scipt de configuration';
$lang['manage_members_title'] = 'G�rer les membres de guilde';
$lang['manage_users_title']   = 'Comptes utilisateurs et permissions';
$lang['parselog_title']       = 'Parcourir un fichier log';
$lang['plugins_title']        = 'G�rer les plugins';
$lang['styles_title']         = 'G�rer les mod�les';
$lang['viewlogs_title']       = 'Affichage des logs';

// Page Foot Counts
$lang['listusers_footcount']             = "... %1\$d utilisateurs trouv�s / %2\$d par page";
$lang['manage_members_footcount']        = "... %1\$d membres trouv�s";
$lang['online_footcount']                = "... %1\$d utilisateurs connect�s";
$lang['viewlogs_footcount']              = "... %1\$d logs trouv�s / %2\$d par page";

// Submit Buttons
$lang['add_adjustment'] = 'Ajouter un ajustement';
$lang['add_account'] = 'Ajouter un compte';
$lang['add_event'] = 'Ajouter un �v�nement';
$lang['add_item'] = 'Ajouter un objet';
$lang['add_member'] = 'Ajouter un membre';
$lang['add_news'] = 'Ajouter une nouvelle';
$lang['add_raid'] = 'Ajouter un raid';
$lang['add_style'] = 'Ajouter un mod�le';
$lang['add_turnin'] = 'Ajouter une restitution';
$lang['delete_adjustment'] = 'Supprimer un ajustement';
$lang['delete_event'] = 'Supprimer un �v�nement';
$lang['delete_item'] = 'Supprimer un objet';
$lang['delete_member'] = 'Supprimer un membre';
$lang['delete_news'] = 'Supprimer une nouvelle';
$lang['delete_raid'] = 'Supprimer un raid';
$lang['delete_selected_members'] = 'Supprimer les membres s�lectionn�s';
$lang['delete_style'] = 'Supprimer un mod�le';
$lang['mass_delete'] = 'Suppression multiples';
$lang['mass_update'] = 'Mise � jour multiples';
$lang['parse_log'] = 'Parcourir le log';
$lang['search_existing'] = 'Rechercher';
$lang['select'] = 'Selectionner';
$lang['transfer_history'] = 'Transf�rer l\'historique';
$lang['update_adjustment'] = 'Mettre � jour l\'ajustement';
$lang['update_event'] = 'Mettre � jour l\'�v�nement';
$lang['update_item'] = 'Mettre � jour l\'objet';
$lang['update_member'] = 'Mettre � jour le membre';
$lang['update_news'] = 'Mettre � jour la nouvelles';
$lang['update_raid'] = 'Mettre � jour le raid';
$lang['update_style'] = 'Mettre � jour le mod�le';

// Misc
$lang['account_enabled'] = 'Compte activ�';
$lang['adjustment_value'] = 'Valeur d\'ajustement';
$lang['adjustment_value_note'] = 'peut �tre n�gative';
$lang['code'] = 'Code';
$lang['contact'] = 'Contact';
$lang['create'] = 'Cr�er';
$lang['found_members'] = "A parcouru %1\$d lignes, � trouv� %2\$d membres";
$lang['headline'] = 'Titre';
$lang['hide'] = 'Cacher ?';
$lang['install'] = 'Installer';
$lang['item_search'] = 'Rechercher un objet';
$lang['list_prefix'] = 'Prefix de liste';
$lang['list_suffix'] = 'Suffix de liste';
$lang['logs'] = 'Logs';
$lang['log_find_all'] = 'Chercher tout (anonymes compris)';
$lang['manage_members'] = 'G�rer les membres';
$lang['manage_plugins'] = 'G�rer les plugins';
$lang['manage_users'] = 'G�rer les utilisateurs';
$lang['mass_update_note'] = 'Si vous souhaitez affecter les modifications � tous les membres s�lectionn�s, utilisez ces commandes pour changer leurs propri�t�s et cliquez sur "Mise � jour multiples".
                             Pour effacer les comptes s�lectionn�s, cliquez uniquement sur "Suppression multiples".';
$lang['members'] = 'Membres';
$lang['member_rank'] = 'Rand du membre';
$lang['message_body'] = 'Corps du texte';
$lang['message_show_loot_raid'] = 'Afficher les loots du raid :';
$lang['results'] = "%1\$d Resultatss (\"%2\$s\")";
$lang['search'] = 'Rechercher';
$lang['search_members'] = 'Rechercher un membre';
$lang['should_be'] = 'Devrait �tre';
$lang['styles'] = 'Mod�les';
$lang['title'] = 'Titre';
$lang['uninstall'] = 'D�sinstaller';
$lang['enable']		= 'Activer';
$lang['update_date_to'] = "Mettre la date �<br />%1\$s?";
$lang['version'] = 'Version';
$lang['x_members_s'] = "%1\$d membre";
$lang['x_members_p'] = "%1\$d membres";

// Permission Messages
$lang['noauth_a_event_add']    = 'Vous n\'avez pas la permission d\'ajouter des �v�nements.';
$lang['noauth_a_event_upd']    = 'Vous n\'avez pas la permission de mettre � jour des �v�nements.';
$lang['noauth_a_event_del']    = 'Vous n\'avez pas la permission d\'effacer des �v�nements.';
$lang['noauth_a_groupadj_add'] = 'Vous n\'avez pas la permission d\'ajouter des ajustements de groupe.';
$lang['noauth_a_groupadj_upd'] = 'Vous n\'avez pas la permission de mettre � jour des ajustements de groupe.';
$lang['noauth_a_groupadj_del'] = 'Vous n\'avez pas la permission d\'effacer des ajustements de groupe.';
$lang['noauth_a_indivadj_add'] = 'Vous n\'avez pas la permission d\'ajouter des ajustements individuels.';
$lang['noauth_a_indivadj_upd'] = 'Vous n\'avez pas la permission de mettre � jour des ajustements individuels.';
$lang['noauth_a_indivadj_del'] = 'Vous n\'avez pas la permission d\'effacer des ajustements individuels.';
$lang['noauth_a_item_add']     = 'Vous n\'avez pas la permission d\'ajouter des objets.';
$lang['noauth_a_item_upd']     = 'Vous n\'avez pas la permission de mettre � jour des objets.';
$lang['noauth_a_item_del']     = 'Vous n\'avez pas la permission d\'effacer des objets.';
$lang['noauth_a_news_add']     = 'Vous n\'avez pas la permission d\'ajouter des nouvelles.';
$lang['noauth_a_news_upd']     = 'Vous n\'avez pas la permission de mettre � jour des nouvelles.';
$lang['noauth_a_news_del']     = 'Vous n\'avez pas la permission d\'effacer des nouvelles.';
$lang['noauth_a_raid_add']     = 'Vous n\'avez pas la permission d\'ajouter des raids.';
$lang['noauth_a_raid_upd']     = 'Vous n\'avez pas la permission de mettre � jour des raids.';
$lang['noauth_a_raid_del']     = 'Vous n\'avez pas la permission d\'effacer des raids.';
$lang['noauth_a_turnin_add']   = 'Vous n\'avez pas la permission d\'ajouter des restitutions.';
$lang['noauth_a_config_man']   = 'Vous n\'avez pas la permission de g�rer la configuration d\'EQdkp.';
$lang['noauth_a_members_man']  = 'Vous n\'avez pas la permission de g�rer les membres de guilde.';
$lang['noauth_a_plugins_man']  = 'Vous n\'avez pas la permission de g�rer les plugins.';
$lang['noauth_a_styles_man']   = 'Vous n\'avez pas la permission de g�rer les mod�les.';
$lang['noauth_a_users_man']    = 'Vous n\'avez pas la permission g�rer les param�tres de compte utilisateur.';
$lang['noauth_a_logs_view']    = 'Vous n\'avez pas la permission d\'afficher les logs.';

// Submission Success Messages
$lang['admin_add_adj_success']               = "Un ajustement � %1\$s de %2\$.2f a �t� ajout�.";
$lang['admin_add_admin_success']             = "Un e-mail a �t� envoy� � %1\$s avec ses informations administratives.";
$lang['admin_add_event_success']             = "Une valeur par d�faut de %1\$s pour un raid le %2\$s a �t� ajout�e.";
$lang['admin_add_iadj_success']              = "Un ajustement individuel � %1\$s de %2\$.2f pour %3\$s a �t� ajout�.";
$lang['admin_add_item_success']              = "Un achat d\'objet de  %1\$s, acquis par %2\$s pour %3\$.2f a �t� ajout�.";
$lang['admin_add_member_success']            = "%1\$s a �t� ajout� comme membre.";
$lang['admin_add_news_success']              = 'La nouvelle a �t� ajout�e.';
$lang['admin_add_raid_success']              = "Le %1\$d/%2\$d/%3\$d raid du %4\$s a �t� ajout�.";
$lang['admin_add_style_success']             = 'Le nouveau mod�le a �t� ajout� correctement.';
$lang['admin_add_turnin_success']            = "%1\$s a �t� transf�r� de %2\$s � %3\$s.";
$lang['admin_delete_adj_success']            = "L\'ajustement � %1\$s de %2\$.2f a �t� supprim�.";
$lang['admin_delete_admins_success']         = "Les administrateurs s�lectionn�s ont �t� supprim�s.";
$lang['admin_delete_event_success']          = "La valeur par d�faut de %1\$s pour le raid du %2\$s a �t� supprim�e.";
$lang['admin_delete_iadj_success']           = "L\'ajustement individuel � %1\$s de %2\$.2f pour %3\$s a �t� supprim�.";
$lang['admin_delete_item_success']           = "L\achat d\'objet de %1\$s, acquis par %2\$s pour %3\$.2f a �t� supprim�.";
$lang['admin_delete_members_success']        = "%1\$s, avec tout son historiques a �t� supprim�.";
$lang['admin_delete_news_success']           = 'La nouvelle a �t� supprim�e.';
$lang['admin_delete_raid_success']           = 'Le raid et tous ses objets associ�s ont �t� supprim�s.';
$lang['admin_delete_style_success']          = 'Le mod�le a �t� supprim� correctement.';
$lang['admin_delete_user_success']           = "Le compte avec le nom  %1\$s a �t� supprim�.";
$lang['admin_set_perms_success']             = "Toutes les permissions d\'administration ont �t� mises � jour.";
$lang['admin_transfer_history_success']      = "Tout l'historiqe de %1\$s a �t� transf�r� � %2\$s et %1\$s a �t� supprim�.";
$lang['admin_update_account_success']        = "Vos param�tres de compte ont �t� mis � jour.";
$lang['admin_update_adj_success']            = "L\ajustement � %1\$s de %2\$.2f a �t� mis � jour.";
$lang['admin_update_event_success']          = "La valeur par d�faut de %1\$s pour le raid du %2\$s a �t� mise � jour.";
$lang['admin_update_iadj_success']           = "L\'adjustment � %1\$s de %2\$.2f pour %3\$s a �t� mis � jour.";
$lang['admin_update_item_success']           = "L\'achat d\objet de %1\$s, acquis par %2\$s pour %3\$.2f a �t� mis � jour.";
$lang['admin_update_member_success']         = "Les param�tres du membre %1\$s ont �t� mis � jour.";
$lang['admin_update_news_success']           = 'La nouvelle a �t� mise � jour.';
$lang['admin_update_raid_success']           = "Le %1\$d/%2\$d/%3\$d raid du %4\$s a �t� mis � jour.";
$lang['admin_update_style_success']          = 'Le mod�le a �t� mis � jour correctement.';

$lang['admin_raid_success_hideinactive']     = 'Mise � jour des membres actifs/inactifs en cours ...';

// Delete Confirmation Texts
$lang['confirm_delete_adj']     = 'Etes-vous certain de vouloir supprimer cet ajustement de groupe ?';
$lang['confirm_delete_admins']  = 'Etes-vous certain de vouloir supprimer les administrateurs s�lectionn�s ?';
$lang['confirm_delete_event']   = 'Etes-vous certain de vouloir supprimer cet �v�nement ?';
$lang['confirm_delete_iadj']    = 'Etes-vous certain de vouloir supprimer cet ajustement individuel ?';
$lang['confirm_delete_item']    = 'Etes-vous certain de vouloir supprimer cet objet ?';
$lang['confirm_delete_members'] = 'Etes-vous certain de vouloir supprimer les membres suivants ?';
$lang['confirm_delete_news']    = 'Etes-vous certain de vouloir supprimer cette nouvelle ?';
$lang['confirm_delete_raid']    = 'Etes-vous certain de vouloir supprimer ce raid ?';
$lang['confirm_delete_style']   = 'Etes-vous certain de vouloir supprimer ce mod�le ?';
$lang['confirm_delete_users']   = 'Etes-vous certain de vouloir supprimer les comptes d\'utilisateurs suivants ?';

// Log Actions
$lang['action_event_added']      = 'Ev�nement ajout�';
$lang['action_event_deleted']    = 'Ev�nement supprim�';
$lang['action_event_updated']    = 'Ev�nement mis � jour';
$lang['action_groupadj_added']   = 'Ajustement de groupe ajout�';
$lang['action_groupadj_deleted'] = 'Ajustement de groupe supprim�';
$lang['action_groupadj_updated'] = 'Ajustement de groupe mis � jour';
$lang['action_history_transfer'] = 'Transfert d\'historique d\'un membre';
$lang['action_indivadj_added']   = 'Ajustement individuel ajout�';
$lang['action_indivadj_deleted'] = 'Ajustement individuel supprim�';
$lang['action_indivadj_updated'] = 'Ajustement individuel mis � jour';
$lang['action_item_added']       = 'Objet ajout�';
$lang['action_item_deleted']     = 'Objet supprim�';
$lang['action_item_updated']     = 'Objet mis � jour';
$lang['action_member_added']     = 'Membre ajout�';
$lang['action_member_deleted']   = 'Membre supprim�';
$lang['action_member_updated']   = 'Membre mis � jour';
$lang['action_news_added']       = 'Nouvelle ajout�e';
$lang['action_news_deleted']     = 'Nouvelle supprim�e';
$lang['action_news_updated']     = 'Nouvelles mise � jour';
$lang['action_raid_added']       = 'Raid ajout�';
$lang['action_raid_deleted']     = 'Raid supprim�';
$lang['action_raid_updated']     = 'Raid mis � jour';
$lang['action_turnin_added']     = 'Restitution ajout�e';

// Before/After
$lang['adjustment_after']  = 'Ajustement apr�s';
$lang['adjustment_before'] = 'Ajustement avant';
$lang['attendees_after']   = 'Participants apr�s';
$lang['attendees_before']  = 'Participants avant';
$lang['buyers_after']      = 'Acheteurs apr�s';
$lang['buyers_before']     = 'Acheteurs avant';
$lang['class_after']       = 'Classe apr�s';
$lang['class_before']      = 'Classe avant';
$lang['earned_after']      = 'Gagn� apr�s';
$lang['earned_before']     = 'Gagn� avant';
$lang['event_after']       = 'Ev�nement apr�s';
$lang['event_before']      = 'Ev�nement avant';
$lang['headline_after']    = 'Titre apr�s';
$lang['headline_before']   = 'Titre avant';
$lang['level_after']       = 'Niveau apr�s';
$lang['level_before']      = 'Niveau avant';
$lang['members_after']     = 'Membres apr�s';
$lang['members_before']    = 'Membres avant';
$lang['message_after']     = 'Message apr�s';
$lang['message_before']    = 'Message avant';
$lang['name_after']        = 'Nom apr�s';
$lang['name_before']       = 'Nom avant';
$lang['note_after']        = 'Note apr�s';
$lang['note_before']       = 'Note avant';
$lang['race_after']        = 'Race apr�s';
$lang['race_before']       = 'Race avant';
$lang['raid_id_after']     = 'ID de raid apr�s';
$lang['raid_id_before']    = 'ID de aaid avant';
$lang['reason_after']      = 'Raison apr�s';
$lang['reason_before']     = 'Raison avant';
$lang['spent_after']       = 'D�pens� apr�s';
$lang['spent_before']      = 'D�pens� avant';
$lang['value_after']       = 'Valeur apr�s';
$lang['value_before']      = 'Valeur avant';

// Configuration
$lang['general_settings'] = 'Options g�n�rales';
$lang['guildtag'] = 'Nom de la guilde';
$lang['guildtag_note'] = 'Utilis� dans le titre de presque toutes les pages';
$lang['parsetags'] = 'Tags de guilde � parcourir';
$lang['parsetags_note'] = 'Ceux list�s seront disponibles en option au moment de l\'analyse des logs de raid.';
$lang['domain_name'] = 'Nom de domaine';
$lang['server_port'] = 'Port du serveur';
$lang['server_port_note'] = 'Le port de votre serveur web. G�n�ralement 80.';
$lang['script_path'] = 'Chemin (dossier) du script';
$lang['script_path_note'] = 'Chemin ou se trouve EQdkp, en relation avec le nom de domaine';
$lang['site_name'] = 'Nom du site';
$lang['site_description'] = 'Description du site';
$lang['point_name'] = 'Nom du point';
$lang['point_name_note'] = 'Ex: DKP, RP, etc.';
$lang['enable_account_activation'] = 'Activer l\'activation de compte';
$lang['none'] = 'Aucun';
$lang['admin'] = 'Admin';
$lang['default_language'] = 'Langue par d�faut';
$lang['default_locale'] = 'Local par d�faut (option du personnage seulement; ceci n\'affecte pas la langue)';
$lang['default_game'] = 'Jeu par d�faut';
$lang['default_game_warn'] = 'Changer le jeu par d�faut peut annuler les autres changements de cette session.';
$lang['default_style'] = 'Mod�le par d�faut';
$lang['default_page'] = 'Page d\'index par d�faut';
$lang['hide_inactive'] = 'Cacher les membres inactifs';
$lang['hide_inactive_note'] = 'Cacher les membres qui n\'ont pas particip�s � un raid depuis [inactive period] jours ?';
$lang['inactive_period'] = 'P�riode d\'inactivit�';
$lang['inactive_period_note'] = 'Nombre de jour qu\'un membre peut rater et rester consid�r� comme actif';
$lang['inactive_point_adj'] = 'Ajustement de points d\'inactivit�';
$lang['inactive_point_adj_note'] = 'Points d\'ajustement d\'un membre lorsqu\'il devient inactif.';
$lang['active_point_adj'] = 'Activer les points d\'ajustement';
$lang['active_point_adj_note'] = 'Points d\'ajustement d\'un membre lorsqu\'il devient actif.';
$lang['enable_gzip'] = 'Activer la compression Gzip';
$lang['show_item_stats'] = 'Montrer les statistiques des objets';
$lang['show_item_stats_note'] = 'Essaye de r�cup�rer les statistiques d\'un objet depuis internet. Ceci peut influencer la rapidit� de certaines pages.';
$lang['default_permissions'] = 'Permissions par d�faut';
$lang['default_permissions_note'] = 'Ce sont les permissions des utilisateurs qui ne sont pas connect�s ainsi que des nouveaux utilisateurs quand ils s\'inscrivent. Les permissions en <b>gras</b> sont les permissions d\'administration,
                                     il est fortement recommand� de ne mettre aucune de ces permissions par d�faut. Les permissions en <i>italique</i> sont exclusivement utilis�es par les plugins. Vous pourrez changer les permissions individuellement en cliquant sur "G�rer les utilisateurs".';
$lang['plugins'] = 'Plugins';
$lang['no_plugins'] = 'Le dossier des plugins (./plugins/) est vide.';
$lang['cookie_settings'] = 'Options du cookie';
$lang['cookie_domain'] = 'Domaine du cookie';
$lang['cookie_name'] = 'Nom du cookie';
$lang['cookie_path'] = 'Chemin du cookie';
$lang['session_length'] = 'Temps de la session (secondes)';
$lang['email_settings'] = 'Options d\'email';
$lang['admin_email'] = 'Adresse email de l\'administrateur';

// Admin Index
$lang['anonymous'] = 'Anonyme';
$lang['database_size'] = 'Taille de la base de donn�es';
$lang['eqdkp_started'] = 'EQdkp d�marr�';
$lang['ip_address'] = 'Adresse IP';
$lang['items_per_day'] = 'Objets par jour';
$lang['last_update'] = 'Derni�re mise � jour';
$lang['location'] = 'Localisation';
$lang['new_version_notice'] = "EQdkp version %1\$s est <a href=\"http://sourceforge.net/project/showfiles.php?group_id=69529\" target=\"_blank\">disponible au t�l�chargement</a>.";
$lang['number_of_items'] = 'Nombre d\'objets';
$lang['number_of_logs'] = 'Nombre de logs';
$lang['number_of_members'] = 'Nombre de membres (actifs/inactifs)';
$lang['number_of_raids'] = 'Nombre de raids';
$lang['raids_per_day'] = 'Raids par Jour';
$lang['statistics'] = 'Statistiques';
$lang['totals'] = 'Totaux';
$lang['version_update'] = 'Mise � jour de la version';
$lang['who_online'] = 'Qui est en ligne';

// Style Management
$lang['style_settings'] = 'Options de mod�le';
$lang['style_name'] = 'Nom du mod�le';
$lang['template'] = 'Gabarit';
$lang['element'] = 'El�ment';
$lang['background_color'] = 'Couleur de fond';
$lang['fontface1'] = 'Police 1';
$lang['fontface1_note'] = 'Police par d�faut';
$lang['fontface2'] = 'Police 2';
$lang['fontface2_note'] = 'Police des champs "input"';
$lang['fontface3'] = 'Police 3';
$lang['fontface3_note'] = 'Pas utilis� actuellement';
$lang['fontsize1'] = 'Taille de la police 1';
$lang['fontsize1_note'] = 'Petit';
$lang['fontsize2'] = 'Taille de la police 2';
$lang['fontsize2_note'] = 'Moyen';
$lang['fontsize3'] = 'Taille de la police 3';
$lang['fontsize3_note'] = 'Grand';
$lang['fontcolor1'] = 'Couleur de la police 1';
$lang['fontcolor1_note'] = 'Couleur par d�faut';
$lang['fontcolor2'] = 'Couleur de la police 2';
$lang['fontcolor2_note'] = 'Couleur utilis�e hors des tableaux (menus, titres, copyright)';
$lang['fontcolor3'] = 'Couleur de la police 3';
$lang['fontcolor3_note'] = 'Couleur de la police des champs "entr�e"';
$lang['fontcolor_neg'] = 'Couleur de la police des n�gatifs';
$lang['fontcolor_neg_note'] = 'Couleur pour les n�gatifs/mauvais nombres';
$lang['fontcolor_pos'] = 'Couleur de la police des positifs';
$lang['fontcolor_pos_note'] = 'Couleur pour les positifs/bons nombres';
$lang['body_link'] = 'Couleur des liens';
$lang['body_link_style'] = 'Style des liens';
$lang['body_hlink'] = 'Couleur des liens quand on passe dessus';
$lang['body_hlink_style'] = 'Style des liens quand on passe dessus';
$lang['header_link'] = 'Liens d\'en-t�te';
$lang['header_link_style'] = 'Style des liens d\'en-t�te';
$lang['header_hlink'] = 'Liens d\'en-t�te quand on passe dessus';
$lang['header_hlink_style'] = 'Style des liens d\'en-t�te quand on passe dessus';
$lang['tr_color1'] = 'Couleur de la table, Ligne 1';
$lang['tr_color2'] = 'Couleur de la table, Ligne 2';
$lang['th_color1'] = 'Couleur du haut de la table';
$lang['table_border_width'] = 'Epaisseur de la bordure des tableaux';
$lang['table_border_color'] = 'Couleur de la bordure des tableaux';
$lang['table_border_style'] = 'Style de la bordure des tableaux';
$lang['input_color'] = 'Couleur de fond des champs "entr�e"';
$lang['input_border_width'] = 'Largeur de la bordure des champs "entr�e"';
$lang['input_border_color'] = 'Couleur de la bordure des champs "entr�e"';
$lang['input_border_style'] = 'Style de la bordure des champs "entr�e"';
$lang['style_configuration'] = 'Configuration du mod�le';
$lang['style_date_note'] = 'Pour les champs date/temps, la syntaxe utilis�e est identique � la fonction <a href="http://www.php.net/manual/en/function.date.php" target="_blank">date()</a> du PHP.';
$lang['attendees_columns'] = 'Colonnes des participants';
$lang['attendees_columns_note'] = 'Nombre de colonnes utilis�es pour les participants quand on regarde un raid';
$lang['date_notime_long'] = 'Date sans l\'heure (long)';
$lang['date_notime_short'] = 'Date sans l\'heure (court)';
$lang['date_time'] = 'Date avec l\'heure';
$lang['logo_path'] = 'Fichier du logo.';
$lang['logo_path_note'] = 'S�lectionnez une image � partir de /templates/template/images/ ou inserez l\'URL compl�te d\'une image sur internet. Ins�rez l\'ent�te http:// !)';
$lang['logo_path_config'] = 'S�lectionnez un fichier � partir de votre disque dur et t�l�charger le nouveau logo.';

// Errors
$lang['error_invalid_adjustment'] = 'Un ajustement valide n\'a pas �t� fourni.';
$lang['error_invalid_plugin']     = 'Un plugin valide n\' pas �t� fourni.';
$lang['error_invalid_style']      = 'Un style valide n\'a pas �t� fourni.';

// Verbose log entry lines
$lang['new_actions']           = 'Actions d\'administration r�centes';
$lang['vlog_event_added']      = "%1\$s a ajout� l\'�v�nement '%2\$s' pour une valeur de %3\$.2f points.";
$lang['vlog_event_updated']    = "%1\$s a mis � jour l\'�v�nement '%2\$s'.";
$lang['vlog_event_deleted']    = "%1\$s a supprim� l\'�v�nement '%2\$s'.";
$lang['vlog_groupadj_added']   = "%1\$s a ajout� un ajustement de groupe de %2\$.2f points.";
$lang['vlog_groupadj_updated'] = "%1\$s a mis � jour un ajustement de groupe de %2\$.2f points.";
$lang['vlog_groupadj_deleted'] = "%1\$s a supprim� un ajustement de groupe de %2\$.2f points.";
$lang['vlog_history_transfer'] = "%1\$s a transf�r� l\'historique de %2\$s vers %3\$s.";
$lang['vlog_indivadj_added']   = "%1\$s a ajout� un ajustement individuel de %2\$.2f � %3\$d membres.";
$lang['vlog_indivadj_updated'] = "%1\$s a mis � jour un ajustement individuel de %2\$.2f � %3\$s.";
$lang['vlog_indivadj_deleted'] = "%1\$s a supprim� un ajustement individuel de %2\$.2f � %3\$s.";
$lang['vlog_item_added']       = "%1\$s a ajout� un objet '%2\$s' � la charge de %3\$d membres pour %4\$.2f points.";
$lang['vlog_item_updated']     = "%1\$s a mis � jour un objet '%2\$s' � la charge de %3\$d membres.";
$lang['vlog_item_deleted']     = "%1\$s suppression de l\'objet '%2\$s' � la charge de %3\$d membres.";
$lang['vlog_member_added']     = "%1\$s a ajout� le membre %2\$s.";
$lang['vlog_member_updated']   = "%1\$s a mis � jour le membre %2\$s.";
$lang['vlog_member_deleted']   = "%1\$s a supprim� le membre %2\$s.";
$lang['vlog_news_added']       = "%1\$s a ajout� la nouvelle '%2\$s'.";
$lang['vlog_news_updated']     = "%1\$s a mis � jour la nouvelle '%2\$s'.";
$lang['vlog_news_deleted']     = "%1\$s a supprim� la nouvelle '%2\$s'.";
$lang['vlog_raid_added']       = "%1\$s a ajout� un raid sur '%2\$s'.";
$lang['vlog_raid_updated']     = "%1\$s a mis � jour un raid sur '%2\$s'.";
$lang['vlog_raid_deleted']     = "%1\$s a supprim� un raid sur '%2\$s'.";
$lang['vlog_turnin_added']     = "%1\$s a ajout� une restitution de %2\$s � %3\$s pour '%4\$s'.";

// Location messages
$lang['adding_groupadj'] = 'Ajout d\'un ajustement de groupe';
$lang['adding_indivadj'] = 'Ajout d\'un ajustement individuel';
$lang['adding_item'] = 'Ajout d\'un objet';
$lang['adding_news'] = 'Ajout d\'une nouvelle';
$lang['adding_raid'] = 'Ajout d\'un raid';
$lang['adding_turnin'] = 'Ajout d\'une restitution';
$lang['editing_groupadj'] = 'Edition d\'un ajustement de groupe';
$lang['editing_indivadj'] = 'Edition d\'un ajustement individuel';
$lang['editing_item'] = 'Edition d\'un objet';
$lang['editing_news'] = 'Edition d\'une nouvelle';
$lang['editing_raid'] = 'Edition d\'un raid';
$lang['listing_events'] = 'Liste les �v�nements';
$lang['listing_groupadj'] = 'Liste des ajustements de groupes';
$lang['listing_indivadj'] = 'Liste des ajustements individuels';
$lang['listing_itemhist'] = 'Liste de l\'historique des objets';
$lang['listing_itemvals'] = 'Liste des valeurs des objets';
$lang['listing_members'] = 'Liste des membres';
$lang['listing_raids'] = 'Liste des raids';
$lang['managing_config'] = 'G�re la configuration d\'EQdkp';
$lang['managing_members'] = 'G�re les membres';
$lang['managing_plugins'] = 'G�re les plugins';
$lang['managing_styles'] = 'G�re les styles';
$lang['managing_users'] = 'G�re les utilisateurs';
$lang['parsing_log'] = 'Parcours le log';
$lang['viewing_admin_index'] = 'Regarde l\'index de l\'admin';
$lang['viewing_event'] = 'Regarde les �v�nements';
$lang['viewing_item'] = 'Regarde les objets';
$lang['viewing_logs'] = 'Regarde les logs';
$lang['viewing_member'] = 'Regarde les membres';
$lang['viewing_mysql_info'] = 'Regarde les informations MySQL';
$lang['viewing_news'] = 'Regarde les nouvelles';
$lang['viewing_raid'] = 'Regarde les raid';
$lang['viewing_stats'] = 'Regarde les statistiques';
$lang['viewing_summary'] = 'Regarde les r�sum�s';

// Help lines
$lang['b_help'] = 'Texte en gras : [b]texte[/b] (alt+b)';
$lang['i_help'] = 'Texte en italique : [i]texte[/i] (alt+i)';
$lang['u_help'] = 'Texte soulign� : [u]texte[/u] (alt+u)';
$lang['q_help'] = 'Citation : [quote]texte[/quote] (alt+q)';
$lang['c_help'] = 'Texte centr� : [center]texte[/center] (alt+c)';
$lang['p_help'] = 'Ins�rer une image : [img]http://image_url[/img] (alt+p)';
$lang['w_help'] = 'Ins�rer une URL : [url]http://url[/url] ou [url=http://url]URL texte[/url]  (alt+w)';
$lang['it_help'] = 'ins�rer un objet : [item]Judgement Breastplate[/item] (shift+alt+t)';
$lang['ii_help'] = 'Ins�rer l\ic�ne d\'un objet : [itemicon]Judgement Breastplate[/itemicon] (shift+alt+o)';

// Manage Members Menu (yes, MMM)
$lang['add_member'] = 'Ajouter un nouveau membre';
$lang['list_edit_del_member'] = 'Lister, �diter ou supprimer un membre';
$lang['edit_ranks'] = 'Modifier les rangs de membre';
$lang['transfer_history'] = 'Transf�rer l\'historique d\'un membre';

// MySQL info
$lang['mysql'] = 'MySQL';
$lang['mysql_info'] = 'Informations';
$lang['eqdkp_tables'] = 'Tables EQdkp';
$lang['table_name'] = 'Nom de la table';
$lang['rows'] = 'Rang�es';
$lang['table_size'] = 'Taille de la table';
$lang['index_size'] = 'Taille de l\'index';
$lang['num_tables'] = "%d tables";

//Backup
$lang['backup']            = 'Sauvegarde';
$lang['backup_database']   = 'Sauvegarder la base';
$lang['backup_title']      = 'Cr�er une sauvegarde de la base';
$lang['backup_type']       = 'Format de la sauvegarde';
$lang['create_table']      = 'Ajouter l\'option \'CREATE TABLE\' ?';
$lang['skip_nonessential'] = 'Ignorer les �l�ments mineurs ?<br />Les lignes de la table eqdkp_sessions ne seront pas ins�r�es.';
$lang['gzip_content']      = 'Compression GZIP ?<br />Le fichier g�n�r� sera plus petit.';
$lang['backup_no_table_prefix']    = '<strong>ATTENTION:</strong> Votre installation d\'EQdkp n\'a pas de prefixe pour ses tables. Toutes les tables de plugins ne seront pas sauvegard�es.';

// plus
$lang['in_database']  = 'Sauvegard� dans la base';

//Log Users Actions
$lang['action_user_added']     = 'Utilisateur ajout�';
$lang['action_user_deleted']   = 'Utilisateur supprim�';
$lang['action_user_updated']   = 'Utilisateur mis � jour';

$lang['vlog_user_added']     = "%1\$s a ajout� l\'utilisateur %2\$s.";
$lang['vlog_user_updated']   = "%1\$s a mis � jour l\'utilisateur %2\$s.";
$lang['vlog_user_deleted']   = "%1\$s a supprim� l\'utilisateur %2\$s.";

//MultiDKP
$lang['action_multidkp_added']     = "Groupe MultiDKP ajout�";
$lang['action_multidkp_deleted']   = "Groupe MultiDKP supprim�";
$lang['action_multidkp_updated']   = "Groupe MultiDKP mis � jour";
$lang['action_multidkp_header']    = "MultiDKP";

$lang['vlog_multidkp_added']     = "%1\$s a ajout� le groupe MultiDKP %2\$s.";
$lang['vlog_multidkp_updated']   = "%1\$s a mis � jour le groupe MultiDKP %2\$s.";
$lang['vlog_multidkp_deleted']   = "%1\$s a supprim� le groupe MultiDKP %2\$s.";

$lang['default_style_overwrite']   = "Remplace tous les r�glages de mod�le des utilisateurs (tous les utilisateurs utilisent le mod�le par d�faut)";
$lang['class_colors']              = "Couleurs des classes";

#Plugins
$lang['description'] = 'Description';
$lang['manual'] = 'Manuel';
$lang['homepage'] = 'Site internet';
$lang['readme'] = 'Lisez-moi';
$lang['link'] = 'Lien';
$lang['infos'] = 'Infos';

// Plugin Install / Uninstall
$lang['plugin_inst_success']  = 'Succ�s';
$lang['plugin_inst_error']  = 'Erreur';
$lang['plugin_inst_message']  = "Le plugin <i>%1\$s</i> a �t� correctement %2\$s.";
$lang['plugin_inst_installed'] = 'install�';
$lang['plugin_inst_uninstalled'] = 'd�sinstall�';
$lang['plugin_inst_errormsg1'] = "Des erreurs ont �t� d�tect�s durant le processus d\'%1\$s : %2\$s";
$lang['plugin_inst_errormsg2']  = "%1\$s peut ne pas avoir �t� correctement %2\$s.";

$lang['background_image'] = 'Image d\'arri�re plan ( 1000x1000px) [optional]';
$lang['css_file'] = 'Fichier CSS - ignore la plupart des r�glages de couleur sur ce site. [optional]';

$lang['plugin_inst_sql_note'] = 'Une erreur SQL n\'implique pas forc�ment une mauvais installation du plugin. Esssayez le plugin et si des erreurs se produisent, d�sinstallez et installez de nouveau.';

// Plugin Update Warn Class
$lang['puc_perform_intro']          = 'Les plugins suivants n�cessitent une mise � jour de leurs bases. Cliquez sur le lien "r�soudre" afin d\'effectuer les modifications pour chaque plugin.<br/>Les tables suivantes sont p�rim�es :';
$lang['puc_pluginneedupdate']       = "<b>%1\$s</b>: (Requires database updates from %2\$s to %3\$s)";
$lang['puc_solve_dbissues']         = 'r�soudre';
$lang['puc_unknown']                = '[unknown]';
?>
