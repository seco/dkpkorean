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
 * $Id: versions.php 2560 2008-08-16 23:47:56Z wallenium $
 */

if ( !defined('EQDKP_INC') ){
    header('HTTP/1.0 404 Not Found');exit;
}

$up_updates 	= array(
      '1.0.4'   => array(
                      'file'  => '100_to_104.php',
                      'old'   => '1.0.0',
      ),
       '1.1.0'   => array(
                      'file'  => '104_to_110.php',
                      'old'   => '1.0.4',
      ),
       '1.2.0'   => array(
                      'file'  => '115_to_120.php',
                      'old'   => '1.1.5',
      ),
);
												
 ?>
