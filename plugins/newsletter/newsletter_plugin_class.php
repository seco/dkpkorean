<?php
 /*
 * Project:     EQdkp Newsletter
 * License:     Creative Commons - Attribution-Noncommercial-Share Alike 3.0 Unported
 * Link:		    http://creativecommons.org/licenses/by-nc-sa/3.0/
 * -----------------------------------------------------------------------
 * Began:       2007
 * Date:        $Date: 2009-03-04 00:28:05 +0100 (Mi, 04 Mrz 2009) $
 * -----------------------------------------------------------------------
 * @author      $Author: wallenium $
 * @copyright   2005-2008 Simon (Wallenium) Wallmann
 * @link        http://eqdkp-plus.com
 * @package     newsletter
 * @version     $Rev: 4087 $
 * 
 * $Id: newsletter_plugin_class.php 4087 2009-03-03 23:28:05Z wallenium $
 */
 
if ( !defined('EQDKP_INC') )
{
    die('You cannot access this file directly.');
}

class newsletter_Plugin_Class extends EQdkp_Plugin
{
	
		var $version    = '1.2.2';
    var $build      = '4087';
    var $vstatus    = 'Stable';
    var $copyright  = 'WalleniuM';
    var $fwversion  = '1.0.2';  // required framework Version
		
    function newsletter_plugin_class($pm)
    {
        global $eqdkp_root_path, $user, $SID;
        
		// Call our parent's constructor
        $this->eqdkp_plugin($pm);
		
		// Get language pack
        $this->pm->get_language_pack('newsletter');

		// Data for this plugin
        $this->add_data(array(
            'name'					=> 'Newsletter Manager',
            'code'					=> 'newsletter',
            'path'					=> 'newsletter',
            'contact'				=> 'webmaster@wallenium.de',
            'template_path'	=> 'plugins/newsletter/templates/',
            'version'				=> $this->version)
        );
        
        // Addition Information for eqdkpPLUS
        $this->additional_data = array(
            'author'            => 'WalleniuM',
            'description'       => $user->lang['nl_short_desc'],
            'long_description'  => $user->lang['nl_long_desc'],
            'homepage'          => 'http://www.eqdkp-plus.com/',
            'manuallink'        => false,
        );
        
				// Register our permissions
        $this->add_permission('571', 'a_newsletter_manage',    'N', $user->lang['nl_manage']);
			
        // Add Menus
				//$this->add_menu('main_menu1', $this->gen_main_menu1());
				$this->add_menu('admin_menu', $this->gen_admin_menu());

        // Define installation
        // -----------------------------------------------------
		$steps=2;
		for ($i = 1; $i <= $steps; $i++)
		{
			$this->add_sql(SQL_INSTALL, $this->create_nl_tables("step".$i."a"));
			$this->add_sql(SQL_INSTALL, $this->create_nl_tables("step".$i."b"));
		}	
		
		$sssql = "INSERT INTO __newsletter_templates ( `id` , `subject` , `body`, `name` )
                VALUES (
                  '1', 'Vergessene Anmeldung im Raidplaner', 'Hallo *USERNAME* Du hast dich bisher noch nicht für folgenden Raid angemeldet: *RPLINK* Bitte melde dich entweder an oder ab. Danke *AUTHOR*', 'RaidPlan Erinnerung'
                )";
		$this->add_sql(SQL_INSTALL, $sssql);
		
		if (!($this->pm->check(PLUGIN_INSTALLED, 'newsletter'))){
			$userid = ( $user->data['user_id'] != ANONYMOUS ) ? $user->data['user_id'] : '';
			$perm_array = array('571');
				
			foreach ($perm_array as $value) {
				$this->set_permission($userid, $value);
			}
			
			// Installation of Settings
			$this->InsertIntoTable('nl_inst_version', $this->version); # Save the version for Autoupdate?
		}
			
        // Define uninstallation
        // -----------------------------------------------------
		$steps=2;
		for ($i = 1; $i <= $steps; $i++){
			$this->add_sql(SQL_UNINSTALL, $this->create_nl_tables("step".$i."a"));
		}	
}
    /**
	* Generate newsletter admin menu
	*
	* @return array
	*/
    function gen_admin_menu()
    {
		global $user, $SID, $eqdkp, $eqdkp_root_path;
		$url_prefix = ( EQDKP_VERSION < '1.3.2' ) ? $eqdkp_root_path : '';
		
        if ($this->pm->check(PLUGIN_INSTALLED, 'newsletter') && $user->check_auth('a_newsletter_manage', false))
        {
            global $db, $user, $eqdkp_root_path;
						
			$admin_menu = array(
				'newsletter' => array(
				  99 => './../../plugins/newsletter/images/nl_logo.png',
					0 => $user->lang['newsletter'],
					1 => array(
						'link' => $url_prefix . 'plugins/newsletter/admin/send.php' . $SID,
						'text' => $user->lang['nl_manage'],
						'check' => 'a_newsletter_manage'),
				  2 => array(
						'link' => $url_prefix . 'plugins/newsletter/admin/templates.php' . $SID,
						'text' => $user->lang['nl_templates'],
						'check' => 'a_newsletter_manage'),
					3 => array(
						'link' => $url_prefix . 'plugins/newsletter/admin/settings.php' . $SID,
						'text' => $user->lang['nl_settings'],
						'check' => 'a_newsletter_manage')
				  )
			);

            return $admin_menu;
        }
        return;
    }

  /**
	* Get SQL to create the roster table
	*
	* @return string Table creation SQL
	*/
	function create_nl_tables($step)
	{
		$sql = "";
		switch ($step)
		{
			case "step1a":
				$sql = "DROP TABLE IF EXISTS __newsletter_config";
				break;
			case "step1b":
				$sql = "CREATE TABLE IF NOT EXISTS __newsletter_config (
						`config_name` varchar(255) NOT NULL default '',
        `config_value` varchar(255) default NULL,
        PRIMARY KEY  (`config_name`))";
				break;			
        case "step2a":
				$sql = "DROP TABLE IF EXISTS __newsletter_templates";
				break;
			case "step2b":
				$sql = "CREATE TABLE IF NOT EXISTS __newsletter_templates (
						`id` int(10) NOT NULL auto_increment,
						`name` varchar(255) default NULL,
						`subject` varchar(255) default NULL,
						`body` text default NULL, 
        PRIMARY KEY  (`id`))";
				break;			
		}
		return $sql;
	}
	
	// Install the config settings
	function InsertIntoTable($fieldname,$insertvalue){
  	global $eqdkp_root_path, $user, $SID;
		$sql = "INSERT INTO __newsletter_config VALUES ('".$fieldname."', '".$insertvalue."');";
		$this->add_sql(SQL_INSTALL, $sql);
	}
	
	/***************************************
	* Set the perm. for installing user    *
	* @return --                           *
	****************************************/
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
