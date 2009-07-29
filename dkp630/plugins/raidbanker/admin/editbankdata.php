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
 * $Id: editbankdata.php 4027 2009-02-28 15:37:28Z wallenium $
 */

// EQdkp required files/vars
define('EQDKP_INC', true);
define('IN_ADMIN', true);
define('PLUGIN', 'raidbanker');
$eqdkp_root_path = './../../../';
include_once('../includes/common.php');

// Check user permission
$user->check_auth('a_raidbanker_update');
$rb = $pm->get_plugin('raidbanker');

if ( !$pm->check(PLUGIN_INSTALLED, 'raidbanker') ){
    message_die('The Raid Banker plugin is not installed.');
}

class RaidBanker_Update extends EQdkp_Admin{
  var $banker = array();
  
  function DeleteBanker($name){
    global $db;
    $db->query("DELETE FROM __raidbanker_chars WHERE rb_char_name='".$name."'");    // Delete banker
		$db->query("DELETE FROM __raidbanker_bank WHERE rb_char_name ='".$name."'");    // Delete content of banker
  }
  
  function process_manage(){
    global $db, $eqdkp, $user, $tpl, $pm, $SID, $money_data;
    $success_message = "";
    $num = 0; // count the items
        
    $sql = "SELECT sum(rbb.rb_item_amount) as qty, rbb.rb_item_name, rbb.rb_item_rarity, rbb.rb_item_type, rbb.rb_item_amount,
            rbb.rb_char_name, rbb.rb_item_id, rba.rb_char_money, rba.rb_item_dkp, rba.rb_status
            FROM (__raidbanker_bank rbb LEFT JOIN __raidbanker_actions rba 
            ON rbb.rb_item_name = rba.rb_item_name)
            WHERE rbb.rb_char_name = '".$_GET['name']."' 
            GROUP BY rbb.rb_item_name, rbb.rb_item_type, rbb.rb_char_name ORDER BY rbb.rb_item_rarity DESC, 
            rbb.rb_item_name ASC, rbb.rb_char_name ASC";
            
    $result = $db->query($sql);
		while ($row = $db->fetch_record($result)){		  
		  $tpl->assign_block_vars('items_row', array(
				      'NAME'	        => $row['rb_item_name'],
				      'ROW_CLASS' => $eqdkp->switch_row_class(),
				      'ITEMID'        => $row['rb_item_id'],
              'TYPE'	        => $row['rb_item_type'],
              'AMOUNT'        => $row['qty'],
              'QUALITY'       => $row['rb_item_rarity'],
              'SELECT0'       => ( $row['rb_status'] == "0" ) ? "selected=selected" :"",
              'SELECT1'       => ( $row['rb_status'] == "1" ) ? "selected=selected" :"",
              'SELECT2'       => ( $row['rb_status'] == "2" ) ? "selected=selected" :"",
              'SELECT3'       => ( $row['rb_status'] == "3" ) ? "selected=selected" :"",
              'SELECT4'       => ( $row['rb_status'] == "4" ) ? "selected=selected" :"",
              'DKP_VALUE'     => $row['rb_item_dkp'],
              'NUMBER'        => $num)
              );
            $num++;
            
            foreach($money_data as $monName=>$monValue){
              $tpl->assign_block_vars('items_row.money_row', array(
            		'NAME'      => $monName,
            		'VALUE'     => MoneyOutput($row['rb_char_money'], $monValue),
            		'SIZE'      => ($monValue['size'] == 'unlimited') ? 5 : $monValue['size'],
              ));	
            }
		}
		$db->free_result($result);

    // the char addition Data
    $sql = "SELECT rb_bank_mainchar, rb_bank_note from __raidbanker_chars WHERE rb_char_name ='" . $_GET['name'] . "' LIMIT 1";
    $chars_result = $db->query($sql);
    $char = $db->fetch_record($chars_result);
    $db->free_result($chars_result);

    $tpl->assign_vars(array(
			'RB_IS_UPDATE'           => true,
			'I_NOTE'                 => $char['rb_bank_note'],
			'I_MAINCHAR'             => $char['rb_bank_mainchar'],
			
      'Bank_Items'             => $user->lang['rb_Bank_Items'],
      'Lang_QTY'               => $user->lang['rb_Bank_QTY'],
      'Lang_Type'              => $user->lang['rb_Bank_Type'],
      'lang_quality'           => $user->lang['rb_Bank_Quality'],
      'Lang_Name'              => $user->lang['rb_Item_Name'],
      'Lang_ItemID'            => $user->lang['lang_itemid'],
      'lang_delete'            => $user->lang['rb_delete'],
      'L_BANK_UPDATE'	         => $user->lang['lang_update_data'],
      'CHARNAME'               => $_GET['name'],
      'L_MONEY_VALUE'          => $user->lang['rb_money_val'],
      'L_DKP_VALUE'            => $user->lang['rb_dkp_val'],
      'L_PRIO_0'               => $user->lang['rb_prio_0'],
      'L_PRIO_1'               => $user->lang['rb_prio_1'],
      'L_PRIO_2'               => $user->lang['rb_prio_2'],
      'L_PRIO_3'               => $user->lang['rb_prio_3'],
      'L_PRIO_4'               => $user->lang['rb_prio_4'],
      'L_STATUS'               => $user->lang['rb_priority'],
      'L_MAINCHAR'             => $user->lang['rb_mainchar'],
      'L_NOTE'                 => $user->lang['rb_note'],
      'L_FOUND_ITEMS'	         => $user->lang['lang_found_log'])
		);
    
    $eqdkp->set_vars(array(
	    'page_title'             => sprintf($user->lang['admin_title_prefix'], $eqdkp->config['guildtag'], $eqdkp->config['dkp_name']).': '.$user->lang['rb_step1_pagetitle'],
			'template_path' 	       => $pm->get_data('raidbanker', 'template_path'),
			'template_file'          => 'admin/update.html',
			'display'                => true)
    );
  }
  
