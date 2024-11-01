<!-- Login Form Settings panel content --- >
<!---------------------------------------->
<?php
// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) exit;
?>
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    <?php _e('LOGIN FORM','WEBHUNT_LPC'); ?>
    <small><?php _e('Custom Login Page','WEBHUNT_LPC'); ?></small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-folder-open"></i> <?php _e('Login Form Settings','WEBHUNT_LPC'); ?></a></li>
  </ol>
</section>
<!-- Main content -->
<section class="content">
   <body class="woodbg">
		<div class="smart-wrap">
			<div class="smart-forms smart-container wrap-2">
				
				<form method="post" name="myform" id="lpc_plugin_options_login">
					<div class="form-body">
						
						<div class="frm-row">
							<div class="col-md-12">
								
								<div class="frm-row network-header">
									<div class="colm"></div>
									<div class="section colm colm9">
										<h4 style="font: bold 22px Arial, sans-serif;"><?php _e('Login Form Background Options','WEBHUNT_LPC'); ?></h4>
									</div><!-- end section -->
								</div>
								
								<div class="frm-row frm-bg" id="display_login_bg_option">
									
									<div class="col-md-12 col-sm-12">
										<label class="field-label col-md-3 col-sm-5 align-left"><?php _e('Login Form Transparent','WEBHUNT_LPC'); ?>:</label>
										<div class="section col-md-4 col-sm-7">
											<label class="switch block">
											  <input type="hidden" name="enableLoginTrans" value="false">
											  <input type="checkbox" name="enableLoginTrans" id="enableLoginTrans" value="true" <?php if($enableLoginTrans == 'true' ) { echo "checked"; } ?> >
											  <span class="switch-label" data-on="ON" data-off="OFF"></span>
											  <span> <?php _e('ON/OFF','WEBHUNT_LPC'); ?> </span>
											</label>
											<p class="medium-text fine-grey"><?php _e('To make Login Form Transparent.','WEBHUNT_LPC'); ?></p>
										</div><!-- end section -->
									</div><!-- end col section -->
									
									<div class="col-md-12 col-sm-12">
										<label class="field-label col-md-3 col-sm-5 align-left"><?php _e('Login Background Type','WEBHUNT_LPC'); ?> :</label>
										<div class="section col-md-4 col-sm-7">
											<label class="field select">
												<select name="loginBg" id="loginBg">
													<optgroup label="Select Background Option">
														<option value="color" <?php selected($loginBg, 'color' ); ?>> <?php _e('Background Color','WEBHUNT_LPC'); ?> </option>
														<option value="image" <?php selected($loginBg, 'image' ); ?>> <?php _e('Background Image','WEBHUNT_LPC'); ?> </option>
													</optgroup>
												</select>
												<i class="arrow double"></i>
											</label>
										</div><!-- end section -->
									</div><!-- end col section -->
								</div>
								
								<div class="frm-row network-header spacer-t30 lDisplySec">
									<div class="section colm colm9 options color" style="margin-bottom: 0px;">
										<h4 style="font: bold 22px Arial, sans-serif;"><?php _e('Color Background Settings','WEBHUNT_LPC'); ?></h4>
									</div><!-- end section -->
								</div>
								<div class="frm-row frm-bg lDisplySec">
									<div class="col-md-12">
										<label class="field-label col-md-3 col-sm-4 align-left"><?php _e('Login Background Color','WEBHUNT_LPC'); ?></label>
										<div class="section col-md-4 col-sm-8">
											<label class="field sfcolor">
												<input type="text" id="loginBgColor" name="loginBgColor" value="<?php echo $loginBgColor; ?>" class="gui-input options color">
											</label>
										</div>
									</div><!-- end col section -->
								</div><!-- end .frm-row section -->
								
								<div class="frm-row frm-bg spacer-t30 lDisplySec">
								
									<div class="col-md-12 options image">
										<div class="imageupload">
											<div class="panel-heading clearfix" style="margin: -10px 0px 10px 0px; border-bottom: 1px dashed #e7e7e7;">
												<h3 class="panel-title pull-left" style="font: bold 18px Arial, sans-serif;"><?php _e('Login Background Image','WEBHUNT_LPC'); ?></h3>
											</div>
											<div class="file-tab panel-body" style="display: block;">
												<img src="<?php echo $loginBgImage; ?>" alt="Image preview" class="thumbnail" style="max-width: 250px; max-height: 250px">
												<button type="button" name="upload_image_button" class="btn btn-default lpc_image_uploader" style="display: inline-block;"><?php _e( 'Upload Image' ); ?></button>
												<input type='hidden' name='loginBgImage' id='loginBgImage' value='<?php echo $loginBgImage; ?>'>
												<button type="button" class="btn btn-default file_img_remove"><?php _e('Remove','WEBHUNT_LPC'); ?></button>
											</div>
										</div>
									</div><!-- end col section -->
									
								</div><!-- end .frm-row section -->
								
								<div class="frm-row network-header spacer-t30">
									<div class="section colm colm12">
										<h4 style="font: bold 22px Arial, sans-serif;"><?php _e('Login Form Position','WEBHUNT_LPC'); ?></h4>
									</div><!-- end section -->
								</div>
								<div class="frm-row frm-bg" id="display_login_Position_option">
								
									<div class="col-md-12">
										<label class="field-label col-md-3 col-sm-5 align-left"><?php _e('Login Form Position','WEBHUNT_LPC'); ?> :</label>
										<div class="section col-md-4 col-sm-7">
											<label class="field select">
												<select name="loginPosition" id="loginPosition">
													<optgroup label="Select Positioning Option">
														<option value="default" <?php selected($loginPosition, 'default' ); ?>> <?php _e('Default','WEBHUNT_LPC'); ?> </option>
														<option value="float" <?php selected($loginPosition, 'float' ); ?>> <?php _e('Floating','WEBHUNT_LPC'); ?> </option>
														<option value="customFloat"<?php selected($loginPosition, 'customFloat' ); ?>> <?php _e('Floating with Customization','WEBHUNT_LPC'); ?> </option>
													</optgroup>
												</select>
												<i class="arrow double"></i>
											</label>
										</div><!-- end section -->
									</div><!-- end col section -->
									
									<div class="col-md-12 options float">
										<label class="field-label col-md-3 col-sm-5 align-left"><?php _e('Float Settings','WEBHUNT_LPC'); ?> :</label>
										<div class="section col-md-6 col-sm-7">
											<div class="option-group field">
												<label class="option">
													<input type="radio" name="loginFloat" value="left" <?php if($loginFloat == "left"){ echo "checked"; } ?>>
													<span class="radio"></span> <?php _e('Left','WEBHUNT_LPC'); ?>
												</label>
												<label class="option">
													<input type="radio" name="loginFloat" value="center" <?php if($loginFloat == "center"){ echo "checked"; } ?>>
													<span class="radio"></span> <?php _e('Center','WEBHUNT_LPC'); ?>
												</label>
												<label class="option">
													<input type="radio" name="loginFloat" id="loginFloat" value="right" <?php if($loginFloat == "right"){ echo "checked"; } ?>>
													<span class="radio"></span> <?php _e('Right','WEBHUNT_LPC'); ?>
												</label>
											</div>
										</div>
									</div><!-- end col section -->	
									
									<div class="col-md-12 options customFloat">
										<label class="field-label col-md-3 col-sm-5 align-left"><?php _e('Form Margin Left','WEBHUNT_LPC'); ?> :</label>
										<div class="section col-md-4 col-sm-4 spacer-t20">
											<div class="slider-wrapper">
												<div id="sloginLeft"></div>
											</div><!-- end .slider-wrapper -->
										</div>
										<div class="col-md-3 col-sm-3 spacer-t7">
											<input type="text" name="loginLeft" id="loginLeft" class="slider-text" readonly><span style="color:#f6931f"><?php _e('px','WEBHUNT_LPC'); ?></span> 
										</div>     
									</div> <!-- End of 'Form Margin Left' Section -->
									
									<div class="col-md-12 spacer-b10">
										<label class="field-label col-md-3 col-sm-5 align-left"><?php _e('Form Margin Top','WEBHUNT_LPC'); ?> :</label>
										<div class="section colm colm4 spacer-t20">
											<div class="slider-wrapper">
												<div id="sloginTop"></div>
											</div><!-- end .slider-wrapper -->
										</div>
										<div class="colm colm3 spacer-t7">
											<input type="text" name="loginTop" id="loginTop" class="slider-text" readonly><span style="color:#f6931f"><?php _e('px','WEBHUNT_LPC'); ?></span> 
										</div>     
									</div> <!-- End of 'Form Margin Top' Section -->
								</div>
								
								<div class="frm-row network-header spacer-t30">
									<div class="section colm colm12">
										<h4 style="font: bold 22px Arial, sans-serif;"><?php _e('Login Form Settings','WEBHUNT_LPC'); ?></h4>
									</div><!-- end section -->
								</div>

								<div class="frm-row frm-bg">
									
									<div class="col-md-12">
										<label class="field-label col-md-3 col-sm-5 align-left"><?php _e('Form Width','WEBHUNT_LPC'); ?> :</label>
										<div class="section colm colm4 spacer-t20">
											<div class="slider-wrapper">
												<div id="sloginWidth"></div>
											</div><!-- end .slider-wrapper -->
										</div>
										<div class="colm colm3 spacer-t7">
											<input type="text" name="loginWidth" id="loginWidth" class="slider-text" readonly><span style="color:#f6931f"><?php _e('px','WEBHUNT_LPC'); ?></span> 
										</div>     
									</div> <!-- End of 'Form Width' Section -->
									
									<div class="col-md-12">
										<label class="field-label col-md-3 col-sm-5 align-left"><?php _e('Form Minimum Height','WEBHUNT_LPC'); ?> :</label>
										<div class="section colm colm4 spacer-t20">
											<div class="slider-wrapper">
												<div id="sloginHeight"></div>
											</div><!-- end .slider-wrapper -->
										</div>
										<div class="colm colm3 spacer-t7">
											<input type="text" name="loginHeight" id="loginHeight" class="slider-text" readonly><span style="color:#f6931f"><?php _e('px','WEBHUNT_LPC'); ?></span> 
										</div>     
									</div> <!-- End of 'Form Minimum Height' Section -->
									
									<div class="col-md-12">
										<label class="field-label col-md-3 col-sm-5 align-left"><?php _e('Form Padding Left & Right','WEBHUNT_LPC'); ?> :</label>
										<div class="section colm colm4 spacer-t20">
											<div class="slider-wrapper">
												<div id="sloginPaddingLR"></div>
											</div><!-- end .slider-wrapper -->
										</div>
										<div class="colm colm3 spacer-t7">
											<input type="text" name="loginPaddingLR" id="loginPaddingLR" class="slider-text" readonly><span style="color:#f6931f"><?php _e('px','WEBHUNT_LPC'); ?></span> 
										</div>     
									</div> <!-- End of 'Padding Left & Right' Section -->
									
									<div class="col-md-12">
										<label class="field-label col-md-3 col-sm-5 align-left"><?php _e('Form Radius','WEBHUNT_LPC'); ?> :</label>
										<div class="section colm colm4 spacer-t20">
											<div class="slider-wrapper">
												<div id="sloginRadius"></div>
											</div><!-- end .slider-wrapper -->
										</div>
										<div class="colm colm3 spacer-t7">
											<input type="text" name="loginRadius" id="loginRadius" class="slider-text" readonly><span style="color:#f6931f"><?php _e('px','WEBHUNT_LPC'); ?></span> 
										</div>     
									</div> <!-- End of 'Form Radius' Section -->
									
									<div class="col-md-12">
										<label class="field-label col-md-3 col-sm-5 align-left"><?php _e('Form Border Size','WEBHUNT_LPC'); ?> :</label>
										<div class="section colm colm4 spacer-t20">
											<div class="slider-wrapper">
												<div id="sloginBorderSize"></div>
											</div><!-- end .slider-wrapper -->
										</div>
										<div class="colm colm3 spacer-t7">
											<input type="text" name="loginBorderSize" id="loginBorderSize" class="slider-text" readonly><span style="color:#f6931f"><?php _e('px','WEBHUNT_LPC'); ?></span> 
										</div>     
									</div> <!-- End of 'Form Border Size' Section -->
									
									<div class="col-md-12 spacer-t20">
										<label class="field-label col-md-3 col-sm-5 align-left"><?php _e('Form Border Style','WEBHUNT_LPC'); ?> :</label>
										<div class="section colm colm4">
											<label class="field select">
												<select name="loginBorderStyle" id="loginBorderStyle">
													<optgroup label="Select Login Form Border Style">
														<option value="none" <?php selected($loginBorderStyle, 'none' ); ?>> <?php _e('None','WEBHUNT_LPC'); ?> </option>
														<option value="solid" <?php selected($loginBorderStyle, 'solid' ); ?>> <?php _e('Solid','WEBHUNT_LPC'); ?> </option>
														<option value="dotted"<?php selected($loginBorderStyle, 'dotted' ); ?>> <?php _e('Dotted','WEBHUNT_LPC'); ?> </option>
														<option value="dashed" <?php selected($loginBorderStyle, 'dashed' ); ?>> <?php _e('Dashed','WEBHUNT_LPC'); ?> </option>
														<option value="double" <?php selected($loginBorderStyle, 'double' ); ?>> <?php _e('Double','WEBHUNT_LPC'); ?> </option>
													</optgroup>
												</select>
												<i class="arrow double"></i>
											</label>
										</div><!-- end section -->
									</div><!-- end col section -->
									
									<div class="col-md-12">
										<label class="field-label col-md-3 col-sm-5 align-left"><?php _e('Form Border Color','WEBHUNT_LPC'); ?> :</label>
										<div class="section colm colm4">
											<label class="field sfcolor">
												<input type="text" id="loginBorderColor" name="loginBorderColor" value="<?php echo $loginBorderColor; ?>" class="gui-input">
											</label>
										</div>
									</div><!-- end col section -->
									
									<div class="col-md-12 spacer-t20">
										<label class="field-label col-md-3 col-sm-5 align-left"><?php _e('Enable Form Shadow','WEBHUNT_LPC'); ?> :</label>
										<div class="section colm colm6">
											<label class="field option block">
												<input type="hidden" name="enableLoginShadow" value="false">
												<input class="options responsive" type="checkbox" name="enableLoginShadow"  value="true" <?php if($enableLoginShadow == 'true') echo "checked"; ?> >
												<span class="checkbox"></span>
											</label>
											<p class="medium-text fine-grey"><?php _e('Check this option to enable <b>Form Shadow Color</b> option.','WEBHUNT_LPC'); ?></p>
										</div><!-- end section -->
									</div><!-- end col section -->
									
									<div class="col-md-12 loginShadowColor">
										<label class="field-label col-md-3 col-sm-5 align-left"><?php _e('Form Shadow Color','WEBHUNT_LPC'); ?> :</label>
										<div class="section colm colm4">
											<label class="field sfcolor">
												<input type="text" id="loginShadowColor" name="loginShadowColor" value="<?php echo $loginShadowColor;?>" class="gui-input">
											</label>
										</div>
									</div><!-- end col section -->

								</div><!-- end .frm-row section -->
								
								<div class="frm-row network-header spacer-t30">
									<div class="section colm colm12">
										<h4 style="font: bold 22px Arial, sans-serif;"><?php _e('Redirect Users After Login (Not Work For Admin)','WEBHUNT_LPC'); ?></h4>
									</div><!-- end section -->
								</div>

								<div class="frm-row frm-bg">
									<div class="col-md-12 spacer-t10">
										<label class="field-label col-md-3 col-sm-5 align-left"><?php _e('Redirect URL','WEBHUNT_LPC'); ?> :</label>
										<div class="section colm colm7">
											<label class="field prepend-icon">
												<input type="text" name="redirectUrl" id="redirectUrl" class="gui-input" placeholder="Redirect URL" value="<?php echo $redirectUrl; ?>">
												<span class="field-icon"><i class="fa fa-link"></i></span>
											</label>
										</div><!-- end section -->
									</div><!-- end col section -->
								</div>	
	
							</div><!-- /.col -->
						</div><!-- end .frm-row section --> 
					</div><!-- end .form-body section -->
					<div class="form-footer">
						<input type="button" class="button btn-primary" onclick="wh_lpc_save_data('login')" value="<?php _e('Save Changes','WEBHUNT_LPC'); ?>">
						<input type="button" class="button btn-primary btn-gray" onclick="wh_lpc_reset_data('login')" value="<?php _e('Reset Section','WEBHUNT_LPC'); ?>">
						<input type="button" class="button btn-primary btn-gray" onclick="wh_lpc_reset_all_data()" value="<?php _e('Reset All','WEBHUNT_LPC'); ?>">
					</div><!-- end .form-footer section -->
				</form>
				
			</div><!-- end .smart-forms section -->
		</div><!-- end .smart-wrap section -->
	</body>
