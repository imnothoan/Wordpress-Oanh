<?php
	
load_template( get_template_directory() . '/inc/TGM/class-tgm-plugin-activation.php' );

/**
 * Recommended plugins.
 */
function garden_lawn_care_register_recommended_plugins() {
	$plugins = array(
		array(
			'name'             => __( 'Ovation Elements', 'interior-design-firm' ),
			'slug'             => 'ovation-elements',
			'required'         => false,
			'force_activation' => false,
		)
	);
	$config = array();
	garden_lawn_care_tgmpa( $plugins, $config );
}
add_action( 'tgmpa_register', 'garden_lawn_care_register_recommended_plugins' );