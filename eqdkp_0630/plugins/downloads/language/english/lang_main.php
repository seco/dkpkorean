<?php
// Global Strings
$lang['downloads'] 					= 'EQdkp-Plus Downloads';
$lang['dl_about_header'] 			= 'About the Download-Plugin';
$lang['dl_created_devteam'] 		= ' by GodMod';
$lang['dl_additionals'] 			= 'Additionals to this Plugin';
$lang['dl_licence'] 				= 'Licence';


// Install and Menu entrys
$lang['dl_view'] 					= 'Downloads';
$lang['dl_ad_delete'] 				= 'Delete';
$lang['dl_ad_reset'] 				= 'Reset';
$lang['dl_ad_send'] 				= 'Submit';
$lang['dl_ad_go'] 					= 'Go';
$lang['dl_shortdesc']				= 'A Downloads-Management for EQdkp';
$lang['dl_description']				= 'A Downloads-Management for EQdkp-plus';
$lang['dl_ad_manage_categories'] 	= 'Categories';
$lang['dl_ad_manage_links'] 		= 'Downloads';
$lang['dl_ad_manage_categories_ov']	= 'Manage Categories';
$lang['dl_ad_manage_links_ov']		= 'Manage Downloads';
$lang['dl_ad_manage_config'] 		= 'Settings';
$lang['dl_ad_manage_config_ov'] 	= 'Config Settings';
$lang['dl_ad_manage_upload_ov'] 	= 'Upload';
$lang['dl_view_downloads_ov'] 		= 'View';

//Error/Succes-messages
$lang['dl_ad_delete_success'] 		= '<img src="'.$eqdkp_root_path.'/plugins/downloads/images/ok.png">The selected files have been removed successfully.';
$lang['dl_ad_update_success'] 		= '<img src="'.$eqdkp_root_path.'/plugins/downloads/images/ok.png">The Download has been edited successfully.';
$lang['dl_ad_fields_empty'] 		= '<img src="'.$eqdkp_root_path.'/plugins/downloads/images/error.png">Not all required fields have been entered.';
$lang['dl_ad_upload_file_exists'] 	= '<img src="'.$eqdkp_root_path.'/plugins/downloads/images/error.png">This file has been already uploaded.';
$lang['dl_ad_upload_fail_file'] 	= '<img src="'.$eqdkp_root_path.'/plugins/downloads/images/error.png">This is not a valid Type-Format.';
$lang['dl_ad_upload_success'] 		= '<img src="'.$eqdkp_root_path.'/plugins/downloads/images/ok.png">The File has been uploaded successfully.';
$lang['dl_ov_download_file_not_found'] 		= '<img src="'.$eqdkp_root_path.'/plugins/downloads/images/error.png">Die Datei wurde auf dem Webspace nicht mehr gefunden. Bitte kontaktiere den Administrator.';
$lang['dl_ov_category_created'] 	= '<img src="'.$eqdkp_root_path.'/plugins/downloads/images/ok.png">The Category <b>"%s"</b> has been created successfully.';

// Permission
$lang['dl_perm_public'] 			= 'Public';
$lang['dl_perm_registered'] 		= 'Registered';

//Settings
$lang['dl_ad_conf_gen'] 						= 'Common Settings: ';
$lang['dl_ad_conf_view'] 						= 'Display Settings: ';
$lang['dl_ad_conf_extended'] 					= 'Advanced Settings: ';
$lang['dl_ad_conf_accepted_file_types'] 		= 'Allowed file extensions: ';
$lang['dl_ad_conf_htcheck_disabled_warning'] 	= 'y disabling this feature it is no longer considered whether the download directory contains a .htaccess-file.<br>This file prevents unauthorized downloads.<br> <br> <b>Disabling this feature is not recommended!</b>';
$lang['dl_ad_conf_htcheck_disabled'] 			= 'Disable .htaccess-Check:';
$lang['dl_ad_conf_cat_disabled'] 				= 'Disable Categories:';
$lang['dl_ad_conf_related_links'] 				= 'Enable related Downloads:';
$lang['dl_ad_conf_mirrors'] 					= 'Enable entering mirrors:';
$lang['dl_ad_conf_traffic_limit'] 				= 'Max. monthly traffic:';
$lang['dl_ad_conf_comments'] 					= 'Enable Comments:';
$lang['dl_ad_conf_save_sucess'] 				= 'Settings have been saved successfully.';
$lang['dl_ad_conf_captcha'] 					= 'Unregistered User have to make a CAPTCHA:';
$lang['dl_ad_conf_captcha_private_key'] 		= 'Private Key of reCATPCHA:';
$lang['dl_ad_conf_captcha_public_key'] 			= 'Public Key of reCATPCHA:';
$lang['dl_ad_conf_statistics'] 					= 'Show Statistics on Overview-Page:';
$lang['dl_ad_conf_updatecheck'] 				= 'Enable check for new Plugin Versions:';
$lang['dl_ad_conf_debug'] 						= 'Enable Debug-Mode:';
$lang['dl_ad_conf_items_per_page'] 				= 'Downloads per Page:';
$lang['dl_ad_conf_show_downloads_tab'] 			= 'Show Link to the downloads-page on tab-menu:';
$lang['dl_ad_conf_force_db_update']				= 'Force Datebase-Update';
$lang['dl_ad_conf_force_db_warn']               = 'Should the Database Version be resettet? You will be able to update the table after that again!';


