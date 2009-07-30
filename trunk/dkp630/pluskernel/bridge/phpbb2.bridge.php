<?php
 /*
 * Project:     EQdkp-Plus
 * License:     Creative Commons - Attribution-Noncommercial-Share Alike 3.0 Unported
 * Link:		http://creativecommons.org/licenses/by-nc-sa/3.0/
 * -----------------------------------------------------------------------
 * Began:       2008
 * Date:        $Date: 2008-11-05 20:02:29 +0900 (수, 05 11 2008) $
 * -----------------------------------------------------------------------
 * @author      $Author: ghoschdi $
 * @copyright   2006-2008 Corgan - Stefan Knaak | Wallenium & the EQdkp-Plus Developer Team
 * @link        http://eqdkp-plus.com
 * @package     eqdkp-plus
 * @version     $Rev: 2987 $
 * 
 * $Id: phpbb2.bridge.php 2987 2008-11-05 11:02:29Z ghoschdi $
 */
 
if ( !defined('EQDKP_INC') )
{
    header('HTTP/1.0 404 Not Found');
    exit;
}
class User extends UserSkel {
       /**
   * Attempt to log in a user
   *
   * @param $username
   * @param $password
   * @param $auto_login Save login in cookie?
   * @return bool
   */
   function login($username, $password, $auto_login)
   {

            global $eqdkp, $db, $cms_host, $cms_db, $cms_user, $cms_pass, $cms_tableprefix, $cms_group,$sql_db;
            $db_cms = new $sql_db();
            $db_cms->sql_connect($cms_host,$cms_db,$cms_user,$cms_pass,false); // Dantenbankverbindung aufbauen zum CMS
            if ( !$db_cms->link_id )
                    {
                    message_die('Could not connect to the database.');
                    }
            $a_username = $username;
            $group_ids = $cms_group;
            $sql = "SELECT user_id, username, user_password, user_email FROM `".$db->dbname."`." . USERS_TABLE . " WHERE username='" . $a_username . "'";
            $local_users_table = $db->query($sql); // Gucken ob ein lokaler Nutzer mit dem Usernamen exisitert

            $sql = "SHOW TABLE STATUS FROM `".$db_cms->dbname."` LIKE '".$cms_tableprefix."users'";
            if ($res = $db_cms->query($sql))
            {
               if ( $row = $db_cms->fetch_record($res) )
            	{
            		$sql = "SELECT user_id, user_password, user_email FROM ".$db_cms->dbname.".".$cms_tableprefix."users WHERE username='" . $a_username . "'";
            		$remote_users_table = @$db_cms->query($sql); // Gucken ob in der CMS datenbank ein nutzer mit dem Namen existiert
            		$rut_row = $db_cms->fetch_record($remote_users_table);
            	}
            }

            if ($rut_row)
            {
                $db_cms->free_result($remote_users_table);
                $db_cms->free_result($remote_groups_table);
                $groups_id = explode(",",$group_ids);
                $sql = "SELECT user_pending, group_id FROM ".$db_cms->dbname.".".$cms_tableprefix."user_group WHERE user_id='" . $rut_row['user_id'] . "'";
                $remote_groups_table = $db_cms->query($sql); // Berechtigungen aus der CMS Datenbank auslesen ob der Nutzer auf das eqdkp zugreifen darf
                $rgt_row = $db->fetch_record_set($remote_groups_table);
                $approved = false;
                foreach ($rgt_row as $usergroup) {
                    foreach ($groups_id as $element) {
                        if($usergroup['user_pending'] == "0" && $usergroup['group_id'] == $element ) {
                            $approved = true;
                        }
                    }

                }
                if ( (md5($password) == $rut_row['user_password']) && $approved) // Gucken ob das eingegebene Paswort mit dem CMS passwort übereinstimmt (das Passwort wird mit dem salt aus der datenbank natürlich gesalzen) und ob er berechtigt ist zuzugreifen
                {

                    if ($lut_row = $db->fetch_record($local_users_table))
                    {
                        $sql = "UPDATE `".$db->dbname."`." . USERS_TABLE . " SET user_password='" . md5($password) ."',user_email='".$rut_row['user_email']."' WHERE username='" . $a_username . "'";
                        $db->query($sql);   // Aktualisieren der Lokalen Informationen
                        $userid = $lut_row['user_id'];
                    }
                    else
                    {
                          $sql = "INSERT into `".$db->dbname."`." . USERS_TABLE . " SET username='".$a_username."', user_password='".md5($password)."', user_email='".$rut_row['user_email']."', user_active='1', user_style='".$eqdkp->config['default_style']."', user_lang='".$eqdkp->config['default_lang']."'";
                        $db->query($sql); // Einfügen der ausgelesen Informationen in die Lokale Datenbank
                        $userid = $db->insert_id();
                        $sql = "SELECT auth_id, auth_default FROM `".$db->dbname."`." . AUTH_OPTIONS_TABLE . " ORDER BY auth_id";
                        $result = $db->query($sql); // Auslesen der Standardberechtigungen in der Lokalen Datenbank
                        while ( $row = $db->fetch_record($result) )
                        {
                            $sql = "INSERT INTO `".$db->dbname."`." . AUTH_USERS_TABLE . " (user_id, auth_id, auth_setting) VALUES ('" . $userid . "','" . $row['auth_id'] . "','" . $row['auth_default'] . "')";
                            $db->query($sql);             // Standardrechte Setzen
                        }
                        $db->free_result($result);
                    }
                    $db->free_result($local_users_table);
                    $auto_login = ( !empty($auto_login) ) ? md5($password) : '';
                    return $this->create($userid, $auto_login, true); // Session erzeugen zum einloggen
                } else {
                    return false;
                }
            }
            return UserSkel::login($username,$password,$auto_login);
        }
}
?>