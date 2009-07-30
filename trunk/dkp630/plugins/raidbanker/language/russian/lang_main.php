<?php
 /*
 * Project:     EQdkp RaidBanker
 * License:     Creative Commons - Attribution-Noncommercial-Share Alike 3.0 Unported
 * Link:		    http://creativecommons.org/licenses/by-nc-sa/3.0/
 * -----------------------------------------------------------------------
 * Began:       2005
 * Date:        $Date: 2008-10-24 20:07:13 +0200 (Fr, 24 Okt 2008) $
 * -----------------------------------------------------------------------
 * @author      $Author: wallenium $
 * @copyright   2005-2008 Simon (Wallenium) Wallmann
 * @link        http://eqdkp-plus.com
 * @package     raidbanker
 * @version     $Rev: 2878 $
 * 
 * $Id: listraids.php 2878 2008-10-24 18:07:13Z wallenium $
 */

// General Shit
$lang['raidbanker'] 						      = "Raid Banker";
$lang['raidbanker_title'] 			      = "Raid Banker";
$lang['rb_date_format']               = "%A, %d-%m-%Y, %H:%M";
$lang['rb_local_format']              = "ru_RU";
$lang['rb_short_desc']                = "Manage raid bankers";
$lang['rb_long_desc']                 = "Import of banker as logfiles, add banker by hand, item management and many more";

// Buttons
$lang['rb_import']							      = "������";
$lang['rb_add']                       = "��������";
$lang['rb_edit']							        = "�������������";
$lang['rb_delete']							      = "�������";
$lang['rb_view']                      = "��������";
$lang['rb_config']                    = "���������";
$lang['lang_couldnt_info']            = "�� ���������� �������� ���������� � ��������";
$lang['lang_couldnt_char']						= "�� ���������� �������� ���������� �� ���������";
$lang['rb_close']                     = "�������";

// User Menu
$lang['rb_usermenu_raidbanker']				= "Raid Banker";

// Admin Menu
$lang['rb_adminmenu_raidbanker']			= "Raid Banker";
$lang["rb_step1_pagetitle"]					  = "Raid Banker - ������ ����";
$lang["rb_step1_th"]						      = "�������� � Raid Banker ��� ����";
$lang["rb_step1_button_parselog"]			= "�������������� ������ ����";
$lang["rb_step2_pagetitle"]					  = "Raid Banker - �������������� ������ ����";
$lang["rb_edit_pagetitle"]					  = "Raid Banker - ������������� ����";

// output
$lang['rb_Bank_Items']                = "�������� �����";
$lang['rb_Banker']                    = "��� �������";
$lang['rb_all_Banker']                = "��� �������";
$lang['rb_not_avail']                 = "�� �������";
$lang['rb_Item_Name']                 = "�������";
$lang['rb_Bank_Type']                 = "���";
$lang['rb_Bank_QTY']                  = "����������";
$lang['rb_Bank_Quality']              = "��������";
$lang['rb_Update']                    = "��������� ����������";
$lang['rb_AllBankers']                = "��� �������";
$lang['rb_TotBankers']                = "������� ������ �����";
$lang['rb_mainchar_out']              = "������� ��������";
$lang['rb_note_out']                  = "������";

//import
$lang['Character_Data']               = "������ ���������";
$lang['lang_with']                    = "�";
$lang['lang_g']                       = "g";
$lang['lang_s']                       = "s";
$lang['lang_c']                       = "c";
$lang['lang_gold']                    = "������";
$lang['lang_silver']                  = "�������";
$lang['lang_copper']                  = "����";
$lang['lang_amount']                  = "����������";
$lang['lang_name']                    = "��������";
$lang['lang_itemid']                  = "ID ��������";
$lang['lang_quality']                 = "��������";
$lang['lang_skip']                    = "�������";
$lang['lang_update_data']             = "�������� ���� �����";
$lang['lang_found_log']               = "�������� ������� � ����";
$lang['lang_skipped_items']           = "<b>��������</b> �������";
$lang['lang_cleared_data']            = "������ ���� ����";
$lang['lang_added_data']              = "�������� ���� ���������";
$lang['lang_adding_item']             = "�������� �������";
$lang['lang_deleting_item']           = "������� �������";
$lang['rb_add_item']                  = "�������� �������";
$lang['rb_insert']                    = "������ ���� ��������";
$lang['rb_insert_banker']             = "������ �������";
$lang['rb_add_banker_l']              = "�������� �������";
$lang['rb_money_val']                 = "���������: ������";
$lang['rb_dkp_val']                   = "���������: DKP";
$lang['rb_mainchar']                  = "��� �������� ���������";
$lang['rb_note']                      = "������� ��� ������� �������";

