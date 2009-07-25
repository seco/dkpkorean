<?php
 /*
 * Project:     EQdkp Newsletter
 * License:     Creative Commons - Attribution-Noncommercial-Share Alike 3.0 Unported
 * Link:		    http://creativecommons.org/licenses/by-nc-sa/3.0/
 * -----------------------------------------------------------------------
 * Began:       2007
 * Date:        $Date: 2009-02-28 16:47:21 +0100 (Sa, 28 Feb 2009) $
 * -----------------------------------------------------------------------
 * @author      $Author: wallenium $
 * @copyright   2005-2008 Simon (Wallenium) Wallmann
 * @link        http://eqdkp-plus.com
 * @package     newsletter
 * @version     $Rev: 4028 $
 * 
 * $Id: common.php 4028 2009-02-28 15:47:21Z wallenium $
 */

  if ( !defined('EQDKP_INC') ){
    header('HTTP/1.0 404 Not Found');exit;
  } 
  
  if ( !isset($eqdkp_root_path) ){
    $eqdkp_root_path = './';
  }
  include_once($eqdkp_root_path . 'common.php');

  /**
  * Load the global Configuration
  */
  $sql = 'SELECT * FROM __newsletter_config';
  if (!($settings_result = $db->query($sql))) { message_die('Could not obtain configuration data', '', __FILE__, __LINE__, $sql); }
  while($roww = $db->fetch_record($settings_result)) {
    $conf[$roww['config_name']] = $roww['config_value'];
  }

  /**
  * Framework include
  **/
  require_once($eqdkp_root_path . 'plugins/newsletter/include/libloader.inc.php');
  $wpfcdb = new AdditionalDB('newsletter_config');

  /**
  * Load rest of Libraries
  */
  include_once($eqdkp_root_path . '/plugins/newsletter/include/email.class.php');
  include_once($eqdkp_root_path . '/plugins/newsletter/include/newsletter.class.php');
  $nlclass = new NewsletterClass();
  
  /**
  * JQUERY Header
  */
  $tpl->assign_vars(array('JQUERY_INCLUDES'   => $jquery->Header()));
?>
