<?php
/**
* Header Options.
*
* @package Omega Travel Agents
*/

$omega_travel_agents_default = omega_travel_agents_get_default_theme_options();

// Header Section.
$wp_customize->add_section( 'omega_travel_agents_button_header_setting',
	array(
	'title'      => esc_html__( 'Header Settings', 'omega-travel-agents' ),
	'priority'   => 10,
	'capability' => 'edit_theme_options',
	'panel'      => 'omega_travel_agents_theme_option_panel',
	)
);

$wp_customize->add_setting('omega_travel_agents_sticky',
    array(
        'default' => $omega_travel_agents_default['omega_travel_agents_sticky'],
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'omega_travel_agents_sanitize_checkbox',
    )
);
$wp_customize->add_control('omega_travel_agents_sticky',
    array(
        'label' => esc_html__('Enable Sticky Header', 'omega-travel-agents'),
        'section' => 'omega_travel_agents_button_header_setting',
        'type' => 'checkbox',
    )
);

$wp_customize->add_setting('omega_travel_agents_menu_font_size',
    array(
        'default'           => $omega_travel_agents_default['omega_travel_agents_menu_font_size'],
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'omega_travel_agents_sanitize_number_range',
    )
);
$wp_customize->add_control('omega_travel_agents_menu_font_size',
    array(
        'label'       => esc_html__('Menu Font Size', 'omega-travel-agents'),
        'section'     => 'omega_travel_agents_button_header_setting',
        'type'        => 'number',
        'input_attrs' => array(
           'min'   => 1,
           'max'   => 30,
           'step'   => 1,
        ),
    )
);

$wp_customize->add_setting( 'omega_travel_agents_menu_text_transform',
    array(
    'default'           => $omega_travel_agents_default['omega_travel_agents_menu_text_transform'],
    'capability'        => 'edit_theme_options',
    'sanitize_callback' => 'omega_travel_agents_sanitize_menu_transform',
    )
);
$wp_customize->add_control( 'omega_travel_agents_menu_text_transform',
    array(
    'label'       => esc_html__( 'Menu Text Transform', 'omega-travel-agents' ),
    'section'     => 'omega_travel_agents_button_header_setting',
    'type'        => 'select',
    'choices'     => array(
        'capitalize' => esc_html__( 'Capitalize', 'omega-travel-agents' ),
        'uppercase'  => esc_html__( 'Uppercase', 'omega-travel-agents' ),
        'lowercase'    => esc_html__( 'Lowercase', 'omega-travel-agents' ),
        ),
    )
);