<?php
 /*
 * Project:     EQdkp-Plus
 * License:     Creative Commons - Attribution-Noncommercial-Share Alike 3.0 Unported
 * Link:		http://creativecommons.org/licenses/by-nc-sa/3.0/
 * -----------------------------------------------------------------------
 * Began:       2006
 * Date:        $Date: 2009-07-03 15:38:13 +0200 (Fr, 03 Jul 2009) $
 * -----------------------------------------------------------------------
 * @author      $Author: ghoschdi $
 * @copyright   2006-2008 Corgan - Stefan Knaak | Wallenium & the EQdkp-Plus Developer Team
 * @link        http://eqdkp-plus.com
 * @package     eqdkp-plus
 * @version     $Rev: 5151 $
 * 
 * $Id: updates.php 5151 2009-07-03 13:38:13Z ghoschdi $
 */


define('EQDKP_INC', true);
$eqdkp_root_path = '../';
include_once($eqdkp_root_path . 'common.php');
include_once('include/db.class.php');
$reset = false;

// Load the language
$plang = $pluslang->NormalLanguage();

include('include/update.class.php');
include('include/init.class.php');

$update = new UpdateCheck(
						EQDKPPLUS_VCHECKURL,
						$eqdkpplus_vcontrol,
						array('Security Update' => 'red'),
						EQDKPPLUS_VERSION
					);
$page = new InitPlus();

// The Header
$contentout = $page->Header($eqdkp_root_path);

if($user->check_auth('a_config_man', false)){
	if ($_GET['reset'] == 'true'){
		$update->ResetUpdater('true');
		$_GET['reset'] = 'false';
	}

  $contentout .= $update->UpdateChecker();
}else{
  $contentout .= 'no Permission!';
}

// The Footer
$contentout .= $page->Footer();
echo $contentout;
?>