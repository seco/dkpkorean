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
 * $Id: french.php 2772 2008-10-04 17:26:15Z wallenium $
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
    'ucc_shortlangtag'                => 'fr',
    
    // Update Check
    'ucc_update_box'                  => 'New Version available',
    'ucc_changelog_url'								=> 'Changelog',
    'ucc_updated_date'								=> 'Released at',
    'ucc_timeformat'									=> 'm/d/Y',
    'ucc_release_level'               => 'release',
    'ucc_noserver'                    => 'An error occurred while trying to contact the update server, either your host does not allow outbound connections
                                          or the error was caused by a network problem.
                                          Please visit the eqdkp-plugin-forum to make sure you are running the latest plugin version.',
    'ucc_update_available_p0'         =>  'Please update the installed ',
    'ucc_update_available_p1'         =>  'Plugin.',
    'ucc_update_available_p2'         =>  'Your current version is',
    'ucc_update_available_p3'         =>  'and the latest version is',
    'ucc_update_url'                  =>  'To the Download Page',

    // Plugin Updater Class
    'puc_update_txt'                  =>  "%1\$s to %2\$s",
    'puc_update_box'                  =>  'Database update required',
    'puc_upd_txt1'                    =>  'The existing Database ( Version ',
    'puc_upd_txt2'                    =>  ' ) does not fit to the installed Plugin Version ',
    'puc_upd_txt3'                    =>  '. Please use the Update Button to update the Database automatically',
    'puc_upd_bttn'                    =>  'Update Database',
    'puc_upd_unknown'                 =>  '[unknown version]',
    'puc_upd_no_file'                 =>  'Update file is missing',
    'puc_upd_glob_error'              =>  'An error occured during the update process.',
    'puc_upd_ok'                      =>  'The update of the Database was successful',
    'puc_upd_step'                    =>  'Step',
    'puc_upd_step_ok'                 =>  'Successfull',
    'puc_upd_step_false'              =>  'Failed',
    'puc_upd_stp_unknwn'              =>  '[unknown]',

    // Plugin Update Warn Class
    'wpfc_perform_intro'						  => 'There might be still some database changes left to do. Click the solve button and see if database changes are left to do. Following plugin tables are out of date:',
    'wpfc_pluginneedupdate'						=> "%1\$s: (version of database: %2\$s -> installed version: %3\$s)",
    'wpfc_solve_dbissues'             => 'solve',
    'wpfc_unknown'                    => '[unknown]',
    
    // jQuery
    'wpfc_bttn_ok'                    => 'Ok',
    'wpfc_bttn_cancel'                => 'Cancel',

    'wpfc_on'                         => 'On',
    'wpfc_off'                        => 'Off',
));
?>
