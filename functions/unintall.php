<?php 
$lpc_dashboard 	= unserialize(get_option('lpc_plugin_settings_dashboard'));
$lpc_uninstall 	= $lpc_dashboard['lpc_uninstall'];
if($lpc_uninstall == "true"){
	delete_option('lpc_plugin_settings_dashboard');
	delete_option('lpc_plugin_settings_background');
	delete_option('lpc_plugin_settings_login');
	delete_option('lpc_plugin_settings_logo');
	delete_option('lpc_plugin_settings_input_field');
	delete_option('lpc_plugin_settings_button');
	delete_option('lpc_plugin_settings_footer');
	delete_option('lpc_plugin_settings_welcome_messages');
	delete_option('lpc_plugin_settings_google_captcha');
}
?>