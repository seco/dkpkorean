<?php
 /*
 * Project:     EQdkp Newsletter
 * License:     Creative Commons - Attribution-Noncommercial-Share Alike 3.0 Unported
 * Link:		    http://creativecommons.org/licenses/by-nc-sa/3.0/
 * -----------------------------------------------------------------------
 * Began:       2007
 * Date:        $Date: 2008-09-18 09:49:30 +0200 (Do, 18 Sep 2008) $
 * -----------------------------------------------------------------------
 * @author      $Author: wallenium $
 * @copyright   2005-2008 Simon (Wallenium) Wallmann
 * @link        http://eqdkp-plus.com
 * @package     newsletter
 * @version     $Rev: 2744 $
 * 
 * $Id: email.class.php 2744 2008-09-18 07:49:30Z wallenium $
 */

if ( !defined('EQDKP_INC') ){
  header('HTTP/1.0 404 Not Found');exit;
}
 
/**
* EMail class
* Templating e-mail class inspired by phpBB
*/
class EMail
{
    /**
    * Template file
    * @var tpl_file
    */
    var $tpl_file;
    
    /**
    * EMail message
    * @var msg
    */
    var $msg;

    /**
    * @var subject
    * @var extra headers
    * @var address
    */
    var $subject, $extra_headers, $address;
    
    /**
    * Constructor
    * 
    * Make vars null
    */
    function EMail()
    {
        $this->tpl_file = null;
        $this->address = null;
        $this->msg = '';
    }
    
    /**
    * Set vars to empty strings
    */
    function reset()
    {
        $this->tpl_file = '';
        $this->address = '';
        $this->msg = '';
        $this->vars = array();
    }
    
    /**
    * Assign email address to send to
    * 
    * @param $address
    */
    function address($address)
    {
        $this->address = $address;
    }
    
    /**
    * Assign subject line
    * 
    * @param $subject
    */
    function subject($subject='')
    {
        $this->subject = $subject;
    }
    
    /**
    * Assign extra headers
    * 
    * @param $headers
    */
    function extra_headers($headers)
    {
        $this->extra_headers = $headers;
    }
    
    /**
    * Set the template to use
    * 
    * @param $template Filename
    * @param $lang Language to use
    * @return bool
    */
    function set_template($template, $lang='')
    {
        global $eqdkp, $eqdkp_root_path;
        $lang = ( $lang == '' ) ? $eqdkp->config['default_lang'] : $lang;
        
        $this->tpl_file = $template;

        if ( !$this->tpl_file )
        {
            message_die('Could not find email template file ' . $template);
        }

        if ( !$this->load_msg() )
        {
            message_die('Could not load email template file ' . $template);
        }

        return true;
    }
    
    /**
    * Load the message file
    * 
    * @return bool
    */
    function load_msg()
    {
        if ( $this->tpl_file == null )
        {
            message_die('No template file set');
        }
        $this->msg .= $this->tpl_file;
        return true;
    }
    
    /**
    * Assign template vars
    * 
    * @param $vars Array of variables
    */
    function assign_vars($vars)
    {
        $this->vars = ( empty($this->vars) ) ? $vars : $this->vars . $vars;
    }
    
    /**
    * Parse email; Replace vars with their values, find subject/charset
    * 
    * @return bool
    */
    function parse_email()
    {
        @reset($this->vars);
        while (list($key, $val) = @each($this->vars))
        {
            $$key = $val;
        }

        // Escape all quotes, else the eval will fail.
        $this->msg = str_replace ("'", "\'", $this->msg);
        $this->msg = preg_replace('#\*([a-z0-9\-_]*?)\*#is', "' . $\\1 . '", $this->msg);

        eval("\$this->msg = '$this->msg';");

        //
        // We now try and pull a subject from the email body ... if it exists,
        // do this here because the subject may contain a variable
        //
        $match = array();
        preg_match("/^(Subject:(.*?)[\r\n]+?)?(Charset:(.*?)[\r\n]+?)?(.*?)$/is", $this->msg, $match);

        $this->msg = ( isset($match[5]) ) ? trim($match[5]) : '';
        $this->subject = ( $this->subject != '' ) ? $this->subject : trim($match[2]);
        $this->encoding = ( trim($match[4]) != '' ) ? trim($match[4]) : 'iso-8859-1';

        return true;
    }
    
    /**
    * mail() the email
    * 
    * @return bool
    */
    function send()
    {
        global $phpEx, $phpbb_root_path;

        if ( $this->address == null )
        {
            return false;
        }

        if ( !$this->parse_email() )
        {
            return false;
        }

        // Add date and encoding type
        $universal_extra = "MIME-Version: 1.0\nContent-type: text/plain; charset=" . $this->encoding . "\nContent-transfer-encoding: 8bit\nDate: " . gmdate('D, d M Y H:i:s', time()) . " UT\n";
        $this->extra_headers = $universal_extra . $this->extra_headers;

        $result = @mail($this->address, $this->subject, $this->msg, $this->extra_headers);

        if ( !$result )
        {
            return false;
        }

        return true;
    }
    
    function SendMessages($members, $body, $subject){
    	global $eqdkp, $user;
    	
    	// Build the server path
      $script_name = preg_replace('/^\/?(.*?)\/?$/', '\1', trim($eqdkp->config['server_path']));
      $script_name = ( $script_name != '' ) ? $script_name . '/' : '';
      $server_name = trim($eqdkp->config['server_name']);
      $server_port = ( intval($eqdkp->config['server_port']) != 80 ) ? ':' . trim($eqdkp->config['server_port']) . '/' : '/';
      $nl_server_url  = 'http://' . $server_name . $server_port . $script_name;
    	
      foreach ($members as $username => $useremail){
    		$headers = "From: " . $eqdkp->config['admin_email'] . "\nReturn-Path: " . $eqdkp->config['admin_email'] . "\r\n";
        
      	$this->set_template($body);
      	$this->address(stripslashes($useremail));
      	$this->subject($subject);
      	$this->extra_headers($headers);
      
      	// body
      	$this->assign_vars(array(
            'DKP_NAME'   => $eqdkp->config['dkp_name'],
            'USERNAME'   => $username,
            'EQDKP_LINK' => $nl_server_url, 
            'AUTHOR'     => $user->data['username'],
            'DATE'       => date($user->style['date_notime_short'], time())
            )
        );
      
      	// send
      	$this->send();
      	$this->reset();
    	}
    }
}
?>
