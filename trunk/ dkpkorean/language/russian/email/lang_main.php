<?php
/******************************
 * EQdkp
 * Copyright 2002-2003
 * Licensed under the GNU GPL.  See COPYING for full terms.
 * ------------------
 * lang_main.php
 * begin: 19.05.2008 by AvengeR(ICQ: 340-956-443)
 *
 * $Id: lang_main.php 1844 2008-03-31 23:26:35Z osr-corgan $
 ******************************/

if ( !defined('EQDKP_INC') )
{
     die('��� ������� � ������ �������� ����������.');
}

// %1\$<type> prevents a possible error in strings caused
//      by another language re-ordering the variables
// $s is a string, $d is an integer, $f is a float

$lang['ENCODING'] = 'windows-1251';
$lang['XML_LANG'] = 'ru';

// Titles
$lang['admin_title_prefix']   = "%1\$s %2\$s �������������";
$lang['listadj_title']        = '������ ��������� ���������';
$lang['listevents_title']     = '��������� �������';
$lang['listiadj_title']       = '������ �������������� ���������';
$lang['listitems_title']      = '��������� ���������';
$lang['listnews_title']       = '�������';
$lang['listmembers_title']    = '�������� ���������� � DKP ����������';
$lang['listpurchased_title']  = '������� ���������';
$lang['listraids_title']      = '������ RAIDs';
$lang['login_title']          = '�����';
$lang['message_title']        = 'EQdkp: ���������';
$lang['register_title']       = '�����������';
$lang['settings_title']       = '��������� e������ ������';
$lang['stats_title']          = "%1\$s ����������";
$lang['summary_title']        = '����� �� ��������';
$lang['title_prefix']         = "%1\$s %2\$s";
$lang['viewevent_title']      = "�������� ������� RAID(��) %1\$s";
$lang['viewitem_title']       = "�������� ������� ������� %1\$s";
$lang['viewmember_title']     = "�������� ���������� �� ��������� %1\$s";
$lang['viewraid_title']       = '����� �� RAID';

// Main Menu
$lang['menu_admin_panel'] = '������ ��������������';
$lang['menu_events'] = '�������';
$lang['menu_itemhist'] = '������� ���������';
$lang['menu_itemval'] = '��������� ���������';
$lang['menu_news'] = '�������';
$lang['menu_raids'] = 'RAIDs';
$lang['menu_register'] = '�����������';
$lang['menu_settings'] = '������ ���������';
$lang['menu_standings'] = '����� ����������';
$lang['menu_stats'] = '����������';
$lang['menu_summary'] = '������';

