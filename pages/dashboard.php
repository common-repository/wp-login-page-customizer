<!-- Dashboard Settings panel content --- >
<!----------------------------------------> 
<?php
// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) exit;
?>
<script type="text/javascript">
	jQuery(document).ready(function(){
		/* Type paste - pickers
		------------------------------------------------- */
		jQuery("#tBgColor, #bgOverlayColor, #logoTextColor, #inputLabelColor, #inputBgColor, #inputTextColor, #rememberMeColor, #linkShadowColor, #loginBorderColor, #loginBgColor, #loginShadowColor, #lostPwdTxtColor, #lostPwdTxtHColor, #lostPwdTxtBgColor, #backToTextColor, #backToTextHColor, #backToTextBgColor, #copyrightBgColor, #copyrightTxtColor, #btnColor, #btnBorderColor, #btnColorH, #btnBorderColorH, #btnTextColor, #btnTxtShadowColor, #wcMsgBgColor").spectrum({
			preferredFormat: "hex6",
			showButtons: false,
			clickoutFiresChange: true
		});

		jQuery("#tBgColor, #bgOverlayColor, #logoTextColor, #inputLabelColor, #inputBgColor, #inputTextColor, #rememberMeColor, #linkShadowColor, #loginBorderColor, #loginBgColor, #loginShadowColor, #lostPwdTxtColor, #lostPwdTxtHColor, #lostPwdTxtBgColor, #backToTextColor, #backToTextHColor, #backToTextBgColor, #copyrightBgColor, #copyrightTxtColor, #btnColor, #btnBorderColor, #btnColorH, #btnBorderColorH, #btnTextColor, #btnTxtShadowColor, #wcMsgBgColor").blur(function() {
			jQuery(this).spectrum("set", jQuery(this).val());
		});

		/* Show all inputs with a colorpicker || hidden by default
		--------------------------------------------------------------- */
		jQuery("#tBgColor, #bgOverlayColor, #logoTextColor, #inputLabelColor, #inputBgColor, #inputTextColor, #rememberMeColor, #linkShadowColor, #loginBorderColor, #loginBgColor, #loginShadowColor, #lostPwdTxtColor, #lostPwdTxtHColor, #lostPwdTxtBgColor, #backToTextColor, #backToTextHColor, #backToTextBgColor, #copyrightBgColor, #copyrightTxtColor, #btnColor, #btnBorderColor, #btnColorH, #btnBorderColorH, #btnTextColor, #btnTxtShadowColor, #wcMsgBgColor").show();
	});
</script>
<?php
function check_checkboxes($isTrue) {
    echo $isTrue ? 'checked="checked"' : '';
}
?>
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    <?php _e('DASHBOARD','WEBHUNT_LPC'); ?>
    <small><?php _e('Custom Login Page','WEBHUNT_LPC'); ?></small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> <?php _e('Dashboard','WEBHUNT_LPC'); ?></a></li>
  </ol>
