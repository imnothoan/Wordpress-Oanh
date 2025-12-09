<?php
/**
 * Omega Travel Agents Theme Customizer
 * @package Omega Travel Agents
 */

/** Sanitize Functions. **/
	require get_template_directory() . '/inc/customizer/default.php';

if (!function_exists('omega_travel_agents_customize_register')) :

function omega_travel_agents_customize_register( $wp_customize ) {

	require get_template_directory() . '/inc/customizer/custom-classes.php';
	require get_template_directory() . '/inc/customizer/sanitize.php';
	require get_template_directory() . '/inc/customizer/header-button.php';
	require get_template_directory() . '/inc/customizer/typography.php';
	require get_template_directory() . '/inc/customizer/social-media.php';
	require get_template_directory() . '/inc/customizer/custom-addon.php';
	require get_template_directory() . '/inc/customizer/colors.php';
	require get_template_directory() . '/inc/customizer/global-color-setting.php';
	require get_template_directory() . '/inc/customizer/post.php';
	require get_template_directory() . '/inc/customizer/footer.php';
	require get_template_directory() . '/inc/customizer/layout-setting.php';
	require get_template_directory() . '/inc/customizer/homepage-content.php';
	require get_template_directory() . '/inc/customizer/additional-woocommerce.php';
	require get_template_directory() . '/inc/customizer/404-page-settings.php';

	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
	$wp_customize->get_section( 'colors' )->panel = 'theme_colors_panel';
	$wp_customize->get_section( 'colors' )->title = esc_html__('Color Options','omega-travel-agents');
	$wp_customize->get_section( 'title_tagline' )->panel = 'theme_general_settings';
	$wp_customize->get_section( 'header_image' )->panel = 'theme_general_settings';
	$wp_customize->get_section( 'background_image' )->panel = 'theme_general_settings';

	if ( isset( $wp_customize->selective_refresh ) ) {
		
		$wp_customize->selective_refresh->add_partial( 'blogname', array(
			'selector'        => '.header-titles .custom-logo-name',
			'render_callback' => 'omega_travel_agents_customize_partial_blogname',
		) );

		$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
			'selector'        => '.site-description',
			'render_callback' => 'omega_travel_agents_customize_partial_blogdescription',
		) );

	}

	$wp_customize->add_panel( 'theme_general_settings',
		array(
			'title'      => esc_html__( 'General Settings', 'omega-travel-agents' ),
			'priority'   => 10,
			'capability' => 'edit_theme_options',
		)
	);

	$wp_customize->add_panel( 'theme_colors_panel',
		array(
			'title'      => esc_html__( 'Color Settings', 'omega-travel-agents' ),
			'priority'   => 15,
			'capability' => 'edit_theme_options',
		)
	);

	// Theme Options Panel.
	$wp_customize->add_panel( 'theme_footer_option_panel',
		array(
			'title'      => esc_html__( 'Footer Settings', 'omega-travel-agents' ),
			'priority'   => 150,
			'capability' => 'edit_theme_options',
		)
	);

	// Template Options
	$wp_customize->add_panel( 'theme_home_pannel',
		array(
			'title'      => esc_html__( 'Frontpage Settings', 'omega-travel-agents' ),
			'priority'   => 4,
			'capability' => 'edit_theme_options',
		)
	);

	// Theme Addons Panel.
	$wp_customize->add_panel( 'omega_travel_agents_theme_addons_panel',
		array(
			'title'      => esc_html__( 'Theme Addons', 'omega-travel-agents' ),
			'priority'   => 5,
			'capability' => 'edit_theme_options',
		)
	);
	
	// Theme Options Panel.
	$wp_customize->add_panel( 'omega_travel_agents_theme_option_panel',
		array(
			'title'      => esc_html__( 'Theme Options', 'omega-travel-agents' ),
			'priority'   => 5,
			'capability' => 'edit_theme_options',
		)
	);
	$wp_customize->add_setting('omega_travel_agents_logo_width_range',
	    array(
	        'default'           => $omega_travel_agents_default['omega_travel_agents_logo_width_range'],
	        'capability'        => 'edit_theme_options',
	        'sanitize_callback' => 'omega_travel_agents_sanitize_number_range',
	    )
	);
	$wp_customize->add_control('omega_travel_agents_logo_width_range',
	    array(
	        'label'       => esc_html__('Logo width', 'omega-travel-agents'),
	        'description'       => esc_html__( 'Specify the range for logo size with a minimum of 200px and a maximum of 700px, in increments of 20px.', 'omega-travel-agents' ),
	        'section'     => 'title_tagline',
	        'type'        => 'range',
	        'input_attrs' => array(
	           'min'   => 100,
	           'max'   => 700,
	           'step'   => 20,
        	),
	    )
	);

	// Register custom section types.
	$wp_customize->register_section_type( 'Omega_Travel_Agents_Customize_Section_Upsell' );

	// Register sections.
	$wp_customize->add_section(
		new Omega_Travel_Agents_Customize_Section_Upsell(
			$wp_customize,
			'theme_upsell',
			array(
				'title'    => esc_html__( 'Omega Travel Agents', 'omega-travel-agents' ),
				'pro_text' => esc_html__( 'Upgrade To Pro', 'omega-travel-agents' ),
				'pro_url'  => esc_url('https://www.omegathemes.com/products/travel-agents-wordpress-theme'),
				'priority'  => 1,
			)
		)
	);

	// Register second custom section (Buy Bundle)
	$wp_customize->add_section(
		new Omega_Travel_Agents_Customize_Section_Upsell(
			$wp_customize,
			'theme_upsell_bundle',
			array(
				'title'    => esc_html__( 'Buy WP Theme Bundle', 'omega-travel-agents' ),
				'pro_text' => esc_html__( 'Get Bundle', 'omega-travel-agents' ),
				'pro_url'  => esc_url( 'https://www.omegathemes.com/products/wp-theme-bundle' ),
				'priority' => 2,
			)
		)
	);
}

