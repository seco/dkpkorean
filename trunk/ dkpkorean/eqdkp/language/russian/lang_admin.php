<?php
/******************************
 * EQdkp
 * Copyright 2002-2003
 * Licensed under the GNU GPL.  See COPYING for full terms.
 * ------------------
 * lang_admin.php
 * Began: Fri January 3 2003
 *
 * $Id: lang_admin.php 1775 2008-03-23 01:46:36Z osr-corgan $
 *
 ******************************/

if ( !defined('EQDKP_INC') )
{
     die('� ��� ���� ���� ��� ������ �������� ����������.');
}

// %1\$<type> prevents a possible error in strings caused
//      by another language re-ordering the variables
// $s is a string, $d is an integer, $f is a float

// Titles
$lang['addadj_title']         = '��������/�������� ��������� ���������';
$lang['addevent_title']       = '��������/�������� �������';
$lang['addiadj_title']        = '��������/�������� �������������� ���������';
$lang['additem_title']        = '��������/�������� �������';
$lang['addmember_title']      = '����������/��������� ��������� �������';
$lang['addnews_title']        = '��������/�������� �������';
$lang['addraid_title']        = '��������/�������� ����';
$lang['addturnin_title']      = "�������� ��������� - ��� %1\$d";
$lang['admin_index_title']    = '����������������� EQDKP';
$lang['config_title']         = '���������� EQdkp';
$lang['manage_members_title'] = '���������� ����������� �������';
$lang['manage_users_title']   = '���������� �������������� � ������� �������';
$lang['parselog_title']       = '�������������� ������ ��� �����';
$lang['plugins_title']        = '���������� ���������';
$lang['styles_title']         = '���������� �������';
$lang['viewlogs_title']       = '�������� ����';

// Page Foot Counts
$lang['listusers_footcount']             = "... ������� %1\$d ������������ (��) / %2\$d �� ������ ��������";
$lang['manage_members_footcount']        = "... ������� %1\$d �������� (��)";
$lang['online_footcount']                = "... %1\$d ���������� � online";
$lang['viewlogs_footcount']              = "... ������� %1\$d ���� (��) / %2\$d �� ������ ��������";

// Submit Buttons
$lang['add_adjustment'] = '�������� ���������';
$lang['add_account'] = '�������� ������� ������';
$lang['add_event'] = '�������� �������';
$lang['add_item'] = '�������� �������';
$lang['add_member'] = '�������� ���������';
$lang['add_news'] = '�������� �������';
$lang['add_raid'] = '�������� ����';
$lang['add_style'] = '�������� �����';
$lang['add_turnin'] = '��������� �������� ���������';
$lang['delete_adjustment'] = '������� ���������';
$lang['delete_event'] = '������� �������';
$lang['delete_item'] = '������� �������';
$lang['delete_member'] = '������� ���������';
$lang['delete_news'] = '������� �������';
$lang['delete_raid'] = '������� ����';
$lang['delete_selected_members'] = '������� ���������� (��) ��������� (��)';
$lang['delete_style'] = '������� �����';
$lang['mass_delete'] = '�������� ��������';
$lang['mass_update'] = '����� �������';
$lang['parse_log'] = '�������������� ������ ����';
$lang['search_existing'] = '����� ����� �������������';
$lang['select'] = '�������';
$lang['transfer_history'] = '��������� ������ �������';
$lang['update_adjustment'] = '�������� ���������';
$lang['update_event'] = '�������� �������';
$lang['update_item'] = '�������� �������';
$lang['update_member'] = '�������� ���������';
$lang['update_news'] = '�������� �������';
$lang['update_raid'] = '�������� ����';
$lang['update_style'] = '�������� �����';

