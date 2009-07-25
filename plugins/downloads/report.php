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

// EQdkp required files/vars
define('EQDKP_INC', true);        // is it in the eqdkp? must be set!!
define('PLUGIN', 'downloads');   // Must be set!
$eqdkp_root_path = './../../';    // Must be set!
include_once($eqdkp_root_path . 'common.php');  // Must be set!

//Load global plugin functions
include_once($eqdkp_root_path . 'plugins/downloads/include/libloader.inc.php');

// Check if plugin is installed
if (!$pm->check(PLUGIN_INSTALLED, 'downloads')) { message_die('The Download-plugin is not installed.'); };

// Check user permission
$user->check_auth('u_downloads_view');

$redirect_url = "downloads.php".$SID."&file=".sanitize($in->get('file'));
	

if ($in->get('submit') != ""){

	if ( $user->data['user_id'] != ANONYMOUS ){
	
	//Get Download
	//Cache: plugin.downloads.links.{ID}
	$links_cache = $pdc->get('plugin.downloads.links.'.$in->get('file'),false,true);
	if (!$links_cache) {
		$download_query = $db->query("SELECT * FROM __downloads_links WHERE id = '".$db->escape($in->get('file'))."'");
		$download = $db->fetch_record($download_query);
		$pdc->put('plugin.downloads.links.'.$in->get('file'),$download,86400,false,true);
	} else{
		$download = $links_cache;
	};
	
	//Query: get E-Mail-Adress from the uploader
	$user_email_query = $db->query("SELECT user_email FROM __users WHERE user_id = '".$db->escape($download['user_id'])."'");
	$user_email_count = $db->affected_rows();
	
	//If the uploader is not reachable, send it to the admin
	if ($user_email_count > 0){

    	$user_email = $db->fetch_record($user_email_query);

	} else {
		
		$user_email = $eqdkp->config['admin_email'];
		
	};
	
	$mailtext = $user->lang['dl_report_email_body'];
	$mailtext .= "\r\n";
	$mailtext .= "\r\n";
	$mailtext .= $user->lang['dl_name_headline'].": ".sanitize($download['name']);
	$mailtext .= "\r\n";
	$mailtext .= $user->lang['dl_download_headline'].': http://'.$eqdkp->config['server_name'].$eqdkp->config['server_path'].'plugins/downloads/downloads.php?file='.sanitize($download['id']);
	$mailtext .= "\r\n";
	$mailtext .= "\r\n";
	$mailtext .= $user->lang['dl_report_email_reported_by'].": ".sanitize($user->data[username]);
	$mailtext .= "\r\n";
	$mailtext .= $user->lang['dl_report_email_comment']." ".sanitize($user->data[username]);
	$mailtext .= "\r\n";
	$mailtext .= sanitize($in->get('dl_comment'));

	$mailheader .= 'FROM:'.$eqdkp->config['admin_email'];
	$mailheader .= "\r\nContent-type: text";
	
	//Send the mail
	mail($user_email, $user->lang['dl_report_email_subject'].": ".sanitize($download['name']), $mailtext, $mailheader);
	
	$error_msg = "<script>parent.window.location.href = '".$redirect_url."';</script>";
	
	};
}
	


// Send the Output to the template Files.
$tpl->assign_vars(array(
	'DL_UP_SEND'               			=> $user->lang['dl_up_send'],
	'DL_REPORT_DEAD_LINK_INFO'			=> $user->lang['dl_l_report_dead_link_info'],
	'DL_REPORT_DEAD_LINK'				=> $user->lang['dl_l_report_dead_link'],
	'SID'								=> $SID,
	'DL_AD_RESET'						=> $user->lang['dl_ad_reset'],
	'DL_OV_ERROR'						=> $error_msg,
	'DL_S_USER_LOGGED_IN'				=> ( $user->data['user_id'] != ANONYMOUS ) ? true : false,
	'DL_USER_NOT_LOGGED_IN'				=> $user->lang['dl_report_not_logged_in'],
			
));



// Init the Template Shit
$eqdkp->set_vars(array(
	'page_title'	 		=> $user->lang['dl_ad_manage_config_ov'],
	'template_path'			=> $pm->get_data('downloads', 'template_path'),
	'template_file' 		=> 'report.html',
	'gen_simple_header'  	=> true,
	'display'       		=> true)
  );

?>
