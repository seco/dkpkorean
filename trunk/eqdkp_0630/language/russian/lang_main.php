<?php
/******************************
 * EQdkp
 * Copyright 2002-2003
 * Licensed under the GNU GPL.  See COPYING for full terms.
 * ------------------
 * lang_main.php
 * begin: Wed December 18 2002
 *
 * $Id: lang_main.php 2016 2008-05-12 16:00:22Z osr-corgan $
*
 ******************************/

if ( !defined('EQDKP_INC') )
{
     die('��� ������� � ������ �������� ����������');
}

// %1\$<type> prevents a possible error in strings caused
//      by another language re-ordering the variables
// $s is a string, $d is an integer, $f is a float

$lang['ENCODING'] = 'windows-1251';
$lang['XML_LANG'] = 'ru';

// Linknames
$lang['rp_link_name']   = "Raidplanner";

// Titles
$lang['admin_title_prefix']   = "%1\$s %2\$s �����������������";
$lang['listadj_title']        = '������ ��������� ���������';
$lang['listevents_title']     = '��������� �������';
$lang['listiadj_title']       = '������ �������������� ���������';
$lang['listitems_title']      = '��������� ���������';
$lang['listnews_title']       = '�������';
$lang['listmembers_title']    = '�������� ���������� � DKP ����������';
$lang['listpurchased_title']  = '������� ���������';
$lang['listraids_title']      = '������ ������';
$lang['login_title']          = '����';
$lang['message_title']        = 'EQdkp: ���������';
$lang['register_title']       = '�����������';
$lang['settings_title']       = '��������� ������� ������';
$lang['stats_title']          = "%1\$s ����������";
$lang['summary_title']        = '����� �� ��������';
$lang['title_prefix']         = "%1\$s %2\$s";
$lang['viewevent_title']      = "�������� ������� ����(��) %1\$s";
$lang['viewitem_title']       = "�������� ������� ������� %1\$s";
$lang['viewmember_title']     = "�������� ���������� �� ��������� %1\$s";
$lang['viewraid_title']       = '����� �� �����';

// Main Menu
$lang['menu_admin_panel'] = '������ ��������������';
$lang['menu_events'] = '�������';
$lang['menu_itemhist'] = '������� ���������';
$lang['menu_itemval'] = '��������� ���������';
$lang['menu_news'] = '�������';
$lang['menu_raids'] = '�����';
$lang['menu_register'] = '�����������';
$lang['menu_settings'] = '������ ���������';
$lang['menu_members'] = 'Characters';
$lang['menu_standings'] = '����� ����������';
$lang['menu_stats'] = '����������';
$lang['menu_summary'] = '������';

// Column Headers
$lang['account'] = '������� ������';
$lang['action'] = '��������';
$lang['active'] = '�����������';
$lang['add'] = '����������';
$lang['added_by'] = '�������(�)';
$lang['adjustment'] = '��������� ';
$lang['administration'] = '�����������������';
$lang['administrative_options'] = '���������������� ���������';
$lang['admin_index'] = '������� �����������';
$lang['attendance_by_event'] = '��������� �������';
$lang['attended'] = '���������';
$lang['attendees'] = '���������';
$lang['average'] = '�������';
$lang['buyer'] = '����������';
$lang['buyers'] = '����������';
$lang['class'] = '�����';
$lang['armor'] = '�����';
$lang['type'] = '�����';
$lang['class_distribution'] = '������������� �� �������';
$lang['class_summary'] = "����� �� ������: � %1\$s �� %2\$s";
$lang['configuration'] = '����� ����������';
$lang['config_plus']	= 'PLUS ���������';
$lang['plus_vcheck']	= '��������� ����������';
$lang['current'] = '������� ';
$lang['date'] = '����';
$lang['delete'] = '�������';
$lang['delete_confirmation'] = '������������� �� ��������';
$lang['dkp_value'] = "%1\$s ���������";
$lang['drops'] = '������';
$lang['earned'] = '���������� ';
$lang['enter_dates'] = '������ ����';
$lang['eqdkp_index'] = '������� EQdkp';
$lang['eqdkp_upgrade'] = 'EQdkp ����������';
$lang['event'] = '�������';
$lang['events'] = '�������';
$lang['filter'] = '������';
$lang['first'] = '������';
$lang['rank'] = '����';
$lang['general_admin'] = '����� ����������';
$lang['get_new_password'] = '�������� ����� ������';
$lang['group_adj'] = '��������� ���������';
$lang['group_adjustments'] = '��������� ���������';
$lang['individual_adjustments'] = '�������������� ���������';
$lang['individual_adjustment_history'] = '������� �������������� ���������';
$lang['indiv_adj'] = '�������. ���.';
$lang['ip_address'] = 'IP-�����';
$lang['item'] = '�������';
$lang['items'] = '��������';
$lang['item_purchase_history'] = '������� ������� ���������';
$lang['last'] = '���������';
$lang['lastloot'] = '��������� ������';
$lang['lastraid'] = '��������� ����';
$lang['last_visit'] = '��������� �����';
$lang['level'] = '�������';
$lang['log_date_time'] = '����/����� ����� ����';
$lang['loot_factor'] = '������ ������';
$lang['loots'] = '������';
$lang['manage'] = '����������';
$lang['member'] = '��������';
$lang['members'] = '���������';
$lang['members_present_at'] = "��������� �������� � %1\$s �� %2\$s";
$lang['miscellaneous'] = '������';
$lang['name'] = '���';
$lang['news'] = '�������';
$lang['note'] = '����������';
$lang['online'] = '�������(Online)';
$lang['options'] = '���������';
$lang['paste_log'] = '�������� ��� ����';
$lang['percent'] = '�������';
$lang['permissions'] = '����� �������';
$lang['per_day'] = '�� ����';
$lang['per_raid'] = '�� ����';
$lang['pct_earned_lost_to'] = '% ���������';
$lang['preferences'] = '���������';
$lang['purchase_history_for'] = "������� ������� ��� �������� %1\$s";
$lang['quote'] = '������';
$lang['race'] = '����';
$lang['raid'] = '����';
$lang['raids'] = '�����';
$lang['raid_id'] = '���� ID';
$lang['raid_attendance_history'] = '������� ������� � �����(��)';
$lang['raids_lifetime'] = "����������: (%1\$s - %2\$s)";
$lang['raids_x_days'] = "��������� %1\$d ����";
$lang['rank_distribution'] = '������������� �� ������';
$lang['recorded_raid_history'] = "������ ������� ������ ��� ������� %1\$s";
$lang['reason'] = '�������';
$lang['registration_information'] = '��������������� ����������';
$lang['result'] = '���������';
$lang['session_id'] = 'ID ������';
$lang['settings'] = '���������';
$lang['spent'] = '��������� ';
$lang['summary_dates'] = "����� �� �����: � %1\$s �� %2\$s";
$lang['themes'] = '����';
$lang['time'] = '�����';
$lang['total'] = '�����';
$lang['total_earned'] = '����� ����������';
$lang['total_items'] = '����� ���������';
$lang['total_raids'] = '����� ������';
$lang['total_spent'] = '����� ���������';
$lang['transfer_member_history'] = '����������� ������� ���������';
$lang['turn_ins'] = '�������� ���������';
$lang['type'] = '���';
$lang['update'] = '����������';
$lang['updated_by'] = '�������(�)';
$lang['user'] = '������������';
$lang['username'] = '��� ������������';
$lang['value'] = '��������';
$lang['view'] = '��������';
$lang['view_action'] = '����������� ��������';
$lang['view_logs'] = '����������� ����';