// Misc
$lang['account_enabled'] = '������� ������ �������������';
$lang['adjustment_value'] = '���������� ���������';
$lang['adjustment_value_note'] = '����� ���� �������������';
$lang['code'] = '���';
$lang['contact'] = '�������';
$lang['create'] = '�������';
$lang['found_members'] = "������ %1\$d �����, ������� d %2\$d �������������";
$lang['headline'] = '���������';
$lang['hide'] = '������?';
$lang['install'] = '����������';
$lang['item_search'] = '����� ��������';
$lang['list_prefix'] = '������ ���������';
$lang['list_suffix'] = '������ ���������';
$lang['logs'] = '����';
$lang['log_find_all'] = '����� ���(������� ��������� ����������)';
$lang['manage_members'] = '���������� �����������';
$lang['manage_plugins'] = '���������� ���������';
$lang['manage_users'] = '���������� ��������������';
$lang['mass_update_note'] = '����� ������� �� ��������� ��� ���� ����� �������������������� ������������� (���� �� ������ �� ��������) ������� "���������� ���� �������".
                             ����� ������� ��������� ��������� �������������, ������� "�������� ��������"';
$lang['members'] = '���������:';
$lang['member_rank'] = '���� ���������';
$lang['message_body'] = '����� ���������';
$lang['message_show_loot_raid'] = '�������� ������ �����(��):';
$lang['results'] = "%1\$d ���������� (\"%2\$s\")";
$lang['search'] = '�����';
$lang['search_members'] = '����� ����������';
$lang['should_be'] = '������ ����';
$lang['styles'] = '�����';
$lang['title'] = '���������';
$lang['uninstall'] = '�������';
$lang['enable']		= '��������';
$lang['update_date_to'] = "�������� ���� ��<br />%1\$s?";
$lang['version'] = '������';
$lang['x_members_s'] = "%1\$d ��������";
$lang['x_members_p'] = "%1\$d ����������";

// Permission Messages
$lang['noauth_a_event_add']    = '� ��� ��� ���� ��� ���������� �������';
$lang['noauth_a_event_upd']    = '� ��� ��� ���� ��� ���������� �������';
$lang['noauth_a_event_del']    = '� ��� ��� ���� ��� �������� �������';
$lang['noauth_a_groupadj_add'] = '� ��� ��� ���� ��� ���������� ��������� ���������';
$lang['noauth_a_groupadj_upd'] = '� ��� ��� ���� ��� ���������� ��������� ���������';
$lang['noauth_a_groupadj_del'] = '� ��� ��� ���� ��� �������� ��������� ���������';
$lang['noauth_a_indivadj_add'] = '� ��� ��� ���� ��� ���������� �������������� ���������';
$lang['noauth_a_indivadj_upd'] = '� ��� ��� ���� ��� ���������� �������������� ���������';
$lang['noauth_a_indivadj_del'] = '� ��� ��� ���� ��� �������� �������������� ���������';
$lang['noauth_a_item_add']     = '� ��� ��� ���� ��� ���������� ���������';
$lang['noauth_a_item_upd']     = '� ��� ��� ���� ��� ���������� ���������';
$lang['noauth_a_item_del']     = '� ��� ��� ���� ��� �������� ���������';
$lang['noauth_a_news_add']     = '� ��� ��� ���� ��� ���������� ��������';
$lang['noauth_a_news_upd']     = '� ��� ��� ���� ��� ���������� ��������';
$lang['noauth_a_news_del']     = '� ��� ��� ���� ��� �������� ��������';
$lang['noauth_a_raid_add']     = '� ��� ��� ���� ��� ���������� ������';
$lang['noauth_a_raid_upd']     = '� ��� ��� ���� ��� ���������� ������';
$lang['noauth_a_raid_del']     = '� ��� ��� ���� ��� �������� ������';
$lang['noauth_a_turnin_add']   = '� ��� ��� ���� ��� ���������� �������';
$lang['noauth_a_config_man']   = '� ��� ��� ���� ��� ���������� ����������� EQdkp';
$lang['noauth_a_members_man']  = '� ��� ��� ���� ��� ���������� ����������� �������';
$lang['noauth_a_plugins_man']  = '� ��� ��� ���� ��� ���������� ��������� EQdkp';
$lang['noauth_a_styles_man']   = '� ��� ��� ���� ��� ���������� ������� EQdkp';
$lang['noauth_a_users_man']    = '� ��� ��� ���� ��� ���������� ����������� ������� ������ ������������';
$lang['noauth_a_logs_view']    = '� ��� ��� ���� ��� ��������� ����� EQdkp';

