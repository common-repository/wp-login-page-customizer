<?php
/**
 * Get option and check the key exists in it.
 *
 * @since 1.0.0
 * @version 1.0.1
 * * * * * * * * * * * * * * * */

 /**
  * Add !important with property's value. To avoid overriding from theme.
  * @return string
  * @since 1.0.0
  */
 function lpc_important() {
 
 	$important = '';
 	if ( ! is_customize_preview() ) { // Avoid !important in customizer previewer.
 		$important = ' !important';
 	}
 	return $important;
 }
 
 function lpc_box_shadow( $shadow, $opacity, $default_shadow = 0, $inset = false ){

	$lpc_shadow = ! empty( $shadow ) ? $shadow : $default_shadow;
	$lpc_opacity = ! empty( $opacity ) ? $opacity : 80;
	$inset = $inset ? ' inset' : '';
	$opacity_convertion = $lpc_opacity / 100;
	$lpc_rgba = 'rgba( 0,0,0,' . $opacity_convertion .' )';

	return '0 0 ' . $lpc_shadow . 'px ' . $lpc_rgba . $inset . ';';
 }

 function lpc_opacity_convertion( $opacity ){

	$lpc_opacity = ! empty( $opacity ) ? $opacity : 80;
	$opacity_convertion = $lpc_opacity / 100;

	return $opacity_convertion;
 }

