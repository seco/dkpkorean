<?php
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

if ( !defined('EQDKP_INC') ){
    header('HTTP/1.0 404 Not Found');exit;
}
include_once('mime_types.class.php');

if (!class_exists("DownloadsClass")){
  class DownloadsClass extends MimeTypeClass
  {
  
  
  //Function for displaying an image to show the extension of a file
  function extension_image($extension){
	  global $eqdkp_root_path;
	  
	  $extension = sanitize($extension);
	  
	  		//You can add extension-images just right here in this extensions_array
			//and now put a file with the extension and the .png-format in the ext_images-folder
			//for example ...array(..., 'log') and put the log.png in the folder
			$extensions_array = array('doc', 'xls', 'ppt', 'txt', 'zip', 'rar', 'jpg', 'gif', 'png', 'pdf', 'wmv', 'swf', 'mov');

	if (in_array($extension, $extensions_array)){		
		$ext_image = '<img src="'.sanitize($eqdkp_root_path).'plugins/downloads/images/ext_images/'.$extension.'.png" alt=".'.$extension.'" title=".'.$extension.'">';
		return $ext_image;
		}
	else {
		
		if($extension == 'unknown')	{
			$ext_image = '<img src="'.sanitize($eqdkp_root_path).'plugins/downloads/images/ext_images/external.png" alt=".'.$extension.'">';
			return $ext_image;
		};
	}
}
	
	
	// Check the first 256 bytes for forbidden content
	function check_content($fieldname){
		$disallowed = "body|head|html|img|plaintext|a href|pre|script|table|title|php";
		$disallowed_content = explode('|', $disallowed);
		if (empty($disallowed_content))
		{
			return true;
		}

		$fp = @fopen($_FILES[$fieldname]['tmp_name'], 'rb');

		if ($fp !== false)
		{
			$ie_mime_relevant = fread($fp, 256);
			fclose($fp);
			foreach ($disallowed_content as $forbidden)
			{
				if (stripos($ie_mime_relevant, '<' . $forbidden) !== false)
				{
					return false;
				}
			}
		}
		return true;
	}	
	
	
	
	
//Function for mime-type-testing
function mimetype_check($fieldname){
	$mimetypes_array = $this->get_mime_types();
	
	$mimetype = strtolower($_FILES[$fieldname]['type']);	
	// Opera adds the name to the mime type
	$mimetype = (strpos($mimetype, '; name') !== false) ? str_replace(strstr($mimetype, '; name'), '', $mimetype) : $mimetype;
	
	$filename = $_FILES[$fieldname]['name'];
	$extension  = strtolower(substr($filename, strrpos($filename, '.') + 1));

	if (isset($mimetypes_array[$extension])){ 
	
		if (in_array($mimetype, $mimetypes_array[$extension])){
		return true;
		}
		else {return false;};
	}
	else {return false;}
}
	

//Function for uploading files
function upload_file($fieldname, $allowed_extensions, $debug=0){
	global $user, $pcache;
	$user->check_auth('a_downloads_upload');
	
	$filename = $_FILES[$fieldname]['name'];
	
	if($filename != ""){
	
	
			// Transform special filname character
  			$filename = preg_replace("/[^A-Za-z0-9_.]/", "", str_replace(array("ä","ö","ü","ß","Ä","Ö","Ü"),array("ae","oe","ue","ss","Ae","Oe","Ue"), $filename));

			$allowed_extensions = preg_split('/, */', strtolower($allowed_extensions));
			$file_type = substr($filename, strrpos($filename, '.') + 1);
			$extension_check = in_array(strtolower($file_type), $allowed_extensions);
			//Debug
			if ($debug == 1){

				if ($extension_check == false) {echo "<br>Status: Extension is not allowed";};
				if ($this->mimetype_check($fieldname) == false) {echo "<br>Status: Mime-Type is not allowed or doesn't belong to extension";};
				if ($this->check_content($fieldname) == false) {echo "<br>Status: The File contains disallowed content";};
			}
			//If all checks are true
			if (($extension_check == true) && ($this->mimetype_check($fieldname) == true) && ($this->check_content($fieldname) == true)){
				
				$file_hash = $user->data['user_id']."_".md5($filename);
	
				if (file_exists($pcache->FolderPath('downloads/').$file_hash)) {	
					return 1;
				} 
	
				else {
					$pcache->FileMove($_FILES[$fieldname]['tmp_name'], $pcache->FolderPath('downloads/').$file_hash);
					return $file_hash;
				}
			}
			else {
				return 2;
			}
	
	
	}
	else {
		return 0;
	}

	
}


	
//Function for deleting a download
function delete_one_link($id){
	
	global $user, $db, $pcache, $lang, $pdc;
	
	$user->check_auth('a_downloads_links');

	//Cache: plugin.downloads.links.{ID}
	$link_cache = $pdc->get('plugin.downloads.links.'.$elem,false,true);
	if (!$link_cache){
		$data_query = $db->query('SELECT local_filename FROM __downloads_links WHERE id='.$db->escape((int)$id));
		$data = $db->fetch_record($data_query);
		$pdc->put('plugin.downloads.links.'.$elem,$data,86400,false,true);
	} else{
		$data = $link_cache;
	};
	if ($data['local_filename']){
		if (file_exists($pcache->FilePath('downloads/'.$data['local_filename']))) {
			unlink($pcache->FilePath('downloads/'.$data['local_filename']));
		};
	}
	$del_query = $db->query("DELETE FROM __downloads_links WHERE id='" .$db->escape((int)$id)."'");
	
	//Delete Cache
	$pdc->del_suffix('plugin.downloads');
	
	return $error_msg = $user->lang['dl_ad_delete_success'];
	

}


// Create the Category List
function category_list($category_id = 0){
	global $db, $pdc;
  	$catlist_query = $db->query('SELECT * FROM __downloads_categories');
	
	//Cache: plugin.downloads.categories
	$categories_cache = $pdc->get('plugin.downloads.categories',false,true);
	if (!$categories_cache){
		$catlist_query = $db->query('SELECT * FROM __downloads_categories');
		$new_catlist = $db->fetch_record_set($catlist_query);
		$pdc->put('plugin.downloads.categories',$data,86400,false,true);
	} else{
		$new_catlist = $categories_cache;
	};
	
	
 	$cat = '<select class="input" name="dl_category" onChange="dl_check_permission()">';
  	foreach ($new_catlist as $elem){
		$selected = ($elem['category_id'] == $category_id) ? ' selected = "selected "' : '';
        $cat .= '<option value="'.sanitize($elem['category_id']).'"'.$selected.'>'.sanitize($elem['category_name']).'</option>'; 
  	}
  	$cat .= '</select>';
	return $cat;
}


//Writes the file-size in a nicer way than in Bytes...
function human_size( $bytes, $decimal = '2', $return_zero = true) {

	if (($return_zero == false) && (($bytes == ""))){return "";};
	
   if( is_numeric( $bytes )) {
     $position = 0;
     $units = array( " Bytes", " KB", " MB", " GB", " TB" );
     while( $bytes >= 1024 && ( $bytes / 1024 ) >= 1 ) {
         $bytes /= 1024;
         $position++;
     }
     return round( $bytes, $decimal ) . $units[$position];
   }
   else {
     return "";
   }
}


//File-size-field und -unit for edit.php
function human_size2($string,  $return_zero = true) {

	$string = sanitize($this->human_size($string, 2, $return_zero));
	
	$string = split(" ", $string);

	switch ($string[1]){
		
		case "Bytes": $u1 = "selected=\"selected\""; break;
		case "KB": $u2 = "selected=\"selected\""; break;
		case "MB": $u3 = "selected=\"selected\""; break;
		case "GB": $u4 = "selected=\"selected\""; break;
		
	};
	$value = ($string[0] == "") ? "" : round($string[0],2);
	
	$output = '<input name="dl_url_filesize" type="text" class="input" id="dl_url_filesize" size="3" value="'.sanitize($value).'">
        <select name="dl_url_filesize_unit" class="input">
          <option value="Bytes"'.sanitize($u1).'>Bytes</option>
		  <option value="KB"'.sanitize($u2).'>KB</option>
          <option value="MB"'.sanitize($u3).'>MB</option>
          <option value="GB"'.sanitize($u4).'>GB</option>
        </select>';
	
	return $output;
}


//Just pure Bytes...
function unhuman_size($bytes, $unit, $return_zero = true){

	if (($return_zero == false) && ($bytes == "")){
		if ($bytes == "0"){return 0;} 
		else {return "";}
	};
	
	switch ($unit){
		case "Bytes" : return $bytes;
		case "KB" : return ($bytes*1024); break;
		case "MB" : return ($bytes*1024*1024); break;
		case "GB" : return ($bytes*1024*1024*1024); break;
		default: return "";

	}

}


// Build the CopyRight
  function Copyright(){
      global $pm, $user;
      $dl_version = $pm->get_data('downloads', 'version');
	  
      $dl_status  = (strtolower($pm->plugins['downloads']->vstatus) == 'stable' ) ? ' ' : ' '.$pm->plugins['downloads']->vstatus.' ';
	  $act_year = date("Y", time());
	  $dl_copyyear = ( $act_year == 2009) ? $act_year : '2009 - '.$act_year;
      return $user->lang['downloads'].' '.$dl_version.$dl_status.' &copy; '.$dl_copyyear.' by '.$pm->plugins['downloads']->copyright;
  }

function update_config($config_value, $config_name){
	global $db;
	
	$updatequery = $db->query("UPDATE __downloads_config SET config_value = '".$db->escape($config_value)."' WHERE config_name = '".$db->escape($config_name)."'");
}


function is_checked($value){
	
	return ( $value == 1 ) ? ' checked="checked"' : '';
}
  
  
  
  
  } //END class
} //END if
?>