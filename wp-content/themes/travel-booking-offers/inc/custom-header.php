<?php
/**
 * Custom header implementation
 *
 * @link https://codex.wordpress.org/Custom_Headers
 *
 * @package Travel Booking Offers
 * @subpackage travel_booking_offers
 */

function travel_booking_offers_custom_header_setup() {
    register_default_headers( array(
        'default-image' => array(
            'url'           => get_template_directory_uri() . '/assets/images/sliderimage.png',
            'thumbnail_url' => get_template_directory_uri() . '/assets/images/sliderimage.png',
            'description'   => __( 'Default Header Image', 'travel-booking-offers' ),
        ),
    ) );
}
add_action( 'after_setup_theme', 'travel_booking_offers_custom_header_setup' );

/**
 * Styles the header image based on Customizer settings.
 */
function travel_booking_offers_header_style() {
    $travel_booking_offers_header_image = get_header_image() ? get_header_image() : get_template_directory_uri() . '/assets/images/sliderimage.png';

    $travel_booking_offers_height     = get_theme_mod( 'travel_booking_offers_header_image_height', 400 );
    $travel_booking_offers_position   = get_theme_mod( 'travel_booking_offers_header_background_position', 'center' );
    $travel_booking_offers_attachment = get_theme_mod( 'travel_booking_offers_header_background_attachment', 1 ) ? 'fixed' : 'scroll';

    $travel_booking_offers_custom_css = "
        .header-img, .single-page-img, .external-div .box-image-page img, .external-div {
            background-image: url('" . esc_url( $travel_booking_offers_header_image ) . "');
            background-size: cover;
            height: " . esc_attr( $travel_booking_offers_height ) . "px;
            background-position: " . esc_attr( $travel_booking_offers_position ) . ";
            background-attachment: " . esc_attr( $travel_booking_offers_attachment ) . ";
        }

        @media (max-width: 1000px) {
            .header-img, .single-page-img, .external-div .box-image-page img,.external-div,.featured-image{
                height: 250px !important;
            }
            .box-text h2{
                font-size: 27px;
            }
        }
    ";

    wp_add_inline_style( 'travel-booking-offers-style', $travel_booking_offers_custom_css );
}
add_action( 'wp_enqueue_scripts', 'travel_booking_offers_header_style' );

/**
 * Enqueue the main theme stylesheet.
 */
function travel_booking_offers_enqueue_styles() {
    wp_enqueue_style( 'travel-booking-offers-style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'travel_booking_offers_enqueue_styles' );