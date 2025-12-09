<?php

/**
* Get started notice
*/

add_action( 'wp_ajax_misbah_architecture_blocks_dismissed_notice_handler', 'misbah_architecture_blocks_ajax_notice_handler' );

/**
 * AJAX handler to store the state of dismissible notices.
 */
function misbah_architecture_blocks_ajax_notice_handler() {
    if ( isset( $_POST['type'] ) ) {
        // Pick up the notice "type" - passed via jQuery (the "data-notice" attribute on the notice)
        $type = sanitize_text_field( wp_unslash( $_POST['type'] ) );
        // Store it in the options table
        update_option( 'dismissed-' . $type, TRUE );
    }
}

function misbah_architecture_blocks_deprecated_hook_admin_notice() {
        // Check if it's been dismissed...
        if ( ! get_option('dismissed-get_started', FALSE ) ) {
        $current_screen = get_current_screen();
			if ($current_screen->id !== 'appearance_page_misbah-architecture-blocks-guide-page') {
         $misbah_architecture_blocks_comments_theme = wp_get_theme(); ?>
            <div class="misbah-architecture-blocks-notice-wrapper updated notice notice-get-started-class is-dismissible" data-notice="get_started">
			<div class="misbah-architecture-blocks-notice">
				<div class="misbah-architecture-blocks-notice-content">
					<div class="misbah-architecture-blocks-notice-heading">
						<h2><?php esc_html_e('Thanks For Installing ','misbah-architecture-blocks'); ?><?php echo esc_html( $misbah_architecture_blocks_comments_theme ); ?> <?php esc_html_e('Theme','misbah-architecture-blocks'); ?></h2>
					<p><?php 
                    /* translators: %s: theme name */
                    printf(esc_html__("%s is now installed and ready to use. We've provide some links to get you started.", 'misbah-architecture-blocks'), $misbah_architecture_blocks_comments_theme ); ?></p>
					</div>
					<div class="diplay-flex-btn">
						<a class="button button-primary" href="<?php echo esc_url(admin_url('themes.php?page=misbah-architecture-blocks-guide-page')); ?>"><?php echo esc_html__('GET STARTED','misbah-architecture-blocks'); ?></a>
						<a class="button button-primary" target="_blank" href="<?php echo esc_url( MISBAH_ARCHITECTURE_BLOCKS_BUY_NOW ); ?>"><?php echo esc_html__('GO TO PREMIUM','misbah-architecture-blocks'); ?></a>
					</div>
				</div>
				<div class="misbah-architecture-blocks-notice-img">
					<img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/notification.png'); ?>" alt="<?php esc_attr_e('logo', 'misbah-architecture-blocks'); ?>">
				</div>
			</div>
		</div>
        <?php }
	}
}

add_action( 'admin_notices', 'misbah_architecture_blocks_deprecated_hook_admin_notice' );

function misbah_architecture_blocks_admin_enqueue_scripts() {
	wp_enqueue_style( 'misbah-architecture-blocks-admin-style', esc_url( get_template_directory_uri() ).'/assets/css/main.css' );
	wp_enqueue_script( 'misbah-architecture-blocks-admin-script', get_template_directory_uri() . '/assets/js/misbah-architecture-blocks-admin-script.js', array( 'jquery' ), '', true );
    wp_localize_script( 'misbah-architecture-blocks-admin-script', 'misbah_architecture_blocks_ajax_object',
        array( 'ajax_url' => admin_url( 'admin-ajax.php' ) )
    );
}
add_action( 'admin_enqueue_scripts', 'misbah_architecture_blocks_admin_enqueue_scripts' );

add_action( 'admin_menu', 'misbah_architecture_blocks_getting_started' );
function misbah_architecture_blocks_getting_started() {
	add_theme_page( esc_html__('Get Started', 'misbah-architecture-blocks'), esc_html__('Get Started', 'misbah-architecture-blocks'), 'edit_theme_options', 'misbah-architecture-blocks-guide-page', 'misbah_architecture_blocks_test_guide');
}

