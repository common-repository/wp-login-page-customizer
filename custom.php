<?php

class class_lpc_login_entities {

  /**
  * Variable that Check for Login Page Key.
  *
  * @var string
  * @since 1.0.0
  */
  public $login_key;
  public $lpc_dashboard = array();
  public $lpc_background = array();
  public $lpc_login_box = array();
  public $lpc_logo = array();
  public $lpc_input_field = array();
  public $lpc_button = array(); 
  public $lpc_footer = array();
  public $lpc_welcome_messages = array();
  public $lpc_google_captcha = array();

  /**
  * Class constructor
  */
  public function __construct() {
	$this->includes();
    $this->_hooks();
  }

  public function includes() {
	require( WEBHUNT_LPC_DIR_PATH . 'functions/get-save-data.php');
	$this->lpc_dashboard 		= $lpc_plugin_settings_dashboard;
	$this->lpc_background 		= $lpc_plugin_settings_background;
	$this->lpc_login_box 		= $lpc_plugin_settings_login;
	$this->lpc_logo 			= $lpc_plugin_settings_logo;
	$this->lpc_input_field 		= $lpc_plugin_settings_input_field;
	$this->lpc_button 			= $lpc_plugin_settings_button;
	$this->lpc_footer 			= $lpc_plugin_settings_footer;
	$this->lpc_welcome_messages = $lpc_plugin_settings_welcome_messages;
	$this->lpc_google_captcha 	= $lpc_plugin_settings_google_captcha;
  }

  /**
  * Hook into actions and filters
  *
  * @since 1.0.0
  * @version 1.0.4
  */
  private function _hooks() {
	// Add the action to load the plugin 
	add_action( 'login_enqueue_scripts',array( $this, 'lpc_enqueue_scripts'));
    add_filter( 'login_headerurl',		array( $this, 'lpc_login_page_logo_url' ) );
    add_filter( 'login_headertext',		array( $this, 'lpc_login_page_logo_title' ) );
    add_filter( 'login_message',		array( $this, 'lpc_change_welcome_message' ) );
    add_action( 'login_footer',			array( $this, 'lpc_login_page_custom_footer' ) );
	add_action( 'login_head',			array( $this, 'lpc_login_page_custom_head' ) );
	add_filter( 'login_redirect', 		array( $this, 'lpc_after_login_redirect' ), 10, 3  );
	add_action( 'init', 				array( $this, 'lpc_login_page_google_captcha' ) );
  }
  
  public function lpc_enqueue_scripts(){
	wp_enqueue_script('jquery');
	wp_enqueue_style('lpc-font-awesome', WEBHUNT_LPC_PLUGIN_URL.'assets/css/font-awesome.css');
  }
  
  /**
  * Add Google Captcha
  *
  * @since	1.0.0
  * @version 1.0.0
  * * * * * * * * * * * */
  public function lpc_login_page_google_captcha() {
	if(isset($this->lpc_google_captcha['enableGCaptcha'])){
		if($this->lpc_google_captcha['enableGCaptcha'] == "true" && $this->lpc_google_captcha['gSiteKey'] != "" && $this->lpc_google_captcha['gSecretKey'] != ""){
			// Gcaptcha code
			require_once('class-gcaptcha.php');
		}
	}
  }

  /**
  * Manage the Login Footer Links
  *
  * @since	1.0.0
  * @version 1.0.0
  * * * * * * * * * * * * * * * */
  public function lpc_login_page_custom_footer() {
    /**
     * Add brand postion class.
     * @since 1.0.0
     */
	$position = ''; // Empty variable for storing position class.
	if ( $this->lpc_footer ) {
		if ( isset( $this->lpc_footer['lovePosition'] ) && $this->lpc_footer['lovePosition'] == 'left' ) {
			$position = ' love-postion';
		} 
	}
	
	if ( empty( $this->lpc_footer ) || ( isset( $this->lpc_footer['showLove'] ) &&  $this->lpc_footer['showLove'] != 'false' ) ) {
      echo '<div class="lpc-show-love' . $position . '">' . __( 'Powered by:', 'WEBHUNT_LPC' ) . ' <a href="https://webhuntinfotech.com" target="_blank">WebHunt Infotech</a></div>';
    }

    echo '<div class="footer-wrapper">';
    echo '<div class="footer-cont">';

	if ( $this->lpc_footer ) {

      if ( array_key_exists( 'enableCopyright', $this->lpc_footer ) && 'true' == $this->lpc_footer['enableCopyright'] ) {
        if ( array_key_exists( 'copyrightNote', $this->lpc_footer ) && ! empty( $this->lpc_footer['copyrightNote'] ) ) {
          echo '<div class="copyRight">'. esc_html($this->lpc_footer['copyrightNote']) .'</div>';
        } else {
          echo '<div class="copyRight">'. sprintf( __('© %1$s %2$s, All Rights Reserved.', 'WEBHUNT_LPC'), date("Y"), get_bloginfo('name') ) .'</div>';
        }
      }

    }
    echo '</div></div>';
  }

