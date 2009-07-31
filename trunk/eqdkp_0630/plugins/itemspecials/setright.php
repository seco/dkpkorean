<?php
 /*
 * Project:     EQdkp ItemSpecials
 * License:     Creative Commons - Attribution-Noncommercial-Share Alike 3.0 Unported
 * Link:		    http://creativecommons.org/licenses/by-nc-sa/3.0/
 * -----------------------------------------------------------------------
 * Began:       2006
 * Date:        $Date: 2009-07-02 18:46:16 +0200 (Do, 02 Jul 2009) $
 * -----------------------------------------------------------------------
 * @author      $Author: wallenium $
 * @copyright   2005-2008 Simon (Wallenium) Wallmann
 * @link        http://eqdkp-plus.com
 * @package     itemspecials
 * @version     $Rev: 5142 $
 * 
 * $Id: setright.php 5142 2009-07-02 16:46:16Z wallenium $
 */

define('EQDKP_INC', true);
define('PLUGIN', 'itemspecials');
$eqdkp_root_path = '../../';
include_once('include/common.php');
include_once('include/additional_config.php');

// Plugin Code
$sql = "SELECT * FROM __itemspecials_plugins WHERE plugin_installed='1' LIMIT 1";
if (!($plugg_result = $db->query($sql))) { message_die($user->lang['is_sqlerror_plugin'], '', __FILE__, __LINE__, $sql); }
  $plugg = $db->fetch_record($plugg_result);
  $plugin_name	= 'plugins/'.$plugg['plugin_path'].'.php';
  $myPluginName = $plugg['plugin_path'];
  if (is_file($plugin_name)){
    include($plugin_name);
  }

if (!function_exists($myPluginName)){
  message_die($user->lang['is_no_plugins_inst']);
}
$mysetright = new SetRight();

