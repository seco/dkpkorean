<?php
 /*
 * Project:     EQdkp ItemSpecials
 * License:     Creative Commons - Attribution-Noncommercial-Share Alike 3.0 Unported
 * Link:		    http://creativecommons.org/licenses/by-nc-sa/3.0/
 * -----------------------------------------------------------------------
 * Began:       2006
 * Date:        $Date: 2009-03-01 16:00:23 +0100 (So, 01 Mrz 2009) $
 * -----------------------------------------------------------------------
 * @author      $Author: wallenium $
 * @copyright   2005-2008 Simon (Wallenium) Wallmann
 * @link        http://eqdkp-plus.com
 * @package     itemspecials
 * @version     $Rev: 4037 $
 * 
 * $Id: setright_plugin2.php 4037 2009-03-01 15:00:23Z wallenium $
 */

if ( !defined('EQDKP_INC') ){
  header('HTTP/1.0 404 Not Found');exit;
} 

/*
Variables to use:
$calc_data['raid_total'] : Total amount of raids
$calc_data['countperclass']['Classname'] : Members per Class (Count). Array! Classname p.e. "Hunter", have a look at the includes/data.php!
$calc_data['countperraid']['RaidID'] : Membercount/Raid (Count). Array! RaidID: Have a look at the raid_attendees sql table.!

$calc_data['itemcount'] : The total Count of the SETitems/User
$calc_data['itemsumm'] : The total Count of the all items/User
$calc_data['raidcount'] : The total Count of the Raids/User
$calc_data['membername'] : The Name of the current member
$calc_data['class'] : The Class of the current member
$calc_data['member_id'] : The Member-ID of the current member
$calc_data['member_rank'] : The Rank of the current member
$calc_data['member_level'] : The Level of the current member
$calc_data['dkp_total'] : Total DKP of Member
$calc_data['current_dkp'] : Current DKP of Member
$calc_data['attendance_30'] : general raid attendance last 30 days

$itemdata is a "array_merge_recursive"-Array of the tier1, tier2, tier3 Data

You can use the normal EQDKP Variables in the function.
*/

$itemspecial_plugin['setright_plugin2.php'] = array(
			'name'			    => '30 days activity * current DKP ',
			'path'			    => 'setright_plugin2',
			'contact'		    => 'webmaster@wallenium.de',
			'version'		    => '1.0.0 beta');

function CalculateSetRight($calc_data, $itemdata){
	global $user, $db;
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
  $current_dkp = ($calc_data['current_dkp']== 0 ) ? 0 : $calc_data['current_dkp'];
  
  // 30 days attendance of this member
  $thirty_days = mktime(0, 0, 0, date('m'), date('d')-30, date('Y'));
  $rc_sql = "SELECT count(*)
             FROM __raids r, __raid_attendees ra
             WHERE (ra.raid_id = r.raid_id)
             AND (ra.member_name='".$calc_data['membername']."')
             AND (r.raid_date BETWEEN ".$thirty_days.' AND '.time().')';
  $individual_raid_count = $db->query_first($rc_sql);
  // calculate the thing
  $raidattendance = ( $calc_data['attendance_30'] > 0 ) ? round(($individual_raid_count / $calc_data['attendance_30']) * 100) : 0;
  $curr_attandance = round(($current_dkp*$raidattendance)/100, 0);
  
  $output['body']	= array(
				array(
  					'count'		=> $curr_attandance,
  					'color'		=> color_item($curr_attandance)
  				),
  			array(
  					'count'		=> $calc_data['current_dkp'],
  					'color'		=> color_item($calc_data['current_dkp'])
  	),
  			array(
  					'count'		=> $raidattendance.' %',
  					'color'		=> color_item($raidattendance)
  	)
  );
  return $output;
}

?>
