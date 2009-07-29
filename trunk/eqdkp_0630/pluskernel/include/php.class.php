<?php
 /*
 * Project:     EQdkp-Plus
 * License:     Creative Commons - Attribution-Noncommercial-Share Alike 3.0 Unported
 * Link:		http://creativecommons.org/licenses/by-nc-sa/3.0/
 * -----------------------------------------------------------------------
 * Began:       May 7, 2007
 * Date:        $Date: 2009-07-03 15:38:13 +0200 (Fr, 03 Jul 2009) $
 * -----------------------------------------------------------------------
 * @author      $Author: ghoschdi $
 * @copyright   2006-2008 Corgan - Stefan Knaak | Wallenium & the EQdkp-Plus Developer Team
 * @link        http://eqdkp-plus.com
 * @package     eqdkp-plus
 * @version     $Rev: 5151 $
 * 
 * $Id: php.class.php 5151 2009-07-03 13:38:13Z ghoschdi $
 */

if ( !defined('EQDKP_INC') ){
    header('HTTP/1.0 404 Not Found');exit;
}

class phpAdditions EXTENDS EQdkp_Plugin
{

	function get_php_setting($val, $colour=0, $yn=1) {
		$r =  (ini_get($val) == '1' ? 1 : 0);

		if ($colour) {
			if ($yn) {
				$r = $r ? '<span style="color: green;">ON</span>' : '<span style="color: red;">OFF</span>';
			} else {
				$r = $r ? '<span style="color: red;">ON</span>' : '<span style="color: green;">OFF</span>';
			}

			return $r;
		} else {
			return $r ? 'ON' : 'OFF';
		}
	}

	function get_curl_setting($colour=0)
	{
		$r =  (function_exists('curl_version') ? 1 : 0);
		if ($colour) {
				$r = $r ? '<span style="color: green;">ON</span> ('.curl_version().')' : '<span style="color: red;">OFF</span>';
			return $r;
		} else {
			return $r ? 'ON' : 'OFF';
		}
	}

	function check_PHP_Function($_function,$colour=0)
	{
		$r =  (function_exists($_function) ? 1 : 0);
		if ($colour) {
				$r = $r ? '<span style="color: green;">ON</span>' : '<span style="color: red;">OFF</span>';
			return $r;
		} else {
			return $r ? 'ON' : 'OFF';
		}
	}


}
?>