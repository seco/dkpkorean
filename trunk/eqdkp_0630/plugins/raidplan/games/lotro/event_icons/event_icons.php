<?php
 /*
 * Project:     EQdkp RaidPlanner
 * License:     Creative Commons - Attribution-Noncommercial-Share Alike 3.0 Unported
 * Link:		    http://creativecommons.org/licenses/by-nc-sa/3.0/
 * -----------------------------------------------------------------------
 * Began:       2005
 * Date:        $Date: 2008-11-03 13:24:11 +0100 (Mo, 03 Nov 2008) $
 * -----------------------------------------------------------------------
 * @author      $Author: wallenium $
 * @copyright   2005-2008 Simon (Wallenium) Wallmann
 * @link        http://eqdkp-plus.com
 * @package     raidplan
 * @version     $Rev: 2963 $
 * 
 * $Id: event_icons.php 2963 2008-11-03 12:24:11Z wallenium $
 */

if ( !defined('EQDKP_INC') ){
    header('HTTP/1.0 404 Not Found');exit;
}

// all events must be in lowercase, i'll check it with strtolower. upper case
// event names will not be found!

$instance_picture_arry = array(
						// other
						'andere...'											=> 'other',
						'other...'											=> 'other',
						'test'                          => 'other',
					);
?>
