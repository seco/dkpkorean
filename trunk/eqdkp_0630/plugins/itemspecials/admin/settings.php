<?php
 /*
 * Project:     EQdkp ItemSpecials
 * License:     Creative Commons - Attribution-Noncommercial-Share Alike 3.0 Unported
 * Link:		    http://creativecommons.org/licenses/by-nc-sa/3.0/
 * -----------------------------------------------------------------------
 * Began:       2006
 * Date:        $Date: 2009-04-24 14:03:12 +0200 (Fr, 24 Apr 2009) $
 * -----------------------------------------------------------------------
 * @author      $Author: wallenium $
 * @copyright   2005-2008 Simon (Wallenium) Wallmann
 * @link        http://eqdkp-plus.com
 * @package     itemspecials
 * @version     $Rev: 4644 $
 * 
 * $Id: settings.php 4644 2009-04-24 12:03:12Z wallenium $
 */

// EQdkp required files/vars
define('EQDKP_INC', true);
define('IN_ADMIN', true);
define('PLUGIN', 'itemspecials');
$eqdkp_root_path = './../../../';
include_once('../include/common.php');

$user->check_auth('a_itemspecials_conf');

$wpfccore->InitAdmin();
$wpfcdb = new AdditionalDB('itemspecials_config');
$isupdater = new PluginUpdater('itemspecials','is_','itemspecials_config', 'include');

// this is the fix for the AJAX CrossDomainScript Problem.
$redirect_url = $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
if(ereg("//", $redirect_url)){
	$redirURL = ereg_replace("//","/",$redirect_url);
	$settings_link = 'http://'.$redirURL;
	echo '<meta http-equiv="refresh" content="0; URL='.$settings_link.'">';
}

// Automatic Tier File Detection
$tierfiles = array();
if ( $dir = opendir('../games/'.$rpgfolders->GameName().'/setdata/'.$conf['locale'].'/set/') ){
  while ( $d_lib_code = @readdir($dir) ){
    $cwd = '../games/'.$rpgfolders->GameName().'/setdata/'.$conf['locale'].'/set/'.$d_lib_code; // regenerate the link to the 'plugin'
    if((@is_file($cwd)) && FolderIsValid($d_lib_code)){  // check if valid
      $tmpfile = explode('.', $d_lib_code);
      $tierfiles[] = $tmpfile[0];
      include($cwd);
    }
  }
}

$rb = $pm->get_plugin('itemspecials');
if ( !$pm->check(PLUGIN_INSTALLED, 'itemspecials') )
{
    message_die('The ItemSpecials plugin is not installed.');
}

// Save the item addition
if (isset($_POST['itemname'])){
    $sql = "INSERT INTO __itemspecials_custom (`custom_name`, `item_name`, `set`) VALUES ('".$wpfcdb->stripName($_POST['itemname'])."', '".$_POST['itemname']."', 'itempool');";
    if($db->query($sql)){   
    	echo '<script LANGUAGE="JavaScript">
    top.location.href=\'./settings.php\'
</script>';
    }
}

if (isset($_POST['item_del'])){
  delete_customitem($_POST['item_del']);
  echo '<script LANGUAGE="JavaScript">
    top.location.href=\'./settings.php\'
</script>';
}