//Help-messages
$lang['dl_help_file_types']				= 'Paste here (separated with commas) all allowable file extensions. This applies only to files that are uploaded, not to URLs. As file-extension, only use the letters after the last dot, e.g. "tar.gz" is not correct, but "gz".';
$lang['dl_help_cat_disabled']			= 'The category management can be turned off. All Downloads are shown in one list.';
$lang['dl_help_htcheck']				= 'A function checks regularly if the download-directory is protected with a .htaccess-file. This function can be disabled. <b><span style="color:#ff0000">Disabling this function is not recommended!</span> Only for experienced Admins!</b>';
$lang['dl_help_related_links']			= 'You can related Downloads to other downloads. The related files will appear at the detail-page of a a Download.';
$lang['dl_help_mirrors']				= 'In order to offer a continous availability of a download, you can enter a number of mirrors that contain the same file.';
$lang['dl_help_mirrors_upload']				= 'Enter here one or more URLs to mirrors that contain the same file for download.';
$lang['dl_help_comments']				= 'User can submit their opinion about a Download. (This does not imfluence the rating-function!)';
$lang['dl_help_traffic_limit']			= 'Enter here the monthly traffic-limit. Leave this field empty, if no limit is wanted. Enter "0" to prevent all downloads of local files.';
$lang['dl_help_filesize']				= 'The file-size is only for external URLs. The file-size of uploaded files is calculated automaticly.';
$lang['dl_help_related_links']			= 'Enter here (seperated with commas) the IDs of related files. You can get the ID for example from the URL: "../downloads.php?file=3". Here the ID is "3".';
$lang['dl_help_recaptcha']			= 'Bevor Downloading a lokal file, unregistered Users have to make a CAPTCHA. This deserves to save Traffic, because only Humans can Download a file. A free account on reCAPTCHA.net is requiered.';
$lang['dl_help_recaptcha_private_key']			= 'Insert here the private Key of your Account on reCAPTCHA.net.';
$lang['dl_help_recaptcha_public_key']			= 'Insert here the public Key of your Account on reCAPTCHA.net.';
$lang['dl_help_statistics']			= 'Shows Statistics like traffic, last uploaded file, Top5-Downlaods and much more on the overview-page.';
$lang['dl_help_debug']				= 'In Debug-mode, error messages during the file-upload are shown.<b>Only activate for testing purposes!</b>';
$lang['dl_help_dbreset']			= 'If you\'re upgrading from a previos Alpha/Beta Version, you need to force an update by hand. Click on the button behind the Version to force a n update of the Database tables.<br> Some update steps might fail if you\'re updating an alpha/beta, thats because of the existing changes in the database.';


