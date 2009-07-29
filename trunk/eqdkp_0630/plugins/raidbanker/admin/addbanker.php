<?php
 /*
 * Project:     EQdkp RaidBanker
 * License:     Creative Commons - Attribution-Noncommercial-Share Alike 3.0 Unported
 * Link:		    http://creativecommons.org/licenses/by-nc-sa/3.0/
 * -----------------------------------------------------------------------
 * Began:       2005
 * Date:        $Date: 2009-02-28 16:37:28 +0100 (Sa, 28 Feb 2009) $
 * -----------------------------------------------------------------------
 * @author      $Author: wallenium $
 * @copyright   2005-2008 Simon (Wallenium) Wallmann
 * @link        http://eqdkp-plus.com
 * @package     raidbanker
 * @version     $Rev: 4027 $
 * 
 * $Id: addbanker.php 4027 2009-02-28 15:37:28Z wallenium $
 */

// EQdkp required files/vars
define('EQDKP_INC', true);
define('IN_ADMIN', true);
define('PLUGIN', 'raidbanker');

global $table_prefix;
$eqdkp_root_path = './../../../';
include_once('../includes/common.php');

$user->check_auth('a_raidbanker_import');
$rb = $pm->get_plugin('raidbanker');

if ( !$pm->check(PLUGIN_INSTALLED, 'raidbanker') )
{
    message_die('The Raid Banker plugin is not installed.');
}

class RaidBanker_AddBanker extends EQdkp_Admin
{


    function RaidBanker_AddBanker()
    {
        global $db, $eqdkp, $user, $tpl, $pm;
        global $SID, $money_data;

        parent::eqdkp_admin();

        $this->assoc_buttons(
        	array(
				'insert' => array('name' => 'doInsert','process' => 'process_insert','check'   => 'a_raidbanker_import'),
				'form' => array('name' => '','process' => 'display_form', 'check' => 'a_raidbanker_import')
        	));
    }

	function process_insert()
	{
		global $db, $eqdkp, $user, $tpl, $pm, $money_data, $SID;
		
		// Get the total money
		$totalmoney = 0;
		foreach($money_data as $monName=>$monValue){
		  $actmoney   = ($_POST[$monName]) ? ($_POST[$monName]*$monValue['factor']) : 0;
      $totalmoney = $totalmoney + $actmoney;
    }
		
		// Remove the old Char
    $charName = $_POST["charName"];
		$db->query("DELETE FROM __raidbanker_chars WHERE rb_char_name = '".mysql_escape_string($_POST["charName"])."'");
		$db->query("INSERT INTO __raidbanker_chars (rb_char_name, rb_char_money, rb_date) VALUES('".mysql_escape_string($_POST["charName"])."',".$totalmoney."," .time().")");
		echo '<script LANGUAGE="JavaScript">
            top.location.href=\'./editbankdata.php\'
          </script>';
	}

	function display_form()
	{
		global $db, $eqdkp, $user, $tpl, $pm, $money_data, $SID;

    // Money Data
    foreach($money_data as $monName=>$monValue){
      $tpl->assign_block_vars('money_row', array(
    		'NAME'      => $monName,
    		'LANGUAGE'  => $monValue['language']
      ));	
    }
    
		$tpl->assign_vars(array(
			'F_ADD_BANKER'     => 'addbanker.php' . $SID,
			'ROW_CLASS'        => $eqdkp->switch_row_class(),
			'L_ADD_BANKER'     => $user->lang['rb_add_banker_l'],
			'L_BANKER_INSERT'	 => $user->lang['rb_insert_banker'],
		  'L_BANKER'         => $user->lang['rb_banker'],
		  'L_CLOSE'          => $user->lang['rb_close'],
			)
		);

		$eqdkp->set_vars(array(
			'page_title'         => sprintf($user->lang['admin_title_prefix'], $eqdkp->config['guildtag'], $eqdkp->config['dkp_name']).': '.$user->lang['rb_step1_pagetitle'],
			'template_path' 	   => $pm->get_data('raidbanker', 'template_path'),
			'template_file'      => 'admin/addbanker.html',
			'gen_simple_header'  => true,
			'display'            => true,
			)
		);
	}
}

$RB_Import = new RaidBanker_AddBanker();
$RB_Import->process();
?>
