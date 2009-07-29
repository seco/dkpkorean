<?php
 /*
 * Project:     EQdkp-Plus
 * License:     Creative Commons - Attribution-Noncommercial-Share Alike 3.0 Unported
 * Link:		http://creativecommons.org/licenses/by-nc-sa/3.0/
 * -----------------------------------------------------------------------
 * Began:       2006
 * Date:        $Date:  $
 * -----------------------------------------------------------------------
 * @author      $Author:  $
 * @copyright   2006-2008 Corgan - Stefan Knaak | Wallenium & the EQdkp-Plus Developer Team
 * @link        http://eqdkp-plus.com
 * @package     eqdkp-plus
 * @version     $Rev:  $
 * 
 * $Id:  $
 */

// Do not remove. Security Option!
if ( !defined('EQDKP_INC') ){
    header('HTTP/1.0 404 Not Found');exit;
}

//---- Main ----
$plang['pluskernel']          	= 'PLUS ������������';
$plang['pk_adminmenu']         	= 'PLUS ������������';
$plang['pk_settings']						= '���������';
$plang['pk_date_settings']			= '����.�����.���';

//---- Javascript stuff ----
$plang['pk_plus_about']					= '� EQDKP PLUS';
$plang['updates']								= '�������� ����������';
$plang['loading']								= '��������...';
$plang['pk_config_header']			= 'EQDKP PLUS ���������';
$plang['pk_close_jswin1']      	= '��������';
$plang['pk_close_jswin2']     	= '������ ���� ����� ��������� �����!';
$plang['pk_help_header']				= '������';

//---- Updater Stuff ----
$plang['pk_alt_attention']			= 'Attention';
$plang['pk_alt_ok']							= 'Everything OK!';
$plang['pk_updates_avail']			= '�������� ����������';
$plang['pk_updates_navail']			= '��� ��������� ����������';
$plang['pk_no_updates']					= '���� ������ �������� ����� �����. ����������� ����� ��������� ������.';
$plang['pk_act_version']				= '����� ������';
$plang['pk_inst_version']				= '�����������';
$plang['pk_changelog']					= 'Changelog';
$plang['pk_download']						= '�������';
$plang['pk_upd_information']		= '����������';
$plang['pk_enabled']						= '������������';
$plang['pk_disabled']						= '��������������';
$plang['pk_auto_updates1']			= 'The automatic update warning is';
$plang['pk_auto_updates2']			= 'If you disabled this setting, please recheck regulary for updates to prevent hacks and stay up to date..';
$plang['pk_module_name']				= '��� ������';
$plang['pk_plugin_level']				= '�������';
$plang['pk_release_date']				= 'Release';
$plang['pk_alt_error']					= '������';
$plang['pk_no_conn_header']			= '������ ����������';
$plang['pk_no_server_conn']			= '��������� ������ ��� ������� ���������� � �������� ����������, ��� ���� �� ��������� ���������� �����������
 ��� ������ ���� ������� ��������� � ���������� ����. ����������, ��������  eqdkp-plugin-forum , ����� ���������, ��� � ��� ��������� ������.';


$plang['pk_reset_warning']			= 'Reset Warning';

//---- Update Levels ----
$plang['pk_level_other']				= '������';
$updatelevel = array (
	'Bugfix'										=> 'Bugfix',
	'Feature Release'						=> '������� Release',
	'Security Update'						=> '���������� ������������',
	'New version'								=> '����� ������',
	'Release Candidate'					=> 'Release ��������',
	'Public Beta'								=> '��������� Beta',
	'Closed Beta'								=> '�������� Beta',
	'Alpha'											=> 'Alpha',
);

