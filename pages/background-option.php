<!-- Background Settings panel content --- >
<!----------------------------------------> 	
<?php
// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) exit;
?>
<!-- Header Content -->
<section class="content-header">
  <h1>
    <?php _e('BACKGROUND OPTIONS','WEBHUNT_LPC'); ?>
    <small><?php _e('Custom Login Page','WEBHUNT_LPC'); ?></small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-picture-o"></i> <?php _e('Background','WEBHUNT_LPC'); ?></a></li>
  </ol>
</section>
<!-- Main content -->
<section class="content">
   <body class="woodbg">
		<div class="smart-wrap">
			<div class="smart-forms smart-container wrap-2">
				
				<form method="post" name="myform" id="lpc_plugin_options_background" novalidate>
					<div class="form-body">
						
						<div class="frm-row">
							<div class="col-md-12">
							
								<div class="frm-row network-header">
									<div class="section col-md-9">
										<h4 style="font: bold 22px Arial, sans-serif;"><?php _e('BACKGROUND OPTIONS','WEBHUNT_LPC'); ?></h4>
									</div><!-- end section -->
								</div>	

								<div class="frm-row frm-bg tDisplySec">
								
									<div class="col-md-12">
										<label class="field-label col-md-3 col-sm-4 align-left"><?php _e('Select Background','WEBHUNT_LPC'); ?> :</label>
										<div class="section col-md-5 col-sm-8">
											<label class="field select">
												<select name="tBgType" id="tBgType">
													<optgroup label="Select Background Option">
														<option value="bgcolor" <?php selected($tBgType, 'bgcolor' ); ?> > <?php _e('Flate Background Color','WEBHUNT_LPC'); ?> </option>
														<option value="bgimage" <?php selected($tBgType, 'bgimage' ); ?> > <?php _e('Background Image','WEBHUNT_LPC'); ?> </option>
													</optgroup>
												</select>
												<i class="arrow double"></i>
											</label>
										</div><!-- end section -->
									</div><!-- end col section -->
									
								</div><!-- end .frm-row section -->
								
								<div class="frm-row network-header spacer-t30 tDisplySec">
									<div class="section colm colm9 options bgcolor" style="margin-bottom: 0px;">
										<h4 style="font: bold 22px Arial, sans-serif;"><?php _e('Color Background Settings','WEBHUNT_LPC'); ?></h4>
									</div><!-- end section -->
								</div>
								<div class="frm-row frm-bg tDisplySec">
									<div class="col-md-12">
										<label class="field-label col-md-3 col-sm-4 align-left"><?php _e('Choose Background Color','WEBHUNT_LPC'); ?></label>
										<div class="section col-md-4 col-sm-8">
											<label class="field sfcolor">
												<input type="text" id="tBgColor" name="tBgColor" value="<?php echo $tBgColor;?>" class="gui-input options bgcolor">
											</label>
										</div>
									</div><!-- end col section -->
								</div><!-- end .frm-row section -->
								
								<div class="frm-row frm-bg spacer-t30 tDisplySec">
								
									<div class="col-md-12 options bgimage">
										<div class="imageupload">
											<div class="panel-heading clearfix" style="margin: -10px 0px 10px 0px; border-bottom: 1px dashed #e7e7e7;">
												<h3 class="panel-title pull-left" style="font: bold 18px Arial, sans-serif;"><?php _e('Upload Background Image','WEBHUNT_LPC'); ?></h3>
											</div>
											<div class="file-tab panel-body" style="display: block;">
												<img src="<?php echo $tBgImage; ?>" alt="Image preview" class="thumbnail" style="max-width: 250px; max-height: 250px">
												<button type="button" name="upload_image_button" class="btn btn-default lpc_image_uploader" style="display: inline-block;"><?php _e( 'Upload Image' ); ?></button>
												<input type='hidden' name='tBgImage' id='tBgImage' value='<?php echo $tBgImage; ?>'>
												<button type="button" class="btn btn-default file_img_remove"><?php _e('Remove','WEBHUNT_LPC'); ?></button>
											</div>
										</div>
									</div><!-- end col section -->
									
								</div><!-- end .frm-row section -->

								
								<div class="frm-row network-header tDisplySec spacer-t30">
									<div class="section col-md-9 options bgimage" style="margin-bottom: 0px;">
										<h4 style="font: bold 22px Arial, sans-serif;"><?php _e('Background Image Option','WEBHUNT_LPC'); ?></h4>
									</div><!-- end section -->
								</div>
								<div class="frm-row frm-bg tDisplySec">
									<div class="col-md-12 options bgimage">
										<label class="field-label col-md-3 col-sm-4 align-left"><?php _e('Background Repeat','WEBHUNT_LPC'); ?> :</label>
										<div class="section col-md-5 col-sm-8">
											<label class="field select">
												<select name="bgRepeat" id="bgRepeat">
													<optgroup label="Select Background Repeat Option">
														<option value="repeat" <?php selected($bgRepeat, 'repeat' ); ?>><?php _e('repeat','WEBHUNT_LPC'); ?></option>
														<option value="repeat-x" <?php selected($bgRepeat, 'repeat-x' ); ?>><?php _e('repeat-x','WEBHUNT_LPC'); ?></option>
														<option value="repeat-y" <?php selected($bgRepeat, 'repeat-y' ); ?>><?php _e('repeat-y','WEBHUNT_LPC'); ?></option>
														<option value="no-repeat" <?php selected($bgRepeat, 'no-repeat' ); ?>><?php _e('no-repeat','WEBHUNT_LPC'); ?></option>
														<option value="initial" <?php selected($bgRepeat, 'initial' ); ?>><?php _e('initial','WEBHUNT_LPC'); ?></option>
														<option value="inherit" <?php selected($bgRepeat, 'inherit' ); ?>><?php _e('inherit','WEBHUNT_LPC'); ?></option>
													</optgroup>
												</select>
												<i class="arrow double"></i>
											</label>
										</div><!-- end section -->
									</div><!-- end col section -->
									
									<div class="col-md-12">
										<label class="field-label col-md-3 col-sm-4 align-left"><?php _e('Image Position','WEBHUNT_LPC'); ?> :</label>
										<div class="section col-md-5 col-sm-8">
											<label class="field select">
												<select name="bgPosition" id="bgPosition">
													<optgroup label="Select Image Position">
														<option value="left top" <?php selected($bgPosition, 'left top' ); ?>><?php _e('left top','WEBHUNT_LPC'); ?></option>
														<option value="left center" <?php selected($bgPosition, 'left center' ); ?>><?php _e('left center','WEBHUNT_LPC'); ?></option>
														<option value="left bottom" <?php selected($bgPosition, 'left bottom' ); ?>><?php _e('left bottom','WEBHUNT_LPC'); ?></option>
														<option value="right top" <?php selected($bgPosition, 'right top' ); ?>><?php _e('right top','WEBHUNT_LPC'); ?></option>
														<option value="right center" <?php selected($bgPosition, 'right center' ); ?>><?php _e('right center','WEBHUNT_LPC'); ?></option>
														<option value="right bottom" <?php selected($bgPosition, 'right bottom' ); ?>><?php _e('right bottom','WEBHUNT_LPC'); ?></option>
														<option value="center top" <?php selected($bgPosition, 'center top' ); ?>><?php _e('center top','WEBHUNT_LPC'); ?></option>
														<option value="center" <?php selected($bgPosition, 'center' ); ?>><?php _e('center','WEBHUNT_LPC'); ?></option>
														<option value="center bottom" <?php selected($bgPosition, 'center bottom' ); ?>><?php _e('center bottom','WEBHUNT_LPC'); ?></option>
													</optgroup>
												</select>
												<i class="arrow double"></i>
											</label>
										</div><!-- end section -->
									</div><!-- end col section -->
									
									<div class="col-md-12">
										<label class="field-label col-md-3 col-sm-4 align-left"><?php _e('Background Image Size','WEBHUNT_LPC'); ?> :</label>
										<div class="section col-md-5 col-sm-8">
											<label class="field select">
												<select name="bgImageSize" id="bgImageSize">
													<optgroup label="Select Background Image Size">
														<option value="auto" <?php selected($bgImageSize, 'auto' ); ?>><?php _e('auto','WEBHUNT_LPC'); ?></option>
														<option value="cover" <?php selected($bgImageSize, 'cover' ); ?>><?php _e('cover','WEBHUNT_LPC'); ?></option>
														<option value="contain" <?php selected($bgImageSize, 'contain' ); ?>><?php _e('contain','WEBHUNT_LPC'); ?></option>
														<option value="initial" <?php selected($bgImageSize, 'initial' ); ?>><?php _e('initial','WEBHUNT_LPC'); ?></option>
														<option value="inherit" <?php selected($bgImageSize, 'inherit' ); ?>><?php _e('inherit','WEBHUNT_LPC'); ?></option>
													</optgroup>
												</select>
												<i class="arrow double"></i>
											</label>
										</div><!-- end section -->
									</div><!-- end col section -->
								</div><!-- end .frm-row section -->
								
								
								<div class="frm-row network-header spacer-t30 tDisplySec">
									<div class="section col-md-9 options bgimage" style="margin-bottom: 0px;">
										<h4 style="font: bold 22px Arial, sans-serif;"><?php _e('Background Image Overlay Settings','WEBHUNT_LPC'); ?></h4>
									</div><!-- end section -->
								</div>
								
								<div class="frm-row frm-bg tDisplySec">
								
									<div class="col-md-12 options bgimage">
										<label class="field-label col-md-3 col-sm-4 align-left"><?php _e('Enable Overlay Color','WEBHUNT_LPC'); ?> :</label>
										<div class="section col-md-8 col-sm-8">
											<label class="switch block">
											  <input type="hidden" name="bgImgOverlay" value="false">
											  <input type="checkbox" name="bgImgOverlay" id="bgImgOverlay" value="true" <?php if($bgImgOverlay == 'true' ) { echo "checked"; } ?>>
											  <span class="switch-label" data-on="ON" data-off="OFF"></span>
											  <span> <?php _e('ON/OFF','WEBHUNT_LPC'); ?> </span>
											</label>
											<p class="medium-text fine-grey"><?php _e('Switch it ON/OFF to enable/disable Login Page Background Overlay.','WEBHUNT_LPC'); ?></p>
										</div>
									</div><!-- End of 'Enable Overlay Color' Section -->
								
									<div class="col-md-12">
										<label class="field-label col-md-3 col-sm-4 align-left"><?php _e('Overlay Color','WEBHUNT_LPC'); ?> :</label>
										<div class="section col-md-8 col-sm-8">
											<label class="field sfcolor colm6">
												<input type="text" id="bgOverlayColor" name="bgOverlayColor" value="<?php echo $bgOverlayColor;?>" class="gui-input">
											</label>
											<p class="medium-text fine-grey"><?php _e("Overlay color doesn't mean Login Page background color","WEBHUNT_LPC");?>.<br/> 
											<?php _e("It's overlay color on Background Image","WEBHUNT_LPC"); ?>.
											</p>
										</div>
									</div><!-- End of 'Overlay Color' Section -->
									
									<div class="col-md-12">
										<label class="field-label col-md-3 col-sm-4 align-left"><?php _e('Overlay Color Opacity','WEBHUNT_LPC'); ?> :</label>
										<div class="section col-md-4 col-sm-5 spacer-t20 spacer-b30">
											<div class="slider-wrapper">
												<div id="sbgOverlayOpacity"></div>
											</div><!-- end .slider-wrapper -->
										</div>
										<div class="col-md-3 col-sm-3 spacer-t7">
											<input type="text" name="bgOverlayOpacity" id="bgOverlayOpacity" class="slider-text" readonly><span style="color:#f6931f"><?php _e('%','WEBHUNT_LPC'); ?></span> 
										</div>     
									</div> <!-- End of 'Overlay Color Opacity' Section -->

								</div><!-- end .frm-row section -->
								
							</div><!-- /.col -->
						</div><!-- end .frm-row section --> 
					</div><!-- end .form-body section -->
					<div class="form-footer">
						<input type="button" class="button btn-primary" onclick="wh_lpc_save_data('background')" value="<?php _e('Save Changes','WEBHUNT_LPC'); ?>">
						<input type="button" class="button btn-primary btn-gray" onclick="wh_lpc_reset_data('background')" value="<?php _e('Reset Section','WEBHUNT_LPC'); ?>">
						<input type="button" class="button btn-primary btn-gray" onclick="wh_lpc_reset_all_data()" value="<?php _e('Reset All','WEBHUNT_LPC'); ?>">
					</div><!-- end .form-footer section -->
				</form>
				
			</div><!-- end .smart-forms section -->
		</div><!-- end .smart-wrap section -->
	</body>
</section><!-- /.content -->
<script>
jQuery(document).ready(function(jQuery){
		
	/* TEXT LOGO SIZE */
	jQuery( "#sbgOverlayOpacity" ).slider({
		range: "min",
		value: <?php echo $bgOverlayOpacity; ?>,
		min: 0,
		max: 100,
		step: 1,
		slide: function(event, ui) {
			jQuery("#bgOverlayOpacity").val( ui.value );
		}
	});
	jQuery("#bgOverlayOpacity").val( 
		jQuery("#sbgOverlayOpacity").slider("value")
	);
	
	/* FUNCTION CALLING TO CHANGE BACKGROUND SETTINGS */
	backgroundChanged("<?php echo $tBgType; ?>");
	jQuery("#tBgType").change(function () {     
		backgroundChanged(jQuery(this).val());
	});
});	

/* FUNCTION TO CHANGE BACKGROUND SETTINGS */
function backgroundChanged(template){
	jQuery('#lpc_plugin_options_background .options:not(.' + template + ')').parents('.tDisplySec').hide();
	jQuery('#lpc_plugin_options_background .options.' + template).parents('.tDisplySec').show();
}	
</script>