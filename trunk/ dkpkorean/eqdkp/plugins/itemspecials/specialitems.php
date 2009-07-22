<?php
 /*
 * Project:     EQdkp ItemSpecials
 * License:     Creative Commons - Attribution-Noncommercial-Share Alike 3.0 Unported
 * Link:		    http://creativecommons.org/licenses/by-nc-sa/3.0/
 * -----------------------------------------------------------------------
 * Began:       2006
 * Date:        $Date: 2009-03-10 19:31:08 +0100 (Di, 10 Mrz 2009) $
 * -----------------------------------------------------------------------
 * @author      $Author: wallenium $
 * @copyright   2005-2008 Simon (Wallenium) Wallmann
 * @link        http://eqdkp-plus.com
 * @package     itemspecials
 * @version     $Rev: 4171 $
 * 
 * $Id: specialitems.php 4171 2009-03-10 18:31:08Z wallenium $
 */

define('EQDKP_INC', true);
define('PLUGIN', 'itemspecials');
$eqdkp_root_path = './../../';
include_once('include/common.php');

$user->check_auth('u_specialitems_view');
if (!$pm->check(PLUGIN_INSTALLED, 'itemspecials')) { message_die($user->lang['is_not_installed']); }

// Include the Data
include_once('games/'.$rpgfolders->GameName().'/setdata/'.$conf['locale'].'/special.php');

$sql = "SELECT * FROM __itemspecials_custom WHERE `set` = 'itemshow' ORDER BY `order` ASC";
if (!($custom_result = $db->query($sql))) { message_die($user->lang['is_sqlerror_sitem'], '', __FILE__, __LINE__, $sql); }
while($customrow = $db->fetch_record($custom_result)) {
  $custom[$customrow['item_name']] = $customrow['item_name'];
}

if (is_array($custom) and isset($custom)){
  $specialitems = $custom;
}else{
  message_die($user->lang['is_no_specialitems']);
}

// This is for the set/nonset items
if ($conf['nonset_set'] == 1){
  if (!defined('IS_NONSET_TABLE')) { define('IS_NONSET_TABLE', $conf['nonsettable']); }
  if (!defined('IS_SET_TABLE')) { define('IS_SET_TABLE', $conf['settable']); }
  $NSitemtable  = IS_NONSET_TABLE; // NonSet Items
  $Sitemtable   = IS_SET_TABLE; // SetItems
} else{
  $NSitemtable  = '__items'; // NonSet Items
  $Sitemtable   = '__items'; // SetItems
}

// Load Itemstats if possible
if ($conf['itemstats'] == 1){
  include_once(IS_ITEMSTATS_PATH);
  $isaddition = new ItemstatsAddition();
	$is_version = ($isaddition->GetItemstatsVersion()) ? true : false;
}

$sort_order = array(
    0 => array('member_name', 'member_name desc'),
    1 => array('member_class', 'member_class desc'),
    2 => array('member_current desc', 'member_current'),
    3 => array('rank_name', 'rank_name desc'),
    4 => array('class_armor_type', 'class_armor_type desc'),
    5 => array('member_earned desc', 'member_earned'),
);

$current_order = switch_order($sort_order);
$cur_hash = hash_filename("specialitems.php");

foreach($specialitems as $key=>$item) {
  if ($conf['itemstats'] == 1 && $conf['si_only_crosses'] == 0){
        $specialitems[$key] = array(
                'name'  => $item,
                'item_icon'      => $isaddition->itemstats_decorate_Icon(stripslashes($item), "middle", $is_version)
        );
  } else {
        $specialitems[$key] = array(
                'name'  => $item,
                'item_icon'      => html_entity_decode($conf['is_replace'])
        );
  }
}


// Search in the Items DB
$sql = "SELECT item_id, item_name, item_buyer
        FROM " . $NSitemtable . "
        ORDER BY item_name ASC;";
$itemres = $db->query($sql);
if(!$itemres){ message_die($user->lang['is_item_info'], "", "", ""); }
$myItems = array();
while($row = $db->fetch_record($itemres)) {
  $myItems[] = array(
    'item_id'     => $row['item_id'],
    'item_name'   => $row['item_name'],
    'item_buyer'  => $row['item_buyer']
  );
}

// Search in the custom items
$sql = "SELECT item_id, item_name, item_buyer
        FROM __itemspecials_items
        ORDER BY item_name ASC;";
