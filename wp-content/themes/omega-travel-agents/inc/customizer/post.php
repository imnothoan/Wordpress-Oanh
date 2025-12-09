<?php
/**
* Posts Settings.
*
* @package Omega Travel Agents
*/

$omega_travel_agents_default = omega_travel_agents_get_default_theme_options();

// Single Post Section.
$wp_customize->add_section( 'omega_travel_agents_single_posts_settings',
    array(
    'title'      => esc_html__( 'Single Meta Information Settings', 'omega-travel-agents' ),
    'priority'   => 35,
    'capability' => 'edit_theme_options',
    'panel'      => 'omega_travel_agents_theme_option_panel',
    )
);

$wp_customize->add_setting('omega_travel_agents_display_single_post_image',
    array(
        'default' => $omega_travel_agents_default['omega_travel_agents_display_single_post_image'],
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'omega_travel_agents_sanitize_checkbox',
    )
);
$wp_customize->add_control('omega_travel_agents_display_single_post_image',
    array(
        'label' => esc_html__('Enable Single Posts Image', 'omega-travel-agents'),
        'section' => 'omega_travel_agents_single_posts_settings',
        'type' => 'checkbox',
    )
);

$wp_customize->add_setting('omega_travel_agents_post_author',
    array(
        'default' => $omega_travel_agents_default['omega_travel_agents_post_author'],
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'omega_travel_agents_sanitize_checkbox',
    )
);
$wp_customize->add_control('omega_travel_agents_post_author',
    array(
        'label' => esc_html__('Enable Posts Author', 'omega-travel-agents'),
        'section' => 'omega_travel_agents_single_posts_settings',
        'type' => 'checkbox',
    )
);

$wp_customize->add_setting('omega_travel_agents_post_date',
    array(
        'default' => $omega_travel_agents_default['omega_travel_agents_post_date'],
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'omega_travel_agents_sanitize_checkbox',
    )
);
$wp_customize->add_control('omega_travel_agents_post_date',
    array(
        'label' => esc_html__('Enable Posts Date', 'omega-travel-agents'),
        'section' => 'omega_travel_agents_single_posts_settings',
        'type' => 'checkbox',
    )
);

$wp_customize->add_setting('omega_travel_agents_post_category',
    array(
        'default' => $omega_travel_agents_default['omega_travel_agents_post_category'],
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'omega_travel_agents_sanitize_checkbox',
    )
);
$wp_customize->add_control('omega_travel_agents_post_category',
    array(
        'label' => esc_html__('Enable Posts Category', 'omega-travel-agents'),
        'section' => 'omega_travel_agents_single_posts_settings',
        'type' => 'checkbox',
    )
);

$wp_customize->add_setting('omega_travel_agents_post_tags',
    array(
        'default' => $omega_travel_agents_default['omega_travel_agents_post_tags'],
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'omega_travel_agents_sanitize_checkbox',
    )
);
$wp_customize->add_control('omega_travel_agents_post_tags',
    array(
        'label' => esc_html__('Enable Posts Tags', 'omega-travel-agents'),
        'section' => 'omega_travel_agents_single_posts_settings',
        'type' => 'checkbox',
    )
);

$wp_customize->add_setting( 'omega_travel_agents_single_page_content_alignment',
    array(
    'default'           => $omega_travel_agents_default['omega_travel_agents_single_page_content_alignment'],
    'capability'        => 'edit_theme_options',
    'sanitize_callback' => 'omega_travel_agents_sanitize_page_content_alignment',
    )
);
$wp_customize->add_control( 'omega_travel_agents_single_page_content_alignment',
    array(
    'label'       => esc_html__( 'Single Page Content Alignment', 'omega-travel-agents' ),
    'section'     => 'omega_travel_agents_single_posts_settings',
    'type'        => 'select',
    'choices'     => array(
        'left' => esc_html__( 'Left', 'omega-travel-agents' ),
        'center'  => esc_html__( 'Center', 'omega-travel-agents' ),
        'right'    => esc_html__( 'Right', 'omega-travel-agents' ),
        ),
    )
);

$wp_customize->add_setting( 'omega_travel_agents_single_post_content_alignment',
    array(
    'default'           => $omega_travel_agents_default['omega_travel_agents_single_post_content_alignment'],
    'capability'        => 'edit_theme_options',
    'sanitize_callback' => 'omega_travel_agents_sanitize_page_content_alignment',
    )
);
$wp_customize->add_control( 'omega_travel_agents_single_post_content_alignment',
    array(
    'label'       => esc_html__( 'Single Post Content Alignment', 'omega-travel-agents' ),
    'section'     => 'omega_travel_agents_single_posts_settings',
    'type'        => 'select',
    'choices'     => array(
        'left' => esc_html__( 'Left', 'omega-travel-agents' ),
        'center'  => esc_html__( 'Center', 'omega-travel-agents' ),
        'right'    => esc_html__( 'Right', 'omega-travel-agents' ),
        ),
    )
);

// Archive Post Section.
$wp_customize->add_section( 'omega_travel_agents_posts_settings',
    array(
    'title'      => esc_html__( 'Archive Meta Information Settings', 'omega-travel-agents' ),
    'priority'   => 36,
    'capability' => 'edit_theme_options',
    'panel'      => 'omega_travel_agents_theme_option_panel',
    )
);

