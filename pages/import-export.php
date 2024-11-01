<!-- Our Services Settings panel content --- >
<!---------------------------------------->
<?php
// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) exit;
?>
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
   <?php _e('Import / Export Settings','WEBHUNT_LPC'); ?>
    <small><?php _e('Custom Login Page','WEBHUNT_LPC'); ?></small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-upload"></i> <?php _e('Import Export Settings','WEBHUNT_LPC'); ?></a></li>
  </ol>
</section>
<!-- Main content -->
<section class="content">
   <body class="woodbg">
		<div class="smart-wrap">

			<div class="smart-forms smart-container wrap-2">
			
					<div class="form-body">
						
						<div class="frm-row">
							<div class="col-md-12">
							
								<div class="frm-row network-header">
									<div class="colm"></div>
									<div class="section colm colm9">
										<h4 style="font: bold 22px Arial, sans-serif;"><?php _e('Export Settings','WEBHUNT_LPC'); ?></h4>
									</div><!-- end section -->
								</div>

								<div class="frm-row frm-bg">
									<div class="col-md-12">
										<label class="field-label colm colm12 align-left"><?php _e('Export the plugin settings for this site as a .json file. This allows you to easily import the configuration into another site','WEBHUNT_LPC'); ?></label>
										<div class="section colm colm8">
											<form method="post">
												<p><input type="hidden" name="lpc_action" value="export_settings" /></p>
												<p>
													<?php wp_nonce_field( 'lpc_export_nonce', 'lpc_export_nonce' ); ?>
													<input type="submit" name="submit" class="button btn-primary" value="<?php _e('Export', WEBHUNT_LPC); ?>"  />
												</p>
											</form>
										</div>
									</div><!-- end col section -->
								</div><!-- end .frm-row section -->
								
								<div class="frm-row network-header spacer-t30">
									<div class="colm"></div>
									<div class="section colm colm9">
										<h4 style="font: bold 22px Arial, sans-serif;"><?php _e('Import Custom Login Page Data','WEBHUNT_LPC'); ?></h4>
									</div><!-- end section -->
								</div>
								
								<div class="frm-row frm-bg">
									<div class="col-md-12">
										<label class="field-label colm colm12 align-left"><?php _e('Import the plugin settings from a .json file. This file can be obtained by exporting the settings on another site using the form above','WEBHUNT_LPC'); ?>.</label>
										<div class="section colm colm8">
											<form method="post" enctype="multipart/form-data">
												<p>
													<input type="file" name="import_file"/>
												</p>
												<p>
													<input type="hidden" name="lpc_action" value="import_settings" />
													<?php wp_nonce_field( 'lpc_import_nonce', 'lpc_import_nonce' ); ?>
													<input type="submit" name="submit" class="button btn-primary" value="<?php _e('Import', WEBHUNT_LPC); ?>"  />
												</p>
											</form>
										</div><!-- end section -->
									</div><!-- end col section -->
								</div><!-- end .frm-row section -->
									
							</div><!-- /.col -->
						</div><!-- end .frm-row section --> 
					</div><!-- end .form-body section -->

				
			</div><!-- end .smart-forms section -->
		</div><!-- end .smart-wrap section -->
	</body>
</section><!-- /.content -->