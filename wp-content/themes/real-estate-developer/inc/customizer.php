<?php
/**
 * Real Estate Developer   Theme Customizer
 *
 * @package Real Estate Developer  
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function real_estate_developer_custom_controls() {
	load_template( trailingslashit( get_template_directory() ) . '/inc/custom-controls.php' );
}
add_action( 'customize_register', 'real_estate_developer_custom_controls' );

function real_estate_developer_customize_register( $wp_customize ) {

	$wp_customize->get_setting( 'blogname' )->transport = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport = 'postMessage';

	load_template( trailingslashit( get_template_directory() ) . '/inc/icon-picker.php' );

	//Selective Refresh
	$wp_customize->selective_refresh->add_partial( 'blogname', array(
		'selector' => '.logo .site-title a',
	 	'render_callback' => 'real_estate_developer_Customize_partial_blogname',
	));

	$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
		'selector' => 'p.site-description',
		'render_callback' => 'real_estate_developer_Customize_partial_blogdescription',
	));

	// add home page setting pannel
	$wp_customize->add_panel( 'real_estate_developer_panel_id', array(
		'capability' => 'edit_theme_options',
		'theme_supports' => '',
		'title' => esc_html__( 'Homepage Settings', 'real-estate-developer' ),
		'priority' => 10,
	));

	//Menus Settings
	$wp_customize->add_section( 'real_estate_developer_menu_section' , array(
    	'title' => __( 'Menus Settings', 'real-estate-developer' ),
		'panel' => 'real_estate_developer_panel_id'
	) );

	$wp_customize->add_setting('real_estate_developer_navigation_menu_font_size',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('real_estate_developer_navigation_menu_font_size',array(
		'label'	=> __('Menus Font Size','real-estate-developer'),
		'description'	=> __('Enter a value in pixels. Example:20px','real-estate-developer'),
		'input_attrs' => array(
            'placeholder' => __( '10px', 'real-estate-developer' ),
        ),
		'section'=> 'real_estate_developer_menu_section',
		'type'=> 'text'
	));

	$wp_customize->add_setting('real_estate_developer_navigation_menu_font_weight',array(
        'default' => 600,
        'transport' => 'refresh',
        'sanitize_callback' => 'real_estate_developer_sanitize_choices'
	));
	$wp_customize->add_control('real_estate_developer_navigation_menu_font_weight',array(
        'type' => 'select',
        'label' => __('Menus Font Weight','real-estate-developer'),
        'section' => 'real_estate_developer_menu_section',
        'choices' => array(
        	'100' => __('100','real-estate-developer'),
            '200' => __('200','real-estate-developer'),
            '300' => __('300','real-estate-developer'),
            '400' => __('400','real-estate-developer'),
            '500' => __('500','real-estate-developer'),
            '600' => __('600','real-estate-developer'),
            '700' => __('700','real-estate-developer'),
            '800' => __('800','real-estate-developer'),
            '900' => __('900','real-estate-developer'),
        ),
	) );

	$wp_customize->add_setting('real_estate_developer_menus_item_style',array(
        'default' => '',
        'transport' => 'refresh',
        'sanitize_callback' => 'real_estate_developer_sanitize_choices'
	));
	$wp_customize->add_control('real_estate_developer_menus_item_style',array(
        'type' => 'select',
        'section' => 'real_estate_developer_menu_section',
		'label' => __('Menu Item Hover Style','real-estate-developer'),
		'choices' => array(
            'None' => __('None','real-estate-developer'),
            'Zoom In' => __('Zoom In','real-estate-developer'),
        ),
	) );

	$wp_customize->add_setting('real_estate_developer_header_menus_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'real_estate_developer_header_menus_color', array(
		'label'    => __('Menus Color', 'real-estate-developer'),
		'section'  => 'real_estate_developer_menu_section',
	)));

	$wp_customize->add_setting('real_estate_developer_header_menus_hover_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'real_estate_developer_header_menus_hover_color', array(
		'label'    => __('Menus Hover Color', 'real-estate-developer'),
		'section'  => 'real_estate_developer_menu_section',
	)));

	$wp_customize->add_setting('real_estate_developer_header_submenus_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'real_estate_developer_header_submenus_color', array(
		'label'    => __('Sub Menus Color', 'real-estate-developer'),
		'section'  => 'real_estate_developer_menu_section',
	)));

	$wp_customize->add_setting('real_estate_developer_header_submenus_hover_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'real_estate_developer_header_submenus_hover_color', array(
		'label'    => __('Sub Menus Hover Color', 'real-estate-developer'),
		'section'  => 'real_estate_developer_menu_section',
	)));

	// Header
	$wp_customize->add_section( 'real_estate_developer_top_bar' , array(
    'title' => esc_html__( 'Header', 'real-estate-developer' ),
		'panel' => 'real_estate_developer_panel_id'
	) );

	$wp_customize->add_setting('real_estate_developer_topbar_button_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw',
	));
	$wp_customize->add_control('real_estate_developer_topbar_button_url',array(
		'label'	=> esc_html__( 'Add Button URL', 'real-estate-developer' ), 
		'section'	=> 'real_estate_developer_top_bar',
		'setting'	=> 'real_estate_developer_topbar_button_url',
		'type'	=> 'url',
	));

	$wp_customize->add_setting('real_estate_developer_header_btn_icon',array(
		'default' => 'fa-solid fa-user',
		'sanitize_callback' => 'sanitize_text_field'
	));
	$wp_customize->add_control(new Real_Estate_Developer_Fontawesome_Icon_Chooser($wp_customize,'real_estate_developer_header_btn_icon',array(
		'label' => __('Add Button Icon','real-estate-developer'),
		'transport' => 'refresh',
		'section' => 'real_estate_developer_top_bar',
		'setting' => 'real_estate_developer_header_btn_icon',
		'type'    => 'icon'
	)));

	//Sticky Header
	$wp_customize->add_setting( 'real_estate_developer_sticky_header',array(
    'default' => 0,
    'transport' => 'refresh',
    'sanitize_callback' => 'real_estate_developer_switch_sanitization'
  ) );
  $wp_customize->add_control( new Real_Estate_Developer_Toggle_Switch_Custom_Control( $wp_customize, 'real_estate_developer_sticky_header',array(
    'label' => esc_html__( 'Sticky Header','real-estate-developer' ),
    'section' => 'real_estate_developer_top_bar'
  )));

  $wp_customize->add_setting('real_estate_developer_sticky_header_padding',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('real_estate_developer_sticky_header_padding',array(
		'label'	=> __('Sticky Header Padding','real-estate-developer'),
		'description'	=> __('Enter a value in pixels. Example:20px','real-estate-developer'),
		'input_attrs' => array(
      'placeholder' => __( '10px', 'real-estate-developer' ),
    ),
		'section'=> 'real_estate_developer_top_bar',
		'type'=> 'text'
	));

	//Banner
	$wp_customize->add_section( 'real_estate_developer_banner_section' , array(
	  'title'      => __( 'Banner Settings', 'real-estate-developer' ),
		'panel' => 'real_estate_developer_panel_id',
		'description' => __('For more options of Banner  section </br> <a class="go-pro-btn" target="blank" href="https://www.vwthemes.com/products/property-developer-wordpress-theme">GET PRO</a>','real-estate-developer'),
	) );

	$wp_customize->add_setting( 'real_estate_developer_hide_show_banner_section',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'real_estate_developer_switch_sanitization'
	));
	$wp_customize->add_control( new Real_Estate_Developer_Toggle_Switch_Custom_Control( $wp_customize, 'real_estate_developer_hide_show_banner_section',array(
		'label' => esc_html__( 'Show / Hide Banner Section','real-estate-developer' ),
		'section' => 'real_estate_developer_banner_section'
	)));

 	$wp_customize->add_setting('real_estate_developer_banner_title',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('real_estate_developer_banner_title',array(
		'label'	=> __('Banner Title','real-estate-developer'),
		'section'	=> 'real_estate_developer_banner_section',
		'input_attrs' => array(
        'placeholder' => __( 'Find Your Dream Home – Explore the Properties Today!', 'real-estate-developer' ),
    	),
		'type'	=> 'text'
	));

 	$wp_customize->add_setting('real_estate_developer_banner_text',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('real_estate_developer_banner_text',array(
		'label'	=> __('Banner Text','real-estate-developer'),
		'section'	=> 'real_estate_developer_banner_section',
		'type'	=> 'text'
	));

	$wp_customize->add_setting('real_estate_developer_banner_button_label',array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	));
	$wp_customize->add_control('real_estate_developer_banner_button_label',array(
		'label' => esc_html__( 'Add Button Text', 'real-estate-developer' ),
		'section' => 'real_estate_developer_banner_section',
		'setting' => 'real_estate_developer_banner_button_label',
		'type' => 'text',
		'input_attrs' => array(
      'placeholder' => __( 'Explore Properties', 'real-estate-developer' ),
    ),
	));

	$wp_customize->add_setting('real_estate_developer_banner_btn_icon',array(
		'default' => 'fa-solid fa-house',
		'sanitize_callback' => 'sanitize_text_field'
	));
	$wp_customize->add_control(new Real_Estate_Developer_Fontawesome_Icon_Chooser($wp_customize,'real_estate_developer_banner_btn_icon',array(
		'label' => __('Add Button Icon','real-estate-developer'),
		'transport' => 'refresh',
		'section' => 'real_estate_developer_banner_section',
		'setting' => 'real_estate_developer_banner_btn_icon',
		'type'    => 'icon'
	)));

	$wp_customize->add_setting('real_estate_developer_banner_button_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw',
	));
	$wp_customize->add_control('real_estate_developer_banner_button_url',array(
		'label'	=> esc_html__( 'Add Button URL', 'real-estate-developer' ), 
		'section'	=> 'real_estate_developer_banner_section',
		'setting'	=> 'real_estate_developer_banner_button_url',
		'type'	=> 'url',
	));

	$wp_customize->add_setting('real_estate_developer_banner_side_img',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw',
	));
	$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize,'real_estate_developer_banner_side_img',array(
		'label' => __('Add Image','real-estate-developer'),
		'section' => 'real_estate_developer_banner_section',
		'description' => __('Use a transparent image with dimensions of 555×440 pixels.','real-estate-developer'),
	)));

	$wp_customize->add_setting( 'real_estate_developer_hide_show_banner_video',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'real_estate_developer_switch_sanitization'
	));
	$wp_customize->add_control( new Real_Estate_Developer_Toggle_Switch_Custom_Control( $wp_customize, 'real_estate_developer_hide_show_banner_video',array(
		'label' => esc_html__( 'Show / Hide Banner Video','real-estate-developer' ),
		'section' => 'real_estate_developer_banner_section'
	)));

	for($real_estate_developer_i=1; $real_estate_developer_i<= 3; $real_estate_developer_i++) {		
		$wp_customize->add_setting('real_estate_developer_video_bg_img' . $real_estate_developer_i,array(
			'default'	=> '',
			'sanitize_callback'	=> 'esc_url_raw',
		));
		$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize,'real_estate_developer_video_bg_img' . $real_estate_developer_i,array(
		  'label' => __('Add Video Background Image','real-estate-developer'),
		  'section' => 'real_estate_developer_banner_section',
		  'description' => __('Image Size (500px × 175px).','real-estate-developer'),
		)));

		$wp_customize->add_setting('real_estate_developer_video_button_url' . $real_estate_developer_i,array(
			'default'	=> '',
			'sanitize_callback'	=> 'esc_url_raw'
		));
		$wp_customize->add_control('real_estate_developer_video_button_url' . $real_estate_developer_i,array(
			'label'	=> __('Add Video Button URL','real-estate-developer'),
			'description' => __('Add embed link','real-estate-developer'),
			'section'	=> 'real_estate_developer_banner_section',
			'setting'	=> 'real_estate_developer_video_button_url' . $real_estate_developer_i,
			'type'	=> 'url'
		));
	}

	$wp_customize->add_setting('real_estate_developer_video_button_icon',array(
    'default' => 'fas fa-play',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(new Real_Estate_Developer_Fontawesome_Icon_Chooser($wp_customize,'real_estate_developer_video_button_icon',array(
    'label' => __('Add Video Button Icon','real-estate-developer'),
    'transport' => 'refresh',
    'section' => 'real_estate_developer_banner_section',
    'setting' => 'real_estate_developer_video_button_icon',
    'type'    => 'icon'
  )));

  $wp_customize->add_setting('real_estate_developer_phone_bg_img',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw',
	));
	$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize,'real_estate_developer_phone_bg_img',array(
	  'label' => __('Add Phone Background Image','real-estate-developer'),
	  'section' => 'real_estate_developer_banner_section',
	  'description' => __('Image Size (180px × 200px).','real-estate-developer'),
	)));

  $wp_customize->add_setting('real_estate_developer_banner_phone_icon',array(
		'default' => 'fa-solid fa-phone',
		'sanitize_callback' => 'sanitize_text_field'
	));
	$wp_customize->add_control(new Real_Estate_Developer_Fontawesome_Icon_Chooser($wp_customize,'real_estate_developer_banner_phone_icon',array(
		'label' => __('Add Phone Icon','real-estate-developer'),
		'transport' => 'refresh',
		'section' => 'real_estate_developer_banner_section',
		'setting' => 'real_estate_developer_banner_phone_icon',
		'type'    => 'icon'
	)));

 	$wp_customize->add_setting('real_estate_developer_banner_phone_title',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('real_estate_developer_banner_phone_title',array(
		'label'	=> __('Phone Title','real-estate-developer'),
		'section'	=> 'real_estate_developer_banner_section',
		'input_attrs' => array(
        'placeholder' => __( 'Request a call', 'real-estate-developer' ),
    	),
		'type'	=> 'text'
	));

	$wp_customize->add_setting('real_estate_developer_banner_phone_number',array(
		'default'=> '',
		'sanitize_callback'	=> 'real_estate_developer_sanitize_phone_number'
	));
	$wp_customize->add_control('real_estate_developer_banner_phone_number',array(
		'label'	=> __('Add Phone Number','real-estate-developer'),
		'input_attrs' => array(
      'placeholder' => __( '+12 3456789123', 'real-estate-developer' ),
    ),
		'section'=> 'real_estate_developer_banner_section',
		'type'=> 'text'
	));

	$wp_customize->add_setting('real_estate_developer_banner_top_img',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw',
	));
	$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize,'real_estate_developer_banner_top_img',array(
		'label' => __('Add Image','real-estate-developer'),
		'section' => 'real_estate_developer_banner_section',
		'description' => __('Use a transparent image with dimensions of 180×180 pixels.','real-estate-developer'),
	)));

	//Find Search Section
	$wp_customize->add_section('real_estate_developer_find_search', array(
		'title'       => __('Find Search Section', 'real-estate-developer'),
		'description' => __('<p class="premium-opt">Premium Theme Features</p>','real-estate-developer'),
		'priority'    => null,
		'panel'       => 'real_estate_developer_panel_id',
	));

	$wp_customize->add_setting('real_estate_developer_find_search_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('real_estate_developer_find_search_text',array(
		'description' => __('<p>1. More options for find search section.</p>
			<p>2. Unlimited images options.</p>
			<p>3. Color options for find search section.</p>','real-estate-developer'),
		'section'=> 'real_estate_developer_find_search',
		'type'=> 'hidden'
	));

	$wp_customize->add_setting('real_estate_developer_find_search_btn',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('real_estate_developer_find_search_btn',array(
		'description' => "<a class='go-pro' target='_blank' href=".esc_url(REAL_ESTATE_DEVELOPER_BUY_NOW).">More Info</a>",
		'section'=> 'real_estate_developer_find_search',
		'type'=> 'hidden'
	));

	//Counter Section
	$wp_customize->add_section('real_estate_developer_counter', array(
		'title'       => __('Counter Section', 'real-estate-developer'),
		'description' => __('<p class="premium-opt">Premium Theme Features</p>','real-estate-developer'),
		'priority'    => null,
		'panel'       => 'real_estate_developer_panel_id',
	));

	$wp_customize->add_setting('real_estate_developer_counter_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('real_estate_developer_counter_text',array(
		'description' => __('<p>1. More options for counter section.</p>
			<p>2. Unlimited images options.</p>
			<p>3. Color options for counter section.</p>','real-estate-developer'),
		'section'=> 'real_estate_developer_counter',
		'type'=> 'hidden'
	));

	$wp_customize->add_setting('real_estate_developer_counter_btn',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('real_estate_developer_counter_btn',array(
		'description' => "<a class='go-pro' target='_blank' href=".esc_url(REAL_ESTATE_DEVELOPER_BUY_NOW).">More Info</a>",
		'section'=> 'real_estate_developer_counter',
		'type'=> 'hidden'
	));

	//featured-property
	$wp_customize->add_section('real_estate_developer_featured_property', array(
		'title'       => __('Featured Property Section', 'real-estate-developer'),
		'description' => __('<p class="premium-opt">Premium Theme Features</p>','real-estate-developer'),
		'priority'    => null,
		'panel'       => 'real_estate_developer_panel_id',
	));

	$wp_customize->add_setting('real_estate_developer_featured_property_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('real_estate_developer_featured_property_text',array(
		'description' => __('<p>1. More options for featured property section.</p>
			<p>2. Unlimited images options.</p>
			<p>3. Color options for featured property section.</p>','real-estate-developer'),
		'section'=> 'real_estate_developer_featured_property',
		'type'=> 'hidden'
	));

	$wp_customize->add_setting('real_estate_developer_featured_property_btn',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('real_estate_developer_featured_property_btn',array(
		'description' => "<a class='go-pro' target='_blank' href=".esc_url(REAL_ESTATE_DEVELOPER_BUY_NOW).">More Info</a>",
		'section'=> 'real_estate_developer_featured_property',
		'type'=> 'hidden'
	));

	//why-choose
	$wp_customize->add_section('real_estate_developer_why_choose', array(
		'title'       => __('Why Choose Section', 'real-estate-developer'),
		'description' => __('<p class="premium-opt">Premium Theme Features</p>','real-estate-developer'),
		'priority'    => null,
		'panel'       => 'real_estate_developer_panel_id',
	));

	$wp_customize->add_setting('real_estate_developer_why_choose_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('real_estate_developer_why_choose_text',array(
		'description' => __('<p>1. More options for why choose section.</p>
			<p>2. Unlimited images options.</p>
			<p>3. Color options for why choose section.</p>','real-estate-developer'),
		'section'=> 'real_estate_developer_why_choose',
		'type'=> 'hidden'
	));

	$wp_customize->add_setting('real_estate_developer_why_choose_btn',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('real_estate_developer_why_choose_btn',array(
		'description' => "<a class='go-pro' target='_blank' href=".esc_url(REAL_ESTATE_DEVELOPER_BUY_NOW).">More Info</a>",
		'section'=> 'real_estate_developer_why_choose',
		'type'=> 'hidden'
	));

	//list-banner
	$wp_customize->add_section('real_estate_developer_list_banner', array(
		'title'       => __('List Banner Section', 'real-estate-developer'),
		'description' => __('<p class="premium-opt">Premium Theme Features</p>','real-estate-developer'),
		'priority'    => null,
		'panel'       => 'real_estate_developer_panel_id',
	));

	$wp_customize->add_setting('real_estate_developer_list_banner_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('real_estate_developer_list_banner_text',array(
		'description' => __('<p>1. More options for list banner section.</p>
			<p>2. Unlimited images options.</p>
			<p>3. Color options for list banner section.</p>','real-estate-developer'),
		'section'=> 'real_estate_developer_list_banner',
		'type'=> 'hidden'
	));

	$wp_customize->add_setting('real_estate_developer_list_banner_btn',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('real_estate_developer_list_banner_btn',array(
		'description' => "<a class='go-pro' target='_blank' href=".esc_url(REAL_ESTATE_DEVELOPER_BUY_NOW).">More Info</a>",
		'section'=> 'real_estate_developer_list_banner',
		'type'=> 'hidden'
	));

	//consult-banner
	$wp_customize->add_section('real_estate_developer_consult_banner', array(
		'title'       => __('Consult Banner Section', 'real-estate-developer'),
		'description' => __('<p class="premium-opt">Premium Theme Features</p>','real-estate-developer'),
		'priority'    => null,
		'panel'       => 'real_estate_developer_panel_id',
	));

	$wp_customize->add_setting('real_estate_developer_consult_banner_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('real_estate_developer_consult_banner_text',array(
		'description' => __('<p>1. More options for consult banner section.</p>
			<p>2. Unlimited images options.</p>
			<p>3. Color options for consult banner section.</p>','real-estate-developer'),
		'section'=> 'real_estate_developer_consult_banner',
		'type'=> 'hidden'
	));

	$wp_customize->add_setting('real_estate_developer_consult_banner_btn',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('real_estate_developer_consult_banner_btn',array(
		'description' => "<a class='go-pro' target='_blank' href=".esc_url(REAL_ESTATE_DEVELOPER_BUY_NOW).">More Info</a>",
		'section'=> 'real_estate_developer_consult_banner',
		'type'=> 'hidden'
	));

	//property-category
	$wp_customize->add_section('real_estate_developer_property_category', array(
		'title'       => __('Property Category Section', 'real-estate-developer'),
		'description' => __('<p class="premium-opt">Premium Theme Features</p>','real-estate-developer'),
		'priority'    => null,
		'panel'       => 'real_estate_developer_panel_id',
	));

	$wp_customize->add_setting('real_estate_developer_property_category_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('real_estate_developer_property_category_text',array(
		'description' => __('<p>1. More options for property category section.</p>
			<p>2. Unlimited images options.</p>
			<p>3. Color options for property category section.</p>','real-estate-developer'),
		'section'=> 'real_estate_developer_property_category',
		'type'=> 'hidden'
	));

	$wp_customize->add_setting('real_estate_developer_property_category_btn',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('real_estate_developer_property_category_btn',array(
		'description' => "<a class='go-pro' target='_blank' href=".esc_url(REAL_ESTATE_DEVELOPER_BUY_NOW).">More Info</a>",
		'section'=> 'real_estate_developer_property_category',
		'type'=> 'hidden'
	));

	// Category Section 
	$wp_customize->add_section('real_estate_developer_category_section', array(
    'title' => __('Category Section', 'real-estate-developer'),
    'panel' => 'real_estate_developer_panel_id',
    'description' => __('For more options of Category  section </br> <a class="go-pro-btn" target="blank" href="https://www.vwthemes.com/products/property-developer-wordpress-theme">GET PRO</a>','real-estate-developer'),
	));

	$wp_customize->add_setting( 'real_estate_developer_category_section_hide_show',array(
    'default' => 1,
    'transport' => 'refresh',
    'sanitize_callback' => 'real_estate_developer_switch_sanitization'
	));
	$wp_customize->add_control( new Real_Estate_Developer_Toggle_Switch_Custom_Control( $wp_customize, 'real_estate_developer_category_section_hide_show',array(
    'label' => esc_html__( 'Show / Hide Category Section','real-estate-developer' ),
    'section' => 'real_estate_developer_category_section'
	)));

	$wp_customize->add_setting('real_estate_developer_category_section_title',array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('real_estate_developer_category_section_title',array(
		'type' => 'text',
		'label' => __('Add Section Title','real-estate-developer'),
		'input_attrs' => array(
      'placeholder' => __( 'Categories Listing', 'real-estate-developer' ),
    ),
		'section' => 'real_estate_developer_category_section'
	));

	$wp_customize->add_setting('real_estate_developer_category_section_text',array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('real_estate_developer_category_section_text',array(
		'type' => 'text',
		'label' => __('Add Section text','real-estate-developer'),
		'input_attrs' => array(
      'placeholder' => __( 'Showcase the finest top listings and premium properties for exclusive buyers.', 'real-estate-developer' ),
    ),
		'section' => 'real_estate_developer_category_section'
	));

	//offer-banner
	$wp_customize->add_section('real_estate_developer_offer_banner', array(
		'title'       => __('Offer Banner Section', 'real-estate-developer'),
		'description' => __('<p class="premium-opt">Premium Theme Features</p>','real-estate-developer'),
		'priority'    => null,
		'panel'       => 'real_estate_developer_panel_id',
	));

	$wp_customize->add_setting('real_estate_developer_offer_banner_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('real_estate_developer_offer_banner_text',array(
		'description' => __('<p>1. More options for offer banner section.</p>
			<p>2. Unlimited images options.</p>
			<p>3. Color options for offer banner section.</p>','real-estate-developer'),
		'section'=> 'real_estate_developer_offer_banner',
		'type'=> 'hidden'
	));

	$wp_customize->add_setting('real_estate_developer_offer_banner_btn',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('real_estate_developer_offer_banner_btn',array(
		'description' => "<a class='go-pro' target='_blank' href=".esc_url(REAL_ESTATE_DEVELOPER_BUY_NOW).">More Info</a>",
		'section'=> 'real_estate_developer_offer_banner',
		'type'=> 'hidden'
	));

	//mortgage-calculator
	$wp_customize->add_section('real_estate_developer_mortgage_calculator', array(
		'title'       => __('Mortgage Calculator Section', 'real-estate-developer'),
		'description' => __('<p class="premium-opt">Premium Theme Features</p>','real-estate-developer'),
		'priority'    => null,
		'panel'       => 'real_estate_developer_panel_id',
	));

	$wp_customize->add_setting('real_estate_developer_mortgage_calculator_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('real_estate_developer_mortgage_calculator_text',array(
		'description' => __('<p>1. More options for mortgage calculator section.</p>
			<p>2. Unlimited images options.</p>
			<p>3. Color options for mortgage calculator section.</p>','real-estate-developer'),
		'section'=> 'real_estate_developer_mortgage_calculator',
		'type'=> 'hidden'
	));

	$wp_customize->add_setting('real_estate_developer_mortgage_calculator_btn',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('real_estate_developer_mortgage_calculator_btn',array(
		'description' => "<a class='go-pro' target='_blank' href=".esc_url(REAL_ESTATE_DEVELOPER_BUY_NOW).">More Info</a>",
		'section'=> 'real_estate_developer_mortgage_calculator',
		'type'=> 'hidden'
	));

	//team
	$wp_customize->add_section('real_estate_developer_team', array(
		'title'       => __('Team Section', 'real-estate-developer'),
		'description' => __('<p class="premium-opt">Premium Theme Features</p>','real-estate-developer'),
		'priority'    => null,
		'panel'       => 'real_estate_developer_panel_id',
	));

	$wp_customize->add_setting('real_estate_developer_team_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('real_estate_developer_team_text',array(
		'description' => __('<p>1. More options for team section.</p>
			<p>2. Unlimited images options.</p>
			<p>3. Color options for team section.</p>','real-estate-developer'),
		'section'=> 'real_estate_developer_team',
		'type'=> 'hidden'
	));

	$wp_customize->add_setting('real_estate_developer_team_btn',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('real_estate_developer_team_btn',array(
		'description' => "<a class='go-pro' target='_blank' href=".esc_url(REAL_ESTATE_DEVELOPER_BUY_NOW).">More Info</a>",
		'section'=> 'real_estate_developer_team',
		'type'=> 'hidden'
	));

	//property-details
	$wp_customize->add_section('real_estate_developer_property_details', array(
		'title'       => __('Property Details Section', 'real-estate-developer'),
		'description' => __('<p class="premium-opt">Premium Theme Features</p>','real-estate-developer'),
		'priority'    => null,
		'panel'       => 'real_estate_developer_panel_id',
	));

	$wp_customize->add_setting('real_estate_developer_property_details_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('real_estate_developer_property_details_text',array(
		'description' => __('<p>1. More options for property details section.</p>
			<p>2. Unlimited images options.</p>
			<p>3. Color options for property details section.</p>','real-estate-developer'),
		'section'=> 'real_estate_developer_property_details',
		'type'=> 'hidden'
	));

	$wp_customize->add_setting('real_estate_developer_property_details_btn',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('real_estate_developer_property_details_btn',array(
		'description' => "<a class='go-pro' target='_blank' href=".esc_url(REAL_ESTATE_DEVELOPER_BUY_NOW).">More Info</a>",
		'section'=> 'real_estate_developer_property_details',
		'type'=> 'hidden'
	));

	//gallery
	$wp_customize->add_section('real_estate_developer_gallery', array(
		'title'       => __('Gallery Section', 'real-estate-developer'),
		'description' => __('<p class="premium-opt">Premium Theme Features</p>','real-estate-developer'),
		'priority'    => null,
		'panel'       => 'real_estate_developer_panel_id',
	));

	$wp_customize->add_setting('real_estate_developer_gallery_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('real_estate_developer_gallery_text',array(
		'description' => __('<p>1. More options for gallery section.</p>
			<p>2. Unlimited images options.</p>
			<p>3. Color options for gallery section.</p>','real-estate-developer'),
		'section'=> 'real_estate_developer_gallery',
		'type'=> 'hidden'
	));

	$wp_customize->add_setting('real_estate_developer_gallery_btn',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('real_estate_developer_gallery_btn',array(
		'description' => "<a class='go-pro' target='_blank' href=".esc_url(REAL_ESTATE_DEVELOPER_BUY_NOW).">More Info</a>",
		'section'=> 'real_estate_developer_gallery',
		'type'=> 'hidden'
	));

	//contact
	$wp_customize->add_section('real_estate_developer_contact', array(
		'title'       => __('Contact Section', 'real-estate-developer'),
		'description' => __('<p class="premium-opt">Premium Theme Features</p>','real-estate-developer'),
		'priority'    => null,
		'panel'       => 'real_estate_developer_panel_id',
	));

	$wp_customize->add_setting('real_estate_developer_contact_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('real_estate_developer_contact_text',array(
		'description' => __('<p>1. More options for contact section.</p>
			<p>2. Unlimited images options.</p>
			<p>3. Color options for contact section.</p>','real-estate-developer'),
		'section'=> 'real_estate_developer_contact',
		'type'=> 'hidden'
	));

	$wp_customize->add_setting('real_estate_developer_contact_btn',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('real_estate_developer_contact_btn',array(
		'description' => "<a class='go-pro' target='_blank' href=".esc_url(REAL_ESTATE_DEVELOPER_BUY_NOW).">More Info</a>",
		'section'=> 'real_estate_developer_contact',
		'type'=> 'hidden'
	));

	//Footer Text
	$wp_customize->add_section('real_estate_developer_footer',array(
		'title'	=> esc_html__('Footer Settings','real-estate-developer'),
		'panel' => 'real_estate_developer_panel_id',
		'description' => __('For more options of Footer  section </br> <a class="go-pro-btn" target="blank" href="https://www.vwthemes.com/products/property-developer-wordpress-theme">GET PRO</a>','real-estate-developer'),
	));

	$wp_customize->add_setting( 'real_estate_developer_footer_hide_show',array(
    'default' => 1,
    'transport' => 'refresh',
    'sanitize_callback' => 'real_estate_developer_switch_sanitization'
	));
	$wp_customize->add_control( new Real_Estate_Developer_Toggle_Switch_Custom_Control( $wp_customize, 'real_estate_developer_footer_hide_show',array(
    'label' => esc_html__( 'Show / Hide Footer','real-estate-developer' ),
    'section' => 'real_estate_developer_footer'
	)));

 	// font size
	$wp_customize->add_setting('real_estate_developer_button_footer_font_size',array(
		'default'=> 25,
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('real_estate_developer_button_footer_font_size',array(
		'label'	=> __('Footer Heading Font Size','real-estate-developer'),
  		'type'        => 'number',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 1,
			'max'              => 50,
		),
		'section'=> 'real_estate_developer_footer',
	));

	$wp_customize->add_setting('real_estate_developer_button_footer_heading_letter_spacing',array(
		'default'=> 1,
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('real_estate_developer_button_footer_heading_letter_spacing',array(
		'label'	=> __('Heading Letter Spacing','real-estate-developer'),
  	'type'        => 'number',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 1,
			'max'              => 50,
	),
		'section'=> 'real_estate_developer_footer',
	));

	// text trasform
	$wp_customize->add_setting('real_estate_developer_button_footer_text_transform',array(
		'default'=> 'Capitalize',
		'sanitize_callback'	=> 'real_estate_developer_sanitize_choices'
	));
	$wp_customize->add_control('real_estate_developer_button_footer_text_transform',array(
		'type' => 'radio',
		'label'	=> __('Heading Text Transform','real-estate-developer'),
		'choices' => array(
			'Uppercase' => __('Uppercase','real-estate-developer'),
			'Capitalize' => __('Capitalize','real-estate-developer'),
			'Lowercase' => __('Lowercase','real-estate-developer'),
		),
		'section'=> 'real_estate_developer_footer',
	));

	$wp_customize->add_setting('real_estate_developer_footer_heading_weight',array(
    'default' => '500',
    'transport' => 'refresh',
    'sanitize_callback' => 'real_estate_developer_sanitize_choices'
	));
	$wp_customize->add_control('real_estate_developer_footer_heading_weight',array(
    'type' => 'select',
    'label' => __('Heading Font Weight','real-estate-developer'),
    'section' => 'real_estate_developer_footer',
    'choices' => array(
    	'100' => __('100','real-estate-developer'),
        '200' => __('200','real-estate-developer'),
        '300' => __('300','real-estate-developer'),
        '400' => __('400','real-estate-developer'),
        '500' => __('500','real-estate-developer'),
        '600' => __('600','real-estate-developer'),
        '700' => __('700','real-estate-developer'),
        '800' => __('800','real-estate-developer'),
        '900' => __('900','real-estate-developer'),
    ),
	) );

	$wp_customize->add_setting('real_estate_developer_footer_template',array(
		'default'	=> esc_html('real_estate_developer-footer-one'),
		'sanitize_callback'	=> 'real_estate_developer_sanitize_choices'
	));
	$wp_customize->add_control('real_estate_developer_footer_template',array(
		'label'	=> esc_html__('Footer style','real-estate-developer'),
		'section'	=> 'real_estate_developer_footer',
		'setting'	=> 'real_estate_developer_footer_template',
		'type' => 'select',
		'choices' => array(
			'real_estate_developer-footer-one' => esc_html__('Style 1', 'real-estate-developer'),
			'real_estate_developer-footer-two' => esc_html__('Style 2', 'real-estate-developer'),
			'real_estate_developer-footer-three' => esc_html__('Style 3', 'real-estate-developer'),
			'real_estate_developer-footer-four' => esc_html__('Style 4', 'real-estate-developer'),
			'real_estate_developer-footer-five' => esc_html__('Style 5', 'real-estate-developer'),
		)
	));

	$wp_customize->add_setting('real_estate_developer_footer_background_color', array(
		'default'           => '#1B3B4E',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'real_estate_developer_footer_background_color', array(
		'label'    => __('Footer Background Color', 'real-estate-developer'),
		'section'  => 'real_estate_developer_footer',
	)));

	$wp_customize->add_setting('real_estate_developer_footer_background_image',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw',
	));
	$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize,'real_estate_developer_footer_background_image',array(
        'label' => __('Footer Background Image','real-estate-developer'),
        'section' => 'real_estate_developer_footer'
	)));

	$wp_customize->add_setting('real_estate_developer_footer_img_position',array(
	  'default' => 'center center',
	  'transport' => 'refresh',
	  'sanitize_callback' => 'real_estate_developer_sanitize_choices'
	));
	$wp_customize->add_control('real_estate_developer_footer_img_position',array(
		'type' => 'select',
		'label' => __('Footer Image Position','real-estate-developer'),
		'section' => 'real_estate_developer_footer',
		'choices' 	=> array(
			'left top' 		=> esc_html__( 'Top Left', 'real-estate-developer' ),
			'center top'   => esc_html__( 'Top', 'real-estate-developer' ),
			'right top'   => esc_html__( 'Top Right', 'real-estate-developer' ),
			'left center'   => esc_html__( 'Left', 'real-estate-developer' ),
			'center center'   => esc_html__( 'Center', 'real-estate-developer' ),
			'right center'   => esc_html__( 'Right', 'real-estate-developer' ),
			'left bottom'   => esc_html__( 'Bottom Left', 'real-estate-developer' ),
			'center bottom'   => esc_html__( 'Bottom', 'real-estate-developer' ),
			'right bottom'   => esc_html__( 'Bottom Right', 'real-estate-developer' ),
		),
	));

  // Footer
  $wp_customize->add_setting('real_estate_developer_img_footer',array(
    'default'=> 'scroll',
    'sanitize_callback' => 'real_estate_developer_sanitize_choices'
  ));
  $wp_customize->add_control('real_estate_developer_img_footer',array(
    'type' => 'select',
    'label' => __('Footer Background Attatchment','real-estate-developer'),
    'choices' => array(
      'fixed' => __('fixed','real-estate-developer'),
      'scroll' => __('scroll','real-estate-developer'),
    ),
    'section'=> 'real_estate_developer_footer',
  ));

  // footer padding
  $wp_customize->add_setting('real_estate_developer_footer_padding',array(
    'default'=> '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('real_estate_developer_footer_padding',array(
    'label' => __('Footer Top Bottom Padding','real-estate-developer'),
    'description' => __('Enter a value in pixels. Example:20px','real-estate-developer'),
    'input_attrs' => array(
      'placeholder' => __( '10px', 'real-estate-developer' ),
    ),
    'section'=> 'real_estate_developer_footer',
    'type'=> 'text'
  ));

  $wp_customize->add_setting('real_estate_developer_footer_widgets_heading',array(
    'default' => 'Left',
    'transport' => 'refresh',
    'sanitize_callback' => 'real_estate_developer_sanitize_choices'
  ));
  $wp_customize->add_control('real_estate_developer_footer_widgets_heading',array(
    'type' => 'select',
    'label' => __('Footer Widget Heading','real-estate-developer'),
    'section' => 'real_estate_developer_footer',
    'choices' => array(
      'Left' => __('Left','real-estate-developer'),
      'Center' => __('Center','real-estate-developer'),
      'Right' => __('Right','real-estate-developer')
    ),
  ) );

  $wp_customize->add_setting('real_estate_developer_footer_widgets_content',array(
    'default' => 'Left',
    'transport' => 'refresh',
    'sanitize_callback' => 'real_estate_developer_sanitize_choices'
  ));
  $wp_customize->add_control('real_estate_developer_footer_widgets_content',array(
    'type' => 'select',
    'label' => __('Footer Widget Content','real-estate-developer'),
    'section' => 'real_estate_developer_footer',
    'choices' => array(
      'Left' => __('Left','real-estate-developer'),
      'Center' => __('Center','real-estate-developer'),
      'Right' => __('Right','real-estate-developer')
  	),
	) );
	
	//Selective Refresh
	$wp_customize->selective_refresh->add_partial('real_estate_developer_footer_text', array(
		'selector' => '.copyright p',
		'render_callback' => 'real_estate_developer_Customize_partial_real_estate_developer_footer_text',
	));

	$wp_customize->add_setting('real_estate_developer_footer_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('real_estate_developer_footer_text',array(
		'label'	=> esc_html__('Copyright Text','real-estate-developer'),
		'input_attrs' => array(
      'placeholder' => esc_html__( 'Copyright 2025, .....', 'real-estate-developer' ),
      ),
		'section'=> 'real_estate_developer_footer',
		'type'=> 'text'
	));

	$wp_customize->add_setting( 'real_estate_developer_copyright_hide_show',array(
	  'default' => 1,
	  'transport' => 'refresh',
	  'sanitize_callback' => 'real_estate_developer_switch_sanitization'
	));
	$wp_customize->add_control( new Real_Estate_Developer_Toggle_Switch_Custom_Control( $wp_customize, 'real_estate_developer_copyright_hide_show',array(
		'label' => esc_html__( 'Show / Hide Copyright','real-estate-developer' ),
		'section' => 'real_estate_developer_footer'
	)));

	$wp_customize->add_setting('real_estate_developer_copyright_alingment',array(
	    'default' => 'center',
	    'sanitize_callback' => 'real_estate_developer_sanitize_choices'
		));
		$wp_customize->add_control(new Real_Estate_Developer_Image_Radio_Control($wp_customize, 'real_estate_developer_copyright_alingment', array(
	    'type' => 'select',
	    'label' => esc_html__('Copyright Alignment','real-estate-developer'),
	    'section' => 'real_estate_developer_footer',
	    'settings' => 'real_estate_developer_copyright_alingment',
	    'choices' => array(
	        'left' => esc_url(get_template_directory_uri()).'/assets/images/copyright1.png',
	        'center' => esc_url(get_template_directory_uri()).'/assets/images/copyright2.png',
	        'right' => esc_url(get_template_directory_uri()).'/assets/images/copyright3.png'
	))));

	$wp_customize->add_setting('real_estate_developer_copyright_background_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'real_estate_developer_copyright_background_color', array(
		'label'    => __('Copyright Background Color', 'real-estate-developer'),
		'section'  => 'real_estate_developer_footer',
	)));

	$wp_customize->add_setting('real_estate_developer_copyright_font_size',array(
		'default'=> '',
		'sanitize_callback' => 'sanitize_text_field'
	));
	$wp_customize->add_control('real_estate_developer_copyright_font_size',array(
		'label' => __('Copyright Font Size','real-estate-developer'),
		'description' => __('Enter a value in pixels. Example:20px','real-estate-developer'),
		'input_attrs' => array(
      	'placeholder' => __( '10px', 'real-estate-developer' ),
	    ),
		'section'=> 'real_estate_developer_footer',
		'type'=> 'text'
	));

  $wp_customize->add_setting( 'real_estate_developer_hide_show_scroll',array(
  	'default' => 1,
  	'transport' => 'refresh',
  	'sanitize_callback' => 'real_estate_developer_switch_sanitization'
  ));
  $wp_customize->add_control( new Real_Estate_Developer_Toggle_Switch_Custom_Control( $wp_customize, 'real_estate_developer_hide_show_scroll',array(
  	'label' => esc_html__( 'Show / Hide Scroll to Top','real-estate-developer' ),
  	'section' => 'real_estate_developer_footer'
  )));

  //Selective Refresh
	$wp_customize->selective_refresh->add_partial('real_estate_developer_scroll_to_top_icon', array(
		'selector' => '.scrollup i',
		'render_callback' => 'real_estate_developer_Customize_partial_real_estate_developer_scroll_to_top_icon',
	));

  $wp_customize->add_setting('real_estate_developer_scroll_top_alignment',array(
    'default' => 'Right',
    'sanitize_callback' => 'real_estate_developer_sanitize_choices'
	));
	$wp_customize->add_control(new Real_Estate_Developer_Image_Radio_Control($wp_customize, 'real_estate_developer_scroll_top_alignment', array(
    'type' => 'select',
    'label' => esc_html__('Scroll To Top','real-estate-developer'),
    'section' => 'real_estate_developer_footer',
    'settings' => 'real_estate_developer_scroll_top_alignment',
    'choices' => array(
        'Left' => esc_url(get_template_directory_uri()).'/assets/images/layout1.png',
        'Center' => esc_url(get_template_directory_uri()).'/assets/images/layout2.png',
        'Right' => esc_url(get_template_directory_uri()).'/assets/images/layout3.png'
  ))));

	$wp_customize->add_setting('real_estate_developer_scroll_top_icon',array(
		'default' => 'fas fa-long-arrow-alt-up',
		'sanitize_callback' => 'sanitize_text_field'
	));
	$wp_customize->add_control(new Real_Estate_Developer_Fontawesome_Icon_Chooser($wp_customize,'real_estate_developer_scroll_top_icon',array(
		'label' => __('Add Scroll to Top Icon','real-estate-developer'),
		'transport' => 'refresh',
		'section' => 'real_estate_developer_footer',
		'setting' => 'real_estate_developer_scroll_top_icon',
		'type'    => 'icon'
	)));

  $wp_customize->add_setting('real_estate_developer_scroll_to_top_font_size',array(
    'default'=> '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('real_estate_developer_scroll_to_top_font_size',array(
    'label' => __('Icon Font Size','real-estate-developer'),
    'description' => __('Enter a value in pixels. Example:20px','real-estate-developer'),
    'input_attrs' => array(
      'placeholder' => __( '10px', 'real-estate-developer' ),
    ),
    'section'=> 'real_estate_developer_footer',
    'type'=> 'text'
  ));

  $wp_customize->add_setting('real_estate_developer_scroll_to_top_padding',array(
    'default'=> '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('real_estate_developer_scroll_to_top_padding',array(
    'label' => __('Icon Top Bottom Padding','real-estate-developer'),
    'description' => __('Enter a value in pixels. Example:20px','real-estate-developer'),
    'input_attrs' => array(
      'placeholder' => __( '10px', 'real-estate-developer' ),
    ),
    'section'=> 'real_estate_developer_footer',
    'type'=> 'text'
  ));

  $wp_customize->add_setting('real_estate_developer_scroll_to_top_width',array(
    'default'=> '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('real_estate_developer_scroll_to_top_width',array(
    'label' => __('Icon Width','real-estate-developer'),
    'description' => __('Enter a value in pixels Example:20px','real-estate-developer'),
    'input_attrs' => array(
      'placeholder' => __( '10px', 'real-estate-developer' ),
  ),
	  'section'=> 'real_estate_developer_footer',
	  'type'=> 'text'
  ));

  $wp_customize->add_setting('real_estate_developer_scroll_to_top_height',array(
    'default'=> '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('real_estate_developer_scroll_to_top_height',array(
    'label' => __('Icon Height','real-estate-developer'),
    'description' => __('Enter a value in pixels. Example:20px','real-estate-developer'),
    'input_attrs' => array(
      'placeholder' => __( '10px', 'real-estate-developer' ),
    ),
    'section'=> 'real_estate_developer_footer',
    'type'=> 'text'
  ));

  $wp_customize->add_setting( 'real_estate_developer_scroll_to_top_border_radius', array(
    'default'              => '',
    'transport'        => 'refresh',
    'sanitize_callback'    => 'real_estate_developer_sanitize_number_range'
  ) );
  $wp_customize->add_control( 'real_estate_developer_scroll_to_top_border_radius', array(
    'label'       => esc_html__( 'Icon Border Radius','real-estate-developer' ),
    'section'     => 'real_estate_developer_footer',
    'type'        => 'range',
    'input_attrs' => array(
      'step'             => 1,
      'min'              => 1,
      'max'              => 50,
    ),
  ) );

    $wp_customize->add_setting( 'real_estate_developer_copyright_sticky',array(
      'default' => 0,
      'transport' => 'refresh',
      'sanitize_callback' => 'real_estate_developer_switch_sanitization'
    ) );
    $wp_customize->add_control( new real_estate_developer_Toggle_Switch_Custom_Control( $wp_customize, 'real_estate_developer_copyright_sticky',array(
      'label' => esc_html__( 'Show / Hide Sticky Copyright','real-estate-developer' ),
      'section' => 'real_estate_developer_footer'
    )));

   $wp_customize->add_setting('real_estate_developer_footer_social_icons_font_size',array(
       'default'=> 16,
       'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('real_estate_developer_footer_social_icons_font_size',array(
    'label' => __('Social Icon Font Size','real-estate-developer'),
    	'type'        => 'number',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 1,
			'max'              => 50,
		),
		'section'=> 'real_estate_developer_footer',
	 ));

    // footer social icon
	$wp_customize->add_setting( 'real_estate_developer_footer_icon',array(
		'default' => false,
		'transport' => 'refresh',
		'sanitize_callback' => 'real_estate_developer_switch_sanitization'
  	) );
	$wp_customize->add_control( new Real_Estate_Developer_Toggle_Switch_Custom_Control( $wp_customize, 'real_estate_developer_footer_icon',array(
		'label' => esc_html__( 'Show / Hide Footer Social Icon','real-estate-developer' ),
		'section' => 'real_estate_developer_footer'
  )));

  $wp_customize->add_setting('real_estate_developer_align_footer_social_icon',array(
        'default' => 'center',
        'sanitize_callback' => 'real_estate_developer_sanitize_choices'
	));
	$wp_customize->add_control('real_estate_developer_align_footer_social_icon',array(
        'type' => 'select',
        'label' => __('Social Icon Alignment ','real-estate-developer'),
        'section' => 'real_estate_developer_footer',
        'choices' => array(
            'left' => __('Left','real-estate-developer'),
            'right' => __('Right','real-estate-developer'),
            'center' => __('Center','real-estate-developer'),
        ),
	) );

 	//Blog Post
	$wp_customize->add_panel( 'real_estate_developer_blog_post_parent_panel', array(
		'title' => esc_html__( 'Blog Post Settings', 'real-estate-developer' ),
		'panel' => 'real_estate_developer_panel_id',
		'priority' => 20,
	));

	// Add example section and controls to the middle (second) panel
	$wp_customize->add_section( 'real_estate_developer_post_settings', array(
		'title' => esc_html__( 'Post Settings', 'real-estate-developer' ),
		'panel' => 'real_estate_developer_blog_post_parent_panel',
	));

	//Selective Refresh
	$wp_customize->selective_refresh->add_partial('real_estate_developer_toggle_postdate', array(
		'selector' => '.post-main-box h2 a',
		'render_callback' => 'real_estate_developer_Customize_partial_real_estate_developer_toggle_postdate',
	));

	//Blog layout
  $wp_customize->add_setting('real_estate_developer_blog_layout_option',array(
    'default' => 'Left',
    'sanitize_callback' => 'real_estate_developer_sanitize_choices'
  ));
  $wp_customize->add_control(new Real_Estate_Developer_Image_Radio_Control($wp_customize, 'real_estate_developer_blog_layout_option', array(
    'type' => 'select',
    'label' => __('Blog Post Layouts','real-estate-developer'),
    'section' => 'real_estate_developer_post_settings',
    'choices' => array(
      'Default' => esc_url(get_template_directory_uri()).'/assets/images/blog-layout1.png',
      'Center' => esc_url(get_template_directory_uri()).'/assets/images/blog-layout2.png',
      'Left' => esc_url(get_template_directory_uri()).'/assets/images/blog-layout3.png',
  ))));

	$wp_customize->add_setting('real_estate_developer_theme_options',array(
    'default' => 'Right Sidebar',
    'sanitize_callback' => 'real_estate_developer_sanitize_choices'
	));
	$wp_customize->add_control('real_estate_developer_theme_options',array(
    'type' => 'select',
    'label' => esc_html__('Post Sidebar Layout','real-estate-developer'),
    'description' => esc_html__('Here you can change the sidebar layout for posts. ','real-estate-developer'),
    'section' => 'real_estate_developer_post_settings',
    'choices' => array(
        'Left Sidebar' => esc_html__('Left Sidebar','real-estate-developer'),
        'Right Sidebar' => esc_html__('Right Sidebar','real-estate-developer'),
        'One Column' => esc_html__('One Column','real-estate-developer'),
        'Three Columns' => esc_html__('Three Columns','real-estate-developer'),
        'Four Columns' => esc_html__('Four Columns','real-estate-developer'),
        'Grid Layout' => esc_html__('Grid Layout','real-estate-developer')
    ),
	) );

	$wp_customize->add_setting('real_estate_developer_toggle_postdate_icon',array(
		'default'	=> 'fas fa-calendar-alt',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Real_Estate_Developer_Fontawesome_Icon_Chooser(
  $wp_customize,'real_estate_developer_toggle_postdate_icon',array(
		'label'	=> __('Add Post Date Icon','real-estate-developer'),
		'transport' => 'refresh',
		'section'	=> 'real_estate_developer_post_settings',
		'setting'	=> 'real_estate_developer_toggle_postdate_icon',
		'type'		=> 'icon'
	)));

 	$wp_customize->add_setting( 'real_estate_developer_blog_toggle_postdate',array(
    'default' => 1,
    'transport' => 'refresh',
    'sanitize_callback' => 'real_estate_developer_switch_sanitization'
  ));
  $wp_customize->add_control( new Real_Estate_Developer_Toggle_Switch_Custom_Control( $wp_customize, 'real_estate_developer_blog_toggle_postdate',array(
    'label' => esc_html__( 'Show / Hide Post Date','real-estate-developer' ),
    'section' => 'real_estate_developer_post_settings'
  )));

	$wp_customize->add_setting('real_estate_developer_toggle_author_icon',array(
		'default'	=> 'fas fa-user',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Real_Estate_Developer_Fontawesome_Icon_Chooser(
  $wp_customize,'real_estate_developer_toggle_author_icon',array(
		'label'	=> __('Add Author Icon','real-estate-developer'),
		'transport' => 'refresh',
		'section'	=> 'real_estate_developer_post_settings',
		'setting'	=> 'real_estate_developer_toggle_author_icon',
		'type'		=> 'icon'
	)));

  $wp_customize->add_setting( 'real_estate_developer_blog_toggle_author',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'real_estate_developer_switch_sanitization'
  ));
  $wp_customize->add_control( new Real_Estate_Developer_Toggle_Switch_Custom_Control( $wp_customize, 'real_estate_developer_blog_toggle_author',array(
		'label' => esc_html__( 'Show / Hide Author','real-estate-developer' ),
		'section' => 'real_estate_developer_post_settings'
  )));

  $wp_customize->add_setting('real_estate_developer_toggle_comments_icon',array(
		'default'	=> 'fa fa-comments',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Real_Estate_Developer_Fontawesome_Icon_Chooser(
  $wp_customize,'real_estate_developer_toggle_comments_icon',array(
		'label'	=> __('Add Comments Icon','real-estate-developer'),
		'transport' => 'refresh',
		'section'	=> 'real_estate_developer_post_settings',
		'setting'	=> 'real_estate_developer_toggle_comments_icon',
		'type'		=> 'icon'
	)));

  $wp_customize->add_setting( 'real_estate_developer_blog_toggle_comments',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'real_estate_developer_switch_sanitization'
  ) );
  $wp_customize->add_control( new Real_Estate_Developer_Toggle_Switch_Custom_Control( $wp_customize, 'real_estate_developer_blog_toggle_comments',array(
		'label' => esc_html__( 'Show / Hide Comments','real-estate-developer' ),
		'section' => 'real_estate_developer_post_settings'
  )));

  $wp_customize->add_setting('real_estate_developer_toggle_time_icon',array(
		'default'	=> 'fas fa-clock',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Real_Estate_Developer_Fontawesome_Icon_Chooser(
  $wp_customize,'real_estate_developer_toggle_time_icon',array(
		'label'	=> __('Add Time Icon','real-estate-developer'),
		'transport' => 'refresh',
		'section'	=> 'real_estate_developer_post_settings',
		'setting'	=> 'real_estate_developer_toggle_time_icon',
		'type'		=> 'icon'
	)));

  $wp_customize->add_setting( 'real_estate_developer_blog_toggle_time',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'real_estate_developer_switch_sanitization'
  ) );
  $wp_customize->add_control( new Real_Estate_Developer_Toggle_Switch_Custom_Control( $wp_customize, 'real_estate_developer_blog_toggle_time',array(
		'label' => esc_html__( 'Show / Hide Time','real-estate-developer' ),
		'section' => 'real_estate_developer_post_settings'
  )));

  $wp_customize->add_setting( 'real_estate_developer_featured_image_hide_show',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'real_estate_developer_switch_sanitization'
	));
  $wp_customize->add_control( new Real_Estate_Developer_Toggle_Switch_Custom_Control( $wp_customize, 'real_estate_developer_featured_image_hide_show', array(
		'label' => esc_html__( 'Show / Hide Featured Image','real-estate-developer' ),
		'section' => 'real_estate_developer_post_settings'
  )));

  $wp_customize->add_setting( 'real_estate_developer_featured_image_border_radius', array(
		'default'              => '0',
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'real_estate_developer_sanitize_number_range'
	) );
	$wp_customize->add_control( 'real_estate_developer_featured_image_border_radius', array(
		'label'       => esc_html__( 'Featured Image Border Radius','real-estate-developer' ),
		'section'     => 'real_estate_developer_post_settings',
		'type'        => 'range',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 1,
			'max'              => 50,
		),
	) );

	$wp_customize->add_setting( 'real_estate_developer_featured_image_box_shadow', array(
		'default'              => '0',
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'real_estate_developer_sanitize_number_range'
	) );
	$wp_customize->add_control( 'real_estate_developer_featured_image_box_shadow', array(
		'label'       => esc_html__( 'Featured Image Box Shadow','real-estate-developer' ),
		'section'     => 'real_estate_developer_post_settings',
		'type'        => 'range',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 1,
			'max'              => 50,
		),
	) );

	//Featured Image
	$wp_customize->add_setting('real_estate_developer_blog_post_featured_image_dimension',array(
   'default' => 'default',
   'sanitize_callback'	=> 'real_estate_developer_sanitize_choices'
	));
	$wp_customize->add_control('real_estate_developer_blog_post_featured_image_dimension',array(
		'type' => 'select',
		'label'	=> __('Blog Post Featured Image Dimension','real-estate-developer'),
		'section'	=> 'real_estate_developer_post_settings',
		'choices' => array(
		'default' => __('Default','real-estate-developer'),
		'custom' => __('Custom Image Size','real-estate-developer'),
      ),
	));

	$wp_customize->add_setting('real_estate_developer_blog_post_featured_image_custom_width',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
		));
	$wp_customize->add_control('real_estate_developer_blog_post_featured_image_custom_width',array(
		'label'	=> __('Featured Image Custom Width','real-estate-developer'),
		'description'	=> __('Enter a value in pixels. Example:20px','real-estate-developer'),
		'input_attrs' => array(
    	'placeholder' => __( '10px', 'real-estate-developer' ),),
		'section'=> 'real_estate_developer_post_settings',
		'type'=> 'text',
		'active_callback' => 'real_estate_developer_blog_post_featured_image_dimension'
		));

	$wp_customize->add_setting('real_estate_developer_blog_post_featured_image_custom_height',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('real_estate_developer_blog_post_featured_image_custom_height',array(
		'label'	=> __('Featured Image Custom Height','real-estate-developer'),
		'description'	=> __('Enter a value in pixels. Example:20px','real-estate-developer'),
		'input_attrs' => array(
    	'placeholder' => __( '10px', 'real-estate-developer' ),),
		'section'=> 'real_estate_developer_post_settings',
		'type'=> 'text',
		'active_callback' => 'real_estate_developer_blog_post_featured_image_dimension'
	));

  $wp_customize->add_setting( 'real_estate_developer_excerpt_number', array(
		'default'              => 30,
		'type'                 => 'theme_mod',
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'real_estate_developer_sanitize_number_range',
		'sanitize_js_callback' => 'absint',
	) );
	$wp_customize->add_control( 'real_estate_developer_excerpt_number', array(
		'label'       => esc_html__( 'Excerpt length','real-estate-developer' ),
		'section'     => 'real_estate_developer_post_settings',
		'type'        => 'range',
		'settings'    => 'real_estate_developer_excerpt_number',
		'input_attrs' => array(
			'step'             => 5,
			'min'              => 0,
			'max'              => 50,
		),
	) );

	$wp_customize->add_setting('real_estate_developer_meta_field_separator',array(
		'default'=> '|',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('real_estate_developer_meta_field_separator',array(
		'label'	=> __('Add Meta Separator','real-estate-developer'),
		'description' => __('Add the seperator for meta box. Example: "|", "/", etc.','real-estate-developer'),
		'section'=> 'real_estate_developer_post_settings',
		'type'=> 'text'
	));

  $wp_customize->add_setting('real_estate_developer_excerpt_settings',array(
    'default' => 'Excerpt',
    'transport' => 'refresh',
    'sanitize_callback' => 'real_estate_developer_sanitize_choices'
	));
	$wp_customize->add_control('real_estate_developer_excerpt_settings',array(
    'type' => 'select',
    'label' => esc_html__('Post Content','real-estate-developer'),
    'section' => 'real_estate_developer_post_settings',
    'choices' => array(
    	'Content' => esc_html__('Content','real-estate-developer'),
        'Excerpt' => esc_html__('Excerpt','real-estate-developer'),
        'No Content' => esc_html__('No Content','real-estate-developer')
        ),
	) );

  $wp_customize->add_setting('real_estate_developer_blog_page_posts_settings',array(
    'default' => 'Into Blocks',
    'transport' => 'refresh',
    'sanitize_callback' => 'real_estate_developer_sanitize_choices'
	));
	$wp_customize->add_control('real_estate_developer_blog_page_posts_settings',array(
    'type' => 'select',
    'label' => __('Display Blog Posts','real-estate-developer'),
    'section' => 'real_estate_developer_post_settings',
    'choices' => array(
    	'Into Blocks' => __('Into Blocks','real-estate-developer'),
        'Without Blocks' => __('Without Blocks','real-estate-developer')
        ),
	) );

	$wp_customize->add_setting( 'real_estate_developer_blog_pagination_hide_show',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'real_estate_developer_switch_sanitization'
  ));
  $wp_customize->add_control( new Real_Estate_Developer_Toggle_Switch_Custom_Control( $wp_customize, 'real_estate_developer_blog_pagination_hide_show',array(
		'label' => esc_html__( 'Show / Hide Blog Pagination','real-estate-developer' ),
		'section' => 'real_estate_developer_post_settings'
  )));

	$wp_customize->add_setting('real_estate_developer_blog_excerpt_suffix',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('real_estate_developer_blog_excerpt_suffix',array(
		'label'	=> __('Add Excerpt Suffix','real-estate-developer'),
		'input_attrs' => array(
      'placeholder' => __( '[...]', 'real-estate-developer' ),
        ),
		'section'=> 'real_estate_developer_post_settings',
		'type'=> 'text'
	));

	$wp_customize->add_setting( 'real_estate_developer_blog_pagination_type', array(
    'default'			=> 'blog-page-numbers',
    'sanitize_callback'	=> 'real_estate_developer_sanitize_choices'
  ));
  $wp_customize->add_control( 'real_estate_developer_blog_pagination_type', array(
    'section' => 'real_estate_developer_post_settings',
    'type' => 'select',
    'label' => __( 'Blog Pagination', 'real-estate-developer' ),
    'choices'		=> array(
      'blog-page-numbers'  => __( 'Numeric', 'real-estate-developer' ),
      'next-prev' => __( 'Older Posts/Newer Posts', 'real-estate-developer' ),
  )));
    $wp_customize->add_setting('real_estate_developer_show_first_caps', array(
	    'default'           => false,
	    'transport'         => 'refresh',
	    'sanitize_callback' => 'real_estate_developer_switch_sanitization',
	));

	$wp_customize->add_control(new Real_estate_developer_Toggle_Switch_Custom_Control(
	    $wp_customize,
	    'real_estate_developer_show_first_caps',
	    array(
	        'label'   => esc_html__('First Cap (First Capital Letter)', 'real-estate-developer'),
	        'section' => 'real_estate_developer_post_settings',
	    )
	));

  // Button Settings
	$wp_customize->add_section( 'real_estate_developer_button_settings', array(
		'title' => esc_html__( 'Button Settings', 'real-estate-developer' ),
		'panel' => 'real_estate_developer_blog_post_parent_panel',
	));

	//Selective Refresh
	$wp_customize->selective_refresh->add_partial('real_estate_developer_button_text', array(
		'selector' => '.post-main-box .more-btn a',
		'render_callback' => 'real_estate_developer_Customize_partial_real_estate_developer_button_text',
	));

  $wp_customize->add_setting('real_estate_developer_button_text',array(
		'default'=> esc_html__('Read More','real-estate-developer'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('real_estate_developer_button_text',array(
		'label'	=> esc_html__('Add Button Text','real-estate-developer'),
		'input_attrs' => array(
    'placeholder' => esc_html__( 'Read More', 'real-estate-developer' ),
        ),
		'section'=> 'real_estate_developer_button_settings',
		'type'=> 'text'
	));

	// font size button
	$wp_customize->add_setting('real_estate_developer_button_font_size',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('real_estate_developer_button_font_size',array(
		'label'	=> __('Button Font Size','real-estate-developer'),
		'description'	=> __('Enter a value in pixels. Example:20px','real-estate-developer'),
		'input_attrs' => array(
  		'placeholder' => __( '10px', 'real-estate-developer' ),
    ),
  	'type'        => 'text',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 1,
			'max'              => 50,
		),
		'section'=> 'real_estate_developer_button_settings',
	));


	$wp_customize->add_setting( 'real_estate_developer_button_border_radius', array(
		'default'              => 5,
		'type'                 => 'theme_mod',
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'real_estate_developer_sanitize_number_range',
		'sanitize_js_callback' => 'absint',
	) );
	$wp_customize->add_control( 'real_estate_developer_button_border_radius', array(
		'label'       => esc_html__( 'Button Border Radius','real-estate-developer' ),
		'section'     => 'real_estate_developer_button_settings',
		'type'        => 'range',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 1,
			'max'              => 50,
		),
	) );

	// button padding
	$wp_customize->add_setting('real_estate_developer_button_top_bottom_padding',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('real_estate_developer_button_top_bottom_padding',array(
		'label'	=> __('Button Top Bottom Padding','real-estate-developer'),
		'description'	=> __('Enter a value in pixels. Example:20px','real-estate-developer'),
		'input_attrs' => array(
      'placeholder' => __( '10px', 'real-estate-developer' ),
    ),
		'section'=> 'real_estate_developer_button_settings',
		'type'=> 'text'
	));

	$wp_customize->add_setting('real_estate_developer_button_left_right_padding',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('real_estate_developer_button_left_right_padding',array(
		'label'	=> __('Button Left Right Padding','real-estate-developer'),
		'description'	=> __('Enter a value in pixels. Example:20px','real-estate-developer'),
		'input_attrs' => array(
      'placeholder' => __( '10px', 'real-estate-developer' ),
    ),
		'section'=> 'real_estate_developer_button_settings',
		'type'=> 'text'
	));

	$wp_customize->add_setting('real_estate_developer_button_letter_spacing',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('real_estate_developer_button_letter_spacing',array(
		'label'	=> __('Button Letter Spacing','real-estate-developer'),
		'description'	=> __('Enter a value in pixels. Example:20px','real-estate-developer'),
		'input_attrs' => array(
      	'placeholder' => __( '10px', 'real-estate-developer' ),
  ),
  	'type'        => 'text',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 1,
			'max'              => 50,
	),
		'section'=> 'real_estate_developer_button_settings',
	));

	// text trasform
	$wp_customize->add_setting('real_estate_developer_button_text_transform',array(
		'default'=> 'Capitalize',
		'sanitize_callback'	=> 'real_estate_developer_sanitize_choices'
	));
	$wp_customize->add_control('real_estate_developer_button_text_transform',array(
		'type' => 'radio',
		'label'	=> __('Button Text Transform','real-estate-developer'),
		'choices' => array(
      'Uppercase' => __('Uppercase','real-estate-developer'),
      'Capitalize' => __('Capitalize','real-estate-developer'),
      'Lowercase' => __('Lowercase','real-estate-developer'),
    ),
		'section'=> 'real_estate_developer_button_settings',
	));

	// Related Post Settings
	$wp_customize->add_section( 'real_estate_developer_related_posts_settings', array(
		'title' => esc_html__( 'Related Posts Settings', 'real-estate-developer' ),
		'panel' => 'real_estate_developer_blog_post_parent_panel',
	));

	//Selective Refresh
	$wp_customize->selective_refresh->add_partial('real_estate_developer_related_post_title', array(
		'selector' => '.related-post h3',
		'render_callback' => 'real_estate_developer_Customize_partial_real_estate_developer_related_post_title',
	));

  $wp_customize->add_setting( 'real_estate_developer_related_post',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'real_estate_developer_switch_sanitization'
  ) );
  $wp_customize->add_control( new Real_Estate_Developer_Toggle_Switch_Custom_Control( $wp_customize, 'real_estate_developer_related_post',array(
		'label' => esc_html__( 'Related Post','real-estate-developer' ),
		'section' => 'real_estate_developer_related_posts_settings'
  )));

  $wp_customize->add_setting('real_estate_developer_related_post_title',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('real_estate_developer_related_post_title',array(
		'label'	=> esc_html__('Add Related Post Title','real-estate-developer'),
		'input_attrs' => array(
      'placeholder' => esc_html__( 'Related Post', 'real-estate-developer' ),
        ),
		'section'=> 'real_estate_developer_related_posts_settings',
		'type'=> 'text'
	));

 	$wp_customize->add_setting('real_estate_developer_related_posts_count',array(
		'default'=> 3,
		'sanitize_callback'	=> 'real_estate_developer_sanitize_number_absint'
	));
	$wp_customize->add_control('real_estate_developer_related_posts_count',array(
		'label'	=> esc_html__('Add Related Post Count','real-estate-developer'),
		'input_attrs' => array(
      'placeholder' => esc_html__( '3', 'real-estate-developer' ),
        ),
		'section'=> 'real_estate_developer_related_posts_settings',
		'type'=> 'number'
	));

	$wp_customize->add_setting( 'real_estate_developer_related_posts_excerpt_number', array(
		'default'              => 20,
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'real_estate_developer_sanitize_number_range'
	) );
	$wp_customize->add_control( 'real_estate_developer_related_posts_excerpt_number', array(
		'label'       => esc_html__( 'Related Posts Excerpt length','real-estate-developer' ),
		'section'     => 'real_estate_developer_related_posts_settings',
		'type'        => 'range',
		'settings'    => 'real_estate_developer_related_posts_excerpt_number',
		'input_attrs' => array(
			'step'             => 5,
			'min'              => 0,
			'max'              => 50,
		),
	) );

	$wp_customize->add_setting('real_estate_developer_related_post_meta_field_separator',array(
		'default'=> '|',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('real_estate_developer_related_post_meta_field_separator',array(
		'label'	=> __('Add Meta Separator','real-estate-developer'),
		'description' => __('Add the seperator for meta box. Example: "|", "/", etc.','real-estate-developer'),
		'section'=> 'real_estate_developer_related_posts_settings',
		'type'=> 'text'
	));

	$wp_customize->add_setting( 'real_estate_developer_related_image_hide_show',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'real_estate_developer_switch_sanitization'
	));
  $wp_customize->add_control( new Real_Estate_Developer_Toggle_Switch_Custom_Control( $wp_customize, 'real_estate_developer_related_image_hide_show', array(
		'label' => esc_html__( 'Show / Hide Featured Image','real-estate-developer' ),
		'section' => 'real_estate_developer_related_posts_settings'
  )));

  $wp_customize->add_setting( 'real_estate_developer_related_toggle_postdate',array(
    'default' => 1,
    'transport' => 'refresh',
    'sanitize_callback' => 'real_estate_developer_switch_sanitization'
  ));
  $wp_customize->add_control( new Real_Estate_Developer_Toggle_Switch_Custom_Control( $wp_customize, 'real_estate_developer_related_toggle_postdate',array(
    'label' => esc_html__( 'Show / Hide Post Date','real-estate-developer' ),
    'section' => 'real_estate_developer_related_posts_settings'
  )));

  $wp_customize->add_setting('real_estate_developer_related_postdate_icon',array(
    'default' => 'fas fa-calendar-alt',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(new Real_Estate_Developer_Fontawesome_Icon_Chooser(
  $wp_customize,'real_estate_developer_related_postdate_icon',array(
    'label' => __('Add Post Date Icon','real-estate-developer'),
    'transport' => 'refresh',
    'section' => 'real_estate_developer_related_posts_settings',
    'setting' => 'real_estate_developer_related_postdate_icon',
    'type'    => 'icon'
  )));

	$wp_customize->add_setting( 'real_estate_developer_related_toggle_author',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'real_estate_developer_switch_sanitization'
  ));
  $wp_customize->add_control( new Real_Estate_Developer_Toggle_Switch_Custom_Control( $wp_customize, 'real_estate_developer_related_toggle_author',array(
		'label' => esc_html__( 'Show / Hide Author','real-estate-developer' ),
		'section' => 'real_estate_developer_related_posts_settings'
  )));

  $wp_customize->add_setting('real_estate_developer_related_author_icon',array(
    'default' => 'fas fa-user',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(new Real_Estate_Developer_Fontawesome_Icon_Chooser(
  $wp_customize,'real_estate_developer_related_author_icon',array(
    'label' => __('Add Author Icon','real-estate-developer'),
    'transport' => 'refresh',
    'section' => 'real_estate_developer_related_posts_settings',
    'setting' => 'real_estate_developer_related_author_icon',
    'type'    => 'icon'
  )));

	$wp_customize->add_setting( 'real_estate_developer_related_toggle_comments',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'real_estate_developer_switch_sanitization'
  ) );
  $wp_customize->add_control( new Real_Estate_Developer_Toggle_Switch_Custom_Control( $wp_customize, 'real_estate_developer_related_toggle_comments',array(
		'label' => esc_html__( 'Show / Hide Comments','real-estate-developer' ),
		'section' => 'real_estate_developer_related_posts_settings'
  )));

  $wp_customize->add_setting('real_estate_developer_related_comments_icon',array(
    'default' => 'fa fa-comments',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(new Real_Estate_Developer_Fontawesome_Icon_Chooser(
  $wp_customize,'real_estate_developer_related_comments_icon',array(
    'label' => __('Add Comments Icon','real-estate-developer'),
    'transport' => 'refresh',
    'section' => 'real_estate_developer_related_posts_settings',
    'setting' => 'real_estate_developer_related_comments_icon',
    'type'    => 'icon'
  )));

	$wp_customize->add_setting( 'real_estate_developer_related_toggle_time',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'real_estate_developer_switch_sanitization'
  ) );
  $wp_customize->add_control( new Real_Estate_Developer_Toggle_Switch_Custom_Control( $wp_customize, 'real_estate_developer_related_toggle_time',array(
		'label' => esc_html__( 'Show / Hide Time','real-estate-developer' ),
		'section' => 'real_estate_developer_related_posts_settings'
  )));

  $wp_customize->add_setting('real_estate_developer_related_time_icon',array(
    'default' => 'fas fa-clock',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(new Real_Estate_Developer_Fontawesome_Icon_Chooser(
  $wp_customize,'real_estate_developer_related_time_icon',array(
    'label' => __('Add Time Icon','real-estate-developer'),
    'transport' => 'refresh',
    'section' => 'real_estate_developer_related_posts_settings',
    'setting' => 'real_estate_developer_related_time_icon',
    'type'    => 'icon'
  )));

  $wp_customize->add_setting( 'real_estate_developer_related_image_box_shadow', array(
		'default'              => '0',
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'real_estate_developer_sanitize_number_range'
	) );
	$wp_customize->add_control( 'real_estate_developer_related_image_box_shadow', array(
		'label'       => esc_html__( 'Related post Image Box Shadow','real-estate-developer' ),
		'section'     => 'real_estate_developer_related_posts_settings',
		'type'        => 'range',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 1,
			'max'              => 50,
		),
	) );

  $wp_customize->add_setting('real_estate_developer_related_button_text',array(
		'default'=> esc_html__('Read More','real-estate-developer'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('real_estate_developer_related_button_text',array(
		'label'	=> esc_html__('Add Button Text','real-estate-developer'),
		'input_attrs' => array(
      'placeholder' => esc_html__( 'Read More', 'real-estate-developer' ),
        ),
		'section'=> 'real_estate_developer_related_posts_settings',
		'type'=> 'text'
	));

	// Single Posts Settings
	$wp_customize->add_section( 'real_estate_developer_single_blog_settings', array(
		'title' => __( 'Single Post Settings', 'real-estate-developer' ),
		'panel' => 'real_estate_developer_blog_post_parent_panel',
	));

	$wp_customize->add_setting('real_estate_developer_single_postdate_icon',array(
		'default'	=> 'fas fa-calendar-alt',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Real_Estate_Developer_Fontawesome_Icon_Chooser(
  $wp_customize,'real_estate_developer_single_postdate_icon',array(
		'label'	=> __('Add Post Date Icon','real-estate-developer'),
		'transport' => 'refresh',
		'section'	=> 'real_estate_developer_single_blog_settings',
		'setting'	=> 'real_estate_developer_single_postdate_icon',
		'type'		=> 'icon'
	)));

  $wp_customize->add_setting( 'real_estate_developer_single_postdate',array(
    'default' => 1,
    'transport' => 'refresh',
    'sanitize_callback' => 'real_estate_developer_switch_sanitization'
	) );
	$wp_customize->add_control( new Real_Estate_Developer_Toggle_Switch_Custom_Control( $wp_customize, 'real_estate_developer_single_postdate',array(
		'label' => esc_html__( 'Show / Hide Date','real-estate-developer' ),
		'section' => 'real_estate_developer_single_blog_settings'
	)));

	$wp_customize->add_setting('real_estate_developer_single_author_icon',array(
		'default'	=> 'fas fa-user',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Real_Estate_Developer_Fontawesome_Icon_Chooser(
  $wp_customize,'real_estate_developer_single_author_icon',array(
		'label'	=> __('Add Author Icon','real-estate-developer'),
		'transport' => 'refresh',
		'section'	=> 'real_estate_developer_single_blog_settings',
		'setting'	=> 'real_estate_developer_single_author_icon',
		'type'		=> 'icon'
	)));

  $wp_customize->add_setting( 'real_estate_developer_single_author',array(
    'default' => 1,
    'transport' => 'refresh',
    'sanitize_callback' => 'real_estate_developer_switch_sanitization'
	) );
	$wp_customize->add_control( new Real_Estate_Developer_Toggle_Switch_Custom_Control( $wp_customize, 'real_estate_developer_single_author',array(
    'label' => esc_html__( 'Show / Hide Author','real-estate-developer' ),
    'section' => 'real_estate_developer_single_blog_settings'
	)));

 	$wp_customize->add_setting('real_estate_developer_single_comments_icon',array(
		'default'	=> 'fa fa-comments',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Real_Estate_Developer_Fontawesome_Icon_Chooser(
  $wp_customize,'real_estate_developer_single_comments_icon',array(
		'label'	=> __('Add Comments Icon','real-estate-developer'),
		'transport' => 'refresh',
		'section'	=> 'real_estate_developer_single_blog_settings',
		'setting'	=> 'real_estate_developer_single_comments_icon',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting( 'real_estate_developer_single_comments',array(
    'default' => 1,
    'transport' => 'refresh',
    'sanitize_callback' => 'real_estate_developer_switch_sanitization'
	) );
	$wp_customize->add_control( new Real_Estate_Developer_Toggle_Switch_Custom_Control( $wp_customize, 'real_estate_developer_single_comments',array(
    'label' => esc_html__( 'Show / Hide Comments','real-estate-developer' ),
    'section' => 'real_estate_developer_single_blog_settings'
	)));

	$wp_customize->add_setting('real_estate_developer_single_time_icon',array(
		'default'	=> 'fas fa-clock',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Real_Estate_Developer_Fontawesome_Icon_Chooser(
  $wp_customize,'real_estate_developer_single_time_icon',array(
		'label'	=> __('Add Time Icon','real-estate-developer'),
		'transport' => 'refresh',
		'section'	=> 'real_estate_developer_single_blog_settings',
		'setting'	=> 'real_estate_developer_single_time_icon',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting( 'real_estate_developer_single_time',array(
    'default' => 1,
    'transport' => 'refresh',
    'sanitize_callback' => 'real_estate_developer_switch_sanitization'
	) );
	$wp_customize->add_control( new Real_Estate_Developer_Toggle_Switch_Custom_Control( $wp_customize, 'real_estate_developer_single_time',array(
    'label' => esc_html__( 'Show / Hide Time','real-estate-developer' ),
    'section' => 'real_estate_developer_single_blog_settings'
	)));

	$wp_customize->add_setting( 'real_estate_developer_toggle_tags',array(
		'default' => 0,
		'transport' => 'refresh',
		'sanitize_callback' => 'real_estate_developer_switch_sanitization'
	));
  $wp_customize->add_control( new Real_Estate_Developer_Toggle_Switch_Custom_Control( $wp_customize, 'real_estate_developer_toggle_tags', array(
		'label' => esc_html__( 'Show / Hide Tags','real-estate-developer' ),
		'section' => 'real_estate_developer_single_blog_settings'
  )));

	// Single Posts Category
 	 $wp_customize->add_setting( 'real_estate_developer_single_post_category',array(
		'default' => true,
		'transport' => 'refresh',
		'sanitize_callback' => 'real_estate_developer_switch_sanitization'
  	) );
	$wp_customize->add_control( new Real_Estate_Developer_Toggle_Switch_Custom_Control( $wp_customize, 'real_estate_developer_single_post_category',array(
		'label' => esc_html__( 'Show / Hide Category','real-estate-developer' ),
		'section' => 'real_estate_developer_single_blog_settings'
  	)));

  	$wp_customize->add_setting( 'real_estate_developer_singlepost_image_box_shadow', array(
		'default'              => '0',
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'real_estate_developer_sanitize_number_range'
	) );
	$wp_customize->add_control( 'real_estate_developer_singlepost_image_box_shadow', array(
		'label'       => esc_html__( 'Single post Image Box Shadow','real-estate-developer' ),
		'section'     => 'real_estate_developer_single_blog_settings',
		'type'        => 'range',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 1,
			'max'              => 50,
		),
	) );

	$wp_customize->add_setting('real_estate_developer_single_post_meta_field_separator',array(
		'default'=> '|',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('real_estate_developer_single_post_meta_field_separator',array(
		'label'	=> __('Add Meta Separator','real-estate-developer'),
		'description' => __('Add the seperator for meta box. Example: "|", "/", etc.','real-estate-developer'),
		'section'=> 'real_estate_developer_single_blog_settings',
		'type'=> 'text'
	));

	$wp_customize->add_setting( 'real_estate_developer_single_blog_post_navigation_show_hide',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'real_estate_developer_switch_sanitization'
	));
	$wp_customize->add_control( new Real_Estate_Developer_Toggle_Switch_Custom_Control( $wp_customize, 'real_estate_developer_single_blog_post_navigation_show_hide', array(
	  'label' => esc_html__( 'Show / Hide Post Navigation','real-estate-developer' ),
	  'section' => 'real_estate_developer_single_blog_settings'
	)));

	//navigation text
	$wp_customize->add_setting('real_estate_developer_single_blog_prev_navigation_text',array(
		'default'=> 'PREVIOUS',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('real_estate_developer_single_blog_prev_navigation_text',array(
		'label'	=> __('Post Navigation Text','real-estate-developer'),
		'input_attrs' => array(
      'placeholder' => __( 'PREVIOUS', 'real-estate-developer' ),
      ),
		'section'=> 'real_estate_developer_single_blog_settings',
		'type'=> 'text'
	));

	$wp_customize->add_setting('real_estate_developer_single_blog_next_navigation_text',array(
		'default'=> 'NEXT',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('real_estate_developer_single_blog_next_navigation_text',array(
		'label'	=> __('Post Navigation Text','real-estate-developer'),
		'input_attrs' => array(
      'placeholder' => __( 'NEXT', 'real-estate-developer' ),
        ),
		'section'=> 'real_estate_developer_single_blog_settings',
		'type'=> 'text'
	));

	$wp_customize->add_setting('real_estate_developer_single_blog_comment_title',array(
		'default'=> 'Leave a Reply',
		'sanitize_callback'	=> 'sanitize_text_field'
	));

	$wp_customize->add_control('real_estate_developer_single_blog_comment_title',array(
		'label'	=> __('Add Comment Title','real-estate-developer'),
		'input_attrs' => array(
      'placeholder' => __( 'Leave a Reply', 'real-estate-developer' ),
    	),
		'section'=> 'real_estate_developer_single_blog_settings',
		'type'=> 'text'
	));

	$wp_customize->add_setting('real_estate_developer_single_blog_comment_button_text',array(
		'default'=> 'Post Comment',
		'sanitize_callback'	=> 'sanitize_text_field'
	));

	$wp_customize->add_control('real_estate_developer_single_blog_comment_button_text',array(
		'label'	=> __('Add Comment Button Text','real-estate-developer'),
		'input_attrs' => array(
    'placeholder' => __( 'Post Comment', 'real-estate-developer' ),
        ),
		'section'=> 'real_estate_developer_single_blog_settings',
		'type'=> 'text'
	));

	$wp_customize->add_setting('real_estate_developer_single_blog_comment_width',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('real_estate_developer_single_blog_comment_width',array(
		'label'	=> __('Comment Form Width','real-estate-developer'),
		'description'	=> __('Enter a value in %. Example:50%','real-estate-developer'),
		'input_attrs' => array(
      'placeholder' => __( '100%', 'real-estate-developer' ),
        ),
		'section'=> 'real_estate_developer_single_blog_settings',
		'type'=> 'text'
	));

	 // Grid layout setting
	$wp_customize->add_section( 'real_estate_developer_grid_layout_settings', array(
		'title' => __( 'Grid Layout Settings', 'real-estate-developer' ),
		'panel' => 'real_estate_developer_blog_post_parent_panel',
	));

	$wp_customize->add_setting('real_estate_developer_grid_postdate_icon',array(
		'default'	=> 'fas fa-calendar-alt',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Real_Estate_Developer_Fontawesome_Icon_Chooser(
        $wp_customize,'real_estate_developer_grid_postdate_icon',array(
		'label'	=> __('Add Post Date Icon','real-estate-developer'),
		'transport' => 'refresh',
		'section'	=> 'real_estate_developer_grid_layout_settings',
		'setting'	=> 'real_estate_developer_grid_postdate_icon',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting( 'real_estate_developer_grid_postdate',array(
	  'default' => 1,
	  'transport' => 'refresh',
	  'sanitize_callback' => 'real_estate_developer_switch_sanitization'
  ) );
  $wp_customize->add_control( new Real_Estate_Developer_Toggle_Switch_Custom_Control( $wp_customize, 'real_estate_developer_grid_postdate',array(
    'label' => esc_html__( 'Show / Hide Post Date','real-estate-developer' ),
    'section' => 'real_estate_developer_grid_layout_settings'
  )));

	$wp_customize->add_setting('real_estate_developer_grid_author_icon',array(
		'default'	=> 'fas fa-user',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Real_Estate_Developer_Fontawesome_Icon_Chooser(
        $wp_customize,'real_estate_developer_grid_author_icon',array(
		'label'	=> __('Add Author Icon','real-estate-developer'),
		'transport' => 'refresh',
		'section'	=> 'real_estate_developer_grid_layout_settings',
		'setting'	=> 'real_estate_developer_grid_author_icon',
		'type'		=> 'icon'
	)));

  $wp_customize->add_setting( 'real_estate_developer_grid_author',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'real_estate_developer_switch_sanitization'
  ) );
  $wp_customize->add_control( new Real_Estate_Developer_Toggle_Switch_Custom_Control( $wp_customize, 'real_estate_developer_grid_author',array(
		'label' => esc_html__( 'Show / Hide Author','real-estate-developer' ),
		'section' => 'real_estate_developer_grid_layout_settings'
  )));

  $wp_customize->add_setting('real_estate_developer_grid_comments_icon',array(
		'default'	=> 'fa fa-comments',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Real_Estate_Developer_Fontawesome_Icon_Chooser(
        $wp_customize,'real_estate_developer_grid_comments_icon',array(
		'label'	=> __('Add Comments Icon','real-estate-developer'),
		'transport' => 'refresh',
		'section'	=> 'real_estate_developer_grid_layout_settings',
		'setting'	=> 'real_estate_developer_grid_comments_icon',
		'type'		=> 'icon'
	)));

  $wp_customize->add_setting( 'real_estate_developer_grid_time',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'real_estate_developer_switch_sanitization'
  ) );
  $wp_customize->add_control( new Real_Estate_Developer_Toggle_Switch_Custom_Control( $wp_customize, 'real_estate_developer_grid_time',array(
		'label' => esc_html__( 'Show / Hide Time','real-estate-developer' ),
		'section' => 'real_estate_developer_grid_layout_settings'
  )));

  $wp_customize->add_setting('real_estate_developer_grid_time_icon',array(
		'default'	=> 'fas fa-clock',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Real_Estate_Developer_Fontawesome_Icon_Chooser(
        $wp_customize,'real_estate_developer_grid_time_icon',array(
		'label'	=> __('Add Time Icon','real-estate-developer'),
		'transport' => 'refresh',
		'section'	=> 'real_estate_developer_grid_layout_settings',
		'setting'	=> 'real_estate_developer_grid_time_icon',
		'type'		=> 'icon'
	)));

  	$wp_customize->add_setting( 'real_estate_developer_grid_comments',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'real_estate_developer_switch_sanitization'
  	) );
  	$wp_customize->add_control( new Real_Estate_Developer_Toggle_Switch_Custom_Control( $wp_customize, 'real_estate_developer_grid_comments',array(
		'label' => esc_html__( 'Show / Hide Comments','real-estate-developer' ),
		'section' => 'real_estate_developer_grid_layout_settings'
  	)));

  	$wp_customize->add_setting( 'real_estate_developer_grid_image_hide_show',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'real_estate_developer_switch_sanitization'
	));
  	$wp_customize->add_control( new Real_Estate_Developer_Toggle_Switch_Custom_Control( $wp_customize, 'real_estate_developer_grid_image_hide_show', array(
		'label' => esc_html__( 'Show / Hide Featured Image','real-estate-developer' ),
		'section' => 'real_estate_developer_grid_layout_settings'
  	)));

 	$wp_customize->add_setting('real_estate_developer_grid_post_meta_field_separator',array(
		'default'=> '|',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('real_estate_developer_grid_post_meta_field_separator',array(
		'label'	=> __('Add Meta Separator','real-estate-developer'),
		'description' => __('Add the seperator for meta box. Example: "|", "/", etc.','real-estate-developer'),
		'section'=> 'real_estate_developer_grid_layout_settings',
		'type'=> 'text'
	));

  $wp_customize->add_setting('real_estate_developer_display_grid_posts_settings',array(
    'default' => 'Into Blocks',
    'transport' => 'refresh',
    'sanitize_callback' => 'real_estate_developer_sanitize_choices'
	));
	$wp_customize->add_control('real_estate_developer_display_grid_posts_settings',array(
    'type' => 'select',
    'label' => __('Display Grid Posts','real-estate-developer'),
    'section' => 'real_estate_developer_grid_layout_settings',
    'choices' => array(
    	'Into Blocks' => __('Into Blocks','real-estate-developer'),
      'Without Blocks' => __('Without Blocks','real-estate-developer')
      ),
	) );

	$wp_customize->add_setting('real_estate_developer_grid_button_text',array(
		'default'=> esc_html__('Read More','real-estate-developer'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('real_estate_developer_grid_button_text',array(
		'label'	=> esc_html__('Add Button Text','real-estate-developer'),
		'input_attrs' => array(
      'placeholder' => esc_html__( 'Read More', 'real-estate-developer' ),
        ),
		'section'=> 'real_estate_developer_grid_layout_settings',
		'type'=> 'text'
	));

	$wp_customize->add_setting('real_estate_developer_grid_excerpt_suffix',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('real_estate_developer_grid_excerpt_suffix',array(
		'label'	=> __('Add Excerpt Suffix','real-estate-developer'),
		'input_attrs' => array(
        'placeholder' => __( '[...]', 'real-estate-developer' ),
        ),
		'section'=> 'real_estate_developer_grid_layout_settings',
		'type'=> 'text'
	));

  $wp_customize->add_setting('real_estate_developer_grid_excerpt_settings',array(
    'default' => 'Excerpt',
    'transport' => 'refresh',
    'sanitize_callback' => 'real_estate_developer_sanitize_choices'
	));
	$wp_customize->add_control('real_estate_developer_grid_excerpt_settings',array(
    'type' => 'select',
    'label' => esc_html__('Grid Post Content','real-estate-developer'),
    'section' => 'real_estate_developer_grid_layout_settings',
    'choices' => array(
    	'Content' => esc_html__('Content','real-estate-developer'),
      'Excerpt' => esc_html__('Excerpt','real-estate-developer'),
      'No Content' => esc_html__('No Content','real-estate-developer')
    ),
	) );

  $wp_customize->add_setting( 'real_estate_developer_grid_featured_image_border_radius', array(
		'default'              => '0',
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'real_estate_developer_sanitize_number_range'
	) );
	$wp_customize->add_control( 'real_estate_developer_grid_featured_image_border_radius', array(
		'label'       => esc_html__( 'Grid Featured Image Border Radius','real-estate-developer' ),
		'section'     => 'real_estate_developer_grid_layout_settings',
		'type'        => 'range',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 1,
			'max'              => 50,
		),
	) );

	$wp_customize->add_setting( 'real_estate_developer_grid_featured_image_box_shadow', array(
		'default'              => '0',
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'real_estate_developer_sanitize_number_range'
	) );
	$wp_customize->add_control( 'real_estate_developer_grid_featured_image_box_shadow', array(
		'label'       => esc_html__( 'Grid Featured Image Box Shadow','real-estate-developer' ),
		'section'     => 'real_estate_developer_grid_layout_settings',
		'type'        => 'range',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 1,
			'max'              => 50,
		),
	) );

	//Other
	$wp_customize->add_panel( 'real_estate_developer_other_parent_panel', array(
		'title' => esc_html__( 'Other Settings', 'real-estate-developer' ),
		'panel' => 'real_estate_developer_panel_id',
		'priority' => 20,
	));

	// Layout
	$wp_customize->add_section( 'real_estate_developer_left_right', array(
  	'title' => esc_html__('General Settings', 'real-estate-developer'),
		'panel' => 'real_estate_developer_other_parent_panel'
	) );

	$wp_customize->add_setting('real_estate_developer_width_option',array(
    'default' => 'Full Width',
    'sanitize_callback' => 'real_estate_developer_sanitize_choices'
	));
	$wp_customize->add_control(new Real_Estate_Developer_Image_Radio_Control($wp_customize, 'real_estate_developer_width_option', array(
    'type' => 'select',
    'label' => esc_html__('Width Layouts','real-estate-developer'),
    'description' => esc_html__('Here you can change the width layout of Website.','real-estate-developer'),
    'section' => 'real_estate_developer_left_right',
    'choices' => array(
        'Full Width' => esc_url(get_template_directory_uri()).'/assets/images/full-width.png',
        'Wide Width' => esc_url(get_template_directory_uri()).'/assets/images/wide-width.png',
        'Boxed' => esc_url(get_template_directory_uri()).'/assets/images/boxed-width.png',
  ))));

	$wp_customize->add_setting('real_estate_developer_page_layout',array(
    'default' => 'One_Column',
    'sanitize_callback' => 'real_estate_developer_sanitize_choices'
	));
	$wp_customize->add_control('real_estate_developer_page_layout',array(
    'type' => 'select',
    'label' => esc_html__('Page Sidebar Layout','real-estate-developer'),
    'description' => esc_html__('Here you can change the sidebar layout for pages. ','real-estate-developer'),
    'section' => 'real_estate_developer_left_right',
    'choices' => array(
        'Left_Sidebar' => esc_html__('Left Sidebar','real-estate-developer'),
        'Right_Sidebar' => esc_html__('Right Sidebar','real-estate-developer'),
        'One_Column' => esc_html__('One Column','real-estate-developer')
    ),
	) );

	$wp_customize->add_setting( 'real_estate_developer_single_page_breadcrumb',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'real_estate_developer_switch_sanitization'
  ) );
  $wp_customize->add_control( new Real_Estate_Developer_Toggle_Switch_Custom_Control( $wp_customize, 'real_estate_developer_single_page_breadcrumb',array(
		'label' => esc_html__( 'Show / Hide Page Breadcrumb','real-estate-developer' ),
		'section' => 'real_estate_developer_left_right'
  )));

	//Wow Animation
	$wp_customize->add_setting( 'real_estate_developer_animation',array(
    'default' => 1,
    'transport' => 'refresh',
    'sanitize_callback' => 'real_estate_developer_switch_sanitization'
	));
	$wp_customize->add_control( new Real_Estate_Developer_Toggle_Switch_Custom_Control( $wp_customize, 'real_estate_developer_animation',array(
    'label' => esc_html__( 'Show / Hide Animations','real-estate-developer' ),
    'description' => __('Here you can disable overall site animation effect','real-estate-developer'),
    'section' => 'real_estate_developer_left_right'
	)));
	
  // Pre-Loader
	$wp_customize->add_setting( 'real_estate_developer_loader_enable',array(
    'default' => 0,
    'transport' => 'refresh',
    'sanitize_callback' => 'real_estate_developer_switch_sanitization'
  ) );
  $wp_customize->add_control( new Real_Estate_Developer_Toggle_Switch_Custom_Control( $wp_customize, 'real_estate_developer_loader_enable',array(
    'label' => esc_html__( 'Pre-Loader','real-estate-developer' ),
    'section' => 'real_estate_developer_left_right'
  )));

	$wp_customize->add_setting('real_estate_developer_preloader_bg_color', array(
		'default'           => '#1B3B4E',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'real_estate_developer_preloader_bg_color', array(
		'label'    => __('Pre-Loader Background Color', 'real-estate-developer'),
		'section'  => 'real_estate_developer_left_right',
	)));

	$wp_customize->add_setting('real_estate_developer_preloader_border_color', array(
		'default'           => '#ffffff',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'real_estate_developer_preloader_border_color', array(
		'label'    => __('Pre-Loader Border Color', 'real-estate-developer'),
		'section'  => 'real_estate_developer_left_right',
	)));

	$wp_customize->add_setting('real_estate_developer_preloader_bg_img',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw',
	));
	$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize,'real_estate_developer_preloader_bg_img',array(
    'label' => __('Preloader Background Image','real-estate-developer'),
    'section' => 'real_estate_developer_left_right'
	)));

	$wp_customize->add_setting( 'real_estate_developer_sticky_sidebar',array(
      'default' => 0,
      'transport' => 'refresh',
      'sanitize_callback' => 'real_estate_developer_switch_sanitization'
    ) );
    $wp_customize->add_control( new Real_estate_developer_Toggle_Switch_Custom_Control( $wp_customize, 'real_estate_developer_sticky_sidebar',array(
      'label' => esc_html__( 'Show / Hide Sticky Sidebar','real-estate-developer' ),
      'section' => 'real_estate_developer_left_right'
    )));

    //404 Page Setting
	$wp_customize->add_section('real_estate_developer_404_page',array(
		'title'	=> __('404 Page Settings','real-estate-developer'),
		'panel' => 'real_estate_developer_other_parent_panel',
	));

	$wp_customize->add_setting('real_estate_developer_404_page_title',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));

	$wp_customize->add_control('real_estate_developer_404_page_title',array(
		'label'	=> __('Add Title','real-estate-developer'),
		'input_attrs' => array(
            'placeholder' => __( '404 Not Found', 'real-estate-developer' ),
        ),
		'section'=> 'real_estate_developer_404_page',
		'type'=> 'text'
	));

	$wp_customize->add_setting('real_estate_developer_404_page_content',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));

	$wp_customize->add_control('real_estate_developer_404_page_content',array(
		'label'	=> __('Add Text','real-estate-developer'),
		'input_attrs' => array(
            'placeholder' => __( 'Looks like you have taken a wrong turn, Dont worry, it happens to the best of us.', 'real-estate-developer' ),
        ),
		'section'=> 'real_estate_developer_404_page',
		'type'=> 'text'
	));

	$wp_customize->add_setting('real_estate_developer_404_page_button_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('real_estate_developer_404_page_button_text',array(
		'label'	=> __('Add Button Text','real-estate-developer'),
		'input_attrs' => array(
            'placeholder' => __( 'Go Back', 'real-estate-developer' ),
        ),
		'section'=> 'real_estate_developer_404_page',
		'type'=> 'text'
	));

	//No Result Page Setting
	$wp_customize->add_section('real_estate_developer_no_results_page',array(
		'title'	=> __('No Results Page Settings','real-estate-developer'),
		'panel' => 'real_estate_developer_other_parent_panel',
	));

	$wp_customize->add_setting('real_estate_developer_no_results_page_title',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));

	$wp_customize->add_control('real_estate_developer_no_results_page_title',array(
		'label'	=> __('Add Title','real-estate-developer'),
		'input_attrs' => array(
            'placeholder' => __( 'Nothing Found', 'real-estate-developer' ),
        ),
		'section'=> 'real_estate_developer_no_results_page',
		'type'=> 'text'
	));

	$wp_customize->add_setting('real_estate_developer_no_results_page_content',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));

	$wp_customize->add_control('real_estate_developer_no_results_page_content',array(
		'label'	=> __('Add Text','real-estate-developer'),
		'input_attrs' => array(
            'placeholder' => __( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'real-estate-developer' ),
        ),
		'section'=> 'real_estate_developer_no_results_page',
		'type'=> 'text'
	));

	//Social Icon Setting
	$wp_customize->add_section('real_estate_developer_social_icon_settings',array(
		'title'	=> __('Sidebar Social Icons Settings','real-estate-developer'),
		'panel' => 'real_estate_developer_other_parent_panel',
	));

	$wp_customize->add_setting('real_estate_developer_social_icon_font_size',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('real_estate_developer_social_icon_font_size',array(
		'label'	=> __('Icon Font Size','real-estate-developer'),
		'description'	=> __('Enter a value in pixels. Example:20px','real-estate-developer'),
		'input_attrs' => array(
            'placeholder' => __( '10px', 'real-estate-developer' ),
        ),
		'section'=> 'real_estate_developer_social_icon_settings',
		'type'=> 'text'
	));

	$wp_customize->add_setting('real_estate_developer_social_icon_padding',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('real_estate_developer_social_icon_padding',array(
		'label'	=> __('Icon Padding','real-estate-developer'),
		'description'	=> __('Enter a value in pixels. Example:20px','real-estate-developer'),
		'input_attrs' => array(
            'placeholder' => __( '10px', 'real-estate-developer' ),
        ),
		'section'=> 'real_estate_developer_social_icon_settings',
		'type'=> 'text'
	));

	$wp_customize->add_setting('real_estate_developer_social_icon_width',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('real_estate_developer_social_icon_width',array(
		'label'	=> __('Icon Width','real-estate-developer'),
		'description'	=> __('Enter a value in pixels. Example:20px','real-estate-developer'),
		'input_attrs' => array(
            'placeholder' => __( '10px', 'real-estate-developer' ),
        ),
		'section'=> 'real_estate_developer_social_icon_settings',
		'type'=> 'text'
	));

	$wp_customize->add_setting('real_estate_developer_social_icon_height',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('real_estate_developer_social_icon_height',array(
		'label'	=> __('Icon Height','real-estate-developer'),
		'description'	=> __('Enter a value in pixels. Example:20px','real-estate-developer'),
		'input_attrs' => array(
            'placeholder' => __( '10px', 'real-estate-developer' ),
        ),
		'section'=> 'real_estate_developer_social_icon_settings',
		'type'=> 'text'
	));

	//Responsive Media Settings
	$wp_customize->add_section('real_estate_developer_responsive_media',array(
		'title'	=> esc_html__('Responsive Media','real-estate-developer'),
		'panel' => 'real_estate_developer_other_parent_panel',
	));

	$wp_customize->add_setting( 'real_estate_developer_stickyheader_hide_show',array(
	    'default' => 0,
	    'transport' => 'refresh',
	    'sanitize_callback' => 'real_estate_developer_switch_sanitization'
	  ));  
	  $wp_customize->add_control( new Real_Estate_Developer_Toggle_Switch_Custom_Control( $wp_customize, 'real_estate_developer_stickyheader_hide_show',array(
	    'label' => esc_html__( 'Show / Hide Sticky Header','real-estate-developer' ),
	    'section' => 'real_estate_developer_responsive_media'
	  )));

  $wp_customize->add_setting( 'real_estate_developer_responsive_preloader_hide',array(
      'default' => false,
      'transport' => 'refresh',
      'sanitize_callback' => 'real_estate_developer_switch_sanitization'
  ) );
  $wp_customize->add_control( new Real_Estate_Developer_Toggle_Switch_Custom_Control( $wp_customize, 'real_estate_developer_responsive_preloader_hide',array(
      'label' => esc_html__( 'Show / Hide Preloader','real-estate-developer' ),
      'section' => 'real_estate_developer_responsive_media'
  )));


  $wp_customize->add_setting( 'real_estate_developer_sidebar_hide_show',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'real_estate_developer_switch_sanitization'
  ));
  $wp_customize->add_control( new Real_Estate_Developer_Toggle_Switch_Custom_Control( $wp_customize, 'real_estate_developer_sidebar_hide_show',array(
    	'label' => esc_html__( 'Show / Hide Sidebar','real-estate-developer' ),
    	'section' => 'real_estate_developer_responsive_media'
  )));

  $wp_customize->add_setting( 'real_estate_developer_resp_scroll_top_hide_show',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'real_estate_developer_switch_sanitization'
	));
	$wp_customize->add_control( new Real_Estate_Developer_Toggle_Switch_Custom_Control( $wp_customize, 'real_estate_developer_resp_scroll_top_hide_show',array(
    	'label' => esc_html__( 'Show / Hide Scroll To Top','real-estate-developer' ),
    	'section' => 'real_estate_developer_responsive_media'
	)));

  $wp_customize->add_setting('real_estate_developer_res_open_menu_icon',array(
		'default'	=> 'fas fa-bars',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Real_Estate_Developer_Fontawesome_Icon_Chooser(
        $wp_customize,'real_estate_developer_res_open_menu_icon',array(
		'label'	=> __('Add Open Menu Icon','real-estate-developer'),
		'transport' => 'refresh',
		'section'	=> 'real_estate_developer_responsive_media',
		'setting'	=> 'real_estate_developer_res_open_menu_icon',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('real_estate_developer_res_close_menu_icon',array(
		'default'	=> 'fas fa-times',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Real_Estate_Developer_Fontawesome_Icon_Chooser(
        $wp_customize,'real_estate_developer_res_close_menu_icon',array(
		'label'	=> __('Add Close Menu Icon','real-estate-developer'),
		'transport' => 'refresh',
		'section'	=> 'real_estate_developer_responsive_media',
		'setting'	=> 'real_estate_developer_res_close_menu_icon',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('real_estate_developer_resp_menu_toggle_btn_bg_color', array(
		'default'           => '#FF9705',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'real_estate_developer_resp_menu_toggle_btn_bg_color', array(
		'label'    => __('Toggle Button Bg Color', 'real-estate-developer'),
		'section'  => 'real_estate_developer_responsive_media',
	)));

  //Woocommerce settings
	$wp_customize->add_section('real_estate_developer_woocommerce_section', array(
		'title'    => __('WooCommerce Layout', 'real-estate-developer'),
		'priority' => null,
		'panel'    => 'woocommerce',
	));

	//Selective Refresh
	$wp_customize->selective_refresh->add_partial( 'real_estate_developer_woocommerce_shop_page_sidebar', array( 'selector' => '.post-type-archive-product #sidebar',
		'render_callback' => 'real_estate_developer_customize_partial_real_estate_developer_woocommerce_shop_page_sidebar', ) );

    //Woocommerce Shop Page Sidebar
	$wp_customize->add_setting( 'real_estate_developer_woocommerce_shop_page_sidebar',array(
		'default' => 0,
		'transport' => 'refresh',
		'sanitize_callback' => 'real_estate_developer_switch_sanitization'
  ) );
  $wp_customize->add_control( new Real_Estate_Developer_Toggle_Switch_Custom_Control( $wp_customize, 'real_estate_developer_woocommerce_shop_page_sidebar',array(
		'label' => esc_html__( 'Show / Hide Shop Page Sidebar','real-estate-developer' ),
		'section' => 'real_estate_developer_woocommerce_section'
  )));

   $wp_customize->add_setting('real_estate_developer_shop_page_layout',array(
    'default' => 'Right Sidebar',
    'sanitize_callback' => 'real_estate_developer_sanitize_choices'
	));
	$wp_customize->add_control('real_estate_developer_shop_page_layout',array(
    'type' => 'select',
    'label' => __('Shop Page Sidebar Layout','real-estate-developer'),
    'section' => 'real_estate_developer_woocommerce_section',
    'choices' => array(
        'Left Sidebar' => __('Left Sidebar','real-estate-developer'),
        'Right Sidebar' => __('Right Sidebar','real-estate-developer'),
    ),
	) );

   //Selective Refresh
	$wp_customize->selective_refresh->add_partial( 'real_estate_developer_woocommerce_single_product_page_sidebar', array( 'selector' => '.single-product #sidebar',
		'render_callback' => 'real_estate_developer_customize_partial_real_estate_developer_woocommerce_single_product_page_sidebar', ) );

    //Woocommerce Single Product page Sidebar
	$wp_customize->add_setting( 'real_estate_developer_woocommerce_single_product_page_sidebar',array(
		'default' => 0,
		'transport' => 'refresh',
		'sanitize_callback' => 'real_estate_developer_switch_sanitization'
   ) );
 	$wp_customize->add_control( new Real_Estate_Developer_Toggle_Switch_Custom_Control( $wp_customize, 'real_estate_developer_woocommerce_single_product_page_sidebar',array(
		'label' => esc_html__( 'Show / Hide Single Product Sidebar','real-estate-developer' ),
		'section' => 'real_estate_developer_woocommerce_section'
  )));

   $wp_customize->add_setting('real_estate_developer_single_product_layout',array(
    'default' => 'Right Sidebar',
    'sanitize_callback' => 'real_estate_developer_sanitize_choices'
	));
	$wp_customize->add_control('real_estate_developer_single_product_layout',array(
    'type' => 'select',
    'label' => __('Single Product Sidebar Layout','real-estate-developer'),
    'section' => 'real_estate_developer_woocommerce_section',
    'choices' => array(
        'Left Sidebar' => __('Left Sidebar','real-estate-developer'),
        'Right Sidebar' => __('Right Sidebar','real-estate-developer'),
    ),
	) );

	//Products per page
    $wp_customize->add_setting('real_estate_developer_products_per_page',array(
		'default'=> '9',
		'sanitize_callback'	=> 'real_estate_developer_sanitize_float'
	));
	$wp_customize->add_control('real_estate_developer_products_per_page',array(
		'label'	=> __('Products Per Page','real-estate-developer'),
		'description' => __('Display on shop page','real-estate-developer'),
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'section'=> 'real_estate_developer_woocommerce_section',
		'type'=> 'number',
	));

    //Products per row
    $wp_customize->add_setting('real_estate_developer_products_per_row',array(
		'default'=> '4',
		'sanitize_callback'	=> 'real_estate_developer_sanitize_choices'
	));
	$wp_customize->add_control('real_estate_developer_products_per_row',array(
		'label'	=> __('Products Per Row','real-estate-developer'),
		'description' => __('Display on shop page','real-estate-developer'),
		'choices' => array(
            '2' => '2',
			'3' => '3',
			'4' => '4',
        ),
		'section'=> 'real_estate_developer_woocommerce_section',
		'type'=> 'select',
		));

	//Products padding
	$wp_customize->add_setting('real_estate_developer_products_padding_top_bottom',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('real_estate_developer_products_padding_top_bottom',array(
		'label'	=> __('Products Padding Top Bottom','real-estate-developer'),
		'description'	=> __('Enter a value in pixels. Example:20px','real-estate-developer'),
		'input_attrs' => array(
        'placeholder' => __( '10px', 'real-estate-developer' ),
        ),
		'section'=> 'real_estate_developer_woocommerce_section',
		'type'=> 'text'
	));

	$wp_customize->add_setting('real_estate_developer_products_padding_left_right',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('real_estate_developer_products_padding_left_right',array(
		'label'	=> __('Products Padding Left Right','real-estate-developer'),
		'description'	=> __('Enter a value in pixels. Example:20px','real-estate-developer'),
		'input_attrs' => array(
            'placeholder' => __( '10px', 'real-estate-developer' ),
        ),
		'section'=> 'real_estate_developer_woocommerce_section',
		'type'=> 'text'
	));

	//Products box shadow
	$wp_customize->add_setting( 'real_estate_developer_products_box_shadow', array(
		'default'              => '',
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'real_estate_developer_sanitize_number_range'
	) );
	$wp_customize->add_control( 'real_estate_developer_products_box_shadow', array(
		'label'       => esc_html__( 'Products Box Shadow','real-estate-developer' ),
		'section'     => 'real_estate_developer_woocommerce_section',
		'type'        => 'range',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 1,
			'max'              => 50,
		),
	) );

	//Products border radius
    $wp_customize->add_setting( 'real_estate_developer_products_border_radius', array(
		'default'              => '0',
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'real_estate_developer_sanitize_number_range'
	) );
	$wp_customize->add_control( 'real_estate_developer_products_border_radius', array(
		'label'       => esc_html__( 'Products Border Radius','real-estate-developer' ),
		'section'     => 'real_estate_developer_woocommerce_section',
		'type'        => 'range',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 1,
			'max'              => 50,
		),
	) );

	$wp_customize->add_setting( 'real_estate_developer_products_button_border_radius', array(
		'default'              => '0',
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'real_estate_developer_sanitize_number_range'
	) );
	$wp_customize->add_control( 'real_estate_developer_products_button_border_radius', array(
		'label'       => esc_html__( 'Products Button Border Radius','real-estate-developer' ),
		'section'     => 'real_estate_developer_woocommerce_section',
		'type'        => 'range',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 1,
			'max'              => 50,
		),
	) );

	$wp_customize->add_setting('real_estate_developer_products_btn_padding_top_bottom',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('real_estate_developer_products_btn_padding_top_bottom',array(
		'label'	=> __('Products Button Padding Top Bottom','real-estate-developer'),
		'description'	=> __('Enter a value in pixels. Example:20px','real-estate-developer'),
		'input_attrs' => array(
        'placeholder' => __( '10px', 'real-estate-developer' ),
        ),
		'section'=> 'real_estate_developer_woocommerce_section',
		'type'=> 'text'
	));

	$wp_customize->add_setting('real_estate_developer_products_btn_padding_left_right',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('real_estate_developer_products_btn_padding_left_right',array(
		'label'	=> __('Products Button Padding Left Right','real-estate-developer'),
		'description'	=> __('Enter a value in pixels. Example:20px','real-estate-developer'),
		'input_attrs' => array(
        'placeholder' => __( '10px', 'real-estate-developer' ),
        ),
		'section'=> 'real_estate_developer_woocommerce_section',
		'type'=> 'text'
	));

	$wp_customize->add_setting('real_estate_developer_woocommerce_sale_font_size',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('real_estate_developer_woocommerce_sale_font_size',array(
		'label'	=> __('Sale Font Size','real-estate-developer'),
		'description'	=> __('Enter a value in pixels. Example:20px','real-estate-developer'),
		'input_attrs' => array(
        'placeholder' => __( '10px', 'real-estate-developer' ),
        ),
		'section'=> 'real_estate_developer_woocommerce_section',
		'type'=> 'text'
	));

	//Products Sale Badge
	$wp_customize->add_setting('real_estate_developer_woocommerce_sale_position',array(
    'default' => 'right',
    'sanitize_callback' => 'real_estate_developer_sanitize_choices'
	));
	$wp_customize->add_control('real_estate_developer_woocommerce_sale_position',array(
    'type' => 'select',
    'label' => __('Sale Badge Position','real-estate-developer'),
    'section' => 'real_estate_developer_woocommerce_section',
    'choices' => array(
        'left' => __('Left','real-estate-developer'),
        'right' => __('Right','real-estate-developer'),
    ),
	) );

	$wp_customize->add_setting('real_estate_developer_woocommerce_sale_padding_top_bottom',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('real_estate_developer_woocommerce_sale_padding_top_bottom',array(
		'label'	=> __('Sale Padding Top Bottom','real-estate-developer'),
		'description'	=> __('Enter a value in pixels. Example:20px','real-estate-developer'),
		'input_attrs' => array(
            'placeholder' => __( '10px', 'real-estate-developer' ),
        ),
		'section'=> 'real_estate_developer_woocommerce_section',
		'type'=> 'text'
	));

	$wp_customize->add_setting('real_estate_developer_woocommerce_sale_padding_left_right',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('real_estate_developer_woocommerce_sale_padding_left_right',array(
		'label'	=> __('Sale Padding Left Right','real-estate-developer'),
		'description'	=> __('Enter a value in pixels. Example:20px','real-estate-developer'),
		'input_attrs' => array(
            'placeholder' => __( '10px', 'real-estate-developer' ),
        ),
		'section'=> 'real_estate_developer_woocommerce_section',
		'type'=> 'text'
	));

	$wp_customize->add_setting( 'real_estate_developer_woocommerce_sale_border_radius', array(
		'default'              => '0',
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'real_estate_developer_sanitize_number_range'
	) );
	$wp_customize->add_control( 'real_estate_developer_woocommerce_sale_border_radius', array(
		'label'       => esc_html__( 'Sale Border Radius','real-estate-developer' ),
		'section'     => 'real_estate_developer_woocommerce_section',
		'type'        => 'range',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 1,
			'max'              => 50,
		),
	) );

	// Related Product
  $wp_customize->add_setting( 'real_estate_developer_related_product_show_hide',array(
    'default' => 1,
    'transport' => 'refresh',
    'sanitize_callback' => 'real_estate_developer_switch_sanitization'
  ) );
  $wp_customize->add_control( new Real_Estate_Developer_Toggle_Switch_Custom_Control( $wp_customize, 'real_estate_developer_related_product_show_hide',array(
    'label' => esc_html__( 'Show / Hide Related product','real-estate-developer' ),
    'section' => 'real_estate_developer_woocommerce_section'
  )));

}

add_action( 'customize_register', 'real_estate_developer_customize_register' );

load_template( trailingslashit( get_template_directory() ) . '/inc/logo/logo-resizer.php' );

/**
 * Singleton class for handling the theme's customizer integration.
 *
 * @since  1.0.0
 * @access public
 */
