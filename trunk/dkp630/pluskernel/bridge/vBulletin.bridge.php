<?php
 /*
 * Project:     EQdkp-Plus
 * License:     Creative Commons - Attribution-Noncommercial-Share Alike 3.0 Unported
 * Link:		http://creativecommons.org/licenses/by-nc-sa/3.0/
 * -----------------------------------------------------------------------
 * Began:       2008
 * Date:        $Date: 2008-07-29 07:22:12 +0900 (화, 29 7 2008) $
 * -----------------------------------------------------------------------
 * @author      $Author: osr-corgan $
 * @copyright   2006-2008 Corgan - Stefan Knaak | Wallenium & the EQdkp-Plus Developer Team
 * @link        http://eqdkp-plus.com
 * @package     eqdkp-plus
 * @version     $Rev: 2449 $
 * 
 * $Id: vBulletin.bridge.php 2449 2008-07-28 22:22:12Z osr-corgan $
 */
 
if ( !defined('EQDKP_INC') )
{
    header('HTTP/1.0 404 Not Found');
    exit;
}
class User extends UserSkel
{
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
            $vb_prefix = $cms_tableprefix;
            $group_ids = $cms_group;
            $sql = "SELECT user_id, username, user_password, user_email FROM `".$db->dbname."`." . USERS_TABLE . " WHERE username='" . $a_username . "'";
            $local_users_table = $db->query($sql);
            $sql = "SHOW TABLE STATUS FROM `".$db_cms->dbname."` LIKE '".$cms_tableprefix."user'";
            if ($res = $db_cms->query($sql))
            {
               if ( $row = $db_cms->fetch_record($res) )
            	{
            $sql = "SELECT userid, password, email, salt FROM `".$db_cms->dbname."`.".$vb_prefix."user WHERE username='" . $a_username . "'";
            $remote_users_table = $db_cms->query($sql);
            $rut_row = $db_cms->fetch_record($remote_users_table);
            	}
            }
            if ( $rut_row )
            {
                $db_cms->free_result($remote_users_table);
                $db_cms->free_result($remote_groups_table);

                $sql = "SELECT count(*) as valid FROM `".$db_cms->dbname."`.".$vb_prefix."user WHERE (membergroupids like '%$group_ids%' or usergroupid='$group_ids') and userid='" . $rut_row['userid'] . "'";
                $remote_groups_table = $db_cms->query($sql);
                $rgt_row = $db->fetch_record($remote_groups_table);

                if ( (md5(md5($password).$rut_row['salt']) == $rut_row['password']) && $rgt_row['valid'] > 0)
                {
                    if ($lut_row = $db->fetch_record($local_users_table))
                    {
                        $sql = "UPDATE `".$db->dbname."`." . USERS_TABLE . " SET user_password='" .md5($password) ."' WHERE username='" . $a_username . "'";
                        $db->query($sql);
                        $userid = $lut_row['user_id'];
                     }
                    else
                    {
                          $sql = "INSERT INTO `".$db->dbname."`." . USERS_TABLE . " set username='".$a_username."', user_password='".md5($password)."', user_email='".$rut_row['email']."', user_active='1', user_style=".$eqdkp->config['default_style'].", user_lang='".$eqdkp->config['default_lang']."'";
                        $db->query($sql);
                        $userid = $db->insert_id();

                        $sql = "SELECT auth_id, auth_default FROM `".$db->dbname."`." . AUTH_OPTIONS_TABLE . " ORDER BY auth_id";
                        $result = $db->query($sql);
                        while ( $row = $db->fetch_record($result) )
                        {
                            $sql = "INSERT INTO `".$db->dbname."`." . AUTH_USERS_TABLE . "(user_id, auth_id, auth_setting) VALUES ('" . $userid . "','" . $row['auth_id'] . "','" . $row['auth_default'] . "')";
                            $db->query($sql);
                        }
                        $db->free_result($result);
                    }
                    $db->free_result($local_users_table);

                    $auto_login = ( !empty($auto_login) ) ? md5($password) : '';
                    return $this->create($userid, $auto_login, true);
                } else {
                    return false;
                }
            }
            return UserSkel::login($username,$password,$auto_login);
        }
}
?>
