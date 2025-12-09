<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package Real Estate Developer 
 */
?>
<div class="footer <?php if( get_theme_mod( 'real_estate_developer_sticky_sidebar', false) == 1) { ?> sidebar-sticky"<?php } else { ?>close-sticky <?php } ?>>
<div id="sidebar" class="wow zoomInUp delay-1000" data-wow-duration="2s" <?php if( is_page_template('blog-post-left-sidebar.php')){?> style="float:left;"<?php } ?>>    
    <?php if ( ! dynamic_sidebar( 'sidebar-1' ) ) : ?>
        <aside id="search" class="widget" role="complementary" aria-label="<?php esc_attr_e( 'firstsidebar', 'real-estate-developer' ); ?>">
            <h3 class="widget-title"><?php esc_html_e( 'Search', 'real-estate-developer' ); ?></h3>
            <?php get_search_form(); ?>
        </aside>
        <aside id="archives" class="widget" role="complementary" aria-label="<?php esc_attr_e( 'secondsidebar', 'real-estate-developer' ); ?>">
            <h3 class="widget-title"><?php esc_html_e( 'Archives', 'real-estate-developer' ); ?></h3>
            <ul>
                <?php wp_get_archives( array( 'type' => 'monthly' ) ); ?>
            </ul>
        </aside>
        <aside id="meta" class="widget" role="complementary" aria-label="<?php esc_attr_e( 'thirdsidebar', 'real-estate-developer' ); ?>">
            <h3 class="widget-title"><?php esc_html_e( 'Meta', 'real-estate-developer' ); ?></h3>
            <ul>
                <?php wp_register(); ?>
                <li><?php wp_loginout(); ?></li>
                <?php wp_meta(); ?>
            </ul>
        </aside>
        <aside id="categories" class="widget" role="complementary" aria-label="<?php esc_attr_e( 'forthsidebar', 'real-estate-developer' ); ?>"> 
            <h3 class="widget-title"><?php esc_html_e( 'Categories', 'real-estate-developer' ); ?></h3>          
            <ul>
                <?php wp_list_categories('title_li=');  ?>
            </ul>
        </aside>
        <aside id="categories-dropdown" class="widget" role="complementary" aria-label="<?php esc_attr_e( 'fifthsidebar', 'real-estate-developer' ); ?>">
            <h3 class="widget-title"><?php esc_html_e( 'Dropdown Categories', 'real-estate-developer' ); ?></h3>
            <ul>
                <?php wp_dropdown_categories('title_li=');  ?>
            </ul>
        </aside>
        <aside id="tag-cloud-sec" class="widget" role="complementary" aria-label="<?php esc_attr_e( 'sixthsidebar', 'real-estate-developer' ); ?>">
            <h3 class="widget-title"><?php esc_html_e( 'Tag Cloud', 'real-estate-developer' ); ?></h3>
            <ul>
                <?php wp_tag_cloud('title_li=');  ?>
            </ul>
        </aside>
    <?php endif; ?>
</div>
</div> 