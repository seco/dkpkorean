<?php
 /*
 * Project:     EQdkp ItemSpecials
 * License:     Creative Commons - Attribution-Noncommercial-Share Alike 3.0 Unported
 * Link:		    http://creativecommons.org/licenses/by-nc-sa/3.0/
 * -----------------------------------------------------------------------
 * Began:       2006
 * Date:        $Date: 2009-06-01 13:23:19 +0200 (Mo, 01 Jun 2009) $
 * -----------------------------------------------------------------------
 * @author      $Author: wallenium $
 * @copyright   2005-2008 Simon (Wallenium) Wallmann
 * @link        http://eqdkp-plus.com
 * @package     itemspecials
 * @version     $Rev: 5002 $
 * 
 * $Id: is_item.php 5002 2009-06-01 11:23:19Z wallenium $
 */

define('EQDKP_INC', true);
$eqdkp_root_path = '../../';
include_once('include/common.php');

if ($conf['itemstats'] == 1){
  include_once(IS_ITEMSTATS_PATH);
}

$user->check_auth('u_item_view');

if ($in->get(URI_ITEM) != '')
{

    // We want to view items by name and not id, so get the name
    $item_name = urldecode($in->get(URI_ITEM));
    if ( empty($item_name) ){
        message_die($user->lang['error_invalid_item_provided']);
    }
		$output  = "<link REL=StyleSheet HREF='../../itemstats/templates/itemstats.css' TYPE='text/css' MEDIA=screen />";
		$output .= "<center>".itemstats_get_html($item_name)."</center>";
		echo $output;
}
else
{
    message_die($user->lang['error_invalid_item_provided']);
}
?>
