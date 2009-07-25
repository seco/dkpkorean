<?php
 /*
 * Project:     EQdkp Plugin WPFC Classes
 * License:     Creative Commons - Attribution-Noncommercial-Share Alike 3.0 Unported
 * Link:		    http://creativecommons.org/licenses/by-nc-sa/3.0/
 * -----------------------------------------------------------------------
 * Began:       2005
 * Date:        $Date: $
 * ----------------------------------------------------------------------- 
 * This Class is part of the "WalleniuMs Plugin (Developer) Framework Kit" WPFC. 
 * You can ask for permission and use this classes in your Plugins but not 
 * remove this Copyright  
 * -----------------------------------------------------------------------
 * @author      $Author: $
 * @copyright   2007-2008 Simon (Wallenium) Wallmann
 * @link        http://eqdkp-plus.com
 * @package     wpfc
 * @version     $Rev: $
 * 
 * $Id: raidplan_plugin_class.php 2453 2008-07-29 11:09:49Z wallenium $
 */

if ( !defined('EQDKP_INC') ){
    header('HTTP/1.0 404 Not Found');exit;
}

// Initialize the language array if it isn't already
if (empty($lang) || !is_array($lang)){
    $lang = array();
}

// %1\$<type> prevents a possible error in strings caused
//      by another language re-ordering the variables
// $s is a string, $d is an integer, $f is a float

$lang = array_merge($lang, array(
    'ucc_shortlangtag'                => 'ru',

    // Update Check
    'ucc_update_box'                  => 'Доступна новая версия',
    'ucc_changelog_url'								=> 'Changelog',
    'ucc_updated_date'								=> 'Вышло',
    'ucc_timeformat'									=> 'm/d/Y',
    'ucc_release_level'               => 'release',
    'ucc_noserver'                    => 'Произошла ошибка при попытке соединения с сервером обновления, ваш хост не позволяет экспортные подключения
 или ошибка была вызвана проблемой в глобальной сети. Пожалуйста, посетите  eqdkp-plugin-forum , чтобы убедиться, что у вас последняя версия плагина.',
    'ucc_update_available_p0'         =>  'Пожалуйста, установите обновление ',
    'ucc_update_available_p1'         =>  'Плагин.',
    'ucc_update_available_p2'         =>  'Текущая версия',
    'ucc_update_available_p3'         =>  'а последняя версия',
    'ucc_update_url'                  =>  'К странице загрузки',

    // Plugin Updater Class
    'puc_update_txt'                  =>  "%1\$s to %2\$s",
    'puc_update_box'                  =>  'База данных требует обновления',
    'puc_upd_txt1'                    =>  'Существующая база данных ( версия  ',
    'puc_upd_txt2'                    =>  ' ) Не соответствует установленной версии плагина ',
    'puc_upd_txt3'                    =>  '. Пожалуйста, нажмите на кнопку Обновить, чтобы обновить базу данных автоматически',
    'puc_upd_bttn'                    =>  'Обновить базу данных',
    'puc_upd_unknown'                 =>  '[неизвестная версия]',
    'puc_upd_no_file'                 =>  'Отсутствует файл обновления',
    'puc_upd_glob_error'              =>  'Неизвестная ошибка в процессе обновления.',
    'puc_upd_ok'                      =>  'Обновление базы данных было успешно завершено',
    'puc_upd_step'                    =>  'Шаг',
    'puc_upd_step_ok'                 =>  'Успешно',
    'puc_upd_step_false'              =>  'Не удалось',
    'puc_upd_stp_unknwn'              =>  '[Неизвестно]',

    // Plugin Update Warn Class
    'wpfc_perform_intro'						  => 'There might be still some database changes left to do. Click the solve button and see if database changes are left to do. Following plugin tables are out of date:',
    'wpfc_pluginneedupdate'						=> "%1\$s: (версия базы данных: %2\$s -> установленная версия: %3\$s)",
    'wpfc_solve_dbissues'             => 'Решить',
    'wpfc_unknown'                    => '[unknown]',

    // jQuery
    'wpfc_bttn_ok'                    => 'Ok',
    'wpfc_bttn_cancel'                => 'Отмена',

    'wpfc_on'                         => 'On',
    'wpfc_off'                        => 'Off',
));
?>
