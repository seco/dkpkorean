<?php
 /*
 * Project:     EQdkp-Plus
 * License:     Creative Commons - Attribution-Noncommercial-Share Alike 3.0 Unported
 * Link:		http://creativecommons.org/licenses/by-nc-sa/3.0/
 * -----------------------------------------------------------------------
 * Began:       May 7, 2007
 * Date:        $Date: 2008-07-29 00:22:12 +0200 (Di, 29 Jul 2008) $
 * -----------------------------------------------------------------------
 * @author      $Author: osr-corgan $
 * @copyright   2006-2008 Corgan - Stefan Knaak | Wallenium & the EQdkp-Plus Developer Team
 * @link        http://eqdkp-plus.com
 * @package     eqdkp-plus
 * @version     $Rev: 2449 $
 * 
 * $Id: php.class.php 2449 2008-07-28 22:22:12Z osr-corgan $
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
