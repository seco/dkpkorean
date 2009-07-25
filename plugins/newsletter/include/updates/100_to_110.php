<?php
 /*
 * Project:     EQdkp Newsletter
 * License:     Creative Commons - Attribution-Noncommercial-Share Alike 3.0 Unported
 * Link:		    http://creativecommons.org/licenses/by-nc-sa/3.0/
 * -----------------------------------------------------------------------
 * Began:       2007
 * Date:        $Date: 2008-07-29 14:08:09 +0200 (Di, 29 Jul 2008) $
 * -----------------------------------------------------------------------
 * @author      $Author: wallenium $
 * @copyright   2005-2008 Simon (Wallenium) Wallmann
 * @link        http://eqdkp-plus.com
 * @package     newsletter
 * @version     $Rev: 2455 $
 * 
 * $Id: versions.php 2455 2008-07-29 12:08:09Z wallenium $
 */

if ( !defined('EQDKP_INC') ){
    header('HTTP/1.0 404 Not Found');exit;
}

$updateDESC = array(
	'',
  'Added new Table for Email Templates',
  'Insert Raidplan Email Template'
);
 
$new_version = '1.1.0';
$updateSQL = array(
	"CREATE TABLE IF NOT EXISTS " . $table_prefix . "newsletter_templates (
						`id` int(10) NOT NULL auto_increment,
						`subject` varchar(255) default NULL,
						`body` text default NULL, 
        PRIMARY KEY  (`id`))",
	"INSERT INTO `eqdkp_newsletter_templates` ( `id` , `subject` , `body` )
                VALUES (
                  '1', 'Vergessene Anmeldung im Raidplaner', 'Hallo *USERNAME* Du hast dich bisher noch nicht für folgenden Raid angemeldet: *RPLINK* Bitte melde dich entweder an oder ab. Danke *AUTHOR*'
                ))",
);

?>
