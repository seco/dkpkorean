<?php
 /*
 * Project:     EQdkp RaidBanker
 * License:     Creative Commons - Attribution-Noncommercial-Share Alike 3.0 Unported
 * Link:		    http://creativecommons.org/licenses/by-nc-sa/3.0/
 * -----------------------------------------------------------------------
 * Began:       2005
 * Date:        $Date: 2008-11-06 16:51:42 +0100 (Do, 06 Nov 2008) $
 * -----------------------------------------------------------------------
 * @author      $Author: wallenium $
 * @copyright   2005-2008 Simon (Wallenium) Wallmann
 * @link        http://eqdkp-plus.com
 * @package     raidbanker
 * @version     $Rev: 3006 $
 * 
 * $Id: rb_item.php 3006 2008-11-06 15:51:42Z wallenium $
 */

define('EQDKP_INC', true);
$eqdkp_root_path = '../../';
include_once('includes/common.php');

$user->check_auth('u_item_view');

if (isset($_GET[URI_ITEM])){
    // We want to view items by name and not id, so get the name
    $item_name = urldecode($_GET[URI_ITEM]);
    if ( empty($item_name) ){
        message_die($user->lang['error_invalid_item_provided']);
    }
    
    $tpl->assign_vars(array(
      'IS_IMAGE'      => itemstats_get_html(stripslashes($item_name)),
    ));

		$eqdkp->set_vars(array(
			'page_title'         => GeneratePageTitle($user->lang['rb_step1_pagetitle']),
			'template_path'      => $pm->get_data('raidbanker', 'template_path'),
			'template_file'      => 'myitem.html',
			'gen_simple_header'  => true,
			'display'            => true,
			)
		);
}
else
{
    message_die($user->lang['error_invalid_item_provided']);
}
?>
