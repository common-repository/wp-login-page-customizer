//for pages menu
function lpc_loadFile(filename){
	lpc_hideAnotherFile(filename);
	jQuery('#'+filename).show();	
}

function lpc_hideAnotherFile(file){
	var files = ['dashboard','predesing','background','loginform','logo','input','button','footer','welcome','gcaptcha','export','systeminfo','plugins','products','help'];
	var file = [file];
	var diff = [];
	jQuery.grep(files, function(el) {
			if (jQuery.inArray(el, file) == -1) diff.push(el);
			for(var i=0;i<=diff.length;i++){
				jQuery('#'+diff[i]).hide();
			}
	});
}

//for sorting the social login info
jQuery(document).ready(function($){
    //for sorting the social networks
    $('.network-settings').sortable({
        containment: "parent"
    });

    $('.lpc-label').click(function(){
        $(this).closest('.lpc-settings').find('.lpc_network_settings_wrapper').toggle('slow', function(){
            if ($(this).closest('.lpc-settings').find('.lpc_network_settings_wrapper').is(':visible')) {
                $(this).closest('.lpc-settings').find('.lpc_show_hide i').removeClass('fa-caret-down');
                $(this).closest('.lpc-settings').find('.lpc_show_hide i').addClass('fa-caret-up');
            }else {
                $(this).closest('.lpc-settings').find('.lpc_show_hide i').removeClass('fa-caret-up');
                $(this).closest('.lpc-settings').find('.lpc_show_hide i').addClass('fa-caret-down');
             }

        });
    });
});

//for Preloader 
jQuery(document).ready(function(){
	jQuery( "#wpcontent" ).prepend( '<div id="lpc-preloader-wrap"><div class="sk-fading-circle"><div class="sk-circle1 sk-circle"></div><div class="sk-circle2 sk-circle"></div><div class="sk-circle3 sk-circle"></div><div class="sk-circle4 sk-circle"></div><div class="sk-circle5 sk-circle"></div><div class="sk-circle6 sk-circle"></div><div class="sk-circle7 sk-circle"></div><div class="sk-circle8 sk-circle"></div><div class="sk-circle9 sk-circle"></div><div class="sk-circle10 sk-circle"></div><div class="sk-circle11 sk-circle"></div><div class="sk-circle12 sk-circle"></div></div></div>' );
});