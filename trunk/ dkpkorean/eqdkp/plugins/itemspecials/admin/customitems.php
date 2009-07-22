<?php
 /*
 * Project:     EQdkp ItemSpecials
 * License:     Creative Commons - Attribution-Noncommercial-Share Alike 3.0 Unported
 * Link:		    http://creativecommons.org/licenses/by-nc-sa/3.0/
 * -----------------------------------------------------------------------
 * Began:       2006
 * Date:        $Date: 2009-02-28 19:38:16 +0100 (Sa, 28 Feb 2009) $
 * -----------------------------------------------------------------------
 * @author      $Author: wallenium $
 * @copyright   2005-2008 Simon (Wallenium) Wallmann
 * @link        http://eqdkp-plus.com
 * @package     itemspecials
 * @version     $Rev: 4031 $
 * 
 * $Id: customitems.php 4031 2009-02-28 18:38:16Z wallenium $
 */

// EQdkp required files/vars
define('EQDKP_INC', true);
define('IN_ADMIN', true);
define('PLUGIN', 'itemspecials');
$eqdkp_root_path = './../../../';
include_once('../include/common.php');

// Check user permission
$user->check_auth('a_itemspecials_conf');
$rb = $pm->get_plugin('itemspecials');

if ( !$pm->check(PLUGIN_INSTALLED, 'itemspecials') )
{
    message_die('The ItemSpecials plugin is not installed.');
}

$sql ="SELECT * FROM __itemspecials_custom";
$custom_result = $db->query($sql);
while($customrow = $db->fetch_record($custom_result)) {
  $tpl->assign_block_vars('items_row', array(
              'NAME'      => $customrow['custom_name']
              )
          );
}
$tpl->assign_vars(array(
      'F_CUSTOM'        => 'settings.php' . $SID,
      'SHOW_ADD'        => false,
      
      'L_ADD_ITEM'      => $user->lang['is_add_item'],
      'L_CUSTOM_ITEMS'  => $user->lang['is_custom_items'],
      'L_ITEM_NAME'     => $user->lang['is_item_name'],
      'L_B_ADDITEM'     => $user->lang['is_add_item-b'],
      'L_B_DELITEM'     => $user->lang['is_del_item_b'],
      )
);

   $eqdkp->set_vars(array(
	    'page_title'             => sprintf($user->lang['admin_title_prefix'], $eqdkp->config['guildtag'], $eqdkp->config['dkp_name']).': '.$user->lang['is_conf_pagetitle'],
			'template_path' 	       => $pm->get_data('itemspecials', 'template_path'),
			'template_file'          => 'admin/customitems.html',
			'display'                => true)
    );

?>
