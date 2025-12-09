<?php
/**
 * Block Styles
 *
 * @package outdoor_camping
 * @since 1.0
 */

if ( function_exists( 'register_block_style' ) ) {
	function outdoor_camping_register_block_styles() {

		//Wp Block Padding Zero
		register_block_style(
			'core/group',
			array(
				'name'  => 'outdoor-camping-padding-0',
				'label' => esc_html__( 'No Padding', 'outdoor-camping' ),
			)
		);

		//Wp Block Post Author Style
		register_block_style(
			'core/post-author',
			array(
				'name'  => 'outdoor-camping-post-author-card',
				'label' => esc_html__( 'Theme Style', 'outdoor-camping' ),
			)
		);

		//Wp Block Button Style
		register_block_style(
			'core/button',
			array(
				'name'         => 'outdoor-camping-button',
				'label'        => esc_html__( 'Plain', 'outdoor-camping' ),
			)
		);

		//Post Comments Style
		register_block_style(
			'core/post-comments',
			array(
				'name'         => 'outdoor-camping-post-comments',
				'label'        => esc_html__( 'Theme Style', 'outdoor-camping' ),
			)
		);

		//Latest Comments Style
		register_block_style(
			'core/latest-comments',
			array(
				'name'         => 'outdoor-camping-latest-comments',
				'label'        => esc_html__( 'Theme Style', 'outdoor-camping' ),
			)
		);


		//Wp Block Table Style
		register_block_style(
			'core/table',
			array(
				'name'         => 'outdoor-camping-wp-table',
				'label'        => esc_html__( 'Theme Style', 'outdoor-camping' ),
			)
		);


		//Wp Block Pre Style
		register_block_style(
			'core/preformatted',
			array(
				'name'         => 'outdoor-camping-wp-preformatted',
				'label'        => esc_html__( 'Theme Style', 'outdoor-camping' ),
			)
		);

		//Wp Block Verse Style
		register_block_style(
			'core/verse',
			array(
				'name'         => 'outdoor-camping-wp-verse',
				'label'        => esc_html__( 'Theme Style', 'outdoor-camping' ),
			)
		);
	}
	add_action( 'init', 'outdoor_camping_register_block_styles' );
}
