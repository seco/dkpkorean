<?php
 /*
 * Project:     EQdkp ItemSpecials
 * License:     Creative Commons - Attribution-Noncommercial-Share Alike 3.0 Unported
 * Link:		    http://creativecommons.org/licenses/by-nc-sa/3.0/
 * -----------------------------------------------------------------------
 * Began:       2006
 * Date:        $Date: 2009-06-01 13:23:19 +0200 (Mo, 01 Jun 2009) $
 * -----------------------------------------------------------------------
 * @author      $Author: wallenium $
 * @copyright   2005-2008 Simon (Wallenium) Wallmann
 * @link        http://eqdkp-plus.com
 * @package     itemspecials
 * @version     $Rev: 5002 $
 * 
 * $Id: useritem.php 5002 2009-06-01 11:23:19Z wallenium $
 */

// EQdkp required files/vars
define('EQDKP_INC', true);
define('PLUGIN', 'itemspecials');
$eqdkp_root_path = './../../';
include_once('include/common.php');

// Save the tollfree item addition
if (isset($_POST['item_name'])){
    $sql = "INSERT INTO __itemspecials_items (`item_name`, `item_buyer`) VALUES ('".$_POST['item_name']."', '".$_POST['item_buyer']."');";
    if($db->query($sql)){   
    	echo '<script LANGUAGE="JavaScript">
    top.location.href=\'./useritem.php\'
</script>';
    }
}

// Delete the tollfree item addition
if (isset($_POST['delete_id'])){
    $sql = "DELETE FROM __itemspecials_items WHERE item_id='".$_POST['delete_id']."';";
    if($db->query($sql)){   
    	echo '<script LANGUAGE="JavaScript">
    				top.location.href=\'./useritem.php\'
						</script>';
    }
}

// Load itemstats if possible
if ($conf['itemstats'] == 1){
  include_once(IS_ITEMSTATS_PATH);
}

if (!$pm->check(PLUGIN_INSTALLED, 'itemspecials')) { message_die('The Itemspecials plugin is not installed.'); }
if ($user->data['username']=="") { message_die('You are not logged in.'); }
// Check user permission
$user->check_auth('u_items_add');
$rb = $pm->get_plugin('itemspecials');

$sort_order = array(
    0 => array('item_buyer', 'item_buyer desc'),
    1 => array('item_name', 'item_name desc'),
);

$current_order = switch_order($sort_order);

$total_items = $db->query_first('SELECT count(*) FROM __itemspecials_items');
$start = $in->get('start', 0);

$sql = 'SELECT ist.item_id, ist.item_name, m.member_name
        FROM __itemspecials_items ist, __members m
        LEFT JOIN __member_user mu       
        ON m.member_id = mu.member_id
        WHERE mu.user_id = '.$user->data['user_id'].'
        AND ist.item_buyer=m.member_id
       	ORDER BY m.member_name';

$listitems_footcount = sprintf($user->lang['listpurchased_footcount'], $total_items, $user->data['user_ilimit']);
$pagination = generate_pagination('useritem.php'.$SID.'&amp;o='.$current_order['uri']['current'], $total_items, $user->data['user_ilimit'], $start);

if ( !($items_result = $db->query($sql)) )
{
    message_die('Could not obtain item information', 'Database error', __FILE__, __LINE__, $sql);
}

while ( $item = $db->fetch_record($items_result) )
{
    $tpl->assign_block_vars('items_row', array(
        'ROW_CLASS' 		=> $eqdkp->switch_row_class(),
	      'ID'						=> $item['item_id'],
	      'BUYER' 				=> ( !empty($item['member_name']) ) ? $item['member_name'] : '&lt;<i>Not Found</i>&gt;',
        'NAME' 					=> ($conf['itemstats'] == 1) ? itemstats_decorate_name(stripslashes($item['item_name'])) : $item['item_name'],
        'U_VIEW_BUYER' 	=> ( !empty($item['member_name']) ) ? '../viewmember.php'.$SID.'&amp;' . URI_NAME . '='.$item['member_name'] : '',
        'U_VIEW_ITEM'		=> ($conf['itemstats'] == 1) ? $eqdkp_root_path.'itemstats/updateitem.php?item=' . urlencode(urlencode($item['item_name'])) : '',
        
        )
    );
}
$db->free_result($items_result);

$tpl->assign_vars(array(
    'JS_ABOUT'          => $jquery->Dialog_URL('About', $user->lang['is_dialog_header'], 'about.php', '640', '450'),
    'JS_ADDITEM'        => $jquery->Dialog_URL('AddItem', $user->lang['is_additem'], 'useritem_add.php', '540', '200'),
    
    'L_BUYER' 					=> $user->lang['is_owner'],
    'L_ITEM' 						=> $user->lang['item'],
    'L_BUTTON_ADDITEM'	=> $user->lang['is_additem'],
    'L_BUTTON_I_ADD'		=> $user->lang['is_additem'],
    'L_BUTTON_DELETE'		=> $user->lang['is_delbutton'],
    'L_MEMBER_SETITEMS'	=> $user->lang['is_user_setitems'],
    'L_MEMBER_SETINFO'	=> $user->lang['is_user_setinfo'],

    'O_BUYER' => $current_order['uri'][0],
    'O_NAME' => $current_order['uri'][1],

    'U_LIST_ITEMS' => 'useritem.php'.$SID.'&amp;',

    'START' => $start,
    'S_HISTORY' => true,
    'L_VERSION'	=> $pm->get_data('itemspecials', 'version'),
    'LISTITEMS_FOOTCOUNT' => $listitems_footcount,
    'ITEM_PAGINATION' => $pagination)
);

$eqdkp->set_vars(array(
	    'page_title'             => sprintf($user->lang['admin_title_prefix'], $eqdkp->config['guildtag'], $eqdkp->config['dkp_name']).': '.$user->lang['is_conf_pagetitle'],
			'template_path' 	       => $pm->get_data('itemspecials', 'template_path'),
			'template_file'          => 'useritems.html',
			'display'                => true)
    );
?>