<?php
/**
 * Custom Functions
 * @package Omega Travel Agents
 * @since 1.0.0
 */

if( !function_exists('omega_travel_agents_site_logo') ):

    /**
     * Logo & Description
     */
    /**
     * Displays the site logo, either text or image.
     *
     * @param array $omega_travel_agents_args Arguments for displaying the site logo either as an image or text.
     * @param boolean $omega_travel_agents_echo Echo or return the HTML.
     *
     * @return string $omega_travel_agents_html Compiled HTML based on our arguments.
     */
    function omega_travel_agents_site_logo( $omega_travel_agents_args = array(), $omega_travel_agents_echo = true ){
        $omega_travel_agents_logo = get_custom_logo();
        $omega_travel_agents_site_title = get_bloginfo('name');
        $omega_travel_agents_contents = '';
        $omega_travel_agents_classname = '';
        $omega_travel_agents_defaults = array(
            'logo' => '%1$s<span class="screen-reader-text">%2$s</span>',
            'logo_class' => 'site-logo site-branding',
            'title' => '<a href="%1$s" class="custom-logo-name">%2$s</a>',
            'title_class' => 'site-title',
            'home_wrap' => '<h1 class="%1$s">%2$s</h1>',
            'single_wrap' => '<div class="%1$s">%2$s</div>',
            'condition' => (is_front_page() || is_home()) && !is_page(),
        );
        $omega_travel_agents_args = wp_parse_args($omega_travel_agents_args, $omega_travel_agents_defaults);
        /**
         * Filters the arguments for `omega_travel_agents_site_logo()`.
         *
         * @param array $omega_travel_agents_args Parsed arguments.
         * @param array $omega_travel_agents_defaults Function's default arguments.
         */
        $omega_travel_agents_args = apply_filters('omega_travel_agents_site_logo_args', $omega_travel_agents_args, $omega_travel_agents_defaults);
        if ( has_custom_logo() ) {
            $omega_travel_agents_contents = sprintf($omega_travel_agents_args['logo'], $omega_travel_agents_logo, esc_html($omega_travel_agents_site_title));
            $omega_travel_agents_contents .= sprintf($omega_travel_agents_args['title'], esc_url( get_home_url(null, '/') ), esc_html($omega_travel_agents_site_title));
            $omega_travel_agents_classname = $omega_travel_agents_args['logo_class'];
        } else {
            $omega_travel_agents_contents = sprintf($omega_travel_agents_args['title'], esc_url( get_home_url(null, '/') ), esc_html($omega_travel_agents_site_title));
            $omega_travel_agents_classname = $omega_travel_agents_args['title_class'];
        }
        $wrap = $omega_travel_agents_args['condition'] ? 'home_wrap' : 'single_wrap';
        // $wrap = 'home_wrap';
        $omega_travel_agents_html = sprintf($omega_travel_agents_args[$wrap], $omega_travel_agents_classname, $omega_travel_agents_contents);
        /**
         * Filters the arguments for `omega_travel_agents_site_logo()`.
         *
         * @param string $omega_travel_agents_html Compiled html based on our arguments.
         * @param array $omega_travel_agents_args Parsed arguments.
         * @param string $omega_travel_agents_classname Class name based on current view, home or single.
         * @param string $omega_travel_agents_contents HTML for site title or logo.
         */
        $omega_travel_agents_html = apply_filters('omega_travel_agents_site_logo', $omega_travel_agents_html, $omega_travel_agents_args, $omega_travel_agents_classname, $omega_travel_agents_contents);
        if (!$omega_travel_agents_echo) {
            return $omega_travel_agents_html;
        }
        echo $omega_travel_agents_html; //phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped

    }

endif;

