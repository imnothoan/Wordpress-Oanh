<?php
/**
* Typography Settings.
*
* @package Omega Travel Agents
*/

$omega_travel_agents_default = omega_travel_agents_get_default_theme_options();

// Layout Section.
$wp_customize->add_section( 'omega_travel_agents_typography_setting',
	array(
	'title'      => esc_html__( 'Typography Settings', 'omega-travel-agents' ),
	'priority'   => 21,
	'capability' => 'edit_theme_options',
	'panel'      => 'omega_travel_agents_theme_option_panel',
	)
);

// -----------------  Font array
$omega_travel_agents_fonts = array(
    'Select'           => __('Default Font', 'omega-travel-agents'),
    'bad-script' => 'Bad Script',
    'bitter'     => 'Bitter',
    'exo-2'      => 'Exo 2',
    'jost'       => 'Jost',
    'open-sans'  => 'Open Sans',
    'oswald'     => 'Oswald',
    'montserrat'     => 'Montserrat',
    'mansalva'     => 'Mansalva',
    'outfit'     => 'Outfit',
);

 // -----------------  General text font
 $wp_customize->add_setting( 'omega_travel_agents_content_typography_font', array(
    'default'           => 'montserrat',
    'capability'        => 'edit_theme_options',
    'sanitize_callback' => 'omega_travel_agents_radio_sanitize',
) );
$wp_customize->add_control( 'omega_travel_agents_content_typography_font', array(
    'type'     => 'select',
    'label'    => esc_html__( 'General Content Font', 'omega-travel-agents' ),
    'section'  => 'omega_travel_agents_typography_setting',
    'settings' => 'omega_travel_agents_content_typography_font',
    'choices'  => $omega_travel_agents_fonts,
) );

 // -----------------  General Heading Font
$wp_customize->add_setting( 'omega_travel_agents_heading_typography_font', array(
    'default'           => 'mansalva',
    'capability'        => 'edit_theme_options',
    'sanitize_callback' => 'omega_travel_agents_radio_sanitize',
) );
$wp_customize->add_control( 'omega_travel_agents_heading_typography_font', array(
    'type'     => 'select',
    'label'    => esc_html__( 'General Heading Font', 'omega-travel-agents' ),
    'section'  => 'omega_travel_agents_typography_setting',
    'settings' => 'omega_travel_agents_heading_typography_font',
    'choices'  => $omega_travel_agents_fonts,
) );