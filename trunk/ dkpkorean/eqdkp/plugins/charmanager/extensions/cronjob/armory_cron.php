<?php
 /*
 * Project:     EQdkp CharManager 1
 * License:     Creative Commons - Attribution-Noncommercial-Share Alike 3.0 Unported
 * Link:		    http://creativecommons.org/licenses/by-nc-sa/3.0/
 * -----------------------------------------------------------------------
 * Began:       2006
 * Date:        $Date: 2008-12-17 14:14:16 +0100 (Mi, 17 Dez 2008) $
 * -----------------------------------------------------------------------
 * @author      $Author: wallenium $
 * @copyright   2005-2008 Simon (Wallenium) Wallmann
 * @link        http://eqdkp-plus.com
 * @package     charmanager
 * @version     $Rev: 3406 $
 * 
 * $Id: armory_cron.php 3406 2008-12-17 13:14:16Z wallenium $
 */

define('EQDKP_INC', true);
define('PLUGIN', 'charmanager');
$eqdkp_root_path = './../../../../';
include_once('../../include/common.php');
include_once('../../include/usermanagement.class.php');
include_once('../import/armory/armory.class.php');
include_once('../import/armory/trans.func.php');


$armory = new ArmoryCharLoader("вов");
$ucdb = new AdditionalDB('charmanager_config');
$CharTools = new CharTools();