/* Load Hex to Rgb Color Code Function */
function lpc_hex2rgb( $colour, $opacity ) {
	if ( $colour[0] == '#' ) {
		$colour = substr( $colour, 1 );
	}
	if ( strlen( $colour ) == 6 ) {
		list( $r, $g, $b ) = array( $colour[0] . $colour[1], $colour[2] . $colour[3], $colour[4] . $colour[5] );
	} elseif ( strlen( $colour ) == 3 ) {
		list( $r, $g, $b ) = array( $colour[0] . $colour[0], $colour[1] . $colour[1], $colour[2] . $colour[2] );
	} else {
		return false;
	}
	$r = hexdec( $r );
	$g = hexdec( $g );
	$b = hexdec( $b );

	$hex2rgba = array($r, $g, $b, $opacity);
	return $hex2rgba;
}

 /**
 * @var lpc_array get_option
 * @since 1.0.0
 */
 if ( $this->lpc_dashboard ) {
	$customCssEditor	= $this->lpc_dashboard['customCssEditor'];
 }
 if ( $this->lpc_background ) {
	$tBgType 			= $this->lpc_background['tBgType'];
	$tBgColor 			= $this->lpc_background['tBgColor'];
	$tBgImage 			= esc_url( $this->lpc_background['tBgImage'] );
	$bgRepeat 			= $this->lpc_background['bgRepeat'];
	$bgPosition 		= $this->lpc_background['bgPosition'];
	$bgImageSize 		= $this->lpc_background['bgImageSize'];
	$bgImgOverlay 		= $this->lpc_background['bgImgOverlay'];
	$bgOverlayColor 	= $this->lpc_background['bgOverlayColor'];
	$bgOverlayOpacity 	= $this->lpc_background['bgOverlayOpacity'];
	
	$bgOverlayOpacity 	= lpc_opacity_convertion( $bgOverlayOpacity );
 }
 if ( $this->lpc_login_box ) { 
	$loginPosition 		= $this->lpc_login_box['loginPosition'];
	$loginFloat 		= $this->lpc_login_box['loginFloat'];
	$loginLeft 			= $this->lpc_login_box['loginLeft'];
	$loginTop 			= $this->lpc_login_box['loginTop'];
	$loginBg 			= $this->lpc_login_box['loginBg'];
	$loginBgColor 		= $this->lpc_login_box['loginBgColor'];
	$loginBgImage 		= esc_url( $this->lpc_login_box['loginBgImage'] );
	$enableLoginTrans 	= $this->lpc_login_box['enableLoginTrans'];
	$loginWidth 		= $this->lpc_login_box['loginWidth']; 
	$loginHeight 		= $this->lpc_login_box['loginHeight'];
	$loginPaddingLR		= $this->lpc_login_box['loginPaddingLR'];
	$loginRadius 		= $this->lpc_login_box['loginRadius'];
	$loginBorderSize 	= $this->lpc_login_box['loginBorderSize'];
	$loginBorderColor 	= $this->lpc_login_box['loginBorderColor'];
	$loginBorderStyle 	= $this->lpc_login_box['loginBorderStyle'];
	$enableLoginShadow 	= $this->lpc_login_box['enableLoginShadow'];
	$loginShadowColor 	= $this->lpc_login_box['loginShadowColor'];
 }
  if ( $this->lpc_logo ) {
	$logoType 			= $this->lpc_logo['logoType'];	
	$logoImageUrl 		= esc_url( $this->lpc_logo['logoImageUrl'] );
	$logoLinkURL 		= esc_url( $this->lpc_logo['logoLinkURL'] );
	$logoWidth 			= $this->lpc_logo['logoWidth'];
	$logoHeight 		= $this->lpc_logo['logoHeight'];
	$logoSpaceTop 		= $this->lpc_logo['logoSpaceTop'];
	$logoSpaceBottom 	= $this->lpc_logo['logoSpaceBottom'];
	$logoText 			= $this->lpc_logo['logoText'];
	$logoTextColor 		= $this->lpc_logo['logoTextColor'];
	$logoSize 			= $this->lpc_logo['logoSize'];
 }
  if ( $this->lpc_input_field ) {
	$inputLabelColor	= $this->lpc_input_field['inputLabelColor'];
	$inputBgColor		= $this->lpc_input_field['inputBgColor'];
	$inputTextColor		= $this->lpc_input_field['inputTextColor'];
	$rememberMeColor	= $this->lpc_input_field['rememberMeColor'];
	$enableLinkShadow	= $this->lpc_input_field['enableLinkShadow'];
	$linkShadowColor	= $this->lpc_input_field['linkShadowColor'];
	$inputLabelFontSize	= $this->lpc_input_field['inputLabelFontSize'];
	$inputTextFontSize	= $this->lpc_input_field['inputTextFontSize'];
	$rememberMeFontSize	= $this->lpc_input_field['rememberMeFontSize'];
	$inputBorderRadius	= $this->lpc_input_field['inputBorderRadius'];
	$userPlaceholder	= $this->lpc_input_field['userPlaceholder']; 
	$pwdPlaceholder		= $this->lpc_input_field['pwdPlaceholder']; 
	$enableInputIcon 	= $this->lpc_input_field['enableInputIcon'];  
	$userInputIcon 		= $this->lpc_input_field['userInputIcon'];	
	$pwdInputIcon 		= $this->lpc_input_field['pwdInputIcon'];
 }
 if ( $this->lpc_button ) {
	$btnColor 			= $this->lpc_button['btnColor'];
	$btnBorderColor 	= $this->lpc_button['btnBorderColor'];
	$btnColorH 			= $this->lpc_button['btnColorH'];
	$btnBorderColorH 	= $this->lpc_button['btnBorderColorH'];
	$btnTextColor 		= $this->lpc_button['btnTextColor'];
	$btnTxtShadowColor 	= $this->lpc_button['btnTxtShadowColor'];
	$btnWidth 			= $this->lpc_button['btnWidth'];
	$btnTopPadding 		= $this->lpc_button['btnTopPadding'];
	$btnBottomPadding 	= $this->lpc_button['btnBottomPadding'];
	$btnRadious 		= $this->lpc_button['btnRadious'];
	$btnTextSize 		= $this->lpc_button['btnTextSize'];
 }
 if ( $this->lpc_footer ) {
	$enableLostPwdTxt 	= $this->lpc_footer['enableLostPwdTxt'];
	$lostPwdTxtColor 	= $this->lpc_footer['lostPwdTxtColor'];
	$lostPwdTxtHColor 	= $this->lpc_footer['lostPwdTxtHColor'];
	$lostPwdFontSize 	= $this->lpc_footer['lostPwdFontSize'];
	$lostPwdTxtBg 		= $this->lpc_footer['lostPwdTxtBg'];
	$lostPwdTxtBgColor 	= $this->lpc_footer['lostPwdTxtBgColor'];
	$enableBackToText 	= $this->lpc_footer['enableBackToText'];
	$backToTextColor 	= $this->lpc_footer['backToTextColor'];
	$backToTextHColor 	= $this->lpc_footer['backToTextHColor'];
	$backToFontSize 	= $this->lpc_footer['backToFontSize'];
	$backToTextBg 		= $this->lpc_footer['backToTextBg'];
	$backToTextBgColor 	= $this->lpc_footer['backToTextBgColor'];
	$copyrightBgColor 	= $this->lpc_footer['copyrightBgColor'];
	$copyrightTxtColor 	= $this->lpc_footer['copyrightTxtColor'];
 } 
 if ( $this->lpc_welcome_messages ) {
	$wcMsgBgColor 	= $this->lpc_welcome_messages['wcMsgBgColor'];
	$wcMsgBorder 	= $this->lpc_welcome_messages['wcMsgBorder'];
 }
 
 $bgOverlay = lpc_hex2rgb( $bgOverlayColor, $bgOverlayOpacity );
 $bgOverlay = implode(", ", $bgOverlay);
