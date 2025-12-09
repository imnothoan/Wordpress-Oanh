<?php
/**
 * Template part for displaying slider section
 *
 * @package Travel Booking Offers
 * @subpackage travel_booking_offers
 */

$travel_booking_offers_static_image = get_template_directory_uri() . '/assets/images/slider-img.png';

// Check if slider arrows are enabled
if ( get_theme_mod( 'travel_booking_offers_slider_arrows', true ) ) : ?>

<section id="slider">
  <div class="owl-carousel">
    <?php
    $travel_booking_offers_slide_pages = array();
    // Loop through 4 possible slides
    for ( $travel_booking_offers_count = 1; $travel_booking_offers_count <= 4; $travel_booking_offers_count++ ) {
        $travel_booking_offers_mod = intval( get_theme_mod( 'travel_booking_offers_slider_page' . $travel_booking_offers_count ) );
        if ( $travel_booking_offers_mod && 'page-none-selected' !== $travel_booking_offers_mod ) {
            $travel_booking_offers_slide_pages[] = $travel_booking_offers_mod;
        }
    }
    // Check if there are any pages for the slider
    if ( ! empty( $travel_booking_offers_slide_pages ) ) :
        $travel_booking_offers_args = array(
            'post_type'      => 'page',
            'post__in'       => $travel_booking_offers_slide_pages,
            'orderby'        => 'post__in',
            'posts_per_page' => 4, // Limit to 4 posts
        );
        $travel_booking_offers_query = new WP_Query( $travel_booking_offers_args );

        if ( $travel_booking_offers_query->have_posts() ) :
            while ( $travel_booking_offers_query->have_posts() ) : $travel_booking_offers_query->the_post(); ?>
                <div class="slide-box">
                    <div class="inner_content">
                        <?php if ( get_theme_mod( 'travel_booking_offers_slider_short_heading' ) ) : ?>
                            <p class="slider-top text-capitalize"><?php echo esc_html( get_theme_mod( 'travel_booking_offers_slider_short_heading' ) ); ?></p>
                        <?php endif; ?>
                        <?php if (get_theme_mod('travel_booking_offers_show_slider_title', true)) : ?>
                            <h1 class="custom-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                        <?php endif; ?>
                        <div class="more-btn mt-4">
                            <a class="btn-1" href="<?php echo esc_url( get_permalink() ); ?>" target="_blank">
                                <?php esc_html_e( 'Contact Us', 'travel-booking-offers' ); ?><i class="fas fa-chevron-right ms-2"></i>
                            </a>
                        </div>
                    </div>
                    <div class="img-box">
                        <?php if ( has_post_thumbnail() ) : ?>
                            <img src="<?php echo esc_url( get_the_post_thumbnail_url( get_the_ID(), 'full' ) ); ?>" alt="<?php the_title_attribute(); ?>" />
                        <?php else : ?>
                            <img src="<?php echo esc_url( $travel_booking_offers_static_image ); ?>" alt="<?php esc_attr_e( 'Placeholder', 'travel-booking-offers' ); ?>" />
                        <?php endif; ?>
                    </div>
                </div>
            <?php endwhile;
            wp_reset_postdata();
        else : ?>
            <div class="no-postfound"><?php esc_html_e( 'No slides found', 'travel-booking-offers' ); ?></div>
        <?php endif;
    endif;
    ?>
  </div>
</section>
<?php endif; // End of slider check ?>

<div class="main-contact-form">
    <div class="container">
        <?php 
        // Retrieve and check the first tab text for display logic
        $travel_booking_offers_tab_text = get_theme_mod('travel_booking_offers_projetcs_text1', '');
        if ($travel_booking_offers_tab_text) : ?>
            <div class="main-tab text-start">
                <?php
                // Loop through the tabs
                for ($travel_booking_offers_j = 1; $travel_booking_offers_j <= 4; $travel_booking_offers_j++) :
                    $travel_booking_offers_tab_text = get_theme_mod('travel_booking_offers_projetcs_text' . $travel_booking_offers_j, '');
                    if ($travel_booking_offers_tab_text) :
                        $travel_booking_offers_tab_id = sanitize_title($travel_booking_offers_tab_text);
                        $active_class = ($travel_booking_offers_j == 1) ? 'active' : ''; // First tab is active
                ?>
                        <button 
                            class="tablinks <?php echo esc_attr($active_class); ?>" 
                            data-tab="<?php echo esc_attr($travel_booking_offers_tab_id); ?>">
                            <?php echo esc_html($travel_booking_offers_tab_text); ?>
                        </button>
                <?php endif; endfor; ?>
            </div>
        <?php endif; ?>
        <?php 
        // Check if at least one shortcode exists
        if (
            get_theme_mod('travel_booking_offers_projetcs_shortcode1', '') != '' || 
            get_theme_mod('travel_booking_offers_projetcs_shortcode2', '') != '' || 
            get_theme_mod('travel_booking_offers_projetcs_shortcode3', '') != '' || 
            get_theme_mod('travel_booking_offers_projetcs_shortcode4', '') != ''
        ) : 
            for ($travel_booking_offers_j = 1; $travel_booking_offers_j <= 4; $travel_booking_offers_j++) :
                $travel_booking_offers_tab_text = get_theme_mod('travel_booking_offers_projetcs_text' . $travel_booking_offers_j, '');
                if ($travel_booking_offers_tab_text) :
                    $travel_booking_offers_tab_id = sanitize_title($travel_booking_offers_tab_text);
                    $display_style = ($travel_booking_offers_j == 1) ? 'display: block;' : 'display: none;'; // First content is visible
        ?>
            <div 
                id="<?php echo esc_attr($travel_booking_offers_tab_id); ?>" 
                class="slider-contact-form tabcontent" 
                style="<?php echo esc_attr($display_style); ?>">
                <?php 
                $travel_booking_offers_shortcode = get_theme_mod('travel_booking_offers_projetcs_shortcode' . $travel_booking_offers_j, '');
                if (!empty($travel_booking_offers_shortcode)) {
                    echo do_shortcode($travel_booking_offers_shortcode);
                }
                ?>
            </div>
        <?php 
                endif;
            endfor;
        endif; ?>
    </div>
</div>