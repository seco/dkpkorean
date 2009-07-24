<?php
 /*
 * Project:     EQdkp ItemSpecials
 * License:     Creative Commons - Attribution-Noncommercial-Share Alike 3.0 Unported
 * Link:		    http://creativecommons.org/licenses/by-nc-sa/3.0/
 * -----------------------------------------------------------------------
 * Began:       2006
 * Date:        $Date: 2009-03-07 17:07:11 +0100 (Sa, 07 Mrz 2009) $
 * -----------------------------------------------------------------------
 * @author      $Author: wallenium $
 * @copyright   2005-2008 Simon (Wallenium) Wallmann
 * @link        http://eqdkp-plus.com
 * @package     itemspecials
 * @version     $Rev: 4136 $
 * 
 * $Id: functions.php 4136 2009-03-07 16:07:11Z wallenium $
 */

if ( !defined('EQDKP_INC') ){
  header('HTTP/1.0 404 Not Found');exit;
}

function array_values_recursive($array){
  $arrayValues = array();
  foreach ($array as $value)   {
    if (is_scalar($value) OR is_resource($value)){
      $arrayValues[] = $value;
    }elseif (is_array($value)){
      $arrayValues = array_merge($arrayValues, array_values_recursive($value));
    }
  }
  return $arrayValues;
}

// Delete the item addition
function delete_customitem($item_name){
  global $db, $user;
  if ( (isset($item_name)) && (is_array($item_name)) ){
    foreach ( $item_name as $value ){
      $sql = "DELETE FROM __itemspecials_custom WHERE custom_name='".$value."';";
      $db->query($sql);
    }
  }
}

function member_display(&$row){
  global $eqdkp, $query_by_armor, $query_by_class, $filter, $filters, $show_all, $id;

  // Replace space with underscore (for array indices)
  // Damn you Shadow Knights!
  $d_filter = ucwords(str_replace('_', ' ', $filter));
  $d_filter = str_replace(' ', '_', $d_filter);
  $member_display = null;

  // We're filtering based on class
  if ($filter != 'none') {
    if ($query_by_class == 1 ){
      $member_display = ( ($row['member_class'] == $id ) ) ? true : false;
    }elseif ( $query_by_armor == 1 ){
      $rows = strtolower($row['armor_type']);
      if ( $row['member_level'] > $row['min_level'] && $row['member_level'] <= $row['max_level'] ) {
        $member_display = ( $rows == $id  ) ? true : false;
      }
    }
  }else{
    if($show_all){
      $member_display = true;
    }else{
      if ( $eqdkp->config['hide_inactive'] == '0' ){
        $member_display = ( $row['rank_hide'] == '0' ) ? true : false;
      }else{
        if ( $row['member_status'] == '0' ){
          $member_display = false;
        }else{
          $member_display = ( $row['rank_hide'] == '0' ) ? true : false;
        }
      }
    }
  }
  return $member_display;
}

function SetISdbLanguage($language){
  global $eqdkp_root_path, $user, $SID, $table_prefix, $db, $eqdkp, $rpgfolders;
  $inclfilepath = $eqdkp_root_path.'plugins/itemspecials/games/'.$rpgfolders->GameName().'/setdata/'.$language.'/special.php';
  if(is_file($inclfilepath)){
    include($inclfilepath);
    $sql = "TRUNCATE TABLE __itemspecials_custom";
    if ($db->query($sql)){
      foreach ($specialitems_config['data'] as $key => $value) {
        $sql = "INSERT INTO __itemspecials_custom VALUES ('itempool', '".$key."', '".$value."', 0);";
        $db->query($sql);
      }
    }
  }
}

function ResetIStoDefault(){
  global $wpfcdb;
  $defaultarray = array(
    'is_exec_time'            => '1',
		'locale'                  => 'de',
		'nonset_set'              => '0',
		'nonsettable'             => 'eqdkp_items',
		'settable'                => 'eqdkp2_items',
		'imgwidth'                => '26px',
		'imgheight'               => '26px',
		'hide_inactives'          => '0',
		'hidden_groups'           => '1',
		'colouredcls'             => '1',
		'itemstats'               => '1',
		'is_replace'              => '<font color=red>x</font>',
		'header_images'           => '1',
		'download_cache'          => '0',
    'si_only_crosses'         => '0',
    'si_rank'                 => '0',
		'si_points'               => '0',
		'si_class'                => '1',
		'si_cls_icon'             => '1',
		'set_rank'                => '0',
		'set_points'              => '0',
		'set_total'               => '0',
		'set_class'               => '0',
		'set_cls_icon'            => '0',
		'set_onePage'             => '1',
		'set_show_tier6'          => '0',
		'set_show_tier7'          => '1',
		'set_show_tier75'         => '1',
		'set_show_index'          => '1',
		'set_drpdwn_cls'          => '1',
		'sr_rank'                 => '1',
		'sr_points'               => '1',
		'sr_level'               	=> '1',
		'sr_class'                => '1',
		'sr_cls_icon'             => '1',
		'sr_use_tier6'            => '1',
		'sr_use_tier7'            => '1',
		'sr_use_tier75'           => '1',
	);
	$wpfcdb->UpdateConfig($defaultarray, $wpfcdb->CheckDBFields('config_name'));
}

function MyClassImages($classname, $id=-1){
  if(function_exists('get_ClassIcon')){
    return get_ClassIcon($classname, $id);
  }else{
    return '';
  }
}

function ISclassrename($classname){
  if(function_exists('renameClasstoenglish')){
    return renameClasstoenglish($classname);
  }else{
    return $classname;
  }
}

function ISFooterGeneration(){
  global $pm, $conf;
  $is_version = ($conf['is_hideversion']) ? '' : ' '.$pm->get_data('itemspecials', 'version');
  $is_status  = (strtolower($pm->plugins['itemspecials']->vstatus) == 'stable' && !$conf['is_hideversion']) ? '' : ' '.$pm->plugins['itemspecials']->vstatus.' ';
  return '<span class="copy">ItemSpecials '.$is_version.$is_status.' &copy; 2006 - '.date("Y", time()).' by '.$pm->plugins['itemspecials']->copyright.'</span>';
}
?>
