<!-- Button Bueaty Settings panel content --- >
<!----------------------------------------> 	
<?php
// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) exit;
?>
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    <?php _e('BUTTON BEAUTY','WEBHUNT_LPC'); ?>
    <small><?php _e('Custom Login Page','WEBHUNT_LPC'); ?></small>
  </h1>
  <ol class="breadcrumb">
	<li><a href="#"><i class="fa fa-paint-brush"></i> <?php _e('Settings','WEBHUNT_LPC'); ?></a></li>
    <li class="active"><?php _e('Button Bueaty','WEBHUNT_LPC'); ?></li>
  </ol>
</section>
<!-- Main content -->
<section class="content">
   <body class="woodbg">
		<div class="smart-wrap">
			<div class="smart-forms smart-container wrap-2">
				
				<form method="post" name="myform" id="lpc_plugin_options_button">
					<div class="form-body">
						
						<div class="frm-row">
							<div class="col-md-12">
							
								<div class="frm-row network-header">
									<div class="section col-md-9" style="margin-bottom: 0px;">
										<h4 style="font: bold 22px Arial, sans-serif;"><?php _e('Button Beauty Color Option','WEBHUNT_LPC'); ?></h4>
									</div><!-- end section -->
								</div>

								<div class="frm-row frm-bg">
									
									<div class="col-md-12">
										<label class="field-label col-md-3 col-sm-4 align-left"><?php _e('Button BG Color','WEBHUNT_LPC'); ?> :</label>
										<div class="section col-md-4 col-sm-8">
											<label class="field sfcolor">
												<input type="text" id="btnColor" name="btnColor" value="<?php echo $btnColor;?>" class="gui-input">
											</label>
										</div>
									</div><!-- end col section -->
									
									<div class="col-md-12">
										<label class="field-label col-md-3 col-sm-4 align-left"><?php _e('Border Color','WEBHUNT_LPC'); ?> :</label>
										<div class="section col-md-4 col-sm-8">
											<label class="field sfcolor">
												<input type="text" id="btnBorderColor" name="btnBorderColor" value="<?php echo $btnBorderColor;?>" class="gui-input">
											</label>
										</div>
									</div><!-- end col section -->
									
									<div class="col-md-12">
										<label class="field-label col-md-3 col-sm-4 align-left"><?php _e('Button BG Color (Hover)','WEBHUNT_LPC'); ?> :</label>
										<div class="section col-md-4 col-sm-8">
											<label class="field sfcolor">
												<input type="text" id="btnColorH" name="btnColorH" value="<?php echo $btnColorH;?>" class="gui-input">
											</label>
										</div>
									</div><!-- end col section -->
									
									<div class="col-md-12">
										<label class="field-label col-md-3 col-sm-4 align-left"><?php _e('Border Color (Hover)','WEBHUNT_LPC'); ?> :</label>
										<div class="section col-md-4 col-sm-8">
											<label class="field sfcolor">
												<input type="text" id="btnBorderColorH" name="btnBorderColorH" value="<?php echo $btnBorderColorH;?>" class="gui-input">
											</label>
										</div>
									</div><!-- end col section -->
									
									<div class="col-md-12">
										<label class="field-label col-md-3 col-sm-4 align-left"><?php _e('Button Text Color','WEBHUNT_LPC'); ?> :</label>
										<div class="section col-md-4 col-sm-8">
											<label class="field sfcolor">
												<input type="text" id="btnTextColor" name="btnTextColor" value="<?php echo $btnTextColor;?>" class="gui-input">
											</label>
										</div>
									</div><!-- end col section -->
									
									<div class="col-md-12">
										<label class="field-label col-md-3 col-sm-4 align-left"><?php _e('Button Text Shadow','WEBHUNT_LPC'); ?> :</label>
										<div class="section col-md-4 col-sm-8">
											<label class="field sfcolor">
												<input type="text" id="btnTxtShadowColor" name="btnTxtShadowColor" value="<?php echo $btnTxtShadowColor;?>" class="gui-input">
											</label>
										</div>
									</div><!-- end col section -->
									
								</div><!-- end .frm-row section -->
								
								<div class="frm-row network-header spacer-t30">
									<div class="section col-md-9">
										<h4 style="font: bold 22px Arial, sans-serif;"><?php _e('Button Size Options','WEBHUNT_LPC'); ?></h4>
									</div><!-- end section -->
								</div>
								
								<div class="frm-row frm-bg">
								
									<div class="col-md-12">
										<label class="field-label col-md-3 col-sm-4 align-left"><?php _e('Button Size','WEBHUNT_LPC'); ?> :</label>
										<div class="section col-md-4 col-sm-5 spacer-t20">
											<div class="slider-wrapper">
												<div id="sbtnWidth"></div>
											</div><!-- end .slider-wrapper -->
										</div>
										<div class="col-md-3 col-sm-3 spacer-t7">
											<input type="text" name="btnWidth" id="btnWidth" class="slider-text" readonly><span style="color:#f6931f"><?php _e('%','WEBHUNT_LPC'); ?></span> 
										</div>     
									</div> <!-- End of 'Button Size' Section -->
									
									<div class="col-md-12">
										<label class="field-label col-md-3 col-sm-4 align-left"><?php _e('Button Top Padding','WEBHUNT_LPC'); ?> :</label>
										<div class="section col-md-4 col-sm-5 spacer-t20">
											<div class="slider-wrapper">
												<div id="sbtnTopPadding"></div>
											</div><!-- end .slider-wrapper -->
										</div>
										<div class="col-md-3 col-sm-3 spacer-t7">
											<input type="text" name="btnTopPadding" id="btnTopPadding" class="slider-text" readonly><span style="color:#f6931f"><?php _e('px','WEBHUNT_LPC'); ?></span> 
										</div>     
									</div> <!-- End of 'Button Top Padding' Section -->
									
									<div class="col-md-12">
										<label class="field-label col-md-3 col-sm-4 align-left"><?php _e('Button Bottom Padding','WEBHUNT_LPC'); ?> :</label>
										<div class="section col-md-4 col-sm-5 spacer-t20">
											<div class="slider-wrapper">
												<div id="sbtnBottomPadding"></div>
											</div><!-- end .slider-wrapper -->
										</div>
										<div class="col-md-3 col-sm-3 spacer-t7">
											<input type="text" name="btnBottomPadding" id="btnBottomPadding" class="slider-text" readonly><span style="color:#f6931f"><?php _e('px','WEBHUNT_LPC'); ?></span> 
										</div>     
									</div> <!-- End of 'Button Bottom Padding' Section -->
									
									<div class="col-md-12">
										<label class="field-label col-md-3 col-sm-4 align-left"><?php _e('Button Radius','WEBHUNT_LPC'); ?> :</label>
										<div class="section col-md-4 col-sm-5 spacer-t20">
											<div class="slider-wrapper">
												<div id="sbtnRadious"></div>
											</div><!-- end .slider-wrapper -->
										</div>
										<div class="col-md-3 col-sm-3 spacer-t7">
											<input type="text" name="btnRadious" id="btnRadious" class="slider-text" readonly><span style="color:#f6931f"><?php _e('px','WEBHUNT_LPC'); ?></span> 
										</div>     
									</div> <!-- End of 'Button Radius' Section -->
									
									<div class="col-md-12">
										<label class="field-label col-md-3 col-sm-4 align-left"><?php _e('Button Text Size','WEBHUNT_LPC'); ?> :</label>
										<div class="section col-md-4 col-sm-5 spacer-t20">
											<div class="slider-wrapper">
												<div id="sbtnTextSize"></div>
											</div><!-- end .slider-wrapper -->
										</div>
										<div class="col-md-3 col-sm-3 spacer-t7">
											<input type="text" name="btnTextSize" id="btnTextSize" class="slider-text" readonly><span style="color:#f6931f"><?php _e('px','WEBHUNT_LPC'); ?></span> 
										</div>     
									</div> <!-- End of 'Text Size' Section -->
									
								</div><!-- end .frm-row section -->
									
							</div><!-- /.col -->
						</div><!-- end .frm-row section --> 
					</div><!-- end .form-body section -->
					<div class="form-footer">
						<input type="button" class="button btn-primary" onclick="wh_lpc_save_data('button')" value="<?php _e('Save Changes','WEBHUNT_LPC'); ?>">
						<input type="button" class="button btn-primary btn-gray" onclick="wh_lpc_reset_data('button')" value="<?php _e('Reset Section','WEBHUNT_LPC'); ?>">
						<input type="button" class="button btn-primary btn-gray" onclick="wh_lpc_reset_all_data()" value="<?php _e('Reset All','WEBHUNT_LPC'); ?>">
					</div><!-- end .form-footer section -->
				</form>
				
			</div><!-- end .smart-forms section -->
		</div><!-- end .smart-wrap section -->
	</body>
