<?php
/*
 * Project:     EQdkp-Plus
 * License:     Creative Commons - Attribution-Noncommercial-Share Alike 3.0 Unported
 * Link:		http://creativecommons.org/licenses/by-nc-sa/3.0/
 * -----------------------------------------------------------------------
 * Began:       2006
 * Date:        $Date: 2008-12-02 11:54:02 +0100 (Di, 02 Dez 2008) $
 * -----------------------------------------------------------------------
 * @author      $Author: corgan $
 * @copyright   2006-2008 Corgan - Stefan Knaak | Wallenium & the EQdkp-Plus Developer Team
 * @link        http://eqdkp-plus.com
 * @package     eqdkp-plus
 * @version     $Rev: 3293 $
 * 
 * $Id: memcache.class.php  $
 * 
 * Easy Caching Layer for apc, memcache, whatever
 * 
 */
	
/*
	//load
	$resArray = $MCache->load('suche'.$sqlHash);

	//save
	$MCache->save('suche'.$sqlHash, $resArray, 28800); // 8 stunden speichern	
*/

	class MCache 
	{

		var $prefix='';
		var $engine='apc';
		var $server='localhost';		
		var $memcache;
		
		//--
		
		function setPrefix($prefix)
		{
			$this->prefix = $prefix;
		}
		
		function setServer($server)
		{
			$this->server = $server;
		}
		
		function setEngine($engine)
		{
			$this->engine = $engine;
			
			if ($this->engine == 'memcache'){
				$this->memcache = new Memcache;
				$this->memcache->connect($this->server, 11211);
			}
			
		}
		
		//--
		
		function getPrefix(){
			return $this->prefix;
		}
		
		
		function getEngine(){
			return $this->engine;
		}
		
		//--
		
		function save($key, $value, $ttl='',$noprefix=false,$compress=false)
		{
			
			#d($key);
			
			if ($compress) {
				$value = serialize($value);
			}
			
			if (_CACHE_MEM == false) return false;
			
			if( ($this->getEngine() == 'apc') & function_exists(apc_store) )
			{
				if ($ttl == '')
				{
					if ($noprefix == true) 
					{
						apc_store($key, $value);	
					}else 
					{
						apc_store($this->getPrefix().'.'.$key, $value);
					}														
				}
				else
				{
					if ($noprefix == true) 
					{
						apc_store($key, $value,$ttl);	
					}else
					{
						apc_store($this->getPrefix().'.'.$key, $value,$ttl);
					}													
				}
			}
			
			if ($this->getEngine() == 'memcache')
			{
				if ($ttl == '') $this->memcache->set($this->getPrefix().$key,$value);
				else $this->memcache->add($this->getPrefix().$key,$value,false,$ttl);
			}
			
			if ($this->getEngine() == 'xcache')
			{
				if ($ttl == '') xcache_set($this->getPrefix().$key, $value);
				else  xcache_set($this->getPrefix().$key, $value, $ttl);
				
			}			
			
			return true;
		}

		
		function load($key,$noprefix=false,$compress=false)
		{	
			#d($key);	
			if (_CACHE_MEM == false) return null;	
			$res = null;
						
			if( ($this->getEngine() == 'apc') & function_exists(apc_fetch) ) 
			{
				#$membild = @unserialize($membild);
				if ($noprefix == true) 
				{
					$res  = apc_fetch($key);
				}else {
					$res  = apc_fetch($this->getPrefix().'.'.$key);	
				}							
			}
			
			if ($this->getEngine() == 'memcache')
			{
				$res = $this->memcache->get($this->getPrefix().$key);
			}
			
			if ($this->getEngine() == 'xcache'){
				$res  = xcache_get($this->getPrefix().$key);
			}
			
			if ($compress) {
				$res = unserialize($res);
			}
			
			return $res;
		}
		
		function delete($key)
		{
			if (_CACHE_MEM == false) return null;
			
			if( ($this->getEngine() == 'apc') & function_exists(apc_delete))
			{
				$res  = apc_delete($this->getPrefix().$key);			
			}
			
			if ($this->getEngine() == 'memcache') 
			{
				$this->memcache->delete($this->getPrefix().$key);
			}
			
			if ($this->getEngine() == 'xcache') 
			{
				xcache_unset($this->getPrefix().$key);
			}
			return true;
		}
		
		
		
	}
?>