// Load the right parser script version
if (version_compare(phpversion(), "5.0.0", ">=")) {
  include_once('../import/armory/parser_php5.php'); // Load for php5
} else {
  include_once('../import/armory/parser_php4.php'); // Load for php4
} 
$ucoutp = '';
//start the import
$sql = "SELECT member_name FROM " . MEMBERS_TABLE ." ORDER BY member_name";
  if (!($result = $db->query($sql))) { message_die('Could not obtain custom item data', '', __FILE__, __LINE__, $sql); }
    while($row = $db->fetch_record($result)) {
      $ucisupdatable = false;
      $xml_data = $armory->GetArmoryData($row['member_name'],$conf['uc_servername'],$conf['uc_server_loc'], 'de');
    	$parser = new XMLParser($xml_data);
  	  $parser->Parse();
    	if($parser->document->characterinfo[0]->tagChildren[0]->tagAttrs['name'] && ($parser->document->characterinfo[0]->charactertab[0]->talentspec[0]->tagAttrs['treeone'] or $parser->document->characterinfo[0]->charactertab[0]->talentspec[0]->tagAttrs['treetwo'] or $parser->document->characterinfo[0]->charactertab[0]->talentspec[0]->tagAttrs['treethree'])){
    		$ucoutp .= $armory->UTF8tify($parser->document->characterinfo[0]->tagChildren[0]->tagAttrs['name']).' ['.$parser->document->characterinfo[0]->tagChildren[0]->tagAttrs['lastmodified'].']';
    	  $ucisupdatable = true;
      }elseif(!$parser->document->characterinfo[0]->charactertab[0]->talentspec[0]->tagAttrs['treeone'] && !$parser->document->characterinfo[0]->charactertab[0]->talentspec[0]->tagAttrs['treetwo'] && !$parser->document->characterinfo[0]->charactertab[0]->talentspec[0]->tagAttrs['treethree']){
    		$ucoutp .= $row['member_name'].': <font color="orange">'.$user->lang['uc_notyetupdated'].'</font>'; 
    	}else{
    		$ucoutp .= $row['member_name'].': <font color="red">'.$user->lang['uc_noprofile_found'].'</font>'; 
    	}
	   if($ucisupdatable){
	     // Check for existing member name
  	   $sql = "SELECT member_id FROM " . MEMBERS_TABLE ." WHERE member_name = '".utf8_decode($parser->document->characterinfo[0]->tagChildren[0]->tagAttrs['name'])."'";
       if ($result2 = $db->query($sql)){
  		  $memb = $db->fetch_record($result2);
  		  $isindatabase = $memb['member_id'];
  	   }else{
  		  $isindatabase = '0';
  	   }

	   // race generation
	   $racesql = 'SELECT * FROM `'.RACE_TABLE.'`';
	   $race_result = $db->query($racesql);
	   while ( $erow = $db->fetch_record($race_result) ){
			if (de_to_en($erow['race_name']) == de_to_en($parser->document->characterinfo[0]->tagChildren[0]->tagAttrs['race'])){
				$raceid = $erow['race_id'];
			}
	   }
	   $newraceid = ($raceid) ? $raceid : 0;
	  
      // Class Generation
	   $classsql = 'SELECT * FROM `'.CLASS_TABLE.'`';
	   $class_result = $db->query($classsql);
	   while ( $crow = $db->fetch_record($class_result) ){
			if (de_to_en($crow['class_name']) == de_to_en($parser->document->characterinfo[0]->tagChildren[0]->tagAttrs['class'])){
				$classid = $crow['class_id'];
			}
	   }
	   $newclassid = ($classid) ? $classid: 0;
	
	   $iii=1;$profarry = array();
	   if($parser->document->characterinfo[0]->charactertab[0]->professions[0]->tagChildren){
		  foreach($parser->document->characterinfo[0]->charactertab[0]->professions[0]->tagChildren as $professions){
  			$profarry[$iii]['name'] 	= $professions->tagAttrs['name'];
  			$profarry[$iii]['value'] 	= $professions->tagAttrs['value'];
  			$iii++;
		  }
	   }
	
	   $dataarray = array(
										'member_name'			=> $armory->UTF8tify($parser->document->characterinfo[0]->tagChildren[0]->tagAttrs['name']),
										'member_id'				=> $isindatabase,
										'member_race_id'	=> $newraceid,
										'member_class_id'	=> $newclassid,
										'member_level'		=> ($parser->document->characterinfo[0]->tagChildren[0]->tagAttrs['level']) ? $parser->document->characterinfo[0]->tagChildren[0]->tagAttrs['level'] : 0,
										
										'skill_1'					=> ($parser->document->characterinfo[0]->charactertab[0]->talentspec[0]->tagAttrs['treeone']) ? $parser->document->characterinfo[0]->charactertab[0]->talentspec[0]->tagAttrs['treeone'] : 0,
										'skill_2'					=> ($parser->document->characterinfo[0]->charactertab[0]->talentspec[0]->tagAttrs['treetwo']) ? $parser->document->characterinfo[0]->charactertab[0]->talentspec[0]->tagAttrs['treetwo'] : 0,
										'skill_3'					=> ($parser->document->characterinfo[0]->charactertab[0]->talentspec[0]->tagAttrs['treethree']) ? $parser->document->characterinfo[0]->charactertab[0]->talentspec[0]->tagAttrs['treethree'] : 0,
										'guild'						=> utf8_decode($parser->document->characterinfo[0]->tagChildren[0]->tagAttrs['guildname']),
										'last_update'			=> $armory->Date2Timestamp($parser->document->characterinfo[0]->tagChildren[0]->tagAttrs['lastmodified']),
										'health_bar'			=> $parser->document->characterinfo[0]->charactertab[0]->characterbars[0]->tagChildren[0]->tagAttrs['effective'],
										'second_bar'			=> $parser->document->characterinfo[0]->charactertab[0]->characterbars[0]->tagChildren[1]->tagAttrs['effective'],
										'second_name'			=> $parser->document->characterinfo[0]->charactertab[0]->characterbars[0]->tagChildren[1]->tagAttrs['type'],
										'prof1_value'			=> ($profarry[1]['value']) ? $profarry[1]['value'] : '',
										'prof1_name'			=> ($profarry[1]['name']) ? $profarry[1]['name'] : '',
										'prof2_value'			=> (count($profarry) == 2) ? $profarry[2]['value'] : '',
										'prof2_name'			=> (count($profarry) == 2) ? $profarry[2]['name'] : '',
										'gender'					=> $parser->document->characterinfo[0]->tagChildren[0]->tagAttrs['gender'],
										'faction'					=> $parser->document->characterinfo[0]->tagChildren[0]->tagAttrs['faction'],
    	              'fire'						=> ($parser->document->characterinfo[0]->charactertab[0]->resistances[0]->tagChildren[1]->tagAttrs['value']) ? $parser->document->characterinfo[0]->charactertab[0]->resistances[0]->tagChildren[1]->tagAttrs['value'] : 0,
  									'nature'					=> ($parser->document->characterinfo[0]->charactertab[0]->resistances[0]->tagChildren[4]->tagAttrs['value']) ? $parser->document->characterinfo[0]->charactertab[0]->resistances[0]->tagChildren[4]->tagAttrs['value'] : 0,
  									'shadow'					=> ($parser->document->characterinfo[0]->charactertab[0]->resistances[0]->tagChildren[5]->tagAttrs['value']) ? $parser->document->characterinfo[0]->charactertab[0]->resistances[0]->tagChildren[5]->tagAttrs['value'] : 0,
  									'arcane'					=> ($parser->document->characterinfo[0]->charactertab[0]->resistances[0]->tagChildren[0]->tagAttrs['value']) ? $parser->document->characterinfo[0]->charactertab[0]->resistances[0]->tagChildren[0]->tagAttrs['value'] : 0,
  									'ice'							=> ($parser->document->characterinfo[0]->charactertab[0]->resistances[0]->tagChildren[2]->tagAttrs['value']) ? $parser->document->characterinfo[0]->charactertab[0]->resistances[0]->tagChildren[2]->tagAttrs['value'] : 0,
    	               );
  	                
		        $CharTools->updateChar($isindatabase, $dataarray, true);
	      }
	         $ucoutp .= '<br/>';
    }
    echo $ucoutp;
    $dataSet = array('uc_profileimported'=> time());
    $ucdb->UpdateConfig($dataSet, $ucdb->CheckDBFields('config_name'));
?>
