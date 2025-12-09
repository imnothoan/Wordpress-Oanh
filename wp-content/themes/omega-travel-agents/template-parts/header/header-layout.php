<?php
/**
 * Header Layout
 * @package Omega Travel Agents
 */

$omega_travel_agents_default = omega_travel_agents_get_default_theme_options();

$omega_travel_agents_header_layout_toggle_link = esc_html( get_theme_mod( 'omega_travel_agents_header_layout_toggle_link',
$omega_travel_agents_default['omega_travel_agents_header_layout_toggle_link'] ) );

$omega_travel_agents_sticky = get_theme_mod('omega_travel_agents_sticky');
$omega_travel_agents_data_sticky = "false";
if ($omega_travel_agents_sticky) {
$omega_travel_agents_data_sticky = "true";
}
global $wp_customize;

?>
<div class="main-header">
    
    <section id="middle-header" class="header-navbar <?php if( is_user_logged_in() && !isset( $wp_customize ) ){ echo "login-user";} ?>" data-sticky="<?php echo esc_attr($omega_travel_agents_data_sticky); ?>">
        <div class="wrapper header-wrapper header-box">
            <div class="header-titles">
                <?php
                    omega_travel_agents_site_logo();
                    omega_travel_agents_site_description();
                ?>
            </div>
            <div class="theme-header-areas header-areas-right">
                <div class="site-navigation">
                    <nav class="primary-menu-wrapper" aria-label="<?php esc_attr_e('Horizontal', 'omega-travel-agents'); ?>" role="navigation">
                        <ul class="primary-menu theme-menu">
                            <?php
                            if (has_nav_menu('omega-travel-agents-primary-menu')) {
                                wp_nav_menu(
                                    array(
                                        'container' => '',
                                        'items_wrap' => '%3$s',
                                        'theme_location' => 'omega-travel-agents-primary-menu',
                                    )
                                );
                            } else {
                                wp_list_pages(
                                    array(
                                        'match_menu_classes' => true,
                                        'show_sub_menu_icons' => true,
                                        'title_li' => false,
                                        'walker' => new Omega_Travel_Agents_Walker_Page(),
                                    )
                                );
                            } ?>
                        </ul>
                    </nav>
                </div>
                <div class="navbar-controls twp-hide-js">
                    <button type="button" class="navbar-control navbar-control-offcanvas">
                        <span class="navbar-control-trigger" tabindex="-1">
                            <?php omega_travel_agents_the_theme_svg('menu'); ?>
                        </span>
                    </button>
                </div>
            </div>
             <div class="theme-header-areas header-areas-left account-box">
                <a class="link-btn" href="<?php echo esc_url( $omega_travel_agents_header_layout_toggle_link ); ?>"><svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M16 132h416c8.8 0 16-7.2 16-16V76c0-8.8-7.2-16-16-16H16C7.2 60 0 67.2 0 76v40c0 8.8 7.2 16 16 16zm0 160h416c8.8 0 16-7.2 16-16v-40c0-8.8-7.2-16-16-16H16c-8.8 0-16 7.2-16 16v40c0 8.8 7.2 16 16 16zm0 160h416c8.8 0 16-7.2 16-16v-40c0-8.8-7.2-16-16-16H16c-8.8 0-16 7.2-16 16v40c0 8.8 7.2 16 16 16z"/></svg></a>
                <?php if(class_exists('woocommerce')){ ?>
                    <?php if ( is_user_logged_in() ) { ?>
                        <a class="account-area" href="<?php echo esc_url( get_permalink( get_option('woocommerce_myaccount_page_id') ) ); ?>" title="<?php esc_attr_e('My Account','omega-travel-agents'); ?>"><svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M497 273L329 441c-15 15-41 4.5-41-17v-96H152c-13.3 0-24-10.7-24-24v-96c0-13.3 10.7-24 24-24h136V88c0-21.4 25.9-32 41-17l168 168c9.3 9.4 9.3 24.6 0 34zM192 436v-40c0-6.6-5.4-12-12-12H96c-17.7 0-32-14.3-32-32V160c0-17.7 14.3-32 32-32h84c6.6 0 12-5.4 12-12V76c0-6.6-5.4-12-12-12H96c-53 0-96 43-96 96v192c0 53 43 96 96 96h84c6.6 0 12-5.4 12-12z"/></svg></a>
                    <?php }
                    else { ?>
                        <a class="account-area" href="<?php echo esc_url( get_permalink( get_option('woocommerce_myaccount_page_id') ) ); ?>" title="<?php esc_attr_e('Login / Register','omega-travel-agents'); ?>"><svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M497 273L329 441c-15 15-41 4.5-41-17v-96H152c-13.3 0-24-10.7-24-24v-96c0-13.3 10.7-24 24-24h136V88c0-21.4 25.9-32 41-17l168 168c9.3 9.4 9.3 24.6 0 34zM192 436v-40c0-6.6-5.4-12-12-12H96c-17.7 0-32-14.3-32-32V160c0-17.7 14.3-32 32-32h84c6.6 0 12-5.4 12-12V76c0-6.6-5.4-12-12-12H96c-53 0-96 43-96 96v192c0 53 43 96 96 96h84c6.6 0 12-5.4 12-12z"/></svg></a>
                    <?php } ?>
                <?php }?>
            </div>
        </div>
        <hr>
    </section>

</div>