<?php
 /*
 * Project:     EQdkp RaidBanker
 * License:     Creative Commons - Attribution-Noncommercial-Share Alike 3.0 Unported
 * Link:		    http://creativecommons.org/licenses/by-nc-sa/3.0/
 * -----------------------------------------------------------------------
 * Began:       2005
 * Date:        $Date: 2009-02-28 16:37:28 +0100 (Sa, 28 Feb 2009) $
 * -----------------------------------------------------------------------
 * @author      $Author: wallenium $
 * @copyright   2005-2008 Simon (Wallenium) Wallmann
 * @link        http://eqdkp-plus.com
 * @package     raidbanker
 * @version     $Rev: 4027 $
 * 
 * $Id: settings.php 4027 2009-02-28 15:37:28Z wallenium $
 */
 
// EQdkp required files/vars
global $table_prefix;
define('EQDKP_INC', true);
define('IN_ADMIN', true);
define('PLUGIN', 'raidbanker');
$eqdkp_root_path = './../../../';
include_once('../includes/common.php');

// Check if plugin is installed
if ( !$pm->check(PLUGIN_INSTALLED, 'raidbanker') )
{message_die('The Raid Banker plugin is not installed.');}

// Check user permission
$user->check_auth('a_raidbanker_config');
$rb = $pm->get_plugin('raidbanker');

// init the database
$wpfcdb = new AdditionalDB('raidbanker_config');
$wpfccore->InitAdmin();
$rbupdater = new PluginUpdater('raidbanker','rb_','raidbanker_config','includes');

// reset the version (to force an update)
if($_GET['version'] == 'reset'){
	$rbupdater->DeleteVersionString();
}

// Save this shit
if ($_POST['issavebu']){
  // global config
  $savearray = array(
    'rb_itemstats'      => $_POST['rb_itemstats'],          # Show ranks in raid planner?
		'rb_hide_banker'    => $_POST['rb_hide_banker'],        # Show only short ranks?
		'rb_no_bankers'     => $_POST['rb_no_bankers'],         # Email raids to all users
		'rb_is_cache'       => $_POST['rb_is_cache'],           # Should we use the roll-system?
		'rb_show_money'     => $_POST['rb_show_money'],         # Should we use the roll-system?
		'rb_list_lang'      => $_POST['rb_list_lang'],          # The itemlist language
		'rb_show_tooltip'   => $_POST['rb_show_tooltip'],       # The Tooltip
		'rb_oldstyle'       => $_POST['rb_oldstyle'],           # OldStyle
		'rb_auto_adjustment'=> $_POST['rb_auto_adjustment'],    # Auto Adjustment
		'rb_is_path'        => $_POST['rb_is_path'],            # Should we use the wildcard-system?
	);
		if ($wpfcdb->UpdateConfig($savearray, $wpfcdb->CheckDBFields('config_name'))){
      redirect('plugins/'.PLUGIN.'/admin/settings.php'.$SID);
    }else{
      $info = false;
    }
} 

// get the config
$sql = 'SELECT * FROM __raidbanker_config';
if (!($settings_result = $db->query($sql))) { message_die('Could not obtain configuration data', '', __FILE__, __LINE__, $sql); }
while($roww = $db->fetch_record($settings_result)) {
  $conf[$roww['config_name']] = $roww['config_value'];
}

// Update Check init
$updchk_enbled = ( $row['rb_updatecheck'] == 1 ) ? true : false;
$cachedb        = array('table' => 'raidbanker_config', 'data' => $conf['vc_data'], 'f_data' => 'vc_data', 'lastcheck' => $conf['vc_lastcheck'], 'f_lastcheck' => 'vc_lastcheck');
$versionthing   = array('name' => 'raidbanker', 'inclpath' => 'includes', 'version' => $pm->get_data('raidbanker', 'version'), 'build' => $pm->plugins['raidbanker']->build, 'vstatus' => $pm->plugins['raidbanker']->vstatus,  'enabled' => $updchk_enbled);
$rbvcheck = new PluginUpdCheck($versionthing, $cachedb);
$rbvcheck->PerformUpdateCheck();
// End of Update Check init

$langdropdwn = array(
										'german'  => $user->lang['rb_locale_de'],
										'english' => $user->lang['rb_locale_en'],
										'russian' => $user->lang['rb_locale_ru'],
										'chinese' => $user->lang['rb_locale_ch'],
);

// Output
$tpl->assign_vars(array(
			'UPDCHECK_BOX'		  => $rbvcheck->OutputHTML(),
			'UPDATE_BOX'			  => $rbupdater->OutputHTML(),

      'F_CONFIG'          => 'settings.php' . $SID,
      
      'USE_ITEMSTATS'     => $wpfcdb->isChecked($conf['rb_itemstats']),
      'HIDE_BANKER'       => $wpfcdb->isChecked($conf['rb_hide_banker']),
      'HIDE_MONEY'        => $wpfcdb->isChecked($conf['rb_show_money']),
      'NO_BANKER'         => $wpfcdb->isChecked($conf['rb_no_bankers']),
      'SHOW_TOOLTIP'      => $wpfcdb->isChecked($conf['rb_show_tooltip']),
      'AUTO_ADJUST'       => $wpfcdb->isChecked($conf['rb_auto_adjustment']),
      'OLDSTYLE_ON'				=> $wpfcdb->isChecked($conf['rb_oldstyle']),
      'IS_PATH'           => $conf['rb_is_path'],
      
      'U_INFO_BOX'        => ( $_POST['issavebu'] ) ? true : false,
      'U_SAVED_SUCC'      => ( $_POST['issavebu'] && $info == true ) ? true : false,
      'U_SAVED_NOT'       => ( $_POST['issavebu'] && $info == false ) ? true : false,
      'HIDE_ITEMSTATS'    => ($itemstats_plus) ? false : true,

      'DRDWN_LANGUAGE'		=> $khrml->DropDown('rb_list_lang', $langdropdwn, $conf['rb_list_lang']),
      
      // Language
      'L_SUBMIT'          => $user->lang['submit'],
      'L_RESET'           => $user->lang['reset'],
      'L_INFO_BOX'        => $user->lang['rb_info_box'],
      'L_SAVED_SUCC'      => $user->lang['rb_saved'],
      'L_UPDATED_SUCC'    => $user->lang['rb_failed'],
      'L_GENERAL'         => $user->lang['rb_header_global'],
      'L_USE_ITEMSTATS'   => $user->lang['rb_use_itemstats'],
      'L_HIDE_BANKER'     => $user->lang['rb_hide_banker'],
      'L_HIDE_MONEY'      => $user->lang['rb_hide_money'],
      'L_NO_BANKER'       => $user->lang['rb_no_banker'],
      'L_LIST_LANG'       => $user->lang['rb_list_lang'],
      'L_OLDSTYLE'     	  => $user->lang['rb_is_oldstyle'],
      'L_SHOW_TOOLTIP'    => $user->lang['rb_show_tooltip'],
      'L_AUTO_ADJUST'     => $user->lang['rb_auto_adjust'],
      'L_IS_PATH'         => $user->lang['rb_is_path'],
      )
		);
    
    $eqdkp->set_vars(array(
	    'page_title'             => sprintf($user->lang['admin_title_prefix'], $eqdkp->config['guildtag'], $eqdkp->config['dkp_name']).': Settings',
			'template_path' 	       => $pm->get_data('raidbanker', 'template_path'),
			'template_file'          => 'admin/settings.html',
			'display'                => true)
    );
?>
