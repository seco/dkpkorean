<?php
 /*
 * Project:     EQdkp Plugin WPFC Classes
 * License:     Creative Commons - Attribution-Noncommercial-Share Alike 3.0 Unported
 * Link:		    http://creativecommons.org/licenses/by-nc-sa/3.0/
 * -----------------------------------------------------------------------
 * Began:       2005
 * Date:        $Date: $
 * ----------------------------------------------------------------------- 
 * This Class is part of the "WalleniuMs Plugin (Developer) Framework Kit" WPFC. 
 * You can ask for permission and use this classes in your Plugins but not 
 * remove this Copyright  
 * -----------------------------------------------------------------------
 * @author      $Author: $
 * @copyright   2007-2008 Simon (Wallenium) Wallmann
 * @link        http://eqdkp-plus.com
 * @package     wpfc
 * @version     $Rev: $
 * 
 * $Id: raidplan_plugin_class.php 2453 2008-07-29 11:09:49Z wallenium $
 */

if ( !defined('EQDKP_INC') ){
    header('HTTP/1.0 404 Not Found');exit;
}

if (!class_exists("PluginUpdater2")) {
  class PluginUpdater2
  {
    var $version = '2.0.2';
  	
  	// ---------------------------------------------------------
    // Construct
    // ---------------------------------------------------------
  	function PluginUpdater2($plugin_name, $db_fieldprefix, $db_table, $updfile_path){
      global $eqdkp_root_path, $db, $table_prefix;
      include($eqdkp_root_path . 'plugins/'.$plugin_name.'/'.$updfile_path.'/updates/versions.php');
      
      // Read the Version of the Database
  		$sql = "SELECT config_value FROM `".$table_prefix.$db_table."` WHERE config_name='".$db_fieldprefix."inst_version';";
      $isthere = $db->query($sql);
      $blubber = $db->fetch_record($isthere);
      
      $this->plugin_name 			= $plugin_name;
  		$this->version_field		= $db_fieldprefix.'inst_version';
  		$this->build_field		  = $db_fieldprefix.'inst_build';
  		$this->version_table		= $db_table;
  		$this->filepath 				= $updfile_path;
  		$this->inst_dbversion   = 0;
  		$this->imagePath        = $eqdkp_root_path . 'plugins/'.$this->plugin_name.'/'.$updfile_path.'/wpfc/images/';
  		$this->UpdateFilePath   = $eqdkp_root_path . 'plugins/'.$this->plugin_name.'/'.$this->filepath.'/updates/';
  		$this->Updates          = $up_updates;
      $this->dbVersion        = $blubber['config_value'];
  	}
    
    // ---------------------------------------------------------
    // Get the needed Updates
    // ---------------------------------------------------------
    function GenerateUpdates($PostVersion=''){
      $tmpversion = ($this->dbVersion) ? $this->dbVersion : $PostVersion;
      foreach ($this->Updates as $version=>$updatefile){
  			if ($version > $tmpversion){
  		    $MyUpdates[] = $updatefile['file'];
        }
  		}
  		return is_array($MyUpdates) ? $MyUpdates : '';
    }
    
    function VersionsOutput($updates){
    
    }
  	
  	// ---------------------------------------------------------
    // Perform the Updates from last version to current version
    // Perform all updates files since then in one cycle
    // If no Updates available, update version number in DB
    // ---------------------------------------------------------
  	function PerformUpdate($myversion){
  		global $user, $SID, $table_prefix, $db, $pm, $wpfcdb, $rpclass;
  		$genupdates = $this->GenerateUpdates($myversion);
  		if(is_array($genupdates)){
  		  $ni = 1;
    		foreach($genupdates as $updatefiles){
    		  $updateFunction = false;                  // unset old update function
          $updateSQL      = ($updateSQL) ? '' : ''; // unset old variable
    		  $version_file   = $this->UpdateFilePath.$updatefiles;
    			if (file_exists($version_file)) {
    				require($version_file);
    				if((is_array($this->tmpDESC))){
      				$nupdateDESC = $this->array_deletekey($updateDESC, 0);
      				$this->tmpDESC = array_merge($this->tmpDESC,$nupdateDESC);
    				}else{
    				  $this->tmpDESC = $updateDESC;
    				}
    				
    				// Perform each update Step
    				if(is_array($updateSQL)){
      				foreach($updateSQL as $value) {
      					$outp['steps'][$ni] = ($db->query($value)) ? 1 : 0;
      					$ni++;
      				}
      			}
    				$outp['error'] = 'ok';
    			}else{echo 'ttt';
            $outp['error'] = 'file';
          }
    			
          // Update Function if available
          if($updateFunction){
      			if (function_exists($updateFunction)){
      				$updateFunction();
      			}
    			}
        } // end of foreach
      }
      
      // Update the Version in the table
      $mytmpgversion = ($new_version) ? $new_version : $pm->get_data($this->plugin_name, 'version');
  		$this->UpdateConfig($this->version_table, $mytmpgversion ,$this->version_field);
  		if($pm->plugins[$this->plugin_name]->build){
        $this->UpdateConfig($this->version_table, $pm->plugins[$this->plugin_name]->build ,$this->build_field);
      }
  		return $outp;
  	}
  	
  	// ---------------------------------------------------------
    // HTML Form 
    // ---------------------------------------------------------
  	function OutputForm(){
  		global $pm, $user, $eqdkp_root_path;
  		
  		// generate the Manual Updates Array
  		foreach($this->Updates as $newversion=>$mydata){
  		  $manualvarray[$mydata['old']] = sprintf($user->lang['puc_update_txt'],$mydata['old'],$newversion);
  		}
  		
  		// Perform the available Updates..
  		if ($_POST['rpupdte']){
  			$update_ok = $this->PerformUpdate($_POST['updater_version']);
  			if($update_ok['error'] == 'ok'){
  				$this->upd_output = '';
  				if(count($update_ok['steps']) > 0){
    				foreach($update_ok['steps'] as $nomb=>$updstep) {
    					$this->upd_output .= $this->StepName($nomb,$this->tmpDESC[$nomb],$updstep);
    				}
  				}
  				$this->upd_output   .= $this->Colors($user->lang['puc_upd_ok']);
  				$this->upd_img_out  = $this->imagePath.'ok.png';
  			}elseif($update_ok['error'] == 'file'){
  				$this->upd_output   = $this->Colors($user->lang['puc_upd_no_file'],'false');
  				$this->upd_img_out  = $this->imagePath.'false.png';
  			}else{
  				$this->upd_output   = $this->Colors($user->lang['puc_upd_glob_error'],'false');
  				$this->upd_img_out  = $this->imagePath.'false.png';
  			}
  			$this->ShowUpdate = 'true';
  		// List the Updates and ask for OK...
      }else{
        $check_if_update    = $this->GenerateUpdates($this->dbVersion);
        $this->upd_img_out  = $this->imagePath.'updates.png';
        $shw_version        = ($this->dbVersion) ? $this->dbVersion : $user->lang['puc_upd_unknown'];
        
        // show the manual Dropdown
        if ($manualvarray != '' && !$this->dbVersion){
          $v_input =  '<select name="updater_version" class="input">';
          foreach($manualvarray as $key=>$value){
            $selected_choice = ($key == end(array_keys($manualvarray))) ? 'selected' : '';
            $v_input .= '<option value="'.$key.'" '.$selected_choice.'>'.$value.'</option>';
          }
          $v_input .= '</select>';
          $this->ShowUpdate = 'true';
        // Use the automatic Update
        }else{
          $this->ShowUpdate = $check_if_update;
          $v_input = '<input type="hidden" name="updater_version" size="32" value="'.$this->dbVersion.'" class="input" />';
  		  }
  
  		  $this->upd_output = $user->lang['puc_upd_txt1'].$shw_version.
										        $user->lang['puc_upd_txt2'].$pm->get_data($this->plugin_name, 'version').
  										      $user->lang['puc_upd_txt3'].'<br/><br/><center>'.$v_input.' '.
  										      '<input type="submit" name="rpupdte" value="'.
  										      $user->lang['puc_upd_bttn'].'" class="mainoption" /></center>';
      }
  		$this->inst_dbversion = $this->dbVersion;
  	}
  
    // ---------------------------------------------------------
    // HTML Output
    // ---------------------------------------------------------
  	function OutputHTML(){
  		global $user,$pm;
  		$this->OutputForm();
      if (!$this->inst_dbversion || $this->inst_dbversion != $pm->get_data($this->plugin_name, 'version') || $_POST['rpupdte']){
        if($this->ShowUpdate){
          $out_htm = '<form method="post" action="'.$_SERVER['PHP_SELF'].'" name="updater">
    								<table width="100%" border="0" cellspacing="1" cellpadding="2">
      								<tr>
        								<th align="center" colspan="2">'.$user->lang['puc_update_box'].'</th>
      								</tr>
      								<tr>
        								<td class="row1" width ="48px"><img src="../images/'.$this->upd_img_out.'" align="absmiddle" alt="Status" /></td>
        								<td class="row1">'.$this->upd_output.'</td>
      								</tr>
      								<tr>
    								</table>
    								</form>
    								<br/>';
  		  }else{
          // Minor update, update version number in Database
          $this->UpdateConfig($this->version_table, $pm->get_data($this->plugin_name, 'version') ,$this->version_field);
      		if($pm->plugins[$this->plugin_name]->build){
            $this->UpdateConfig($this->version_table, $pm->plugins[$this->plugin_name]->build ,$this->build_field);
          }
        }
      }else{
  			$out_htm = '';
  		}
  		return $out_htm;
  	}
  	
  	// ---------------------------------------------------------
    // Color Management
    // ---------------------------------------------------------
  	function Colors($value, $status='ok'){
      $color  = ($status == 'ok') ? 'green' : 'red';
      return '<div style="color:'.$color.'">'.$value.'</div>';
    }
  	
  	// ---------------------------------------------------------
    // The Update Step Output
    // ---------------------------------------------------------
  	function StepName($nomb, $upddesc, $success){
      global $user;
      if($success == 1){
        $tmp_img  = $this->imagePath.'done_small.png" alt="'.$user->lang['puc_upd_step_ok'].'"';
      }else{
        $tmp_img  = $this->imagePath.'false_small.png" alt="'.$user->lang['puc_upd_step_false'].'"';
      }
      $tmp_desc = ($upddesc) ? $upddesc : $user->lang['puc_upd_stp_unknwn'];
      return '<div>'.$user->lang['puc_upd_step'].' '.$nomb.' - '.$tmp_desc.': <img src="'.$tmp_img.' /></div>';
    }
  	
  	// ---------------------------------------------------------
    // Delete the Version String out of Table
    // ---------------------------------------------------------
  	function DeleteVersionString(){
  		global $db, $table_prefix;
  		$db->query("DELETE FROM ".$table_prefix.$this->version_table." WHERE config_name='" . $this->version_field . "'");
  	}
  	
  	// ---------------------------------------------------------
    // Write the config to the table
    // ---------------------------------------------------------
  	function UpdateConfig($table, $value, $key){
      global $table_prefix, $db;
      $sql = "SELECT config_name FROM `".$table_prefix.$table."` WHERE config_name='".$key."';";
      $isthere = $db->query($sql);
      $blubber = $db->fetch_record($isthere);
      if (!$blubber['config_name']){
        $sql = "INSERT INTO `".$table_prefix.$table."` ( `config_name` ) VALUES ('".$key."');";
        $blubb = $db->query($sql);	
      }
          
      $sql = "UPDATE `".$table_prefix.$table."` SET config_value='".strip_tags(htmlspecialchars($value))."' WHERE config_name='".$key."';";
      $blubb = $db->query($sql);
    }
    
    // ---------------------------------------------------------
    // Delete an Entry of an array
    // ---------------------------------------------------------
    function array_deletekey($oldArr,$keyid){
      $newArr=array();
      for($i=0; $i<count($oldArr); $i++):
      if ($i!=$keyid) array_push($newArr,$oldArr[$i]);
      endfor;
      return $newArr;
    } 
  }
}
?>
