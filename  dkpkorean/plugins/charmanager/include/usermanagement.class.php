<?php
 /*
 * Project:     EQdkp CharManager 1
 * License:     Creative Commons - Attribution-Noncommercial-Share Alike 3.0 Unported
 * Link:		    http://creativecommons.org/licenses/by-nc-sa/3.0/
 * -----------------------------------------------------------------------
 * Began:       2006
 * Date:        $Date: 2009-02-21 16:52:18 +0100 (Sa, 21 Feb 2009) $
 * -----------------------------------------------------------------------
 * @author      $Author: wallenium $
 * @copyright   2005-2008 Simon (Wallenium) Wallmann
 * @link        http://eqdkp-plus.com
 * @package     charmanager
 * @version     $Rev: 3926 $
 * 
 * $Id: usermanagement.class.php 3926 2009-02-21 15:52:18Z wallenium $
 */

class CharTools
{
	function updateConnection($member_id){
	global $db, $user, $config;
	// Users -> Members associations
        $sql = 'DELETE FROM ' . MEMBER_USER_TABLE . '
                WHERE user_id = ' . $user->data['user_id'];
        $db->query($sql);

        if ( (isset($_POST['member_id'])) && (is_array($_POST['member_id'])) )
        {
            $sql = 'INSERT INTO ' . MEMBER_USER_TABLE . '
                    (member_id, user_id)
                    VALUES ';

            $query = array();
            foreach ( $_POST['member_id'] as $member_id )
            {
                $query[] = '(' . $member_id . ', ' . $user->data['user_id'] . ')';
            }

            $sql .= implode(', ', $query);
            $db->query($sql);
            return true;
        }else{
            return false;
        }   
	}
	
	
	function addChar($membername, $is_import=false){
		global $db, $user, $table_prefix, $conf;

    // Make sure that each member's name is properly capitalized
    $member_name = strtolower(preg_replace('/[[:space:]]/i', ' ', $membername));
    $member_name = ucwords($member_name);

    // Check for existing member name
    $sql = "SELECT member_id FROM __members WHERE member_name = '".$member_name."'";
    $member_ids = $db->query_first($sql);

    // Error out if member name exists
    if ( isset($member_ids) && $member_ids > 0 ) {
      $failure_message = array('false',$member_name,$member_ids);
      return $failure_message;
    }else{
      $failure_message = array('true','','');
    }

    // Add into members table
    $query = $db->build_query('INSERT', array(
            'member_name'       => $member_name,
            'member_earned'     => 0,
            'member_spent'      => 0,
            'member_adjustment' => 0,
            'member_firstraid'  => 0,
            'member_lastraid'   => 0,
            'member_raidcount'  => 0,
            'member_level'      => (isset($_POST['member_level'])) ? $_POST['member_level'] : 0,
            'member_race_id'    => $_POST['member_race_id'],
            'member_class_id'   => $_POST['member_class_id'])
    );
    $blubb = $db->query('INSERT INTO __members' . $query);
    
    // Real Member ID
    $member_id = $db->insert_id();
    
    // add into members_addition table
    if($conf['uc_nowarcraft'] == 1){
      $query = $db->build_query('INSERT', array(
            'member_id'       => $member_id,
            'picture'     		=> $_POST['member_pic'],
            'guild'						=> $_POST['guild'],
            'last_update'			=> $_POST['last_update'],
						'gender'					=> $_POST['gender'],
            )
      );
    }else{
      $dataarray1 =	array(
            'member_id'       => $member_id,
            'picture'     		=> $_POST['member_pic'],
            'skill_1'					=> $_POST['skill_1'],
            'skill_2'					=> $_POST['skill_2'],
            'skill_3'					=> $_POST['skill_3'],
            'guild'						=> $_POST['guild'],
            'blasc_id'				=> $_POST['blasc_id'],
            'ct_profile'			=> $_POST['ct_profile'],
            'curse_profiler'	=> $_POST['curse_profiler'],
            'allakhazam'			=> $_POST['allakhazam'],
            'talentplaner'		=> $_POST['talentplaner'],
            'health_bar'			=> $_POST['health_bar'],
            'second_bar'			=> $_POST['second_bar'],
            'second_name'			=> $_POST['second_name'],
            'last_update'			=> $_POST['last_update'],
            'prof1_value'			=> $_POST['prof1_value'],
						'prof1_name'			=> $_POST['prof1_name'],
						'prof2_value'			=> $_POST['prof2_value'],
						'prof2_name'			=> $_POST['prof2_name'],
						'gender'					=> $_POST['gender'],
						'faction'					=> $_POST['faction'],
            );
            
          $dataarray2 =	array(
            'fir'							=> $_POST['fire'],
            'nr'							=> $_POST['nature'],
            'sr'							=> $_POST['shadow'],
            'ar'							=> $_POST['arcane'],
            'frr'							=> $_POST['ice']
            );
          
          $dataarray3 =	array(
            'notes'						=> htmlspecialchars($_POST['notes'], ENT_QUOTES)
            );
        
					if($conf['uc_noresisave'] == 1 && $is_import){
            $dataarray = $dataarray1;
          }else{
            $dataarray = array_merge($dataarray1, $dataarray2, $dataarray3);
          }
        	$query = $db->build_query('INSERT', $dataarray);
    }
    $blubb = $db->query('INSERT INTO __member_additions' . $query);        
        
    // set the char to the user if he wants it ;)
    if ($_POST['overtakeuser']){
      $sql = 'INSERT INTO __member_user (member_id, user_id) VALUES ('.$member_id.', '.$user->data['user_id'].')';
      $db->query($sql);
    }

    if ($blubb){
      return $failure_message;
    }else{
      $failure_message = array('false','','');
      return $failure_message;
    }
	} // end of add

