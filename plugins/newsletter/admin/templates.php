<?php
 /*
 * Project:     EQdkp Newsletter
 * License:     Creative Commons - Attribution-Noncommercial-Share Alike 3.0 Unported
 * Link:		    http://creativecommons.org/licenses/by-nc-sa/3.0/
 * -----------------------------------------------------------------------
 * Began:       2007
 * Date:        $Date: 2009-02-28 16:47:21 +0100 (Sa, 28 Feb 2009) $
 * -----------------------------------------------------------------------
 * @author      $Author: wallenium $
 * @copyright   2005-2008 Simon (Wallenium) Wallmann
 * @link        http://eqdkp-plus.com
 * @package     newsletter
 * @version     $Rev: 4028 $
 * 
 * $Id: templates.php 4028 2009-02-28 15:47:21Z wallenium $
 */

define('EQDKP_INC', true);
define('IN_ADMIN', true);
define('PLUGIN', 'newsletter');
$eqdkp_root_path = './../../../';
include_once ('../include/common.php');

// Check if plugin is installed
if (!$pm->check(PLUGIN_INSTALLED, 'newsletter')) { message_die('The Newsletter plugin is not installed.'); }

// Check user permission
$user->check_auth('a_newsletter_manage');
$tz_offset = ($conf['rp_timezone']) ? ($conf['rp_timezone']*3600) : 0;
  
  // Delete
  if($_POST['doDelete'] && $_POST['delete']){
    foreach ($_POST['delete'] as $delete_id){
      if($delete_id != 1){
        $delsql = "DELETE FROM __newsletter_templates WHERE id= '".$delete_id."'";
        $db->query($delsql);
      }
    }
  }
  
  // add
  if($_GET['mode'] == 'add'){
    if($_GET['tid']){
      $datasql = "SELECT *	FROM __newsletter_templates WHERE id='".(int) $_GET['tid']."'";
					$dataresult = $db->query($datasql);
					while ($datarow = $db->fetch_record($dataresult)){
             $tpl->assign_vars(array(
                                'MAIL_NAME'       => $datarow['name'],
                                'MAIL_SUBJECT'    => $datarow['subject'],
                                'MAIL_BODY'       => $datarow['body'],
                              ));
          }
    }
  
    $tpl->assign_vars(array(
              'S_ADD'           => true,
              'F_ADD_TEMPLATE'  => 'templates.php'.$SID.'&amp;mode=save',
              'L_NAME'          => $user->lang['nl_templatename'],
              'L_SUBJECT'       => $user->lang['nl_subject'],
              'L_BODY'          => $user->lang['nl_mail_body'],
              'B_SAVE'          => $user->lang['nl_save_template'],
              'L_LEGENDE'				=> $user->lang['nl_legende'],
	            'L_RECEPIENTS'		=> $user->lang['nl_recipients'],
	            'L_EXPL_LEGENDE'	=> $user->lang['nl_legende_expl'],
	            'L_DKPNAME'				=> $user->lang['nl_dkpname'],
	            'L_DATE'					=> $user->lang['nl_date'],
	            'L_USERNAME'			=> $user->lang['nl_username'],
	            'L_DKPLINK'				=> $user->lang['nl_dkplink'],
	            'L_AUTHOR'				=> $user->lang['nl_author'],
		));
    
    $eqdkp->set_vars(array(
	    'page_title'             => sprintf($user->lang['admin_title_prefix'], $eqdkp->config['guildtag'], $eqdkp->config['dkp_name']).': '.$user->lang['rp_wildcard'],
			'template_path' 	       => $pm->get_data('newsletter', 'template_path'),
			'template_file'          => 'admin/template.html',
			'display'                => true)
    );
  }elseif($_GET['mode']== 'save'){
  				$query = $db->build_query('INSERT', array(
  					'name'				=> $_POST['name'],
  					'subject'			=> $_POST['subject'],
  					'body'        => $_POST['body']
            ));
  				$sql = 'INSERT INTO __newsletter_templates' . $query;
  				$db->query($sql);
  		// Close window
  		$tpl->assign_vars(array(
              'A_CLOSE'         => true,
              'S_ADD'           => true,
      ));

      $eqdkp->set_vars(array(
	    'page_title'             => sprintf($user->lang['admin_title_prefix'], $eqdkp->config['guildtag'], $eqdkp->config['dkp_name']).': '.$user->lang['rp_wildcard'],
			'template_path' 	       => $pm->get_data('newsletter', 'template_path'),
			'template_file'          => 'admin/template.html',
			'display'                => true)
    );

  }else{
  // the char addition Data
    $sql = "SELECT * from __newsletter_templates";
    $result = $db->query($sql);
    while ($row = $db->fetch_record($result))
		{
		  $tpl->assign_block_vars('template_row', array(
		          'ROW_CLASS' 			=> $eqdkp->switch_row_class(),
		          'ID'              => $row['id'],
				      'NAME'            => $row['name']
			));
		}
    $db->free_result($result);

    $tpl->assign_vars(array(
              'S_ADD'           => false,
              'F_DEL_FORM'      => 'templates.php',
              
              // Javascript
              'JS_ADD_TEMPLATE' =>$jquery->Dialog_URL('nlAddTemplate', $user->lang['nl_addtemplate'], "templates.php?mode=add", '650', '550', 'templates.php'),
              'JS_EDIT_TEMPLA'  =>$jquery->Dialog_URL('nlEditTemplate', $user->lang['nl_edittemplate'], "templates.php?mode=add&tid='+tid+'", '650', '550', 'templates.php'),
              
              'L_DELETE'        => $user->lang['nl_button_delete'],
              'L_TEMPLATENAME'  => $user->lang['nl_templatename'],
              'L_ADDTEMPLATE'   => $user->lang['nl_addtemplate'],
              'L_EDITTEMPLATE'  => $user->lang['nl_edittemplate'],
		));
    
    $eqdkp->set_vars(array(
	    'page_title'             => $nlclass->GeneratePageTitle($user->lang['nl_templates']),
			'template_path' 	       => $pm->get_data('newsletter', 'template_path'),
			'template_file'          => 'admin/template.html',
			'display'                => true)
    );
  }   
?>