?>
<style type="text/css">

body.login { 	
 	<?php if ( ! empty( $tBgImage ) && $tBgType == "bgimage" ) : ?>
		<?php if ( $bgImgOverlay == "true" ) : ?>
		background:linear-gradient(0deg,rgba(<?php echo $bgOverlay; ?>),rgba(<?php echo $bgOverlay; ?>)),url(<?php echo $tBgImage; ?>);
		<?php else : ?>
		background-image:url(<?php echo $tBgImage; ?>);
		<?php endif; ?>
   <?php else : ?>
 	background-image: url();
 	<?php endif; ?>
 
 	<?php if ( ! empty( $tBgColor ) ) : ?>
 	background-color: <?php echo $tBgColor; ?>;
 	<?php endif; ?>
 	<?php if ( ! empty( $bgRepeat ) ) : ?>
 	background-repeat: <?php echo $bgRepeat; ?>;
 	<?php endif; ?>
 	<?php if ( ! empty( $bgPosition ) ) : ?>
 	background-position: <?php echo $bgPosition; ?>;
 	<?php endif; ?>
 	<?php if ( ! empty( $bgImageSize ) ) : ?>
 	background-size: <?php echo $bgImageSize; ?>;
 	<?php endif; ?>
   position: relative;
}
 
body.login:after{
	<?php if ( ! empty( $tBgImage ) && $tBgType == "bgimage" ) : ?>
 	background-image: url(<?php echo $tBgImage; ?>);
   <?php else : ?>
 	background-image: url();
 	<?php endif; ?>
 	<?php if ( ! empty( $tBgColor ) ) : ?>
 	background-color: <?php echo $tBgColor; ?>;
 	<?php endif; ?>
 	<?php if ( ! empty( $bgRepeat ) ) : ?>
 	background-repeat: <?php echo $bgRepeat; ?>;
 	<?php endif; ?>
 	<?php if ( ! empty( $bgPosition ) ) : ?>
 	background-position: <?php echo $bgPosition; ?>;
 	<?php endif; ?>
 	<?php if ( ! empty( $bgImageSize ) ) : ?>
 	background-size: <?php echo $bgImageSize; ?>;
 	<?php endif; ?>
   position: relative;
}
 
