<?php
 /*
 * Project:     EQdkp CharManager 1
 * License:     Creative Commons - Attribution-Noncommercial-Share Alike 3.0 Unported
 * Link:		    http://creativecommons.org/licenses/by-nc-sa/3.0/
 * -----------------------------------------------------------------------
 * Began:       2006
 * Date:        $Date: 2008-11-17 16:34:51 +0100 (Mo, 17 Nov 2008) $
 * -----------------------------------------------------------------------
 * @author      $Author: wallenium $
 * @copyright   2005-2008 Simon (Wallenium) Wallmann
 * @link        http://eqdkp-plus.com
 * @package     charmanager
 * @version     $Rev: 3168 $
 * 
 * $Id: index.php 3168 2008-11-17 15:34:51Z wallenium $
 */

define('EQDKP_INC', true);
define('PLUGIN', 'charmanager');
$eqdkp_root_path = './../../';
include_once('include/common.php');

if (!$user->check_auth('u_charmanager_manage', false) && !$user->check_auth('u_charmanager_add', false)) {
	 message_die($user->lang['uc_no_prmissions']);
}

if (!$pm->check(PLUGIN_INSTALLED, 'charmanager')) { message_die($user->$lang['uc_not_installed']); }
if ($user->data['username']=="") { message_die($user->lang['uc_not_loggedin']); }
$raidplan = $pm->get_plugin('charmanager');
	
// Build member drop-down
$sort_order = array(
    0 => array('member_name', 'member_name desc'),
    6 => array('member_level desc', 'member_level'),
    7 => array('member_class', 'member_class desc')
);

$current_order = switch_order($sort_order);

$member_count = 0;
$previous_data = '';
$sort_index = explode('.', $current_order['uri']['current']);
$previous_source = preg_replace('/( (asc|desc))?/i', '', $sort_order[$sort_index[0]][$sort_index[1]]);               

$sql = 'SELECT m.*, c.class_name AS member_class,
        c.class_armor_type AS armor_type
        FROM ' .CLASS_TABLE. ' c, ' . MEMBERS_TABLE . ' m
        LEFT JOIN ' . MEMBER_USER_TABLE . ' mu       
        ON mu.member_id = m.member_id
        WHERE mu.user_id = '.$user->data['user_id'].'
        AND (m.member_class_id = c.class_id)
        GROUP BY m.member_name
        ORDER BY m.member_name';
if ( !($members_result = $db->query($sql)) )
{
    message_die($user->lang['uc_error_memberinfos'], '', __FILE__, __LINE__, $sql);
}
while ( $row = $db->fetch_record($members_result) )
{
    $member_count++;
    $tpl->assign_block_vars('members_row', array(
        'ROW_CLASS'     => $eqdkp->switch_row_class(),
        'ID'            => $row['member_id'],
        'COUNT'         => ($row[$previous_source] == $previous_data) ? '&nbsp;' : $member_count,
        'NAME'          => $row['member_name'],
        'LEVEL'         => ( $row['member_level'] > 0 ) ? $row['member_level'] : '&nbsp;',
        'ARMOR'         => ( !empty($row['armor_type']) ) ? $row['armor_type'] : '&nbsp;',
        'CLASS'         => ( $row['member_class'] != 'NULL' ) ? $row['member_class'] : '&nbsp;'
        )
    );
    
    // So that we can compare this member to the next member,
    // set the value of the previous data to the source
    $previous_data = $row[$previous_source];
}
$footcount_text = sprintf($user->lang['listmembers_footcount'], $db->num_rows($members_result));

$tpl->assign_vars(array(
    'CLOSE_WINDOWS' 	=> ( $closeWindows == true ) ? true : false,
    'IS_ADMIN'				=> ( $user->check_auth('a_plugins_man', false) ) ? true : false,
    
    'NEW_CHARS'				=> ( $user->check_auth('u_charmanager_add', false)) ? true : false,
    'CONNECT_CHARS'		=> ( $user->check_auth('u_charmanager_connect', false)) ? true : false,
    
    // JS Code
    'JS_ABOUT'        => $jquery->Dialog_URL('About', $user->lang['about_header'], 'about.php', '380', '320'),
    'JS_CONNECT'      => $jquery->Dialog_URL('CMConnectedMembers', $user->lang['uc_conn_members'], 'connection.php', '430', '220', 'index.php'),
    'JS_ADDCHARS'     => $jquery->Dialog_URL('CMAddChars', $user->lang['uc_add_char'], 'addchar.php', '640', '450', 'index.php'),
    'JS_EDITCHAR'     => $jquery->Dialog_URL('CMEditChars'.rand(), $user->lang['uc_edit_char'], "addchar.php?mode=edit&secrethash=blubber&editid='+editid+'", '640', '450', 'index.php'),
    
    'L_NAME' 					=> $user->lang['name'],
    'L_LEVEL' 				=> $user->lang['level'],
    'L_CLASS' 				=> $user->lang['class'],
    'L_ARMOR'         => $user->lang['armor'],
    'L_EDIT_CHARS' 		=> $user->lang['uc_edit_char'],
    'L_SELECT_CHARS'  => $user->lang['uc_select_char'],
    'L_MEMBER_CHARS' 	=> $user->lang['uc_edit_char'],
    'L_ADD_CHAR'			=> $user->lang['uc_add_char'],
    'L_EDIT_MEMBER'		=> $user->lang['uc_edit_char'],
    'L_CONNECT_MEM'		=> $user->lang['uc_conn_members'],
    'L_CHAR_CONN'			=> $user->lang['uc_connections'],
    'L_CREDIT_NAME'		=> $user->lang['uc_credit_name'],
    'L_INFO_BOX'			=> $user->lang['uc_info_box'],
    
    'L_TOOLTIP3'			=> $user->lang['uc_tt_n3'],
    'L_TOOLTIP2'			=> $user->lang['uc_tt_n2'],
    
    'O_NAME' 					=> $current_order['uri'][0],
    'O_LEVEL' 				=> $current_order['uri'][6],
    'O_CLASS' 				=> $current_order['uri'][7],
    'O_ARMOR'      		=> $current_order['uri'][9],
    
    'LISTMEMBERS_FOOTCOUNT' => $footcount_text,
    'L_VERSION'             => $pm->get_data('charmanager', 'version'),
    'L_YEAR'								=> date("Y", time()),
    'ICON_INFO'							=> 'images/info.png'
    )
);

$eqdkp->set_vars(array(
    'page_title'    => sprintf($user->lang['title_prefix'], $eqdkp->config['guildtag'], $eqdkp->config['dkp_name']).': '.$user->lang['listmembers_title'],
    'template_file' => 'main.html',
    'template_path' => $pm->get_data('charmanager', 'template_path'),
    'display'       => true)
);
?>
