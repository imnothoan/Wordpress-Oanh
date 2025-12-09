<?php

require get_template_directory() . '/class-tgm-plugin-activation.php';
/**
 * Recommended plugins.
 */
function vacation_booking_register_recommended_plugins() {
	$plugins = array(		
		array(
			'name'      => esc_html__( 'Contact Form 7', 'vacation-booking' ),
			'slug'      => 'contact-form-7',
			'source'           => '',
			'required'         => false,
			'force_activation' => false,
		)
	);
	$config = array();
	tgmpa( $plugins, $config );
}
add_action( 'tgmpa_register', 'vacation_booking_register_recommended_plugins' );