#login{
	<?php if ( ! empty( $loginWidth ) ) : ?>
	max-width: <?php echo $loginWidth . 'px'; ?>;
	<?php endif; ?>
	<?php if ( isset( $loginRadius ) ) : ?>
	border-radius: <?php echo $loginRadius . 'px'; ?>;
	<?php endif; ?>
	<?php if ( ! empty( $loginBgImage ) && $loginBg == "image" ) : ?>
	background-image: url(<?php echo $loginBgImage; ?>);
	<?php elseif ( isset( $loginBg ) && empty( $loginBgImage ) ) : ?>
	background-image: url();
	<?php endif; ?> 
	<?php if ( ! empty( $enableLoginTrans ) && "true" == $enableLoginTrans ) : ?>
	background: transparent;
	<?php endif; ?>
	<?php if ( ! empty( $loginBgColor ) && $loginBg == "color" && 'true' != $enableLoginTrans ) : ?>
 	background-color: <?php echo $loginBgColor; ?>;
 	<?php endif; ?>
	<?php if ( ! empty( $bgRepeat ) ) : ?>
	background-repeat: <?php echo $bgRepeat; ?>;
	<?php endif; ?>
	<?php if ( ! empty( $bgPosition ) ) : ?>
	background-position: <?php echo $bgPosition; ?>;
	<?php endif; ?>
	<?php if ( ! empty( $bgImageSize ) ) : ?>
	background-size: <?php echo $bgImageSize; ?>;
	<?php endif; ?>
	position: relative;
}
#login{
	<?php if ( ! empty( $loginPosition ) && "float" == $loginPosition ) : ?>
		float:<?php echo $loginFloat . lpc_important(); ?>;
		<?php if( "left" == $loginFloat ) : ?>
		margin-left: <?php echo '25px'. lpc_important(); ?>;
		<?php elseif( "right" == $loginFloat ) : ?>
		margin-right: <?php echo '20px'. lpc_important(); ?>;
		<?php endif; ?>
	<?php elseif ( ! empty( $loginPosition ) && "customFloat" == $loginPosition ) : ?>
		<?php if ( ! empty( $loginLeft ) ) : ?>
		margin-left:<?php echo $loginLeft . 'px'. lpc_important(); ?>;
		<?php endif; ?>
	<?php endif; ?>
	
	<?php if ( isset( $loginTop ) ) : ?>
		margin-top: <?php echo $loginTop . 'px'. lpc_important(); ?>;
	<?php endif; ?>
	
	<?php if ( isset( $loginPaddingLR ) ) : ?>
		padding: 26px <?php echo $loginPaddingLR . 'px'; ?> 6px;
	<?php endif; ?>
	
	<?php if ( isset( $loginBorderSize ) && ! empty( $loginBorderColor ) && ! empty( $loginBorderStyle )) : ?>
	    border: <?php echo $loginBorderSize . 'px '.$loginBorderStyle.' '.$loginBorderColor; ?>;
	<?php endif; ?>	
	<?php if ( "true" == $enableLoginShadow && ! empty( $loginShadowColor ) ) : ?>
	    -moz-box-shadow:    0 0 15px <?php echo $loginShadowColor ?>;
		-webkit-box-shadow: 0 0 15px <?php echo $loginShadowColor ?>;
		box-shadow: 0 0 15px <?php echo $loginShadowColor ?>;
	<?php else : ?>
		box-shadow: none;
	<?php endif; ?>		
}

/* for lost password and registration form */
.login form{
	background: transparent;
}

#loginform {
	background: transparent;
	min-height: <?php echo $loginHeight . 'px'; ?>;
}

.login h1{
 	<?php if ( ! empty( $logoType ) && "none" == $logoType ) : ?>
 	display: none <?php echo lpc_important(); ?>;
 	<?php endif; ?>
	
	<?php if ( isset( $logoSpaceTop ) && "none" != $logoType ) : ?>
 	padding-top: <?php echo $logoSpaceTop . 'px'; ?>;
 	<?php endif; ?>
	
	<?php if ( isset( $logoSpaceBottom ) && "none" != $logoType ) : ?>
 	padding-bottom: <?php echo $logoSpaceBottom . 'px'; ?>;
 	<?php endif; ?>
}
.interim-login.login h1 a{
	<?php if ( isset( $logoWidth ) ) : ?>
	width: <?php echo $logoWidth . 'px'; ?>;
	<?php else : ?>
	width: 84px;
	<?php endif; ?>
}
 