// Save this shit
if ($_POST['issavebu']){
    // Tier Config
    foreach($tierfiles as $myname){
      $savearray2['set_show_'.$myname]  = $_POST['set_show_'.$myname];
      $savearray2['sr_use_'.$myname]    = $_POST['sr_use_'.$myname];
    }
    
    // global config
    $savearray1 = array(
    'is_hideversion'          => $_POST['is_hideversion'],
    'is_updatecheck'          => $_POST['is_updatecheck'],
		'locale'                  => $_POST['locale'],
		'imgwidth'                => $_POST['imgwidth'],
		'imgheight'               => $_POST['imgheight'],
		'hide_inactives'          => $_POST['hide_inactives'],
		'hidden_groups'           => $_POST['hidden_groups'],
		'colouredcls'             => $_POST['colouredcls'],
		'itemstats'               => $_POST['itemstats'],
		'is_replace'              => $_POST['is_replace'],
		'is_correctmode'          => $_POST['is_correctmode'],
		'is_ispath'             	=> $_POST['is_ispath'],
		'nonset_set'              => $_POST['nonset_set'],
		'nonsettable'             => $_POST['nonsettable'],
		'settable'                => $_POST['settable'], 
		'header_images'           => $_POST['header_images'],
    'si_only_crosses'         => $_POST['si_only_crosses'],
    'si_itemstatus_show'      => $_POST['si_itemstatus_show'],  
    'si_rank'                 => $_POST['si_rank'], 
		'si_points'               => $_POST['si_points'],
		'si_total'                => $_POST['si_total'],
		'si_class'                => $_POST['si_class'],
		'si_cls_icon'             => $_POST['si_cls_icon'],
		'set_rank'                => $_POST['set_rank'],
		'set_points'              => $_POST['set_points'],
		'set_total'               => $_POST['set_total'],
		'set_class'               => $_POST['set_class'],
		'set_cls_icon'            => $_POST['set_cls_icon'],

		'set_show_index'          => $_POST['set_show_index'],
		'set_drpdwn_cls'          => $_POST['set_drpdwn_cls'],
		'set_op_rank'             => $_POST['set_op_rank'],
		'set_op_points'           => $_POST['set_op_points'],
		'set_op_total'            => $_POST['set_op_total'],
		'set_op_class'            => $_POST['set_op_class'],
		'set_op_cls_icon'         => $_POST['set_op_cls_icon'],
		'set_oldLink'         		=> $_POST['set_oldLink'],
		'sr_rank'                 => $_POST['sr_rank'],
		'sr_points'               => $_POST['sr_points'],
		'sr_level'               	=> $_POST['sr_level'],
		'sr_class'                => $_POST['sr_class'],
		'sr_cls_icon'             => $_POST['sr_cls_icon'],
		);
		$savearray = (is_array($savearray2)) ? array_merge($savearray1,$savearray2) : $savearray1;
		
	  if ($wpfcdb->UpdateConfig($savearray, $wpfcdb->CheckDBFields('config_name'))){
      redirect('plugins/'.PLUGIN.'/admin/settings.php'.$SID.'&save=true');
    }else{
      $info = false;
    }
} elseif ($_POST['del'] == "reset"){
  ResetIStoDefault();
} elseif (isset($_POST['langval'])){
  SetISdbLanguage($_POST['langval']);
}

$sql = 'SELECT * FROM __itemspecials_config';
if (!($settings_result = $db->query($sql))) { message_die('Could not obtain configuration data', '', __FILE__, __LINE__, $sql); }
while($roww = $db->fetch_record($settings_result)) {
  $row[$roww['config_name']] = $roww['config_value'];
}

// Update Check init
$updchk_enbled  = ( $row['is_updatecheck'] == 1 ) ? true : false;
$cachedb        = array('table' => 'itemspecials_config', 'data' => $row['vc_data'], 'f_data' => 'vc_data', 'lastcheck' => $row['vc_lastcheck'], 'f_lastcheck' => 'vc_lastcheck');
$versionthing   = array('name' => 'itemspecials', 'inclpath' => 'include', 'version' => $pm->get_data('itemspecials', 'version'), 'build' => $pm->plugins['itemspecials']->build, 'vstatus' => $pm->plugins['itemspecials']->vstatus,  'enabled' => $updchk_enbled);
$isvcheck = new PluginUpdCheck($versionthing, $cachedb);
$isvcheck->PerformUpdateCheck();
// End of Update Check init

// AJAX part
global $dbpass, $dbhost, $dbuser, $dbname;
mysql_connect($dbhost, $dbuser, $dbpass);
mysql_select_db($dbname);
function parse_data($data)
{
  $containers = explode(":", $data);
  foreach($containers AS $container)
  {
      $container = str_replace(")", "", $container);
      $i = 0;
      $lastly = explode("(", $container);
      $values = explode(",", $lastly[1]);
      foreach($values AS $value)
      {
        if($value == '')
        {
            continue;
        }
        $final[$lastly[0]][] = $value;
        $i ++;
      }
  }
    return $final;
}

