<?php
/**
 * Interior Design Firm: Block Patterns
 *
 * @since Interior Design Firm 1.0
 */

/**
 * Registers block patterns and categories.
 *
 * @since Interior Design Firm 1.0
 *
 * @return void
 */
function interior_design_firm_register_block_patterns() {
	$interior_design_firm_block_pattern_categories = array(
		'interior-design-firm'    => array( 'label' => __( 'Interior Design Firm', 'interior-design-firm' ) ),
	);

	$interior_design_firm_block_pattern_categories = apply_filters( 'interior_design_firm_block_pattern_categories', $interior_design_firm_block_pattern_categories );

	foreach ( $interior_design_firm_block_pattern_categories as $name => $properties ) {
		if ( ! WP_Block_Pattern_Categories_Registry::get_instance()->is_registered( $name ) ) {
			register_block_pattern_category( $name, $properties );
		}
	}
}
add_action( 'init', 'interior_design_firm_register_block_patterns', 9 );
