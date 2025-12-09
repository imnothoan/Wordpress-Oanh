<?php
/**
 * Block Patterns
 *
 * @package outdoor_camping
 * @since 1.0
 */

function outdoor_camping_register_block_patterns() {
	$outdoor_camping_block_pattern_categories = array(
		'outdoor-camping' => array( 'label' => esc_html__( 'Outdoor Camping', 'outdoor-camping' ) ),
		'pages' => array( 'label' => esc_html__( 'Pages', 'outdoor-camping' ) ),
	);

	$outdoor_camping_block_pattern_categories = apply_filters( 'outdoor_camping_outdoor_camping_block_pattern_categories', $outdoor_camping_block_pattern_categories );

	foreach ( $outdoor_camping_block_pattern_categories as $name => $properties ) {
		if ( ! WP_Block_Pattern_Categories_Registry::get_instance()->is_registered( $name ) ) {
			register_block_pattern_category( $name, $properties );
		}
	}
}
add_action( 'init', 'outdoor_camping_register_block_patterns', 9 );