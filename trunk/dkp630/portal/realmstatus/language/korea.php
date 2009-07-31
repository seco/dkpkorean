<?php
/*
 * Project:     EQdkp-Plus
 * License:     Creative Commons - Attribution-Noncommercial-Share Alike 3.0 Unported
 * Link:        http://creativecommons.org/licenses/by-nc-sa/3.0/
 * -----------------------------------------------------------------------
 * Began:       2008
 * Date:        $Date: $
 * -----------------------------------------------------------------------
 * @author      $Author:  $
 * @copyright   (c) 2008 by Aderyn
 * @link        http://eqdkp-plus.com
 * @package     eqdkp-plus
 * @version     $Rev:  $
 *
 * $Id: $
 */

if (!defined('EQDKP_INC'))
{
  header('HTTP/1.0 404 Not Found');exit;
}

$plang = array_merge($plang, array(

  // Title
  'realmstatus'           => '서버현황',

  //  Settings
  'rs_realm'              => '서버 리스트(쉼표로 구분)',
  'rs_us'                 => '미국 서버입니까?',
  'rs_gd'                 => 'GD Lib를 찾았습니다. 사용하시길 원하십니까? ',

  // Portal Modul
  'rs_no_realmname'       => '서버가 정해지지 않았습니다.',
  'rs_game_not_supported' => '현재의 게임에는 서버현황이 지원되지 않습니다.',

  // Help
  'rs_realm_help'         => '두 단어의 서버일 경우 공백대신 _으로 대체해주세요. ex) 불타는_군단',
));

?>
