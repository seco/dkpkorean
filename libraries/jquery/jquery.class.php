<?php
 /*
 * Project:     eqdkpPLUS Libraries: jQuery
 * License:     Creative Commons - Attribution-Noncommercial-Share Alike 3.0 Unported
 * Link:		    http://creativecommons.org/licenses/by-nc-sa/3.0/
 * -----------------------------------------------------------------------
 * Began:       2008
 * Date:        $Date: 2009-04-27 23:18:19 +0200 (Mo, 27 Apr 2009) $
 * -----------------------------------------------------------------------
 * @author      $Author: wallenium $
 * @copyright   2008 Simon (Wallenium) Wallmann
 * @link        http://eqdkp-plus.com
 * @package     libraries:jquery
 * @version     $Rev: 4679 $
 * 
 * $Id: jquery.class.php 4679 2009-04-27 21:18:19Z wallenium $
 */
 
if ( !defined('EQDKP_INC') ){
    header('HTTP/1.0 404 Not Found');exit;
}

if (!class_exists("jquery")) { 
  class jquery {
    
    var $version  = '2.0.1';
    
    /**
    * Initialize the Class
    * 
    * @param $path    Set the path to the wpfc folder
    * @param $lang    The languagefiles to include
    * @return CHAR
    */
    function jquery(){
      global $eqdkp_root_path, $user;
      $this->path = $eqdkp_root_path.'libraries/jquery/';
      
      // Should the jQuery thing be included again?
      $this->am_i_plus    = (@constant("EQDKPPLUS_VERSION")) ? true : false;
      
      // Include me array
      $css_array  = array(
            'jbox'        => 'jbox.css',
            'confirm'     => 'confirm.css',
            'colorpicker' => 'colorpicker.css',
            'humanmssg'   => 'humanmsg.css',
            'growl'       => 'jquery.jgrowl.css',
            'autocomplet' => 'jquery.autocomplete.css',
            'bbcode'      => 'markitup/bbcode/style.css',
            'marktipup'   => 'markitup/style.css',
            'drpdwnselect'=> 'ui.dropdownchecklist.css',
            
            // jQuery UI
            'datepicker'  => 'ui.datepicker.css',
            'tabs'        => 'ui.tabs.css',
      );
      
      // All i need is jQuery... (TM)
      $js_array = array(
            'core'          => array(
                                'file'    => 'jquery.min.js',
                                'plus'    => true,
                                'nonplus' => true,
                            ),
            'jquery.ui'     =>  array(
                                'file'    => 'jquery.ui.all.min.js',
                                'plus'    => true,
                                'nonplus' => true,
                            ),
             
            // PLUS only          
            'autocomplet'   =>  array(
                                'file'    => 'jquery.autocomplete.min.js',
                                'plus'    => true,
                                'nonplus' => false,
                            ),
            'form'          =>  array(
                                'file'    => 'jquery.form.js',
                                'plus'    => true,
                                'nonplus' => false,
                            ),
            'markitup'      =>  array(
                                'file'    => 'jquery.markitup.pack.js',
                                'plus'    => true,
                                'nonplus' => false,
                            ),
            'bbcode'        =>  array(
                                'file'    => 'bbcode/set.js',
                                'plus'    => true,
                                'nonplus' => false,
                            ),
            'collapse'      =>  array(
                                'file'    => 'jquery.contentswitch.js',
                                'plus'    => true,
                                'nonplus' => false,
                            ),
            'hoverintent'   =>  array(
                                'file'    => 'jquery.hoverIntent.min.js',
                                'plus'    => true,
                                'nonplus' => false,
                            ),
            'slidingpanel'  =>  array(
                                'file'    => 'jquery.slidingPanels.js',
                                'plus'    => true,
                                'nonplus' => false,
                            ),
            
            // Load always
             'jbox'         =>  array(
                                'file'    => 'jquery.jbox.js',
                                'plus'    => true,
                                'nonplus' => true,
                            ),
             'humanmssg'    =>  array(
                                'file'    => 'jquery.humanmsg.js',
                                'plus'    => true,
                                'nonplus' => true,
                            ),
             'growl'        => array(
                                'file'    => 'jquery.jgrowl.min.js',
                                'plus'    => true,
                                'nonplus' => true,
                            ),
             'ipromptu'     =>  array(
                                'file'    => 'jquery.impromptu.js',
                                'plus'    => true,
                                'nonplus' => true,
                            ),
             'contextmenu'  =>  array(
                                'file'    => 'jquery.contextmenu.js',
                                'plus'    => true,
                                'nonplus' => true,
                            ),
             'colorpicker'  =>  array(
                                'file'    => 'jquery.colorpicker.js',
                                'plus'    => true,
                                'nonplus' => true,
                            ),
             'drpdwnselect' =>  array(
                                'file'    => 'ui.dropdownchecklist.js',
                                'plus'    => true,
                                'nonplus' => true,
                            ),
             'dropdownmenu' =>  array(
                                'file'    => 'jquery.droppy.js',
                                'plus'    => true,
                                'nonplus' => true,
                            ),
             'ajaxfileupl'  =>  array(
                                'file'    => 'ajaxfileupload.js',
                                'plus'    => true,
                                'nonplus' => true,
                            ),
      );
      
      // Generate the Output
      $this->headerr = '';
      if(!defined('JQUERY_LOADED')){
        foreach($css_array as $filename){
          $this->headerr .= "<link rel='stylesheet' href='".$this->path."css/".$filename."' type='text/css'>";
        }
        
        foreach($js_array as $filename){
          if(($this->am_i_plus && $filename['plus']) || (!$this->am_i_plus && $filename['nonplus'])){
            $this->headerr .= "<script language='javascript' src='".$this->path."javascript/".$filename['file']."'></script>";
          }
        }
        
        if($user->lang['cl_shortlangtag'] != 'en'){
          $js_cal_language = $this->path."javascript/lang/ui.datepicker-".$user->lang['cl_shortlangtag'].".js";
          if(file_exists($js_cal_language)){
            $this->headerr .= "<script language='javascript' src='".$js_cal_language."'></script>";
          }
        }
        
        $this->headerr .= "<script>
                            var jImages={
                              imgs:['".$this->path."images/min.gif', '".$this->path."images/close.gif', '".$this->path."images/restore.gif','".$this->path."images/resize.gif']
                            }
                          </script>";
        define('JQUERY_LOADED', true);
      }
    }
    
    /**
    * Return the Header for file include
    * 
    * @return CHAR
    */
    function Header(){
      return $this->headerr;
    }
    
    /**
    * Alert Window (direct)
    * 
    * @param $name    Name/ID of the window (must be unique)
    * @param $msg     The Message to show in Alert
    * @param $width   The width of the alert window
    * @param $height  The height of the alert window
    * @return CHAR
    */
    function Dialog_Alert($name, $msg, $width="600", $height="300"){
      $jscode = "function ".$name."Alert() {
                  jBox.alert('".$msg."', ".$width.", ".$height.");
                }";
      return $jscode;
    }
    
    /**
    * Alert Window (indirect)
    * 
    * @param $width   the width of the alert window
    * @param $height  the height of the alert window
    * @return CHAR
    */
    function Dialog_Alert2($width=300, $height=100){
      $jscode = "function DisplayErrorMessage(errmsg){
                  jBox.alert(errmsg, ".$width.", ".$height.");
                }";
      return $jscode;
    }
    
    /**
    * Close Dialog by Name/ID
    * 
    * @param $id        The Name/ID of the window to be closed
    * @param $tags      Add the <script> tags to the output?
    * @param $parent    Use the parent tag, use this if you want to close an window from main page
    * @param $function  Output as a JavaScript function
    * @return CHAR
    */
    function Dialog_close($id, $tags=false, $parent=true, $function=false){
      $jscode  = ($tags) ? "<script language=\"JavaScript\" type=\"text/javascript\">" : "";
      $jscode .= ($function) ? 'function closeWindow(){' : '';
      $parenttag = ($parent) ? "parent." : '';
      if(is_array($id)){
        foreach($id as $realid){
          $jscode .= $parenttag."jBox.close2('".$realid."');";
        }
        $jscode .= ($function) ? '}' : '';
        $jscode .= ($tags) ? "</script>" : "";
        return $jscode;
      }else{
        return false;
      }
    }
    
    /**
    * Window with iFrame & URL
    * 
    * @param $name      Name/ID of the window (must be unique)
    * @param $title     The Title of the window, shown in Header
    * @param $url       The URL to show in the iFrame
    * @param $height    The width of the alert window
    * @param $height    The height of the alert window
    * @param $onclose   URL of page to redirect onClose, if empty, no redirect
    * @param $minimize  Window minimizable? (true/false)
    * @param $modal     Window modal, rest of page greyed out? (true/false)
    * @param $scrolling Window scrollable? (true/false)
    * @param $resize    Window resizable? (true/false)
    * @param $draggable Window dragable? (true/false)
    * @return CHAR
    */
    function Dialog_URL($name, $title, $url, $width="600", $height="300", $onclose='', $minimize="true", $modal="false", $scrolling="true", $resize="true", $draggable="true"){
      $jscode  = "var box".$name." = jBox.open('".$name."','iframe','".$url."','".$title."','width=".$width.",height=".$height.",center=true,minimizable=".$minimize.",resize=".$resize.",draggable=".$draggable.",model=".$modal.",scrolling=".$scrolling."');";
      $jscode .= ($onclose) ? "box".$name.".onClosed = function(){ window.location.href = '".$onclose."';}" : '';
      return $jscode;
    }
    
    /**
    * Confirm Dialog
    * 
    * @param $name    Name/ID of the window (must be unique)
    * @param $text    The Message to show in Confirm dialog
    * @param $jscode  The javaScript Code to perform on confirmation
    * @return CHAR
    */
    function Dialog_Confirm($name, $text, $jscode, $withid=''){
      global $user;
      $myTrueButton = ($withid) ? $withid : 'true';
      $jscode = "function submit_".$name."(v,m){
                  if(v){
                    ".$jscode."
                  }
                  return true;
                }
                
                function ".$name."(".$withid."){
                  $.prompt('".$text."', {
                            buttons:{ ".$user->lang['cl_bttn_ok'].": ".$myTrueButton.", ".$user->lang['cl_bttn_cancel'].": false },
                            submit: submit_".$name.",
                            prefix:'cleanblue',
                            show:'slideDown'}
                          );
                }
                ";
          return $jscode;
    }
  
    /**
    * Horizontal Accordion
    * 
    * @param $name    Name/ID of the accordion (must be unique)
    * @param $list    Content array in the format: title => content
    * @return CHAR
    */  
    function Accordion($name, $list){
      $jscode   = "<script>
                    jQuery('#".$name."').accordion({
                        header: '.title',
                        autoHeight: false
                      });
                  </script>";
      $acccode   = '<div id="'.$name.'">';
      foreach($list as $title=>$content){
        $acccode  .= '<div>
                        <div class="title">'.$title.'</div>
                        <div class="content">'.$content.'</div>
                      </div>';
      }
      $acccode  .= '</div>';
      return $acccode.$jscode;
    }
    
    /**
    * Humanized Messages
    * 
    * @param $name    Name/ID of the accordion (must be unique)
    * @param $list    Content array in the format: title => content
    * @return CHAR
    */  
    function HumanMsg($content){
      $jscode   = "jQuery(document).ready(function() {";
      $jscode  .= "humanMsg.displayMsg('".$content."');";
      $jscode  .= "})";
      return $jscode;
    }
    
    /**
    * Growl Messages
    * 
    * @param $mssg      The Message to show
    * @param $options   Option List: life,sticky,speed, header,theme
    * @return CHAR
    */  
    function Growl($mssg, $options){
      $jsoptions = array();
      if(is_array($options)){
        if($options['life']){$jsoptions[] = "life: '".$options['life']."'";}
        if($options['sticky']){$jsoptions[] = "sticky: true";}
        if($options['speed']){$jsoptions[] = "speed: '".$options['speed']."'";}
        if($options['header']){$jsoptions[] = "header: '".$options['header']."'";}
        if($options['theme']){$jsoptions[] = "theme: '".$options['theme']."'";}
      }else{
        $jsoptions[] = 'sticky: true';
      }
      
      $jscode = 'jQuery(document).ready(function(){
                  $.jGrowl("'.$this->SanatizeJStext($mssg).'", { '.implode(", ", $jsoptions).' });
                });';
      return $jscode;
    }
    
    /**
    * Date Picker
    * 
    * @param $name    Name/ID of the calendar (must be unique)
    * @param $value   Value for the input field
    * @param $options Array with Options for calendar
    * @return CHAR
    */  
    function Calendar($name, $value, $jscode='', $options=''){
      $html       = '<input type="text" id="cal_'.$name.'" name="'.$name.'" value="'.$value.'" size="15" '.$jscode.' />';
      $MySettings = ''; $dpSettings = array();
      
      // Load default settings if no custom ones are defined..
      $options['format'] = ($options['format']) ? $options['format'] : 'dd.mm.yy';
      $options['cal_icons'] = ($options['cal_icons']) ? $options['cal_icons'] : true;
      
      // Options
      if($options['format'] != ''){
        $dpSettings[] = "dateFormat: '".$options['format']."'";
      }
      if($options['change_fields']){
        $dpSettings[] = 'changeMonth: true, changeYear: true';
      }else{
        $dpSettings[] = 'changeMonth: false, changeYear: false';
      }
      if($options['cal_icons']){
        $dpSettings[] = "showOn: 'button', buttonImage: '".$this->path."images/calendar.png', buttonImageOnly: true";
      }
      if($options['show_buttons']){
        $dpSettings[] = "showButtonPanel: true";
      }
      if($options['number_months'] && $options['number_months'] > '1'){
        $dpSettings[] = "numberOfMonths: ".$options['number_months'];
      }
      if($options['year_range'] != ''){
        $dpSettings[] = "yearRange: '".$options['year_range']."'";
      }
      if($options['other_months']){
        $dpSettings[] = "showOtherMonths: true";
      }
      
      if(count($dpSettings)>0){
        $MySettings = implode(", ", $dpSettings);
      }
      
      // JS Code Output
      $jscode = "<script>
                  jQuery(function($){
  				          $('#cal_".$name."').datepicker({".$MySettings."}); 
                  });
                  </script>";
      return $html.$jscode;
    }
    
    /**
    * Tab
    * 
    * @param $name    Name/ID of the tabulator (must be unique)
    * @param $array   Content array in the format: title => content
    * @return CHAR
    */  
    function Tab($name, $array, $taboptions=false){
      $taboptions = ($taboptions) ? $taboptions : '{ fxSlide: true, fxFade: true, fxSpeed: \'normal\' }';
      $numberk = $numberv = 1;
      $jscode = '<script>
                  $(function() {
                    $("#'.$name.' ul").tabs('.$taboptions.');
                  });
                </script>';
      $html   = '<div id="'.$name.'">
                  <ul>';
      foreach($array as $key=>$value){
        $html .= ' <li><a href="#fragment-'.$numberk.'"><span>'.$key.'</span></a></li>';
        $numberk++;
      }
      $html  .= '</ul>';
      foreach($array as $key=>$value){
        $html .= ' <div id="fragment-'.$numberv.'">'.$value.'</div>';
        $numberv++;
      }
      $html  .= '</div>';
      return $jscode.$html;
    }
    
    /**
    * Tab Header
    * 
    * @param $name    Name/ID of the tabulator (must be unique)
    * @return CHAR
    */ 
    function Tab_header($name, $taboptions=false){
      $taboptions = ($taboptions) ? $taboptions : '{ fxSlide: true, fxFade: true, fxSpeed: \'normal\' }';
      $jscode = '<script>
                  $(function() {
                    $("#'.$name.' ul").tabs('.$taboptions.');
                  });
                </script>';
      return $jscode;
    }
    
    /**
    * Right Click Menu
    * 
    * @param $name    Name/ID of the tabulator (must be unique)
    * @return CHAR
    */ 
    function RightClickMenu($id, $divid, $data, $width='170px'){
      $arrycount = count($data);
      if($arrycount > 0){
        $ii = 0;
        $html   = '<div class="contextMenu" id="myMenu'.$id.'">
                    <ul>';
        foreach($data as $liid=>$name){
          $html  .= '<li id="'.$liid.'"><img src="'.$name['image'].'" /> '.$name['name'].'</li>';
        }
        $html  .= '</ul>
                  </div>';
        $jscode = "<script>
                  $(document).ready(function() {
                    $('".$divid."').contextMenu('myMenu".$id."', {
                      menuStyle: {
                        width: '".$width."'
                      },
                      bindings: {";
        foreach($data as $liid=>$name){
          $ii++;
          $seperator  = ($arrycount > $ii) ? ',' : '';
          $jscode .= "'".$liid."': function(t) {
                            ".$name['jscode']."
                          }".$seperator;
        }
        $jscode .= " }
                    });
                  });
                  </script>";
        return $html.$jscode;
      }
    }
    
    /**
    * WYSIWYG Editor
    * 
    * @param $id      ID of the text area field
    * @return CHAR
    */ 
    function wysiwyg($id){
      $jscode = "<script type='text/javascript'>
                    $(document).ready(function()	{
                    	$('#".$id."').markItUp(mySettings);	

                    });
                </script>";
      return $jscode;
    }
    
    /**
    * Color Picker
    * 
    * @param $name    Name/ID of the colorpicker field (must be unique)
    * @param $value   Value for the input field
    * @param $jscode  Optional JavaScript Code tags
    * @return CHAR
    */ 
    function colorpicker($id, $value, $size='7', $jscode=''){
      $html   = '<input type="text" id="'.$id.'" name="'.$id.'" value="'.$value.'" size="'.$size.'" '.$jscode.' />';
      $jscode = "<script type='text/javascript'>
                  jQuery(function($){
                    $('#".$id."').attachColorPicker();
                  });
                  </script>";
      return $html.$jscode;
    }
    
    /**
    * MultiSelect with checkboxes
    * 
    * @param $name      Name/ID of the colorpicker field (must be unique)
    * @param $value     List as an array
    * @param $selected  selected items as string or array
    * @param $height    height of the popup
    * @param $width     width of the popup
    * @param $firstall  Should the first line be a "check all" checkbox?
    * @return CHAR
    */ 
    function MultiSelect($name, $list, $selected, $height='200', $width='200', $firstall=false, $idname=false){
      $myID     = ($idname) ? $idname : "dw_".$name;
      $firstall = ($firstall) ? 'firstItemChecksAll: true, ' : '';
      $dropdown = '<script>
        $(document).ready(function() {
          $("#'.$myID.'").dropdownchecklist({ '.$firstall.'maxDropHeight: '.$height.', width: '.$width.' });
        });
    </script>';
  		$dropdown .= "<select name='".$name."[]' id='".$myID."' multiple='multiple'>";
  		$dropdown .= ($firstall) ? "<option value=''>(alle)</option>" : '';
      $selected = (is_array($selected))? $selected : explode("|", $selected);
  		if($list){
  			foreach ($list as $key => $value) {
  				$selected_choice = (in_array($key, $selected)) ? 'selected' : '';
  				$dropdown .= "<option value='".$key."' ".$selected_choice.">".$value."</option>";
  			}
  		}
  		$dropdown .= "</select>";
  		return $dropdown;
  	}
  	
  	/**
    * DropDown Menu
    * 
    * @param $name      ID of the css class (must be unique)
    * @param $menuitems Array with menu information
    * @param $imagepath Where are the images?
    * @param $button    Show a button with name?
    * @return CHAR
    */ 
  	function DropDownMenu($id, $class,  $menuitems, $imagepath ,$button=''){
  	 global $eqdkp_root_path;
      $dmmenu  = '<ul id="'.$id.'" class="'.$class.'">
                    <li><a href="#">'.$button.'</a>
                      <ul>';
      foreach($menuitems as $key=>$value){
        if($value['perm']){
          $dmimg = ($value['img']) ? '<img src="'.$eqdkp_root_path.$imagepath.'/'.$value['img'].'" alt="" />' : '';
          $dmmenu .= '<li><a href="'.$value['link'].'">'.$dmimg.'&nbsp;&nbsp;'.$value['name'].'</a></li>';
        }
      }
      $dmmenu .= '</ul>
                  </li>
                  </ul>';
      $dmmenu .= "<script type='text/javascript'>
                    $(function() {
                      $('#".$id."').droppy();
                    });
                  </script>";
      return $dmmenu;
    }
    
    /**
    * Clean up Text for usage in JS Outputs
    * 
    * @param $mssg      The text to sanatize
    * @return sanatized text
    */ 
    function SanatizeJStext($mssg){
      $mssg = html_entity_decode($mssg);
      $mssg = str_replace('&#039;', "'", $mssg);
      $mssg = str_replace('"', "'", $mssg);
      $mssg = str_replace(array("\n", "\r"), '', $mssg);
      $mssg = addslashes($mssg);
      return $mssg;
    }
    
  }
}
?>