.login h1 a {
 	<?php if ( ! empty( $logoImageUrl ) ) : ?>
 	background-image: url( <?php echo $logoImageUrl; ?> ) <?php echo lpc_important(); ?>;
 	<?php endif; ?>
 	<?php if ( isset( $logoWidth ) ) : ?>
 	width: <?php echo $logoWidth . 'px' . lpc_important(); ?>;
 	<?php endif; ?>
 	<?php if ( isset( $logoHeight ) ) : ?>
 	height: <?php echo $logoHeight . 'px' . lpc_important(); ?>;
 	<?php endif; ?>
 	<?php if ( isset( $logoWidth ) || isset( $logoHeight ) ) : ?>
 	background-size: <?php echo $logoWidth . 'px' .' '. $logoHeight . 'px'; ?>;
 	<?php else: ?>
 		background-size: cover;
 	<?php endif; ?>
    margin: 0 auto; 
}

.login h1 a:focus {
    box-shadow: none;
}
 
.login label {
 	<?php if ( ! empty( $inputLabelColor ) ) : ?>
 	color: <?php echo $inputLabelColor; ?>;
 	<?php endif; ?>
	<?php if ( isset( $inputLabelFontSize ) ) : ?>
 	font-size: <?php echo $inputLabelFontSize . 'px'; ?>;
 	<?php endif; ?>
}

/* for registration form */
#login p#reg_passmail {
    <?php if ( ! empty( $inputLabelColor ) ) : ?>
 	color: <?php echo $inputLabelColor; ?>;
 	<?php endif; ?>
}

.login form .input, .login input[type="text"] {
	height: 40px;
 	<?php if ( ! empty( $inputBgColor ) ) : ?>
 	background: <?php echo $inputBgColor; ?>;
 	<?php endif; ?>
 	<?php if ( ! empty( $inputTextColor ) ) : ?>
 	color: <?php echo $inputTextColor; ?>;
 	<?php endif; ?>
	<?php if ( isset( $inputTextFontSize ) ) : ?>
 	font-size: <?php echo $inputTextFontSize . 'px'; ?>;
 	<?php endif; ?>
	<?php if ( isset( $inputBorderRadius ) ) : ?>
 	border-radius: <?php echo $inputBorderRadius . 'px'; ?>;
 	<?php endif; ?>
}

input:-webkit-autofill,
input:-webkit-autofill:hover, 
input:-webkit-autofill:focus,
input:-internal-autofill-previewed{
	transition: background-color 5000s ease-in-out 0s;
	background-color: transparent !important;
}

.login label[for="rememberme"] {
 	<?php if ( ! empty( $rememberMeColor ) ) : ?>
 	color: <?php echo $rememberMeColor; ?>;
 	<?php endif; ?>
}
.login form .forgetmenot label{
	<?php if ( isset( $rememberMeFontSize ) ) : ?>
 	font-size: <?php echo $rememberMeFontSize . 'px'; ?>;
 	<?php endif; ?>
}
 
