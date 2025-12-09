<?php
/**
 * Interior Design Firm functions and definitions
 *
 * @package Interior Design Firm
 */

if ( ! function_exists( 'interior_design_firm_setup' ) ) :
function interior_design_firm_setup() {
	
	if ( ! isset( $content_width ) )
		$content_width = 640; /* pixels */

    load_theme_textdomain( 'interior-design-firm', get_template_directory() . '/languages' );
    
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'custom-logo', array(
		'height'      => 240,
		'width'       => 240,
		'flex-height' => true,
	) );
	
	add_theme_support( 'custom-background', array(
		'default-color' => 'ffffff'
	) );
	
	// Add support for Block Styles.
	add_theme_support( 'wp-block-styles' );

	// Add support for full and wide align images.
	add_theme_support( 'align-wide' );
			
	// Add support for responsive embedded content.
	add_theme_support( 'responsive-embeds' );

    add_theme_support('woocommerce');

	// Enqueue editor styles.
	add_editor_style( array( 'assets/css/editor-style.css' ) );

	if (! defined('INTERIOR_DESIGN_FIRM_VERSION')) {
		// Replace the version number of the theme on each release.
		define('INTERIOR_DESIGN_FIRM_VERSION', wp_get_theme()->get('Version'));
	}

    require get_parent_theme_file_path( '/inc/dashboard/dashboard.php' );

    require get_parent_theme_file_path( '/inc/customizer/customizer.php' );
	
}
endif; // interior_design_firm_setup
add_action( 'after_setup_theme', 'interior_design_firm_setup' );

function interior_design_firm_scripts() {
    wp_enqueue_style( 'interior-design-firm-basic-style', get_stylesheet_uri() );

    wp_style_add_data( 'interior-design-firm-basic-style', 'rtl', 'replace' );

    $interior_design_firm_enable_animations = get_option( 'interior_design_firm_enable_animations', true );

    if ( $interior_design_firm_enable_animations ) {
        //animation
		wp_enqueue_script( 'wow-js', get_theme_file_uri( '/assets/js/wow.js' ), array( 'jquery' ), true );

		wp_enqueue_style( 'animate-css', get_template_directory_uri().'/assets/css/animate.css' );
    }

    //font-awesome
	wp_enqueue_style( 'fontawesome', get_template_directory_uri() . '/assets/font-awesome/css/all.css', array(), '6.7.0' );

	//homepage slider
	wp_enqueue_style('interior-design-firm-swiper-bundle-css', get_template_directory_uri() . '/assets/css/swiper-bundle.css', array(), INTERIOR_DESIGN_FIRM_VERSION);

	wp_enqueue_script('interior-design-firm-swiper-bundle-js', get_template_directory_uri() . '/assets/js/swiper-bundle.js', array('jquery'), INTERIOR_DESIGN_FIRM_VERSION, true);

	// script.js
	wp_enqueue_script('interior-design-firm-main-script', get_template_directory_uri() . '/assets/js/script.js', array('jquery'), INTERIOR_DESIGN_FIRM_VERSION, true);

}
add_action( 'wp_enqueue_scripts', 'interior_design_firm_scripts' );

function interior_design_firm_enqueue_admin_script($hook) {
    // Enqueue admin JS for notices
    wp_enqueue_script('interior-design-firm-welcome-notice', get_template_directory_uri() . '/inc/dashboard/interior-design-firm-welcome-notice.js', array('jquery'), '', true);
    
    // Localize script to pass data to JavaScript
    wp_localize_script('interior-design-firm-welcome-notice', 'interior_design_firm_localize', array(
        'ajax_url' => admin_url('admin-ajax.php'),
        'nonce' => wp_create_nonce('interior_design_firm_welcome_nonce'),
        'dismiss_nonce' => wp_create_nonce('interior_design_firm_welcome_nonce'), // Nonce for dismissal
        'redirect_url' => admin_url('themes.php?page=interior-design-firm-guide-page')
    ));
}
add_action('admin_enqueue_scripts', 'interior_design_firm_enqueue_admin_script');

function interior_design_firm_admin_theme_style() {
   wp_enqueue_style('interior-design-firm-custom-admin-style', esc_url(get_template_directory_uri()) . '/inc/dashboard/dashboard.css');
}
add_action('admin_enqueue_scripts', 'interior_design_firm_admin_theme_style');

// Block Patterns.
require get_template_directory() . '/block-patterns.php';
require get_template_directory() .'/inc/TGM/tgm.php';
require get_template_directory() . '/custom-setting.php';
require_once get_template_directory() . '/inc/dashboard/welcome-notice.php';

//woocommerce plugin skip 
add_filter( 'woocommerce_prevent_automatic_wizard_redirect', '__return_true' );