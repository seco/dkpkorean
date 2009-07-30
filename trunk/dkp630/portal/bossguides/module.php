<?php
/*
 * Project:     EQdkp-Plus
 * License:     Creative Commons - Attribution-Noncommercial-Share Alike 3.0 Unported
 * Link:		http://creativecommons.org/licenses/by-nc-sa/3.0/
 * -----------------------------------------------------------------------
 * Began:       2008
 * Date:        $Date: 2009-03-18 23:59:58 +0900 (수, 18 3 2009) $
 * -----------------------------------------------------------------------
 * @author      $Author: osr-corgan $
 * @copyright   2006-2008 Corgan - Stefan Knaak | Wallenium & the EQdkp-Plus Developer Team
 * @link        http://eqdkp-plus.com
 * @package     eqdkp-plus
 * @version     $Rev: 4293 $
 * 
 * $Id: module.php 4293 2009-03-18 14:59:58Z osr-corgan $
 */

if ( !defined('EQDKP_INC') ){
    header('HTTP/1.0 404 Not Found');exit;
}

// You have to define the Module Information
$portal_module['bossguides'] = array(                      						// the same name as the folder!
			'name'			    => 'Bossguides',             					// The name to show
			'path'			    => 'bossguides',                     			// Folder name again
			'version'		    => '1.0.1',                          			// Version
			'author'        	=> 'Corgan',                      				// Author
			'contact'		    => 'http://wow.allvatar.com',      				// email adress
			'description'   	=> 'Shows you the latest WotLK-Bossguides',          	// Detailed Description
			'positions'     	=> array('left1', 'left2', 'right'), 	// Which blocks should be usable? left1 (over menu), left2 (under menu), right, middle
      		'signedin'      	=> '0',                              			// 0 = all users, 1 = signed in only
      		'install'       	=> array(
			                            'autoenable'        => '1',    // 0 = disable on install , 1 = enable on install
			                            'defaultposition'   => 'right',// see blocks above
			                            'defaultnumber'     => '5',    // default ordering number
			                            ),
    );

/* Define the Settings if needed

name:       The name of the Database field & Input name
language:   The name of the language string in the language file
property:   What type of field? (text,checkbox,dropdown,textarea)
size:       Size of the field if required (optional)
rows:       Rows for textarea, only needed there!
help:       Shows a "?" Icon after the Settings String wichs show on Mouseover a Help Tooltip with the "Help" String!
options:    If dropdown: array('value'=>'Name')
codeinput:  If true, html code is not striped out of the textarea. only working in textareas until now

There could be unlimited amount of settings
Settings page is created dynamically
*/


$portal_settings['bossguides'] = array(
    'pk_bossguides_hide_naxx'     => array(
        'name'      => 'pk_bossguides_hide_naxx',
        'language'  => 'pk_hide_naxxramas',
        'property'  => 'checkbox',
        'size'      => '30',
        'help'      => '',
      ),
    'pk_bossguides_hide_malygos'     => array(
    'name'      => 'pk_bossguides_hide_malygos',
    'language'  => 'pk_hide_malygos',
    'property'  => 'checkbox',
    'size'      => '30',
    'help'      => '',
  ),
    'pk_bossguides_hide_sartharion'     => array(
    'name'      => 'pk_bossguides_hide_sartharion',
    'language'  => 'pk_hide_sartharion',
    'property'  => 'checkbox',
    'size'      => '30',
    'help'      => '',
  ),
    'pk_bossguides_hide_ulduar'     => array(
    'name'      => 'pk_bossguides_hide_ulduar',
    'language'  => 'pk_hide_ulduar',
    'property'  => 'checkbox',
    'size'      => '30',
    'help'      => '',
  ),
);


// The output function
// the name MUST be FOLDERNAME_module, if not an error will occur
if(!function_exists(bossguides_module))
{
	function bossguides_module()
  	{
  		global $eqdkp , $user , $tpl, $db, $plang, $conf_plus,$eqdkp_root_path;
  		
  		$game = $eqdkp->config['default_game']  ;  		  		  		

	  	// Set the output: If custom one is entered in the setting output this one
	  	// $conf_plus for config values, $plang for language values  		  	
	  	$output = "<table width=100%>";	  	
	  	
	  	//instanzen
	  	foreach ($plang[$game] as $k => $v) 
	  	{	

			if ($k == 'naxxramas' && $conf_plus['pk_bossguides_hide_naxx']) 
			{
				continue ;
			}
			if ($k == 'malygos' && $conf_plus['pk_bossguides_hide_malygos']) 
			{
				continue ;
			}
			if ($k == 'sartharion' && $conf_plus['pk_bossguides_hide_sartharion']) 
			{
				continue ;
			}
			if ($k == 'ulduar' && $conf_plus['pk_bossguides_hide_ulduar']) 
			{
				continue ;
			}
			else 
			{			
				$output .= "<th>".ucfirst($k)."</th>"; 
				
		  		foreach ($plang[$game][$k] as $key => $value) 
			  	{			  	
			  		$class_color = $eqdkp->switch_row_class();
			  		$output .= '<tr nowrap=nowrap class='.$class_color.' onmouseover="this.className=\'rowHover\';" onmouseout="this.className=\''.$class_color.'\';"><td nowrap=nowrap >';
			  		$output .= "<img src=$eqdkp_root_path/images/arrow.gif> <a href='".$value."' target=blank>".$plang[$k][$key]['short']."</a> <br/>";  		
			  		$output .= "</td></tr>";
			  	}	  
			}		
	  	}
	  		  		  		  	
	  	
	  	$output .= "</table>";

		// OPTIONAL
		// If you want to modify the header, use the following
		// JS Script Trick (txt+ID in this case: txthelloworld
		  $output .= "<script>document.getElementById('txtbossguides').innerHTML = '".addslashes($plang['pk_bossguides_headtext'])."'</script>";

	    // return the output for module manager
		return $output;
	}
}
?>
