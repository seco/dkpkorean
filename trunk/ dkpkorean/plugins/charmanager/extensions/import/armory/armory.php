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
 * $Id: armory.php 2560 2008-08-16 23:47:56Z wallenium $
 */
 
define('EQDKP_INC', true);
define('PLUGIN', 'charmanager');
$eqdkp_root_path = './../../../../../';
include_once($eqdkp_root_path .'/plugins/charmanager/include/common.php');
include_once($eqdkp_root_path .'/plugins/charmanager/include/usermanagement.class.php');
include_once('armory.class.php');
include_once('trans.func.php');

// Load the right parser script version
if (version_compare(phpversion(), "5.0.0", ">=")) {
  include_once('parser_php5.php'); // Load for php5
} else {
  include_once('parser_php4.php'); // Load for php4
}

// charmanager Table
if (!defined('MEMBER_ADDITION_TABLE')) { define('MEMBER_ADDITION_TABLE', $table_prefix . 'member_additions'); }

// init the Armory Loader
$armory = new ArmoryCharLoader("вов");
$CharTools = new CharTools();

if(empty($_GET['step'])){
		// Load the settings:
			$temp_svname = ($conf['uc_servername']) ? $conf['uc_servername'] : '';

		// generate output
		$hmtlout .= ' <form name="settings" method="post" action="armory.php?step=1">';
		$hmtlout .= $user->lang['uc_charname'].' <input name="charname" size="15" maxlength="50" value="" class="input" type="text">';
		if($conf['uc_lockserver'] == 1){
			$hmtlout .= ' @'.$conf['uc_servername'].'<br/>';
			$hmtlout .= genHiddenInput('servername',$conf['uc_servername']);
		}else{
			$hmtlout .= '<br/>'.$user->lang['uc_servername'].' <input name="servername" size="15" maxlength="50" value="'.$temp_svname.'" class="input" type="text">';
		}	
		if($conf['uc_server_loc']){
			$hmtlout .= genHiddenInput('server_loc', $conf['uc_server_loc']);
		}else{
			$hmtlout .= "<br/>".$user->lang['uc_server_loc']."<select size='1'  name='server_loc' class='input'><option value='eu' >EU</option><option value='us' >US</option></select>";
		}
		$hmtlout .= '<br/><input type="submit" name="submiti" value="'.$user->lang['uc_import_forw'].'" class="mainoption" />';
  	$hmtlout .= '</form>';
	echo $hmtlout;
}elseif($_GET['step'] == '1'){	
	// Check for existing member name
	$sql = "SELECT member_id FROM " . MEMBERS_TABLE ." WHERE member_name = '".$_POST['charname']."'";
	if ($result = $db->query($sql)){
		$memb = $db->fetch_record($result);
		$isindatabase = $memb['member_id'];
	}else{
		$isindatabase = '0';
	}

	// Load the Armory Data
	$xml_data = $armory->GetArmoryData($_POST['charname'],$_POST['servername'],$_POST['server_loc'], 'de');
	
	// Parse Data to Array
	$parser = new XMLParser($xml_data);
	$parser->Parse();

	$hmtlout = '<style type="text/css">
								p.info { border:1px solid red; background-color:#E0E0E0; padding:4px; margin:0px; }
							</style>'; 
	$hmtlout .= '<form name="settings" method="post" action="armory.php?step=2">';
	$hmtlout .= genHiddenInput('member_id', $isindatabase);
	$hmtlout .= genHiddenInput('member_name', $armory->UTF8tify($parser->document->characterinfo[0]->tagChildren[0]->tagAttrs['name']));
	$hmtlout .= genHiddenInput('member_level', $parser->document->characterinfo[0]->tagChildren[0]->tagAttrs['level']);
	$hmtlout .= genHiddenInput('fire', $parser->document->characterinfo[0]->charactertab[0]->resistances[0]->tagChildren[1]->tagAttrs['value']);
	$hmtlout .= genHiddenInput('nature', $parser->document->characterinfo[0]->charactertab[0]->resistances[0]->tagChildren[4]->tagAttrs['value']);
	$hmtlout .= genHiddenInput('shadow', $parser->document->characterinfo[0]->charactertab[0]->resistances[0]->tagChildren[5]->tagAttrs['value']);
	$hmtlout .= genHiddenInput('arcane', $parser->document->characterinfo[0]->charactertab[0]->resistances[0]->tagChildren[0]->tagAttrs['value']);
	$hmtlout .= genHiddenInput('ice', $parser->document->characterinfo[0]->charactertab[0]->resistances[0]->tagChildren[2]->tagAttrs['value']);
	$hmtlout .= genHiddenInput('guild', $armory->UTF8tify($parser->document->characterinfo[0]->tagChildren[0]->tagAttrs['guildname']));
	$hmtlout .= genHiddenInput('skill_1', $parser->document->characterinfo[0]->charactertab[0]->talentspec[0]->tagAttrs['treeone']);
	$hmtlout .= genHiddenInput('skill_2', $parser->document->characterinfo[0]->charactertab[0]->talentspec[0]->tagAttrs['treetwo']);
	$hmtlout .= genHiddenInput('skill_3', $parser->document->characterinfo[0]->charactertab[0]->talentspec[0]->tagAttrs['treethree']);
	
	$hmtlout .= genHiddenInput('last_update', $armory->Date2Timestamp($parser->document->characterinfo[0]->tagChildren[0]->tagAttrs['lastmodified']));
	$hmtlout .= genHiddenInput('health_bar', $parser->document->characterinfo[0]->charactertab[0]->characterbars[0]->tagChildren[0]->tagAttrs['effective']);
	$hmtlout .= genHiddenInput('second_bar', $parser->document->characterinfo[0]->charactertab[0]->characterbars[0]->tagChildren[1]->tagAttrs['effective']);
	$hmtlout .= genHiddenInput('second_name', $parser->document->characterinfo[0]->charactertab[0]->characterbars[0]->tagChildren[1]->tagAttrs['type']);
	
	$hmtlout .= genHiddenInput('gender', $parser->document->characterinfo[0]->tagChildren[0]->tagAttrs['gender']);
	$hmtlout .= genHiddenInput('faction', $parser->document->characterinfo[0]->tagChildren[0]->tagAttrs['faction']);
	
		$iii=1;$profarry = array();
	if($parser->document->characterinfo[0]->charactertab[0]->professions[0]->tagChildren){
		foreach($parser->document->characterinfo[0]->charactertab[0]->professions[0]->tagChildren as $professions){
			$profarry[$iii]['name'] 	= $professions->tagAttrs['name'];
			$profarry[$iii]['value'] 	= $professions->tagAttrs['value'];
			$iii++;
		}
		$hmtlout .= genHiddenInput('prof1_value', $profarry[1]['value']);
		$hmtlout .= genHiddenInput('prof1_name', $profarry[1]['name']);
		$hmtlout .= genHiddenInput('prof2_value', $profarry[2]['value']);
		$hmtlout .= genHiddenInput('prof2_name', $profarry[2]['name']);
	}else{
		$hmtlout .= genHiddenInput('prof1_value', '');
		$hmtlout .= genHiddenInput('prof1_name', '');
		$hmtlout .= genHiddenInput('prof2_value', '');
		$hmtlout .= genHiddenInput('prof2_name', '');
	}
	
	// race generation
	$racesql = 'SELECT * FROM `'.RACE_TABLE.'`';
	$race_result = $db->query($racesql);
	while ( $erow = $db->fetch_record($race_result) )
	{
			if (de_to_en($erow['race_name']) == de_to_en($parser->document->characterinfo[0]->tagChildren[0]->tagAttrs['race'])){
				$raceid = $erow['race_id'];
			}
	}
	$newraceid = ($raceid) ? $raceid : 0;
	$hmtlout .= genHiddenInput('member_race_id',$newraceid);
	
	// Class Generation
	$classsql = 'SELECT * FROM `'.CLASS_TABLE.'`';
	$class_result = $db->query($classsql);
	while ( $crow = $db->fetch_record($class_result) )
	{
			if (de_to_en($crow['class_name']) == de_to_en($parser->document->characterinfo[0]->tagChildren[0]->tagAttrs['class'])){
				$classid = $crow['class_id'];
			}
	}
	$newclassid = ($classid) ? $classid: 0;
	$hmtlout .= genHiddenInput('member_class_id',$newclassid);
	
	// viewable Output
	if($parser->document->characterinfo[0]->tagChildren[0]->tagAttrs['name']){
	$hmtlout .= sprintf($user->lang['uc_charfound'], $armory->UTF8tify($parser->document->characterinfo[0]->tagChildren[0]->tagAttrs['name'])).'<br>';
	$hmtlout .= sprintf($user->lang['uc_charfound2'], $parser->document->characterinfo[0]->tagChildren[0]->tagAttrs['lastmodified']);
	$hmtlout .= '<br/><p class="info">'.$user->lang['uc_charfound3'].'</p>';
	if(!$isindatabase){
		if($user->check_auth('u_charmanager_connect', false)){
			$hmtlout .= '<br/><input type="checkbox" name="overtakeuser" value="1" />';
		}else{
   		$hmtlout .= '<br/><input type="checkbox" name="overtakeuser" value="1" disabled="disabled" checked="checked" />';
  		$hmtlout .= genHiddenInput('overtakeuser','1');
  	}
  	$hmtlout .= ' '.$user->lang['overtake_char'];
  }
	$hmtlout .= '<center><input type="submit" name="submiti" value="'.$user->lang['uc_prof_import'].'" class="mainoption"></center>';
	}else{
		$hmtlout .= $user->lang['uc_armory_confail'];
	}
	$hmtlout .= '</form>';
	echo $hmtlout;
}elseif($_GET['step'] == '2'){
	if(!empty($_POST['member_id'])){
		// update
		$info = $CharTools->updateChar($_POST['member_id'], '', true);
		$msg = ($info[0] == true) ? $user->lang['uc_upd_succ'].' (ID: '.$_POST['member_id'].')' : $user->lang['uc_imp_failed'].' (ID: '.$_POST['member_id'].')';
		echo $msg;
	}else{
		// insert
		$info = $CharTools->addChar($_POST['member_name'], true);
		$msg = ($info[0] == true) ? $user->lang['uc_imp_succ'] : $user->lang['uc_imp_failed'];
		echo $msg;
	}
}

function genHiddenInput($name, $inpot){
	$inp = '<input name="'.$name.'" size="15" maxlength="50" value="'.$inpot.'" class="input" type="hidden">';
	return $inp;
}

?>