//Categories
$lang['dl_ad_cat_footcount'] 			= "... found %d Categorie(s)";
$lang['dl_mirror_footcount'] 			= "... found %d Mirror(s)";
$lang['dl_cat_footcount']   			= "... found %d Download(s) in this category";
$lang['dl_cat_footcount_without_pagination']   	= "... found %d Download(s)";
$lang['dl_cat_footcount_catsdisabled'] 	= "... found %1\$d Download(s) / %2\$d per Page";
$lang['dl_related_links_footcount'] 	= "... found %d related Download(s)";
$lang['dl_ov_footcount']   				= "... found %1\$s Download(s) in %2\$s Categorie(s)";
$lang['dl_cat_nolinks'] 				= '<i>There are no downloads in this category.</i>';
$lang['dl_cat_headline'] 				= 'Category';
$lang['dl_edit_headline'] 				= 'Edit Download';
$lang['dl_select_file_headline'] 		= 'Select File';
$lang['dl_select_type_headline'] 		= 'Select Type';
$lang['dl_upload_headline'] 			= 'Create new Download';
$lang['dl_url_headline'] 				= 'External URL';
$lang['dl_type_headline'] 				= 'Type';
$lang['dl_filesize_headline'] 			= 'Size';
$lang['dl_desc_headline'] 				= 'Description';
$lang['dl_name_headline'] 				= 'Name';
$lang['dl_perm_headline'] 				= 'Permission';
$lang['dl_views_headline'] 				= 'Views';
$lang['dl_date_headline'] 				= 'Date';
$lang['dl_action_headline'] 			= 'Action';
$lang['dl_ad_all_marked'] 				= 'marked...';
$lang['dl_ad_select_all'] 				= 'Check all';
$lang['dl_ad_deselect_all'] 			= 'Uncheck all';
$lang['dl_no_cats'] 					= 'There are no Downloads available.';
$lang['dl_rating_headline'] 			= 'Rating';
$lang['dl_stat_headline'] 				= 'Statistics';
$lang['dl_top5_headline'] 				= 'TOP5-Downloads';
$lang['dl_file_headline'] 				= 'File';
$lang['dl_file_info_headline'] 			= 'File-Informationen';
$lang['dl_files_headline'] 				= 'Files';
$lang['dl_related_links_headline'] 		= 'Related Downloads';

$lang['dl_l_cats'] 						= 'Categories';
$lang['dl_l_files'] 					= 'Files';
$lang['dl_l_traffic'] 					= 'Traffic';
$lang['dl_l_traffic_month'] 			= 'Traffic this month';
$lang['dl_l_traffic_total'] 			= 'Traffic total';
$lang['dl_l_traffic_of'] 				= 'of';
$lang['dl_l_last_uploaded'] 			= 'Last uploaded File';
$lang['dl_l_filename'] 					= 'Filename';
$lang['dl_l_md5'] 						= 'MD5-Hash';
$lang['dl_l_filesize'] 					= 'Filesize';
$lang['dl_l_uploader'] 					= 'Uploader';
$lang['dl_l_upload_date'] 				= 'Uploaded on';
$lang['dl_l_views'] 					= 'Downloads';
$lang['dl_l_report_dead_link'] 			= 'Report dead link';
$lang['dl_l_report_dead_link_info'] 	= 'In order to report a dead link, just click on the button below. If you know the right or another URL to this file, leave it (and a short description) in this field:';
$lang['dl_l_rating'] 					= 'Rate it';
$lang['dl_l_thanks_for_rating'] 		= 'Thank you for your rating!';
$lang['dl_l_good'] 						= 'very good';
$lang['dl_l_bad'] 						= 'very bad';
$lang['dl_l_select_rating'] 			= 'Select Rating';
$lang['dl_l_votes'] 					= 'Votes';
$lang['dl_l_mirrors'] 					= 'Mirrors';
$lang['dl_l_mirrors_download'] 		    = 'Download via Mirror #%d';
$lang['dl_l_cat_not_existing'] 		    = 'The selected category does not exist.';
$lang['dl_l_download_it'] 		    	= 'Download %s now!';

$lang['dl_l_preview_image'] 			= "Preview-Image";
$lang['dl_l_preview'] 					= "Preview";

