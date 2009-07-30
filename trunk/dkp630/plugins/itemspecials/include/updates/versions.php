<?php
 /*
 * Project:     EQdkp ItemSpecials
 * License:     Creative Commons - Attribution-Noncommercial-Share Alike 3.0 Unported
 * Link:		    http://creativecommons.org/licenses/by-nc-sa/3.0/
 * -----------------------------------------------------------------------
 * Began:       2006
 * Date:        $Date: 2009-02-28 19:38:16 +0100 (Sa, 28 Feb 2009) $
 * -----------------------------------------------------------------------
 * @author      $Author: wallenium $
 * @copyright   2005-2008 Simon (Wallenium) Wallmann
 * @link        http://eqdkp-plus.com
 * @package     itemspecials
 * @version     $Rev: 4031 $
 * 
 * $Id: versions.php 4031 2009-02-28 18:38:16Z wallenium $
 */

  if ( !defined('EQDKP_INC') ){
    header('HTTP/1.0 404 Not Found');exit;
  } 
	
	$up_updates 	= array(
      '3.0.0'   => array(
                      'file'  => '200_to_300.php',
                      'old'   => '2.0.0',
      ),
      '4.0.0'   => array(
                      'file'  => '300_to_400.php',
                      'old'   => '3.0.0',
      ),
      '5.0.2'   => array(
                      'file'  => '501_to_502.php',
                      'old'   => '5.0.1',
      ),
  );
												
 ?>