.wp-core-ui #login  .button-primary{
 	<?php if ( ! empty( $btnColor ) ) : ?>
 	background: <?php echo $btnColor; ?>;
 	<?php endif; ?>
 	<?php if ( ! empty( $btnBorderColor ) ) : ?>
 	border-color: <?php echo $btnBorderColor; ?>;
 	<?php endif; ?>
 	<?php if ( ! empty( $lpc_btn_shadow ) ) : ?>
 	box-shadow: 0px 1px 0px <?php echo $lpc_btn_shadow; ?> inset, 0px 1px 0px rgba(0, 0, 0, 0.15);
 	<?php endif; ?>
 	<?php if ( ! empty( $btnTextColor ) ) : ?>
 	color: <?php echo $btnTextColor; ?>;
 	<?php endif; ?>
	<?php if ( ! empty( $btnTxtShadowColor ) ) : ?>
 	text-shadow: 0 -1px 1px <?php echo $btnTxtShadowColor; ?>,
				1px 0 1px <?php echo $btnTxtShadowColor; ?>,
				0 1px 1px <?php echo $btnTxtShadowColor; ?>,
				-1px 0 1px <?php echo $btnTxtShadowColor; ?>;
 	<?php endif; ?>
	
}
 
.wp-core-ui #login  .button-primary:hover{
 	<?php if ( ! empty( $btnColorH ) ) : ?>
 	background: <?php echo $btnColorH; ?>;
 	<?php endif; ?>
 	<?php if ( ! empty( $btnBorderColorH ) ) : ?>
 	border-color: <?php echo $btnBorderColorH; ?>;
 	<?php endif; ?>
}
 
.wp-core-ui #login .button-primary{
	box-shadow: none;
 	height: auto;
 	line-height: 20px;
 	padding: 13px;
 	<?php if ( isset( $btnTopPadding ) && "" != $btnTopPadding ) : ?>
 	padding-top: <?php echo $btnTopPadding . 'px'; ?>;
 	<?php endif; ?>
 	<?php if ( isset( $btnBottomPadding ) && "" != $btnBottomPadding ) : ?>
 	padding-bottom: <?php echo $btnBottomPadding . 'px'; ?>;
 	<?php endif; ?>
}
 
.login input[type="submit"]{
 	<?php if ( isset( $btnTextSize ) ) : ?>
 	font-size: <?php echo $btnTextSize . 'px'; ?>;
 	<?php endif; ?>
 	<?php if ( isset( $btnWidth ) ) : ?>
 	width: <?php echo $btnWidth . '%;'; ?>;
 	<?php endif; ?>
 	<?php if ( isset( $btnRadious ) && "" != $btnRadious ) : ?>
 	border-radius: <?php echo $btnRadious . 'px'; ?>;
 	<?php endif; ?>
}

/* for lost password form */
#lostpasswordform input#wp-submit{ 
    font-size: 18px;
    width: 100%;
}

.login .custom-message {
	<?php if ( ! empty( $wcMsgBorder ) ) : ?>
	border: <?php echo $wcMsgBorder; ?>;
	<?php else : ?>
	border-left: 4px solid #00a0d2;
	<?php endif; ?>
	<?php if ( ! empty( $wcMsgBgColor ) ) : ?>
	background-color: <?php echo $wcMsgBgColor; ?>;
	<?php else : ?>
	background-color: #fff;
	<?php endif; ?>
	padding: 12px;
	margin-left: 0;
	margin-bottom: 20px;
	-webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
	box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
 
.login #nav {
 	<?php if ( isset( $enableLostPwdTxt ) && 'true' != $enableLostPwdTxt) : ?>
 		display: none;
 	<?php endif; ?>
	<?php if ( 'true' == $lostPwdTxtBg && ! empty( $lostPwdTxtBgColor ) ) : ?>
	background-color: <?php echo $lostPwdTxtBgColor; ?>;
	<?php endif; ?>
}
 
.login #nav a, .login #nav{
 	<?php if ( ! empty( $lostPwdTxtColor ) ) : ?>
 	color: <?php echo $lostPwdTxtColor; ?>;
 	<?php endif; ?>
 	<?php if ( isset( $lostPwdFontSize ) ) : ?>
 	font-size: <?php echo $lostPwdFontSize . 'px'; ?>;
 	<?php endif; ?>
 
}
 
.login #nav a:hover{
	<?php if ( ! empty( $lostPwdTxtHColor ) ) : ?>
	color: <?php echo $lostPwdTxtHColor; ?>;
	<?php endif; ?>
}
 
