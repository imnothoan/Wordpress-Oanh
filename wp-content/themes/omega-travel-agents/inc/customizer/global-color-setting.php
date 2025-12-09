<?php
/**
* Global Color Settings.
*
* @package Omega Travel Agents
*/

$omega_travel_agents_default = omega_travel_agents_get_default_theme_options();

// Layout Section.
$wp_customize->add_section( 'omega_travel_agents_global_color_setting',
	array(
	'title'      => esc_html__( 'Global Color Settings', 'omega-travel-agents' ),
	'priority'   => 21,
	'capability' => 'edit_theme_options',
	'panel'      => 'omega_travel_agents_theme_option_panel',
	)
);

$wp_customize->add_setting( 'omega_travel_agents_global_color',
    array(
    'default'           => '#132E41',
    'capability'        => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_hex_color',
    )
);
$wp_customize->add_control( 
    new WP_Customize_Color_Control( 
    $wp_customize, 
    'omega_travel_agents_global_color',
    array(
        'label'      => esc_html__( 'Global Color', 'omega-travel-agents' ),
        'section'    => 'omega_travel_agents_global_color_setting',
        'settings'   => 'omega_travel_agents_global_color',
    ) ) 
);