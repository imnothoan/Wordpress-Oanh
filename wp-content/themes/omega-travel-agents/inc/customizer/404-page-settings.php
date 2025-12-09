<?php
/**
* 404 Page Settings.
*
* @package Omega Travel Agents
*/

$omega_travel_agents_default = omega_travel_agents_get_default_theme_options();

$wp_customize->add_section( 'omega_travel_agents_404_page_settings',
    array(
        'title'      => esc_html__( '404 Page Settings', 'omega-travel-agents' ),
        'priority'   => 200,
        'capability' => 'edit_theme_options',
        'panel'      => 'omega_travel_agents_theme_addons_panel',
    )
);

$wp_customize->add_setting( 'omega_travel_agents_404_main_title',
    array(
        'default'           => $omega_travel_agents_default['omega_travel_agents_404_main_title'],
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_text_field',
    )
);
$wp_customize->add_control( 'omega_travel_agents_404_main_title',
    array(
        'label'    => esc_html__( '404 Main Title', 'omega-travel-agents' ),
        'section'  => 'omega_travel_agents_404_page_settings',
        'type'     => 'text',
    )
);

$wp_customize->add_setting( 'omega_travel_agents_404_subtitle_one',
    array(
        'default'           => $omega_travel_agents_default['omega_travel_agents_404_subtitle_one'],
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_text_field',
    )
);
$wp_customize->add_control( 'omega_travel_agents_404_subtitle_one',
    array(
        'label'    => esc_html__( '404 Sub Title One', 'omega-travel-agents' ),
        'section'  => 'omega_travel_agents_404_page_settings',
        'type'     => 'text',
    )
);

$wp_customize->add_setting( 'omega_travel_agents_404_para_one',
    array(
        'default'           => $omega_travel_agents_default['omega_travel_agents_404_para_one'],
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_text_field',
    )
);
$wp_customize->add_control( 'omega_travel_agents_404_para_one',
    array(
        'label'    => esc_html__( '404 Para Text One', 'omega-travel-agents' ),
        'section'  => 'omega_travel_agents_404_page_settings',
        'type'     => 'text',
    )
);

$wp_customize->add_setting( 'omega_travel_agents_404_subtitle_two',
    array(
        'default'           => $omega_travel_agents_default['omega_travel_agents_404_subtitle_two'],
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_text_field',
    )
);
$wp_customize->add_control( 'omega_travel_agents_404_subtitle_two',
    array(
        'label'    => esc_html__( '404 Sub Title Two', 'omega-travel-agents' ),
        'section'  => 'omega_travel_agents_404_page_settings',
        'type'     => 'text',
    )
);

$wp_customize->add_setting( 'omega_travel_agents_404_para_two',
    array(
        'default'           => $omega_travel_agents_default['omega_travel_agents_404_para_two'],
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_text_field',
    )
);
$wp_customize->add_control( 'omega_travel_agents_404_para_two',
    array(
        'label'    => esc_html__( '404 Para Text Two', 'omega-travel-agents' ),
        'section'  => 'omega_travel_agents_404_page_settings',
        'type'     => 'text',
    )
);