// Column Headers
$lang['account'] = '������� ������';
$lang['action'] = '��������';
$lang['active'] = '�����������';
$lang['add'] = '��������';
$lang['added_by'] = '�������(�)';
$lang['adjustment'] = '���������';
$lang['administration'] = '�����������������';
$lang['administrative_options'] = '���������������� ���������';
$lang['admin_index'] = '������� �����������';
$lang['attendance_by_event'] = '��������� �������';
$lang['attended'] = '���������';
$lang['attendees'] = '����������';
$lang['average'] = '�������';
$lang['buyer'] = '����������';
$lang['buyers'] = '����������';
$lang['class'] = '�����';
$lang['armor'] = '�����';
$lang['type'] = '�����';
$lang['class_distribution'] = '������������� �� �������';
$lang['class_summary'] = "����� �� ������: %1\$s to %2\$s";
$lang['configuration'] = '����� ����������';
$lang['config_plus']	= 'PLUS ���������';
$lang['plus_vcheck']	= '��������� ����������';
$lang['current'] = '�������';
$lang['date'] = '����';
$lang['delete'] = '�������';
$lang['delete_confirmation'] = '������������� �� ��������';
$lang['dkp_value'] = "%1\$s ���������";
$lang['drops'] = '������';
$lang['earned'] = '����������';
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
$lang['group_adj'] = '��������� ���������.';
$lang['group_adjustments'] = '��������� ���������';
$lang['individual_adjustments'] = '�������������� ���������';
$lang['individual_adjustment_history'] = '������� �������������� ���������';
$lang['indiv_adj'] = '�������. ���.';
$lang['ip_address'] = 'IP-������';
$lang['item'] = '�������';
$lang['items'] = '��������';
$lang['item_purchase_history'] = '������� ������� ���������';
$lang['last'] = '���������';
$lang['lastloot'] = '��������� ������';
$lang['lastraid'] = '��������� RAID';
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
$lang['name'] = '��������';
$lang['news'] = '�������';
$lang['note'] = '����������';
$lang['online'] = '�������(Online)';
$lang['options'] = '���������';
$lang['paste_log'] = '�������� ��� ����';
$lang['percent'] = '�������';
$lang['permissions'] = '����� �������';
$lang['per_day'] = '�� ����';
$lang['per_raid'] = '�� RAID';
$lang['pct_earned_lost_to'] = '% ���������';
$lang['preferences'] = '���������';
$lang['purchase_history_for'] = "������� ������� ��� �������� %1\$s";
$lang['quote'] = '������';
$lang['race'] = '����';
$lang['raid'] = 'RAID';
$lang['raids'] = 'RAIDs';
$lang['raid_id'] = 'RAID ID';
$lang['raid_attendance_history'] = '������� ������� � RAID(��)';
$lang['raids_lifetime'] = "����������: (%1\$s - %2\$s)";
$lang['raids_x_days'] = "��������� %1\$d ����";
$lang['rank_distribution'] = '������������� �� ������';
$lang['recorded_raid_history'] = "������ ������� RAID�� ��� ������� %1\$s";
$lang['reason'] = '�������';
$lang['registration_information'] = '��������������� ����������';
$lang['result'] = '���������';
$lang['session_id'] = 'ID ������';
$lang['settings'] = '���������';
$lang['spent'] = '���������';
$lang['summary_dates'] = "����� �� RAID: %1\$s to %2\$s";
$lang['themes'] = '����';
$lang['time'] = '�����';
$lang['total'] = '�����';
$lang['total_earned'] = '����� ����������';
$lang['total_items'] = '����� ���������';
$lang['total_raids'] = '����� RAID�';
$lang['total_spent'] = '����� ���������';
$lang['transfer_member_history'] = '����������� ������� ���������';
$lang['turn_ins'] = '�������� ���������';
$lang['type'] = '���';
$lang['update'] = '����������';
$lang['updated_by'] = '�������(�)';
$lang['user'] = '������������';
$lang['username'] = '��� ������������';
$lang['value'] = '���������';
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
$lang['listraids_footcount']             = "... ������� %1\$d RAID(��) / %2\$d �� ��������";
$lang['stats_active_footcount']          = "... ������� %1\$d ��������(��) ��������(��) / %2\$s�������� ����</a>";
$lang['stats_footcount']                 = "... ������� %1\$d e���������";
$lang['viewevent_footcount']             = "... ������� %1\$d RAID(��)";
$lang['viewitem_footcount']              = "... ������� %1\$d �������(��)";
$lang['viewmember_adjustment_footcount'] = "... ������� %1\$d �������������� ���������";
$lang['viewmember_item_footcount']       = "... ������� %1\$d ��������� ��������� / %2\$d �� ��������";
$lang['viewmember_raid_footcount']       = "... ������� %1\$d ����������� RAID(��) / %2\$d �� ��������";
$lang['viewraid_attendees_footcount']    = "... ������� %1\$d ����������";
$lang['viewraid_drops_footcount']        = "... ������� %1\$d �������";