endif;
add_action( 'customize_register', 'omega_travel_agents_customize_register' );

/**
 * Customizer Enqueue scripts and styles.
 */

if (!function_exists('omega_travel_agents_customizer_scripts')) :

    function omega_travel_agents_customizer_scripts(){
    	
    	wp_enqueue_script('jquery-ui-button');
    	wp_enqueue_style('omega-travel-agents-customizer', get_template_directory_uri() . '/lib/custom/css/customizer.css');
        wp_enqueue_script('omega-travel-agents-customizer', get_template_directory_uri() . '/lib/custom/js/customizer.js', array('jquery','customize-controls'), '', 1);

        $ajax_nonce = wp_create_nonce('omega_travel_agents_ajax_nonce');
        wp_localize_script( 
		    'omega-travel-agents-customizer',
		    'omega_travel_agents_customizer',
		    array(
		        'ajax_url'   => esc_url( admin_url( 'admin-ajax.php' ) ),
		        'ajax_nonce' => $ajax_nonce,
		     )
		);
    }

endif;

add_action('customize_controls_enqueue_scripts', 'omega_travel_agents_customizer_scripts');
add_action('customize_controls_init', 'omega_travel_agents_customizer_scripts');

function omega_travel_agents_customize_preview_js() {
	wp_enqueue_script( 'omega-travel-agents-customizer-preview', get_template_directory_uri() . '/lib/custom/js/customizer-preview.js', array( 'customize-preview' ), '', true );
}
add_action( 'customize_preview_init', 'omega_travel_agents_customize_preview_js' );

if (!function_exists('omega_travel_agents_customize_partial_blogname')) :
	function omega_travel_agents_customize_partial_blogname() {
		bloginfo( 'name' );
	}
endif;

if (!function_exists('omega_travel_agents_customize_partial_blogdescription')) :
	function omega_travel_agents_customize_partial_blogdescription() {
		bloginfo( 'description' );
	}
endif;