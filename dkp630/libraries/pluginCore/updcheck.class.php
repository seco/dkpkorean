<?php
 /*
 * Project:     eqdkpPLUS Libraries: pluginCore
 * License:     Creative Commons - Attribution-Noncommercial-Share Alike 3.0 Unported
 * Link:		    http://creativecommons.org/licenses/by-nc-sa/3.0/
 * -----------------------------------------------------------------------
 * Began:       2008
 * Date:        $Date: 2009-02-06 09:24:16 +0900 (금, 06 2 2009) $
 * -----------------------------------------------------------------------
 * @author      $Author: wallenium $
 * @copyright   2008 Simon (Wallenium) Wallmann
 * @link        http://eqdkp-plus.com
 * @package     libraries:pluginCore
 * @version     $Rev: 3754 $
 * 
 * $Id: updcheck.class.php 3754 2009-02-06 00:24:16Z wallenium $
 */

if ( !defined('EQDKP_INC') ){
    header('HTTP/1.0 404 Not Found');exit;
}

if (!class_exists("PluginUpdCheck")) {
  class PluginUpdCheck
  {  	
  	function PluginUpdCheck($plugininfo, $cachedb){
  	  global $table_prefix, $eqdkp_root_path, $pm;
  		$this->server_link 			= "http://vcheck.eqdkp-plus.com"; // edit if changed!
  		$this->server_name			= substr($this->server_link, 7);
  		$this->plugin_name 			= $plugininfo['name'];
  		$this->act_version			= $plugininfo['version'];
  		$this->act_build        = $plugininfo['build'];
  		$this->updcheck_on			= $plugininfo['enabled'];
  		$this->imagePath        = $eqdkp_root_path.'libraries/pluginCore/images/';
  		$this->vstatus          = ($plugininfo['vstatus']) ? strtolower($plugininfo['vstatus']) : 'stable';
  		
  		// The Cache Table Settings
  		$this->update_offset    = 48; // Re-Check after xxx hours
  		$this->table            = $table_prefix.$cachedb['table'];
  		$this->lastcheck        = $cachedb['lastcheck'];
  		$this->f_lastcheck      = $cachedb['f_lastcheck'];
  		$this->cache_data       = $cachedb['data'];
  		$this->f_data           = $cachedb['f_data'];
  	}
  	
  	function checklink($url){
    	if($url){
    		$ipaddr = gethostbyname($this->server_name);
    		if($ipaddr == $url){
     			return false;
    		}else{
    			if (!$x = fsockopen($ipaddr, 80, $errno, $errstr, 5)){ // attempt to connect
    				return false;
  				}else{
          	return true;
            if ($x){
            	@fclose($x); //close connection (i dont know if this is needed or not).
            }
   				}
    		}
    	}
  	}
  	
  	function PerformUpdateCheck(){
  		global $eqdkp_root_path, $user;
  		if($this->updcheck_on){
  		  // When was the last update?
        if ($this->lastcheck && $this->lastcheck > (time()-($this->update_offset*60*60))){
          // Take the version out of the database...
          $getdata = $this->cache_data;
        }else{
    		  // Check if the Server is online
    			if($this->checklink($this->server_link)){
            // generate the proper link
            if($this->vstatus == 'beta' || $this->vstatus == 'alpha'){
              $tmpserverlink = $this->server_link.'/beta/version/'.$this->plugin_name;
            }else{
              $tmpserverlink = $this->server_link.'/version/'.$this->plugin_name;
            }
    			
            // get the version Data:
        		if(function_exists('curl_init')){
        			$ch = curl_init();
    					curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    					curl_setopt($ch, CURLOPT_URL, $tmpserverlink);
    					$getdata = curl_exec($ch);
    					curl_close($ch);
        		}elseif (function_exists('file_get_contents')){
    					$getdata = @file_get_contents($tmpserverlink);
    				}else{
    					$pparray = file ($tmpserverlink);
    					$getdata = $pparray[0];
    				}
    				// insert into cache db field
    				$bladada = array(
                $this->f_lastcheck  => time(),
                $this->f_data       => $getdata
            );
    				$this->InsertCacheData($bladada);
    			}else{ // Server is offline
            $this->updchk_output = $user->lang['cl_noserver'];
            $this->updchk_window =true;
    			} // end if availability check
    		} // end if time check
    		$parse = explode('|', $getdata);
    		$versions['version'] = $parse[0];
    		$versions['level'] = $parse[1];
    		$versions['changelog'] = $parse[2];
    		$versions['download'] = $parse[3];
    		$versions['release'] = $parse[5];
    		$versions['name'] = $parse[6];
    		$versions['build'] = $parse[7];
        if($versions['version'] > $this->act_version || $versions['build'] > $this->act_build){
          $myTmpVersion1  = ($this->act_build) ?  $this->act_version.' [#'.$this->act_build.']' : $this->act_version;
          $myTmpVersion2  = ($versions['build']) ? $versions['version'].' [#'.$versions['build'].']' : $versions['version'];
          $myDLlink       = ($versions['download']) ? "<br/><a target='_blank' href='".$versions['download']."'>".$user->lang['cl_update_url']."</a>" : '';
          $myCLlink       = ($versions['changelog']) ? "<br/><a target='_blank' href='".$versions['changelog']."'>".$user->lang['cl_changelog_url']."</a>" : '';
          $this->updchk_output  = sprintf($user->lang['cl_update_available'], $this->plugin_name, $myTmpVersion1, $myTmpVersion2, date($user->lang['cl_timeformat'], $versions['release']), $versions['level'], $myDLlink, $myCLlink);
          $this->updchk_window = true;
        }else{
          $this->updchk_output = "";
          $this->updchk_window = false;
        }
  		} // end updatecheck on
  	}
  
  	function OutputHTML(){
  		global $user, $eqdkp_root_path;
  		if ( $this->updchk_window){
  		$out_htm = '<table width="100%" border="0" cellspacing="1" cellpadding="2">
    								<tr>
      								<th align="center" colspan="2">'.$user->lang['cl_update_box'].'</th>
   	 								</tr>
    								<tr>
      								<td class="row1" width ="48px"><img src="'.$this->imagePath.'false.png" align="absmiddle" /></td>
      								<td class="row1"><font color="red">'.$this->updchk_output.'</font></td>
    								</tr>
    								<tr>
  								</table>
  								<br/>';
  			}else{
  				$out_htm = '';
  				}
  			return $out_htm;
  	}
  	
  	function InsertCacheData($array){
      global $db;
      foreach($array as $field=>$value){
        $delsql = "DELETE FROM ".$this->table." WHERE config_name= '".$field."'";
        $db->query($delsql);
        $sql = "INSERT INTO `" . $this->table . "` ( `config_name`, `config_value` ) VALUES ('".$field."', '".$value."');";
        $blubb = $db->query($sql);
      }
    }
  } // END OF CLASS
}
?>