  function process_insert(){
		global $db, $eqdkp, $user, $tpl, $pm, $SID, $money_data, $itemstats_enabled;

		$charName = $_POST["charName"];

		$db->query("DELETE FROM __raidbanker_bank WHERE rb_char_name = '".mysql_escape_string($_POST["charName"])."'");
		$tpl->assign_vars(array(
						'L_ACT_PERF' => $user->lang['Lang_actions_performed'],
						'L_USER_LINK'=> $user->lang['rb_user_link'],
						'F_LINK'     => 'editbankdata.php' . $SID
					)
				);
    $tpl->assign_block_vars('logs_row',	array(
				'DES' => $user->lang['lang_cleared_data']." ".$charName,
				'ROW_CLASS' => $eqdkp->switch_row_class()
			));

    // save the bank mainchar & note
    $sql = "UPDATE __raidbanker_chars SET rb_bank_note='".$_POST["note"]."', rb_bank_mainchar='".$_POST["mainchar"]."' WHERE rb_char_name='".$_POST["charName"]."';";
		$db->query($sql);
			
    if(is_array($_POST["item"])){
  		foreach($_POST["item"] as $item){
  			if(!isset($item["delete"])){
  			if ($itemstats_enabled){
  				  $name_of_item = "'".itemstats_decorate_name(stripslashes($item["name"]))."',";
  				}else{
            $name_of_item = "'".$item["name"]."',";
          }
  			
  				$sql  = "INSERT INTO __raidbanker_bank (rb_char_name, rb_item_name, rb_item_rarity, rb_item_type, rb_item_amount, rb_item_id) VALUES ";
  				$sql .= "('".$_POST["charName"]."',";
  				$sql .= "'".$item["name"]."',";
  				$sql .= "".$item["quality"].",";
  				$sql .= "'".$item["type"]."',";
  				$sql .= "".$item["amount"].",";
  				$sql .= "".$item["itemid"].")";
  				$db->query($sql);
  				if ($item["status"] or $item["gold_value"] or $item["dkp_value"]){
  				//delete the old crap if there's one:
  				$sql  = "DELETE FROM __raidbanker_actions WHERE rb_item_name = '".$item["name"]."' LIMIT 1;";
  				$db->query($sql);
  				
          // calculate the copper value :)
          $totalmoney = 0;
      		foreach($money_data as $monName=>$monValue){
      		  $actmoney   = ($item[$monName]) ? ($item[$monName]*$monValue['factor']) : 0;
            $totalmoney = $totalmoney + $actmoney;
          }			
  				
          // Add the special things to the database				
  				$dkptemvalue = ( $item["dkp_value"] ) ? $item["dkp_value"] : 0;
  				$moneytemp = ( $totalmoney ) ? $totalmoney : 0;
  				$sql  = "INSERT INTO __raidbanker_actions (rb_item_name, rb_status, rb_char_money, rb_item_dkp) VALUES ";
  				$sql .= "('".$item["name"]."',";
  				$sql .= "'".$item["status"]."',";
  				$sql .= "".$moneytemp.",";
  				$sql .= "".$dkptemvalue.")";
  				$db->query($sql);
  				}
  				
  				$tpl->assign_vars(array(
  						'L_ACT_PERF' => $user->lang['Lang_actions_performed'],
  						'L_USER_LINK'=> $user->lang['rb_user_link'],
  						'F_LINK'     => 'editbankdata.php' . $SID
  					)
  				);
  				$tpl->assign_block_vars('logs_row',	array(
  						'DES' => $user->lang['lang_adding_item']." ".stripslashes($item["name"]),
  						'ROW_CLASS' => $eqdkp->switch_row_class()
  					)
  				);
  			}else{
  			$tpl->assign_vars(array(
  						'L_ACT_PERF' => $user->lang['Lang_actions_performed'],
  						'L_USER_LINK'=> $user->lang['rb_user_link'],
  						'F_LINK'     => 'editbankdata.php' . $SID
  					)
  				);
  				$tpl->assign_block_vars('logs_row',	array(
  						'DES' => $user->lang['lang_skipped_items']." ".$item["name"],
  						'ROW_CLASS' => $eqdkp->switch_row_class()
  					)
  				);
  			}
  		} // foreach end
  	} // end if post

		$eqdkp->set_vars(array(
			'page_title'        => sprintf($user->lang['admin_title_prefix'], $eqdkp->config['guildtag'], $eqdkp->config['dkp_name']).': '.$user->lang['rb_step2_pagetitel'],
			'template_path' 	  => $pm->get_data('raidbanker', 'template_path'),
			'template_file'     => 'admin/import_result.html',
			'display'           => true,
			)
		);

	} // end insert
  