// Submission Success Messages
$lang['admin_add_adj_success']               = "��������� %1\$s ���� ������� � %2\$.2f ���� ������ �������";
$lang['admin_add_admin_success']             = "�� ����� ����������� ����� %1\$s ���� ���������� ������ � ���������������� �����������";
$lang['admin_add_event_success']             = "�������� ���������� � %1\$s ��� �����, ������������ �� %2\$s, ���� ��������� � ���� ������ �������";
$lang['admin_add_iadj_success']              = "�������������� %1\$s ��������� ��������� %2\$.2f ��� %3\$s ���� ��������� � ���� ������ �������";
$lang['admin_add_item_success']              = "�������� �������� ��� %1\$s, ���������� %2\$s �� %3\$.2f ���� ��������� � ���� ������ �������";
$lang['admin_add_member_success']            = "%1\$s ��� �������� ��� �������� �������";
$lang['admin_add_news_success']              = '������� ���� ��������� � ���� ������ �������';
$lang['admin_add_raid_success']              = "���� %1\$d/%2\$d/%3\$d ����������� �� ������� %4\$s ��� �������� � ���� ������ �������";
$lang['admin_add_style_success']             = '����� ����� ��� ������� ��������';
$lang['admin_add_turnin_success']            = "������� '%1\$s' ��� ������� �� ��������� %2\$s � ��������� %3\$s.";
$lang['admin_delete_adj_success']            = "��������� %1\$s ��� %2\$.2f ���� ������� �� ���� ������ �������";
$lang['admin_delete_admins_success']         = "��������� �������������� ���� �������";
$lang['admin_delete_event_success']          = "��������� �������� %1\$s ��� �����, ������������ �� ������� %2\$s , ���� ������� �� ���� ������ �������";
$lang['admin_delete_iadj_success']           = "�������������� %1\$s ��������� �������� %2\$.2f ��� %3\$s ���� ������� �� ���� ������ �������";
$lang['admin_delete_item_success']           = "�������� �������� ��� %1\$s, ���������� %2\$s �� %3\$.2f ���� ������� �� ���� ������ �������";
$lang['admin_delete_members_success']        = "%1\$s, ������� ��� ������� ������������, ���(�) ������(�) �� ���� ������ �������";
$lang['admin_delete_news_success']           = '������� ���� ������� �� ���� ������ �������';
$lang['admin_delete_raid_success']           = '����, ������� ��� ��������, ��������� � ���, ��� ������ �� ���� ������ �������';
$lang['admin_delete_style_success']          = '����� ������ �������';
$lang['admin_delete_user_success']           = "������� ������ � ������ ������������ %1\$s ���� �������";
$lang['admin_set_perms_success']             = "��� ���������������� ���������� ���� ���������";
$lang['admin_transfer_history_success']      = "��� ������������ %1\$s ��� ������� ���� ���������� � %2\$s � ������������ %1\$s ��� ������ �� ���� ������ �������";
$lang['admin_update_account_success']        = "���� ��������� ������� ������ ���� ��������� � ���� ������";
$lang['admin_update_adj_success']            = "��������� %1\$s ��� %2\$.2f ���� ��������� � ���� ������ �������";
$lang['admin_update_event_success']          = "������� %2\$s �� ��������� � %1\$s ���� ��������� � ���� ������ �������";
$lang['admin_update_iadj_success']           = "�������������� %1\$s ��������� �������� %2\$.2f ��� %3\$s ���� ��������� � ���� ������ �������";
$lang['admin_update_item_success']           = "�������� �������� ��� %1\$s, ���������� %2\$s �� %3\$.2f ���� ��������� � ���� ������ �������";
$lang['admin_update_member_success']         = "�������� %1\$s ���(�) ��������(�)";
$lang['admin_update_news_success']           = '������� ���� ��������� � ���� ������ �������';
$lang['admin_update_raid_success']           = "���� %1\$d/%2\$d/%3\$d ����������� �� ������� %4\$s ��� �������� � ���� ������ �������";
$lang['admin_update_style_success']          = '����� ��� ������� ��������';

