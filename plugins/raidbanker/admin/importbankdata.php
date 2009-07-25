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
 * $Id: importbankdata.php 4027 2009-02-28 15:37:28Z wallenium $
 */

// EQdkp required files/vars
define('EQDKP_INC', true);
define('IN_ADMIN', true);
define('PLUGIN', 'raidbanker');
$eqdkp_root_path = './../../../';
include_once($eqdkp_root_path . 'plugins/raidbanker/includes/common.php');
if ($itemstats_enabled){
  include_once("../".$conf['rb_is_path']);
}


$rb = $pm->get_plugin('raidbanker');

if ( !$pm->check(PLUGIN_INSTALLED, 'raidbanker') )
{
    message_die('The Raid Banker plugin is not installed.');
}

class RaidBanker_Import extends EQdkp_Admin
{


    function RaidBanker_Import()
    {
        global $db, $eqdkp, $user, $tpl, $pm;
        global $SID;

        parent::eqdkp_admin();

        $this->assoc_buttons(
        	array(
				'parse' => array('name' => 'doParse','process' => 'process_parse','check'   => 'a_raidbanker_import'),
				'insert' => array('name' => 'doInsert','process' => 'process_insert','check'   => 'a_raidbanker_import'),
				'form' => array('name' => '','process' => 'display_form', 'check' => 'a_raidbanker_import')
        	));
    }


	function process_parse(){
		global $db, $eqdkp, $user, $tpl, $pm, $money_data, $SID;

		$log = trim($_POST['log']);

		$items = explode("\n", $log);
		$num = 0;
		$charName = "";
		$charGold = 0;
		$charSilver = 0;
		$charCopper = 0;
		foreach($items as $row){
			$item = split("/", $row);
			if ($num == 0){
        $charName   = $item[0];
				$charMoney = $item[1];
			}else{
				$tpl->assign_block_vars(
					'items_row',
					array(
						'NAME'      => stripslashes($item[0]),
						'NAME2'     => GetItemName($item[4], $item[0]),
						'AMOUNT'    => $item[1],
						'QUALITY'   => $item[2],
						'TYPE'      => $item[3],
						'ITEMID'    => $item[4],
						'ROW_CLASS' => $eqdkp->switch_row_class(),
						'NUMBER'    => $num
					)
				);
			}
			$num++;
		}
    
    $money_out = '';
    foreach($money_data as $monName=>$monValue){
      $money_out .= MoneyOutput($charMoney, $monValue).'<b>'.$monValue['short_lang'].'</b> ';
    }
    
		$tpl->assign_vars(array(
		            'S_STEP1'		     => false,
		            'L_CHARNAME'	   => $charName,
		            'L_CHARMONEY'    => $charMoney,
		            'MONEY_FORMAT'   => $money_out,
		            'L_BANK_INSERT'	 => $user->lang['lang_update_data'],
		            'L_FOUND_ITEMS'	 => $user->lang['lang_found_log'],
		            'Lang_QTY'       => $user->lang['rb_Bank_QTY'],
                'Lang_Type'      => $user->lang['rb_Bank_Type'],
                'Lang_Name'      => $user->lang['rb_Item_Name'],
                'Lang_ItemID'    => $user->lang['lang_itemid'],
			          'lang_skip'      => $user->lang['lang_skip']
		            )
        );

        $eqdkp->set_vars(array(
			'page_title'        => sprintf($user->lang['admin_title_prefix'], $eqdkp->config['guildtag'], $eqdkp->config['dkp_name']).': '.$user->lang['rb_step2_pagetitel'],
			'template_path' 	  => $pm->get_data('raidbanker', 'template_path'),
			'template_file'     => 'admin/import.html',
			'gen_simple_header'  => true,
			'display'           => true,
			)
        );
    }