// Submit Buttons
$lang['close_window'] = '������� ����';
$lang['compare_members'] = '�������� ����������';
$lang['create_news_summary'] = '������� ����� �� ��������';
$lang['login'] = '����� ������ ������';
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
$lang['confirm_password_note'] = '������� �������� ��� ����� ������';
$lang['current_password'] = '������� ������';
$lang['current_password_note'] = '������� ���� ������� ������ ��� ��� ���������';
$lang['email'] = 'Email';
$lang['email_address'] = 'Email ������';
$lang['ending_date'] = '���� ���������';
$lang['from'] = '��';
$lang['guild_tag'] = '�������� �������';
$lang['language'] = '����';
$lang['new_password'] = '����� ������';
$lang['new_password_note'] = '������� ����� ������, ���� ������� �������� ��� ������� ������';
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
$lang['noauth_u_event_list'] = '� ��� ��� ���� ��� ������ �������.';
$lang['noauth_u_event_view'] = '� ��� ��� ���� ��� ��������� �������.';
$lang['noauth_u_item_list'] = '� ��� ��� ���� ��� ������ ���������.';
$lang['noauth_u_item_view'] = '� ��� ��� ���� ��� ��������� ���������.';
$lang['noauth_u_member_list'] = '� ��� ��� ���� ��� ��������� ��������� ����������.';
$lang['noauth_u_member_view'] = '� ��� ��� ���� ��� ��������� ������� ����������.';
$lang['noauth_u_raid_list'] = '� ��� ��� ���� ��� ������ RAIDs.';
$lang['noauth_u_raid_view'] = '� ��� ��� ���� ��� ��������� RAIDs.';

// Submission Success Messages
$lang['add_itemvote_success'] = '��� ����� �� �������� ������� ������������.';
$lang['update_itemvote_success'] = '��� ����� �� �������� ������� ��������.';
$lang['update_settings_success'] = '���� ��������� ������������ ������� ���������.';

// Form Validation Errors
$lang['fv_alpha_attendees'] = '����� ���������� � EverQuest ����� ��������� ������ ����� ��������.';
$lang['fv_already_registered_email'] = '���� ����� e-mail ��� ���������������.';
$lang['fv_already_registered_username'] = '��� ��� ������������ ��� ����������������.';
$lang['fv_difference_transfer'] = '������� ������� ������ ������������� ����� ����� ������� �����������.';
$lang['fv_difference_turnin'] = '������� ������ ������������� ����� ����� ������� �����������.';
$lang['fv_invalid_email'] = '����� e-mail �� ������������.';
$lang['fv_match_password'] = '���� ������ ������ ���� �����������.';
$lang['fv_member_associated']  = "%1\$s ��� ������������ � ������� ������� ������� ���������.";
$lang['fv_number'] = '������ ���� �����.';
$lang['fv_number_adjustment'] = '���� ���������� ��������� ������ ���� ������.';
$lang['fv_number_alimit'] = '���� ������� ��������� ������ ���� ������.';
$lang['fv_number_ilimit'] = '���� ������� ��������� ������ ���� ������.';
$lang['fv_number_inactivepd'] = '������ ������������ ������ ���� ������.';
$lang['fv_number_pilimit'] = '������ ��������� ��������� ������ ���� ������.';
$lang['fv_number_rlimit'] = '������ RAID�� ������ ���� ������.';
$lang['fv_number_value'] = '���� ��������� ������ ���� ������.';
$lang['fv_number_vote'] = '���� ����������� ������ ���� ������.';
$lang['fv_date'] = '����������� �������� ���������� ���� � ���������.';
$lang['fv_range_day'] = '���� ��� ������ ���� ������ ����� 1 � 31.';
$lang['fv_range_hour'] = '���� ���� ������ ���� ������ ����� 0 � 23.';
$lang['fv_range_minute'] = '���� ������ ������ ���� ������ ����� 0 � 59.';
$lang['fv_range_month'] = '���� ������ ������ ���� ����� 1 � 12.';
$lang['fv_range_second'] = '���� ������� ������ ���� ������ ����� 0 � 59.';
$lang['fv_range_year'] = '���� ���� ������ ��������� ����� �� ������ 1998.';
$lang['fv_required'] = '����������� ����';
$lang['fv_required_acro'] = '���� �������� ������� ����������.';
$lang['fv_required_adjustment'] = '���� ���������� ��������� ����������.';
$lang['fv_required_attendees'] = '�������� ���������� RAID�.';
$lang['fv_required_buyer'] = '�������� ����������.';
$lang['fv_required_buyers'] = '������ ���� ���������� ������ ���� ������.';
$lang['fv_required_email'] = '���� ������ e-mail ����������.';
$lang['fv_required_event_name'] = '�������� �������.';
$lang['fv_required_guildtag'] = '������� �������� �������.';
$lang['fv_required_headline'] = '������� ���������.';
$lang['fv_required_inactivepd'] = '���� ������� ���������� ���������� ��������, ������ ���� ������� �������� ������������.';
$lang['fv_required_item_name'] = '���� �������� �������� ������ ���� ��������� ��� ������ ������������ �������.';
$lang['fv_required_member'] = '������ ���� ������ ��������.';
$lang['fv_required_members'] = '������ ���� ������ ���� �� ���� ��������.';
$lang['fv_required_message'] = '�� ������� ���������.';
$lang['fv_required_name'] = '��������� ���� ��������.';
$lang['fv_required_password'] = '��������� ���� ������.';
$lang['fv_required_raidid'] = '�� ������ RAID.';
$lang['fv_required_user'] = '������� ��� ������������.';
$lang['fv_required_value'] = '������� ��������.';
$lang['fv_required_vote'] = '���������� �������������.';

