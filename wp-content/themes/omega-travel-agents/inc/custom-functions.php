<?php
/**
 * Custom Functions.
 *
 * @package Omega Travel Agents
 */

if( !function_exists( 'omega_travel_agents_fonts_url' ) ) :

    //Google Fonts URL
    function omega_travel_agents_fonts_url(){

        $omega_travel_agents_font_families = array(
            'Mansalva',// font-family: "Mansalva", sans-serif;
            'Montserrat:ital,wght@0,100..900;1,100..900',//font-family: "Montserrat", sans-serif;
        );

        $omega_travel_agents_fonts_url = add_query_arg( array(
            'family' => implode( '&family=', $omega_travel_agents_font_families ),
            'display' => 'swap',
        ), 'https://fonts.googleapis.com/css2' );

        return esc_url_raw($omega_travel_agents_fonts_url);

    }

endif;

if ( ! function_exists( 'omega_travel_agents_sub_menu_toggle_button' ) ) :

    function omega_travel_agents_sub_menu_toggle_button( $omega_travel_agents_args, $omega_travel_agents_item, $depth ) {

        // Add sub menu toggles to the main menu with toggles
        if ( $omega_travel_agents_args->theme_location == 'omega-travel-agents-primary-menu' && isset( $omega_travel_agents_args->show_toggles ) ) {
            
            // Wrap the menu item link contents in a div, used for positioning
            $omega_travel_agents_args->before = '<div class="submenu-wrapper">';
            $omega_travel_agents_args->after  = '';

            // Add a toggle to items with children
            if ( in_array( 'menu-item-has-children', $omega_travel_agents_item->classes ) ) {

                $omega_travel_agents_toggle_target_string = '.menu-item.menu-item-' . $omega_travel_agents_item->ID . ' > .sub-menu';

                // Add the sub menu toggle
                $omega_travel_agents_args->after .= '<button type="button" class="theme-aria-button submenu-toggle" data-toggle-target="' . $omega_travel_agents_toggle_target_string . '" data-toggle-type="slidetoggle" data-toggle-duration="250" aria-expanded="false"><span class="btn__content" tabindex="-1"><span class="screen-reader-text">' . esc_html__( 'Show sub menu', 'omega-travel-agents' ) . '</span>' . omega_travel_agents_get_theme_svg( 'chevron-down' ) . '</span></button>';

            }

            // Close the wrapper
            $omega_travel_agents_args->after .= '</div><!-- .submenu-wrapper -->';
            // Add sub menu icons to the main menu without toggles (the fallback menu)

        }elseif( $omega_travel_agents_args->theme_location == 'omega-travel-agents-primary-menu' ) {

            if ( in_array( 'menu-item-has-children', $omega_travel_agents_item->classes ) ) {

                $omega_travel_agents_args->before = '<div class="link-icon-wrapper">';
                $omega_travel_agents_args->after  = omega_travel_agents_get_theme_svg( 'chevron-down' ) . '</div>';

            } else {

                $omega_travel_agents_args->before = '';
                $omega_travel_agents_args->after  = '';

            }

        }

        return $omega_travel_agents_args;

    }

endif;

add_filter( 'nav_menu_item_args', 'omega_travel_agents_sub_menu_toggle_button', 10, 3 );

if ( ! function_exists( 'omega_travel_agents_the_theme_svg' ) ):
    
    function omega_travel_agents_the_theme_svg( $omega_travel_agents_svg_name, $omega_travel_agents_return = false ) {

        if( $omega_travel_agents_return ){

            return omega_travel_agents_get_theme_svg( $omega_travel_agents_svg_name ); //phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- Escaped in omega_travel_agents_get_theme_svg();.

        }else{

            echo omega_travel_agents_get_theme_svg( $omega_travel_agents_svg_name ); //phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- Escaped in omega_travel_agents_get_theme_svg();.

        }
    }

endif;

if ( ! function_exists( 'omega_travel_agents_get_theme_svg' ) ):

    function omega_travel_agents_get_theme_svg( $omega_travel_agents_svg_name ) {

        // Make sure that only our allowed tags and attributes are included.
        $omega_travel_agents_svg = wp_kses(
            Omega_Travel_Agents_SVG_Icons::get_svg( $omega_travel_agents_svg_name ),
            array(
                'svg'     => array(
                    'class'       => true,
                    'xmlns'       => true,
                    'width'       => true,
                    'height'      => true,
                    'viewbox'     => true,
                    'aria-hidden' => true,
                    'role'        => true,
                    'focusable'   => true,
                ),
                'path'    => array(
                    'fill'      => true,
                    'fill-rule' => true,
                    'd'         => true,
                    'transform' => true,
                ),
                'polygon' => array(
                    'fill'      => true,
                    'fill-rule' => true,
                    'points'    => true,
                    'transform' => true,
                    'focusable' => true,
                ),
                'polyline' => array(
                    'fill'      => true,
                    'points'    => true,
                ),
                'line' => array(
                    'fill'      => true,
                    'x1'      => true,
                    'x2' => true,
                    'y1'    => true,
                    'y2' => true,
                ),
            )
        );
        if ( ! $omega_travel_agents_svg ) {
            return false;
        }
        return $omega_travel_agents_svg;

    }

