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
 * $Id: 300_to_400.php 3302 2008-12-03 14:39:45Z wallenium $
 */
 
if ( !defined('EQDKP_INC') ){
  header('HTTP/1.0 404 Not Found');exit;
} 

$sec_version = '5.0.2';
$updateFunction = 'IS501to502Update';

$updateDESC = array();
$updateSQL = array();

function IS501to502Update(){
  global $db;
  $sql = "SELECT class_id, class_name
      		FROM __classes
      		WHERE class_id <> '0'
      		GROUP BY class_name
      		ORDER BY class_name";
  $result = $db->query($sql);
  while ($row = $db->fetch_record($result)){
    $db->query("UPDATE __itemspecials_items SET `item_buyer`='".$row['class_id']."' WHERE `item_buyer`='".$row['class_name']."'");
  }
  $db->query("ALTER TABLE __itemspecials_items CHANGE `item_buyer` `item_buyer` int(11) NOT NULL default '0'");
}
?>
