<?php
 /*
 * Project:     EQdkp Ticket
 * License:     Creative Commons - Attribution-Noncommercial-Share Alike 3.0 Unported
 * Link:		    http://creativecommons.org/licenses/by-nc-sa/3.0/
 * -----------------------------------------------------------------------
 * Began:       2006
 * Date:        $Date: 2009-02-28 16:47:21 +0100 (Sa, 28 Feb 2009) $
 * -----------------------------------------------------------------------
 * @author      $Author: wallenium $
 * @copyright   2005-2007 Achaz, Maintained by PLUS Dev Team
 * @link        http://eqdkp-plus.com
 * @package     ticket
 * @version     $Rev: 4028 $
 * 
 * $Id: common.php 4028 2009-02-28 15:47:21Z wallenium $
 */

// EQdkp required files/vars
define('EQDKP_INC', true);
define('IN_ADMIN', true);
define('PLUGIN', 'ticket');
$eqdkp_root_path = './../../../';
include_once ('../includes/common.php');

// Check if plugin is installed
if (!$pm->check(PLUGIN_INSTALLED, 'ticket')) { message_die('The Ticket plugin is not installed.'); }

// Check user permission
$user->check_auth('a_ticket_admin');

// Get the plugin
$ticket = $pm->get_plugin('ticket');


//---------
global $table_prefix;
global $db, $eqdkp, $user, $tpl, $pm;
global $SID;

if(isset($_POST['mails'])) {process_emailaddresses(); }


//---------------------------

function process_emailaddresses()
{
        global $db, $eqdkp, $user, $tpl, $pm;
        global $SID;

        foreach ( $_POST['mails'] as $mail_id => $mail_address )
        {
            $sql = "DELETE FROM __ticket_adminemail
                    WHERE email_id='" . $mail_id . "'";
            $db->query($sql);

            if ( $mail_address != '' )
            {
                $query = $db->build_query('INSERT', array(
                    'email_id'     => $mail_id,
                    'user_id' => 1,
                    'email_address'   => $mail_address)
                );
                $db->query('INSERT INTO __ticket_adminemail' . $query);
            }
        }
    }

//---------------------------



function UpdateTicketConfig($fieldname,$insertvalue)
{
	global $eqdkp_root_path, $user, $SID, $table_prefix, $db;
        $sql = "UPDATE __ticket_config SET config_value='".strip_tags(htmlspecialchars($insertvalue))."' WHERE config_name='".$fieldname."';";
	
        if ($db->query($sql)){
          return true;
	} else {
	  return false;
	}
}

//--------------

// Save this shit
if ($_POST['issavebu']){
  // global config
		UpdateTicketConfig('ticket_email', $_POST['email_general']); 
		UpdateTicketConfig('ticket_admin', $_POST['email_admin']); 
        UpdateTicketConfig('ticket_default_user_color', $_POST['default_user_color']);
		UpdateTicketConfig('ticket_admincolor', $_POST['email_admincolor']); 
    if ($lala){
    echo($user->lang['is_conf_saved']);
	}
} 

//----------------

$sql = 'SELECT * FROM __ticket_config';
if (!($settings_result = $db->query($sql))) { message_die('Could not obtain configuration data: Config-Table', '', __FILE__, __LINE__, $sql); }
while($roww = $db->fetch_record($settings_result)) {
  $crow[$roww['config_name']] = $roww['config_value'];
}



//------------------------
//
// Populate the fields
//
        $max_id = 0;
        $sql = 'SELECT email_id, user_id, email_address
                FROM __ticket_adminemail
                WHERE email_id > 0
                ORDER BY email_id';
        $result = $db->query($sql);
        while ( $row = $db->fetch_record($result) )
        {
            $tpl->assign_block_vars('adminemails_row', array(
                'ROW_CLASS'    => $eqdkp->switch_row_class(),
                'EMAIL_ID'      => $row['email_id'],
                'USER_ID'      => $row['user_id'],
                'EMAIL_ADDRESS'    => stripslashes($row['email_address'])
                )
                );
            $max_id = ( $max_id < $row['email_id'] ) ? $row['email_id'] : $max_id;
        }

$tpl->assign_vars(array(
      // Form vars
      'F_CONFIG_MAIL'         => 'adminsettings.php' . $SID,
      'F_CONFIG'              => 'adminsettings.php' . $SID,
      'EMAIL_GENERAL'         => ( $crow['ticket_email'] == 1 ) ? ' checked="checked"' : '',
      'EMAIL_ADMIN'           => ( $crow['ticket_admin'] == 1 ) ? ' checked="checked"' : '',
     
      // Color Pickers
      'COLORPICK_USER'        => $jquery->colorpicker('default_user_color', $crow['ticket_default_user_color']),
      'COLORPICK_ADMIN'       => $jquery->colorpicker('email_admincolor', $crow['ticket_admincolor']),

      // Form values
      'ROW_CLASS'             => $eqdkp->switch_row_class(),
      'EMAIL_ID'              => ($max_id + 1),

      // Language
      'L_EDIT_ADMIN_EMAILS'   => $user->lang['edit_admin_emails'],
      'L_SUBMIT_EDITED_EMAIL' => $user->lang['submit_edited_emails'],
      'L_RESET'               => $user->lang['reset'],
      'L_SUBMIT'              => $user->lang['submit'],
      'L_RESET'               => $user->lang['reset'],
      'L_EMAIL_GENERAL'       => $user->lang['ticket_email_general'],
      'L_EMAIL_GENERAL_NOTE'  => $user->lang['ticket_email_general_note'],
      'L_EMAIL_ADMIN'         => $user->lang['ticket_email_admin'],
      'L_EMAIL_ADMINCOLOR'    => $user->lang['ticket_email_admincolor'],
      'L_DEFAULT_USER_COLOR'  => $user->lang['ticket_default_user_color'],
      'L_GENERAL'             => $user->lang['ticket_settings_header'],
      )
		);
    
    $eqdkp->set_vars(array(
		'page_title'             => sprintf($user->lang['admin_title_prefix'], $eqdkp->config['guildtag'], $eqdkp->config['dkp_name']).': Settings',
		'template_path' 	       => $pm->get_data('ticket', 'template_path'),
		'template_file'          => 'admin/settings.html',
		'display'                => true)
    );
    

?>
