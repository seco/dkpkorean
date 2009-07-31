<?php
/*
 * Project:     EQdkp Shoutbox
 * License:     Creative Commons - Attribution-Noncommercial-Share Alike 3.0 Unported
 * Link:        http://creativecommons.org/licenses/by-nc-sa/3.0/
 * -----------------------------------------------------------------------
 * Began:       2008
 * Date:        $Date: 2009-06-04 15:50:39 +0200 (Do, 04 Jun 2009) $
 * -----------------------------------------------------------------------
 * @author      $Author: Dallandros $
 * @copyright   2008 Aderyn
 * @link        http://eqdkp-plus.com
 * @package     shoutbox
 * @version     $Rev: 5028 $
 *
 * $Id: settings.php 5028 2009-06-04 13:50:39Z Dallandros $
 */

// EQdkp required files/vars
define('EQDKP_INC', true);
define('IN_ADMIN', true);
define('PLUGIN', 'shoutbox');

$eqdkp_root_path = './../../../';
include_once('./../includes/common.php');


// -- Check user permission ---------------------------------------------------
$user->check_auth('a_shoutbox_');


// -- Plugin installed? -------------------------------------------------------
if (!$pm->check(PLUGIN_INSTALLED, 'shoutbox'))
{
  message_die($user->lang['sb_plugin_not_installed']);
}


// -- Init WPFC ---------------------------------------------------------------
$wpfccore->InitAdmin();
$wpfcdb = new AdditionalDB('shoutbox_config');
$sbupdater = new PluginUpdater('shoutbox','sb_','shoutbox_config','includes');


// -- reset the version? (to force an update) ---------------------------------
if ($in->get('version') == 'reset')
{
  $sbupdater->DeleteVersionString();
  redirect('plugins/shoutbox/admin/settings.php'.$SID);
}


// -- save? -------------------------------------------------------------------
if ($in->get('save_settings'))
{
  // take over new values
  $savearray = array(
      'sb_updatecheck'  =>  $in->get('sb_updatecheck', 0),
  );

  // update configuration
  if ($wpfcdb->UpdateConfig($savearray, $wpfcdb->CheckDBFields('config_name')))
  {
    redirect('plugins/shoutbox/admin/settings.php'.$SID.'&save=true');
  }
}


// -- read config values ------------------------------------------------------
$sql = 'SELECT * FROM `__shoutbox_config`';
if ($config_result = $db->query($sql))
{
  while($rowc = $db->fetch_record($config_result))
  {
    $sb_conf[$rowc['config_name']] = $rowc['config_value'];
  }
  $db->free_result($config_result);
}


// -- update check ------------------------------------------------------------
$updchk_enbled = ($sb_conf['sb_updatecheck'] == 1) ? true : false;
$cachedb       = array('table' => 'shoutbox_config', 'data' => $sb_conf['vc_data'], 'f_data' => 'vc_data', 'lastcheck' => $sb_conf['vc_lastcheck'], 'f_lastcheck' => 'vc_lastcheck');
$versionthing  = array('name' => 'shoutbox', 'inclpath' => 'includes', 'version' => $pm->get_data('shoutbox', 'version'), 'build' => $pm->plugins['shoutbox']->build, 'enabled' => $updchk_enbled);
$sbvcheck = new PluginUpdCheck($versionthing, $cachedb);
$sbvcheck->PerformUpdateCheck();


// ----------------------------------------------------------------------------
// Saved message
if ($in->get('save'))
{
  System_Message($user->lang['sb_config_saved'], '', 'green');
}


// -- Template ----------------------------------------------------------------
$tpl->assign_vars(array (
  // form
  'F_CONFIG'          => 'settings.php'.$SID,

  // Language
  'L_SUBMIT'          => $user->lang['submit'],
  'L_GENERAL'         => $user->lang['sb_header_general'],
  'L_UPDATE_CHECK'    => $user->lang['sb_updatecheck'],

  // Settings
  'UPDATE_CHECK'      => $wpfcdb->isChecked($sb_conf['sb_updatecheck']),

  // update box
  'UPDATE_BOX'        => $sbupdater->OutputHTML(),
  'UPDCHECK_BOX'      => $sbvcheck->OutputHTML(),

  // credits
  'JS_ABOUT'          => $jquery->Dialog_URL('About', $user->lang['sb_about_header'], '../about.php', '400', '230'),
  'SB_INFO_IMG'       => '../images/credits/info.png',
  'L_CREDITS'         => $user->lang['sb_credits_part1'].$pm->get_data('shoutbox', 'version').$user->lang['sb_credits_part2'],
));


// -- EQDKP -------------------------------------------------------------------
$eqdkp->set_vars(array (
  'page_title'    => sprintf($user->lang['admin_title_prefix'], $eqdkp->config['guildtag'], $eqdkp->config['dkp_name']).': '.$user->lang['shoutbox'],
  'template_path' => $pm->get_data('shoutbox', 'template_path'),
  'template_file' => 'admin/settings.html',
  'display'       => true
  )
);

?>
