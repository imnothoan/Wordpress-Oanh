<?php
/**
 *
 * Pagination Functions
 *
 * @package Omega Travel Agents
 */

/**
 * Pagination for archive.
 */
function omega_travel_agents_render_posts_pagination() {
    // Get the setting to check if pagination is enabled
    $omega_travel_agents_is_pagination_enabled = get_theme_mod( 'omega_travel_agents_enable_pagination', true );

    // Check if pagination is enabled
    if ( $omega_travel_agents_is_pagination_enabled ) {
        // Get the selected pagination type from the Customizer
        $omega_travel_agents_pagination_type = get_theme_mod( 'omega_travel_agents_theme_pagination_type', 'numeric' );

        // Check if the pagination type is "newer_older" (Previous/Next) or "numeric"
        if ( 'newer_older' === $omega_travel_agents_pagination_type ) :
            // Display "Newer/Older" pagination (Previous/Next navigation)
            the_posts_navigation(
                array(
                    'prev_text' => __( '&laquo; Newer', 'omega-travel-agents' ),  // Change the label for "previous"
                    'next_text' => __( 'Older &raquo;', 'omega-travel-agents' ),  // Change the label for "next"
                    'screen_reader_text' => __( 'Posts navigation', 'omega-travel-agents' ),
                )
            );
        else :
            // Display numeric pagination (Page numbers)
            the_posts_pagination(
                array(
                    'prev_text' => __( '&laquo; Previous', 'omega-travel-agents' ),
                    'next_text' => __( 'Next &raquo;', 'omega-travel-agents' ),
                    'type'      => 'list', // Display as <ul> <li> tags
                    'screen_reader_text' => __( 'Posts navigation', 'omega-travel-agents' ),
                )
            );
        endif;
    }
}
add_action( 'omega_travel_agents_posts_pagination', 'omega_travel_agents_render_posts_pagination', 10 );