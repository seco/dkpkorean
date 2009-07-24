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
 * $Id: tollfreeitems.php 5002 2009-06-01 11:23:19Z wallenium $
 */
 
// EQdkp required files/vars
define('EQDKP_INC', true);
define('IN_ADMIN', true);
define('PLUGIN', 'itemspecials');
$eqdkp_root_path = './../../../';
include_once('../include/common.php');

// Save the tollfree item addition
if (isset($_POST['item_name'])){
    $sql = "INSERT INTO __itemspecials_items (`item_name`, `item_buyer`) VALUES ('".$_POST['item_name']."', '".$_POST['item_buyer']."');";
    if($db->query($sql)){   
    	echo '<script LANGUAGE="JavaScript">
    top.location.href=\'./tollfreeitems.php\'
</script>';
    }
}

// Delete the tollfree item addition
if (isset($_POST['delete_id'])){
    $sql = "DELETE FROM __itemspecials_items WHERE item_id='".$_POST['delete_id']."';";
    if($db->query($sql)){   
    	echo '<script LANGUAGE="JavaScript">
    				top.location.href=\'./tollfreeitems.php\'
						</script>';
    }
}

// Load itemstats if possible
if ($conf['itemstats'] == 1){
  include_once(IS_ITEMSTATS_PATH);
}

// Check user permission
$user->check_auth('a_itemspecials_conf');
$rb = $pm->get_plugin('itemspecials');

$sort_order = array(
    0 => array('item_buyer', 'item_buyer desc'),
    1 => array('item_name', 'item_name desc'),
);

$current_order = switch_order($sort_order);

$total_items = $db->query_first('SELECT count(*) FROM __itemspecials_items');
$start = $in->get('start', 0);

$sql = 'SELECT i.item_id, i.item_name, m.member_name
        FROM __itemspecials_items i, __members m
        WHERE i.item_buyer = m.member_id
        ORDER BY '.$current_order['sql']. '
        LIMIT '.$start.','.$user->data['user_ilimit'];

$listitems_footcount = sprintf($user->lang['listpurchased_footcount'], $total_items, $user->data['user_ilimit']);
$pagination = generate_pagination('tollfreeitems.php'.$SID.'&amp;o='.$current_order['uri']['current'], $total_items, $user->data['user_ilimit'], $start);

if ( !($items_result = $db->query($sql)) )
{
    message_die('Could not obtain item information', 'Database error', __FILE__, __LINE__, $sql);
}

while ( $item = $db->fetch_record($items_result) )
{
    $tpl->assign_block_vars('items_row', array(
        'ROW_CLASS' 		=> $eqdkp->switch_row_class(),
	      'ID'						=> $item['item_id'],
	      'BUYER' 				=> ($item['member_name']) ? $item['member_name'] : '&lt;<i>Not Found</i>&gt;',
        'U_VIEW_BUYER' 	=> ( !empty($item['member_name']) ) ? $eqdkp_root_path.'viewmember.php'.$SID.'&amp;' . URI_NAME . '='.$item['member_name'] : '',
        'NAME' 					=> ($conf['itemstats'] == 1) ? itemstats_decorate_name(stripslashes($item['item_name'])) : $item['item_name'],
        )
    );
}
$db->free_result($items_result);

$tpl->assign_vars(array(
    'L_BUYER' 					=> $user->lang['is_owner'],
    'L_ITEM' 						=> $user->lang['item'],
    'L_BUTTON_ADDITEM'	=> $user->lang['is_additem'],
    'L_BUTTON_I_ADD'		=> $user->lang['is_additem'],
    'L_BUTTON_DELETE'		=> $user->lang['is_delbutton'],
    
    // Windows
    'JS_ADDITEM'        => $jquery->Dialog_URL('AddItem', $user->lang['is_dialog_header'], 'addtollfree.php', '640', '200'),
    
    'O_BUYER' => $current_order['uri'][0],
    'O_NAME' => $current_order['uri'][1],

    'U_LIST_ITEMS' => 'tollfreeitems.php'.$SID.'&amp;',

    'START' => $start,
    'S_HISTORY' => true,
    'LISTITEMS_FOOTCOUNT' => $listitems_footcount,
    'ITEM_PAGINATION' => $pagination)
);

$eqdkp->set_vars(array(
	    'page_title'             => sprintf($user->lang['admin_title_prefix'], $eqdkp->config['guildtag'], $eqdkp->config['dkp_name']).': '.$user->lang['is_conf_pagetitle'],
			'template_path' 	       => $pm->get_data('itemspecials', 'template_path'),
			'template_file'          => 'admin/tollfreeitems.html',
			'display'                => true)
    );
?>