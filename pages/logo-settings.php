<!-- Logo Settings panel content --- >
<!----------------------------------------> 
<?php
// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) exit;
?>
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    <?php _e('LOGO SETTINGS','WEBHUNT_LPC'); ?>
    <small><?php _e('Custom Login Page','WEBHUNT_LPC'); ?></small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-paint-brush"></i> <?php _e('Settings','WEBHUNT_LPC'); ?></a></li>
    <li class="active"><?php _e('Logo Settings','WEBHUNT_LPC'); ?></li>
  </ol>
</section>
<!-- Main content -->
<section class="content">
   <body class="woodbg">
		<div class="smart-wrap">
			<div class="smart-forms smart-container wrap-2">
				
				<form method="post" name="myform" id="lpc_plugin_options_logo">
					<div class="form-body">
						
						<div class="frm-row">
							<div class="col-md-12">
							
								<div class="frm-row network-header">
									<div class="section col-md-1 col-sm-1" style="padding-right:1px;">
										<img src="<?php echo  WEBHUNT_LPC_PLUGIN_URL.'assets/img/logo-page.png'; ?>" alt="dashboard-icon" style="margin-top: 4px; padding:0px;" data-pin-nopin="true">
									</div>
									<div class="section col-md-9 col-sm-10" style="margin-bottom: 0px;">
										<h4 style="font: bold 22px Arial, sans-serif;"><?php _e('Select Logo Style','WEBHUNT_LPC'); ?></h4>
									</div><!-- end section -->
								</div>
									
								<div class="frm-row frm-bg">
									<div class="col-md-12">
										<div class="section col-md-9 col-sm-12">
											<div class="option-group field">
												<label class="option">
													<input type="radio" name="logoType" value="img" <?php if($logoType == "img"){ echo "checked"; } ?>>
													<span class="radio"></span> <?php _e('Logo Image','WEBHUNT_LPC'); ?>
												</label>
												<label class="option">
													<input type="radio" name="logoType" value="text" <?php if($logoType == "text"){ echo "checked"; } ?>>
													<span class="radio"></span> <?php _e('Logo Text','WEBHUNT_LPC'); ?>
												</label>
												<label class="option">
													<input type="radio" name="logoType" value="none" <?php if($logoType == "none"){ echo "checked"; } ?>>
													<span class="radio"></span> <?php _e('None','WEBHUNT_LPC'); ?>
												</label>
											</div>
										</div>
									</div><!-- end col section -->	
								</div><!-- end .frm-row section -->
								
								<div class="frm-row network-header spacer-t30 tDisplySec">
									<div class="section col-md-12 options img" style="margin-bottom: 0px;">
										<h4 style="font: bold 22px Arial, sans-serif;"><?php _e('Logo Image Settings','WEBHUNT_LPC'); ?></h4>
									</div><!-- end section -->
								</div>
								
								<div class="frm-row frm-bg tDisplySec">
									
									<div class="col-md-12 options img">
										<label class="field-label col-md-3 col-sm-4 align-left"><?php _e('Upload Logo','WEBHUNT_LPC'); ?> :</label>
										<div class="section col-md-8 col-sm-8">
										<div class="lpc-single-image-div">
											<img id='image-preview' src='<?php echo $logoImageUrl; ?>' class='lpc-single-image'>
											<input name="upload_image_button" type="button" class="button-primary lpc_image_uploader" value="<?php _e( 'Upload Image' ); ?>" />
											<input type='hidden' name='logoImageUrl' id='logoImageUrl' value='<?php echo $logoImageUrl; ?>'>
											</div>
										</div><!-- end section -->
									</div><!-- end col section -->
									
									<div class="col-md-12 spacer-b10">
										<label class="field-label col-md-3 col-sm-4 align-left"><?php _e('Logo Width','WEBHUNT_LPC'); ?> :</label>
										<div class="section col-md-4 col-sm-5 spacer-t20">
											<div class="slider-wrapper">
												<div id="slogoWidth"></div>
											</div><!-- end .slider-wrapper -->
										</div>
										<div class="col-md-3 col-sm-3 spacer-t7">
											<input type="text" name="logoWidth" id="logoWidth" class="slider-text" readonly><span style="color:#f6931f"><?php _e('px','WEBHUNT_LPC'); ?></span> 
										</div>     
									</div> <!-- End of 'Logo Width' Section -->

									<div class="col-md-12 spacer-b10">
										<label class="field-label col-md-3 col-sm-4 align-left"><?php _e('Logo Height','WEBHUNT_LPC'); ?> :</label>
										<div class="section col-md-4 col-sm-5 spacer-t20">
											<div class="slider-wrapper">
												<div id="slogoHeight"></div>
											</div>
										</div>
										<div class="col-md-3 col-sm-3 spacer-t7">
											<input type="text" id="logoHeight" class="slider-text" name="logoHeight" readonly><span style="color:#f6931f"><?php _e('px','WEBHUNT_LPC'); ?></span> 
										</div>
									</div> <!-- End of 'Logo Height' Section -->

								</div><!-- end .frm-row section -->
								
								
								<div class="frm-row network-header spacer-t30 tDisplySec">
									<div class="section col-md-12 options text" style="margin-bottom: 0px;">
										<h4 style="font: bold 22px Arial, sans-serif;"><?php _e('Logo Text Settings','WEBHUNT_LPC'); ?></h4>
									</div><!-- end section -->
								</div>
								
								<div class="frm-row frm-bg tDisplySec">
								
									<div class="col-md-12 spacer-t10 options text">
										<label class="field-label col-md-3 col-sm-4 align-left"><?php _e('Logo Text','WEBHUNT_LPC'); ?> :</label>
										<div class="section col-md-7 col-sm-8">
											<label class="field prepend-icon">
												<input type="text" name="logoText" id="logoText" class="gui-input" placeholder="Enter Logo Link URL" value="<?php echo $logoText; ?>">
												<span class="field-icon"><i class="fa fa-edit"></i></span>
											</label>
										</div><!-- end section -->
									</div><!-- end col section -->
									
									<div class="col-md-12">
										<label class="field-label col-md-3 col-sm-4 align-left"><?php _e('Text Color','WEBHUNT_LPC'); ?> :</label>
										<div class="section col-md-4 col-sm-8">
											<label class="field sfcolor">
												<input type="text" id="logoTextColor" name="logoTextColor" value="<?php echo $logoTextColor;?>" class="gui-input">
											</label>
										</div>
									</div><!-- end col section -->
									
									<div class="col-md-12">
										<label class="field-label col-md-3 col-sm-4 align-left"><?php _e('Font Size','WEBHUNT_LPC'); ?> :</label>
										<div class="section col-md-4 col-sm-5 spacer-t20">
											<div class="slider-wrapper">
												<div id="slogoSize"></div>
											</div><!-- end .slider-wrapper -->
										</div>
										<div class="col-md-3 col-sm-3 spacer-t7">
											<input type="text" name="logoSize" id="logoSize" class="slider-text" readonly><span style="color:#f6931f"><?php _e('px','WEBHUNT_LPC'); ?></span> 
										</div>     
									</div>

								</div><!-- end .frm-row section -->
								
								<div class="frm-row tDisplySec" style="background: #f3f3f3;">
									
									<div class="col-md-12 options img text">
										<label class="field-label col-md-3 col-sm-4 align-left"><?php _e('Space Top','WEBHUNT_LPC'); ?> :</label>
										<div class="section col-md-4 col-sm-5 spacer-t20">
											<div class="slider-wrapper">
												<div id="slogoSpaceTop"></div>
											</div>
										</div>
										<div class="col-md-3 col-sm-3 spacer-t7">
											<input type="text" id="logoSpaceTop" class="slider-text" name="logoSpaceTop" readonly><span style="color:#f6931f"><?php _e('px','WEBHUNT_LPC'); ?></span> 
										</div>
									</div> <!-- End of 'Space Top' Section -->
									
								</div>
								
								<div class="frm-row tDisplySec" style="background: #f3f3f3;">
									
									<div class="col-md-12 spacer-b10 options img text">
										<label class="field-label col-md-3 col-sm-4 align-left"><?php _e('Space Bottom','WEBHUNT_LPC'); ?> :</label>
										<div class="section col-md-4 col-sm-5 spacer-t20">
											<div class="slider-wrapper">
												<div id="slogoSpaceBottom"></div>
											</div>
										</div>
										<div class="col-md-3 col-sm-3 spacer-t7">
											<input type="text" id="logoSpaceBottom" class="slider-text" name="logoSpaceBottom" readonly><span style="color:#f6931f"><?php _e('px','WEBHUNT_LPC'); ?></span> 
										</div>
									</div> <!-- End of 'Space Bottom' Section -->
									
								</div>
								
								<div class="frm-row tDisplySec" style="background: #f3f3f3;">
								
									<div class="col-md-12 spacer-t10 options img">
										<label class="field-label col-md-3 col-sm-4 align-left"><?php _e('Logo Link URL','WEBHUNT_LPC'); ?> :</label>
										<div class="section col-md-7 col-sm-8">
											<label class="field prepend-icon">
												<input type="text" name="logoLinkURL" id="logoLinkURL" class="gui-input" placeholder="Enter Logo Link URL" value="<?php echo $logoLinkURL; ?>">
												<span class="field-icon"><i class="fa fa-link"></i></span>
											</label>
										</div><!-- end section -->
									</div><!-- end col section -->
									
									<div class="col-md-12 spacer-t10 options img">
										<label class="field-label col-md-3 col-sm-4 align-left"><?php _e('Logo Hover Title','WEBHUNT_LPC'); ?> :</label>
										<div class="section col-md-7 col-sm-8">
											<label class="field prepend-icon">
												<input type="text" name="logoTitle" id="logoTitle" class="gui-input" placeholder="Enter Your Logo Title" value="<?php echo $logoTitle; ?>">
												<span class="field-icon"><i class="fa fa-edit"></i></span>
											</label>
										</div><!-- end section -->
									</div><!-- end col section -->
								</div>
								
							</div><!-- /.col -->
						</div><!-- end .frm-row section --> 
					</div><!-- end .form-body section -->
					<div class="form-footer">
						<input type="button" class="button btn-primary" onclick="wh_lpc_save_data('logo')" value="<?php _e('Save Changes','WEBHUNT_LPC'); ?>">
						<input type="button" class="button btn-primary btn-gray" onclick="wh_lpc_reset_data('logo')" value="<?php _e('Reset Section','WEBHUNT_LPC'); ?>">
						<input type="button" class="button btn-primary btn-gray" onclick="wh_lpc_reset_all_data()" value="<?php _e('Reset All','WEBHUNT_LPC'); ?>">
					</div><!-- end .form-footer section -->
				</form>
				
			</div><!-- end .smart-forms section -->
		</div><!-- end .smart-wrap section -->
	</body>
