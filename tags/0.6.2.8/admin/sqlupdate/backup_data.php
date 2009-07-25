<?php
 /*
 * Project:     EQdkp-Plus
 * License:     Creative Commons - Attribution-Noncommercial-Share Alike 3.0 Unported
 * Link:		    http://creativecommons.org/licenses/by-nc-sa/3.0/
 * -----------------------------------------------------------------------
 * Began:       2008
 * Date:        $Date: 2009-05-11 01:09:41 +0200 (Mo, 11 Mai 2009) $
 * -----------------------------------------------------------------------
 * @author      $Author: osr-corgan $
 * @copyright   2006-2008 Corgan - Stefan Knaak | Wallenium & the EQdkp-Plus Developer Team
 * @link        http://eqdkp-plus.com
 * @package     eqdkp-plus
 * @version     $Rev: 4821 $
 * 
 * $Id: backup_data.php 4821 2009-05-10 23:09:41Z osr-corgan $
 */

if ( !defined('EQDKP_INC') ){
    header('HTTP/1.0 404 Not Found');exit;
}

global $db, $eqdkp, $user;

$a_system['newsloot']['name'] = "Newsloot" ;
$a_system['newsloot']['version'] = "0.3" ;
$a_system['newsloot']['detail'] = "Table column" ;

$a_system['pk_config']['name'] = "Plus Kernel" ;
$a_system['pk_config']['version'] = "0.4" ;
$a_system['pk_config']['detail'] = "Config Table" ;

$a_system['pk_links']['name'] = "Plus Kernel Links" ;
$a_system['pk_links']['version'] = "0.4" ;
$a_system['pk_links']['detail'] = "Links Table" ;

$a_system['pk_update']['name'] = "Plus Kernel Update" ;
$a_system['pk_update']['version'] = "0.4" ;
$a_system['pk_update']['detail'] = "Update Table" ;

$a_system['multidkp']['name'] = "MultiDKP" ;
$a_system['multidkp']['version'] = "0.4" ;
$a_system['multidkp']['detail'] = "MultiDKP Table" ;

$a_system['multidkp_events']['name'] = "MultiDKP" ;
$a_system['multidkp_events']['version'] = "0.4" ;
$a_system['multidkp_events']['detail'] = "MultiDKP2Events Table" ;

$a_system['adjustment']['name'] = "MultiDKP" ;
$a_system['adjustment']['version'] = "0.4" ;
$a_system['adjustment']['detail'] = "Adjustment column" ;

$a_system['event_icon']['name'] = "EventIcon" ;
$a_system['event_icon']['version'] = "0.4" ;
$a_system['event_icon']['detail'] = "Icon column" ;

$a_system['item_id']['name'] = "ItemID" ;
$a_system['item_id']['version'] = "0.4" ;
$a_system['item_id']['detail'] = "Item ID" ;

$a_system['multidpk_fix']['name'] = "MultiDKP_Fix" ;
$a_system['multidpk_fix']['version'] = "0.4.4.2" ;
$a_system['multidpk_fix']['detail'] = "MultiDKP Database Fix" ;

$a_system['mod_game']['name'] = "Mod_Game" ;
$a_system['mod_game']['version'] = "0.5.0.4" ;
$a_system['mod_game']['detail'] = "Modular Game Option" ;

$a_system['rss']['name'] = "RSS" ;
$a_system['rss']['version'] = "0.5.0.5" ;
$a_system['rss']['detail'] = "RSS News Feed Reader" ;

$a_system['comments']['name'] = "Comments" ;
$a_system['comments']['version'] = "0.5.0.7" ;
$a_system['comments']['detail'] = "Comments System" ;

$a_system['advanced_news']['name'] = "Advanced_News" ;
$a_system['advanced_news']['version'] = "0.5.0.8" ;
$a_system['advanced_news']['detail'] = "Advanced News" ;

$a_system['511']['name'] = "511" ;
$a_system['511']['version'] = "0.5.1.1" ;
$a_system['511']['detail'] = "Plus Version 0.5.1.1" ;

$a_system['513']['name'] = "513" ;
$a_system['513']['version'] = "0.5.1.3" ;
$a_system['513']['detail'] = "modular Games" ;

$a_system['classcolors']['name'] = "classcolor" ;
$a_system['classcolors']['version'] = "0.6.0.3" ;
$a_system['classcolors']['detail'] = "dynamic Class Color" ;

$a_system['modelviewer']['name'] = "modelviewer" ;
$a_system['modelviewer']['version'] = "0.6.0.4" ;
$a_system['modelviewer']['detail'] = "WoW 3D Modelviewer" ;