endif;

if( !function_exists( 'omega_travel_agents_post_category_list' ) ) :

    // Post Category List.
    function omega_travel_agents_post_category_list( $omega_travel_agents_select_cat = true ){

        $omega_travel_agents_post_cat_lists = get_categories(
            array(
                'hide_empty' => '0',
                'exclude' => '1',
            )
        );

        $omega_travel_agents_post_cat_cat_array = array();
        if( $omega_travel_agents_select_cat ){

            $omega_travel_agents_post_cat_cat_array[''] = esc_html__( '-- Select Category --','omega-travel-agents' );

        }

        foreach ( $omega_travel_agents_post_cat_lists as $omega_travel_agents_post_cat_list ) {

            $omega_travel_agents_post_cat_cat_array[$omega_travel_agents_post_cat_list->slug] = $omega_travel_agents_post_cat_list->name;

        }

        return $omega_travel_agents_post_cat_cat_array;
    }

endif;

if( !function_exists('omega_travel_agents_single_post_navigation') ):

    function omega_travel_agents_single_post_navigation(){

        $omega_travel_agents_default = omega_travel_agents_get_default_theme_options();
        $omega_travel_agents_twp_navigation_type = esc_attr( get_post_meta( get_the_ID(), 'twp_disable_ajax_load_next_post', true ) );
        $omega_travel_agents_current_id = '';
        $article_wrap_class = '';
        global $post;
        $omega_travel_agents_current_id = $post->ID;
        if( $omega_travel_agents_twp_navigation_type == '' || $omega_travel_agents_twp_navigation_type == 'global-layout' ){
            $omega_travel_agents_twp_navigation_type = get_theme_mod('twp_navigation_type', $omega_travel_agents_default['twp_navigation_type']);
        }

        if( $omega_travel_agents_twp_navigation_type != 'no-navigation' && 'post' === get_post_type() ){

            if( $omega_travel_agents_twp_navigation_type == 'theme-normal-navigation' ){ ?>

                <div class="navigation-wrapper">
                    <?php
                    // Previous/next post navigation.
                    the_post_navigation(array(
                        'prev_text' => '<span class="arrow" aria-hidden="true">' . omega_travel_agents_the_theme_svg('arrow-left',$omega_travel_agents_return = true ) . '</span><span class="screen-reader-text">' . esc_html__('Previous post:', 'omega-travel-agents') . '</span><span class="post-title">%title</span>',
                        'next_text' => '<span class="arrow" aria-hidden="true">' . omega_travel_agents_the_theme_svg('arrow-right',$omega_travel_agents_return = true ) . '</span><span class="screen-reader-text">' . esc_html__('Next post:', 'omega-travel-agents') . '</span><span class="post-title">%title</span>',
                    )); ?>
                </div>
                <?php

            }else{

                $omega_travel_agents_next_post = get_next_post();
                if( isset( $omega_travel_agents_next_post->ID ) ){

                    $omega_travel_agents_next_post_id = $omega_travel_agents_next_post->ID;
                    echo '<div loop-count="1" next-post="' . absint( $omega_travel_agents_next_post_id ) . '" class="twp-single-infinity"></div>';

                }
            }

        }

    }

endif;

add_action( 'omega_travel_agents_navigation_action','omega_travel_agents_single_post_navigation',30 );

if( !function_exists('omega_travel_agents_content_offcanvas') ):

    // Offcanvas Contents
    function omega_travel_agents_content_offcanvas(){ ?>

        <div id="offcanvas-menu">
            <div class="offcanvas-wraper">
                <div class="close-offcanvas-menu">
                    <div class="offcanvas-close">
                        <a href="javascript:void(0)" class="skip-link-menu-start"></a>
                        <button type="button" class="button-offcanvas-close">
                            <span class="offcanvas-close-label">
                                <?php echo esc_html__('Close', 'omega-travel-agents'); ?>
                            </span>
                        </button>
                    </div>
                </div>
                <div id="primary-nav-offcanvas" class="offcanvas-item offcanvas-main-navigation">
                    <nav class="primary-menu-wrapper" aria-label="<?php esc_attr_e('Horizontal', 'omega-travel-agents'); ?>" role="navigation">
                        <ul class="primary-menu theme-menu">
                            <?php
                            if (has_nav_menu('omega-travel-agents-primary-menu')) {
                                wp_nav_menu(
                                    array(
                                        'container' => '',
                                        'items_wrap' => '%3$s',
                                        'theme_location' => 'omega-travel-agents-primary-menu',
                                        'show_toggles' => true,
                                    )
                                );
                            }else{

                                wp_list_pages(
                                    array(
                                        'match_menu_classes' => true,
                                        'show_sub_menu_icons' => true,
                                        'title_li' => false,
                                        'show_toggles' => true,
                                        'walker' => new Omega_Travel_Agents_Walker_Page(),
                                    )
                                );
                            }
                            ?>
                        </ul>
                    </nav><!-- .primary-menu-wrapper -->
                </div>
                <a href="javascript:void(0)" class="skip-link-menu-end"></a>
            </div>
        </div>

    <?php
    }

