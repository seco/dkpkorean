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
$lang['rb_import']							      = "Импорт";
$lang['rb_add']                       = "Добавить";
$lang['rb_edit']							        = "Редактировать";
$lang['rb_delete']							      = "Удалить";
$lang['rb_view']                      = "Показать";
$lang['rb_config']                    = "Настройки";
$lang['lang_couldnt_info']            = "Не получается получить информацию о предмете";
$lang['lang_couldnt_char']						= "Не получается получить информацию об участнике";
$lang['rb_close']                     = "Закрыть";

// User Menu
$lang['rb_usermenu_raidbanker']				= "Raid Banker";

// Admin Menu
$lang['rb_adminmenu_raidbanker']			= "Raid Banker";
$lang["rb_step1_pagetitle"]					  = "Raid Banker - Импорт лога";
$lang["rb_step1_th"]						      = "Вставить в Raid Banker лог ниже";
$lang["rb_step1_button_parselog"]			= "Синтаксический анализ лога";
$lang["rb_step2_pagetitle"]					  = "Raid Banker - Синтаксический анализ лога";
$lang["rb_edit_pagetitle"]					  = "Raid Banker - Редактировать банк";

// output
$lang['rb_Bank_Items']                = "Предметы банка";
$lang['rb_Banker']                    = "Все банкиры";
$lang['rb_all_Banker']                = "Все банкиры";
$lang['rb_not_avail']                 = "Не найдено";
$lang['rb_Item_Name']                 = "Предмет";
$lang['rb_Bank_Type']                 = "Тип";
$lang['rb_Bank_QTY']                  = "Количество";
$lang['rb_Bank_Quality']              = "Качество";
$lang['rb_Update']                    = "Последнее обновление";
$lang['rb_AllBankers']                = "Все банкиры";
$lang['rb_TotBankers']                = "Текущие запасы банка";
$lang['rb_mainchar_out']              = "Главный персонаж";
$lang['rb_note_out']                  = "Запись";

//import
$lang['Character_Data']               = "Данные персонажа";
$lang['lang_with']                    = "с";
$lang['lang_g']                       = "g";
$lang['lang_s']                       = "s";
$lang['lang_c']                       = "c";
$lang['lang_gold']                    = "Золото";
$lang['lang_silver']                  = "Серебро";
$lang['lang_copper']                  = "Медь";
$lang['lang_amount']                  = "Количество";
$lang['lang_name']                    = "Название";
$lang['lang_itemid']                  = "ID предмета";
$lang['lang_quality']                 = "Качество";
$lang['lang_skip']                    = "Пропуск";
$lang['lang_update_data']             = "Обновить дату банка";
$lang['lang_found_log']               = "Предметы найдены в логе";
$lang['lang_skipped_items']           = "<b>пропущен</b> предмет";
$lang['lang_cleared_data']            = "Чистка всей даты";
$lang['lang_added_data']              = "Добавить дату персонажа";
$lang['lang_adding_item']             = "Добавить предмет";
$lang['lang_deleting_item']           = "Удалить предмет";
$lang['rb_add_item']                  = "Добавить предмет";
$lang['rb_insert']                    = "Ввести дату предмета";
$lang['rb_insert_banker']             = "Ввести банкира";
$lang['rb_add_banker_l']              = "Добавить банкира";
$lang['rb_money_val']                 = "Стоимость: Деньги";
$lang['rb_dkp_val']                   = "Стоимость: DKP";
$lang['rb_mainchar']                  = "Имя главного персонажа";
$lang['rb_note']                      = "Заметка про данного банкира";

// Result page
$lang['rb_user_link']                 = "Назад на предыдущую страницу";
$lang['Lang_actions_performed']       = "Осуществленные действия";

