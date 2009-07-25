<?php
 /*
 * Project:     EQdkp CharManager 1
 * License:     Creative Commons - Attribution-Noncommercial-Share Alike 3.0 Unported
 * Link:		    http://creativecommons.org/licenses/by-nc-sa/3.0/
 * -----------------------------------------------------------------------
 * Began:       2006
 * Date:        $Date: 2009-05-10 20:47:02 +0200 (So, 10 Mai 2009) $
 * -----------------------------------------------------------------------
 * @author      $Author: wallenium $
 * @copyright   2005-2008 Simon (Wallenium) Wallmann
 * @link        http://eqdkp-plus.com
 * @package     charmanager
 * @version     $Rev: 4819 $
 * 
 * $Id: lang_main.php 4819 2009-05-10 18:47:02Z wallenium $
 */

//Main 
$lang['charmanager']          = 'Gestionnaire de personnages';
$lang['uc_manage_chars']			= 'G�rer les personnages';
$lang['uc_credit_name']				= 'EQDKP CharManager';
$lang['uc_enu_profiles']			= 'Profils';
$lang['cm_short_desc']        = 'L\'utilisateur g�re les personnages';
$lang['cm_long_desc']         = 'Avec le plugin de gestion de personnages, l\'utilisateur peut ajouter, g�rer et connecter les personnages par lui-m�me. Il y a des champs d\'informations en plus �galement.';

// Error Messages
$lang['uc_faild_memberadd']   = "Echec de l\'ajout de %1\$s le membre existe avec cet ID %2\$s";
$lang['uc_saved_not']         = 'ERREUR: Les donn�es n\'ont pas pu �tre sauvegard�es. Veuillez essayer de nouveau ou contacter votre administrateur.';
$lang['uc_error_memberinfos']	= 'Impossible d\'obtenir les informations membre du plugin CharManager';
$lang['uc_error_raidinfos']		= 'Impossible d\'obtenir les informations raid du plugin CharManager';
$lang['uc_error_iteminfos']		= 'Impossible d\'obtenir les informations objet du plugin CharManager';
$lang['uc_error_itemraidi']		= 'Impossible d\'obtenir les informations objet/raid du plugin CharManager';
$lang['uc_not_loggedin']			= 'Vous n\'�tes pas connect�';
$lang['uc_not_installed']			= 'Le gestionnaire de personnages n\'est pas install�';
$lang['uc_no_prmissions']			= 'Vous n\'avez pas les permission pour acc�der � cette page. Veuillez contacter votre administrateur';
$lang['uc_php_version']				= "CharManager nec�ssite  PHP %1\$s o� sup�rieur. Votre serveur utilise PHP %2\$s";
$lang['uc_plus_version']			= "CharManager nec�ssite EQDKP-PLUS %1\$s o� sup�rieur. Votre Version install�e est %2\$s";

// Info Boxes
$lang['uc_saved_succ']        = 'Modifications sauvegard�es';
$lang['us_char added']        = 'Le personnage a �t� ajout�';
$lang['us_char_updated']      = 'Le personnage a �t� modifi�';
$lang['uc_info_box']          = 'Informations';
$lang['uc_pic_changed']				= 'Image modifi�e correctement';
$lang['uc_pic_added']					= 'Image ajout�e correctement';

// Date functionality
$lang['uc_changedate']				= 'd/m/Y';

// Armory Menu
$lang['uc_armorylink1']				= 'Armurerie';
$lang['uc_armorylink2']				= 'Talents';
$lang['uc_armorylink3']				= 'r�putation';
$lang['uc_armorylink4']				= 'Accomplissements';
$lang['uc_armorylink5']				= 'statistiques';
$lang['uc_armorylink6']				= 'Guilde';

