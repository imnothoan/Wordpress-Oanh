<?php
/**
 * Travel Booking Offers: Customizer
 *
 * @package Travel Booking Offers
 * @subpackage travel_booking_offers
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function Travel_Booking_Offers_Customize_register( $wp_customize ) {

	// Pro Version
    class travel_booking_offers_Customize_Pro_Version extends WP_Customize_Control {
        public $type = 'pro_options';

        public function render_content() {
            echo '<span>Unlock Premium <strong>'. esc_html( $this->label ) .'</strong>? </span>';
            echo '<a href="'. esc_url($this->description) .'" target="_blank">';
                echo '<span class="dashicons dashicons-info"></span>';
                echo '<strong> '. esc_html( TRAVEL_BOOKING_OFFERS_BUY_TEXT,'travel-booking-offers' ) .'<strong></a>';
            echo '</a>';
        }
    }

    // Custom Controls
    function travel_booking_offers_sanitize_custom_control( $input ) {
        return $input;
    }

	require get_parent_theme_file_path('/inc/controls/range-slider-control.php');

	require get_parent_theme_file_path('/inc/controls/icon-changer.php');
	
	// Register the custom control type.
	$wp_customize->register_control_type( 'Travel_Booking_Offers_Toggle_Control' );
	
	//Register the sortable control type.
	$wp_customize->register_control_type( 'Travel_Booking_Offers_Control_Sortable' );

	//add home page setting pannel
	$wp_customize->add_panel( 'travel_booking_offers_panel_id', array(
	    'priority' => 10,
	    'capability' => 'edit_theme_options',
	    'theme_supports' => '',
	    'title' => __( 'Custom Home page', 'travel-booking-offers' ),
	    'description' => __( 'Description of what this panel does.', 'travel-booking-offers' ),
	) );
	
	//TP GENRAL OPTION
	$wp_customize->add_section('travel_booking_offers_tp_general_settings',array(
        'title' => __('TP General Option', 'travel-booking-offers'),
        'priority' => 1,
        'panel' => 'travel_booking_offers_panel_id'
    ) );

    $wp_customize->add_setting('travel_booking_offers_tp_body_layout_settings',array(
        'default' => 'Full',
        'sanitize_callback' => 'travel_booking_offers_sanitize_choices'
	));
    $wp_customize->add_control('travel_booking_offers_tp_body_layout_settings',array(
        'type' => 'radio',
        'label'     => __('Body Layout Setting', 'travel-booking-offers'),
        'description'   => __('This option work for complete body, if you want to set the complete website in container.', 'travel-booking-offers'),
        'section' => 'travel_booking_offers_tp_general_settings',
        'choices' => array(
            'Full' => __('Full','travel-booking-offers'),
            'Container' => __('Container','travel-booking-offers'),
            'Container Fluid' => __('Container Fluid','travel-booking-offers')
        ),
	) );

    // Add Settings and Controls for Post Layout
	$wp_customize->add_setting('travel_booking_offers_sidebar_post_layout',array(
        'default' => 'right',
        'sanitize_callback' => 'travel_booking_offers_sanitize_choices'
	));
	$wp_customize->add_control('travel_booking_offers_sidebar_post_layout',array(
        'type' => 'radio',
        'label'     => __('Post Sidebar Position', 'travel-booking-offers'),
        'description'   => __('This option work for blog page, blog single page, archive page and search page.', 'travel-booking-offers'),
        'section' => 'travel_booking_offers_tp_general_settings',
        'choices' => array(
            'full' => __('Full','travel-booking-offers'),
            'left' => __('Left','travel-booking-offers'),
            'right' => __('Right','travel-booking-offers'),
            'three-column' => __('Three Columns','travel-booking-offers'),
            'four-column' => __('Four Columns','travel-booking-offers'),
            'grid' => __('Grid Layout','travel-booking-offers')
        ),
	) );

	// Add Settings and Controls for post sidebar Layout
	$wp_customize->add_setting('travel_booking_offers_sidebar_single_post_layout',array(
        'default' => 'right',
        'sanitize_callback' => 'travel_booking_offers_sanitize_choices'
	));
	$wp_customize->add_control('travel_booking_offers_sidebar_single_post_layout',array(
        'type' => 'radio',
        'label'     => __('Single Post Sidebar Position', 'travel-booking-offers'),
        'description'   => __('This option work for single blog page', 'travel-booking-offers'),
        'section' => 'travel_booking_offers_tp_general_settings',
        'choices' => array(
            'full' => __('Full','travel-booking-offers'),
            'left' => __('Left','travel-booking-offers'),
            'right' => __('Right','travel-booking-offers'),
        ),
	) );

	// Add Settings and Controls for Page Layout
	$wp_customize->add_setting('travel_booking_offers_sidebar_page_layout',array(
        'default' => 'right',
        'sanitize_callback' => 'travel_booking_offers_sanitize_choices'
	));
	$wp_customize->add_control('travel_booking_offers_sidebar_page_layout',array(
        'type' => 'radio',
        'label'     => __('Page Sidebar Position', 'travel-booking-offers'),
        'description'   => __('This option work for pages.', 'travel-booking-offers'),
        'section' => 'travel_booking_offers_tp_general_settings',
        'choices' => array(
            'full' => __('Full','travel-booking-offers'),
            'left' => __('Left','travel-booking-offers'),
            'right' => __('Right','travel-booking-offers')
        ),
	) );

	$wp_customize->add_setting( 'travel_booking_offers_sticky', array(
		'default'           => false,
		'transport'         => 'refresh',
		'sanitize_callback' => 'travel_booking_offers_sanitize_checkbox',
	) );
	$wp_customize->add_control( new Travel_Booking_Offers_Toggle_Control( $wp_customize, 'travel_booking_offers_sticky', array(
		'label'       => esc_html__( 'Show Sticky Header', 'travel-booking-offers' ),
		'section'     => 'travel_booking_offers_tp_general_settings',
		'type'        => 'toggle',
		'settings'    => 'travel_booking_offers_sticky',
	) ) );

	//tp typography option
	$travel_booking_offers_font_array = array(
		''                       => 'No Fonts',
		'Abril Fatface'          => 'Abril Fatface',
		'Acme'                   => 'Acme',
		'Anton'                  => 'Anton',
		'Architects Daughter'    => 'Architects Daughter',
		'Arimo'                  => 'Arimo',
		'Arsenal'                => 'Arsenal',
		'Arvo'                   => 'Arvo',
		'Alegreya'               => 'Alegreya',
		'Alfa Slab One'          => 'Alfa Slab One',
		'Averia Serif Libre'     => 'Averia Serif Libre',
		'Bangers'                => 'Bangers',
		'Boogaloo'               => 'Boogaloo',
		'Bad Script'             => 'Bad Script',
		'Bitter'                 => 'Bitter',
		'Bree Serif'             => 'Bree Serif',
		'BenchNine'              => 'BenchNine',
		'Cabin'                  => 'Cabin',
		'Cardo'                  => 'Cardo',
		'Courgette'              => 'Courgette',
		'Cherry Swash'           => 'Cherry Swash',
		'Cormorant Garamond'     => 'Cormorant Garamond',
		'Crimson Text'           => 'Crimson Text',
		'Cuprum'                 => 'Cuprum',
		'Cookie'                 => 'Cookie',
		'Chewy'                  => 'Chewy',
		'Days One'               => 'Days One',
		'Dosis'                  => 'Dosis',
		'Droid Sans'             => 'Droid Sans',
		'Economica'              => 'Economica',
		'Fredoka One'            => 'Fredoka One',
		'Fjalla One'             => 'Fjalla One',
		'Francois One'           => 'Francois One',
		'Frank Ruhl Libre'       => 'Frank Ruhl Libre',
		'Gloria Hallelujah'      => 'Gloria Hallelujah',
		'Great Vibes'            => 'Great Vibes',
		'Handlee'                => 'Handlee',
		'Hammersmith One'        => 'Hammersmith One',
		'Inconsolata'            => 'Inconsolata',
		'Indie Flower'           => 'Indie Flower',
		'Inter'                  => 'Inter',
		'IM Fell English SC'     => 'IM Fell English SC',
		'Julius Sans One'        => 'Julius Sans One',
		'Josefin Slab'           => 'Josefin Slab',
		'Josefin Sans'           => 'Josefin Sans',
		'Kanit'                  => 'Kanit',
		'Karla'                  => 'Karla',
		'Lobster'                => 'Lobster',
		'Lato'                   => 'Lato',
		'Lora'                   => 'Lora',
		'Libre Baskerville'      => 'Libre Baskerville',
		'Lobster Two'            => 'Lobster Two',
		'Manrope'           	 => 'Manrope',
		'Merriweather'           => 'Merriweather',
		'Monda'                  => 'Monda',
		'Montserrat'             => 'Montserrat',
		'Muli'                   => 'Muli',
		'Marck Script'           => 'Marck Script',
		'Noto Serif'             => 'Noto Serif',
		'Open Sans'              => 'Open Sans',
		'Overpass'               => 'Overpass',
		'Overpass Mono'          => 'Overpass Mono',
		'Oxygen'                 => 'Oxygen',
		'Oxanium'                => 'Oxanium',
		'Orbitron'               => 'Orbitron',
		'Patua One'              => 'Patua One',
		'Pacifico'               => 'Pacifico',
		'Padauk'                 => 'Padauk',
		'Playball'               => 'Playball',
		'Playfair Display'       => 'Playfair Display',
		'PT Sans'                => 'PT Sans',
		'Philosopher'            => 'Philosopher',
		'Permanent Marker'       => 'Permanent Marker',
		'Poiret One'             => 'Poiret One',
		'Quicksand'              => 'Quicksand',
		'Quattrocento Sans'      => 'Quattrocento Sans',
		'Raleway'                => 'Raleway',
		'Rubik'                  => 'Rubik',
		'Rokkitt'                => 'Rokkitt',
		'Roboto Serif'           => 'Roboto Serif',
		'Russo One'              => 'Russo One',
		'Righteous'              => 'Righteous',
		'Satisfy'                => 'Satisfy',
		'Slabo'                  => 'Slabo',
		'Source Sans Pro'        => 'Source Sans Pro',
		'Shadows Into Light Two' => 'Shadows Into Light Two',
		'Shadows Into Light'     => 'Shadows Into Light',
		'Sacramento'             => 'Sacramento',
		'Shrikhand'              => 'Shrikhand',
		'Tangerine'              => 'Tangerine',
		'Ubuntu'                 => 'Ubuntu',
		'VT323'                  => 'VT323',
		'Varela Round'           => 'Varela Round',
		'Vampiro One'            => 'Vampiro One',
		'Vollkorn'               => 'Vollkorn',
		'Volkhov'                => 'Volkhov',
		'Yanone Kaffeesatz'      => 'Yanone Kaffeesatz'
	);

	$wp_customize->add_section('travel_booking_offers_typography_option',array(
		'title'         => __('TP Typography Option', 'travel-booking-offers'),
		'priority' => 1,
		'panel' => 'travel_booking_offers_panel_id'
   	));

   	$wp_customize->add_setting('travel_booking_offers_heading_font_family', array(
		'default'           => '',
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'travel_booking_offers_sanitize_choices',
	));
	$wp_customize->add_control(	'travel_booking_offers_heading_font_family', array(
		'section' => 'travel_booking_offers_typography_option',
		'label'   => __('heading Fonts', 'travel-booking-offers'),
		'type'    => 'select',
		'choices' => $travel_booking_offers_font_array,
	));

	$wp_customize->add_setting('travel_booking_offers_body_font_family', array(
		'default'           => '',
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'travel_booking_offers_sanitize_choices',
	));
	$wp_customize->add_control(	'travel_booking_offers_body_font_family', array(
		'section' => 'travel_booking_offers_typography_option',
		'label'   => __('Body Fonts', 'travel-booking-offers'),
		'type'    => 'select',
		'choices' => $travel_booking_offers_font_array,
	));

	//TP Preloader Option
	$wp_customize->add_section('travel_booking_offers_prelaoder_option',array(
		'title'         => __('TP Preloader Option', 'travel-booking-offers'),
		'priority' => 1,
		'panel' => 'travel_booking_offers_panel_id'
	) );

	$wp_customize->add_setting( 'travel_booking_offers_preloader_show_hide', array(
		'default'           => false,
		'transport'         => 'refresh',
		'sanitize_callback' => 'travel_booking_offers_sanitize_checkbox',
	) );
	$wp_customize->add_control( new Travel_Booking_Offers_Toggle_Control( $wp_customize, 'travel_booking_offers_preloader_show_hide', array(
		'label'       => esc_html__( 'Show / Hide Preloader Option', 'travel-booking-offers' ),
		'section'     => 'travel_booking_offers_prelaoder_option',
		'type'        => 'toggle',
		'settings'    => 'travel_booking_offers_preloader_show_hide',
	) ) );

	$wp_customize->add_setting( 'travel_booking_offers_tp_preloader_color1_option', array(
	    'default' => '',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'travel_booking_offers_tp_preloader_color1_option', array(
			'label'     => __('Preloader First Ring Color', 'travel-booking-offers'),
	    'description' => __('It will change the complete theme preloader ring 1 color in one click.', 'travel-booking-offers'),
	    'section' => 'travel_booking_offers_prelaoder_option',
	    'settings' => 'travel_booking_offers_tp_preloader_color1_option',
  	)));

  	$wp_customize->add_setting( 'travel_booking_offers_tp_preloader_color2_option', array(
	    'default' => '',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'travel_booking_offers_tp_preloader_color2_option', array(
			'label'     => __('Preloader Second Ring Color', 'travel-booking-offers'),
	    'description' => __('It will change the complete theme preloader ring 2 color in one click.', 'travel-booking-offers'),
	    'section' => 'travel_booking_offers_prelaoder_option',
	    'settings' => 'travel_booking_offers_tp_preloader_color2_option',
  	)));

  	$wp_customize->add_setting( 'travel_booking_offers_tp_preloader_bg_color_option', array(
	    'default' => '',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'travel_booking_offers_tp_preloader_bg_color_option', array(
			'label'     => __('Preloader Background Color', 'travel-booking-offers'),
	    'description' => __('It will change the complete theme preloader bg color in one click.', 'travel-booking-offers'),
	    'section' => 'travel_booking_offers_prelaoder_option',
	    'settings' => 'travel_booking_offers_tp_preloader_bg_color_option',
  	)));

  	// Pro Version
    $wp_customize->add_setting( 'travel_booking_offers_preloader_pro_version_logo', array(
        'sanitize_callback' => 'travel_booking_offers_sanitize_custom_control'
    ));
    $wp_customize->add_control( new travel_booking_offers_Customize_Pro_Version ( $wp_customize,'travel_booking_offers_preloader_pro_version_logo', array(
        'section'     => 'travel_booking_offers_prelaoder_option',
        'type'        => 'pro_options',
        'label'       => esc_html__( 'Features ', 'travel-booking-offers' ),
        'description' => esc_url( TRAVEL_BOOKING_OFFERS_PRO_THEME_URL ),
        'priority'    => 100
    )));

	//TP Color Option
	$wp_customize->add_section('travel_booking_offers_color_option',array(
     'title'         => __('TP Color Option', 'travel-booking-offers'),
     'priority' => 1,
     'panel' => 'travel_booking_offers_panel_id'
    ) );
    
	$wp_customize->add_setting( 'travel_booking_offers_tp_color_option_first', array(
	    'default' => '',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'travel_booking_offers_tp_color_option_first', array(
			'label'     => __('Theme First Color', 'travel-booking-offers'),
	    'description' => __('It will change the complete theme color in one click.', 'travel-booking-offers'),
	    'section' => 'travel_booking_offers_color_option',
	    'settings' => 'travel_booking_offers_tp_color_option_first',
  	)));

  	$wp_customize->add_setting( 'travel_booking_offers_tp_color_option_sec', array(
	    'default' => '',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'travel_booking_offers_tp_color_option_sec', array(
			'label'     => __('Theme Second Color', 'travel-booking-offers'),
	    'description' => __('It will change the complete theme color in one click.', 'travel-booking-offers'),
	    'section' => 'travel_booking_offers_color_option',
	    'settings' => 'travel_booking_offers_tp_color_option_sec',
  	)));

	//TP Blog Option
	$wp_customize->add_section('travel_booking_offers_blog_option',array(
        'title' => __('TP Blog Option', 'travel-booking-offers'),
        'priority' => 1,
        'panel' => 'travel_booking_offers_panel_id'
    ) );

    $wp_customize->add_setting('travel_booking_offers_edit_blog_page_title',array(
		'default'=> __('Home','travel-booking-offers'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('travel_booking_offers_edit_blog_page_title',array(
		'label'	=> __('Change Blog Page Title','travel-booking-offers'),
		'section'=> 'travel_booking_offers_blog_option',
		'type'=> 'text'
	));

	$wp_customize->add_setting('travel_booking_offers_edit_blog_page_description',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('travel_booking_offers_edit_blog_page_description',array(
		'label'	=> __('Add Blog Page Description','travel-booking-offers'),
		'section'=> 'travel_booking_offers_blog_option',
		'type'=> 'text'
	));

	/** Meta Order */
    $wp_customize->add_setting('blog_meta_order', array(
        'default' => array('date', 'author', 'comment','category', 'time'),
        'sanitize_callback' => 'travel_booking_offers_sanitize_sortable',
    ));
    $wp_customize->add_control(new Travel_Booking_Offers_Control_Sortable($wp_customize, 'blog_meta_order', array(
    	'label' => esc_html__('Meta Order', 'travel-booking-offers'),
        'description' => __('Drag & Drop post items to re-arrange the order and also hide and show items as per the need by clicking on the eye icon.', 'travel-booking-offers') ,
        'section' => 'travel_booking_offers_blog_option',
        'choices' => array(
            'date' => __('date', 'travel-booking-offers') ,
            'author' => __('author', 'travel-booking-offers') ,
            'comment' => __('comment', 'travel-booking-offers') ,
            'category' => __('category', 'travel-booking-offers') ,
            'time' => __('time', 'travel-booking-offers') ,
        ) ,
    )));

    $wp_customize->add_setting( 'travel_booking_offers_excerpt_count', array(
		'default'              => 35,
		'type'                 => 'theme_mod',
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'travel_booking_offers_sanitize_number_range',
		'sanitize_js_callback' => 'absint',
	) );
	$wp_customize->add_control( 'travel_booking_offers_excerpt_count', array(
		'label'       => esc_html__( 'Edit Excerpt Limit','travel-booking-offers' ),
		'section'     => 'travel_booking_offers_blog_option',
		'type'        => 'number',
		'input_attrs' => array(
			'step'             => 2,
			'min'              => 0,
			'max'              => 50,
		),
	) );

	$wp_customize->add_setting('travel_booking_offers_show_first_caps',array(
        'default' => false,
        'sanitize_callback' => 'travel_booking_offers_sanitize_checkbox',
    ));
	$wp_customize->add_control( 'travel_booking_offers_show_first_caps',array(
		'label' => esc_html__('First Cap (First Capital Letter)', 'travel-booking-offers'),
		'type' => 'checkbox',
		'section' => 'travel_booking_offers_blog_option',
	));

    $wp_customize->add_setting('travel_booking_offers_read_more_text',array(
		'default'=> __('Read More','travel-booking-offers'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('travel_booking_offers_read_more_text',array(
		'label'	=> __('Edit Button Text','travel-booking-offers'),
		'section'=> 'travel_booking_offers_blog_option',
		'type'=> 'text'
	));

	$wp_customize->add_setting('travel_booking_offers_post_image_round', array(
	  'default' => '0',
      'sanitize_callback' => 'travel_booking_offers_sanitize_number_range',
	));
	$wp_customize->add_control(new Travel_Booking_Offers_Range_Slider($wp_customize, 'travel_booking_offers_post_image_round', array(
       'section' => 'travel_booking_offers_blog_option',
      'label' => esc_html__('Edit Post Image Border Radius', 'travel-booking-offers'),
      'input_attrs' => array(
        'min' => 0,
        'max' => 180,
        'step' => 1
    )
	)));

	$wp_customize->add_setting('travel_booking_offers_post_image_width', array(
	  'default' => '',
      'sanitize_callback' => 'travel_booking_offers_sanitize_number_range',
	));
	$wp_customize->add_control(new Travel_Booking_Offers_Range_Slider($wp_customize, 'travel_booking_offers_post_image_width', array(
       'section' => 'travel_booking_offers_blog_option',
      'label' => esc_html__('Edit Post Image Width', 'travel-booking-offers'),
      'input_attrs' => array(
        'min' => 0,
        'max' => 367,
        'step' => 1
    )
	)));

	$wp_customize->add_setting('travel_booking_offers_post_image_length', array(
	  'default' => '',
      'sanitize_callback' => 'travel_booking_offers_sanitize_number_range',
	));
	$wp_customize->add_control(new Travel_Booking_Offers_Range_Slider($wp_customize, 'travel_booking_offers_post_image_length', array(
       'section' => 'travel_booking_offers_blog_option',
      'label' => esc_html__('Edit Post Image height', 'travel-booking-offers'),
      'input_attrs' => array(
        'min' => 0,
        'max' => 900,
        'step' => 1
    )
	)));
	
	$wp_customize->add_setting( 'travel_booking_offers_remove_read_button', array(
		'default'           => true,
		'transport'         => 'refresh',
		'sanitize_callback' => 'travel_booking_offers_sanitize_checkbox',
	) );
	$wp_customize->add_control( new Travel_Booking_Offers_Toggle_Control( $wp_customize, 'travel_booking_offers_remove_read_button', array(
		'label'       => esc_html__( 'Show / Hide Read More Button', 'travel-booking-offers' ),
		'section'     => 'travel_booking_offers_blog_option',
		'type'        => 'toggle',
		'settings'    => 'travel_booking_offers_remove_read_button',
	) ) );

	$wp_customize->add_setting( 'travel_booking_offers_remove_tags', array(
		'default'           => true,
		'transport'         => 'refresh',
		'sanitize_callback' => 'travel_booking_offers_sanitize_checkbox',
	) );
	$wp_customize->add_control( new Travel_Booking_Offers_Toggle_Control( $wp_customize, 'travel_booking_offers_remove_tags', array(
		'label'       => esc_html__( 'Show / Hide Tags Option', 'travel-booking-offers' ),
		'section'     => 'travel_booking_offers_blog_option',
		'type'        => 'toggle',
		'settings'    => 'travel_booking_offers_remove_tags',
	) ) );

	$wp_customize->add_setting( 'travel_booking_offers_remove_category', array(
		'default'           => true,
		'transport'         => 'refresh',
		'sanitize_callback' => 'travel_booking_offers_sanitize_checkbox',
	) );
	$wp_customize->add_control( new Travel_Booking_Offers_Toggle_Control( $wp_customize, 'travel_booking_offers_remove_category', array(
		'label'       => esc_html__( 'Show / Hide Category Option', 'travel-booking-offers' ),
		'section'     => 'travel_booking_offers_blog_option',
		'type'        => 'toggle',
		'settings'    => 'travel_booking_offers_remove_category',
	) ) );

	$wp_customize->add_setting( 'travel_booking_offers_remove_comment', array(
	 'default'           => true,
	 'transport'         => 'refresh',
	 'sanitize_callback' => 'travel_booking_offers_sanitize_checkbox',
 	) );

	$wp_customize->add_control( new Travel_Booking_Offers_Toggle_Control( $wp_customize, 'travel_booking_offers_remove_comment', array(
	 'label'       => esc_html__( 'Show / Hide Comment Form', 'travel-booking-offers' ),
	 'section'     => 'travel_booking_offers_blog_option',
	 'type'        => 'toggle',
	 'settings'    => 'travel_booking_offers_remove_comment',
	) ) );

	$wp_customize->add_setting( 'travel_booking_offers_remove_related_post', array(
	 'default'           => true,
	 'transport'         => 'refresh',
	 'sanitize_callback' => 'travel_booking_offers_sanitize_checkbox',
 	) );
	$wp_customize->add_control( new Travel_Booking_Offers_Toggle_Control( $wp_customize, 'travel_booking_offers_remove_related_post', array(
	 'label'       => esc_html__( 'Show / Hide Related Post', 'travel-booking-offers' ),
	 'section'     => 'travel_booking_offers_blog_option',
	 'type'        => 'toggle',
	 'settings'    => 'travel_booking_offers_remove_related_post',
	) ) );

	$wp_customize->add_setting('travel_booking_offers_related_post_heading',array(
		'default'=> __('Related Posts','travel-booking-offers'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('travel_booking_offers_related_post_heading',array(
		'label'	=> __('Edit Section Title','travel-booking-offers'),
		'section'=> 'travel_booking_offers_blog_option',
		'type'=> 'text'
	));

	$wp_customize->add_setting( 'travel_booking_offers_related_post_per_page', array(
		'default'              => 3,
		'type'                 => 'theme_mod',
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'travel_booking_offers_sanitize_number_range',
		'sanitize_js_callback' => 'absint',
	) );
	$wp_customize->add_control( 'travel_booking_offers_related_post_per_page', array(
		'label'       => esc_html__( 'Related Post Per Page','travel-booking-offers' ),
		'section'     => 'travel_booking_offers_blog_option',
		'type'        => 'number',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 3,
			'max'              => 9,
		),
	) );

	$wp_customize->add_setting( 'travel_booking_offers_related_post_per_columns', array(
		'default'              => 3,
		'type'                 => 'theme_mod',
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'travel_booking_offers_sanitize_number_range',
		'sanitize_js_callback' => 'absint',
	) );
	$wp_customize->add_control( 'travel_booking_offers_related_post_per_columns', array(
		'label'       => esc_html__( 'Related Post Per Row','travel-booking-offers' ),
		'section'     => 'travel_booking_offers_blog_option',
		'type'        => 'number',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 1,
			'max'              => 4,
		),
	) );

	$wp_customize->add_setting('travel_booking_offers_post_layout',array(
        'default' => 'image-content',
        'sanitize_callback' => 'travel_booking_offers_sanitize_choices'
	));
	$wp_customize->add_control('travel_booking_offers_post_layout',array(
        'type' => 'radio',
        'label'     => __('Post Layout', 'travel-booking-offers'),
        'section' => 'travel_booking_offers_blog_option',
        'choices' => array(
            'image-content' => __('Media-Content','travel-booking-offers'),
            'content-image' => __('Content-Media','travel-booking-offers'),
        ),
	) );

	//MENU TYPOGRAPHY
	$wp_customize->add_section( 'travel_booking_offers_menu_typography', array(
    	'title'      => __( 'Menu Typography', 'travel-booking-offers' ),
    	'priority' => 2,
		'panel' => 'travel_booking_offers_panel_id'
	) );

	$wp_customize->add_setting('travel_booking_offers_menu_font_family', array(
		'default'           => '',
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'travel_booking_offers_sanitize_choices',
	));
	$wp_customize->add_control(	'travel_booking_offers_menu_font_family', array(
		'section' => 'travel_booking_offers_menu_typography',
		'label'   => __('Menu Fonts', 'travel-booking-offers'),
		'type'    => 'select',
		'choices' => $travel_booking_offers_font_array,
	));

	$wp_customize->add_setting('travel_booking_offers_menu_font_weight',array(
        'default' => '',
        'sanitize_callback' => 'travel_booking_offers_sanitize_choices'
	));
	$wp_customize->add_control('travel_booking_offers_menu_font_weight',array(
     'type' => 'radio',
     'label'     => __('Font Weight', 'travel-booking-offers'),
     'section' => 'travel_booking_offers_menu_typography',
     'type' => 'select',
     'choices' => array(
         '100' => __('100','travel-booking-offers'),
         '200' => __('200','travel-booking-offers'),
         '300' => __('300','travel-booking-offers'),
         '400' => __('400','travel-booking-offers'),
         '500' => __('500','travel-booking-offers'),
         '600' => __('600','travel-booking-offers'),
         '700' => __('700','travel-booking-offers'),
         '800' => __('800','travel-booking-offers'),
         '900' => __('900','travel-booking-offers')
     ),
	) );

	$wp_customize->add_setting('travel_booking_offers_menu_text_tranform',array(
		'default' => '',
		'sanitize_callback' => 'travel_booking_offers_sanitize_choices'
 	));
 	$wp_customize->add_control('travel_booking_offers_menu_text_tranform',array(
		'type' => 'select',
		'label' => __('Menu Text Transform','travel-booking-offers'),
		'section' => 'travel_booking_offers_menu_typography',
		'choices' => array(
		   'Uppercase' => __('Uppercase','travel-booking-offers'),
		   'Lowercase' => __('Lowercase','travel-booking-offers'),
		   'Capitalize' => __('Capitalize','travel-booking-offers'),
		),
	) );
	$wp_customize->add_setting('travel_booking_offers_menu_font_size', array(
	  'default' => '',
      'sanitize_callback' => 'travel_booking_offers_sanitize_number_range',
	));
	$wp_customize->add_control(new Travel_Booking_Offers_Range_Slider($wp_customize, 'travel_booking_offers_menu_font_size', array(
        'section' => 'travel_booking_offers_menu_typography',
        'label' => esc_html__('Font Size', 'travel-booking-offers'),
        'input_attrs' => array(
          'min' => 0,
          'max' => 20,
          'step' => 1
    )
	)));

	$wp_customize->add_setting('travel_booking_offers_menus_item_style',array(
		'default' => '',
		'transport' => 'refresh',
		'sanitize_callback' => 'travel_booking_offers_sanitize_choices'
	));
	$wp_customize->add_control('travel_booking_offers_menus_item_style',array(
		'type' => 'select',
		'section' => 'travel_booking_offers_menu_typography',
		'label' => __('Menu Hover Effect','travel-booking-offers'),
		'choices' => array(
			'None' => __('None','travel-booking-offers'),
			'Zoom In' => __('Zoom In','travel-booking-offers'),
		),
	) );

	$wp_customize->add_setting( 'travel_booking_offers_menu_color', array(
	    'default' => '',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'travel_booking_offers_menu_color', array(
			'label'     => __('Change Menu Color', 'travel-booking-offers'),
	    'section' => 'travel_booking_offers_menu_typography',
	    'settings' => 'travel_booking_offers_menu_color',
  	)));

  	// Pro Version
    $wp_customize->add_setting( 'travel_booking_offers_menu_pro_version_logo', array(
        'sanitize_callback' => 'travel_booking_offers_sanitize_custom_control'
    ));
    $wp_customize->add_control( new travel_booking_offers_Customize_Pro_Version ( $wp_customize,'travel_booking_offers_menu_pro_version_logo', array(
        'section'     => 'travel_booking_offers_menu_typography',
        'type'        => 'pro_options',
        'label'       => esc_html__( 'Features ', 'travel-booking-offers' ),
        'description' => esc_url( TRAVEL_BOOKING_OFFERS_PRO_THEME_URL ),
        'priority'    => 100
    )));

  	// header detail
	$wp_customize->add_section( 'travel_booking_offers_header_sec', array(
    	'title'      => __( 'Header Details', 'travel-booking-offers' ),
    	'description' => __( 'Add your Contact details here', 'travel-booking-offers' ),
		'panel' => 'travel_booking_offers_panel_id',
      'priority' => 2,
	) );

  	$wp_customize->add_setting(
		'travel_booking_offers_about_call_text',array(
			'default'=> '',
			'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(
		'travel_booking_offers_about_call_text',array(
			'label'	=> __('Add Contact Text','travel-booking-offers'),
			'section'=> 'travel_booking_offers_header_sec',
			'type'=> 'text'
	));

	$wp_customize->add_setting(
		'travel_booking_offers_about_call',
		array(
			'default'=> '',
			'sanitize_callback'	=> 'travel_booking_offers_sanitize_phone_number'
	));
	$wp_customize->add_control(
		'travel_booking_offers_about_call',array(
			'label'	=> __('Add Contact Number','travel-booking-offers'),
			'section'=> 'travel_booking_offers_header_sec',
			'type'=> 'text'
	));

	// Pro Version
    $wp_customize->add_setting( 'travel_booking_offers_header_pro_version_logo', array(
        'sanitize_callback' => 'travel_booking_offers_sanitize_custom_control'
    ));
    $wp_customize->add_control( new travel_booking_offers_Customize_Pro_Version ( $wp_customize,'travel_booking_offers_header_pro_version_logo', array(
        'section'     => 'travel_booking_offers_header_sec',
        'type'        => 'pro_options',
        'label'       => esc_html__( 'Features ', 'travel-booking-offers' ),
        'description' => esc_url( TRAVEL_BOOKING_OFFERS_PRO_THEME_URL ),
        'priority'    => 100
    )));

	//home page slider
	$wp_customize->add_section( 'travel_booking_offers_slider_section' , array(
    	'title'      => __( 'Slider Settings', 'travel-booking-offers' ),
		'panel' => 'travel_booking_offers_panel_id',
      	'priority' => 3,
	) );

	$wp_customize->add_setting( 'travel_booking_offers_slider_arrows', array(
		'default'           => true,
		'transport'         => 'refresh',
		'sanitize_callback' => 'travel_booking_offers_sanitize_checkbox',
	) );
	$wp_customize->add_control( new Travel_Booking_Offers_Toggle_Control( $wp_customize, 'travel_booking_offers_slider_arrows', array(
		'label'       => esc_html__( 'Show / Hide slider', 'travel-booking-offers' ),
		'section'     => 'travel_booking_offers_slider_section',
		'type'        => 'toggle',
		'settings'    => 'travel_booking_offers_slider_arrows',
	) ) );

	$wp_customize->add_setting( 'travel_booking_offers_show_slider_title', array(
		'default'           => true,
		'transport'         => 'refresh',
		'sanitize_callback' => 'travel_booking_offers_sanitize_checkbox',
	) );
	$wp_customize->add_control( new travel_booking_offers_Toggle_Control( $wp_customize, 'travel_booking_offers_show_slider_title', array(
		'label'       => esc_html__( 'Show / Hide Slider Heading', 'travel-booking-offers' ),
		'section'     => 'travel_booking_offers_slider_section',
		'type'        => 'toggle',
		'settings'    => 'travel_booking_offers_show_slider_title',
	) ) );

	$wp_customize->add_setting('travel_booking_offers_slider_short_heading',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('travel_booking_offers_slider_short_heading',array(
		'label'	=> __('Add short Heading','travel-booking-offers'),
		'section'=> 'travel_booking_offers_slider_section',
		'type'=> 'text'
	));

	for ( $travel_booking_offers_count = 1; $travel_booking_offers_count <= 4; $travel_booking_offers_count++ ) {

		// Add color scheme setting and control.
		$wp_customize->add_setting( 'travel_booking_offers_slider_page' . $travel_booking_offers_count, array(
			'default'           => '',
			'sanitize_callback' => 'travel_booking_offers_sanitize_dropdown_pages'
		) );

		$wp_customize->add_control( 'travel_booking_offers_slider_page' . $travel_booking_offers_count, array(
			'label'    => __( 'Select Slide Image Page', 'travel-booking-offers' ),
			'section'  => 'travel_booking_offers_slider_section',
			'type'     => 'dropdown-pages'
		) );

	}

	$travel_booking_offers_featured_post = get_theme_mod('travel_booking_offers_projetcs_number','4');

	for ( $j = 1; $j <= 4; $j++ ) {

	    $wp_customize->add_setting('travel_booking_offers_projetcs_text'.$j,array(
	        'default'=> '',
	        'sanitize_callback' => 'sanitize_text_field'
	    ));
	    $wp_customize->add_control('travel_booking_offers_projetcs_text'.$j,array(
	        'label' => esc_html__('Add Tab Text ','travel-booking-offers').$j,
	        'section'=> 'travel_booking_offers_slider_section',
	        'type'=> 'text'
	    ));

	    $wp_customize->add_setting('travel_booking_offers_projetcs_shortcode' . $j, array(
	        'default' => '',
	        'sanitize_callback' => 'sanitize_text_field'
	    ));

	    $wp_customize->add_control('travel_booking_offers_projetcs_shortcode' . $j, array(
	        'label' => esc_html__('Add Shortcode for Tab ', 'travel-booking-offers') . $j,
	        'section' => 'travel_booking_offers_slider_section',
	        'type' => 'text',
	    ));

	}

    //Slider height
    $wp_customize->add_setting('travel_booking_offers_slider_img_height',array(
        'default'=> '',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('travel_booking_offers_slider_img_height',array(
        'label' => __('Slider Height','travel-booking-offers'),
        'description'   => __('Add slider height in px(eg. 700px).','travel-booking-offers'),
        'section'=> 'travel_booking_offers_slider_section',
        'type'=> 'text'
    ));

	// Pro Version
    $wp_customize->add_setting( 'travel_booking_offers_slider_pro_version_logo', array(
        'sanitize_callback' => 'travel_booking_offers_sanitize_custom_control'
    ));
    $wp_customize->add_control( new travel_booking_offers_Customize_Pro_Version ( $wp_customize,'travel_booking_offers_slider_pro_version_logo', array(
        'section'     => 'travel_booking_offers_slider_section',
        'type'        => 'pro_options',
        'label'       => esc_html__( 'Features ', 'travel-booking-offers' ),
        'description' => esc_url( TRAVEL_BOOKING_OFFERS_PRO_THEME_URL ),
        'priority'    => 100
    )));

	/*=========================================
	service Section
	=========================================*/
	$wp_customize->add_section( 
		'travel_booking_offers_tour_section' , 
		array(
	        'title'      => __( 'Our Most Popular Tours Section', 'travel-booking-offers' ),
	        'priority' => 3,
	        'panel' => 'travel_booking_offers_panel_id',
    	) 
    );

    $wp_customize->add_setting( 'travel_booking_offers_courses_setting', array(
		'default'           => true,
		'transport'         => 'refresh',
		'sanitize_callback' => 'travel_booking_offers_sanitize_checkbox',
	) );
	$wp_customize->add_control( new Travel_Booking_Offers_Toggle_Control( $wp_customize, 'travel_booking_offers_courses_setting', array(
		'label'       => esc_html__( 'Show / Hide Section', 'travel-booking-offers' ),
		'section'     => 'travel_booking_offers_tour_section',
		'type'        => 'toggle',
		'settings'    => 'travel_booking_offers_courses_setting',
	) ) );

    $wp_customize->add_setting(
    	'travel_booking_offers_offer_section_tittle',
    	array(
	        'default'   => '',
	        'sanitize_callback' => 'sanitize_text_field'
    	)
    );
    $wp_customize->add_control(
    	'travel_booking_offers_offer_section_tittle',
    	array(
	        'label' => __('Section Top Title','travel-booking-offers'),
	        'section'   => 'travel_booking_offers_tour_section',
	        'type'      => 'text'
    	)
    );

    $wp_customize->add_setting(
    	'travel_booking_offers_offer_section_text',
    	array(
	        'default'   => '',
	        'sanitize_callback' => 'sanitize_text_field'
    	)
    );
    $wp_customize->add_control(
    	'travel_booking_offers_offer_section_text',
    	array(
	        'label' => __('Section Heading','travel-booking-offers'),
	        'section'   => 'travel_booking_offers_tour_section',
	        'type'      => 'text'
    	)
    );

    $categories = get_categories();
    $cats = array();
    $i = 0;
    $offer_cat[]= 'select';
    foreach($categories as $category){
        if($i==0){
            $default = $category->slug;
            $i++;
        }
        $offer_cat[$category->slug] = $category->name;
    }

    $wp_customize->add_setting(
    	'travel_booking_offers_offer_section_category',
    	array(
	        'default'   => 'select',
	        'sanitize_callback' => 'travel_booking_offers_sanitize_choices',
    	)
    );
    $wp_customize->add_control(
    	'travel_booking_offers_offer_section_category',
    	array(
	        'type'    => 'select',
	        'choices' => $offer_cat,
	        'label' => __('Select Category','travel-booking-offers'),
	        'section' => 'travel_booking_offers_tour_section',
    	)
    );

   // Setting for number of posts to show
    $wp_customize->add_setting('travel_booking_offers_posts_to_show', array(
        'default'           => 3, // Default number of posts to show
        'sanitize_callback' => 'absint', // Sanitization callback
    ));

    // Add control for number of posts to show
    $wp_customize->add_control('travel_booking_offers_posts_to_show', array(
        'label'       => __('Number of Posts to Show', 'travel-booking-offers'),
        'section'     => 'travel_booking_offers_tour_section',
        'priority'    => 10,
        'type'        => 'number',
        'input_attrs' => array(
            'step' => 1,
            'min'  => 0,
            'max'  => 50,
        ),
    ));

    // Get the number of posts to show
    $travel_booking_offers_posts_to_show = get_theme_mod('travel_booking_offers_posts_to_show', 3);
    
    // Loop to create settings and controls for each post's price and star rating
    for ($travel_booking_offers_i = 1; $travel_booking_offers_i <= $travel_booking_offers_posts_to_show; $travel_booking_offers_i++) {  

    	$wp_customize->add_setting('travel_booking_offers_star_rating' . $travel_booking_offers_i, array(
            'default'           => '',
            'sanitize_callback' => 'absint',
        ));
        $wp_customize->add_control('travel_booking_offers_star_rating' . $travel_booking_offers_i, array(
            'label'       => __('Add Rating for Post  ', 'travel-booking-offers') . $travel_booking_offers_i,
            'section'     => 'travel_booking_offers_tour_section',
            'type'        => 'number',
            'input_attrs' => array(
                'step' => 1,
                'min'  => 0,
                'max'  => 5,
            ),
        ));

        $wp_customize->add_setting('travel_booking_offers_add_price' . $travel_booking_offers_i, array(
            'default' => '',
            'sanitize_callback' => 'sanitize_text_field'
        ));
        $wp_customize->add_control('travel_booking_offers_add_price' . $travel_booking_offers_i, array(
            'label'    => __('Add Tour Price for Post ', 'travel-booking-offers') . $travel_booking_offers_i,
            'section'  => 'travel_booking_offers_tour_section',
            'type'     => 'text',
        ));

    	$wp_customize->add_setting('travel_booking_offers_total_no_beds' . $travel_booking_offers_i, array(
            'default' => '',
            'sanitize_callback' => 'sanitize_text_field'
        ));
        $wp_customize->add_control('travel_booking_offers_total_no_beds' . $travel_booking_offers_i, array(
            'label'    => __('Add Total Beds for Post ', 'travel-booking-offers') . $travel_booking_offers_i,
            'section'  => 'travel_booking_offers_tour_section',
            'type'     => 'text',
        ));

        $wp_customize->add_setting('travel_booking_offers_total_no_baths' . $travel_booking_offers_i, array(
            'default' => '',
            'sanitize_callback' => 'sanitize_text_field'
        ));
        $wp_customize->add_control('travel_booking_offers_total_no_baths' . $travel_booking_offers_i, array(
            'label'    => __('Add Total Baths for Post ', 'travel-booking-offers') . $travel_booking_offers_i,
            'section'  => 'travel_booking_offers_tour_section',
            'type'     => 'text',
        ));

        $wp_customize->add_setting('travel_booking_offers_total_no_guest' . $travel_booking_offers_i, array(
            'default' => '',
            'sanitize_callback' => 'sanitize_text_field'
        ));
        $wp_customize->add_control('travel_booking_offers_total_no_guest' . $travel_booking_offers_i, array(
            'label'    => __('Add Total Guests for Post ', 'travel-booking-offers') . $travel_booking_offers_i,
            'section'  => 'travel_booking_offers_tour_section',
            'type'     => 'text',
        ));

    }

    // Pro Version
    $wp_customize->add_setting( 'travel_booking_offers_about_pro_version_logo', array(
        'sanitize_callback' => 'travel_booking_offers_sanitize_custom_control'
    ));
    $wp_customize->add_control( new travel_booking_offers_Customize_Pro_Version ( $wp_customize,'travel_booking_offers_about_pro_version_logo', array(
        'section'     => 'travel_booking_offers_tour_section',
        'type'        => 'pro_options',
        'label'       => esc_html__( 'Features ', 'travel-booking-offers' ),
        'description' => esc_url( TRAVEL_BOOKING_OFFERS_PRO_THEME_URL ),
        'priority'    => 100
    )));

	//footer
	$wp_customize->add_section('travel_booking_offers_footer_section',array(
		'title'	=> __('Footer Widget Settings','travel-booking-offers'),
		'panel' => 'travel_booking_offers_panel_id',
		'priority' => 4,
	));

	$wp_customize->add_setting('travel_booking_offers_footer_columns',array(
		'default'	=> 4,
		'sanitize_callback'	=> 'travel_booking_offers_sanitize_number_absint'
	));
	$wp_customize->add_control('travel_booking_offers_footer_columns',array(
		'label'	=> __('Footer Widget Columns','travel-booking-offers'),
		'section'	=> 'travel_booking_offers_footer_section',
		'setting'	=> 'travel_booking_offers_footer_columns',
		'type'	=> 'number',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 1,
			'max'              => 4,
		),
	));
	$wp_customize->add_setting( 'travel_booking_offers_tp_footer_bg_color_option', array(
		'default' => '#151515',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'travel_booking_offers_tp_footer_bg_color_option', array(
		'label'     => __('Footer Widget Background Color', 'travel-booking-offers'),
		'description' => __('It will change the complete footer widget backgorund color.', 'travel-booking-offers'),
		'section' => 'travel_booking_offers_footer_section',
		'settings' => 'travel_booking_offers_tp_footer_bg_color_option',
	)));

	$wp_customize->add_setting('travel_booking_offers_footer_widget_image',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw',
	));
	$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize,'travel_booking_offers_footer_widget_image',array(
       'label' => __('Footer Widget Background Image','travel-booking-offers'),
       'section' => 'travel_booking_offers_footer_section'
	)));

	//footer widget title font size
	$wp_customize->add_setting('travel_booking_offers_footer_widget_title_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'travel_booking_offers_sanitize_number_absint'
	));
	$wp_customize->add_control('travel_booking_offers_footer_widget_title_font_size',array(
		'label'	=> __('Change Footer Widget Title Font Size in PX','travel-booking-offers'),
		'section'	=> 'travel_booking_offers_footer_section',
	    'setting'	=> 'travel_booking_offers_footer_widget_title_font_size',
		'type'	=> 'number',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 0,
			'max'              => 50,
		),
	));

	$wp_customize->add_setting( 'travel_booking_offers_footer_widget_title_color', array(
	    'default' => '',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'travel_booking_offers_footer_widget_title_color', array(
			'label'     => __('Change Footer Widget Title Color', 'travel-booking-offers'),
	    'section' => 'travel_booking_offers_footer_section',
	    'settings' => 'travel_booking_offers_footer_widget_title_color',
  	)));
  	
	$wp_customize->add_setting( 'travel_booking_offers_return_to_header', array(
		'default'           => true,
		'transport'         => 'refresh',
		'sanitize_callback' => 'travel_booking_offers_sanitize_checkbox',
	) );
	$wp_customize->add_control( new Travel_Booking_Offers_Toggle_Control( $wp_customize, 'travel_booking_offers_return_to_header', array(
		'label'       => esc_html__( 'Show / Hide Return to header', 'travel-booking-offers' ),
		'section'     => 'travel_booking_offers_footer_section',
		'type'        => 'toggle',
		'settings'    => 'travel_booking_offers_return_to_header',
	) ) );

	$wp_customize->add_setting('travel_booking_offers_return_icon',array(
		'default'	=> 'fas fa-arrow-up',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Travel_Booking_Offers_Icon_Changer(
       $wp_customize,'travel_booking_offers_return_icon',array(
		'label'	=> __('Return to header Icon','travel-booking-offers'),
		'transport' => 'refresh',
		'section'	=> 'travel_booking_offers_footer_section',
		'type'		=> 'travel-booking-offers-icon'
	)));

	// Add Settings and Controls for Scroll top
	$wp_customize->add_setting('travel_booking_offers_scroll_top_position',array(
        'default' => 'Right',
        'sanitize_callback' => 'travel_booking_offers_sanitize_choices'
	));
	$wp_customize->add_control('travel_booking_offers_scroll_top_position',array(
        'type' => 'radio',
        'label'     => __('Scroll to top Position', 'travel-booking-offers'),
        'description'   => __('This option work for scroll to top', 'travel-booking-offers'),
        'section' => 'travel_booking_offers_footer_section',
        'choices' => array(
            'Right' => __('Right','travel-booking-offers'),
            'Left' => __('Left','travel-booking-offers'),
            'Center' => __('Center','travel-booking-offers')
        ),
	) );

	// Pro Version
    $wp_customize->add_setting( 'travel_booking_offers_footer_widget_pro_version_logo', array(
        'sanitize_callback' => 'travel_booking_offers_sanitize_custom_control'
    ));
    $wp_customize->add_control( new travel_booking_offers_Customize_Pro_Version ( $wp_customize,'travel_booking_offers_footer_widget_pro_version_logo', array(
        'section'     => 'travel_booking_offers_footer_section',
        'type'        => 'pro_options',
        'label'       => esc_html__( 'Features ', 'travel-booking-offers' ),
        'description' => esc_url( TRAVEL_BOOKING_OFFERS_PRO_THEME_URL ),
        'priority'    => 100
    )));

	//footer
	$wp_customize->add_section('travel_booking_offers_footer_copyright_section',array(
		'title'	=> __('Footer Copyright Settings','travel-booking-offers'),
		'description'	=> __('Add copyright text.','travel-booking-offers'),
		'panel' => 'travel_booking_offers_panel_id',
		'priority' => 5,
	));

	$wp_customize->add_setting('travel_booking_offers_footer_text',array(
		'default' => __( 'Travel Booking Offers WordPress Theme', 'travel-booking-offers' ),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('travel_booking_offers_footer_text',array(
		'label'	=> __('Copyright Text','travel-booking-offers'),
		'section'	=> 'travel_booking_offers_footer_copyright_section',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('travel_booking_offers_footer_copyright_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'travel_booking_offers_sanitize_number_absint'
	));
	$wp_customize->add_control('travel_booking_offers_footer_copyright_font_size',array(
		'label'	=> __('Change Footer Copyright Font Size in PX','travel-booking-offers'),
		'section'	=> 'travel_booking_offers_footer_copyright_section',
	    'setting'	=> 'travel_booking_offers_footer_copyright_font_size',
		'type'	=> 'number',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 0,
			'max'              => 50,
		),
	));

	$wp_customize->add_setting( 'travel_booking_offers_footer_copyright_text_color', array(
	    'default' => '',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'travel_booking_offers_footer_copyright_text_color', array(
			'label'     => __('Change Footer Copyright Text Color', 'travel-booking-offers'),
	    'section' => 'travel_booking_offers_footer_copyright_section',
	    'settings' => 'travel_booking_offers_footer_copyright_text_color',
  	)));

  	$wp_customize->add_setting('travel_booking_offers_footer_copyright_top_bottom_padding',array(
		'default'	=> '',
		'sanitize_callback'	=> 'travel_booking_offers_sanitize_number_absint'
	));
	$wp_customize->add_control('travel_booking_offers_footer_copyright_top_bottom_padding',array(
		'label'	=> __('Change Footer Copyright Padding in PX','travel-booking-offers'),
		'section'	=> 'travel_booking_offers_footer_copyright_section',
	    'setting'	=> 'travel_booking_offers_footer_copyright_top_bottom_padding',
		'type'	=> 'number',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 0,
			'max'              => 50,
		),
	));

	// Add Settings and Controls for Scroll top
	$wp_customize->add_setting('travel_booking_offers_copyright_text_position',array(
        'default' => 'Center',
        'sanitize_callback' => 'travel_booking_offers_sanitize_choices'
	));
	$wp_customize->add_control('travel_booking_offers_copyright_text_position',array(
        'type' => 'radio',
        'label'     => __('Copyright Text Position', 'travel-booking-offers'),
        'description'   => __('This option work for Copyright', 'travel-booking-offers'),
        'section' => 'travel_booking_offers_footer_copyright_section',
        'choices' => array(
            'Right' => __('Right','travel-booking-offers'),
            'Left' => __('Left','travel-booking-offers'),
            'Center' => __('Center','travel-booking-offers')
        ),
	) );

	// Pro Version
    $wp_customize->add_setting( 'travel_booking_offers_copyright_pro_version_logo', array(
        'sanitize_callback' => 'travel_booking_offers_sanitize_custom_control'
    ));
    $wp_customize->add_control( new travel_booking_offers_Customize_Pro_Version ( $wp_customize,'travel_booking_offers_copyright_pro_version_logo', array(
        'section'     => 'travel_booking_offers_footer_copyright_section',
        'type'        => 'pro_options',
        'label'       => esc_html__( 'Features ', 'travel-booking-offers' ),
        'description' => esc_url( TRAVEL_BOOKING_OFFERS_PRO_THEME_URL ),
        'priority'    => 100
    )));

	//Mobile resposnsive
	$wp_customize->add_section('travel_booking_offers_mobile_media_option',array(
		'title'         => __('Mobile Responsive media', 'travel-booking-offers'),
		'description' => __('Control will not function if the toggle in the main settings is off.', 'travel-booking-offers'),
		'priority' => 5,
		'panel' => 'travel_booking_offers_panel_id'
	) );

	$wp_customize->add_setting( 'travel_booking_offers_mobile_blog_description', array(
		'default'           => true,
		'transport'         => 'refresh',
		'sanitize_callback' => 'travel_booking_offers_sanitize_checkbox',
	) );
	$wp_customize->add_control( new Travel_Booking_Offers_Toggle_Control( $wp_customize, 'travel_booking_offers_mobile_blog_description', array(
		'label'       => esc_html__( 'Show / Hide Blog Page Description', 'travel-booking-offers' ),
		'section'     => 'travel_booking_offers_mobile_media_option',
		'type'        => 'toggle',
		'settings'    => 'travel_booking_offers_mobile_blog_description',
	) ) );

	$wp_customize->add_setting( 'travel_booking_offers_return_to_header_mob', array(
		'default'           => true,
		'transport'         => 'refresh',
		'sanitize_callback' => 'travel_booking_offers_sanitize_checkbox',
	) );
	$wp_customize->add_control( new Travel_Booking_Offers_Toggle_Control( $wp_customize, 'travel_booking_offers_return_to_header_mob', array(
		'label'       => esc_html__( 'Show / Hide Return to header', 'travel-booking-offers' ),
		'section'     => 'travel_booking_offers_mobile_media_option',
		'type'        => 'toggle',
		'settings'    => 'travel_booking_offers_return_to_header_mob',
	) ) );

	$wp_customize->add_setting( 'travel_booking_offers_slider_buttom_mob', array(
		'default'           => true,
		'transport'         => 'refresh',
		'sanitize_callback' => 'travel_booking_offers_sanitize_checkbox',
	) );
	$wp_customize->add_control( new Travel_Booking_Offers_Toggle_Control( $wp_customize, 'travel_booking_offers_slider_buttom_mob', array(
		'label'       => esc_html__( 'Show / Hide Slider Button', 'travel-booking-offers' ),
		'section'     => 'travel_booking_offers_mobile_media_option',
		'type'        => 'toggle',
		'settings'    => 'travel_booking_offers_slider_buttom_mob',
	) ) );

	$wp_customize->add_setting( 'travel_booking_offers_related_post_mob', array(
		'default'           => true,
		'transport'         => 'refresh',
		'sanitize_callback' => 'travel_booking_offers_sanitize_checkbox',
	) );
	$wp_customize->add_control( new Travel_Booking_Offers_Toggle_Control( $wp_customize, 'travel_booking_offers_related_post_mob', array(
		'label'       => esc_html__( 'Show / Hide Related Post', 'travel-booking-offers' ),
		'section'     => 'travel_booking_offers_mobile_media_option',
		'type'        => 'toggle',
		'settings'    => 'travel_booking_offers_related_post_mob',
	) ) );

	//Slider height
    $wp_customize->add_setting('travel_booking_offers_slider_img_height_responsive',array(
        'default'=> '',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('travel_booking_offers_slider_img_height_responsive',array(
        'label' => __('Slider Height','travel-booking-offers'),
        'description'   => __('Add slider height in px(eg. 700px).','travel-booking-offers'),
        'section'=> 'travel_booking_offers_mobile_media_option',
        'type'=> 'text'
    ));

	// Pro Version
    $wp_customize->add_setting( 'travel_booking_offers_responsive_pro_version_logo', array(
        'sanitize_callback' => 'travel_booking_offers_sanitize_custom_control'
    ));
    $wp_customize->add_control( new travel_booking_offers_Customize_Pro_Version ( $wp_customize,'travel_booking_offers_responsive_pro_version_logo', array(
        'section'     => 'travel_booking_offers_mobile_media_option',
        'type'        => 'pro_options',
        'label'       => esc_html__( 'Features ', 'travel-booking-offers' ),
        'description' => esc_url( TRAVEL_BOOKING_OFFERS_PRO_THEME_URL ),
        'priority'    => 100
    )));
	
	$wp_customize->get_setting( 'blogname' )->transport          = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport   = 'postMessage';

	//site Title
	$wp_customize->selective_refresh->add_partial( 'blogname', array(
		'selector' => '.site-title a',
		'render_callback' => 'Travel_Booking_Offers_Customize_partial_blogname',
	) );

	$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
		'selector' => '.site-description',
		'render_callback' => 'Travel_Booking_Offers_Customize_partial_blogdescription',
	) );

	$wp_customize->add_setting( 'travel_booking_offers_site_title', array(
		'default'           => true,
		'transport'         => 'refresh',
		'sanitize_callback' => 'travel_booking_offers_sanitize_checkbox',
	) );
	$wp_customize->add_control( new Travel_Booking_Offers_Toggle_Control( $wp_customize, 'travel_booking_offers_site_title', array(
		'label'       => esc_html__( 'Show / Hide Site Title', 'travel-booking-offers' ),
		'section'     => 'title_tagline',
		'type'        => 'toggle',
		'settings'    => 'travel_booking_offers_site_title',
	) ) );

	// logo site title size
	$wp_customize->add_setting('travel_booking_offers_site_title_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'travel_booking_offers_sanitize_number_absint'
	));
	$wp_customize->add_control('travel_booking_offers_site_title_font_size',array(
		'label'	=> __('Site Title Font Size in PX','travel-booking-offers'),
		'section'	=> 'title_tagline',
		'setting'	=> 'travel_booking_offers_site_title_font_size',
		'type'	=> 'number',
		'input_attrs' => array(
		    'step'             => 1,
			'min'              => 0,
			'max'              => 30,
			),
	));

	$wp_customize->add_setting( 'travel_booking_offers_site_tagline_color', array(
	    'default' => '',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'travel_booking_offers_site_tagline_color', array(
			'label'     => __('Change Site Title Color', 'travel-booking-offers'),
	    'section' => 'title_tagline',
	    'settings' => 'travel_booking_offers_site_tagline_color',
  	)));

	$wp_customize->add_setting( 'travel_booking_offers_site_tagline', array(
		'default'           => false,
		'transport'         => 'refresh',
		'sanitize_callback' => 'travel_booking_offers_sanitize_checkbox',
	) );
	$wp_customize->add_control( new Travel_Booking_Offers_Toggle_Control( $wp_customize, 'travel_booking_offers_site_tagline', array(
		'label'       => esc_html__( 'Show / Hide Site Tagline', 'travel-booking-offers' ),
		'section'     => 'title_tagline',
		'type'        => 'toggle',
		'settings'    => 'travel_booking_offers_site_tagline',
	) ) );

	// logo site tagline size
	$wp_customize->add_setting('travel_booking_offers_site_tagline_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'travel_booking_offers_sanitize_number_absint'
	));
	$wp_customize->add_control('travel_booking_offers_site_tagline_font_size',array(
		'label'	=> __('Site Tagline Font Size in PX','travel-booking-offers'),
		'section'	=> 'title_tagline',
		'setting'	=> 'travel_booking_offers_site_tagline_font_size',
		'type'	=> 'number',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 0,
			'max'              => 30,
		),
	));

	$wp_customize->add_setting( 'travel_booking_offers_logo_tagline_color', array(
	    'default' => '',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'travel_booking_offers_logo_tagline_color', array(
			'label'     => __('Change Site Tagline Color', 'travel-booking-offers'),
	    'section' => 'title_tagline',
	    'settings' => 'travel_booking_offers_logo_tagline_color',
  	)));

    $wp_customize->add_setting('travel_booking_offers_logo_width',array(
	   'default' => 80,
	   'sanitize_callback'	=> 'travel_booking_offers_sanitize_number_absint'
	));
	$wp_customize->add_control('travel_booking_offers_logo_width',array(
		'label'	=> esc_html__('Here You Can Customize Your Logo Size','travel-booking-offers'),
		'section'	=> 'title_tagline',
		'type'		=> 'number'
	));

	$wp_customize->add_setting('travel_booking_offers_per_columns',array(
		'default'=> 3,
		'sanitize_callback'	=> 'travel_booking_offers_sanitize_number_absint'
	));
	$wp_customize->add_control('travel_booking_offers_per_columns',array(
		'label'	=> __('Product Per Row','travel-booking-offers'),
		'section'=> 'woocommerce_product_catalog',
		'type'=> 'number'
	));

	$wp_customize->add_setting('travel_booking_offers_product_per_page',array(
		'default'=> 9,
		'sanitize_callback'	=> 'travel_booking_offers_sanitize_number_absint'
	));
	$wp_customize->add_control('travel_booking_offers_product_per_page',array(
		'label'	=> __('Product Per Page','travel-booking-offers'),
		'section'=> 'woocommerce_product_catalog',
		'type'=> 'number'
	));

	$wp_customize->add_setting( 'travel_booking_offers_product_sidebar', array(
		'default'           => true,
		'transport'         => 'refresh',
		'sanitize_callback' => 'travel_booking_offers_sanitize_checkbox',
	) );
	$wp_customize->add_control( new Travel_Booking_Offers_Toggle_Control( $wp_customize, 'travel_booking_offers_product_sidebar', array(
		'label'       => esc_html__( 'Show / Hide Shop Page Sidebar', 'travel-booking-offers' ),
		'section'     => 'woocommerce_product_catalog',
		'type'        => 'toggle',
		'settings'    => 'travel_booking_offers_product_sidebar',
	) ) );
	$wp_customize->add_setting('travel_booking_offers_sale_tag_position',array(
        'default' => 'right',
        'sanitize_callback' => 'travel_booking_offers_sanitize_choices'
	));
	$wp_customize->add_control('travel_booking_offers_sale_tag_position',array(
        'type' => 'radio',
        'label'     => __('Sale Badge Position', 'travel-booking-offers'),
        'description'   => __('This option work for Archieve Products', 'travel-booking-offers'),
        'section' => 'woocommerce_product_catalog',
        'choices' => array(
            'left' => __('Left','travel-booking-offers'),
            'right' => __('Right','travel-booking-offers'),
        ),
	) );
	$wp_customize->add_setting( 'travel_booking_offers_single_product_sidebar', array(
		'default'           => true,
		'transport'         => 'refresh',
		'sanitize_callback' => 'travel_booking_offers_sanitize_checkbox',
	) );
	$wp_customize->add_control( new Travel_Booking_Offers_Toggle_Control( $wp_customize, 'travel_booking_offers_single_product_sidebar', array(
		'label'       => esc_html__( 'Show / Hide Product Page Sidebar', 'travel-booking-offers' ),
		'section'     => 'woocommerce_product_catalog',
		'type'        => 'toggle',
		'settings'    => 'travel_booking_offers_single_product_sidebar',
	) ) );

	$wp_customize->add_setting( 'travel_booking_offers_related_product', array(
		'default'           => true,
		'transport'         => 'refresh',
		'sanitize_callback' => 'travel_booking_offers_sanitize_checkbox',
	) );
	$wp_customize->add_control( new Travel_Booking_Offers_Toggle_Control( $wp_customize, 'travel_booking_offers_related_product', array(
		'label'       => esc_html__( 'Show / Hide related product', 'travel-booking-offers' ),
		'section'     => 'woocommerce_product_catalog',
		'type'        => 'toggle',
		'settings'    => 'travel_booking_offers_related_product',
	) ) );

	
	//Page template settings
	$wp_customize->add_panel( 'travel_booking_offers_page_panel_id', array(
	    'priority' => 10,
	    'capability' => 'edit_theme_options',
	    'theme_supports' => '',
	    'title' => __( 'Page Template Settings', 'travel-booking-offers' ),
	    'description' => __( 'Description of what this panel does.', 'travel-booking-offers' ),
	) );

	// 404 PAGE
	$wp_customize->add_section('travel_booking_offers_404_page_section',array(
		'title'         => __('404 Page', 'travel-booking-offers'),
		'description'   => __('Here you can customize 404 Page content.', 'travel-booking-offers'),
		'panel' => 'travel_booking_offers_page_panel_id'
	) );

	$wp_customize->add_setting('travel_booking_offers_edit_404_title',array(
		'default'=> __('Oops! That page cant be found.','travel-booking-offers'),
		'sanitize_callback'	=> 'sanitize_text_field',
	));
	$wp_customize->add_control('travel_booking_offers_edit_404_title',array(
		'label'	=> __('Edit Title','travel-booking-offers'),
		'section'=> 'travel_booking_offers_404_page_section',
		'type'=> 'text',
	));

	$wp_customize->add_setting('travel_booking_offers_edit_404_text',array(
		'default'=> __('It looks like nothing was found at this location. Maybe try a search?','travel-booking-offers'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('travel_booking_offers_edit_404_text',array(
		'label'	=> __('Edit Text','travel-booking-offers'),
		'section'=> 'travel_booking_offers_404_page_section',
		'type'=> 'text'
	));

	// Search Results
	$wp_customize->add_section('travel_booking_offers_no_result_section',array(
		'title'         => __('Search Results', 'travel-booking-offers'),
		'description'  => __('Here you can customize Search Result content.', 'travel-booking-offers'),
		'panel' => 'travel_booking_offers_page_panel_id'
	) );

	$wp_customize->add_setting('travel_booking_offers_edit_no_result_title',array(
		'default'=> __('Nothing Found','travel-booking-offers'),
		'sanitize_callback'	=> 'sanitize_text_field',
	));
	$wp_customize->add_control('travel_booking_offers_edit_no_result_title',array(
		'label'	=> __('Edit Title','travel-booking-offers'),
		'section'=> 'travel_booking_offers_no_result_section',
		'type'=> 'text',
	));

	$wp_customize->add_setting('travel_booking_offers_edit_no_result_text',array(
		'default'=> __('Sorry, but nothing matched your search terms. Please try again with some different keywords.','travel-booking-offers'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('travel_booking_offers_edit_no_result_text',array(
		'label'	=> __('Edit Text','travel-booking-offers'),
		'section'=> 'travel_booking_offers_no_result_section',
		'type'=> 'text'
	));

	 // Header Image Height
    $wp_customize->add_setting(
        'travel_booking_offers_header_image_height',
        array(
            'default'           => 500,
            'sanitize_callback' => 'absint',
        )
    );
    $wp_customize->add_control(
        'travel_booking_offers_header_image_height',
        array(
            'label'       => esc_html__( 'Header Image Height', 'travel-booking-offers' ),
            'section'     => 'header_image',
            'type'        => 'number',
            'description' => esc_html__( 'Control the height of the header image. Default is 350px.', 'travel-booking-offers' ),
            'input_attrs' => array(
                'min'  => 220,
                'max'  => 1000,
                'step' => 1,
            ),
        )
    );

    // Header Background Position
    $wp_customize->add_setting(
        'travel_booking_offers_header_background_position',
        array(
            'default'           => 'center',
            'sanitize_callback' => 'sanitize_text_field',
        )
    );
    $wp_customize->add_control(
        'travel_booking_offers_header_background_position',
        array(
            'label'       => esc_html__( 'Header Background Position', 'travel-booking-offers' ),
            'section'     => 'header_image',
            'type'        => 'select',
            'choices'     => array(
                'top'    => esc_html__( 'Top', 'travel-booking-offers' ),
                'center' => esc_html__( 'Center', 'travel-booking-offers' ),
                'bottom' => esc_html__( 'Bottom', 'travel-booking-offers' ),
            ),
            'description' => esc_html__( 'Choose how you want to position the header image.', 'travel-booking-offers' ),
        )
    );

    // Header Image Parallax Effect
    $wp_customize->add_setting(
        'travel_booking_offers_header_background_attachment',
        array(
            'default'           => 1,
            'sanitize_callback' => 'absint',
        )
    );
    $wp_customize->add_control(
        'travel_booking_offers_header_background_attachment',
        array(
            'label'       => esc_html__( 'Header Image Parallax', 'travel-booking-offers' ),
            'section'     => 'header_image',
            'type'        => 'checkbox',
            'description' => esc_html__( 'Add a parallax effect on page scroll.', 'travel-booking-offers' ),
        )
    );

        //Opacity
	$wp_customize->add_setting('travel_booking_offers_header_banner_opacity_color',array(
       'default'              => '0.5',
       'sanitize_callback' => 'travel_booking_offers_sanitize_choices'
	));
    $wp_customize->add_control( 'travel_booking_offers_header_banner_opacity_color', array(
		'label'       => esc_html__( 'Header Image Opacity','travel-booking-offers' ),
		'section'     => 'header_image',
		'type'        => 'select',
		'settings'    => 'travel_booking_offers_header_banner_opacity_color',
		'choices' => array(
           '0' =>  esc_attr(__('0','travel-booking-offers')),
           '0.1' =>  esc_attr(__('0.1','travel-booking-offers')),
           '0.2' =>  esc_attr(__('0.2','travel-booking-offers')),
           '0.3' =>  esc_attr(__('0.3','travel-booking-offers')),
           '0.4' =>  esc_attr(__('0.4','travel-booking-offers')),
           '0.5' =>  esc_attr(__('0.5','travel-booking-offers')),
           '0.6' =>  esc_attr(__('0.6','travel-booking-offers')),
           '0.7' =>  esc_attr(__('0.7','travel-booking-offers')),
           '0.8' =>  esc_attr(__('0.8','travel-booking-offers')),
           '0.9' =>  esc_attr(__('0.9','travel-booking-offers'))
		), 
	) );

   $wp_customize->add_setting( 'travel_booking_offers_header_banner_image_overlay', array(
	    'default'   => true,
	    'transport' => 'refresh',
	    'sanitize_callback' => 'travel_booking_offers_sanitize_checkbox',
	));
	$wp_customize->add_control( new Travel_Booking_Offers_Toggle_Control( $wp_customize, 'travel_booking_offers_header_banner_image_overlay', array(
	    'label'   => esc_html__( 'Show / Hide Header Image Overlay', 'travel-booking-offers' ),
	    'section' => 'header_image',
	)));

    $wp_customize->add_setting('travel_booking_offers_header_banner_image_ooverlay_color', array(
		'default'           => '#000',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'travel_booking_offers_header_banner_image_ooverlay_color', array(
		'label'    => __('Header Image Overlay Color', 'travel-booking-offers'),
		'section'  => 'header_image',
	)));

    $wp_customize->add_setting(
        'travel_booking_offers_header_image_title_font_size',
        array(
            'default'           => 40,
            'sanitize_callback' => 'absint',
        )
    );
    $wp_customize->add_control(
        'travel_booking_offers_header_image_title_font_size',
        array(
            'label'       => esc_html__( 'Change Header Image Title Font Size', 'travel-booking-offers' ),
            'section'     => 'header_image',
            'type'        => 'number',
            'description' => esc_html__( 'Control the font Size of the header image title. Default is 40px.', 'travel-booking-offers' ),
            'input_attrs' => array(
                'min'  => 10,
                'max'  => 200,
                'step' => 1,
            ),
        )
    );

	$wp_customize->add_setting( 'travel_booking_offers_header_image_title_text_color', array(
	    'default' => '',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'travel_booking_offers_header_image_title_text_color', array(
			'label'     => __('Change Header Image Title Color', 'travel-booking-offers'),
	    'section' => 'header_image',
	    'settings' => 'travel_booking_offers_header_image_title_text_color',
  	)));

}
add_action( 'customize_register', 'Travel_Booking_Offers_Customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @since Travel Booking Offers 1.0
 * @see Travel_Booking_Offers_Customize_register()
 *
 * @return void
 */
function Travel_Booking_Offers_Customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @since Travel Booking Offers 1.0
 * @see Travel_Booking_Offers_Customize_register()
 *
 * @return void
 */
function Travel_Booking_Offers_Customize_partial_blogdescription() {
	bloginfo( 'description' );
}

if ( ! defined( 'TRAVEL_BOOKING_OFFERS_PRO_THEME_NAME' ) ) {
	define( 'TRAVEL_BOOKING_OFFERS_PRO_THEME_NAME', esc_html__( 'Travel Booking Pro', 'travel-booking-offers'));
}
if ( ! defined( 'TRAVEL_BOOKING_OFFERS_PRO_THEME_URL' ) ) {
	define( 'TRAVEL_BOOKING_OFFERS_PRO_THEME_URL', esc_url('https://www.themespride.com/products/travel-offer-wordpress-theme', 'travel-booking-offers'));
}
if ( ! defined( 'travel_booking_offers_DOCS_URL' ) ) {
	define( 'travel_booking_offers_DOCS_URL', esc_url('https://page.themespride.com/demo/docs/travel-booking-offers-lite', 'travel-booking-offers'));
}


if ( ! defined( 'TRAVEL_BOOKING_OFFERS_TEXT' ) ) {
    define( 'TRAVEL_BOOKING_OFFERS_TEXT', __( 'Travel Booking Offers Pro','travel-booking-offers' ));
}
if ( ! defined( 'TRAVEL_BOOKING_OFFERS_BUY_TEXT' ) ) {
    define( 'TRAVEL_BOOKING_OFFERS_BUY_TEXT', __( 'Upgrade Pro','travel-booking-offers' ));
}


add_action( 'customize_register', function( $manager ) {

// Load custom sections.
load_template( trailingslashit( get_template_directory() ) . '/inc/section-pro.php' );

    $manager->register_section_type( Travel_Booking_Offers_Button::class );

    $manager->add_section(
        new Travel_Booking_Offers_Button( $manager, 'travel_booking_offers_pro', [
            'title'       => esc_html( TRAVEL_BOOKING_OFFERS_TEXT,'travel-booking-offers' ),
            'priority'    => 0,
            'button_text' => __( 'GET PREMIUM', 'travel-booking-offers' ),
            'button_url'  => esc_url( TRAVEL_BOOKING_OFFERS_PRO_THEME_URL )
        ] )
    );

} );
/**
 * Singleton class for handling the theme's customizer integration.
 *
 * @since  1.0.0
 * @access public
 */
final class Travel_Booking_Offers_Customize {

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
		$manager->register_section_type( 'Travel_Booking_Offers_Customize_Section_Pro' );

		// Register sections.
		$manager->add_section(
			new Travel_Booking_Offers_Customize_Section_Pro(
				$manager,
				'travel_booking_offers_section_pro',
				array(
					'priority'   => 9,
					'title'    => TRAVEL_BOOKING_OFFERS_PRO_THEME_NAME,
					'pro_text' => esc_html__( 'Upgrade Pro', 'travel-booking-offers' ),
					'pro_url'  => esc_url( TRAVEL_BOOKING_OFFERS_PRO_THEME_URL, 'travel-booking-offers' ),
				)
			)
		);

		// Register sections.
		$manager->add_section(
			new travel_booking_offers_Customize_Section_Pro(
				$manager,
				'travel_booking_offers_documentation',
				array(
					'priority'   => 500,
					'title'    => esc_html__( 'Theme Documentation', 'travel-booking-offers' ),
					'pro_text' => esc_html__( 'Click Here', 'travel-booking-offers' ),
					'pro_url'  => esc_url( travel_booking_offers_DOCS_URL, 'travel-booking-offers'),
				)
			)
		);

	}
	/**
	 * Loads theme customizer CSS.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function enqueue_control_scripts() {

		wp_enqueue_script( 'travel-booking-offers-customize-controls', trailingslashit( esc_url( get_template_directory_uri() ) ) . '/assets/js/customize-controls.js', array( 'customize-controls' ) );

		wp_enqueue_style( 'travel-booking-offers-customize-controls', trailingslashit( esc_url( get_template_directory_uri() ) ) . '/assets/css/customize-controls.css' );
	}
}

// Doing this customizer thang!
Travel_Booking_Offers_Customize::get_instance();