// Page Foot Counts
$lang['listadj_footcount']               = "... ������� %1\$d ��������� / %2\$d �� ��������";
$lang['listevents_footcount']            = "... ������� %1\$d ������� / %2\$d �� ��������";
$lang['listiadj_footcount']              = "... ������� %1\$d �������������� ��������� / %2\$d �� ��������";
$lang['listitems_footcount']             = "... ������� %1\$d ���������� ��������� / %2\$d �� ��������";
$lang['listmembers_active_footcount']    = "... ������� %1\$d �������� ���������� / %2\$s�������� ����</a>";
$lang['listmembers_compare_footcount']   = "... ������������ %1\$d ����������";
$lang['listmembers_footcount']           = "... ������� %1\$d ����������";
$lang['listnews_footcount']              = "... ������� %1\$d �������� / %2\$d �� ��������";
$lang['listpurchased_footcount']         = "... ������� %1\$d �������(��) / %2\$d �� ��������";
$lang['listraids_footcount']             = "... ������� %1\$d ����(��) / %2\$d �� ��������";
$lang['stats_active_footcount']          = "... ������� %1\$d ��������(��) ��������(��) / %2\$s�������� ����</a>";
$lang['stats_footcount']                 = "... ������� %1\$d e���������";
$lang['viewevent_footcount']             = "... ������� %1\$d ����(��)";
$lang['viewitem_footcount']              = "... ������� %1\$d �������(��)";
$lang['viewmember_adjustment_footcount'] = "... ������� %1\$d �������������� ���������";
$lang['viewmember_item_footcount']       = "... ������� %1\$d ��������� ��������� / %2\$d �� ��������";
$lang['viewmember_raid_footcount']       = "... ������� %1\$d ����������� ����(��) / %2\$d �� ��������";
$lang['viewraid_attendees_footcount']    = "... ������� %1\$d ����������";
$lang['viewraid_drops_footcount']        = "... ������� %1\$d ������(��)";

// Submit Buttons
$lang['close_window'] = '������� ����';
$lang['compare_members'] = '�������� ����������';
$lang['create_news_summary'] = '������� ����� �� ��������';
$lang['login'] = '����';
$lang['logout'] = '�����';
$lang['log_add_data'] = '�������� ������ � �����';
$lang['lost_password'] = '����� ������';
$lang['no'] = '���';
$lang['proceed'] = '����������';
$lang['reset'] = '�����';
$lang['set_admin_perms'] = '��������� ����� ��������������';
$lang['submit'] = '���������';
$lang['upgrade'] = '��������';
$lang['yes'] = '��';

