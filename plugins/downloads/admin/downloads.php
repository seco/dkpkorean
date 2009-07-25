<?PHP
/*************************************************\
*             Downloads 4 EQdkp plus              *
* ----------------------------------------------- *
* Project Start: 05/2009                          *
* Author: GodMod                                  *
* Copyright: GodMod 				              *
* Link: http://eqdkp-plus.com/forum               *
* Version: 0.0.1a                                 *
* ----------------------------------------------- *
* Based on EQdkp-Plus Gallery by Badtwin & Lunary *
\*************************************************/
//License: Creative Commons - Attribution-Noncommercial-Share Alike 3.0 Unported
//License-Link: http://creativecommons.org/licenses/by-nc-sa/3.0/

// EQdkp required files/vars
define('EQDKP_INC', true);        // is it in the eqdkp? must be set!!
define('IN_ADMIN', true);         // Must be set if admin page
define('PLUGIN', 'downloads');   // Must be set!
$eqdkp_root_path = './../../../';
include_once('../include/common.php');
$wpfccore->InitAdmin();


// Check if plugin is installed
if (!$pm->check(PLUGIN_INSTALLED, 'downloads')) { message_die('The Downloads-plugin is not installed.'); }

// Check user permission
$user->check_auth('a_downloads_links');
($user->check_auth('a_downloads_upload', false) == true) ? $u_is_admin_upload = true : $u_is_admin_upload = false;

//Incluce common download-functions
include_once($eqdkp_root_path . 'plugins/downloads/include/common.php');


$cats_disabled = ($conf['disable_categories'] == 1) ? true : false;

// Check if the Update Check should ne enabled or disabled... In this case always enabled...
$updchk_enbled = ( $conf['enable_updatecheck'] == 1 ) ? true : false;

// Include the Database Updater
$gupdater = new PluginUpdater('downloads', '', 'downloads_config', 'include');

// The Data for the Cache Table
$cachedb        = array(
      'table' 		=> 'downloads_config',
      'data' 		=> $conf['vc_data'],
      'f_data' 		=> 'vc_data',
      'lastcheck' 	=> $conf['vc_lastcheck'],
      'f_lastcheck' => 'vc_lastcheck'
      );

// The Version Information
$versionthing   = array(
      'name' 	=> 'downloads',
      'version' => $pm->get_data('downloads', 'version'),
      'build' 	=> $pm->plugins['downloads']->build,
      'vstatus' => $pm->plugins['downloads']->vstatus,
      'enabled' => $updchk_enbled
      );

// Start Output à DO NOT CHANGE....
$wpfccore->InitAdmin();
$rbvcheck = new PluginUpdCheck($versionthing, $cachedb);
$rbvcheck->PerformUpdateCheck();

//Until now there are now errors ;-)
$error = false;

//Massedits
if ($in->get('mode') == 'massedit'){
	
  if ($in->get('dl_mass_option') == 'delete'){
	
		foreach ($in->getArray('links', 'int') as $elem) {
			
			//Get if the download is just a link or a local file
			//Cache: plugin.downloads.links.{ID}
			$link_cache = $pdc->get('plugin.downloads.links.'.$elem,false,true);
			if (!$link_cache){
				$data_query = $db->query("SELECT local_filename FROM __downloads_links WHERE id='".$db->escape($elem)."'");
				$data = $db->fetch_record($data_query);
				$pdc->put('plugin.downloads.links.'.$elem,$data,86400,false,true);
			} else{
				$data = $link_cache;
			};

			if ($data['local_filename'] !=""){
				if (file_exists($pcache->FolderPath('downloads/').$data['local_filename'])) {
				unlink($pcache->FilePath('downloads/'.$data['local_filename']));
				};
			};
			$del_query = $db->query("DELETE FROM __downloads_links WHERE id='".$db->escape($elem)."'");
		}
		$error_msg = $user->lang['dl_ad_delete_success'];
		//Delete Cache
		$pdc->del_suffix('plugin.downloads');
  	}
}


// Delete one download
if ($in->get('mode') =='delete'){
	$error_msg = $dlclass->delete_one_link($in->get('id'));
}


// Create the Category List
$cat_list = $dlclass->category_list();