if( !function_exists('omega_travel_agents_site_description') ):

    /**
     * Displays the site description.
     *
     * @param boolean $omega_travel_agents_echo Echo or return the html.
     *
     * @return string $omega_travel_agents_html The HTML to display.
     */
    function omega_travel_agents_site_description($omega_travel_agents_echo = true){

        if ( get_theme_mod('omega_travel_agents_display_header_text', false) == true ) :
        $omega_travel_agents_description = get_bloginfo('description');
        if (!$omega_travel_agents_description) {
            return;
        }
        $omega_travel_agents_wrapper = '<div class="site-description"><span>%s</span></div><!-- .site-description -->';
        $omega_travel_agents_html = sprintf($omega_travel_agents_wrapper, esc_html($omega_travel_agents_description));
        /**
         * Filters the html for the site description.
         *
         * @param string $omega_travel_agents_html The HTML to display.
         * @param string $omega_travel_agents_description Site description via `bloginfo()`.
         * @param string $omega_travel_agents_wrapper The format used in case you want to reuse it in a `sprintf()`.
         * @since 1.0.0
         *
         */
        $omega_travel_agents_html = apply_filters('omega_travel_agents_site_description', $omega_travel_agents_html, $omega_travel_agents_description, $omega_travel_agents_wrapper);
        if (!$omega_travel_agents_echo) {
            return $omega_travel_agents_html;
        }
        echo $omega_travel_agents_html; //phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
        endif;
    }

endif;

if( !function_exists('omega_travel_agents_posted_on') ):

    /**
     * Prints HTML with meta information for the current post-date/time.
     */
    function omega_travel_agents_posted_on( $omega_travel_agents_icon = true, $omega_travel_agents_animation_class = '' ){

        $omega_travel_agents_default = omega_travel_agents_get_default_theme_options();
        $omega_travel_agents_post_date = absint( get_theme_mod( 'omega_travel_agents_post_date',$omega_travel_agents_default['omega_travel_agents_post_date'] ) );

        if( $omega_travel_agents_post_date ){

            $omega_travel_agents_time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
            if (get_the_time('U') !== get_the_modified_time('U')) {
                $omega_travel_agents_time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time><time class="updated" datetime="%3$s">%4$s</time>';
            }

            $omega_travel_agents_time_string = sprintf($omega_travel_agents_time_string,
                esc_attr(get_the_date(DATE_W3C)),
                esc_html(get_the_date()),
                esc_attr(get_the_modified_date(DATE_W3C)),
                esc_html(get_the_modified_date())
            );

            $omega_travel_agents_year = get_the_date('Y');
            $omega_travel_agents_month = get_the_date('m');
            $omega_travel_agents_day = get_the_date('d');
            $omega_travel_agents_link = get_day_link($omega_travel_agents_year, $omega_travel_agents_month, $omega_travel_agents_day);

            $omega_travel_agents_posted_on = '<a href="' . esc_url($omega_travel_agents_link) . '" rel="bookmark">' . $omega_travel_agents_time_string . '</a>';

            echo '<div class="entry-meta-item entry-meta-date">';
            echo '<div class="entry-meta-wrapper '.esc_attr( $omega_travel_agents_animation_class ).'">';

            if( $omega_travel_agents_icon ){

                echo '<span class="entry-meta-icon calendar-icon"> ';
                omega_travel_agents_the_theme_svg('calendar');
                echo '</span>';

            }

            echo '<span class="posted-on">' . $omega_travel_agents_posted_on . '</span>'; // WPCS: XSS OK.
            echo '</div>';
            echo '</div>';

        }

    }

endif;

if( !function_exists('omega_travel_agents_posted_by') ) :

    /**
     * Prints HTML with meta information for the current author.
     */
    function omega_travel_agents_posted_by( $omega_travel_agents_icon = true, $omega_travel_agents_animation_class = '' ){   

        $omega_travel_agents_default = omega_travel_agents_get_default_theme_options();
        $omega_travel_agents_post_author = absint( get_theme_mod( 'omega_travel_agents_post_author',$omega_travel_agents_default['omega_travel_agents_post_author'] ) );

        if( $omega_travel_agents_post_author ){

            echo '<div class="entry-meta-item entry-meta-author">';
            echo '<div class="entry-meta-wrapper '.esc_attr( $omega_travel_agents_animation_class ).'">';

            if( $omega_travel_agents_icon ){
            
                echo '<span class="entry-meta-icon author-icon"> ';
                omega_travel_agents_the_theme_svg('user');
                echo '</span>';
                
            }

            $omega_travel_agents_byline = '<span class="author vcard"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta('ID') ) ) . '">' . esc_html(get_the_author()) . '</a></span>';
            echo '<span class="byline"> ' . $omega_travel_agents_byline . '</span>'; // WPCS: XSS OK.
            echo '</div>';
            echo '</div>';

        }

    }

