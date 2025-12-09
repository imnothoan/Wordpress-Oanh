<?php
/**
 * Template part for displaying the services section
 *
 * @package Travel Booking Offers
 * @subpackage travel_booking_offers
 */

// Get the courses setting.
$travel_booking_offers_courses = get_theme_mod('travel_booking_offers_courses_setting', true);

if ($travel_booking_offers_courses == '1') {
?>
<section id="tour-places" class="py-5 px-md-0 px-3">
  <div class="container">
    <div class="text-center main-sec-title">
      <?php if (get_theme_mod('travel_booking_offers_offer_section_tittle')) { ?>
        <h2 class="text-center text-capitalize mb-2"><?php echo esc_html(get_theme_mod('travel_booking_offers_offer_section_tittle')); ?></h2>
      <?php } ?>
    </div>
    <?php if (get_theme_mod('travel_booking_offers_offer_section_text')) { ?>
      <h3 class="text-center px-md-5 serv-description"><?php echo esc_html(get_theme_mod('travel_booking_offers_offer_section_text')); ?></h3>
    <?php } ?>
    <div class="row mt-4">
      <?php
        // Get the selected post category and number of posts to show.
        $travel_booking_offers_post_category = get_theme_mod('travel_booking_offers_offer_section_category');
        $travel_booking_offers_posts_to_show = get_theme_mod('travel_booking_offers_posts_to_show', 3);

        if ($travel_booking_offers_post_category) {
          // Query for posts in the selected category.
          $travel_booking_offers_page_query = new WP_Query(array(
            'category_name' => esc_html($travel_booking_offers_post_category),
            'posts_per_page' => $travel_booking_offers_posts_to_show
          ));

          if ($travel_booking_offers_page_query->have_posts()) {
            $travel_booking_offers_post_count = 0;

            // Loop through the posts.
            while ($travel_booking_offers_page_query->have_posts()) : $travel_booking_offers_page_query->the_post();
              $travel_booking_offers_post_count++;
      ?>
            <div class="col-lg-4 col-md-4 mb-4">
              <div class="cat-inner-box">
                <?php if (has_post_thumbnail()) : ?>
                    <img src="<?php echo esc_url(get_the_post_thumbnail_url()); ?>" alt="<?php the_title_attribute(); ?>"/>
                <?php else : ?>
                    <div class="course-color"></div>
                <?php endif; ?>
                <div class="mainserv-content text-center">
                    <h4 class="mb-2 pt-3"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                     <?php 
                    $travel_booking_offers_star_rating = get_theme_mod('travel_booking_offers_star_rating' . $travel_booking_offers_post_count, ''); 
                    // Check if the rating is not empty
                    if (!empty($travel_booking_offers_star_rating)) { ?>
                        <div class="star-rating my-2">
                            <?php for ($travel_booking_offers_i = 1; $travel_booking_offers_i <= 5; $travel_booking_offers_i++) {
                              if ($travel_booking_offers_i <= $travel_booking_offers_star_rating) {
                                  echo '<i class="fas fa-star"></i>';
                              } else {
                                  echo '<i class="far fa-star"></i>';
                              }
                            } ?>
                        </div>
                    <?php } ?>
                    <?php
                      $travel_booking_offers_add_price = get_theme_mod( 'travel_booking_offers_add_price' . $travel_booking_offers_post_count );
                      if ( ! empty( $travel_booking_offers_add_price ) ) : ?>
                          <p class="cours-price mb-0">
                              <?php echo esc_html( $travel_booking_offers_add_price ) . esc_html__( '/', 'travel-booking-offers' ); ?>
                              <span class="per-day"><?php esc_html_e( 'day', 'travel-booking-offers' ); ?></span>
                          </p>
                    <?php endif; ?>
                  <?php
                  $travel_booking_offers_total_no_beds  = get_theme_mod('travel_booking_offers_total_no_beds' . $travel_booking_offers_post_count);
                  $travel_booking_offers_total_no_baths = get_theme_mod('travel_booking_offers_total_no_baths' . $travel_booking_offers_post_count);
                  $travel_booking_offers_total_no_guest = get_theme_mod('travel_booking_offers_total_no_guest' . $travel_booking_offers_post_count);

                  // Only show tour-info if any value exists
                  if ( $travel_booking_offers_total_no_beds || $travel_booking_offers_total_no_baths || $travel_booking_offers_total_no_guest ) :
                  ?>
                  <div class="tour-info my-lg-3 my-1">
                    <div class="row">
                      <?php if ( $travel_booking_offers_total_no_beds ) : ?>
                        <div class="col-lg-4 col-md-4 col-4 align-self-center car-features text-center px-1">
                          <span class="features-text"><i class="fas fa-bed me-lg-2 me-1"></i><?php echo esc_html( $travel_booking_offers_total_no_beds ); ?> <?php esc_html_e( 'Beds', 'travel-booking-offers' ); ?></span>
                        </div>
                      <?php endif; ?>
                      <?php if ( $travel_booking_offers_total_no_baths ) : ?>
                        <div class="col-lg-4 col-md-4 col-4 align-self-center car-features text-center px-1">
                          <span class="features-text"><i class="fas fa-bath me-lg-2 me-1"></i><?php echo esc_html( $travel_booking_offers_total_no_baths ); ?> <?php esc_html_e( 'Baths', 'travel-booking-offers' ); ?></span>
                        </div>
                      <?php endif; ?>
                      <?php if ( $travel_booking_offers_total_no_guest ) : ?>
                        <div class="col-lg-4 col-md-4 col-4 align-self-center car-features text-center px-1">
                          <span class="features-text"><i class="fas fa-users me-lg-2 me-1"></i><?php echo esc_html( $travel_booking_offers_total_no_guest ); ?> <?php esc_html_e( 'Guests', 'travel-booking-offers' ); ?></span>
                        </div>
                      <?php endif; ?>
                    </div>
                  </div>
                  <?php endif; ?>
                </div>
              </div>
            </div>
          <?php endwhile;
          wp_reset_postdata(); // Reset post data after the custom query.
          } else {
            // Optionally display a message if no posts are found.
            echo '<div class="no-postfound">' . esc_html__('No posts found.', 'travel-booking-offers') . '</div>';
          }
        }
      ?>
    </div>
  </div>
</section>
<?php 
} // End of the if statement for courses.
?>