$a_system['portal']['name'] = "portal" ;
$a_system['portal']['version'] = "0.6.0.4" ;
$a_system['portal']['detail'] = "Portal Management" ;

$a_system['616']['name'] = "616" ;
$a_system['616']['version'] = "0.6.1.6" ;
$a_system['616']['detail'] = "Newsimages & Lytebox" ;

$a_system['620']['name'] = "620" ;
$a_system['620']['version'] = "0.6.2.0" ;
$a_system['620']['detail'] = "Portalupdate & Settings" ;

$a_system['621']['name'] = "621" ;
$a_system['621']['version'] = "0.6.2.1" ;
$a_system['621']['detail'] = "Backgroundimage & Sitelogo" ;


$a_system['622']['name'] = "622" ;
$a_system['622']['version'] = "0.6.2.2" ;
$a_system['622']['detail'] = "Raidnotes & Backups" ;

$a_system['623']['name'] = "623" ;
$a_system['623']['version'] = "0.6.2.3" ;
$a_system['623']['detail'] = "Userdata, Linkmenu, Newsflags" ;

$a_system['624']['name'] = "624" ;
$a_system['624']['version'] = "0.6.2.4" ;
$a_system['624']['detail'] = "RSS, Backups, Raidnote" ;

$a_system['627']['name'] = "627" ;
$a_system['627']['version'] = "0.6.2.7" ;
$a_system['627']['detail'] = "Userlist & Settings" ;

#newsloot spalte
$sql = 'SHOW columns
        FROM ' . NEWS_TABLE . "
        LIKE 'showRaids_id'";
$result = $db->query($sql);
if (mysql_num_rows($result) > 0)
	{$a_system['newsloot']['state'] = 1;}
else{$a_system['newsloot']['state'] = 0;}

#Plus Kernel Config
$sql = "SHOW TABLE STATUS LIKE '". PLUS_CONFIG_TABLE ."'";
$result = $db->query($sql);
if (mysql_num_rows($result) > 0)
	{$a_system['pk_config']['state'] = 1;}
else
{$a_system['pk_config']['state'] = 0;}

#Plus Kernel Links
$sql = "SHOW TABLE STATUS LIKE '". PLUS_LINKS_TABLE ."'";
$result = $db->query($sql);
if (mysql_num_rows($result) > 0)
	{$a_system['pk_links']['state'] = 1;}
else
{$a_system['pk_links']['state'] = 0;}

#Plus Kernel Update
$sql = "SHOW TABLE STATUS LIKE '". PLUS_UPDATE_TABLE ."'";
$result = $db->query($sql);
if (mysql_num_rows($result) > 0)
	{$a_system['pk_update']['state'] = 1;}
else
{$a_system['pk_update']['state'] = 0;}

#MULTIDKP_TABLE
$sql = "SHOW TABLE STATUS LIKE '". MULTIDKP_TABLE ."'";
$result = $db->query($sql);
if (mysql_num_rows($result) > 0)
	{$a_system['multidkp']['state'] = 1;}
else
{$a_system['multidkp']['state'] = 0;}

#MULTIDKP2EVENTS_TABLE
$sql = "SHOW TABLE STATUS LIKE '". MULTIDKP2EVENTS_TABLE ."'";
$result = $db->query($sql);
if (mysql_num_rows($result) > 0)
	{$a_system['multidkp_events']['state'] = 1;}
else
{$a_system['multidkp_events']['state'] = 0;}

#adjusment spalte
$sql = 'SHOW columns
        FROM ' . ADJUSTMENTS_TABLE . "
        LIKE 'raid_name'";
$result = $db->query($sql);
if (mysql_num_rows($result) > 0)
	{$a_system['adjustment']['state'] = 1;}
else{$a_system['adjustment']['state'] = 0;}

#Event Icon Spalte
$sql = 'SHOW columns
        FROM ' . EVENTS_TABLE . "
        LIKE 'event_icon'";
$result = $db->query($sql);
if (mysql_num_rows($result) > 0)
	{$a_system['event_icon']['state'] = 1;}
else{$a_system['event_icon']['state'] = 0;}

#Game ItemID spalte
$sql = 'SHOW columns
        FROM ' . ITEMS_TABLE . "
        LIKE 'game_itemid'";
$result = $db->query($sql);
if (mysql_num_rows($result) > 0)
	{$a_system['item_id']['state'] = 1;}
else{$a_system['item_id']['state'] = 0;}