endif;

add_action( 'omega_travel_agents_before_footer_content_action','omega_travel_agents_content_offcanvas',30 );

if( !function_exists('omega_travel_agents_footer_content_widget') ):

    function omega_travel_agents_footer_content_widget(){
        
        $omega_travel_agents_default = omega_travel_agents_get_default_theme_options();
        
        $omega_travel_agents_footer_column_layout = absint(get_theme_mod('omega_travel_agents_footer_column_layout', $omega_travel_agents_default['omega_travel_agents_footer_column_layout']));
        $omega_travel_agents_footer_sidebar_class = 12;
        
        if($omega_travel_agents_footer_column_layout == 2) {
            $omega_travel_agents_footer_sidebar_class = 6;
        }
        
        if($omega_travel_agents_footer_column_layout == 3) {
            $omega_travel_agents_footer_sidebar_class = 4;
        }
        ?>
        
        <?php if ( get_theme_mod('omega_travel_agents_display_footer', true) == true ) : ?>
            <div class="footer-widgetarea">
                <div class="wrapper">
                    <div class="column-row">
                    
                        <?php for ($i = 0; $i < $omega_travel_agents_footer_column_layout; $i++) : ?>
                            
                            <div class="column <?php echo 'column-' . absint($omega_travel_agents_footer_sidebar_class); ?> column-sm-12">
                                
                                <?php 
                                // If no widgets are assigned, display default widgets
                                if ( ! is_active_sidebar( 'omega-travel-agents-footer-widget-' . $i ) ) : 

                                    if ($i === 0) : ?>
                                        <div id="media_image-3" class="widget widget_media_image">
                                            <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/logo.png'); ?>" alt="<?php echo esc_attr__( 'Footer Image', 'omega-travel-agents' ); ?>" style="max-width: 100%; height: auto;">
                                        </div>
                                        <div id="text-3" class="widget widget_text">
                                            <div class="textwidget">
                                                <p class="widget_text">
                                                    <?php esc_html_e('Omega Travel Agents is a sophisticated WordPress theme crafted for travel agencies and tour operators looking to enhance their online presence. Designed to cater to a broad range of travel-related needs, this theme excels in presenting travel guides, luxury and eco-tourism options, and detailed travel packages.', 'omega-travel-agents'); ?>
                                                </p>
                                            </div>
                                        </div>

                                    <?php elseif ($i === 1) : ?>
                                        <div id="pages-2" class="widget widget_pages">
                                            <h2 class="widget-title"><?php esc_html_e('Calendar', 'omega-travel-agents'); ?></h2>
                                            <?php get_calendar(); ?>
                                        </div>

                                    <?php elseif ($i === 2) : ?>
                                        <div id="search-2" class="widget widget_search">
                                            <h2 class="widget-title"><?php esc_html_e('Enter Keywords Here', 'omega-travel-agents'); ?></h2>
                                            <?php get_search_form(); ?>
                                        </div>
                                    <?php endif; 
                                    
                                else :
                                    // Display dynamic sidebar widget if assigned
                                    dynamic_sidebar('omega-travel-agents-footer-widget-' . $i);
                                endif;
                                ?>
                                
                            </div>
                            
                        <?php endfor; ?>

                    </div>
                </div>
            </div>
        <?php endif; ?> 

    <?php
    }

endif;

add_action( 'omega_travel_agents_footer_content_action', 'omega_travel_agents_footer_content_widget', 10 );

if( !function_exists('omega_travel_agents_footer_content_info') ):

    /**
     * Footer Copyright Area
    **/
    function omega_travel_agents_footer_content_info(){

        $omega_travel_agents_default = omega_travel_agents_get_default_theme_options(); ?>
        <div class="site-info">
            <div class="wrapper">
                <div class="column-row">
                    <div class="column column-9">
                        <div class="footer-credits">
                            <div class="footer-copyright">
                                <?php
                                $omega_travel_agents_footer_copyright_text = wp_kses_post( get_theme_mod( 'omega_travel_agents_footer_copyright_text', $omega_travel_agents_default['omega_travel_agents_footer_copyright_text'] ) );
                                    echo esc_html( $omega_travel_agents_footer_copyright_text );
                                    echo '<br>';
                                    echo esc_html__('Theme: ', 'omega-travel-agents') . '<a href="' . esc_url('https://www.omegathemes.com/products/free-travel-wordpress-theme') . '" title="' . esc_attr__('Omega Travel Agents', 'omega-travel-agents') . '" target="_blank"><span>' . esc_html__('Omega Travel Agents', 'omega-travel-agents') . '</span></a>' . esc_html__(' By ', 'omega-travel-agents') . '  <span>' . esc_html__('OMEGA ', 'omega-travel-agents') . '</span>';
                                    echo esc_html__('Powered by ', 'omega-travel-agents') . '<a href="' . esc_url('https://wordpress.org') . '" title="' . esc_attr__('WordPress', 'omega-travel-agents') . '" target="_blank"><span>' . esc_html__('WordPress.', 'omega-travel-agents') . '</span></a>';
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="column column-3 align-text-right">
                        <a class="to-the-top" href="#site-header">
                            <span class="to-the-top-long">
                                <?php if ( get_theme_mod('omega_travel_agents_enable_to_the_top', true) == true ) : ?>
                                    <?php
                                    $omega_travel_agents_to_the_top_text = get_theme_mod( 'omega_travel_agents_to_the_top_text', __( 'To the Top', 'omega-travel-agents' ) );
                                    printf( 
                                        wp_kses( 
                                            /* translators: %s is the arrow icon markup */
                                            '%s %s', 
                                            array( 'span' => array( 'class' => array(), 'aria-hidden' => array() ) ) 
                                        ), 
                                        esc_html( $omega_travel_agents_to_the_top_text ),
                                        '<span class="arrow" aria-hidden="true">&uarr;</span>' 
                                    );
                                    ?>
                                <?php endif; ?>
                            </span>
                        </a>

                    </div>
                </div>
            </div>
        </div>

    <?php
    }