	function process_insert()
	{

		global $db, $eqdkp, $user, $tpl, $pm;
		global $SID;

		$charName = $_POST["charName"];

		$db->query("DELETE FROM __raidbanker_chars WHERE rb_char_name = '".mysql_escape_string($_POST["charName"])."'");
		$db->query("DELETE FROM __raidbanker_bank WHERE rb_char_name = '".mysql_escape_string($_POST["charName"])."'");
		$tpl->assign_vars(array(
						'L_ACT_PERF' => $user->lang['Lang_actions_performed'],
						'L_USER_LINK'=> $user->lang['rb_user_link'],
						'F_LINK'     => 'importbankdata.php' . $SID
					)
				);
    $tpl->assign_block_vars(
			'logs_row',
			array(
				'DES' => $user->lang['lang_cleared_data']." ".$charName,
				'ROW_CLASS' => $eqdkp->switch_row_class()
			)
		);


	$db->query("INSERT INTO __raidbanker_chars (rb_char_name, rb_char_money, rb_date) VALUES('".mysql_escape_string($_POST["charName"])."',".$_POST["charMoney"]."," .time().")");
		$tpl->assign_vars(array(
						'L_ACT_PERF' => $user->lang['Lang_actions_performed'],
						'L_USER_LINK'=> $user->lang['rb_user_link'],
						'F_LINK'     => 'importbankdata.php' . $SID
					)
				);
    $tpl->assign_block_vars(
			'logs_row',
			array(
				'DES' => $user->lang['lang_added_data']." ".$charName,
				'ROW_CLASS' => $eqdkp->switch_row_class()
			)
		);
  if ($rb_set_itemstats){
		$item_stats = new ItemStats();
		}
    
    if(is_array($_POST['item'])){
  		foreach($_POST['item'] as $item){
  			if(!isset($item['skip'])){
  			  $query = $db->build_query('INSERT', array(
    					'rb_char_name'           => $_POST['charName'],
    					'rb_item_name'           => ($rb_set_itemstats) ? $item_stats->getItemName(stripslashes($item['name']),false) : $item['name'],
    					'rb_item_rarity'         => $item['quality'],
    					'rb_item_type'           => $item['type'],
    					'rb_item_amount'         => $item['amount'],
    					'rb_item_id'             => $item['itemid'],
              ));
    			$sql = 'INSERT INTO __raidbanker_bank' . $query;
    			$db->query($sql);
    			
  				$tpl->assign_vars(array(
  						'L_ACT_PERF' => $user->lang['Lang_actions_performed'],
  						'L_USER_LINK'=> $user->lang['rb_user_link'],
  						'F_LINK'     => 'importbankdata.php' . $SID
  					)
  				);
  				$tpl->assign_block_vars(
  					'logs_row',
  					array(
  						'DES' => $user->lang['lang_adding_item']." ".stripslashes($item["name"]),
  						'ROW_CLASS' => $eqdkp->switch_row_class()
  					)
  				);
  			}else{
    			$tpl->assign_vars(array(
    						'L_ACT_PERF' => $user->lang['Lang_actions_performed'],
    						'L_USER_LINK'=> $user->lang['rb_user_link'],
    						'F_LINK'     => 'importbankdata.php' . $SID
    					)
    				);
    				$tpl->assign_block_vars(
    					'logs_row',
    					array(
    						'DES' => $user->lang['lang_skipped_items']." ".$item["name"],
    						'ROW_CLASS' => $eqdkp->switch_row_class()
    					)
    				);
  			}
  			//
      // Logging
      //
      $log_action = array(
              'header'        => '{L_ACTION_RB_IMPORTED}',
              'id'            => $db->insert_id(),
              '{L_EVENT}'     => $item["name"],
              '{L_UPDATED_BY}'=> $this->admin_user);
       $this->log_insert(array(
                  'log_type'   => $log_action['header'],
                  'log_action' => $log_action)
              );
  		}
		}

	echo '<script LANGUAGE="JavaScript">
    top.location.href=\'./editbankdata.php\'
</script>';

		$eqdkp->set_vars(array(
			'page_title'        => sprintf($user->lang['admin_title_prefix'], $eqdkp->config['guildtag'], $eqdkp->config['dkp_name']).': '.$user->lang['rb_step2_pagetitel'],
			'template_path' 	=> $pm->get_data('raidbanker', 'template_path'),
			'template_file'     => 'admin/import_result.html',
			'display'           => true,
			)
		);


	}

	function display_form()
	{
		global $db, $eqdkp, $user, $tpl, $pm;
		global $SID;

		$tpl->assign_vars(array(
			'F_PARSE_LOG'    => 'importbankdata.php' . $SID,
			'S_STEP1'        => true,
			'L_PASTE_LOG'    => $user->lang['rb_step1_th'],
			'L_PARSE_LOG'    => $user->lang['rb_step1_button_parselog'],
			'Char_Data'      => $user->lang['Character_Data'],
			'Lang_with'      => $user->lang['lang_with'],
			'Lang_g'         => $user->lang['lang_g'],
			'Lang_s'         => $user->lang['lang_s'],
			'Lang_c'         => $user->lang['lang_c'],
			'Bank_Type'      => $user->lang['lang_c']
			)
		);

		$eqdkp->set_vars(array(
			'page_title'         => sprintf($user->lang['admin_title_prefix'], $eqdkp->config['guildtag'], $eqdkp->config['dkp_name']).': '.$user->lang['rb_step1_pagetitle'],
			'template_path'      => $pm->get_data('raidbanker', 'template_path'),
			'template_file'      => 'admin/import.html',
			'gen_simple_header'  => true,
			'display'            => true,
			)
		);
	}
}

$RB_Import = new RaidBanker_Import();
$RB_Import->process();
?>