// acl shit
$lang['rb_add_acl']                   = "Добавить соотношение предмета";
$lang['rb_acl_action']                = "Действие";
$lang['rb_ac_spent']                  = "Участник к банку";
$lang['rb_ac_got']                    = "Банк к участнику";
$lang['rb_item_name']                 = "Название предмета";
$lang['rb_acl_save']                  = "Сохранить соотношение предмета";
$lang['rb_list_acl']                  = "Список соотношений предмета из базы";
$lang['rb_char_name']                 = "Имя персонажа";
$lang['rb_id']                        = "ID";
$lang['rb_acl']                       = "Соотношение предмета";
$lang['rb_banker']                    = "Банкир";
$lang['rb_char_data']                 = "Данные персонажа";
$lang['itemcost_money']               = "Стоимость предмета (Деньги)";
$lang['itemcost_dkp']                 = "Стоимость предмета (DKP)";
$lang['rb_adjust_reason']             = "Получено от RaidBank";
$lang['rb_banker2charge']							= "Изменено с Banker";

// Log things
$lang['action_rbacl_added']           = "Соотношение предмета добавлено";
$lang['action_rbacl_del']             = "Соотношение предмета удалено";
$lang['action_rb_imported']           = "RaidBanker лог импортирован";
$lang['action_rbbank_del']            = "Банкир удален";

// Proprity
$lang['rb_priority']                  = "Приоритет";
$lang['rb_prio_4']                    = "Очень высокий";
$lang['rb_prio_3']                    = "Высокий";
$lang['rb_prio_2']                    = "Средний";
$lang['rb_prio_1']                    = "Малый";
$lang['rb_prio_0']                    = "нет";

//edit
$lang['admin_delete_bank_success']    = "Банкир успешно удален";

// configuration
$lang['rb_header_global']             = "Настройки RaidBanker";
$lang['rb_use_itemstats']             = "Использовать список предметов";
$lang['rb_hide_banker']               = "Скрыть остальных банкиров (после выбора)";
$lang['rb_hide_money']                = "Показать вклад банка";
$lang['rb_no_banker']                 = "Соединить всех банкиров в 1-го";
$lang['rb_is_cache']                  = "Кэш по списку предметов: если правильно, предметы будут загружены, кликните на @предмете.";
$lang['rb_is_path']                   = "Путь к списку предметов";
$lang['rb_saved']                     = "Настройки были успешно сохранены";
$lang['rb_failed']                    = "Настройки были не сохранены из-за ошибки";
$lang['rb_info_box']                  = "Информация";
$lang['rb_list_lang']                 = "Язык";
$lang['rb_locale_de']                 = "Немецкий";
$lang['rb_locale_en']                 = "Английский";
$lang['rb_locale_ru']                 = "Русский";
$lang['rb_locale_ch']                 = "Китайский";
$lang['rb_show_tooltip']              = "Скрыть советы и подсказки<br />(longer executon times!)";
$lang['rb_auto_adjust']               = "Автоматически изменить значение DKP на полученный предмет";
$lang['rb_is_oldstyle']								= "Схема старого стиля: Показать все предметы банкира(ов)";

//filter translations
$lang['rb_filter_banker']             = "Выбрать банкира";
$lang['rb_filter_type']               = "Выбрать тип предмета";
$lang['rb_filter_prio']               = "Выбрать приоритет";

// View Item PopUP
$lang['rb_char_got']                  = "Предмет был куплен";
$lang['rb_char_spent']                = "Предмет был продан";
$lang['rb_gold_value']                = "Цены в деньгах";
$lang['rb_dkp_value']                 = "Цены в DKP";
$lang['rb_total_amount']              = "Текущее количество";
$lang['rb_dkp']                       = "DKP";
$lang['rb_item_header']								= "Информация о предмете";

// About dialog
$lang['rb_created by']              = "Добавлено";
$lang['rb_contact_info']            = "Контактная информация";
$lang['rb_url_personal']            = "Лично";
$lang['rb_url_web']                 = "Веб-страница";
$lang['rb_sponsors']                = "Спонсоры";
$lang['rb_dialog_header']						= "О RaidBanker";
$lang['rb_additions']               = "Представление(Submissions)";
$lang['rb_loading']                 = "Загрузка";
?>