endif;

add_action( 'omega_travel_agents_footer_content_action','omega_travel_agents_footer_content_info',20 );


if( !function_exists( 'omega_travel_agents_main_slider' ) ) :

    function omega_travel_agents_main_slider(){

        $omega_travel_agents_default = omega_travel_agents_get_default_theme_options();

        $omega_travel_agents_slider_team_box_title = esc_html( get_theme_mod( 'omega_travel_agents_slider_team_box_title',
        $omega_travel_agents_default['omega_travel_agents_slider_team_box_title'] ) );

        $omega_travel_agents_slider_team_box_text = esc_html( get_theme_mod( 'omega_travel_agents_slider_team_box_text',
        $omega_travel_agents_default['omega_travel_agents_slider_team_box_text'] ) );

        $omega_travel_agents_slider_faq_question = esc_html( get_theme_mod( 'omega_travel_agents_slider_faq_question',
        $omega_travel_agents_default['omega_travel_agents_slider_faq_question'] ) );

        $omega_travel_agents_slider_faq_question_answer = esc_html( get_theme_mod( 'omega_travel_agents_slider_faq_question_answer',
        $omega_travel_agents_default['omega_travel_agents_slider_faq_question_answer'] ) );

        $omega_travel_agents_slider_section_team_image = esc_url( get_theme_mod( 'omega_travel_agents_slider_section_team_image',
        $omega_travel_agents_default['omega_travel_agents_slider_section_team_image'] ) );

        $omega_travel_agents_header_banner = get_theme_mod( 'omega_travel_agents_header_banner', $omega_travel_agents_default['omega_travel_agents_header_banner'] );
        $omega_travel_agents_header_banner_cat = get_theme_mod( 'omega_travel_agents_header_banner_cat','uncategorized' );

        $omega_travel_agents_header_layout_facebook_link = esc_url( get_theme_mod( 'omega_travel_agents_header_layout_facebook_link','#' ) );

        $omega_travel_agents_header_layout_twitter_link = esc_url( get_theme_mod( 'omega_travel_agents_header_layout_twitter_link','#' ) );

        $omega_travel_agents_header_layout_instagram_link = esc_url( get_theme_mod( 'omega_travel_agents_header_layout_instagram_link','#' ) );

        $omega_travel_agents_header_layout_youtube_link = esc_url( get_theme_mod( 'omega_travel_agents_header_layout_youtube_link','#' ) );

        if( $omega_travel_agents_header_banner ){

            $omega_travel_agents_rtl = '';
            if( is_rtl() ){
                $omega_travel_agents_rtl = 'dir="rtl"';
            }

            $omega_travel_agents_banner_query = new WP_Query( array('post_type' => 'post', 'posts_per_page' => 4,'post__not_in' => get_option("sticky_posts"), 'category_name' => esc_html( $omega_travel_agents_header_banner_cat ) ) );

            if( $omega_travel_agents_banner_query->have_posts() ): ?>

                <div class="theme-custom-block theme-banner-block">
                    <div class="swiper-container theme-main-carousel swiper-container" <?php echo $omega_travel_agents_rtl; ?>>
                        <div class="swiper-wrapper">
                            <?php
                            while( $omega_travel_agents_banner_query->have_posts() ):
                            $omega_travel_agents_banner_query->the_post();
                            $omega_travel_agents_featured_image = wp_get_attachment_image_src(get_post_thumbnail_id(), 'large');
                            $omega_travel_agents_featured_image = isset( $omega_travel_agents_featured_image[0] ) ? $omega_travel_agents_featured_image[0] : ''; ?>
                                <div class="swiper-slide main-carousel-item">                                 
                                    <div class="theme-article-post">
                                       <div class="entry-thumbnail">
                                            <div class="data-bg data-bg-large" data-background="<?php echo esc_url($omega_travel_agents_featured_image ? $omega_travel_agents_featured_image : get_template_directory_uri() . '/inc/homepage-setup/assets/homepage-setup-images/slider-img1.jpg'); ?>">
                                                <a href="<?php the_permalink(); ?>" class="theme-image-responsive" tabindex="0"></a>
                                            </div>
                                            <?php omega_travel_agents_post_format_icon(); ?>
                                        </div>
                                        <div class="main-carousel-caption">
                                            <div class="post-content">
                                                <header class="entry-header">
                                                    <h2 class="entry-title entry-title-big">
                                                        <a href="<?php the_permalink(); ?>" rel="bookmark"><span><?php the_title(); ?></span></a>
                                                    </h2>
                                                </header>
                                                <div class="entry-content">
                                                    <?php
                                                    if (has_excerpt()) {

                                                        the_excerpt();

                                                    } else {

                                                        echo esc_html(wp_trim_words(get_the_content(), 25, '...'));

                                                    } ?>
                                                </div>

                                                <a href="<?php the_permalink(); ?>" class="btn-fancy btn-fancy-primary" tabindex="0">
                                                    <?php echo esc_html__('Explore More', 'omega-travel-agents'); ?>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="team-box">
                                            <?php if( $omega_travel_agents_slider_section_team_image ){ ?>
                                                <div class="team-img">
                                                    <img src="<?php echo esc_url( $omega_travel_agents_slider_section_team_image ); ?>" alt="Team Image">
                                                </div>
                                            <?php } ?>
                                            <div class="team-content">
                                                <?php if( $omega_travel_agents_slider_team_box_title ){ ?>
                                                    <h6><?php echo esc_html( $omega_travel_agents_slider_team_box_title ); ?></h6>
                                                <?php } ?>
                                                <?php if( $omega_travel_agents_slider_team_box_text ){ ?>
                                                    <p><?php echo esc_html( $omega_travel_agents_slider_team_box_text ); ?></p>
                                                <?php } ?>
                                            </div>
                                        </div>
                                        <div class="question-box">
                                            <?php if( $omega_travel_agents_slider_faq_question ){ ?>
                                                <h6><?php echo esc_html( $omega_travel_agents_slider_faq_question ); ?></h6>
                                            <?php } ?>
                                            <?php if( $omega_travel_agents_slider_faq_question_answer ){ ?>
                                                <p><?php echo esc_html( $omega_travel_agents_slider_faq_question_answer ); ?></p>
                                            <?php } ?>
                                        </div>
                                        <div class="social-area">
                                            <?php if( $omega_travel_agents_header_layout_facebook_link || $omega_travel_agents_header_layout_twitter_link || $omega_travel_agents_header_layout_instagram_link || $omega_travel_agents_header_layout_youtube_link ){ ?>
                                                <?php if( $omega_travel_agents_header_layout_facebook_link ){ ?>
                                                   <a href="<?php echo esc_url( $omega_travel_agents_header_layout_facebook_link ); ?>"><svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2024 Fonticons, Inc. --><path d="M504 256C504 119 393 8 256 8S8 119 8 256c0 123.78 90.69 226.38 209.25 245V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.28c-30.8 0-40.41 19.12-40.41 38.73V256h68.78l-11 71.69h-57.78V501C413.31 482.38 504 379.78 504 256z"/></svg></a>
                                                <?php } ?>
                                                <?php if( $omega_travel_agents_header_layout_twitter_link ){ ?>
                                                   <a href="<?php echo esc_url( $omega_travel_agents_header_layout_twitter_link ); ?>"><svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2024 Fonticons, Inc. --><path d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z"/></svg></a>
                                                <?php } ?>
                                                <?php if( $omega_travel_agents_header_layout_instagram_link ){ ?>
                                                   <a href="<?php echo esc_url( $omega_travel_agents_header_layout_instagram_link ); ?>"><svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2024 Fonticons, Inc. --><path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"/></svg></a>
                                                <?php } ?>
                                                <?php if( $omega_travel_agents_header_layout_youtube_link ){ ?>
                                                   <a href="<?php echo esc_url( $omega_travel_agents_header_layout_youtube_link ); ?>"><svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 576 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2024 Fonticons, Inc. --><path d="M549.655 124.083c-6.281-23.65-24.787-42.276-48.284-48.597C458.781 64 288 64 288 64S117.22 64 74.629 75.486c-23.497 6.322-42.003 24.947-48.284 48.597-11.412 42.867-11.412 132.305-11.412 132.305s0 89.438 11.412 132.305c6.281 23.65 24.787 41.5 48.284 47.821C117.22 448 288 448 288 448s170.78 0 213.371-11.486c23.497-6.321 42.003-24.171 48.284-47.821 11.412-42.867 11.412-132.305 11.412-132.305s0-89.438-11.412-132.305zm-317.51 213.508V175.185l142.739 81.205-142.739 81.201z"/></svg></a>
                                                <?php } ?>
                                            <?php } ?>
                                        </div>
                                        <div class="blank-div"></div>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>

            <?php
            wp_reset_postdata();
            endif;
        }
    }