endif;


if( !function_exists('omega_travel_agents_posted_by_avatar') ) :

    /**
     * Prints HTML with meta information for the current author.
     */
    function omega_travel_agents_posted_by_avatar( $date = false ){

        $omega_travel_agents_default = omega_travel_agents_get_default_theme_options();
        $omega_travel_agents_post_author = absint( get_theme_mod( 'omega_travel_agents_post_author',$omega_travel_agents_default['omega_travel_agents_post_author'] ) );

        if( $omega_travel_agents_post_author ){



            echo '<div class="entry-meta-left">';
            echo '<div class="entry-meta-item entry-meta-avatar">';
            echo wp_kses_post( get_avatar( get_the_author_meta( 'ID' ) ) );
            echo '</div>';
            echo '</div>';

            echo '<div class="entry-meta-right">';

            $omega_travel_agents_byline = '<span class="author vcard"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta('ID') ) ) . '">' . esc_html(get_the_author()) . '</a></span>';

            echo '<div class="entry-meta-item entry-meta-byline"> ' . $omega_travel_agents_byline . '</div>';

            if( $date ){
                omega_travel_agents_posted_on($omega_travel_agents_icon = false);
            }
            echo '</div>';

        }

    }

endif;

if( !function_exists('omega_travel_agents_entry_footer') ):

    /**
     * Prints HTML with meta information for the categories, tags and comments.
     */
    function omega_travel_agents_entry_footer( $omega_travel_agents_cats = true, $omega_travel_agents_tags = true, $omega_travel_agents_edits = true){   

        $omega_travel_agents_default = omega_travel_agents_get_default_theme_options();
        $omega_travel_agents_post_category = absint( get_theme_mod( 'omega_travel_agents_post_category',$omega_travel_agents_default['omega_travel_agents_post_category'] ) );
        $omega_travel_agents_post_tags = absint( get_theme_mod( 'omega_travel_agents_post_tags',$omega_travel_agents_default['omega_travel_agents_post_tags'] ) );

        // Hide category and tag text for pages.
        if ('post' === get_post_type()) {

            if( $omega_travel_agents_cats && $omega_travel_agents_post_category ){

                /* translators: used between list items, there is a space after the comma */
                $omega_travel_agents_categories = get_the_category();
                if ($omega_travel_agents_categories) {
                    echo '<div class="entry-meta-item entry-meta-categories">';
                    echo '<div class="entry-meta-wrapper">';
                
                    /* translators: 1: list of categories. */
                    echo '<span class="cat-links">';
                    foreach( $omega_travel_agents_categories as $omega_travel_agents_category ){

                        $omega_travel_agents_cat_name = $omega_travel_agents_category->name;
                        $omega_travel_agents_cat_slug = $omega_travel_agents_category->slug;
                        $omega_travel_agents_cat_url = get_category_link( $omega_travel_agents_category->term_id );
                        ?>

                        <a class="twp_cat_<?php echo esc_attr( $omega_travel_agents_cat_slug ); ?>" href="<?php echo esc_url( $omega_travel_agents_cat_url ); ?>" rel="category tag"><?php echo esc_html( $omega_travel_agents_cat_name ); ?></a>

                    <?php }
                    echo '</span>'; // WPCS: XSS OK.
                    echo '</div>';
                    echo '</div>';
                }

            }

            if( $omega_travel_agents_tags && $omega_travel_agents_post_tags ){
                /* translators: used between list items, there is a space after the comma */
                $omega_travel_agents_tags_list = get_the_tag_list('', esc_html_x(', ', 'list item separator', 'omega-travel-agents'));
                if( $omega_travel_agents_tags_list ){

                    echo '<div class="entry-meta-item entry-meta-tags">';
                    echo '<div class="entry-meta-wrapper">';

                    /* translators: 1: list of tags. */
                    echo '<span class="tags-links">';
                    echo wp_kses_post($omega_travel_agents_tags_list) . '</span>'; // WPCS: XSS OK.
                    echo '</div>';
                    echo '</div>';

                }

            }

            if( $omega_travel_agents_edits ){

                edit_post_link(
                    sprintf(
                        wp_kses(
                        /* translators: %s: Name of current post. Only visible to screen readers */
                            __('Edit <span class="screen-reader-text">%s</span>', 'omega-travel-agents'),
                            array(
                                'span' => array(
                                    'class' => array(),
                                ),
                            )
                        ),
                        get_the_title()
                    ),
                    '<span class="edit-link">',
                    '</span>'
                );
            }

        }
    }

