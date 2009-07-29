<?php
/*
 * Project:     EQdkp-Plus
 * License:     Creative Commons - Attribution-Noncommercial-Share Alike 3.0 Unported
 * Link:		http://creativecommons.org/licenses/by-nc-sa/3.0/
 * -----------------------------------------------------------------------
 * Began:       2006
 * Date:        $Date: 2009-07-03 15:38:13 +0200 (Fr, 03 Jul 2009) $
 * -----------------------------------------------------------------------
 * @author      $Author: ghoschdi $
 * @copyright   2006-2008 Corgan - Stefan Knaak | Wallenium & the EQdkp-Plus Developer Team
 * @link        http://eqdkp-plus.com
 * @package     eqdkp-plus
 * @version     $Rev: 5151 $
 * 
 * $Id: portalmanager.php 5151 2009-07-03 13:38:13Z ghoschdi $
 */

define('EQDKP_INC', true);
define('IN_ADMIN', true);
$eqdkp_root_path = '../';
include_once($eqdkp_root_path . 'common.php');
include_once('include/html.class.php');

// Check user permission
$user->check_auth('a_config_man');

// Load the language
$plang = $pluslang->NormalLanguage();

// Install the Plugins if required
$portal_module = $portal->InstallIfRequired();

$sql = 'SELECT * FROM __portal ORDER BY plugin ASC, name';
if ($members_result = $db->query($sql)) 
{
	while ( $row = $db->fetch_record($members_result) )
	{
		$portalinfos = $portal_module[$row['path']];
		$posdropdown = '';
		if(is_array($portalinfos['positions']))
		{
			foreach($portalinfos['positions'] as $pposition)
			{
				if(in_array($pposition, $portal->positions))
				{
					$posdropdown[$pposition] = $plang['portalplugin_'.$pposition];
				}
			}
		}
		if(strpos($portalinfos['contact'], '@')=== false)
		{
			$portal_contact =  $portalinfos['contact'];
		}else
		{
			$portal_contact = 'mailto:'.$portalinfos['contact'];
		}
		
		// User Rights
		$drpdwn_rights = array(
      '0'   => $plang['portal_rights0'],
      '1'   => $plang['portal_rights1'],
      '2'   => $plang['portal_rights2']
    );
		
		$tpl->assign_block_vars('plugins_row', array(
		'ROW_CLASS'     => $eqdkp->switch_row_class(),
		'ID'            => $row['id'],
		'S_SETTINGS'    => ($portalinfos['settings'] == '1') ? true : false,
		'S_PLUGIN'      => ($row['plugin']) ? true : false,
		'NUMBER'        => $row['number'],
		'NAME'          => $html->ToolTip($portalinfos['description'],$portalinfos['name']),
		'CONTACT'       => '<a href="'.$portal_contact.'">'.$portalinfos['author'].'</a>',
		'VERSION'       => $portalinfos['version'],
		'ENABLED'       => $html->CheckBox2('enabled['.$row['id'].']', $row['enabled'], $row['id']),
		'POSITION'      => $html->DropDown('position['.$row['id'].']', $posdropdown , $row['position'], '', '', true),
		'RIGHTS'        => $html->DropDown('rights['.$row['id'].']', $drpdwn_rights , $row['visibility'], '', '', true),
		'COLLAPSABLE'   => $html->CheckBox2('collapsable['.$row['id'].']', $row['collapsable']),
    )
		);
	}
}

$tpl->assign_vars(array(
    'F_PLUGINS'             => 'portalmanager.php' . $SID,
    
    'JS_SETTINGS'           => $jqueryp->Dialog_URL('ModuleSetting'.rand(), $plang['portalplugin_winname'], "portalsettings.php?id='+moduleid+'", '660', '400', 'portalmanager.php'),
    
    'L_NAME'                => $plang['portalplugin_name'],
    'L_VERSION_N'           => $plang['portalplugin_version'],
    'L_CONTACT'             => $plang['portalplugin_contact'],
    'L_POSITION'            => $plang['portalplugin_order'],
    'L_RIGHTS'              => $plang['portalplugin_rights'],
    'L_COLLAPSE'            => $plang['portal_collapsable'],
    'L_ORIENTATION'         => $plang['portalplugin_orientation'],
    'L_ENABLED'             => $plang['portalplugin_enabled'],
    'L_SAVE'                => $plang['portalplugin_save'],
    'L_EDIT'                => $plang['portalplugin_edit'],
    'L_SETTINGS'            => $plang['portalplugin_settings'],
    'L_MORE'                => $user->lang['more_moduls']
    )
);

$eqdkp->set_vars(array(
    'page_title'    => sprintf($user->lang['title_prefix'], $eqdkp->config['guildtag'], $eqdkp->config['dkp_name']).': '.$plang['portalplugin_management'],
    'template_file' => 'admin/portalmanager.html',
    'display'       => true)
);
?>