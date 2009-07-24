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
 * $Id: import.php 2560 2008-08-16 23:47:56Z wallenium $
 */
 
define('EQDKP_INC', true);
define('PLUGIN', 'charmanager');
$eqdkp_root_path = './../../';
include_once($eqdkp_root_path . 'common.php');
include_once('include/usermanagement.class.php');
include_once('include/functions.php');
global $table_prefix;

if (!defined('MEMBER_ADDITION_TABLE')) { define('MEMBER_ADDITION_TABLE', $table_prefix . 'member_additions'); }

if (!$user->check_auth('u_charmanager_manage', false) && !$user->check_auth('u_charmanager_add', false)) {
	 message_die($user->lang['uc_no_prmissions']);
}

$CharTools = new CharTools();

include_once('extensions/import/import_list.php');
if ($_POST['submiti']){
	$hmtlout = '<meta http-equiv="refresh" content="0; URL=extensions/import/'.$_POST['list'].'">';
}
	$hmtlout .= ' <form name="iplugin" method="post" action="import.php">
								<select name="list" size="1"">';
foreach ($importer_list as $name => $link){
	$tmpurlchk = CheckUptime($importer_updcheck[$link]);
	$hmtlout .= '<option value="'.$link.'/'.$link.'.php">'.$name.' ['.$tmpurlchk.']</option>';
}
	$hmtlout .= '</select> ';
	$hmtlout .= '<input type="submit" name="submiti" value="'.$user->lang['uc_import_forw'].'" class="mainoption"  
								/>';
  $hmtlout .= '</form>';
	echo $hmtlout;
?>
