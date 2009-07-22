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
 * $Id: 104_to_110.php 2560 2008-08-16 23:47:56Z wallenium $
 */

$new_version = '1.1.0';

$updateDESC = array(
	'',
	'Added Permission for configuration',
	'Added some new profile fields',
	'Added some new profile fields',
);

$updateSQL = array(
"INSERT INTO `".$table_prefix."auth_options` (`auth_id`, `auth_value`, `auth_default`) VALUES
(959, 'a_charmanager_config', 'N');",
"ALTER TABLE `" . $table_prefix . "member_additions` 
ADD `health_bar`	varchar(255) NOT NULL default '0',
ADD `second_bar` varchar(255) NOT NULL default '0',
ADD `second_name` varchar(255),
ADD `prof1_value`	varchar(255) NOT NULL default '0',
ADD `prof1_name` varchar(255),
ADD `prof2_value`	varchar(255) NOT NULL default '0',
ADD `prof2_name` varchar(255),
ADD `last_update` varchar(255);",
"ALTER TABLE `" . $table_prefix . "member_additions` 
ADD `faction`	varchar(255)",
);

?>
