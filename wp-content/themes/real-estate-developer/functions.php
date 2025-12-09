<?php
/**
 * Real Estate Developer  functions and definitions
 *
 * @package Real Estate Developer 
 */
/* Breadcrumb Begin */
function real_estate_developer_the_breadcrumb() {
	if (!is_home()) {
		echo '<a href="';
			echo esc_url( home_url() );
		echo '">';
			bloginfo('name');
		echo "</a> >> ";
		if (is_category() || is_single()) {
			the_category('>>');
			if (is_single()) {
				echo ">> <span> ";
					the_title();
				echo "</span> ";
			}
		} elseif (is_page()) {
			echo "<span> ";
				the_title();
		}
	}
}
/* Theme Setup */
if ( ! function_exists( 'real_estate_developer_setup' ) ) :
 
function real_estate_developer_setup() {

	$GLOBALS['content_width'] = apply_filters( 'real_estate_developer_content_width', 640 );

	load_theme_textdomain( 'real-estate-developer', get_template_directory() . '/languages' );
	
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'woocommerce' );
	add_theme_support( 'wc-product-gallery-zoom' );
	add_theme_support( 'wc-product-gallery-slider' );
	add_theme_support( 'wc-product-gallery-lightbox' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'align-wide' );
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'html5', array( 'comment-list', 'search-form', 'comment-form', ) );
	add_theme_support( 'custom-logo', array(
		'height'      => 90,
		'width'       => 90,
		'flex-height' => true,
	) );
	add_image_size('real-estate-developer-homepage-thumb',240,145,true);
	
    register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'real-estate-developer' ),
	) );

	add_theme_support( 'custom-background', array(
		'default-color' => 'ffffff'
	) );

	//selective refresh for sidebar and widgets
	add_theme_support( 'customize-selective-refresh-widgets' );

	/*
	 * Enable support for Post Formats.
	 *
	 * See: https://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array('image','video','gallery','audio',) );

	/*
	 * This theme styles the visual editor to resemble the theme style,
	 * specifically font, colors, icons, and column width.
	 */
	add_editor_style( array( 'css/editor-style.css', real_estate_developer_font_url() ) );

	// Theme Activation Notice
	global $pagenow;

	if (is_admin() && ('themes.php' == $pagenow) && isset( $_GET['activated'] )) {
		add_action('admin_notices', 'real_estate_developer_activation_notice');
	}
}
endif;

add_action( 'after_setup_theme', 'real_estate_developer_setup' );

// Notice after Theme Activation
function real_estate_developer_activation_notice() {
	echo '<div class="notice notice-success is-dismissible welcome-notice">';
		echo '<div class="notice-row">';
			echo '<div class="notice-text">';
				echo '<p class="welcome-text1">'. esc_html__( '🎉 Welcome to VW Themes,', 'real-estate-developer' ) .'</p>';
				echo '<p class="welcome-text2">'. esc_html__( 'You are now using the Real Estate Developer, a beautifully designed theme to kickstart your website.', 'real-estate-developer' ) .'</p>';
				echo '<p class="welcome-text3">'. esc_html__( 'To help you get started quickly, use the options below:', 'real-estate-developer' ) .'</p>';
				echo '<span class="import-btn"><a href="'. esc_url( admin_url( 'themes.php?page=real_estate_developer_guide' ) ) .'" class="button button-primary">'. esc_html__( 'DEMO IMPORT', 'real-estate-developer' ) .'</a></span>';
				echo '<span class="demo-btn"><a href="'. esc_url( 'https://www.vwthemes.net/real-estate-developer-pro/' ) .'" class="button button-primary" target=_blank>'. esc_html__( 'VIEW DEMO', 'real-estate-developer' ) .'</a></span>';
				echo '<span class="upgrade-btn"><a href="'. esc_url( 'hhttps://www.vwthemes.com/products/property-developer-wordpress-theme' ) .'" class="button button-primary" target=_blank>'. esc_html__( 'UPGRADE TO PRO', 'real-estate-developer' ) .'</a></span>';
				echo '<span class="bundle-btn"><a href="'. esc_url( 'https://www.vwthemes.com/products/wp-theme-bundle' ) .'" class="button button-primary" target=_blank>'. esc_html__( 'BUNDLE OF 350+ THEMES', 'real-estate-developer' ) .'</a></span>';
			echo '</div>';
			echo '<div class="notice-img1">';
				echo '<img src="' . esc_url( get_template_directory_uri() . '/inc/getstart/images/arrow-notice.png' ) . '" width="180" alt="' . esc_attr__( 'Real Estate Developer', 'real-estate-developer' ) . '" />';
			echo '</div>';
			echo '<div class="notice-img2">';
				echo '<img src="' . esc_url( get_template_directory_uri() . '/inc/getstart/images/bundle-notice.png' ) . '" width="180" alt="' . esc_attr__( 'Real Estate Developer', 'real-estate-developer' ) . '" />';
			echo '</div>';	
		echo '</div>';	
	echo '</div>';
}

