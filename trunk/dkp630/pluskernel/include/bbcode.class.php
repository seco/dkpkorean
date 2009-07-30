<?php
 /*
 * Project:     EQdkp-Plus
 * License:     Creative Commons - Attribution-Noncommercial-Share Alike 3.0 Unported
 * Link:		http://creativecommons.org/licenses/by-nc-sa/3.0/
 * -----------------------------------------------------------------------
 * Began:       2008
 * Date:        $Date: 2009-07-03 22:38:13 +0900 (금, 03 7 2009) $
 * -----------------------------------------------------------------------
 * @author      $Author: ghoschdi $
 * @copyright   2006-2008 Corgan - Stefan Knaak | Wallenium & the EQdkp-Plus Developer Team
 * @link        http://eqdkp-plus.com
 * @package     eqdkp-plus
 * @version     $Rev: 5151 $
 * 
 * $Id: bbcode.class.php 5151 2009-07-03 13:38:13Z ghoschdi $
 */

if ( !defined('EQDKP_INC') ){
    header('HTTP/1.0 404 Not Found');exit;
}

if (!class_exists("BBcode")) {
  class BBcode
  {
  
    function SetSmiliePath($path){
      $this->smiliepath = $path;
    }
    
    function escape($s) {
  		global $text;
  		$text = strip_tags($text);
  		return '<pre><code>'.htmlspecialchars($s[1]).'</code></pre>';
    }	
    
    // clean some tags to remain strict
    // not very elegant, but it works. No time to do better ;)
    function removeBr($s) {
      return str_replace("<br />", "", $s[0]);
    }	
    
    // Clean Up Image Tags to prevent CSRF
    function sanatizeIMG($s){
    	global $eqdkp, $user, $conf_plus;
    	// Check if its an image.. if not, write warning..
    	if(!getimagesize($s[1])){
    		return '<div style="color:red;">'.$user->lang['images_not_available'].'</div>';	
    	}
    	// Output
			if($conf_plus['pk_air_enable']){
      	return '<a href="'.$s[1].'" rel="lytebox" class="image-resize"><img src="'.$s[1].'" alt="'.$user->lang['images_userposted'].'" /></a>';
      }else{
      	return '<img src="'.$s[1].'" alt="'.$user->lang['images_userposted'].'" />';
      }
    }
    
    function MyEmoticons($text){
       // Smileys to find...
      $in = array( 	 
                    ':)', 	
              			':D',
              			':o',
              			':p',
              			':(',
              			';)'
                  );
      
      $out = array(	 
               '<img alt=":)" src="'.$this->smiliepath.'/happy.png" />',
    					 '<img alt=":D" src="'.$this->smiliepath.'/smile.png" />',
    					 '<img alt=":o" src="'.$this->smiliepath.'/surprised.png" />',
    					 '<img alt=":p" src="'.$this->smiliepath.'/tongue.png" />',
    					 '<img alt=":(" src="'.$this->smiliepath.'/unhappy.png" />',
    					 '<img alt=";)" src="'.$this->smiliepath.'/wink.png" />'
      );
      
      $text = preg_replace('/\<img(.*?)alt=\"(\W.*?)\"(.*?)\>/si' , '$2' , $text);
      $text = str_replace($in, $out, $text);
      return $text;
    }
    
    function toHTML($text, $bbrss=false){
      global $conf_plus;
      $text = trim($text);
      $text = preg_replace_callback('/\[code\](.*?)\[\/code\]/ms', array($this,"escape"), $text);
      
      // Prevent CSRF in image Tags..
      if($bbrss){
        $text = preg_replace('/\[img\](.*?)\[\/img\]/msi', '\1', $text);
      }else{
        $text = preg_replace_callback('/\[img\](.*?)\[\/img\]/msi', array($this,"sanatizeIMG"), $text);
      }
      
      // BBCode to find...
    	$in = array('/\[b\](.*?)\[\/b\]/msi',	
      					 '/\[i\](.*?)\[\/i\]/msi',
      					 '/\[u\](.*?)\[\/u\]/msi',
      					 '/\[email\](.*?)\[\/email\]/msi',
      					 '/\[url\="?(.*?)"?\](.*?)\[\/url\]/msi',
      					 '/\[size\="?(.*?)"?\](.*?)\[\/size\]/msi',
      					 '/\[color\="?(.*?)"?\](.*?)\[\/color\]/msi',
      					 '/\[quote](.*?)\[\/quote\]/msi',
      					 '/\[center](.*?)\[\/center\]/msi',
      					 '/\[left](.*?)\[\/left\]/msi',
      					 '/\[right](.*?)\[\/right\]/msi',
      					 '/\[list\=(.*?)\](.*?)\[\/list\]/msi',
      					 '/\[list\](.*?)\[\/list\]/msi',
      					 '/\[\*\]\s?(.*?)\n/msi',
      					 '/\[br\]/msi',
    	           );
	    
      // And replace them by...
      if($bbrss){
        $out = array('<strong>\1</strong>',
          					 '<em>\1</em>',
          					 '<u>\1</u>',
          					 '<a href="mailto:\1">\1</a>',
          					 '<a href="\1">\2</a>',
          					 '\2',
          					 '\2',
          					 '\1',
          					 '\1',
          					 '\1',
          					 '\1',
          					 '<ol start="\1">\2</ol>',
          					 '<ul>\1</ul>',
          					 '<li>\1</li>',
          					 '<br/>',
      	             );
      }else{
      	$out = array('<strong>\1</strong>',
          					 '<em>\1</em>',
          					 '<u>\1</u>',
          					 '<a href="mailto:\1">\1</a>',
          					 '<a href="\1">\2</a>',
          					 '<span style="font-size:\1%">\2</span>',
          					 '<span style="color:\1">\2</span>',
          					 '<blockquote>\1</blockquote>',
          					 '<div align="center">\1</div>',
          					 '<div align="left">\1</div>',
          					 '<div align="right">\1</div>',
          					 '<ol start="\1">\2</ol>',
          					 '<ul>\1</ul>',
          					 '<li>\1</li>',
          					 '<br/>',
      	             );
    	}
    	$text = preg_replace($in, $out, $text);
    	
    	// Itemstats Parsing
      if ($conf_plus['pk_itemstats'] == 1){
        if(function_exists('itemstats_parse')){
          $text = itemstats_parse($text);
        }
      }
    	
    	// paragraphs
    	$text = str_replace("\r", "", $text);
    	$text = nl2br($text);
	

    	$text = preg_replace_callback('/<pre>(.*?)<\/pre>/msi', array($this,"removeBr"), $text);
    	$text = preg_replace('/<p><pre>(.*?)<\/pre><\/p>/msi', "<pre>\\1</pre>", $text);
    	
    	$text = preg_replace_callback('/<ul>(.*?)<\/ul>/msi', array($this,"removeBr"), $text);
    	$text = preg_replace('/<p><ul>(.*?)<\/ul><\/p>/msi', "<ul>\\1</ul>", $text);
	
      return $text;
    }
    
    /**
    * Corgan
    * Ersetzt einen Link zu einem Videoportal mit dem Embedded Code der jeweiligen Plattform
    *
    * @param String $ret
    * @return String
    *
    */
    function EmbeddedVideo($ret)
    {
  		global $user;
  
  		$directurl = '<table border="0" cellpadding="0" cellspacing="2"><tr><td align="left"><a href="';
  		$object = '</td><td align="right"><span class="gensmall"></span></td></tr><tr><td colspan="2">';
  		$tableend = '</td></tr></table>';
  		$tableend = '</table>';

			// match a google video URL and replace it
			$ret = preg_replace("#(^|[\n ])([\w]+?://video\.google\.[\w\.]+?/videoplay\?docid=)([\w-]+)([&][\w=+&;-]*)*(^[\t <\n\r\]\[])*#is", '\\1' . $directurl . '\\2\\3\\4" target="_blank" class="postlink">' . $user->lang['Jump_to'] . ' Google Video</a>' . $object . '<object><param name="wmode" value="transparent"></param><embed style="width:400px; height:326px;" id="VideoPlayback" type="application/x-shockwave-flash" wmode="transparent" src="http://video.google.com/googleplayer.swf?docId=\\3" flashvars=""></embed></object>' . $tableend, $ret);

			// match a youtube video URL and replace it
			$ret = preg_replace("#(^|[\n ])([\w]+?://)(www\.youtube|youtube)(\.[\w\.]+?/watch\?v=)([\w-]+)([&][\w=+&;%]*)*(^[\t <\n\r\]\[])*#is", '\\1' . $directurl . '\\2\\3\\4\\5\\6" target="_blank" class="postlink">' . $user->lang['Jump_to'] . ' Youtube</a>' . $object . '<object width="425" height="350"><param name="movie" value="http://www.youtube.com/v/\\5"></param><param name="wmode" value="transparent"></param><embed src="http://www.youtube.com/v/\\5" type="application/x-shockwave-flash" wmode="transparent" width="425" height="350"></embed></object>' . $tableend, $ret);
			
      // match a youtube.de video URL and replace it
			$ret = preg_replace("#(^|[\n ])([\w]+?://)(de\.youtube|youtube)(\.[\w\.]+?/watch\?v=)([\w-]+)([&][\w=+&;%]*)*(^[\t <\n\r\]\[])*#is", '\\1' . $directurl . '\\2\\3\\4\\5\\6" target="_blank" class="postlink">' . $user->lang['Jump_to'] . ' Youtube</a>' . $object . '<object width="425" height="350"><param name="movie" value="http://de.youtube.com/v/\\5"></param><param name="wmode" value="transparent"></param><embed src="http://www.youtube.com/v/\\5" type="application/x-shockwave-flash" wmode="transparent" width="425" height="350"></embed></object>' . $tableend, $ret);

			// match a myvideo video URL and replace it
			$ret = preg_replace("#(^|[\n ])([\w]+?://)(www\.myvideo|myvideo)(\.[\w\.]+?/watch/)([\w]+)(^[\t <\n\r\]\[])*#is", '\\1' . $directurl . '\\2\\3\\4\\5" target="_blank" class="postlink">' . $user->lang['Jump_to'] . ' MyVideo</a>' . $object . '<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" width="470" height="406"><param name="movie" value="http://www.myvideo.de/movie/\\5"></param><param name="wmode" value="transparent"></param><embed src="http://www.myvideo.de/movie/\\5" width="470" height="406" type="application/x-shockwave-flash" wmode="transparent"></embed></object>' . $tableend, $ret);

			// match a clipfish video URL and replace it
			$ret = preg_replace("#(^|[\n ])([\w]+?://)(www\.clipfish|clipfish)(\.[\w\.]+?/player\.php\?videoid=)([\w%]+)([&][\w=+&;]*)*(^[\t <\n\r\]\[])*#is", '\\1' . $directurl . '\\2\\3\\4\\5\\6" target="_blank" class="postlink">' . $user->lang['Jump_to'] . ' Clipfish</a>' . $object . '<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,0,0" width="464" height="380" id="player" align="middle"><param name="allowScriptAccess" value="sameDomain" /><param name="movie" value="http://www.clipfish.de/videoplayer.swf?as=0&videoid=\\5&r=1" /><param name="wmode" value="transparent"><embed src="http://www.clipfish.de/videoplayer.swf?as=0&videoid=\\5&r=1" width="464" height="380" name="player" align="middle" allowScriptAccess="sameDomain" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" /></object>' . $tableend, $ret);

			// match a sevenload video URL and replace it
			$ret = preg_replace("#(^|[\n ])([\w]+?://[\w.]+?\.sevenload\.com/videos/)([\w]+?)(/[\w-]+)(^[\t <\n\r\]\[])*#is", '\\1' . $directurl . '\\2\\3\\4" target="_blank" class="postlink">' . $user->lang['Jump_to'] . ' Sevenload</a>' . $object . '<object width="425" height="350"><param name="FlashVars" value="slxml=de.sevenload.com"/><param name="movie" value="http://de.sevenload.com/pl/\\3/425x350/swf" /><embed src="http://de.sevenload.com/pl/\\3/425x350/swf" type="application/x-shockwave-flash" width="425" height="350" FlashVars="slxml=de.sevenload.com"></embed></object>' . $tableend, $ret);

			// match a metacafe video URL and replace it
			$ret = preg_replace("#(^|[\n ])([\w]+?://)(www\.metacafe|metacafe)(\.com/watch/)([\w]+?)(/)([\w-]+?)(/)(^[\t <\n\r\]\[])*#is", '\\1' . $directurl . '\\2\\3\\4\\5\\6\\7" target="_blank" class="postlink">' . $user->lang['Jump_to'] . ' Metacafe</a>' . $object . '<embed src="http://www.metacafe.com/fplayer/\\5/\\7.swf" width="400" height="345" wmode="transparent" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash"></embed>' . $tableend, $ret);

			// match a streetfire video URL and replace it
			$ret = preg_replace("#(^|[\n ])([\w]+?://videos\.streetfire\.net/.*?/)([\w-]+?)(\.htm)(^[\t <\n\r\]\[])*#is", '\\1' . $directurl . '\\2\\3\\4" target="_blank" class="postlink">' . $user->lang['Jump_to'] . ' Streetfire</a>' . $object . '<embed src="http://videos.streetfire.net/vidiac.swf" FlashVars="video=\\3" quality="high" bgcolor="#ffffff" width="428" height="352" name="ePlayer" align="middle" allowScriptAccess="sameDomain" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer"></embed>' . $tableend, $ret);
			
			// match a wegame video URL and replace it
			$ret = preg_replace("#(^|[\n ])([\w]+?://)(www\.wegame|wegame)(\.com/watch/)([\w-]+)(/)(^[\t <\n\r\]\[])*#is", '\\1' . $directurl . '\\2\\3\\4\\5" target="_blank" class="postlink">' . $user->lang['Jump_to'] . ' Wegame</a>' . $object . '<object width="480" height="387"><param name="movie" value="http://www.wegame.com/static/flash/player2.swf?tag=\\5"> </param><param name="wmode" value="transparent"></param><embed src="http://www.wegame.com/static/flash/player2.swf?tag=\\5" type="application/x-shockwave-flash" wmode="transparent" width="480" height="387"></embed></object>' . $tableend, $ret);

      return $ret ;
		}
  }
}
?>