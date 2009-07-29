<?php
 /*
 * Project:     EQdkp RaidBanker
 * License:     Creative Commons - Attribution-Noncommercial-Share Alike 3.0 Unported
 * Link:		    http://creativecommons.org/licenses/by-nc-sa/3.0/
 * -----------------------------------------------------------------------
 * Began:       2005
 * Date:        $Date: 2008-11-06 13:53:08 +0100 (Do, 06 Nov 2008) $
 * -----------------------------------------------------------------------
 * @author      $Author: wallenium $
 * @copyright   2005-2008 Simon (Wallenium) Wallmann
 * @link        http://eqdkp-plus.com
 * @package     raidbanker
 * @version     $Rev: 3001 $
 * 
 * $Id: about.php 3001 2008-11-06 12:53:08Z wallenium $
 */

define('EQDKP_INC', true);
define('PLUGIN', 'raidbanker');
$eqdkp_root_path = '../../';
include_once('includes/common.php');

if (!$pm->check(PLUGIN_INSTALLED, 'raidbanker')) { message_die($user->lang['is_not_installed']); }

  // Build the data in arrays. Thats easier than editing the template file every time.
  $additions = array(
    'RaidBanker Logo'     => ' by Cattiebrie',
  );
        
  foreach ($additions as $key => $value){
    $tpl->assign_block_vars('addition_row', array(
        'KEY'    => $key,
        'VALUE' => $value,
      )
    );
  }

$tpl->assign_vars(array(
    'I_ITEM_NAME'               => 'rb_logo.png',
    
    'D_AUTHOR_NAME'             => $pm->plugins['raidbanker']->copyright,
    'D_AUTHOR_CITY'             => 'Germany',
    'D_WEB_URL'                 => 'eqdkp-plus.com',
    'L_CREATED_BY'              => $user->lang['rb_created by'],
    'L_CONTACT_INFO'            => $user->lang['rb_contact_info'],
    'L_URL_PERSONAL'            => $user->lang['rb_url_personal'],
    'L_URL_WEB'                 => $user->lang['rb_url_web'],
    'L_ADDITONS'                => $user->lang['rb_additions'],
    'L_TXT_DEVTEAM'							=> $user->lang['rp_created_devteam'],
    'L_TXT_DEVTEAM2'						=> $user->lang['rp_created_devteam2'],
    'L_DEVTEAM'									=> $user->lang['rp_copyright'],
    'L_VERSION'                 => $pm->get_data('raidbanker', 'version'),
    'L_BUILD'                   => $pm->plugins['raidbanker']->build,
    'L_STATUS'                  => $pm->plugins['raidbanker']->vstatus,
    'L_YEARR'										=> $stime->DoDate("%Y", $stime->DoTime()),
));


$eqdkp->set_vars(array(
	'page_title'    => GeneratePageTitle($user->lang['rb_credits']),
	'template_file' => 'about.html',
	'template_path' => $pm->get_data('raidplan', 'template_path'),
	'display'       => true)
);
?>