$itemres = $db->query($sql);
while($row = $db->fetch_record($itemres)) {
  $myItems[] = array(
    'item_id'     => $row['item_id'],
    'item_name'   => $row['item_name'],
    'item_buyer'  => $row['item_buyer']
  );
}

$zz = 0;
foreach($myItems as $row){
    $itemnametemporary = ($conf['itemstats'] == 1 && $conf['is_correctmode']) ? $isaddition->itemstats_format_name($row['item_name']) : $row['item_name'];
  $member_items[$myISclass->MemName2ID($row['item_buyer'])][$itemnametemporary] = true;
  $member_items[trim($row['item_name'])]['item_id'] = $row['item_id'];
  if ($conf['si_itemstatus_show'] == 1){
    $countitemsblubb[$zz] = $row['item_name'];
    $zz++;
  }
}

// Normal member display
$member_count = 0;
$show_all = ( (!empty($_GET['show'])) && ($_GET['show'] == 'all') ) ? true : false;

// Filtering
$filter = ( isset($_GET['filter']) ) ? urldecode($_GET['filter']) : 'none';
$filter = ( preg_match('#\-{1,}#', $filter) ) ? 'none' : $filter;

// Grab class_id
if ( isset($_GET['filter']) ) {
  $temp_filter = $_GET['filter'];
  // Just because filter is set doesn't mean its valid - clear it if its set to none
  if ( preg_match('/ARMOR_/', $temp_filter) ) {
    $temp_filter = preg_replace('/ARMOR_/', '', $temp_filter);
    $query_by_armor = 1;
    $query_by_class = 0;
    $id = $temp_filter;
  }elseif ( $temp_filter == "none" ) {
    $temp_filter = "";
    $query_by_armor = 0;
    $query_by_class = 0;
  } else {
    $query_by_class = 1;
    $query_by_armor = 0;
    $id = $temp_filter;
  } // end armor preg
} // end if filter

    $tpl->assign_block_vars('filter_row', array(
        'VALUE'    => strtolower("None"),
        'SELECTED' => ( $filter == strtolower("None") ) ? ' selected="selected"' : '',
        'OPTION'   => str_replace('_', ' ', 'None'))
    );

	// Add in the cute ---- line, filter on None if some idiot selects it
    $tpl->assign_block_vars('filter_row', array(
        'VALUE'    => strtolower("None"),
        'SELECTED' => ( $filter == strtolower("NULL") ) ? ' selected="selected"' : '',
        'OPTION'   => str_replace('_', ' ', "--------"))
    );

	// Grab generic armor information
	$sql = 'SELECT class_armor_type FROM __classes';
	$sql .= ' GROUP BY class_armor_type';
	$result = $db->query($sql);

        while ( $row = $db->fetch_record($result) )
        {
          $tpl->assign_block_vars('filter_row', array(
              'VALUE'    => "ARMOR_" . strtolower($row['class_armor_type']),
              'SELECTED' => ( $temp_filter == strtolower($row['class_armor_type']) ) ? ' selected="selected"' : '',
              'OPTION'   => str_replace('_', ' ', $row['class_armor_type']))
          );
        }

	// Add in the cute ---- line, filter on None if some idiot selects it
    $tpl->assign_block_vars('filter_row', array(
        'VALUE'    => strtolower("None"),
        'SELECTED' => ( $filter == strtolower("NULL") ) ? ' selected="selected"' : '',
        'OPTION'   => str_replace('_', ' ', "--------"))
    );

// Moved the class/race/faction information to the database
$sql  = 'SELECT class_name, class_id, class_min_level, class_max_level FROM __classes';
$sql .= ' GROUP BY class_name';
$result = $db->query($sql);

while ( $row = $db->fetch_record($result) ){
  $tpl->assign_block_vars('filter_row', array(
      'VALUE' => $row['class_name'],
      'SELECTED' => ( strtolower($filter) == strtolower($row['class_name']) ) ? ' selected="selected"' : '',
      'OPTION'   => ( !empty($row['class_name']) ) ? stripslashes($row['class_name']) : '(None)' )
  );
}
$db->free_result($result);

$sql  = 'SELECT m.*, (m.member_earned-m.member_spent+m.member_adjustment) AS member_current,
        member_status, r.rank_name, r.rank_hide, r.rank_prefix, r.rank_suffix, c.class_id,
        c.class_name AS member_class, c.class_armor_type AS armor_type,
        c.class_min_level AS min_level, c.class_max_level AS max_level';