</section>
<!-- Main content -->
<section class="content">
   <body class="woodbg">
		<div class="smart-wrap">
			<div class="smart-forms smart-container wrap-2">

				<form method="post" name="myform" id="lpc_plugin_options_dashboard">
					<div class="form-body">

						<div class="frm-row">
							<div class="col-md-12">
							
								<div class="frm-row network-header">
									<div class="section colm">
										<img src="<?php echo  WEBHUNT_LPC_PLUGIN_URL.'assets/img/dashboard-icon.png'; ?>" alt="dashboard-icon" style="margin-top: 10px; padding:0px;" data-pin-nopin="true">
									</div>
									<div class="section colm colm9">
										<h4 style="font: bold 22px Arial, sans-serif;"><?php _e('DASHBOARD SETTINGS','WEBHUNT_LPC'); ?></h4>
									</div>
								</div>

								<div class="frm-row frm-bg">
									<div class="col-md-12"><!-- Enable Custom Login Page-->
										<label class="field-label colm colm3 align-left"><?php _e('Custom Login Page','WEBHUNT_LPC'); ?> :</label>
										<div class="section colm colm8">
											<label class="switch block">
											  <input type="hidden" name="lpc_status" value="false">
											  <input type="checkbox" name="lpc_status" id="lpc_status" value="true" <?php if($lpc_status == 'true' ) { echo "checked"; } ?>>
											  <span class="switch-label" data-on="ON" data-off="OFF"></span>
											  <span> <?php _e(' ON/OFF ','WEBHUNT_LPC'); ?> </span>
											</label>
											<p class="medium-text fine-grey"><?php _e('Switch it ON/OFF to enable/disable Custom Login Page.','WEBHUNT_LPC'); ?></p>
										</div>
									</div><!-- End of "Enable Custom Login Page" Section -->

									<div class="col-md-12">
										<label class="field-label colm colm3 align-left"><?php _e('View Login Page','WEBHUNT_LPC'); ?> :</label>
										<div class="section colm colm8">
											<label class="field">
												<a href="<?php echo wp_login_url(); ?>" target="_blank"><pre><span style="color:#ef4238"><?php echo wp_login_url(); ?></span></pre></a>
											</label>
											<p class="medium-text fine-grey"><?php _e('Cick on the link to view the login page.','WEBHUNT_LPC'); ?></p>
										</div>
									</div>

									<div class="col-md-12">
										<label class="field-label colm colm3 align-left"><?php _e('Remove Settings on Uninstall','WEBHUNT_LPC'); ?> :</label>
										<div class="section colm colm8">
											<label class="switch block">
											  <input type="hidden" name="lpc_uninstall" value="false">
											  <input type="checkbox" name="lpc_uninstall" id="lpc_uninstall" value="true" <?php if($lpc_uninstall == 'true' ) { echo "checked"; } ?>>
											  <span class="switch-label" data-on="ON" data-off="OFF"></span>
											  <span> <?php _e(' ON/OFF ','WEBHUNT_LPC'); ?> </span>
											</label>
											<p class="medium-text fine-grey"><?php _e('This option will remove all settings of this plugin upon uninstall.','WEBHUNT_LPC'); ?></p>
										</div>
									</div>
								</div>

								<div class="frm-row network-header spacer-t30">
									<div class="section colm colm9">
										<h4 style="font: bold 22px Arial, sans-serif;"><?php _e('Custom CSS','WEBHUNT_LPC'); ?></h4>
									</div><!-- end section -->
								</div>

								<div class="frm-row frm-bg">

									<div class="col-md-12">
										<label class="field-label colm colm3 align-left"><?php _e('Custom CSS Editor','WEBHUNT_LPC'); ?> :</label>
										<div class="section colm colm8">
											<label class="field">
												<textarea class="gui-textarea" id="customCssEditor" name="customCssEditor" placeholder="Enter Your Custom CSS"><?php echo $customCssEditor; ?></textarea>
											</label>
											<p class="medium-text fine-grey"><?php _e('Put your custom css here.','WEBHUNT_LPC'); ?><br/>
											<b><?php _e('Note ','WEBHUNT_LPC'); ?> :- </b>
											<?php _e('Please do not use ','WEBHUNT_LPC'); ?><b><?php echo '&lt;slyle&gt; &lt;/style&gt; '; ?></b> <?php _e('tag with Custom CSS Editor.','WEBHUNT_LPC'); ?></p>
										</div>
									</div><!-- end col section -->
								</div><!-- end .frm-row section -->

							</div><!-- /.col -->
						</div><!-- end .frm-row section --> 
					</div><!-- end .form-body section -->
					<div class="form-footer">
						<input type="button" class="button btn-primary" onclick="wh_lpc_save_data('dashboard')" value="<?php _e('Save Changes','WEBHUNT_LPC'); ?>">
						<input type="button" class="button btn-primary btn-gray" onclick="wh_lpc_reset_data('dashboard')" value="<?php _e('Reset Section','WEBHUNT_LPC'); ?>">
						<input type="button" class="button btn-primary btn-gray" onclick="wh_lpc_reset_all_data()" value="<?php _e('Reset All','WEBHUNT_LPC'); ?>">
					</div><!-- end .form-footer section -->
				</form>

			</div><!-- end .smart-forms section -->
		</div><!-- end .smart-wrap section -->
	</body>
</section><!-- /.content -->