// Miscellaneous
$lang['added'] = '���������';
$lang['additem_raidid_note'] = "������������ RAID� �� ��������� ��� ������ / %1\$s�������� ���</a>";
$lang['additem_raidid_showall_note'] = '�������� ��� RAIDs';
$lang['addraid_datetime_note'] = '���� �� �������� ��� �� �������������� ������, ���� � ����� ����� ���������� �������������.';
$lang['addraid_value_note'] = '��� ��������������� ������; ���� ���� �������� ������ ����� �������������� �������� �� ��������� ��� ����� �������';
$lang['add_items_from_raid'] = '�������� �������� � ����� RAID�';
$lang['deleted'] = '�������';
$lang['done'] = '������';
$lang['enter_new'] = '������ �����';
$lang['error'] = '������';
$lang['head_admin'] = '������� �������������';
$lang['hold_ctrl_note'] = '������� CTRL ����� ������� ��������� ����������';
$lang['list'] = '������';
$lang['list_groupadj'] = '������� ������ ��������� ���������';
$lang['list_events'] = '������� ������ �������';
$lang['list_indivadj'] = '������� ������ �������������� ���������';
$lang['list_items'] = '������� ������ ���������';
$lang['list_members'] = '������� ������ ����������';
$lang['list_news'] = '������� ������ ��������';
$lang['list_raids'] = '������� ������ RAID��';
$lang['may_be_negative_note'] = '����� ���� �������������';
$lang['not_available'] = '�� ��������';
$lang['no_news'] = '������ ������ �� �������.';
$lang['of_raids'] = "%1\$d%% RAID��";
$lang['or'] = '���';
$lang['powered_by'] = '��������������';
$lang['preview'] = '������������';
$lang['required_field_note'] = '��� ����, ���������� * (����������), ����������� ��� ����������.';
$lang['select_1ofx_members'] = "������� ������ �� %1\$d ����������...";
$lang['select_existing'] = '������� ��������������';
$lang['select_version'] = '�������� ������ EQdkp, ������� �� ������ ��������:';
$lang['success'] = '�������';
$lang['s_admin_note'] = '���������� ������� ������� �������� ������ ��� �������������.';
$lang['transfer_member_history_description'] = '��� ��������� ��� ������� ��������� (RAID�, ��������, ���������) � ������� ���������.';
$lang['updated'] = '���������';
$lang['upgrade_complete'] = '������� ���������� EQdkp ������� ��������.<br /><br /><b class="negative">������� ������ ���� � ����� ������������!</b>';

// Settings
$lang['account_settings'] = '��������� ������� ������';
$lang['adjustments_per_page'] = '�������, ������� �������� ��������� �� ��������';
$lang['basic'] = '��������';
$lang['events_per_page'] = '�������, ������� �������� ������� �� ��������';
$lang['items_per_page'] = '�������, ������� �������� ��������� �� ��������';
$lang['news_per_page'] = '�������, ������� �������� �������� �� ��������';
$lang['raids_per_page'] = '�������, ������� �������� RAID�� �� ��������';
$lang['associated_members'] = '���������� ������������';
$lang['guild_members'] = '��������� �������';
$lang['default_locale'] = '������ �� ���������';



