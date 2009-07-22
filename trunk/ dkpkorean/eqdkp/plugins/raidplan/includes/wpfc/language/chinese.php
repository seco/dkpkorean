<?php
 /*
 * Project:     EQdkp Plugin WPFC Classes
 * License:     Creative Commons - Attribution-Noncommercial-Share Alike 3.0 Unported
 * Link:		    http://creativecommons.org/licenses/by-nc-sa/3.0/
 * -----------------------------------------------------------------------
 * Began:       2005
 * Date:        $Date: 2008-10-04 19:26:15 +0200 (Sa, 04 Okt 2008) $
 * ----------------------------------------------------------------------- 
 * This Class is part of the "WalleniuMs Plugin (Developer) Framework Kit" WPFC. 
 * You can ask for permission and use this classes in your Plugins but not 
 * remove this Copyright  
 * -----------------------------------------------------------------------
 * @author      $Author: wallenium $
 * @copyright   2007-2008 Simon (Wallenium) Wallmann
 * @link        http://eqdkp-plus.com
 * @package     wpfc
 * @version     $Rev: 2772 $
 * 
 * $Id: chinese.php 2772 2008-10-04 17:26:15Z wallenium $

 * Chinese Simplified translated by 雪夜之狼@羽月 CN3
 * Email:xionglingfeng@Gmail.com
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
    'ucc_shortlangtag'                => 'zh-CN',
    
    // Update Check
    'ucc_update_box'                  => '新版本可用',
    'ucc_changelog_url'								=> '更改日志',
    'ucc_updated_date'								=> '发行在',
    'ucc_timeformat'									=> '月/日/年',
    'ucc_release_level'               => '发行',
    'ucc_noserver'                    => '在尝试连接到更新服务器的时候发生了一个错误，可能是你的主机不允许出站连接
                                          或错误是因为网络问题。
                                          请访问 eqdkp 插件论坛确认你在运行最新版本的插件。',
    'ucc_update_available_p0'         =>  '请更新已安装的程序。',
    'ucc_update_available_p1'         =>  '插件.',
    'ucc_update_available_p2'         =>  '你的当前版本是',
    'ucc_update_available_p3'         =>  '并且最新版本是',
    'ucc_update_url'                  =>  '到下载页面',

    // Plugin Updater Class
    'puc_update_txt'                  =>  "%1\$s 到 %2\$s",
    'puc_update_box'                  =>  '需要数据库更新',
    'puc_upd_txt1'                    =>  '已存在的数据库 ( 版本 ',
    'puc_upd_txt2'                    =>  ' ) 不符合已安装的插件版本 ',
    'puc_upd_txt3'                    =>  '。 请使用更新按钮自动更新数据库',
    'puc_upd_bttn'                    =>  '数据库更新',
    'puc_upd_unknown'                 =>  '[未知版本]',
    'puc_upd_no_file'                 =>  '更新文件丢失',
    'puc_upd_glob_error'              =>  '更新过程中发生了一个错误。',
    'puc_upd_ok'                      =>  '数据库更新成功',
    'puc_upd_step'                    =>  '步',
    'puc_upd_step_ok'                 =>  '成功',
    'puc_upd_step_false'              =>  '失败',
    'puc_upd_stp_unknwn'              =>  '[未知]',

    // Plugin Update Warn Class
    'wpfc_perform_intro'						  => 'There might be still some database changes left to do. Click the solve button and see if database changes are left to do. Following plugin tables are out of date:',
    'wpfc_pluginneedupdate'						=> "%1\$s: (数据库版本: %2\$s -> 已安装版本: %3\$s)",
    'wpfc_solve_dbissues'             => '解决',
    
    // jQuery
    'wpfc_bttn_ok'                    => '好',
    'wpfc_bttn_cancel'                => '取消',

    'wpfc_on'                         => 'On',
    'wpfc_off'                        => 'Off',
));
?>