/* Theme Widgets Setup */
function real_estate_developer_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Blog Sidebar', 'real-estate-developer' ),
		'description'   => __( 'Appears on blog page sidebar', 'real-estate-developer' ),
		'id'            => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget p-3 %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title py-2 px-3">',
		'after_title'   => '</h3>',
	) );
	
	register_sidebar( array(
		'name'          => __( 'Page Sidebar', 'real-estate-developer' ),
		'description'   => __( 'Appears on page sidebar', 'real-estate-developer' ),
		'id'            => 'sidebar-2',
		'before_widget' => '<aside id="%1$s" class="widget p-3 %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title py-2 px-3">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Sidebar 3', 'real-estate-developer' ),
		'description'   => __( 'Appears on page sidebar', 'real-estate-developer' ),
		'id'            => 'sidebar-3',
		'before_widget' => '<aside id="%1$s" class="widget mb-5 p-3 %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title py-3 px-4">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer Navigation 1', 'real-estate-developer' ),
		'description'   => __( 'Appears on footer 1', 'real-estate-developer' ),
		'id'            => 'footer-1',
		'before_widget' => '<aside id="%1$s" class="widget py-3 %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title px-0 py-2">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer Navigation 2', 'real-estate-developer' ),
		'description'   => __( 'Appears on footer 2', 'real-estate-developer' ),
		'id'            => 'footer-2',
		'before_widget' => '<aside id="%1$s" class="widget py-3 %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title px-0 py-2">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer Navigation 3', 'real-estate-developer' ),
		'description'   => __( 'Appears on footer 3', 'real-estate-developer' ),
		'id'            => 'footer-3',
		'before_widget' => '<aside id="%1$s" class="widget py-3 %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title px-0 py-2">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer Navigation 4', 'real-estate-developer' ),
		'description'   => __( 'Appears on footer 4', 'real-estate-developer' ),
		'id'            => 'footer-4',
		'before_widget' => '<aside id="%1$s" class="widget py-3 %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title px-0 py-2">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Shop Page Sidebar', 'real-estate-developer' ),
		'description'   => __( 'Appears on shop page', 'real-estate-developer' ),
		'id'            => 'woocommerce-shop-sidebar',
		'before_widget' => '<aside id="%1$s" class="widget p-3 %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title px-3 py-2">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Single Product Sidebar', 'real-estate-developer' ),
		'description'   => __( 'Appears on single product page', 'real-estate-developer' ),
		'id'            => 'woocommerce-single-sidebar',
		'before_widget' => '<aside id="%1$s" class="widget p-3 %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title px-3 py-2">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer Social Icon', 'real-estate-developer' ),
		'description'   => __( 'Appears on footer', 'real-estate-developer' ),
		'id'            => 'footer-icon',
		'before_widget' => '<aside id="%1$s" class="widget mb-5 p-3 %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title px-3 py-2">',
		'after_title'   => '</h3>',
	) );
}
add_action( 'widgets_init', 'real_estate_developer_widgets_init' );

