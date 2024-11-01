<?php
// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) exit;

/**
 * Get option and check the key exists in it.
 *
 * @since 1.0.1
 * @version 1.0.1
 * * * * * * * * * * * * * * * */
 
	// Get value of Dashboard page
	if( isset($lpc_plugin_settings_dashboard)){
		$lpc_status 		= $lpc_plugin_settings_dashboard['lpc_status'];
		$lpc_uninstall 		= $lpc_plugin_settings_dashboard['lpc_uninstall'];
		$customCssEditor 	= $lpc_plugin_settings_dashboard['customCssEditor'];
	}
	
	// Get value of Background page
	if( isset($lpc_plugin_settings_background)){
		$tBgType 			= $lpc_plugin_settings_background['tBgType'];
		$tBgColor 			= $lpc_plugin_settings_background['tBgColor'];
		$tBgImage 			= $lpc_plugin_settings_background['tBgImage'];
		$bgRepeat 			= $lpc_plugin_settings_background['bgRepeat'];
		$bgPosition 		= $lpc_plugin_settings_background['bgPosition'];
		$bgImageSize 		= $lpc_plugin_settings_background['bgImageSize'];
		$bgImgOverlay 		= $lpc_plugin_settings_background['bgImgOverlay'];
		$bgOverlayColor 	= $lpc_plugin_settings_background['bgOverlayColor'];
		$bgOverlayOpacity 	= $lpc_plugin_settings_background['bgOverlayOpacity'];
	}
	
	// Get value of Login page
	if( isset($lpc_plugin_settings_login)){
		$loginPosition 		= $lpc_plugin_settings_login['loginPosition'];
		$loginFloat 		= $lpc_plugin_settings_login['loginFloat'];
		$loginLeft 			= $lpc_plugin_settings_login['loginLeft'];
		$loginTop  			= $lpc_plugin_settings_login['loginTop'];	
		$loginBg 			= $lpc_plugin_settings_login['loginBg'];
		$loginBgColor 		= $lpc_plugin_settings_login['loginBgColor'];
		$loginBgImage 		= $lpc_plugin_settings_login['loginBgImage'];
		$enableLoginTrans 	= $lpc_plugin_settings_login['enableLoginTrans'];	
		$loginWidth 		= $lpc_plugin_settings_login['loginWidth'];
		$loginHeight 		= $lpc_plugin_settings_login['loginHeight'];
		$loginPaddingLR 	= $lpc_plugin_settings_login['loginPaddingLR'];
		$loginRadius 		= $lpc_plugin_settings_login['loginRadius'];
		$loginBorderSize 	= $lpc_plugin_settings_login['loginBorderSize'];
		$loginBorderColor 	= $lpc_plugin_settings_login['loginBorderColor'];
		$loginBorderStyle 	= $lpc_plugin_settings_login['loginBorderStyle'];
		$enableLoginShadow 	= $lpc_plugin_settings_login['enableLoginShadow'];
		$loginShadowColor 	= $lpc_plugin_settings_login['loginShadowColor'];	
		$redirectUrl 		= $lpc_plugin_settings_login['redirectUrl'];
	}
	
	// Get value of Logo page
	if( isset($lpc_plugin_settings_logo)){
		$logoType 			= $lpc_plugin_settings_logo['logoType'];
		$logoImageUrl 		= $lpc_plugin_settings_logo['logoImageUrl'];
		$logoWidth 			= $lpc_plugin_settings_logo['logoWidth'];
		$logoHeight 		= $lpc_plugin_settings_logo['logoHeight'];
		$logoSpaceTop 		= $lpc_plugin_settings_logo['logoSpaceTop'];
		$logoSpaceBottom 	= $lpc_plugin_settings_logo['logoSpaceBottom'];
		$logoText 			= $lpc_plugin_settings_logo['logoText'];
		$logoTextColor 		= $lpc_plugin_settings_logo['logoTextColor'];
		$logoSize 			= $lpc_plugin_settings_logo['logoSize'];
		$logoLinkURL		= $lpc_plugin_settings_logo['logoLinkURL'];
		$logoTitle			= $lpc_plugin_settings_logo['logoTitle'];
	}
	
	// Get value of Input Field page
	if( isset($lpc_plugin_settings_input_field)){
		$inputLabelColor 	= $lpc_plugin_settings_input_field['inputLabelColor'];
		$inputBgColor 		= $lpc_plugin_settings_input_field['inputBgColor'];
		$inputTextColor 	= $lpc_plugin_settings_input_field['inputTextColor'];
		$rememberMeColor 	= $lpc_plugin_settings_input_field['rememberMeColor'];
		$enableLinkShadow 	= $lpc_plugin_settings_input_field['enableLinkShadow'];
		$linkShadowColor 	= $lpc_plugin_settings_input_field['linkShadowColor'];
		$inputLabelFontSize = $lpc_plugin_settings_input_field['inputLabelFontSize'];
		$inputTextFontSize 	= $lpc_plugin_settings_input_field['inputTextFontSize'];
		$rememberMeFontSize = $lpc_plugin_settings_input_field['rememberMeFontSize'];
		$inputBorderRadius 	= $lpc_plugin_settings_input_field['inputBorderRadius'];
		$userLabel 			= $lpc_plugin_settings_input_field['userLabel'];
		$userPlaceholder 	= $lpc_plugin_settings_input_field['userPlaceholder'];
		$pwdLabel 			= $lpc_plugin_settings_input_field['pwdLabel'];
		$pwdPlaceholder 	= $lpc_plugin_settings_input_field['pwdPlaceholder'];
		$enableInputIcon 	= $lpc_plugin_settings_input_field['enableInputIcon'];
		$userInputIcon 		= $lpc_plugin_settings_input_field['userInputIcon'];
		$pwdInputIcon 		= $lpc_plugin_settings_input_field['pwdInputIcon'];
	}
	
	// Get value of Button page
	if( isset($lpc_plugin_settings_button)){
		$btnColor 			= $lpc_plugin_settings_button['btnColor'];
		$btnBorderColor 	= $lpc_plugin_settings_button['btnBorderColor'];
		$btnColorH 			= $lpc_plugin_settings_button['btnColorH'];
		$btnBorderColorH 	= $lpc_plugin_settings_button['btnBorderColorH'];
		$btnTextColor 		= $lpc_plugin_settings_button['btnTextColor'];
		$btnTxtShadowColor  = $lpc_plugin_settings_button['btnTxtShadowColor'];
		$btnWidth 			= $lpc_plugin_settings_button['btnWidth'];
		$btnTopPadding 		= $lpc_plugin_settings_button['btnTopPadding'];
		$btnBottomPadding 	= $lpc_plugin_settings_button['btnBottomPadding'];
		$btnRadious 		= $lpc_plugin_settings_button['btnRadious'];
		$btnTextSize 		= $lpc_plugin_settings_button['btnTextSize'];
	}
	
	// Get value of Footer page
	if( isset($lpc_plugin_settings_footer)){
		$enableLostPwdTxt 	= $lpc_plugin_settings_footer['enableLostPwdTxt'];
		$lostPwdTxt 		= $lpc_plugin_settings_footer['lostPwdTxt'];
		$lostPwdTxtColor 	= $lpc_plugin_settings_footer['lostPwdTxtColor'];
		$lostPwdTxtHColor 	= $lpc_plugin_settings_footer['lostPwdTxtHColor'];
		$lostPwdFontSize 	= $lpc_plugin_settings_footer['lostPwdFontSize'];
		$lostPwdTxtBg 		= $lpc_plugin_settings_footer['lostPwdTxtBg'];
		$lostPwdTxtBgColor 	= $lpc_plugin_settings_footer['lostPwdTxtBgColor'];
		$enableBackToText 	= $lpc_plugin_settings_footer['enableBackToText'];
		$backToTextColor 	= $lpc_plugin_settings_footer['backToTextColor'];
		$backToTextHColor 	= $lpc_plugin_settings_footer['backToTextHColor'];
		$backToFontSize 	= $lpc_plugin_settings_footer['backToFontSize'];
		$backToTextBg 		= $lpc_plugin_settings_footer['backToTextBg'];
		$backToTextBgColor 	= $lpc_plugin_settings_footer['backToTextBgColor'];
		$enableCopyright 	= $lpc_plugin_settings_footer['enableCopyright'];
		$copyrightBgColor 	= $lpc_plugin_settings_footer['copyrightBgColor'];
		$copyrightTxtColor 	= $lpc_plugin_settings_footer['copyrightTxtColor'];
		$copyrightNote 		= $lpc_plugin_settings_footer['copyrightNote'];
		$showLove 			= $lpc_plugin_settings_footer['showLove'];
		$lovePosition 		= $lpc_plugin_settings_footer['lovePosition'];
	}
	
	// Get value of Welcome Messages page
	if( isset($lpc_plugin_settings_welcome_messages)){
		$lostpwdWcMsg 		= $lpc_plugin_settings_welcome_messages['lostpwdWcMsg'];
		$loginPageWcMsg 	= $lpc_plugin_settings_welcome_messages['loginPageWcMsg'];
		$registerWcMsg 		= $lpc_plugin_settings_welcome_messages['registerWcMsg'];
		$logoutMessage 		= $lpc_plugin_settings_welcome_messages['logoutMessage'];
		$wcMsgBgColor 		= $lpc_plugin_settings_welcome_messages['wcMsgBgColor'];
		$wcMsgBorder 		= $lpc_plugin_settings_welcome_messages['wcMsgBorder'];
	}
	
	// Get value of Google Captcha page
	if( isset($lpc_plugin_settings_google_captcha)){
		$enableGCaptcha 	= $lpc_plugin_settings_google_captcha['enableGCaptcha'];
		$gSiteKey 			= $lpc_plugin_settings_google_captcha['gSiteKey'];
		$gSecretKey 		= $lpc_plugin_settings_google_captcha['gSecretKey'];
		$gCaptchaTheme 		= $lpc_plugin_settings_google_captcha['gCaptchaTheme'];
	}