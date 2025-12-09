<?php
/**
 * Vacation Booking functions
 */

//Admin css
	add_editor_style( array( 'assets/css/admin.css' ) );

if ( ! function_exists( 'vacation_booking_setup' ) ) :
function vacation_booking_setup() {
    load_theme_textdomain( 'vacation-booking', get_template_directory() . '/languages' );

    /**
	 * About Theme Function
	 */
	require get_theme_file_path( '/about-theme/about-theme.php' );
}
endif; 
add_action( 'after_setup_theme', 'vacation_booking_setup' );

if ( ! function_exists( 'vacation_booking_styles' ) ) :
	function vacation_booking_styles() {
		// Register theme stylesheet.
		wp_register_style('vacation-booking-style',
			get_template_directory_uri() . '/style.css',array(),
			wp_get_theme()->get( 'Version' )
		);
		
		wp_enqueue_script('vacation-booking-js',
        	get_template_directory_uri() . '/assets/js/effects.js',array(),
        	wp_get_theme()->get('Version'),true 
   		 );

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'vacation-booking-style' );

		wp_style_add_data( 'vacation-booking-style', 'rtl', 'replace' );
	}
endif;
add_action( 'wp_enqueue_scripts', 'vacation_booking_styles' );

/**
 * TGM
 */
require get_template_directory() . '/tgm.php';

/**
 * Customizer
 */
require get_template_directory() . '/inc/customizer.php';