/* Theme Font URL */
function real_estate_developer_font_url() {
	$font_family   = array(
		'ABeeZee:ital@0;1',
		'Abril Fatfac',
		'Acme',
		'Allura',
		'Amatic SC:wght@400;700',
		'Anton',
		'Architects Daughter',
		'Archivo:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900',
		'Arimo:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700',
		'Arsenal:ital,wght@0,400;0,700;1,400;1,700',
		'Arvo:ital,wght@0,400;0,700;1,400;1,700',
		'Alegreya:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900',
		'Asap:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900',
		'Assistant:wght@200;300;400;500;600;700;800',
		'Alfa Slab One',
		'Averia Serif Libre:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700',
		'Bebas Neue',
		'Bangers',
		'Boogaloo',
		'Bad Script',
		'Barlow:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900',
		'Barlow Condensed:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900',
		'Berkshire Swash',
		'Bitter:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900',
		'Bree Serif',
		'BenchNine:wght@300;400;700',
		'Cabin:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700',
		'Cardo:ital,wght@0,400;0,700;1,400',
		'Courgette',
		'Caveat:wght@400;500;600;700',
		'Caveat Brush',
		'Cherry Swash:wght@400;700',
		'Cormorant Garamond:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700',
		'Crimson Text:ital,wght@0,400;0,600;0,700;1,400;1,600;1,700',
		'Cuprum:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700',
		'Cookie',
		'Coming Soon',
		'Charm:wght@400;700',
		'Chewy',
		'Days One',
		'DM Serif Display:ital@0;1',
		'Dosis:wght@200;300;400;500;600;700;800',
		'EB Garamond:ital,wght@0,400;0,500;0,600;0,700;0,800;1,400;1,500;1,600;1,700;1,800',
		'Economica:ital,wght@0,400;0,700;1,400;1,700',
		'Epilogue:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900',
		'Exo 2:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900',
		'Familjen Grotesk:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700',
		'Fira Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900',
		'Fredoka One',
		'Fjalla One',
		'Francois One',
		'Frank Ruhl Libre:wght@300;400;500;700;900',
		'Gabriela',
		'Gloria Hallelujah',
		'Great Vibes',
		'Handlee',
		'Hammersmith One',
		'Heebo:wght@100;200;300;400;500;600;700;800;900',
		'Hind:wght@300;400;500;600;700',
		'Inconsolata:wght@200;300;400;500;600;700;800;900',
		'Indie Flower',
		'IM Fell English SC',
		'Julius Sans One',
		'Jomhuria',
		'Josefin Slab:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700',
		'Josefin Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700',
		'Jost:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900',
		'Kaisei HarunoUmi:wght@400;500;700',
		'Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900',
		'Kaushan Script',
		'Krub:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;1,200;1,300;1,400;1,500;1,600;1,700',
		'Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900',
		'Lora:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700',
		'Libre Baskerville:ital,wght@0,400;0,700;1,400',
		'Lobster',
		'Lobster Two:ital,wght@0,400;0,700;1,400;1,700',
		'Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900',
		'Monda:wght@400;700',
		'Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900',
		'Mulish:ital,wght@0,200..1000;1,200..1000',
		'Marck Script',
		'Marcellus',
		'Merienda One',
		'Monda:wght@400;700',
		'Noto Serif:ital,wght@0,400;0,700;1,400;1,700',
		'Nunito Sans:ital,wght@0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,600;1,700;1,800;1,900',
		'Open Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800',
		'Overpass:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900',
		'Overpass Mono:wght@300;400;500;600;700',
		'Oxygen:wght@300;400;700',
		'Oswald:wght@200;300;400;500;600;700',
		'Orbitron:wght@400;500;600;700;800;900',
		'Patua One',
		'Pacifico',
		'Padauk:wght@400;700',
		'Playball',
		'Playfair Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900',
		'Prompt:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900',
		'PT Sans:ital,wght@0,400;0,700;1,400;1,700',
		'PT Serif:ital,wght@0,400;0,700;1,400;1,700',
		'Philosopher:ital,wght@0,400;0,700;1,400;1,700',
		'Permanent Marker',
		'Poiret One',
		'Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900',
		'Prata',
		'Quicksand:wght@300;400;500;600;700',
		'Quattrocento Sans:ital,wght@0,400;0,700;1,400;1,700',
		'Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900',
		'Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900',
		'Roboto Condensed:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700',
		'Rokkitt:wght@100;200;300;400;500;600;700;800;900',
		'Ropa Sans:ital@0;1',
		'Russo One',
		'Righteous',
		'Saira:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900',
		'Satisfy',
		'Sen:wght@400;700;800',
		'Slabo 13px',
		'Slabo 27px',
		'Source Sans Pro:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700;1,900',
		'Shadows Into Light Two',
		'Shadows Into Light',
		'Sacramento',
		'Sail',
		'Shrikhand',
		'League Spartan:wght@100;200;300;400;500;600;700;800;900',
		'Staatliches',
		'Stylish',
		'Tangerine:wght@400;700',
		'Titillium Web:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700',
		'Trirong:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900',
		'Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700',
		'Unica One',
		'VT323',
		'Varela Round',
		'Vampiro One',
		'Vollkorn:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900',
		'Volkhov:ital,wght@0,400;0,700;1,400;1,700',
		'Work Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900',
		'Yanone Kaffeesatz:wght@200;300;400;500;600;700',
		'Yeseva One',
		'ZCOOL XiaoWei',
		'League Spartan:wght@100;200;300;400;500;600;700;800;900',
		'Outfit:wght@100;200;300;400;500;600;700;800;900',
		'Urbanist:ital,wght@0,100..900;1,100..900',
		'Manrope:wght@200..800',
		'Fredoka:wght@300;400;500;600;700',
		'Sen:wght@400..800',
		'Inter Tight:ital,wght@0,100..900;1,100..900',
		'Kaushan Script',
		'Figtree:ital,wght@0,300..900;1,300..900',
		'Kalam:wght@300;400;700',
		'Space Grotesk:wght@300..700',
		'Rum Raisin',
		'Nunito:ital,wght@0,200..1000;1,200..1000',
		'Radio Canada:ital,wght@0,300..700;1,300..700'
	 );
	
	$query_args = array(
		'family'	=> rawurlencode(implode('|',$font_family)),
	);
	$font_url = add_query_arg($query_args,'//fonts.googleapis.com/css');
	return $font_url;
	$contents = real_estate_developer_wptt_get_webfont_url( esc_url_raw( $fonts_url ) );
}

