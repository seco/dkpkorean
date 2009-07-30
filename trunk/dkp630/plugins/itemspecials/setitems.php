<?php
 /*
 * Project:     EQdkp ItemSpecials
 * License:     Creative Commons - Attribution-Noncommercial-Share Alike 3.0 Unported
 * Link:		    http://creativecommons.org/licenses/by-nc-sa/3.0/
 * -----------------------------------------------------------------------
 * Began:       2006
 * Date:        $Date: 2009-06-01 13:23:19 +0200 (Mo, 01 Jun 2009) $
 * -----------------------------------------------------------------------
 * @author      $Author: wallenium $
 * @copyright   2005-2008 Simon (Wallenium) Wallmann
 * @link        http://eqdkp-plus.com
 * @package     itemspecials
 * @version     $Rev: 5002 $
 * 
 * $Id: setitems.php 5002 2009-06-01 11:23:19Z wallenium $
 */

define('EQDKP_INC', true);
define('PLUGIN', 'itemspecials');
$eqdkp_root_path = '../../';
include_once('include/common.php');


$tier_temp = "";
$member_count = 0;

// the sort filter crap
$sort_order = array(
    0 => array('member_name', 'member_name desc'),
    1 => array('class_name', 'class_name desc'),
    2 => array('member_current desc', 'member_current'),
    3 => array('rank_name', 'rank_name desc')
);

$current_order = switch_order($sort_order);
$cur_hash = hash_filename("setitems.php");

// when class is empty:
if ($in->get('class') == ""){
  $start_page = true;
} else {
  $start_page = false;
}

// Load itemstats if possible
if ($conf['itemstats'] == 1){
  include_once(IS_ITEMSTATS_PATH);
  $isaddition = new ItemstatsAddition();
	$is_version = ($isaddition->GetItemstatsVersion()) ? true : false;
}

if (!$pm->check(PLUGIN_INSTALLED, 'itemspecials')) { message_die($user->lang['is_not_installed']); }

$user->check_auth('u_setitems_view');

$tiers_onpage = 0;
$tier = array();

// repeat it for all tiers   
foreach( $conf as $stupid_crap => $enabled ){
  $tuedeldue = explode('_', $stupid_crap);
  if($tuedeldue[0] == 'set' && $tuedeldue[1] == 'show'){
    if( $enabled == '1' ) {
      $myTierFile = 'games/'.$rpgfolders->GameName().'/setdata/'.$conf['locale'].'/set/'.strtolower($tuedeldue[2]).'.php';
      if(is_file($myTierFile)){
        require($myTierFile);
        array_push($tier, $tuedeldue[2]);    
        $tiers_onpage += $enabled;
      }
    }
  }
}
sort($tier);

$class_count = count($classname);
$class = $in->get('class');
 
foreach($classname as $clid=>$clname){
  $tpl->assign_block_vars('CLASSES', array(
                'NAME'      => $clname,
                'ID'        => $clid,
                'SELECTED'  => ($in->get('class') == $clid) ? "selected=selected" : "",
                'SP_SELECT' => ($in->get('class') == "") ? "selected=selected" : "",
            )
      );
}
      