final class Real_Estate_Developer_Customize {

	/**
	 * Returns the instance.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return object
	 */
	public static function get_instance() {

		static $instance = null;

		if ( is_null( $instance ) ) {
			$instance = new self;
			$instance->setup_actions();
		}

		return $instance;
	}

	/**
	 * Constructor method.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function __construct() {}

	/**
	 * Sets up initial actions.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function setup_actions() {

		// Register panels, sections, settings, controls, and partials.
		add_action( 'customize_register', array( $this, 'sections' ) );

		// Register scripts and styles for the controls.
		add_action( 'customize_controls_enqueue_scripts', array( $this, 'enqueue_control_scripts' ), 0 );
	}

	/**
	 * Sets up the customizer sections.
	 *
	 * @since  1.0.0
	 * @access public
	 * @param  object  $manager
	 * @return void
	*/
	public function sections( $manager ) {

		// Load custom sections.
		load_template( trailingslashit( get_template_directory() ) . '/inc/section-pro.php' );

		// Register custom section types.
		$manager->register_section_type( 'Real_Estate_Developer_Customize_Section_Pro' );

		// Register sections.
		$manager->add_section( new Real_Estate_Developer_Customize_Section_Pro( $manager,'real_estate_developer_go_pro', array(
			'priority'   => 1,
			'title'    => esc_html__( 'REAL ESTATE DEVELOPER PRO', 'real-estate-developer' ),
			'pro_text' => esc_html__( 'UPGRADE PRO', 'real-estate-developer' ),
			'pro_url'  => esc_url('https://www.vwthemes.com/products/property-developer-wordpress-theme'),
		)));

		$manager->add_section(new Real_Estate_Developer_Customize_Section_Pro($manager,'real_estate_developer_get_started_link',array(
			'priority'   => 1,
			'title'    => esc_html__( 'DOCUMENTATION', 'real-estate-developer' ),
			'pro_text' => esc_html__( 'DOCS', 'real-estate-developer' ),
			'pro_url'  => esc_url('https://preview.vwthemesdemo.com/docs/free-real-estate-developer/'),
		)));
	}

	/**
	 * Loads theme customizer CSS.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function enqueue_control_scripts() {

		wp_enqueue_script( 'real-estate-developer-customize-controls', trailingslashit( get_template_directory_uri() ) . '/assets/js/customize-controls.js', array( 'customize-controls' ) );

		wp_enqueue_style( 'real-estate-developer-customize-controls', trailingslashit( get_template_directory_uri() ) . '/assets/css/customize-controls.css' );
	}
}

// Doing this customizer thang!
Real_Estate_Developer_Customize::get_instance();