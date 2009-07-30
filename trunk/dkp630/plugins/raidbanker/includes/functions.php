<?php
 /*
 * Project:     EQdkp RaidBanker
 * License:     Creative Commons - Attribution-Noncommercial-Share Alike 3.0 Unported
 * Link:		    http://creativecommons.org/licenses/by-nc-sa/3.0/
 * -----------------------------------------------------------------------
 * Began:       2005
 * Date:        $Date: 2008-12-30 14:20:40 +0100 (Di, 30 Dez 2008) $
 * -----------------------------------------------------------------------
 * @author      $Author: wallenium $
 * @copyright   2005-2008 Simon (Wallenium) Wallmann
 * @link        http://eqdkp-plus.com
 * @package     raidbanker
 * @version     $Rev: 3545 $
 * 
 * $Id: functions.php 3545 2008-12-30 13:20:40Z wallenium $
 */
 
function GetFilterValues($language)
{
	$language = trim(strtolower($language));
  if ($language == "german"){
    $filter_value['type'] = array(
      'quest'     => "Quest",
      'weapon'    => "Waffe",
      'reagent'   => "Reagenz",
      'builder'   => "Handwerkswaren",
      'armor'     => "Rьstung",
      'key'       => "Schlьssel",
      'useable'   => "Verbrauchbar",
      'misc'      => "Verschiedenes"
    );

    $filter_value['quality'] = array(
      '5'       => "Legendдr",
      '4'       => "Episch",
      '3'       => "Rar",
      '2'       => "Normal",
      '1'       => "Rest"
    );
  }elseif ($language == "russian"){
    $filter_value['type'] = array(
      'quest'     => "Квест",
      'weapon'    => "Оружие",
      'reagent'   => "Реагент",
      'builder'   => "Созданное",
      'armor'     => "Броня",
      'key'       => "Ключ",
      'useable'   => "Использование",
      'misc'      => "Разное"
    );

    $filter_value['quality'] = array(
      '5'       => "Легендарное",
      '4'       => "Эпическое",
      '3'       => "Редкое",
      '2'       => "Необычное",
      '1'       => "Обычное"
    );
  }else{
    // filter array
    $filter_value['type'] = array(
      'quest'     => "Quest",
      'weapon'    => "Weapon",
      'reagent'   => "Reagent",
      'builder'   => "Crafted",
      'armor'     => "Armor",
      'key'       => "Key",
      'useable'   => "Usable",
      'misc'      => "Miscellaneous"
    );

  $filter_value['quality'] = array(
      '5'       => "Legendary",
      '4'       => "Epic",
      '3'       => "Rare",
      '2'       => "Normal",
      '1'       => "Rest"
  );
  }
  return $filter_value;
}
      
// get the item name (out of xml file?)
function GetItemName($itemid, $itemname)
		{
		global $eqdkp_root_path;
			if(file_exists($eqdkp_root_path . "plugins/raidbanker/includes/itemlist.xml"))
			{
				$itemlisthandle = fopen($eqdkp_root_path . "plugins/raidbanker/includes/itemlist.xml", "r");
				while(!feof($itemlisthandle))
				{
					$itemlistbuffer = fgets($itemlisthandle, 1024);
					preg_match_all("/<wowitem name=\"(.+?)\" id=\"(\d+)\" \/>/s", $itemlistbuffer, $itemlista, PREG_SET_ORDER);
					foreach($itemlista as $itemlistdata)
					{
						$gitemlist[$itemlistdata[2]] = $itemlistdata[1];
					}
				}
				fclose($itemlisthandle);
			}else{
        $gitemlist[$itemlistdata[2]] = $itemname;
      }
			if(!empty($altitemname))
			{
				return $altitemname;
			}
			elseif(!empty($gitemlist[$itemid]))
			{
				return $gitemlist[$itemid];
			}
			else
			{
				return false;
			}
		}
		
		function GeneratePageTitle($name){
      global $user, $eqdkp;
      return sprintf($user->lang['title_prefix'], $eqdkp->config['guildtag'], $eqdkp->config['dkp_name']).': '.$user->lang['rb_raidbanker'].' - '.$name;
    }
    
    function MoneyOutput($input, $variables){
      if($input){
        $outp = floor($input/$variables['factor']);
        return ($variables['size'] == 'unlimited') ? $outp : substr($outp, -2);
      }else{
        return '0';
      }
    }
    
    function ShowMoneyIcons($mymoney){
      global $money_data;
      $monvalue = '';
      foreach($money_data as $monName=>$monValue){
        $monvalue .= MoneyOutput($mymoney, $monValue).'<img src="'.$monValue['image'].'" /> ';
      }
      return $monvalue;
    }
?>
