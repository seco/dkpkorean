<?php
 /*
 * Project:     EQdkp ItemSpecials
 * License:     Creative Commons - Attribution-Noncommercial-Share Alike 3.0 Unported
 * Link:		    http://creativecommons.org/licenses/by-nc-sa/3.0/
 * -----------------------------------------------------------------------
 * Began:       2006
 * Date:        $Date: 2008-12-21 12:55:54 +0100 (So, 21 Dez 2008) $
 * -----------------------------------------------------------------------
 * @author      $Author: wallenium $
 * @copyright   2005-2008 Simon (Wallenium) Wallmann
 * @link        http://eqdkp-plus.com
 * @package     itemspecials
 * @version     $Rev: 3479 $
 * 
 * $Id: about.php 3479 2008-12-21 11:55:54Z wallenium $
 */

define('EQDKP_INC', true);
define('PLUGIN', 'itemspecials');
$eqdkp_root_path = '../../';
include_once($eqdkp_root_path . 'common.php');

if (!$pm->check(PLUGIN_INSTALLED, 'itemspecials')) { message_die($user->lang['is_not_installed']); }

$additions = array(
      'ItemSpecials Logo'     => ' by Cattiebrie',
      'Icons'                 => ' Nuvola Package for Linux',
      'SetItem Header Images' => ' by <a href="http://seraphx.deviantart.com/" target="_blank">Seraph Creations</a>',
      'DK SetItem Header'     => ' by Lunary',
      'LotrO Data & Images'   => ' by Fireball-HH',
      'Status Bar Images'     => ' by KeMo',
);
       
foreach ($additions as $key => $value){
  $tpl->assign_block_vars('addition_row', array(
      'KEY'    => $key,
      'VALUE' => $value,
    )
  );
}

$tpl->assign_vars(array(
    'I_ITEM_NAME'               => 'credits/is_logo.png',
    
    'D_AUTHOR_NAME'             => $pm->plugins['itemspecials']->copyright,
    'D_AUTHOR_CITY'             => 'Heilbronn - Germany',
    'D_WEB_URL'                 => 'eqdkp-plus.com',
    'D_PERSONAL_URL'            => 'www.kompsoft.de',
    
    'L_CREATED_BY'              => $user->lang['is_created by'],
    'L_CONTACT_INFO'            => $user->lang['is_contact_info'],
    'L_URL_PERSONAL'            => $user->lang['is_url_personal'],
    'L_URL_WEB'                 => $user->lang['is_url_web'],
    'L_ADDITONS'                => $user->lang['is_additions'] ,
    'L_TXT_DEVTEAM'							=> $user->lang['is_created_devteam'],
    'L_DEVTEAM'									=> $user->lang['rp_copyright'],
    'L_VERSION'                 => $pm->get_data('itemspecials', 'version'),
    'L_BUILD'                   => $pm->plugins['itemspecials']->build,
    'L_STATUS'                  => $pm->plugins['itemspecials']->vstatus,
    'L_YEARR'										=> date("Y", time()),
));


$eqdkp->set_vars(array(
	'page_title'    => sprintf($user->lang['title_prefix'], $eqdkp->config['guildtag'], $eqdkp->config['dkp_name']).': '.$user->lang['ts'],
	'template_file' => 'about.html',
	'template_path' => $pm->get_data('itemspecials', 'template_path'),
	'display'       => true)
);
?>