//---- About ----
$plang['pk_version']						= '������';
$plang['pk_prodcutname']				= '�������';
$plang['pk_modification']				= '���';
$plang['pk_tname']							= '������';
$plang['pk_developer']					= '�����������';
$plang['pk_plugin']							= '������';
$plang['pk_weblink']						= '���-������';
$plang['pk_phpstring']					= 'PHP ������';
$plang['pk_phpvalue']						= '��������';
$plang['pk_donation']						= '�������������';
$plang['pk_job']								= '������';
$plang['pk_sitename']						= '����';
$plang['pk_dona_name']					= '���';
$plang['pk_betateam1']					= '������� ����-�������� (��������)';
$plang['pk_betateam2']					= '��������������� �������';
$plang['pk_created by']					= '�������';
$plang['web_url']								= '���-��������';
$plang['personal_url']					= '�������';
$plang['pk_credits']						= '������������';
$plang['pk_sponsors']						= '��������';
$plang['pk_plugins']						= '�������';
$plang['pk_modifications']			= '����';
$plang['pk_themes']							= '�����';
$plang['pk_additions']					= '���������� ����';
$plang['pk_tab_stuff']					= 'EQDKP �������';
$plang['pk_tab_help']						= '������';
$plang['pk_tab_tech']						= '����������';

//---- Settings ----
$plang['pk_save']								= '���������';
$plang['pk_save_title']					= '';
$plang['pk_succ_saved']					= '��������� ���� ������� ���������';
 // Tabs
$plang['pk_tab_global']					= '���������';
$plang['pk_tab_multidkp']				= 'multiDKP';
$plang['pk_tab_links']					= '������';
$plang['pk_tab_bosscount']			= 'BossCounter';
$plang['pk_tab_listmemb']				= '������ ����������';
$plang['pk_tab_itemstats']			= '���������� ���������';
// Global
$plang['pk_set_QuickDKP']				= '�������� �������� DKP';
$plang['pk_set_Bossloot']				= '�������� ������ � ������ ?';
$plang['pk_set_ClassColor']			= 'Colored ClassClassnames';
$plang['pk_set_Updatecheck']		= '�������� ����-����������';
$plang['pk_window_time1']				= '����� ������� ����';
$plang['pk_window_time2']				= '������';
// MultiDKP
$plang['pk_set_multidkp']				= '�������� MultiDKP';
// Listmembers
$plang['pk_set_leaderboard']		= '���������� Leaderboard';
$plang['pk_set_lb_solo']				= '���������� Leaderboard per account';
$plang['pk_set_rank']						= '���������� ����';
$plang['pk_set_rank_icon']			= '���������� ������ �����';
$plang['pk_set_level']					= '���������� �������';
$plang['pk_set_lastloot']				= '���������� ��������� ������';
$plang['pk_set_lastraid']				= '���������� ��������� ����';
$plang['pk_set_attendance30']		= '���������� ���� Attendance 30 ����';
$plang['pk_set_attendance60']		= '���������� ���� Attendance 60 ����';
$plang['pk_set_attendance90']		= '���������� ���� Attendance 90 ����';
$plang['pk_set_attendanceAll']	= '���������� ���� Attendance Lifetime';
// Links
$plang['pk_set_links']					= '������������ Links';
$plang['pk_set_linkurl']				= 'Link URL';
$plang['pk_set_linkname']				= 'Link ��������';
$plang['pk_set_newwindow']			= '��������� � ����� ����?';
// BossCounter
$plang['pk_set_bosscounter']		= '�������� Bosscounter';
//Itemstats
$plang['pk_set_itemstats']			= '�������� ���������� ���������';
$plang['pk_is_language']				= '���� ���������� ���������';
$plang['pk_german']							=	'��������';
$plang['pk_english']						= '����������';
$plang['pk_french']							= '�����������';
$plang['pk_set_icon_ext']				= '';
$plang['pk_set_icon_loc']				= '';
$plang['pk_set_en_de']					= '������� ��������� � ����������� �� ��������';
$plang['pk_set_de_en']					= '������� ��������� � ��������� �� ����������';

################
# new sort
###############

//MultiDKP
//