$wp_customize->add_setting('omega_travel_agents_display_archive_post_format_icon',
    array(
        'default' => $omega_travel_agents_default['omega_travel_agents_display_archive_post_format_icon'],
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'omega_travel_agents_sanitize_checkbox',
    )
);
$wp_customize->add_control('omega_travel_agents_display_archive_post_format_icon',
    array(
        'label' => esc_html__('Enable Posts Format Icon', 'omega-travel-agents'),
        'section' => 'omega_travel_agents_posts_settings',
        'type' => 'checkbox',
    )
);

$wp_customize->add_setting('omega_travel_agents_display_archive_post_image',
    array(
        'default' => $omega_travel_agents_default['omega_travel_agents_display_archive_post_image'],
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'omega_travel_agents_sanitize_checkbox',
    )
);
$wp_customize->add_control('omega_travel_agents_display_archive_post_image',
    array(
        'label' => esc_html__('Enable Posts Image', 'omega-travel-agents'),
        'section' => 'omega_travel_agents_posts_settings',
        'type' => 'checkbox',
    )
);

$wp_customize->add_setting('omega_travel_agents_display_archive_post_category',
    array(
        'default' => $omega_travel_agents_default['omega_travel_agents_display_archive_post_category'],
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'omega_travel_agents_sanitize_checkbox',
    )
);
$wp_customize->add_control('omega_travel_agents_display_archive_post_category',
    array(
        'label' => esc_html__('Enable Posts Category', 'omega-travel-agents'),
        'section' => 'omega_travel_agents_posts_settings',
        'type' => 'checkbox',
    )
);

$wp_customize->add_setting('omega_travel_agents_display_archive_post_title',
    array(
        'default' => $omega_travel_agents_default['omega_travel_agents_display_archive_post_title'],
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'omega_travel_agents_sanitize_checkbox',
    )
);
$wp_customize->add_control('omega_travel_agents_display_archive_post_title',
    array(
        'label' => esc_html__('Enable Posts Title', 'omega-travel-agents'),
        'section' => 'omega_travel_agents_posts_settings',
        'type' => 'checkbox',
    )
);

$wp_customize->add_setting('omega_travel_agents_display_archive_post_content',
    array(
        'default' => $omega_travel_agents_default['omega_travel_agents_display_archive_post_content'],
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'omega_travel_agents_sanitize_checkbox',
    )
);
$wp_customize->add_control('omega_travel_agents_display_archive_post_content',
    array(
        'label' => esc_html__('Enable Posts Content', 'omega-travel-agents'),
        'section' => 'omega_travel_agents_posts_settings',
        'type' => 'checkbox',
    )
);

$wp_customize->add_setting('omega_travel_agents_display_archive_post_button',
    array(
        'default' => $omega_travel_agents_default['omega_travel_agents_display_archive_post_button'],
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'omega_travel_agents_sanitize_checkbox',
    )
);
$wp_customize->add_control('omega_travel_agents_display_archive_post_button',
    array(
        'label' => esc_html__('Enable Posts Button', 'omega-travel-agents'),
        'section' => 'omega_travel_agents_posts_settings',
        'type' => 'checkbox',
    )
);

$wp_customize->add_setting('omega_travel_agents_excerpt_limit',
    array(
        'default'           => $omega_travel_agents_default['omega_travel_agents_excerpt_limit'],
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'omega_travel_agents_sanitize_number_range',
    )
);
$wp_customize->add_control('omega_travel_agents_excerpt_limit',
    array(
        'label'       => esc_html__('Blog Posts Excerpt limit', 'omega-travel-agents'),
        'section'     => 'omega_travel_agents_posts_settings',
        'type'        => 'number',
        'input_attrs' => array(
           'min'   => 1,
           'max'   => 100,
           'step'   => 1,
        ),
    )
);

$wp_customize->add_setting( 'omega_travel_agents_archive_image_size',
	array(
	'default'           => 'medium',
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'omega_travel_agents_sanitize_select',
	)
);
$wp_customize->add_control( 'omega_travel_agents_archive_image_size',
	array(
	'label'       => esc_html__( 'Blog Posts Image Size', 'omega-travel-agents' ),
	'section'     => 'omega_travel_agents_posts_settings',
	'type'        => 'select',
	'choices'               => array(
		'full' => esc_html__( 'Large Size Image', 'omega-travel-agents' ),
		'large' => esc_html__( 'Big Size Image', 'omega-travel-agents' ),
		'medium' => esc_html__( 'Medium Size Image', 'omega-travel-agents' ),
		'small' => esc_html__( 'Small Size Image', 'omega-travel-agents' ),
		'xsmall' => esc_html__( 'Extra Small Size Image', 'omega-travel-agents' ),
		'thumbnail' => esc_html__( 'Thumbnail Size Image', 'omega-travel-agents' ),
	    ),
	)
);

$wp_customize->add_setting('omega_travel_agents_posts_per_columns',
    array(
    'default'           => '3',
    'capability'        => 'edit_theme_options',
    'sanitize_callback' => 'omega_travel_agents_sanitize_number_range',
    )
);
$wp_customize->add_control('omega_travel_agents_posts_per_columns',
    array(
    'label'       => esc_html__('Blog Posts Per Column', 'omega-travel-agents'),
    'section'     => 'omega_travel_agents_posts_settings',
    'type'        => 'number',
    'input_attrs' => array(
    'min'   => 1,
    'max'   => 5,
    'step'   => 1,
    ),
    )
);