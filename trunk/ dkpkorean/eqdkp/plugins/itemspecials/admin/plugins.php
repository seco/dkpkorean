<?php
 /*
 * Project:     EQdkp ItemSpecials
 * License:     Creative Commons - Attribution-Noncommercial-Share Alike 3.0 Unported
 * Link:		    http://creativecommons.org/licenses/by-nc-sa/3.0/
 * -----------------------------------------------------------------------
 * Began:       2006
 * Date:        $Date: 2009-02-28 19:38:16 +0100 (Sa, 28 Feb 2009) $
 * -----------------------------------------------------------------------
 * @author      $Author: wallenium $
 * @copyright   2005-2008 Simon (Wallenium) Wallmann
 * @link        http://eqdkp-plus.com
 * @package     itemspecials
 * @version     $Rev: 4031 $
 * 
 * $Id: plugins.php 4031 2009-02-28 18:38:16Z wallenium $
 */

define('EQDKP_INC', true);
define('IN_ADMIN', true);
define('PLUGIN', 'itemspecials');
$eqdkp_root_path = './../../../';
include_once($eqdkp_root_path . 'common.php');

$user->check_auth('a_itemspecials_plugins');

if (!$pm->check(PLUGIN_INSTALLED, 'itemspecials')) { message_die('The Userchar plugin is not installed.'); }
$raidplan = $pm->get_plugin('itemspecials');

if (isset($_POST['selectplugin']) && $_POST['choose']){
    $sql = "UPDATE __itemspecials_plugins SET plugin_installed='0';";
    $db->query($sql);
    $sql = "UPDATE __itemspecials_plugins SET plugin_installed='1' WHERE plugin_id='".$_POST['selectplugin']."';";
	  $db->query($sql);
}

// Plugin Code
$sql = "SELECT * FROM __itemspecials_plugins";
if (!($plugin_result = $db->query($sql))) { message_die('Could not obtain configuration data', '', __FILE__, __LINE__, $sql); }
while($plugg = $db->fetch_record($plugin_result)) {
  $plugin[$plugg['plugin_path'].'.php'] = $plugg['plugin_path'].'.php';
  $cwd = $eqdkp_root_path . 'plugins/itemspecials/plugins/' . $plugg['plugin_path'] .'.php';
  if (!is_file($cwd)){
    // uninstall addon
    $sql = "DELETE FROM __itemspecials_plugins WHERE plugin_path='".$plugg['plugin_path']."';";
    $db->query($sql);
    $sql = "UPDATE __itemspecials_plugins SET plugin_installed='1' LIMIT 1;";
    $db->query($sql);
  }
}

// Search for plugins and make sure they are registered
        if ( $dir = @opendir($eqdkp_root_path . 'plugins/itemspecials/plugins/') )
        {
            while ( $d_plugin_code = @readdir($dir) )
            {
                $cwd = $eqdkp_root_path . 'plugins/itemspecials/plugins/' . $d_plugin_code;
                if ( 	(is_file($cwd)) &&
		 	(!is_link($cwd)) &&
			($d_plugin_code != '.') &&
			($d_plugin_code != '..') &&
			($d_plugin_code != 'CVS') &&
			($d_plugin_code != '.svn') )
                {
                    // If $d_plugin_code is in our array of registered codes,
                    // continue with the next iteration of the while loop
                    if ( @in_array($d_plugin_code, $plugin) )
                    {
                        continue;
                    }else{
                      include($eqdkp_root_path.'plugins/itemspecials/plugins/'.$d_plugin_code);
                        if ($itemspecial_plugin && isset($itemspecial_plugin)){
                                $sql = "INSERT INTO __itemspecials_plugins (`plugin_name`, `plugin_installed`, `plugin_path`, `plugin_contact`, `plugin_version`)  VALUES ('".$itemspecial_plugin[$d_plugin_code]['name']."', '0', '".$itemspecial_plugin[$d_plugin_code]['path']."', '".$itemspecial_plugin[$d_plugin_code]['contact']."', '".$itemspecial_plugin[$d_plugin_code]['version']."');";
                                $db->query($sql);
                                continue;
                          }
                    }
                  }
                unset($d_plugin_code, $cwd);
            } // readdir
        } // opendir
	else {
	print "fopen didn't work.<br>";
	}

$sql = 'SELECT *
        FROM __itemspecials_plugins m
        ORDER BY plugin_id';
if ( !($members_result = $db->query($sql)) )
{
    message_die('Could not obtain plugin information', '', __FILE__, __LINE__, $sql);
}
while ( $row = $db->fetch_record($members_result) )
{
    $tpl->assign_block_vars('plugins_row', array(
        'ROW_CLASS'     => $eqdkp->switch_row_class(),
        'ID'            => $row['plugin_id'],
        'NAME'          => $row['plugin_name'],
        'INSTALLED'     => ( $row['plugin_installed'] == 1 ) ? 'checked' : '',
        'CONTACT'       => $row['plugin_contact'],
        'VERSION'       => $row['plugin_version']
        )
    );

}
$tpl->assign_vars(array(
    'F_PLUGINS'             => 'plugins.php' . $SID,
    
    'L_NAME'                => $user->lang['is_plugin_name'],
    'L_VERSION_N'           => $user->lang['is_plugin_version'],
    'L_CONTACT'             => $user->lang['is_plugin_contact'],
    'L_PLUGIN_MANAGEMENT'   => $user->lang['is_plugin_management'],
    'L_SELECT_PLUGIN'       => $user->lang['is_select_plugin'],
    'L_CHOOSE_PLUGIN'       => $user->lang['is_plugin_choose'],

    'L_VERSION'             => $pm->get_data('itemspecials', 'version')
    )
);

$eqdkp->set_vars(array(
    'page_title'    => sprintf($user->lang['title_prefix'], $eqdkp->config['guildtag'], $eqdkp->config['dkp_name']).': '.$user->lang['listmembers_title'],
    'template_file' => 'admin/plugins.html',
    'template_path' => $pm->get_data('itemspecials', 'template_path'),
    'display'       => true)
);
?>
