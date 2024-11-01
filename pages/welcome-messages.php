<!-- Our Services Settings panel content --- >
<!---------------------------------------->
<?php
// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) exit;
?>
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
   <?php _e('Welcome Messages','WEBHUNT_LPC'); ?>
    <small><?php _e('Custom Login Page','WEBHUNT_LPC'); ?></small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-puzzle-piece"></i> <?php _e('Welcome Message','WEBHUNT_LPC'); ?></a></li>
  </ol>
</section>
<!-- Main content -->
<section class="content">
   <body class="woodbg">
		<div class="smart-wrap">
			<div class="smart-forms smart-container wrap-2">
				
				<form method="post" name="myform" id="lpc_plugin_options_welcome_messages">
					<div class="form-body">
						
						<div class="frm-row">
							<div class="col-md-12">
							
								<div class="frm-row network-header">
									<div class="section col-md-12">
										<h4 style="font: bold 22px Arial, sans-serif;"><?php _e('Welcome Messages','WEBHUNT_LPC'); ?></h4>
									</div><!-- end section -->
								</div>
								

								<div class="frm-row frm-bg">
								
									<div class="col-md-12">
										<label class="field-label col-md-3 col-sm-4 align-left"><?php _e('On Lost Password','WEBHUNT_LPC'); ?> :</label>
										<div class="section col-md-7 col-sm-8">
											<label class="field prepend-icon">
												<input type="text" name="lostpwdWcMsg" id="lostpwdWcMsg" class="gui-input" placeholder="Forgot password?" value="<?php echo $lostpwdWcMsg; ?>" >
												<span class="field-icon"><i class="fa fa-edit"></i></span>
											</label>
										</div><!-- end section -->
									</div><!-- end col section -->
									
									<div class="col-md-12">
										<label class="field-label col-md-3 col-sm-4 align-left"><?php _e('On Login Page','WEBHUNT_LPC'); ?> :</label>
										<div class="section col-md-7 col-sm-8">
											<label class="field prepend-icon">
												<input type="text" name="loginPageWcMsg" id="loginPageWcMsg" class="gui-input" placeholder="Welcome" value="<?php echo $loginPageWcMsg; ?>" >
												<span class="field-icon"><i class="fa fa-edit"></i></span>
											</label>
										</div><!-- end section -->
									</div><!-- end col section -->
									
									<div class="col-md-12">
										<label class="field-label col-md-3 col-sm-4 align-left"><?php _e('On Registration','WEBHUNT_LPC'); ?> :</label>
										<div class="section col-md-7 col-sm-8">
											<label class="field prepend-icon">
												<input type="text" name="registerWcMsg" id="registerWcMsg" class="gui-input" placeholder="Register For This Site" value="<?php echo $registerWcMsg; ?>" >
												<span class="field-icon"><i class="fa fa-edit"></i></span>
											</label>
										</div><!-- end section -->
									</div><!-- end col section -->
									
									<div class="col-md-12">
										<label class="field-label col-md-3 col-sm-4 align-left"><?php _e('Logout Message','WEBHUNT_LPC'); ?> :</label>
										<div class="section col-md-7 col-sm-8">
											<label class="field prepend-icon">
												<input type="text" name="logoutMessage" id="logoutMessage" class="gui-input" placeholder="Logout" value="<?php echo $logoutMessage; ?>" >
												<span class="field-icon"><i class="fa fa-edit"></i></span>
											</label>
										</div><!-- end section -->
									</div><!-- end col section -->
									
								</div><!-- end .frm-row section -->
								
								<div class="frm-row network-header spacer-t30">
									<div class="section col-md-9 options img" style="margin-bottom: 0px;">
										<h4 style="font: bold 22px Arial, sans-serif;"><?php _e('Message Box Styling','WEBHUNT_LPC'); ?></h4>
									</div><!-- end section -->
								</div>
								
								<div class="frm-row frm-bg">
									<div class="col-md-12">
										<label class="field-label col-md-3 col-sm-4 align-left"><?php _e('Message Field Bg Color','WEBHUNT_LPC'); ?> :</label>
										<div class="section col-md-4 col-sm-8">
											<label class="field sfcolor">
												<input type="text" id="wcMsgBgColor" name="wcMsgBgColor" value="<?php echo $wcMsgBgColor;?>" class="gui-input">
											</label>
										</div>
									</div><!-- end col section -->
									
									<div class="col-md-12">
										<label class="field-label col-md-3 col-sm-4 align-left"><?php _e('Message Field Border','WEBHUNT_LPC'); ?> :</label>
										<div class="section col-md-4 col-sm-8">
											<label class="field">
												<input type="text" name="wcMsgBorder" id="wcMsgBorder" class="gui-input" placeholder="Enter Border Style" value="<?php echo $wcMsgBorder; ?>" >
											</label>
											<p class="medium-text fine-grey"><?php _e('For Example','WEBHUNT_LPC'); ?>  : 1px solid #00a0d2;</p>
										</div><!-- end section -->
									</div><!-- end col section -->	
								</div>
									
							</div><!-- /.col -->
						</div><!-- end .frm-row section --> 						
					</div><!-- end .form-body section -->
					<div class="form-footer">
						<input type="button" class="button btn-primary" onclick="wh_lpc_save_data('welcome_messages')" value="<?php _e('Save Changes','WEBHUNT_LPC'); ?>">
						<input type="button" class="button btn-primary btn-gray" onclick="wh_lpc_reset_data('welcome_messages')" value="<?php _e('Reset Section','WEBHUNT_LPC'); ?>">
						<input type="button" class="button btn-primary btn-gray" onclick="wh_lpc_reset_all_data()" value="<?php _e('Reset All','WEBHUNT_LPC'); ?>">
					</div><!-- end .form-footer section -->
				</form>
				
			</div><!-- end .smart-forms section -->
		</div><!-- end .smart-wrap section -->
	</body>
</section><!-- /.content -->