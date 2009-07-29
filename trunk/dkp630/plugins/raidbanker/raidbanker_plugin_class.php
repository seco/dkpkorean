<?php
 /*
 * Project:     EQdkp RaidBanker
 * License:     Creative Commons - Attribution-Noncommercial-Share Alike 3.0 Unported
 * Link:		    http://creativecommons.org/licenses/by-nc-sa/3.0/
 * -----------------------------------------------------------------------
 * Began:       2005
 * Date:        $Date: 2009-03-04 00:38:08 +0100 (Mi, 04 Mrz 2009) $
 * -----------------------------------------------------------------------
 * @author      $Author: wallenium $
 * @copyright   2005-2008 Simon (Wallenium) Wallmann
 * @link        http://eqdkp-plus.com
 * @package     raidbanker
 * @version     $Rev: 4089 $
 * 
 * $Id: raidbanker_plugin_class.php 4089 2009-03-03 23:38:08Z wallenium $
 */
 
if ( !defined('EQDKP_INC') )
{
    die('You cannot access this file directly.');
}

global $table_prefix;

class raidbanker_Plugin_Class extends EQdkp_Plugin
{
    var $version    = '2.0.3';
    var $build      = '4089';
    var $vstatus    = 'Stable';
    var $copyright  = 'WalleniuM';
    var $fwversion  = '1.0.2';  // required framework Version
    
    function raidbanker_plugin_class($pm)
    {
        global $eqdkp_root_path, $user, $SID, $table_prefix;;

        // Call our parent's constructor
        $this->eqdkp_plugin($pm);


        // Get language pack
        $this->pm->get_language_pack('raidbanker');

        // Data for this plugin
    		$this->add_data(array(
    			'name'			    => 'Raid Banker',
    			'code'			    => 'raidbanker',
    			'path'			    => 'raidbanker',
    			'contact'		    => 'webmaster@wallenium.de',
    			'template_path'	=> 'plugins/raidbanker/templates/',
    			'version'		    => $this->version)
        );
        
        // Addition Information for eqdkpPLUS
        $this->additional_data = array(
            'author'            => 'WalleniuM',
            'description'       => $user->lang['rb_short_desc'],
            'long_description'  => $user->lang['rb_long_desc'],
            'homepage'          => 'http://www.eqdkp-plus.com/',
            'manuallink'        => false,
        );

        // Register our permissions
        $this->add_permission('901', 'a_raidbanker_import',   'N', $user->lang['rb_import']);
        $this->add_permission('903', 'a_raidbanker_update',   'N', $user->lang['update']);
        $this->add_permission('904', 'a_raidbanker_config',   'N', $user->lang['rb_config']);
        $this->add_permission('905', 'a_raidbanker_acl',      'N', $user->lang['rb_acl']);
        $this->add_permission('902', 'u_raidbanker_view',     'Y', $user->lang['rb_view']);        
        
        // Add Log Actions
		    $this->add_log_action('{L_ACTION_RBACL_ADDED}', $user->lang['action_rbacl_added']);
		    $this->add_log_action('{L_ACTION_RBACL_DEL}', $user->lang['action_rbacl_del']);
		    $this->add_log_action('{L_ACTION_RB_IMPORTED}', $user->lang['action_rb_imported']);
		    $this->add_log_action('{L_ACTION_RBBANK_DEL}', $user->lang['action_rbbank_del']);
        
        // Add Menus
		    $this->add_menu('main_menu1', $this->gen_main_menu1());
		    $this->add_menu('admin_menu', $this->gen_admin_menu());

        // Define installation
        // -----------------------------------------------------
    $sql = "CREATE TABLE IF NOT EXISTS __raidbanker_bank (
				    rb_bank_id mediumint(8) unsigned NOT NULL auto_increment,
				    rb_char_name varchar(255) default NULL,
				    rb_item_name varchar(255) default NULL,
				    rb_item_id mediumint(10) default 0,
				    rb_item_rarity mediumint(8) default 0,
				    rb_item_type varchar(255) default NULL,
				    rb_item_amount mediumint(8) default 0,
				    PRIMARY KEY  (rb_bank_id)
		) ";
		$this->add_sql(SQL_INSTALL, $sql);
		
				$sql = "CREATE TABLE IF NOT EXISTS __raidbanker_actions (
				    rb_id mediumint(8) unsigned NOT NULL auto_increment,
				    rb_item_name varchar(255) default NULL,
				    rb_status varchar(255) default NULL,
				    rb_char_money int(20) default 0,
            rb_item_dkp mediumint(8) default 0,
            PRIMARY KEY  (rb_id)
		) ";
		$this->add_sql(SQL_INSTALL, $sql);

