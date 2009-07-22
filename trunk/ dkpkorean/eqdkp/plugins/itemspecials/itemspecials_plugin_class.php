<?php
 /*
 * Project:     EQdkp ItemSpecials
 * License:     Creative Commons - Attribution-Noncommercial-Share Alike 3.0 Unported
 * Link:		    http://creativecommons.org/licenses/by-nc-sa/3.0/
 * -----------------------------------------------------------------------
 * Began:       2006
 * Date:        $Date: 2009-03-07 17:07:11 +0100 (Sa, 07 Mrz 2009) $
 * -----------------------------------------------------------------------
 * @author      $Author: wallenium $
 * @copyright   2005-2008 Simon (Wallenium) Wallmann
 * @link        http://eqdkp-plus.com
 * @package     itemspecials
 * @version     $Rev: 4136 $
 * 
 * $Id: itemspecials_plugin_class.php 4136 2009-03-07 16:07:11Z wallenium $
 */
 
if ( !defined('EQDKP_INC') )
{
    die('You cannot access this file directly.');
}

class itemspecials_Plugin_Class extends EQdkp_Plugin
{
		// Do not change
		var $version    = '5.0.2';
    var $build      = '4084';
    var $vstatus    = 'Stable';
		var $copyright  = 'WalleniuM';
		var $fwversion  = '1.0.2';  // required framework Version

   function itemspecials_plugin_class($pm){
   	global $eqdkp_root_path, $user, $SID, $table_prefix;

    // Call our parent's constructor
    $this->eqdkp_plugin($pm);

    // Get language pack
    $this->pm->get_language_pack('itemspecials');

        // Data for this plugin
		$this->add_data(array(
			'name'			    => 'Item Specials',
			'code'			    => 'itemspecials',
			'path'			    => 'itemspecials',
			'contact'		    => 'http://eqdkp-plus.com',
			'template_path'	=> 'plugins/itemspecials/templates/',
			'version'		    => $this->version)
    );
    
    $this->additional_data = array(
            'author'            => 'WalleniuM',
            'description'       => $user->lang['is_short_desc'],
            'long_description'  => $user->lang['is_long_desc'],
            'homepage'          => 'http://www.eqdkp-plus.com/',
            'manuallink'        => false,
        );
        
        // Register our permissions
        $this->add_permission('924', 'a_itemspecials_conf',   'N', $user->lang['is_itemspecials_conf']);
        $this->add_permission('925', 'a_itemspecials_plugins','N', $user->lang['is_itemspecials_plugins']);
        $this->add_permission('921', 'u_setitems_view',       'Y', $user->lang['is_set_view']);
        $this->add_permission('922', 'u_specialitems_view',   'Y', $user->lang['is_special_view']);
        $this->add_permission('923', 'u_setright_view',       'Y', $user->lang['is_setright_view']);
        $this->add_permission('926', 'u_items_add',       		'Y', $user->lang['is_items_add']);
          
        // Add Menus
		    $this->add_menu('main_menu1', $this->gen_main_menu1());
		    $this->add_menu('admin_menu', $this->gen_admin_menu());
		    $this->add_menu('settings', $this->gen_settings_menu());
		    
		    // Define installation
        // -----------------------------------------------------
          $sql = "CREATE TABLE IF NOT EXISTS " . $table_prefix . "itemspecials_config (
				          `config_name` varchar(255) NOT NULL default '',
                  `config_value` varchar(255) default NULL,
                  PRIMARY KEY  (`config_name`)
		              )";
		      $this->add_sql(SQL_INSTALL, $sql);
		      