  function updateChar($memberid, $dataarray = '', $is_import=false){
		global $db, $user, $table_prefix, $conf, $pcache;
        if (!defined('MEMBER_ADDITION_TABLE')) { define('MEMBER_ADDITION_TABLE', $table_prefix . 'member_additions'); }
          // Make sure that each member's name is properly capitalized
        $member_name = strtolower(preg_replace('/[[:space:]]/i', ' ', $_POST['member_name']));
        $member_name = ucwords($member_name);
				
				if($dataarray){
        $query = $db->build_query('UPDATE', array(
            'member_level'      => $dataarray['member_level'],
            'member_race_id'    => $dataarray['member_race_id'],
            'member_class_id'   => $dataarray['member_class_id'])
        );
      }else{
      	$query = $db->build_query('UPDATE', array(
            'member_name'       => $member_name,
            'member_level'      => $_POST['member_level'],
            'member_race_id'    => $_POST['member_race_id'],
            'member_class_id'   => $_POST['member_class_id'])
        );
      }
      	$blubb = $db->query('UPDATE ' . MEMBERS_TABLE . ' SET ' . $query . " WHERE member_id='" . $memberid . "'");
        
        // check  if its an update or an new entry in the additional table
        $memberadd_sql = "SELECT member_id FROM ".MEMBER_ADDITION_TABLE." WHERE member_id='" . $memberid . "'";
        $additional_result = $db->query($memberadd_sql);
        if (!$db->fetch_record($additional_result)){
        	if($dataarray){
        		if($conf['uc_nowarcraft'] == 1){
        			$query = $db->build_query('INSERT', array(
            		'member_id'       => $memberid,
		            'guild'						=> $dataarray['guild'],
		            'last_update'			=> $dataarray['last_update'],
								'gender'					=> $dataarray['gender'],
            		)
        			);
        		}else{
        		
        		// generate Input Array
        	$dataarray1 =	array(
		            'member_id'       => $memberid,
		            'skill_1'					=> $dataarray['skill_1'],
		            'skill_2'					=> $dataarray['skill_2'],
		            'skill_3'					=> $dataarray['skill_3'],
		            'guild'						=> $dataarray['guild'],
		            'health_bar'			=> $dataarray['health_bar'],
		            'second_bar'			=> $dataarray['second_bar'],
		            'second_name'			=> $dataarray['second_name'],
		            'last_update'			=> $dataarray['last_update'],
		            'prof1_value'			=> $dataarray['prof1_value'],
								'prof1_name'			=> $dataarray['prof1_name'],
								'prof2_value'			=> $dataarray['prof2_value'],
								'prof2_name'			=> $dataarray['prof2_name'],
								'gender'					=> $dataarray['gender'],
								'faction'					=> $dataarray['faction'],
            		);
  
          $dataarray2 =	array(
                'fir'							=> $dataarray['fire'],
		            'nr'							=> $dataarray['nature'],
		            'sr'							=> $dataarray['shadow'],
		            'ar'							=> $dataarray['arcane'],
		            'frr'							=> $dataarray['ice']
		            );
        	
        	$dataarray3 =	array(
                'notes'						=> htmlspecialchars($dataarray['notes'], ENT_QUOTES)
                );
        	
        	if($conf['uc_noresisave'] == 1 && $is_import){
            $dataarray = $dataarray1;
          }else{
            $dataarray = array_merge($dataarray1, $dataarray2, $dataarray3);
          }
        		$query = $db->build_query('INSERT', $dataarray);
        	}
        }else{
        	if($conf['uc_nowarcraft'] == 1){
        		$query = $db->build_query('INSERT', array(
		            'member_id'       => $memberid,
		            'picture'     		=> $_POST['member_pic'],
		            'guild'						=> $_POST['guild'],
								'gender'					=> $_POST['gender'],
            		)
        			);
        	}else{
        		$query = $db->build_query('INSERT', array(
		            'member_id'       => $memberid,
		            'picture'     		=> $_POST['member_pic'],
		            'fir'							=> $_POST['fire'],
		            'nr'							=> $_POST['nature'],
		            'sr'							=> $_POST['shadow'],
		            'ar'							=> $_POST['arcane'],
		            'frr'							=> $_POST['ice'],
		            'skill_1'					=> $_POST['skill_1'],
		            'skill_2'					=> $_POST['skill_2'],
		            'skill_3'					=> $_POST['skill_3'],
		            'guild'						=> $_POST['guild'],
		            'blasc_id'				=> $_POST['blasc_id'],
		            'ct_profile'			=> $_POST['ct_profile'],
		            'curse_profiler'	=> $_POST['curse_profiler'],
		            'allakhazam'			=> $_POST['allakhazam'],
		            'talentplaner'		=> $_POST['talentplaner'],
		            'prof1_value'			=> $_POST['prof1_value'],
								'prof1_name'			=> $_POST['prof1_name'],
								'prof2_value'			=> $_POST['prof2_value'],
								'prof2_name'			=> $_POST['prof2_name'],
								'gender'					=> $_POST['gender'],
								'faction'					=> $_POST['faction'],
								'notes'						=> htmlspecialchars($_POST['notes'], ENT_QUOTES),
            		)
        			);
        	}
        }
        $blubb = $db->query('INSERT INTO ' . MEMBER_ADDITION_TABLE . $query);
        } else {
        // delete the old picture
        $memberid_sql   = "SELECT picture FROM ".MEMBER_ADDITION_TABLE." WHERE member_id='" . $memberid . "'";
        $member_picture = $db->query_first($memberid_sql);
        if ($member_picture != $_POST['member_pic'] && !$dataarray){
          if($member_picture){
          	unlink($pcache->FolderPath('upload', 'charmanager').$member_picture);
  				}
				}
        
				// add into members_addition table
				if($dataarray){
					if($conf['uc_nowarcraft'] == 1){
							$query = $db->build_query('UPDATE', array(
		            'guild'						=> $dataarray['guild'],
		            'last_update'			=> $dataarray['last_update'],
								'gender'					=> $dataarray['gender'],
		            )
		        	);
				}else{
				      
				      $dataarray1 =	array(		            
  		            'skill_1'					=> $dataarray['skill_1'],
  		            'skill_2'					=> $dataarray['skill_2'],
  		            'skill_3'					=> $dataarray['skill_3'],
  		            'guild'						=> $dataarray['guild'],
  		            'health_bar'			=> $dataarray['health_bar'],
  		            'second_bar'			=> $dataarray['second_bar'],
  		            'second_name'			=> $dataarray['second_name'],
  		            'last_update'			=> $dataarray['last_update'],
  		            'prof1_value'			=> $dataarray['prof1_value'],
  								'prof1_name'			=> $dataarray['prof1_name'],
  								'prof2_value'			=> $dataarray['prof2_value'],
  								'prof2_name'			=> $dataarray['prof2_name'],
  								'gender'					=> $dataarray['gender'],
  								'faction'					=> $dataarray['faction']
		            );
		           $dataarray2 =	array(
  		            'fir'							=> $dataarray['fire'],
  		            'nr'							=> $dataarray['nature'],
  		            'sr'							=> $dataarray['shadow'],
  		            'ar'							=> $dataarray['arcane'],
  		            'frr'							=> $dataarray['ice']
		            );
		            
		          $dataarray3 =	array(
                'notes'						=> htmlspecialchars($dataarray['notes'], ENT_QUOTES)
                );
				      if($conf['uc_noresisave'] == 1 && $is_import){
                $dataarray = $dataarray1;
              }else{
                $dataarray = array_merge($dataarray1, $dataarray2, $dataarray3);
              }
        		  $query = $db->build_query('UPDATE', $dataarray);
		        }
      	}else{
      		if($conf['uc_nowarcraft'] == 1){
      				$query = $db->build_query('UPDATE', array(
		            'picture'     		=> $_POST['member_pic'],
		            'guild'						=> $_POST['guild'],
								'gender'					=> $_POST['gender'],
		            )
		        	);
      		}else{
      		    
      		    $dataarray1 =	array(
		            'picture'     		=> $_POST['member_pic'],
		            'skill_1'					=> $_POST['skill_1'],
		            'skill_2'					=> $_POST['skill_2'],
		            'skill_3'					=> $_POST['skill_3'],
		            'guild'						=> $_POST['guild'],
		            'blasc_id'				=> $_POST['blasc_id'],
		            'ct_profile'			=> $_POST['ct_profile'],
		            'curse_profiler'	=> $_POST['curse_profiler'],
		            'allakhazam'			=> $_POST['allakhazam'],
		            'talentplaner'		=> $_POST['talentplaner'],
		            'prof1_value'			=> $_POST['prof1_value'],
								'prof1_name'			=> $_POST['prof1_name'],
								'prof2_value'			=> $_POST['prof2_value'],
								'prof2_name'			=> $_POST['prof2_name'],
								'gender'					=> $_POST['gender'],
								'faction'					=> $_POST['faction'],
		            );
		          $dataarray2 =	array(
		            'fir'							=> $_POST['fire'],
		            'nr'							=> $_POST['nature'],
		            'sr'							=> $_POST['shadow'],
		            'ar'							=> $_POST['arcane'],
		            'frr'							=> $_POST['ice'],
		            );
		          
		          $dataarray3 =	array(
                'notes'						=> htmlspecialchars($_POST['notes'], ENT_QUOTES)
                );
      		
							if($conf['uc_noresisave'] == 1 && $is_import){
                $dataarray = $dataarray1;
              }else{
                $dataarray = array_merge($dataarray1, $dataarray2, $dataarray3);
              }
        		  $query = $db->build_query('UPDATE', $dataarray);
		       }
        }
        //die('UPDATE ' . MEMBER_ADDITION_TABLE . ' SET ' . $query . " WHERE member_id='" . $memberid . "'");
        $blubb = $db->query('UPDATE ' . MEMBER_ADDITION_TABLE . ' SET ' . $query . " WHERE member_id='" . $memberid . "'");
        
        if ($blubb){
          return $failure_message = array('true','','');
        }else{
          $failure_message = array('false','','');
          return $failure_message;
        }
     }// end of if update
	} // end of update

