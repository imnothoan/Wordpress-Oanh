<?php
/**
 * Body Classes.
 * @package Omega Travel Agents
 */

if (!function_exists('omega_travel_agents_body_classes')) :

    function omega_travel_agents_body_classes($omega_travel_agents_classes)
    {
        $omega_travel_agents_defaults = omega_travel_agents_get_default_theme_options();
        $omega_travel_agents_layout = omega_travel_agents_get_final_sidebar_layout();

        // Adds a class of hfeed to non-singular pages.
        if (!is_singular()) {
            $omega_travel_agents_classes[] = 'hfeed';
        }

        // Sidebar layout logic
        $omega_travel_agents_classes[] = $omega_travel_agents_layout;

        // Copyright alignment
        $copyright_alignment = get_theme_mod('omega_travel_agents_copyright_alignment', 'Default');
        $omega_travel_agents_classes[] = 'copyright-' . strtolower($copyright_alignment);

        return $omega_travel_agents_classes;
    }

endif;

add_filter('body_class', 'omega_travel_agents_body_classes');