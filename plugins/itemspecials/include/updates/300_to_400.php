<?php
 /*
 * Project:     EQdkp ItemSpecials
 * License:     Creative Commons - Attribution-Noncommercial-Share Alike 3.0 Unported
 * Link:		    http://creativecommons.org/licenses/by-nc-sa/3.0/
 * -----------------------------------------------------------------------
 * Began:       2006
 * Date:        $Date: 2009-02-28 19:38:16 +0100 (Sa, 28 Feb 2009) $
 * -----------------------------------------------------------------------
 * @author      $Author: wallenium $
 * @copyright   2005-2008 Simon (Wallenium) Wallmann
 * @link        http://eqdkp-plus.com
 * @package     itemspecials
 * @version     $Rev: 4031 $
 * 
 * $Id: 300_to_400.php 4031 2009-02-28 18:38:16Z wallenium $
 */
 
if ( !defined('EQDKP_INC') ){
  header('HTTP/1.0 404 Not Found');exit;
} 

$sec_version = '4.0.0';

$updateDESC = array(
	'',
	'Add Tier 4 to config',
	'Add Tier 5 to config',
	'Disable Tier 1 Output in Settings',
	'Disable Tier 2 Output in Settings',
);

$updateSQL = array(
"INSERT INTO __itemspecials_config ( `config_name` , `config_value` )
VALUES ('set_show_t4', '1'), ('set_show_t5', '1');",
"INSERT INTO __itemspecials_config ( `config_name` , `config_value` )
VALUES ('sr_use_t1', '1'), ('sr_use_t2', '1'), ('sr_use_t3', '1'), ('sr_use_t4', '1'), ('sr_use_t5', '1');",
"UPDATE __itemspecials_config SET `config_value` = '0' WHERE `config_name` = 'set_show_t1' LIMIT 1 ;",
"UPDATE __itemspecials_config SET `config_value` = '0' WHERE `config_name` = 'set_show_t2' LIMIT 1 ;",
);

?>