function update_db($data_array, $col_check)
{
global $table_prefix;

  foreach($data_array AS $set => $items)
  {
     $i = 0;
     foreach($items AS $item)
     {
       $item = mysql_escape_string($item);
       $set  = mysql_escape_string($set);
       
       mysql_query("UPDATE " . $table_prefix . "itemspecials_custom SET `set` = '$set', `order` = '$i'  WHERE `custom_name` = '$item' $col_check");
       $i ++;
     }
  }
}

// Lets setup Sajax
require_once('../include/Sajax.php');
sajax_init();
 $sajax_debug_mode = 0;

function sajax_update($data)
{
  $data = parse_data($data);
  update_db($data, "AND (`set` = 'itempool' OR `set` = 'itemshow')");
  return 'y';
}

sajax_export("sajax_update");
sajax_handle_client_request();


if(isset($_POST['order']))
{
  $data = parse_data($_POST['order']);
  update_db($data, "AND (`set` = 'left_col' OR `set` = 'right_col' OR `set` = 'center')");
  // redirect so refresh doesnt reset order to last save
  header("location: settings.php");
  exit;
}

$sql ="SELECT * FROM __itemspecials_custom WHERE `set` = 'itempool' ORDER BY `order` ASC";
$custom_result = $db->query($sql);
while($customrow = $db->fetch_record($custom_result)) {
  $tpl->assign_block_vars('itempool_row', array(
              'ID'        => ( get_magic_quotes_gpc()== 0 ) ? addslashes($customrow['custom_name']) : $customrow['custom_name'],
              'NAME'      => $customrow['item_name']
              )
          );
}

$sql ="SELECT * FROM __itemspecials_custom WHERE `set` = 'itemshow' ORDER BY `order` ASC";
$custom_result = $db->query($sql);
while($customrow = $db->fetch_record($custom_result)) {
  $tpl->assign_block_vars('itemshow_row', array(
              'ID'        => ( get_magic_quotes_gpc()== 0 ) ? addslashes($customrow['custom_name']) : $customrow['custom_name'],
              'NAME'      => $customrow['item_name']
              )
          );
}
// End of AJAX Part
sort($tierfiles);
foreach($tierfiles as $myname){
  $tpl->assign_block_vars('setright_tiers', array(
      'NAME'    => 'sr_use_'.$myname,
      'LANG'    => $user->lang['is_use_tier'].' '.$tier_config[$myname]['real_name'],
      'VALUE'   => ($row['sr_use_'.$myname] == 1) ? ' checked="checked"' : '',
    )
  );
  $tpl->assign_block_vars('setitems_tiers', array(
      'NAME'    => 'set_show_'.$myname,
      'LANG'    => $user->lang['is_show_tier'].' '.$tier_config[$myname]['real_name'],
      'VALUE'   => ($row['set_show_'.$myname] == 1) ? ' checked="checked"' : '',
    )
  );
}

// Languages...
$specialitem_lang = array();
if ( $dir = opendir('../games/'.$rpgfolders->GameName().'/setdata/') ){
  while ( $d_lib_code = @readdir($dir) ){
    // Specialitems
    $cwd = '../games/'.$rpgfolders->GameName().'/setdata/'.$d_lib_code.'/special.php'; // regenerate the link to the 'plugin'
    if((@is_file($cwd)) && FolderIsValid($d_lib_code)){  // check if valid
      include($cwd);
      $specialitem_lang[$d_lib_code] = $specialitems_config['language'];
    }
  }
}

