<?php 
add_action('wp_ajax_action_lpc_page_setting_save_post', 'lpc_save_page_settings');
add_action('wp_ajax_nopriv_action_lpc_page_setting_save_post', 'lpc_save_page_settings');
function lpc_save_page_settings(){
	
	if(!check_ajax_referer( 'lpc_nonce', 'security', false )){
		echo 'nonce_err';
		die;
	}
	
	$hook = $_POST['hook'];
	
	/******************* DASHBOARD *************************************
	********************************************************************/
	if($hook=="dashboard"){
		$lpc_plugin_settings_dashboard = array( 
			'lpc_status'    	=> sanitize_text_field($_POST['lpc_status']),
			'lpc_uninstall'  	=> sanitize_text_field($_POST['lpc_uninstall']),
			'customCssEditor'	=> wp_filter_nohtml_kses($_POST['customCssEditor']),
		);
		update_option("lpc_plugin_settings_dashboard", serialize($lpc_plugin_settings_dashboard));
	}
	
	/******************* BACKGROUND *************************************
	********************************************************************/
	if($hook=="background"){
		$lpc_plugin_settings_background = array(
			'tBgType'  				=> sanitize_text_field($_POST['tBgType']),
			'tBgColor'  			=> sanitize_hex_color($_POST['tBgColor']),
			'tBgImage' 				=> esc_url($_POST['tBgImage']),
			'bgRepeat'  			=> sanitize_text_field($_POST['bgRepeat']),
			'bgPosition'  			=> sanitize_text_field($_POST['bgPosition']),
			'bgImageSize'  			=> sanitize_text_field($_POST['bgImageSize']),
			'bgImgOverlay'			=> sanitize_text_field($_POST['bgImgOverlay']),
			'bgOverlayColor'		=> sanitize_hex_color($_POST['bgOverlayColor']),
			'bgOverlayOpacity' 		=> sanitize_text_field($_POST['bgOverlayOpacity']),
		);
		update_option("lpc_plugin_settings_background", serialize($lpc_plugin_settings_background));
	}
	
	/******************* LOGIN FORM ************************************
	********************************************************************/
	if($hook=="login"){
		$lpc_plugin_settings_login = array(
			'enableLoginTrans' 	=> sanitize_text_field($_POST['enableLoginTrans']),
			'loginBg' 			=> sanitize_text_field($_POST['loginBg']),
			'loginBgColor' 		=> sanitize_hex_color($_POST['loginBgColor']),
			'loginBgImage' 		=> esc_url($_POST['loginBgImage']),
			'loginPosition' 	=> sanitize_text_field($_POST['loginPosition']),
			'loginFloat' 		=> sanitize_text_field($_POST['loginFloat']),
			'loginLeft' 		=> sanitize_text_field($_POST['loginLeft']),
			'loginTop' 			=> sanitize_text_field($_POST['loginTop']),
			'loginWidth' 		=> sanitize_text_field($_POST['loginWidth']),
			'loginHeight' 		=> sanitize_text_field($_POST['loginHeight']),
			'loginPaddingLR'	=> sanitize_text_field($_POST['loginPaddingLR']),
			'loginRadius' 		=> sanitize_text_field($_POST['loginRadius']),
			'loginBorderSize'	=> sanitize_text_field($_POST['loginBorderSize']),
			'loginBorderStyle'	=> sanitize_text_field($_POST['loginBorderStyle']),
			'loginBorderColor'	=> sanitize_hex_color($_POST['loginBorderColor']),
			'enableLoginShadow'	=> sanitize_text_field($_POST['enableLoginShadow']),
			'loginShadowColor'	=> sanitize_hex_color($_POST['loginShadowColor']),
			'redirectUrl'		=> esc_url($_POST['redirectUrl']),
		);
		update_option("lpc_plugin_settings_login", serialize($lpc_plugin_settings_login));
	}
	
	/******************* LOGO SETTINGS **********************************
	********************************************************************/
	if($hook=="logo"){
		$lpc_plugin_settings_logo = array(
			'logoType'			=> sanitize_text_field($_POST['logoType']),
			'logoImageUrl' 		=> esc_url($_POST['logoImageUrl']),
			'logoWidth' 		=> sanitize_text_field($_POST['logoWidth']),
			'logoHeight' 		=> sanitize_text_field($_POST['logoHeight']),
			'logoSpaceTop' 		=> sanitize_text_field($_POST['logoSpaceTop']),
			'logoSpaceBottom' 	=> sanitize_text_field($_POST['logoSpaceBottom']),
			'logoText' 			=> stripslashes(sanitize_text_field($_POST['logoText'])),
			'logoTextColor' 	=> sanitize_hex_color($_POST['logoTextColor']),
			'logoSize' 			=> sanitize_text_field($_POST['logoSize']),
			'logoLinkURL' 		=> esc_url($_POST['logoLinkURL']),
			'logoTitle' 		=> stripslashes(sanitize_text_field($_POST['logoTitle'])),
		);
		update_option("lpc_plugin_settings_logo", serialize($lpc_plugin_settings_logo));
	}
	
	/******************* INPUT FIELD SETTINGS **************************
	********************************************************************/
	if($hook=="input_field"){
		$lpc_plugin_settings_input_field = array(
			'inputLabelColor' 		=> sanitize_hex_color($_POST['inputLabelColor']),
			'inputBgColor'			=> sanitize_hex_color($_POST['inputBgColor']),
			'inputTextColor' 		=> sanitize_hex_color($_POST['inputTextColor']),
			'rememberMeColor' 		=> sanitize_hex_color($_POST['rememberMeColor']),		
			'enableLinkShadow' 		=> sanitize_text_field($_POST['enableLinkShadow']),
			'linkShadowColor' 		=> sanitize_hex_color($_POST['linkShadowColor']),
			'inputLabelFontSize'	=> sanitize_text_field($_POST['inputLabelFontSize']),
			'inputTextFontSize'		=> sanitize_text_field($_POST['inputTextFontSize']),
			'rememberMeFontSize'	=> sanitize_text_field($_POST['rememberMeFontSize']),
			'inputBorderRadius'		=> sanitize_text_field($_POST['inputBorderRadius']),
			'userLabel' 			=> stripslashes(sanitize_text_field($_POST['userLabel'])),
			'userPlaceholder'		=> stripslashes(sanitize_text_field($_POST['userPlaceholder'])),
			'pwdLabel' 				=> stripslashes(sanitize_text_field($_POST['pwdLabel'])),
			'pwdPlaceholder' 		=> stripslashes(sanitize_text_field($_POST['pwdPlaceholder'])),
			'enableInputIcon'		=> sanitize_text_field($_POST['enableInputIcon']),
			'userInputIcon'			=> sanitize_text_field($_POST['userInputIcon']),
			'pwdInputIcon'			=> sanitize_text_field($_POST['pwdInputIcon']),
		);
		update_option("lpc_plugin_settings_input_field", serialize($lpc_plugin_settings_input_field));
	}
	
	/******************* BUTTON SETTINGS *****************************
	********************************************************************/
	if($hook=="button"){
		$lpc_plugin_settings_button = array(
			'btnColor' 			=> sanitize_hex_color($_POST['btnColor']),
			'btnBorderColor' 	=> sanitize_hex_color($_POST['btnBorderColor']),
			'btnColorH' 		=> sanitize_hex_color($_POST['btnColorH']),
			'btnBorderColorH' 	=> sanitize_hex_color($_POST['btnBorderColorH']),
			'btnTextColor' 		=> sanitize_hex_color($_POST['btnTextColor']),
			'btnTxtShadowColor'	=> sanitize_hex_color($_POST['btnTxtShadowColor']),
			'btnWidth'			=> sanitize_text_field($_POST['btnWidth']),
			'btnTopPadding'		=> sanitize_text_field($_POST['btnTopPadding']),
			'btnBottomPadding'	=> sanitize_text_field($_POST['btnBottomPadding']),
			'btnRadious'		=> sanitize_text_field($_POST['btnRadious']),
			'btnTextSize'		=> sanitize_text_field($_POST['btnTextSize']),
		);
		update_option("lpc_plugin_settings_button", serialize($lpc_plugin_settings_button));
	}
	
	/******************* FOOTER SETTINGS *****************************
	********************************************************************/
	if($hook=="footer"){
		$lpc_plugin_settings_footer = array(
			'enableLostPwdTxt' 	=> sanitize_text_field($_POST['enableLostPwdTxt']),
			'lostPwdTxt' 		=> stripslashes(sanitize_text_field($_POST['lostPwdTxt'])),
			'lostPwdTxtColor' 	=> sanitize_hex_color($_POST['lostPwdTxtColor']),
			'lostPwdTxtHColor' 	=> sanitize_hex_color($_POST['lostPwdTxtHColor']),
			'lostPwdFontSize' 	=> sanitize_text_field($_POST['lostPwdFontSize']),
			'lostPwdTxtBg' 		=> sanitize_text_field($_POST['lostPwdTxtBg']),
			'lostPwdTxtBgColor' => sanitize_hex_color($_POST['lostPwdTxtBgColor']),
			'enableBackToText' 	=> sanitize_text_field($_POST['enableBackToText']),
			'backToTextColor'	=> sanitize_hex_color($_POST['backToTextColor']),
			'backToTextHColor'	=> sanitize_hex_color($_POST['backToTextHColor']),
			'backToFontSize'	=> sanitize_text_field($_POST['backToFontSize']),
			'backToTextBg' 		=> sanitize_text_field($_POST['backToTextBg']),
			'backToTextBgColor' => sanitize_hex_color($_POST['backToTextBgColor']),
			'enableCopyright'	=> sanitize_text_field($_POST['enableCopyright']),
			'copyrightBgColor'	=> sanitize_hex_color($_POST['copyrightBgColor']),
			'copyrightTxtColor'	=> sanitize_hex_color($_POST['copyrightTxtColor']),
			'copyrightNote'		=> stripslashes(sanitize_textarea_field($_POST['copyrightNote'])),
			'showLove'			=> sanitize_text_field($_POST['showLove']),
			'lovePosition'		=> sanitize_text_field($_POST['lovePosition']),
		);
		update_option("lpc_plugin_settings_footer", serialize($lpc_plugin_settings_footer));
	}
	
	/******************** Welcome Messages *****************************
	********************************************************************/
	if($hook=="welcome_messages"){
		$lpc_plugin_settings_welcome_messages = array(
			'lostpwdWcMsg' 		=> stripslashes(sanitize_text_field($_POST['lostpwdWcMsg'])),
			'loginPageWcMsg' 	=> stripslashes(sanitize_text_field($_POST['loginPageWcMsg'])),
			'registerWcMsg' 	=> stripslashes(sanitize_text_field($_POST['registerWcMsg'])),
			'logoutMessage' 	=> stripslashes(sanitize_text_field($_POST['logoutMessage'])),
			'wcMsgBgColor' 		=> sanitize_hex_color($_POST['wcMsgBgColor']),
			'wcMsgBorder'		=> sanitize_text_field($_POST['wcMsgBorder']),
		);
		update_option("lpc_plugin_settings_welcome_messages", serialize($lpc_plugin_settings_welcome_messages));
	}
	
	/******************** Google Captcha *******************************
	********************************************************************/
	if($hook=="google_captcha"){
		$lpc_plugin_settings_google_captcha = array(
			'enableGCaptcha' 	=> sanitize_text_field($_POST['enableGCaptcha']),
			'gSiteKey' 			=> sanitize_text_field($_POST['gSiteKey']),
			'gSecretKey' 		=> sanitize_text_field($_POST['gSecretKey']),
			'gCaptchaTheme' 	=> sanitize_text_field($_POST['gCaptchaTheme']),
		);
		update_option("lpc_plugin_settings_google_captcha", serialize($lpc_plugin_settings_google_captcha));
	}
}
	
	if(isset($_POST['action_lpc_reset']) == "action_lpc_page_setting_reset_post")
	{
		$hook = $_POST['hook'];
		$hook = 'lpc_plugin_settings_'.$hook;
		delete_option($hook);
	}
	
	if(isset($_POST['action_lpc_reset_all']) == "action_lpc_all_pages_setting_reset")
	{
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

/**
 * Export the settings of the plugin.
 *
 * @since 1.0.0
 * @version 1.0.1
 * * * * * * * * * * * * * * * */	
function lpc_export_settings() {

	if( empty( $_POST['lpc_action'] ) || 'export_settings' != $_POST['lpc_action'] )
		return;

	if( ! wp_verify_nonce( $_POST['lpc_export_nonce'], 'lpc_export_nonce' ) )
		return;

	if( ! current_user_can( 'manage_options' ) )
		return;
	
	if(file_exists( WEBHUNT_LPC_ROOT_PATH . 'functions/get-save-data.php')){
		require( 'get-save-data.php' );
	}else{
		return;
	}

	if( !isset($lpc_plugin_settings_dashboard)){
		return;
	}
	
	$lpc_ALL_Settings= serialize(array(
		'lpc_status' 			=> $lpc_plugin_settings_dashboard['lpc_status'],
		'lpc_uninstall'			=> $lpc_plugin_settings_dashboard['lpc_uninstall'],
		'customCssEditor'		=> $lpc_plugin_settings_dashboard['customCssEditor'],
		
		'tBgType'  				=> $lpc_plugin_settings_background['tBgType'],
		'tBgColor'  			=> $lpc_plugin_settings_background['tBgColor'],
		'tBgImage' 				=> $lpc_plugin_settings_background['tBgImage'],
		'bgRepeat'  			=> $lpc_plugin_settings_background['bgRepeat'],
		'bgPosition'  			=> $lpc_plugin_settings_background['bgPosition'],
		'bgImageSize'  			=> $lpc_plugin_settings_background['bgImageSize'],
		'bgImgOverlay'			=> $lpc_plugin_settings_background['bgImgOverlay'],
		'bgOverlayColor'		=> $lpc_plugin_settings_background['bgOverlayColor'],
		'bgOverlayOpacity' 		=> $lpc_plugin_settings_background['bgOverlayOpacity'],
		
		'loginPosition' 		=> $lpc_plugin_settings_login['loginPosition'],
		'loginFloat' 			=> $lpc_plugin_settings_login['loginFloat'],
		'loginLeft' 			=> $lpc_plugin_settings_login['loginLeft'],
		'loginTop' 				=> $lpc_plugin_settings_login['loginTop'],
		'loginBg' 				=> $lpc_plugin_settings_login['loginBg'],
		'loginBgColor' 			=> $lpc_plugin_settings_login['loginBgColor'],
		'loginBgImage' 			=> $lpc_plugin_settings_login['loginBgImage'],
		'enableLoginTrans' 		=> $lpc_plugin_settings_login['enableLoginTrans'],
		'loginWidth' 			=> $lpc_plugin_settings_login['loginWidth'],
		'loginHeight' 			=> $lpc_plugin_settings_login['loginHeight'],
		'loginPaddingLR' 		=> $lpc_plugin_settings_login['loginPaddingLR'],
		'loginRadius' 			=> $lpc_plugin_settings_login['loginRadius'],
		'loginBorderSize'		=> $lpc_plugin_settings_login['loginBorderSize'],
		'loginBorderStyle'		=> $lpc_plugin_settings_login['loginBorderStyle'],
		'loginBorderColor'		=> $lpc_plugin_settings_login['loginBorderColor'],
		'enableLoginShadow'		=> $lpc_plugin_settings_login['enableLoginShadow'],
		'loginShadowColor'		=> $lpc_plugin_settings_login['loginShadowColor'], 
		'redirectUrl'			=> $lpc_plugin_settings_login['redirectUrl'],
		
		'logoType'				=> $lpc_plugin_settings_logo['logoType'],
		'logoImageUrl' 			=> $lpc_plugin_settings_logo['logoImageUrl'],
		'logoWidth' 			=> $lpc_plugin_settings_logo['logoWidth'],
		'logoHeight' 			=> $lpc_plugin_settings_logo['logoHeight'],
		'logoSpaceTop'			=> $lpc_plugin_settings_logo['logoSpaceTop'],	
		'logoSpaceBottom' 		=> $lpc_plugin_settings_logo['logoSpaceBottom'],
		'logoText' 				=> $lpc_plugin_settings_logo['logoText'],
		'logoTextColor' 		=> $lpc_plugin_settings_logo['logoTextColor'],
		'logoSize' 				=> $lpc_plugin_settings_logo['logoSize'],
		'logoLinkURL' 			=> $lpc_plugin_settings_logo['logoLinkURL'],
		'logoTitle' 			=> $lpc_plugin_settings_logo['logoTitle'],
		
		'inputLabelColor' 		=> $lpc_plugin_settings_input_field['inputLabelColor'],
		'inputBgColor'			=> $lpc_plugin_settings_input_field['inputBgColor'],
		'inputTextColor' 		=> $lpc_plugin_settings_input_field['inputTextColor'],
		'rememberMeColor' 		=> $lpc_plugin_settings_input_field['rememberMeColor'],
		'enableLinkShadow' 		=> $lpc_plugin_settings_input_field['enableLinkShadow'],
		'linkShadowColor' 		=> $lpc_plugin_settings_input_field['linkShadowColor'],
		'inputLabelFontSize'	=> $lpc_plugin_settings_input_field['inputLabelFontSize'],
		'inputTextFontSize'		=> $lpc_plugin_settings_input_field['inputTextFontSize'],
		'rememberMeFontSize'	=> $lpc_plugin_settings_input_field['rememberMeFontSize'],
		'inputBorderRadius'		=> $lpc_plugin_settings_input_field['inputBorderRadius'],
		'userLabel' 			=> $lpc_plugin_settings_input_field['userLabel'],
		'userPlaceholder'		=> $lpc_plugin_settings_input_field['userPlaceholder'],
		'pwdLabel' 				=> $lpc_plugin_settings_input_field['pwdLabel'],
		'pwdPlaceholder' 		=> $lpc_plugin_settings_input_field['pwdPlaceholder'],
		'enableInputIcon'		=> $lpc_plugin_settings_input_field['enableInputIcon'],
		'userInputIcon'			=> $lpc_plugin_settings_input_field['userInputIcon'],
		'pwdInputIcon'			=> $lpc_plugin_settings_input_field['pwdInputIcon'],
		
		'btnColor' 				=> $lpc_plugin_settings_button['btnColor'],
		'btnBorderColor' 		=> $lpc_plugin_settings_button['btnBorderColor'],
		'btnColorH' 			=> $lpc_plugin_settings_button['btnColorH'],
		'btnBorderColorH' 		=> $lpc_plugin_settings_button['btnBorderColorH'],
		'btnTextColor' 			=> $lpc_plugin_settings_button['btnTextColor'],
		'btnTxtShadowColor'		=> $lpc_plugin_settings_button['btnTxtShadowColor'],
		'btnWidth'				=> $lpc_plugin_settings_button['btnWidth'],
		'btnTopPadding'			=> $lpc_plugin_settings_button['btnTopPadding'],
		'btnBottomPadding'		=> $lpc_plugin_settings_button['btnBottomPadding'],
		'btnRadious'			=> $lpc_plugin_settings_button['btnRadious'],
		'btnTextSize'			=> $lpc_plugin_settings_button['btnTextSize'],
			
		'enableLostPwdTxt' 		=> $lpc_plugin_settings_footer['enableLostPwdTxt'],
		'lostPwdTxt' 			=> $lpc_plugin_settings_footer['lostPwdTxt'],
		'lostPwdTxtColor' 		=> $lpc_plugin_settings_footer['lostPwdTxtColor'],
		'lostPwdTxtHColor' 		=> $lpc_plugin_settings_footer['lostPwdTxtHColor'],
		'lostPwdFontSize' 		=> $lpc_plugin_settings_footer['lostPwdFontSize'],
		'lostPwdTxtBg' 			=> $lpc_plugin_settings_footer['lostPwdTxtBg'],
		'lostPwdTxtBgColor' 	=> $lpc_plugin_settings_footer['lostPwdTxtBgColor'],
		'enableBackToText' 		=> $lpc_plugin_settings_footer['enableBackToText'],
		'backToTextColor'		=> $lpc_plugin_settings_footer['backToTextColor'],
		'backToTextHColor'		=> $lpc_plugin_settings_footer['backToTextHColor'],
		'backToFontSize'		=> $lpc_plugin_settings_footer['backToFontSize'],
		'backToTextBg' 			=> $lpc_plugin_settings_footer['backToTextBg'],
		'backToTextBgColor' 	=> $lpc_plugin_settings_footer['backToTextBgColor'],
		'enableCopyright'		=> $lpc_plugin_settings_footer['enableCopyright'],
		'copyrightBgColor'		=> $lpc_plugin_settings_footer['copyrightBgColor'],
		'copyrightTxtColor'		=> $lpc_plugin_settings_footer['copyrightTxtColor'],
		'copyrightNote'			=> $lpc_plugin_settings_footer['copyrightNote'],
		'showLove'				=> $lpc_plugin_settings_footer['showLove'],
		'lovePosition'			=> $lpc_plugin_settings_footer['lovePosition'],
		
		'lostpwdWcMsg' 			=> $lpc_plugin_settings_welcome_messages['lostpwdWcMsg'],
		'loginPageWcMsg' 		=> $lpc_plugin_settings_welcome_messages['loginPageWcMsg'],
		'registerWcMsg' 		=> $lpc_plugin_settings_welcome_messages['registerWcMsg'],
		'logoutMessage' 		=> $lpc_plugin_settings_welcome_messages['logoutMessage'],
		'wcMsgBgColor' 			=> $lpc_plugin_settings_welcome_messages['wcMsgBgColor'],
		'wcMsgBorder'			=> $lpc_plugin_settings_welcome_messages['wcMsgBorder'],
			
		'enableGCaptcha' 		=> $lpc_plugin_settings_google_captcha['enableGCaptcha'],
		'gSiteKey' 				=> $lpc_plugin_settings_google_captcha['gSiteKey'],
		'gSecretKey' 			=> $lpc_plugin_settings_google_captcha['gSecretKey'],
		'gCaptchaTheme' 		=> $lpc_plugin_settings_google_captcha['gCaptchaTheme']

	));
	ignore_user_abort( true );

	nocache_headers();
	header( 'Content-Type: application/json; charset=utf-8' );
	header( 'Content-Disposition: attachment; filename=lpc-settings-export-' . date( 'm-d-Y' ) . '.json' );
	header( "Expires: 0" );

	echo json_encode( $lpc_ALL_Settings );
	exit;
}
add_action( 'admin_init', 'lpc_export_settings' );

/**
 * Process a settings import from a json file
 */
function lpc_import_settings() {
	
	if( empty( $_POST['lpc_action'] ) )
		return;
	
	if( !('import_settings' == $_POST['lpc_action'] || 'import_style' == $_POST['lpc_action'])){
		return;
	}

	if( ! wp_verify_nonce( $_POST['lpc_import_nonce'], 'lpc_import_nonce' ) )
		return;

	if( ! current_user_can( 'manage_options' ) )
		return;
	
	if( 'import_settings' == $_POST['lpc_action'] ){
		list($oteher_extension, $extension) = explode(".", $_FILES['import_file']['name']);
		//$extension = end( explode( '.', $_FILES['import_file']['name'] ) );

		if( $extension != 'json' ) {
			wp_die( __( 'Please upload a valid .json file' ) );
		}

		$import_file = $_FILES['import_file']['tmp_name'];

		if( empty( $import_file ) ) {
			wp_die( __( 'Please upload a file to import' ) );
		}

		// Retrieve the settings from the file.
		$settings = json_decode( file_get_contents( $import_file ) );
	}else{
		if( !isset($_POST['preDesignLayout']) ){
			return;
		}
		$preDesignLayout = $_POST['preDesignLayout'];
		
		//echo $preDesignLayout; die;
		
		switch( $preDesignLayout ){
			case "default":
				$settings = json_decode( file_get_contents( WEBHUNT_LPC_ROOT_PATH .'assets/pre-designs/default.json' ) );
				break;
			case "1":
				$settings = json_decode( file_get_contents( WEBHUNT_LPC_ROOT_PATH .'assets/pre-designs/style-01.json' ) );
				break;
			case "2":
				$settings = json_decode( file_get_contents( WEBHUNT_LPC_ROOT_PATH .'assets/pre-designs/style-02.json' ) );
				break;
			case "3":
				$settings = json_decode( file_get_contents( WEBHUNT_LPC_ROOT_PATH .'assets/pre-designs/style-03.json' ) );
				break;
			case "4":
				$settings = json_decode( file_get_contents( WEBHUNT_LPC_ROOT_PATH .'assets/pre-designs/style-04.json' ) );
				break;
			default:
				return;
		}
	}
	
	$lpc_import_data = unserialize($settings);
	$upload_dir = wp_upload_dir();
	$plugins_dir = plugins_url();
		
	// Background Image
	$data = $lpc_import_data['tBgImage'];
	if (strpos($data,'uploads') == true) {
		list($oteher_path, $image_path) = explode("uploads", $data);
		$tBgImage = $upload_dir['baseurl']. $image_path;
	}else if (strpos($data,'plugins') == true){
		list($oteher_path, $image_path) = explode("plugins", $data);
		$tBgImage = $plugins_dir. $image_path;
	}
	
	// Login Box Background Image
	$data = $lpc_import_data['loginBgImage'];
	if (strpos($data,'uploads') == true) {
		list($oteher_path, $image_path) = explode("uploads", $data);
		$loginBgImage = $upload_dir['baseurl']. $image_path;
	}else if (strpos($data,'plugins') == true){
		list($oteher_path, $image_path) = explode("plugins", $data);
		$loginBgImage = $plugins_dir. $image_path;
	}
	
	// Logo Image URL
	$data = $lpc_import_data['logoImageUrl'];
	if (strpos($data,'uploads') == true) {
		list($oteher_path, $image_path) = explode("uploads", $data);
		$logoImageUrl = $upload_dir['baseurl']. $image_path;
	}else if (strpos($data,'plugins') == true){
		list($oteher_path, $image_path) = explode("plugins", $data);
		$logoImageUrl = $plugins_dir. $image_path;
	}
	
	
	/******************* DASHBOARD *************************************
	********************************************************************/ 
	$lpc_dashboard_settings = serialize(array(
		'lpc_status' 		=> $lpc_import_data['lpc_status'],
		'lpc_uninstall' 	=> $lpc_import_data['lpc_uninstall'],
		'customCssEditor' 	=> $lpc_import_data['customCssEditor']
	));
	update_option('lpc_plugin_settings_dashboard', $lpc_dashboard_settings);

	
	/******************* BACKGROUND *************************************
	********************************************************************/
	$lpc_background_settigns = serialize(array(
		'tBgType'				=> $lpc_import_data['tBgType'],
		'tBgColor' 				=> $lpc_import_data['tBgColor'],
		'tBgImage' 				=> $tBgImage,
		'bgRepeat' 				=> $lpc_import_data['bgRepeat'],
		'bgPosition' 			=> $lpc_import_data['bgPosition'],
		'bgImageSize' 			=> $lpc_import_data['bgImageSize'],
		'bgImgOverlay' 			=> $lpc_import_data['bgImgOverlay'],
		'bgOverlayColor' 		=> $lpc_import_data['bgOverlayColor'],
		'bgOverlayOpacity' 		=> $lpc_import_data['bgOverlayOpacity']
	));
	update_option('lpc_plugin_settings_background', $lpc_background_settigns);
	
	
	/******************* LOGIN FORM ************************************
	********************************************************************/
	$lpc_login_box_settings = serialize(array(
		'loginPosition' 		=> $lpc_import_data['loginPosition'],
		'loginFloat' 			=> $lpc_import_data['loginFloat'],
		'loginLeft' 			=> $lpc_import_data['loginLeft'],
		'loginTop' 				=> $lpc_import_data['loginTop'],
		'loginBg' 				=> $lpc_import_data['loginBg'],
		'loginBgColor' 			=> $lpc_import_data['loginBgColor'],
		'loginBgImage' 			=> $loginBgImage,
		'enableLoginTrans' 		=> $lpc_import_data['enableLoginTrans'],
		'loginWidth' 			=> $lpc_import_data['loginWidth'],
		'loginHeight' 			=> $lpc_import_data['loginHeight'],
		'loginPaddingLR' 		=> $lpc_import_data['loginPaddingLR'],
		'loginRadius' 			=> $lpc_import_data['loginRadius'],
		'loginBorderSize' 		=> $lpc_import_data['loginBorderSize'],
		'loginBorderColor' 		=> $lpc_import_data['loginBorderColor'],
		'loginBorderStyle' 		=> $lpc_import_data['loginBorderStyle'],
		'enableLoginShadow' 	=> $lpc_import_data['enableLoginShadow'],
		'loginShadowColor' 		=> $lpc_import_data['loginShadowColor'],
		'redirectUrl' 			=> $lpc_import_data['redirectUrl']
	));
	update_option('lpc_plugin_settings_login', $lpc_login_box_settings);
	
	
	/******************* LOGO SETTINGS **********************************
	********************************************************************/
	$lpc_logo_settings = serialize(array(
		'logoType'				=> $lpc_import_data['logoType'],
		'logoImageUrl' 			=> $logoImageUrl,
		'logoWidth' 			=> $lpc_import_data['logoWidth'],
		'logoHeight' 			=> $lpc_import_data['logoHeight'],
		'logoSpaceTop' 			=> $lpc_import_data['logoSpaceTop'],
		'logoSpaceBottom' 		=> $lpc_import_data['logoSpaceBottom'],
		'logoText' 				=> $lpc_import_data['logoText'],
		'logoTextColor' 		=> $lpc_import_data['logoTextColor'],
		'logoSize' 				=> $lpc_import_data['logoSize'],
		'logoLinkURL' 			=> $lpc_import_data['logoLinkURL'],
		'logoTitle' 			=> $lpc_import_data['logoTitle']
	));
	update_option('lpc_plugin_settings_logo', $lpc_logo_settings);
	
	
	/******************* INPUT FIELD SETTINGS **************************
	********************************************************************/
	$lpc_input_field_settings = serialize(array(
		'inputLabelColor' 		=> $lpc_import_data['inputLabelColor'],
		'inputBgColor' 			=> $lpc_import_data['inputBgColor'],
		'inputTextColor' 		=> $lpc_import_data['inputTextColor'],
		'rememberMeColor' 		=> $lpc_import_data['rememberMeColor'],
		'enableLinkShadow' 		=> $lpc_import_data['enableLinkShadow'],
		'linkShadowColor' 		=> $lpc_import_data['linkShadowColor'],
		'inputLabelFontSize' 	=> $lpc_import_data['inputLabelFontSize'],
		'inputTextFontSize' 	=> $lpc_import_data['inputTextFontSize'],
		'rememberMeFontSize' 	=> $lpc_import_data['rememberMeFontSize'],
		'inputBorderRadius' 	=> $lpc_import_data['inputBorderRadius'],
		'userLabel' 			=> $lpc_import_data['userLabel'],
		'userPlaceholder' 		=> $lpc_import_data['userPlaceholder'],
		'pwdLabel' 				=> $lpc_import_data['pwdLabel'],
		'pwdPlaceholder' 		=> $lpc_import_data['pwdPlaceholder'],
		'enableInputIcon' 		=> $lpc_import_data['enableInputIcon'],
		'userInputIcon' 		=> $lpc_import_data['userInputIcon'],
		'pwdInputIcon' 			=> $lpc_import_data['pwdInputIcon']
	));
	update_option('lpc_plugin_settings_input_field', $lpc_input_field_settings);
	
	
	/******************* BUTTON SETTINGS *******************************
	********************************************************************/
	$lpc_button_settings = serialize(array(
		'btnColor' 				=> $lpc_import_data['btnColor'],
		'btnBorderColor' 		=> $lpc_import_data['btnBorderColor'],
		'btnColorH' 			=> $lpc_import_data['btnColorH'],
		'btnBorderColorH' 		=> $lpc_import_data['btnBorderColorH'],
		'btnTextColor' 			=> $lpc_import_data['btnTextColor'],
		'btnTxtShadowColor' 	=> $lpc_import_data['btnTxtShadowColor'],
		'btnWidth' 				=> $lpc_import_data['btnWidth'],
		'btnTopPadding' 		=> $lpc_import_data['btnTopPadding'],
		'btnBottomPadding' 		=> $lpc_import_data['btnBottomPadding'],
		'btnRadious' 			=> $lpc_import_data['btnRadious'],
		'btnTextSize' 			=> $lpc_import_data['btnTextSize']
	));
	update_option('lpc_plugin_settings_button', $lpc_button_settings);

	
	/******************* FOOTER SETTINGS *****************************
	********************************************************************/
	$lpc_footer_settings = serialize(array(
		'enableLostPwdTxt' 		=> $lpc_import_data['enableLostPwdTxt'],
		'lostPwdTxt' 			=> $lpc_import_data['lostPwdTxt'],
		'lostPwdTxtColor' 		=> $lpc_import_data['lostPwdTxtColor'],
		'lostPwdTxtHColor' 		=> $lpc_import_data['lostPwdTxtHColor'],
		'lostPwdFontSize' 		=> $lpc_import_data['lostPwdFontSize'],
		'lostPwdTxtBg' 			=> $lpc_import_data['lostPwdTxtBg'],
		'lostPwdTxtBgColor' 	=> $lpc_import_data['lostPwdTxtBgColor'],
		'enableBackToText' 		=> $lpc_import_data['enableBackToText'],
		'backToTextColor' 		=> $lpc_import_data['backToTextColor'],
		'backToTextHColor' 		=> $lpc_import_data['backToTextHColor'],
		'backToFontSize' 		=> $lpc_import_data['backToFontSize'],
		'backToTextBg' 			=> $lpc_import_data['backToTextBg'],
		'backToTextBgColor' 	=> $lpc_import_data['backToTextBgColor'],
		'enableCopyright' 		=> $lpc_import_data['enableCopyright'],
		'copyrightBgColor' 		=> $lpc_import_data['copyrightBgColor'],
		'copyrightTxtColor' 	=> $lpc_import_data['copyrightTxtColor'],
		'copyrightNote' 		=> $lpc_import_data['copyrightNote'],
		'showLove' 				=> $lpc_import_data['showLove'],
		'lovePosition' 			=> $lpc_import_data['lovePosition']
	));
	update_option('lpc_plugin_settings_footer', $lpc_footer_settings);	

	
	/******************** Welcome Messages *****************************
	********************************************************************/
	$lpc_welcome_messages_settings = serialize(array(
		'lostpwdWcMsg' 			=> $lpc_import_data['lostpwdWcMsg'],
		'loginPageWcMsg' 		=> $lpc_import_data['loginPageWcMsg'],
		'registerWcMsg' 		=> $lpc_import_data['registerWcMsg'],
		'logoutMessage' 		=> $lpc_import_data['logoutMessage'],
		'wcMsgBgColor' 			=> $lpc_import_data['wcMsgBgColor'],
		'wcMsgBorder' 			=> $lpc_import_data['wcMsgBorder']
	));
	update_option('lpc_plugin_settings_welcome_messages', $lpc_welcome_messages_settings);

	
	/******************** Google Captcha *******************************
	********************************************************************/
	$lpc_google_captcha = serialize(array(
		'enableGCaptcha' 		=> $lpc_import_data['enableGCaptcha'],
		'gSiteKey' 				=> $lpc_import_data['gSiteKey'],
		'gSecretKey' 			=> $lpc_import_data['gSecretKey'],
		'gCaptchaTheme' 		=> $lpc_import_data['gCaptchaTheme']
	));
	update_option('lpc_plugin_settings_google_captcha', $lpc_google_captcha);
}
add_action( 'admin_init', 'lpc_import_settings' );
?>