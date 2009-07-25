<?php
 /*
 * Project:     EQdkp ItemSpecials
 * License:     Creative Commons - Attribution-Noncommercial-Share Alike 3.0 Unported
 * Link:		    http://creativecommons.org/licenses/by-nc-sa/3.0/
 * -----------------------------------------------------------------------
 * Began:       2006
 * Date:        $Date: 2009-04-27 19:37:12 +0200 (Mo, 27 Apr 2009) $
 * -----------------------------------------------------------------------
 * @author      $Author: wallenium $
 * @copyright   2005-2008 Simon (Wallenium) Wallmann
 * @link        http://eqdkp-plus.com
 * @package     itemspecials
 * @version     $Rev: 4675 $
 * 
 * $Id: setright_plugin2.php 4675 2009-04-27 17:37:12Z wallenium $
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


$itemspecial_plugin['setright_plugin2.php'] = array(
			'name'			    => array(
													'en'	=> '30 days activity * current DKP',
													'de'	=> 'Aktivität der letzten 30d * aktuelle DKP',
													// For our translators: simply add the string "sr_setright_plugin2" t the IS language file!
													),
			'path'			    => 'setright_plugin2',
			'contact'		    => 'webmaster@wallenium.de',
			'version'		    => '1.0.0');

// The function name must be the same as the path above
function setright_plugin2($calc_data, $itemdata){
	global $user, $db, $mysetright;
	$output = array();
	
	/********************************
   *		HEAD -> ROW NAMES					*
   ********************************/
	// The row heads. ('name', 'numeric'/ 'regular' / 'string')
	$output['head']	= array(
		array($user->lang['is_priority']		, 'regular'),
		array($user->lang['current']				, 'regular'),
		array($user->lang['is_last30days']	, 'numeric')
	);
	
	/********************************
   *		BODY -> CALCULATION				*
   ********************************/
	
  // Check if the Setcount is nil, set to 1 if its 0
  $current_dkp = ($calc_data['dkp_current']== 0 ) ? 0 : $calc_data['dkp_current'];

  // calculate set right
  $member_raidcount	= $mysetright->AttendanceCount($calc_data['memberraids'], 30);
  $all_raidcount		= $mysetright->AttendanceCount($calc_data['raids_array'], 30);
  $raidattendance		= ( $all_raidcount > 0 ) ? round(($member_raidcount / $all_raidcount) * 100) : 0;
  $curr_attandance	= round(($current_dkp*$raidattendance)/100, 0);

  $output['body']	= array(
				array(
  					'count'		=> $curr_attandance,
  					'color'		=> color_item($curr_attandance)
  				),
  			array(
  					'count'		=> $current_dkp,
  					'color'		=> color_item($current_dkp)
  	),
  			array(
  					'count'		=> $raidattendance.' %',
  					'color'		=> color_item($raidattendance)
  	)
  );
  return $output;
}

?>
