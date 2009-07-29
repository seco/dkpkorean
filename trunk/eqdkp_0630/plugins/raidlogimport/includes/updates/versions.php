<?php
 /*
 * Project:     EQdkp-Plus Raidlogimport
 * License:     Creative Commons - Attribution-Noncommercial-Share Alike 3.0 Unported
 * Link:		http://creativecommons.org/licenses/by-nc-sa/3.0/
 * -----------------------------------------------------------------------
 * Began:       2008
 * Date:        $Date: 2009-05-07 17:52:03 +0200 (Do, 07 Mai 2009) $
 * -----------------------------------------------------------------------
 * @author      $Author: hoofy_leon $
 * @copyright   2008-2009 hoofy_leon
 * @link        http://eqdkp-plus.com
 * @package     raidlogimport
 * @version     $Rev: 4786 $
 *
 * $Id: versions.php 4786 2009-05-07 15:52:03Z hoofy_leon $
 */

if(!defined('EQDKP_INC'))
{
	header('HTTP/1.0 404 Not Found');
	exit;
}
$up_updates = array(
	'0.4.0'	=> array(
		'file'	=> '030-040.php',
		'old'	=> '0.3.0'
	),
	'0.4.0.1' => array(
		'file'	=> '040-0401.php',
		'old'	=> '0.4.0'
	),
	'0.4.2'	=> array(
		'file'	=> '0401-042.php',
		'old'	=> '0.4.0.1'
	),
	'0.4.2.1' => array(
		'file'	=> '042-0421.php',
		'old'	=> '0.4.2'
	),
	'0.4.3'	=> array(
		'file'	=> '0421-043.php',
		'old'	=> '0.4.2.1'
	),
	'0.4.3.1' => array(
		'file'	=> '043-0431.php',
		'old'	=> '0.4.3'
	),
	'0.4.4' => array(
		'file'	=> '0431-044.php',
		'old'	=> '0.4.3.1'
	),
	'0.4.5' => array(
		'file'	=> '044-045.php',
		'old'	=> '0.4.4'
	),
	'0.4.5.1' => array(
		'file'	=> '045-0451.php',
		'old'	=> '0.4.5'
	),
	'0.4.6' => array(
		'file'	=> '0451-046.php',
		'old'	=> '0.4.5.1'
	),
	'0.5' => array(
		'file'	=> '046-05.php',
		'old'	=> '0.4.6'
	),
	'0.5.1' => array(
		'file'	=> '05-051.php',
		'old'	=> '0.5'
	),
	'0.5.1.3' => array(
		'file'	=> '051-0513.php',
		'old'	=> '0.5.1.2'
	),
	'0.5.1.4' => array(
		'file'	=> '0513-0514.php',
		'old'	=> '0.5.1.3'
	),
	'0.5.1.6' => array(
		'file'	=> '0514-0516.php',
		'old'	=> '0.5.1.4'
	),
	'0.5.1.9' => array(
		'file'	=> '0516-0519.php',
		'old'	=> '0.5.1.6'
	),
	'0.5.2.2' => array(
		'file'	=> '0519-0522.php',
		'old'	=> '0.5.1.9'
	),
	'0.5.3' => array(
		'file'	=> '0522-053.php',
		'old'	=> '0.5.2.2'
	),
	'0.5.4.1'	=> array(
		'file'	=> '053-054.php',
		'old'	=> '0.5.4'
	)
);
?>
