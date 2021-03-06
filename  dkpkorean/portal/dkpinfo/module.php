<?php
/*
 * Project:     EQdkp-Plus
 * License:     Creative Commons - Attribution-Noncommercial-Share Alike 3.0 Unported
 * Link:		http://creativecommons.org/licenses/by-nc-sa/3.0/
 * -----------------------------------------------------------------------
 * Began:       2008
 * Date:        $Date: 2009-07-01 00:46:35 +0200 (Mi, 01 Jul 2009) $
 * -----------------------------------------------------------------------
 * @author      $Author: osr-corgan $
 * @copyright   2006-2008 Corgan - Stefan Knaak | Wallenium & the EQdkp-Plus Developer Team
 * @link        http://eqdkp-plus.com
 * @package     eqdkp-plus
 * @version     $Rev: 5132 $
 * 
 * $Id: module.php 5132 2009-06-30 22:46:35Z osr-corgan $
 */

if ( !defined('EQDKP_INC') ){
    header('HTTP/1.0 404 Not Found');exit;
}

$portal_module['dkpinfo'] = array(
			'name'			    => 'DKPInfo Module',
			'path'			    => 'dkpinfo',
			'version'		    => '1.0.2',
			'author'        => 'Corgan',
			'contact'		    => 'http://www.eqdkp-plus.com',
			'description'   => 'Detailed DKP Information',
			'positions'     => array('left1', 'left2', 'right'),
      'install'       => array(
                            'autoenable'        => '1',
                            'defaultposition'   => 'left2',
                            'defaultnumber'     => '0',
                          ),
    );

$portal_settings['dkpinfo'] = array(
);

if(!function_exists(dkpinfo_module))
{
  function dkpinfo_module()
  {
  	global $eqdkp , $user , $tpl, $db, $plang, $pdc;

  		$DKPInfo = $pdc->get('dkp.portal.modul.dkpinfo',false,true);
  		if (!$DKPInfo) 
  		{

			$a_dkpinfo = array();
			// Get total raids
	    	$sql ="SELECT count(*) as alle FROM __raids;";
			$a_dkpinfo['raids'] = $db->query_first($sql);
	
			// Get total players
			$sql = "SELECT count(member_id) FROM __members";
			$a_dkpinfo['member'] = $db->query_first($sql);
	
			// Get total items
			$sql = "SELECT COUNT(item_id) FROM __items";
			$a_dkpinfo['items'] = $db->query_first($sql);
	
			$DKPInfo = '<table width="100%" border="0" cellspacing="1" cellpadding="2" class="noborder">
						<tr><td class="row1">'.$plang['portal_info_raids'].'</td><td class="row1">'. $a_dkpinfo['raids']. '</td></tr>
						<tr><td class="row2">'.$plang['portal_info_player'].'</td><td class="row2">'. $a_dkpinfo['member']. '</td></tr>
						<tr><td class="row1">'.$plang['portal_info_items'].'</td><td class="row1">'. $a_dkpinfo['items']. '</td></tr>
						</table>
						';
			$pdc->put('dkp.portal.modul.dkpinfo',$DKPInfo,86400,false,true);
  		}
			

		return $DKPInfo;
  }
}
?>
