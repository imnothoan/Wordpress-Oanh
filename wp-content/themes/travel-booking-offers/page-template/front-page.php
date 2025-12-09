<?php
/**
 * Template Name: Custom Home Page
 *
 * @package Travel Booking Offers
 * @subpackage travel_booking_offers
 */

get_header(); ?>

<main id="tp_content" role="main">
	<?php do_action( 'travel_booking_offers_before_slider' ); ?>

	<?php get_template_part( 'template-parts/home/slider' ); ?>
	<?php do_action( 'travel_booking_offers_after_slider' ); ?>

	<?php get_template_part( 'template-parts/home/our-services' ); ?>
	<?php do_action( 'travel_booking_offers_after_our-services' ); ?>

	<?php get_template_part( 'template-parts/home/home-content' ); ?>
	<?php do_action( 'travel_booking_offers_after_home_content' ); ?>
</main>

<?php get_footer();