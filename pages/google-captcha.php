<!-- Our Services Settings panel content --- >
<!---------------------------------------->
<?php
// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) exit;
?>
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
   <?php _e('Google Captcha','WEBHUNT_LPC'); ?>
    <small><?php _e('Custom Login Page','WEBHUNT_LPC'); ?></small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-google"></i> <?php _e('Google Captcha','WEBHUNT_LPC'); ?></a></li>
  </ol>
</section>
<!-- Main content -->
<section class="content">
   <body class="woodbg">
		<div class="smart-wrap">
			<div class="smart-forms smart-container wrap-2">
				
				<form method="post" name="myform" id="lpc_plugin_options_google_captcha">
					<div class="form-body">
						
						<div class="frm-row">
							<div class="col-md-12">
							
								<div class="frm-row network-header">
									<div class="section col-md-9">
										<h4 style="font: bold 22px Arial, sans-serif;"><?php _e('Google Captcha','WEBHUNT_LPC'); ?></h4>
									</div><!-- end section -->
								</div>
								

								<div class="frm-row frm-bg">
									<div class="col-md-12">
										<label class="field-label col-md-3 col-sm-4 align-left"><?php _e('Enable Captcha','WEBHUNT_LPC'); ?> :</label>
										<div class="section col-md-8 col-sm-8">
											<label class="switch block">
											  <input type="hidden" name="enableGCaptcha" value="false">
											  <input type="checkbox" name="enableGCaptcha" id="enableGCaptcha" value="true" <?php if($enableGCaptcha == 'true' ) { echo "checked"; } ?>>
											  <span class="switch-label" data-on="ON" data-off="OFF"></span>
											  <span> <?php _e('ON/OFF','WEBHUNT_LPC'); ?> </span>
											</label>
											<p class="medium-text fine-grey"><b><?php _e('Note','WEBHUNT_LPC'); ?></b>:- <?php _e('API keys is required to enable Google Captcha, get required keys and enter them below. ','WEBHUNT_LPC'); ?><a href="https://www.webhuntinfotech.com/get-google-captcha-api-keys/" target="_blank" style="color:red"><?php _e('Get the API Keys.','WEBHUNT_LPC'); ?></a></p>
										</div><!-- end section -->
									</div><!-- end col section -->
								
									<div class="col-md-12">
										<label class="field-label col-md-3 col-sm-4 align-left"><?php _e('Site Key','WEBHUNT_LPC'); ?> :</label>
										<div class="section col-md-7 col-sm-8">
											<label class="field prepend-icon">
												<input type="text" name="gSiteKey" id="gSiteKey" class="gui-input" placeholder="Enter Site Key" value="<?php echo $gSiteKey; ?>" >
												<span class="field-icon"><i class="fa fa-edit"></i></span>
											</label>
										</div><!-- end section -->
									</div><!-- end col section -->
									
									<div class="col-md-12">
										<label class="field-label col-md-3 col-sm-4 align-left"><?php _e('Secret Key','WEBHUNT_LPC'); ?> :</label>
										<div class="section col-md-7 col-sm-8">
											<label class="field prepend-icon">
												<input type="text" name="gSecretKey" id="gSecretKey" class="gui-input" placeholder="Enter Secret Key" value="<?php echo $gSecretKey; ?>" >
												<span class="field-icon"><i class="fa fa-edit"></i></span>
											</label>
										</div><!-- end section -->
									</div><!-- end col section -->
									
									<div class="col-md-12">
										<label class="field-label col-md-3 col-sm-4 align-left"><?php _e('Captcha Theme','WEBHUNT_LPC'); ?> :</label>
										<div class="section col-md-7 col-sm-8">
											<div class="option-group field">
												<label class="option">
													<input type="radio" name="gCaptchaTheme" value="light" <?php if($gCaptchaTheme == "light"){ echo "checked"; } ?>>
													<span class="radio"></span> <?php _e('Light','WEBHUNT_LPC'); ?>
												</label>
												<label class="option">
													<input type="radio" name="gCaptchaTheme" value="dark" <?php if($gCaptchaTheme == "dark"){ echo "checked"; } ?>>
													<span class="radio"></span> <?php _e('Dark','WEBHUNT_LPC'); ?>
												</label>
											</div>
										</div>
									</div><!-- end col section -->	
									
								</div><!-- end .frm-row section -->
									
							</div><!-- /.col -->
						</div><!-- end .frm-row section --> 
					</div><!-- end .form-body section -->
					<div class="form-footer">
						<input type="button" class="button btn-primary" onclick="wh_lpc_save_data('google_captcha')" value="<?php _e('Save Changes','WEBHUNT_LPC'); ?>">
						<input type="button" class="button btn-primary btn-gray" onclick="wh_lpc_reset_data('google_captcha')" value="<?php _e('Reset Section','WEBHUNT_LPC'); ?>">
						<input type="button" class="button btn-primary btn-gray" onclick="wh_lpc_reset_all_data()" value="<?php _e('Reset All','WEBHUNT_LPC'); ?>">
					</div><!-- end .form-footer section -->
				</form>
				
			</div><!-- end .smart-forms section -->
		</div><!-- end .smart-wrap section -->
	</body>
</section><!-- /.content -->