<?php
define('EQDKP_INC', true);
$eqdkp_root_path = '../../';
include_once($eqdkp_root_path . 'common.php');

$permission_query = $db->query("SELECT * FROM __gallery_config WHERE config_name = 'extern'");
$permission = $db->fetch_record($permission_query);

$textstamp_query = $db->query("SELECT * FROM __gallery_config WHERE config_name = 'textstamp'");
$textstamp = $db->fetch_record($textstamp_query);

if ($permission['config_value'] == '0'){
  if(preg_match("|\Ahttp://(www\.)?".$_SERVER['SERVER_NAME']."|", $_SERVER['HTTP_REFERER'])){
    $image_file=$pcache->FilePath('upload/'.$_GET['filename'], 'gallery');
    $size = GetImageSize($image_file);
    if ($size[2] == 1){
      $image=ImageCreateFromGIF($image_file);
    } elseif ($size[2] == 2){
      $image=ImageCreateFromJPEG($image_file);
    } elseif ($size[2] == 3){
      $image=ImageCreateFromPNG($image_file);
    }
    $textcolor = imagecolorallocate($img, 255, 25, 25);
  
    $text=$textstamp['config_value'];
    imagestring($image,5,20,16,$text,$textcolor);


    header("Content-Type: image/png");
    imagepng($image);
    imagedestroy($image); 
  }else{
    message_die('Permission denied!');
  } 
} else {
    $image_file=$pcache->FilePath('upload/'.$_GET['filename'], 'gallery');
    $size = GetImageSize($image_file);
    if ($size[2] == 1){
      $image=ImageCreateFromGIF($image_file);
    } elseif ($size[2] == 2){
      $image=ImageCreateFromJPEG($image_file);
    } elseif ($size[2] == 3){
      $image=ImageCreateFromPNG($image_file);
    }
    $textcolor=imagecolorallocate($image,255,25,25);
  
    $text=$textstamp['config_value'];
    imagestring($image,5,20,16,$text,$textcolor);

    header("Content-Type: image/png");
    imagepng($image);
    imagedestroy($image); 
}
?>