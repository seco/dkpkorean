<?php
 /*
 * Project:     eqdkpPLUS Libraries: cacheHandler
 * License:     Creative Commons - Attribution-Noncommercial-Share Alike 3.0 Unported
 * Link:		    http://creativecommons.org/licenses/by-nc-sa/3.0/
 * -----------------------------------------------------------------------
 * Began:       2009
 * Date:        $Date: 2009-01-29 15:59:31 +0100 (Do, 29 Jan 2009) $
 * -----------------------------------------------------------------------
 * @author      $Author: wallenium $
 * @copyright   2009 Simon (Wallenium) Wallmann
 * @link        http://eqdkp-plus.com
 * @package     libraries:cacheHandler
 * @version     $Rev: 3690 $
 * 
 * $Id: pluginUpdates.class.php 3690 2009-01-29 14:59:31Z wallenium $
 */

if ( !defined('EQDKP_INC') ){
    header('HTTP/1.0 404 Not Found');exit;
}

if (!class_exists("cacheHandler")) {
  class cacheHandler
  {
    var $errors   = array();
    var $version  = '1.1.0';
    
    /**
    * Initiate the cacheHandler
    */
    function cacheHandler()
    {
      global $dbname, $eqdkp_root_path;
      $this->safe_mode = false;
      $tmpchdir = $eqdkp_root_path.'data/';
      if(is_writable($tmpchdir)){
        $this->CacheFolder = $tmpchdir.md5($dbname).'/';
        $this->CacheFolder2 = 'data/'.md5($dbname).'/';
        $this->CheckCreateFolder($this->CacheFolder);
      }else{
        $this->errors[] = 'lib_cache_notwriteable';
      }
      if(ini_get('safe_mode') == '1'){
        $this->safe_mode = true;
      }
    }
    
    /**
    * Test if a file could be written
    */
    function CheckWrite(){
      $write = false;
      if($this->safe_mode){
        $fp = @fopen($this->CacheFolder.'test_file', 'wb');
        if ($fp !== false){
          $write = true;
        }
        @fclose($fp);
        @unlink($this->CacheFolder.'test_file');
      }
      return $write;
    }
    
    /**
    * Build an eqdkp Link for rss syndication and others
    */
    function BuildLink(){
      global $eqdkp;
      $script_name = preg_replace('/^\/?(.*?)\/?$/', '\1', trim($eqdkp->config['server_path']));
      $script_name = ( $script_name != '' ) ? $script_name . '/' : '';
      $server_name = trim($eqdkp->config['server_name']);
      $server_port = ( intval($eqdkp->config['server_port']) != 80 ) ? ':' . trim($eqdkp->config['server_port']) . '/' : '/';
      return 'http://' . $server_name . $server_port . $script_name;
    }
    
    /**
    * Check if a Folder is available or must be created
    */
    function CheckCreateFolder($path){
      if(!is_dir($path)){
        umask(0000);
        mkdir($path);
      }
    }
    
    /**
    * Check if a File is available or must be created
    */
    function CheckCreateFile($path, $createFile){
      if(!is_file($path) && $createFile){
        $myhandl = fopen($path, "a");
        fclose($myhandl);
      }
      if(is_file($path)){
        @chmod($path, 0777);
      }
    }
    
    /**
    * Check if the cache is writable
    */
    function CacheWritable(){
      return (is_array($this->errors) && count($this->errors) > 0) ? false : true;
    }
    
    /**
    * If you want to move a file..
    */
    function FileMove($filename, $tofile) {
      copy ($filename, $tofile);
      unlink ($filename);
      @chmod($tofile, 0777);
    }
    
    /**
    * Return a path to the file
    * 
    * @param $filename    The name of the file
    * @param $plugin      Plugin name, p.e. 'raidplan'
    * @param $createFile  Should the file be created on check if not available?    
    * @return Link to the file
    */
    function FilePath($filename, $plugin='', $createFile=true){
      if(!$filename){ return ''; }
      if($plugin != ""){
        $tmpfolder = $this->CacheFolder.$plugin;
        $this->CheckCreateFolder($tmpfolder);
        $tmpfilelink=$tmpfolder.'/'.$filename;
        $this->CheckCreateFile($tmpfilelink, $createFile);
        return $tmpfilelink;
      }else{
        return $this->CacheFolder.$filename;
      }
    }
    
    /**
    * Checks if a file is available or not
    * 
    * @param $filename    The name of the file
    * @param $plugin      Plugin name, p.e. 'raidplan'
    * @return 1/0
    */
    function FileExists($filename, $plugin=''){
      if(is_file($this->FilePath($filename, $plugin, true))){
        return 1;
      }else{
        return 0;
      }
    }
    
    /**
    * Return a file link to the file
    * 
    * @param $filename    The name of the file
    * @param $plugin      Plugin name, p.e. 'raidplan'
    * @return Link to the file
    */
    function FileLink($filename, $plugin='', $folder=''){
      $realfolder = ($folder) ? $folder.'/' : '';
      if($plugin != ""){
        return $this->CacheFolder2.$plugin.'/'.$realfolder.$filename;
      }else{
        return $this->CacheFolder2.$realfolder.$filename;
      }
    }
  	
  	/**
    * Return a path to a folder
    * 
    * @param $filename    The name of the file
    * @param $plugin      Plugin name, p.e. 'raidplan'
    * @return Link to the file
    */
  	function FolderPath($foldername, $plugin=''){
      if($plugin != ""){
        $tmpfolder = $this->CacheFolder.$plugin;
        $this->CheckCreateFolder($tmpfolder);
        $tmpfilelink=$tmpfolder.'/'.$foldername.'/';
        $this->CheckCreateFolder($tmpfilelink);
        return $tmpfilelink;
      }else{
        $this->CheckCreateFolder($this->CacheFolder.$foldername);
        return $this->CacheFolder.$foldername;
      }
    }
  }
}
?>