		      $sql = "CREATE TABLE IF NOT EXISTS `" . $table_prefix . "itemspecials_plugins` (
                  `plugin_id` mediumint(8) unsigned NOT NULL auto_increment,
                  `plugin_name` varchar(50) NOT NULL default '',
                  `plugin_installed` enum('0','1') NOT NULL default '0',
                  `plugin_path` varchar(255) NOT NULL default '',
                  `plugin_contact` varchar(100) default NULL,
                  `plugin_version` varchar(7) NOT NULL default '',
                  PRIMARY KEY  (`plugin_id`)
                  ) ;";
          $this->add_sql(SQL_INSTALL, $sql);
          
          $sql = "CREATE TABLE IF NOT EXISTS `" . $table_prefix . "itemspecials_items` (
                  `item_id` mediumint(8) unsigned NOT NULL auto_increment,
  								`item_name` varchar(255) default NULL,
  								`item_buyer` int(11) NOT NULL default '0',
                  PRIMARY KEY  (`item_id`)
                  ) ;";
          $this->add_sql(SQL_INSTALL, $sql);
          
          $sql = "INSERT INTO `" . $table_prefix . "itemspecials_plugins` (`plugin_name`, `plugin_installed`, `plugin_path`, `plugin_contact`, `plugin_version`)  VALUES ('Normal Calculation', '1', 'setright_plugin1', 'webmaster@wallenium.de', '1.0.0');";
		      $this->add_sql(SQL_INSTALL, $sql);

		      $sql = "CREATE TABLE IF NOT EXISTS " . $table_prefix . "itemspecials_custom (
				          `set` varchar(50) NOT NULL default '',
                  `custom_name` varchar(255) NOT NULL default '',
                  `item_name` varchar(255) NOT NULL default '',
                  `order` int(9) NOT NULL default '0',
                  PRIMARY KEY  (`set`,`custom_name`)
		              )";
		      $this->add_sql(SQL_INSTALL, $sql);

          // standard Specialitems
          $ajax_array = array(
    				'Heart of Hakkar'   => 'Heart of Hakkar',
    				'Head of Onyxia'   => 'Head of Onyxia',
    				'Onyxia Hide Backpack'   => 'Onyxia Hide Backpack',
    				'Head of Nefarian'   => 'Head of Nefarian',
    				'Head of the Broodlord Lashlayer'   => 'Head of the Broodlord Lashlayer',
    				'Head of Ossirian the Unscarred'   => 'Head of Ossirian the Unscarred',
    				'Mature Black Dragon Sinew'   => 'Mature Black Dragon Sinew',
    				'Mature Blue Dragon Sinew'   => 'Mature Blue Dragon Sinew',
    				'Ancient Petrified Leaf'   => 'Ancient Petrified Leaf',
    				'The Eye of Divinity'  => 'The Eye of Divinity',
    				'The Eye of Shadow'  => 'The Eye of Shadow',
    				'Onyxia Scale Cloak'  => 'Onyxia Scale Cloak',
    				'Eye of CThun'  => "Eye of C\'Thun",
    				'Panther Hide Sack'  => 'Panther Hide Sack'
    			);
          $this->InsertAjax($ajax_array);
		
		//Grant permissions to installing user
    if (!($this->pm->check(PLUGIN_INSTALLED, 'itemspecials'))){
			$userid = ( $user->data['user_id'] != ANONYMOUS ) ? $user->data['user_id'] : '';
			$perm_array = array('921', '922', '923', '924', '925', '926');
				
			foreach ($perm_array as $value) {
				$this->set_permission($userid, $value);
			}
		
			// global config
			$this->InsertIntoTable('is_inst_version', $this->version);
		  $this->InsertIntoTable('is_exec_time', '1');
		  $this->InsertIntoTable('is_updatecheck', '1');
			$this->InsertIntoTable('locale', 'de');
			$this->InsertIntoTable('nonsettable', 'eqdkp_items');
			$this->InsertIntoTable('settable', 'eqdkp2_items');
			$this->InsertIntoTable('imgwidth', '22px');
			$this->InsertIntoTable('imgheight', '22px');
			$this->InsertIntoTable('hide_inactives', '1');
			$this->InsertIntoTable('colouredcls', '1');
			$this->InsertIntoTable('itemstats', '1');
			$this->InsertIntoTable('is_replace', '<font color=red>x</font>');
			
			// specialitems config
			$this->InsertIntoTable('header_images', '1');   // show Header Images instead of txt
			$this->InsertIntoTable('download_cache', '0');     // are all tier images downloaded?
			$this->InsertIntoTable('si_class', '1');        // show Class
			$this->InsertIntoTable('si_cls_icon', '1');     // show Class Icon
			
			//setitems config
			$this->InsertIntoTable('set_show_tier6', '1');     // show Tier 6 Set
			$this->InsertIntoTable('set_show_tier7', '1');     // show Tier 7 Set
			$this->InsertIntoTable('set_show_index', '1');  // show Overview index
			$this->InsertIntoTable('set_drpdwn_cls', '1');  // show Dropdown Class list
			
			// set progress one page
			$this->InsertIntoTable('set_onePage', '1');     // show Tiers on one page
			$this->InsertIntoTable('set_op_rank', '1');        // show Rank
			$this->InsertIntoTable('set_op_points', '1');      // show current Points
			$this->InsertIntoTable('set_op_total', '1');      // show total Points
			$this->InsertIntoTable('set_op_class', '1');       // show Class
			$this->InsertIntoTable('set_op_cls_icon', '1');    // show Class Icon
			
			//setright config
			$this->InsertIntoTable('sr_rank', '1');         // show Rank
			$this->InsertIntoTable('sr_points', '1');       // show Points
			$this->InsertIntoTable('sr_class', '1');        // show Class
			$this->InsertIntoTable('sr_cls_icon', '1');     //use Tier 1 Set
			$this->InsertIntoTable('sr_use_tier6', '1');     // use Tier 6 Set
			$this->InsertIntoTable('sr_use_tier7', '1');     // use Tier 7 Set
			$this->InsertIntoTable('sr_use_tier75', '1');     // use Tier 7.5 Set
		}  
		
		// Uninstall
		$this->add_sql(SQL_UNINSTALL, "DROP TABLE IF EXISTS " . $table_prefix . "itemspecials_config");
		$this->add_sql(SQL_UNINSTALL, "DROP TABLE IF EXISTS " . $table_prefix . "itemspecials_plugins");
		$this->add_sql(SQL_UNINSTALL, "DROP TABLE IF EXISTS " . $table_prefix . "itemspecials_custom");
		$this->add_sql(SQL_UNINSTALL, "DROP TABLE IF EXISTS " . $table_prefix . "itemspecials_items");
    }

    function gen_main_menu1(){
			global $user, $SID;

	        if ($this->pm->check(PLUGIN_INSTALLED, 'itemspecials')){
	            global $db, $user, $eqdkp;
	            
              $main_menu1 = array(
	                array(
						'link' => 'plugins/itemspecials/specialitems.php' . $SID,
						'text' => $user->lang['is_usermenu_Specialitems'],
						'check' => 'u_specialitems_view'
					     ),
				        array(
						'link' => 'plugins/itemspecials/setitems.php' . $SID,
						'text' => $user->lang['is_usermenu_Setitems'],
						'check' => 'u_setitems_view'
	             ),
                  array(
						'link' => 'plugins/itemspecials/setright.php' . $SID,
						'text' => $user->lang['is_usermenu_setright'],
						'check' => 'u_setright_view')
	             );

	            return $main_menu1;
	        }
	        return;
    }
    
        function gen_admin_menu(){
        if ( $this->pm->check(PLUGIN_INSTALLED, 'itemspecials') ){
            global $db, $user, $SID, $eqdkp_root_path, $eqdkp;
 						$url_prefix = ( EQDKP_VERSION < '1.3.2' ) ? $eqdkp_root_path : '';
 						
            $admin_menu = array(
							'itemspecials' => array(
                99 => './../../plugins/itemspecials/images/is_icon.png',
								0 => $user->lang['is_adminmenu_itemspecials'],
								1 => array(
									'link' => $url_prefix.'plugins/itemspecials/admin/settings.php' . $SID,
									'text' => $user->lang['is_itemspecials_conf'],
									'check' => 'a_itemspecials_conf'),
								2 => array(
									'link' => $url_prefix.'plugins/itemspecials/admin/tollfreeitems.php' . $SID,
									'text' => $user->lang['is_itemspecials_additem'],
									'check' => 'a_itemspecials_conf'),
								3 => array(
									'link' => $url_prefix.'plugins/itemspecials/admin/plugins.php' . $SID,
									'text' => $user->lang['is_itemspecials_plugins'],
									'check' => 'a_itemspecials_plugins')
							)
						);
            return $admin_menu;
        }
        return;
    }

		function gen_settings_menu(){
    	global $db, $user, $SID, $eqdkp;
        if ( $this->pm->check(PLUGIN_INSTALLED, 'itemspecials') &&  $user->check_auth('u_items_add', false))
        {

        $settings_menu = array(
            $user->lang['itemspecials'] => array(
                0 => '<a href="plugins/itemspecials/useritem.php' . $SID . '">' . $user->lang['is_useradd_items'] . '</a>',
                )
        );
            return $settings_menu;
        }
        return;
    }

	function InsertIntoTable($fieldname,$insertvalue){
  	global $eqdkp_root_path, $user, $SID, $table_prefix;
		$sql = "INSERT INTO " . $table_prefix . "itemspecials_config VALUES ('".$fieldname."', '".$insertvalue."');";
		$this->add_sql(SQL_INSTALL, $sql);
  }
      
  function InsertAjax($dataarray){
    global $eqdkp_root_path, $user, $SID, $table_prefix;
    foreach($dataarray as $key=>$value) {
			$sql = "INSERT INTO " . $table_prefix . "itemspecials_custom VALUES ('itempool', '".$key."', '".$value."', 0);";
		  $this->add_sql(SQL_INSTALL, $sql);
		}
  }
  
	function set_permission($userid, $permissionid, $value='Y'){
		global $table_prefix, $db;
		$sql = "UPDATE `".$table_prefix."auth_users` SET auth_setting='".$value."' WHERE user_id='".$userid."' AND auth_id='".$permissionid."';";
		$db->query($sql);
		if (mysql_affected_rows() == 0){
			$sql = "INSERT INTO `".$table_prefix."auth_users` VALUES('".$userid."', '".$permissionid."', '".$value."');";
			$db->query($sql);
		}
	}
}
?>