// Output
$tpl->assign_vars(array(
      'F_CONFIG'        => 'settings.php' . $SID,
      'F_CUSTOM'        => 'customitems.php' . $SID,
      
      'AJAX_JSCODE'			=> sajax_get_javascript(),
      //update box
      'UPDATE_BOX'			=> $isupdater->OutputHTML(),
      'UPDCHECK_BOX'		=> $isvcheck->OutputHTML(),
      
      // JS WIndows
      'JS_LOADCACHE'    => $jquery->Dialog_URL('CacheWindow', $user->lang['is_cacheupd_head'], "upd_cache.php?cache=update", '450', '130'),
      'JS_DELETEITEM'   => $jquery->Dialog_URL('DeleteItem', $user->lang['is_button_del_item'], "customitems.php", '540', '400'),
      'JS_ADDITEM'      => $jquery->Dialog_URL('AddItem', $user->lang['is_button_add_item'], "additem.php", '540', '200'),
      'JS_CONFIRM_DEL'  => $jquery->Dialog_Confirm('openConfirmDialog', $user->lang['is_del_warning'], "document.data.langval.value=document.getElementById('language').value;document.data.submit();"),
      'JS_CONFIRM_RESET'=> $jquery->Dialog_Confirm('ResetDialog', $user->lang['is_want_reset'], "document.settings.del.value='reset';document.settings.submit();"),
      'JS_SAVE_MSG'     => ($_GET['save']) ? $jquery->HumanMsg($user->lang['is_setting_saved']) : '',
      
      // Dropdown
      'DRPDN_SI_LANG'   => $khrml->DropDown('language', $specialitem_lang, $row['locale']),
      'DRPDN_ST_LANG'   => $khrml->DropDown('locale', $specialitem_lang, $row['locale']),
      
      'U_INFO_BOX'      => ( $_POST['issavebu'] ) ? true : false,
      'U_SAVED_SUCC'    => ( $_POST['issavebu'] && $info == true ) ? true : false,
      'U_SAVED_NOT'     => ( $_POST['issavebu'] && $info == false ) ? true : false,
      'U_IS_NOHMODE'		=> ( !$_HMODE ) ? true : false,
      
      'HIDE_VERSION'    => $wpfcdb->isChecked($row['is_hideversion']),
      'UPDATE_CHECK'    => $wpfcdb->isChecked($row['is_updatecheck']),
      'IMGWIDTH'        => $row['imgwidth'],
      'IMGHEIGHT'       => $row['imgheight'],
      'ITEMSTATS'       => $wpfcdb->isChecked($row['itemstats']),
      'IS_NAME_CORRECT' => $wpfcdb->isChecked($row['is_correctmode']),
      'IS_REPLACE'      => $row['is_replace'],
      'COLOREDCLS'      => $wpfcdb->isChecked($row['colouredcls']),
      'HIDE_INACTIVE'   => $wpfcdb->isChecked($row['hide_inactives']),
      'HIDDEN_GRP'      => $wpfcdb->isChecked($row['hidden_groups']),
      'NONSET_SET'      => $wpfcdb->isChecked($row['nonset_set']),
      'NONSETTABLE'     => $row['nonsettable'],
      'SETTABLE'        => $row['settable'],
      'IS_ISPATH'				=> $row['is_ispath'],
      'IS_ISREADABLE'		=> ($row['is_ispath'] != '' && !file_exists('../'.$row['is_ispath'].'eqdkp_itemstats.php')) ? true : false,
      
      // SpecialItems
      'SETITEM_TEMP'    => ( $row['download_cache'] == 0 ) ? '<font color=red>'.$user->lang['is_cache_notloaded'].'</font> (<a onclick="javascript:LoadCache()" style="cursor:pointer;" onmouseover="style.textDecoration=\'underline\';" onmouseout="style.textDecoration=\'none\';">'.$user->lang['is_cache_load'].'</a>)' : '<font color=green>'.$user->lang['is_cache_loaded'].'</font> (<a onclick="javascript:LoadCache()" style="cursor:pointer;" onmouseover="style.textDecoration=\'underline\';" onmouseout="style.textDecoration=\'none\';">'.$user->lang['is_cache_reload'].'</a>)',
      'SI_STATUSSHOW'   => $wpfcdb->isChecked($row['si_itemstatus_show']),
      'SI_CROSSES'      => $wpfcdb->isChecked($row['si_only_crosses']),
      'SI_RANK'         => $wpfcdb->isChecked($row['si_rank']),
      'SI_POINTS'       => $wpfcdb->isChecked($row['si_points']),
      'SI_TOTAL'        => $wpfcdb->isChecked($row['si_total']),
      'SI_CLASS'        => $wpfcdb->isChecked($row['si_class']),
      'SI_CLS_ICON'     => $wpfcdb->isChecked($row['si_cls_icon']),
      'HEADER_IMG'      => $wpfcdb->isChecked($row['header_images']),
      
      //Setitems
      'SET_RANK'        => $wpfcdb->isChecked($row['set_rank']),
      'SET_POINTS'      => $wpfcdb->isChecked($row['set_points']),
      'SET_TOTAL'       => $wpfcdb->isChecked($row['set_total']),
      'SET_CLASS'       => $wpfcdb->isChecked($row['set_class']),
      'SET_CLS_ICON'    => $wpfcdb->isChecked($row['set_cls_icon']),
      'SET_INDEX'       => $wpfcdb->isChecked($row['set_show_index']),
      'SET_DROPDOWN'    => $wpfcdb->isChecked($row['set_drpdwn_cls']),
      'SET_OP_RANK'     => $wpfcdb->isChecked($row['set_op_rank']),
      'SET_OP_POINTS'   => $wpfcdb->isChecked($row['set_op_points']),
      'SET_OP_TOTAL'    => $wpfcdb->isChecked($row['set_op_total']),
      'SET_OP_CLASS'    => $wpfcdb->isChecked($row['set_op_class']),
      'SET_OP_CLS_ICON' => $wpfcdb->isChecked($row['set_op_cls_icon']),
      'SET_OLD_LINKSTY' => $wpfcdb->isChecked($row['set_oldLink']),
      
      // Setrights
      'SR_RANK'         => $wpfcdb->isChecked($row['sr_rank']),
      'SR_POINTS'       => $wpfcdb->isChecked($row['sr_points']),
      'SR_CLASS'        => $wpfcdb->isChecked($row['sr_class']),
      'SR_CLS_ICON'     => $wpfcdb->isChecked($row['sr_cls_icon']),
      'SR_USE_EXPL'			=> $user->lang['is_sel_tier_expl'],
      
      // Help
      'L_HELP_PATH'			=> $khrml->HelpTooltip($user->lang['is_ispath_help']),
      'L_HELP_UPDATECH'	=> $khrml->HelpTooltip($user->lang['is_help_updcheck']),
      'L_HELP_REPLACE' 	=> $khrml->HelpTooltip($user->lang['is_isreplace_help']),     
      'L_HELP_NONSET'		=> $khrml->HelpTooltip($user->lang['is_help_nonset']),
      'L_HELP_CROSS'		=> $khrml->HelpTooltip($user->lang['is_help_crosses']),
      'L_HELP_DRAGDROP'	=> $khrml->HelpTooltip($user->lang['is_info_dragdrop']),
      'L_HELP_JJSTATUS'	=> $khrml->HelpTooltip($user->lang['is_itemstatus_help']),
      'L_HELP_CORR_EX'	=> $user->lang['is_name_corr_expl'],
      
      // Language
      'L_HEADER_DBS'		=> $user->lang['is_header_database'],
      'L_GENERAL'       => $user->lang['is_header_global'],
      'L_SPECIALIT'     => $user->lang['is_header_special'],
      'L_SETRIGHT'      => $user->lang['is_header_setright'],
      'L_SETITEM'       => $user->lang['is_header_setitem'],
      'L_SHOWSUMMARY'   => $user->lang['is_header_onepage'],
      'L_ISTT_HEADER'		=> $user->lang['is_header_itemstats'],
      'L_SUBMIT'        => $user->lang['submit'],
      'L_SETDEFAULTS'   => $user->lang['is_set_default'],
      'L_RESET'         => $user->lang['reset'],
      'L_HEADER_HELP'		=> $user->lang['is_open_cat'],
      'L_ALLEXPAND'			=> $user->lang['is_expand_all'],
      'L_HIDE_VERSION'  => $user->lang['is_hide_version'],
      'L_UPDATECHECK'		=> $user->lang['is_updatecheck'],
      'L_LANGUAGE'      => $user->lang['is_locale_name'],
      'L_ICONS'         => $user->lang['is_icons'],
      'L_ICONS_HLP'     => $user->lang['is_icons_hlp'],
      'L_OLDSTYLE_LINKS'=> $user->lang['is_oldstyle_links'],
      'L_SHOW_CROSS'    => $user->lang['is_crosses'],
      'L_ITEMSTATS'     => $user->lang['is_itemstats'],
      'L_NAME_CORRECT'	=> $user->lang['is_name_correct'],
      'L_IS_REPLACE'    => $user->lang['is_itemst_replace'],
      
      'L_IS_PATH'				=> $user->lang['is_ispath'],
      
      'L_NOT_READABLE'	=> $user->lang['is_path_notreadable'],
      'L_HIDE_INACT'    => $user->lang['is_hide_inactive'],
      'L_HIDEN_GRP'     => $user->lang['is_hidden_groups'],
      'L_COLORD_CLS'    => $user->lang['is_colord_class'],
      'L_SHOW_LEVEL'		=> $user->lang['is_show_level'],
      'L_SHOW_RANK'     => $user->lang['is_show_rank'],
      'L_SHOW_POINTS'   => $user->lang['is_show_points'],
      'L_SHOW_TOTAL'    => $user->lang['is_show_total'],
      'L_SHOW_CLS'      => $user->lang['is_show_class'],
      'L_SHOW_DRPDWN'   => $user->lang['is_show_dropdown'],
      'L_SHOW_CLS_IMG'  => $user->lang['is_show_cls_img'],
      'L_IS_SET'        => $user->lang['is_settable'],
      'L_IS_NONSET'     => $user->lang['is_nonsettable'],
      'L_USE_SETDB'     => $user->lang['is_use_nonset'],
      'L_WARNING'       => $user->lang['is_warning'],
      'L_WARN_TXT'      => $user->lang['is_setdefaults'],
      
      // AJAX Part
      'L_AX_ENABLED_I'  => $user->lang['is_enabled_items'], 
      'L_AX_UNUSED_I'   => $user->lang['is_unused_items'],
      'L_POPULATE'      => $user->lang['is_populate'],
      'L_DEL_NOTHING'   => $user->lang['is_del_nothing'],
      'L_BUTTON_CANCEL' => $user->lang['is_button_cancel'],
      'L_BUTTON_ACTION' => $user->lang['is_button_action'],
      'L_BUTTON_I_ADD'  => $user->lang['is_button_add_item'],
      'L_BUTTON_I_DEL'  => $user->lang['is_button_del_item'],
      'L_NO_ITEMSTATS'  => $user->lang['is_no_itemstats'],
      'L_IS_CACHE_REL'  => $user->lang['is_cache_succ_loaded'],
      'L_BUTTON_OK'     => $user->lang['is_button_ok'],
      'L_ITEMLIST'			=> $user->lang['is_special_list'],
      
      // Setitems
      'L_SETITEM_OP'    => $user->lang['is_header_onepage'],
      'L_SHOW_TIER'     => $user->lang['is_show_tier'],
      'L_USE_TIER'			=> $user->lang['is_use_tier'],
      'L_SHOW_INDEX'    => $user->lang['is_show_index'],
      'L_SHOW_ITEMSTA'  => $user->lang['is_itemstatus_show'],
      
      // Specialitems
      'L_HEADER_IMG'    => $user->lang['is_header_images'],
      'L_ITEMSTATUS'    => $user->lang['is_itemstatus_show'],
        )
		);
    
    $eqdkp->set_vars(array(
	    'page_title'             => sprintf($user->lang['admin_title_prefix'], $eqdkp->config['guildtag'], $eqdkp->config['dkp_name']).': '.$user->lang['is_conf_pagetitle'],
			'template_path' 	       => $pm->get_data('itemspecials', 'template_path'),
			'template_file'          => 'admin/settings.html',
			'display'                => true)
    );
?>
