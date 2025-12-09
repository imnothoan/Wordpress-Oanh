<?php
/**
* Header Options.
*
* @package Omega Travel Agents
*/

$omega_travel_agents_default = omega_travel_agents_get_default_theme_options();

// Header Section.
$wp_customize->add_section( 'omega_travel_agents_social_media_setting',
	array(
	'title'      => esc_html__( 'Social Media Settings', 'omega-travel-agents' ),
	'priority'   => 10,
	'capability' => 'edit_theme_options',
	'panel'      => 'omega_travel_agents_theme_option_panel',
	)
);

$wp_customize->add_setting( 'omega_travel_agents_header_layout_facebook_link',
    array(
    'default'           => $omega_travel_agents_default['omega_travel_agents_header_layout_facebook_link'],
    'capability'        => 'edit_theme_options',
    'sanitize_callback' => 'esc_url_raw',
    )
);
$wp_customize->add_control( 'omega_travel_agents_header_layout_facebook_link',
    array(
    'label'    => esc_html__( 'Facebook Link', 'omega-travel-agents' ),
    'section'  => 'omega_travel_agents_social_media_setting',
    'type'     => 'url',
    )
);

$wp_customize->add_setting( 'omega_travel_agents_header_layout_twitter_link',
    array(
    'default'           => $omega_travel_agents_default['omega_travel_agents_header_layout_twitter_link'],
    'capability'        => 'edit_theme_options',
    'sanitize_callback' => 'esc_url_raw',
    )
);
$wp_customize->add_control( 'omega_travel_agents_header_layout_twitter_link',
    array(
    'label'    => esc_html__( 'Twitter Link', 'omega-travel-agents' ),
    'section'  => 'omega_travel_agents_social_media_setting',
    'type'     => 'url',
    )
);

$wp_customize->add_setting( 'omega_travel_agents_header_layout_instagram_link',
    array(
    'default'           => $omega_travel_agents_default['omega_travel_agents_header_layout_instagram_link'],
    'capability'        => 'edit_theme_options',
    'sanitize_callback' => 'esc_url_raw',
    )
);
$wp_customize->add_control( 'omega_travel_agents_header_layout_instagram_link',
    array(
    'label'    => esc_html__( 'Instagram Link', 'omega-travel-agents' ),
    'section'  => 'omega_travel_agents_social_media_setting',
    'type'     => 'url',
    )
);

$wp_customize->add_setting( 'omega_travel_agents_header_layout_youtube_link',
    array(
    'default'           => $omega_travel_agents_default['omega_travel_agents_header_layout_youtube_link'],
    'capability'        => 'edit_theme_options',
    'sanitize_callback' => 'esc_url_raw',
    )
);
$wp_customize->add_control( 'omega_travel_agents_header_layout_youtube_link',
    array(
    'label'    => esc_html__( 'Youtube Link', 'omega-travel-agents' ),
    'section'  => 'omega_travel_agents_social_media_setting',
    'type'     => 'url',
    )
);