$plang['pk_set_multi_Tooltip']						= '���������� DKP �����';
$plang['pk_set_multi_smartTooltip']			  = '�������� �����';

//Help
$plang['pk_help_colorclassnames']				  = "If activated, the players will be shown with the WoW colors of their class and their class icon.";
$plang['pk_help_quickdkp']								= "Shows the logged-in user the points off all members that are assigned to him above the menu.";
$plang['pk_help_boosloot']								= "���� ������������, you can click the boss names in the ���� notes and the bosscounter to have a detailed overview of the dropped items. If inactive, it will be linked to Blasc.de (Only activate if you enter a ���� for each single boss)";
$plang['pk_help_autowarning']             = "Warns the administrator when he logs in, if updates are available.";
$plang['pk_help_warningtime']             = "How often should the warning appear?";
$plang['pk_help_multidkp']								= "MultiDKP allows the management and overview of seperate accounts. Activates the management and overview of the MultiDKP accounts.";
$plang['pk_help_dkptooltip']							= "If activated, a tooltip with detailed information about the calculation of the points will be shown, when the mouse hovers over the different points.";
$plang['pk_help_smarttooltip']						= "Shortened overview of the tooltips (activate if you got more than three events per account)";
$plang['pk_help_links']                   = "In this menu you are able to define different links, which will be displayed in the main menu.";
$plang['pk_help_bosscounter']             = "If activated, a table will be displayed below the main menu with the bosskills. The administration is being managed by the plugin Bossprogress";
$plang['pk_help_lm_leaderboard']					= "If activated, a leaderboard will be displayed above the scoretable. A leaderboard is a table, where the dkp of each class is displayed sorted in decending order.";
$plang['pk_help_lm_rank']                 = "An extra column is being displayed, which displays the rank of the member.";
$plang['pk_help_lm_rankicon']             = "Instead of the rank name, an icon is being displayed. Which items are available you can check in the folder \images\rank";
$plang['pk_help_lm_level']								= "An additional column is being displayed, which displays the level of the member. ";
$plang['pk_help_lm_lastloot']             = "An extra colums is being displayed, showing the date a member received his latest item.";
$plang['pk_help_lm_lastraid']             = "An extra column is being displayed, showing the date of the latest ���� a member has been participated in.";
$plang['pk_help_lm_atten30']							= "An extra column is being displayed, showing a members participation in ���� during the last 30 days (in percent).";
$plang['pk_help_lm_atten60']							= "An extra column is being displayed, showing a members participation in ���� during the last 60 days (in percent). ";
$plang['pk_help_lm_atten90']							= "An extra column is being displayed, showing a members participation in ���� during the last 90 days (in percent). ";
$plang['pk_help_lm_attenall']             = "An extra column is being displayed, showing a members overall ���� participation (in percent).";
$plang['pk_help_itemstats_on']						= "Itemstats is requesting information about items entered in EQDKP in the WOW databases (Blasc, Allahkazm, Thottbot). These will be displayed in the color of the items quality including the known WOW tooltip. When active, items will be shown with a mouseover tooltip, similar to WOW.";
$plang['pk_help_itemstats_search']				= "Which database should Itemstats use first to lookup information? Blasc or Allakhazam?";
$plang['pk_help_itemstats_icon_ext']			= "Filename extension of the pictures to be shown. Usually .png or .jpg.";
$plang['pk_help_itemstats_icon_url']      = "Please enter the URL where you Itemstats pictures are being located. German: http://www.buffed.de/images/wow/32/ in 32x32 or http://www.buffed.de/images/wow/64/ in 64x64 pixels.English at Allakzam: http://www.buffed.de/images/wow/32/";
$plang['pk_help_itemstats_translate_deeng']		= "If active, information of the tooltips will be requested in german, even when the item is being entered in english.";
$plang['pk_help_itemstats_translate_engde']		= "If active, information of the tooltips will be requested in English, even if the item is being entered in german.";

