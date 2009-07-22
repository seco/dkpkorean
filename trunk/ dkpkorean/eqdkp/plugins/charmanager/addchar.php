<?php
 /*
 * Project:     EQdkp CharManager 1
 * License:     Creative Commons - Attribution-Noncommercial-Share Alike 3.0 Unported
 * Link:		    http://creativecommons.org/licenses/by-nc-sa/3.0/
 * -----------------------------------------------------------------------
 * Began:       2006
 * Date:        $Date: 2009-02-23 14:50:52 +0100 (Mo, 23 Feb 2009) $
 * -----------------------------------------------------------------------
 * @author      $Author: wallenium $
 * @copyright   2005-2008 Simon (Wallenium) Wallmann
 * @link        http://eqdkp-plus.com
 * @package     charmanager
 * @version     $Rev: 3959 $
 * 
 * $Id: addchar.php 3959 2009-02-23 13:50:52Z wallenium $
 */

define('EQDKP_INC', true);
define('PLUGIN', 'charmanager');
$eqdkp_root_path = './../../';
include_once('include/common.php');
include_once('include/tabs.class.php');

if (!$user->check_auth('u_charmanager_manage', false) && !$user->check_auth('u_charmanager_add', false)) {
	 message_die($user->lang['uc_no_prmissions']);
}
$mode['edit']   = false;
$mode['update'] = false;

// File Upload..
$cmupload = new AjaxImageUpload;
if($_GET['performupload'] == 'true'){
  $cmupload->PerformUpload('member_pic', 'charmanager', 'upload');
  die();
}

// Build the memberTools
$uctabs = new wpfTabs('include');

if (!$pm->check(PLUGIN_INSTALLED, 'charmanager')) { message_die($user->$lang['uc_not_installed']); }
if ($user->data['username']=="") { message_die($user->lang['uc_not_loggedin']); }
$raidplan = $pm->get_plugin('charmanager');

if ($_POST['member_name'] && $_POST['add']) {
  $info = $CharTools->addChar($_POST['member_name']);
}
if ($_GET['mode'] == 'edit' && $_GET['secrethash'] == 'blubber' && $_GET['editid'])
{
    	// Check for existing member name
	$sql = "SELECT m.*, ma.* FROM " . MEMBERS_TABLE ." m
	LEFT JOIN " . MEMBER_ADDITION_TABLE . " ma ON (ma.member_id=m.member_id) 
	WHERE m.member_id = '".$_GET['editid']."'";
	$result = $db->query($sql); 
  $member_data = $db->fetch_record($result);
	$mode['edit'] = true;
}elseif( $_POST['memberid'] && $_POST['edit'] ){
  $mode['update'] = true; 
  $info = $CharTools->updateChar($_POST['memberid']);
  $sql = "SELECT * FROM " . MEMBERS_TABLE ." m
	LEFT JOIN " . MEMBER_ADDITION_TABLE . " ma ON (ma.member_id=m.member_id) 
  WHERE m.member_id = '".$_POST['memberid']."'";
	$result = $db->query($sql); 
  $member_data = $db->fetch_record($result);
	$mode['edit'] = true;
}else{
	if (!$user->check_auth('u_charmanager_add', false)) {
	 message_die($user->lang['uc_no_prmissions']);
}
}


