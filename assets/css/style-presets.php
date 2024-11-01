<?php
/**
 * Get the Template and implement it's design.
 * @since  1.0.9
 */
//$selected_preset = get_option( 'customize_presets_settings', true );
$selected_preset = 'default1';
if ( $selected_preset == 'default1' ) {
	include_once WEBHUNT_LPC_ROOT_PATH . 'assets/css/themes/default-1.php';
	echo lpc_first_presets();
} else {
	do_action( 'lpc_add_pro_theme', $selected_preset );
}
?>