if ( ! defined( 'MISBAH_ARCHITECTURE_BLOCKS_DOCS_FREE' ) ) {
define('MISBAH_ARCHITECTURE_BLOCKS_DOCS_FREE',__('https://demo.misbahwp.com/docs/misbah-architecture-blocks-free-docs/','misbah-architecture-blocks'));
}
if ( ! defined( 'MISBAH_ARCHITECTURE_BLOCKS_DOCS_PRO' ) ) {
define('MISBAH_ARCHITECTURE_BLOCKS_DOCS_PRO',__('https://demo.misbahwp.com/docs/misbah-architecture-blocks-pro-docs/','misbah-architecture-blocks'));
}
if ( ! defined( 'MISBAH_ARCHITECTURE_BLOCKS_BUY_NOW' ) ) {
define('MISBAH_ARCHITECTURE_BLOCKS_BUY_NOW',__('https://www.misbahwp.com/products/architecture-wordpress-theme','misbah-architecture-blocks'));
}
if ( ! defined( 'MISBAH_ARCHITECTURE_BLOCKS_SUPPORT_FREE' ) ) {
define('MISBAH_ARCHITECTURE_BLOCKS_SUPPORT_FREE',__('https://wordpress.org/support/theme/misbah-architecture-blocks','misbah-architecture-blocks'));
}
if ( ! defined( 'MISBAH_ARCHITECTURE_BLOCKS_REVIEW_FREE' ) ) {
define('MISBAH_ARCHITECTURE_BLOCKS_REVIEW_FREE',__('https://wordpress.org/support/theme/misbah-architecture-blocks/reviews/#new-post','misbah-architecture-blocks'));
}
if ( ! defined( 'MISBAH_ARCHITECTURE_BLOCKS_DEMO_PRO' ) ) {
define('MISBAH_ARCHITECTURE_BLOCKS_DEMO_PRO',__('https://demo.misbahwp.com/misbah-architecture-blocks/','misbah-architecture-blocks'));
}
if( ! defined( 'MISBAH_ARCHITECTURE_BLOCKS_THEME_BUNDLE' ) ) {
define('MISBAH_ARCHITECTURE_BLOCKS_THEME_BUNDLE',__('https://www.misbahwp.com/products/wordpress-bundle','misbah-architecture-blocks'));
}

