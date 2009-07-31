<?php
 /*
 * Project:     EQdkp Plugin WPFC Classes
 * License:     Creative Commons - Attribution-Noncommercial-Share Alike 3.0 Unported
 * Link:		    http://creativecommons.org/licenses/by-nc-sa/3.0/
 * -----------------------------------------------------------------------
 * Began:       2005
 * Date:        $Date: 2008-08-05 12:35:33 +0200 (Di, 05 Aug 2008) $
 * ----------------------------------------------------------------------- 
 * This Class is part of the "WalleniuMs Plugin (Developer) Framework Kit" WPFC. 
 * You can ask for permission and use this classes in your Plugins but not 
 * remove this Copyright  
 * -----------------------------------------------------------------------
 * @author      $Author: wallenium $
 * @copyright   2007-2008 Simon (Wallenium) Wallmann
 * @link        http://eqdkp-plus.com
 * @package     wpfc
 * @version     $Rev: 2488 $
 * 
 * $Id: updatewarn.class.php 2488 2008-08-05 10:35:33Z wallenium $
 */

if ( !defined('EQDKP_INC') ){
    header('HTTP/1.0 404 Not Found');exit;
}

if (!class_exists("PluginUpdWarn")) {
  class PluginUpdWarn
  {
  	var $ucc_version 	= '1.1.1'; // Version of this class
  	var $show_warn		= false;
  	
  	function PluginUpdWarn($plugin_names, $wpfcpath){
  		global $pm, $db, $table_prefix, $eqdkp_root_path, $user;
  		
  		$this->imagePath        = $wpfcpath.'images/';
  		$this->version_table		= $db_table;
  		
  		// Check Pluginversions
  		$tmpplugarray = array();
  		foreach($plugin_names as $plugg=>$dbfields){
  		  $myvfiles = array();
  			if($pm->check(PLUGIN_INSTALLED, $plugg)){
  				$sql = "SELECT * FROM ".$table_prefix.$dbfields['table'];
  				$tmpconf = $db->query($sql);
  				while($rowcc = $db->fetch_record($tmpconf)){
             if($rowcc['config_name'] == $dbfields['fieldprefix'].'inst_version'){
                $myvfiles['version'] = $rowcc['config_value'];
             }elseif($rowcc['config_name'] == $dbfields['fieldprefix'].'inst_build'){
                $myvfiles['build'] = $rowcc['config_value'];
             }
          }
          
          if($myvfiles['build'] && $myvfiles['build'] < $pm->plugins[$plugg]->build){
            $this->DeleteVersionString($table_prefix.$dbfields['table'], $dbfields['fieldprefix'].'inst_version');
          }
  				
  				// Check if the Versions are equal
  				if($pm->get_data($plugg, 'version') > $myvfiles['version']){
  				  $vfile = $eqdkp_root_path.'plugins/'.$plugg.'/'.$dbfields['inclfolder'].'/updates/versions.php';
  				  if(is_file($vfile)){
  				    include($vfile);
  				    $last_entry = array_pop($up_updates);
  				    
    				  // Check if there's a database upgrade file
    				  if(is_array($last_entry) && $last_entry['old'] >= $myvfiles['version']){
      					$tmpplugarray[$plugg]  = ($myvfiles['version']) ? $myvfiles['version'] : $user->lang['wpfc_unknown'];
      					$this->show_warn       = true;
    					}
  					}
  				}
  			}
  		}
  		$this->plugin_array = $tmpplugarray;
  	}
  	
  	function OutputHTML(){
  		global $user, $pm, $eqdkp_root_path;
  		if ($this->show_warn && $user->check_auth('a_raid_upd', false)){
  		$out_htm = '<table width="100%" border="0" cellspacing="1" cellpadding="2" class="errortable">
  								  <tr>
  								    <td class="row1" width ="48px"><img src="'.$this->imagePath.'false.png" /></td>
  								    <td class="row1">
  								    	<table width="100%" border="0" cellspacing="1" cellpadding="2" class="errortable_inner">';
  		$out_htm .= '				<tr>
  													<td>'.$user->lang['wpfc_perform_intro'].'</td>
  												</tr>
                          <tr>
                          <td> </td>
                          </tr>
                          ';
      foreach($this->plugin_array as $pluginname=>$pluginversion){
  		  $sentence = sprintf($user->lang['wpfc_pluginneedupdate'], $user->lang[$pluginname], $pluginversion, $pm->get_data($pluginname, 'version'));
  			$out_htm .= '    	<tr>
  								    		<td>
  								    			'.$sentence.'
  								    		</td>
  								    		<td>
  								    		<a href="'.$eqdkp_root_path.'/plugins/'.$pluginname.'/admin/settings.php" target="blank">'.$user->lang['wpfc_solve_dbissues'].'</a>
  								    		</td>
  								    		</tr>';
  		}
  		$out_htm .= '			</table>
  								    </td>
  								  </tr>
  								  <tr>
  								</table>
  								<br/>';
  			}else{
  				$out_htm = '';
  				}
  			return $out_htm;
  	}
  	
  	// ---------------------------------------------------------
    // Delete the Version String out of Table
    // ---------------------------------------------------------
  	function DeleteVersionString($table, $field){
  		global $db, $table_prefix;
  		$db->query("DELETE FROM ".$table." WHERE config_name='" . $field . "'");
  	}
  }
}
?>
