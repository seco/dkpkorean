<?php

/*
+---------------------------------------------------------------+
|       Itemstats FR Core by Yahourt
|		modded by Corgan for EQdkp Plus
|		Add WoWHead & Armory Support
|
|		$Id: config_armory.php 1765 2008-03-22 11:27:19Z osr-corgan $
+---------------------------------------------------------------+
*/

/*
 * Wowhead configuration
 * started: 04/05/2007
 *
 * author: Frank Matheron
 * email: fenuzz@gmail.com
 * description: wowhead support mod configuration settings
 *
 *
 * part of the itemstats wowhead support mod version 0.3.0
 *
 */

//
// WOWHEAD SUPPORT SETTINGS
//

// template to use when creating wowhead tooltips
define('ARMORY_TEMPLATE', 'popup_wowhead.tpl');
define('ARMORY_CRAFT', 'craft_wowhead.tpl');

// enable/disable the automatic downloading of icons
if (!defined('DOWNLOAD_ICONS'))
define('DOWNLOAD_ICONS', false);

define('DECODE_UTF8', false);

// local path to the directory in which the downloaded icons should be stored
// make sure the script has write access to this directory
if (!defined('LOCAL_ICON_STORE_PATH'))
define('LOCAL_ICON_STORE_PATH', dirname(__FILE__) . '/wowhead_icons/');

// remote path where the icons can be downloaded
if (!defined('REMOTE_ICON_STORE_PATH'))
define('REMOTE_ICON_STORE_PATH', 'http://static.wowhead.com/images/icons/medium/');

?>