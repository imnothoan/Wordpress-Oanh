<?php

	require get_template_directory() . '/inc/homepage-setup/tgm/class-tgm-plugin-activation.php';
/**
 * Recommended plugins.
 */
function omega_travel_agents_register_recommended_plugins() {
	$plugins = array(
		
		array(
			'name'             => __( 'WooCommerce', 'omega-travel-agents' ),
			'slug'             => 'woocommerce',
			'source'           => '',
			'required'         => false,
			'force_activation' => false,
		),
		array(
			'name'             => __( 'Contact Form 7', 'omega-travel-agents' ),
			'slug'             => 'contact-form-7',
			'source'           => '',
			'required'         => false,
			'force_activation' => false,
		)

	);
	$config = array();
	tgmpa( $plugins, $config );
}
add_action( 'tgmpa_register', 'omega_travel_agents_register_recommended_plugins' );