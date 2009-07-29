<?php
 /*
 * Project:     eqdkpPLUS Libraries: pluginUpdates
 * License:     Creative Commons - Attribution-Noncommercial-Share Alike 3.0 Unported
 * Link:		    http://creativecommons.org/licenses/by-nc-sa/3.0/
 * -----------------------------------------------------------------------
 * Began:       2009
 * Date:        $Date: 2009-05-08 14:41:41 +0200 (Fr, 08 Mai 2009) $
 * -----------------------------------------------------------------------
 * @author      $Author: wallenium $
 * @copyright   2009 Simon (Wallenium) Wallmann
 * @link        http://eqdkp-plus.com
 * @package     libraries:pluginUpdates
 * @version     $Rev: 4799 $
 * 
 * $Id: pluginUpdates.class.php 4799 2009-05-08 12:41:41Z wallenium $
 */

if ( !defined('EQDKP_INC') ){
    header('HTTP/1.0 404 Not Found');exit;
}

if (!class_exists("pluginUpdates")) {
  class pluginUpdates
  {
  	var $show_warn = false;
  	var $version   = '1.0.0';
  	
  	function pluginUpdates(){
  		global $pm, $db, $table_prefix, $eqdkp_root_path, $user;
  		
  		// Check Pluginversions
  		require_once($eqdkp_root_path.'libraries/pluginUpdates/pluginlist.php');
  		$this->plugin_array = array();
  		if(is_array($plugin_names)){
    		foreach($plugin_names as $plugg=>$dbfields){
    		  $myvfiles = array();
    		  $last_entry = '';
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
    				
    				// Check if the Versions are equal
    				if($pm->get_data($plugg, 'version') > $myvfiles['version']){
    				
    				  // Load the version file array
    				  $vfile = $eqdkp_root_path.'plugins/'.$plugg.'/'.$dbfields['inclfolder'].'/updates/versions.php';
    				  if(is_file($vfile)){
    				    include($vfile);
    				    if(count($up_updates) > 0){
                  $last_entry = max(array_keys($up_updates));
                }
    				    
      				  // Check if there's a database upgrade file
      				  //if($last_entry != '' && $last_entry >= $myvfiles['version']){
      				  if($last_entry != '' && $last_entry > $myvfiles['version']){
        					$this->plugin_array[$plugg]  = array(
        							'version'		=> (($myvfiles['version']) ? $myvfiles['version'] : $user->lang['cl_unknown']),
        							'redirect'	=> $dbfields['redirect'],
        					);
        					$this->show_warn       = true;
      					}
    					}
    				}
    			}
    		}
  		}
  	}
  	
  	function OutputHTML(){
  		global $user, $pm, $eqdkp_root_path;
  		if ($this->show_warn && $user->check_auth('a_', false)){
  		$out_htm = $this->myCSS();
  		$out_htm .= '<table width="100%" border="0" cellspacing="0" cellpadding="2" class="errortable">
  								  <tr>
  								    <td class="row1" width ="48px"><img src="'.$eqdkp_root_path.'libraries/pluginUpdates/images/false.png" /></td>
  								    <td class="row1">
  								    	<table width="100%" border="0" cellspacing="1" cellpadding="2" class="errortable_inner">';
  		$out_htm .= '				<tr>
  													<td>'.$user->lang['puc_perform_intro'].'</td>
  												</tr>
                          <tr>
                          <td> </td>
                          </tr>
                          ';
      foreach($this->plugin_array as $pluginname=>$pluginversion){
  		  $sentence = sprintf($user->lang['puc_pluginneedupdate'], $user->lang[$pluginname], $pluginversion['version'], $pm->get_data($pluginname, 'version'));
  			$out_htm .= '    	<tr>
  								    		<td>
  								    			'.$sentence.'
  								    		</td>
  								    		<td>
  								    		<a href="'.$eqdkp_root_path.'plugins/'.$pluginname.'/admin/'.$pluginversion['redirect'].'" target="blank">'.$user->lang['puc_solve_dbissues'].'</a>
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
  	
  	function myCSS(){
      $csss = '<style type="text/css">
                  TABLE.errortable { 
                    border-top: 1px;
                    border-bottom: 1px;
                    border-left: 1px;
                    border-right: 1px;
                    border-color: red; 
                    border-style: solid;
                    background: #FFEFEF;
                  }
                  
                  TABLE.errortable_inner { 
                    background: #FFEFEF;
                    border: 0;
                  }
                  
                  TABLE.errortable td{
                  	color:red;
                  	background: #FFEFEF;
                  	padding: 5px;
                  }
                  
                  TABLE.errortable th{
                  	color:white;
                  	background: red;
                  }
        </style>';
      return $csss;
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
