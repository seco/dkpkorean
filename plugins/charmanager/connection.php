<?php
 /*
 * Project:     EQdkp CharManager 1
 * License:     Creative Commons - Attribution-Noncommercial-Share Alike 3.0 Unported
 * Link:		    http://creativecommons.org/licenses/by-nc-sa/3.0/
 * -----------------------------------------------------------------------
 * Began:       2006
 * Date:        $Date: 2008-08-17 01:47:56 +0200 (So, 17 Aug 2008) $
 * -----------------------------------------------------------------------
 * @author      $Author: wallenium $
 * @copyright   2005-2008 Simon (Wallenium) Wallmann
 * @link        http://eqdkp-plus.com
 * @package     charmanager
 * @version     $Rev: 2560 $
 * 
 * $Id: conected.php 2560 2008-08-16 23:47:56Z wallenium $
 */

define('EQDKP_INC', true);
define('PLUGIN', 'charmanager');
$eqdkp_root_path = './../../';
include_once('include/common.php');

$user->check_auth('u_charmanager_connect');

if (!$pm->check(PLUGIN_INSTALLED, 'charmanager')) { message_die($user->$lang['uc_not_installed']); }
if ($user->data['username']=="") { message_die($user->lang['uc_not_loggedin']); }
$raidplan = $pm->get_plugin('charmanager');

// save Connection
if(isset($_POST['member_id']) && is_array($_POST['member_id'])){	
  $CharTools->updateConnection($_POST['member_id']);	
  echo "<script>parent.window.location.href = 'index.php';</script>";
}

// Build member drop-down
  $sql = 'SELECT m.member_id, m.member_name, mu.user_id
          FROM ' . MEMBERS_TABLE . ' m
          LEFT JOIN ' . MEMBER_USER_TABLE . ' mu
          ON m.member_id = mu.member_id
          WHERE mu.user_id IS NULL
          OR mu.user_id = '.$user->data['user_id'].'
          GROUP BY m.member_name
          ORDER BY m.member_name';
  $result = $db->query($sql);
  $mselect_list = $mselect_selected = array();
  while ( $row = $db->fetch_record($result) ){
    $mselect_list[$row['member_id']] = $row['member_name'];
    if($row['user_id'] == $user->data['user_id']){
      $mselect_selected[] = $row['member_id'];
    }
  }
  $db->free_result($result);

  $tpl->assign_vars(array(
    'F_UPDATE'                  => "connection.php",
    
    'MSELECT_CONNECTIONS'       => $jquery->MultiSelect('member_id', $mselect_list, $mselect_selected, '150'),
    
    'L_INFO_BOX'                => $user->lang['uc_info_box'],
    'L_SUBMIT'                  => $user->lang['submit'],
    'L_RESET'                   => $user->lang['reset'],
    'L_MANAGE_CHARS'            => $user->lang['uc_managechar'],
    'L_MEMBER_CHARS'            => $user->lang['uc_charmanager'],
    'L_SELECT_CHAR'             => $user->lang['uc_select_char'],
    'L_ASSOCIATED_MEMBERS'      => $user->lang['associated_members'],
    'L_MEMBERS'                 => $user->lang['members'],
    'L_VERSION'                 => $pm->get_data('charmanager', 'version')
));

$eqdkp->set_vars(array(
	'page_title'         => sprintf($user->lang['title_prefix'], $eqdkp->config['guildtag'], $eqdkp->config['dkp_name']).': '.$user->lang['ts'],
	'template_file'      => 'connected.html',
	'gen_simple_header'  => true,
	'template_path'      => $pm->get_data('charmanager', 'template_path'),
	'display'            => true)
);
?>