// Admin Categories
$lang['dl_ad_created'] 			= ' has been created.';
$lang['dl_ad_deleted'] 			= ' has been deleted.';
$lang['dl_ad_categories'] 		= 'Existing categories';
$lang['dl_up_category'] 		= 'Category: ';
$lang['dl_ad_input_comment'] 	= 'Description: ';
$lang['dl_ad_cats_disabled'] 	= '<img src="'.$eqdkp_root_path.'plugins/downloads/images/credits/info.png"><b>Categories have been deactivated. You can reactive it  <a href="'.$eqdkp_root_path.'plugins/downloads/admin/settings.php">here</a></b>.';
$lang['dl_ad_will_linked'] 		= 'Information: URLs will only be linked!';
$lang['dl_ad_nocats'] 			= '<img src="'.$eqdkp_root_path.'plugins/downloads/images/credits/info.png">There are no categories. Please  <a href="'.$eqdkp_root_path.'plugins/downloads/admin/categories.php">create a new categorie</a>.<br><br>';
$lang['dl_ad_name_uncategorized_cat'] = 'Uncategorized';
$lang['dl_ad_comment_uncategorized_cat'] = 'For all uncategorized downloads';
$lang['dl_ad_manage_cat_order'] 	= 'Order';
$lang['dl_ad_manage_cat_update'] 	= 'Update';
$lang['dl_ad_new_cat'] 				= 'Create new Category';
$lang['dl_ad_create'] 				= 'Create:';
$lang['dl_ad_reset'] 				= 'Reset';
$lang['dl_ad_nocats'] 			= '<img src="'.$eqdkp_root_path.'plugins/downloads/images/credits/info.png">There are no categories. Please  <a href="'.$eqdkp_root_path.'plugins/downloads/admin/categories.php">create a new categorie</a>.<br><br>';
$lang['dl_ad_cat_delall']			= 'Remove all Categories';
$lang['dl_ad_cat_all_deleted']		= 'All Categories have been removed!';


//Report download
$lang['dl_report_email_subject'] 		= 'Broken Download';
$lang['dl_report_email_body'] 			= 'A broken Download has been reported:';
$lang['dl_report_email_reported_by'] 	= 'Reported by:';
$lang['dl_report_email_comment'] 		= 'Comment of';
$lang['dl_report_not_logged_in'] 		= 'Broken Downloads can only be reported by registered users.';

//Search
$lang['dl_search_no_matches'] 		= 'Your search for <b>"%s"</b> did not produce any results.';
$lang['dl_search_matches'] 			= "%2\$s Results for <b>\"%1\$s\"</b> :";
$lang['dl_search_footcount'] 		= "... found %1\$d Download(s) / %2\$d per Page";
$lang['dl_search_headline'] 		= "Search";
$lang['dl_search_inputvalue'] 		= "Search...";
$lang['dl_search_no_value'] 		= '<img src="'.$eqdkp_root_path.'plugins/downloads/images/error.png">No search-term entered. Please enter a search-term.';

//CAPTCHA
$lang['dl_captcha']		= '<img src="'.$eqdkp_root_path.'plugins/downloads/images/credits/info.png">Please enter the confirmation code in order to Download the file <b>"%s"</b>.';
$lang['dl_captcha_wrong']	= '<img src="'.$eqdkp_root_path.'plugins/downloads/images/error.png">The confirmation code you entered was incorrect <br><br>Please enter the confirmation code in order to Download the file <b>"%s"</b>.';
$lang['dl_captcha_insert_words'] = 'Enter the words above: ';
$lang['dl_captcha_insert_numbers'] = 'Enter the numbers you heard: ';
$lang['dl_captcha_submit'] = 'Submit';

//Overview
$lang['dl_index_headline']		= 'Downloads';
$lang['dl_download_headline']	= 'Download';
$lang['dl_title_cat_edit']		= 'Edit Category';
$lang['dl_title_link_delete']	= 'Delete Download';
$lang['dl_title_link_edit']		= 'Edit Download';
$lang['dl_index_error_perm'] 	= '<img src="'.$eqdkp_root_path.'plugins/downloads/images/error.png">The file does not exist or you don\'t have the permission for this download.';
$lang['dl_l_cat_not_existing'] 	= '<img src="'.$eqdkp_root_path.'plugins/downloads/images/error.png">The category does not exist or you don\'t have the permission for this category.';
$lang['dl_index_error_traffic'] = '<img src="'.$eqdkp_root_path.'plugins/downloads/images/error.png">The monthly traffic limit is reached. Please download the file from an mirror (if specified) or  try it next month again.';

// Portal Module
$lang['lastuploads']		= 'Recent Downloads:';
$lang['pm_lu_maxlinks']		= 'Maximum number of shown Downloads:';
$lang['pm_lu_tooltip'] 		= 'Show Tooltop:';
$lang['pm_lu_nolinks'] 		= 'No Downloads available.';

?>