//Sort Categories
$order = $in->get('o', '0.0');
$red = 'RED'.str_replace('.', '', $order);

$sort_order = array(
	0 => array('date desc', 'date'),			
    1 => array('file_type', 'file_type desc'),
    2 => array('description', 'description desc'),
    3 => array('views', 'views desc'),
	4 => array('permission', 'permission desc'),
	5 => array('file_size desc', 'file_size'),
);

$current_order = switch_order($sort_order);

// List Categories

//If Cats are disabled
if ($cats_disabled == true){
		$if_cats_exist = true;
			
			//Cache: plugin.downloads.links.{ORDER}
			$links_cache = $pdc->get('plugin.downloads.links.o'.$order,false,true);
			if (!$links_cache){
				$links = $db->query("SELECT * FROM __downloads_links ORDER BY ".$db->escape($current_order['sql']));
				$row = $db->fetch_record_set($links);
				$pdc->put('plugin.downloads.links.o'.$order,$row,86400,false,true);

			} else{
				$row = $links_cache;
			};
			
		$dlcount = count($row);
		$nolinks = ($dlcount > 0) ? false : true;

		$downloads_footcount = sprintf($user->lang['dl_cat_footcount_catsdisabled'], $dlcount);
		
		$tpl->assign_block_vars('index_list', array(					
			'DL_CAT_FOOTCOUNT'			=> sanitize($downloads_footcount),
			'DL_CAT_NOLINKS'			=> "<i>".$user->lang['pm_lu_nolinks']."</i>",
			'DL_S_NOLINKS'				=> sanitize($nolinks),
			'DL_URL_HEADLINE'			=> $user->lang['dl_url_headline'],
			'DL_TYPE_HEADLINE'			=> $user->lang['dl_type_headline'],
			'DL_DESC_HEADLINE'			=> $user->lang['dl_desc_headline'],
			'DL_COMMENT_HEADLINE'		=> $user->lang['dl_comment_headline'],
			'DL_PERM_HEADLINE'			=> $user->lang['dl_perm_headline'],
			'DL_DATE_HEADLINE'			=> $user->lang['dl_date_headline'],
			'DL_VIEWS_HEADLINE'			=> $user->lang['dl_views_headline'],
			'DL_ACTION_HEADLINE'		=> $user->lang['dl_action_headline'],
			'DL_FILESIZE_HEADLINE'		=> $user->lang['dl_filesize_headline'],
		));

		
			if (is_array($row)){
			//List all Downloads
				foreach ($row as $elem){
						$tpl->assign_block_vars('index_list.link_list', array(
 						'DL_LINK_NAME'			=> sanitize($elem['description']),
						'DL_LINK_COMMENT' 		=> sanitize($elem['comment']),
						'DL_LINK_VIEWS' 		=> sanitize($elem['views']),
						'DL_LINK_DATE' 			=> sanitize($elem['date']),
						'DL_LINK_ID' 			=> sanitize($elem['id']),
						'DL_LINK_DELETE_URL' 	=> 'downloads.php' . $SID.'&mode=delete&id='.sanitize($elem['id']),
						'DL_LINK_PERMISSION' 	=> ($elem['permission'] == 0) ? $user->lang['dl_perm_registered'] : $user->lang['dl_perm_public'],
						'DL_LINK_FILESIZE' 		=> $dlclass->human_size(sanitize($elem['file_size'])),
						'DL_ROW_CLASS'			=> $eqdkp->switch_row_class(),
						'DL_EXT_IMAGE'			=> $dlclass->extension_image(sanitize($elem['file_type'])),
						'DL_TITLE_LINK_DELETE'	=> $user->lang['dl_title_link_delete'],
						'DL_TITLE_LINK_EDIT'	=> $user->lang['dl_title_link_edit'],						
						));
				};
			};
			
			
} else {
	//If Categories are enabled
		//Cache: plugin.downloads.categories
		$categories_cache = $pdc->get('plugin.downloads.categories',false,true);
		if (!$categories_cache){
			$result = $db->query("SELECT * FROM __downloads_categories ORDER BY category_sortid");
			$result = $db->fetch_record_set($result);
			$pdc->put('plugin.downloads.categories',$result,86400,false,true);

		} else{
			$result = $categories_cache;
		};
	
	if (count($result) == 0){$if_cats_exist = false; $error_msg = $user->lang['dl_ad_nocats'];} else {$if_cats_exist = true;};
	

	if (is_array($result)) {
	foreach ($result as $row){
			
			//Get all downloads in a category
			//Cache: plugin.downloads.links_in_cat.{CATID}.{ORDER}
			$links_in_cat_cache = $pdc->get('plugin.downloads.links_in_cat.'.$row['category_id'].".o".$order,false,true);
			if (!$links_in_cat_cache){
				$links = $db->query("SELECT * FROM __downloads_links WHERE category = ".$db->escape($row['category_id'])." ORDER BY ".$db->escape($current_order['sql']));
				$dlrow = $db->fetch_record_set($links);
				$pdc->put('plugin.downloads.links_in_cat.'.$row['category_id'].".o".$order,$dlrow,86400,false,true);
			} else{
				$dlrow = $links_in_cat_cache;
			};
			

		$dlcount = count($dlrow);
		$nolinks = true;
		if ($dlcount > 0){$nolinks = false;}


		$downloads_footcount = sprintf($user->lang['dl_cat_footcount_without_pagination'], $dlcount);

		
		$tpl->assign_block_vars('index_list', array(
			'DL_CAT_HEADLINE'			=> $user->lang['dl_cat_headline'],						
 			'DL_CAT_ID'					=> sanitize($row['category_id']),
			'DL_CAT_NAME'				=> sanitize($row['category_name']),
			'DL_CAT_COMMENT'			=> sanitize($row['category_comment']),
			'DL_CAT_DOWNLOADS'			=> sanitize($dlcount),
			'DL_CAT_VIEWS'				=> sanitize($views),
			'DL_CAT_FOOTCOUNT'			=> sanitize($downloads_footcount),
			'DL_CAT_NOLINKS'			=> $user->lang['dl_cat_nolinks'],
			'DL_S_NOLINKS'				=> sanitize($nolinks),
			'DL_URL_HEADLINE'			=> $user->lang['dl_url_headline'],
			'DL_TYPE_HEADLINE'			=> $user->lang['dl_type_headline'],
			'DL_NAME_HEADLINE'			=> $user->lang['dl_name_headline'],
			'DL_DESC_HEADLINE'			=> $user->lang['dl_desc_headline'],
			'DL_PERM_HEADLINE'			=> $user->lang['dl_perm_headline'],
			'DL_DATE_HEADLINE'			=> $user->lang['dl_date_headline'],
			'DL_VIEWS_HEADLINE'			=> $user->lang['dl_views_headline'],
			'DL_ACTION_HEADLINE'		=> $user->lang['dl_action_headline'],
			'DL_FILESIZE_HEADLINE'		=> $user->lang['dl_filesize_headline'],
		));

			if (is_array($dlrow)) {
				foreach ($dlrow as $elem){
						$tpl->assign_block_vars('index_list.link_list', array(
 						'DL_LINK_NAME'			=> sanitize($elem['name']),
						'DL_LINK_DESC' 			=> sanitize($elem['description']),
						'DL_LINK_VIEWS' 		=> sanitize($elem['views']),
						'DL_LINK_DATE' 			=> sanitize($elem['date']),
						'DL_LINK_ID' 			=> sanitize($elem['id']),
						'DL_LINK_DELETE_URL' 	=> 'downloads.php' . $SID.'&mode=delete&id='.sanitize($elem['id']),
						'DL_LINK_PERMISSION' 	=> ($row['permission'] == 0) ? $user->lang['dl_perm_registered'] : $user->lang['dl_perm_public'],
						'DL_LINK_FILESIZE' 		=> $dlclass->human_size(sanitize($elem['file_size'])),
						'DL_ROW_CLASS'			=> $eqdkp->switch_row_class(),
						'DL_EXT_IMAGE'			=> $dlclass->extension_image(sanitize($elem['file_type'])),
						'DL_TITLE_LINK_DELETE'	=> $user->lang['dl_title_link_delete'],
						'DL_TITLE_LINK_EDIT'	=> $user->lang['dl_title_link_edit'],						
						));
				}; //End foreach
			};

			
			
			
	}; //End foreach
	}

};


