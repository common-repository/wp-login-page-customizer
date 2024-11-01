<!-- Documentation panel content --- >
<!----------------------------------------> 	
<?php
// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) exit;
?>
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    <?php _e('Need Help!','WEBHUNT_LPC'); ?>
    <small><?php _e('Custom Login Page','WEBHUNT_LPC'); ?></small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-question-circle"></i> <?php _e('Need Help!','WEBHUNT_LPC'); ?></a></li>
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
								<div class="colm"></div><!-- end section -->
								<div class="section colm colm9">
									<h4 style="font: bold 22px Arial, sans-serif;"><?php _e('Welcome to Custom Login Page ','WEBHUNT_LPC'); echo lpc_plugin_get_version().'!'; ?></h4>
								</div><!-- end section -->
							</div>
							<div class="frm-row frm-bg">
							
							
								<div class="help-page-col">
									<div class="changelog help-page-widget">
										<h2><?php _e("What's New?",'WEBHUNT_LPC'); ?></h2>
										<ul class="changelog-main-list">
											<li class="main-item">
												<?php echo lpc_plugin_get_version();?> <span><?php _e('NEW!','WEBHUNT_LPC'); ?></span>
												<ul class="changelog-sub-list">
													<li><b><?php _e('Fixed','WEBHUNT_LPC');?>: </b> <?php _e('Fixed issue of google captcha','WEBHUNT_LPC'); ?>.</li>
													<li><b><?php _e('Tested','WEBHUNT_LPC');?>: </b> <?php _e('Tested with latest wordpress version','WEBHUNT_LPC'); ?>.</li>
												</ul>
											</li>
										</ul>
										<ul class="changelog-main-list">
											<li class="main-item">
												<?php echo "1.0.4";?></span>
												<ul class="changelog-sub-list">
													<li><b><?php _e('Changed','WEBHUNT_LPC');?>: </b> <?php _e('Default login background color changed','WEBHUNT_LPC'); ?>.</li>
													<li><b><?php _e('Fixed','WEBHUNT_LPC');?>: </b> <?php _e('On system info page variable undefined error issue fixed','WEBHUNT_LPC'); ?>.</li>
													<li><b><?php _e('Fixed','WEBHUNT_LPC');?>: </b> <?php _e('Login_headertitle is deprecated issue fixed','WEBHUNT_LPC'); ?>.</li>
													<li><b><?php _e('Fixed','WEBHUNT_LPC');?>: </b> <?php _e('Buy Pro link updated','WEBHUNT_LPC'); ?>.</li>
													<li><b><?php _e('Fixed','WEBHUNT_LPC');?>: </b> <?php _e('Other designing issue fixed','WEBHUNT_LPC'); ?>.</li>
													<li><b><?php _e('Tested','WEBHUNT_LPC');?>: </b> <?php _e('Tested with latest wordpress version','WEBHUNT_LPC'); ?>.</li>
												</ul>
											</li>
										</ul>
										<ul class="changelog-main-list">
											<li class="main-item">
												<?php echo "1.0.3";?></span>
												<ul class="changelog-sub-list">
													<li><b><?php _e('Fixed','WEBHUNT_LPC');?>: </b> <?php _e('Manage plugin admin dashboard','WEBHUNT_LPC'); ?>.</li>
													<li><b><?php _e('Fixed','WEBHUNT_LPC');?>: </b> <?php _e('Many bugs fixed','WEBHUNT_LPC'); ?>.</li>
													<li><b><?php _e('Tested','WEBHUNT_LPC');?>: </b> <?php _e('Tested with latest wordpress version','WEBHUNT_LPC'); ?>.</li>
												</ul>
											</li>
										</ul>
										<ul class="changelog-main-list">
											<li class="main-item">
												<?php echo "1.0.2";?>
												<ul class="changelog-sub-list">
													<li><b><?php _e('Change','WEBHUNT_LPC');?>: </b> <?php _e('Plugin Name change to "Custom Login Page"','WEBHUNT_LPC'); ?>.</li>
													<li><b><?php _e('Added','WEBHUNT_LPC');?>: </b> <?php _e('New "Pre Design Layout" Page added with one click demo importer','WEBHUNT_LPC'); ?>.</li>
													<li><b><?php _e('Added','WEBHUNT_LPC');?>: </b> <?php _e('"Copyright Bg Color" option added under the Setting >> Form Footer tab','WEBHUNT_LPC'); ?>.</li>
													<li><b><?php _e('Added','WEBHUNT_LPC');?>: </b> <?php _e('"Copyright Text Color" option added under the Setting >> Form Footer tab','WEBHUNT_LPC'); ?>.</li>
													<li><b><?php _e('Added','WEBHUNT_LPC');?>: </b> <?php _e('New "System Info" Page added','WEBHUNT_LPC'); ?>.</li>
													<li><b><?php _e('Added','WEBHUNT_LPC');?>: </b> <?php _e('New "Recommended Plugins" Page added','WEBHUNT_LPC'); ?>.</li>
													<li><b><?php _e('Fixed','WEBHUNT_LPC');?>: </b> <?php _e('Many Other Issue Fixed','WEBHUNT_LPC'); ?>.</li>
												</ul>
											</li>
										</ul>    
									</div>
								</div>
								
								<div class="help-page-col">
									<div class="rating-box help-page-widget">
										<h2><?php _e('Why You Should Go ','WEBHUNT_LPC'); ?><span><?php _e('Premium?','WEBHUNT_LPC'); ?></span></h2>
										<p><?php _e('Premium version gives you full access to all premium tools for lifetime without any limitations. You can buy premium version for flat one time fee of <b>$18</b>.','WEBHUNT_LPC'); ?></p>
										<a href="https://www.webhuntinfotech.com/premium-plugins/custom-login-page-pro/" target="_blank" class="button button-primary"><?php _e('Buy Now','WEBHUNT_LPC'); ?></a>
									</div>
									
									<div class="rating-box help-page-widget">
										<h2><?php _e('Loving ','WEBHUNT_LPC'); ?><span><?php _e('Custom Login Page?','WEBHUNT_LPC'); ?></span></h2>
										<p><?php _e('Thank you for choosing Custom Login Page in your WordPress installation.','WEBHUNT_LPC'); ?></p>
										<p><?php _e('Do you mind taking a minute to support us by adding a review? Your feedback is very important to us.','WEBHUNT_LPC'); ?></p>
										<a href="https://wordpress.org/support/view/plugin-reviews/wp-login-page-customizer" target="_blank" class="button button-primary"><?php _e('Add a Review on WordPress','WEBHUNT_LPC'); ?></a>
									</div>

									<div class="support-box help-page-widget">
										<h2><?php _e('Need Help?','WEBHUNT_LPC'); ?></h2>
										<p><?php _e("For superior help you can visit plugin documentation page. If you didn't found your solution there, we have an acting fast support for you. Post your question in our WordPress support forum.","WEBHUNT_LPC"); ?></p>
										<a href="https://www.webhuntinfotech.com/wp-login-page-customizer-documentation/" target="_blank" class="button button-primary marginR"><?php _e('Documentation','WEBHUNT_LPC'); ?></a>
										<a href="https://wordpress.org/support/plugin/wp-login-page-customizer" target="_blank" class="button button-primary"><?php _e('Support Forum','WEBHUNT_LPC'); ?></a>
									</div>
								</div>
								
							</div><!-- end .frm-row section -->
								
						</div><!-- /.col -->
					</div><!-- end .frm-row section --> 
				</div><!-- end .form-body section -->
				<div class="form-footer"></div>
				
			</div><!-- end .smart-forms section -->
		</div><!-- end .smart-wrap section -->
	</body>
</section><!-- /.content -->