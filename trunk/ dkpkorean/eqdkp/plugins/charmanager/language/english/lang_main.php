<?php
 /*
 * Project:     EQdkp CharManager 1
 * License:     Creative Commons - Attribution-Noncommercial-Share Alike 3.0 Unported
 * Link:		    http://creativecommons.org/licenses/by-nc-sa/3.0/
 * -----------------------------------------------------------------------
 * Began:       2006
 * Date:        $Date: 2009-02-21 16:52:18 +0100 (Sa, 21 Feb 2009) $
 * -----------------------------------------------------------------------
 * @author      $Author: wallenium $
 * @copyright   2005-2008 Simon (Wallenium) Wallmann
 * @link        http://eqdkp-plus.com
 * @package     charmanager
 * @version     $Rev: 3926 $
 * 
 * $Id: lang_main.php 3926 2009-02-21 15:52:18Z wallenium $
 */

//Main 
$lang['charmanager']          = 'Character Manager';
$lang['uc_manage_chars']			= 'Manage Characters';
$lang['uc_credit_name']				= 'EQDKP CharManager';
$lang['uc_enu_profiles']			= 'Profiles';
$lang['cm_short_desc']        = 'User can manage members';
$lang['cm_long_desc']         = 'With the Charmanager plugin, user can add, manage and connect members by themselves. There are additional profil fields, too.';

// Error Messages
$lang['uc_error_p1']          = 'Failed to add ';
$lang['uc_error_p2']          = ' member exists as ID ';
$lang['uc_error_p3']          = ' ';
$lang['uc_saved_not']         = 'ERROR: The data could not be saved. Please try again or inform an administrator';
$lang['uc_error_memberinfos']	= 'Could not obtain member information of the CharManager Plugin';
$lang['uc_error_raidinfos']		= 'Could not obtain raid information of the CharManager Plugin';
$lang['uc_error_iteminfos']		= 'Could not obtain item information of the CharManager Plugin';
$lang['uc_error_itemraidi']		= 'Could not obtain item/raid information of the CharManager Plugin';
$lang['uc_not_loggedin']			= 'You are not logged in';
$lang['uc_not_installed']			= 'The Character Manager plugin is not installed';
$lang['uc_no_prmissions']			= 'You have no permission for entering this page. Please talk to an administrator.';

// Info Boxes
$lang['uc_managechar']        = 'Choose character(s) you own. You can chose multiple characters by checking more than one selectbox in front of the charnames. You can see only your characters or unassigned characters. <br/><br/>If someone has used your character, please contact an administrator for help.';
$lang['uc_select_char']       = 'Choose the Character you want to edit. If the list is empty, please use the "Connection" Button to add Characters to your Account.';
$lang['uc_saved_succ']        = 'The changes was saved';
$lang['us_char added']        = 'The Character was added';
$lang['us_char_updated']      = 'The Character was updated';
$lang['uc_info_box']          = 'Information';
$lang['uc_pic_changed']				= 'The picture was successfully changed';
$lang['uc_pic_added']					= 'The picture was successfully added';

// Date functionality
$lang['uc_changedate']				= 'm-d-Y';

// Armory Menu
$lang['uc_armorylink1']				= 'armory';
$lang['uc_armorylink2']				= 'talents';
$lang['uc_armorylink3']				= 'guild';

//User Settings
$lang['uc_charmanager']       = 'Character Management';
$lang['uc_change_pic']				= 'Change Picture';
$lang['uc_add_pic']						= 'Add Picture';
$lang['uc_add_char']          = 'Add Character';
$lang['uc_save_char']					= 'Save Character';
$lang['overtake_char']        = 'Take this char as yours';
$lang['uc_edit_char']         = 'Edit selected Character';
$lang['uc_conn_members']			= 'Connected Charakters';
$lang['uc_connections']				= 'Char connections';
$lang['uc_button_cancel']     = 'Cancel';
$lang['uc_button_edit']				= 'Edit';
$lang['uc_tt_n1']							= 'Choose the character you want<br/> to edit';
$lang['uc_tt_n2']							= 'Connect your useraccount to your<br/>characters which already exists in<br/>the DKP-System';
$lang['uc_tt_n3']							= 'Create a new character that<br/>doesnt exist in the DKP-System';
$lang['uc_prifler_expl']			= 'The Profilers will be shown as WebLinks, ther\'ll not be any import!';
$lang['uc_ext_import']				= 'Import Data from external sources';
$lang['uc_ext_import_sh']			= 'Import Data';

