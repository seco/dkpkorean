<?PHP
/*
* Gallery 4 EQdkp plus
* ------------------------------------------------------------------- 
* Project Start: 09/2008
* Author: BadTwin
* Copyright: Andreas (BadTwin) Schrottenbaum
* Link: http:// bloody-midnight.eu
* Version: 2.0.0a
* ------------------------------------------------------------------- 
* Based on the HelloWorld Plugin by Wallenium
*
* $Id: $
*/

// EQdkp required files/vars
define('EQDKP_INC', true);        // is it in the eqdkp? must be set!!
define('PLUGIN', 'gallery');   // Must be set!
$eqdkp_root_path = './../../';    // Must be set!
include_once($eqdkp_root_path . 'common.php');  // Must be set!

// Check if plugin is installed
if (!$pm->check(PLUGIN_INSTALLED, 'gallery')) { message_die('The Gallery plugin is not installed.'); }

// Check user permission
$user->check_auth('u_gallery_view');

$date = date("Y-m-d H:i:s");

// Transform special filname character
  $_FILES['filename']['name'] = preg_replace("/[^A-Za-z0-9_.]/", "", str_replace(array("ä","ö","ü","ß","Ä","Ö","Ü"),array("ae","oe","ue","ss","Ae","Oe","Ue"), $_FILES['filename']['name']));

// Individualize the Filename

function split_right($pattern,$input,$len=0)
    {
if($len==0)
    return split($pattern,$input);

            $tempInput = split($pattern,$input);
            $tempInput = array_reverse($tempInput);
            $tempArray = array();
            $ArrayIndex=0;
            $indexCount=0;
            foreach($tempInput as $values)
            {
                if($indexCount<$len)
                {
                    $tempArray[$ArrayIndex]=$values;
                    if($indexCount<$len-1)
                        $ArrayIndex++;
                }
                else
                {
                        $tempArray[$ArrayIndex]=$values.$pattern.$tempArray[$ArrayIndex];
                   
                }
               
                $indexCount++;

            }
            return array_reverse($tempArray);
    }


  list($fname, $extension) = split_right('[.]',$_FILES['filename']['name'], 2);
  $img_id = $db->query_first("SELECT max(`id`) FROM __gallery_pictures") + 1;  
  $filename = str_replace("[.]", ".", $fname."_".$img_id.".".$extension);


