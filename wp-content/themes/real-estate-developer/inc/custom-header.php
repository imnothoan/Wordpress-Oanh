<?php
/**
 * @package Real Estate Developer 
 * Setup the WordPress core custom header feature.
 *
 * @uses real_estate_developer_header_style()
*/
function real_estate_developer_custom_header_setup() {
	add_theme_support( 'custom-header', apply_filters( 'real_estate_developer_custom_header_args', array(
		'header-text' 			 =>	false,
		'width'                  => 1200,
		'height'                 => 300,
		'flex-width'    		 => true,
		'flex-height'    		 => true,
		'wp-head-callback'       => 'real_estate_developer_header_style',
	) ) );
}
add_action( 'after_setup_theme', 'real_estate_developer_custom_header_setup' );

if ( ! function_exists( 'real_estate_developer_header_style' ) ) :
/**
 * Styles the header image and text displayed on the blog
 *
 * @see real_estate_developer_custom_header_setup().
 */
add_action( 'wp_enqueue_scripts', 'real_estate_developer_header_style' );

function real_estate_developer_header_style() {
	$real_estate_developer_header_image = get_header_image() ? get_header_image() : get_template_directory_uri() . '/assets/images/header-img.png';
	$real_estate_developer_custom_css = "
        .box-image .single-page-img{
			background-image: url('" . esc_url($real_estate_developer_header_image) . "');
			background-repeat: no-repeat;
	        background-position: center center;
	        background-size: cover !important;
	        height: 300px;
		}";
	   	wp_add_inline_style( 'real-estate-developer-basic-style', $real_estate_developer_custom_css );
}
endif;