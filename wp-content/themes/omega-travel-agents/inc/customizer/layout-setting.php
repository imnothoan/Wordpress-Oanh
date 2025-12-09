<?php
/**
* Layouts Settings.
*
* @package Omega Travel Agents
*/

$omega_travel_agents_default = omega_travel_agents_get_default_theme_options();

// Layout Section.
$wp_customize->add_section( 'omega_travel_agents_layout_setting',
	array(
	'title'      => esc_html__( 'Sidebar Settings', 'omega-travel-agents' ),
	'priority'   => 20,
	'capability' => 'edit_theme_options',
	'panel'      => 'omega_travel_agents_theme_option_panel',
	)
);

$wp_customize->add_setting( 'omega_travel_agents_global_sidebar_layout',
    array(
    'default'           => $omega_travel_agents_default['omega_travel_agents_global_sidebar_layout'],
    'capability'        => 'edit_theme_options',
    'sanitize_callback' => 'omega_travel_agents_sanitize_sidebar_option',
    )
);
$wp_customize->add_control( 'omega_travel_agents_global_sidebar_layout',
    array(
    'label'       => esc_html__( 'Global Sidebar Layout', 'omega-travel-agents' ),
    'section'     => 'omega_travel_agents_layout_setting',
    'type'        => 'select',
    'choices'     => array(
        'right-sidebar' => esc_html__( 'Right Sidebar', 'omega-travel-agents' ),
        'left-sidebar'  => esc_html__( 'Left Sidebar', 'omega-travel-agents' ),
        'no-sidebar'    => esc_html__( 'No Sidebar', 'omega-travel-agents' ),
        ),
    )
);

$wp_customize->add_setting('omega_travel_agents_page_sidebar_layout', array(
    'default'           => $omega_travel_agents_default['omega_travel_agents_global_sidebar_layout'],
    'capability'        => 'edit_theme_options',
    'sanitize_callback' => 'omega_travel_agents_sanitize_sidebar_option',
));

$wp_customize->add_control('omega_travel_agents_page_sidebar_layout', array(
    'label'       => esc_html__('Single Page Sidebar Layout', 'omega-travel-agents'),
    'section'     => 'omega_travel_agents_layout_setting',
    'type'        => 'select',
    'choices'     => array(
        'right-sidebar' => esc_html__('Right Sidebar', 'omega-travel-agents'),
        'left-sidebar'  => esc_html__('Left Sidebar', 'omega-travel-agents'),
        'no-sidebar'    => esc_html__('No Sidebar', 'omega-travel-agents'),
    ),
));

$wp_customize->add_setting('omega_travel_agents_post_sidebar_layout', array(
    'default'           => $omega_travel_agents_default['omega_travel_agents_global_sidebar_layout'],
    'capability'        => 'edit_theme_options',
    'sanitize_callback' => 'omega_travel_agents_sanitize_sidebar_option',
));

$wp_customize->add_control('omega_travel_agents_post_sidebar_layout', array(
    'label'       => esc_html__('Single Post Sidebar Layout', 'omega-travel-agents'),
    'section'     => 'omega_travel_agents_layout_setting',
    'type'        => 'select',
    'choices'     => array(
        'right-sidebar' => esc_html__('Right Sidebar', 'omega-travel-agents'),
        'left-sidebar'  => esc_html__('Left Sidebar', 'omega-travel-agents'),
        'no-sidebar'    => esc_html__('No Sidebar', 'omega-travel-agents'),
    ),
));

$wp_customize->add_setting('omega_travel_agents_sticky_sidebar',
    array(
        'default'           => true,
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'omega_travel_agents_sanitize_checkbox',
    )
);
$wp_customize->add_control('omega_travel_agents_sticky_sidebar',
    array(
        'label' => esc_html__('Enable/Disable Sticky Sidebar', 'omega-travel-agents'),
        'section' => 'omega_travel_agents_layout_setting',
        'type' => 'checkbox',
    )
);