<?php
	if ( !defined('EQDKP_INC') ){
		header('HTTP/1.0 404 Not Found');exit;
	}

	global $conf_plus;

	$plang = array_merge($plang, array(
		'counter'				=> "Besucherz&auml;hler",
		'ga-code'				=> "Google Analytics Code:"
		));
?>
