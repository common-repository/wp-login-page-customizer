<!-- Dashboard Settings panel content --- >
<!----------------------------------------> 
<?php
// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) exit;
?>
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    <?php _e('PRE DESIGN','WEBHUNT_LPC'); ?>
    <small><?php _e('Custom Login Page','WEBHUNT_LPC'); ?></small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-paint-brush"></i> <?php _e('Pre Design','WEBHUNT_LPC'); ?></a></li>
  </ol>
</section>
<!-- Main content -->
<section class="content">
   <body class="woodbg">
		<div class="smart-wrap">
			<div class="smart-forms smart-container wrap-2">
				
				<form method="post" name="myform" id="lpc_plugin_options_design">
					<div class="form-body">
						
						<div class="frm-row">
							<div class="col-md-12">
							
								<div class="frm-row network-header">
									<div class="section colm">
										<h4 style="font: bold 22px Arial, sans-serif;"><?php _e('PRE DESIGN LAYOUT','WEBHUNT_LPC'); ?></h4>
									</div>
								</div>

								<div class="frm-row frm-bg">
								
									<div class="col-md-12">
										<label class="field-label colm colm12 align-left"><?php _e('Select the style and click to "Import Style" button','WEBHUNT_LPC'); ?>.</label>
										<div class="section colm colm12 spacer-t20">
											<div class="option-group field">
												<label class="hiddenradio">
												  <input type="radio" name="preDesignLayout" value="default" checked>
												  <img src="<?php echo WEBHUNT_LPC_IMG_PATH. 'pre-design/default.jpg'?>">
												  <span style="display:block"><?php _e('Default','WEBHUNT_LPC'); ?></span> 
												</label>
												<label class="hiddenradio">
												  <input type="radio" name="preDesignLayout" value="1">
												  <img src="<?php echo WEBHUNT_LPC_IMG_PATH. 'pre-design/design-01.jpg'?>">
												  <span style="display:block"><?php _e('Style 1','WEBHUNT_LPC'); ?></span> 
												</label>
												<label class="hiddenradio">
												  <input type="radio" name="preDesignLayout" value="2">
												  <img src="<?php echo WEBHUNT_LPC_IMG_PATH. 'pre-design/design-02.jpg'?>">
												  <span style="display:block"><?php _e('Style 2','WEBHUNT_LPC'); ?></span> 
												</label>
												<label class="hiddenradio">
												  <input type="radio" name="preDesignLayout" value="3">
												  <img src="<?php echo WEBHUNT_LPC_IMG_PATH. 'pre-design/design-03.jpg'?>">
												  <span style="display:block"><?php _e('Style 3','WEBHUNT_LPC'); ?></span> 
												</label>
												<label class="hiddenradio">
												  <input type="radio" name="preDesignLayout" value="4">
												  <img src="<?php echo WEBHUNT_LPC_IMG_PATH. 'pre-design/design-04.jpg'?>">
												  <span style="display:block"><?php _e('Style 4','WEBHUNT_LPC'); ?></span> 
												</label>
												<label class="hiddenradio">
												  <input type="radio" name="preDesignLayout" value="5">
												  <img src="<?php echo WEBHUNT_LPC_IMG_PATH. 'pre-design/design-05.jpg'?>">
												  <span style="display:block"><?php _e('Avaliable in PRO','WEBHUNT_LPC'); ?></span> 
												</label>
											</div>
										</div>
									</div><!-- end col section -->
								</div>
								
							</div><!-- /.col -->
						</div><!-- end .frm-row section --> 
					</div><!-- end .form-body section -->
					<div class="form-footer">
						<input type="hidden" name="lpc_action" value="import_style" />
						<?php wp_nonce_field( 'lpc_import_nonce', 'lpc_import_nonce' ); ?>
						<input type="submit" name="submit" class="button btn-primary" value="<?php _e('Import Style', WEBHUNT_LPC); ?>"  />
						<input type="button" class="button btn-primary btn-gray" onclick="wh_lpc_reset_all_data()" value="<?php _e('Reset All','WEBHUNT_LPC'); ?>">
					</div><!-- end .form-footer section -->
				</form>
				
			</div><!-- end .smart-forms section -->
		</div><!-- end .smart-wrap section -->
	</body>
</section><!-- /.content -->