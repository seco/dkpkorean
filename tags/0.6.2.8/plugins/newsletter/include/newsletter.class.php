<?php
 /*
 * Project:     EQdkp Newsletter
 * License:     Creative Commons - Attribution-Noncommercial-Share Alike 3.0 Unported
 * Link:		    http://creativecommons.org/licenses/by-nc-sa/3.0/
 * -----------------------------------------------------------------------
 * Began:       2007
 * Date:        $Date: 2008-09-05 10:06:11 +0200 (Fr, 05 Sep 2008) $
 * -----------------------------------------------------------------------
 * @author      $Author: wallenium $
 * @copyright   2005-2008 Simon (Wallenium) Wallmann
 * @link        http://eqdkp-plus.com
 * @package     newsletter
 * @version     $Rev: 2685 $
 * 
 * $Id: email.class.php 2685 2008-09-05 08:06:11Z wallenium $
 */

if ( !defined('EQDKP_INC') ){
    header('HTTP/1.0 404 Not Found');exit;
}

if (!class_exists("NewsletterClass")){
  class NewsletterClass
  {
    // Generate the page header
    function GeneratePageTitle($name){
      global $user, $eqdkp;
      return sprintf($user->lang['title_prefix'], $eqdkp->config['guildtag'], $eqdkp->config['dkp_name']).': '.$user->lang['newsletter'].' - '.$name;
    }
  	
  	// Build the CopyRight
  	function Copyright(){
      global $pm, $user, $conf;
      $rp_version = ($conf['nl_hideversion']) ? '' : ' '.$pm->get_data('newsletter', 'version');
      $rp_status  = (strtolower($pm->plugins['newsletter']->vstatus) == 'stable' && !$conf['nl_hideversion']) ? '' : ' '.$pm->plugins['newsletter']->vstatus.' ';
      return $user->lang['newsletter'].$rp_version.$rp_status.' &copy; 2006 - '.date("Y", time()).' by '.$pm->plugins['newsletter']->copyright;
    }
    
    // Build the User Email array
    function BuildMemberArray($selection, $options=''){
    	global $eqdkp, $db;
    	if($selection){
    		$sql = 'SELECT ut.user_email, ut.username
        				FROM __users ut, __classes cl, __members members
        				LEFT JOIN (__member_user mu)       
        				ON mu.member_id=members.member_id
        				WHERE cl.class_id=members.member_class_id';
        $sql .= ($selection) ? ' AND cl.class_name=\''.$selection.'\'' : '';
        $sql .= ' AND mu.user_id = ut.user_id';
        $sql .= ($options['hide_inactive']) ? ' AND members.member_status=1' : '';
        $sql .= ' GROUP BY ut.username
        				ORDER BY ut.username';
    	}else{
    		$sql = 'SELECT user_email, username FROM __users';
    	}
    	if (!($result = $db->query($sql))) { message_die('Could not obtain user email information', '', __FILE__, __LINE__, $sql); }
      
      $receive_array = array();
      while($row = $db->fetch_record($result)){
      	$receive_array[$row['username']] = $row['user_email'];
    	}
    	return $receive_array;
    }
  }
}
