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
 * $Id: lang_main.php 2685 2008-09-05 08:06:11Z wallenium $
 */

$lang['newsletter'] 											= 'Newsletter Manager';
$lang['nl_short_desc']                    = 'Send Newsletter to Users';
$lang['nl_long_desc']                     = 'You can send Newsletter to your eqdkp Users. You can create newsletter Templates for easier Management.';

// Admin Menu
$lang['nl_manage']												= 'Manage';
$lang['nl_templates']                     = 'Templates';
$lang['nl_settings']                      = 'Settings';
$lang['nl_recipients']										= 'Recipient';
$lang['nl_subject']												= 'Subject';
$lang['inl_class_only']										= 'Send to: ';
$lang['nl_mail_body']											= 'Message Body';
$lang['nl_header_send']										= 'Create Newsletter';
$lang['nl_button_send']										= 'Send';

$lang['nl_legende']												= 'Legend';
$lang['nl_legende_expl']									= 'The following placeholders could be used in the Message Body. They will be repleaced before sending the Newsletter (Case Sensitive!).';
$lang['nl_dkpname']												= 'Name of the DKP';
$lang['nl_date']													= 'Date';
$lang['nl_username']											= 'Username of Receipient';
$lang['nl_dkplink']												= 'Link to DKP';
$lang['nl_author']												= 'Author';
	
//send
$lang['nl_header_sent']										= 'Newsletter send successfully';
$lang['nl_txt_sent']											= 'Newsletter sucessfully send. The Newsletter was sent to following Users: ';
$lang['nl_class_all']											= 'All Classes';
$lang['nl_hideinactive']                  = 'active members only';
$lang['nl_use_template']                  = 'Use Template: ';

// Template Manager
$lang['nl_addtemplate']                   = 'New Template';
$lang['nl_edittemplate']                  = 'Edit Template';
$lang['nl_templatename']                  = 'Templatename';
$lang['nl_button_delete']                 = 'Remove Template';
$lang['nl_templates']                     = 'Manage Mail Templates';
$lang['nl_save_template']                 = 'Save template';

// Settings
$lang['nl_dbversion']                     = "Database Structure Version";
$lang['nl_force_update']                  = "Force DB Update";
$lang['nl_updatecheck']										= "Enable check for new Plugin Versions";
?>
