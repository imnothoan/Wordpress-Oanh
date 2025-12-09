<?php

function omega_travel_agents_enqueue_fonts() {
    $omega_travel_agents_default_font_content = 'montserrat';
    $omega_travel_agents_default_font_heading = 'mansalva';

    $omega_travel_agents_font_content = esc_attr(get_theme_mod('omega_travel_agents_content_typography_font', $omega_travel_agents_default_font_content));
    $omega_travel_agents_font_heading = esc_attr(get_theme_mod('omega_travel_agents_heading_typography_font', $omega_travel_agents_default_font_heading));

    $omega_travel_agents_css = '';

    // Always enqueue main font
    $omega_travel_agents_css .= '
    :root {
        --font-main: ' . $omega_travel_agents_font_content . ', ' . (in_array($omega_travel_agents_font_content, ['bitter', 'montserrat']) ? 'serif' : 'sans-serif') . '!important;
    }';
    wp_enqueue_style('omega-travel-agents-style-font-general', get_template_directory_uri() . '/fonts/' . $omega_travel_agents_font_content . '/font.css');

    // Always enqueue header font
    $omega_travel_agents_css .= '
    :root {
        --font-head: ' . $omega_travel_agents_font_heading . ', ' . (in_array($omega_travel_agents_font_heading, ['bitter', 'montserrat']) ? 'serif' : 'sans-serif') . '!important;
    }';
    wp_enqueue_style('omega-travel-agents-style-font-h', get_template_directory_uri() . '/fonts/' . $omega_travel_agents_font_heading . '/font.css');

    // Add inline style
    wp_add_inline_style('omega-travel-agents-style-font-general', $omega_travel_agents_css);
}
add_action('wp_enqueue_scripts', 'omega_travel_agents_enqueue_fonts', 50);