</section><!-- /.content -->
<script>
jQuery(document).ready(function(){
	
	/* BUTTON WIDTH */	
	jQuery( "#sbtnWidth" ).slider({
		range: "min",
		value: <?php echo $btnWidth; ?>,
		min: 20,
		max: 100,
		step: 1,
		slide: function(event, ui) {
			jQuery("#btnWidth").val( ui.value );
		}
	});
	jQuery("#btnWidth").val( 
		jQuery("#sbtnWidth").slider("value")
	);
	
	/* BUTTON TOP PADDING */
	jQuery( "#sbtnTopPadding" ).slider({
		range: "min",
		value: <?php echo $btnTopPadding; ?>,
		min: 0,
		max: 30,
		step: 1,
		slide: function(event, ui) {
			jQuery("#btnTopPadding").val( ui.value );
		}
	});
	jQuery("#btnTopPadding").val( 
		jQuery("#sbtnTopPadding").slider("value")
	);
	
	/* BUTTON BOTTOM PADDING */
	jQuery( "#sbtnBottomPadding" ).slider({
		range: "min",
		value: <?php echo $btnBottomPadding; ?>,
		min: 0,
		max: 30,
		step: 1,
		slide: function(event, ui) {
			jQuery("#btnBottomPadding").val( ui.value );
		}
	});
	jQuery("#btnBottomPadding").val( 
		jQuery("#sbtnBottomPadding").slider("value")
	);
	
	/* BUTTON BORDER RADIOUS */
	jQuery( "#sbtnRadious" ).slider({
		range: "min",
		value: <?php echo $btnRadious; ?>,
		min: 0,
		max: 50,
		step: 1,
		slide: function(event, ui) {
			jQuery("#btnRadious").val( ui.value );
		}
	});
	jQuery("#btnRadious").val( 
		jQuery("#sbtnRadious").slider("value")
	);
	
	/* BUTTON TEXT SIZE */
	jQuery( "#sbtnTextSize" ).slider({
		range: "min",
		value: <?php echo $btnTextSize; ?>,
		min: 7,
		max: 35,
		step: 1,
		slide: function(event, ui) {
			jQuery("#btnTextSize").val( ui.value );
		}
	});
	jQuery("#btnTextSize").val( 
		jQuery("#sbtnTextSize").slider("value")
	);
	
});
</script>