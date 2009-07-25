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
 * $Id: raidbanker.php 4027 2009-02-28 15:37:28Z wallenium $
 */
 
define('EQDKP_INC', true);
$eqdkp_root_path = './../../';
include_once('includes/common.php');

if (!$pm->check(PLUGIN_INSTALLED, 'raidbanker')) { message_die('The Raid Banker plugin is not installed.'); }
global $table_prefix;

$user->check_auth('u_raidbanker_view');
$pm->get_data('raidbanker', 'template_path');

//set local
setlocale (LC_TIME, $user->lang['rb_local_format']);

// get the banker data
$sql = "SELECT rb_char_name, rb_char_money, rb_date, rb_bank_mainchar, rb_bank_note from __raidbanker_chars ORDER BY rb_char_name";
if ( !($chars_result = $db->query($sql)) ){ message_die($user->lang['lang_couldnt_char'], '', __FILE__, __LINE__, $sql); }

// the data language
$myFilterLanguage   = ($conf['rb_list_lang']) ? $conf['rb_list_lang'] : 'english';
$filterthin         = GetFilterValues($myFilterLanguage);

// The Bankers...
$bankers_count = $db->num_rows($chars_result);
$i = 0; $banker_dropdown = array('' => $user->lang['rb_all_Banker']);
while ( $char = $db->fetch_record($chars_result) ){
  $rb_money[$i]     = $char['rb_char_money'];
  $i++;
  $myTooltip  = "<b>".$user->lang['rb_mainchar_out']."</b> ".addslashes($char['rb_bank_mainchar'])."<br>";
  $myTooltip .= "<b>".$user->lang['rb_note_out'].":</b> ".addslashes($char['rb_bank_note'])."</p>";
  $banker_dropdown[$char['rb_char_name']] = $char['rb_char_name'];
    $tpl->assign_block_vars('chars_row', array(
        'ROW_CLASS'     => $eqdkp->switch_row_class(),
        'NAME'          => $char['rb_char_name'],
        'TOOLTIP'       => $khrml->HTMLTooltip($myTooltip, 'rb_charinfo', '' , $char['rb_char_name']),
        'MAINCHAR'      => ( $char['rb_bank_mainchar'] != "" ) ? "(".addslashes($char['rb_bank_mainchar']).")" : '',
        'SELECT'        => ( $_GET['banker'] == $char['rb_char_name']) ? "selected=selected" : "",
        'UPDATE'        => strftime($user->lang['rb_date_format'], $char["rb_date"]),
        'BANKER_LINK'   => "raidbanker.php" . $SID . "&amp;" . "banker=" . $char['rb_char_name']
        )
    );
    
    // The Money per char..
    foreach($money_data as $monName=>$monValue){
      $tpl->assign_block_vars('chars_row.cmoney_row', array(
    		'VALUE'     => MoneyOutput($char['rb_char_money'], $monValue)
      ));	
    }
}

// The Money of all chars
$rb_summ_all = (is_array($rb_money)) ? array_sum($rb_money) : 0;
foreach($money_data as $monName=>$monValue){
  $tpl->assign_block_vars('money_row', array(
				'NAME'      => $monName,
				'IMAGE'     => $monValue['image'],
				'VALUE'     => MoneyOutput($rb_summ_all, $monValue),
				'LANGUAGE'  => $monValue['language'],
        ));	
}
$db->free_result($chars_result);

// Type Dropdown
$type_dropdown = array(''=> '----');
foreach($filterthin['type'] as $type_key => $type_value) {
  $type_dropdown[$type_value] = $type_value;
}

// Prio Dropdown
$prio_dropdown = array(
  0   => $user->lang['rb_prio_0'],
  1   => $user->lang['rb_prio_1'],
  2   => $user->lang['rb_prio_2'],
  3   => $user->lang['rb_prio_3'],
  4   => $user->lang['rb_prio_4']
);

// sort by command:
$getSort = array(
  'type'      => 'rb_item_type ASC',
  'qty'       => 'rb_item_amount ASC',
  'name'      => 'rb_item_name ASC',
  'banker'    => 'rb_char_name ASC',
  'priority'  => 'rb_status DESC'
);
$sortby = ($getSort[$_GET["sort"]]) ? $getSort[$_GET["sort"]] : '';

