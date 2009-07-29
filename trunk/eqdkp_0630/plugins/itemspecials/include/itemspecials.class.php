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

if (!class_exists("SetRight")) { 
  class SetRight
  {
    function SetRight(){
      global $db, $denied_raid_notes, $denied_raid_names, $Sitemtable, $myISclass;
      $this->myItemNames = $this->MyClass = $this->myRaids = $this->myRaidTimes = array();
      
      // Fill the items array
      $items_result= $db->query("SELECT item_id, item_name, item_buyer, item_date FROM ".$Sitemtable);
      while ($row = $db->fetch_record($items_result) ){
        $this->myItemNames[$myISclass->MemName2ID($row['item_buyer'])][] = array(
        				'item_name'		=> $row['item_name'],
        				'item_date'		=> $row['item_date'],
				);
      }
      $db->free_result($items_result);
      
      // Fill the class Array
      $class_result= $db->query("SELECT member_id, member_class_id FROM __members");
      while ($row = $db->fetch_record($class_result) ){
        $this->MyClass[$row['member_id']]   = $row['member_class_id'];
      }
      $db->free_result($class_result);
      
      // Fill the member-Raids array
			$rrresult= $db->query("SELECT r.raid_date, ra.member_name FROM __raid_attendees ra, __raids r WHERE ra.raid_id = r.raid_id");
      while ($rrow = $row = $db->fetch_record($rrresult) ){
      	$this->myRaidTimes[$myISclass->MemName2ID($row['member_name'])][] = $row['raid_date'];
      }
      $db->free_result($rrresult);
      
      // Fill the raid Array
      $sql = "SELECT count(r.raid_id) as anzahl, r.raid_name, r.raid_note, r.raid_date, m.member_id
              FROM __members m, __raids r, __raid_attendees ra
              WHERE r.raid_id = ra.raid_id AND ra.member_name = m.member_name";
      $sql .= (count($denied_raid_names) > 0 ? " AND ( raid_name NOT LIKE '" . implode("' AND raid_name NOT LIKE '", $denied_raid_names) ."') " : '' );
      $sql .= " GROUP BY member_id;";
      $raids_result= $db->query($sql);
      while ($raidrow = $row = $db->fetch_record($raids_result) ){
        $this->myRaids[$raidrow['member_id']][] = array(
                                                   'count'  => $raidrow['anzahl'],
                                                   'name'   => $raidrow['raid_name'],
                                                   'note'   => $raidrow['raid_note']
                                                   );
      }
      $db->free_result($raids_result);
    }
    
    function SetItems(){
    	return $this->myItemNames;
    }
    
    function SetItemsCount(){
    	return count($this->myItemNames);
    }
    
    function getStats($member_id, $follow=true){
      global $denied_raid_notes, $kacknoob, $denied_raid_names, $twinks;
      $itemcounter  = $raidcounter = 0;
      $myItemTimes	= array();
      $myTempItems  = $kacknoob[$this->MyClass[$member_id]];

  		if(is_array($this->myItemNames[$member_id])){
	      foreach($this->myItemNames[$member_id] as $item_name){
	      	$flipped_items = (is_array($myTempItems) && (is_string($myTempItems) or is_int($myTempItems))) ? array_flip($myTempItems) : array();
	        if($this->recursive_in_array($item_name['item_name'], $myTempItems) || $this->recursive_in_array($item_name['item_name'], $flipped_items)){
	          $itemcounter++;
	          $myItemTimes[$member_id][] = $item_name['item_date'];
	        }
	      }
    	}

      if(is_array($this->myRaids[$member_id])){
        foreach($this->myRaids[$member_id] as $myvalues){
        	
        	// Check if an array with denied raids is given, if yes, check if its in the array,
        	// if no, add the raid calc manually (we have to check because of php errors!)
        	if($denied_raid_notes[$myvalues['name']]){
	          if(!@in_array($myvalues['note'], $denied_raid_notes[$myvalues['name']])){
	            $raidcounter += $myvalues['count'];
	          }
        	}else{
        		$raidcounter += $myvalues['count'];
        	}
        }
      }
  		
      // Twinks Raids und Items dem Mainchar zuordnen
      /*
      if ($follow == true){
        $twinks_of_char= array_keys($twinks, $name);
        if (count($twinks_of_char) > 0){
          foreach($twinks_of_char as $twink){
            $retval = getStats($twink,"",false);
            $raidcounter += $retval[0];
            $itemcounter += $retval[1] - 1;
          }
        }
        if(isset($twinks[$name])){
          $retval = getStats($twinks[$name],"",false);
          $raidcounter += $retval[0];
          $itemcounter += $retval[1] - 1;
        }
      }
      */
      return array($raidcounter, $itemcounter, $myItemTimes[$member_id], $this->myRaidTimes[$member_id]);
    }
    
    // Checks if an array is in an recursive array...
    function recursive_in_array($needle, $haystack) {
      if(is_array($haystack)){
	      foreach ($haystack as $stalk) {
	        if ($needle === $stalk || (is_array($stalk) && $this->recursive_in_array($needle, $stalk))) {
	          return true;
	        }
	      }
      }
      return false;
    }
    
    function array_merge_recursive_keep_keys($arrElement1 , $arrElement2 , $intCount = 0){
      $arrNew = array();
           
      $arrElement1Keys = array_keys($arrElement1);
      $arrElement2Keys = array_keys($arrElement2);
           
      $arrDifKeys1  = array_diff($arrElement1Keys, $arrElement2Keys);
      $arrDifKeys2  = array_diff($arrElement2Keys, $arrElement1Keys);
      $arrInter     = array_intersect($arrElement1Keys , $arrElement2Keys);
    
      foreach($arrDifKeys1 as $strKey1){
        $arrNew[$strKey1] = $arrElement1[$strKey1];
      }
      foreach( $arrDifKeys2 as $strKey2){
        $arrNew[$strKey2] = $arrElement2[$strKey2];
      }
      foreach($arrInter as $strInterKey){
        if(is_array( $arrElement1[$strInterKey]) && is_array($arrElement2[$strInterKey])){
          $intCount++;
          $arrNew[$strInterKey] = $this->array_merge_recursive_keep_keys($arrElement1[$strInterKey] , $arrElement2[$strInterKey] ,$intCount);
        }elseif(is_array($arrElement1[$strInterKey]) || is_array($arrElement2[$strInterKey])){
          $arrNew[$strInterKey][] = $arrElement1[$strInterKey];
          $arrNew[$strInterKey][] = $arrElement2[$strInterKey];
        }else{
          $arrNew[$strInterKey] = array();
          $arrNew[$strInterKey][] = $arrElement1[$strInterKey];
          $arrNew[$strInterKey][] = $arrElement2[$strInterKey];
        }
      }
      return $arrNew;
    }
    
    function AttendanceCount($array, $days=30){
    	$timediff = time()-($days*24*3600);
    	$n = 0;
    	if(is_array($array)){
    		foreach($array as $myTS){
    			if($myTS >= $timediff){
    				$n++;
    			}
    		}
    	}
    	return $n;
    }
    
  } // end of class
}

if (!class_exists("ItemSpecials")) { 
  class ItemSpecials
  {
    function ItemSpecials(){
      global $db;
      $member_result = $db->query("SELECT member_id, member_name FROM __members");
      while ($row = $db->fetch_record($member_result) ){
        $this->myMembers[$row['member_name']] = $row['member_id'];
      }
    }
    
    function MemName2ID($name){
      $tmpID = $this->myMembers[$name];
      return ($tmpID) ? $tmpID : $name;
    }
    
    function GeneratePageTitle($name){
      global $user, $eqdkp;
      return sprintf($user->lang['title_prefix'], $eqdkp->config['guildtag'], $eqdkp->config['dkp_name']).': '.$user->lang['itemspecials'].' - '.$name;
    }
  }
}
?>
