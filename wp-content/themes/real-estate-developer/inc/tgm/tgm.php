<?php

require get_template_directory() . '/inc/tgm/class-tgm-plugin-activation.php';
/**
 * Recommended plugins.
 */
function real_estate_developer_register_recommended_plugins() {
	$plugins = array(
		array(
			'name'             => __( 'Essential Real Estate', 'real-estate-developer' ),
			'slug'             => 'essential-real-estate',
			'source'           => '',
			'required'         => false,
			'force_activation' => false,
		),
		array(
			'name'             => __( 'Ibtana - WordPress Website Builder', 'real-estate-developer' ),
			'slug'             => 'ibtana-visual-editor',
			'source'           => '',
			'required'         => false,
			'force_activation' => false,
		)
	);
	$config = array();
	tgmpa( $plugins, $config );
}
add_action( 'tgmpa_register', 'real_estate_developer_register_recommended_plugins' );