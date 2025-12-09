<?php
	
	$travel_booking_offers_tp_theme_css = '';

	// 1st color
	$travel_booking_offers_tp_color_option_first = get_theme_mod('travel_booking_offers_tp_color_option_first', '#00AEFF');
	if ($travel_booking_offers_tp_color_option_first) {
		$travel_booking_offers_tp_theme_css .= ':root {';
		$travel_booking_offers_tp_theme_css .= '--color-primary1: ' . esc_attr($travel_booking_offers_tp_color_option_first) . ';';
		$travel_booking_offers_tp_theme_css .= '}';
	}

	// 2nd color
	$travel_booking_offers_tp_color_option_sec = get_theme_mod('travel_booking_offers_tp_color_option_sec', '#05155E');
	if ($travel_booking_offers_tp_color_option_sec) {
		$travel_booking_offers_tp_theme_css .= ':root {';
		$travel_booking_offers_tp_theme_css .= '--color-primary2: ' . esc_attr($travel_booking_offers_tp_color_option_sec) . ';';
		$travel_booking_offers_tp_theme_css .= '}';
	}

	// preloader
	$travel_booking_offers_tp_preloader_color1_option = get_theme_mod('travel_booking_offers_tp_preloader_color1_option');
	if($travel_booking_offers_tp_preloader_color1_option != false){
	$travel_booking_offers_tp_theme_css .='.center1{';
		$travel_booking_offers_tp_theme_css .='border-color: '.esc_attr($travel_booking_offers_tp_preloader_color1_option).' !important;';
	$travel_booking_offers_tp_theme_css .='}';
	}
	if($travel_booking_offers_tp_preloader_color1_option != false){
	$travel_booking_offers_tp_theme_css .='.center1 .ring::before{';
		$travel_booking_offers_tp_theme_css .='background: '.esc_attr($travel_booking_offers_tp_preloader_color1_option).' !important;';
	$travel_booking_offers_tp_theme_css .='}';
	}

	$travel_booking_offers_tp_preloader_color2_option = get_theme_mod('travel_booking_offers_tp_preloader_color2_option');

	if($travel_booking_offers_tp_preloader_color2_option != false){
	$travel_booking_offers_tp_theme_css .='.center2{';
		$travel_booking_offers_tp_theme_css .='border-color: '.esc_attr($travel_booking_offers_tp_preloader_color2_option).' !important;';
	$travel_booking_offers_tp_theme_css .='}';
	}
	if($travel_booking_offers_tp_preloader_color2_option != false){
	$travel_booking_offers_tp_theme_css .='.center2 .ring::before{';
		$travel_booking_offers_tp_theme_css .='background: '.esc_attr($travel_booking_offers_tp_preloader_color2_option).' !important;';
	$travel_booking_offers_tp_theme_css .='}';
	}

	$travel_booking_offers_tp_preloader_bg_color_option = get_theme_mod('travel_booking_offers_tp_preloader_bg_color_option');

	if($travel_booking_offers_tp_preloader_bg_color_option != false){
	$travel_booking_offers_tp_theme_css .='.loader{';
		$travel_booking_offers_tp_theme_css .='background: '.esc_attr($travel_booking_offers_tp_preloader_bg_color_option).';';
	$travel_booking_offers_tp_theme_css .='}';
	}

	$travel_booking_offers_tp_footer_bg_color_option = get_theme_mod('travel_booking_offers_tp_footer_bg_color_option');


	if($travel_booking_offers_tp_footer_bg_color_option != false){
	$travel_booking_offers_tp_theme_css .='#footer{';
		$travel_booking_offers_tp_theme_css .='background: '.esc_attr($travel_booking_offers_tp_footer_bg_color_option).';';
	$travel_booking_offers_tp_theme_css .='}';
	}

	// logo tagline color
	$travel_booking_offers_site_tagline_color = get_theme_mod('travel_booking_offers_site_tagline_color');

	if($travel_booking_offers_site_tagline_color != false){
	$travel_booking_offers_tp_theme_css .='.logo h1 a, .logo p a, .logo p.site-title a{';
	$travel_booking_offers_tp_theme_css .='color: '.esc_attr($travel_booking_offers_site_tagline_color).';';
	$travel_booking_offers_tp_theme_css .='}';
	}

	$travel_booking_offers_logo_tagline_color = get_theme_mod('travel_booking_offers_logo_tagline_color');
	if($travel_booking_offers_logo_tagline_color != false){
	$travel_booking_offers_tp_theme_css .='p.site-description{';
	$travel_booking_offers_tp_theme_css .='color: '.esc_attr($travel_booking_offers_logo_tagline_color).';';
	$travel_booking_offers_tp_theme_css .='}';
	}

	// footer widget title color
	$travel_booking_offers_footer_widget_title_color = get_theme_mod('travel_booking_offers_footer_widget_title_color');
	if($travel_booking_offers_footer_widget_title_color != false){
	$travel_booking_offers_tp_theme_css .='#footer h3, #footer h2.wp-block-heading{';
	$travel_booking_offers_tp_theme_css .='color: '.esc_attr($travel_booking_offers_footer_widget_title_color).';';
	$travel_booking_offers_tp_theme_css .='}';
	}

	// copyright text color
	$travel_booking_offers_footer_copyright_text_color = get_theme_mod('travel_booking_offers_footer_copyright_text_color');
	if($travel_booking_offers_footer_copyright_text_color != false){
	$travel_booking_offers_tp_theme_css .='#footer .site-info p, #footer .site-info a {';
	$travel_booking_offers_tp_theme_css .='color: '.esc_attr($travel_booking_offers_footer_copyright_text_color).'!important;';
	$travel_booking_offers_tp_theme_css .='}';
	}

	// header image title color
	$travel_booking_offers_header_image_title_text_color = get_theme_mod('travel_booking_offers_header_image_title_text_color');
	if($travel_booking_offers_header_image_title_text_color != false){
	$travel_booking_offers_tp_theme_css .='.box-text h2{';
	$travel_booking_offers_tp_theme_css .='color: '.esc_attr($travel_booking_offers_header_image_title_text_color).';';
	$travel_booking_offers_tp_theme_css .='}';
	}

	// menu color
	$travel_booking_offers_menu_color = get_theme_mod('travel_booking_offers_menu_color');
	if($travel_booking_offers_menu_color != false){
	$travel_booking_offers_tp_theme_css .='.main-navigation a{';
	$travel_booking_offers_tp_theme_css .='color: '.esc_attr($travel_booking_offers_menu_color).';';
	$travel_booking_offers_tp_theme_css .='}';
}