//User Settings
$lang['uc_charmanager']       = 'Gestion des personnages';
$lang['uc_change_pic']				= 'Modifier une image';
$lang['uc_add_pic']						= 'Ajouter une image';
$lang['uc_add_char']          = 'Ajouter un personnage';
$lang['uc_add_char_plain']		= 'Cr�er un personnage';
$lang['uc_add_char_armory']		= 'Importer';
$lang['uc_save_char']					= 'Sauvegarder un personnage';
$lang['overtake_char']        = 'Appropriation du personnage';
$lang['uc_edit_char']         = 'Modifier un personnage';
$lang['uc_conn_members']			= 'Liaison avec les membres';
$lang['uc_connections']				= 'Liaison des personnages';
$lang['uc_button_cancel']     = 'Annuler';
$lang['uc_button_edit']				= 'Editer';
$lang['uc_tt_n1']							= 'S�lectionner le personnage �<br/> modifier';
$lang['uc_tt_n2']							= 'Lier votre compte � vos personnages<br/>d�j� existants dans le syst�me DKP';
$lang['uc_tt_n3']							= 'Cr�er un nouveau personnage qui<br/>n\'existe pas dans le syst�me DKP';
$lang['uc_prifler_expl']			= 'Les profilers sont affich�s comme des liens web, sans importation !';
$lang['uc_ext_import_sh']			= 'Importer les donn�es';
$lang['uc_connectme']         = 'Sauver';
$lang['uc_updat_armory']			= 'Importer depuis l\'armurerie';
$lang['uc_add_massupdate']		= 'Importer tout';
$lang['uc_need_confirmation']	= '[� confirmer]';

// Member Tasks
$lang['uc_del_warning']				= 'Doit on supprimer le membre ? tout ses points et objets seronts �galement �ffac�s.';
$lang['uc_del_msg_all']				= 'Doit on supprimer tout les personnages ?';
$lang['uc_confirm_msg_all']		= 'Doit on confirmer tout les personnages ?';
$lang['cm_todo_txt']					= "Il reste %1\$s tache d'amdin.";
$lang['cm_todo_head']					= 'Taches d\' admin du charmanager';
$lang['uc_delete_manager']		= 'Gerer les taches admin';
$lang['uc_rewoke_char']				= 'Restaurer le personage';
$lang['uc_delete_char']				= 'Effacer le personage';
$lang['uc_delete_allchar']		= 'Tout effacer';
$lang['uc_confirm_list']			= 'Personnage � confirmer';
$lang['uc_delete_list']				= 'Personnage � effacer';

// Import
$lang['uc_prof_import']				= 'importer';
$lang['uc_import_forw']				= 'continuer';
$lang['uc_imp_succ']					= 'Les donn�es ont �t� import�es correctement.';
$lang['uc_upd_succ']					= 'Les donn�es ont �t� modifi�es correctement.';
$lang['uc_imp_failed']				= 'Une erreur s\'est produite durant l\'importation. Veuillez recommencer.';

// Armory Import
$lang['uc_armory_loc']				= 'Serveur';
$lang['uc_charname']					= 'Nom du personnage';
$lang['uc_servername']				= 'Nom du royaume (p.e. Cho\'gall)';
$lang['uc_charfound']					= "Ce personnage <b>%1\$s</b> est disponible.";
$lang['uc_charfound2']				= "Ce personnage a �t� mis � jour le <b>%1\$s</b>.";
$lang['uc_charfound3']				= 'ATTENTION: Durant la phase d\'importation, toutes les donn�es existantes seront remplac�es !';
$lang['uc_armory_confail']		= 'Pas de connexion avec l\'armurerie. Echec de l\'importation.';
$lang['uc_armory_imported']		= 'import�';
$lang['uc_armory_impfailed']	= '�chou�';
$lang['uc_armory_impduplex']	= 'dupliqu�';
$lang['uc_class_filter']			= 'Membres de la classe';
$lang['uc_class_nofilter']		= 'ne pas filtrer';
$lang['uc_guild_name']				= 'Nom de la guilde';
$lang['uc_level_filter']			= 'Tout les membres avec un niveau �gal ou sup�rieur �';
$lang['uc_imp_novariables']		= 'Vous devez mettre un serveur dans les r�glages.';
$lang['uc_imp_noguildname']		= 'pas de guilde donn�e';
$lang['uc_gimp_header_load']	= 'La guilde est en cours d\'importation, veuillez patienter...';
$lang['uc_gimp_header_fnsh']	= 'Importation de la guilde termin�e';
$lang['uc_gimp_finish_note']	= 'Note: Tous les champs n\'ont pas �t� import�s. Seuls les noms, races, classes et niveaux ont �t� import�s. Pour importer le reste, faites le via l\'armurerie.';
$lang['uc_gimp_infotxt']			= 'Le temps d\'execution du script devrait �tre sup�rieur � 60s et la m�moire utilis�e sup�rieur � 32M. Merci de descendre pour voir si l\'importation est termin�e.';
$lang['uc_startdkp']					= 'd�marrer avec X DKP';
$lang['uc_noprofile_found']		= 'Pas de profil disponible';
$lang['uc_profiles_complete']	= 'Profil mis � jour avec succ�s';
$lang['uc_notyetupdated']			= 'Pas de nouvelles donn�es (perso pas mis � jour)';
$lang['uc_error_with_id']			= 'Erreur avec l\'ID du membre, pass�';

