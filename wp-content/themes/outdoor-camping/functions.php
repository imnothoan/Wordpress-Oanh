<?php
/**
 * Outdoor Camping functions and definitions
 *
 * @package outdoor_camping
 * @since 1.0
 */

if ( ! function_exists( 'outdoor_camping_support' ) ) :
	function outdoor_camping_support() {

		load_theme_textdomain( 'outdoor-camping', get_template_directory() . '/languages' );

		// Add support for block styles.
		add_theme_support( 'wp-block-styles' );

		add_theme_support('woocommerce');

		// Enqueue editor styles.
		add_editor_style(get_stylesheet_directory_uri() . '/assets/css/editor-style.css');

		/* Theme Credit link */
		define('OUTDOOR_CAMPING_BUY_NOW',__('https://www.cretathemes.com/products/camping-wordpress-theme','outdoor-camping'));
		define('OUTDOOR_CAMPING_PRO_DEMO',__('https://pattern.cretathemes.com/outdoor-camping/','outdoor-camping'));
		define('OUTDOOR_CAMPING_THEME_DOC',__('https://pattern.cretathemes.com/free-guide/outdoor-camping/','outdoor-camping'));
		define('OUTDOOR_CAMPING_PRO_THEME_DOC',__('https://pattern.cretathemes.com/pro-guide/outdoor-camping/','outdoor-camping'));
		define('OUTDOOR_CAMPING_SUPPORT',__('https://wordpress.org/support/theme/outdoor-camping/','outdoor-camping'));
		define('OUTDOOR_CAMPING_REVIEW',__('https://wordpress.org/support/theme/outdoor-camping/reviews/#new-post','outdoor-camping'));
		define('OUTDOOR_CAMPING_PRO_THEME_BUNDLE',__('https://www.cretathemes.com/products/wordpress-theme-bundle','outdoor-camping'));
		define('OUTDOOR_CAMPING_PRO_ALL_THEMES',__('https://www.cretathemes.com/collections/wordpress-block-themes','outdoor-camping'));

	}
endif;

add_action( 'after_setup_theme', 'outdoor_camping_support' );

if ( ! function_exists( 'outdoor_camping_styles' ) ) :
	function outdoor_camping_styles() {
		// Register theme stylesheet.
		$outdoor_camping_theme_version = wp_get_theme()->get( 'Version' );

		$outdoor_camping_version_string = is_string( $outdoor_camping_theme_version ) ? $outdoor_camping_theme_version : false;
		wp_enqueue_style(
			'outdoor-camping-style',
			get_template_directory_uri() . '/style.css',
			array(),
			$outdoor_camping_version_string
		);

		wp_enqueue_style( 'dashicons' );

		wp_enqueue_style( 'animate-css', esc_url(get_template_directory_uri()).'/assets/css/animate.css' );

		wp_enqueue_script( 'jquery-wow', esc_url(get_template_directory_uri()) . '/assets/js/wow.js', array('jquery') );

		wp_style_add_data( 'outdoor-camping-style', 'rtl', 'replace' );

		

		// Enqueue Swiper CSS
		wp_enqueue_style(
		    'swiper-bundle-style',
		    get_template_directory_uri() . '/assets/css/swiper-bundle.css',
		    array(),
		    $outdoor_camping_version_string
		);

		// Enqueue Swiper JS
		wp_enqueue_script(
		    'swiper-bundle-scripts',
		    get_template_directory_uri() . '/assets/js/swiper-bundle.js',
		    array('jquery'),
		    $outdoor_camping_version_string,
		    true
		);

		// Enqueue Custom Script (depends on Swiper too)
		wp_enqueue_script(
		    'outdoor-camping-custom-script',
		    get_template_directory_uri() . '/assets/js/custom-script.js',
		    array('jquery', 'swiper-bundle-scripts'),
		    $outdoor_camping_version_string,
		    true
		);
	}
endif;

add_action( 'wp_enqueue_scripts', 'outdoor_camping_styles' );

/* Enqueue admin-notice-script js */
add_action('admin_enqueue_scripts', function ($hook) {
    if ($hook !== 'appearance_page_outdoor-camping') return;

    wp_enqueue_script('admin-notice-script', get_template_directory_uri() . '/get-started/js/admin-notice-script.js', ['jquery'], null, true);
    wp_localize_script('admin-notice-script', 'pluginInstallerData', [
        'ajaxurl'     => admin_url('admin-ajax.php'),
        'nonce'       => wp_create_nonce('install_cretatestimonial_nonce'), // Match this with PHP nonce check
        'redirectUrl' => admin_url('themes.php?page=outdoor-camping-guide-page'),
    ]);
});

