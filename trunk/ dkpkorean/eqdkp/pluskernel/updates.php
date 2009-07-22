<?php
 /*
 * Project:     EQdkp-Plus
 * License:     Creative Commons - Attribution-Noncommercial-Share Alike 3.0 Unported
 * Link:		http://creativecommons.org/licenses/by-nc-sa/3.0/
 * -----------------------------------------------------------------------
 * Began:       2006
 * Date:        $Date: 2008-07-29 00:22:12 +0200 (Di, 29 Jul 2008) $
 * -----------------------------------------------------------------------
 * @author      $Author: osr-corgan $
 * @copyright   2006-2008 Corgan - Stefan Knaak | Wallenium & the EQdkp-Plus Developer Team
 * @link        http://eqdkp-plus.com
 * @package     eqdkp-plus
 * @version     $Rev: 2449 $
 * 
 * $Id: updates.php 2449 2008-07-28 22:22:12Z osr-corgan $
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