$sql .=' FROM __members m ';
if (!empty($_GET['itemname'])){ 
  $sql .= ' LEFT JOIN __itemspecials_items ci on (ci.item_buyer = m.member_id), '; 
}else{
  $sql .= ', ';
}
$sql .= ' __member_ranks r, __classes c ';
$sql .= (!empty($_GET['itemname'])) ? ', '.$NSitemtable.' i ' : '';
$sql .= ' WHERE c.class_id = m.member_class_id';
$sql .= ' AND m.member_rank_id = r.rank_id';   
   
if (!empty($_GET['itemname'])){
  $sql .= " AND (i.item_buyer = m.member_name)";
  $sql .= " AND ((ci.item_name =  '". urldecode($_GET['itemname'])."') OR (i.item_name =  '". urldecode($_GET['itemname'])."'))";
}
   
if ( $query_by_class == '1' ){
  $sql .= " AND c.class_name =  '$id'";
    
  if ($conf['hidden_groups'] == 1){
    $sql .= " AND r.rank_hide = '0'";
  }
  if ($conf['hide_inactives'] == 1){
    $sql .= " And member_status != 1";
  }
}

if ( $query_by_armor == '1' ){
  $sql .= " AND c.class_armor_type =  '". ucwords(strtolower($temp_filter))."'";
}
if ( !empty($_GET['rank']) ){
  $sql .= " AND r.rank_name='" . urldecode($_GET['rank']) . "'";
}
if (!empty($_GET['itemname'])){
  $sql .= " GROUP BY m.member_id";
}
$sql .= ' ORDER BY '.$current_order['sql'];

if ( !($members_result = $db->query($sql)) ){
  message_die('Could not obtain member information', '', __FILE__, __LINE__, $sql);
}

while ( $row = $db->fetch_record($members_result) ){
  $iconhave = array();
  foreach($specialitems as $key => $item) {
    if(isset($member_items[$row['member_id']][stripslashes($item['name'])]) && $member_items[$row['member_id']][stripslashes($item['name'])] === true) {
      $iconhave[$item['name']] = array(
        'item_image'    => $item['item_icon'],
        'link'          => $eqdkp_root_path."viewitem.php" . $SID . "&amp;i=" . $member_items[$item['name']]['item_id']
      );
    }else{
      $iconhave[$item['name']] = array(
        'item_image'    => '',
        'link'          => ''
      );
    }
  }
  
  $u_rank_search  = 'specialitems.php' . $SID . '&amp;rank=' . urlencode($row['rank_name']);
  $u_rank_search .= ( ($eqdkp->config['hide_inactive'] == 1) && (!$show_all) ) ? '&amp;show=' : '&amp;show=all';
  $u_rank_search .= ( $filter != 'none' ) ? '&amp;filter=' . $filter : '';

  if ( member_display($row) ) {
    $member_count++;

    $tpl->assign_block_vars('members_row', array(
                'ROW_CLASS'       => $eqdkp->switch_row_class(),
                'ID'              => $row['member_id'],
                'COUNT'           => $member_count,
                'RANK'            => ( !empty($row['rank_name']) ) ? (( $row['rank_hide'] == '1' ) ? '<i>' . '<a href="'.$u_rank_search.'">' . stripslashes($row['rank_name']) . '</a>' . '</i>'  : '<a href="'.$u_rank_search.'">' . stripslashes($row['rank_name']) . '</a>') : '&nbsp;',
                'CURRENT'         => $row['member_current'],
                'C_CURRENT'       => color_item($row['member_current']),
                'C_TOTAL'         => color_item($row['member_earned']),
                'TOTAL'           => $row['member_earned'],
                'NAME'            => $row['rank_prefix'] . (( $row['member_status'] == '0' ) ? '<i>' . $row['member_name'] . '</i>' : $row['member_name']),
                'LEVEL'           => ( $row['member_level'] > 0 ) ? $row['member_level'] : '&nbsp;',
                'CLASS'           => ( !empty($row['member_class']) ) ? $row['member_class'] : '&nbsp;',
	        	    'CLASSIMG'        => MyClassImages($row['member_class'], $row['class_id']),
                'CLASS_EN'        => ISclassrename($row['member_class']),
                'ARMOR'		        => ( !empty($row['armor_type']) ) ? $row['armor_type'] : '&nbsp;',
                'U_VIEW_MEMBER'   => $eqdkp_root_path.'viewmember.php' . $SID . '&amp;' . URI_NAME . '='.$row['member_name'],
    ));
      
    if (is_array($custom) and isset($custom)){
      foreach ($custom as $key => $value) {
        $tpl->assign_block_vars('members_row.custom_items', array(
            'IMAGE'         => ( $iconhave[$value]['link'] != "" ) ? $iconhave[$value]['item_image'] : "",
          )
        );
      }
    }  
    $u_rank_search = '';
  }
}