$plang['pk_set_leaderboard_2row']					= 'Leaderboard in 2 lines';
$plang['pk_help_leaderboard_2row']        = 'If active, the Leaderboard will be displayed in two lines with 4 or 5 classes each.';

$plang['pk_set_leaderboard_limit']        = 'limitation of the display';
$plang['pk_help_leaderboard_limit']				= 'If a numeric number is being entered, the Leaderboard will be restricted to the entered number of members. The number 0 represents no restrictions.';

$plang['pk_set_leaderboard_zero']         = 'Hide Player with zeor DKP';
$plang['pk_help_leaderboard_zero']        = 'If activated, Players with zero DKp doesnt show in the leaderboard.';


$plang['pk_set_newsloot_limit']						= 'newsloot limit';
$plang['pk_help_newsloot_limit']          = 'How many items should be displayed in the news? This restricts the display of items, which will be displeyed in the news. The number 0 represents no restrictions.';

$plang['pk_set_itemstats_debug']          = 'debug Modus';
$plang['pk_help_itemstats_debug']					= 'If activated, Itemstats will log all transactions to /itemstats/includes_de/debug.txt. This file has to be writable, CHMOD 777 !!!';

$plang['pk_set_showclasscolumn']          = 'show classes column';
$plang['pk_help_showclasscolumn']					= 'If activated, an extra column is being displayed showing the class of the player.' ;

$plang['pk_set_show_skill']								= 'show skill column';
$plang['pk_help_show_skill']              = 'If activated, an extra column is being displayed showing the skill of the player.';

$plang['pk_set_show_arkan_resi']          = 'show arcan resistance column';
$plang['pk_help_show_arkan_resi']					= 'If activated, an extra column is being displayed showing the arcane resistance of the player.';

$plang['pk_set_show_fire_resi']						= 'show fire resistance column';
$plang['pk_help_show_fire_resi']          = 'If activated, an extra column is being displayed showing the fire resistance of the player.';

$plang['pk_set_show_nature_resi']					= 'show nature resistance column';
$plang['pk_help_show_nature_resi']        = 'If activated, an extra column is being displayed showing the nature resistance of the player.';

$plang['pk_set_show_ice_resi']            = 'show ice resistance column';
$plang['pk_help_show_ice_resi']						= 'If activated, an extra column is being displayed showing the frost resistance of the player.';

$plang['pk_set_show_shadow_resi']					= 'show shadow resistance column';
$plang['pk_help_show_shadow_resi']        = 'If activated, an extra column is being displayed showing the shadow resistance of the player.';

$plang['pk_set_show_profils']							= 'show profile link column';
$plang['pk_help_show_profils']            = 'If activated, an extra column is being displayed showing the links to the profile.';

$plang['pk_set_servername']               = '�������� �������';
$plang['pk_help_servername']              = '������� ���� �������� ������� �����.';

$plang['pk_set_server_region']			  = '������';
$plang['pk_help_server_region']			  = '������������ ��� ����������� ������.';


$plang['pk_help_default_multi']           = 'Choose the default DKP Acc for the leaderboard.';
$plang['pk_set_default_multi']            = '���������� default for leaderboard';

$plang['pk_set_round_activate']           = '����� DKP.';
$plang['pk_help_round_activate']          = 'If activated, DKP Point displayed rounded. 125.00 = 125DKP.';

$plang['pk_set_round_precision']          = 'Decimal place to round.';
$plang['pk_help_round_precision']         = 'Set the Decimal place to round the DKP Defualt=0';

$plang['pk_is_set_prio']                  = 'Priority of Itemdatabase';
$plang['pk_is_help_prio']                 = 'Set the query order of item databases.';

$plang['pk_is_set_alla_lang']	            = 'Language of Itemnames on Allakhazam.';
$plang['pk_is_help_alla_lang']	          = 'Which language should the requested items be?';