$filetype = GetImageSize($_FILES['filename']['tmp_name']);
if($filetype[2] != 0){
	if($_FILES['filename']['size'] <  1024000){
			$pcache->FileMove($_FILES['filename']['tmp_name'], $pcache->FolderPath('upload/', 'gallery').$filename);
			$upload_return = $user->lang['gl_up_suc_text1']."<i>".$filename."</i>".$user->lang['gl_up_suc_text2'];
			$upload_message = $user->lang['gl_up_suc_status'];
			//CREATE THUMBNAILS
			$pic_name = $filename;
			$pic_path = $pcache->FolderPath('upload/', 'gallery');
			$thumb_path = $pcache->FolderPath('upload/thumb/', 'gallery');
			$mthumb_path = $pcache->FolderPath('upload/mthumb/', 'gallery');
			$size = GetImageSize($pic_path.$pic_name);
			$pic_width = $size[0];
			$pic_height = $size[1];
			if ($pic_width >= $pic_height){
				$thumb_width = 200;
				$thumb_height = intval($pic_height*$thumb_width/$pic_width);

				$mthumb_width = 100;
				$mthumb_height = intval($pic_height*$mthumb_width/$pic_width);
			} else {
				$thumb_height = 200;
				$thumb_width = intval($pic_width*$thumb_height/$pic_height);

				$mthumb_height = 100;
				$mthumb_width = intval($pic_width*$mthumb_height/$pic_height);
			}
			// GIF
			if ($size[2] == 1){
				$picture = ImageCreateFromGIF($pic_path.$pic_name);
				$thumbnail = ImageCreateTrueColor($thumb_width, $thumb_height);
				$white = imageColorAllocate ($thumbnail, 0, 0, 0);
				$trans = imagecolortransparent($thumbnail,$white);
				ImageCopyResampled($thumbnail, $picture, 0, 0, 0, 0, $thumb_width, $thumb_height, $pic_width, $pic_height);
				ImageGIF($thumbnail, $thumb_path.$pic_name);
//				chmod($thumb_path.$pic_name,0644);

				$mthumbnail = ImageCreateTrueColor($mthumb_width, $mthumb_height);
				$white = imageColorAllocate ($mthumbnail, 0, 0, 0);
				$trans = imagecolortransparent($mthumbnail,$white);
				ImageCopyResampled($mthumbnail, $picture, 0, 0, 0, 0, $mthumb_width, $mthumb_height, $pic_width, $pic_height);
				ImageGIF($mthumbnail, $mthumb_path.$pic_name);
//				chmod($mthumb_path.$pic_name,0644);
			}
			// JPG
			if ($size[2] == 2){
				$picture = ImageCreateFromJPEG($pic_path.$pic_name);
				$thumbnail = ImageCreateTrueColor($thumb_width, $thumb_height);
				ImageCopyResampled($thumbnail, $picture, 0, 0, 0, 0, $thumb_width, $thumb_height, $pic_width, $pic_height);
				ImageJPEG($thumbnail, $thumb_path.$pic_name);
//				chmod($thumb_path.$pic_name,0644);

				$mthumbnail = ImageCreateTrueColor($mthumb_width, $mthumb_height);
				ImageCopyResampled($mthumbnail, $picture, 0, 0, 0, 0, $mthumb_width, $mthumb_height, $pic_width, $pic_height);
				ImageJPEG($mthumbnail, $mthumb_path.$pic_name);
//				chmod($mthumb_path.$pic_name,0644);
			}
			// PNG
			if ($size[2] == 3){
				$picture = ImageCreateFromPNG($pic_path.$pic_name);
				$thumbnail = ImageCreateTrueColor($thumb_width, $thumb_height);
				$white = imageColorAllocate ($thumbnail, 0, 0, 0);
				$trans = imagecolortransparent($thumbnail,$white);
				ImageCopyResampled($thumbnail, $picture, 0, 0, 0, 0, $thumb_width, $thumb_height, $pic_width, $pic_height);
				ImagePNG($thumbnail, $thumb_path.$pic_name);
//				chmod($thumb_path.$pic_name,0644);

				$mthumbnail = ImageCreateTrueColor($mthumb_width, $mthumb_height);
				$white = imageColorAllocate ($mthumbnail, 0, 0, 0);
				$trans = imagecolortransparent($mthumbnail,$white);
				ImageCopyResampled($mthumbnail, $picture, 0, 0, 0, 0, $mthumb_width, $mthumb_height, $pic_width, $pic_height);
				ImagePNG($mthumbnail, $mthumb_path.$pic_name);
//				chmod($mthumb_path.$pic_name,0644);
			}
			$sql="INSERT INTO __gallery_pictures (user_id, filename, description, category, date, comment) VALUES (
				'".$user->data['user_id']."', 
				'".$filename."',
				'".htmlentities(strip_tags($_POST['description']), ENT_QUOTES)."',
				'".$_POST['category']."',
				'".$date."',
				'".htmlentities(strip_tags($_POST['comment']), ENT_QUOTES)."')";
			$upload = $db->query($sql);
			$img = '<img src="'.$pic_path.$filename.'" size="100%">';

	} else {
		$upload_return = $user->lang['gl_up_fail_toobig'];
		$upload_message = $user->lang['gl_up_fail_status'];
		$pic_name="../images/error_upload.png";
	}
} else {
		$upload_return = $user->lang['gl_up_fail_format'];
		$upload_message = $user->lang['gl_up_fail_status'];
		$pic_name="../images/error_upload.png";
}




// UPLOAD REPORT
$uid = $user->data['user_id'];
$result = $db->query("SELECT * FROM __users WHERE user_id='" . $uid . "';");
$output = $db->fetch_record($result);
$gl_username .= $output['username'];