// Edit Profile tabs
$lang['uc_tab_profilers']			= 'Profil';
$lang['uc_tab_Character']			= 'Personnage';
$lang['uc_tab_skills']				= 'Talents';
$lang['uc_tab_raidinfo']			= 'Informations raid';
$lang['uc_tab_raids']					= 'Raids';
$lang['uc_tab_items']					= 'Objets';
$lang['uc_tab_profession']		= 'Professions';
$lang['uc_tab_notes']         = 'Notes';

// Professions
$lang['uc_first_prof']				= 'Premier m�tier';
$lang['uc_second_prof']				= 'Second m�tier';
$lang['uc_prof_skill']				= 'Niveau';
$lang['professionsarray']			= array(
																'alchemy'					=> 'Alchimiste',
																'mining'					=> 'Mineur',
																'engineering'			=> 'Ing�nieur',
																'skinning'				=> 'D�pe�eur',
																'herbalism'				=> 'Herboriste',
																'leatherworking'	=> 'Travailleur du cuir',
																'blacksmithing'		=> 'Forgeron',
																'tailoring'				=> 'Couturier',
																'enchanting' 			=> 'Enchanteur',
																'jewelcrafting'		=> 'Joaillier',
																'inscription'     => 'Calligraphe'
															);
$lang['uc_gender']						= 'Genre';
$lang['genderarray']					= array(
																'M�le'						=> 'Masculin',
																'Femelle'					=> 'F�minin',
															);
$lang['uc_faction']						= 'Faction';
$lang['factionarray']					= array(
																'Horde'						=> 'Horde',
																'Alliance'				=> 'Alliance',
															);

// resistences
$lang['uc_resitence']				  = 'R�sist.';
$lang['uc_res_fire']					= 'Feu';
$lang['uc_res_frost']					= 'Givre';
$lang['uc_res_arcane']				= 'Arcane';
$lang['uc_res_nature']				= 'Nature';
$lang['uc_res_shadow']				= 'Ombre';

// Bars
$lang['uc_bar_health']				= "Sant�";
$lang['uc_bar_energy']				= "Energie";
$lang['uc_bar_mana']					= "Mana";
$lang['uc_bar_rage']					= "Rage";

// Add Picture
$lang['uc_save_pic']					= 'Enregistrer';
$lang['uc_load_pic']					= 'Charger une image';
$lang['uc_allowed_types']			= 'Types d\images autoris�es';
$lang['uc_max_resolution']		= 'R�solution maxi';
$lang['uc_pixel']							= 'pixels';
$lang['uc_not_writable']			= 'Le dossier \'data/\' est prot�g�. Veuillez contacter votre administrateur.';

