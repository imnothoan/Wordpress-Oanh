<?php
/**
 * Travel Booking Offers functions and definitions
 *
 * @package Travel Booking Offers
 * @subpackage travel_booking_offers
 */

function travel_booking_offers_setup() {

	load_theme_textdomain( 'travel-booking-offers', get_template_directory() . '/languages' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'woocommerce' );
	add_theme_support( 'title-tag' );
	add_theme_support( "responsive-embeds" );
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'align-wide' );
	add_theme_support( 'post-thumbnails' );
	add_image_size( 'travel-booking-offers-featured-image', 2000, 1200, true );
	add_image_size( 'travel-booking-offers-thumbnail-avatar', 100, 100, true );

	// Set the default content width.
	$GLOBALS['content_width'] = 525;

	// This theme uses wp_nav_menu() in two locations.
	register_nav_menus( array(
		'primary-menu'    => __( 'Primary Menu', 'travel-booking-offers' ),
	) );

	// Add theme support for Custom Logo.
	add_theme_support( 'custom-logo', array(
		'width'       => 250,
		'height'      => 250,
		'flex-width'  => true,
    	'flex-height' => true,
	) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	add_theme_support( 'custom-background', array(
		'default-color' => 'ffffff'
	) );

	/*
	 * Enable support for Post Formats.
	 *
	 * See: https://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array('image','video','gallery','audio',) );

	add_theme_support( 'html5', array('comment-form','comment-list','gallery','caption',) );

	/*
	 * This theme styles the visual editor to resemble the theme style,
	 * specifically font, colors, and column width.
 	 */
	add_editor_style( array( 'assets/css/editor-style.css', travel_booking_offers_fonts_url() ) );

	add_theme_support( 'custom-header', apply_filters( 'travel_booking_offers_custom_header_args', array(
        'default-text-color' => 'fff',
        'header-text'        => false,
        'width'              => 1600,
        'height'             => 400,
        'flex-width'         => true,
        'flex-height'        => true,
        'wp-head-callback'   => 'travel_booking_offers_header_style',
        'default-image'      => get_template_directory_uri() . '/assets/images/sliderimage.png',
    ) ) );

	/**
	 * Implement the Custom Header feature.
	 */
	require get_parent_theme_file_path( '/inc/custom-header.php' );

}
add_action( 'after_setup_theme', 'travel_booking_offers_setup' );

/**
 * Register custom fonts.
 */
