<?php
 /*
 * Project:     EQdkp ItemSpecials
 * License:     Creative Commons - Attribution-Noncommercial-Share Alike 3.0 Unported
 * Link:		    http://creativecommons.org/licenses/by-nc-sa/3.0/
 * -----------------------------------------------------------------------
 * Began:       2006
 * Date:        $Date: 2008-12-03 15:39:45 +0100 (Wed, 03 Dec 2008) $
 * -----------------------------------------------------------------------
 * @author      $Author: wallenium $
 * @copyright   2005-2008 Simon (Wallenium) Wallmann
 * @link        http://eqdkp-plus.com
 * @package     itemspecials
 * @version     $Rev: 3302 $
 * 
 * $Id: setright_plugin1.php 3302 2008-12-03 14:39:45Z wallenium $
 */

if ( !defined('EQDKP_INC') ){
  header('HTTP/1.0 404 Not Found');exit;
} 

/*
#################
# Variables
#################
$calc_data['raid_total'] : Total amount of raids
$calc_data['countperclass']['Classid'] : Members per Class (Count). Array! class_id, have a look at __classes!
$calc_data['countperraid']['RaidID'] : Membercount/Raid (Count). Array! RaidID: Have a look at the raid_attendees sql table.!
$calc_data['itemcount'] : The total Count of the SETitems/User
$calc_data['itemsumm'] : The total Count of the all items/User
$calc_data['raidcount'] : The total Count of the Raids/User
$calc_data['membername'] : The Name of the current member
$calc_data['class'] : The Class of the current member
$calc_data['member_id'] : The Member-ID of the current member
$calc_data['member_rank'] : The Rank of the current member
$calc_data['member_level'] : The Level of the current member

// DKP Values
$calc_data['dkp_total'] : Total DKP of Member
$calc_data['dkp_current'] : Current DKP of Member
$calc_data['dkp_spent'] : DKP spent by a Member
$calc_data['dkp_adjustment'] : Adjustmens (DKP) of Member

// Arrays
$calc_data['raids_array'] : Array with all raids
$calc_data['memberitems'] : Array with items of member
$calc_data['memberraids'] : Array with raids of member

$itemdata is a "array_merge_recursive"-Array of the tier1, tier2, tier3 Data

#################
# Functions
#################
$mysetright->AttendanceCount($calc_data['attendance'], DAYS); : Count of Array items in the last days

You can use the normal EQDKP Variables in the function.
*/

$itemspecial_plugin['setright_plugin3.php'] = array(
			'name'			    => array(
													'en'	=> '90d Attendance / (Member Setitems last 90d + 1)*2',
													'de'	=> '90d Raidteilname / (Setitems per Member der letzten 90d + 1)*2',
													// For our translators: simply add the string "sr_setright_plugin3" t the IS language file!
													),
			'path'			    => 'setright_plugin3',
			'contact'		    => 'wallenium@eqdkp-plus.com',
			'version'		    => '1.0.0');

// The function name must be the same as the path above
function setright_plugin3($calc_data, $itemdata){
	global $user, $db,  $mysetright;
	$output = array();
	
	/********************************
   *		HEAD -> ROW NAMES					*
   ********************************/
	// The row heads. ('name', 'numeric'/ 'regular' / 'string')
	$output['head']	= array(
		array($user->lang['is_count_attendance'].sprintf($user->lang['is_count_lastxdays'],'90')		, 'regular'),
		array($user->lang['is_count_setitems']	, 'regular'),
		array($user->lang['is_tab_setright']		, 'regular')
	);
	
	/********************************
   *		BODY -> CALCULATION				*
   ********************************/
  // calculate set right
	$raid_attendance90 	= $mysetright->AttendanceCount($calc_data['memberraids'], 90);
	$raid_pieces90a			= $mysetright->AttendanceCount($calc_data['memberitems'],90);
	$raid_pieces90b			= $raid_pieces90a+1;

  $raidcc = round($raid_attendance90/($raid_pieces90b*2), 2);
  $output['body']	= array(
				array(
  					'count'		=> $raid_attendance90,
  					'color'		=> 'neutral'
  				),
  			array(
  					'count'		=> $raid_pieces90a,
  					'color'		=> 'neutral'
  	),
  			array(
  					'count'		=> $raidcc,
  					'color'		=> color_item($raidcc)
  	)
  );
  return $output;
}
?>