endif;

add_action( 'omega_travel_agents_footer_content_action','omega_travel_agents_footer_content_info',20 );


if( !function_exists( 'omega_travel_agents_main_search' ) ) :

    function omega_travel_agents_main_search(){

        $omega_travel_agents_default = omega_travel_agents_get_default_theme_options();
        $omega_travel_agents_header_search = get_theme_mod( 'omega_travel_agents_header_search', $omega_travel_agents_default['omega_travel_agents_header_search'] );

        if( $omega_travel_agents_header_search ){ ?>
            <div class="theme-search-block">
                <div class="wrapper">
                    <div class="search-box">
                        <?php if(get_theme_mod('omega_travel_agents_search_form_shortcode')){ ?>
                            <?php echo do_shortcode(get_theme_mod('omega_travel_agents_search_form_shortcode')); ?>
                        <?php }?>
                    </div>
                </div>
            </div>
        <?php }
}

endif;


if( !function_exists( 'omega_travel_agents_product_section' ) ) :

    function omega_travel_agents_product_section(){ 

        $omega_travel_agents_default = omega_travel_agents_get_default_theme_options();

        $omega_travel_agents_product_section_title = esc_html( get_theme_mod( 'omega_travel_agents_product_section_title',
        $omega_travel_agents_default['omega_travel_agents_product_section_title'] ) );
        $omega_travel_agents_locations_post = get_theme_mod( 'omega_travel_agents_locations_post', $omega_travel_agents_default['omega_travel_agents_locations_post'] );
        $omega_travel_agents_locations_post_cat = get_theme_mod( 'omega_travel_agents_locations_post_cat' );

          
        $omega_travel_agents_locations_query = new WP_Query( array('post_type' => 'post', 'posts_per_page' => 8,'post__not_in' => get_option("sticky_posts"), 'category_name' => esc_html( $omega_travel_agents_locations_post_cat ) ) );

            if( $omega_travel_agents_locations_query->have_posts() ): ?>
        
            <div class="theme-product-block">
                <div class="wrapper">
                    <div class="shop-heading">
                        <?php if( $omega_travel_agents_product_section_title ){ ?>
                            <h3><?php echo esc_html( $omega_travel_agents_product_section_title ); ?></h3>
                        <?php } ?>
                    </div>
                    <div class="owl-carousel" role="listbox">
                        <?php
                            $s=1;
                            while( $omega_travel_agents_locations_query->have_posts() ):
                            $omega_travel_agents_locations_query->the_post();
                            $omega_travel_agents_featured_image = wp_get_attachment_image_src(get_post_thumbnail_id(), 'large');
                            $omega_travel_agents_featured_image = isset( $omega_travel_agents_featured_image[0] ) ? $omega_travel_agents_featured_image[0] : ''; 
                            $omega_travel_agents_post_section_rating = esc_html( get_theme_mod( 'omega_travel_agents_post_section_rating'.$s,
                            $omega_travel_agents_default['omega_travel_agents_post_section_rating'] ) );

                            $omega_travel_agents_post_section_days_text = esc_html( get_theme_mod( 'omega_travel_agents_post_section_days_text'.$s,
                            $omega_travel_agents_default['omega_travel_agents_post_section_days_text'] ) );

                            $omega_travel_agents_post_section_amount = esc_html( get_theme_mod( 'omega_travel_agents_post_section_amount'.$s,
                            $omega_travel_agents_default['omega_travel_agents_post_section_amount'] ) );

                            $omega_travel_agents_post_section_location = esc_html( get_theme_mod( 'omega_travel_agents_post_section_location'.$s,
                            $omega_travel_agents_default['omega_travel_agents_post_section_location'] ) );
                            ?>                                
                            <div class="theme-article-post">
                                <div class="entry-thumbnail">
                                    <div class="data-bg featured-img" data-background="<?php echo esc_url($omega_travel_agents_featured_image ? $omega_travel_agents_featured_image : get_template_directory_uri() . '/inc/homepage-setup/assets/homepage-setup-images/post-img1.png'); ?>">
                                        <a href="<?php the_permalink(); ?>" class="theme-image-responsive" tabindex="0"></a>
                                    </div>
                                    <?php omega_travel_agents_post_format_icon(); ?>
                                </div>
                                <div class="main-owl-caption">
                                    <div class="post-content-location">
                                        <header class="entry-header">
                                            <h2 class="entry-title entry-title-big">
                                                <a href="<?php the_permalink(); ?>" rel="bookmark"><span><?php the_title(); ?></span></a>
                                            </h2>
                                        </header>
                                        <div class="rating-box">
                                            <?php if( $omega_travel_agents_post_section_rating ){ ?>
                                                <p><svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 576 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"/></svg><?php echo esc_html( $omega_travel_agents_post_section_rating ); ?></p>
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <div class="post-days">
                                        <?php if( $omega_travel_agents_post_section_days_text ){ ?>
                                            <p><?php echo esc_html( $omega_travel_agents_post_section_days_text ); ?></p>
                                        <?php } ?>
                                        <?php if( $omega_travel_agents_post_section_amount ){ ?>
                                            <h5><?php echo esc_html( $omega_travel_agents_post_section_amount ); ?></h5>
                                        <?php } ?>
                                    </div>
                                    <?php if( $omega_travel_agents_post_section_location ){ ?>
                                        <p class="location"><svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 384 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M172.3 501.7C27 291 0 269.4 0 192 0 86 86 0 192 0s192 86 192 192c0 77.4-27 99-172.3 309.7-9.5 13.8-29.9 13.8-39.5 0zM192 272c44.2 0 80-35.8 80-80s-35.8-80-80-80-80 35.8-80 80 35.8 80 80 80z"/></svg><?php echo esc_html( $omega_travel_agents_post_section_location ); ?></p>
                                    <?php } ?>
                                </div>
                            </div>
                        <?php $s++; endwhile; ?>
                    </div>
                </div>
            </div>
             <?php
            wp_reset_postdata();
            endif;
          ?>
    <?php }

endif;

if (!function_exists('omega_travel_agents_post_format_icon')):

    // Post Format Icon.
    function omega_travel_agents_post_format_icon() {

        $omega_travel_agents_format = get_post_format(get_the_ID()) ?: 'standard';
        $omega_travel_agents_icon = '';
        $omega_travel_agents_title = '';
        if( $omega_travel_agents_format == 'video' ){
            $omega_travel_agents_icon = omega_travel_agents_get_theme_svg( 'video' );
            $omega_travel_agents_title = esc_html__('Video','omega-travel-agents');
        }elseif( $omega_travel_agents_format == 'audio' ){
            $omega_travel_agents_icon = omega_travel_agents_get_theme_svg( 'audio' );
            $omega_travel_agents_title = esc_html__('Audio','omega-travel-agents');
        }elseif( $omega_travel_agents_format == 'gallery' ){
            $omega_travel_agents_icon = omega_travel_agents_get_theme_svg( 'gallery' );
            $omega_travel_agents_title = esc_html__('Gallery','omega-travel-agents');
        }elseif( $omega_travel_agents_format == 'quote' ){
            $omega_travel_agents_icon = omega_travel_agents_get_theme_svg( 'quote' );
            $omega_travel_agents_title = esc_html__('Quote','omega-travel-agents');
        }elseif( $omega_travel_agents_format == 'image' ){
            $omega_travel_agents_icon = omega_travel_agents_get_theme_svg( 'image' );
            $omega_travel_agents_title = esc_html__('Image','omega-travel-agents');
        } elseif( $omega_travel_agents_format == 'link' ){
            $omega_travel_agents_icon = omega_travel_agents_get_theme_svg( 'link' );
            $omega_travel_agents_title = esc_html__('Link','omega-travel-agents');
        } elseif( $omega_travel_agents_format == 'status' ){
            $omega_travel_agents_icon = omega_travel_agents_get_theme_svg( 'status' );
            $omega_travel_agents_title = esc_html__('Status','omega-travel-agents');
        } elseif( $omega_travel_agents_format == 'aside' ){
            $omega_travel_agents_icon = omega_travel_agents_get_theme_svg( 'aside' );
            $omega_travel_agents_title = esc_html__('Aside','omega-travel-agents');
        } elseif( $omega_travel_agents_format == 'chat' ){
            $omega_travel_agents_icon = omega_travel_agents_get_theme_svg( 'chat' );
            $omega_travel_agents_title = esc_html__('Chat','omega-travel-agents');
        }
        
        if (!empty($omega_travel_agents_icon)) { ?>
            <div class="theme-post-format">
                <span class="post-format-icom"><?php echo omega_travel_agents_svg_escape($omega_travel_agents_icon); ?></span>
                <?php if( $omega_travel_agents_title ){ echo '<span class="post-format-label">'.esc_html( $omega_travel_agents_title ).'</span>'; } ?>
            </div>
        <?php }
    }

endif;

if ( ! function_exists( 'omega_travel_agents_svg_escape' ) ):

    /**
     * Get information about the SVG icon.
     *
     * @param string $omega_travel_agents_svg_name The name of the icon.
     * @param string $group The group the icon belongs to.
     * @param string $color Color code.
     */
    function omega_travel_agents_svg_escape( $omega_travel_agents_input ) {

        // Make sure that only our allowed tags and attributes are included.
        $omega_travel_agents_svg = wp_kses(
            $omega_travel_agents_input,
            array(
                'svg'     => array(
                    'class'       => true,
                    'xmlns'       => true,
                    'width'       => true,
                    'height'      => true,
                    'viewbox'     => true,
                    'aria-hidden' => true,
                    'role'        => true,
                    'focusable'   => true,
                ),
                'path'    => array(
                    'fill'      => true,
                    'fill-rule' => true,
                    'd'         => true,
                    'transform' => true,
                ),
                'polygon' => array(
                    'fill'      => true,
                    'fill-rule' => true,
                    'points'    => true,
                    'transform' => true,
                    'focusable' => true,
                ),
            )
        );

        if ( ! $omega_travel_agents_svg ) {
            return false;
        }

        return $omega_travel_agents_svg;

    }

endif;

if( !function_exists( 'omega_travel_agents_sanitize_sidebar_option_meta' ) ) :

    // Sidebar Option Sanitize.
    function omega_travel_agents_sanitize_sidebar_option_meta( $omega_travel_agents_input ){

        $metabox_options = array( 'global-sidebar','left-sidebar','right-sidebar','no-sidebar' );
        if( in_array( $omega_travel_agents_input,$metabox_options ) ){

            return $omega_travel_agents_input;

        }else{

            return '';

        }
    }

endif;

if( !function_exists( 'omega_travel_agents_sanitize_pagination_meta' ) ) :

    // Sidebar Option Sanitize.
    function omega_travel_agents_sanitize_pagination_meta( $omega_travel_agents_input ){

        $omega_travel_agents_metabox_options = array( 'Center','Right','Left');
        if( in_array( $omega_travel_agents_input,$omega_travel_agents_metabox_options ) ){

            return $omega_travel_agents_input;

        }else{

            return '';

        }
    }

endif;

if( !function_exists( 'omega_travel_agents_sanitize_menu_transform' ) ) :

    // Sidebar Option Sanitize.
    function omega_travel_agents_sanitize_menu_transform( $omega_travel_agents_input ){

        $omega_travel_agents_metabox_options = array( 'capitalize','uppercase','lowercase');
        if( in_array( $omega_travel_agents_input,$omega_travel_agents_metabox_options ) ){

            return $omega_travel_agents_input;

        }else{

            return '';

        }
    }

endif;

if( !function_exists( 'omega_travel_agents_sanitize_page_content_alignment' ) ) :

    // Sidebar Option Sanitize.
    function omega_travel_agents_sanitize_page_content_alignment( $omega_travel_agents_input ){

        $omega_travel_agents_metabox_options = array( 'left','center','right');
        if( in_array( $omega_travel_agents_input,$omega_travel_agents_metabox_options ) ){

            return $omega_travel_agents_input;

        }else{

            return '';

        }
    }

endif;

if( !function_exists( 'omega_travel_agents_sanitize_footer_widget_title_alignment' ) ) :

    // Footer Option Sanitize.
    function omega_travel_agents_sanitize_footer_widget_title_alignment( $omega_travel_agents_input ){

        $omega_travel_agents_metabox_options = array( 'left','center','right');
        if( in_array( $omega_travel_agents_input,$omega_travel_agents_metabox_options ) ){

            return $omega_travel_agents_input;

        }else{

            return '';

        }
    }

endif;

if( !function_exists( 'omega_travel_agents_sanitize_pagination_type' ) ) :

    /**
     * Sanitize the pagination type setting.
     *
     * @param string $omega_travel_agents_input The input value from the Customizer.
     * @return string The sanitized value.
     */
    function omega_travel_agents_sanitize_pagination_type( $omega_travel_agents_input ) {
        // Define valid options for the pagination type.
        $omega_travel_agents_valid_options = array( 'numeric', 'newer_older' ); // Update valid options to include 'newer_older'

        // If the input is one of the valid options, return it. Otherwise, return the default option ('numeric').
        if ( in_array( $omega_travel_agents_input, $omega_travel_agents_valid_options, true ) ) {
            return $omega_travel_agents_input;
        } else {
            // Return 'numeric' as the fallback if the input is invalid.
            return 'numeric';
        }
    }

endif;


// Sanitize the enable/disable setting for pagination
if( !function_exists('omega_travel_agents_sanitize_enable_pagination') ) :
    function omega_travel_agents_sanitize_enable_pagination( $omega_travel_agents_input ) {
        return (bool) $omega_travel_agents_input;
    }
endif;

if( !function_exists( 'omega_travel_agents_sanitize_copyright_alignment_meta' ) ) :

    // Sidebar Option Sanitize.
    function omega_travel_agents_sanitize_copyright_alignment_meta( $omega_travel_agents_input ){

        $omega_travel_agents_metabox_options = array( 'Default','Reverse','Center');
        if( in_array( $omega_travel_agents_input,$omega_travel_agents_metabox_options ) ){

            return $omega_travel_agents_input;

        }else{

            return '';

        }
    }

endif;

/**
 * Sidebar Layout Function
 */
function omega_travel_agents_get_final_sidebar_layout() {
	$omega_travel_agents_defaults       = omega_travel_agents_get_default_theme_options();
	$omega_travel_agents_global_layout  = get_theme_mod('omega_travel_agents_global_sidebar_layout', $omega_travel_agents_defaults['omega_travel_agents_global_sidebar_layout']);
	$omega_travel_agents_page_layout    = get_theme_mod('omega_travel_agents_page_sidebar_layout', $omega_travel_agents_global_layout);
	$omega_travel_agents_post_layout    = get_theme_mod('omega_travel_agents_post_sidebar_layout', $omega_travel_agents_global_layout);
	$omega_travel_agents_meta_layout    = get_post_meta(get_the_ID(), 'omega_travel_agents_post_sidebar_option', true);

	if (!empty($omega_travel_agents_meta_layout) && $omega_travel_agents_meta_layout !== 'default') {
		return $omega_travel_agents_meta_layout;
	}
	if (is_page() || (function_exists('is_shop') && is_shop())) {
		return $omega_travel_agents_page_layout;
	}
	if (is_single()) {
		return $omega_travel_agents_post_layout;
	}
	return $omega_travel_agents_global_layout;
}