// Form Element Descriptions
$lang['admin_login'] = '����� ��������������';
$lang['confirm_password'] = '����������� ������';
$lang['confirm_password_note'] = '������� �������� ����� ������';
$lang['current_password'] = '������� ������';
$lang['current_password_note'] = '������� ���� ������� ������ ��� ��� ���������';
$lang['email'] = 'Email';
$lang['email_address'] = 'Email �����';
$lang['ending_date'] = '���� ���������';
$lang['from'] = '��';
$lang['guild_tag'] = '�������� �������';
$lang['language'] = '����';
$lang['new_password'] = '����� ������';
$lang['new_password_note'] = '������� ����� ������, ���� ������� �������� ������� ������';
$lang['password'] = '������';
$lang['remember_password'] = '��������� ���� (cookie)';
$lang['starting_date'] = '���� ������';
$lang['style'] = '�����';
$lang['to'] = '���';
$lang['username'] = '��� ������������';
$lang['users'] = '������������';

// Pagination
$lang['next_page'] = '��������� ��������';
$lang['page'] = '��������';
$lang['previous_page'] = '���������� ��������';

// Permission Messages
$lang['noauth_default_title'] = '����� � �������';
$lang['noauth_u_event_list'] = '� ��� ��� ���� ��� ��������� ������ �������';
$lang['noauth_u_event_view'] = '� ��� ��� ���� ��� ��������� �������';
$lang['noauth_u_item_list'] = '� ��� ��� ���� ��� ��������� ������ ���������';
$lang['noauth_u_item_view'] = '� ��� ��� ���� ��� ��������� ���������';
$lang['noauth_u_member_list'] = '� ��� ��� ���� ��� ��������� �������� ����������';
$lang['noauth_u_member_view'] = '� ��� ��� ���� ��� ��������� ������� ����������';
$lang['noauth_u_raid_list'] = '� ��� ��� ���� ��� ��������� ������ ������';
$lang['noauth_u_raid_view'] = '� ��� ��� ���� ��� ��������� ������';

// Submission Success Messages
$lang['add_itemvote_success'] = '��� ����� �� �������� ������� ������������';
$lang['update_itemvote_success'] = '��� ����� �� �������� ������� ��������';
$lang['update_settings_success'] = '��������� ������������ ������� ���������';

// Form Validation Errors
$lang['fv_alpha_attendees'] = '����� ���������� � EverQuest ����� ��������� ������ ����� ��������';
$lang['fv_already_registered_email'] = '���� ����� e-mail ��� ���������������';
$lang['fv_already_registered_username'] = '��� ��� ������������ ��� ����������������';
$lang['fv_difference_transfer'] = '������� ������� ������ ������������� ����� ����� ������� �����������';
$lang['fv_difference_turnin'] = '������� ������ ������������� ����� ����� ������� �����������';
$lang['fv_invalid_email'] = '����� e-mail �� ������������';
$lang['fv_match_password'] = '���� ������ ������ ���� �����������';
$lang['fv_member_associated']  = "%1\$s ��� ������������ � ������� ������� ������� ���������";
$lang['fv_number'] = '������ ���� �����';
$lang['fv_number_adjustment'] = '���� ���������� ��������� ������ ���� ������';
$lang['fv_number_alimit'] = '���� ������� ��������� ������ ���� ������';
$lang['fv_number_ilimit'] = '���� ������� ��������� ������ ���� ������';
$lang['fv_number_inactivepd'] = '������ ������������ ������ ���� ������';
$lang['fv_number_pilimit'] = '������ ��������� ��������� ������ ���� ������';
$lang['fv_number_rlimit'] = '������ ������ ������ ���� ������';
$lang['fv_number_value'] = '���� ��������� ������ ���� ������';
$lang['fv_number_vote'] = '���� ����������� ������ ���� ������';
$lang['fv_date'] = '����������, �������� ���������� ���� � ���������';
$lang['fv_range_day'] = '���� ��� ������ ���� ������ ����� 1 � 31';
$lang['fv_range_hour'] = '���� ���� ������ ���� ������ ����� 0 � 23';
$lang['fv_range_minute'] = '���� ������ ������ ���� ������ ����� 0 � 59';
$lang['fv_range_month'] = '���� ������ ������ ���� ����� 1 � 12';
$lang['fv_range_second'] = '���� ������� ������ ���� ������ ����� 0 � 59';
$lang['fv_range_year'] = '���� ���� ������ ��������� ����� �� ������ 1998';
$lang['fv_required'] = '����������� ����';
$lang['fv_required_acro'] = '���� �������� ������� ����������';
$lang['fv_required_adjustment'] = '���� ���������� ��������� ����������';
$lang['fv_required_attendees'] = '�������� ���������� �����';
$lang['fv_required_buyer'] = '�������� ����������';
$lang['fv_required_buyers'] = '���� �� ���� ���������� ������ ���� ������';
$lang['fv_required_email'] = '���� ������ e-mail ����������';
$lang['fv_required_event_name'] = '�������� �������';
$lang['fv_required_guildtag'] = '������� �������� �������';
$lang['fv_required_headline'] = '������� ���������';
$lang['fv_required_inactivepd'] = '���� ������� ���������� ���������� ��������, ������ ���� ������� �������� ������������';
$lang['fv_required_item_name'] = '���� �������� �������� ������ ���� ��������� ��� ������ ������������ �������';
$lang['fv_required_member'] = '������ ���� ������ ��������';
$lang['fv_required_members'] = '������ ���� ������ ���� �� ���� ��������';
$lang['fv_required_message'] = '�� ������� ���������';
$lang['fv_required_name'] = '��������� ���� ��������';
$lang['fv_required_password'] = '��������� ���� ������';
$lang['fv_required_raidid'] = '�� ������ ����';
$lang['fv_required_user'] = '������� ��� ������������';
$lang['fv_required_value'] = '������� ��������';
$lang['fv_required_vote'] = '���������� �������������';

