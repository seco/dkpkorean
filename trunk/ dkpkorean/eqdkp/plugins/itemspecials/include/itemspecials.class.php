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
      $this->myItems = $this->MyClass = $this->myRaids = array();
      
      // Fill the items array
      $items_result= $db->query("SELECT item_name, item_buyer FROM ".$Sitemtable);
      while ($row = $db->fetch_record($items_result) ){
        $this->myItems[$myISclass->MemName2ID($row['item_buyer'])][] = $row['item_name'];
      }
      $db->free_result($items_result);
      
      // Fill the class Array
      $class_result= $db->query("SELECT member_id, member_class_id FROM __members m");
      while ($row = $db->fetch_record($class_result) ){
        $this->MyClass[$row['member_id']]   = $row['member_class_id'];
      }
      $db->free_result($class_result);
      
      // Fill the raid Array
      $sql = "SELECT count(r.raid_id) as anzahl, r.raid_name, r.raid_note, m.member_id
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
    
    function getStats($member_id, $follow=true){
      global $denied_raid_notes, $kacknoob, $denied_raid_names, $twinks;
      $itemcounter  = $raidcounter = 0;
      $myTempItems  = $kacknoob[$this->MyClass[$member_id]];
  
      foreach($this->myItems[$member_id] as $item_name){
        if($this->recursive_in_array($item_name, $myTempItems) || $this->recursive_in_array($item_name, array_flip($myTempItems))){
          $itemcounter++;
        }
      }
  
      if(is_array($this->myRaids[$member_id])){
        foreach($this->myRaids[$member_id] as $myvalues){
          if(!@in_array($myvalues['note'], $denied_raid_notes[$myvalues['name']])){
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
      return array($raidcounter, $itemcounter);
    }
    
    // Checks if an array is in an recursive array...
    function recursive_in_array($needle, $haystack) {
      foreach ($haystack as $stalk) {
        if ($needle === $stalk || (is_array($stalk) && $this->recursive_in_array($needle, $stalk))) {
          return true;
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
  }
}
?>