// Error messages
$lang['error_account_inactive'] = '���� ������� ������ ���������.';
$lang['error_already_activated'] = '��� ������� ������ ��� ������������.';
$lang['error_invalid_email'] = '�������������� ����� e-mail �� ��� ������������.';
$lang['error_invalid_event_provided'] = '������������ id ������� �� ��� ������������.';
$lang['error_invalid_item_provided'] = '������������ id �������� �� ��� ������������.';
$lang['error_invalid_key'] = '�� ������������ ������������ ���� ���������.';
$lang['error_invalid_name_provided'] = '������������ ��� ��������� �� ���� �������������.';
$lang['error_invalid_news_provided'] = '������������ id ������� �� ��� ������������.';
$lang['error_invalid_raid_provided'] = '������������ id RAID� �� ��� ������������.';
$lang['error_user_not_found'] = '������������ ��� ������������ �� ���� �������������';
$lang['incorrect_password'] = '������������ ������';
$lang['invalid_login'] = '�� ������������ ������������ ��� ������������ ��� ������';
$lang['not_admin'] = '�� �� ��������� ���������������';

// Registration
$lang['account_activated_admin']   = '������� ������ ������������. ������ ������������� �� ���� ��������� ���������� �� email ������������.';
$lang['account_activated_user']    = "���� ������� ������ ������������ � ������ �� ������ %1\$s�����%2\$s.";
$lang['password_sent'] = '����� ������ � ����� ������� ������ ��������� �� ��� e-mail.';
$lang['register_activation_self']  = "���� ������� ������ �������, �� ����� ��� ��� � ������������ �� ������ ������������ �.<br /><br />E-mail ��������� �� ����� %1\$s � ����������� ��� ������������ ���� ������� ������.";
$lang['register_activation_admin'] = "���� ������� ������ �������, �� ����� ��� ��� � ������������ ������������� ������ ������������ �.<br /><br />E-mail ��������� �� ����� %1\$s � �������������� �����������.";
$lang['register_activation_none']  = "���� ������� ������ ������� � ������ �� ������ %1\$s�����%2\$s.<br /><br />E-mail ��������� �� ����� %3\$s � �������������� �����������.";

// lua
$lang['lua'] = "������ CT_RaidTracker";
$lang['lua_parse'] = "������ LUA";
$lang['import_lua_data'] = "������ ������ CT_RaidTracker";
$lang['lua_step1_pagetitel'] = "������ CT_Raidtracker";
$lang['lua_step1_th'] = "�������� ��� ����";
$lang['lua_step1_button_parselog'] = "�������������� ������ ����";
$lang['lua_step1_invalidstring_titel'] = "�������� ������ DKP";
$lang['lua_step1_invalidstring_msg'] = "������ DKP ��������� �������.";
$lang['lua_step1_button_parselog'] = "�������������� ������ ���";
$lang['lua_step2_pagetitel'] = "������ CT_Raidtracker";
$lang['lua_step2_foundraids'] = "������� RAID��";
$lang['lua_step2_dkpvaluetip'] = "���������/����������� ��������";
$lang['lua_step2_insertraids'] = "�������� RAID�";
$lang['lua_step2_raidsdropsdetails'] = "������ RAID�/����� ���������";
$lang['lua_step3_pagetitel'] = "������ CT_Raidtracker";
$lang['lua_step3_titel'] = "��� ��������<br>\n";
$lang['lua_step3_alreadyexist'] = "%s (%s, %s DKP) ��� ��� ��������, ��������� ���<br>\n";
$lang['lua_step3_raidadded'] = "%s (%s, %s DKP) ��������<br>\n";
$lang['lua_step3_memberadded'] = "%s (����: %s, �����: %s, �������: %s, ����: %s) ��� �������� � ����������<br>\n";
$lang['lua_step3_attendeesadded'] = "%s ���������� ���������<br>\n";
$lang['lua_step3_lootadded'] = "%s (%s DKP) ��� �������� � %s<br>\n";

//plus
$lang['news_submitter'] = '��������(�)';
$lang['news_submitat'] = '��';
$lang['droprate_loottable'] = "������� �������";
$lang['droprate_name'] = "�������� ��������";
$lang['droprate_count'] = "����";
$lang['droprate_drop'] = "���� ��������� %";