// Import
$lang['uc_prof_import']				= 'import';
$lang['uc_import_forw']				= 'continue';
$lang['uc_imp_succ']					= 'The data was successfully imported';
$lang['uc_upd_succ']					= 'The Data was successfully updated';
$lang['uc_imp_failed']				= 'An error contained during the import process. Please try again.';

// Armory Import
$lang['uc_armory_loc']				= 'Server Location';
$lang['uc_charname']					= 'Charaktername';
$lang['uc_servername']				= 'Name of the Gameserver (p.e. Mal\'Ganis)';
$lang['uc_charfound']					= "The Charakter  <b>%1\$s</b> is available on Armory.";
$lang['uc_charfound2']				= "This Charakter Profile was last updated on <b>%1\$s</b>.";
$lang['uc_charfound3']				= 'WARNING: During the import process all existing data will be overwritten!';
$lang['uc_armory_confail']		= 'No connection to Armory. Data could not be submitted.';

// Edit Profile tabs
$lang['uc_tab_profilers']			= 'Profile';
$lang['uc_tab_Character']			= 'Character';
$lang['uc_tab_skills']				= 'Skills';
$lang['uc_tab_import']				= 'Import';
$lang['uc_tab_raidinfo']			= 'Raid Info';
$lang['uc_tab_raids']					= 'Raids';
$lang['uc_tab_items']					= 'Items';
$lang['uc_tab_profession']		= 'Professions';
$lang['uc_tab_notes']         = 'Notes';

// Arrays
$lang['uc_first_prof']				= 'First Profession';
$lang['uc_second_prof']				= 'Second Profession';
$lang['uc_prof_skill']				= 'Skill';
$lang['professionsarray']			= array(
																'Alchemy'					=> 'Alchemy',
																'Mining'					=> 'Mining',
																'Engineering'			=> 'Engineering',
																'Skinning'				=> 'Skinning',
																'Herbalism'				=> 'Herbalism',
																'Leatherworking'	=> 'Leatherworking',
																'Blacksmithing'		=> 'Blacksmithing',
																'Tailoring'				=> 'Tailoring',
																'Enchanting' 			=> 'Enchanting',
																'Jewelcrafting'		=> 'Jewelcrafting',
																'Inscription'     => 'Inscription'
															);
$lang['uc_gender']						= 'Gender';
$lang['genderarray']					= array(
																'Male'						=> 'Male',
																'Female'					=> 'Female',
															);
$lang['uc_faction']						= 'Faction';
$lang['factionarray']					= array(
																'Horde'						=> 'Horde',
																'Alliance'				=> 'Alliance',
															);

// resistences
$lang['uc_resitence']				  = 'Resitence';
$lang['uc_res_fire']					= 'Fire';
$lang['uc_res_frost']					= 'Frost';
$lang['uc_res_arcane']				= 'Arcane';
$lang['uc_res_nature']				= 'Nature';
$lang['uc_res_shadow']				= 'Shadow';

// Bars
$lang['uc_bar_health']				= "Health";
$lang['uc_bar_energy']				= "Energy";
$lang['uc_bar_mana']					= "Mana";
$lang['uc_bar_rage']					= "Rage";

// Add Picture
$lang['uc_save_pic']					= 'Save';
$lang['uc_load_pic']					= 'Load Picture';
$lang['uc_allowed_types']			= 'Allowed picture types';
$lang['uc_max_resolution']		= 'max. Resolution';
$lang['uc_pixel']							= 'pixels';
$lang['uc_not_writable']			= 'The folder \'data/\' is not writable. Please inform an administrator.';

