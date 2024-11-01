<?php
// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) exit;
?>
<div id="lpc-body" class="hold-transition skin-blue sidebar-mini">
	<div class="wrapper">
			
		<!-- Main Header -->
		<header class="main-header">
			<!-- Logo -->
			<a href="http://www.webhuntinfotech.com/" class="logo">
			  <!-- mini logo for sidebar mini 50x50 pixels -->
			  <span class="logo-mini"><b>C</b>LP</span>
			  <!-- logo for regular state and mobile devices -->
			  <span class="logo-lg"><b><?php _e('Custom ','WEBHUNT_LPC')?></b><?php _e('Login Page','WEBHUNT_LPC')?></span>
			</a>
			<!-- Header Navbar -->
			<nav class="navbar navbar-static-top" role="navigation">
				<!-- Sidebar toggle button-->
				<a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
				  <span class="sr-only"><?php _e('Toggle navigation','WEBHUNT_LPC')?></span>
				</a>
				<!-- Navbar Right Menu -->
				<div class="navbar-custom-menu">
				  <ul class="nav navbar-nav">
					
					<!-- User Account Menu -->
					<li class="dropdown user user-menu">
					  <!-- Menu Toggle Button -->
					  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<!-- The user image in the navbar-->
						<img src="<?php echo WEBHUNT_LPC_PLUGIN_URL.'assets/img/webhunt-logo-160x160.jpg'; ?>" class="user-image" alt="User Image"/>
						<!-- hidden-xs hides the username on small devices so only the image appears. -->
						<span class="hidden-xs"><?php _e('WebHunt Infotech','WEBHUNT_LPC')?></span>
					  </a>
					</li>
				  </ul>
				</div>
			</nav>
		</header>
		<!-- Left side column. contains the logo and sidebar -->
		<aside class="main-sidebar">
			<!-- sidebar: style can be found in sidebar.less -->
			<section class="sidebar">

				<!-- Sidebar user panel (optional) -->
				<div class="user-panel">
					<div class="pull-left image">
						<img src="<?php echo WEBHUNT_LPC_PLUGIN_URL.'assets/img/webhunt-logo-160x160.jpg'; ?>" class="img-circle" alt="User Image" />
					</div>
					<div class="pull-left info">
						<p style="margin-bottom: 2px;"><?php _e('Powered By','WEBHUNT_LPC')?></p>
						<!-- Status -->
						<a href="https://www.webhuntinfotech.com/" target="_blank" style="COLOR: #e83f33;text-shadow: -2px 1px 2px #000000;"> <?php _e('WEBHUNT INFOTECH','WEBHUNT_LPC')?></a>
					</div>
				</div>
			
				<!-- Sidebar Menu -->
				<ul class="sidebar-menu">
					<li class="header"><?php _e('PLUGIN MENU','WEBHUNT_LPC')?></li>
					<li class="sidebar-tab active" id="dashboard-menu">
						<a href='javascript:lpc_loadFile("dashboard")'><i class="fa fa-dashboard"></i> <span><?php _e('Dashboard','WEBHUNT_LPC')?></span></a>
					</li>
					<li class="sidebar-tab" id="predesing-menu">
						<a href='javascript:lpc_loadFile("predesing")'><i class="fa fa-paint-brush"></i> <span><?php _e('Pre Design Layout','WEBHUNT_LPC')?></span></a>
					</li>
					<li class="sidebar-tab" id="background-menu">
						<a href='javascript:lpc_loadFile("background")'><i class="fa fa-picture-o"></i> <span><?php _e('Background Option','WEBHUNT_LPC')?></span></a>
					</li>
					<li class="sidebar-tab" id="loginform-menu">
						<a href='javascript:lpc_loadFile("loginform")'><i class="fa fa-file-text-o"></i> <span><?php _e('Login Form','WEBHUNT_LPC')?></span></a>
					</li>
					<li class="treeview sidebar-tab">
						<a href="#">
							<i class="fa fa-wrench"></i>
							<span><?php _e('Settings','WEBHUNT_LPC')?></span>
							<span class="pull-right-container">
								<i class="fa fa-angle-left pull-right"></i>
							</span>
						</a>
						<ul class="treeview-menu">
							<li id="logo-menu" class="sidebar-tab"><a href='javascript:lpc_loadFile("logo")'><i class="fa fa-circle-o"></i> <?php _e('Logo Settings','WEBHUNT_LPC')?></a></li>
							<li id="input-menu" class="sidebar-tab"><a href='javascript:lpc_loadFile("input")'><i class="fa fa-circle-o"></i> <?php _e('Input Field','WEBHUNT_LPC')?></a></li>
							<li id="button-menu" class="sidebar-tab"><a href='javascript:lpc_loadFile("button")'><i class="fa fa-circle-o"></i> <?php _e('Button Beauty','WEBHUNT_LPC')?></a></li>
							<li id="footer-menu" class="sidebar-tab"><a href='javascript:lpc_loadFile("footer")'><i class="fa fa-circle-o"></i> <?php _e('Form Footer','WEBHUNT_LPC')?></a></li>
						</ul>
					</li>
					<li class="sidebar-tab" id="welcome-menu">
						<a href='javascript:lpc_loadFile("welcome")'><i class="fa fa-puzzle-piece"></i> <span><?php _e('Welcome Messages','WEBHUNT_LPC')?></span></a>
					</li>
					<li class="sidebar-tab" id="gcaptcha-menu">
						<a href='javascript:lpc_loadFile("gcaptcha")'><i class="fa fa-google"></i> <span><?php _e('Google Captcha','WEBHUNT_LPC')?></span></a>
					</li>
					<li class="sidebar-tab" id="export-menu">
						<a href='javascript:lpc_loadFile("export")'><i class="fa fa-upload"></i> <span><?php _e('Import / Export','WEBHUNT_LPC')?></span></a>
					</li>
					<li class="sidebar-tab" id="systeminfo-menu">
						<a href='javascript:lpc_loadFile("systeminfo")'><i class="fa fa-info"></i> <span><?php _e('System Info','WEBHUNT_LPC')?></span></a>
					</li>
					<li class="sidebar-tab" id="plugins-menu">
						<a href='javascript:lpc_loadFile("plugins")'><i class="fa fa-shopping-bag"></i> <span><?php _e('Recommended Plugins','WEBHUNT_LPC')?></span></a>
					</li>
					<li class="sidebar-tab" id="products-menu">
						<a href='javascript:lpc_loadFile("products")'><i class="fa fa-shopping-cart"></i> <span><?php _e('Recommended Themes','WEBHUNT_LPC')?></span></a>
					</li>
					<li class="sidebar-tab" id="help-menu">
						<a href='javascript:lpc_loadFile("help")'><i class="fa fa-question-circle"></i> <span><?php _e('Need Help','WEBHUNT_LPC')?></span></a>
					</li>
				</ul><!-- /.sidebar-menu -->
			</section>
			<!-- /.sidebar -->
		</aside>

		<!-- Content Wrapper. Contains page content -->
		<div id="Page_contact" class="content-wrapper">
			<span id="dashboard"><?php include('dashboard.php');?></span>
			<span id="predesing" style="display:none"><?php include('pre-design.php');?></span>
			<span id="background" style="display:none"><?php include('background-option.php');?></span>
			<span id="loginform" style="display:none"><?php include('login-form.php');?></span>
			<span id="logo" style="display:none"><?php include('logo-settings.php');?></span>
			<span id="input" style="display:none"><?php include('input-fields.php');?></span>
			<span id="button" style="display:none"><?php include('button-beauty.php');?></span>
			<span id="footer" style="display:none"><?php include('footer.php');?></span>
			<span id="welcome" style="display:none"><?php include('welcome-messages.php');?></span>
			<span id="gcaptcha" style="display:none"><?php include('google-captcha.php');?></span>
			<span id="export" style="display:none"><?php include('import-export.php');?></span>
			<span id="systeminfo" style="display:none"><?php include('system-info.php');?></span>
			<span id="plugins" style="display:none"><?php include('plugins.php');?></span>
			<span id="products" style="display:none"><?php include('products.php');?></span>
			<span id="help" style="display:none"><?php include('help.php');?></span>
		</div><!-- /.content-wrapper -->

		  <!-- Main Footer -->
		<footer class="main-footer">
			<!-- To the right -->
			<div class="pull-right hidden-xs">
			  <?php _e('Anything you want','WEBHUNT_LPC')?>
			</div>
			<!-- Default to the left --> 
			<strong><?php _e('Copyright','WEBHUNT_LPC')?> &copy; 2019 <a href="https://www.webhuntinfotech.com/"><?php _e('WebHunt Infotech','WEBHUNT_LPC')?></a>.</strong> <?php _e('All rights reserved.','WEBHUNT_LPC')?>.
		</footer>
	</div><!-- ./wrapper -->
<div>