$lang['admin_raid_success_hideinactive']     = '���������� ������� ����������/������������ �������������';

// Delete Confirmation Texts
$lang['confirm_delete_adj']     = '�� �������, ��� ������ ������� ��� ��������� ���������?';
$lang['confirm_delete_admins']  = '�� �������, ��� ������ ������� ���������� ��������������?';
$lang['confirm_delete_event']   = '�� �������, ��� ������ ������� ��� �������?';
$lang['confirm_delete_iadj']    = '�� �������, ��� ������ ������� ��� �������������� ���������?';
$lang['confirm_delete_item']    = '�� �������, ��� ������ ������� ���� �������?';
$lang['confirm_delete_members'] = '�� �������, ��� ������ ������� ���������� ���������?';
$lang['confirm_delete_news']    = '�� �������, ��� ������ ������� ��������� �������?';
$lang['confirm_delete_raid']    = '�� �������, ��� ������ ������� ���� ����?';
$lang['confirm_delete_style']   = '�� �������, ��� ������ ������� ���� �����?';
$lang['confirm_delete_users']   = '�� �������, ��� ������ ������� ��������� ������� ������ ������������?';

// Log Actions
$lang['action_event_added']      = '������� ���������';
$lang['action_event_deleted']    = '������� �������';
$lang['action_event_updated']    = '������� ���������';
$lang['action_groupadj_added']   = '��������� ��������� ���������';
$lang['action_groupadj_deleted'] = '��������� ��������� �������';
$lang['action_groupadj_updated'] = '��������� ��������� ���������';
$lang['action_history_transfer'] = '������ �������� ������� ������������';
$lang['action_indivadj_added']   = '�������������� ��������� ���������';
$lang['action_indivadj_deleted'] = '�������������� ��������� �������';
$lang['action_indivadj_updated'] = '�������������� ��������� ���������';
$lang['action_item_added']       = '������� ��������';
$lang['action_item_deleted']     = '������� ������';
$lang['action_item_updated']     = '������� ��������';
$lang['action_member_added']     = '�������� ��������';
$lang['action_member_deleted']   = '�������� ������';
$lang['action_member_updated']   = '�������� ��������';
$lang['action_news_added']       = '������� ���������';
$lang['action_news_deleted']     = '������� �������';
$lang['action_news_updated']     = '������� ���������';
$lang['action_raid_added']       = '���� ��������';
$lang['action_raid_deleted']     = '���� ������';
$lang['action_raid_updated']     = '���� ��������';
$lang['action_turnin_added']     = '��������� �������� ��������';

// Before/After
$lang['adjustment_after']  = '��������� �����';
$lang['adjustment_before'] = '��������� ��';
$lang['attendees_after']   = '�������� �����';
$lang['attendees_before']  = '�������� ��';
$lang['buyers_after']      = '���������� �����';
$lang['buyers_before']     = '���������� ��';
$lang['class_after']       = '����� �����';
$lang['class_before']      = '����� ��';
$lang['earned_after']      = '���������� �����';
$lang['earned_before']     = '���������� ��';
$lang['event_after']       = '������� �����';
$lang['event_before']      = '������� ��';
$lang['headline_after']    = '��������� �����';
$lang['headline_before']   = '��������� ��';
$lang['level_after']       = '������� �����';
$lang['level_before']      = '������� ��';
$lang['members_after']     = '��������� �����';
$lang['members_before']    = '��������� ��';
$lang['message_after']     = '��������� �����';
$lang['message_before']    = '��������� ��';
$lang['name_after']        = '��� �����';
$lang['name_before']       = '��� ��';
$lang['note_after']        = '���������� �����';
$lang['note_before']       = '���������� ��';
$lang['race_after']        = '���� �����';
$lang['race_before']       = '���� ��';
$lang['raid_id_after']     = '�������� ID �����';
$lang['raid_id_before']    = '�������� ID ��';
$lang['reason_after']      = '������� �����';
$lang['reason_before']     = '������� ��';
$lang['spent_after']       = '��������� �����';
$lang['spent_before']      = '��������� ��';
$lang['value_after']       = '��������� �����';
$lang['value_before']      = '��������� ��';