// Miscellaneous
$lang['added'] = '���������';
$lang['additem_raidid_note'] = "������������ ����� �� ��������� ��� ������ / %1\$s �������� ���</a>";
$lang['additem_raidid_showall_note'] = '�������� ��� �����';
$lang['addraid_datetime_note'] = '���� �� ��������� ��� �� �������������� ������, ���� � ����� ����� ���������� �������������';
$lang['addraid_value_note'] = '��� ��������������� ������; ���� ���� �������� ������ ����� �������������� �������� �� ��������� ��� ����� �������';
$lang['add_items_from_raid'] = '�������� �������� � ����� �����';
$lang['deleted'] = '�������';
$lang['done'] = '������';
$lang['enter_new'] = '������ �����';
$lang['error'] = '������';
$lang['head_admin'] = '������� �������������';
$lang['hold_ctrl_note'] = '������� CTRL ����� ������� ��������� ���������� ���� �������';
$lang['list'] = '������';
$lang['list_groupadj'] = '������� ������ ��������� ���������';
$lang['list_events'] = '������� ������ �������';
$lang['list_indivadj'] = '������� ������ �������������� ���������';
$lang['list_items'] = '������� ������ ���������';
$lang['list_members'] = '������� ������ ����������';
$lang['list_news'] = '������� ������ ��������';
$lang['list_raids'] = '������� ������ ������';
$lang['may_be_negative_note'] = '����� ���� �������������';
$lang['not_available'] = '�� ��������';
$lang['no_news'] = '������ ������ �� �������';
$lang['of_raids'] = "%1\$d%% ������";
$lang['or'] = '���';
$lang['powered_by'] = '��������������';
$lang['preview'] = '��������������� ��������';
$lang['required_field_note'] = '��� ����, ���������� * (����������), ����������� ��� ����������';
$lang['select_1ofx_members'] = "������� ������ �� %1\$d ����������...";
$lang['select_existing'] = '������� ����� �������������';
$lang['select_version'] = '�������� ������ EQdkp, ������� �� ������ ��������:';
$lang['success'] = '�������';
$lang['s_admin_note'] = '���������� ������� ������� �������� ������ ��� �������������';
$lang['transfer_member_history_description'] = '��� ��������� ��� ������� ��������� (�����, ��������, ���������) � ������� ���������';
$lang['updated'] = '��������� ';
$lang['upgrade_complete'] = '������� ���������� EQdkp ������� ��������.<br /><br /><b class="negative">������� ������ ���� � ����� ������������!</b>';

// Settings
$lang['account_settings'] = '��������� ������� ������';
$lang['adjustments_per_page'] = '�������, ������� �������� ��������� �� ��������';
$lang['basic'] = '��������';
$lang['events_per_page'] = '�������, ������� �������� ������� �� ��������';
$lang['items_per_page'] = '�������, ������� �������� ��������� �� ��������';
$lang['news_per_page'] = '�������, ������� �������� �������� �� ��������';
$lang['raids_per_page'] = '�������, ������� �������� ������ �� ��������';
$lang['associated_members'] = '��������� ������������';
$lang['guild_members'] = '��������� �������';
$lang['default_locale'] = '������ �� ���������';


// Error messages
$lang['error_account_inactive'] = '���� ������� ������ ���������';
$lang['error_already_activated'] = '��� ������� ������ ��� ������������';
$lang['error_invalid_email'] = '�������������� ����� e-mail �� ��� ������������';
$lang['error_invalid_event_provided'] = '������������ id ������� �� ��� ������������';
$lang['error_invalid_item_provided'] = '������������ id �������� �� ��� ������������';
$lang['error_invalid_key'] = '�� ������������ ������������ ���� ���������';
$lang['error_invalid_name_provided'] = '������������ ��� ��������� �� ���� �������������';
$lang['error_invalid_news_provided'] = '������������ id ������� �� ��� ������������';
$lang['error_invalid_raid_provided'] = '������������ id ����� �� ��� ������������';
$lang['error_user_not_found'] = '������������ ��� ������������ �� ���� �������������';
$lang['incorrect_password'] = '������������ ������';
$lang['invalid_login'] = '�� ������������ ������������ ��� ������������ ��� ������';
$lang['not_admin'] = '�� �� ��������� ���������������';

// Registration
$lang['account_activated_admin']   = '������� ������ ������������. ������, ������������� �� ���� ��������� ���������� �� ����������� �����';
$lang['account_activated_user']    = "���� ������� ������ ������������ � ������ �� ������ %1\$s ����� %2\$s.";
$lang['password_sent'] = '����� ������ � ����� ������� ������ ��������� �� ���� ����������� �����.';
$lang['register_activation_self']  = "���� ������� ������ �������, �� ����� ��� ��� �� ������������ �� ������ ������������ ��.<br /><br />�� ���� ���������� ����� %1\$s ���������� ������ � ����������� � ���, ��� ������������ ���� ������� ������";
$lang['register_activation_admin'] = "���� ������� ������ �������, �� ����� ��� ��� �� ������������ ������������� ������ ������������ ��.<br /><br />�� ���� ���������� ����� %1\$s ���������� ������ � �������������� �����������";
$lang['register_activation_none']  = "���� ������� ������ ������� � ������ �� ������ %1\$s ����� %2\$s.<br /><br />�� ���� ���������� ����� %3\$s ���������� ������ � �������������� �����������";

