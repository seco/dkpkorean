<?php
 /*
 * Project:     EQdkp ItemSpecials
 * License:     Creative Commons - Attribution-Noncommercial-Share Alike 3.0 Unported
 * Link:		    http://creativecommons.org/licenses/by-nc-sa/3.0/
 * -----------------------------------------------------------------------
 * Began:       2006
 * Date:        $Date: 2009-03-31 16:36:45 +0200 (Di, 31 Mrz 2009) $
 * -----------------------------------------------------------------------
 * @author      $Author: wallenium $
 * @copyright   2005-2008 Simon (Wallenium) Wallmann
 * @link        http://eqdkp-plus.com
 * @package     itemspecials
 * @version     $Rev: 4479 $
 * 
 * $Id: additem.php 4479 2009-03-31 14:36:45Z wallenium $
 */

define('EQDKP_INC', true);
define('PLUGIN', 'itemspecials');
$eqdkp_root_path = './../../../';
include_once('../include/common.php');
$user->check_auth('a_itemspecials_conf');


if ($conf['itemstats'] == 1){
	// get a list of all valid items from the itemstats database (for auto-complete)
	include_once(IS_ITEMSTATS_PATH_ADMIN);
	$itemlist = array();
	$res = $db->query("SELECT item_name FROM item_cache WHERE NOT ISNULL(item_link) ORDER BY item_name");
	while ($row = $db->fetch_record($res)) {
		$itemlist[] = "'".addslashes($row['item_name'])."'";
	}
	 $myjsout = implode(",", $itemlist);
}

$tpl->assign_vars(array(
    'L_ADDITEM' 		=> $user->lang['is_add_item'],
    'L_ITEMNAME' 		=> $user->lang['is_item_name'],
    'L_BUTTON_ADDITEM'	=> $user->lang['is_add_item-b'],
    'L_NAME_MISSING' 	=> $user->lang['is_itemname_missing'],
    'JS_ITEMS'			=> $myjsout,
    'ITEMSTATS_ON'		=> ($conf['itemstats'] == 1) ? true : false,
));

$eqdkp->set_vars(array(
	    'page_title'             	=> sprintf($user->lang['admin_title_prefix'], $eqdkp->config['guildtag'], $eqdkp->config['dkp_name']).': '.$user->lang['is_conf_pagetitle'],
			'template_path'			=> $pm->get_data('itemspecials', 'template_path'),
			'template_file'			=> 'admin/additem.html',
			'gen_simple_header'  	=> true,
			'display'         		=> true)
    );

		?>