function misbah_architecture_blocks_test_guide() { ?>
	<?php $misbah_architecture_blocks_theme = wp_get_theme(); ?>

	<div class="wrap" id="main-page">
		<div id="lefty">
			<div id="admin_links">
				<a href="<?php echo esc_url( MISBAH_ARCHITECTURE_BLOCKS_DOCS_FREE ); ?>" target="_blank" class="blue-button-1"><?php esc_html_e( 'Documentation', 'misbah-architecture-blocks' ) ?></a>
				<a href="<?php echo esc_url( admin_url('customize.php') ); ?>" id="customizer" target="_blank"><?php esc_html_e( 'Customize', 'misbah-architecture-blocks' ); ?> </a>
				<a class="blue-button-1" href="<?php echo esc_url( MISBAH_ARCHITECTURE_BLOCKS_SUPPORT_FREE ); ?>" target="_blank" class="btn3"><?php esc_html_e( 'Support', 'misbah-architecture-blocks' ) ?></a>
				<a class="blue-button-2" href="<?php echo esc_url( MISBAH_ARCHITECTURE_BLOCKS_REVIEW_FREE ); ?>" target="_blank" class="btn4"><?php esc_html_e( 'Review', 'misbah-architecture-blocks' ) ?></a>
			</div>
			<div id="description">
				<h3><?php esc_html_e('Welcome! Thank you for choosing ','misbah-architecture-blocks'); ?><?php echo esc_html( $misbah_architecture_blocks_theme ); ?>  <span><?php esc_html_e('Version: ', 'misbah-architecture-blocks'); ?><?php echo esc_html($misbah_architecture_blocks_theme['Version']);?></span></h3>
				<img class="img_responsive" style="width: 100%;" src="<?php echo esc_url( $misbah_architecture_blocks_theme->get_screenshot() ); ?>" />
				<div id="description-insidee">
					<?php
						$misbah_architecture_blocks_theme = wp_get_theme();
						echo wp_kses_post( apply_filters( 'misbah_theme_description', esc_html( $misbah_architecture_blocks_theme->get( 'Description' ) ) ) );
					?>
				</div>
			</div>
		</div>

		<div id="righty">
			<div class="postboxx donate">
				<h3 class="hndle"><?php esc_html_e( 'Upgrade to Premium', 'misbah-architecture-blocks' ); ?></h3>
				<div class="insidee">
					<p><?php esc_html_e('Discover upgraded pro features with premium version click to upgrade.','misbah-architecture-blocks'); ?></p>
					<div id="admin_pro_links">
						<a class="blue-button-2" href="<?php echo esc_url( MISBAH_ARCHITECTURE_BLOCKS_BUY_NOW ); ?>" target="_blank"><?php esc_html_e( 'Go Pro', 'misbah-architecture-blocks' ); ?></a>
						<a class="blue-button-1" href="<?php echo esc_url( MISBAH_ARCHITECTURE_BLOCKS_DEMO_PRO ); ?>" target="_blank"><?php esc_html_e( 'Live Demo', 'misbah-architecture-blocks' ) ?></a>
						<a class="blue-button-2" href="<?php echo esc_url( MISBAH_ARCHITECTURE_BLOCKS_DOCS_PRO ); ?>" target="_blank"><?php esc_html_e( 'Pro Docs', 'misbah-architecture-blocks' ) ?></a>
					</div>
				</div>
				<h3 class="hndle bundle"><?php esc_html_e( 'Get All Themes', 'misbah-architecture-blocks' ); ?></h3>
				<div class="insidee theme-bundle">
					<img width="100%" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/bundle-image.png' ); ?>" alt="<?php esc_attr_e('logo', 'misbah-architecture-blocks'); ?>">
					<p class="offer"><?php esc_html_e('Get 90+ Perfect WordPress Theme In A Single Package at just $89."','misbah-architecture-blocks'); ?></p>
					<p class="coupon"><?php esc_html_e('Get Our Theme Pack of 90+ WordPress Themes At 15% Off','misbah-architecture-blocks'); ?><span class="coupon-code"><?php esc_html_e('"Bundleup15"','misbah-architecture-blocks'); ?></span></p>
				<div id="admin_pro_linkss">
					<a class="blue-button-1" href="<?php echo esc_url( MISBAH_ARCHITECTURE_BLOCKS_THEME_BUNDLE ); ?>" target="_blank"><?php esc_html_e( 'Buy All Themes - $89', 'misbah-architecture-blocks' ) ?></a>
				</div>
				<div class="d-table">
			    <ul class="d-column">
			      <li class="feature"><?php esc_html_e('Features','misbah-architecture-blocks'); ?></li>
			      <li class="free"><?php esc_html_e('Pro','misbah-architecture-blocks'); ?></li>
			      <li class="plus"><?php esc_html_e('Free','misbah-architecture-blocks'); ?></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('24hrs Priority Support','misbah-architecture-blocks'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-yes"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Advance Posttype','misbah-architecture-blocks'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Section Reordering','misbah-architecture-blocks'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Enable / Disable Option','misbah-architecture-blocks'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-yes"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Multiple Sections','misbah-architecture-blocks'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Advance Color Pallete','misbah-architecture-blocks'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Advance Widgets','misbah-architecture-blocks'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-yes"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Page Templates','misbah-architecture-blocks'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Advance Typography','misbah-architecture-blocks'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Section Background Image / Color ','misbah-architecture-blocks'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
	  		</div>
			</div>
		</div>
	</div>
<?php } ?>