//plus
$lang['news_submitter'] = '��������(�)';
$lang['news_submitat'] = '��';
$lang['droprate_loottable'] = "������� �������";
$lang['droprate_name'] = "�������� ��������";
$lang['droprate_count'] = "����";
$lang['droprate_drop'] = "���� ��������� %";

$lang['Itemsearch_link'] = "�������-�����";
$lang['Itemsearch_search'] = "����� ��������� :";
$lang['Itemsearch_searchby'] = "������(�) :";
$lang['Itemsearch_item'] = "������� ";
$lang['Itemsearch_buyer'] = "���������� ";
$lang['Itemsearch_raid'] = "���� ";
$lang['Itemsearch_unique'] = "��������� ����� ���������� ��������� :";
$lang['Itemsearch_no'] = "��";
$lang['Itemsearch_yes'] = "���";

$lang['bosscount_player'] = "����������: ";
$lang['bosscount_raids'] = "������: ";
$lang['bosscount_items'] = "���������: ";
$lang['bosscount_dkptotal'] = "������� DKP: ";

//MultiDKP
$lang['Plus_menuentry'] 			= "EQDKP Plus";
$lang['Multi_entryheader'] 		= "MultiDKP - �������� Pool";
$lang['Multi_pageheader'] 		= "MultiDKP - �������� Pools";
$lang['Multi_events'] 				= "�������:";
$lang['Multi_eventname'] 				= "�������� �������";
$lang['Multi_discnottolong'] 	= "(��� ������) -�� ������ ���� ������� �������, ����� ���� ������ ������,. �������� �.�. MC, BWL, AQ etc. !";
$lang['Multi_kontoname_short']= "���������:";
$lang['Multi_discr'] 					= "�����:";
$lang['Multi_events'] 				= "������� � ���� Pool";

$lang['Multi_addkonto'] 			  = "��������/�������� MultiDKP Pool";
$lang['Multi_updatekonto'] 			= "�������� Pool";
$lang['Multi_deletekonto'] 			= "������� Pool";
$lang['Multi_viewkonten']			  = "�������� MultiDKP Pools";
$lang['Multi_chooseevents']			= "������� �������";
$lang['multi_footcount'] 				= "...������� %1\$d DKP Pools / %2\$d �� ��������";
$lang['multi_error_invalid']    = "No Pools assigned....";
$lang['Multi_required_event']   = "�� ������ �������, �� ������� ����, 1-�� �������!";
$lang['Multi_required_name']    = "�� ������ ������ ��������(���)!";
$lang['Multi_required_disc']    = "�� ������ ������ �����!";
$lang['Multi_admin_add_multi_success'] = "The Pool %1\$s ( %2\$s ) � ��������� %3\$s ��� �������� � ���� ������";
$lang['Multi_admin_update_multi_success'] = "The Pool %1\$s ( %2\$s ) � ��������� %3\$s ��� ������� � ���� ������";
$lang['Multi_admin_delete_success']           = "The Pool %1\$s ��� ������ �� ���� ������";
$lang['Multi_confirm_delete']    = '�� ������������� ������� � ������ ������� ������ Pool?';


$lang['Multi_total_cost']   										= '����� ����� ��� ������ Pool';
$lang['Multi_Accs']    													= 'MultiDKP Pool';

//update
$lang['upd_eqdkp_status']    										= '�������� EQDKP ������';
$lang['upd_system_status']    									= '������ �������';
$lang['upd_template_status']    								= '������ �������';
$lang['upd_gamefile_status']                    = 'Game Status';
$lang['upd_update_need']    										= '�������� ����������!';
$lang['upd_update_need_link']    								= '���������� ��� ��������� ����������';
$lang['upd_no_update']    											= '���������� �� ���������. ������� �������� ��������� ����������';
$lang['upd_status']    													= '������';
$lang['upd_state_error']    										= '������';
$lang['upd_sql_string']    											= 'SQL �������';
$lang['upd_sql_status_done']    								= '�������(������)';
$lang['upd_sql_error']    											= '������';
$lang['upd_sql_footer']    											= 'SQL ������� ���������';
$lang['upd_sql_file_error']    									= '������: ��������� SQL ���� %1\$s �� ��� ������!';
$lang['upd_eqdkp_system_title']    							= '��������� EQDKP ������� ��������';
$lang['upd_plus_version']    										= '������ EQDKP Plus';
$lang['upd_plus_feature']    										= '�������';
$lang['upd_plus_detail']    										= '������';
$lang['upd_update']    													= '��������';
$lang['upd_eqdkp_template_title']    						= '������ EQDKP ��������';
$lang['upd_eqdkp_gamefile_title']               = 'EQDKP game update';
$lang['upd_gamefile_availversion']              = 'Available Version';
$lang['upd_gamefile_instversion']               = 'Installed Version';
$lang['upd_template_name']    									= '��� �������';
$lang['upd_template_state']    									= '������ �������';
$lang['upd_template_filestate']    							= '����� �������';
$lang['upd_link_install']    										= '��������';
$lang['upd_link_reinstall']    									= '����������';
$lang['upd_admin_need_update']    							= '������ ���� ������ ���� ����������. ������� �� up to date and needs to be updated.';
$lang['upd_admin_link_update']									= '�������� ����, ����� ������ ��������';
$lang['upd_backto']    													= '����� � �������';

