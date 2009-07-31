<?php
/*
 * Project:     EQdkp-Plus
 * License:     Creative Commons - Attribution-Noncommercial-Share Alike 3.0 Unported
 * Link:		http://creativecommons.org/licenses/by-nc-sa/3.0/
 * -----------------------------------------------------------------------
 * Began:       2008
 * Date:        $Date: 2008-12-27 22:10:24 +0100 (Sa, 27 Dez 2008) $
 * -----------------------------------------------------------------------
 * @author      $Author: wallenium $
 * @copyright   2006-2008 Corgan - Stefan Knaak | Wallenium & the EQdkp-Plus Developer Team
 * @link        http://eqdkp-plus.com
 * @package     eqdkp-plus
 * @version     $Rev: 3531 $
 * 
 * $Id: english.php 3531 2008-12-27 21:10:24Z wallenium $
 */

if ( !defined('EQDKP_INC') ){
    header('HTTP/1.0 404 Not Found');exit;
}

$plang = array_merge($plang, array(
  'latestposts'                 => '최근 포럼 게시물',
  'portal_latestposts_nomodule' => '모둘 선택되지 않았음. 모듈 선택이 되었는지 확인하세요!',
  'portal_latestposts_invmodule'=> '잘못된 BB 모듈입니다',
  'pk_latestposts_bbmodule'     => '포럼 모듈',
  'pk_latestposts_amount'       => '마지막 X개의 게시물 보기',
  'pk_latestposts_newdb'        => 'BB in different Database',
  'pk_latestposts_dbname'       => '데이터베이스',
  'pk_latestposts_dbuser'       => '사용자 이름',
  'pk_latestposts_dbpassword'   => '패스워드',
  'pk_latestposts_dbhost'       => '호스트',
  'pk_latestposts_dbprefix'     => '접두어',
  'pk_latestposts_url'          => '보드 URL주소',
  'pk_latestposts_noentries'    => 'No entries available',
  'pk_latestposts_connerror'    => '커넥션 에러',
  'pk_latestposts_lastpost'     => '마지막 게시물',
  'pk_latestposts_starter'      => '최초 게시자',
  'pk_latestposts_posts'        => '답글',
  'pk_latestposts_title'        => '제목',
  'pk_latestposts_trimtitle'    => '긴 제목을 X개의 글자로 잘라서 보여주기',
  'pk_latestposts_trimtitle_h'  => 'Only when in left/right Module block',
  'pk_latestposts_privateforums'=> 'ID of the private forums, seperated by semicolon',
  'pk_latestposts_privforums_h' => 'Private Forums will not be listed in the latest posts.',
  'pk_latestposts_plus2old'     => 'Plus Version too old. 0.6.2.0 Stable or higher required',
  'pk_latestposts_newwindow'    => 'Open Topic Links in New window?',
  'pk_latestposts_blackwhite'   => 'Black - or Whitelists',
  'pk_latestposts_blackwhite_h' => 'Reject the inserted Forum IDs (blacklisting) or accept them (whitelisting)',
));
?>
