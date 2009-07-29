<?php
 /*
 * Project:     EQdkp RaidBanker
 * License:     Creative Commons - Attribution-Noncommercial-Share Alike 3.0 Unported
 * Link:		    http://creativecommons.org/licenses/by-nc-sa/3.0/
 * -----------------------------------------------------------------------
 * Began:       2005
 * Date:        $Date: 2009-02-28 16:37:28 +0100 (Sa, 28 Feb 2009) $
 * -----------------------------------------------------------------------
 * @author      $Author: wallenium $
 * @copyright   2005-2008 Simon (Wallenium) Wallmann
 * @link        http://eqdkp-plus.com
 * @package     raidbanker
 * @version     $Rev: 4027 $
 * 
 * $Id: addbankdata.php 4027 2009-02-28 15:37:28Z wallenium $
 */

// EQdkp required files/vars
define('EQDKP_INC', true);
define('IN_ADMIN', true);
define('PLUGIN', 'raidbanker');

global $table_prefix;
$eqdkp_root_path = './../../../';
include_once($eqdkp_root_path . 'plugins/raidbanker/includes/common.php');
$user->check_auth('a_raidbanker_import');
$rb = $pm->get_plugin('raidbanker');

if ( !$pm->check(PLUGIN_INSTALLED, 'raidbanker') )
{
    message_die('The Raid Banker plugin is not installed.');
}

class RaidBanker_Add extends EQdkp_Admin
{


    function RaidBanker_Add()
    {
        global $db, $eqdkp, $user, $tpl, $pm;
        global $SID;

        parent::eqdkp_admin();

        $this->assoc_buttons(
        	array(
				'insert' => array('name' => 'doInsert','process' => 'process_insert','check'   => 'a_raidbanker_import'),
				'form' => array('name' => '','process' => 'display_form', 'check' => 'a_raidbanker_import')
        	));
    }

	function process_insert()
	{

		global $db, $eqdkp, $user, $tpl, $pm;
		global $SID;

				$sql  = "INSERT INTO __raidbanker_bank (rb_char_name, rb_item_name, rb_item_rarity, rb_item_type, rb_item_amount) VALUES ";
				$sql .= "(\"".$_POST["charName"]."\",";
        $sql .= "\"".$_POST["name"]."\",";
				$sql .= "".$_POST["quality"].",";
				$sql .= "'".$_POST["type"]."',";
				$sql .= "".$_POST["amount"].")";
				$db->query($sql);

			echo '<script LANGUAGE="JavaScript">
    top.location.href=\'./editbankdata.php\'
</script>';

	}

	function display_form()
	{
		global $db, $eqdkp, $user, $tpl, $pm;
		global $SID, $conf;
		
		// the data language
if ($conf['rb_list_lang']){
  $filterthin = GetFilterValues($conf['rb_list_lang']);
}else{
  $filterthin = GetFilterValues('english');
}

foreach($filterthin['type'] as $type_key => $type_value) {
      // filter infos
      $tpl->assign_block_vars('type_filter', array(
        'NAME'        => $type_value
        )
          );
      }
      
foreach($filterthin['quality'] as $type_key => $type_value) {
      // filter infos
      $tpl->assign_block_vars('quality_filter', array(
        'NAME'        => $type_value,
        'ID'          => $type_key
        )
          );
      }

    $sql = "SELECT rb_char_name from __raidbanker_chars ORDER BY rb_char_name";
    if (!($result = $db->query($sql))) { message_die('Could not obtain class information', '', __FILE__, __LINE__, $sql); }
		    while ($row = $db->fetch_record($result))
		    {
		        $tpl->assign_block_vars('chars_row', array(
				      'NAME'	   => $row['rb_char_name']
		           )
              );
		    }

		$tpl->assign_vars(array(
			'F_ADD_ITEM'     => 'addbankdata.php' . $SID,
			'ROW_CLASS'      => $eqdkp->switch_row_class(),
			'L_ADD_ITEM'     => $user->lang['rb_add_item'],
			'L_BANK_INSERT'	 => $user->lang['rb_insert'],
			'L_QTY'          => $user->lang['rb_Bank_QTY'],
      'L_TYPE'         => $user->lang['rb_Bank_Type'],
      'L_NAME'         => $user->lang['rb_Item_Name'],
      'L_ITEMID'       => $user->lang['lang_itemid'],
      'L_BANKER'       => $user->lang['rb_pu_banker'],
      'L_QULAITY'      => $user->lang['rb_Bank_Quality'],
			'L_BANKER'       => $user->lang['rb_banker'],
			'L_CLOSE'        => $user->lang['rb_close'],
			)
		);

		$eqdkp->set_vars(array(
			'page_title'         => sprintf($user->lang['admin_title_prefix'], $eqdkp->config['guildtag'], $eqdkp->config['dkp_name']).': '.$user->lang['rb_step1_pagetitle'],
			'template_path'      => $pm->get_data('raidbanker', 'template_path'),
			'template_file'      => 'admin/add.html',
			'gen_simple_header'  => true,
			'display'            => true,
			)
		);
	}
}

$RB_Import = new RaidBanker_Add();
$RB_Import->process();
?>