$lang['Points_header'] = "������� DKP";
$lang['Points_class'] = "�����:";
$lang['Points_Char'] = "���:";
$lang['Points_DKP'] = "DKP:";
$lang['Points_CHAR'] = "�������� �� ����������";

$lang['Itemsearch_link'] = "�������-�����";
$lang['Itemsearch_search'] = "����� ��������� :";
$lang['Itemsearch_searchby'] = "������(�) :";
$lang['Itemsearch_item'] = "������� ";
$lang['Itemsearch_buyer'] = "���������� ";
$lang['Itemsearch_raid'] = "RAID ";
$lang['Itemsearch_unique'] = "��������� ����� ���������� ��������� :";
$lang['Itemsearch_no'] = "��";
$lang['Itemsearch_yes'] = "���";

$lang['bosscount_player'] = "�����: ";
$lang['bosscount_raids'] = "RAIDs: ";
$lang['bosscount_items'] = "��������: ";
$lang['bosscount_dkptotal'] = "������� DKP: ";

//MultiDKP
$lang['Plus_menuentry'] 			= "EQDKP Plus";
$lang['Multi_entryheader'] 		= "MultiDKP - �������� Pool";
$lang['Multi_pageheader'] 		= "MultiDKP - �������� Pools";
$lang['Multi_events'] 				= "�������:";
$lang['Multi_eventname'] 				= "�������� �������";
$lang['Multi_discnottolong'] 	= "(��� ������) - this one should not be too long, the table will get large,. Choose p.e MC, BWL, AQ etc. !";
$lang['Multi_kontoname_short']= "��� ������� ������:";
$lang['Multi_discr'] 					= "�����:";
$lang['Multi_events'] 				= "������� � ���� Pool";


$lang['Multi_addkonto'] 			  = "������� MultiDKP Pool";
$lang['Multi_updatekonto'] 			= "������� Pool";
$lang['Multi_deletekonto'] 			= "������� Pool";
$lang['Multi_viewkonten']			  = "�������� MultiDKP Pools";
$lang['Multi_chooseevents']			= "������� �������";
$lang['multi_footcount'] 				= "... %1\$d DKP Pools / %2\$d �� ��������";
$lang['multi_error_invalid']    = "No Pools assigned....";

$lang['Multi_required_event']   = "�� ������ ������� at least one event!";
$lang['Multi_required_name']    = "�� ������ ������ ��������(���)!";
$lang['Multi_required_disc']    = "�� ������ ������ �����!";
$lang['Multi_admin_add_multi_success'] = "The Pool %1\$s ( %2\$s ) � ��������� %3\$s ��� �������� � ���� ������.";
$lang['Multi_admin_update_multi_success'] = "The Pool %1\$s ( %2\$s ) � ��������� %3\$s ��� ������ � ���� ������.";
$lang['Multi_admin_delete_success']           = "The Pool %1\$s ��� ����� �� ���� ������.";
$lang['Multi_confirm_delete']    = 'Are you really sure you want to delete that Pool?';


##########

$lang['Multi_total_cost']   										= '����� ����� ��� this ����� Pool';
$lang['Multi_Accs']    													= 'MultiDKP Pool';

//update