// Fill the data arrays
if ($conf['rb_show_tooltip'] == 1){
  $out_got = $out_spend = array();
  $sql_got = "SELECT * FROM __raidbanker_bank_rel WHERE rb_action = 'got'";
  $result_got = $db->query($sql_got);
  while($data_got = $db->fetch_record($result_got)){
    $out_got[$data_got['rb_item_name']][] = array(
        'dkp'       => $data_got['rb_item_dkp'],
        'money'     => ShowMoneyIcons($data_got['rb_char_money']),
        'money_raw' => $data_got['rb_char_money'],
        'amount'    => $data_got['rb_qty'],
        'charname'  => $data_got['rb_char_name'],
    );
  }
  $db->free_result($result_got);
  
  $sql_spent = "SELECT * FROM __raidbanker_bank_rel WHERE rb_action = 'spent'";
  $result_spent = $db->query($sql_spent);	
  while($data_spent = $db->fetch_record($result_spent)){
    $out_spend[$data_spent['rb_item_name']][] = array(
        'dkp'       => $data_spent['rb_item_dkp'],
        'money'     => ShowMoneyIcons($data_spent['rb_char_money']),
        'money_raw' => $data_spent['rb_char_money'],
        'amount'    => $data_spent['rb_qty'],
        'charname'  => $data_spent['rb_char_name'],
    );
  }
  $db->free_result($result_spent);

  $sql_bb = "SELECT rb_item_amount, rb_char_name, rb_item_name FROM __raidbanker_bank"; 
  $result_bb = $db->query($sql_bb);
  while($data_bb = $db->fetch_record($result_bb)){
    $out_bankers[$data_bb['rb_item_name']][] = array(
        'amount'    => $data_bb['rb_item_amount'],
        'charname'  => $data_bb['rb_char_name'],
    );
  }
  $db->free_result($result_bb);
}

// SQL Construct.. its awsome ugly...
$sql = "SELECT sum(rbb.rb_item_amount) as qty, rbb.rb_item_name, rbb.rb_item_type, rbb.rb_item_amount,
        rbb.rb_char_name, rbb.rb_item_id, rba.rb_char_money, rba.rb_item_dkp, rba.rb_status
        FROM (__raidbanker_bank rbb LEFT JOIN __raidbanker_actions rba 
        ON rbb.rb_item_name = rba.rb_item_name)";
if ($_GET["banker"] or $_GET['type'] or $_GET['priority']){
  $sql .= " WHERE";
}
if ($_GET["banker"]){
  $sql .= " rbb.rb_char_name = '".addslashes($_GET["banker"])."'";
}
if ($_GET["banker"] and $_GET['type']){
  $sql .= " AND ";
}
if ($_GET['type']){
  $sql .= " rbb.rb_item_type = '".addslashes($_GET['type'])."'";
}
if (($_GET['type'] and $_GET['priority']) or ($_GET['banker'] and $_GET['priority'])){
  $sql .= " AND ";
}
if($_GET['priority']){
  $sql .= " rba.rb_status = '".addslashes($_GET['priority'])."'";
}
if ($_GET["banker"]){
  $sql .= " GROUP BY rbb.rb_item_name, rbb.rb_item_type, rbb.rb_char_name";
}else{
  if ($conf['rb_oldstyle'] == 1){
    $sql .= " GROUP BY rbb.rb_item_name, rbb.rb_item_type, rbb.rb_char_name";
  }else{
    $sql .= " GROUP BY rbb.rb_item_name";
  }
}
    
// Sort me!
if ($sortby){
  $sql .= " ORDER BY $sortby, rbb.rb_char_name ASC";
} else {
  $sql .= " ORDER BY rbb.rb_item_rarity DESC, rbb.rb_item_name ASC, rbb.rb_char_name ASC";
}
if (!($items_result = $db->query($sql))){
  message_die($user->lang['lang_couldnt_info'], '', __FILE__, __LINE__, $sql);
}

