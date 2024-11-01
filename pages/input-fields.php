<!-- Input Field Styling Settings panel content --- >
<!----------------------------------------> 	
<?php
// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) exit;
?>
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    <?php _e('INPUT FIRLD STYLING','WEBHUNT_LPC'); ?>
    <small><?php _e('Custom Login Page','WEBHUNT_LPC'); ?></small>
  </h1>
  <ol class="breadcrumb">
	<li><a href="#"><i class="fa fa-paint-brush"></i> <?php _e('Settings','WEBHUNT_LPC'); ?></a></li>
    <li class="active"><?php _e('Input Field','WEBHUNT_LPC'); ?></li>
  </ol>
</section>
<!-- Main content -->
<section class="content">
   <body class="woodbg">
		<div class="smart-wrap">
			<div class="smart-forms smart-container wrap-2">
				
				<form method="post" name="myform" id="lpc_plugin_options_input_field">
					<div class="form-body">
						
						<div class="frm-row">
							<div class="col-md-12">
							
								<div class="frm-row network-header">
									<div class="section col-md-9" style="margin-bottom: 0px;">
										<h4 style="font: bold 22px Arial, sans-serif;"><?php _e('Login Box Color Option','WEBHUNT_LPC'); ?></h4>
									</div><!-- end section -->
								</div>

								<div class="frm-row frm-bg">
									
									<div class="col-md-12">
										<label class="field-label col-md-3 col-sm-4 align-left"><?php _e('Input Field Label Color','WEBHUNT_LPC'); ?> :</label>
										<div class="section col-md-4 col-sm-8">
											<label class="field sfcolor">
												<input type="text" id="inputLabelColor" name="inputLabelColor" value="<?php echo $inputLabelColor;?>" class="gui-input">
											</label>
										</div>
									</div><!-- end col section -->
									
									<div class="col-md-12">
										<label class="field-label col-md-3 col-sm-4 align-left"><?php _e('Input Box Bg Color','WEBHUNT_LPC'); ?> :</label>
										<div class="section col-md-4 col-sm-8">
											<label class="field sfcolor">
												<input type="text" id="inputBgColor" name="inputBgColor" value="<?php echo $inputBgColor;?>" class="gui-input">
											</label>
										</div>
									</div><!-- end col section -->
									
									<div class="col-md-12">
										<label class="field-label col-md-3 col-sm-4 align-left"><?php _e('Input Box Text Color','WEBHUNT_LPC'); ?> :</label>
										<div class="section col-md-4 col-sm-8">
											<label class="field sfcolor">
												<input type="text" id="inputTextColor" name="inputTextColor" value="<?php echo $inputTextColor;?>" class="gui-input">
											</label>
										</div>
									</div><!-- end col section -->
									
									<div class="col-md-12">
										<label class="field-label col-md-3 col-sm-4 align-left"><?php _e('Remember Me Text Color','WEBHUNT_LPC'); ?></label>
										<div class="section col-md-4 col-sm-8">
											<label class="field sfcolor">
												<input type="text" id="rememberMeColor" name="rememberMeColor" value="<?php echo $rememberMeColor;?>" class="gui-input">
											</label>
										</div>
									</div><!-- end col section -->
									
									<div class="col-md-12">
										<label class="field-label col-md-3 col-sm-4 align-left"><?php _e('Enable LinK Shadaw','WEBHUNT_LPC'); ?> :</label>
										<div class="section col-md-6 col-sm-8">
											<label class="field option block">
												<input type="hidden" name="enableLinkShadow" value="false">
												<input class="options responsive" type="checkbox" name="enableLinkShadow"  value="true" <?php if($enableLinkShadow == 'true') echo "checked"; ?> >
												<span class="checkbox"></span>
											</label>
											<p class="medium-text fine-grey"><?php _e('Check this option to enable <b>Link Shadow Color</b> option.','WEBHUNT_LPC'); ?></p>
										</div><!-- end section -->
									</div><!-- end col section -->
									
									<div class="col-md-12 linkShadowColor">
										<label class="field-label col-md-3 col-sm-4 align-left"><?php _e('Link Shadow Color','WEBHUNT_LPC'); ?> :</label>
										<div class="section col-md-4 col-sm-8">
											<label class="field sfcolor">
												<input type="text" id="linkShadowColor" name="linkShadowColor" value="<?php echo $linkShadowColor;?>" class="gui-input">
											</label>
										</div>
									</div><!-- end col section -->
									
								</div><!-- end .frm-row section -->
								
								<div class="frm-row network-header spacer-t30">
									<div class="section col-md-9">
										<h4 style="font: bold 22px Arial, sans-serif;"><?php _e('Font Size & Border Radius Options','WEBHUNT_LPC'); ?></h4>
									</div><!-- end section -->
								</div>
								
								<div class="frm-row frm-bg">
								
									<div class="col-md-12">
										<label class="field-label col-md-3 col-sm-4 align-left"><?php _e('Input Label Font Size','WEBHUNT_LPC'); ?> :</label>
										<div class="section col-md-4 col-sm-5 spacer-t20">
											<div class="slider-wrapper">
												<div id="sinputLabelFontSize"></div>
											</div><!-- end .slider-wrapper -->
										</div>
										<div class="col-md-3 col-sm-3 spacer-t7">
											<input type="text" name="inputLabelFontSize" id="inputLabelFontSize" class="slider-text" readonly><span style="color:#f6931f"><?php _e('px','WEBHUNT_LPC'); ?></span> 
										</div>     
									</div> <!-- End of 'Input Label Font Size' Section -->
									
									<div class="col-md-12">
										<label class="field-label col-md-3 col-sm-4 align-left"><?php _e('Input Text Font Size','WEBHUNT_LPC'); ?> :</label>
										<div class="section col-md-4 col-sm-5 spacer-t20">
											<div class="slider-wrapper">
												<div id="sinputTextFontSize"></div>
											</div><!-- end .slider-wrapper -->
										</div>
										<div class="col-md-3 col-sm-3 spacer-t7">
											<input type="text" name="inputTextFontSize" id="inputTextFontSize" class="slider-text" readonly><span style="color:#f6931f"><?php _e('px','WEBHUNT_LPC'); ?></span> 
										</div>     
									</div> <!-- End of 'Input Text Font Size' Section -->
									
									<div class="col-md-12">
										<label class="field-label col-md-3 col-sm-4 align-left"><?php _e('Remember Font Size','WEBHUNT_LPC'); ?> :</label>
										<div class="section col-md-4 col-sm-5 spacer-t20">
											<div class="slider-wrapper">
												<div id="srememberMeFontSize"></div>
											</div><!-- end .slider-wrapper -->
										</div>
										<div class="col-md-3 col-sm-3 spacer-t7">
											<input type="text" name="rememberMeFontSize" id="rememberMeFontSize" class="slider-text" readonly><span style="color:#f6931f"><?php _e('px','WEBHUNT_LPC'); ?></span> 
										</div>     
									</div> <!-- End of 'Remember Font Size' Section -->
									
									<div class="col-md-12">
										<label class="field-label col-md-3 col-sm-4 align-left"><?php _e('Input Border Radious','WEBHUNT_LPC'); ?> :</label>
										<div class="section col-md-4 col-sm-5 spacer-t20">
											<div class="slider-wrapper">
												<div id="sinputBorderRadius"></div>
											</div><!-- end .slider-wrapper -->
										</div>
										<div class="col-md-3 col-sm-3 spacer-t7">
											<input type="text" name="inputBorderRadius" id="inputBorderRadius" class="slider-text" readonly><span style="color:#f6931f"><?php _e('px','WEBHUNT_LPC'); ?></span> 
										</div>     
									</div> <!-- End of 'Input Border Radious' Section -->
									
								</div><!-- end .frm-row section -->
								
								
								<div class="frm-row network-header spacer-t30">
									<div class="section col-md-9">
										<h4 style="font: bold 22px Arial, sans-serif;"><?php _e('Input Field Label & Placeholders','WEBHUNT_LPC'); ?></h4>
									</div><!-- end section -->
								</div>
								<div class="frm-row frm-bg">
									<div class="col-md-12">
										<label class="field-label col-md-3 col-sm-4 align-left"><?php _e('User Name Label','WEBHUNT_LPC'); ?> :</label>
										<div class="section col-md-6 col-sm-8">
											<label class="field prepend-icon">
												<input type="text" name="userLabel" id="userLabel" class="gui-input" placeholder="Type username or email label text" value="<?php echo $userLabel; ?>" >
												<span class="field-icon"><i class="fa fa-edit"></i></span>
											</label>
										</div><!-- end section -->
									</div><!-- end col section -->
									
									<div class="col-md-12">
										<label class="field-label col-md-3 col-sm-4 align-left"><?php _e('User Name Placeholder','WEBHUNT_LPC'); ?> :</label>
										<div class="section col-md-6 col-sm-8">
											<label class="field prepend-icon">
												<input type="text" name="userPlaceholder" id="userPlaceholder" class="gui-input" placeholder="Type username or email placeholder text" value="<?php echo $userPlaceholder; ?>" >
												<span class="field-icon"><i class="fa fa-edit"></i></span>
											</label>
										</div><!-- end section -->
									</div><!-- end col section -->
									
									<div class="col-md-12">
										<label class="field-label col-md-3 col-sm-4 align-left"><?php _e('Password Label','WEBHUNT_LPC'); ?> :</label>
										<div class="section col-md-6 col-sm-8">
											<label class="field prepend-icon">
												<input type="text" name="pwdLabel" id="pwdLabel" class="gui-input" placeholder="Type password label text" value="<?php echo $pwdLabel; ?>" >
												<span class="field-icon"><i class="fa fa-edit"></i></span>
											</label>
										</div><!-- end section -->
									</div><!-- end col section -->
									
									<div class="col-md-12">
										<label class="field-label col-md-3 col-sm-4 align-left"><?php _e('Password Placeholder','WEBHUNT_LPC'); ?> :</label>
										<div class="section col-md-6 col-sm-8">
											<label class="field prepend-icon">
												<input type="text" name="pwdPlaceholder" id="pwdPlaceholder" class="gui-input" placeholder="Type password field placeholder text" value="<?php echo $pwdPlaceholder; ?>" >
												<span class="field-icon"><i class="fa fa-edit"></i></span>
											</label>
										</div><!-- end section -->
									</div><!-- end col section -->
								</div><!-- end .frm-row section -->	
								
								<div class="frm-row network-header spacer-t30">
									<div class="section col-md-9">
										<h4 style="font: bold 22px Arial, sans-serif;"><?php _e('Icon For Input Box','WEBHUNT_LPC'); ?></h4>
									</div><!-- end section -->
								</div>
								
								<div class="frm-row frm-bg">
									<div class="col-md-12"><!-- Enable Input Box Icon-->
										<label class="field-label col-md-3 col-sm-4 align-left"><?php _e('Enable Input Box Icon','WEBHUNT_LPC'); ?> :</label>
										<div class="section col-md-8 col-sm-8">
											<label class="switch block">
											  <input type="hidden" name="enableInputIcon" value="false">
											  <input type="checkbox" name="enableInputIcon" id="enableInputIcon" value="true" <?php if($enableInputIcon == 'true' ) { echo "checked"; } ?>>
											  <span class="switch-label" data-on="ON" data-off="OFF"></span>
											  <span> <?php _e(' ON/OFF ','WEBHUNT_LPC'); ?> </span>
											</label>
											<p class="medium-text fine-grey"><?php _e('Switch it ON/OFF to enable/disable Input Box Icon.','WEBHUNT_LPC'); ?></p>
										</div>
									</div><!-- End of "Enable Input Box Icon" Section -->
									
									<div class="col-md-12">
										<label class="field-label col-md-3 col-sm-4 align-left"><?php _e('User Input Box','WEBHUNT_LPC'); ?> :</label>
										<div class="section col-md-6 col-sm-8">
											<label class="field prepend-icon">
												<input type="text" name="userInputIcon" id="userInputIcon" class="gui-input" placeholder="Icon for User Input Box" value="<?php echo $userInputIcon; ?>" >
												<span class="field-icon"><i class="fa fa-edit"></i></span>
											</label>
											<p class="medium-text fine-grey spacer-t7"><?php _e('Get icon from','WEBHUNT_LPC'); ?> <a href="https://fontawesome.com/v4.7.0/icons/" target="_blank"> <?php _e('here','WEBHUNT_LPC'); ?></a>.</p>
										</div><!-- end section -->
										
									</div><!-- end col section -->
									
									<div class="col-md-12">
										<label class="field-label col-md-3 col-sm-4 align-left"><?php _e('Password Input Box','WEBHUNT_LPC'); ?> :</label>
										<div class="section col-md-6 col-sm-8">
											<label class="field prepend-icon">
												<input type="text" name="pwdInputIcon" id="pwdInputIcon" class="gui-input" placeholder="Icon for Password Input Box" value="<?php echo $pwdInputIcon; ?>" >
												<span class="field-icon"><i class="fa fa-edit"></i></span>
											</label>
										</div><!-- end section -->
									</div><!-- end col section -->
								</div>
									
							</div><!-- /.col -->
						</div><!-- end .frm-row section --> 
					</div><!-- end .form-body section -->
					<div class="form-footer">
						<input type="button" class="button btn-primary" onclick="wh_lpc_save_data('input_field')" value="<?php _e('Save Changes','WEBHUNT_LPC'); ?>">
						<input type="button" class="button btn-primary btn-gray" onclick="wh_lpc_reset_data('input_field')" value="<?php _e('Reset Section','WEBHUNT_LPC'); ?>">
						<input type="button" class="button btn-primary btn-gray" onclick="wh_lpc_reset_all_data()" value="<?php _e('Reset All','WEBHUNT_LPC'); ?>">
					</div><!-- end .form-footer section -->
				</form>
				
			</div><!-- end .smart-forms section -->
		</div><!-- end .smart-wrap section -->
	</body>
