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
 * $Id: functions.php 2560 2008-08-16 23:47:56Z wallenium $
 */

function CheckUptime($sitename){
	if(function_exists('fsockopen')){
		$fp = fsockopen($sitename, 80, $errno, $errstr, 10);
		if($fp){
			$upout = 'Online';
		}else{
			$upout = 'Offline';
		}
	}else{
		$upout = 'n/a';
	}
	return $upout;
}
?>
