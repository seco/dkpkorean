<?php
 /*
 * Project:     EQdkp-Plus
 * License:     Creative Commons - Attribution-Noncommercial-Share Alike 3.0 Unported
 * Link:		http://creativecommons.org/licenses/by-nc-sa/3.0/
 * -----------------------------------------------------------------------
 * Began:       2008
 * Date:        $Date: 2009-07-09 21:26:44 +0200 (Do, 09 Jul 2009) $
 * -----------------------------------------------------------------------
 * @author      $Author: wallenium $
 * @copyright   2006-2008 Corgan - Stefan Knaak | Wallenium & the EQdkp-Plus Developer Team
 * @link        http://eqdkp-plus.com
 * @package     eqdkp-plus
 * @version     $Rev: 5207 $
 * 
 * $Id: comments.class.php 5207 2009-07-09 19:26:44Z wallenium $
 */

if ( !defined('EQDKP_INC') ){
    header('HTTP/1.0 404 Not Found');exit;
}

if (!class_exists("plusComments")) 
{ 
  class plusComments
  { 
    
    // ---------------------------------------------------------
    // Constructor
    // ---------------------------------------------------------
    function plusComments()
    {
      global $user;
      $this->Username = $user->data['username'];
      $this->UserID   = $user->data['user_id'];
      $this->version  = '1.3.0';
      
      // Changeable
      $this->isAdmin  = $user->check_auth('a_config_man', false);
      $this->langprf  = 'comments_';
      $this->userPerm = true;
    }
    
    // ---------------------------------------------------------
    // Set the Comment Variables during runtime..
    // ---------------------------------------------------------
    function SetVars($array)
    {
      global $user;
      if($array['auth']){
        $this->isAdmin    = $user->check_auth($array['auth'], false);
      }
      if($array['userauth']){
        $this->userPerm   = $user->check_auth($array['userauth'], false);
      }
      if($array['language']){
        $this->langprf    = $array['language'];
      }
      if($array['page']){
        $this->page       = $array['page'];
      }
      if($array['attach_id']){
        $this->attach_id  = $array['attach_id'];
      }
    }
    
    // ---------------------------------------------------------
    // Check if UTF-8...
    // ---------------------------------------------------------
    function CheckUTF8($string)
    {
      if (is_array($string)){
      	$enc = implode('', $string);
      	return @!((ord($enc[0]) != 239) && (ord($enc[1]) != 187) && (ord($enc[2]) != 191));
      }else{
      	return (utf8_encode(utf8_decode($string)) == $string);
      }   
    }
      
    // ---------------------------------------------------------
    // Get the Count of comments for that event/page
    // ---------------------------------------------------------
    function Count()
    {
      global $db;
      $comcount = 0;
      $sql = "SELECT count(id)
              FROM __comments
              WHERE attach_id='".$db->escape($this->attach_id)."'
              AND page = '".$db->escape($this->page)."';";
      $comcount = $db->query_first($sql);
      return ($comcount) ? $comcount : '0';
    }
    
    // ---------------------------------------------------------
    // Save the Comment
    // ---------------------------------------------------------
    function Save()
    {
      global $db, $bbcode, $eqdkp_root_path, $in;

      if($this->UserID){
        $htmlinsert = ($this->CheckUTF8($htmlinsert) == 1) ? utf8_decode($in->get('comment')) : $in-get('comment');
        $htmlinsert = htmlentities(strip_tags($htmlinsert), ENT_QUOTES); /*No html or javascript in comments*/
        
        $sql = "INSERT INTO __comments 
        ( `attach_id`, `date` , `userid`, `text`, `page`) 
        VALUES 
        ('".$db->escape($in->get('attach_id',0))."', '".time()."', '".$db->escape($this->UserID)."', '".$htmlinsert."', '".$in->get('page')."');";
        $db->query($sql);
    		echo $this->Content($in->get('attach_id',0), $in->get('page'), $in->get('rpath'), true, $in->get('lang_prefix'));
  		}
    }
    
    // ---------------------------------------------------------
    // Delete the Comment
    // ---------------------------------------------------------
    function Delete($page, $rpath)
    {
      global $db, $in;
      $commentarry = $this->GetDBentries($page, $in->get('attach_id',0));
      if($this->isAdmin || $commentarry[$in->get('deleteid', 0)]['userid'] == $this->UserID){
        $sql = "DELETE FROM __comments WHERE id='".$db->escape($in->get('deleteid',0))."'";
        $db->query($sql);
        echo $this->Content($in->get('attach_id',0), $in->get('page'), $rpath, true, $in->get('lang_prefix'));
      }
    }
    
    function Uninstall($page)
    {
      global $db;
      if($page){
        $sql = "DELETE FROM __comments WHERE page='".$db->escape($page)."'";
        $db->query($sql);
      }
    }
    
    // ---------------------------------------------------------
    // Generate the JS Code
    // ---------------------------------------------------------
    function JScode()
    {
      global $user, $eqdkp_root_path;
      $jscode = "<script type='text/javascript'> 
          // wait for the DOM to be loaded 
          $(document).ready(function() { 

             $('#Comments').ajaxForm({  
                target: '#htmlCommentTable', 
                beforeSubmit:  showRequest,
                success: function() { 
                  $('#htmlCommentTable').fadeIn('slow');
                  // clear the input field:
                  document.Comments.comment.value = '';
                  document.Comments.comment.disabled=false;
                  document.getElementById('comment_button').innerHTML='<input type=\"submit\" value=\"".$user->lang[$this->langprf.'send_comment']."\" class=\"input\"/>';
                } 
            }); 
          });
          
          function showRequest(formData, jqForm, options) { 
            document.Comments.comment.disabled=true;
            document.getElementById('comment_button').innerHTML='<img src=\"".$eqdkp_root_path."images/global/loading.gif\" alt=\"Save\"/> ".$user->lang[$this->langprf.'save_wait']."';
          } 
      </script>";
      return $jscode;
    }
    
    // ---------------------------------------------------------
    // HTML Output Code
    // ---------------------------------------------------------
    function Show()
    {
      $html = $this->JScode();
      $html .= '<div id="htmlCommentTable">';
      $html .= $this->Content($this->attach_id, $this->page);
      $html .= '</div>';
      // the line for the comment to be posted
      if($this->Username != ""){
        if($this->userPerm){
          $html .= $this->Form($this->attach_id, $this->page);
        }
      }
      return $html;
    }
    
    function GetDBentries($page, $atachid, $issave=false)
    {
      global $db, $user, $conf, $eqdkp_root_path;
      $sql = "SELECT com.text, com.date, com.id, com.userid, u.username, com.attach_id
              FROM __comments com, __users u
              WHERE com.attach_id='".$db->escape($atachid)."'
              AND com.page = '".$db->escape($page)."'
              AND com.userid = u.user_id
              ORDER BY com.date;";
      $comm_result = $db->query($sql);
      
      while($row = $db->fetch_record($comm_result)){
        $outputarray[$row['id']] = array(
            'time'            => date($user->style['date_time'],$row['date']),
            'delete_button'   => ($this->isAdmin || $row['userid'] == $this->UserID) ? true : false,
            'id'              => $row['id'],
            'userid'          => $row['userid'],
            'username'        => $row['username'],
            'attach_id'       => $row['attach_id'],
            'message'         => ($issave) ? utf8_encode($row['text']) : $row['text'] 
        );
      }
      return $outputarray;
    }
    
    // ---------------------------------------------------------
    // Generate the Content
    // ---------------------------------------------------------
    function Content($atachid, $page, $rpath='', $issave = false, $mylang='')
    {
      global $db, $user, $conf, $eqdkp_root_path, $bbcode;
      $i = 0;
      $commdata   = $this->GetDBentries($page, $atachid, $issave);
      $myrootpath = ($issave) ? $rpath : $eqdkp_root_path;
      $tmplang    = ($mylang) ? $mylang : $this->langprf;
      $bbcode->SetSmiliePath($myrootpath.'libraries/jquery/images/editor/icons');
      
      // The delete form
      $html  = '<form id="del_comment" name="del_comment" action="'.$eqdkp_root_path.'comments.php" method="post">';
      $html .= '</form>';
      
      // the content Box
      $html .= '<div class="contentBox">';
      $html .= '<div class="boxHeader"><h1>'.$user->lang[$tmplang.'comments_raid'].'</h1></div>';
      $html .= '<div class="boxContent">';

      if (is_array($commdata)) 
      {
	      foreach($commdata as $row)
	      {
          $convUsername = ($issave) ? htmlspecialchars(utf8_encode($row['username'])) : htmlspecialchars($row['username']);
          $convText     = $bbcode->MyEmoticons($bbcode->toHTML($row['message']));
          $rowcolor     = ($i%2) ? 'rowcolor2' : 'rowcolor1';
	        $out[] .= '<div class="'.$rowcolor.' clearfix">
	                      <div class="floatLeft" style="overflow: hidden; width: 15%;">'.$convUsername.'</div>
	                      <div class="floatLeft" style="overflow: hidden; width: 85%;">
	                        <span class="small bold">'.$row['time'].'</span>';
	        if($row['delete_button']){
            $out[] .= '<span class="small bold floatRight hand" onclick="$(\'#del_comment\').ajaxSubmit({target: \'#htmlCommentTable\', url:\''.$myrootpath.'comments.php?deleteid='.$row['id'].'&page='.$page.'&attach_id='.$atachid.'&rpath='.$myrootpath.'\', success: function() { $(\'#htmlCommentTable\').fadeIn(\'slow\'); } }); "><img src="'.$myrootpath.'images/global/delete.png" /></span>';
	        }
          $out[] .= '<br class="clear"/><span class="comment_text">'.$convText.'</span><br/>
	                      </div>
	                    </div><br/>';
	        $i++;
	      }
	            	
      }
      
      if(count($out) > 0 ){
        foreach($out as $vvalues){
          $html .= $vvalues;
        }
      }else{
        $html .= $user->lang[$tmplang.'no_comments'];
      }
      $html .= '</div></div>';
      return $html;
    }
    
    // ---------------------------------------------------------
    // Generate the Form
    // ---------------------------------------------------------
    function Form($attachid, $page)
    {
      global $user, $jqueryp, $eqdkp_root_path;
      
      $html  = $jqueryp->wysiwyg('bbcode');
      $html .= '<div class="contentBox">';
      $html .= '<div class="boxHeader"><h1>'.$user->lang[$this->langprf.'write_comment'].'</h1></div>';
      $html .= '<div class="boxContent"><br/>';
      $html .= '<form id="Comments" name="Comments" action="'.$eqdkp_root_path.'comments.php" method="post"> 
                <input type="hidden" name="attach_id" value="'.$attachid.'"/>
                <input type="hidden" name="page" value="'.$page.'"/>
                <input type="hidden" name="lang_prefix" value="'.$this->langprf.'"/>
                <input type="hidden" name="rpath" value="'.$eqdkp_root_path.'"/>
                <textarea name="comment" id="bbcode" rows="8" cols="69" class="jTagEditor"></textarea><br/><br/>
                <span id="comment_button"><input type="submit" value="'.$user->lang[$this->langprf.'send_comment'].'" class="input"/></span>
              </form>';
      $html .= '</div></div>';
      return $html;
    }
  }
}
?>