$uri_addon  = ''; // Added to the end of the sort links
$uri_addon .= '&amp;filter=' . urlencode($filter);
$uri_addon .= ( isset($_GET['show']) ) ? '&amp;show=' . $_GET['show'] : '';

if ( ($eqdkp->config['hide_inactive'] == 1) && (!$show_all) ){
  $footcount_text = sprintf($user->lang['listmembers_active_footcount'], $member_count,
                                  '<a href="specialitems.php' . $SID . '&amp;' . URI_ORDER . '=' . $current_order['uri']['current'] . '&amp;show=all" class="rowfoot">');
}else{
  $footcount_text = sprintf($user->lang['listmembers_footcount'], $member_count);
}
$db->free_result($members_result);

 // Experimental code
if ($conf['si_itemstatus_show'] == 1){
  $customthingy = array_count_values($countitemsblubb);
  if (is_array($custom) and isset($custom)){
    foreach ($custom as $key => $value) {
      $tpl->assign_block_vars('dyn_counts', array(
          'ITEMS'         => ( isset($customthingy[$value]) ) ? $customthingy[$value] : 0,
          'MEMBER'        => $member_count)
      );
    }
  }     
}

// Dynamic Header
if (is_array($custom) and isset($custom)){
  foreach ($custom as $key => $value) {
    $imglink = 'specialitems.php'.$SID.'&itemname='.urlencode($value);
    if ($conf['itemstats'] == 1 ){
      $customheader = $isaddition->itemstats_get_header_Icon(stripslashes($value), "middle", addslashes($value), $imglink);
    }else{
      $customheader = '<a href="'.$imglink.'" >'.$value.'</a>';
    }
    $tpl->assign_block_vars('custom_header', array(
        'HEADER'    => $customheader
      )
    );
  }
}

$tpl->assign_vars(array(
    'F_MEMBERS'       => 'specialitems.php'.$SID,

    // JS Windows
    'JS_ABOUT'        => $jquery->Dialog_URL('About', $user->lang['is_dialog_header'], 'about.php', '380', '320'),

    'L_FILTER'        => $user->lang['filter'],
    'L_NAME'          => $user->lang['name'],
    'L_CLASS'         => $user->lang['class'],
    'L_RANK'          => $user->lang['rank'],
    'L_CURRENT'       => $user->lang['current'],
    'L_TOTAL'         => $user->lang['header_total'],

    'O_NAME'          => $current_order['uri'][0],
    'O_CLASS'         => $current_order['uri'][1],
    'O_RANK'          => $current_order['uri'][3],
    'O_CURRENT'       => $current_order['uri'][2],
    'O_TOTAL'         => $current_order['uri'][5],

    'URI_ADDON'       => $uri_addon,
    'U_LIST_MEMBERS'  => 'specialitems.php' . $SID . '&amp;',
    'ITEMSTATS_TRUE'  => ( $conf['itemstats'] == 1) ? true : false,
    'ICON_WIDTH'      => $conf['imgwidth'],
    'ICON_HEIGHT'     => $conf['imgheight'],

    'S_NOTMM'         => true,
    
    'SHOW_FOOTER_STAT'=> ( $conf['si_itemstatus_show'] == 1) ? true : false,
    'SHOW_CURR_DKP'   => ( $conf['si_points'] == 1) ? true : false,
    'SHOW_TOTAL_DKP'  => ( $conf['si_total'] == 1) ? true : false,
    'SHOW_USR_RANK'   => ( $conf['si_rank'] == 1) ? true : false,
    'SHOW_USR_CLASS'  => ( $conf['si_class'] == 1) ? true : false,
    'SHOW_CLSS_IMG'   => ( $conf['si_cls_icon'] == 1) ? true : false,
    'IS_COPYRIGHT'    => ISFooterGeneration(),
    'LISTMEMBERS_FOOTCOUNT' => $footcount_text)
);

$eqdkp->set_vars(array(
    'page_title'    => sprintf($user->lang['title_prefix'], $eqdkp->config['guildtag'], $eqdkp->config['dkp_name']).': '.$user->lang['is_title_specialitems'],
    'template_path' => $pm->get_data('itemspecials', 'template_path'),
    'template_file' => 'specialitems.html',
    'display'       => true)
);

?>
