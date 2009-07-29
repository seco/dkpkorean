<?php
 /*
 * Project:     EQdkp-Plus Raidlogimport
 * License:     Creative Commons - Attribution-Noncommercial-Share Alike 3.0 Unported
 * Link:		http://creativecommons.org/licenses/by-nc-sa/3.0/
 * -----------------------------------------------------------------------
 * Began:       2008
 * Date:        $Date: 2009-05-07 17:52:03 +0200 (Do, 07 Mai 2009) $
 * -----------------------------------------------------------------------
 * @author      $Author: hoofy_leon $
 * @copyright   2008-2009 hoofy_leon
 * @link        http://eqdkp-plus.com
 * @package     raidlogimport
 * @version     $Rev: 4786 $
 *
 * $Id: alias.php 4786 2009-05-07 15:52:03Z hoofy_leon $
 */
// EQdkp required files/vars
define('EQDKP_INC', true);
define('IN_ADMIN', true);

$eqdkp_root_path = './../../../';

include_once('./../includes/common.php');

class Alias extends EQdkp_Admin
{

	function Alias()
    {
        global $db, $eqdkp, $user, $tpl, $pm;
        global $SID;

        parent::eqdkp_admin();

        $this->assoc_buttons(array(
            'form' => array(
                'name'    => '',
                'process' => 'display_menu',
                'check'   => 'a_raid_add')
            )
        );
        $this->assoc_params(array(
        	'addalias' 	=> array(
        		'name'	  => 'mode',
        		'value'	  => 'addalias',
        		'process' => 'addalias',
        		'check'   => 'a_raid_add'),
        	'showalias'	=> array(
        		'name'	  => 'mode',
        		'value'   => 'showalias',
        		'process' => 'showalias',
        		'check'	  => 'a_raid_add')
        		)
        );
	}

	function display_menu()
	{
		global $db, $eqdkp, $user, $tpl, $pm;
        global $SID, $dbname, $table_prefix;

        $tpl->assign_vars(array(
            'U_ADD_ALIAS'    => 'alias.php' . $SID . '&amp;mode=addalias',
            'U_ADD_ALIAS_L'  => $user->lang['rli_addalias'],
            'U_LIST_ALIAS' 	 => 'alias.php' . $SID . '&amp;mode=showalias',
            'U_LIST_ALIAS_L' => $user->lang['rli_showalias'])
        );

        $eqdkp->set_vars(array(
            'page_title'        => sprintf($user->lang['admin_title_prefix'], $eqdkp->config['guildtag'], $eqdkp->config['dkp_name']).': '."Aliase",
            'template_path'     => $pm->get_data('raidlogimport', 'template_path'),
            'template_file'     => 'alias.html',
            'display'           => true,
            )
        );
	}
	function addalias()
	{
        global $db, $eqdkp, $user, $tpl, $pm;
        global $SID;

        include('./../includes/addalias.php');

        $aliasext = new Add_Alias;
        $aliasext->process();
	}
	function showalias()
	{
        global $db, $eqdkp, $user, $tpl, $pm;
        global $SID;

		include('./../includes/showalias.php');

		$aliasext = new Show_Alias;
		$aliasext->process();
	}
}
$Alias = new Alias;
$Alias->process();
?>
