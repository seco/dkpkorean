<?php
 /*
 * Project:     EQdkp Plugin WPFC Classes
 * License:     Creative Commons - Attribution-Noncommercial-Share Alike 3.0 Unported
 * Link:		    http://creativecommons.org/licenses/by-nc-sa/3.0/
 * -----------------------------------------------------------------------
 * Began:       2005
 * Date:        $Date: 2008-11-07 17:12:29 +0100 (Fr, 07 Nov 2008) $
 * ----------------------------------------------------------------------- 
 * This Class is part of the "WalleniuMs Plugin (Developer) Framework Kit" WPFC. 
 * You can ask for permission and use this classes in your Plugins but not 
 * remove this Copyright  
 * -----------------------------------------------------------------------
 * @author      $Author: wallenium $
 * @copyright   2007-2008 Simon (Wallenium) Wallmann
 * @link        http://eqdkp-plus.com
 * @package     wpfc
 * @version     $Rev: 3013 $
 * 
 * $Id: html.class.php 3013 2008-11-07 16:12:29Z wallenium $
 */

if ( !defined('EQDKP_INC') ){
    header('HTTP/1.0 404 Not Found');exit;
}

if (!class_exists("wpfHTML")) {
  class wpfHTML {
  	var $html_version = '1.5.1'; // Version of this class
  	
  	function wpfHTML($pluginname, $inclpath=''){
      global $eqdkp_root_path;
  		$this->pluginname = $pluginname;
  		$this->filepath   = ($inclpath) ? $inclpath : 'include';
  		$this->imagePath  = $eqdkp_root_path.'plugins/'.$this->pluginname.'/'.$this->filepath.'/wpfc/images/';
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
          '0'   => $user->lang['wpfc_off'],
          '1'   => $user->lang['wpfc_on']
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
  	
  	function SingleDropDownMenu($id, $cssid, $menuitems, $button=''){
  	 global $eqdkp_root_path;
  	 if($button){
        $dmmenu  = '<div id="'.$id.'" class="ddcolortabs">
                    <ul>
                      <li><a href="#" rel="'.$cssid.'"><span>'.$button.' <img border="0" src="'.$this->imagePath.'down.png"/></span></a></li>
                    </ul>
                    </div>';
      }
      $dmmenu .= '<!--1st drop down menu -->                                                   
                  <div id="'.$cssid.'" class="dropmenudiv_a">';
      foreach($menuitems as $key=>$value){
        if($value['perm']){
          $dmimg = ($value['img']) ? '<img src="'.$eqdkp_root_path.'plugins/'.$this->pluginname.'/images/'.$value['img'].'" alt="" />' : '';
          $dmmenu .= '<a href="'.$value['link'].'">'.$dmimg.'&nbsp;&nbsp;'.$value['name'].'</a>';
        }
      }
      $dmmenu .= '</div>';
      $dmmenu .= '<script type="text/javascript">
                    tabdropdown.init("'.$id.'")
                  </script>';
      return $dmmenu;
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
    
    function HTMLTooltip($content, $divstyle, $icon='', $title=''){
      $output = $this->Overlib($this->TooltipStyle($content, $divstyle, $icon, $title));
      return $output;
    }
    
    function TooltipStyle($content, $divstyle, $icon='', $title=''){
      global $eqdkp_root_path;
      $output = "<div class='".$divstyle."' style='display:block'>
                  <div class='rptooldiv'>
                  <table cellpadding='0' border='0' class='borderless' width='100%'>
                  <tr>";
      
      // Header
      if($title){
        $output .= "<th>".addslashes($title)."</th>
                    </tr>
                    <tr>";
      }
      
      // Icon
      if($icon){
        $output .= "<td valign='middle' align='center'>
                      <img src='".$eqdkp_root_path."plugins/".$this->pluginname."/images/tooltip/".$icon."' alt=''/>
                    </td>";
      }
      $output .= "<td>".$content."</td>
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