	function TakeOverChar($membername){
		global $db, $user, $table_prefix;
        $sql = "SELECT member_id FROM " . MEMBERS_TABLE ." WHERE member_name = '".$membername."'";
	      $member_id = $db->query_first($sql);
          $sql = 'INSERT INTO ' . MEMBER_USER_TABLE . '
                    (member_id, user_id)
                    VALUES (' . $member_id . ', ' . $user->data['user_id'] . ')';
          $db->query($sql);
        }
  
  function convert_classname($classname){
		switch ($classname) {
			# Convert German Class names (only the diff-ones)
			case "Druide"				: $classname = "Druid";				break;
			case "Hexenmeister"	: $classname = "Warlock";			break;
			case "Jäger"				: $classname = "Hunter";			break;
			case "Krieger"			: $classname = "Warrior";			break;
			case "Magier"				: $classname = "Mage";				break;
			case "Priester"			: $classname = "Priest";			break;
			case "Schurke"			: $classname = "Rogue";				break;
			case "Schamane"			: $classname = "Shaman";			break;
			case "Default"			: $classname = "UNKNOWN";			break;
			# EQ2 Klassen
      case "Raufbold"     : $classname = "Bruiser"; 		break;
      case "Mönch"        : $classname = "Monk"; 				break;
      case "Wächter"     	: $classname = "Guardian"; 		break;
      case "Schattenritter": $classname = "ShadowKnight";break;
      case "Erzwinger"    : $classname = "Conjuror"; 		break;
      case "Zauberer"     : $classname = "Wizard"; 			break;
      case "Hexenmeister" : $classname = "Warlock"; 		break;
      case "Nekromant"    : $classname = "Necromancer"; break;
      case "Elementalist" : $classname = "Conjuror"; 		break;
      case "Templer"     	: $classname = "Templar"; 		break;
     	case "Wärter"       : $classname = "Warden"; 			break;
      case "Schänder"     : $classname = "Defiler"; 		break;
      case "Mystiker"     : $classname = "Predator"; 		break;
      case "Abenteurer"   : $classname = "Swashbuckler";break;
      case "Brigand"     	: $classname = "Brigand"; 		break;
      case "Klagesänger"  : $classname = "Dirge"; 			break;
      case "Troubadour"   : $classname = "Troubador"; 	break;
      case "Waldläufer"   : $classname = "Ranger"; 			break;
      
      case "Barde"        : $classname = "Minstrel"; 		break;
      case "Hauptmann"    : $classname = "Captain"; 		break;
      case "Kundiger"     : $classname = "Lore-master"; break;
      case "Schurke"      : $classname = "Burglar"; 		break;
      case "Wächter"      : $classname = "Guardian"; 		break;
      case "Waffenmeister": $classname = "Champion"; 		break;
			}
		return $classname;
        return;
    }

/**
 * Return the WoW Talent Text
 *
 * @param Array $skill array($skill1,$skill2,$skill3)
 * @param String $class
 * @return String
 */
	function SkilltoSpec($skills, $class){
 		global $user;

 		if (!is_array($skills)) {	return "";}
 		
 		$class = $this->convert_classname($class); // translate the class name to english
 		asort($skills); //sort the Arry to get the highest skill

 		//get the highest skill
 		foreach ( $skills as $key => $row){
			$spec_number = $key;
		}
		
 		// If no 41 Talent is given, i think its a hybrid
 		if ( ($skills[0] < 40) and ($skills[1] < 40) and ($skills[2] < 40)  ){
 			$spec =	$user->lang['uc_hybrid'] ;
 		}else{
 			$spec =  $user->lang['talents'][$class][$spec_number] ;
 		}
 		return $spec;
	}
}// end of class
?>
