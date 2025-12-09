<?php
/**
 * Default Values.
 *
 * @package Omega Travel Agents
 */

if ( ! function_exists( 'omega_travel_agents_get_default_theme_options' ) ) :
	function omega_travel_agents_get_default_theme_options() {

		$omega_travel_agents_defaults = array();
		
        // Options.
        $omega_travel_agents_defaults['omega_travel_agents_logo_width_range']                                               = 200;
        $omega_travel_agents_defaults['omega_travel_agents_global_sidebar_layout']	                    = 'right-sidebar';
        $omega_travel_agents_defaults['omega_travel_agents_header_layout_toggle_link']                  = esc_url( '#', 'omega-travel-agents' );;
        $omega_travel_agents_defaults['omega_travel_agents_theme_pagination_options_alignment']         = 'Center';
        $omega_travel_agents_defaults['omega_travel_agents_theme_breadcrumb_options_alignment']         = 'Left';
        $omega_travel_agents_defaults['omega_travel_agents_pagination_layout']                          = 'numeric';
        $omega_travel_agents_defaults['omega_travel_agents_menu_text_transform']                        = 'capitalize';
        $omega_travel_agents_defaults['omega_travel_agents_single_page_content_alignment']              = 'left';
        $omega_travel_agents_defaults['omega_travel_agents_footer_column_layout'] 		                = 3;
        $omega_travel_agents_defaults['omega_travel_agents_menu_font_size']                             = 14;
        $omega_travel_agents_defaults['omega_travel_agents_copyright_font_size']                        = 16;
        $omega_travel_agents_defaults['omega_travel_agents_breadcrumb_font_size']                       = 16;
        $omega_travel_agents_defaults['omega_travel_agents_excerpt_limit']                              = 20; 
        $omega_travel_agents_defaults['omega_travel_agents_theme_loader']                  = 0;
        $omega_travel_agents_defaults['omega_travel_agents_theme_breadcrumb_enable']                 = 1;
        $omega_travel_agents_defaults['omega_travel_agents_single_post_content_alignment']                 = 'left';
        $omega_travel_agents_defaults['omega_travel_agents_per_columns']                                = 3;
        $omega_travel_agents_defaults['omega_travel_agents_product_per_page']                           = 9;
        $omega_travel_agents_defaults['omega_travel_agents_custom_related_products_number'] = 6;
        $omega_travel_agents_defaults['omega_travel_agents_custom_related_products_number_per_row'] = 3;
        $omega_travel_agents_defaults['omega_travel_agents_header_layout_facebook_link']               	= esc_html__( '#', 'omega-travel-agents' );
        $omega_travel_agents_defaults['omega_travel_agents_header_layout_twitter_link']               	= esc_html__( '#', 'omega-travel-agents' );
        $omega_travel_agents_defaults['omega_travel_agents_header_layout_instagram_link']               = esc_html__( '#', 'omega-travel-agents' );
        $omega_travel_agents_defaults['omega_travel_agents_header_layout_youtube_link']               	= esc_html__( '#', 'omega-travel-agents' );
        $omega_travel_agents_defaults['omega_travel_agents_footer_copyright_text'] 		                = esc_html__( 'All rights reserved.', 'omega-travel-agents' );
        $omega_travel_agents_defaults['twp_navigation_type']              			                    = 'theme-normal-navigation';
        $omega_travel_agents_defaults['omega_travel_agents_post_author']                	            = 1;
        $omega_travel_agents_defaults['omega_travel_agents_post_date']                		            = 1;
        $omega_travel_agents_defaults['omega_travel_agents_post_category']                	            = 1;
        $omega_travel_agents_defaults['omega_travel_agents_post_tags']                		            = 1;
        $omega_travel_agents_defaults['omega_travel_agents_floating_next_previous_nav']                 = 1;
        $omega_travel_agents_defaults['omega_travel_agents_header_banner']               	            = 1;
        $omega_travel_agents_defaults['omega_travel_agents_banner']               	                    = 1;
        $omega_travel_agents_defaults['omega_travel_agents_sticky']                                     = 0;
        $omega_travel_agents_defaults['omega_travel_agents_background_color']                           = '#fff';
        $omega_travel_agents_defaults['omega_travel_agents_locations_post']                                 = 1;
        $omega_travel_agents_defaults['omega_travel_agents_header_search']                              = 1;
        $omega_travel_agents_defaults['omega_travel_agents_footer_widget_title_alignment']              = 'left'; 
        $omega_travel_agents_defaults['omega_travel_agents_show_hide_related_product']                  = 1;
        $omega_travel_agents_defaults['omega_travel_agents_display_footer']                             = 1;
        $omega_travel_agents_defaults['omega_travel_agents_global_color']                               = '#132E41';
        $omega_travel_agents_defaults['omega_travel_agents_display_archive_post_category']          = 1;
        $omega_travel_agents_defaults['omega_travel_agents_display_archive_post_title']             = 1;
        $omega_travel_agents_defaults['omega_travel_agents_display_archive_post_content']           = 1;
        $omega_travel_agents_defaults['omega_travel_agents_display_archive_post_image']             = 1;
        $omega_travel_agents_defaults['omega_travel_agents_display_archive_post_button']            = 1;
        
        $omega_travel_agents_defaults['omega_travel_agents_display_single_post_image']            = 1;
        $omega_travel_agents_defaults['omega_travel_agents_display_archive_post_format_icon']       = 1;

        $omega_travel_agents_defaults['omega_travel_agents_enable_to_the_top']                        = 1;
        $omega_travel_agents_defaults['omega_travel_agents_to_the_top_text']                              = esc_html__( 'To The Top', 'omega-travel-agents' );
        $omega_travel_agents_defaults['omega_travel_agents_heading_typography_font']                    = 'mansalva';
        $omega_travel_agents_defaults['omega_travel_agents_content_typography_font']                    = 'montserrat';

        //slider
        $omega_travel_agents_defaults['omega_travel_agents_slider_team_box_title']                     = esc_html__( '1.5 Lacs+', 'omega-travel-agents' );
        $omega_travel_agents_defaults['omega_travel_agents_slider_team_box_text']                      = esc_html__( '5 Star Reviews', 'omega-travel-agents' );
        $omega_travel_agents_defaults['omega_travel_agents_slider_section_team_image']                 = esc_url(get_template_directory_uri() . '/assets/images/team.png');
        
        //Rooms Section
        $omega_travel_agents_defaults['omega_travel_agents_product_section_title']                     = esc_html__( 'Roam exotic locales', 'omega-travel-agents' );
        $omega_travel_agents_defaults['omega_travel_agents_post_section_rating']                       = esc_html__( '5.0', 'omega-travel-agents' );
        $omega_travel_agents_defaults['omega_travel_agents_post_section_days_text']                    = esc_html__( '12-13 Days ', 'omega-travel-agents' );
        $omega_travel_agents_defaults['omega_travel_agents_post_section_amount']                       = esc_html__( '$10,000', 'omega-travel-agents' );
        $omega_travel_agents_defaults['omega_travel_agents_post_section_location']                     = esc_html__( 'Paris', 'omega-travel-agents' );
        
        $omega_travel_agents_defaults['omega_travel_agents_slider_faq_question']                       = esc_html__( 'Want traveling?', 'omega-travel-agents' );
        $omega_travel_agents_defaults['omega_travel_agents_slider_faq_question_answer']                = esc_html__( 'Expand your fragrance journey by stepping outside familiar bounds, exploring scents from near and far.', 'omega-travel-agents' );
        
        // 404 Page Defaults
        $omega_travel_agents_defaults['omega_travel_agents_404_main_title'] = esc_html__( 'Oops! That page can’t be found.', 'omega-travel-agents' );
        $omega_travel_agents_defaults['omega_travel_agents_404_subtitle_one'] = esc_html__( 'Maybe it’s out there, somewhere...', 'omega-travel-agents' );
        $omega_travel_agents_defaults['omega_travel_agents_404_para_one'] = esc_html__( 'You can always find insightful stories on our', 'omega-travel-agents' );
        $omega_travel_agents_defaults['omega_travel_agents_404_subtitle_two'] = esc_html__( 'Still feeling lost? You’re not alone.', 'omega-travel-agents' );
        $omega_travel_agents_defaults['omega_travel_agents_404_para_two'] = esc_html__( 'Enjoy these stories about getting lost, losing things, and finding what you never knew you were looking for.', 'omega-travel-agents' );

	// Pass through filter.
	$omega_travel_agents_defaults = apply_filters( 'omega_travel_agents_filter_default_theme_options', $omega_travel_agents_defaults );

		return $omega_travel_agents_defaults;
	}
endif;