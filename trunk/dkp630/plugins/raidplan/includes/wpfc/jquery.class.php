<?php
 /*
 * Project:     EQdkp Plugin WPFC Classes
 * License:     Creative Commons - Attribution-Noncommercial-Share Alike 3.0 Unported
 * Link:		    http://creativecommons.org/licenses/by-nc-sa/3.0/
 * -----------------------------------------------------------------------
 * Began:       2005
 * Date:        $Date: 2008-09-15 11:13:00 +0200 (Mo, 15 Sep 2008) $
 * ----------------------------------------------------------------------- 
 * This Class is part of the "WalleniuMs Plugin (Developer) Framework Kit" WPFC. 
 * You can ask for permission and use this classes in your Plugins but not 
 * remove this Copyright  
 * -----------------------------------------------------------------------
 * @author      $Author: wallenium $
 * @copyright   2007-2008 Simon (Wallenium) Wallmann
 * @link        http://eqdkp-plus.com
 * @package     wpfc
 * @version     $Rev: 2737 $
 * 
 * $Id: jquery.class.php 2737 2008-09-15 09:13:00Z wallenium $
 */
 
if ( !defined('EQDKP_INC') ){
    header('HTTP/1.0 404 Not Found');exit;
}

if (!class_exists("jQuery")) { 
  class jQuery {
    
    var $version = '1.0.0';
    
    /**
    * Initialize the Class
    * 
    * @param $path    Set the path to the wpfc folder
    * @param $lang    The languagefiles to include
    * @return CHAR
    */
    function jQuery($path, $lang='en'){
      $this->path = $path;
      
      // Should the jQuery thing be included again? 
      // eqdkpPLUS includes ist by itsself, double include of JS libs is never good
      // eqdkpPLUS 0.4.x NEEDS the include, because it used prototype instead of jQuery
      if(@constant("EQDKPPLUS_VERSION") && EQDKPPLUS_VERSION > '0.5.0.0'){
        $this->include_jquery   = false;
      }elseif(@constant("EQDKPPLUS_VERSION") && EQDKPPLUS_VERSION < '0.5.0.0'){
        $this->include_jquery   = true;
      }else{
        $this->include_jquery   = true;
      }
      
      // Include me array
      $css_array  = array(
            'jbox'        => 'jbox.css',
            'confirm'     => 'confirm.css',
            'colorpicker' => 'colorpicker.css',
            'humanmssg'   => 'humanmsg.css',
            
            // jQuery UI
            'datepicker'  => 'ui.datepicker.css',
            'tabs'        => 'ui.tabs.css',
      );
      
      // All i need is jQuery... (TM)
      $js_nonplus = array(
            'core'        => 'jquery.min.js',
            'jquery.ui'   => 'jquery.ui.all.min.js',
      );
      
      $js_array   = array(
            'jbox'        => 'jquery.jbox.js',
            'humanmssg'   => 'jquery.humanmsg.js',
            'ipromptu'    => 'jquery.impromptu.js',
            'contextmenu' => 'jquery.contextmenu.js',
            'colorpicker' => 'jquery.colorpicker.js',  
      );
      
      if($this->include_jquery){
        $js_array = array_merge($js_nonplus, $js_array);
      }
      
      // Generate the Output
      $this->headerr = '';
      foreach($css_array as $filename){
        $this->headerr .= "<link rel='stylesheet' href='".$path."jquery/css/".$filename."' type='text/css'>";
      }
      
      foreach($js_array as $filename){
        $this->headerr .= "<script language='javascript' src='".$path."jquery/js/".$filename."'></script>";
      }
      
      if($lang != 'en'){
        $js_cal_language = $path."jquery/js/lang/ui.datepicker-".$lang.".js";
        if(file_exists($js_cal_language)){
          $this->headerr .= "<script language='javascript' src='".$js_cal_language."'></script>";
        }
      }
      
      $this->headerr .= "<script>
                          var jImages={
                            imgs:['".$path."jquery/img/min.gif', '".$path."jquery/img/close.gif', '".$path."jquery/img/restore.gif','".$path."jquery/img/resize.gif']
                          }
                        </script>";
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
    function Dialog_Confirm($name, $text, $jscode){
      global $user;
      $jscode = "function submit_".$name."(v,m){
                  if(v){
                    ".$jscode."
                  }
                  return true;
                }
                
                function ".$name."(){
                  $.prompt('".$text."', {
                            buttons:{ ".$user->lang['wpfc_bttn_ok'].": true, ".$user->lang['wpfc_bttn_cancel'].": false },
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
    * Date Picker
    * 
    * @param $name    Name/ID of the calendar (must be unique)
    * @param $value   Value for the input field
    * @param $format  Date format (p.e. dd.mm.yy)
    * @return CHAR
    */  
    function Calendar($name, $value, $jscode='', $format='dd.mm.yy'){
      $html = '<input type="text" id="'.$name.'" name="'.$name.'" value="'.$value.'" size="15" '.$jscode.' />';
      $jscode = "<script>
                  jQuery(function($){
  				          $('#".$name."').datepicker({showOn: 'button', buttonImage: '".$this->path."jquery/img/calendar.png', buttonImageOnly: true, dateFormat: '".$format."'}); 
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
    
  }
}
?>
