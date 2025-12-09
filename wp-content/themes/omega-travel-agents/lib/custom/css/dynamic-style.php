<?php
/**
 * Omega Travel Agents Dynamic Styles
 *
 * @package Omega Travel Agents
 */

// Enqueue the main stylesheet
function omega_travel_agents_enqueue_styles() {
    // Replace 'your-main-stylesheet-handle' with your actual stylesheet handle
    wp_enqueue_style('omega-travel-agents-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'omega_travel_agents_enqueue_styles');

// Function to add dynamic CSS
function omega_travel_agents_dynamic_css() {
    // Get default theme options
    $omega_travel_agents_default = omega_travel_agents_get_default_theme_options();

    // Sanitize and get theme customizations
    $omega_travel_agents_default_text_color = esc_attr(get_theme_mod('omega_travel_agents_default_text_color', '')); // Default value if needed
    $omega_travel_agents_logo_width_range = absint(get_theme_mod('omega_travel_agents_logo_width_range', $omega_travel_agents_default['omega_travel_agents_logo_width_range']));
    $omega_travel_agents_breadcrumb_font_size = absint(get_theme_mod('omega_travel_agents_breadcrumb_font_size', $omega_travel_agents_default['omega_travel_agents_breadcrumb_font_size']));
    $omega_travel_agents_menu_font_size = absint(get_theme_mod('omega_travel_agents_menu_font_size', $omega_travel_agents_default['omega_travel_agents_menu_font_size']));
    $omega_travel_agents_border_color = esc_attr(get_theme_mod('omega_travel_agents_border_color', '')); // Default value if needed
    $omega_travel_agents_background_color = '#' . ltrim(esc_attr(get_theme_mod('background_color', $omega_travel_agents_default['omega_travel_agents_background_color'])), '#');

    // Create dynamic CSS
    $omega_travel_agents_dynamic_css = "
        body,
        .offcanvas-wraper,
        .header-searchbar-inner {
            background-color: {$omega_travel_agents_background_color};
        }

        a:not(:hover):not(:focus):not(.btn-fancy),
        body, button, input, select, optgroup, textarea {
            color: {$omega_travel_agents_default_text_color};
        }

        .site-topbar, .site-navigation,
        .offcanvas-main-navigation li,
        .offcanvas-main-navigation .sub-menu,
        .offcanvas-main-navigation .submenu-wrapper .submenu-toggle,
        .post-navigation,
        .widget .tab-head .twp-nav-tabs,
        .widget-area-wrapper .widget,
        .footer-widgetarea,
        .site-info,
        .right-sidebar .widget-area-wrapper,
        .left-sidebar .widget-area-wrapper,
        .widget-title,
        .widget_block .wp-block-group > .wp-block-group__inner-container > h2,
        input[type='text'],
        input[type='password'],
        input[type='email'],
        input[type='url'],
        input[type='date'],
        input[type='month'],
        input[type='time'],
        input[type='datetime'],
        input[type='datetime-local'],
        input[type='week'],
        input[type='number'],
        input[type='search'],
        input[type='tel'],
        input[type='color'],
        textarea {
            border-color: {$omega_travel_agents_border_color};
        }

        .site-logo .custom-logo-link img{
            width: {$omega_travel_agents_logo_width_range}px;
            object-fit: object-fit  ;
        }

        .site-navigation .primary-menu > li a {
            font-size: {$omega_travel_agents_menu_font_size}px;
        }

        .breadcrumbs {
            font-size: {$omega_travel_agents_breadcrumb_font_size}px;
        }
    ";

    // Add inline styles to the main stylesheet
    wp_add_inline_style('omega-travel-agents-style', $omega_travel_agents_dynamic_css); // Replace with your actual stylesheet handle
}

add_action('wp_enqueue_scripts', 'omega_travel_agents_dynamic_css');