<?php
/**
 * Plugin Name: Custom Login Page
 * Description: Plugin allows you to easily customize Login Screen. You can design beautiful and eye catching login page in few minutes.
 * Version: 1.0.5
 * Plugin URI: https://webhuntinfotech.com/
 * Author: WebHunt Infotech
 * Author URI: https://www.webhuntinfotech.com
 */

define('WEBHUNT_LPC_PLUGIN_BASENAME', plugin_basename( __FILE__ ) );
define("WEBHUNT_LPC_PLUGIN_URL", plugin_dir_url(__FILE__));
define('WEBHUNT_LPC_DIR_PATH', plugin_dir_path( __FILE__ ) );
define('WEBHUNT_LPC_ROOT_PATH',  dirname( __FILE__ ) . '/' );
define("WEBHUNT_LPC_IMG_PATH", plugin_dir_url(__FILE__). '/assets/img/' );
define("WEBHUNT_LPC", "LPC_LANGUAGE_STRING" );

add_action('plugins_loaded', 'LPC_LanguageTranslation');
function LPC_LanguageTranslation() {
	load_plugin_textdomain(WEBHUNT_LPC, FALSE, dirname( plugin_basename(__FILE__)).'/languages/' );
}

/**
 * Fetch the plugin version
 * @return float                   The plugin version
 */
if ( ! function_exists( 'lpc_plugin_get_version' ) ) {
	function lpc_plugin_get_version() {
		$plugin_data = get_plugin_data( __FILE__ );
		$plugin_version = $plugin_data['Version'];
		return $plugin_version;
	}
}

/** Custom Login Page Menu */
add_action('admin_menu','lpc_admin_menu');
function lpc_admin_menu() {
	if(current_user_can('administrator')){
		//plugin menu name for 'Custom Login Page' plugin
		$lpc_menu_page = add_menu_page('Custom Login Page', 'Custom Login Page','administrator', 'login_page_customizer','login_page_customizer_content','dashicons-welcome-view-site');
		
		//add hook to add styles and scripts for 'Custom Login Page' admin page
		add_action( 'admin_print_styles-' . $lpc_menu_page, 'lpc_admin_page_js_css' );
	}
}

/* plugin action links (Settings) */
add_filter( 'plugin_action_links', 'lpc_add_action_plugin', 10, 5 );
function lpc_add_action_plugin( $actions, $plugin_file ) 
{
	static $plugin;
	
	if (!isset($plugin))
		$plugin = plugin_basename(__FILE__);
	if ($plugin == $plugin_file) 
	{
			$added_link_1 = '<a href="https://www.webhuntinfotech.com/premium-plugins/custom-login-page-pro/" style="font-weight:700; color:#f44336" target="_blank">Go Pro</a>';
			
			$added_link_2 = '<a href="admin.php?page=login_page_customizer">Settings</a>';
			
			array_unshift( $actions, $added_link_1, $added_link_2 );
	}
		return $actions;
}
require_once('functions/data-save-post.php');
require_once('custom.php');
require_once('redirect.php');

function lpc_admin_page_js_css() {
    /* enqueue style for 'Custom Login Page' plugin */ 
	wp_enqueue_style('lpc-bootstrap-css', WEBHUNT_LPC_PLUGIN_URL.'assets/css/bootstrap.css');
	wp_enqueue_style('lpc-font-awesome', WEBHUNT_LPC_PLUGIN_URL.'assets/css/font-awesome.css');
	wp_enqueue_style('lpc-AdminLTE.css', WEBHUNT_LPC_PLUGIN_URL.'assets/css/AdminLTE.css');
	wp_enqueue_style('lpc-skin-blue.css', WEBHUNT_LPC_PLUGIN_URL.'assets/css/skin-blue.css');
	wp_enqueue_style('lpc-smart-forms.css', WEBHUNT_LPC_PLUGIN_URL.'assets/css/smart-forms.css');
	wp_enqueue_style('lpc-smart-addons-css', WEBHUNT_LPC_PLUGIN_URL.'assets/css/smart-addons.css');
	wp_enqueue_style('lpc-recommend-css', WEBHUNT_LPC_PLUGIN_URL.'assets/css/recommend.css');
	if( isset( $_GET['page'] ) && $_GET['page'] == 'login_page_customizer' ) {
		wp_enqueue_script( 'jquery-ui-sortable' );
        wp_enqueue_script( 'lpc-custom-js', WEBHUNT_LPC_PLUGIN_URL . 'assets/js/custom.js', array('jquery', 'jquery-ui-sortable')); //registering plugin's admin js
        //register perloader & tab css
        wp_enqueue_style( 'lpc-perloader-tab-css', WEBHUNT_LPC_PLUGIN_URL.'assets/css/lpc-perloader-tab.css' );
    }
	
   /* enqueue scripts page for Custom Login Page plugin */
   	wp_enqueue_script('jquery');
	wp_enqueue_media();
	wp_enqueue_script('jquery-touch-punch');
	wp_enqueue_script('jquery-ui-slider');
	wp_enqueue_script('lpc-bootstrap.min.js', WEBHUNT_LPC_PLUGIN_URL.'assets/js/bootstrap.min.js');
	wp_enqueue_script('jquery.spectrum.min.js',WEBHUNT_LPC_PLUGIN_URL.'assets/js/jquery.spectrum.min.js', array('jquery'));
	
	wp_enqueue_script('lpc-media-upload-script-js', WEBHUNT_LPC_PLUGIN_URL.'assets/js/media-upload-script.js');
	
   /* AdminLTE App */
	wp_enqueue_script('lpc-fastclick-js', WEBHUNT_LPC_PLUGIN_URL.'assets/js/fastclick.js');
	wp_enqueue_script('lpc-app-js', WEBHUNT_LPC_PLUGIN_URL.'assets/js/app.js');
	
	wp_enqueue_script('lpc-save-data-js', WEBHUNT_LPC_PLUGIN_URL.'assets/js/lpc-save-data.js');
	$params = array(
	  'ajax_url'	=> admin_url('admin-ajax.php'),
	  'ajax_nonce'	=> wp_create_nonce('lpc_nonce'),
	);
	wp_localize_script( 'lpc-save-data-js', 'lpc_obj', $params );
}
	
function login_page_customizer_content() {
	require('functions/get-save-data.php');
	require('functions/get-value.php');
	require_once( WEBHUNT_LPC_ROOT_PATH . 'includes/class-lpc-system-info.php');
	require_once('pages/content.php');
}

register_uninstall_hook(__FILE__, 'lpc_uninstallation');
function lpc_uninstallation() {
	require_once('functions/unintall.php');
}
?>