<?php
/**
 * Custom template tags for this theme
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package Travel Booking Offers
 * @subpackage travel_booking_offers
 */

/**
 * Returns true if a blog has more than 1 category.
 *
 * @return bool
 */
function travel_booking_offers_categorized_blog() {
	$travel_booking_offers_category_count = get_transient( 'travel_booking_offers_categories' );

	if ( false === $travel_booking_offers_category_count ) {
		// Create an array of all the categories that are attached to posts.
		$travel_booking_offers_categories = get_categories( array(
			'fields'     => 'ids',
			'hide_empty' => 1,
			// We only need to know if there is more than one category.
			'number'     => 2,
		) );

		// Count the number of categories that are attached to the posts.
		$travel_booking_offers_category_count = count( $travel_booking_offers_categories );

		set_transient( 'travel_booking_offers_categories', $travel_booking_offers_category_count );
	}

	// Allow viewing case of 0 or 1 categories in post preview.
	if ( is_preview() ) {
		return true;
	}

	return $travel_booking_offers_category_count > 1;
}

if ( ! function_exists( 'travel_booking_offers_the_custom_logo' ) ) :
/**
 * Displays the optional custom logo.
 *
 * Does nothing if the custom logo is not available.
 *
 * @since Travel Booking Offers
 */
function travel_booking_offers_the_custom_logo() {
	if ( function_exists( 'the_custom_logo' ) ) {
		the_custom_logo();
	}
}
endif;

/**
 * Flush out the transients used in travel_booking_offers_categorized_blog.
 */
function travel_booking_offers_category_transient_flusher() {
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
		return;
	}
	// Like, beat it. Dig?
	delete_transient( 'travel_booking_offers_categories' );
}
add_action( 'edit_category', 'travel_booking_offers_category_transient_flusher' );
add_action( 'save_post',     'travel_booking_offers_category_transient_flusher' );