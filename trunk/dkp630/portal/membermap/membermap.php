<?php
/*
 * Project:     EQdkp-Plus
 * License:     Creative Commons - Attribution-Noncommercial-Share Alike 3.0 Unported
 * Link:		    http://creativecommons.org/licenses/by-nc-sa/3.0/
 * -----------------------------------------------------------------------
 * Began:       2008
 * Date:        $Date: 2009-05-02 23:42:24 +0900 (토, 02 5 2009) $
 * -----------------------------------------------------------------------
 * @author      $Author: wallenium $
 * @copyright   2006-2008 Corgan - Stefan Knaak | Wallenium & the EQdkp-Plus Developer Team
 * @link        http://eqdkp-plus.com
 * @package     eqdkp-plus
 * @version     $Rev: 4712 $
 * 
 * $Id: membermap.php 4712 2009-05-02 14:42:24Z wallenium $
 */

define('EQDKP_INC', true);
$eqdkp_root_path = './../../';
include_once($eqdkp_root_path . 'common.php');

if($conf_plus['pk_mmp_googlekey']){
  include_once($eqdkp_root_path.'libraries/EasyGoogleMap/EasyGoogleMap.class.php');
  $gm = new EasyGoogleMap($conf_plus['pk_mmp_googlekey']);
  
  if($_GET['large'] == 'true'){
    if($user->data['username']){
      $allLoc_sql     = "SELECT * FROM __users ORDER BY username";
      $allLoc_result  = $db->query($allLoc_sql);
      $map_users = array();
      while ( $row = $db->fetch_record($allLoc_result)){
        if($row['country'] && $row['ZIP_code'] != 0){
          $map_users[$row['user_id']] = array(
              'country'   => $row['country'],
              'zipcode'   => $row['ZIP_code'],
              'username'  => $row['username'],
              'town'      => $row['town'],
              'address'   => $row['address'],
              'name'      => $row['first_name'].' '.$row['last_name'],
          );
        }
      }
      
      // Style me!
      $myCSS = '<style>
                  .gmmodule_members {
                    width:105px;
                    height:440px;
                    padding-left:4px;
                    overflow:auto;
                  }
                  .gmmodule_members a,
                  .gmmodule_members a:visited{
                    text-decoration: none;
                    color: black;
                  }
                  .gmmodule_members a:hover,
                  .gmmodule_members a:active{
                    text-decoration: none;
                    font-weight: bold;
                    color: black;
                  }
                </style>';
      
      // Config
      $gm->SetMarkerIconStyle('FLAG');
      $gm->SetMapZoom(10);
      $gm->SetMapWidth(400);
      $gm->SetMapHeight(440);
    
      // Add Member to Map
      if(count($map_users) > 0){
        foreach($map_users as $maprow){
          $gm->SetAddress($maprow['address'].", ".$maprow['town']);
          $gm->SetInfoWindowText($maprow['name'].'<br>'.$maprow['town']);
          $gm->SetSideClick($maprow['username']);
        }
      }
      
      
      $myOut  =  '<html xmlns:v="urn:schemas-microsoft-com:vml">
                  <head>';
      $myOut .= $gm->GmapsKey();
      $myOut .= $myCSS;
      $myOut .= '</head>
                  <body>
                  <table>
                  <tr><td width="401px">';
      $myOut .= $gm->MapHolder();
      $myOut .= $gm->InitJs();
      $myOut .= '</td><td valign="top">
                <div class="gmmodule_members">';
      $myOut .= $gm->GetSideClick();
      $myOut .= '</div></td></tr></table>';
      $myOut .= $gm->UnloadMap();
      $myOut .= '</body>
                  </html>';
    }else{
      $myOut = $plang['pk_membermap_noaccess'];
    }
  }else{
    // Load UserData
    $myLoc_sql      = "SELECT country, ZIP_code, town, address FROM __users WHERE user_id='". $user->data['user_id']."'";
    $myLoc_result   = $db->query($myLoc_sql);
    $user_loc       = $db->fetch_record($myLoc_result);
  
    if($user_loc['town'] && $user_loc['address']){
      $gm->SetAddress($user_loc['address'].", ".$user_loc['town']);
      $gm->SetMarkerIconStyle('FLAG');
      $gm->mContinuousZoom = FALSE;
      $gm->mDoubleClickZoom = FALSE;
      $gm->SetMapZoom(10);
      $gm->mScale = FALSE;
      $gm->mInset = FALSE;
      $gm->SetMapControl('NONE');
      $gm->SetMapWidth(200);
      $gm->SetMapHeight(200);
          
      // OUT
      $myOut  =  '<html xmlns:v="urn:schemas-microsoft-com:vml">
                  <head>';
      $myOut .= $gm->GmapsKey();
      $myOut .= $myCSS;
      $myOut .= '</head>
                  <body>';
      $myOut .= $gm->MapHolder('parent.OpenMap()');
      $myOut .= $gm->InitJs();
      $myOut .= $gm->UnloadMap();
      $myOut .= '</body>
                  </html>';
    }else{
      $myOut = $plang['pk_membermap_no_data'];
    }
  }
}else{
  $myOut = $plang['pk_membermap_no_gmapi'];
}
echo $myOut;
?>