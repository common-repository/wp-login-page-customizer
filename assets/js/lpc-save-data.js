/************ Save Admin Panel Data Value ***************
*********************************************************/
function wh_lpc_save_data(name) {
	//tinyMCE.triggerSave();
	var lpc_plugin_options = "#lpc_plugin_options_"+name;
	jQuery("#lpc-preloader-wrap").show();
	jQuery.ajax({
		type: "POST",
		url: lpc_obj.ajax_url,
		data : 'action=action_lpc_page_setting_save_post&security='+ lpc_obj.ajax_nonce + '&hook=' + name +'&' + jQuery(lpc_plugin_options).serialize(),
		success : function(data){
			if(data=='nonce_err'){
				jQuery("#lpc-preloader-wrap").fadeOut('slow');
				jQuery('.error-notify').html('<i class="fa fa-times-circle danger"></i>Cheating Uh!');
			}
			jQuery("#lpc-preloader-wrap").delay(200).fadeOut('slow');
	   }			
	});
	
}

/************ Reset Admin Panel Data Value **************
*********************************************************/
function wh_lpc_reset_data(name) 
{
	if (confirm('Are you sure you want to reset this setting?')) {
	} 
	else {
	   return;
	}
	
	jQuery("#lpc-preloader-wrap").show();
	jQuery.ajax({
		type: "POST",
		url: location.href,
		data : 'action_lpc_reset=action_lpc_page_setting_reset_post' + '&hook=' + name ,
		success : function(data){
			jQuery("#lpc-preloader-wrap").delay(200).fadeOut('slow');
			location.href='?page=login_page_customizer';
	   }			
	});
}

/************ Reset All Data Value ********************
******************************************************/
function wh_lpc_reset_all_data() 
{ 	
	if (confirm('Are you sure you want to reset all plugin settings?')) {
		
		jQuery("#lpc-preloader-wrap").show();
		jQuery.ajax({
			type: "POST",
			url: location.href,
			data : 'action_lpc_reset_all=action_lpc_all_pages_setting_reset',
			success : function(data){
				jQuery("#lpc-preloader-wrap").delay(200).fadeOut('slow');
				location.href='?page=login_page_customizer'
		   }			
		});
	} 
	else {
	   return;
	}
}