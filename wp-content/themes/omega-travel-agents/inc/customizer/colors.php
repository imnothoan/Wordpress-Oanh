<?php
/**
* Color Settings.
* @package Omega Travel Agents
*/

$omega_travel_agents_default = omega_travel_agents_get_default_theme_options();

$wp_customize->add_setting( 'omega_travel_agents_default_text_color',
    array(
    'default'           => '',
    'capability'        => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_hex_color',
    )
);
$wp_customize->add_control( 
    new WP_Customize_Color_Control( 
    $wp_customize, 
    'omega_travel_agents_default_text_color',
    array(
        'label'      => esc_html__( 'Text Color', 'omega-travel-agents' ),
        'section'    => 'colors',
        'settings'   => 'omega_travel_agents_default_text_color',
    ) ) 
);

$wp_customize->add_setting( 'omega_travel_agents_border_color',
    array(
    'default'           => '',
    'capability'        => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_hex_color',
    )
);
$wp_customize->add_control( 
    new WP_Customize_Color_Control( 
    $wp_customize, 
    'omega_travel_agents_border_color',
    array(
        'label'      => esc_html__( 'Border Color', 'omega-travel-agents' ),
        'section'    => 'colors',
        'settings'   => 'omega_travel_agents_border_color',
    ) ) 
);