$result = $db->query("SELECT * FROM __gallery_categories WHERE category_id = '" . $_POST['category'] . "';");
$gl_cat = $db->fetch_record($result);
$gl_category = $gl_cat['category_name'];

if ($_POST['description'] == "" ) {
	 $description = substr($filename, 0, -strlen($img_id)-5);
} else {
$description = $_POST['description'];
}

// Get the Version
$vers_query = $db->query("SELECT * FROM __plugins WHERE plugin_code='gallery'");
$vers = $db->fetch_record($vers_query);

// Send the Output to the template Files.

$tpl->assign_vars(array(
  'GL_HEADLINE'            => $user->lang['gl_index_headline'],
	'GL_HEADLINE_UP'         =>	$user->lang['gl_up_header'],
	'GL_FLAG_FILENAME'       =>	$user->lang['gl_up_filename'],
	'GL_FLAG_SIZE'           =>	$user->lang['gl_up_size'],
	'GL_FLAG_CATEGORY'       =>	$user->lang['gl_up_cat'],
	'GL_FLAG_COMMENT'        =>	$user->lang['gl_up_comment'],
	'GL_FLAG_USER'           =>	$user->lang['gl_up_user'],
	'GL_FLAG_UPDATE'         =>	$user->lang['gl_up_date'],
	'GL_NEW_UPLOAD'          =>	$user->lang['gl_up_new'],
	'GL_INDEX'               =>	$user->lang['gl_up_btt'],
	'GL_ABOUT_HEADER'        => $user->lang['gl_about_header'],
	'GL_URL_FLAG'            =>	$user->lang['gl_pic_url'],
	'GL_BB_FLAG'             =>	$user->lang['gl_pic_bbc'],
	'GL_L_CREDITS'           => 'Credits',
	'GL_L_COPYRIGHT'         => 'EQDKP Gallery v'.$vers['plugin_version'].$user->lang['gl_created_devteam'],
	'GL_URL_STREAM'          =>	dirname($_SERVER['HTTP_REFERER']).'/showpic.php?filename='.$filename,
	'GL_BB_STREAM'           =>	'[img]'.dirname($_SERVER['HTTP_REFERER']).'/showpic.php?filename='.$filename.'[/img]',
	'GL_FILENAME'            => $pic_name,
	'GL_DESCRIPTION'         =>	$description,
	'GL_UPLOAD_FILENAME'     =>	$filename,
	'GL_DIRNAME'             => $pcache->FolderPath('upload', 'gallery'),
	'GL_SIZE'                =>	$_FILES['filename']['size'],
	'GL_CATEGORY'            =>	$gl_category,
	'GL_COMMENT'             =>	nl2br($_POST['comment']),
	'GL_USER'                =>	$gl_username,
	'GL_UPDATE'              =>	$date,
	'GL_UPLOAD_MESSAGE'      =>	$upload_message,
	'GL_HEADLINE_UP_RETURN'  =>	$upload_return,
	'GL_CAT_ID'              =>	$_POST['category'],

	// Image-Resizer	
 	'S_IMG_RESIZE_ENABLE'         => $conf_plus['pk_air_enable'] ? true : false,
 	'S_MAX_POST_IMG_RESIZE_WIDTH' => $conf_plus['pk_air_max_resize_width'],
 	'S_IMG_RESIZE_WARNING'        => $user->lang['air_img_resize_warning'] , 
 	'S_IMG_WARNING_ACTIVE'        => $conf_plus['pk_air_show_warning'] ? 'true' : false, 
 	'S_LYTEBOX_THEME'             => $conf_plus['pk_air_lytebox_theme'],
 	'S_LYTEBOX_AUTO_RESIZE'       => $conf_plus['pk_air_lytebox_auto_resize'],
 	'S_LYTEBOX_ANIMATION'         => $conf_plus['pk_air_lytebox_animation'] ? 1 : 0, 
));

// Init the Template Shit
$eqdkp->set_vars(array(
	'page_title'           => $user->lang['gallery'],
	'template_path'        => $pm->get_data('gallery', 'template_path'),
	'template_file'        => 'insertpic.html',
	'display'              => true)
  );

?>