$plang['pk_is_set_lang']		              = 'Standard language of Item ID\'s.';
$plang['pk_is_help_lang']		              = 'Standard language of Item IDs. Example : [item]17182[/item] will choose this language';

$plang['pk_is_set_autosearch']            = 'Immediate Search';
$plang['pk_is_help_autosearch']           = 'Activated: If the item is not in the cache, search for the item information automatically. Not activated: Item information is only fetch on click on the item information.';

$plang['pk_is_set_integration_mode']      = 'Integration Modus';
$plang['pk_is_help_integration_mode']     = 'Normal: scanning text and setting tooltip in html code. Script: scanning text and set <script> tags.';

$plang['pk_is_set_tooltip_js']            = 'Look of Tooltips';
$plang['pk_is_help_tooltip_js']           = 'Overlib: The normal Tooltip. Light: Light version, faster loading times.';

$plang['pk_is_set_patch_cache']           = 'Cache Path';
$plang['pk_is_help_patch_cache']          = 'Path to the user item cache, starting from /itemstats/. Default=./xml_cache/';

$plang['pk_is_set_patch_sockets']         = 'Path of Socketpictures';
$plang['pk_is_help_patch_sockets']        = 'Path to the picture files of the socket items.';

$plang['pk_set_dkp_info']			  = '�� ���������� DKP ���������� � ������� ����.';
$plang['pk_help_dkp_info']			  = 'If activated "DKP Info" will be hidden from the main menu.';

$plang['pk_set_debug']			= '�������� Eqdkp Debug Modus';
$plang['pk_set_debug_type']		= '���';
$plang['pk_set_debug_type0']	= 'Debug off (Debug=0)';
$plang['pk_set_debug_type1']	= 'Debug on simple (Debug=1)';
$plang['pk_set_debug_type2']	= 'Debug on with SQL Queries (Debug=2)';
$plang['pk_set_debug_type3']	= 'Debug on extended (Debug=3)';
$plang['pk_help_debug']			= '���� ������������, Eqdkp Plus will be running in debug mode, showing additional informations and error messages. Deaktivate if plugins abort with SQL error messages! 1=Rendering time, Query count, 2=SQL outputs, 3=Enhanced error messages.';

#RSS News
$plang['pk_set_Show_rss']			= '�������������� RSS �������';
$plang['pk_help_Show_rss']			= 'If activated, Eqdkp Plus will be show Game RSS News.';

$plang['pk_set_Show_rss_style']		= 'game-news positioning';
$plang['pk_help_Show_rss_style']	= 'RSS-Game News positioning. Top horizontal, in the menu vertical or both?';

$plang['pk_set_Show_rss_lang']		= 'RSS-������� ���� �� ���������';
$plang['pk_help_Show_rss_lang']		= 'Get the RSS-News in wich language? (atm only german). English news available beginning 2008.';

$plang['pk_set_Show_rss_lang_de']	= '��������';
$plang['pk_set_Show_rss_lang_eng']	= '����������';


$plang['pk_set_Show_rss_style_both'] = '���' ;
$plang['pk_set_Show_rss_style_v']	 = '������������ ����' ;
$plang['pk_set_Show_rss_style_h']	 = '�� �����������' ;

$plang['pk_set_Show_rss_count']		= '������� ��� (0 or "" for all)';
$plang['pk_help_Show_rss_count']	= 'Wieviele News sollen angezeigt werden?';

$plang['pk_set_itemhistory_dia']	= 'Dont show diagrams'; # Ja negierte Abfrage
$plang['pk_help_itemhistory_dia']	= 'If activated, Eqdkp Plus show sseveral diagramm.';


#Bridge
$plang['pk_set_bridge_help']				= 'On This Tab you can tune up the settings to let an Content Management System (CMS) interact with Eqdkp Plus.
											   If you choose one of the Systems in the Drop Down Field , Registered Members of your Forum/CMS will be able to log in into Eqdkp Plus with the same credentials used in Forum/CMS.
											   The Access is only allowed for one Group, that Means that you must create a new group in your CMS/Forum which all Members belong who will be accessing Eqdkp.';

