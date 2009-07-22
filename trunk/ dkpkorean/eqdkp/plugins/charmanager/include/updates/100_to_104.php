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
 * $Id: 100_to_104.php 2560 2008-08-16 23:47:56Z wallenium $
 */
 
$new_version = '1.0.4';

$updateDESC = array(
	'',
	'Added Permission for connection',
	'Added configuration table',
);

$updateSQL = array(
"INSERT INTO `".$table_prefix."auth_options` (`auth_id`, `auth_value`, `auth_default`) VALUES
(958, 'u_charmanager_connect', 'Y');",
"CREATE TABLE IF NOT EXISTS " . $table_prefix . "charmanager_config (
				          `config_name` varchar(255) NOT NULL default '',
                  `config_value` varchar(255) default NULL,
                  PRIMARY KEY  (`config_name`)
		              )"
);

?>
