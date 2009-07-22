<?php
 /*
 * Project:     eqdkpPLUS Libraries: pluginUpdates
 * License:     Creative Commons - Attribution-Noncommercial-Share Alike 3.0 Unported
 * Link:		    http://creativecommons.org/licenses/by-nc-sa/3.0/
 * -----------------------------------------------------------------------
 * Began:       2009
 * Date:        $Date: 2009-02-23 18:36:44 +0100 (Mo, 23 Feb 2009) $
 * -----------------------------------------------------------------------
 * @author      $Author: wallenium $
 * @copyright   2009 Simon (Wallenium) Wallmann
 * @link        http://eqdkp-plus.com
 * @package     libraries:pluginUpdates
 * @version     $Rev: 3966 $
 * 
 * $Id: pluginlist.php 3966 2009-02-23 17:36:44Z wallenium $
 */

if ( !defined('EQDKP_INC') ){
    header('HTTP/1.0 404 Not Found');exit;
}

$plugin_names	= array(
										'raidplan'	=> array(
              											'table'        => 'raidplan_config',
              											'fieldprefix'  => 'rp_',
              											'inclfolder'   => 'includes',
              											'redirect'     => 'settings.php'
											),
										'charmanager'	=> array(
              											'table'        => 'charmanager_config',
              											'fieldprefix'  => 'uc_',
              											'inclfolder'   => 'include',
              											'redirect'     => 'settings.php'
											),
										'itemspecials'	=> array(
              											'table'        => 'itemspecials_config',
              											'fieldprefix'  => 'is_',
              											'inclfolder'   => 'include',
              											'redirect'     => 'settings.php'
											),
										'newsletter'	=> array(
              											'table'        => 'newsletter_config',
              											'fieldprefix'  => 'nl_',
              											'inclfolder'   => 'include',
              											'redirect'     => 'settings.php'
											),
										'raidbanker'	=> array(
              											'table'        => 'raidbanker_config',
              											'fieldprefix'  => 'rb_',
              											'inclfolder'   => 'includes',
              											'redirect'     => 'settings.php'
											),
										'shoutbox'	=> array(
              											'table'        => 'shoutbox_config',
              											'fieldprefix'  => 'sb_',
              											'inclfolder'   => 'includes',
              											'redirect'     => 'settings.php'
											),
										'bosssuite'	=> array(
              											'table'        => 'bs_config',
              											'fieldprefix'  => 'bb_',
              											'inclfolder'   => 'include',
              											'redirect'     => 'settings.php'
											),
										'info'	=> array(
              											'table'        => 'info_config',
              											'fieldprefix'  => 'info_',
              											'inclfolder'   => 'include',
              											'redirect'     => 'settings.php'
											),
										'raidlogimport'	=> array(
              											'table'        => 'raidlogimport_config',
              											'fieldprefix'  => 'rli_',
              											'inclfolder'   => 'includes',
              											'redirect'     => 'settings.php'
											),
										'gallery'	=> array(
              											'table'        => 'gallery_config',
              											'fieldprefix'  => '',
              											'inclfolder'   => 'include',
              											'redirect'     => 'settings.php'
											),
										/*'guildrequest'	=> array(
              											'table'        => 'guildrequest_config',
              											'fieldprefix'  => '',
              											'inclfolder'   => 'include',
              											'redirect'     => 'admin.php'
											),*/
							);

?>
