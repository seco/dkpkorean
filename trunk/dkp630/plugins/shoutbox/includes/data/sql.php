<?php
/*
 * Project:     EQdkp Shoutbox
 * License:     Creative Commons - Attribution-Noncommercial-Share Alike 3.0 Unported
 * Link:        http://creativecommons.org/licenses/by-nc-sa/3.0/
 * -----------------------------------------------------------------------
 * Began:       2008
 * Date:        $Date: 2008-11-12 11:26:16 +0100 (Mi, 12 Nov 2008) $
 * -----------------------------------------------------------------------
 * @author      $Author: Dallandros $
 * @copyright   2008 Aderyn
 * @link        http://eqdkp-plus.com
 * @package     shoutbox
 * @version     $Rev: 3120 $
 *
 * $Id: sql.php 3120 2008-11-12 10:26:16Z Dallandros $
 */

if (!defined('EQDKP_INC'))
{
  header('HTTP/1.0 404 Not Found');exit;
}

$shoutboxSQL = array(

  'uninstall' => array(
    '1'     => 'DROP TABLE IF EXISTS `__shoutbox`',
    '2'     => 'DROP TABLE IF EXISTS `__shoutbox_config`',
  ),

  'install'   => array(
    '1'     => 'CREATE TABLE IF NOT EXISTS `__shoutbox` (
                  `shoutbox_id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT,
                  `member_id` smallint(5) default \'-1\',
                  `date` TIMESTAMP NOT NULL DEFAULT 0,
                  `text` text default NULL,
                  PRIMARY KEY (`shoutbox_id`)
                )TYPE=InnoDB;',
    '2'     => 'CREATE TABLE IF NOT EXISTS `__shoutbox_config` (
                  `config_name` varchar(255) NOT NULL default \'\',
                  `config_value` varchar(255) default NULL,
                  PRIMARY KEY (`config_name`)
                )TYPE=InnoDB;',
  ),
);

?>
