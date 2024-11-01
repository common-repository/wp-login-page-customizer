<?php
// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) exit;

/**
 * Get option and check the key exists in it.
 *
 * @since 1.0.0
 * @version 1.0.1
 * * * * * * * * * * * * * * * */

	/******************* DASHBOARD *************************************
	********************************************************************/
	
	$defult_settings_dashboard = array(
		'lpc_status'  		=> 'true',
		'lpc_uninstall'  	=> 'false',
		'customCssEditor'	=> "",
	);
	$lpc_dashboard = unserialize(get_option('lpc_plugin_settings_dashboard'));
	$lpc_plugin_settings_dashboard = wp_parse_args($lpc_dashboard , $defult_settings_dashboard);
	
	
	/******************* BACKGROUND *************************************
	********************************************************************/
	
	$defult_settings_background = array(
		'tBgType'  				=> 'bgcolor',
		'tBgColor'  			=> '#34bc9d',
		'tBgImage' 				=> WEBHUNT_LPC_PLUGIN_URL.'assets/img/site-bg-img-1.jpg',
		'bgRepeat'  			=> 'no-repeat',
		'bgPosition'  			=> 'center',
		'bgImageSize'  			=> 'cover',
		'bgImgOverlay'			=> "true",
		'bgOverlayColor'		=> "#000000",
		'bgOverlayOpacity' 		=> "50",
	);
	$lpc_background = unserialize(get_option('lpc_plugin_settings_background'));
	$lpc_plugin_settings_background = wp_parse_args($lpc_background , $defult_settings_background);
	
	
	/******************* LOGIN FORM ************************************
	********************************************************************/
	
	$defult_settings_login = array(
		'enableLoginTrans' 	=> "false",
		'loginBg' 			=> "color",
		'loginBgColor' 		=> "#232323",
		'loginBgImage' 		=> WEBHUNT_LPC_PLUGIN_URL.'assets/img/collective.jpg',
		
		'loginPosition' 	=> "Default",
		'loginFloat' 		=> "center",
		'loginLeft' 		=> 480,
		'loginTop' 			=> 60,
		
		'loginWidth' 		=> 330,
		'loginHeight' 		=> 200,
		'loginPaddingLR'	=> 10,
		'loginRadius' 		=> 0,
		'loginBorderSize'	=> 0,
		'loginBorderStyle'	=> "solid",
		'loginBorderColor'	=> "#eeee22",
		'enableLoginShadow'	=> "false",
		'loginShadowColor'	=> "#eeee22",
		
		'redirectUrl'		=> "",
	);
	$lpc_login_box = unserialize(get_option('lpc_plugin_settings_login'));
	global $lpc_plugin_settings_login;
	$lpc_plugin_settings_login = wp_parse_args($lpc_login_box , $defult_settings_login);
	

	/******************* LOGO SETTINGS **********************************
	********************************************************************/
	
	$defult_settings_Logo = array(
		'logoType'			=> "img",
		'logoImageUrl' 		=> WEBHUNT_LPC_PLUGIN_URL.'assets/img/WordPress-standard-logo-white.png',
		'logoWidth' 		=> "300",
		'logoHeight' 		=> "62",
		'logoSpaceTop' 		=> "10",
		'logoSpaceBottom' 	=> "12",
		'logoText' 			=> "WebHunt Infotech",
		'logoTextColor' 	=> "#ffffff",
		'logoSize' 			=> "48",
		'logoLinkURL' 		=> "https://www.webhuntinfotech.com/",
		'logoTitle' 		=> "",
	);
	$lpc_logo = unserialize(get_option('lpc_plugin_settings_logo'));
	$lpc_plugin_settings_logo = wp_parse_args($lpc_logo , $defult_settings_Logo);
	
	
	/******************* INPUT FIELD SETTINGS ***************************
	********************************************************************/
	
	$defult_settings_input_field = array(
		'inputLabelColor' 		=> "#ffffff",
		'inputBgColor'			=> "#ffffff",
		'inputTextColor' 		=> "#777777",
		'rememberMeColor' 		=> "#ffffff",
		'enableLinkShadow' 		=> "false",
		'linkShadowColor' 		=> "#0c0c0c",
		'inputLabelFontSize'	=> 14,
		'inputTextFontSize'		=> 14,
		'rememberMeFontSize'	=> 16,
		'inputBorderRadius'		=> 0,
		'userLabel' 			=> "Username or Email Address",
		'userPlaceholder'		=> "Username or email",
		'pwdLabel' 				=> "Password",
		'pwdPlaceholder' 		=> "Password",
		'enableInputIcon'		=> "true",
		'userInputIcon'			=> "fa fa-user",
		'pwdInputIcon'			=> "fa fa-key",
	);	
	$lpc_input_field = unserialize(get_option('lpc_plugin_settings_input_field'));
	$lpc_plugin_settings_input_field = wp_parse_args($lpc_input_field , $defult_settings_input_field);
	
	
	/******************* BUTTON SETTINGS *****************************
	********************************************************************/
	
	$defult_settings_button = array(
		'btnColor' 			=> "#e82f26",
		'btnBorderColor' 	=> "#e82f26",
		'btnColorH' 		=> "#e82f26",
		'btnBorderColorH' 	=> "#e82f26",
		'btnTextColor' 		=> "#ffffff",
		'btnTxtShadowColor'	=> "#48100d",
		'btnWidth'			=> 100,
		'btnTopPadding'		=> 5,
		'btnBottomPadding'	=> 5,
		'btnRadious'		=> 0,
		'btnTextSize'		=> 16,
	);	
	$lpc_button = unserialize(get_option('lpc_plugin_settings_button'));
	$lpc_plugin_settings_button = wp_parse_args($lpc_button , $defult_settings_button);
	
	
	/******************* FOOTER SETTINGS *****************************
	********************************************************************/
	
	$defult_settings_footer = array(
		'enableLostPwdTxt' 	=> "true",
		'lostPwdTxt' 		=> "Lost your password?",
		'lostPwdTxtColor' 	=> "#ffffff",
		'lostPwdTxtHColor' 	=> "#ffffff",
		'lostPwdFontSize' 	=> 14,
		'lostPwdTxtBg' 		=> "false",
		'lostPwdTxtBgColor' => "#8224e3",
		'enableBackToText' 	=> "true",
		'backToTextColor'	=> "#ffffff",
		'backToTextHColor'	=> "#ffffff",
		'backToFontSize'	=> 14,
		'backToTextBg' 		=> "false",
		'backToTextBgColor' => "#8224e3",
		'enableCopyright'	=> "false",
		'copyrightBgColor'	=> "#efefef",
		'copyrightTxtColor' => "#222222",
		'copyrightNote'		=> "© 2019, All Rights Reserved.",
		'showLove'			=> "true",
		'lovePosition'		=> "right",
	);	
	$lpc_footer = unserialize(get_option('lpc_plugin_settings_footer'));
	$lpc_plugin_settings_footer = wp_parse_args($lpc_footer , $defult_settings_footer);
	
		
	/******************** Welcome Messages *****************************
	********************************************************************/
	
	$defult_settings_welcome_messages = array(
		'lostpwdWcMsg' 		=> "",
		'loginPageWcMsg' 	=> "",
		'registerWcMsg' 	=> "",
		'logoutMessage' 	=> "",
		'wcMsgBgColor' 		=> "#RRGGBB",
		'wcMsgBorder'		=> "",
	);
	$lpc_welcome_messages = unserialize(get_option('lpc_plugin_settings_welcome_messages'));
	$lpc_plugin_settings_welcome_messages = wp_parse_args($lpc_welcome_messages , $defult_settings_welcome_messages);
	
	
	/******************** Google Captcha *******************************
	********************************************************************/
	
	$defult_settings_google_captcha = array(
		'enableGCaptcha' 	=> "false",
		'gSiteKey' 			=> "",
		'gSecretKey' 		=> "",
		'gCaptchaTheme' 	=> "light",
	);
	$lpc_google_captcha = unserialize(get_option('lpc_plugin_settings_google_captcha'));
	$lpc_plugin_settings_google_captcha = wp_parse_args($lpc_google_captcha , $defult_settings_google_captcha);
?>