// Event Icon
$lang['event_icon_header']    								  = '�������� ������ �������';

//update Itemstats
$lang['updi_header']    								    	= '�������� ���������� ��������� � ����';
$lang['updi_header2']    								    	= '���������� � ���������� ���������';
$lang['updi_action']    								    	= '��������';
$lang['updi_notfound']    								    = '�� �������';
$lang['updi_writeable_ok']    							  = '���� �����������';
$lang['updi_writeable_no']    								= '���� �� �����������';
$lang['updi_help']    								    		= '��������';
$lang['updi_footcount']    								    = '������� ��������';
$lang['updi_curl_bad']    								    = '��������� ������� PHP cURL �� �������. ��������, ���������� ��������� �������� �� ���������. ����������, ��������� � ���������������';
$lang['updi_curl_ok']    								    	= 'cURL ������';
$lang['updi_fopen_bad']    								    = '��������� ������� PHP fopen �� �������. ��������, ���������� ��������� �������� �� ���������. ����������, ��������� � ���������������';
$lang['updi_fopen_ok']    								    = 'fopen ������';
$lang['updi_nothing_found']						    		= '�������� �� �������';
$lang['updi_itemscount']  						    		= '����� ���� ���������:';
$lang['updi_baditemscount']						    		= '������ ����:';
$lang['updi_items']										    		= '�������� � ���� ������:';
$lang['updi_items_duplicate']					    		= '{� �������� ����������}';
$lang['updi_show_all']    								    = '������ ���� ��������� �� �����������';
$lang['updi_refresh_all']    								  = '������� ��� �������� � �������� ��';
$lang['updi_refresh_bad']    								  = '�������� ������ ������������ ��������';
$lang['updi_refresh_raidbank']    						= '�������� �������� Raidbanker(�)';
$lang['updi_refresh_tradeskill']   						= '�������� �������� Tradeskill(�)';
$lang['updi_help_show_all']    								= '�������� ��� �������� � �� ������������. ������ ���������� ����� ��������� (�������������)';
$lang['updi_help_refresh_all']  							= '��������� ������� ��� ��������� � tries to refresh all items that are listed in EQDKP. WARNING: If you share your Itemcache with a forum, the items from the forum cannot be refreshed. Depending on your webservers speed and the availability of Allakhazam.com this action could take several minutes. Possibly your webserver settings forbid a successful execution. In this case please contact your administrator';
$lang['updi_help_refresh_bad']    						= '������� ��� ������ �������� �� ���� � �������� ��';
$lang['updi_help_refresh_raidbank']    				= 'Raidbanker ����������, ���������� ��������� uses the entered items of the banker';
$lang['updi_help_refresh_Tradeskill']    			= '����� Tradeskill ����������, ��������� �������� ����� ��������� � ���������� ���������';

$lang['updi_active'] 					   							= '������������';
$lang['updi_inactive']    										= '��������������';

$lang['fontcolor']    			  = '���� ������';
$lang['Warrior']    					        = '����';
$lang['Rogue']    						= '���������';
$lang['Hunter']    						= '�������';
$lang['Paladin']    					        = '�������';
$lang['Priest']    						= '����';
$lang['Druid']    						= '�����';
$lang['Shaman']    						= '�����';
$lang['Warlock']    					        = '������';
$lang['Mage']    					        = '���';

# Reset DB Feature
$lang['reset_header']    			= '�������� ���� EQDKP';
$lang['reset_infotext']  			= '��������������!!! ��������� ������ ����� ���� ��������!!! �������� ��������� �����. ����������� ��������, ������� ������� � ����� ��������������';
$lang['reset_type']    				= '��� ����';
$lang['reset_disc']    				= '��������';
$lang['reset_sec']    				= '����������';
$lang['reset_action']    			= '��������';

$lang['reset_news']					  = '�������';
$lang['reset_news_disc']		  = '������� ��� ������� �� ���� ������';
$lang['reset_dkp'] 					  = 'DKP';
$lang['reset_dkp_disc']			  = '������� ��� ����� � �������� �� ���� ������ � �������� ��� DKP ���� �� 0';
$lang['reset_ALL']   					= '���';
$lang['reset_ALL_DISC']				= '������� ����� ����, ������� �� ����������. ����� ������ ��������. (�� ������� �������������)';

$lang['reset_confirm_text']	  = ' ������� ���� =>';
$lang['reset_confirm']			  = '�������';

// Armory Menu
$lang['lm_armorylink1']				= 'Armory';
$lang['lm_armorylink2']				= '�������';
$lang['lm_armorylink3']				= '�������';

$lang['updi_update_ready']			= '�������� ���� ������� ���������. �� ������ ������� <a href="#" onclick="javascript:parent.closeWindow()" >close</a> � ���� ����';
$lang['updi_update_alternative']= '�������������� ����� ���������� ��� ����������� ��-�� ������� ��������';
$lang['zero_sum']				= ' �� ���� ����������� DKP';

//Hybrid
$lang['Hybrid']				= '������';

$lang['Jump_to'] 				= '����������� ����� �� ';
$lang['News_vid_help'] 			= 'To embed videos just post the link to the video without [tags]. �������������� ����� �����: google video, youtube, myvideo, clipfish, sevenload, metacafe and streetfire ';