$sql = "CREATE TABLE IF NOT EXISTS __raidbanker_bank_rel (
				    rb_bank_rel_id mediumint(8) unsigned NOT NULL auto_increment,
				    rb_item_name varchar(255) default NULL,
				    rb_char_name varchar(255) default NULL,
				    rb_qty mediumint(8) default 0,
				    rb_action varchar(255) default NULL,
				    rb_char_money int(20) default 0,
            rb_item_dkp mediumint(8) default 0,
            rb_adjust_id mediumint(8) default 0,
            PRIMARY KEY  (rb_bank_rel_id)
		) ";
		$this->add_sql(SQL_INSTALL, $sql);

		$sql = "CREATE TABLE IF NOT EXISTS __raidbanker_chars (
            rb_char_name varchar(255) default NULL,
            rb_char_money int(20) default 0,
            rb_date int(11) NOT NULL default '0',
            rb_bank_mainchar varchar(255) default NULL,
				    rb_bank_note varchar(255) default NULL,
            UNIQUE KEY (rb_char_name)
            ) ";
		$this->add_sql(SQL_INSTALL, $sql);		

    $sql = "CREATE TABLE IF NOT EXISTS __raidbanker_config (
						`config_name` varchar(255) NOT NULL default '',
            `config_value` varchar(255) default NULL,
            PRIMARY KEY  (`config_name`))";
    $this->add_sql(SQL_INSTALL, $sql);
        
        
        //Grant permissions to installing user
    		if (!($this->pm->check(PLUGIN_INSTALLED, 'raidbanker'))){
					$userid = ( $user->data['user_id'] != ANONYMOUS ) ? $user->data['user_id'] : '';
					$perm_array = array('901', '902', '903', '904', '905');
				
					foreach ($perm_array as $value) {
						$this->set_permission($userid, $value);
					}
     		
        	// Define additional installation
        	$uc_itemstats_file = $eqdkp_root_path . 'itemstats/eqdkp_itemstats.php';
					if (@file_exists($uc_itemstats_file)) {
        		$this->InsertIntoTable('rb_itemstats', '1'); # Use Itemstats?
        	}
        	$this->InsertIntoTable('rb_inst_version', $this->version); # Save the version for Autoupdate?
        	$this->InsertIntoTable('rb_hide_banker', '1'); # hide banker on selection?
        	$this->InsertIntoTable('rb_no_bankers', '0'); # Use only one Banker, add all Gold to it?
        	$this->InsertIntoTable('rb_is_cache', 'true'); # if true, itemstats will not poll items from allhakazam if they are not in your cache, you can then click on every single item of the raidbanker page to get data refreshed
        	$this->InsertIntoTable('rb_is_path', './../../itemstats/eqdkp_itemstats.php'); # the itemstats path?
        	$this->InsertIntoTable('rb_show_money', '1'); # show the money holdings    
        	$this->InsertIntoTable('rb_list_lang', 'english');
        	$this->InsertIntoTable('rb_show_tooltip', '1');
        	$this->InsertIntoTable('rb_auto_adjustment', '0');
        	$this->InsertIntoTable('rb_oldstyle', '0');
        }
        
        // Define uninstallation
        // -----------------------------------------------------
        		$this->add_sql(SQL_UNINSTALL, "DROP TABLE IF EXISTS __raidbanker_bank");
            $this->add_sql(SQL_UNINSTALL, "DROP TABLE IF EXISTS __raidbanker_bank_rel");
            $this->add_sql(SQL_UNINSTALL, "DROP TABLE IF EXISTS __raidbanker_config");
            $this->add_sql(SQL_UNINSTALL, "DROP TABLE IF EXISTS __raidbanker_chars");
            $this->add_sql(SQL_UNINSTALL, "DROP TABLE IF EXISTS __raidbanker_actions");   
    }

    function gen_main_menu1()
	    {
			global $user, $SID;

	        if ($this->pm->check(PLUGIN_INSTALLED, 'raidbanker') && $user->check_auth('u_raidbanker_', false))
	        {
	            global $db, $user, $eqdkp;
	            $main_menu1 = array(
	                array(
						'link' => 'plugins/raidbanker/raidbanker.php' . $SID,
						'text' => $user->lang['rb_usermenu_raidbanker'],
						'check' => ''
					)
	            );

	            return $main_menu1;
	        }
	        return;
    }

    function gen_admin_menu()
    {
        if ( $this->pm->check(PLUGIN_INSTALLED, 'raidbanker') )
        {
            global $db, $user, $SID, $eqdkp_root_path, $eqdkp;
            $url_prefix = ( EQDKP_VERSION < '1.3.2' ) ? $eqdkp_root_path : '';
            
            $admin_menu = array(
				'raidbanker' => array(
				  99 => './../../plugins/raidbanker/images/rb_icon.png',
					0 => $user->lang['rb_adminmenu_raidbanker'],
					1 => array(
            'link' => $url_prefix . 'plugins/raidbanker/admin/settings.php' . $SID,
            'text' => $user->lang['rb_config'],
            'check' => 'a_raidbanker_config'),
					2 => array(
            'link' => $url_prefix . 'plugins/raidbanker/admin/editbankdata.php' . $SID,
            'text' => $user->lang['manage'],
            'check' => 'a_raidbanker_update'),
          3 => array(
            'link' => $url_prefix . 'plugins/raidbanker/admin/acl.php' . $SID,
            'text' => $user->lang['rb_acl'],
            'check' => 'a_raidbanker_acl')
				)
			);

            return $admin_menu;
        }
        return;
    }
    
  // Install the config settings
  function InsertIntoTable($fieldname,$insertvalue)
  {
    global $eqdkp_root_path, $user, $SID;
		$sql = "INSERT INTO __raidbanker_config VALUES ('".$fieldname."', '".$insertvalue."');";
		$this->add_sql(SQL_INSTALL, $sql);
  }
	
	function set_permission($userid, $permissionid, $value='Y'){
		global $db;
		$sql = "UPDATE __auth_users SET auth_setting='".$value."' WHERE user_id='".$userid."' AND auth_id='".$permissionid."';";
		$db->query($sql);
		if (mysql_affected_rows() == 0){
			$sql = "INSERT INTO __auth_users VALUES('".$userid."', '".$permissionid."', '".$value."');";
			$db->query($sql);
		}
	}
}
?>
