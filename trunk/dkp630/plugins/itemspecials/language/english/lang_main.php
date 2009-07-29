<?php
 /*
 * Project:     EQdkp ItemSpecials
 * License:     Creative Commons - Attribution-Noncommercial-Share Alike 3.0 Unported
 * Link:		    http://creativecommons.org/licenses/by-nc-sa/3.0/
 * -----------------------------------------------------------------------
 * Began:       2006
 * Date:        $Date: 2009-06-01 13:23:19 +0200 (Mo, 01 Jun 2009) $
 * -----------------------------------------------------------------------
 * @author      $Author: wallenium $
 * @copyright   2005-2008 Simon (Wallenium) Wallmann
 * @link        http://eqdkp-plus.com
 * @package     itemspecials
 * @version     $Rev: 5002 $
 * 
 * $Id: lang_main.php 5002 2009-06-01 11:23:19Z wallenium $
 */

$lang = array(
  'itemspecials'                    => 'Item Specials',
  'is_user_language'                => 'English',
  'is_short_desc'                   => 'Setright, Setprogress, Specialitems',
  'is_long_desc'                    => 'Setright: When will i get my next piece of set?<br/>Setprogress: Overview of set parts per member<br/>Specialitems: Overview of special items per Member. Custom items can be added.',

  // admin menu
  'is_itemspecials_conf'            => 'Config',
  'is_adminmenu_itemspecials'       => 'ItemSpecials',
  'is_itemspecials_additem'         => 'Add SetItems',

  // menu entries
  'is_usermenu_Specialitems'        => 'Special Items',
  'is_usermenu_Setitems'            => 'Set Progress',
  'is_usermenu_setright'            => 'Set Right',

  // Site titles
  'is_title_specialitems'           => 'Special Items',
  'is_title_setitems'               => 'Set Progress',
  'is_title_itemrights'             => 'Item Rights',

  // permissions
  'is_set_view'                     => 'show Set Progress',
  'is_special_view'                 => 'show Specialitems',
  'is_setright_view'                => 'show ItemRights',
  'is_itemspecials_plugins'         => 'Plugin Management',

  // error msg
  'is_member_info'                  => 'Could not obtain member information',
  'is_item_info'                    => 'Could not obtain item information',
  'is_not_installed'                => 'The ItemSpecials plugin is not installed',
  'is_no_config'                    => 'Please reset the script. Go to config and click on "Set to defaults"-button',
	'is_php_version'									=> "ItemSpecials requires PHP %1\$s or higher. Your server runs PHP %2\$s",
	'is_plus_version'									=> "ItemSpecials requires EQDKP-PLUS %1\$s or higher. Your installed Version is %2\$s",

  // Button
  'is_submit'                       => 'submit',
  'is_set_default'                  => 'Set to defaults',
  'is_button_del_item'              => 'Delete Items',
  'is_button_add_item'              => 'Add Custom Item',
  'is_button_cancel'                => 'Cancel',
  'is_button_action'                => 'Perform',
  'is_button_ok'                    => 'OK',

  // user menu
  'is_items_add'                    => 'Add Items',
  'is_useradd_items'                => 'Add Set-/Specialitems',
  'is_user_setitems'                => 'Add Items',
  'is_user_setinfo'                 => 'You can add existing pieces of any set to your characters.',

  // setitems
  'is_Belt'                         => 'Belt',
  'is_Boots'                        => 'Boots',
  'is_Wrist'                        => 'Wrist',
  'is_Chest'                        => 'Chest',
  'is_Shoulders'                    => 'Shoulders',
  'is_Hands'                        => 'Hands',
  'is_Head'                         => 'Head',
  'is_Legs'                         => 'Legs',
  'is_Set'                          => 'Set',
  'is_ring'                         => 'Ring',
  'is_Weapon'                       => 'Weapon',

  'is_home'                         => 'Status Page',
  'is_item_status'                  => 'Item Status',
  'is_summ'                         => 'SUMM',
  
  //SetRights
  'is_count_raids'                  => 'Count of raids',
  'is_count_setitems'               => 'Count of Setitems',
  'is_count_attendance'							=> 'raid attendance',
  'is_count_lastxdays'							=> " last %1\$s days",
  'is_tab_setright'                 => 'Greed',
  'is_use_tier'                     => 'Use',
  'is_sel_tier_expl'                => 'Select the Tier Sets, which should be used for the calculation within SetRights.',

  // config global
  'is_conf_pagetitle'               => 'ItemSpecials Configuration',
  'is_conf_saved'                   => 'Successfully saved',
  'is_show_level'                   => 'Show Level',
  'is_show_rank'                    => 'Show Rank',
  'is_show_points'                  => 'Show Points',
  'is_show_total'                   => 'Show Total DKP',
  'is_show_class'                   => 'Show Class',
  'is_show_cls_img'                 => 'Show Class Images',
  'header_total'                    => 'Total DKP',
  'is_hide_version'                 => 'Hide Version in Footer',

  // conf header
  'is_open_cat'                     => 'Click on the name to expand the category',
  'is_expand_all'                   => 'Expand all',
  'is_header_global'                => 'General',
  'is_header_special'               => 'Specialitems',
  'is_header_setitem'               => 'Setprogress',
  'is_header_setright'              => 'Set Right',
  'is_header_onepage'               => 'Set Overview',
  'is_header_page'                  => 'Show Items (Specialitems)',
  'is_header_itemstats'             => 'Itemstats',
  'is_header_database'              => 'Databases',

  //
  // SETTINGS
  //
  'is_updatecheck'                  => 'Enable Updatecheck',
  'is_help_updcheck'                => 'If the updatecheck doesn\'t work, you might want to disable it.',
  'is_locale_name'                  => 'Language',
  'is_icons'                        => 'Icon Settings',
  'is_icons_hlp'                    => '(width x height)',
  'is_itemstats'                    => 'Enable Itemstats',
  'is_itemst_replace'               => 'Itemstats Replacement',
  'is_isreplace_help'               => 'Show HTML/own symbols instead of the Itemstats Images. This is used if Itemstats is disabled.',
  'is_ispath'                       => 'Custom Itemstats path',
  'is_ispath_help'                  => 'Only needed, if itemstats is <b>not</b> in the eqdkp main root! Only paths, nor URL!',
  'is_path_notreadable'             => 'The path you entered is wrong, file not readable: ',
  'is_name_correct'                 => 'Automatic Itemname Correction',
  'is_name_corr_expl'               => 'Itemstats must be enabled; If enabled, the Itemname is getting to the proper format, enable if not all items are visible in the lists.',
  'is_hidden_groups'                => 'hide hidden groups',
  'is_hide_inactive'                => 'hide inactive members',
  'is_colord_class'                 => 'Colored Classnames',
  'is_show_tier'                    => 'Show',
  'is_use_nonset'                   => 'Set & Non-Set Database difference',
  'is_help_nonset'                  => 'Only if a Nonset and a Set-Table is in use. If not, leave it disabled.',
  'is_settable'                     => 'Set Table [only if enabled above]',
  'is_nonsettable'                  => 'Non-Set Table [only if enabled above]',
  'is_warning'                      => 'WARNING',
  'is_setdefaults'                  => 'All custom items WILL BE deleted during this step. Insert the itemstatements in which language?',
  'is_want_reset'                   => 'Do you really want to restore the default settings? All custom Settings will be removed!',

  // Setitems
  'is_one_page'                     => 'Show all Tiers on one page',
  'is_show_index'                   => 'Show Set Overview on Setitems Index',
  'is_show_dropdown'                => 'Show a Header Image per Class and use the Dropdownlist instead of Class Icons',
  'is_oldstyle_links'               => 'Use Oldstyle Links instead of PopUp by Click on Item',

  // specialitems
  'is_cache_loaded'                 => 'Item to cache were loaded',
  'is_cache_notloaded'              => 'No items loaded. ItemSpecials may have problems to show all Items. Please load the items!',
  'is_cache_reload'                 => 'click to reload',
  'is_cache_load'                   => 'click to load',
  'is_header_images'                => 'Show header Images',
  'is_show'                         => 'Show',
  'is_itemstatus_show'              => 'Show Item completion Information',
  'is_itemstatus_help'              => 'May cause longer loading times.',
  'is_crosses'                      => 'Itemstats Replacement instead of IS-Graphics in Member rows',
  'is_help_crosses'                 => 'Useful, if not every member should have an item, you could use crosses instead.',
  'is_enabled_items'                => 'enabled Specialitems',
  'is_unused_items'                 => 'unused Specialitems',
  'is_populate'                     => 'Populate',
  'is_del_warning'                  => 'Are you sure you want to reset the data to defaults? All changes are lost!',
  'is_del_nothing'                  => 'Nothing done',
  'is_no_specialitems'              => 'ERROR: No Specialitems chosen to show. Please go to the Administration Area and choose the Items to show',
  'is_info_dragdrop'                => 'The Items must be enabled by using drag & drop. Move the Items from the left List to the right list. You can sort them by using Drag\'n\'Drop also.',
  'is_special_list'                 => 'List of special items (Drag & Drop to Enable/Disable)',

  // msg
  'is_info_box'                     => 'Information',
  'is_setting_saved'                => 'Settings successfully saved',
  'is_setting_failed'               => 'Settings not saved. Please try again or contact an administrator',
  'is_sqlerror_plugin'              => 'Could not obtain Plugin Information',
  'is_sqlerror_config'              => 'Could not obtain configuration data',
  'is_sqlerror_sitem'               => 'Could not obtain Specialitem data',

  // Log things
  'action_isset_changed'            => 'Itemspecials Settings changed',
  'is_event_changed'                => 'Changed Settings',

  // Plugin Things
  'is_plugin_name'                  => 'Name',
  'is_plugin_version'               => 'Version',
  'is_plugin_contact'               => 'Contact',
  'is_plugin_management'            => 'Plugin Management',
  'is_select_plugin'                => 'You can only select one plugin. The Plugin includes the calculation methods used by SetRights.<br />To install a new Plugin, just copy the Plugin into the "itemspecials/plugins/"-folder. The Plugin will install itself automatically.',
  'is_plugin_choose'                => 'Choose Plugin',
  'is_no_plugins_inst'              => 'No Setrights Plugin installed',

  // custom items
  'is_add_item-b'                   => 'Add Item',
  'is_del_item_b'                   => 'Delete Item',
  'is_add_item'                     => 'Enter the exact Item Name of the Item you want to add to Specialitems. Its must be the exact name, used in game!',
  'is_item_name'                    => 'Real Itemname (as In Game)',
  'is_itemname_missing'             => 'Item Name is missing',

  // item addition
  'is_additem'                      => 'Add item',
  'is_owner'                        => 'Owner',
  'is_add_item2'                    => 'All set pieces available through quest items <b>must</b> be add as the quest items. If you\'ll add SetItems for them, nothing will be added to the tier progress page.',
  'is_item_name2'                   => 'Itemname',
  'is_delbutton'                    => 'Delete',

  // Itemstats Update
  'is_cacheupd_head'                => 'Itemstats Cache Update',
  'is_cacheupd_txt'                 => 'Loading Item Information. This might take several minutes. Please stand by',
  'is_cacheupd_complete'            => 'The update of the item information was successfully completed',
  'is_plus_itemstats_off'           => 'Itemstats is disabled. Please go to the eqdkp-plus settings and enable it.',
  'is_itemstats_nopath'             => 'No Itemstats detected. Please go to the config and edit the path.',

  // About dialog
  'is_dialog_header'                => 'About ItemSpecials',
  'is_created by'                   => 'Created by',
  'is_contact_info'                 => 'Contact Information',
  'is_url_personal'                 => 'Private',
  'is_url_web'                      => 'Web',
  'is_additions'                    => 'Beiträge zum PlugIn',
  'is_copyright'										=> 'Copyright',
  'is_created_devteam'							=> 'by WalleniuM',

  // Plugin API Language Strings
  'is_priority'                     => 'Priority',
  'is_last30days'                   => 'Last 30 Days',
  
  // Jquery Fallback Language strings
  'cl_bttn_ok'                      => 'Ok',
  'cl_bttn_cancel'                  => 'Cancel',
);
?>