function travel_booking_offers_fonts_url(){
	$travel_booking_offers_font_url = '';
	$travel_booking_offers_font_family = array();
	$travel_booking_offers_font_family[] = 'Satisfy';
	$travel_booking_offers_font_family[] = 'Manrope:wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900';
	$travel_booking_offers_font_family[] = 'Oxanium:wght@200;300;400;500;600;700;800';
	$travel_booking_offers_font_family[] = 'Oswald:200,300,400,500,600,700';
	$travel_booking_offers_font_family[] = 'Roboto Serif:wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900';
	$travel_booking_offers_font_family[] = 'Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900';
	$travel_booking_offers_font_family[] = 'Bad Script';
	$travel_booking_offers_font_family[] = 'Bebas Neue';
	$travel_booking_offers_font_family[] = 'Fjalla One';
	$travel_booking_offers_font_family[] = 'PT Sans:ital,wght@0,400;0,700;1,400;1,700';
	$travel_booking_offers_font_family[] = 'PT Serif:ital,wght@0,400;0,700;1,400;1,700';
	$travel_booking_offers_font_family[] = 'Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900';
	$travel_booking_offers_font_family[] = 'Roboto Condensed:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700';
	$travel_booking_offers_font_family[] = 'Roboto+Flex:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900';
	$travel_booking_offers_font_family[] = 'Alex Brush';
	$travel_booking_offers_font_family[] = 'Overpass:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900';
	$travel_booking_offers_font_family[] = 'Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900';
	$travel_booking_offers_font_family[] = 'Playball';
	$travel_booking_offers_font_family[] = 'Alegreya:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900';
	$travel_booking_offers_font_family[] = 'Julius Sans One';
	$travel_booking_offers_font_family[] = 'Arsenal:ital,wght@0,400;0,700;1,400;1,700';
	$travel_booking_offers_font_family[] = 'Slabo 13px';
	$travel_booking_offers_font_family[] = 'Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900';
	$travel_booking_offers_font_family[] = 'Overpass Mono:wght@300;400;500;600;700';
	$travel_booking_offers_font_family[] = 'Source Sans Pro:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700;1,900';
	$travel_booking_offers_font_family[] = 'Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900';
	$travel_booking_offers_font_family[] = 'Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900';
	$travel_booking_offers_font_family[] = 'Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900';
	$travel_booking_offers_font_family[] = 'Lora:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700';
	$travel_booking_offers_font_family[] = 'Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700';
	$travel_booking_offers_font_family[] = 'Cabin:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700';
	$travel_booking_offers_font_family[] = 'Arimo:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700';
	$travel_booking_offers_font_family[] = 'Playfair Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900';
	$travel_booking_offers_font_family[] = 'Quicksand:wght@300;400;500;600;700';
	$travel_booking_offers_font_family[] = 'Padauk:wght@400;700';
	$travel_booking_offers_font_family[] = 'Mulish:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;0,1000;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900;1,1000';
	$travel_booking_offers_font_family[] = 'Inconsolata:wght@200;300;400;500;600;700;800;900&family=Mulish:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;0,1000;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900;1,1000';
	$travel_booking_offers_font_family[] = 'Bitter:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Mulish:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;0,1000;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900;1,1000';
	$travel_booking_offers_font_family[] = 'Pacifico';
	$travel_booking_offers_font_family[] = 'Indie Flower';
	$travel_booking_offers_font_family[] = 'VT323';
	$travel_booking_offers_font_family[] = 'Dosis:wght@200;300;400;500;600;700;800';
	$travel_booking_offers_font_family[] = 'Frank Ruhl Libre:wght@300;400;500;700;900';
	$travel_booking_offers_font_family[] = 'Fjalla One';
	$travel_booking_offers_font_family[] = 'Figtree:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900';
	$travel_booking_offers_font_family[] = 'Oxygen:wght@300;400;700';
	$travel_booking_offers_font_family[] = 'Arvo:ital,wght@0,400;0,700;1,400;1,700';
	$travel_booking_offers_font_family[] = 'Noto Serif:ital,wght@0,400;0,700;1,400;1,700';
	$travel_booking_offers_font_family[] = 'Lobster';
	$travel_booking_offers_font_family[] = 'Crimson Text:ital,wght@0,400;0,600;0,700;1,400;1,600;1,700';
	$travel_booking_offers_font_family[] = 'Yanone Kaffeesatz:wght@200;300;400;500;600;700';
	$travel_booking_offers_font_family[] = 'Anton';
	$travel_booking_offers_font_family[] = 'Libre Baskerville:ital,wght@0,400;0,700;1,400';
	$travel_booking_offers_font_family[] = 'Bree Serif';
	$travel_booking_offers_font_family[] = 'Gloria Hallelujah';
	$travel_booking_offers_font_family[] = 'Abril Fatface';
	$travel_booking_offers_font_family[] = 'Varela Round';
	$travel_booking_offers_font_family[] = 'Vampiro One';
	$travel_booking_offers_font_family[] = 'Shadows Into Light';
	$travel_booking_offers_font_family[] = 'Cuprum:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700';
	$travel_booking_offers_font_family[] = 'Rokkitt:wght@100;200;300;400;500;600;700;800;900';
	$travel_booking_offers_font_family[] = 'Vollkorn:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900';
	$travel_booking_offers_font_family[] = 'Francois One';
	$travel_booking_offers_font_family[] = 'Orbitron:wght@400;500;600;700;800;900';
	$travel_booking_offers_font_family[] = 'Patua One';
	$travel_booking_offers_font_family[] = 'Acme';
	$travel_booking_offers_font_family[] = 'Satisfy';
	$travel_booking_offers_font_family[] = 'Josefin Slab:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700';
	$travel_booking_offers_font_family[] = 'Quattrocento Sans:ital,wght@0,400;0,700;1,400;1,700';
	$travel_booking_offers_font_family[] = 'Architects Daughter';
	$travel_booking_offers_font_family[] = 'Russo One';
	$travel_booking_offers_font_family[] = 'Monda:wght@400;700';
	$travel_booking_offers_font_family[] = 'Righteous';
	$travel_booking_offers_font_family[] = 'Lobster Two:ital,wght@0,400;0,700;1,400;1,700';
	$travel_booking_offers_font_family[] = 'Hammersmith One';
	$travel_booking_offers_font_family[] = 'Courgette';
	$travel_booking_offers_font_family[] = 'Permanent Marke';
	$travel_booking_offers_font_family[] = 'Cherry Swash:wght@400;700';
	$travel_booking_offers_font_family[] = 'Cormorant Garamond:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700';
	$travel_booking_offers_font_family[] = 'Poiret One';
	$travel_booking_offers_font_family[] = 'BenchNine:wght@300;400;700';
	$travel_booking_offers_font_family[] = 'Economica:ital,wght@0,400;0,700;1,400;1,700';
	$travel_booking_offers_font_family[] = 'Handlee';
	$travel_booking_offers_font_family[] = 'Cardo:ital,wght@0,400;0,700;1,400';
	$travel_booking_offers_font_family[] = 'Alfa Slab One';
	$travel_booking_offers_font_family[] = 'Averia Serif Libre:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700';
	$travel_booking_offers_font_family[] = 'Cookie';
	$travel_booking_offers_font_family[] = 'Chewy';
	$travel_booking_offers_font_family[] = 'Great Vibes';
	$travel_booking_offers_font_family[] = 'Coming Soon';
	$travel_booking_offers_font_family[] = 'Philosopher:ital,wght@0,400;0,700;1,400;1,700';
	$travel_booking_offers_font_family[] = 'Days One';
	$travel_booking_offers_font_family[] = 'Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900';
	$travel_booking_offers_font_family[] = 'Shrikhand';
	$travel_booking_offers_font_family[] = 'Tangerine:wght@400;700';
	$travel_booking_offers_font_family[] = 'IM Fell English SC';
	$travel_booking_offers_font_family[] = 'Boogaloo';
	$travel_booking_offers_font_family[] = 'Bangers';
	$travel_booking_offers_font_family[] = 'Fredoka One';
	$travel_booking_offers_font_family[] = 'Volkhov:ital,wght@0,400;0,700;1,400;1,700';
	$travel_booking_offers_font_family[] = 'Shadows Into Light Two';
	$travel_booking_offers_font_family[] = 'Marck Script';
	$travel_booking_offers_font_family[] = 'Sacramento';
	$travel_booking_offers_font_family[] = 'Unica One';
	$travel_booking_offers_font_family[] = 'Dancing Script:wght@400;500;600;700';
	$travel_booking_offers_font_family[] = 'Exo 2:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900';
	$travel_booking_offers_font_family[] = 'Archivo:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900';
	$travel_booking_offers_font_family[] = 'Jost:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900';
	$travel_booking_offers_font_family[] = 'DM Serif Display:ital@0;1';
	$travel_booking_offers_font_family[] = 'Open Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800';
	$travel_booking_offers_font_family[] = 'Karla:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,200;1,300;1,400;1,500;1,600;1,700;1,800';

	$travel_booking_offers_query_args = array(
		'family'	=> rawurlencode(implode('|',$travel_booking_offers_font_family)),
	);
	$travel_booking_offers_font_url = add_query_arg($travel_booking_offers_query_args,'//fonts.googleapis.com/css');
	return $travel_booking_offers_font_url;
	$contents = wptt_get_webfont_url( esc_url_raw( $travel_booking_offers_font_url ) );
}