$lang['upd_eqdkp_status']    										= '�������� EQDKP ������';
$lang['upd_system_status']    									= '������ �������';
$lang['upd_template_status']    								= '������ �������';
$lang['upd_update_need']    										= '�������� ����������!';
$lang['upd_update_need_link']    								= '���������� ��� ��������� ����������';
$lang['upd_no_update']    											= '���������� �� ���������. ������� �������� ��������� ����������.';
$lang['upd_status']    													= '������';
$lang['upd_state_error']    										= '������';
$lang['upd_sql_string']    											= 'SQL �������';
$lang['upd_sql_status_done']    								= '�������(������)';
$lang['upd_sql_error']    											= '������';
$lang['upd_sql_footer']    											= 'SQL ������� ���������';
$lang['upd_sql_file_error']    									= '������: ��������� SQL ���� %1\$s �� ��� ������!';
$lang['upd_eqdkp_system_title']    							= '��������� EQDKP ������� �������';
$lang['upd_plus_version']    										= '������ EQDKP Plus';
$lang['upd_plus_feature']    										= '�������';
$lang['upd_plus_detail']    										= '������';
$lang['upd_update']    													= '��������';
$lang['upd_eqdkp_template_title']    						= '������ EQDKP �������';
$lang['upd_template_name']    									= '��� �������';
$lang['upd_template_state']    									= '������ �������';
$lang['upd_template_filestate']    							= '����� �������';
$lang['upd_link_install']    										= '��������';
$lang['upd_link_reinstall']    									= '����������';
$lang['upd_admin_need_update']    							= '������ ���� ������ ���� ����������. ������� �� up to date and needs to be updated.';
$lang['upd_admin_link_update']									= '�������� ���� ����� ������ ��������.';
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
$lang['updi_footcount']    								    = '������� �������';
$lang['updi_curl_bad']    								    = '��������� ������� PHP cURL �� �������. �������� ���������� ��������� �������� �� ���������. ���������� ��������� � ���������������.';
$lang['updi_curl_ok']    								    	= 'cURL ������.';
$lang['updi_fopen_bad']    								    = '��������� ������� PHP fopen �� �������. �������� ���������� ��������� �������� �� ���������. ���������� ��������� � ���������������.';
$lang['updi_fopen_ok']    								    = 'fopen ������.';
$lang['updi_nothing_found']						    		= '�������� �� �������';
$lang['updi_itemscount']  						    		= '����� ���� ���������:';
$lang['updi_baditemscount']						    		= '������ ����:';
$lang['updi_items']										    		= '�������� � ���� ������:';
$lang['updi_items_duplicate']					    		= '{� �������� ����������}';
$lang['updi_show_all']    								    = '������ ���� ��������� �� �����������';
$lang['updi_refresh_all']    								  = '������� ��� �������� � �������� ��.';
$lang['updi_refresh_bad']    								  = '�������� ������ ������������ ��������';
$lang['updi_refresh_raidbank']    						= '�������� �������� Raidbanker(�)';
$lang['updi_refresh_tradeskill']   						= '�������� �������� Tradeskill(�)';
$lang['updi_help_show_all']    								= '�������� ��� �������� � �� ������������. ������ ���������� ����� ���������. (�������������)';
$lang['updi_help_refresh_all']  							= '�������� ������� ��� ��������� � tries to refresh all items that are listed in EQDKP. WARNING: If you share your Itemcache with a forum, the items from the forum cannot be refreshed. Depending on your webservers speed and the availability of Allakhazam.com this action could take several minutes. Possibly your webserver settings forbid a successful execution. In this case please contact your administrator.';
$lang['updi_help_refresh_bad']    						= '������� ��� ������ �������� �� ���� � �������� ��.';
$lang['updi_help_refresh_raidbank']    				= 'Raidbanker ����������, ���������� ��������� uses the entered items of the banker.';
$lang['updi_help_refresh_Tradeskill']    			= '����� Tradeskill ����������, �������� �������� �� ����� ��������� � ���������� ���������.';

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
$lang['reset_infotext']  			= '��������������!!! �������� ���� ����� ���� ��������!!! �������� ��������� �����. ����������� ��������, ������� ������� � ����� ��������������.';
$lang['reset_type']    				= '��� ����';
$lang['reset_disc']    				= '��������';
$lang['reset_sec']    				= '����������';
$lang['reset_action']    			= '��������';

$lang['reset_news']					  = '�������';
$lang['reset_news_disc']		  = '������� ��� ������� �� ���� ������.';
$lang['reset_dkp'] 					  = 'DKP';
$lang['reset_dkp_disc']			  = '������� ��� RAID� � �������� �� ���� ������ � �������� ��� DKP ���� �� 0.';
$lang['reset_ALL']   					= '���';
$lang['reset_ALL_DISC']				= '������� ����� RAID, ������� �� ����������. ����� ������ �������. (�� ������� �������������).';

$lang['reset_confirm_text']	  = ' ������� ���� =>';
$lang['reset_confirm']			  = '�������';