//If an error with the download occures
switch ($in->get('error')){
				case "1": $error_msg = $user->lang['dl_ad_update_success'];
					break;
				case "2": $error_msg = $user->lang['dl_ad_delete_success'];
					break;
				case "3": $error_msg = $user->lang['dl_ad_upload_success'];
					break;
			}


// Send the Output to the template Files.
$tpl->assign_vars(array(
	'DL_IS_ADMIN_UPLOAD'				=> $u_is_admin_upload,
	'DL_AD_CONF_GEN'           			=> $user->lang['dl_ad_conf_gen'],
	'DL_UP_SEND'               			=> $user->lang['dl_up_send'],
	'ABOUT_HEADER'             			=> $user->lang['dl_about_header'],	
	'DL_L_CREDITS'                		=> 'Credits',
	'DL_L_COPYRIGHT'              		=> $dlclass->Copyright(),
	'ROW_CLASS'                			=> $eqdkp->switch_row_class(),
	'DL_HEADLINE'                    	=> $user->lang['dl_index_headline'],
	'DL_CATEGORY_SELECT'               	=> $cat_list,

	'DL_PERM_PUBLIC'                 	=> $user->lang['dl_perm_public'],
	'DL_PERM_REGISTERED'            	=> $user->lang['dl_perm_registered'],
	'DL_MASSEDIT_ACTION'            	=> 'downloads.php' . $SID.'&mode=massedit',
	'DL_AD_GO'           			 	=> $user->lang['dl_ad_go'],
	'DL_AD_DELETE'			       		=> $user->lang['dl_ad_delete'],
	'DL_AD_ALL_MARKED'			       	=> $user->lang['dl_ad_all_marked'],
	'DL_ERROR'			       			=> $error_msg,
	'DL_DESC_HEADLINE'					=> $user->lang['dl_desc_headline'],
	'DL_COMMENT_HEADLINE'				=> $user->lang['dl_comment_headline'],
	'DL_PERM_HEADLINE'					=> $user->lang['dl_perm_headline'],
	'DL_DATE_HEADLINE'					=> $user->lang['dl_date_headline'],
	'DL_VIEWS_HEADLINE'					=> $user->lang['dl_views_headline'],
	'DL_CAT_HEADLINE'					=> $user->lang['dl_cat_headline'],
	'DL_UPLOAD_HEADLINE'				=> $user->lang['dl_upload_headline'],
	'DL_AD_SELECT_ALL'					=> $user->lang['dl_ad_select_all'],
	'DL_AD_DESELECT_ALL'				=> $user->lang['dl_ad_deselect_all'],
	'SID'								=> $SID,
	$red 								=> '_red',
	'DL_S_IF_CATS'						=> $if_cats_exist,
	'DL_TITLE_LINK_EDIT'				=> $user->lang['dl_title_link_edit'],
	'DL_S_CATS_DISABLED'      			=> $cats_disabled,
	'DL_L_SEARCH_INPUTVALUE'			=> $user->lang['dl_search_inputvalue'],
	'UPDATE_BOX'              			=> $gupdater->OutputHTML(),
	'UPDCHECK_BOX'		  				=> $rbvcheck->OutputHTML(),
	'DL_JS_ABOUT'						=> $jquery->Dialog_URL('About', $user->lang['dl_about_header'], '../about.php', '500', '320'),
	'DL_JS_EDIT'						=> $jquery->Dialog_URL('editDownload', $user->lang['dl_title_link_edit'], "edit.php".$SID."&ref=acp&id='+id+'", '750', '400', 'downloads.php'),
	'DL_JS_UPLOAD'						=> $jquery->Dialog_URL('uploadDialog', $user->lang['dl_upload_headline'], "upload.php".$SID."&ref=acp&catid='+catid+'", '750', '400', 'downloads.php'),

	

));



// Init the Template Shit
$eqdkp->set_vars(array(
	'page_title'	 		=> $user->lang['downloads']." - ".$user->lang['dl_ad_manage_links_ov'],
	'template_path'			=> $pm->get_data('downloads', 'template_path'),
	'template_file' 		=> 'admin/downloads.html',
	'display'       		=> true)
  );

?>