add_action('wp_ajax_check_creta_testimonial_activation', function () {
    include_once ABSPATH . 'wp-admin/includes/plugin.php';
    $outdoor_camping_plugin_file = 'creta-testimonial-showcase/creta-testimonial-showcase.php';

    if (is_plugin_active($outdoor_camping_plugin_file)) {
        wp_send_json_success(['active' => true]);
    } else {
        wp_send_json_success(['active' => false]);
    }
});

// Add block patterns
require get_template_directory() . '/inc/block-patterns.php';

// Add block styles
require get_template_directory() . '/inc/block-styles.php';

// Block Filters
require get_template_directory() . '/inc/block-filters.php';

// Svg icons
require get_template_directory() . '/inc/icon-function.php';

// TGM
require_once get_template_directory() . '/inc/tgm/tgm.php';

// Customizer
require get_template_directory() . '/inc/customizer.php';

// Get Started.
require get_template_directory() . '/inc/get-started/get-started.php';

// Add Getstart admin notice
function outdoor_camping_admin_notice() { 
    global $pagenow;
    $theme_args      = wp_get_theme();
    $meta            = get_option( 'outdoor_camping_admin_notice' );
    $name            = $theme_args->__get( 'Name' );
    $current_screen  = get_current_screen();

    if( !$meta ){
	    if( is_network_admin() ){
	        return;
	    }

	    if( ! current_user_can( 'manage_options' ) ){
	        return;
	    } if($current_screen->base != 'appearance_page_outdoor-camping-guide-page' && $current_screen->base != 'toplevel_page_cretats-theme-showcase' ) { ?>

	    <div class="notice notice-success dash-notice">
	        <h1><?php esc_html_e('Hey, Thank you for installing Outdoor Camping Theme!', 'outdoor-camping'); ?></h1>
	        <p> <a href="javascript:void(0);" id="install-activate-button" class="button admin-button info-button get-start-btn">
				   <?php echo __('Nevigate Getstart', 'outdoor-camping'); ?>
				</a>

				<script type="text/javascript">
				document.getElementById('install-activate-button').addEventListener('click', function () {
				    const outdoor_camping_button = this;
				    const outdoor_camping_redirectUrl = '<?php echo esc_url(admin_url("themes.php?page=outdoor-camping-guide-page")); ?>';
				    // First, check if plugin is already active
				    jQuery.post(ajaxurl, { action: 'check_creta_testimonial_activation' }, function (response) {
				        if (response.success && response.data.active) {
				            // Plugin already active — just redirect
				            window.location.href = outdoor_camping_redirectUrl;
				        } else {
				            // Show Installing & Activating only if not already active
				            outdoor_camping_button.textContent = 'Nevigate Getstart';

				            jQuery.post(ajaxurl, {
				                action: 'install_and_activate_creta_testimonial_plugin',
				                nonce: '<?php echo wp_create_nonce("install_activate_nonce"); ?>'
				            }, function (response) {
				                if (response.success) {
				                    window.location.href = outdoor_camping_redirectUrl;
				                } else {
				                    alert('Failed to activate the plugin.');
				                    outdoor_camping_button.textContent = 'Try Again';
				                }
				            });
				        }
				    });
				});
				</script>


	        	<a class="button button-primary site-edit" href="<?php echo esc_url( admin_url( 'site-editor.php' ) ); ?>"><?php esc_html_e('Site Editor', 'outdoor-camping'); ?></a> 
				<a class="button button-primary buy-now-btn" href="<?php echo esc_url( OUTDOOR_CAMPING_BUY_NOW ); ?>" target="_blank"><?php esc_html_e('Buy Pro', 'outdoor-camping'); ?></a>
				<a class="button button-primary bundle-btn" href="<?php echo esc_url( OUTDOOR_CAMPING_PRO_THEME_BUNDLE ); ?>" target="_blank"><?php esc_html_e('Get Bundle', 'outdoor-camping'); ?></a>
	        </p>
	        <p class="dismiss-link"><strong><a href="?outdoor_camping_admin_notice=1"><?php esc_html_e( 'Dismiss', 'outdoor-camping' ); ?></a></strong></p>
	    </div>
	    <?php

	}?>
	    <?php

	}
}

add_action( 'admin_notices', 'outdoor_camping_admin_notice' );

if( ! function_exists( 'outdoor_camping_update_admin_notice' ) ) :
/**
 * Updating admin notice on dismiss
*/
function outdoor_camping_update_admin_notice(){
    if ( isset( $_GET['outdoor_camping_admin_notice'] ) && $_GET['outdoor_camping_admin_notice'] = '1' ) {
        update_option( 'outdoor_camping_admin_notice', true );
    }
}
endif;
add_action( 'admin_init', 'outdoor_camping_update_admin_notice' );

//After Switch theme function
add_action('after_switch_theme', 'outdoor_camping_getstart_setup_options');
function outdoor_camping_getstart_setup_options () {
    update_option('outdoor_camping_admin_notice', FALSE );
}