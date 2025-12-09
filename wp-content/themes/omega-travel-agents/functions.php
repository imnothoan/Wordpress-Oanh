<?php
/**
 * Omega Travel Agents functions and definitions
 * @package Omega Travel Agents
 */

if ( ! function_exists( 'omega_travel_agents_after_theme_support' ) ) :

	function omega_travel_agents_after_theme_support() {
		
		add_theme_support( 'automatic-feed-links' );

		add_theme_support('woocommerce');
        add_theme_support('wc-product-gallery-zoom');
        add_theme_support('wc-product-gallery-lightbox');
        add_theme_support('wc-product-gallery-slider');
        add_theme_support('woocommerce', array(
            'gallery_thumbnail_image_width' => 300,
        ));

        load_theme_textdomain( 'omega-travel-agents', get_template_directory() . '/languages' );

		add_theme_support(
			'custom-background',
			array(
				'default-color' => 'ffffff',
			)
		);

		$GLOBALS['content_width'] = apply_filters( 'omega_travel_agents_content_width', 1140 );
		
		add_theme_support( 'post-thumbnails' );

		add_theme_support(
			'custom-logo',
			array(
				'height'      => 270,
				'width'       => 90,
				'flex-height' => true,
				'flex-width'  => true,
			)
		);
		
		add_theme_support( 'title-tag' );

		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'script',
				'style',
			)
		);

		add_theme_support( 'post-formats', array(
			'video',  
			'audio',  
			'gallery',
			'quote',  
			'image',  
			'link',   
			'status', 
			'aside',  
			'chat',   
		) );
		
		add_theme_support( 'align-wide' );
		add_theme_support( 'responsive-embeds' );
		add_theme_support( 'wp-block-styles' );

		require get_template_directory() . '/inc/metabox.php';
		require get_template_directory() . '/inc/homepage-setup/homepage-setup-settings.php';

		if (! defined( 'OMEGA_TRAVEL_AGENTS_DOCS_PRO' ) ){
		define('OMEGA_TRAVEL_AGENTS_DOCS_PRO',__('https://layout.omegathemes.com/steps/pro-omega-travel-agents/','omega-travel-agents'));
		}
		if (! defined( 'OMEGA_TRAVEL_AGENTS_BUY_NOW' ) ){
		define('OMEGA_TRAVEL_AGENTS_BUY_NOW',__('https://www.omegathemes.com/products/travel-agents-wordpress-theme','omega-travel-agents'));
		}
		if (! defined( 'OMEGA_TRAVEL_AGENTS_SUPPORT_FREE' ) ){
		define('OMEGA_TRAVEL_AGENTS_SUPPORT_FREE',__('https://wordpress.org/support/theme/omega-travel-agents/','omega-travel-agents'));
		}
		if (! defined( 'OMEGA_TRAVEL_AGENTS_REVIEW_FREE' ) ){
		define('OMEGA_TRAVEL_AGENTS_REVIEW_FREE',__('https://wordpress.org/support/theme/omega-travel-agents/reviews/#new-post/','omega-travel-agents'));
		}
		if (! defined( 'OMEGA_TRAVEL_AGENTS_DEMO_PRO' ) ){
		define('OMEGA_TRAVEL_AGENTS_DEMO_PRO',__('https://layout.omegathemes.com/omega-travel-agents/','omega-travel-agents'));
		}
		if (! defined( 'OMEGA_TRAVEL_AGENTS_LITE_DOCS_PRO' ) ){
		define('OMEGA_TRAVEL_AGENTS_LITE_DOCS_PRO',__('https://layout.omegathemes.com/steps/free-omega-travel-agents/','omega-travel-agents'));
		}
		if (! defined( 'OMEGA_TRAVEL_AGENTS_BUNDLE_BUTTON' ) ){
			define('OMEGA_TRAVEL_AGENTS_BUNDLE_BUTTON',__('https://www.omegathemes.com/products/wp-theme-bundle','omega-travel-agents'));
		}

	}

endif;

add_action( 'after_setup_theme', 'omega_travel_agents_after_theme_support' );

/**
 * Register and Enqueue Styles.
 */
