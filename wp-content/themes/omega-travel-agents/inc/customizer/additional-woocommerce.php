<?php
/**
* Additional Woocommerce Settings.
*
* @package Omega Travel Agents
*/

$omega_travel_agents_default = omega_travel_agents_get_default_theme_options();

// Additional Woocommerce Section.
$wp_customize->add_section( 'omega_travel_agents_additional_woocommerce_options',
	array(
	'title'      => esc_html__( 'Additional Woocommerce Options', 'omega-travel-agents' ),
	'priority'   => 210,
	'capability' => 'edit_theme_options',
	'panel'      => 'omega_travel_agents_theme_option_panel',
	)
);

	$wp_customize->add_setting('omega_travel_agents_per_columns',
		array(
		'default'           => $omega_travel_agents_default['omega_travel_agents_per_columns'],
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'omega_travel_agents_sanitize_number_range',
		)
	);
	$wp_customize->add_control('omega_travel_agents_per_columns',
		array(
		'label'       => esc_html__('Products Per Column', 'omega-travel-agents'),
		'section'     => 'omega_travel_agents_additional_woocommerce_options',
		'type'        => 'number',
		'input_attrs' => array(
		'min'   => 1,
		'max'   => 6,
		'step'   => 1,
		),
		)
	);

	$wp_customize->add_setting('omega_travel_agents_product_per_page',
		array(
		'default'           => $omega_travel_agents_default['omega_travel_agents_product_per_page'],
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'omega_travel_agents_sanitize_number_range',
		)
	);
	$wp_customize->add_control('omega_travel_agents_product_per_page',
		array(
		'label'       => esc_html__('Products Per Page', 'omega-travel-agents'),
		'section'     => 'omega_travel_agents_additional_woocommerce_options',
		'type'        => 'number',
		'input_attrs' => array(
		'min'   => 1,
		'max'   => 100,
		'step'   => 1,
		),
		)
	);

	$wp_customize->add_setting('omega_travel_agents_show_hide_related_product',
    array(
        'default' => $omega_travel_agents_default['omega_travel_agents_show_hide_related_product'],
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'omega_travel_agents_sanitize_checkbox',
    )
	);
	$wp_customize->add_control('omega_travel_agents_show_hide_related_product',
	    array(
	        'label' => esc_html__('Enable Related Products', 'omega-travel-agents'),
	        'section' => 'omega_travel_agents_additional_woocommerce_options',
	        'type' => 'checkbox',
	    )
	);

	$wp_customize->add_setting('omega_travel_agents_custom_related_products_number',
		array(
		'default'           => $omega_travel_agents_default['omega_travel_agents_custom_related_products_number'],
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'omega_travel_agents_sanitize_number_range',
		)
	);
	$wp_customize->add_control('omega_travel_agents_custom_related_products_number',
		array(
		'label'       => esc_html__('Related Products Per Page', 'omega-travel-agents'),
		'section'     => 'omega_travel_agents_additional_woocommerce_options',
		'type'        => 'number',
		'input_attrs' => array(
		'min'   => 1,
		'max'   => 10,
		'step'   => 1,
		),
		)
	);

	$wp_customize->add_setting('omega_travel_agents_custom_related_products_number_per_row',
		array(
		'default'           => $omega_travel_agents_default['omega_travel_agents_custom_related_products_number_per_row'],
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'omega_travel_agents_sanitize_number_range',
		)
	);
	$wp_customize->add_control('omega_travel_agents_custom_related_products_number_per_row',
		array(
		'label'       => esc_html__('Related Products Per Row', 'omega-travel-agents'),
		'section'     => 'omega_travel_agents_additional_woocommerce_options',
		'type'        => 'number',
		'input_attrs' => array(
		'min'   => 1,
		'max'   => 5,
		'step'   => 1,
		),
		)
	);