$plang['pk_set_bridge_activate']			= '������������ ���������� � CMS';
$plang['pk_help_bridge_activate']			= 'When bridging is activated, Users of the Forum or CMS will be able to Log On in Eqdkp Plus with the same credentials as used in CMS/Forum';

$plang['pk_set_bridge_dectivate_eq_reg']	= '�������������� ����������� � Eqdkp Plus';
$plang['pk_help_bridge_dectivate_eq_reg']	= '����� �������������� ����� ��������� �� ����� ���������������� � Eqdkp Plus. ����������� ����� ������������� ������ ���� ������� � CMS/�����';

$plang['pk_set_bridge_cms']					= '��������� CMS';
$plang['pk_help_bridge_cms']				= 'Which CMS shall be bridged ';

$plang['pk_set_bridge_acess']				= 'Is the CMS/Forum on another Database than Eqdkp ?';
$plang['pk_help_bridge_acess']				= '���� �� ����������� CMS/Forum on another Database activate this and fill the Fields below';

$plang['pk_set_bridge_host']				= '����';
$plang['pk_help_bridge_host']				= '�������� ����� ��� IP-������ �� ������� ����������� ���� ������';

$plang['pk_set_bridge_username']			= '��� ������������ ���� ������';
$plang['pk_help_bridge_username']			= '��� ������������, ������������ ��� ����������� � ���� ������';

$plang['pk_set_bridge_password']			= '������ ���� ������';
$plang['pk_help_bridge_password']			= '������ ������������ ��� ����������';

$plang['pk_set_bridge_database']			= '�������� ���� ������';
$plang['pk_help_bridge_database']			= '�������� ���� ������, ��� CMS ������ ���������';

$plang['pk_set_bridge_prefix']				= 'Tableprefix of your CMS Installation';
$plang['pk_help_bridge_prefix']				= 'Give your Prefix of your CMS . e.g.. phpbb_ or wcf1_';

$plang['pk_set_bridge_group']				= 'ID ������ ��� CMS ������';
$plang['pk_help_bridge_group']				= '������� ����� ID ��� ������ � CMS, ������� ������������� ������ � Eqdkp.';


$plang['pk_set_bridge_inline']				= '���������� ������ ������ � EQDKP - �������� BETA !';
$plang['pk_help_bridge_inline']				= '���� �� ������� ����� URL, ����� �������������� ������ ����� ����� � ����, ������� ����� ��������� �� ��������� �������� � �������� Eqdkp. ��� ���������� � ���������� Iframe. Das EQDKP Plus ist aber nicht verantworltich f�r das Aussehen bzw. das Verhalten der eingebundenen Seite innerhalb eines Iframs!';

$plang['pk_set_bridge_inline_url']			= 'URL �� ��� �����';
$plang['pk_help_bridge_inline_url']			= 'URL �� ��� �����, � �������� ������������� EQDKP';

$plang['pk_set_link_type_header']			= '��� �������� ������ �����������';
$plang['pk_set_link_type_help']				= 'Link im selben Browserfenster, in einem neuen Brwoserfenster oder innerhalb des Eqdkps in einem Iframe �ffnen?';
$plang['pk_set_link_type_iframe_help']		= '��������� �������� ����� �������� � �������� Eqdkp. ��� ���������� � ���������� Iframe. Das EQDKP Plus ist aber nicht verantworltich f�r das Aussehen bzw. das Verhalten der eingebundenen Seite innerhalb eines Iframs!';
$plang['pk_set_link_type_self']				= '�����';
$plang['pk_set_link_type_link']				= '����� ����';
$plang['pk_set_link_type_iframe']			= '��������';

