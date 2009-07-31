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
  'latestposts'                 => '�ֱ� ���� �Խù�',
  'portal_latestposts_nomodule' => '��� ���õ��� �ʾ���. ��� ������ �Ǿ����� Ȯ���ϼ���!',
  'portal_latestposts_invmodule'=> '�߸��� BB ����Դϴ�',
  'pk_latestposts_bbmodule'     => '���� ���',
  'pk_latestposts_amount'       => '������ X���� �Խù� ����',
  'pk_latestposts_newdb'        => 'BB in different Database',
  'pk_latestposts_dbname'       => '�����ͺ��̽�',
  'pk_latestposts_dbuser'       => '����� �̸�',
  'pk_latestposts_dbpassword'   => '�н�����',
  'pk_latestposts_dbhost'       => 'ȣ��Ʈ',
  'pk_latestposts_dbprefix'     => '���ξ�',
  'pk_latestposts_url'          => '���� URL�ּ�',
  'pk_latestposts_noentries'    => 'No entries available',
  'pk_latestposts_connerror'    => 'Ŀ�ؼ� ����',
  'pk_latestposts_lastpost'     => '������ �Խù�',
  'pk_latestposts_starter'      => '���� �Խ���',
  'pk_latestposts_posts'        => '���',
  'pk_latestposts_title'        => '����',
  'pk_latestposts_trimtitle'    => '�� ������ X���� ���ڷ� �߶� �����ֱ�',
  'pk_latestposts_trimtitle_h'  => 'Only when in left/right Module block',
  'pk_latestposts_privateforums'=> 'ID of the private forums, seperated by semicolon',
  'pk_latestposts_privforums_h' => 'Private Forums will not be listed in the latest posts.',
  'pk_latestposts_plus2old'     => 'Plus Version too old. 0.6.2.0 Stable or higher required',
  'pk_latestposts_newwindow'    => 'Open Topic Links in New window?',
  'pk_latestposts_blackwhite'   => 'Black - or Whitelists',
  'pk_latestposts_blackwhite_h' => 'Reject the inserted Forum IDs (blacklisting) or accept them (whitelisting)',
));
?>
