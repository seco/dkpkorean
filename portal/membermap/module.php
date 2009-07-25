<?php
/*
 * Project:     EQdkp-Plus
 * License:     Creative Commons - Attribution-Noncommercial-Share Alike 3.0 Unported
 * Link:		http://creativecommons.org/licenses/by-nc-sa/3.0/
 * -----------------------------------------------------------------------
 * Began:       2008
 * Date:        $Date: 2009-05-02 15:05:51 +0200 (Sa, 02 Mai 2009) $
 * -----------------------------------------------------------------------
 * @author      $Author: wallenium $
 * @copyright   2006-2008 Corgan - Stefan Knaak | Wallenium & the EQdkp-Plus Developer Team
 * @link        http://eqdkp-plus.com
 * @package     eqdkp-plus
 * @version     $Rev: 4710 $
 * 
 * $Id: module.php 4710 2009-05-02 13:05:51Z wallenium $
 */

if ( !defined('EQDKP_INC') ){
  header('HTTP/1.0 404 Not Found');exit;
}

$portal_module['membermap'] = array(
			'name'           => 'Member Map',
			'path'           => 'membermap',
			'version'        => '1.0.0',
			'author'         => 'WalleniuM',
			'contact'        => 'http://www.eqdkp-plus.com',
			'description'    => 'Show an nlifvtrh',
			'positions'      => array('left1', 'left2', 'right'),
      'signedin'       => '1',
      'install'        => array(
			                      'autoenable'        => '1',
			                      'defaultposition'   => 'left2',
			                      'defaultnumber'     => '11',
			                    ),
    );

$portal_settings['membermap'] = array(
  'pk_mmp_googlekey'     => array(
        'name'      => 'pk_mmp_googlekey',
        'language'  => 'pk_mmp_googlekey',
        'property'  => 'textarea',
        'size'      => '40',
        'cols'      => '4',
      ),
);

if(!function_exists(membermap_module))
{
  function membermap_module()
  {
  	global $eqdkp, $plang, $pcache, $pm, $db, $eqdkp_root_path, $user, $conf_plus, $jqueryp, $jquery;
  	if(is_object($jqueryp)){
      $myOut  = '<script>function OpenMap(){ '.$jqueryp->Dialog_URL('MemMap', $plang['pk_membermap_window'], $eqdkp_root_path.'portal/membermap/membermap.php?large=true', '550', '470').'}</script>';
    }else{
      $myOut  = '<script>function OpenMap(){ '.$jquery->Dialog_URL('MemMap', $plang['pk_membermap_window'], $eqdkp_root_path.'portal/membermap/membermap.php?large=true', '550', '470').'}</script>';
    }
    
    $myOut .= '<iframe src="'.$eqdkp_root_path.'portal/membermap/membermap.php" name="gmap" width="200" height="200" align="left" scrolling="no" marginheight="0" marginwidth="0" frameborder="0">
              </iframe>';
  	return $myOut;
  }
}
?>