//Admin
$lang['is_adminmenu_uc']			= 'Gestion de personnage';
$lang['uc_manage']            = 'G�rer';
$lang['uc_add']            		= 'Ajouter';
$lang['uc_connect']						= 'lier les personnages';
$lang['uc_view']							= 'Afficher les profiles';
$lang['uc_edit_all']					= 'Tout �diter';
$lang['uc_config']						= 'Options';
$lang['uc_delete']						= 'Effacer ses propres personnages';
$lang['uc_delmanager']				= 'Gestion des taches';

// About Dialog
$lang['about_header']					= 'Cr�dits';

// Profile
$lang['uc_char_info']					= 'Informations du personnage';
$lang['uc_last_5_raids']			= '5 derniers raids';
$lang['uc_last_5_items']			= '5 derniers objets';
$lang['uc_ext_profile']				= 'Profil externe';
$lang['uc_buffed']						= 'Buffed.de';
$lang['uc_allakhazam']				= 'Allakhazam';
$lang['uc_curse_profiler']		= 'Curse Profiler';
$lang['uc_ctprofiles']				= 'CT Profiles';
$lang['uc_receives']					= 'Professions';
$lang['uc_guild']							= 'Guilde';
$lang['uc_raid_infos'] 				= 'Informations raid';
$lang['uc_talentplaner']			= 'Talent';
$lang['uc_unknown']						= 'Inconnu';
$lang['uc_lastupdate']				= 'Derni�re mise � jour';
$lang['uc_level_out']					= 'Niveau';
$lang['uc_notes']             = 'Notes';

// About dialog
$lang['uc_copyright'] 				= 'Copyright';
$lang['uc_created_devteam']		= 'by WalleniuM';
$lang['uc_url_web']           = 'Web';
$lang['uc_dialog_header']			= 'A propos du CharManager';
$lang['uc_additions']         = 'Soumissions';

// config
$lang['uc_setting_saved_h']   = 'r�glages sauvegard�s';
$lang['uc_setting_saved']			= 'Param�tres sauvegard�s.';
$lang['uc_setting_failed']		= 'Param�tres non sauvegard�s. Veuillez recommencer ou contacter votre administrateur.';
$lang['uc_header_global']			= 'Configuration du gestionnaire de personnage';
$lang['uc_enabl_updatecheck']	= 'V�rifier les mises � jour';
$lang['uc_servername']				= 'Nom du royaume';
$lang['uc_lock_server']				= 'Bloquer le nom du royaume pour les utilisateurs';
$lang['uc_update_all']				= 'Mettre � jour tous les profils';
$lang['uc_bttn_update']				= 'Mise � jour';
$lang['uc_cache_update']			= 'Mise � jour du profil des membres';
$lang['uc_profile_updater']		= 'Chargement des informations en cours. Cela peut prendre plusieurs minutes, patientez...';
$lang['uc_server_loc']				= 'Serveurs';
$lang['uc_profile_ready']			= 'Les profils ont �t� import�s correctement. Vous pouvez <a href="#" onclick="javascript:closeWindow()" >fermer</a> cette fen�tre.';
$lang['uc_last_updated']			= 'Derni�re le';
$lang['uc_never_updated']			= 'Aucune mise � jour';
$lang['uc_armory_link']				= 'Liste des profils : affiche le menu avec le lien vers l\'armurerie';
$lang['uc_no_resi_save']			= 'Ne pas importer les r�sistances';
$lang['uc_lp_hideresis']      = 'Cacher les r�sistances aux utilisateurs dans la liste des profils';
$lang['uc_defaultrank']				= 'Rank des nouveaux personnages';
$lang['uc_defaultrank_none']	= 'aucun';
$lang['uc_reqconfirm']				= 'Les admins doivent confirmer les personnages cr�es par les membres';
$lang['uc_confirm_char']			= 'Confirmer le personnage';
$lang['uc_confirm_allchar']		= 'Confirmer tout le monde';
$lang['uc_limport']						= 'reglage d\'importation';
$lang['uc_import_guild']			= 'Importer tout les membres de la guilde';
$lang['uc_import_guildb']			= 'Importer la guilde';
$lang['uc_import_srvlang']    = 'Language de l\'armurerie';
?>