// Configuration
$lang['general_settings'] = '����� ���������';
$lang['guildtag'] = '�������� �������';
$lang['guildtag_note'] = '������������ � ��������� ����������� �������';
$lang['parsetags'] = '�������� ������� ��� ������� �����';
$lang['parsetags_note'] = '��������� � ������ �������� ����� �������������� ��� ������� ����� ������';
$lang['domain_name'] = '�������� ������';
$lang['server_port'] = '���� �������';
$lang['server_port_note'] = '���� ������ ���-�������. ������ ��� 80';
$lang['script_path'] = '���� � �������';
$lang['script_path_note'] = '���� � ������������ EQdkp, ������������ ����� ������';
$lang['site_name'] = '�������� �����';
$lang['site_description'] = '�������� �����';
$lang['point_name'] = '�������� �������';
$lang['point_name_note'] = '������: DKP, RP, ��� � �.�.';
$lang['enable_account_activation'] = '�������� ��������� ������� �������';
$lang['none'] = '���';
$lang['admin'] = '�������������';
$lang['default_language'] = '���� �� ���������';
$lang['default_locale'] = '������ �� ���������';
$lang['default_game'] = '���� �� ���������';
$lang['default_game_warn'] = '��������� �������� ��������� ����� �������� ��������� ��������� � ������� ������';
$lang['default_style'] = '����� �� ���������';
$lang['default_page'] = '��������� �������� �� ���������';
$lang['hide_inactive'] = '������ ���������� ����������';
$lang['hide_inactive_note'] = '������ ����������, �� ������������� � ������ �������������� ������ ����?';
$lang['inactive_period'] = '������ ������������';
$lang['inactive_period_note'] = '���������� ����, � ������� ������� �������� �� ������� ����� ����� ���, ��� ���� ����������';
$lang['inactive_point_adj'] = 'DKP ����������';
$lang['inactive_point_adj_note'] = '�������� DKP ��� ���������� ����������';
$lang['active_point_adj'] = 'DKP ��������';
$lang['active_point_adj_note'] = '�������� DKP ��� �������� ����������';
$lang['enable_gzip'] = '�������� ������ Gzip';
$lang['show_item_stats'] = '�������� �������������� ���������';
$lang['show_item_stats_note'] = '�������� ����� �������������� ��������� � ���������. ����� ������ �� �������� �������� ��������� �������';
$lang['default_permissions'] = '����� �� ���������';
$lang['default_permissions_note'] = '����� ������� �� ��������� ��� ���� ����� ������������������ ������������� . ������, ���������� <b>������ �������</b>, �������� ������� �����������������,
                                     ������������ ������������� �� ���������� ������ ����� �� ���������. ������, ���������� <i>��������</i>, ������������ ������ ��� ��������. � ���������� �� ������ ���������� ����� ����������� ��� ������� ������������';
$lang['plugins'] = '�������';
$lang['no_plugins'] = '����� � ��������� (./plugins/) �����';
$lang['cookie_settings'] = '��������� Cookie';
$lang['cookie_domain'] = '����� Cookie';
$lang['cookie_name'] = '�������� Cookie';
$lang['cookie_path'] = '���� Cookie';
$lang['session_length'] = '����������������� ������ (� ��������)';
$lang['email_settings'] = '��������� E-Mail';
$lang['admin_email'] = '����� E-Mail ��������������';
$lang['backup_options'] = '����� ��������� �����';

// Admin Index
$lang['anonymous'] = '������';
$lang['database_size'] = '������ ���� ������';
$lang['eqdkp_started'] = '���� ������� EQdkp';
$lang['ip_address'] = 'IP-�����';
$lang['items_per_day'] = '��������� � ����';
$lang['last_update'] = '��������� ����������';
$lang['location'] = '���������������';
$lang['new_version_notice'] = "������ EQdkp %1\$s <a href=\"http://sourceforge.net/project/showfiles.php?group_id=69529\" target=\"_blank\">�������� ��� ����������</a>";
$lang['number_of_items'] = '���������� ���������';
$lang['number_of_logs'] = '���������� ������� � ����';
$lang['number_of_members'] = '���������� ���������� (�������� / ����������)';
$lang['number_of_raids'] = '���������� ������';
$lang['raids_per_day'] = '������ � ����';
$lang['statistics'] = '����������';
$lang['totals'] = '������';
$lang['version_update'] = '���������� ������';
$lang['who_online'] = '��� �������';

