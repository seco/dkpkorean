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
$lang['raidbanker'] 						      = "Raid 银行";
$lang['raidbanker_title'] 			      = "Raid 银行";
$lang['rb_date_format']               = "%A, %d-%m-%Y, %H:%M";
$lang['rb_local_format']              = "zh_CN";
$lang['rb_short_desc']                = "Manage raid bankers";
$lang['rb_long_desc']                 = "Import of banker as logfiles, add banker by hand, item management and many more";

// Buttons
$lang['rb_import']							      = "导入";
$lang['rb_add']                       = "添加";
$lang['rb_edit']							        = "编辑";
$lang['rb_delete']							      = "删除";
$lang['rb_view']                      = "查看";
$lang['rb_config']                    = "设置";
$lang['lang_couldnt_info']            = "无法获得物品信息";
$lang['lang_couldnt_char']						= "无法获得人物信息";
$lang['rb_close']                     = "关闭";

// User Menu
$lang['rb_usermenu_raidbanker']				= "Raid 银行";

// Admin Menu
$lang['rb_adminmenu_raidbanker']			= "Raid 银行";
$lang["rb_step1_pagetitle"]					  = "Raid 银行 - 导入日志";
$lang["rb_step1_th"]						      = "在下面粘贴 Raid 银行 日志";
$lang["rb_step1_button_parselog"]			= "处理日志";
$lang["rb_step2_pagetitle"]					  = "Raid 银行 - 已处理日志";
$lang["rb_edit_pagetitle"]					  = "Raid 银行 - 编辑银行";

// output
$lang['rb_Bank_Items']                = "已存物品";
$lang['rb_Banker']                    = "全部银行";
$lang['rb_all_Banker']                = "全部银行";
$lang['rb_not_avail']                 = "N/A";
$lang['rb_Item_Name']                 = "物品";
$lang['rb_Bank_Type']                 = "类型";
$lang['rb_Bank_QTY']                  = "Qty";
$lang['rb_Bank_Quality']              = "品质";
$lang['rb_Update']                    = "最后更新";
$lang['rb_AllBankers']                = "全部银行";
$lang['rb_TotBankers']                = "总银行持有";
$lang['rb_mainchar_out']              = "主人物";
$lang['rb_note_out']                  = "注释";

//import
$lang['Character_Data']               = "任务数据";
$lang['lang_with']                    = "和";
$lang['lang_g']                       = "金";
$lang['lang_s']                       = "银";
$lang['lang_c']                       = "铜";
$lang['lang_gold']                    = "金币";
$lang['lang_silver']                  = "银币";
$lang['lang_copper']                  = "铜币";
$lang['lang_amount']                  = "总计";
$lang['lang_name']                    = "名称";
$lang['lang_itemid']                  = "物品 ID";
$lang['lang_quality']                 = "品质";
$lang['lang_skip']                    = "跳过";
$lang['lang_update_data']             = "更新银行数据";
$lang['lang_found_log']               = "在日志中找到物品";
$lang['lang_skipped_items']           = "<b>已跳过</b> 物品";
$lang['lang_cleared_data']            = "已清除所有数据从";
$lang['lang_added_data']              = "已添加人物数据 for";
$lang['lang_adding_item']             = "正在添加物品";
$lang['lang_deleting_item']           = "正在删除物品";
$lang['rb_add_item']                  = "添加物品";
$lang['rb_insert']                    = "插入物品数据";
$lang['rb_insert_banker']             = "插入银行";
$lang['rb_add_banker_l']              = "添加银行";
$lang['rb_money_val']                 = "花费: 钱";
$lang['rb_dkp_val']                   = "花费: DKP";
$lang['rb_mainchar']                  = "主人物名";
$lang['rb_note']                      = "这个银行的注释";

// Result page
$lang['rb_user_link']                 = "回到上一页";
$lang['Lang_actions_performed']       = "已执行的操作";