$sql = "describe ".MULTIDKP_TABLE;
$result = $db->query($sql);
$a_system['multidpk_fix']['state'] = 1;
while ($row = $db->fetch_record($result) )
{
	if (($row[0] == "multidkp_id") and  (!$row[1] == "int(11)"))
	{$a_system['multidpk_fix']['state'] = 0 ;}

	if (($row[0] == "multidkp_id") and  (!$row[5] == "auto_increment"))
	{$a_system['multidpk_fix']['state'] = 0 ;}
}

$sql = "describe ".MULTIDKP2EVENTS_TABLE;
$result = $db->query($sql);
while ($row = $db->fetch_record($result) )
{
	if (($row[0] == "multidkp2event_id") and  (!$row[1] == "int(11)"))
	{$a_system['multidpk_fix']['state'] = 0 ;}

	if (($row[0] == "multidkp2event_multi_id") and (!$row[1] == "int(11)"))
	{$a_system['multidpk_fix']['state'] = 0 ;}

	if (($row[0] == "multidkp2event_id") and  (!$row[5] == "auto_increment"))
	{$a_system['multidpk_fix']['state'] = 0 ;}
}


#Mod_game
$sql = 'SELECT * FROM ' . CONFIG_TABLE . " WHERE config_name LIKE '%game_language'";
$result = $db->query($sql);
if (mysql_num_rows($result) > 0)
	{$a_system['mod_game']['state'] = 1;}
else{$a_system['mod_game']['state'] = 0;}


#RSS_TABLE
$sql = "SHOW TABLE STATUS LIKE '". PLUS_RSS_TABLE ."'";
$result = $db->query($sql);
if (mysql_num_rows($result) > 0)
	{$a_system['rss']['state'] = 1;}
else
{$a_system['rss']['state'] = 0;}


#Comments
$sql = "SHOW TABLE STATUS LIKE '__comments'";
$result = $db->query($sql);
if (mysql_num_rows($result) > 0)
	{$a_system['comments']['state'] = 1;}
else
{$a_system['comments']['state'] = 0;}

$sql = "describe __comments";
$result = $db->query($sql);
while ($row = $db->fetch_record($result) )
{
	if (($row['Field'] == "attach_id") and  ($row['Type'] == "int(11) unsigned"))
	{$a_system['comments']['state'] = 0 ;}
}


#Advanced_News
$sql = 'SHOW columns
        FROM ' . NEWS_TABLE . "
        LIKE 'news_permissions'";
$result = $db->query($sql);
if (mysql_num_rows($result) > 0)
	{$a_system['advanced_news']['state'] = 1;}
else{$a_system['advanced_news']['state'] = 0;}

$a_system['511']['state'] = 0 ;
$sql = "SELECT config_value from ". CONFIG_TABLE ."
        WHERE config_name = 'plus_version'" ;
$result = $db->query($sql);
while ($row = $db->fetch_record($result) )
{
	$v1 = intval(str_replace('.','',$row['config_value']));
	$v2 = intval(str_replace('.','','0.5.1.1'));

	if ($v1 >= $v2)
	{
		$a_system['511']['state'] = 1 ;
	}
}

$a_system['513']['state'] = 0 ;
$sql = "SELECT config_value from ". CONFIG_TABLE ."
        WHERE config_name = 'plus_version'" ;
$result = $db->query($sql);
while ($row = $db->fetch_record($result) )
{
	$v1 = intval(str_replace('.','',$row['config_value']));
	$v2 = intval(str_replace('.','','0.5.1.3'));

	if ($v1 >= $v2)
	{
		$a_system['513']['state'] = 1 ;
	}
}


$sql = "SHOW TABLE STATUS LIKE '". CLASSCOLOR_TABLE ."'";
$result = $db->query($sql);
if (mysql_num_rows($result) > 0)
	{$a_system['classcolors']['state'] = 1;}
else
{$a_system['classcolors']['state'] = 0;}

#Modelviewer
$sql = "SHOW TABLE STATUS LIKE '". ITEMID_TABLE ."'";
$result = $db->query($sql);
if (mysql_num_rows($result) > 0)
	{$a_system['modelviewer']['state'] = 1;}
else
{$a_system['modelviewer']['state'] = 0;}

#Portal
$sql = "SHOW TABLE STATUS LIKE '__portal'";
$result = $db->query($sql);
if (mysql_num_rows($result) > 0)
	{$a_system['portal']['state'] = 1;}
else
{$a_system['portal']['state'] = 0;}