function omega_travel_agents_register_styles() {

	wp_enqueue_style( 'dashicons' );

    $omega_travel_agents_theme_version = wp_get_theme()->get( 'Version' );
	$omega_travel_agents_fonts_url = omega_travel_agents_fonts_url();
    if( $omega_travel_agents_fonts_url ){
    	require_once get_theme_file_path( 'lib/custom/css/wptt-webfont-loader.php' );
        wp_enqueue_style(
			'omega-travel-agents-google-fonts',
			wptt_get_webfont_url( $omega_travel_agents_fonts_url ),
			array(),
			$omega_travel_agents_theme_version
		);
    }

    wp_enqueue_style( 'swiper', get_template_directory_uri() . '/lib/swiper/css/swiper-bundle.min.css');
    wp_enqueue_style( 'owl.carousel', get_template_directory_uri() . '/lib/custom/css/owl.carousel.min.css');
	wp_enqueue_style( 'omega-travel-agents-style', get_stylesheet_uri(), array(), $omega_travel_agents_theme_version );

	wp_enqueue_style( 'omega-travel-agents-style', get_stylesheet_uri() );
	require get_parent_theme_file_path( '/custom_css.php' );
	wp_add_inline_style( 'omega-travel-agents-style',$omega_travel_agents_custom_css );

	$omega_travel_agents_css = '';

	if ( get_header_image() ) :

		$omega_travel_agents_css .=  '
			.main-header{
				background-image: url('.esc_url(get_header_image()).');
				-webkit-background-size: cover !important;
				-moz-background-size: cover !important;
				-o-background-size: cover !important;
				background-size: cover !important;
			}';

	endif;

	wp_add_inline_style( 'omega-travel-agents-style', $omega_travel_agents_css );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}	

	wp_enqueue_script( 'imagesloaded' );
    wp_enqueue_script( 'masonry' );
	wp_enqueue_script( 'swiper', get_template_directory_uri() . '/lib/swiper/js/swiper-bundle.min.js', array('jquery'), '', 1);
	wp_enqueue_script( 'omega-travel-agents-custom', get_template_directory_uri() . '/lib/custom/js/theme-custom-script.js', array('jquery'), '', 1);
	wp_enqueue_script( 'owl.carousel', get_template_directory_uri() . '/lib/custom/js/owl.carousel.js', array('jquery'), '', 1);

    // Global Query
    if( is_front_page() ){

    	$omega_travel_agents_posts_per_page = absint( get_option('posts_per_page') );
        $omega_travel_agents_c_paged = ( get_query_var( 'page' ) ) ? absint( get_query_var( 'page' ) ) : 1;
        $omega_travel_agents_posts_args = array(
            'posts_per_page'        => $omega_travel_agents_posts_per_page,
            'paged'                 => $omega_travel_agents_c_paged,
        );
        $omega_travel_agents_posts_qry = new WP_Query( $omega_travel_agents_posts_args );
        $omega_travel_agents_max = $omega_travel_agents_posts_qry->max_num_pages;

    }else{
        global $wp_query;
        $omega_travel_agents_max = $wp_query->max_num_pages;
        $omega_travel_agents_c_paged = ( get_query_var( 'paged' ) > 1 ) ? get_query_var( 'paged' ) : 1;
    }

    $omega_travel_agents_default = omega_travel_agents_get_default_theme_options();
    $omega_travel_agents_pagination_layout = get_theme_mod( 'omega_travel_agents_pagination_layout',$omega_travel_agents_default['omega_travel_agents_pagination_layout'] );
}

add_action( 'wp_enqueue_scripts', 'omega_travel_agents_register_styles',200 );

function omega_travel_agents_admin_enqueue_scripts_callback() {
    if ( ! did_action( 'wp_enqueue_media' ) ) {
    wp_enqueue_media();
    }
    wp_enqueue_script('omega-travel-agents-uploaderjs', get_stylesheet_directory_uri() . '/lib/custom/js/uploader.js', array(), "1.0", true);
}
add_action( 'admin_enqueue_scripts', 'omega_travel_agents_admin_enqueue_scripts_callback' );

/**
 * Register navigation menus uses wp_nav_menu in five places.
 */
function omega_travel_agents_menus() {

	$omega_travel_agents_locations = array(
		'omega-travel-agents-primary-menu'  => esc_html__( 'Primary Menu', 'omega-travel-agents' ),
	);

	register_nav_menus( $omega_travel_agents_locations );
}

add_action( 'init', 'omega_travel_agents_menus' );

add_filter('loop_shop_columns', 'omega_travel_agents_loop_columns');
if (!function_exists('omega_travel_agents_loop_columns')) {
	function omega_travel_agents_loop_columns() {
		$omega_travel_agents_columns = get_theme_mod( 'omega_travel_agents_per_columns', 3 );
		return $omega_travel_agents_columns;
	}
}

add_filter( 'loop_shop_per_page', 'omega_travel_agents_per_page', 20 );
function omega_travel_agents_per_page( $omega_travel_agents_cols ) {
  	$omega_travel_agents_cols = get_theme_mod( 'omega_travel_agents_product_per_page', 9 );
	return $omega_travel_agents_cols;
}

add_filter( 'woocommerce_output_related_products_args', 'omega_travel_agents_products_args' );

