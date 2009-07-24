<?php
 /*
 * Project:     EQdkp Newsletter
 * License:     Creative Commons - Attribution-Noncommercial-Share Alike 3.0 Unported
 * Link:		    http://creativecommons.org/licenses/by-nc-sa/3.0/
 * -----------------------------------------------------------------------
 * Began:       2007
 * Date:        $Date: 2009-02-28 16:47:21 +0100 (Sa, 28 Feb 2009) $
 * -----------------------------------------------------------------------
 * @author      $Author: wallenium $
 * @copyright   2005-2008 Simon (Wallenium) Wallmann
 * @link        http://eqdkp-plus.com
 * @package     newsletter
 * @version     $Rev: 4028 $
 * 
 * $Id: send.php 4028 2009-02-28 15:47:21Z wallenium $
 */
 
define('EQDKP_INC', true);
define('IN_ADMIN', true);
define('PLUGIN', 'newsletter');

$eqdkp_root_path = './../../../';
include_once ('../include/common.php');

$email = new EMail;

$raidplantemplate = false;

// Check user permission
$user->check_auth('a_newsletter_manage');

if (!$pm->check(PLUGIN_INSTALLED, 'newsletter')) {
	message_die('The Newsletter plugin is not installed.');
}

if ($_POST['infosavebu']) {
	if($_POST['rp_bridge'] == 'enabled'){
		$userarray = $_POST['usernames'];
	}else{
	  $nloptions = array(
                  'hide_inactive' => ($_POST['hide_inactive'] == '1') ? true : false,
                  );
		$userarray = $nlclass->BuildMemberArray($_POST['class'], $nloptions);
	}

	if(is_array($userarray)){
    $email->SendMessages($userarray, $_POST['body'], $_POST['subject']);
		foreach ($userarray as $username => $useremail){	
			$tpl->assign_block_vars('members_row', array(
        'NAME'     => $username,
        'EMAIL'		 => $useremail,
        )
    	);
  	}
	}else{
		'not an array! '.$userarray;
	}
}

$sql = "SELECT class_name, class_id
						FROM __classes
						GROUP BY class_name
						ORDER BY class_name";
			$result = $db->query($sql);
			$class_array = array ();
			$class_array[0]	= $user->lang['nl_class_all'];
			
			while ($row = $db->fetch_record($result)){
				if($row['class_name'] != 'Unknown'){
					$class_array[$row['class_name']]  = $row['class_name'];
				}
			}

//select the template		
if(isset($_GET['template']) && $_GET['template'] != '0'){
  $sql_templ = "SELECT subject, body
						FROM __newsletter_templates
						WHERE id='".$_GET['template']."';";
		$templtesult = $db->query($sql_templ);
		$templtrow = $db->fetch_record($templtesult);
}


// if raidplan bridge, parse body
if(isset($_GET['raidplan_id']) && $_GET['raidplan_id'] != '0'){
  // generate script URL
  $script_name = preg_replace('/^\/?(.*?)\/?$/', '\1', trim($eqdkp->config['server_path']));
  $script_name = ( $script_name != '' ) ? $script_name . '/' : '';
  $server_name = trim($eqdkp->config['server_name']);
  $server_port = ( intval($eqdkp->config['server_port']) != 80 ) ? ':' . trim($eqdkp->config['server_port']) . '/' : '/';
  $nl_server_url  = 'http://' . $server_name . $server_port . $script_name;
  
  // Load the Data of that raid
  $rsql =  "SELECT raid_id, raid_name, raid_date
				    FROM __raidplan_raids
				    WHERE raid_id='" . $_GET['raidplan_id'] . "'";
		$rresult = $db->query($rsql);
    $rrow = $db->fetch_record($rresult);
  // replace *RP_VALUES* by URL
  $templtrow['body'] = str_replace('*RPLINK*', $nl_server_url.'plugins/raidplan/viewraid.php?s=&r='.$rrow['raid_id'], $templtrow['body']);
  $templtrow['body'] = str_replace('*RPNAME*', $rrow['raid_name'], $templtrow['body']);
  $templtrow['body'] = str_replace('*RPDATE*', date($user->lang['ucc_timeformat2'], $rrow['raid_date']), $templtrow['body']);

  // get the members to send the mail to:
    $asql = "SELECT members.member_id, members.member_name, attendees.attendees_subscribed, attendees.raid_id, member_user.user_id, users.username, users.user_email
			FROM (__members as members, __member_user as member_user, __classes as classes, __users as users, __member_ranks as ranks)
			LEFT JOIN __raidplan_raid_attendees AS `attendees` ON members.member_id=attendees.member_id
			WHERE members.member_id=member_user.member_id
			AND classes.class_id=members.member_class_id
			AND member_user.user_id=users.user_id
			AND members.member_rank_id = ranks.rank_id
			ORDER BY member_user.user_id";
    $aresult = $db->query($asql);
    $members = array();
    $is_in = array();
    $is_notin = array();
    while ($arow = $db->fetch_record($aresult))
		{
		  $members[$arow['username']][$arow['member_name']] = $arow['attendees_subscribed'];
		  $memberss[$arow['username']] = $arow['user_email'];
		}
		$rmresult = $db->query($rmsql);
		foreach ($members as $key=>$value)
		{
		  foreach ($value as $key2=>$value2)
		{
			if($value2 and $value2 != '' and $value2 != '0'){
				$is_in[$key] = true;
			}
		}
		}
		foreach ($memberss as $key=>$value)
		{
			if(!in_array($key, array_keys($is_in))){
				$is_notin[$key] = $value;
			}
		}
		
		foreach ($is_notin as $username => $useremail){	
			$tpl->assign_block_vars('receive_row', array(
        'NAME'     => $username,
        'EMAIL'		 => $useremail,
        )
    	);
  	}
  	$raidplantemplate = true;
}

