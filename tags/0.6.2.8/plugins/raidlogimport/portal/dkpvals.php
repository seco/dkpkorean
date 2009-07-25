<?php
 /*
 * Project:     EQdkp-Plus Raidlogimport
 * License:     Creative Commons - Attribution-Noncommercial-Share Alike 3.0 Unported
 * Link:		http://creativecommons.org/licenses/by-nc-sa/3.0/
 * -----------------------------------------------------------------------
 * Began:       2008
 * Date:        $Date: 2009-05-31 23:38:22 +0200 (So, 31 Mai 2009) $
 * -----------------------------------------------------------------------
 * @author      $Author: hoofy_leon $
 * @copyright   2008-2009 hoofy_leon
 * @link        http://eqdkp-plus.com
 * @package     raidlogimport
 * @version     $Rev: 4989 $
 *
 * $Id: dkpvals.php 4989 2009-05-31 21:38:22Z hoofy_leon $
 */
 /*
 * Project:     EQdkp-Plus Raidlogimport
 * License:     Creative Commons - Attribution-Noncommercial-Share Alike 3.0 Unported
 * Link:		http://creativecommons.org/licenses/by-nc-sa/3.0/
 * -----------------------------------------------------------------------
 * Began:       2008
 * Date:        $Date: 2009-05-31 23:38:22 +0200 (So, 31 Mai 2009) $
 * -----------------------------------------------------------------------
 * @author      $Author: hoofy_leon $
 * @copyright   2008-2009 hoofy_leon
 * @link        http://eqdkp-plus.com
 * @package     raidlogimport
 * @version     $Rev: 4989 $
 *
 * $Id: dkpvals.php 4989 2009-05-31 21:38:22Z hoofy_leon $
 */

if ( !defined('EQDKP_INC') ) {
	header('HTTP/1.0 404 Not Found');exit;
}

$portal_module['dkpvals'] = array(
            'name'              => 'DKP-Value Module',
            'path'              => 'dkpvals',
            'version'           => '1.0.0',
            'author'            => 'Hoofy',
            'contact'           => 'http://www.eqdkp-plus.com',
            'positions'     => array('left1', 'left2', 'right'),
      'signedin'      => '1',
      'install'       => array(
                            'autoenable'        => '1',
                            'defaultposition'   => 'right',
                            'defaultnumber'     => '3',
                          ),
    );

if(!class_exists('rli_portal'))
{
  global $eqdkp_root_path;

  require_once($eqdkp_root_path.'plugins/raidlogimport/includes/rli.class.php');

  class rli_portal extends rli {
  	function rli_portal() {
  		$this->rli();
  		$this->get_bonus();
	}

	function create_zone_array()
	{
		$arr = array();
		foreach($this->bonus['zone'] as $zone_id => $zone)
		{
			$arr[$zone_id] = $zone['note'];
		}
		return $arr;
	}

	function create_settings() {
		return array(
			'pk_rli_zone_0' => array(
				'name'		=> 'rli_zone_display',
				'language'	=> 'p_rli_zone_display',
				'property'	=> 'multiselect',
				'options' 	=> $this->create_zone_array(),
			)
		);
	}

	function get_zone($zone_id)
	{
        $zone = $this->bonus['zone'][$zone_id];
		$output = "<table width='100%' cellpadding='1' cellspacing='1' class='forumline'>
					<tr><th width='66%'>".$zone['note']."</th><th width='34%'>".$zone['bonus']."/h</th></tr>";
		foreach($this->bonus['boss'] as $boss_id => $boss)
		{
			if($i != 1) { $i = 2; }
			if($boss['tozone'] == $zone_id)
			{
				$output .= "<tr class='row".$i."'><td>".$boss['note']."</td><td>".$boss['bonus']."</td></tr>";
			}
			$i--;
		}
		return $output."</table>";
	}
  }
}
$rli_portal = new rli_portal;

$portal_settings['dkpvals'] = $rli_portal->create_settings();

if(!function_exists('dkpvals_module')) {
  function dkpvals_module()
  {
  	global $user, $conf_plus, $eqdkp;

  	$rli_portal = new rli_portal;

  	$out = "<table width='100%'border='0' cellspacing='1' cellpadding='2'>
  				<tr><th width='66%'>".$user->lang['bz_zone_s']."</th><th width='34%'>".$eqdkp->config['dkp_name']."</th></tr>";
  	foreach($rli_portal->bonus['zone'] as $zone_id => $zone)
  	{
  		$zones2display = explode('|', $conf_plus['rli_zone_display']);
  		if(in_array($zone_id, $zones2display))
  		{
  			$out .= "<tr><td colspan='2'>".$rli_portal->get_zone($zone_id)."</td></tr>";
  		}
  	}
  	return $out."</table>";
  }
}



?>