$sortthing = "raidbanker.php".$SID."&amp;"."sort=";
while ( $item = $db->fetch_record($items_result) ){
  if ($itemstats_enabled){
    if($itemstats_plus){
      $rb_dec_name = $html->itemstats_item(stripslashes($item['rb_item_name']));
    }else{
      $rb_dec_name = itemstats_decorate_name(stripslashes($item['rb_item_name']));
    }
  }else{
    $rb_dec_name = $item['rb_item_name'];
  }
  $itemidrb = $item['rb_item_id'];
    
  $prio_name    = ( $item['rb_status'])   ? $prio_dropdown[$item['rb_status']] : $prio_dropdown[0];
  $dkp_value    = ( $item['rb_item_dkp']) ? $item['rb_item_dkp'] : 0;
    
    // Tooltip
    if ($conf['rb_show_tooltip'] == 1){
      $myItemTooltip  = "<b>".$user->lang['rb_priority']."</b> ".$prio_name."<br>".
                        "<b>".$user->lang['rb_gold_value'].":</b> ".ShowMoneyIcons($item['rb_char_money'])."<br>".
                        "<b>".$user->lang['rb_dkp_value'].":</b> ".$dkp_value."<br>".
                        "<b>".$user->lang['rb_total_amount'].":</b> ".$item['rb_item_amount']."<br>";

      // Items from Bank
      $myItemTooltip .= "<b>".$user->lang['rb_char_got']."</b><br>";
      if(is_array($out_got[$item['rb_item_name']])){
        foreach($out_got[$item['rb_item_name']] as $mydata){
          $moneyORdkp     = ($mydata['dkp'] > 0) ? $mydata['dkp'] : $mydata['money'];
          $myItemTooltip .= $mydata['amount']."x ".$mydata['charname']." (".$moneyORdkp.")<br />";
        }
      }
      
      // Items to Bank
      $myItemTooltip .= "<b>".$user->lang['rb_char_spent']."</b><br>";
      if(is_array($out_spend[$item['rb_item_name']])){
        foreach($out_spend[$item['rb_item_name']] as $mydata){
          $moneyORdkp     = ($mydata['dkp'] > 0) ? $mydata['dkp'] : $mydata['money'];
          $myItemTooltip .= $mydata['amount']."x ".$mydata['charname']." (".$moneyORdkp.")<br />";
        }
      }
		}

    $tpl->assign_block_vars('items_row', array(
        'ROW_CLASS'    => $eqdkp->switch_row_class(),
        'QTY'          => $item['qty'],
        'PRIO'         => ( $item['rb_status'] != "" ) ? $item['rb_status'] : 0,
        'TOOLTIP'      => $khrml->HTMLTooltip($myItemTooltip, 'rb_iteminfo', '' , $item['rb_item_name']),
        'NAME'         => $rb_dec_name,
        'LINK'         => $link,
        'LINKNAME'		 => urlencode($name), 
        'TYPE'         => $item["rb_item_type"],
        'BANKER'       => ($_GET['banker'] || $conf['rb_oldstyle'] == 1) ? $item["rb_char_name"] : '--',
        'TARGET'       => $target,
        )
    );
}
$db->free_result($items_result);

  $tpl->assign_vars(array(
      'U_RAIDBANKER'           => $eqdkp_root_path . "plugins/raidbanker/raidbanker.php" . $SID,
      'Bank_Items'             => $user->lang['rb_Bank_Items'],
      'Lang_Banker'            => $user->lang['rb_Banker'],
      'Lang_QTY'               => $user->lang['rb_Bank_QTY'],
      'Lang_Type'              => $user->lang['rb_Bank_Type'],
      'Lang_Name'              => $user->lang['rb_Item_Name'],
      'Lang_Update'            => $user->lang['rb_Update'],
      'L_ALL_BANKERS'          => $user->lang['rb_AllBankers'],
      'L_TOT_BANKERS'          => $user->lang['rb_TotBankers'],
      'L_RB_NA'                => $user->lang['rb_not_avail'],
      'L_VERSION'              => $pm->get_data('raidbanker', 'version'),
      'L_YEAR'								 => date("Y", time()),   
       
      //  Javascript
      'JS_ABOUT'               => $jquery->Dialog_URL('About', $user->lang['rb_dialog_header'], 'about.php', '380', '320'),
      'JS_VIEWINFO'            => $jquery->Dialog_URL('Items', $user->lang['rb_dialog_item'], "rb_item.php?i='+id+'", '400', '300'),
      
      'L_FILTER_TYPE'          => $user->lang['rb_filter_type'],
      'L_FILTER_BANK'          => $user->lang['rb_filter_banker'],
      'L_FILTER_PRIO'          => $user->lang['rb_filter_prio'],
      
      'SHOW_CLASSIC_LINKS'		 => ( $conf['rb_oldstyle'] == 1 ) ? true : false,
      'SHOW_NO_BANKERS'        => ( $conf['rb_no_bankers'] == 1 ) ? true : false,
      'SHOW_NO_MONEY'          => ( $conf['rb_show_money'] == 1 ) ? true : false,
      'SHOW_INFO_TOOLTIP'      => ( $conf['rb_show_tooltip'] == 1 ) ? true : false,
      
      'QTY_LINK'               => $sortthing . "qty",
      'TYPE_LINK'              => $sortthing . "type",
      'NAME_LINK'              => $sortthing . "name",
      'BANKER_LINK'            => $sortthing . "banker",
      'PRIO_LINK'              => $sortthing . "priority",
      
      'BANKER_DROPDOWN'        => $khrml->DropDown('banker', $banker_dropdown, $_GET['banker'], '', 'onchange="javascript:form.submit();"', 'input'),
      'PRIORITY_DROPDOWN'      => $khrml->DropDown('priority', $prio_dropdown, $_GET['priority'], '', 'onchange="javascript:form.submit();"', 'input'),
      'TYPE_DROPDOWN'          => $khrml->DropDown('type', $type_dropdown, $_GET['type'], '', 'onchange="javascript:form.submit();"', 'input'),
       )
  );
  
  $eqdkp->set_vars(array(
	   'page_title'        => GeneratePageTitle($user->lang['raidbanker_title']),
	   'template_path' 	   => $pm->get_data('raidbanker', 'template_path'),
	   'template_file'     => 'bank.html',
	   'display'           => true,
	   )
  );
?>