</section><!-- /.content -->
<script>
jQuery(document).ready(function(){
	
	/* LOGIN FORM SPACING FROM LEFT */		
	jQuery( "#sloginLeft" ).slider({
		range: "min",
		value: <?php echo $loginLeft; ?>,
		min: 0,
		max: 900,
		step: 1,
		slide: function(event, ui) {
			jQuery("#loginLeft").val( ui.value );
		}
	});
	jQuery("#loginLeft").val( 
		jQuery("#sloginLeft").slider("value")
	);
	
	/* LOGIN FORM SPACING FROM TOP */	
	jQuery( "#sloginTop" ).slider({
		range: "min",
		value: <?php echo $loginTop; ?>,
		min: 0,
		max: 200,
		step: 1,
		slide: function(event, ui) {
			jQuery("#loginTop").val( ui.value );
		}
	});
	jQuery("#loginTop").val( 
		jQuery("#sloginTop").slider("value")
	);
	
	/* LOGIN FORM WIDTH */	
	jQuery( "#sloginWidth" ).slider({
		range: "min",
		value: <?php echo $loginWidth; ?>,
		min: 200,
		max: 800,
		step: 1,
		slide: function(event, ui) {
			jQuery("#loginWidth").val( ui.value );
		}
	});
	jQuery("#loginWidth").val( 
		jQuery("#sloginWidth").slider("value")
	);
	
	/* LOGIN FORM HEIGHT */	
	jQuery( "#sloginHeight" ).slider({
		range: "min",
		value: <?php echo $loginHeight; ?>,
		min: 100,
		max: 350,
		step: 1,
		slide: function(event, ui) {
			jQuery("#loginHeight").val( ui.value );
		}
	});
	jQuery("#loginHeight").val( 
		jQuery("#sloginHeight").slider("value")
	);
	
	/* LOGIN FORM PADDING FROM LEFT AND RIGHT */	
	jQuery( "#sloginPaddingLR" ).slider({
		range: "min",
		value: <?php echo $loginPaddingLR; ?>,
		min: 4,
		max: 30,
		step: 1,
		slide: function(event, ui) {
			jQuery("#loginPaddingLR").val( ui.value );
		}
	});
	jQuery("#loginPaddingLR").val( 
		jQuery("#sloginPaddingLR").slider("value")
	);
	
	/* LOGIN FORM RADIUS */	
	jQuery( "#sloginRadius" ).slider({
		range: "min",
		value: <?php echo $loginRadius; ?>,
		min: 0,
		max: 100,
		step: 1,
		slide: function(event, ui) {
			jQuery("#loginRadius").val( ui.value );
		}
	});
	jQuery("#loginRadius").val( 
		jQuery("#sloginRadius").slider("value")
	);
	
	/* LOGIN FORM BOARDER SIZE */	
	jQuery( "#sloginBorderSize" ).slider({
		range: "min",
		value: <?php echo $loginBorderSize; ?>,
		min: 0,
		max: 30,
		step: 1,
		slide: function(event, ui) {
			jQuery("#loginBorderSize").val( ui.value );
		}
	});
	jQuery("#loginBorderSize").val( 
		jQuery("#sloginBorderSize").slider("value")
	);
	
	/* FUNCTION CALLING TO SHOW AVALIABLE OPTION ON BACKGROUND SELECT */
	loginBgOption("<?php echo $loginBg; ?>");
	jQuery("#loginBg").change(function () {     
		loginBgOption(jQuery(this).val());
	});
	
	/* FUNCTION CALLING TO SHOW AVALIABLE OPTION ON LOGIN POSITION */
	loginPosition("<?php echo $loginPosition; ?>");
	jQuery("#loginPosition").change(function () {     
		loginPosition(jQuery(this).val());
	});
	
	/* FUNCTION CALLING TO ENABLE LOGIN FORM SHADOW COLOR */
	jQuery("input[name='enableLoginShadow']").click(function() {
		enableLoginShadow();
	});
	enableLoginShadow();
	
});

/* FUNCTION TO SHOW AVALIABLE OPTION ON BACKGROUND SELECT */
function loginBgOption(template){
	jQuery('#lpc_plugin_options_login .options:not(.' + template + ')').parents('.lDisplySec').hide();
	jQuery('#lpc_plugin_options_login .options.' + template).parents('.lDisplySec').show();
}

/* FUNCTION TO SHOW AVALIABLE OPTION ON LOGIN POSITION */
function loginPosition(option){
	jQuery('#display_login_Position_option .options:not(.' + option + ')').hide();
	jQuery('#display_login_Position_option .options.' + option).show();
}

/* FUNCTION TO SHOW FOOTER TEXT COLOR OPTION */
function enableLoginShadow() {
    if(jQuery("input[name='enableLoginShadow']").is(':checked')){
		jQuery(".loginShadowColor").show();
	}else{
		jQuery(".loginShadowColor").hide();
	}
}
</script>