// Build member drop-down
$eq_classes = array();

        $sql = 'SELECT class_id, class_name, class_min_level, class_max_level FROM ' . CLASS_TABLE .' GROUP BY class_id';
        $result = $db->query($sql);

        while ( $row = $db->fetch_record($result) )
        {

	   if ( $row['class_min_level'] == '0' ) {
             $option = ( !empty($row['class_name']) ) ? stripslashes($row['class_name'])." Level (".$row['class_min_level']." - ".$row['class_max_level'].")" : '(None)';
           } else {
             $option = ( !empty($row['class_name']) ) ? stripslashes($row['class_name'])." Level ".$row['class_min_level']."+" : '(None)';
	   }

            $tpl->assign_block_vars('class_row', array(
                'VALUE' => $row['class_id'],
                'SELECT'  => ( $member_data['member_class_id'] == $row['class_id']) ? ' selected="selected"' : '',
		            'OPTION'   => $option )
		        );

            $eq_classes[] = $row[0];
        }

        $db->free_result($result);
        $eq_races = array();

        $sql = 'SELECT race_id, race_name FROM ' . RACE_TABLE .' GROUP BY race_name';
        $result = $db->query($sql);

        while ( $row = $db->fetch_record($result) )
        {
            $tpl->assign_block_vars('race_row', array(
                'VALUE' => $row['race_id'],
                'SELECT'  => ( $member_data['member_race_id'] == $row['race_id'] ) ? ' selected="selected"' : '',
                'OPTION'   => ( !empty($row['race_name']) ) ? stripslashes($row['race_name']) : '(None)')
		);
            $eq_races[] = $row[0];
        }
        $db->free_result($result);

if ($info){
  if ( $info[0]=='false' && $info[1] != '' && $info[2] != '') {
    $errormsg = $user->lang['uc_error_p1'].$info[1].$user->lang['uc_error_p2'].$info[2].$user->lang['uc_error_p3'];
  }elseif ($info[0]=='false' && $info[1] == '' && $info[2] == ''){
    $errormsg = $user->lang['uc_saved_not'];
  }
}

// post or get
if ($_GET['editid']) {
	$mem_id_temp = htmlspecialchars(strip_tags($_GET['editid']), ENT_QUOTES);
}else{
	$mem_id_temp = strip_tags($_POST['memberid']);
}