  /**
  * Manage the Login Head
  *
  * @since	1.0.0
  * @version 1.0.0
  * * * * * * * * * * * */
  public function lpc_login_page_custom_head() {

    //$lostpassword_url 	= isset( $lpc_setting['lostpassword_url'] ) ? $lpc_setting['lostpassword_url'] : 'off';

	add_filter( 'gettext', array( $this, 'lpc_change_lostpassword_message' ), 20, 3 );
    add_filter( 'gettext', array( $this, 'lpc_change_username_label' ), 20, 3 );
    add_filter( 'gettext', array( $this, 'lpc_change_password_label' ), 20, 3 );
    // Include CSS File in heared.
    include( WEBHUNT_LPC_DIR_PATH . 'assets/css/style-presets.php' );
    include( WEBHUNT_LPC_DIR_PATH . 'assets/css/style-login.php' );

    //if ( 'on' == $lostpassword_url ) {
      //remove_filter( 'lostpassword_url', 'wc_lostpassword_url', 10 );
    //}
  }
  /**
  * Set Redirect Path of Logo
  *
  * @since	1.0.0
  * @return mixed
  * * * * * * * * * * * * * */
  public function lpc_login_page_logo_url() {
    if ( $this->lpc_logo && array_key_exists( 'logoLinkURL', $this->lpc_logo ) && ! empty( $this->lpc_logo['logoLinkURL'] ) ) {
      return esc_url($this->lpc_logo["logoLinkURL"]);
    } else {
      return esc_url(home_url());
    }
  }


  /**
  * Set hover Title of Logo
  *
  * @since	1.0.0
  * @return mixed
  * * * * * * * * * * * * */
  public function lpc_login_page_logo_title() {

    if ( $this->lpc_logo && array_key_exists( 'logoTitle', $this->lpc_logo ) && ! empty( $this->lpc_logo['logoTitle'] ) ) {
      return esc_html($this->lpc_logo["logoTitle"]);
    } else {
      return esc_url(home_url());
    }
  }

  /**
  * Change Lost Password Text from Form
  *
  * @param	$text
  * @since	1.0.0
  * @version 1.0.0
  * @return mixed
  * * * * * * * * * * * * * * * * * * */
  public function lpc_change_lostpassword_message( $translated_text, $text, $domain ) {

		if ( is_array( $this->lpc_footer ) && array_key_exists( 'lostPwdTxt', $this->lpc_footer ) && $text == 'Lost your password?'  && 'default' == $domain && trim( $this->lpc_footer['lostPwdTxt'] ) ) {

			return trim( esc_html( $this->lpc_footer['lostPwdTxt'] ) );
		}

    return $translated_text;
  }
  
  /**
   * Change Label of the Username from login Form.
   * @param  [type] $translated_text [description]
   * @param  [type] $text            [description]
   * @param  [type] $domain          [description]
   * @return string
   * @since 1.0.0
   * @version 1.0.0
   */
  public function lpc_change_username_label( $translated_text, $text, $domain ){

    if ( $this->lpc_input_field ) {

		$default = 'Username or Email Address';
		$options = $this->lpc_input_field;
  		$label   = array_key_exists( 'userLabel', $options ) ? $options['userLabel'] : '';

  		// If the option does not exist, return the text unchanged.
  		if ( ! $options && $default === $text ) {
  			return $translated_text;
  		}

  		// If options exsit, then translate away.
  		if ( $options && $default === $text ) {

  			// Check if the option exists.
  			if ( array_key_exists( 'userLabel', $options ) ) {
  				$translated_text = esc_html( $label );
  			} else {
  				return $translated_text;
  			}
  		}
    }
    return $translated_text;
  }
  