/* Theme enqueue scripts */
function real_estate_developer_scripts() {
	wp_enqueue_style( 'real-estate-developer-font', real_estate_developer_font_url(), array() );
	wp_enqueue_style( 'bootstrap-style', get_template_directory_uri().'/assets/css/bootstrap.css' );
	wp_enqueue_style( 'real-estate-developer-block-style', get_theme_file_uri('/assets/css/blocks.css') );
	wp_enqueue_style( 'animate-style', get_template_directory_uri().'/assets/css/animate.css' );
	wp_enqueue_style( 'real-estate-developer-basic-style', get_stylesheet_uri() );
	wp_style_add_data('real-estate-developer-basic-style', 'rtl', 'replace');
	/* Inline style sheet */
	require get_parent_theme_file_path( '/custom-style.php' );
	wp_add_inline_style( 'real-estate-developer-basic-style',$real_estate_developer_custom_css );
	wp_enqueue_style( 'font-awesome-css', get_template_directory_uri().'/assets/css/fontawesome-all.css' );
	wp_enqueue_script( 'bootstrap-js', get_template_directory_uri(). '/assets/js/bootstrap.js', array('jquery') ,'',true);
	wp_enqueue_script( 'real-estate-developer-custom-scripts', get_template_directory_uri() . '/assets/js/custom.js', array('jquery'),'' ,true );
	if (get_theme_mod('real_estate_developer_animation', true) == true){
		wp_enqueue_script( 'wow-jquery', get_template_directory_uri() . '/assets/js/wow.js', array('jquery'),'' ,true );
		wp_enqueue_style( 'animate-style', get_template_directory_uri().'/assets/css/animate.css' );
	}		
	wp_enqueue_style('swiper-css', esc_url(get_template_directory_uri())."/assets/css/swiper-bundle.css");
    wp_enqueue_script('swiper-js', esc_url(get_template_directory_uri()). '/assets/js/swiper-bundle.js', array('jquery'));
	
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	/* Enqueue the Dashicons script */
	wp_enqueue_style( 'dashicons' );
}
add_action( 'wp_enqueue_scripts', 'real_estate_developer_scripts' );

