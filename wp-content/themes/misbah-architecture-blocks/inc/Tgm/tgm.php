<?php

require get_theme_file_path( '/inc/Tgm/class-tgm-plugin-activation.php' );
/**
 * Recommended plugins.
 */
function misbah_architecture_blocks_register_recommended_plugins() {
	$plugins = array(
		array(
			'name'      => esc_html__( 'Gutentor', 'misbah-architecture-blocks' ),
			'slug'      => 'gutentor',
			'source'           => '',
			'required'         => false,
			'force_activation' => false,
		)
	);
	$config = array();
	tgmpa( $plugins, $config );
}
add_action( 'tgmpa_register', 'misbah_architecture_blocks_register_recommended_plugins' );