// check if the tier data should be used or not
$kacknoob = array();
foreach( $conf as $stupid_crap => $enabled ){
  $tuedeldue = explode('_', $stupid_crap);
  if($tuedeldue[0] == 'sr' && $tuedeldue[1] == 'use'){
    if( $enabled == '1' ) {
      $myTierFile = 'games/'.$rpgfolders->GameName().'/setdata/'.$conf['locale'].'/set/'.strtolower($tuedeldue[2]).'.php';
      if(is_file($myTierFile)){
        require($myTierFile);    
        $kacknoob = $mysetright->array_merge_recursive_keep_keys($kacknoob,$tier_config[$tuedeldue[2]]['data']);
      }
    }
  }
}

    if (!$pm->check(PLUGIN_INSTALLED, 'itemspecials')) { message_die($user->lang['is_not_installed']); }

    $user->check_auth('u_setright_view');

    if ($conf['itemstats'] == 1){
      include_once(IS_ITEMSTATS_PATH);
    }

    $sort_order = array(
      0 => array('member_name', 'member_name desc'),
      1 => array('member_level desc', 'member_level'),
      2 => array('member_class', 'member_class desc'),
      3 => array('rank_name', 'rank_name desc'),
      4 => array('class_armor_type', 'class_armor_type desc'),
      5 => array('member_current desc', 'member_current'),
    );

    $current_order = switch_order($sort_order);
    $cur_hash = hash_filename("setright.php");
    $s_compare = false;
    $member_count = 0;

    // Figure out what data we're comparing from member to member
    // in order to rank them
    $sort_index = explode('.', $current_order['uri']['current']);
    $previous_source = preg_replace('/( (asc|desc))?/i', '', $sort_order[$sort_index[0]][$sort_index[1]]);
    $show_all = ( $in->get('show') == 'all' ) ? true : false;

    //
    // Filtering
    //
    $filter = $in->get('filter');
    $filter = ( preg_match('#\-{1,}#', $filter) ) ? 'none' : $filter;
    if ($in->get('filter') != '' ) {
      $temp_filter = $in->get('filter');
      // Just because filter is set doesn't mean its valid - clear it if its set to none
      if ( preg_match('/ARMOR_/', $temp_filter) ) {
        $temp_filter    = preg_replace('/ARMOR_/', '', $temp_filter);
        $query_by_armor = 1;
        $query_by_class = 0;
        $id             = $temp_filter;
      }elseif( $temp_filter == "none" ) {
        $temp_filter    = "";
        $query_by_armor = 0;
        $query_by_class = 0;
       } else {
        $query_by_class = 1;
        $query_by_armor = 0;
        $id             = $temp_filter;
       }
    }

    $tpl->assign_block_vars('filter_row', array(
        'VALUE'    => strtolower("None"),
        'SELECTED' => ( $filter == strtolower("None") ) ? ' selected="selected"' : '',
        'OPTION'   => str_replace('_', ' ', "None"))
    );

    // Add in the cute ---- line, filter on None if some idiot selects it
    $tpl->assign_block_vars('filter_row', array(
        'VALUE'    => strtolower("None"),
        'SELECTED' => ( $filter == strtolower("NULL") ) ? ' selected="selected"' : '',
        'OPTION'   => str_replace('_', ' ', "--------"))
    );
    
    // Grab generic armor information
    $sql = 'SELECT class_armor_type FROM __classes GROUP BY class_armor_type';
    $result = $db->query($sql);
    while ( $row = $db->fetch_record($result) ){
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
		
		// The class Dropdown
    foreach($classname as $cl_id=>$cl_name){
      $tpl->assign_block_vars('filter_row', array(
                'VALUE' => $cl_name,
                'SELECTED' => ( strtolower($filter) == strtolower($cl_name) ) ? ' selected="selected"' : '',
                'OPTION'   => ( !empty($cl_name) ) ? stripslashes($cl_name) : '(None)' )
            );
    }

    // Build SQL query based on GET options
    $sql = 'SELECT m.member_id, m.member_name, m.member_level, m.member_status,
                   (m.member_earned-m.member_spent+m.member_adjustment) AS member_current, m.member_earned,
                   m.member_spent, m.member_adjustment,
                   r.rank_name, r.rank_hide, r.rank_prefix, r.rank_suffix,
                   c.class_name AS member_class, c.class_id,
                   c.class_armor_type AS armor_type,
                   c.class_min_level AS min_level,
                   c.class_max_level AS max_level
            FROM __members m, __member_ranks r, __classes c
            WHERE c.class_id = m.member_class_id
            AND (m.member_rank_id = r.rank_id)';
            
            if ($conf['hidden_groups'] == 1){
          $sql .= " AND r.rank_hide = '0' ";
        }
        if ($conf['hide_inactives'] == 1){
          $sql .= "AND m.member_status != 1 ";
        }
            
    if ( $in->get('rank') != '' ){
      $sql .= " AND r.rank_name='".$db->escape(urldecode($in->get('rank')))."'";
    }

    if ( $query_by_class == '1' ){
      $sql .= " AND c.class_name =  '$id'";
    }

    if ( $query_by_armor == '1' ){
      $sql .= " AND c.class_armor_type =  '". $db->escape(ucwords(strtolower($temp_filter)))."'";
    }

    $sql .= ' ORDER BY '.$current_order['sql'];

    if ( !($members_result = $db->query($sql))){
      message_die('Could not obtain member information', '', __FILE__, __LINE__, $sql);
    }

    // *********************************************
    // PLUGIN API
    // collect all static  Data for the IS PLUGIN-API
  		$raid_attendance = $db->query('SELECT r.raid_id, r.raid_date, count(*) as anzahl FROM eqdkp_raids r 
  																	LEFT JOIN eqdkp_raid_attendees ra ON ra.raid_id=r.raid_id GROUP BY r.raid_id ORDER BY r.raid_date');
  		$raidattendance = array();
  		while ($row = $db->fetch_record($raid_attendance)){
  			$raidattendance[$row['raid_id']] = $row['raid_date'];
  			$countperraid[$row['raid_id']] = $row['anzahl'];
  		}
    // END OF PLUGIN API *************************
    
    while ( $row = $db->fetch_record($members_result) ){
        // Figure out the rank search URL based on show and filter
        $u_rank_search  = 'setright.php' . $SID . '&amp;rank=' . urlencode($row['rank_name']);
        $u_rank_search .= ( ($eqdkp->config['hide_inactive'] == 1) && (!$show_all) ) ? '&amp;show=' : '&amp;show=all';
        $u_rank_search .= ( $filter != 'none' ) ? '&amp;filter=' . sanitize($filter) : '';


        if ( member_display($row) ){
            $member_count++;
            $setvals = $mysetright->getStats($row['member_id']);

            // *********************************************
            // PLUGIN API
            $calc_data = array(
            	// MEMBER
              'membername'      => $row['member_name'],
              'class'           => $row['member_class'],
              'member_id'       => $row['member_id'],
              'countperclass'   => $membersperclass,
              
              // DKP
              'dkp_total'       => $row['member_earned'],
              'dkp_current'     => $row['member_current'],
              'dkp_spent'				=> $row['member_spent'],
              'dkp_adjustment' 	=> $row['member_adjustment'],
              
              // RAID
              'raidcount'       => $setvals[0],
              'raid_total'      => count($raidattendance),
              'countperraid'    => $countperraid,
              'raids_array'			=> $raidattendance,
              'memberraids'     => $setvals[3],
              
              // ITEMS
							'itemsumm'        => $mysetright->SetItemsCount(),
							'memberitems'     => $setvals[2],
							'itemcount'       => $setvals[1],
            );
            
            // Load the Plugin Module...
            if (function_exists($myPluginName)){
             $calculation = $myPluginName($calc_data, $kacknoob);
            }else{ 
            	$calculation = 0;
            }
						// END OF PLUGIN API *************************
						
            $priv_output[$member_count] = array(
                'ROW_CLASS'     => $eqdkp->switch_row_class(),
                'ID'            => $row['member_id'],
                'COUNT'         => $member_count,
                'NAME'          => $row['rank_prefix'] . (( $row['member_status'] == '0' ) ? '<i>' . $row['member_name'] . '</i>' : $row['member_name']) . $row['rank_suffix'],
                'RANK'          => ( !empty($row['rank_name']) ) ? (( $row['rank_hide'] == '1' ) ? '<i>' . '<a href="'.$u_rank_search.'">' . stripslashes($row['rank_name']) . '</a>' . '</i>'  : '<a href="'.$u_rank_search.'">' . stripslashes($row['rank_name']) . '</a>') : '&nbsp;',
                'LEVEL'         => ( $row['member_level'] > 0 ) ? $row['member_level'] : '&nbsp;',
                'CLASS'         => ( !empty($row['member_class']) ) ? $row['member_class'] : '&nbsp;',
                'CLASSIMG'      => MyClassImages($row['member_class'], $row['class_id']),
                'CLASS_EN'      => ISclassrename($row['member_class']),
                'ARMOR'         => ( !empty($row['armor_type']) ) ? $row['armor_type'] : '&nbsp;',
								'API'						=> $calculation['body'],
                'U_VIEW_MEMBER' => $eqdkp_root_path.'viewmember.php' . $SID . '&amp;' . URI_NAME . '='.$row['member_name'],
            );
            $u_rank_search = '';
        }
    }
    if ($priv_output){
    	if($in->get('apisort', 0) > 0){
    		$sortkey = sanitize($in->get('apisort', 0) - 1);
    		$rows_fsort = array();
    		foreach($priv_output as $members_line){
				$rows_fsort[] = $members_line['API'][$sortkey]['count'];
				}
				$sortproperty[$sortkey] = ($_GET['sort'] == 'asc') ? 'desc' : 'asc';
				$sortascdesc[$sortkey] = ($sortproperty[$sortkey] == 'asc') ? SORT_DESC : SORT_ASC;
				switch ($in->get('fs')) {
					case 'numeric'	: $forcesort = SORT_NUMERIC; 	break;
					case 'string'		: $forcesort = SORT_STRING; 	break;
					default					: $forcesort = SORT_REGULAR; 	break;
				}
    		array_multisort($rows_fsort, $sortascdesc[$sortkey], $forcesort, $priv_output);
    	}
      foreach($priv_output as $values){
        $values['ROW_CLASS'] = $eqdkp->switch_row_class();
        $tpl->assign_block_vars('members_row', $values);
				// Output the Row Values
        foreach($values['API'] as $trowvalues){
        	$tpl->assign_block_vars('members_row.tablerow', array(
        		'VALUE'		=> $trowvalues['count'],
        		'COLOR'		=> $trowvalues['color'],
        	));
      	}
      }
    }else{
        $values['ROW_CLASS'] = $eqdkp->switch_row_class();
        $tpl->assign_block_vars('members_row', '');
    }
		
		// the Table Headers
		foreach($calculation['head'] as $key=>$trownames){
    	$tpl->assign_block_vars('tablehead', array(
      	'NAME'		=> $trownames[0],
      	'ID'			=> $key+1,
      	'SORT'		=> $sortproperty[$key],
      	'FS'			=> $trownames[1]
      ));
     }
		
    $uri_addon  = ''; // Added to the end of the sort links
    $uri_addon .= '&amp;filter=' . sanitize(urlencode($filter));
    $uri_addon .= ( $in->get('show') != '') ? '&amp;show=' . sanitize($in->get('show')) : '';

    if ( ($eqdkp->config['hide_inactive'] == 1) && (!$show_all) )
    {
        $footcount_text = sprintf($user->lang['listmembers_active_footcount'], $member_count,
                                  '<a href="setright.php' . $SID . '&amp;' . URI_ORDER . '=' . $current_order['uri']['current'] . '&amp;show=all" class="rowfoot">');
    }else{
      $footcount_text = sprintf($user->lang['listmembers_footcount'], $member_count);
    }
    $db->free_result($members_result);

$tpl->assign_vars(array(
    'F_MEMBERS'               => 'setright.php'.$SID,
    'V_SID'                   => str_replace('?' . URI_SESSION . '=', '', $SID),
    'JS_ABOUT'                => $jquery->Dialog_URL('About', $user->lang['is_dialog_header'], 'about.php', '380', '320'),
		
    'L_FILTER'                => $user->lang['filter'],
    'L_NAME'                  => $user->lang['name'],
    'L_RANK'                  => $user->lang['rank'],
    'L_LEVEL'                 => $user->lang['level'],
    'L_CLASS'                 => $user->lang['class'],
    'L_ARMOR'                 => $user->lang['armor'],
    'L_HEAD_1'                => $calculation['head1'],
    'L_HEAD_2'    		        => $calculation['head2'],
    'L_HEAD_3'                => $calculation['head3'],
		
    'SHOW_ROW1'               => ($calculation['head1']) ? true : false,
    'SHOW_ROW2'               => ($calculation['head2']) ? true : false,
    'SHOW_ROW3'               => ($calculation['head3']) ? true : false,
		
    'SHOW_USR_LEVEL'          => ( $conf['sr_level'] == 1) ? true : false,
    'SHOW_USR_RANK'           => ( $conf['sr_rank'] == 1) ? true : false,
    'SHOW_USR_CLASS'          => ( $conf['sr_class'] == 1) ? true : false,
    'SHOW_CLSS_IMG'           => ( $conf['sr_cls_icon'] == 1) ? true : false,

    'O_NAME'                  => $current_order['uri'][0],
    'O_LEVEL'                 => $current_order['uri'][1],
    'O_CLASS'                 => $current_order['uri'][2],
    'O_RANK'                  => $current_order['uri'][3],
    'O_ARMOR'                 => $current_order['uri'][4],
    'O_CURRENT'               => $current_order['uri'][5],

    'URI_ADDON'               => $uri_addon,
    'U_LIST_MEMBERS'          => 'setright.php' . $SID . '&amp;',
    'S_NOTMM'                 => true,
    'IS_COPYRIGHT'            => ISFooterGeneration(),
    'LISTMEMBERS_FOOTCOUNT'   => $footcount_text
  )
);

$eqdkp->set_vars(array(
    'page_title'    	=> $myISclass->GeneratePageTitle($user->lang['is_title_itemrights']),
    'template_path'		=> $pm->get_data('itemspecials', 'template_path'),
    'template_file'		=> 'setright.html',
    'display'       	=> true)
);
?>