// Result page
$lang['rb_user_link']                 = "����� �� ���������� ��������";
$lang['Lang_actions_performed']       = "�������������� ��������";

// acl shit
$lang['rb_add_acl']                   = "�������� ����������� ��������";
$lang['rb_acl_action']                = "��������";
$lang['rb_ac_spent']                  = "�������� � �����";
$lang['rb_ac_got']                    = "���� � ���������";
$lang['rb_item_name']                 = "�������� ��������";
$lang['rb_acl_save']                  = "��������� ����������� ��������";
$lang['rb_list_acl']                  = "������ ����������� �������� �� ����";
$lang['rb_char_name']                 = "��� ���������";
$lang['rb_id']                        = "ID";
$lang['rb_acl']                       = "����������� ��������";
$lang['rb_banker']                    = "������";
$lang['rb_char_data']                 = "������ ���������";
$lang['itemcost_money']               = "��������� �������� (������)";
$lang['itemcost_dkp']                 = "��������� �������� (DKP)";
$lang['rb_adjust_reason']             = "�������� �� RaidBank";
$lang['rb_banker2charge']							= "�������� � Banker";

// Log things
$lang['action_rbacl_added']           = "����������� �������� ���������";
$lang['action_rbacl_del']             = "����������� �������� �������";
$lang['action_rb_imported']           = "RaidBanker ��� ������������";
$lang['action_rbbank_del']            = "������ ������";

// Proprity
$lang['rb_priority']                  = "���������";
$lang['rb_prio_4']                    = "����� �������";
$lang['rb_prio_3']                    = "�������";
$lang['rb_prio_2']                    = "�������";
$lang['rb_prio_1']                    = "�����";
$lang['rb_prio_0']                    = "���";

//edit
$lang['admin_delete_bank_success']    = "������ ������� ������";

// configuration
$lang['rb_header_global']             = "��������� RaidBanker";
$lang['rb_use_itemstats']             = "������������ ������ ���������";
$lang['rb_hide_banker']               = "������ ��������� �������� (����� ������)";
$lang['rb_hide_money']                = "�������� ����� �����";
$lang['rb_no_banker']                 = "��������� ���� �������� � 1-��";
$lang['rb_is_cache']                  = "��� �� ������ ���������: ���� ���������, �������� ����� ���������, �������� �� @��������.";
$lang['rb_is_path']                   = "���� � ������ ���������";
$lang['rb_saved']                     = "��������� ���� ������� ���������";
$lang['rb_failed']                    = "��������� ���� �� ��������� ��-�� ������";
$lang['rb_info_box']                  = "����������";
$lang['rb_list_lang']                 = "����";
$lang['rb_locale_de']                 = "��������";
$lang['rb_locale_en']                 = "����������";
$lang['rb_locale_ru']                 = "�������";
$lang['rb_locale_ch']                 = "���������";
$lang['rb_show_tooltip']              = "������ ������ � ���������<br />(longer executon times!)";
$lang['rb_auto_adjust']               = "������������� �������� �������� DKP �� ���������� �������";
$lang['rb_is_oldstyle']								= "����� ������� �����: �������� ��� �������� �������(��)";

//filter translations
$lang['rb_filter_banker']             = "������� �������";
$lang['rb_filter_type']               = "������� ��� ��������";
$lang['rb_filter_prio']               = "������� ���������";

// View Item PopUP
$lang['rb_char_got']                  = "������� ��� ������";
$lang['rb_char_spent']                = "������� ��� ������";
$lang['rb_gold_value']                = "���� � �������";
$lang['rb_dkp_value']                 = "���� � DKP";
$lang['rb_total_amount']              = "������� ����������";
$lang['rb_dkp']                       = "DKP";
$lang['rb_item_header']								= "���������� � ��������";

// About dialog
$lang['rb_created by']              = "���������";
$lang['rb_contact_info']            = "���������� ����������";
$lang['rb_url_personal']            = "�����";
$lang['rb_url_web']                 = "���-��������";
$lang['rb_sponsors']                = "��������";
$lang['rb_dialog_header']						= "� RaidBanker";
$lang['rb_additions']               = "�������������(Submissions)";
$lang['rb_loading']                 = "��������";
?>