.login #backtoblog{
	<?php if ( 'true' == $backToTextBg && ! empty( $backToTextBgColor ) ) : ?>
	background-color: <?php echo $backToTextBgColor; ?>;
	<?php endif; ?>
}
 
.login #backtoblog a{
	<?php if ( isset( $enableBackToText ) && 'true' != $enableBackToText ) : ?>
	display: none;
 	<?php endif; ?>
 	<?php if ( ! empty( $backToTextColor ) ) : ?>
 	color: <?php echo $backToTextColor; ?>;
 	<?php endif; ?>
 	<?php if ( isset( $backToFontSize ) ) : ?>
 	font-size: <?php echo $backToFontSize . 'px'; ?>;
 	<?php endif; ?>
}
 
.login #backtoblog a:hover{
 	<?php if ( ! empty( $backToTextHColor ) ) : ?>
 	color: <?php echo $backToTextHColor; ?>;
 	<?php endif; ?>
}

<?php if ( 'true' == $enableLinkShadow ) : ?>
body.login #nav a, body.login #backtoblog a{
	<?php if ( ! empty( $linkShadowColor ) ) : ?>
 	text-shadow: 0 1px 1px #ccc, 
               0 1px 2px <?php echo $linkShadowColor; ?>;
 	<?php endif; ?>
}
<?php endif; ?>

.copyRight{
	text-align: center;
    padding: 12px;
	<?php if ( ! empty( $copyrightBgColor ) ) : ?>
 	 background-color: <?php echo $copyrightBgColor; ?>;
    <?php endif; ?>
	<?php if ( ! empty( $copyrightTxtColor ) ) : ?>
 	color: <?php echo $copyrightTxtColor; ?>;
    <?php endif; ?>
}
	
.lpc-show-love{ 
    float: right;
    font-style: italic;
    padding-right: 20px;
    padding-bottom: 10px;
    position: absolute;
    bottom: 3px;
    right: 0;
    z-index: 10;
}
.lpc-show-love a{
   text-decoration: none;
}
.love-postion{
 	left: 0;
 	padding-left: 20px;
}

.logo-text{
	<?php if ( isset( $logoSize ) ) : ?>
	font-size: <?php echo $logoSize . 'px'; ?>;
	<?php endif; ?>
	<?php if ( ! empty( $lTextColor ) ) : ?>
	color: <?php echo $lTextColor; ?>;
	<?php endif; ?>
}

label[for=user_login] > br, label[for=user_pass] > br
{
    display: none;
}

<?php if (isset( $enableInputIcon ) && 'true' == $enableInputIcon ) :?>
	.lpc-icon i{
		display: inline-block;
		position: absolute;
		margin: 15px 12px;
		vertical-align: middle;
		color: black;
	}
	.login form .input, .login input[type="text"] {
		padding-left: 35px;
	}
<?php endif; ?>

<?php echo $customCssEditor; ?>
</style>
	
<script>
	jQuery(document).ready(function(){
		<?php if ( isset( $logoType ) && 'text' == $logoType ) : ?>
			jQuery( "#login h1 a" ).replaceWith( '<span class="logo-text"><?php echo $logoText; ?></span>' );
		<?php endif; ?>
		
		jQuery('#user_login').attr('placeholder', '<?php echo $userPlaceholder; ?>');
		jQuery('#user_email').attr('placeholder', '<?php echo $userPlaceholder; ?>');
		jQuery('#user_pass').attr('placeholder', '<?php echo $pwdPlaceholder; ?>');
		
		<?php if ( isset( $enableInputIcon ) && 'true' == $enableInputIcon ) :?>
			jQuery('#user_login').before("<div class='lpc-icon'><i class='<?php echo $userInputIcon; ?>'></i></div>");
			jQuery('#user_pass').before("<div class='lpc-icon'><i class='<?php echo $pwdInputIcon; ?>'></i></div>");
		<?php endif; ?>
	});
</script>