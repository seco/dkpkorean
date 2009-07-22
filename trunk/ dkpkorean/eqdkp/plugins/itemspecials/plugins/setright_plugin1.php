<?php
 /*
 * Project:     EQdkp ItemSpecials
 * License:     Creative Commons - Attribution-Noncommercial-Share Alike 3.0 Unported
 * Link:		    http://creativecommons.org/licenses/by-nc-sa/3.0/
 * -----------------------------------------------------------------------
 * Began:       2006
 * Date:        $Date: 2008-12-03 15:39:45 +0100 (Mi, 03 Dez 2008) $
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

$itemspecial_plugin['setright_plugin1.php'] = array(
			'name'			    => 'Normal Calculation',
			'path'			    => 'setright_plugin1',
			'contact'		    => 'webmaster@wallenium.de',
			'version'		    => '1.1.0');

function CalculateSetRight($calc_data, $itemdata){
	global $user, $db;
	$output = array();
	/********************************
   *		HEAD -> ROW NAMES					*
   ********************************/
	// The row heads. ('name', 'numeric'/ 'regular' / 'string')
	$output['head']	= array(
		array($user->lang['is_count_setitems']		, 'regular'),
		array($user->lang['is_count_raids']				, 'regular'),
		array($user->lang['is_tab_setright']			, 'regular')
	);
	
	/********************************
   *		BODY -> CALCULATION				*
   ********************************/

  // calculate the thing
  $raidcc = round($calc_data['raidcount']/($calc_data['itemcount'] + 1), 2);
  $output['body']	= array(
				array(
  					'count'		=> $calc_data['itemcount'] + 1,
  					'color'		=> 'neutral'
  				),
  			array(
  					'count'		=> $calc_data['raidcount'],
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
