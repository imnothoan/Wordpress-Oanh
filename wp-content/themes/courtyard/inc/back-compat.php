<?php
/**
 * Courtyard back compat functionality
 *
 * Prevents Courtyard from running on WordPress versions prior to 4.7,
 * since this theme is not meant to be backward compatible beyond that and
 * relies on many newer functions and markup changes introduced in 5.6.
 *
 * @package Courtyard
 */

/**
 * Prevent switching to Courtyard on old versions of WordPress.
 *
 * Switches to the default theme.
 */
function courtyard_switch_theme() {
	switch_theme( WP_DEFAULT_THEME );
	unset( $_GET['activated'] );
	add_action( 'admin_notices', 'courtyard_upgrade_notice' );
}
add_action( 'after_switch_theme', 'courtyard_switch_theme' );

/**
 * Adds a message for unsuccessful theme switch.
 *
 * Prints an update nag after an unsuccessful attempt to switch to
 * Courtyard on WordPress versions prior to 5.6.
 *
 * @global string $wp_version WordPress version.
 */
function courtyard_upgrade_notice() {
	$message = sprintf( esc_html__( 'Courtyard requires at least WordPress version 5.6. You are running version %s. Please upgrade and try again.', 'courtyard' ), $GLOBALS['wp_version'] );
	printf( '<div class="error"><p>%s</p></div>', $message );
}

/**
 * Prevents the Customizer from being loaded on WordPress versions prior to 5.6.
 *
 * @global string $wp_version WordPress version.
 */
function courtyard_customize() {
	wp_die( sprintf( esc_html__( 'Courtyard requires at least WordPress version 5.6. You are running version %s. Please upgrade and try again.', 'courtyard' ), $GLOBALS['wp_version'] ), '', array(
		'back_link' => true,
	) );
}
add_action( 'load-customize.php', 'courtyard_customize' );

/**
 * Prevents the Theme Preview from being loaded on WordPress versions prior to 5.6.
 *
 * @global string $wp_version WordPress version.
 */
function courtyard_preview() {
	if ( isset( $_GET['preview'] ) ) {
		wp_die( sprintf( esc_html__( 'Courtyard requires at least WordPress version 5.6. You are running version %s. Please upgrade and try again.', 'courtyard' ), $GLOBALS['wp_version'] ) );
	}
}
add_action( 'template_redirect', 'courtyard_preview' );
