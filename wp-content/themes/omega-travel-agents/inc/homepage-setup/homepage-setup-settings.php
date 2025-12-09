<?php
/**
 * Settings for demo import
 *
 */

/**
 * Define constants
 **/
if ( ! defined( 'WHIZZIE_DIR' ) ) {
	define( 'WHIZZIE_DIR', dirname( __FILE__ ) );
}
require trailingslashit( WHIZZIE_DIR ) . 'homepage-setup-contents.php';
$omega_travel_agents_current_theme = wp_get_theme();
$omega_travel_agents_theme_title = $omega_travel_agents_current_theme->get( 'Name' );


/**
 * Make changes below
 **/

// Change the title and slug of your wizard page
$config['omega_travel_agents_page_slug'] 	= 'omega-travel-agents';
$config['omega_travel_agents_page_title']	= 'Homepage Setup';

$config['steps'] = array(
	'plugins' => array(
		'id'			=> 'plugins',
		'title'			=> __( 'Install and Activate Essential Plugins', 'omega-travel-agents' ),
		'icon'			=> 'admin-plugins',
		'button_text'	=> __( 'Install Plugins', 'omega-travel-agents' ),
		'can_skip'		=> true
	),
	'widgets' => array(
		'id'			=> 'widgets',
		'title'			=> __( 'Setup Home Page', 'omega-travel-agents' ),
		'icon'			=> 'welcome-widgets-menus',
		'button_text'	=> __( 'Start Home Page Setup', 'omega-travel-agents' ),
		'can_skip'		=> true
	),
	'done' => array(
		'id'			=> 'done',
		'title'			=> __( 'Customize Your Site', 'omega-travel-agents' ),
		'icon'			=> 'yes',
	)
);

/**
 * This kicks off the wizard
 **/
if( class_exists( 'Omega_Travel_Agents_Whizzie' ) ) {
	$Omega_Travel_Agents_Whizzie = new Omega_Travel_Agents_Whizzie( $config );
}