/**
 * Register widget area.
 */
function travel_booking_offers_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Blog Sidebar', 'travel-booking-offers' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Add widgets here to appear in your sidebar on blog posts and archive pages.', 'travel-booking-offers' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Page Sidebar', 'travel-booking-offers' ),
		'id'            => 'sidebar-2',
		'description'   => __( 'Add widgets here to appear in your sidebar on pages.', 'travel-booking-offers' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Sidebar 3', 'travel-booking-offers' ),
		'id'            => 'sidebar-3',
		'description'   => __( 'Add widgets here to appear in your sidebar on blog posts and archive pages.', 'travel-booking-offers' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer 1', 'travel-booking-offers' ),
		'id'            => 'footer-1',
		'description'   => __( 'Add widgets here to appear in your footer.', 'travel-booking-offers' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer 2', 'travel-booking-offers' ),
		'id'            => 'footer-2',
		'description'   => __( 'Add widgets here to appear in your footer.', 'travel-booking-offers' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer 3', 'travel-booking-offers' ),
		'id'            => 'footer-3',
		'description'   => __( 'Add widgets here to appear in your footer.', 'travel-booking-offers' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer 4', 'travel-booking-offers' ),
		'id'            => 'footer-4',
		'description'   => __( 'Add widgets here to appear in your footer.', 'travel-booking-offers' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
}
add_action( 'widgets_init', 'travel_booking_offers_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function travel_booking_offers_scripts() {
	// Add custom fonts, used in the main stylesheet.
	wp_enqueue_style( 'travel-booking-offers-fonts', travel_booking_offers_fonts_url(), array(), null );

	// owl
	wp_enqueue_style( 'owl-carousel-css', get_theme_file_uri( '/assets/css/owl.carousel.css' ) );

	// Bootstrap
	wp_enqueue_style( 'bootstrap-css', get_theme_file_uri( '/assets/css/bootstrap.css' ) );

	// Theme stylesheet.
	wp_enqueue_style( 'travel-booking-offers-style', get_stylesheet_uri() );
	require get_parent_theme_file_path( '/tp-theme-color.php' );
	wp_add_inline_style( 'travel-booking-offers-style',$travel_booking_offers_tp_theme_css );
	wp_style_add_data('travel-booking-offers-style', 'rtl', 'replace');
	require get_parent_theme_file_path( '/tp-body-width-layout.php' );
	wp_add_inline_style( 'travel-booking-offers-style',$travel_booking_offers_tp_theme_css );
	wp_style_add_data('travel-booking-offers-style', 'rtl', 'replace');

	// Theme block stylesheet.
	wp_enqueue_style( 'travel-booking-offers-block-style', get_theme_file_uri( '/assets/css/blocks.css' ), array( 'travel-booking-offers-style' ), '1.0' );

	// Fontawesome
	wp_enqueue_style( 'fontawesome-css', get_theme_file_uri( '/assets/css/fontawesome-all.css' ) );
	

	wp_enqueue_script( 'travel-booking-offers-custom-scripts', get_template_directory_uri() . '/assets/js/travel-booking-offers-custom.js', array('jquery'), true );


	wp_enqueue_script( 'bootstrap-js', get_theme_file_uri( '/assets/js/bootstrap.js' ), array( 'jquery' ), true );

	wp_enqueue_script( 'owl-carousel-js', get_theme_file_uri( '/assets/js/owl.carousel.js' ), array( 'jquery' ), true );

	wp_enqueue_script( 'travel-booking-offers-focus-nav', get_template_directory_uri() . '/assets/js/focus-nav.js', array('jquery'), true);

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	$travel_booking_offers_body_font_family = get_theme_mod('travel_booking_offers_body_font_family', '');

	$travel_booking_offers_heading_font_family = get_theme_mod('travel_booking_offers_heading_font_family', '');

	$travel_booking_offers_menu_font_family = get_theme_mod('travel_booking_offers_menu_font_family', '');

	$travel_booking_offers_tp_theme_css = '
		body, p.simplep, .more-btn a{
		    font-family: '.esc_html($travel_booking_offers_body_font_family).';
		}
		h1,h2, h3, h4, h5, h6, .menubar,.logo h1, .logo p.site-title, p.simplep a, #main-slider p.slidertop-title, .more-btn a,.wc-block-checkout__actions_row .wc-block-components-checkout-place-order-button,.wc-block-cart__submit-container a,.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button,.woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, #theme-sidebar button[type="submit"],
#footer button[type="submit"]{
		    font-family: '.esc_html($travel_booking_offers_heading_font_family).';
		}
	';
	wp_add_inline_style('travel-booking-offers-style', $travel_booking_offers_tp_theme_css);
}
add_action( 'wp_enqueue_scripts', 'travel_booking_offers_scripts' );

/*radio button sanitization*/
function travel_booking_offers_sanitize_choices( $input, $setting ) {
    global $wp_customize;
    $control = $wp_customize->get_control( $setting->id );
    if ( array_key_exists( $input, $control->choices ) ) {
        return $input;
    } else {
        return $setting->default;
    }
}

// Sanitize Sortable control.
function travel_booking_offers_sanitize_sortable( $val, $setting ) {
	if ( is_string( $val ) || is_numeric( $val ) ) {
		return array(
			esc_attr( $val ),
		);
	}
	$sanitized_value = array();
	foreach ( $val as $item ) {
		if ( isset( $setting->manager->get_control( $setting->id )->choices[ $item ] ) ) {
			$sanitized_value[] = esc_attr( $item );
		}
	}
	return $sanitized_value;
}
/* Excerpt Limit Begin */
function travel_booking_offers_excerpt_function($excerpt_count = 35) {
    $travel_booking_offers_excerpt = get_the_excerpt();

    $TRAVEL_BOOKING_OFFERS_TEXT_excerpt = wp_strip_all_tags($travel_booking_offers_excerpt);

    $travel_booking_offers_excerpt_limit = esc_attr(get_theme_mod('travel_booking_offers_excerpt_count', $excerpt_count));

    $travel_booking_offers_theme_excerpt = implode(' ', array_slice(explode(' ', $TRAVEL_BOOKING_OFFERS_TEXT_excerpt), 0, $travel_booking_offers_excerpt_limit));

    return $travel_booking_offers_theme_excerpt;
}

function travel_booking_offers_sanitize_dropdown_pages( $page_id, $setting ) {
  // Ensure $input is an absolute integer.
  $page_id = absint( $page_id );
  // If $page_id is an ID of a published page, return it; otherwise, return the default.
  return ( 'publish' == get_post_status( $page_id ) ? $page_id : $setting->default );
}

// Change number or products per row to 3
add_filter('loop_shop_columns', 'travel_booking_offers_loop_columns');
if (!function_exists('travel_booking_offers_loop_columns')) {
	function travel_booking_offers_loop_columns() {
		$columns = get_theme_mod( 'travel_booking_offers_per_columns', 3 );
		return $columns;
	}
}

// Category count 
function travel_booking_offers_display_post_category_count() {
    $travel_booking_offers_category = get_the_category();
    $travel_booking_offers_category_count = ($travel_booking_offers_category) ? count($travel_booking_offers_category) : 0;
    $travel_booking_offers_category_text = ($travel_booking_offers_category_count === 1) ? 'category' : 'categories'; // Check for pluralization
    echo $travel_booking_offers_category_count . ' ' . $travel_booking_offers_category_text;
}

//post tag
function travel_booking_offers_custom_tags_filter($travel_booking_offers_tag_list) {
    // Replace the comma (,) with an empty string
    $travel_booking_offers_tag_list = str_replace(', ', '', $travel_booking_offers_tag_list);

    return $travel_booking_offers_tag_list;
}
add_filter('the_tags', 'travel_booking_offers_custom_tags_filter');

function travel_booking_offers_custom_output_tags() {
    $travel_booking_offers_tags = get_the_tags();

    if ($travel_booking_offers_tags) {
        $travel_booking_offers_tags_output = '<div class="post_tag">Tags: ';

        $travel_booking_offers_first_tag = reset($travel_booking_offers_tags);

        foreach ($travel_booking_offers_tags as $tag) {
            $travel_booking_offers_tags_output .= '<a href="' . esc_url(get_tag_link($tag)) . '" rel="tag" class="me-2">' . esc_html($tag->name) . '</a>';
            if ($tag !== $travel_booking_offers_first_tag) {
                $travel_booking_offers_tags_output .= ' ';
            }
        }

        $travel_booking_offers_tags_output .= '</div>';

        echo $travel_booking_offers_tags_output;
    }
}
//Change number of products that are displayed per page (shop page)
add_filter( 'loop_shop_per_page', 'travel_booking_offers_per_page', 20 );
function travel_booking_offers_per_page( $travel_booking_offers_cols ) {
  	$travel_booking_offers_cols = get_theme_mod( 'travel_booking_offers_product_per_page', 9 );
	return $travel_booking_offers_cols;
}

function travel_booking_offers_sanitize_number_range( $number, $setting ) {

	// Ensure input is an absolute integer.
	$number = absint( $number );

	// Get the input attributes associated with the setting.
	$atts = $setting->manager->get_control( $setting->id )->input_attrs;

	// Get minimum number in the range.
	$min = ( isset( $atts['min'] ) ? $atts['min'] : $number );

	// Get maximum number in the range.
	$max = ( isset( $atts['max'] ) ? $atts['max'] : $number );

	// Get step.
	$step = ( isset( $atts['step'] ) ? $atts['step'] : 1 );

	// If the number is within the valid range, return it; otherwise, return the default
	return ( $min <= $number && $number <= $max && is_int( $number / $step ) ? $number : $setting->default );
}

function travel_booking_offers_sanitize_checkbox( $input ) {
	// Boolean check
	return ( ( isset( $input ) && true == $input ) ? true : false );
}

function travel_booking_offers_sanitize_phone_number( $phone ) {
	return preg_replace( '/[^\d+]/', '', $phone );
}

function travel_booking_offers_sanitize_number_absint( $number, $setting ) {
	// Ensure $number is an absolute integer (whole number, zero or greater).
	$number = absint( $number );

	// If the input is an absolute integer, return it; otherwise, return the default
	return ( $number ? $number : $setting->default );
}

/**
 * Use front-page.php when Front page displays is set to a static page.
 */
function travel_booking_offers_front_page_template( $template ) {
	return is_home() ? '' : $template;
}
add_filter( 'frontpage_template','travel_booking_offers_front_page_template' );

// logo
function travel_booking_offers_logo_width(){

	$travel_booking_offers_logo_width   = get_theme_mod( 'travel_booking_offers_logo_width', 80 );

	echo "<style type='text/css' media='all'>"; ?>
		img.custom-logo{
		    width: <?php echo absint( $travel_booking_offers_logo_width ); ?>px;
		    max-width: 100%;
		}
	<?php echo "</style>";
}

add_action( 'wp_head', 'travel_booking_offers_logo_width' );

function travel_booking_offers_theme_setup() {

	/**
	 * Custom template tags for this theme.
	 */
	require get_parent_theme_file_path( '/inc/template-tags.php' );

	/**
	 * Additional features to allow styling of the templates.
	 */
	require get_parent_theme_file_path( '/inc/template-functions.php' );

	/**
	 * Customizer additions.
	 */
	require get_parent_theme_file_path( '/inc/customizer.php' );

	/**
	 * Load Theme Web File
	 */
	require get_parent_theme_file_path('/inc/wptt-webfont-loader.php' );
	/**
	 * Load Theme Web File
	 */
	require get_parent_theme_file_path( '/inc/controls/customize-control-toggle.php' );
	/**
	 * load sortable file
	 */
	require get_parent_theme_file_path( '/inc/controls/sortable-control.php' );

	/**
	 * TGM Recommendation
	 */
	require get_parent_theme_file_path( '/inc/TGM/tgm.php' );
	
	/**
	 * About Theme Page
	 */
	require get_parent_theme_file_path( '/inc/about-theme.php' );

	define('TRAVEL_BOOKING_OFFERS_CREDIT',__('https://www.themespride.com/products/travel-booking-offers','travel-booking-offers') );
	if ( ! function_exists( 'travel_booking_offers_credit' ) ) {
		function travel_booking_offers_credit(){
			echo "<a href=".esc_url(TRAVEL_BOOKING_OFFERS_CREDIT)." target='_blank'>".esc_html__(get_theme_mod('travel_booking_offers_footer_text',__('Travel Booking Offers WordPress Theme','travel-booking-offers')))."</a>";
		}
	}

}
add_action( 'after_setup_theme', 'travel_booking_offers_theme_setup' );


//Admin Enqueue for Admin
function travel_booking_offers_admin_enqueue_scripts(){
	wp_enqueue_style('travel-booking-offers-admin-style', get_template_directory_uri() . '/assets/css/admin.css');
	wp_enqueue_script( 'travel-booking-offers-custom-scripts', get_template_directory_uri(). '/assets/js/custom.js', array('jquery'), true);
	wp_register_script( 'travel-booking-offers-admin-script', get_template_directory_uri() . '/assets/js/travel-booking-offers-admin.js', array( 'jquery' ), '', true );

	wp_localize_script(
		'travel-booking-offers-admin-script',
		'travel_booking_offers',
		array(
			'admin_ajax'	=>	admin_url('admin-ajax.php'),
			'wpnonce'			=>	wp_create_nonce('travel_booking_offers_dismissed_notice_nonce')
		)
	);
	wp_enqueue_script('travel-booking-offers-admin-script');

    wp_localize_script( 'travel-booking-offers-admin-script', 'travel_booking_offers_ajax_object',
        array( 'ajax_url' => admin_url( 'admin-ajax.php' ) )
    );
}
add_action( 'admin_enqueue_scripts', 'travel_booking_offers_admin_enqueue_scripts' );

add_action( 'wp_ajax_travel_booking_offers_dismissed_notice_handler', 'travel_booking_offers_ajax_notice_handler' );

function travel_booking_offers_ajax_notice_handler() {
	if (!wp_verify_nonce($_POST['wpnonce'], 'travel_booking_offers_dismissed_notice_nonce')) {
		exit;
	}
    if ( isset( $_POST['type'] ) ) {
        $type = sanitize_text_field( wp_unslash( $_POST['type'] ) );
        update_option( 'dismissed-' . $type, TRUE );
    }
}

function travel_booking_offers_activation_notice() { 

	if ( ! get_option('dismissed-get_started', FALSE ) ) { ?>

    <div class="travel-booking-offers-notice-wrapper updated notice notice-get-started-class is-dismissible" data-notice="get_started">
        <div class="travel-booking-offers-getting-started-notice clearfix">
        	<div class="row-top">
	            <div class="travel-booking-offers-theme-notice-content">
	                <h2 class="travel-booking-offers-notice-h2">
	                    <?php
	                printf(
	                /* translators: 1: welcome page link starting html tag, 2: welcome page link ending html tag. */
	                    esc_html__( 'Install the Demo Import Plugin now to instantly set up your site like the live preview.', 'travel-booking-offers' ), '<strong>'. wp_get_theme()->get('Name'). '</strong>' );
	                ?>
	                </h2>
	                <a class="travel-booking-offers-btn-get-started button button-primary button-hero travel-booking-offers-button-padding" href="<?php echo esc_url( admin_url( 'themes.php?page=travel-booking-offers-about' )); ?>" ><?php esc_html_e( 'Get Started with Travel Booking Offers', 'travel-booking-offers' ) ?></a>
	            </div>
	            <div class="image-box">
			    	<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/theme-notice.png' ); ?>" alt="<?php echo esc_attr__( 'Travel Booking Offers', 'travel-booking-offers' ); ?>" />
				</div>
	        </div>
        </div>
    </div>
<?php }

}
add_action( 'admin_notices', 'travel_booking_offers_activation_notice' );

add_action('after_switch_theme', 'travel_booking_offers_setup_options');
function travel_booking_offers_setup_options () {
    update_option('dismissed-get_started', FALSE );
}
