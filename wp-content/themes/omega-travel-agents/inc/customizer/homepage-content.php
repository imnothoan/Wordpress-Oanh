<?php
/**
* Header Banner Options.
*
* @package Omega Travel Agents
*/

$omega_travel_agents_default = omega_travel_agents_get_default_theme_options();
$omega_travel_agents_post_category_list = omega_travel_agents_post_category_list();

$wp_customize->add_section( 'omega_travel_agents_header_banner_setting',
    array(
    'title'      => esc_html__( 'Slider Settings', 'omega-travel-agents' ),
    'priority'   => 10,
    'capability' => 'edit_theme_options',
    'panel'      => 'theme_home_pannel',
    )
);

$wp_customize->add_setting('omega_travel_agents_display_header_text',
    array(
        'default' => $omega_travel_agents_default['omega_travel_agents_header_banner'],
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'omega_travel_agents_sanitize_checkbox',
    )
);
$wp_customize->add_control('omega_travel_agents_display_header_text',
    array(
        'label' => esc_html__('Enable / Disable Tagline', 'omega-travel-agents'),
        'section' => 'title_tagline',
        'type' => 'checkbox',
    )
);

$wp_customize->add_setting('omega_travel_agents_header_banner',
    array(
        'default' => $omega_travel_agents_default['omega_travel_agents_banner'],
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'omega_travel_agents_sanitize_checkbox',
    )
);
$wp_customize->add_control('omega_travel_agents_header_banner',
    array(
        'label' => esc_html__('Enable Slider', 'omega-travel-agents'),
        'section' => 'omega_travel_agents_header_banner_setting',
        'type' => 'checkbox',
    )
);

$wp_customize->add_setting( 'omega_travel_agents_header_banner_cat',
    array(
    'default'           => 'uncategorized',
    'capability'        => 'edit_theme_options',
    'sanitize_callback' => 'omega_travel_agents_sanitize_select',
    )
);
$wp_customize->add_control( 'omega_travel_agents_header_banner_cat',
    array(
    'label'       => esc_html__( 'Slider Post Category', 'omega-travel-agents' ),
    'section'     => 'omega_travel_agents_header_banner_setting',
    'type'        => 'select',
    'choices'     => $omega_travel_agents_post_category_list,
    )
);

$wp_customize->add_setting( 'omega_travel_agents_slider_team_box_title',
    array(
    'default'           => $omega_travel_agents_default['omega_travel_agents_slider_team_box_title'],
    'capability'        => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field',
    )
);
$wp_customize->add_control( 'omega_travel_agents_slider_team_box_title',
    array(
    'label'    => esc_html__( 'Team Title', 'omega-travel-agents' ),
    'section'  => 'omega_travel_agents_header_banner_setting',
    'type'     => 'text',
    )
);

$wp_customize->add_setting( 'omega_travel_agents_slider_team_box_text',
    array(
    'default'           => $omega_travel_agents_default['omega_travel_agents_slider_team_box_text'],
    'capability'        => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field',
    )
);
$wp_customize->add_control( 'omega_travel_agents_slider_team_box_text',
    array(
    'label'    => esc_html__( 'Team Text', 'omega-travel-agents' ),
    'section'  => 'omega_travel_agents_header_banner_setting',
    'type'     => 'text',
    )
);

$wp_customize->add_setting('omega_travel_agents_slider_section_team_image',
    array(
        'default' => $omega_travel_agents_default['omega_travel_agents_slider_section_team_image'],
        'sanitize_callback' => 'esc_url_raw',
    )
);
$wp_customize->add_control(
    new WP_Customize_Image_Control( $wp_customize,'omega_travel_agents_slider_section_team_image',
        array(
            'label' => __('Team Image ','omega-travel-agents'),
            'section' => 'omega_travel_agents_header_banner_setting',
            'settings' => 'omega_travel_agents_slider_section_team_image',
        )
    )
);
$wp_customize->add_setting( 'omega_travel_agents_slider_faq_question',
    array(
    'default'           => $omega_travel_agents_default['omega_travel_agents_slider_faq_question'],
    'capability'        => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field',
    )
);
$wp_customize->add_control( 'omega_travel_agents_slider_faq_question',
    array(
    'label'    => esc_html__( 'Slider Fag Question', 'omega-travel-agents' ),
    'section'  => 'omega_travel_agents_header_banner_setting',
    'type'     => 'text',
    )
);

$wp_customize->add_setting( 'omega_travel_agents_slider_faq_question_answer',
    array(
    'default'           => $omega_travel_agents_default['omega_travel_agents_slider_faq_question_answer'],
    'capability'        => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field',
    )
);
$wp_customize->add_control( 'omega_travel_agents_slider_faq_question_answer',
    array(
    'label'    => esc_html__( 'Slider Fag Answer', 'omega-travel-agents' ),
    'section'  => 'omega_travel_agents_header_banner_setting',
    'type'     => 'text',
    )
);