  function RaidBanker_Update(){
    global $db, $eqdkp, $user, $tpl, $pm, $rb_date_format, $jquery, $SID;
		parent::eqdkp_admin();
    
    $success_message = "";
    
    // delete banker
    if ($_GET["what"] == "delete" && isset($_GET['name'])){
		  $this->DeleteBanker($_GET['name']);
    }
    
    // Process Insert
    if (isset($_POST["MakeMeHappy"])){
      $this->process_insert();
    }
    
    // Manage
    if ((isset($_GET["what"])) && ($_GET["what"] == "manage") && isset($_GET['name'])){
      $this->process_manage();
    }
        
    $sql = "SELECT rb_char_name, rb_char_money, rb_date from __raidbanker_chars ORDER BY rb_char_name";
    $result = $db->query($sql);
    
		while ($row = $db->fetch_record($result)){
		  $tpl->assign_block_vars('chars_row', array(
				      'NAME'	=> $row['rb_char_name'],
				      'ROW_CLASS' => $eqdkp->switch_row_class(),
              'UPDATE'	=> strftime($user->lang['rb_date_format'], $row["rb_date"]),
              'DELETE' => ( $user->check_auth('a_raidbanker_update', false) ) ? '(<a class="RB-delete" href="editbankdata.php'.$SID.'&amp;what=delete&amp;name='.$row['rb_char_name'] . '">' . $user->lang['rb_delete'] . '</a>)' : '',
              'MANAGE' => ( $user->check_auth('a_raidbanker_update', false) ) ? '(<a class="RB-manage" href="editbankdata.php'.$SID.'&amp;what=manage&amp;name='.$row['rb_char_name'] . '">' . $user->lang['rb_edit'] . '</a>)' : '',
            ));
		}
		$db->free_result($result);

    $tpl->assign_vars(array(
			'F_EDIT_BANK'            => 'editbankdata.php' . $SID,
			'RB_IS_UPDATE'           => false,
      'Lang_Update'            => $user->lang['rb_Update'],
      'Lang_Banker'            => $user->lang['rb_Banker'],
      'Lang_Edit'              => $user->lang['rb_edit'],
      'Lang_Delete'            => $user->lang['rb_delete'],
      'L_CLOSE'                => $user->lang['rb_close'],
      'L_ADD'                  => $user->lang['rb_add'],
      'L_BANKER'               => $user->lang['rb_banker'],
      'L_IMPORT'               => $user->lang['rb_import'],
      'L_ADDBANKER'    				 => $user->lang['rb_add_banker_l'],
      'L_ADD_ITEM_HEAD'			 	 => $user->lang['rb_add_item'],
      'L_IMPORT_LOG_HEAD'			 => $user->lang["rb_step1_pagetitle"],
      
      // Javascript
      'JS_ADDITEM'             => $jquery->Dialog_URL('RBAddItem', $user->lang['rb_add'], "addbankdata.php", '660', '180', 'editbankdata.php'),
      'JS_IMPORTLOG'           => $jquery->Dialog_URL('RBImportLog', $user->lang["rb_step1_pagetitle"], "importbankdata.php", '700', '340', 'editbankdata.php'),
      'JS_ADDBANKER'           => $jquery->Dialog_URL('RBAddBanker', $user->lang['rb_add_banker_l'], "addbanker.php", '550', '150', 'editbankdata.php'),
      
      'RB_PERM_ADD'            => ( $user->check_auth('a_raidbanker_import', false) ) ? true : false
      )
		);
    
    $eqdkp->set_vars(array(
	    'page_title'             => sprintf($user->lang['admin_title_prefix'], $eqdkp->config['guildtag'], $eqdkp->config['dkp_name']).': '.$user->lang['rb_edit_pagetitle'],
			'template_path' 	       => $pm->get_data('raidbanker', 'template_path'),
			'template_file'          => 'admin/update.html',
			'display'                => true)
    );
  }  // end main
}

$RB_Update = new RaidBanker_Update();
$RB_Update->process();
?>
