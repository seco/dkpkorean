<?php
 /*
 * Project:     eqdkpPLUS Libraries: pluginCore
 * License:     Creative Commons - Attribution-Noncommercial-Share Alike 3.0 Unported
 * Link:		    http://creativecommons.org/licenses/by-nc-sa/3.0/
 * -----------------------------------------------------------------------
 * Began:       2008
 * Date:        $Date: 2008-11-27 00:00:58 +0900 (목, 27 11 2008) $
 * -----------------------------------------------------------------------
 * @author      $Author: wallenium $
 * @copyright   2008 Simon (Wallenium) Wallmann
 * @link        http://eqdkp-plus.com
 * @package     libraries:pluginCore
 * @version     $Rev: 3262 $
 * 
 * $Id: html.class.php 3262 2008-11-26 15:00:58Z wallenium $
 */

if ( !defined('EQDKP_INC') ){
    header('HTTP/1.0 404 Not Found');exit;
}

if (!class_exists("myHTML")) {
  class myHTML {  	
  	function myHTML($pluginname){
      global $eqdkp_root_path;
  		$this->pluginname = $pluginname;
  		$this->imagePath  = $eqdkp_root_path.'libraries/pluginCore/images/';
  	}
  	
  	function DropDown($name, $list, $selected, $text='', $javascr = '', $class = 'input'){
  		( $text != '' ) ? $dropdown = $text.": " : '';
  		$dropdown  .= "<select size='1' ".$javascr." name='".$name."' id='".$name."' class='".$class."'>";
  		if($list){
  			foreach ($list as $key => $value) {
  				$selected_choice = ($key == $selected) ? 'selected' : '';
  				$dropdown .= "<option value='".$key."' ".$selected_choice.">".$value."</option>";
  			}
  		}
  		$dropdown .= "</select>";
  		return $dropdown;
  	}
  	
  	function MultiSelect($name, $list, $selected, $text='', $javascr = '', $class = '', $size=4){
  		( $text != '' ) ? $dropdown = $text.": " : '';
  		$dropdown  .= "<select size='".$size."' ".$javascr." name='".$name."[]' class='".$class."' multiple>";
  		$selected = explode("|", $selected);
  		if($list){
  			foreach ($list as $key => $value) {
  				$selected_choice = (in_array($key, $selected)) ? 'selected' : '';
  				$dropdown .= "<option value='".$key."' ".$selected_choice.">".$value."</option>";
  			}
  		}
  		$dropdown .= "</select>";
  		return $dropdown;
  	}
  	
  	function RadioBox($name, $list, $selected, $class = 'input'){
  	  global $user;
  		$radiobox  = '';
  		if(!is_array($list)){
  		  $list = array (
          '0'   => $user->lang['cl_off'],
          '1'   => $user->lang['cl_on']
        );
  		}
  			foreach ($list as $key => $value) {
  				$selected_choice = ($key == $selected) ? 'checked' : '';
  				$radiobox .='<input type="radio" name="'.$name.'" value="'.$key.'" '.$selected_choice.'>'.$value;
  			}
  		return $radiobox;
  	}
  	
  	function CheckBox($name, $langname, $options, $help='', $value='1'){
  			$is_checked = ( $options == 1 ) ? 'checked' : '';
  			$check = "&nbsp;&nbsp;".$this->HelpTooltip($help);
  			$check .= "<input type='checkbox' name='".$name."' value='".$value."' ".$is_checked." /> ".$langname;
  			return $check;
  	}
  	
  	function HelpTooltip($help){
  		global $user, $eqdkp_root_path;
  		if ($help != ''){
  		  $helptt .= '<a '.$this->HTMLTooltip($help, 'rp_tt_help')."><img src='".$this->imagePath."help_small.png' border='0' alt='' align='absmiddle' /></a>";
  		}else{
  			$helptt = '';
  		}
  		return $helptt;
  	}
  
  	function WarnTooltip($help){
  		global $user, $eqdkp_root_path;
  		$helptt .= '<a '.$this->HTMLTooltip($help, 'rp_tt_warn')."><img src='".$this->imagePath."warn_small.png' border='0' alt='' align='absmiddle' /></a>";
  		return $helptt;
  	}
    
    function Overlib($tt){
      $tt = html_entity_decode($tt);
      $tt = str_replace('&#039;', "'", $tt);
      $tt = str_replace('"', "'", $tt);
      $tt = str_replace(array("\n", "\r"), '', $tt);
      $tt = addslashes($tt);
      $output = 'onmouseover="return overlib(' . "'" . $tt . "'" . ', MOUSEOFF, HAUTO, VAUTO,  FULLHTML, WRAP);" onmouseout="return nd();"';
      return $output;
    }
    
    function HTMLTooltip($content, $divstyle, $icon=''){
      $output = $this->Overlib($this->TooltipStyle($content, $divstyle, $icon));
      return $output;
    }
    
    function TooltipStyle($content, $divstyle, $icon=''){
      global $eqdkp_root_path;
      $output = "<div class='".$divstyle."' style='display:block'>
                  <div class='rptooldiv'>
                  <table cellpadding='0' border='0' class='borderless'>
                  <tr>";
      if($icon){
        $output .= "<td valign='middle' width='70px' align='center'>
                      <img src='".$eqdkp_root_path."plugins/".$this->pluginname."/images/tooltip/".$icon."' alt=''/>
                    </td>";
      }
      $output .= "<td>
                    ".$content."
                    
                  </td>
                  </tr>
                  </table></div></div>";
      return $output;
    }
    
    // Prevent XSS and other stupid things..
    function CleanInput($input){
      // remove HTML & PHP Tags
      $output = html_entity_decode($input);
      $output = strip_tags($output);
      
      // Secure against XSS
      $output = htmlentities($output, ENT_QUOTES);
      return $output;
    }
  }
} 
?>
