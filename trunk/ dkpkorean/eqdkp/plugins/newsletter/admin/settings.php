<?php
 /*
 * Project:     EQdkp Newsletter
 * License:     Creative Commons - Attribution-Noncommercial-Share Alike 3.0 Unported
 * Link:		    http://creativecommons.org/licenses/by-nc-sa/3.0/
 * -----------------------------------------------------------------------
 * Began:       2007
 * Date:        $Date: 2008-07-29 14:08:09 +0200 (Di, 29 Jul 2008) $
 * -----------------------------------------------------------------------
 * @author      $Author: wallenium $
 * @copyright   2005-2008 Simon (Wallenium) Wallmann
 * @link        http://eqdkp-plus.com
 * @package     newsletter
 * @version     $Rev: 2455 $
 * 
 * $Id: versions.php 2455 2008-07-29 12:08:09Z wallenium $
 */

// EQdkp required files/vars
define('EQDKP_INC', true);
define('IN_ADMIN', true);
define('PLUGIN', 'newsletter');
$eqdkp_root_path = './../../../';
include_once('../include/common.php');

// the updater class thing
$wpfccore->InitAdmin();
$nlupdater = new PluginUpdater('newsletter','nl_','newsletter_config','include');

// Check if plugin is installed
if (!$pm->check(PLUGIN_INSTALLED, 'newsletter')) { message_die('The Newsletter plugin is not installed.'); }

// Check user permission
$user->check_auth('a_newsletter_');

// Get the plugin
$newsletter = $pm->get_plugin('newsletter');

// reset the version (to force an update)
if($_GET['version'] == 'reset'){
	$nlupdater->DeleteVersionString();
}

// Save this shit
if ($_POST['issavebu']){
  // global config
  	$savearray = array(
    	'nl_updatecheck' 	=> $_POST['nl_updatecheck'], 		# UpdateCheck?
    );
    
    if ($wpfcdb->UpdateConfig($savearray, $wpfcdb->CheckDBFields('config_name'))){
      redirect('plugins/'.PLUGIN.'/admin/settings.php'.$SID);
    }else{
      $info = false;
    }
} 

$sql = 'SELECT * FROM __newsletter_config';
if (!($settings_result = $db->query($sql))) { message_die('Could not obtain configuration data', '', __FILE__, __LINE__, $sql); }
while($roww = $db->fetch_record($settings_result)) {
  $conf[$roww['config_name']] = $roww['config_value'];
}
$db->free_result($settings_result);

// Update Check init
$updchk_enbled = ( $conf['nl_updatecheck'] == 1 ) ? true : false;
$cachedb        = array('table' => 'newsletter_config', 'data' => $conf['vc_data'], 'f_data' => 'vc_data', 'lastcheck' => $conf['vc_lastcheck'], 'f_lastcheck' => 'vc_lastcheck');
$versionthing   = array('name' => 'newsletter', 'version' => $pm->get_data('newsletter', 'version'), 'build' => $pm->plugins['newsletter']->build, 'vstatus' => $pm->plugins['newsletter']->vstatus, 'enabled' => $updchk_enbled);
$nlvcheck = new PluginUpdCheck($versionthing, $cachedb);
$nlvcheck->PerformUpdateCheck();
// End of Update Check init

// Output
$tpl->assign_vars(array(
      'F_CONFIG'        => 'settings.php' . $SID,
      
      //CSS
      'RP_TEMPLATEPATH' => $user->style['template_path'],
      'RPTEMPL_ADMIN'   => true,
      
      'DB_NL_VERSION'   => $conf['nl_inst_version'],
      'UPDATE_CHECK'    => ( $conf['nl_updatecheck'] == 1) ? ' checked="checked"' : '',

      // Javascript
      'JS_FORCE_UPD'    => $jquery->Dialog_Confirm('ForceUpdate', $user->lang['nl_force_update'], "window.location = 'settings.php?version=reset';"),
      
      // Buttons
      'L_SUBMIT'        => $user->lang['submit'],
      'L_RESET'         => $user->lang['reset'],
      
      //update box
      'UPDATE_BOX'			=> $nlupdater->OutputHTML(),
      'UPDCHECK_BOX'		=> $nlvcheck->OutputHTML(),
      
      'L_UPDATE_CHECK'	=> $user->lang['nl_updatecheck'],
      'L_FORCE_UPDATE'  => $user->lang['nl_force_update'],
      'L_DBVERSION'     => $user->lang['nl_dbversion'],
      
      )
		);
    
    $eqdkp->set_vars(array(
	    'page_title'             => $nlclass->GeneratePageTitle($user->lang['config']),
			'template_path' 	       => $pm->get_data('newsletter', 'template_path'),
			'template_file'          => 'admin/settings.html',
			'display'                => true)
    );
?>
