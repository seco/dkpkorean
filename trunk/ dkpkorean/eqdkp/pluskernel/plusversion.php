<?php
/*
 * Project:     EQdkp-Plus
 * License:     Creative Commons - Attribution-Noncommercial-Share Alike 3.0 Unported
 * Link:		http://creativecommons.org/licenses/by-nc-sa/3.0/
 * -----------------------------------------------------------------------
 * Began:       2006
 * Date:        $Date: 2009-03-20 14:13:50 +0100 (Fr, 20 Mrz 2009) $
 * -----------------------------------------------------------------------
 * @author      $Author: osr-corgan $
 * @copyright   2006-2008 Corgan - Stefan Knaak | Wallenium & the EQdkp-Plus Developer Team
 * @link        http://eqdkp-plus.com
 * @package     eqdkp-plus
 * @version     $Rev: 4318 $
 * 
 * $Id: plusversion.php 4318 2009-03-20 13:13:50Z osr-corgan $
 */

if ( !defined('EQDKP_INC') )
{
    die('Do not access this file directly.');
}

define('EQDKPPLUS_VERSION', '0.6.2.5');
define('EQDKPPLUS_VERSION_BETA', FALSE);
if (isset($svn_rev)) {
	define('SVN_REV', $svn_rev);
}




?>