function real_estate_developer_sanitize_choices( $input, $setting ) {
    global $wp_customize; 
    $control = $wp_customize->get_control( $setting->id ); 
    if ( array_key_exists( $input, $control->choices ) ) {
        return $input;
    } else {
        return $setting->default;
    }
}

function real_estate_developer_sanitize_number_range( $number, $setting ) {
	
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

function real_estate_developer_sanitize_phone_number( $phone ) {
	return preg_replace( '/[^\d+]/', '', $phone );
}

function real_estate_developer_sanitize_number_absint( $number, $setting ) {
	// Ensure $number is an absolute integer (whole number, zero or greater).
	$number = absint( $number );
	
	// If the input is an absolute integer, return it; otherwise, return the default
	return ( $number ? $number : $setting->default );
}

/* Excerpt Limit Begin */
function real_estate_developer_string_limit_words($string, $word_limit) {
	$words = explode(' ', $string, ($word_limit + 1));
	if(count($words) > $word_limit)
	array_pop($words);
	return implode(' ', $words);
}

if ( ! function_exists( 'real_estate_developer_switch_sanitization' ) ) {
	function real_estate_developer_switch_sanitization( $input ) {
		if ( true === $input ) {
			return 1;
		} else {
			return 0;
		}
	}
}

function real_estate_developer_sanitize_float( $input ) {
	return filter_var($input, FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
}

// Change number or products per row to 3
add_filter('loop_shop_columns', 'real_estate_developer_loop_columns');
	if (!function_exists('real_estate_developer_loop_columns')) {
	function real_estate_developer_loop_columns() {
		return get_theme_mod( 'real_estate_developer_products_per_row', 4 );
		// 3 products per row
	}
}

//Change number of products that are displayed per page (shop page)
add_filter( 'loop_shop_per_page', 'real_estate_developer_products_per_page' );
function real_estate_developer_products_per_page( $cols ) {
  	return  get_theme_mod( 'real_estate_developer_products_per_page',9);
}

function real_estate_developer_logo_title_hide_show(){
	if(get_theme_mod('real_estate_developer_logo_title_hide_show') == '1' ) {
		return true;
	}
	return false;
}

function real_estate_developer_tagline_hide_show(){
	if(get_theme_mod('real_estate_developer_tagline_hide_show',0) == '1' ) {
		return true;
	}
	return false;
}

function real_estate_developer_blog_post_featured_image_dimension(){
	if(get_theme_mod('real_estate_developer_blog_post_featured_image_dimension') == 'custom' ) {
		return true;
	}
	return false;
}

if (!function_exists('real_estate_developer_edit_link')) :

function real_estate_developer_edit_link($view = 'default'){
    global $post;
    edit_post_link(
        sprintf(
            wp_kses(
            /* translators: %s: Name of current post. Only visible to screen readers */
                __('Edit <span class="screen-reader-text">%s</span>', 'real-estate-developer'),
                array(
                    'span' => array(
                        'class' => array(),
                    ),
                )
            ),
            get_the_title()
        ),
        '<span class="edit-link"><i class="fas fa-edit"></i>',
        '</span>'
    );
}
endif;

function real_estate_developer_theme_init() {
	define('REAL_ESTATE_DEVELOPER_FREE_THEME_DOC',__('https://preview.vwthemesdemo.com/docs/free-real-estate-developer/','real-estate-developer'));
	define('REAL_ESTATE_DEVELOPER_SUPPORT',__('https://wordpress.org/support/theme/real-estate-developer/','real-estate-developer'));
	define('REAL_ESTATE_DEVELOPER_REVIEW',__('https://wordpress.org/support/theme/real-estate-developer/reviews/','real-estate-developer'));
	define('REAL_ESTATE_DEVELOPER_BUY_NOW',__('https://www.vwthemes.com/products/property-developer-wordpress-theme','real-estate-developer'));
	define('REAL_ESTATE_DEVELOPER_LIVE_DEMO',__('https://www.vwthemes.net/real-estate-developer-pro/','real-estate-developer'));
	define('REAL_ESTATE_DEVELOPER_PRO_DOC',__('https://preview.vwthemesdemo.com/docs/real-estate-developer-pro/','real-estate-developer'));
	define('REAL_ESTATE_DEVELOPER_FAQ',__('https://www.vwthemes.com/faqs/','real-estate-developer'));
	define('REAL_ESTATE_DEVELOPER_CHILD_THEME',__('https://developer.wordpress.org/themes/advanced-topics/child-themes/','real-estate-developer'));
	define('REAL_ESTATE_DEVELOPER_CONTACT',__('https://www.vwthemes.com/contact/','real-estate-developer'));
	define('REAL_ESTATE_DEVELOPER_CREDIT',__('https://www.vwthemes.com/products/real-estate-developer-wordpress-theme','real-estate-developer'));
	define('REAL_ESTATE_DEVELOPER_THEME_BUNDLE_BUY_NOW',__('https://www.vwthemes.com/products/wp-theme-bundle','real-estate-developer'));
	define('REAL_ESTATE_DEVELOPER_THEME_BUNDLE_DOC',__('https://preview.vwthemesdemo.com/docs/theme-bundle/','real-estate-developer'));

	if ( ! function_exists( 'real_estate_developer_credit' ) ) {
		function real_estate_developer_credit(){
			echo "<a href=".esc_url(REAL_ESTATE_DEVELOPER_CREDIT)." target='_blank'>".esc_html__('Real Estate Developer WordPress Theme','real-estate-developer')."</a>";
		}
	}

	/* Custom template tags for this theme. */
	require get_template_directory() . '/inc/template-tags.php';

	/* Customizer additions. */
	require get_template_directory() . '/inc/customizer.php';

	/* Typography */
	require get_template_directory() . '/inc/typography/ctypo.php';

	/* Plugin Activation */
	require get_template_directory() . '/inc/getstart/plugin-activation.php';

	/* Implement the About theme page */
	require get_template_directory() . '/inc/getstart/getstart.php';

	/* TGM Plugin Activation */
	require get_template_directory() . '/inc/tgm/tgm.php';

	/* Webfonts */
	require get_template_directory() . '/inc/wptt-webfont-loader.php';

	/* Social Icons */
	require get_template_directory() . '/inc/themes-widgets/social-icon.php';

	/* Customizer additions. */
	require get_template_directory() . '/inc/themes-widgets/about-us-widget.php';

	/* Customizer additions. */
	require get_template_directory() . '/inc/themes-widgets/contact-us-widget.php';
}
add_action( 'after_setup_theme', 'real_estate_developer_theme_init' );

/* Implement the Custom Header feature. */
require get_template_directory() . '/inc/custom-header.php';
