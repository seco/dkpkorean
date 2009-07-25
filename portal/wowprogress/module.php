<?php

if ( !defined('EQDKP_INC') ){
    header('HTTP/1.0 404 Not Found');exit;
}

$portal_module['wowprogress'] = array(
	'name'			=> 'Guild rating',
	'path'			=> 'wowprogress',
	'version'		=> '1.0.1',
	'author'		=> 'Grib',
	'contact'		=> 'http://dkp.ruwow.org/',
	'description'   => 'PvE guild rating from www.wowprogress.com',
	'positions'     => array('left1', 'left2', 'right'),
	'install'       => array(
				'autoenable'        => '0',
				'defaultposition'   => 'right',
				'defaultnumber'     => '4', ),
	);

if(!function_exists(wowprogress_module))
{
    function wowprogress_module(){
	global $tpl, $eqdkp, $eqdkp_root_path, $conf_plus, $eqdkp_config, $user, $plang;
	$pm_wowprgs_url = "http://www.wowprogress.com/";
	$pm_wowprgs_guild_url = $pm_wowprgs_url . "guild/" . $conf_plus[pk_server_region] . "/" . str_replace('+', '-', urlencode(strtolower($conf_plus['pk_servername']))) . "/" . urlencode($eqdkp->config['guildtag']) . "/";
	$pm_wowprgs_guild_rank_url = $pm_wowprgs_guild_url .  "txt_rank";
	$pm_wowprgs_guild_rank = split("\n", file_get_contents("$pm_wowprgs_guild_rank_url"));
	$pm_wowprgs_world_rank = $pm_wowprgs_guild_rank[0];
	$pm_wowprgs_aria_rank = $pm_wowprgs_guild_rank[1];
	$pm_wowprgs_server_rank = $pm_wowprgs_guild_rank[2];

			$out .= '<table width="100%" border="0" cellspacing="1" cellpadding="2" class="noborder">';
			$out .= '<tr class="row1" onmouseover="this.className=\'rowHover\';" onmouseout="this.className=\'row1\';"><td>';
			$out .= '<a href="' . $pm_wowprgs_guild_url . '" target="_blank" title="&quot;' . $eqdkp->config['guildtag'] . '&quot; ' . $plang['pm_wowprgs_on']  . 'wowprogress.com">' . $eqdkp->config['guildtag'] . '</a>';
			$out .= '</td></tr>';
			$out .= '<tr class="row2" onmouseover="this.className=\'rowHover\';" onmouseout="this.className=\'row2\';"><td align="right">';
			$out .= $conf_plus['pk_servername'];
			$out .= '</td></tr>';
			$out .= '<tr class="row1" onmouseover="this.className=\'rowHover\';" onmouseout="this.className=\'row1\';"><td>' . $plang['pm_wowprgs_world'];
			$out .= $pm_wowprgs_guild_rank[0];
			$out .= '</td></tr>';
			$out .= '<tr class="row2" onmouseover="this.className=\'rowHover\';" onmouseout="this.className=\'row2\';"><td>' . strtoupper($conf_plus[pk_server_region]) . ': ';
			$out .= $pm_wowprgs_guild_rank[1];
			$out .= '</td></tr>';
			$out .= '<tr class="row1" onmouseover="this.className=\'rowHover\';" onmouseout="this.className=\'row1\';"><td>' . $plang['pm_wowprgs_realm'];
			$out .= $pm_wowprgs_guild_rank[2];
			$out .= '</td></tr>';
			$out .= '<tr class="row2" onmouseover="this.className=\'rowHover\';" onmouseout="this.className=\'row2\';"><td align=\'center\'><a href="http://www.wowprogress.com/" target="_blank"><small>www.wowprogress.com</small></a></td></tr>';
			$out .= '</table>';
			return $out;
    }
}
?>