</section><!-- /.content -->
<script>
jQuery(document).ready(function(){

	/* INPUT FIELD LAEBL FONT SIZE */	
	jQuery( "#sinputLabelFontSize" ).slider({
		range: "min",
		value: <?php echo $inputLabelFontSize; ?>,
		min: 8,
		max: 32,
		step: 1,
		slide: function(event, ui) {
			jQuery("#inputLabelFontSize").val( ui.value );
		}
	});
	jQuery("#inputLabelFontSize").val( 
		jQuery("#sinputLabelFontSize").slider("value")
	);
	
	/* INPUT FIELD TEXT FONT SIZE */	
	jQuery( "#sinputTextFontSize" ).slider({
		range: "min",
		value: <?php echo $inputTextFontSize; ?>,
		min: 8,
		max: 32,
		step: 1,
		slide: function(event, ui) {
			jQuery("#inputTextFontSize").val( ui.value );
		}
	});
	jQuery("#inputTextFontSize").val( 
		jQuery("#sinputTextFontSize").slider("value")
	);
	
	/* REMEMBER ME TEXT FONT SIZE */
	jQuery( "#srememberMeFontSize" ).slider({
		range: "min",
		value: <?php echo $rememberMeFontSize; ?>,
		min: 8,
		max: 32,
		step: 1,
		slide: function(event, ui) {
			jQuery("#rememberMeFontSize").val( ui.value );
		}
	});
	jQuery("#rememberMeFontSize").val( 
		jQuery("#srememberMeFontSize").slider("value")
	);
	
	/* INPUT BOX BORDER RADIUS SIZE */
	jQuery( "#sinputBorderRadius" ).slider({
		range: "min",
		value: <?php echo $inputBorderRadius; ?>,
		min: 0,
		max: 32,
		step: 1,
		slide: function(event, ui) {
			jQuery("#inputBorderRadius").val( ui.value );
		}
	});
	jQuery("#inputBorderRadius").val( 
		jQuery("#sinputBorderRadius").slider("value")
	);
	
	jQuery("input[name='enableLinkShadow']").click(function() {
		var value = jQuery("input[name='enableLinkShadow']").val();
		enableCustomColor(value);
	});
	enableCustomColor("<?php echo $enableLinkShadow; ?>");
});

function enableCustomColor(value) {
    if(jQuery("input[name='enableLinkShadow']").is(':checked')){
		jQuery(".linkShadowColor").show();
	}else{
		jQuery(".linkShadowColor").hide();
	}
}
</script>