$a_system['616']['state'] = 0 ;
$a_system['620']['state'] = 0 ;
$a_system['621']['state'] = 0 ;
$a_system['622']['state'] = 0 ;
$a_system['623']['state'] = 0 ;
$a_system['624']['state'] = 0 ;
$a_system['627']['state'] = 0 ;
$sql = "SELECT config_value from ". CONFIG_TABLE ."
        WHERE config_name = 'plus_version'" ;
$result = $db->query($sql);
while ($row = $db->fetch_record($result) )
{
	$v1 = intval(str_replace('.','',$row['config_value']));
	$v2_616 = intval(str_replace('.','','0.6.1.6'));
	$v2_620 = intval(str_replace('.','','0.6.2.0'));
	$v2_621 = intval(str_replace('.','','0.6.2.1'));
	$v2_622 = intval(str_replace('.','','0.6.2.2'));
	$v2_623 = intval(str_replace('.','','0.6.2.3'));
  	$v2_624 = intval(str_replace('.','','0.6.2.4'));
  	$v2_626 = intval(str_replace('.','','0.6.2.7'));
  
	if ($v1 >= $v2_616){$a_system['616']['state'] = 1 ;	}
	if ($v1 >= $v2_620){$a_system['620']['state'] = 1 ;}
	if ($v1 >= $v2_621){$a_system['621']['state'] = 1 ;}
	if ($v1 >= $v2_622){$a_system['622']['state'] = 1 ;	}
	if ($v1 >= $v2_623){$a_system['623']['state'] = 1 ;	}
	if ($v1 >= $v2_624){$a_system['624']['state'] = 1 ;	}
	if ($v1 >= $v2_626){$a_system['627']['state'] = 1 ;	}
	
}


##########

$a_styles['wow_Vert']['version'] = '0.3';
$a_styles['wow_style']['version'] = '0.3';
$a_styles['wow_style_Vert']['version']= '0.3';
$a_styles['WoWMoonclaw01']['version'] = '0.3';
$a_styles['WoWMoonclaw01_Vert']['version'] = '0.3';
$a_styles['WoWMaevahEmpire']['version'] = '0.3';
$a_styles['WoWMaevahEmpire_Vert']['version'] = '0.3';
$a_styles['dkpUA_Vert']['version'] = '0.3';
$a_styles['EQCPS_Vert']['version'] = '0.3';
$a_styles['Collab_Vert']['version'] = '0.3';
$a_styles['Blueish_Vert']['version'] = '0.3';
$a_styles['Penguin_Vert']['version'] = '0.3';
$a_styles['Default_Vert']['version'] = '0.3';
$a_styles['EQdkp VB2_Vert']['version'] = '0.3';
$a_styles['subSilver_Vert']['version'] = '0.3';
$a_styles['EQdkp VB2_Vert']['version'] = '0.3';
$a_styles['Old_School_Vert']['version'] = '0.3';
$a_styles['EQdkp Items_Vert']['version'] = '0.3';
$a_styles['aallix Silver_Vert']['version'] = '0.3';
$a_styles['EQdkp Invision_Vert']['version'] = '0.3';
$a_styles['m9wow3eq']['version'] = '0.5' ;
$a_styles['luna_wotlk']['version'] = '0.6' ;
$a_styles['m9wotlk']['version'] = '0.6' ;

foreach($a_styles as $key => $value)
{ 
	$template_name = '';
	$sql = 'SELECT template_path  
	        FROM ' . STYLES_TABLE . "
  			WHERE style_name LIKE '%".$key."'";

  $template_name = $db->query_first($sql);
	//Found template in DB
  if($template_name != '')
	{
			$a_styles[$key]['state'] = 1;
			$template_file = '../templates/'.$template_name.'/page_header.html';
			if(file_exists($template_file))
			{
				$a_styles[$key]['filestate']=1;
			}
			else
      {
				$a_styles[$key]['filestate']=0;
			}
						
			if ($key == 'm9wow3eq') 
			{
				$sql = 'SELECT logo_path  
	        			FROM ' . STYLES_CONFIG_TABLE . "
  						WHERE style_id = 35";	
				$logopath = $db->query_first($sql);	

				if ($logopath == '/logo/wow_logo.gif') 
				{
					$a_styles[$key]['state'] = 0;	
				}
				
			}
	}
	else // dont found template in DB, check the files
	{
		$a_styles[$key]['state'] = 0;
		$template_file = str_replace('_Vert','V','../templates/'.$key.'/page_header.html');
		if(file_exists($template_file))
		{
			$a_styles[$key]['filestate']=1;
		}
		else
		{
			$a_styles[$key]['filestate']=2;
		}
	}
}# end foreach styles


?>
