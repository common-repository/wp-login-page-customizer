<?php
	$defult_settings_dashboard = array(
		'lpc_status'  		=> 'true'
	);
	$lpc_dashboard = unserialize(get_option('lpc_plugin_settings_dashboard'));
	$lpc_plugin_settings_dashboard = wp_parse_args($lpc_dashboard , $defult_settings_dashboard);
	$lpc_status 		= $lpc_plugin_settings_dashboard['lpc_status'];

	if ($lpc_status == "true"){
		new class_lpc_login_entities();
	}
 ?>