#recruitment
$plang['pk_set_recruitment_tab']			= '����������';
$plang['pk_set_recruitment_header']			= '���������� - Are you looking for new Members ?';
$plang['pk_set_recruitment']				= '�������������� ����������';
$plang['pk_help_recruitment']				= '���� �������, �� ���� � ���������� �������� � ������������� ����� ������� �� �����, �� ���� � ���������.';
$plang['pk_recruitment_count']				= '����';

$plang['pk_set_recruitment_contact_type']	= 'Linkurl';
$plang['pk_help_recruitment_contact_type']	= 'If no URL is given, it will link to the contact email.';
$plang['ps_recruitment_spec']				= '�������������';

$plang['pk_set_comments_disable']			= '�������������� �����������';
$plang['pk_hel_pcomments_disable']			= '�������������� ����������� �� ���� ���������';

#Contact
$plang['pk_contact']						= '���������� ����������';
$plang['pk_contact_name']					= '���';
$plang['pk_contact_email']					= 'Email';
$plang['pk_contact_website']				= '���-��������';
$plang['pk_contact_irc']					= 'IRC �����';
$plang['pk_contact_admin_messenger']		= '�������� ������� ������ (Skype, ICQ)';
$plang['pk_contact_custominfos']			= '�������������� ����������';
$plang['pk_contact_owner']					= '���������� � ���������:';

#Next_raids
$plang['pk_set_nextraids_deactive']			= '�� ���������� ��������� �����';
$plang['pk_help_nextraids_deactive']		= '���� �������, ��������� ����� �� ����� �������� � ����';

$plang['pk_set_nextraids_limit']			= '����� ������ ��������� ������';
$plang['pk_help_nextraids_limit']			= '';

$plang['pk_set_lastitems_deactive']			= '�� ���������� ��������� ��������';
$plang['pk_help_lastitems_deactive']		= '���� �������, ��������� �������� �� ����� �������� � ����';

$plang['pk_set_lastitems_limit']			= '����� ������ ��������� ���������';
$plang['pk_help_lastitems_limit']			= '';

$plang['pk_is_help']						= '<b>��������: ��������� � ������ ���������� ��������� � Eqdkp Plus 0.5!</b><br><br>
											  Wenn ihr von Eqdp Plus 0.4 auf 0.5 aktualisiert oder die Such-Priorit�t ge�ndert habt, m�sst ihr euren Itemcache refreshen!!<br>
											  Empfohlene Priorit�t ist 1.Armory 2. WoWHead. oder 1. Buffed und 2. Allakhazam<br>
											  Eine Mischung aus Armory/WoWHead und Buffed/Allakhazam ist nicht m�glich, da die Tooltips und Icons nicht kompatibel sind!<br>
											  Zum aktualisieren des Itemcache dem Link folgen, danach die Buttons "Clear Cache" und danach "Update Itemtable" ausw�hlen.<br><br>';

$plang['pk_set_normal_leaderbaord']			= '���������� Leaderboard �� ���������';
$plang['pk_help_normal_leaderbaord']		= '���� �������,Leaderboard ���������� �������.';

$plang['pk_set_lastraids']					= '�� ���������� ��������� �����';
$plang['pk_help_lastraid']					= '���� �������, ��������� ���� �� ������� � ����';

$plang['pk_set_lastraids_limit']			= '��������� ����� ������';
$plang['pk_help_lastraid_limit']			= '��������� ����� ������';

$plang['pk_set_lastraids_showloot']			= '���������� �������� ����� ��������� ������';
$plang['pk_help_lastraid_showloot']			= '���������� �������� ����� ��������� ������';

$plang['pk_lastraids_lootLimit']		= '����� ���������';
$plang['pk_help_lastraid_lootLimit']		= '����� ���������';


$plang['pk_set_ts_active']					= 'activate TS Viewer';
$plang['pk_help_ts_active']					= 'activate TS Viewer';

$plang['pk_set_ts_title']					= 'TS-������ ���������';
$plang['pk_help_ts_title']					= 'TS-������ ���������';