  /**
   * Change Password Label from Form.
   * @param  [type] $translated_text [description]
   * @param  [type] $text            [description]
   * @param  [type] $domain          [description]
   * @return string
   * @since 1.0.0
   */
  public function lpc_change_password_label( $translated_text, $text, $domain ) {

	if ( $this->lpc_input_field ) {
        $default = 'Password';
        $options = $this->lpc_input_field;
        $label   = array_key_exists( 'pwdLabel', $options ) ? $options['pwdLabel'] : '';

  			// If the option does not exist, return the text unchanged.
  			if ( ! $options && $default === $text ) {
  				return $translated_text;
  			}

  			// If options exsit, then translate away.
  			if ( $options && $default === $text ) {

  				// Check if the option exists.
  				if ( array_key_exists( 'pwdLabel', $options ) ) {
  					$translated_text = esc_html( $label );
  				} else {
  					return $translated_text;
  				}
  			}
      }
      return $translated_text;
  }

  /**
  * Manage Welcome Messages
  *
  * @param	$message
  * @since	1.0.0
  * @return string
  * * * * * * * * * * * * */
  public function lpc_change_welcome_message ($message) {

    if ( $this->lpc_welcome_messages ) {

      //Check, User Logedout.
      if ( isset( $_GET['loggedout'] ) && TRUE == $_GET['loggedout'] ) {

        if ( array_key_exists( 'logoutMessage', $this->lpc_welcome_messages ) && ! empty( $this->lpc_welcome_messages['logoutMessage'] ) ) {

          $lpc_message = esc_html( $this->lpc_welcome_messages['logoutMessage'] );
        }
      }

      //Logged In messages.
      else if ( strpos( $message, __( "Please enter your username or email address. You will receive a link to create a new password via email." ) ) == true ) {

        if ( array_key_exists( 'lostpwdWcMsg', $this->lpc_welcome_messages ) && ! empty( $this->lpc_welcome_messages['lostpwdWcMsg'] ) ) {

          $lpc_message = esc_html( $this->lpc_welcome_messages['lostpwdWcMsg'] );
        }
      }

      else if( strpos( $message, __( "Register For This Site" ) ) == true ) {

        if ( array_key_exists( 'registerWcMsg', $this->lpc_welcome_messages ) && ! empty( $this->lpc_welcome_messages['registerWcMsg'] ) ) {

          $lpc_message = esc_html( $this->lpc_welcome_messages['registerWcMsg'] );
        }
      }

      // @since 1.0.0
      // else if ( strpos( $message, __( "Enter your new password below." ) ) == true ) {
      //
      //   if ( array_key_exists( 'reset_hint_message', $this->lpc_welcome_messages ) && ! empty( $this->lpc_welcome_messages['reset_hint_message'] ) ) {
      //
      //     $lpc_message = $this->lpc_welcome_messages['reset_hint_message'];
      //   }
      // }

      // @since 1.0.0
      else if ( strpos( $message, __( "Your password has been reset." ) ) == true ) {

        // if ( array_key_exists( 'after_reset_message', $this->lpc_welcome_messages ) && ! empty( $this->lpc_welcome_messages['after_reset_message'] ) ) {

          $lpc_message = __( 'Your password has been reset.' ) . ' <a href="' . esc_url( wp_login_url() ) . '">' . __( 'Log in' ) . '</a></p>';
        // }
      }

      else {
        if ( array_key_exists( 'loginPageWcMsg', $this->lpc_welcome_messages ) && ! empty( $this->lpc_welcome_messages['loginPageWcMsg'] ) ) {

          $lpc_message = esc_html( $this->lpc_welcome_messages['loginPageWcMsg'] );
        }
      }

      return ! empty( $lpc_message ) ? "<p class='custom-message'>" . $lpc_message. "</p>" : $message;
    }
  }
  
 /**
  * Redirect user after successful login.
  *
  * @param string $redirect_to URL to redirect to.
  * @param string $request URL the user is coming from.
  * @param object $user Logged user's data.
  * @return string
  */
  public function lpc_after_login_redirect( $redirect_to, $request, $user ) {
	  
  	//is there a user to check?
      if ( isset( $user->roles ) && is_array( $user->roles ) ) {
  
  		// get and load custom redirect option after user login
		
  		$login_redirect_user = esc_url_raw( $this->lpc_login_box['redirectUrl'] );
  		
          //check for admins
          if ( in_array( 'administrator', $user->roles ) ) {
              // redirect admin to the default place
              return $redirect_to;
          } else {
              // redirect users to another place
  			if($login_redirect_user != "") {
                  return $login_redirect_user;
              } else {
                  return $redirect_to;
              }
          }
      } else {
          return $redirect_to;
      }
  }
  
}
?>