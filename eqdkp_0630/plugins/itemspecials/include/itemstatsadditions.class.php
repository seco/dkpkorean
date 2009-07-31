<?php
 /*
 * Project:     EQdkp ItemSpecials
 * License:     Creative Commons - Attribution-Noncommercial-Share Alike 3.0 Unported
 * Link:		    http://creativecommons.org/licenses/by-nc-sa/3.0/
 * -----------------------------------------------------------------------
 * Began:       2006
 * Date:        $Date: 2008-12-03 15:39:45 +0100 (Mi, 03 Dez 2008) $
 * -----------------------------------------------------------------------
 * @author      $Author: wallenium $
 * @copyright   2005-2008 Simon (Wallenium) Wallmann
 * @link        http://eqdkp-plus.com
 * @package     itemspecials
 * @version     $Rev: 3302 $
 * 
 * $Id: itemstatsadditions.class.php 3302 2008-12-03 14:39:45Z wallenium $
 */

if ( !defined('EQDKP_INC') ){
  header('HTTP/1.0 404 Not Found');exit;
} 

// This class extends the original itemstats functions to fit the
// needs of itemspecials. Could be used free in other Applications

class ItemstatsAddition
{
// This is for Itemstats 1.5 and higher
function GetItemstatsVersion(){
	global $eqdkp_root_path;
	$file = $eqdkp_root_path.'itemstats/version.php';
	if (is_file($file)){
		require_once($file);
		return $itemstats_core_version;
	}else{
		return false;
	}
}

function SQLItemstatsInsert($version, $data){
	if($version && $version > '1.5.1'){
		$sql = "INSERT INTO `".item_cache_table."` VALUES ('".$data[0]."', '".$data[5]."', '".$data[6]."',  '".$data[1]."', '".$data[2]."', '".$data[3]."', '<table cellpadding=\'0\' border=\'0\' class=\'borderless\'><tr><td valign=\'top\'>\r\n<img class=\'itemicon\' src=\'{ITEM_ICON_LINK}\'></td><td><div class=\'wowitemt\' style=\'display:block\'><div>\r\n<span class=\'orangename\'>".$data[0]."</span><br /></div>\r\n<div class=\'tooldiv\'><span class=\'itemdesc\'>&quot;".$data[4]."&quot;</span><br />\r\n</div></div></td></tr></table>');";
	}else{
		$sql = "INSERT INTO `".item_cache_table."` VALUES ('".$data[0]."', '".$data[1]."', '".$data[2]."',  '".$data[3]."', '<table cellpadding=\'0\' border=\'0\' class=\'borderless\'><tr><td valign=\'top\'>\r\n<img class=\'itemicon\' src=\'{ITEM_ICON_LINK}\'></td><td><div class=\'wowitemt\' style=\'display:block\'><div>\r\n<span class=\'orangename\'>".$data[0]."</span><br /></div>\r\n<div class=\'tooldiv\'><span class=\'itemdesc\'>&quot;".$data[4]."&quot;</span><br />\r\n</div></div></td></tr></table>');";
	}
	return $sql;
}

function SQLItemstatsCache($version){
	if($version && $version > '1.5.1'){
		$itemstats_sql = "CREATE TABLE IF NOT EXISTS `item_cache` (
                  	`item_name` varchar(100) NOT NULL default '',
                  	`item_lang` char(2) NOT NULL default '',
                  	`item_id` varchar(100) NOT NULL default '',
                    `item_link` varchar(100) default NULL,
                    `item_color` varchar(20) NOT NULL default '',
                    `item_icon` varchar(50) NOT NULL default '',
                    `item_html` text NOT NULL,
                    UNIQUE KEY `item_name` (`item_name`),
                    FULLTEXT KEY `item_html` (`item_html`)
                    ) ENGINE = MYISAM";
	}else{
		$itemstats_sql = "CREATE TABLE IF NOT EXISTS `item_cache` (
                  	`item_name` varchar(100) NOT NULL default '',
                    `item_link` varchar(100) default NULL,
                    `item_color` varchar(20) NOT NULL default '',
                    `item_icon` varchar(50) NOT NULL default '',
                    `item_html` text NOT NULL,
                    UNIQUE KEY `item_name` (`item_name`),
                    FULLTEXT KEY `item_html` (`item_html`)
                    ) ENGINE = MYISAM";
   }
   return $itemstats_sql;
}

// Itemstats Additions: Returns the properly capitalized name for the specified item.  If the update flag is set and the item is
// not in the cache, item data item will be fetched from an info site
function itemstats_format_name($name, $update = false)
{
  global $eqdkp_root_path;
	$item_stats = new ItemStats();
	$realname = $item_stats->getItemName($name, $update);
	return $realname;
}

// decorate own icons
function itemstats_decorate_Icon($name, $size, $version = false, $download=false)
{
  global $eqdkp_root_path;
	$item_stats = new ItemStats();
  
   // dowload if not there
  	if($download == true){
      $item_stats->getItemName($name,true);
  	}
  
	// Apply color to the name.
	$item_color = $item_stats->getItemColor($name);
	if (!empty($item_color))
	{
        $decorated_name = "<span class='" . $item_color . "'>" . $decorated_name . "</span>";
	}
  
  //item size
  if ($size == "large"){
    $itemsize = "itemicon";
  }elseif ($size == "middle"){
    $itemsize = "middleitemicon";
  }else {
    $itemsize = "smallitemicon";
  }
  
	// Add the icon to the name.
	$item_icon_link = $item_stats->getItemIconLink($name);
	if (!empty($item_icon_link))
	{
		$decorated_name = "<img class='".$itemsize."' src='" . $item_icon_link . "'> " . $decorated_name;
	}else{
		$decorated_name = "<img class='".$itemsize."' src='images/no_itemcache.png'> " . $decorated_name;
}

	// Wrap everything around tooltip code.
	$item_tooltip_html = $item_stats->getItemTooltipHtml($name);
	if (!empty($item_tooltip_html))
	{
		if($version){
			if (defined('displayitemstatslink') && displayitemstatslink == true){
      	$item_tooltip_html = str_replace("{ITEMSTATS_LINK}", "<br/><p class=\'textitemstats\'>itemstats.free.fr</p>", $item_tooltip_html);
      }else{
       	$item_tooltip_html = str_replace("{ITEMSTATS_LINK}", "", $item_tooltip_html);
      }
		}
		$decorated_name = "<span " . $item_tooltip_html . ">" . $decorated_name . "</span>";
	}


	return $decorated_name;
}

// write Header Image
function itemstats_get_header_Icon($name, $size, $alt, $link='')
{
  global $eqdkp_root_path, $conf, $db;
	$item_stats = new ItemStats();
  
  //item size
  if ($size == "large"){
    $itemsize = "itemicon";
  }elseif ($size == "middle"){
    $itemsize = "middleitemicon";
  }else {
    $itemsize = "smallitemicon";
  }
  
	// Add the icon to the name.
	$item_icon_link = $item_stats->getItemIconLink($name);
	if(!$link){
    $link = 'JavaScript:void(0)';
  }
	if (!empty($item_icon_link))
	{
		$decorated_name = "<a href='$link' onMouseOver=\"overlib('".$alt."', HAUTO, VAUTO);\" onMouseOut='nd();'>
    <img class='".$itemsize."' src='" . $item_icon_link . "'></a> ";
	}else{
		$decorated_name = "<a href='$link' onMouseOver=\"overlib('".$alt."', HAUTO, VAUTO);\" onMouseOut='nd();'>
    <img class='".$itemsize."' src='images/no_itemcache.png'></a> ";
}

	return $decorated_name;
}

} // end of class
?>