// Armory Menu
$lang['lm_armorylink1']				= '���������';
$lang['lm_armorylink2']				= '�������';
$lang['lm_armorylink3']				= '�������';

$lang['updi_update_ready']			= '�������� ���� ������� ���������. �� ������ ������� <a href="#" onclick="javascript:parent.closeWindow()" >close</a> � ���� ����.';
$lang['updi_update_alternative']= '�������������� ����� ���������� ��� ���������� ��-�� ������� ��������.';
$lang['zero_sum']				= ' �� ���� ����������� DKP';

//Hybrid
$lang['Hybrid']				= '������';

$lang['Jump_to'] 				= '����������� ����� �� ';
$lang['News_vid_help'] 			= 'To embed videos just post the link to the video without [tags]. supported videosites: google video, youtube, myvideo, clipfish, sevenload, metacafe and streetfire. ';

$lang['SubmitNews'] 		   = '��������� �������';
$lang['SubmitNews_help'] 	   = '� ��� ���� ������� �������? ��������� ������� � ���������� �� ����� Eqdkp Plus ��������������.';

$lang['MM_User_Confirm']	   = '������� ���� ������� ������ ��������������? ���� �� ������ ����� ��������������, ��� ����� ���� ������ �������� � ���� ������';

$lang['beta_warning']	   	   = '��������!! ������ ������ EQDKP-Plus �������� Beta! �� ������������ ����������� ������������ ��������� ���������� ������. �������� <a href="http://www.eqdkp-plus.com" >www.eqdkp-plus.com</a> ��� �������� ����������!';

$lang['news_comment']        = '�����������';
$lang['news_comments']       = '�����������';

$lang['comments_no_comments']	   = 'No entries';
$lang['comments_comments_raid']	   = '�����������';
$lang['comments_write_comment']	   = '�������� �����������';
$lang['comments_send_comment']	   = '��������� �����������';
$lang['comments_save_wait']	   	   = '���������� ���������, ����������� �����������...';


$lang['news_nocomments'] 	 		    = '����������� ���������';
$lang['news_ext_message']  			  	= '����������� �������';
$lang['news_message'] 				  	= '����� ��������';
$lang['news_permissions']			  	= '����� ��� ���������';

$lang['news_permissions_text']			= '���������� ������� ���:';
$lang['news_permissions_guest']			= '������ ������';
$lang['news_permissions_member']		= '������ � ���������� (������ �������������� ����� ������)';
$lang['news_permissions_all']			= '����';
$lang['news_readmore'] 				  	= '�������� ������...';

$lang['recruitment_open']				= '�������������� �������';
$lang['recruitment_contact']			= '�������';

$lang['sig_conf']						= '�������� �� ����������� ,����� �������� BB ���';
$lang['sig_show']						= '�������� WoW ��������� ��� ������ ������';

//Next Raids
$lang['next_raids_signoff']				= 'Unsigned';
$lang['next_raids_signon']				= 'Signed';
$lang['next_raids_total']				= 'Gesamt';
$lang['next_raids_confirmed']			= 'Confirmed';
$lang['next_raids_missing']				= '���������';
$lang['next_raids_head']				= '��������� RAIDs';
$lang['next_raids_notsigned']			= 'Not Signed';

//Last items
$lang['last_items']					    = '��������� ��������';

$lang['service']					    = '������';
$lang['shirt_ad1']					    = 'Go to the Shirt-shop. <br> get your own shirt now!';
$lang['shirt_ad2']					    = '������� ������ ����������';
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
$lang['last_raids']					    = '��������� RAIDs';

$lang['voice_error']				    = '����������� ���������� � ��������.';



$lang['talents'] = array(
'Paladin'   => array('����','������','���������'),
'Rogue'     => array('��������','�����','��������'),
'Warrior'   => array('������ �� ������','������','������'),
'Hunter'    => array('������ ������','��������','���������'),
'Priest'    => array('����������','����','����'),
'Warlock'   => array('��������','�����������','�����������'),
'Druid'     => array('����������','�������','��������������'),
'Mage'      => array('�����','�����','�����'),
'Shaman'    => array('����������','��������','��������������')
);
?>