// Style Management
$lang['style_settings'] = '��������� �����';
$lang['style_name'] = '�������� �����';
$lang['template'] = '������';
$lang['element'] = '�������';
$lang['background_color'] = '���� ����';
$lang['fontface1'] = '��� ������ 1';
$lang['fontface1_note'] = '��� ������ �� ���������';
$lang['fontface2'] = '��� ������ 2';
$lang['fontface2_note'] = '��� ������ ��� ����� �����';
$lang['fontface3'] = '��� ������ 2';
$lang['fontface3_note'] = '� ������ ������ �� ������������';
$lang['fontsize1'] = '������ ������ 1';
$lang['fontsize1_note'] = '���������';
$lang['fontsize2'] = '������ ������ 2';
$lang['fontsize2_note'] = '�������';
$lang['fontsize3'] = '������ ������ 3';
$lang['fontsize3_note'] = '�������';
$lang['fontcolor1'] = '���� ������ 1';
$lang['fontcolor1_note'] = '���� �� ���������';
$lang['fontcolor2'] = '���� ������ 2';
$lang['fontcolor2_note'] = '����, ������������ �� ��������� ������� (����, ���������, ��������)';
$lang['fontcolor3'] = '���� ������ 2';
$lang['fontcolor3_note'] = '���� ������ ��� ����� �����';
$lang['fontcolor_neg'] = '������������� ���� ������';
$lang['fontcolor_neg_note'] = '���� ��� �������������/������ �����';
$lang['fontcolor_pos'] = '������������� ���� ������';
$lang['fontcolor_pos_note'] = '���� ��� �������������/������� �����';
$lang['body_link'] = 'Link ����';
$lang['body_link_style'] = 'Link �����';
$lang['body_hlink'] = 'Hover Link ����';
$lang['body_hlink_style'] = 'Hover Link �����';
$lang['header_link'] = '���� ������';
$lang['header_link_style'] = '����� ������';
$lang['header_hlink'] = '���� ������ ��� ���������';
$lang['header_hlink_style'] = '����� ������ ��� ���������';
$lang['tr_color1'] = '���� ���� ������� 1';
$lang['tr_color2'] = '���� ���� ������� 2';
$lang['th_color1'] = '���� ��������� �������';
$lang['table_border_width'] = '������ ����� �������';
$lang['table_border_color'] = '���� ����� �������';
$lang['table_border_style'] = '����� ����� �������';
$lang['input_color'] = '���� ���� ����� ��� �����';
$lang['input_border_width'] = '������ ����� ����� ��� �����';
$lang['input_border_color'] = '���� ����� ����� ��� �����';
$lang['input_border_style'] = '����� ����� ����� ��� �����';
$lang['style_configuration'] = '������������ ������';
$lang['style_date_note'] = '��� ����� ����/�������, ��������� ��������� ������������ � PHP <a href="http://www.php.net/manual/en/function.date.php" target="_blank">date()</a> �������';
$lang['attendees_columns'] = '������� ����������';
$lang['attendees_columns_note'] = '���������� �������� ������������ ��� ���������� ��� ��������� �����';
$lang['date_notime_long'] = '���� ��� ������� (�������)';
$lang['date_notime_short'] = '���� ��� ������� (��������)';
$lang['date_time'] = '���� �� ��������';
$lang['logo_path'] = '��� ����� ��������';

// Errors
$lang['error_invalid_adjustment'] = '���������� ��������� �� ���� �������������';
$lang['error_invalid_plugin']     = '���������� ������ �� ��� ������������';
$lang['error_invalid_style']      = '���������� ����� �� ��� ������������';