$wp_customize->add_section( 'header_search_setting',
    array(
    'title'      => esc_html__( 'Search Settings', 'omega-travel-agents' ),
    'priority'   => 10,
    'capability' => 'edit_theme_options',
    'panel'      => 'theme_home_pannel',
    )
);

$wp_customize->add_setting('omega_travel_agents_header_search',
    array(
        'default' => $omega_travel_agents_default['omega_travel_agents_header_search'],
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'omega_travel_agents_sanitize_checkbox',
    )
);
$wp_customize->add_control('omega_travel_agents_header_search',
    array(
        'label' => esc_html__('Enable Search', 'omega-travel-agents'),
        'section' => 'header_search_setting',
        'type' => 'checkbox',
    )
);

$wp_customize->add_setting('omega_travel_agents_search_form_shortcode',
    array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field'
    )
);
$wp_customize->add_control('omega_travel_agents_search_form_shortcode',
    array(
        'label' => __('Search Form Shortcode','omega-travel-agents'),
        'description' => __('Enter the Shortcode for the Contact Form Here','omega-travel-agents'),
        'section' => 'header_search_setting',
        'setting' => 'omega_travel_agents_search_form_shortcode',
        'type'    => 'text'
    )
);

// Rooms Location Settings

$wp_customize->add_section( 'product_column_setting',
    array(
    'title'      => esc_html__( 'Rooms Location Settings', 'omega-travel-agents' ),
    'priority'   => 10,
    'capability' => 'edit_theme_options',
    'panel'      => 'theme_home_pannel',
    )
);

$wp_customize->add_setting( 'omega_travel_agents_product_section_title',
    array(
    'default'           => $omega_travel_agents_default['omega_travel_agents_product_section_title'],
    'capability'        => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field',
    )
);
$wp_customize->add_control( 'omega_travel_agents_product_section_title',
    array(
    'label'    => esc_html__( 'Rooms Location Title', 'omega-travel-agents' ),
    'section'  => 'product_column_setting',
    'type'     => 'text',
    )
);

$wp_customize->add_setting( 'omega_travel_agents_locations_post_cat',
    array(
    'default'           => '',
    'capability'        => 'edit_theme_options',
    'sanitize_callback' => 'omega_travel_agents_sanitize_select',
    )
);
$wp_customize->add_control( 'omega_travel_agents_locations_post_cat',
    array(
    'label'       => esc_html__( 'Location Post Category', 'omega-travel-agents' ),
    'section'     => 'product_column_setting',
    'type'        => 'select',
    'choices'     => $omega_travel_agents_post_category_list,
    )
);

for ($i=1; $i <=8 ; $i++) { 
    $wp_customize->add_setting( 'omega_travel_agents_post_section_rating'.$i,
        array(
        'default'           => $omega_travel_agents_default['omega_travel_agents_post_section_rating'],
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_text_field',
        )
    );
    $wp_customize->add_control( 'omega_travel_agents_post_section_rating'.$i,
        array(
        'label'    => esc_html__( 'Rooms Rating', 'omega-travel-agents' ).$i,
        'section'  => 'product_column_setting',
        'type'     => 'text',
        )
    );

    $wp_customize->add_setting( 'omega_travel_agents_post_section_days_text'.$i,
        array(
        'default'           => $omega_travel_agents_default['omega_travel_agents_post_section_days_text'],
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_text_field',
        )
    );
    $wp_customize->add_control( 'omega_travel_agents_post_section_days_text'.$i,
        array(
        'label'    => esc_html__( 'Rooms Days Text', 'omega-travel-agents' ).$i,
        'section'  => 'product_column_setting',
        'type'     => 'text',
        )
    );

    $wp_customize->add_setting( 'omega_travel_agents_post_section_amount'.$i,
        array(
        'default'           => $omega_travel_agents_default['omega_travel_agents_post_section_amount'],
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_text_field',
        )
    );
    $wp_customize->add_control( 'omega_travel_agents_post_section_amount'.$i,
        array(
        'label'    => esc_html__( 'Rooms Price', 'omega-travel-agents' ).$i,
        'section'  => 'product_column_setting',
        'type'     => 'text',
        )
    );

    $wp_customize->add_setting( 'omega_travel_agents_post_section_location'.$i,
        array(
        'default'           => $omega_travel_agents_default['omega_travel_agents_post_section_location'],
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_text_field',
        )
    );
    $wp_customize->add_control( 'omega_travel_agents_post_section_location'.$i,
        array(
        'label'    => esc_html__( 'Rooms Location', 'omega-travel-agents' ).$i,
        'section'  => 'product_column_setting',
        'type'     => 'text',
        )
    );
}