if($mode['edit'] == true){
	$prof[1]['name'] = $member_data['prof1_name'];
	$prof[2]['name'] = $member_data['prof2_name'];
	$gender					 = $member_data['gender'];
	$faction				 = $member_data['faction'];
}else{
	$prof[1]['name'] = $prof[2]['name'] = $gender = $faction = '';
}

        $myCoolPicture = ( $mode['edit'] == true && $member_data['picture'])  ? $pcache->FolderPath('upload','charmanager').$member_data['picture'] : 'images/no_pic.png';
        $tpl->assign_vars(array(
            'TAB_HEADER'                => $uctabs->initTabs(),
            'TEMPLATENAME'              => $user->style['template_path'],
            // Form vars
            'F_ADD_MEMBER'              => 'addchar.php' . $SID,
            
            // JS Code
            'JS_IMPORT'                 => $jquery->Dialog_URL('UC_ImportChars', $user->lang['uc_ext_import_sh'], "import.php", '450', '180'),
            
            'U_INFO_BOX'                => ( $_POST['member_name'] ) ? true : false,
            'U_SAVED_SUCC'              => ( $_POST['member_name'] && $info[0]=='true' ) ? true : false,
            'U_SAVED_NOT'               => ( $_POST['member_name'] && $info[0]=='false' ) ? true : false,
						
						// Dropdown
						'DRPWN_PROF1' 							=> $khrml->DropDown('prof1_name', $user->lang['professionsarray'], $prof[1]['name'], '', '', 'input'),
						'DRPWN_PROF2' 							=> $khrml->DropDown('prof2_name', $user->lang['professionsarray'], $prof[2]['name'], '', '', 'input'),
						'DRPWN_GENDER' 							=> $khrml->DropDown('gender', $user->lang['genderarray'], $gender, '', '', 'input'),
						'DRPWN_FACTION' 						=> $khrml->DropDown('faction', $user->lang['factionarray'], $faction, '', '', 'input'),
						
            // Language
            'L_ADD_MEMBER_TITLE'        => $user->lang['uc_add_member'],
            'L_EDIT_MEMBER_TITLE'       => $user->lang['uc_edit_member'],
            'L_INFO_BOX'                => $user->lang['uc_info_box'],
            'L_IMPORT_CHAR'							=> $user->lang['uc_ext_import_sh'],
            'L_EXT_IMPORT'							=> $user->lang['uc_ext_import'],
            'L_BUTT_IMPORT'							=> $user->lang['uc_prof_import'],
            'L_SAVED_SUCC'              => $user->lang['us_char added'],
            'L_UPDATED_SUCC'            => $user->lang['us_char_updated'],
            'L_SAVED_NOT'               => $errormsg,
            'L_NAME'                    => $user->lang['name'],
            'L_RACE'                    => $user->lang['race'],
            'L_CLASS'                   => $user->lang['class'],
            'L_LEVEL'                   => $user->lang['level'],
            'L_ADD_MEMBER'              => $user->lang['uc_add_char'],
            'L_EDIT_MEMBER'             => $user->lang['uc_save_char'],
            'L_ADD_PIC'									=> $user->lang['uc_add_pic'],
            'L_CHANGE_PIC'							=> $user->lang['uc_change_pic'],
            'L_SUCC_ADDED'							=> $user->lang['uc_pic_added'],
            'L_SUCC_CHANGED'						=> $user->lang['uc_pic_changed'],
            'L_RESET'                   => $user->lang['reset'],
            'L_OVERTAKE'                => $user->lang['overtake_char'],
            'L_CANCEL'                  => $user->lang['uc_button_cancel'],
            'L_GUILD'										=> $user->lang['uc_guild'],
            'L_SKILL'										=> $user->lang['uc_tab_skills'],
            'L_GENDER'									=> $user->lang['uc_gender'],
            'L_FACTION'									=> $user->lang['uc_faction'],
            
            'L_RESISTENCE'							=> $user->lang['uc_resitence'],
            'L_RESI_FIRE'								=> $user->lang['uc_res_fire'],
            'L_RESI_FROST'							=> $user->lang['uc_res_frost'],
            'L_RESI_ARCANE'							=> $user->lang['uc_res_arcane'],
            'L_RESI_NATURE'							=> $user->lang['uc_res_nature'],
            'L_RESI_SHADOW'							=> $user->lang['uc_res_shadow'],
            
            'L_FIRST_PROF'							=> $user->lang['uc_first_prof'],
            'L_SECOND_PROF'							=> $user->lang['uc_second_prof'],
            'L_SKILL_LEVEL'							=> $user->lang['uc_prof_skill'],
            'L_NOTES'                   => $user->lang['uc_notes'],
            
            'L_VERSION'                 => $pm->get_data('charmanager', 'version'),
						
						// Profiler 
						'L_PROFILER_EXPL'						=> $user->lang['uc_prifler_expl'],
						'L_BUFFED'									=> $user->lang['uc_buffed'],
						'L_CTPROFILES'							=> $user->lang['uc_ctprofiles'],
						'L_ALLAKHAZAM'							=> $user->lang['uc_allakhazam'],
						'L_CURSE_PROFILER'					=> $user->lang['uc_curse_profiler'],
						'L_TALENTPLANER'						=> $user->lang['uc_talentplaner'],
						
						//tab shit
						'TAB_PANE_START'						=> $uctabs->startPane('uc_profilechar'),
						'TAB_PANE_END'							=> $uctabs->endPane(),
						'TAB_M1_START'							=> $uctabs->startTab($user->lang['uc_tab_Character'] , 'char1'),
						'TAB_MX_END'								=> $uctabs->endTab(),
						'TAB_M2_START'							=> $uctabs->startTab($user->lang['uc_tab_skills'] , 'char2'),
						'TAB_M21_START'							=> $uctabs->startTab($user->lang['uc_tab_profession'] , 'char21'),
						'TAB_M3_START'							=> $uctabs->startTab($user->lang['uc_tab_profilers'] , 'char3'),
						'TAB_M4_START'							=> $uctabs->startTab($user->lang['uc_tab_import'] , 'char4'),
						'TAB_M5_START'							=> $uctabs->startTab($user->lang['uc_tab_notes'] , 'char5'),
						
            // Javascript messages
            'MSG_NAME_EMPTY'            => $user->lang['fv_required_name'],
            'SHOW_CHECKBOX'             => ( $mode['edit'] == true ) ? false : true,
            'USER_CAN_CONNECT'					=> ($user->check_auth('u_charmanager_connect', false)) ? true : false,
            'EDIT_BUTTONS'              => ( $mode['edit'] == true ) ? true : false,
            'WAS_UPDATE'                => ( $mode['update'] == true ) ? true : false,
            
            'UCV_MEMBER_ID'             => ( $mode['edit'] == true ) ? $mem_id_temp : '',
            'UCV_MEMBER_NAME'           => ( $mode['edit'] == true ) ? $member_data['member_name'] : '',
            'UCV_MEMBER_LEVEL'          => ( $mode['edit'] == true ) ? $member_data['member_level'] : '',
            'UCV_ICE'										=> ( $mode['edit'] == true ) ? $member_data['frr'] : '',
            'UCV_FIRE'									=> ( $mode['edit'] == true ) ? $member_data['fir'] : '',
            'UCV_ARCANE'								=> ( $mode['edit'] == true ) ? $member_data['ar'] : '',
            'UCV_NATURE'								=> ( $mode['edit'] == true ) ? $member_data['nr'] : '',
            'UCV_SHADOW'								=> ( $mode['edit'] == true ) ? $member_data['sr'] : '',
            'UCV_PICTURE'               => $cmupload->Show('member_pic', 'addchar.php?performupload=true', $myCoolPicture, false),
            'UCV_PICTURE_NAME'          => $myCoolPicture,
            'UCV_GENDER'								=> ( $mode['edit'] == true ) ? $member_data['gender'] : '',
            'UCV_GUILD'									=> ( $mode['edit'] == true ) ? $member_data['guild'] : '',
            'UCV_PROF_V1'								=> ( $mode['edit'] == true ) ? $member_data['prof1_value'] : '',
            'UCV_PROF_V2'								=> ( $mode['edit'] == true ) ? $member_data['prof2_value'] : '',
            
            'UCV_SKILL_1'								=> ( $mode['edit'] == true ) ? $member_data['skill_1'] : '',
            'UCV_SKILL_2'								=> ( $mode['edit'] == true ) ? $member_data['skill_2'] : '',
            'UCV_SKILL_3'								=> ( $mode['edit'] == true ) ? $member_data['skill_3'] : '',
            'UCV_NOTES'                 => ( $mode['edit'] == true ) ? stripslashes($member_data['notes']) : '',
            
            'UCV_SHOW_PIC'							=> ( $mode['edit'] == true ) ? true : false,
            'UCV_IS_WOW'								=> ( $conf['uc_nowarcraft'] != 1 ) ? true : false,
            
            // Profiler Data
            'UCV_BUFFED'								=>  ( $mode['edit'] == true ) ?$member_data['blasc_id'] : '',
            'UCV_CTPROFILES'						=>  ( $mode['edit'] == true ) ?$member_data['ct_profile'] : '',
            'UCV_ALLAKHAZAM'						=>  ( $mode['edit'] == true ) ?$member_data['allakhazam'] : '',
            'UCV_CURSE_PROFILER'				=>  ( $mode['edit'] == true ) ?$member_data['curse_profiler'] : '',
            'UCV_TALENTPLANER'					=>  ( $mode['edit'] == true ) ?$member_data['talentplaner'] : '',
            )
        );

        $eqdkp->set_vars(array(
            'page_title'    => sprintf($user->lang['admin_title_prefix'], $eqdkp->config['guildtag'], $eqdkp->config['dkp_name']).': '.$user->lang['manage_members_title'],
            'template_file' => 'addchar.html',
            'gen_simple_header' => true,
            'template_path' => $pm->get_data('charmanager', 'template_path'),
            'display'       => true)
        );
?>