$lang['SubmitNews'] 		   = '��������� �������';
$lang['SubmitNews_help'] 	   = '� ��� ���� ������� �������? ��������� ������� � ���������� �� ����� Eqdkp Plus ��������������';

$lang['MM_User_Confirm']	   = '������� ���� ������� ������ ��������������? ���� �� ������ ����� ��������������, ��� ����� ���� ������ �������� � ���� ������';

$lang['beta_warning']	   	   = '��������!! ������ ������ EQDKP-Plus �������� Beta! �� ������������ ����������� ������������ ��������� ���������� ������. �������� <a href="http://www.eqdkp-plus.com" >www.eqdkp-plus.com</a> ��� �������� ����������!';

$lang['news_comment']        = '�����������';
$lang['news_comments']       = '�����������';
$lang['comments_no_comments']	   = 'No entries';
$lang['comments_comments_raid']	   = '�����������';
$lang['comments_write_comment']	   = '�������� �����������';
$lang['comments_send_comment']	   = '��������� �����������';
$lang['comments_save_wait']	   	   = '����������, ���������, ����������� �����������...';

$lang['news_nocomments'] 	 		    = 'Disallow Comments';
$lang['news_readmore_button']  			  	= 'Extend News';
$lang['news_readmore_button_help']  			  	= 'To use the extended Newstext, click here:';
$lang['news_message'] 				  	= '����� ��������';
$lang['news_permissions']			  	= '����� ��� ���������';

$lang['news_permissions_text']			= '���������� ������� ���:';
$lang['news_permissions_guest']			= '������ ������';
$lang['news_permissions_member']		= '������ � ���������� (������ �������������� ����� ������)';
$lang['news_permissions_all']			= '����';
$lang['news_readmore'] 				  	= '�������� ������...';

$lang['recruitment_open']				= '� ������� ���������:';
$lang['recruitment_contact']			= '�������';

$lang['sig_conf']						= '�������� �� ����������� ,����� �������� BB ���';
$lang['sig_show']						= '�������� WoW ��������� ��� ������ ������';


//Shirtshop
$lang['service']					    = '������';
$lang['shirt_ad1']					    = 'Go to the Shirt-shop. <br> get your own shirt now!';
$lang['shirt_ad2']					    = '�������� ������ ���������';
$lang['shirt_ad3']					    = '����������� ��� � �������� ������� ';
$lang['shirt_ad4']					    = 'W�hle eines der vorgefertigten Produkte aus, oder erstell Dir mit dem Creator ein komplett eigenes Shirt.<br>
										   Du kannst jedes Shirt nach Deinen Bed�rfnissen anpassen und jeden Schriftzug ver�ndern.<br>
										   Unter Motive findest alle zur Verf�gung stehenden Motive!';
$lang['error_iframe']					= "��� ������� �� ������������ Frames!";
$lang['new_window']						= '������� ������� � ����� ����';
$lang['your_name']						= '���� ���';
$lang['your_guild']						= '���� �������';
$lang['your_server']					= '��� ������';

//Last Raids
$lang['last_raids']					    = '��������� �����';

$lang['voice_error']				    = '����������� ���������� � ��������';

$lang['login_bridge_notice']		    = 'Login - CMS-Brigde is active. Use your CSM/Board Data to login.';

$lang['ads_remove']		    			= 'support EQdkp-Plus';
$lang['ads_header']	    				= 'Support EQDKP-Plus';
$lang['ads_text']		    			= 'EQDKP-Plus is a hobby-project which was mainly developed and is kept updated by two private persons. 
											At the beginning this wasn�t a problem but after three years of constant programming and updating, 
											the cost for this grows unfortunately over our heads. Only for the developer and the update-server we 
											have to spend 600� per year now and there are also another 1000� in costs for an attorney, since there are 
											some legal problems at this time. For the future we have also planned many more server-based features which will 
											result in another needed server. Costs for our new forum and the designer of our new homepage add to this. 
											All these named costs plus our more and more invested working time cannot be paid anymore by ourselves. 
											For this reason and not wanting the project to die you will now sparely see ad-banners in EQDKP-Plus. 
											These banners are very limited for content, so you will not see any pornographic banners or gold/item-selling vendors.

											You do have options to turn these banners off:
										  <ol>
										  <li> Log on to <a href="http://www.eqdkp-plus.com">www.eqdkp-plus.com</a> and donate any amount you want. 
										  		Please think about it, how much is EQDKP-Plus worth for you. 
										  		After a donation (Amazon or Paypal) you will get an eMail with a serial-key for the 
										  		respective major or major-version..<br><br></li>
										  <li> Log on to <a href="http://www.eqdkp-plus.com">www.eqdkp-plus.com</a> and donate any amount exceeding 50�. 
										  		You will earn premium status and get a livetime-premium-account, making you eligible for 
										  		free upgrades to new major-versions. </li><br><br>
										  <li> Log on to <a href="http://www.eqdkp-plus.com">www.eqdkp-plus.com</a> and donate any amount exceeding 100�. 
										  		You will earn gold status and get a livetime-premium-account, 
										  		making you eligible for free upgrades to new major-versions + free personal 
										  		support from the EQDKP-Plus developers.<br><br></li>										  
										  <li> All developers and translators ever contributed to EQDKP-Plus also get a free serial-key.<br><br></li>
										  <li> Deeply committed beta-testers also get a free serial-key. <br><br></li>
										  </ol>
										 All money generated with ad-banners and donations is solely spent to pay the costs coming up with the EQDKP-Plus project.
										 EQDKP-Plus is still a non-profit project! You dont have a Paypal or Amazon Account or have trouble with you key? Write me a <a href=mailto:corgan@eqdkp-plus.com>Email</a>.
										  ';