if ($start_page == true && $conf['set_show_index'] == 1){
// startpage
$tiers_summ = count($tier_config);

foreach($tier as $tier_name){
  $tpl->assign_block_vars('setitems_name', array(
      'NAME'  => $tier_config[$tier_name]['real_name'],
    )
  );
}

$tpl->assign_vars(array('STARTPAGE' => true));
     
$sql = "SELECT item_id, item_name, item_buyer
        FROM " . $Sitemtable . "
        ORDER BY item_name ASC;";
$itemres = $db->query($sql);
if(!$itemres){ message_die($user->lang['is_item_info'], "", "", ""); }
$member_items = array();
while($row_item = $db->fetch_record($itemres)) {
  $member_items[$myISclass->MemName2ID($row_item['item_buyer'])][$row_item['item_name']] = true;
  $member_items[$row_item['item_name']]['item_id'] = $row_item['item_id'];
}

$sql = "SELECT item_id, item_name, item_buyer
        FROM __itemspecials_items
        ORDER BY item_name ASC;";
$itemres = $db->query($sql);
if(!$itemres){ message_die($user->lang['is_item_info'], "", "", ""); }
while($row_item = $db->fetch_record($itemres)) {
  $member_items[$myISclass->MemName2ID($row_item['item_buyer'])][$row_item['item_name']] = true;
  $member_items[$row_item['item_name']]['item_id'] = $row_item['item_id'];
}

$sp_sql = "SELECT m.*, (m.member_earned-m.member_spent+m.member_adjustment) AS member_current, member_name, 
		   member_status, r.rank_name, r.rank_hide, r.rank_prefix, r.rank_suffix,
		   c.class_name, c.class_id
        FROM (__members m INNER JOIN __classes c
        ON m.member_class_id = c.class_id)
        INNER JOIN __member_ranks r 
        on m.member_rank_id = r.rank_id ";
    if($conf['hide_inactives'] == 1){
      $sp_sql .= "And m.member_status != 1 ";
    }
    if($conf['hidden_groups'] == 1){
      $sp_sql .= "AND r.rank_hide = '0'";
    }
      $sp_sql .= "ORDER BY ".$current_order['sql'];
$sp_result = $db->query($sp_sql);
while ($sp_row = $db->fetch_record($sp_result)){        
  $member_count++;
  for ($i = 0; $i < $tiers_onpage; $i++) {
    $tier_sp[$tier[$i]] = 0;
    $items = $tier_config[$tier[$i]]['data'];
    $items = $items[$sp_row['class_id']];

    if ($items){
      foreach($items as $key=>$item){
        if (!is_numeric($key)){
        	$items[$key] 	= array('name'  => $key);
        	$items[$item] = array('name'  => $item);
        }else{
          $items[$key] 	= array('name'  => $item);
        }
      }
      foreach($items as $key => $item) {
        if(isset($member_items[$sp_row['member_id']][$item['name']]) && $member_items[$sp_row['member_id']][$item['name']] != 0) {
          $tier_sp[$tier[$i]]++;
        }
      }
    }
  } // end of for

        $footcount_text = sprintf($user->lang['listmembers_footcount'], $member_count);
        $tpl->assign_block_vars('SP_MEMBERS', array(
                        'link'                  => $eqdkp_root_path . "viewmember.php" . $SID . "&amp;name=" . $sp_row['member_name'],
                        'name'                  => $sp_row['member_name'],
                        'ROW_CLASS'             => $eqdkp->switch_row_class(),
                        'RANK'                  => ( !empty($sp_row['rank_name']) ) ? (( $sp_row['rank_hide'] == '1' ) ? '<i>' . '<a href="'.$u_rank_search.'">' . stripslashes($sp_row['rank_name']) . '</a>' . '</i>'  : '<a href="'.$u_rank_search.'">' . stripslashes($sp_row['rank_name']) . '</a>') : '&nbsp;',
                        'CLASS'                 => ( !empty($sp_row['class_name']) ) ? $sp_row['class_name'] : '&nbsp;',
	        	            'CLASS_EN'              => ISclassrename($sp_row['class_name']),
                        'CLASSIMG'              => MyClassImages($sp_row['class_name'], $sp_row['class_id']),
	        	            'C_CURRENT'             => color_item($sp_row['member_current']),
                        'C_TOTAL'               => color_item($sp_row['member_earned']),
                        'TOTAL'                 => $sp_row['member_earned'],
                        'CURRENT'               => $sp_row['member_current'])
                );
        foreach($tier as $tier_name){
          $temptiersumm[$tier_name]  = $temptiersumm[$tier_name] + $tier_sp[$tier_name];
          $tpl->assign_block_vars('SP_MEMBERS.setright_tiers', array(
              'ITEMS_COUNT'   => ( !empty($tier_sp[$tier_name]) ) ? $tier_sp[$tier_name] : 0,
              'BAR'           => ($tier_sp[$tier_name]) ? round(($tier_sp[$tier_name] / $tier_config[$tier_name]['pieces_total']) * 100)."%" : "0%",
              'ITEMS_TOTAL'   => $tier_config[$tier_name]['pieces_total'],
            )
          );
        }
      }
}else{     
for ($i = 0; $i < $tiers_onpage; $i++) {
$items = $tier_config[$tier[$i]]['data'][$class];

if(is_array($items)){
  foreach($items as $key=>$item){
    // get the stupid icons...
    if ($conf['itemstats'] == 1){
            $items[$key] = array(
                    'name'          => (!is_numeric($key)) ? $key : $item,
                    'name2'					=> (!is_numeric($key)) ? $item : false,
                    'realname'			=> $item,
                    'item_icon'     => $isaddition->itemstats_decorate_Icon($item, "middle", $is_version),
            );
    } else {
     $items[$key] = array(
                    'name'          => (!is_numeric($key)) ? $key : $item,
                    'name2'					=> (!is_numeric($key)) ? $item : false,
                    'realname'			=> $item,
                    'item_icon'     => html_entity_decode($conf['is_replace'])
            );
    }
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

$sql = "SELECT m.*, (m.member_earned-m.member_spent+m.member_adjustment) AS member_current, member_name, 
		   member_status, r.rank_name, r.rank_hide, r.rank_prefix, r.rank_suffix,
		   c.class_name, c.class_id
        FROM (__members m INNER JOIN __classes c
        ON m.member_class_id = c.class_id)
        INNER JOIN __member_ranks r 
        on m.member_rank_id = r.rank_id
        WHERE c.class_id = '" .(int) $class . "' ";
    if($conf['hide_inactives'] == 1){
      $sql .= "And m.member_status != 1 ";
    }
    if($conf['hidden_groups'] == 1){
      $sql .= "AND r.rank_hide = '0'";
    }
      $sql .= "ORDER BY member_name;";
$classres = $db->query($sql);

// fix the width, should be always the same table layout
$headwidth = 100/$tier_config[$tier[$i]]['pieces_total'];
if(!$classres)
    message_die($user->lang['is_member_info'],"", "", "");
    $tpl->assign_block_vars('TIERS_PAGE', array(
            'TIER'            => $tier[$i],

            'SHOW_1'       		=> "<td align='center' width='".$headwidth."%'>".$tier_config[$tier[$i]]['head_names'][1]."</td>",
            'SHOW_2'  				=> "<td align='center' width='".$headwidth."%'>".$tier_config[$tier[$i]]['head_names'][2]."</td>",
            'SHOW_3'      		=> "<td align='center' width='".$headwidth."%'>".$tier_config[$tier[$i]]['head_names'][3]."</td>",
            'SHOW_4'       		=> "<td align='center' width='".$headwidth."%'>".$tier_config[$tier[$i]]['head_names'][4]."</td>",
            'SHOW_5'      		=> "<td align='center' width='".$headwidth."%'>".$tier_config[$tier[$i]]['head_names'][5]."</td>",
            'SHOW_6'					=> ( $tier_config[$tier[$i]]['pieces_total'] >= 6) ? "<td align='center' width='".$headwidth."%'>".$tier_config[$tier[$i]]['head_names'][6]."</td>" : '',
            'SHOW_7'					=> ( $tier_config[$tier[$i]]['pieces_total'] >= 7) ? "<td align='center' width='".$headwidth."%'>".$tier_config[$tier[$i]]['head_names'][7]."</td>" : '',
            'SHOW_8'					=> ( $tier_config[$tier[$i]]['pieces_total'] >= 8) ? "<td align='center' width='".$headwidth."%'>".$tier_config[$tier[$i]]['head_names'][8]."</td>" : '',
            'SHOW_9'       		=> ( $tier_config[$tier[$i]]['pieces_total'] >= 9) ? "<td align='center' width='".$headwidth."%'>".$tier_config[$tier[$i]]['head_names'][9]."</td>" : '',
            
            'NO'              => $i,
            'TIER_NAME'       => $tier_config[$tier[$i]]['name'][$class],
          )
        );

        $tpl->assign_var('MEMBER_ITEM', true);
        foreach($myItems as $row) {
					$itemnametemporary = ($conf['itemstats'] == 1 && $conf['is_correctmode']) ? $isaddition->itemstats_format_name($row['item_name']) : $row['item_name'];
					$member_items[$myISclass->MemName2ID($row['item_buyer'])][$itemnametemporary] = true;
					$member_items[$row['item_name']]['item_id'] = $row['item_id'];
        }
        
        // Fetch the member information...
        while($row = $db->fetch_record($classres)) {
					$iconhave = array();
          if(is_array($items)){
						foreach($items as $key => $item) {
							if(isset($member_items[$row['member_id']][$item['name']])&& $member_items[$row['member_id']][$item['name']] === true) {
								$iconhave[] = array(
									'item_image'    => $item['item_icon'],
									'id'						=> urlencode($item['realname']),
									'id2'						=> $member_items[$item['name']]['item_id'],
								);
							}elseif($item['name2'] && isset($member_items[$row['member_id']][$item['name2']])&& $member_items[$row['member_id']][$item['name2']] === true) {
								$iconhave[] = array(
									'item_image'    => $item['item_icon'],
									'id'						=> urlencode($item['realname']),
									'id2'						=> $member_items[$item['name2']]['item_id'],
								);
							}else{
								$iconhave[] = array(
									'item_image'    => '',
									'id'						=> '',
									'id2'						=> ''
								);
							}
						}
					}
          $tpl->assign_block_vars('TIERS_PAGE.MEMBERS', array(
                        'link'                  => $eqdkp_root_path . "viewmember.php" . $SID . "&amp;name=" . $row['member_name'],
                        'name'                  => $row['member_name'],
                        'MEMBERITEMS_NEED.'     => $iconhave,
                        'ROW_CLASS'             => $eqdkp->switch_row_class(),
                        'RANK'                  => ( !empty($row['rank_name']) ) ? (( $row['rank_hide'] == '1' ) ? '<i>' . '<a href="'.$u_rank_search.'">' . stripslashes($row['rank_name']) . '</a>' . '</i>'  : '<a href="'.$u_rank_search.'">' . stripslashes($row['rank_name']) . '</a>') : '&nbsp;',
                        'CLASS'                 => ( !empty($row['class_name']) ) ? $row['class_name'] : '&nbsp;',
	        	            'CLASSIMG'              => MyClassImages($row['class_name'], $row['class_id']),
	        	            'CLASS_EN'              => ISclassrename($row['class_name']),
                        'C_CURRENT'             => color_item($row['member_current']),
                        'C_TOTAL'               => color_item($row['member_earned']),
                        'TOTAL'                 => $row['member_earned'],
                        'CURRENT'               => $row['member_current'])
                );
				}// end while
} // for end
} //if startpage end

$uri_addon .= '&amp;filter=none';
if ($start_page == true && $conf['set_show_index'] == 1){
  foreach($tier as $tier_name){
    $tpl->assign_block_vars('setitems_summ', array(
        'GLOBAL'       => $temptiersumm[$tier_name],
        'GL_PERCENT'   => ($temptiersumm[$tier_name]) ? round(($temptiersumm[$tier_name]/($member_count*8))*100) : 0,
      )
    );
  }
}

// Header Image
$header_image_path      = $eqdkp_root_path.'plugins/itemspecials/games/'.$rpgfolders->GameName().'/images/sp'.$in->get('class').'.jpg';
$header_image_fallback  = $eqdkp_root_path.'plugins/itemspecials/games/'.$rpgfolders->GameName().'/images/sp.jpg';
$header_image_img       =(is_file($header_image_path)) ? $header_image_path : $header_image_fallback;

$tpl->assign_vars(array(
        'ITEMLINK'				=> $eqdkp_root_path . "viewitem.php" . $SID . "&i=",
        'CLASSWIDTH'      => round(100 / count($classname),0) . "%",
        'U_SET_ITEMS'     => $eqdkp_root_path . "plugins/itemspecials/setitems.php" . $SID,
        'ROW_CLASS'       => $eqdkp->switch_row_class(),
        
        // JS Windows
        'JS_ABOUT'        => $jquery->Dialog_URL('About', $user->lang['is_dialog_header'], 'about.php', '380', '320'),
        'JS_ITEMINFOS'    => $jquery->Dialog_URL('iteminfo'.rand(), $user->lang['is_item_status'], "is_item.php?i='+id+'", '640', '450'),
        
        //'SHOW_EXEC_TIME'  => ( $conf['is_exec_time'] == 1) ? true : false,
        'SHOW_CURR_DKP'   => ( $conf['set_points'] == 1) ? true : false,
        'SHOW_TOTAL_DKP'  => ( $conf['set_total'] == 1) ? true : false,
        'SHOW_USR_RANK'   => ( $conf['set_rank'] == 1) ? true : false,
        'SHOW_USR_CLASS'  => ( $conf['set_class'] == 1) ? true : false,
        'SHOW_CLSS_IMG'   => ( $conf['set_cls_icon'] == 1) ? true : false,
        
        'SHOW_OP_CURR_DKP'=> ( $conf['set_op_points'] == 1) ? true : false,
        'SHOW_OP_TOT_DKP' => ( $conf['set_op_total'] == 1) ? true : false,
        'SHOW_OP_USR_RANK'=> ( $conf['set_op_rank'] == 1) ? true : false,
        'SHOW_OP_USR_CLS' => ( $conf['set_op_class'] == 1) ? true : false,
        'SHOW_OP_CLS_IMG' => ( $conf['set_op_cls_icon'] == 1) ? true : false,        
        
        'SHOW_STARTPAGE'  => ( $conf['set_show_index'] == 1) ? true : false,
        'CLASS_DROPDOWN'  => ( $conf['set_drpdwn_cls'] == 1 ) ? true : false,
        'ITEMSTATS_TRUE'  => ( $conf['itemstats'] == 1) ? true : false,
        'OLDST_ITMLINKS'	=> ( $conf['set_oldLink'] == 1) ? true : false,

        'ICON_WIDTH'      => $conf['imgwidth'],
        'ICON_HEIGHT'     => $conf['imgheight'],
        
        'O_NAME'          => $current_order['uri'][0],
        'O_CLASS'         => $current_order['uri'][1],
        'O_RANK'          => $current_order['uri'][3],
        'O_CURRENT'       => $current_order['uri'][2],
        'U_LIST_MEMBERS'  => 'setitems.php' . $SID . '&amp;',
        'URI_ADDON'       => $uri_addon,
        
        'IS_CLASS_ID'     => $in->get('class'),
        'IS_CLASSHEADIMG' => $header_image_img,
        'HEADER_CLS_TXT'	=> ($in->get('class') != "") ? $classname[$class]  : $user->lang['is_usermenu_Setitems'],
        'SP_SELECTED'     => ($in->get('class') == "") ? 'selected=selected' : "",  
        'STARTP_SELECTED' => ($in->get('class') == "") ? "selected=selected" : "",
        
        'LANG_HOME'       => $user->lang['is_home'],
        'L_CLASS'         => $user->lang['class'],
        'L_RANK'          => $user->lang['rank'],
        'L_CURRENT'       => $user->lang['current'],
        'L_TOTAL'         => $user->lang['header_total'],
        'L_NAME'          => $user->lang['name'],
        'L_SUMM'          => $user->lang['is_summ'],
        'IS_COPYRIGHT'    => ISFooterGeneration(),
        'FOOTCOUNT'       => $footcount_text
        )
);

$eqdkp->set_vars(array(
        'page_title'    => $myISclass->GeneratePageTitle($user->lang['is_title_setitems']),
        'template_path'	=> $pm->get_data('itemspecials', 'template_path'),
        'template_file' => 'setitems.html',
        'display'       => true)
);
?>