</section><!-- /.content -->
<script type="text/javascript">
jQuery(document).ready(function(){	

	/* LOGO IMAGE WIDTH */
	jQuery( "#slogoWidth" ).slider({
		range: "min",
		value: <?php echo $logoWidth; ?>,
		min: 50,
		max: 400,
		slide: function(event, ui) {
			jQuery("#logoWidth").val( ui.value );
		}
	});		
	jQuery("#logoWidth").val( 
		jQuery("#slogoWidth").slider("value")
	);	

	/* LOGO IMAGE HEIGHT */
	jQuery( "#slogoHeight" ).slider({
		range: "min",
		value: <?php echo $logoHeight; ?>,
		min: 40,
		max: 200,
		slide: function(event, ui) {
			jQuery("#logoHeight").val( ui.value );
		}
	});
	jQuery("#logoHeight").val( 
		jQuery("#slogoHeight").slider("value")
	);
	
	/* LOGO TOP SPACE */
	jQuery( "#slogoSpaceTop" ).slider({
		range: "min",
		value: <?php echo $logoSpaceTop; ?>,
		min: 0,
		max: 50,
		slide: function(event, ui) {
			jQuery("#logoSpaceTop").val( ui.value );
		}
	});
	jQuery("#logoSpaceTop").val( 
		jQuery("#slogoSpaceTop").slider("value")
	);
	
	/* LOGO BOTTOM SPACE */
	jQuery( "#slogoSpaceBottom" ).slider({
		range: "min",
		value: <?php echo $logoSpaceBottom; ?>,
		min: 0,
		max: 50,
		slide: function(event, ui) {
			jQuery("#logoSpaceBottom").val( ui.value );
		}
	});
	jQuery("#logoSpaceBottom").val( 
		jQuery("#slogoSpaceBottom").slider("value")
	);	
	
	/* TEXT LOGO SIZE */
	jQuery( "#slogoSize" ).slider({
		range: "min",
		value: <?php echo $logoSize; ?>,
		min: 18,
		max: 56,
		slide: function(event, ui) {
			jQuery("#logoSize").val( ui.value );
		}
	});
	jQuery("#logoSize").val( 
		jQuery("#slogoSize").slider("value")
	);
	
	/* FUNCTION CALLING WHEN LOGO STYLE OPTION IS CHANGED */
	logo_style_changed("<?php echo $logoType; ?>");
	jQuery('input[type=radio][name=logoType]').change(function() {  
		logo_style_changed(jQuery(this).val());
	});
});

/* FUNCTION SHOW OPTION ACCORDING TO LOGO STYLE */
function logo_style_changed(option){
	jQuery('#lpc_plugin_options_logo .options:not(.' + option + ')').parents('.tDisplySec').hide();
	jQuery('#lpc_plugin_options_logo .options.' + option).parents('.tDisplySec').show();
}
</script>