<!--- Form Footer Settings panel content ----- >
<!----------------------------------------> 
<?php
// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) exit;
?>
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    <?php _e('Form Footer','WEBHUNT_LPC'); ?>
    <small><?php _e('Custom Login Page','WEBHUNT_LPC'); ?></small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-paint-brush"></i> <?php _e('Settings','WEBHUNT_LPC'); ?></a></li>
    <li class="active"><?php _e('Form Footer','WEBHUNT_LPC'); ?></li>
  </ol>
</section>
<!-- Main content -->
<section class="content">
   <body class="woodbg">
		<div class="smart-wrap">
			<div class="smart-forms smart-container wrap-2">
				
				<form method="post" name="myform" id="lpc_plugin_options_footer">
					<div class="form-body">
						
						<div class="frm-row">
							<div class="col-md-12">
							
								<div class="frm-row network-header">
									<div class="section col-md-9">
										<h4 style="font: bold 22px Arial, sans-serif;"><?php _e('Lost Password Text Settings','WEBHUNT_LPC'); ?></h4>
									</div>
								</div>

								<div class="frm-row frm-bg">
								
									<div class="col-md-12"><!-- "Enable Lost Pass Text" -->
										<label class="field-label col-md-3 col-sm-4 align-left"><?php _e('Enable Lost Pass Text','WEBHUNT_LPC'); ?> :</label>
										<div class="section col-md-8 col-sm-8">
											<label class="switch block">
											  <input type="hidden" name="enableLostPwdTxt" value="false">
											  <input type="checkbox" name="enableLostPwdTxt" id="enableLostPwdTxt" value="true" <?php if($enableLostPwdTxt == 'true' ) { echo "checked"; } ?>>
											  <span class="switch-label" data-on="ON" data-off="OFF"></span>
											  <span> <?php _e(' ON/OFF ','WEBHUNT_LPC'); ?> </span>
											</label>
											<p class="medium-text fine-grey"><?php _e('Switch it ON/OFF to enable/disable Lost Password Text.','WEBHUNT_LPC'); ?></p>
										</div>
									</div><!-- End of "Enable Lost Pass Text" Section -->
									
									<div class="col-md-12">
										<label class="field-label col-md-3 col-sm-4 align-left"><?php _e('Lost Password Text','WEBHUNT_LPC'); ?> :</label>
										<div class="section col-md-5 col-sm-8">
											<label class="field prepend-icon">
												<input type="text" name="lostPwdTxt" id="lostPwdTxt" class="gui-input" placeholder="Enter Lost Password Text" value="<?php echo $lostPwdTxt; ?>" >
												<span class="field-icon"><i class="fa fa-edit"></i></span>
											</label>
										</div><!-- end section -->
									</div><!-- end col section -->
									
									<div class="col-md-12">
										<label class="field-label col-md-3 col-sm-4 align-left"><?php _e('Lost Pass Text Color','WEBHUNT_LPC'); ?> :</label>
										<div class="section col-md-3 col-sm-8">
											<label class="field sfcolor">
												<input type="text" id="lostPwdTxtColor" name="lostPwdTxtColor" value="<?php echo $lostPwdTxtColor;?>" class="gui-input">
											</label>
										</div>
									</div><!-- end col section -->
									
									<div class="col-md-12">
										<label class="field-label col-md-3 col-sm-4 align-left"><?php _e('Lost Text Color(Hover)','WEBHUNT_LPC'); ?> :</label>
										<div class="section col-md-3 col-sm-8">
											<label class="field sfcolor">
												<input type="text" id="lostPwdTxtHColor" name="lostPwdTxtHColor" value="<?php echo $lostPwdTxtHColor;?>" class="gui-input">
											</label>
										</div>
									</div><!-- end col section -->
									
									<div class="col-md-12">
										<label class="field-label col-md-3 col-sm-4 align-left"><?php _e('Lost Text Font Size','WEBHUNT_LPC'); ?> :</label>
										<div class="section col-md-4 col-sm-5 spacer-t20">
											<div class="slider-wrapper">
												<div id="sfooterFontSize"></div>
											</div><!-- end .slider-wrapper -->
										</div>
										<div class="col-md-3 col-sm-3 spacer-t7">
											<input type="text" name="lostPwdFontSize" id="lostPwdFontSize" class="slider-text" readonly><span style="color:#f6931f"><?php _e('px','WEBHUNT_LPC'); ?></span> 
										</div>     
									</div> <!-- End of 'Lost Text Font Size' Section -->
									
									<div class="col-md-12 spacer-t20">
										<label class="field-label col-md-3 col-sm-4 align-left"><?php _e('Enable Lost Text Bg','WEBHUNT_LPC'); ?> :</label>
										<div class="section col-md-8 col-sm-8">
											<label class="field option block">
												<input type="hidden" name="lostPwdTxtBg" value="false">
												<input class="options responsive" type="checkbox" name="lostPwdTxtBg"  value="true" <?php if($lostPwdTxtBg == 'true') echo "checked"; ?> >
												<span class="checkbox"></span>
											</label>
											<p class="medium-text fine-grey"><?php _e('Check this option to enable <b>Lost Password Text Bg Color</b> option.','WEBHUNT_LPC'); ?></p>
										</div><!-- end section -->
									</div><!-- end col section -->
									
									<div class="col-md-12 lostPwdTxtBgColor">
										<label class="field-label col-md-3 col-sm-4 align-left"><?php _e('Lost Text Bg Color','WEBHUNT_LPC'); ?> :</label>
										<div class="section col-md-3 col-sm-8">
											<label class="field sfcolor">
												<input type="text" id="lostPwdTxtBgColor" name="lostPwdTxtBgColor" value="<?php echo $lostPwdTxtBgColor;?>" class="gui-input">
											</label>
										</div>
									</div><!-- end col section -->
									
								</div>
								
								
								<div class="frm-row network-header spacer-t30">
									<div class="section colm colm12">
										<h4 style="font: bold 22px Arial, sans-serif;"><?php _e('BACK TO SITE TEXT','WEBHUNT_LPC'); ?></h4>
									</div><!-- end section -->
								</div>
								
								<div class="frm-row frm-bg">
									<div class="col-md-12"><!-- Enable "Back to" Text -->
										<label class="field-label col-md-3 col-sm-4 align-left"><?php _e('Enable "Back to" Text','WEBHUNT_LPC'); ?> :</label>
										<div class="section col-md-8 col-sm-8">
											<label class="switch block">
											  <input type="hidden" name="enableBackToText" value="false">
											  <input type="checkbox" name="enableBackToText" id="enableBackToText" value="true" <?php if($enableBackToText == 'true' ) { echo "checked"; } ?>>
											  <span class="switch-label" data-on="ON" data-off="OFF"></span>
											  <span> <?php _e(' ON/OFF ','WEBHUNT_LPC'); ?> </span>
											</label>
											<p class="medium-text fine-grey"><?php _e('Switch it ON/OFF to enable/disable "Back To" Text.','WEBHUNT_LPC'); ?></p>
										</div>
									</div><!-- End of Enable "Back to" Text Section -->
									
									<div class="col-md-12">
										<label class="field-label col-md-3 col-sm-4 align-left"><?php _e('"Back to" Text Color','WEBHUNT_LPC'); ?> :</label>
										<div class="section col-md-3 col-sm-8">
											<label class="field sfcolor">
												<input type="text" id="backToTextColor" name="backToTextColor" value="<?php echo $backToTextColor;?>" class="gui-input">
											</label>
										</div>
									</div><!-- end col section -->
									
									<div class="col-md-12">
										<label class="field-label col-md-3 col-sm-4 align-left"><?php _e('"Back to" Text Hover Color','WEBHUNT_LPC'); ?> :</label>
										<div class="section col-md-3 col-sm-8">
											<label class="field sfcolor">
												<input type="text" id="backToTextHColor" name="backToTextHColor" value="<?php echo $backToTextHColor;?>" class="gui-input">
											</label>
										</div>
									</div><!-- end col section -->
									
									<div class="col-md-12">
										<label class="field-label col-md-3 col-sm-4 align-left"><?php _e('"Back to" Text Font Size','WEBHUNT_LPC'); ?> :</label>
										<div class="section col-md-3 col-sm-8 spacer-t20">
											<div class="slider-wrapper">
												<div id="sbackToFontSize"></div>
											</div><!-- end .slider-wrapper -->
										</div>
										<div class="col-md-3 col-sm-3 spacer-t7">
											<input type="text" name="backToFontSize" id="backToFontSize" class="slider-text" readonly><span style="color:#f6931f"><?php _e('px','WEBHUNT_LPC'); ?></span> 
										</div>     
									</div> <!-- End of "Back to Text Font Size" Section -->
									
									<div class="col-md-12 spacer-t20">
										<label class="field-label col-md-3 col-sm-4 align-left"><?php _e('Enable "Back to" Text Bg','WEBHUNT_LPC'); ?> :</label>
										<div class="section col-md-6 col-sm-8">
											<label class="field option block">
												<input type="hidden" name="backToTextBg" value="false">
												<input class="options responsive" type="checkbox" name="backToTextBg"  value="true" <?php if($backToTextBg == 'true') echo "checked"; ?> >
												<span class="checkbox"></span>
											</label>
											<p class="medium-text fine-grey"><?php _e('Check this option to enable <b>"Back to" Text Bg Color</b> option.','WEBHUNT_LPC'); ?></p>
										</div><!-- end section -->
									</div><!-- end col section -->
									
									<div class="col-md-12 backToTextBgColor">
										<label class="field-label col-md-3 col-sm-4 align-left"><?php _e('"Back to" Text Bg Color','WEBHUNT_LPC'); ?> :</label>
										<div class="section col-md-4 col-sm-8">
											<label class="field sfcolor">
												<input type="text" id="backToTextBgColor" name="backToTextBgColor" value="<?php echo $backToTextBgColor;?>" class="gui-input">
											</label>
										</div>
									</div><!-- end col section -->
									
								</div>
								
								<div class="frm-row network-header spacer-t30">
									<div class="section col-md-12">
										<h4 style="font: bold 22px Arial, sans-serif;"><?php _e('COPYRIGHT FOOTER TEXT','WEBHUNT_LPC'); ?></h4>
									</div><!-- end section -->
								</div>
								
								<div class="frm-row frm-bg">
									<div class="col-md-12"><!-- Enable Copyright Note -->
										<label class="field-label col-md-3 col-sm-4 align-left"><?php _e('Enable Copyright Note','WEBHUNT_LPC'); ?> :</label>
										<div class="section col-md-8 col-sm-8">
											<label class="switch block">
											  <input type="hidden" name="enableCopyright" value="false">
											  <input type="checkbox" name="enableCopyright" id="enableCopyright" value="true" <?php if($enableCopyright == 'true' ) { echo "checked"; } ?>>
											  <span class="switch-label" data-on="ON" data-off="OFF"></span>
											  <span> <?php _e(' ON/OFF ','WEBHUNT_LPC'); ?> </span>
											</label>
											<p class="medium-text fine-grey"><?php _e('Switch it ON/OFF to enable/disable Copyright Text.','WEBHUNT_LPC'); ?></p>
										</div>
									</div><!-- End of "Enable Copyright Note" Section -->
									
									<div class="col-md-12">
										<label class="field-label col-md-3 col-sm-4 align-left"><?php _e('Copyright Bg Color','WEBHUNT_LPC'); ?> :</label>
										<div class="section col-md-3 col-sm-8">
											<label class="field sfcolor">
												<input type="text" id="copyrightBgColor" name="copyrightBgColor" value="<?php echo $copyrightBgColor;?>" class="gui-input">
											</label>
										</div>
									</div><!-- end col section -->
									
									<div class="col-md-12">
										<label class="field-label col-md-3 col-sm-4 align-left"><?php _e('Copyright Text Color','WEBHUNT_LPC'); ?> :</label>
										<div class="section col-md-3 col-sm-8">
											<label class="field sfcolor">
												<input type="text" id="copyrightTxtColor" name="copyrightTxtColor" value="<?php echo $copyrightTxtColor;?>" class="gui-input">
											</label>
										</div>
									</div><!-- end col section -->
									
									<div class="col-md-12">
										<label class="field-label col-md-3 col-sm-4 align-left"><?php _e('Copyright Note','WEBHUNT_LPC'); ?> :</label>
										<div class="section col-md-5 col-sm-8">
											<label class="field">
												<textarea class="gui-textarea" id="copyrightNote" name="copyrightNote" placeholder="Enter Copyright Note" ><?php echo $copyrightNote; ?></textarea>
											</label>
										</div>
									</div><!-- end col section -->
									
									<div class="col-md-12"><!-- "Show Some Love" -->
										<label class="field-label col-md-3 col-sm-4 align-left"><?php _e('Show some Love','WEBHUNT_LPC'); ?> :</label>
										<div class="section col-md-8 col-sm-8">
											<label class="switch block">
											  <input type="hidden" name="showLove" value="false">
											  <input type="checkbox" name="showLove" id="showLove" value="true" <?php if($showLove == 'true' ) { echo "checked"; } ?>>
											  <span class="switch-label" data-on="ON" data-off="OFF"></span>
											  <span> <?php _e(' ON/OFF ','WEBHUNT_LPC'); ?> </span>
											</label>
											<p class="medium-text fine-grey"><?php _e('Please help others learn about this plugin by placing small link in footer. Thank you very much!','WEBHUNT_LPC'); ?></p>
										</div>
									</div><!-- End of "Show Some Love" Section -->
									
									<div class="col-md-12">
										<label class="field-label col-md-3 col-sm-4 align-left"><?php _e('Love Position','WEBHUNT_LPC'); ?> :</label>
										<div class="section col-md-6 col-sm-8">
											<div class="option-group field">
												<label class="option">
													<input type="radio" name="lovePosition" value="left" <?php if($lovePosition == "left"){ echo "checked"; } ?>>
													<span class="radio"></span> <?php _e('Left','WEBHUNT_LPC'); ?>
												</label>
												<label class="option">
													<input type="radio" name="lovePosition" value="right" <?php if($lovePosition == "right"){ echo "checked"; } ?>>
													<span class="radio"></span> <?php _e('Right','WEBHUNT_LPC'); ?>
												</label>
											</div>
										</div>
									</div><!-- end col section -->	
								</div>
								
							</div><!-- /.col -->
						</div><!-- end .frm-row section --> 
					</div><!-- end .form-body section -->
					<div class="form-footer">
						<input type="button" class="button btn-primary" onclick="wh_lpc_save_data('footer')" value="<?php _e('Save Changes','WEBHUNT_LPC'); ?>">
						<input type="button" class="button btn-primary btn-gray" onclick="wh_lpc_reset_data('footer')" value="<?php _e('Reset Section','WEBHUNT_LPC'); ?>">
						<input type="button" class="button btn-primary btn-gray" onclick="wh_lpc_reset_all_data()" value="<?php _e('Reset All','WEBHUNT_LPC'); ?>">
					</div><!-- end .form-footer section -->
				</form>
				
			</div><!-- end .smart-forms section -->
		</div><!-- end .smart-wrap section -->
	</body>