$lang['talents'] = array(
'Paladin'   => array('����','������','���������'),
'Rogue'     => array('��������','�����','��������'),
'Warrior'   => array('������','������','������'),
'Hunter'    => array('���������� ������','��������','���������'),
'Priest'    => array('����������','����','����'),
'Warlock'   => array('��������','�����������','����������'),
'Druid'     => array('������','�������','��������������'),
'Mage'      => array('�����','�����','�����'),
'Shaman'    => array('������','�����������','��������������'),
'Death Knight'   => array('Blood','Frost','Unholy')
);

$lang['portalmanager'] = 'Manage Portal Modules';

$lang['air_img_resize_warning'] = 'Click this bar to view the full image. The original is %1$sx%2$s.';

$lang['guild_shop'] = 'Shop';

// LibLoader Language String
$lang['libloader_notfound'] = 'The Library Loader Class is not available. Please check if the folder  "eqdkp/libraries/" is propperly uploaded!<br/> Download: <a href="https://sourceforge.net/project/showfiles.php?group_id=167016&package_id=301378">Libraries Download</a>';
$lang['libloader_tooold']   = "The Library '%1\$s' is outdated. You have to upload Version %2\$s or higher.<br/> Download: <a href='%3\$s' target='blank'>Libraries Download</a><br/>Please download, and overwrite the existing 'eqdkp/libraries/' folder with the one you downloaded!";

$lang['more_plugins']   = "For more Plugins visit <a href=http://www.eqdkp-plus.com/download.php>www.eqdkp-plus.com</a>.";
$lang['more_moduls']   = "For more Modules visit <a href=http://www.eqdkp-plus.com/download.php>www.eqdkp-plus.com</a>.";
$lang['more_template']   = "For more Style visit <a href=http://www.eqdkp-plus.com/download.php>www.eqdkp-plus.com</a>";

// jQuery
$lang['cl_bttn_ok']      = 'Ok';
$lang['cl_bttn_cancel']  = 'Cancel';

// Update Available
$lang['upd_available_head']    = 'System Updated available'; 
$lang['upd_available_txt']     = 'The System is not up to date. There are updates available.';
$lang['upd_available_link']    = 'Click to show updates.';

$lang['menu_roster'] = 'Roster';

$lang['lib_cache_notwriteable'] = 'The folder "eqdkp/data" is not writable. Please chmod 777!';

//Sticky news
$lang['sticky_news_prefix'] = 'Sticky:';
$lang['news_sticky'] = 'Make it sticky?';

// Libraries
$lang = array_merge($lang, array(
  'cl_shortlangtag'           => 'en',
    
  // Update Check
  'cl_update_box'             => 'New Version available',
  'cl_changelog_url'          => 'Changelog',
  'cl_timeformat'             => 'm/d/Y',
  'cl_noserver'               => 'An error occurred while trying to contact the update server, either your host does not allow outbound connections
                                  or the error was caused by a network problem.
                                  Please visit the eqdkp-plugin-forum to make sure you are running the latest plugin version.',
  'cl_update_available'       => "Please update the installed <i>%1\$s</i> Plugin.
                                  Your current version is <b>%2\$s</b> and the latest version is <b>%3\$s (Released at: %4\$s)</b>.<br/><br/>
                                  [release: %5\$s]%6\$s%7\$s",
  'cl_update_url'             => 'To the Download Page',

  // Plugin Updater
  'cl_update_box'             => 'Database update required',
  'cl_upd_wversion'           => "The actual Database ( Version %1\$s ) does not fit to the installed Plugin Version %2\$s.
                                  Please use the update button to perform the required updates automatically.",
  'cl_upd_woversion'          => 'A previous installation was found. The version Data is missing. 
                                  Please choose the previous installed version in the drop Down list, to perform all Database changes.',
  'cl_upd_bttn'               => 'Update Database',
  'cl_upd_no_file'            => 'Update file is missing',
  'cl_upd_glob_error'         => 'An error occured during the update process.',
  'cl_upd_ok'                 => 'The update of the Database was successful',
  'cl_upd_step'               => 'Step',
  'cl_upd_step_ok'            => 'Successfull',
  'cl_upd_step_false'         => 'Failed',
  'cl_upd_reload_txt'         => 'Settings are reloading, please wait...',
  'cl_upd_pls_choose'         => 'Please choose...',
  'cl_upd_prev_version'       => 'Previous Version',

  // HTML Class
  'cl_on'                     => 'On',
  'cl_off'                    => 'Off',
  
  // ReCaptcha Library
	'lib_captcha_head'					=> 'confirmation Code',
	'lib_captcha_insertword'		=> 'Enter the words written below',
	'lib_captcha_insertnumbers' => 'Enter the spoken Numbers',
	'lib_captcha_send'					=> 'Send confirmation Code',
));
#$lang['']    								  = '';
?>