$plang['pk_set_ts_serverAddress']			= 'TS-������ IP';
$plang['pk_help_ts_serverAddress']			= 'TS-������ IP';

$plang['pk_set_ts_serverQueryPort']			= '���� �������';
$plang['pk_help_ts_serverQueryPort']		= '���� �������';

$plang['pk_set_ts_serverUDPPort']			= 'UDP ����';
$plang['pk_help_ts_serverUDPPort']			= 'UDP ����';

$plang['pk_set_ts_serverPasswort']			= '������ �������';
$plang['pk_help_ts_serverPasswort']			= '������ �������';


$plang['pk_set_ts_channelflags']			= '���������� ����� ������ (R,M,S,P � �.�.)';
$plang['pk_help_ts_channelflags']			= '���������� ����� ������ (R,M,S,P � �.�.)';

$plang['pk_set_ts_userstatus']				= '���������� ������ ��������� (U,R,SA � �.�.)';
$plang['pk_help_ts_userstatus']				= '���������� ������ ��������� (U,R,SA � �.�.)';

$plang['pk_set_ts_showchannel']				= '���������� ������? (0 = ������ ��������)';
$plang['pk_help_ts_showchannel']			= '���������� ������? (0 = ������ ��������)';

$plang['pk_set_ts_showEmptychannel']		= '���������� ������ ������?';
$plang['pk_help_ts_showEmptychannel']		= '���������� ������ ������?';

$plang['pk_set_ts_overlib_mouseover']		= 'Show mouseover informations? ';
$plang['pk_help_ts_overlib_mouseover']		= 'Show mouseover informations? (german only atm, translation comes later)';

$plang['pk_set_ts_joinable']				= 'Show link to join the server?';
$plang['pk_help_ts_joinable']				= 'Show link to join the server';

$plang['pk_set_ts_joinableMember']			= 'Show the join link only registeres users?';
$plang['pk_help_ts_joinableMember']			= 'Link zum joinen nur eingelogten Usern anzeigen?';

$plang['pk_set_ts_ranking']					= '���������� ����������� �����';
$plang['pk_help_ts_ranking']				= '���������� ����������� �����';

$plang['pk_set_ts_ranking_url']				= '����������� ����� URL like <a href=http://www.wowjutsu.com/>WoWJutsu</a> or <a href=http://www.bosskillers.com/>Bosskillers</a> ';
$plang['pk_help_ts_ranking_url']			= '����������� ����� URL like <a href=http://www.wowjutsu.com/>WoWJutsu</a> or <a href=http://www.bosskillers.com/>Bosskillers</a> ';

$plang['pk_set_ts_ranking_link']			= '����������� ����� Link';
$plang['pk_help_ts_ranking_link']			= '����������� ����� Link';

$plang['pk_set_thirdColumn']				= '�� ����������� �������� �������';
$plang['pk_help_thirdColumn']				= '�� ����������� �������� �������';

#GetDKP
$plang['pk_getdkp_th']						= 'GetDKP ���������';

$plang['pk_set_getdkp_rp']					= '������������ raidplan';
$plang['pk_help_getdkp_rp']					= '������������� raidplan';

$plang['pk_set_getdkp_link']				= '�������� getdkp ������ � ������� ����';
$plang['pk_help_getdkp_link']				= '����� getdkp ������ � ������� ����';

$plang['pk_set_getdkp_active']				= '�������������� getdkp.php';
$plang['pk_help_getdkp_active']				= '��������������� getdkp.php';

$plang['pk_set_getdkp_items']				= '��������� itemIDs';
$plang['pk_help_getdkp_items']				= '���������� itemIDs';

$plang['pk_set_recruit_embedded']			= 'open Link embedded';
$plang['pk_help_recruit_embedded']			= '���� ������������, the link opens embedded i an iframe';


/*
$plang['pk_set_']	= '';
$plang['pk_help_']	= '';
*/
?>