$template_array = array();
$template_array[0]  = '-----------';
$tmpsql = 'SELECT id, name	FROM __newsletter_templates';
						$templresult = $db->query($tmpsql);
						if($templresult){
							while ($templrow = $db->fetch_record($templresult)){
                $template_array[$templrow['id']] = $templrow['name'];
              }
            }
if($raidplantemplate){
  $templselected = 1;
}else{
  $templselected = ($_GET['template']) ? $_GET['template'] : 0;
}

$tpl->assign_vars(array (
	'F_ACTION' 							=> 'send.php' . $SID,
	'NL_SEND'								=> (($_POST['infosavebu'])) ? true : false,
	'RP_BRIDGE'             => (isset($_GET['raidplan_id']) && $_GET['raidplan_id'] != '0') ? true : false,
	
	'DRPDWN_CLASS'					=> $khrml->DropDown('class', $class_array, '', '', '', 'input'),
	'DRPDWN_TEMPLATE'       => $khrml->DropDown('template', $template_array, $templselected, '', 'onchange="javascript:form.submit();"', 'input'),
	
	'MAIL_SUBJECT' 					=> $templtrow['subject'],
	'MAIL_BODY' 						=> $templtrow['body'],
	
	'L_SUBJECT' 						=> $user->lang['nl_subject'],
	'L_CLASS' 							=> $user->lang['inl_class_only'],
	'L_BODY' 								=> $user->lang['nl_mail_body'],
	'L_HEADER_NEWSLETTER'		=> $user->lang['nl_header_send'],
	'L_HEADER_EMAIL_SENT'		=> $user->lang['nl_header_sent'],
	'L_TEXT_EMAIL_SENT'			=> $user->lang['nl_txt_sent'],
	'L_SEND'								=> $user->lang['nl_button_send'],
	'L_LEGENDE'							=> $user->lang['nl_legende'],
	'L_RECEPIENTS'					=> $user->lang['nl_recipients'],
	'L_EXPL_LEGENDE'				=> $user->lang['nl_legende_expl'],
	'L_DKPNAME'							=> $user->lang['nl_dkpname'],
	'L_DATE'								=> $user->lang['nl_date'],
	'L_USERNAME'						=> $user->lang['nl_username'],
	'L_DKPLINK'							=> $user->lang['nl_dkplink'],
	'L_AUTHOR'							=> $user->lang['nl_author'],
	'L_HIDE_INACTIVE'       => $user->lang['nl_hideinactive'],
	'L_SELECT_TEMPL'        => $user->lang['nl_use_template'],
));

$eqdkp->set_vars(array (
	'page_title'     => $nlclass->GeneratePageTitle($user->lang['nl_header_send']),
	'template_path'  => $pm->get_data('newsletter', 'template_path'),
	'template_file'  => 'admin/send.html',
	'display'        => true));
?>
