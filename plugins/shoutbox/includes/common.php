<?php
/*
 * Project:     EQdkp Shoutbox
 * License:     Creative Commons - Attribution-Noncommercial-Share Alike 3.0 Unported
 * Link:        http://creativecommons.org/licenses/by-nc-sa/3.0/
 * -----------------------------------------------------------------------
 * Began:       2008
 * Date:        $Date: 2009-06-12 13:50:47 +0200 (Fr, 12 Jun 2009) $
 * -----------------------------------------------------------------------
 * @author      $Author: Dallandros $
 * @copyright   2008 Aderyn
 * @link        http://eqdkp-plus.com
 * @package     shoutbox
 * @version     $Rev: 5056 $
 *
 * $Id: common.php 5056 2009-06-12 11:50:47Z Dallandros $
 */

if (!defined('EQDKP_INC'))
{
  header('HTTP/1.0 404 Not Found');exit;
}

// -- Pluskernel common.php ---------------------------------------------------
if (!isset($eqdkp_root_path))
{
  $eqdkp_root_path = './';
}
include_once($eqdkp_root_path.'common.php');


// -- Defines -----------------------------------------------------------------
if (!defined('SHOUTBOX_DEFAULT_LIMIT')) define('SHOUTBOX_DEFAULT_LIMIT', 10);
if (!defined('SHOUTBOX_WORDWRAP'))      define('SHOUTBOX_WORDWRAP',      20);
if (!defined('SHOUTBOX_PAGE_LIMIT'))    define('SHOUTBOX_PAGE_LIMIT',    50);
if (!defined('SHOUTBOX_AUTORELOAD'))    define('SHOUTBOX_AUTORELOAD',    10);


// -- Framework include -------------------------------------------------------
include_once($eqdkp_root_path.'plugins/shoutbox/includes/libloader.inc.php');


// -- Used Classes ------------------------------------------------------------
include_once($eqdkp_root_path.'plugins/shoutbox/includes/shoutbox.class.php');
$shoutbox = new Shoutbox();


// -- Check requirements ------------------------------------------------------
if (is_object($shoutbox))
{
  $sb_req_check = $shoutbox->checkRequirements();
  if ($sb_req_check !== true)
  {
    message_die($sb_req_check);
  }
}

?>