function omega_travel_agents_products_args( $omega_travel_agents_args ) {

    $omega_travel_agents_args['posts_per_page'] = get_theme_mod( 'omega_travel_agents_custom_related_products_number', 6 );

    $omega_travel_agents_args['columns'] = get_theme_mod( 'omega_travel_agents_custom_related_products_number_per_row', 3 );

    return $omega_travel_agents_args;
}

require get_template_directory() . '/inc/custom-header.php';
require get_template_directory() . '/classes/class-svg-icons.php';
require get_template_directory() . '/classes/class-walker-menu.php';
require get_template_directory() . '/inc/customizer/customizer.php';
require get_template_directory() . '/inc/custom-functions.php';
require get_template_directory() . '/inc/template-tags.php';
require get_template_directory() . '/classes/body-classes.php';
require get_template_directory() . '/inc/widgets/widgets.php';
require get_template_directory() . '/inc/pagination.php';
require get_template_directory() . '/lib/breadcrumbs/breadcrumbs.php';
require get_template_directory() . '/lib/custom/css/dynamic-style.php';


function omega_travel_agents_remove_customize_register() {
    global $wp_customize;

    $wp_customize->remove_setting( 'display_header_text' );
    $wp_customize->remove_control( 'display_header_text' );

}

add_action( 'customize_register', 'omega_travel_agents_remove_customize_register', 11 );

// Apply styles based on customizer settings

function omega_travel_agents_radio_sanitize(  $omega_travel_agents_input, $omega_travel_agents_setting  ) {
	$omega_travel_agents_input = sanitize_key( $omega_travel_agents_input );
	$omega_travel_agents_choices = $omega_travel_agents_setting->manager->get_control( $omega_travel_agents_setting->id )->choices;
	return ( array_key_exists( $omega_travel_agents_input, $omega_travel_agents_choices ) ? $omega_travel_agents_input : $omega_travel_agents_setting->default );
}
require get_template_directory() . '/inc/general.php';

function omega_travel_agents_sticky_sidebar_enabled() {
    $omega_travel_agents_sticky_sidebar = get_theme_mod('omega_travel_agents_sticky_sidebar', true);
    
    if ($omega_travel_agents_sticky_sidebar == false) {
        $omega_travel_agents_custom_css = ".widget-area-wrapper { position: relative !important; }";
        wp_add_inline_style('omega-travel-agents-style', $omega_travel_agents_custom_css);
    }
}
add_action('wp_enqueue_scripts', 'omega_travel_agents_sticky_sidebar_enabled');
add_filter( 'woocommerce_enable_setup_wizard', '__return_false' );

// NOTICE FUNCTION

function omega_travel_agents_admin_notice() { 
    global $pagenow;
    $theme_args = wp_get_theme();
    $meta = get_option( 'omega_travel_agents_admin_notice' );
    $name = $theme_args->get( 'Name' );
    $current_screen = get_current_screen();

    if ( ! $meta ) {
        if ( is_network_admin() ) {
            return;
        }

        if ( ! current_user_can( 'manage_options' ) ) {
            return;
        }

        if ( $current_screen->base != 'appearance_page_omegatravelagents-wizard' ) {
            ?>
            <div class="notice notice-success notice-content">
                <h2><?php esc_html_e('Welcome! Thank you for choosing Omega Travel Agents. Let’s Set Up Your Website!', 'omega-travel-agents') ?> </h2>
                <p><?php esc_html_e('Before you dive into customization, let’s go through a quick setup process to ensure everything runs smoothly. Click below to start setting up your website in minutes!', 'omega-travel-agents') ?> </p>
                <div class="info-link">
                    <a href="<?php echo esc_url( admin_url( 'themes.php?page=omegatravelagents-wizard' ) ); ?>"><?php esc_html_e('Get Started with Omega Travel Agents', 'omega-travel-agents'); ?></a>
                </div>
                <p class="dismiss-link"><strong><a href="?omega_travel_agents_admin_notice=1"><?php esc_html_e( 'Dismiss', 'omega-travel-agents' ); ?></a></strong></p>
            </div>
            <?php
        }
    }
}
add_action( 'admin_notices', 'omega_travel_agents_admin_notice' );

if ( ! function_exists( 'omega_travel_agents_update_admin_notice' ) ) :
/**
 * Updating admin notice on dismiss
 */
function omega_travel_agents_update_admin_notice() {
    if ( isset( $_GET['omega_travel_agents_admin_notice'] ) && $_GET['omega_travel_agents_admin_notice'] == '1' ) {
        update_option( 'omega_travel_agents_admin_notice', true );
    }
}
endif;
add_action( 'admin_init', 'omega_travel_agents_update_admin_notice' );

// After Switch theme function
add_action( 'after_switch_theme', 'omega_travel_agents_getstart_setup_options' );
function omega_travel_agents_getstart_setup_options() {
    update_option( 'omega_travel_agents_admin_notice', false );
}