// Verbose log entry lines
$lang['new_actions']           = '��������� �������� �������������';
$lang['vlog_event_added']      = "%1\$s ������� ������� '%2\$s' ������� ��������� � %3\$.2f �����";
$lang['vlog_event_updated']    = "%1\$s ������� ������� '%2\$s'";
$lang['vlog_event_deleted']    = "%1\$s ������ ������� '%2\$s'";
$lang['vlog_groupadj_added']   = "%1\$s ������� ��������� ��������� � %2\$.2f �����";
$lang['vlog_groupadj_updated'] = "%1\$s ������� ��������� ��������� � %2\$.2f �����";
$lang['vlog_groupadj_deleted'] = "%1\$s ������ ��������� ��������� � %2\$.2f �����";
$lang['vlog_history_transfer'] = "%1\$s ������� ������� %2\$s � %3\$s.";
$lang['vlog_indivadj_added']   = "%1\$s ������� �������������� ��������� %2\$.2f ��� %3\$d ����������";
$lang['vlog_indivadj_updated'] = "%1\$s ������� �������������� ��������� %2\$.2f ��� %3\$s.";
$lang['vlog_indivadj_deleted'] = "%1\$s ������ �������������� ��������� %2\$.2f ��� %3\$s.";
$lang['vlog_item_added']       = "%1\$s ������� ������� '%2\$s' ���������� %3\$d ���������� �� %4\$.2f �����";
$lang['vlog_item_updated']     = "%1\$s ������� ������� '%2\$s' ���������� %3\$d ����������";
$lang['vlog_item_deleted']     = "%1\$s ������ ������� '%2\$s' ���������� %3\$d ����������";
$lang['vlog_member_added']     = "%1\$s ������� ��������� %2\$s.";
$lang['vlog_member_updated']   = "%1\$s ������� ��������� %2\$s.";
$lang['vlog_member_deleted']   = "%1\$s ������ ��������� %2\$s.";
$lang['vlog_news_added']       = "%1\$s ������� ������� '%2\$s'.";
$lang['vlog_news_updated']     = "%1\$s ������� ������� '%2\$s'.";
$lang['vlog_news_deleted']     = "%1\$s ������ ������� '%2\$s'.";
$lang['vlog_raid_added']       = "%1\$s ������� ���� �� '%2\$s'.";
$lang['vlog_raid_updated']     = "%1\$s ������� ���� �� '%2\$s'.";
$lang['vlog_raid_deleted']     = "%1\$s ������ ���� �� '%2\$s'.";
$lang['vlog_turnin_added']     = "%1\$s �������� �������� �������� '%4\$s' �� ��������� %2\$s � ��������� %3\$s";

// Location messages
$lang['adding_groupadj'] = '����������� ��������� ���������';
$lang['adding_indivadj'] = '����������� �������������� ���������';
$lang['adding_item'] = '����������� �������';
$lang['adding_news'] = '����������� �������';
$lang['adding_raid'] = '����������� ����';
$lang['adding_turnin'] = '���������� �������';
$lang['editing_groupadj'] = '������������� ��������� ���������';
$lang['editing_indivadj'] = '������������� �������������� ���������';
$lang['editing_item'] = '������������� �������';
$lang['editing_news'] = '������������� �������';
$lang['editing_raid'] = '������������� ����';
$lang['listing_events'] = '������ �������';
$lang['listing_groupadj'] = '������ ��������� ���������';
$lang['listing_indivadj'] = '������ �������������� ���������';
$lang['listing_itemhist'] = '������� ���������';
$lang['listing_itemvals'] = '��������� ���������';
$lang['listing_members'] = '������ ����������';
$lang['listing_raids'] = '������ ������';
$lang['managing_config'] = '���������� ������������� EQdkp';
$lang['managing_members'] = '���������� ����������� �������';
$lang['managing_plugins'] = '���������� ���������';
$lang['managing_styles'] = '���������� �������';
$lang['managing_users'] = '���������� �������� �������� �������������';
$lang['parsing_log'] = '�������������� ������ ����';
$lang['viewing_admin_index'] = '�������� ������� �����������';
$lang['viewing_event'] = '�������� �������';
$lang['viewing_item'] = '�������� ���������';
$lang['viewing_logs'] = '�������� �����';
$lang['viewing_member'] = '�������� ���������';
$lang['viewing_mysql_info'] = '�������� ���������� MySQL';
$lang['viewing_news'] = '�������� ��������';
$lang['viewing_raid'] = '�������� ������';
$lang['viewing_stats'] = '�������� ����������';
$lang['viewing_summary'] = '�������� ������';

