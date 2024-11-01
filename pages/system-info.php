<!-- System Info panel content --- >
<!---------------------------------------->
<?php
/**
 * Created by WebHunt Infotech.
 * @since	1.0.2
 */
$lpc_system_info = new cl_lpc_system_info();
?>
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
   <?php _e('System Info','WEBHUNT_LPC'); ?>
    <small><?php _e('WP Custom Login Page','WEBHUNT_LPC'); ?></small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-info"></i> <?php _e('System Info','WEBHUNT_LPC'); ?></a></li>
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
								<div class="section colm colm9">
									<h4 style="font: bold 22px Arial, sans-serif;">###  <?php _e('System Information','WEBHUNT_LPC'); ?> ###</h4>
								</div><!-- end section -->
							</div>
							

							<div class="frm-row frm-bg">
								<div class="col-md-12">
									<div class="lpc-system-info-data" >
										<?php
											echo $lpc_system_info->lpc_system_info_page();
										?>
									</div>
								</div>	
							</div><!-- end .frm-row section -->
								
						</div><!-- /.col -->
					</div><!-- end .frm-row section --> 
				</div><!-- end .form-body section -->
				
			</div><!-- end .smart-forms section -->
		</div><!-- end .smart-wrap section -->
	</body>
</section><!-- /.content -->