// acl shit
$lang['rb_add_acl']                   = "添加物品联系";
$lang['rb_acl_action']                = "操作";
$lang['rb_ac_spent']                  = "玩家 到 银行";
$lang['rb_ac_got']                    = "银行 到 玩家";
$lang['rb_item_name']                 = "物品名称";
$lang['rb_acl_save']                  = "保存物品关系";
$lang['rb_list_acl']                  = "列表物品关系数据";
$lang['rb_char_name']                 = "角色名";
$lang['rb_id']                        = "ID";
$lang['rb_acl']                       = "物品关系";
$lang['rb_banker']                    = "银行";
$lang['rb_char_data']                 = "人物数据";
$lang['itemcost_money']               = "物品花费 (钱)";
$lang['itemcost_dkp']                 = "物品花费 (DKP)";
$lang['rb_adjust_reason']             = "从 Raid 银行收到";
$lang['rb_banker2charge']							= "从银行找零";

// Log things
$lang['action_rbacl_added']           = "物品关系已添加";
$lang['action_rbacl_del']             = "物品关系已删除";
$lang['action_rb_imported']           = "Raid 银行日志已导入";
$lang['action_rbbank_del']            = "银行已删除";

// Proprity
$lang['rb_priority']                  = "优先";
$lang['rb_prio_4']                    = "很高";
$lang['rb_prio_3']                    = "高";
$lang['rb_prio_2']                    = "中";
$lang['rb_prio_1']                    = "小";
$lang['rb_prio_0']                    = "无";

//edit
$lang['admin_delete_bank_success']    = "银行成功删除";

// configuration
$lang['rb_header_global']             = "Raid 银行设置";
$lang['rb_use_itemstats']             = "使用 Itemstats";
$lang['rb_hide_banker']               = "隐藏其它银行 (在选择一个之后)";
$lang['rb_hide_money']                = "显示银行持有";
$lang['rb_no_banker']                 = "合并全部银行到一个";
$lang['rb_is_cache']                  = "Itemstats 缓存: 如果真, 物品将在点击时被载入 @item.";
$lang['rb_is_path']                   = "Itemstats 路径";
$lang['rb_saved']                     = "设置已成功保存";
$lang['rb_failed']                    = "设置保存失败";
$lang['rb_info_box']                  = "信息";
$lang['rb_list_lang']                 = "物品语言";
$lang['rb_locale_de']                 = "德语";
$lang['rb_locale_en']                 = "英语";
$lang['rb_locale_ru']                 = "Ðóññêèé";
$lang['rb_locale_ch']                 = "Êèòàéñêèé";
$lang['rb_show_tooltip']              = "Show Information Tooltips<br />(longer executon times!)";
$lang['rb_auto_adjust']               = "Automatic DKP Adjustments on item-receive";
$lang['rb_is_oldstyle']								= "OldStyle Layout: Show every Banker's item (do not group by Item Name)";
  
//filter translations
$lang['rb_filter_banker']             = "选择银行";
$lang['rb_filter_type']               = "选择物品类型";
$lang['rb_filter_prio']               = "选择优先级";

// View Item PopUP
$lang['rb_char_got']                  = "物品被取出";
$lang['rb_char_spent']                = "物品捐献";
$lang['rb_gold_value']                = "花费钱";
$lang['rb_dkp_value']                 = "花费 DKP";
$lang['rb_total_amount']              = "总总计";
$lang['rb_dkp']                       = "DKP";
$lang['rb_item_header']								= "物品信息";

// About dialog
$lang['rb_created by']              = "创建者";
$lang['rb_contact_info']            = "联系信息";
$lang['rb_url_personal']            = "Privat";
$lang['rb_url_web']                 = "Web";
$lang['rb_sponsors']                = "贡献者";
$lang['rb_dialog_header']						= "关于 RaidBanker";
$lang['rb_additions']               = "Submissions";
$lang['rb_loading']                 = "载入中";
?>
