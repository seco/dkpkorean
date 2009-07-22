<?php
 /*
 * Project:     EQdkp CharManager 1
 * License:     Creative Commons - Attribution-Noncommercial-Share Alike 3.0 Unported
 * Link:		    http://creativecommons.org/licenses/by-nc-sa/3.0/
 * -----------------------------------------------------------------------
 * Began:       2006
 * Date:        $Date: 2008-11-17 13:25:33 +0100 (Mo, 17 Nov 2008) $
 * -----------------------------------------------------------------------
 * @author      $Author: wallenium $
 * @copyright   2005-2008 Simon (Wallenium) Wallmann
 * @link        http://eqdkp-plus.com
 * @package     charmanager
 * @version     $Rev: 3157 $
 * 
 * $Id: settings.php 3157 2008-11-17 12:25:33Z wallenium $
 */

// EQdkp required files/vars
define('EQDKP_INC', true);
define('IN_ADMIN', true);
define('PLUGIN', 'charmanager');
$eqdkp_root_path = './../../../';
include_once('../include/common.php');
// Check if plugin is installed
if (!$pm->check(PLUGIN_INSTALLED, 'charmanager')) { message_die('The Charmanager plugin is not installed.'); }

// Check user permission
$user->check_auth('a_charmanager_');

// Get the plugin
$raidplan = $pm->get_plugin('charmanager');

// init the db addition
$wpfccore->InitAdmin();
$ucupdater = new PluginUpdater('charmanager','uc_','charmanager_config', 'include');

// Save this shit
if ($_POST['issavebu']){
  // global config
    $savearray = array(
    	'uc_updtcheck_on'		=> $_POST['uc_updtcheck_on'],
			'uc_servername'			=> $_POST['uc_servername'],
			'uc_lockserver'			=> $_POST['uc_lockserver'],
			'uc_server_loc'			=> $_POST['uc_server_loc'],
			'uc_showarmlink'		=> $_POST['uc_showarmlink'],
			'uc_nowarcraft'			=> $_POST['uc_nowarcraft'],
			'uc_noresisave'			=> $_POST['uc_noresisave'],
			'uc_lphideresi'     => $_POST['uc_lphideresi'],
		);
		if ($wpfcdb->UpdateConfig($savearray, $wpfcdb->CheckDBFields('config_name'))){
      redirect('plugins/'.PLUGIN.'/admin/settings.php'.$SID.'&save=true');
    }else{
      $info = false;
    }
} 

$sql = 'SELECT * FROM ' . UC_CONFIG_TABLE;
$settings_result = $db->query($sql);
while($roww = $db->fetch_record($settings_result)) {
  $conf[$roww['config_name']] = $roww['config_value'];
}

// Update Check init

// reset the version (to force an update)
if($_GET['version'] == 'reset'){
	$ucupdater->DeleteVersionString();
	redirect('plugins/'.PLUGIN.'/admin/settings.php'.$SID);
}

$updchk_enbled  = ( $conf['uc_updtcheck_on'] == 1 ) ? true : false;
$cachedb        = array('table' => 'charmanager_config', 'data' => $conf['vc_data'], 'f_data' => 'vc_data', 'lastcheck' => $conf['vc_lastcheck'], 'f_lastcheck' => 'vc_lastcheck');
$versionthing   = array('name' => 'charmanager', 'inclpath' => 'include', 'version' => $pm->get_data('charmanager', 'version'), 'build' => $pm->plugins['charmanager']->build, 'vstatus' => $pm->plugins['charmanager']->vstatus,  'enabled' => $updchk_enbled);
$ucvcheck = new PluginUpdCheck($versionthing, $cachedb);
$ucvcheck->PerformUpdateCheck();
$ucserverloc = array(
										'eu'	=> 'EU',
										'us'	=> 'US',
										'ru'  => 'RU',
								);

// Output
$tpl->assign_vars(array(
      'F_CONFIG'        => 'settings.php' . $SID,
      'UPDATE_BOX'			=> $ucupdater->OutputHTML(),
    	'UPDCHECK_BOX'		=> $ucvcheck->OutputHTML(),
    	
    	// JS Code
    	'JS_SAVE_MSG'     => ($_GET['save']) ? $jquery->HumanMsg($user->lang['uc_setting_saved']) : '',
      'JS_UPDATEPROF'   => $jquery->Dialog_URL('UCCacheWindow',  $user->lang['uc_cache_update'], "upd_profiles.php?step=1", '450', '130', 'settings.php'),
    	
    	'DRPWN_SERVERLOC' => $khrml->DropDown('uc_server_loc', $ucserverloc, $conf['uc_server_loc'], '', '', 'input'),
      
      'U_IMPORT_DISBLD' => ($conf['uc_servername'] == '') ? true : false,
      
      'USE_UPDATECH'    => ( $conf['uc_updtcheck_on'] == 1 ) ? ' checked="checked"' : '',
      'LOCK_SERVERFLD'	=> ( $conf['uc_lockserver'] == 1 ) ? ' checked="checked"' : '',
      'SHOW_ARM_LINK'		=> ( $conf['uc_showarmlink'] == 1 ) ? ' checked="checked"' : '',
      'NO_WOW'					=> ( $conf['uc_nowarcraft'] == 1 ) ? ' checked="checked"' : '',
      'NO_RESISAVE'			=> ( $conf['uc_noresisave'] == 1 ) ? ' checked="checked"' : '',
      'LP_HIDERESI'			=> ( $conf['uc_lphideresi'] == 1 ) ? ' checked="checked"' : '',
      'SERVERNAME'      => $conf['uc_servername'],
      'LAST_UPDATED'		=> ($conf['uc_profileimported']) ? $user->lang['uc_last_updated'].': '.date($user->style['date_time'], $conf['uc_profileimported']) : $user->lang['uc_never_updated'],
      
      // Language
      'L_SUBMIT'        => $user->lang['submit'],
      'L_RESET'         => $user->lang['reset'],
      'L_GENERAL'       => $user->lang['uc_header_global'],
      'L_USE_UPDATECH'  => $user->lang['uc_enabl_updatecheck'],
      'L_SERVERNAME'    => $user->lang['uc_servername'],
      'L_LOCK_SERVER'		=> $user->lang['uc_lock_server'],
      'L_UPDATE_ALL'		=> $user->lang['uc_update_all'],
      'L_BTTN_UPDATE'		=> $user->lang['uc_bttn_update'],
      'L_SERVERLOC'			=> $user->lang['uc_server_loc'],
      'L_SHOW_ARMLINK'	=> $user->lang['uc_armory_link'],
      'L_NO_WOW'				=> $user->lang['uc_no_wow'],
      'L_NO_RESISAVE'		=> $user->lang['uc_no_resi_save'],
      'L_LP_HIDERESI'   => $user->lang['uc_lp_hideresis'],
      )
		);
    
    $eqdkp->set_vars(array(
	    'page_title'             => sprintf($user->lang['admin_title_prefix'], $eqdkp->config['guildtag'], $eqdkp->config['dkp_name']).': Settings',
			'template_path' 	       => $pm->get_data('charmanager', 'template_path'),
			'template_file'          => 'admin/settings.html',
			'display'                => true)
    );