endif;

if ( ! function_exists( 'omega_travel_agents_post_thumbnail' ) ) :

    /**
     * Displays an optional post thumbnail.
     *
     * Shows background style image with height class on archive/search/front,
     * and a normal inline image on single post/page views.
     */
    function omega_travel_agents_post_thumbnail( $omega_travel_agents_image_size = 'medium' ) {

        if ( post_password_required() || is_attachment() ) {
            return;
        }

        // Fallback image path
        $omega_travel_agents_default_image = get_template_directory_uri() . '/inc/homepage-setup/assets/homepage-setup-images/post-img1.png';

        // Image size → height class map
        $omega_travel_agents_size_class_map = array(
            'full'      => 'data-bg-large',
            'large'     => 'data-bg-big',
            'medium'    => 'data-bg-medium',
            'small'     => 'data-bg-small',
            'xsmall'    => 'data-bg-xsmall',
            'thumbnail' => 'data-bg-thumbnail',
        );

        $omega_travel_agents_class = isset( $omega_travel_agents_size_class_map[ $omega_travel_agents_image_size ] )
            ? $omega_travel_agents_size_class_map[ $omega_travel_agents_image_size ]
            : 'data-bg-medium';

        if ( is_singular() ) {
            the_post_thumbnail();
        } else {
            // 🔵 On archives → use background image style
            $omega_travel_agents_image = has_post_thumbnail()
                ? wp_get_attachment_image_src( get_post_thumbnail_id(), $omega_travel_agents_image_size )
                : array( $omega_travel_agents_default_image );

            $omega_travel_agents_bg_image = isset( $omega_travel_agents_image[0] ) ? $omega_travel_agents_image[0] : $omega_travel_agents_default_image;
            ?>
            <div class="post-thumbnail data-bg <?php echo esc_attr( $omega_travel_agents_class ); ?>"
                 data-background="<?php echo esc_url( $omega_travel_agents_bg_image ); ?>">
                <a href="<?php the_permalink(); ?>" class="theme-image-responsive" tabindex="0"></a>
            </div>
            <?php
        }
    }

endif;

if( !function_exists('omega_travel_agents_is_comment_by_post_author') ):

    /**
     * Comments
     */
    /**
     * Check if the specified comment is written by the author of the post commented on.
     *
     * @param object $omega_travel_agents_comment Comment data.
     *
     * @return bool
     */
    function omega_travel_agents_is_comment_by_post_author($omega_travel_agents_comment = null){

        if (is_object($omega_travel_agents_comment) && $omega_travel_agents_comment->user_id > 0) {
            $omega_travel_agents_user = get_userdata($omega_travel_agents_comment->user_id);
            $post = get_post($omega_travel_agents_comment->comment_post_ID);
            if (!empty($omega_travel_agents_user) && !empty($post)) {
                return $omega_travel_agents_comment->user_id === $post->post_author;
            }
        }
        return false;
    }

endif;

if( !function_exists('omega_travel_agents_breadcrumb') ) :

    /**
     * Omega Travel Agents Breadcrumb
     */
    function omega_travel_agents_breadcrumb($omega_travel_agents_comment = null){

        echo '<div class="entry-breadcrumb">';
        omega_travel_agents_breadcrumb_trail();
        echo '</div>';

    }

endif;