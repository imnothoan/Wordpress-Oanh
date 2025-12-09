<?php
/**
* Widget Functions.
*
* @package Omega Travel Agents
*/

function omega_travel_agents_widgets_init(){

	register_sidebar(array(
	    'name' => esc_html__('Main Sidebar', 'omega-travel-agents'),
	    'id' => 'sidebar-1',
	    'description' => esc_html__('Add widgets here.', 'omega-travel-agents'),
	    'before_widget' => '<div id="%1$s" class="widget %2$s">',
	    'after_widget' => '</div>',
	    'before_title' => '<h3 class="widget-title"><span>',
	    'after_title' => '</span></h3>',
	));


    $omega_travel_agents_default = omega_travel_agents_get_default_theme_options();
    $omega_travel_agents_footer_column_layout = absint( get_theme_mod( 'omega_travel_agents_footer_column_layout',$omega_travel_agents_default['omega_travel_agents_footer_column_layout'] ) );

    for( $omega_travel_agents_i = 0; $omega_travel_agents_i < $omega_travel_agents_footer_column_layout; $omega_travel_agents_i++ ){
    	
    	if( $omega_travel_agents_i == 0 ){ $omega_travel_agents_count = esc_html__('One','omega-travel-agents'); }
    	if( $omega_travel_agents_i == 1 ){ $omega_travel_agents_count = esc_html__('Two','omega-travel-agents'); }
    	if( $omega_travel_agents_i == 2 ){ $omega_travel_agents_count = esc_html__('Three','omega-travel-agents'); }

	    register_sidebar( array(
	        'name' => esc_html__('Footer Widget ', 'omega-travel-agents').$omega_travel_agents_count,
	        'id' => 'omega-travel-agents-footer-widget-'.$omega_travel_agents_i,
	        'description' => esc_html__('Add widgets here.', 'omega-travel-agents'),
	        'before_widget' => '<div id="%1$s" class="widget %2$s">',
	        'after_widget' => '</div>',
	        'before_title' => '<h2 class="widget-title">',
	        'after_title' => '</h2>',
	    ));
	}

}

add_action('widgets_init', 'omega_travel_agents_widgets_init');