</section><!-- /.content -->
<script>
jQuery(document).ready(function(){
	
	/* LOGIN FOOTER FONT SIZE */
	jQuery( "#sfooterFontSize" ).slider({
		range: "min",
		value: <?php echo $lostPwdFontSize; ?>,
		min: 8,
		max: 34,
		step: 1,
		slide: function(event, ui) {
			jQuery("#lostPwdFontSize").val( ui.value );
		}
	});
	jQuery("#lostPwdFontSize").val( 
		jQuery("#sfooterFontSize").slider("value")
	);
	
	/* "BACK TO" FONT SIZE */
	jQuery( "#sbackToFontSize" ).slider({
		range: "min",
		value: <?php echo $backToFontSize; ?>,
		min: 8,
		max: 34,
		step: 1,
		slide: function(event, ui) {
			jQuery("#backToFontSize").val( ui.value );
		}
	});
	jQuery("#backToFontSize").val( 
		jQuery("#sbackToFontSize").slider("value")
	);
	
	/* FUNCTION CALLING TO ENABLE FOOTER TEXT COLOR */
	jQuery("input[name='lostPwdTxtBg']").click(function() {
		var value = jQuery("input[name='lostPwdTxtBg']").val();
		enableFooterTextBg(value);
	});
	enableFooterTextBg("<?php echo $lostPwdTxtBg; ?>");
	
	/* FUNCTION CALLING TO ENABLE "BACK TO" TEXT COLOR */
	jQuery("input[name='backToTextBg']").click(function() {
		var value = jQuery("input[name='backToTextBg']").val();
		enableBackToTextBg(value);
	});
	enableBackToTextBg("<?php echo $backToTextBg; ?>");
});

/* FUNCTION TO SHOW FOOTER TEXT COLOR OPTION */
function enableFooterTextBg(value) {
    if(jQuery("input[name='lostPwdTxtBg']").is(':checked')){
		jQuery(".lostPwdTxtBgColor").show();
	}else{
		jQuery(".lostPwdTxtBgColor").hide();
	}
}

/* FUNCTION TO SHOW "BACK TO" TEXT COLOR OPTION */
function enableBackToTextBg(value) {
    if(jQuery("input[name='backToTextBg']").is(':checked')){
		jQuery(".backToTextBgColor").show();
	}else{
		jQuery(".backToTextBgColor").hide();
	}
}
</script>