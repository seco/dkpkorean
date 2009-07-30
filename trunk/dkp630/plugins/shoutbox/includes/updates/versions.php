<?php
/*
 * Project:     EQdkp Shoutbox
 * License:     Creative Commons - Attribution-Noncommercial-Share Alike 3.0 Unported
 * Link:        http://creativecommons.org/licenses/by-nc-sa/3.0/
 * -----------------------------------------------------------------------
 * Began:       2008
 * Date:        $Date: 2008-11-13 11:21:51 +0100 (Do, 13 Nov 2008) $
 * -----------------------------------------------------------------------
 * @author      $Author: Dallandros $
 * @copyright   2008 Aderyn
 * @link        http://eqdkp-plus.com
 * @package     shoutbox
 * @version     $Rev: 3125 $
 *
 * $Id: versions.php 3125 2008-11-13 10:21:51Z Dallandros $
 */

if (!defined('EQDKP_INC'))
{
  header('HTTP/1.0 404 Not Found');exit;
}

$up_updates   = array(
      '0.0.2'   => array(
                      'file'  => '001_to_002.php',
                      'old'   => '0.0.1',
      ),
      '0.0.7'   => array(
                      'file'  => '006_to_007.php',
                      'old'   => '0.0.6',
      ),
);

?>
