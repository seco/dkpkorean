<?php
/*
 * Project:     EQdkp-Plus
 * License:     Creative Commons - Attribution-Noncommercial-Share Alike 3.0 Unported
 * Link:		http://creativecommons.org/licenses/by-nc-sa/3.0/
 * -----------------------------------------------------------------------
 * Began:       2008
 * Date:        $Date: 2008-10-27 14:44:54 +0100 (Mo, 27 Okt 2008) $
 * -----------------------------------------------------------------------
 * @author      $Author: wallenium $
 * @copyright   2006-2008 Corgan - Stefan Knaak | Wallenium & the EQdkp-Plus Developer Team
 * @link        http://eqdkp-plus.com
 * @package     eqdkp-plus
 * @version     $Rev: 2896 $
 * 
 * $Id: module.php 2896 2008-10-27 13:44:54Z wallenium $
 */

if ( !defined('EQDKP_INC') ){
  header('HTTP/1.0 404 Not Found');exit;
}

$portal_module['mycontent'] = array(
			'name'           => 'Custom Content Module',
			'path'           => 'mycontent',
			'version'        => '1.0.0',
			'author'         => 'WalleniuM',
			'contact'        => 'http://www.eqdkp-plus.com',
			'description'    => 'Output a custom content',
			'positions'      => array('left1', 'left2', 'right', 'middle'),
      'signedin'       => '0',
      'install'        => array(
			                            'autoenable'        => '0',
			                            'defaultposition'   => 'right',
			                            'defaultnumber'     => '7',
			                            ),
    );

$portal_settings['mycontent'] = array(
  'pk_mycontent_useroutput'     => array(
        'name'      => 'pk_mycontent_useroutput',
        'language'  => 'pk_mycontent_useroutput',
        'property'  => 'textarea',
        'size'      => '30',
        'cols'      => '4',
        'help'      => '',
        'codeinput' => true,
      ),
  'pk_mycontent_headtext'     => array(
        'name'      => 'pk_mycontent_headtext',
        'language'  => 'pk_mycontent_headtext',
        'property'  => 'text',
        'size'      => '30',
        'help'      => '',
      )
);

if(!function_exists(mycontent_module)){
  function mycontent_module(){
  	global $eqdkp , $user , $tpl, $db, $plang, $conf_plus;
    
    // Set the header
		if($conf_plus['pk_mycontent_headtext']){
		  $DKPInfo = "<script>document.getElementById('txtmycontent').innerHTML = '".addslashes($conf_plus['pk_mycontent_headtext'])."'</script>";
		}
    
    $DKPInfo .= html_entity_decode(htmlspecialchars_decode($conf_plus['pk_mycontent_useroutput']));
		return $DKPInfo;
  }
}
?>