//Admin
$lang['is_adminmenu_uc']			= 'Character Manager';
$lang['uc_manage']            = 'Manage';
$lang['uc_add']            		= 'Add';
$lang['uc_connect']						= 'connect characters';
$lang['uc_view']							= 'View Profiles';
$lang['uc_edit_all']					= 'Edit all';
$lang['uc_config']						= 'Settings';

// About Dialog
$lang['about_header']					= 'Credits';

// AJAX trans
$lang['uc_ajax_loading']			= 'Loading...';

// Profile
$lang['uc_char_info']					= 'Character Information';
$lang['uc_last_5_raids']			= 'Last 5 Raids';
$lang['uc_last_5_items']			= 'Last 5 Items';
$lang['uc_ext_profile']				= 'External Profile';
$lang['uc_buffed']						= 'Buffed.de';
$lang['uc_allakhazam']				= 'Allakhazam';
$lang['uc_curse_profiler']		= 'Curse Profiler';
$lang['uc_ctprofiles']				= 'CT Profiles';
$lang['uc_receives']					= 'Professions';
$lang['uc_guild']							= 'Guild';
$lang['uc_raid_infos'] 				= 'Raid Information';
$lang['uc_talentplaner']			= 'Talentplaner';
$lang['uc_unknown']						= 'Unknown';
$lang['uc_lastupdate']				= 'Last Profile Update';
$lang['uc_level_out']					= 'Level';
$lang['uc_notes']             = 'Notes';

// About dialog
$lang['uc_copyright'] 				= 'Copyright';
$lang['uc_created_devteam']		= 'by WalleniuM';
$lang['uc_url_web']           = 'Web';
$lang['uc_dialog_header']			= 'About CharManager';
$lang['uc_additions']         = 'Submissions';

// config
$lang['uc_info_box']					= 'Information';
$lang['uc_setting_saved']			= 'Settings successfully saved';
$lang['uc_setting_failed']		= 'Settings not saved. Please try again or contact an administrator';
$lang['uc_header_global']			= 'Charmanager Settings';
$lang['uc_enabl_updatecheck']	= 'Enable Updatecheck';
$lang['uc_servername']				= 'Servername';
$lang['uc_lock_server']				= 'Freeze Servername for Users (they cannot change it)';
$lang['uc_update_all']				= 'Update all Profile data from Profiler (p.e. Armory)';
$lang['uc_bttn_update']				= 'Update';
$lang['uc_cache_update']			= 'Update member profiles';
$lang['uc_profile_updater']		= 'Loading profile information. This could take several minutes. Please wait......';
$lang['uc_server_loc']				= 'Server Location';
$lang['uc_profile_ready']			= 'The Profiles ware successfully imported. You can <a href="#" onclick="javascript:closeWindow()" >close</a> this window.';
$lang['uc_last_updated']			= 'Last Updated';
$lang['uc_never_updated']			= 'Never Updated';
$lang['uc_noprofile_found']		= 'no Profile Data exists';
$lang['uc_profiles_complete']	= 'Profiles successfully updated';
$lang['uc_notyetupdated']			= 'Charakter waiting for Profiler update (inactive)';
$lang['uc_armory_link']				= 'Profile list: show menu with links to armory';
$lang['uc_no_wow']						= 'Hide World of Warcraft Fields';
$lang['uc_no_resi_save']			= 'Do not import resistences';
$lang['uc_lp_hideresis']      = 'Hide User Resistences in Profile List';

$lang['talents'] = array(
'Paladin'       => array('Holy','Protection','Retribution'),
'Rogue'         => array('Assassination','Combat','Subtlety'),
'Warrior'       => array('Arms','Fury','Protection'),
'Hunter'        => array('Beast Mastery','Marksmanship','Survival'),
'Priest'        => array('Discipline','Holy','Shadow'),
'Warlock'       => array('Affliction','Demonology','Destruction'),
'Druid'         => array('Balance','Feral Combat','Restoration'),
'Mage'          => array('Arcane','Fire','Frost'),
'Shaman'        => array('Elemental','Enhancement','Restoration'),
'Death Knight'  => array('Blood','Frost','Unholy')
);

$lang['uc_hybrid']									= "Hybrid";
?>
