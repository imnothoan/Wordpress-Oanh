<?php
/**
* Custom Functions.
*
* @package Omega Travel Agents
*/

if( !function_exists( 'omega_travel_agents_sanitize_sidebar_option' ) ) :

    // Sidebar Option Sanitize.
    function omega_travel_agents_sanitize_sidebar_option( $omega_travel_agents_input ){

        $omega_travel_agents_metabox_options = array( 'global-sidebar','left-sidebar','right-sidebar','no-sidebar' );
        if( in_array( $omega_travel_agents_input,$omega_travel_agents_metabox_options ) ){

            return $omega_travel_agents_input;

        }

        return;

    }

endif;

if ( ! function_exists( 'omega_travel_agents_sanitize_checkbox' ) ) :

	/**
	 * Sanitize checkbox.
	 */
	function omega_travel_agents_sanitize_checkbox( $omega_travel_agents_checked ) {

		return ( ( isset( $omega_travel_agents_checked ) && true === $omega_travel_agents_checked ) ? true : false );

	}

endif;


if ( ! function_exists( 'omega_travel_agents_sanitize_select' ) ) :

    /**
     * Sanitize select.
     */
    function omega_travel_agents_sanitize_select( $omega_travel_agents_input, $omega_travel_agents_setting ) {
        $omega_travel_agents_input = sanitize_text_field( $omega_travel_agents_input );
        $omega_travel_agents_choices = $omega_travel_agents_setting->manager->get_control( $omega_travel_agents_setting->id )->choices;
        return ( array_key_exists( $omega_travel_agents_input, $omega_travel_agents_choices ) ? $omega_travel_agents_input : $omega_travel_agents_setting->default );
    }

endif;