// Help lines
$lang['b_help'] = '������ �����: [b]�����[/b] (alt+b)';
$lang['i_help'] = '����� ��������: [i]�����[/i] (alt+i)';
$lang['u_help'] = '������������ �����: [u]�����[/u] (alt+u)';
$lang['q_help'] = '����� ������: [quote]�����[/quote] (alt+q)';
$lang['c_help'] = '����� �� ������: [center]�����[/center] (alt+c)';
$lang['p_help'] = '�������� �����������: [img]http://url_�����������[/img] (alt+p)';
$lang['w_help'] = '�������� ������: [url]http://������[/url] ��� [url=http://������]����� ������[/url]  (alt+w)';
$lang['it_help'] = 'Insert Item: e.g. [item]Judgement Breastplate[/item] (shift+alt+t)';
$lang['ii_help'] = 'Insert ItemIcon: e.g. [itemicon]Judgement Breastplate[/itemicon] (shift+alt+o)';

// Manage Members Menu (yes, MMM)
$lang['add_member'] = '�������� ������ ���������';
$lang['list_edit_del_member'] = '������� ������, �������������, ������� ����������';
$lang['edit_ranks'] = '������������� �����';
$lang['transfer_history'] = '��������� ������� ������������';

// MySQL info
$lang['mysql'] = 'MySQL';
$lang['mysql_info'] = '���������� MySQL';
$lang['eqdkp_tables'] = '������� EQdkp';
$lang['table_name'] = '�������� �������';
$lang['rows'] = '������';
$lang['table_size'] = '������ �������';
$lang['index_size'] = '������ �������';
$lang['num_tables'] = "%d �������";

//Backup
$lang['backup'] = '��������� �����������';
$lang['backup_title'] = '�������� ��������� ����� ���� ������';
$lang['create_table'] = '�������� �������� \'CREATE TABLE\'?';
$lang['skip_nonessential'] = '������������ �������������� ����������?<br />�� ����� ��������� ����������� ����� ������� ������ eqdkp_sessions';
$lang['gzip_content'] = '������������ � GZIP?<br />���� ������� GZIP, ������� ������� �� ������ ����� �� � ������';
$lang['backup_database'] = '�������� ����� ���� ������';

// plus
$lang['in_database']  = '��������� � ���� ������';

//Log Users Actions
$lang['action_user_added']     = '������������ ��������';
$lang['action_user_deleted']   = '������������ ������';
$lang['action_user_updated']   = '������������ ��������';
$lang['vlog_user_added']     = "%1\$s ������� ������������ %2\$s.";
$lang['vlog_user_updated']   = "%1\$s ������� ������������ %2\$s.";
$lang['vlog_user_deleted']   = "%1\$s ������ ������������ %2\$s.";

//MultiDKP
$lang['action_multidkp_added']     = "MultiDKP Pool ��������";
$lang['action_multidkp_deleted']   = "MultiDKP Pool ������";
$lang['action_multidkp_updated']   = "MultiDKP Pool ��������";
$lang['action_multidkp_header']    = "MultiDKP";

$lang['vlog_multidkp_added']     = "%1\$s ������� MultiDKP Pool %2\$s";
$lang['vlog_multidkp_updated']   = "%1\$s ������� MultiDKP Pool %2\$s.";
$lang['vlog_multidkp_deleted']   = "%1\$s ������ MultiDKP Pool %2\$s.";

$lang['default_style_overwrite']   = "������ ����� ������������������ ������������ ���������� ����� �� ���������";

$lang['plugin_inst_sql_note'] = 'An SQL error during install does not necessary implies a broken plugin installation. Try using the plugin, if errors occur please de- and reinstall the plugin.';

?>
