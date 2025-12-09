<?php
/**
 * Template Name: Custom Home Page
 */
get_header();

?>
<!-- banner section -->
<main id="maincontent" role="main">
  <?php do_action( 'real_estate_developer_above_banner' ); ?>
  <?php if (get_theme_mod('real_estate_developer_hide_show_banner_section', true)) { ?>
    <section id="banner-sec">
      <div class="banner-img position-relative mx-lg-5 mx-md-5 mx-2">
        <div class="bnr-top-box my-2">
          <div class="container">
            <div class="row">
              <div class="col-xxl-5 col-xl-4 col-lg-4 col-md-7 col-12 py-3 align-self-end">
                <?php if (get_theme_mod('real_estate_developer_hide_show_banner_video', true)) { ?>
                  <div class="swiper mySwiper m-0">
                    <div class="swiper-wrapper pb-3 pt-3">
                      <?php for ($real_estate_developer_i = 1; $real_estate_developer_i <= 3; $real_estate_developer_i++) { ?>
                        <div class="swiper-slide">
                          <div class="video-bg-img">
                            <?php if (get_theme_mod('real_estate_developer_video_bg_img' . $real_estate_developer_i) != "") { ?>
                              <img src="<?php echo esc_url(get_theme_mod('real_estate_developer_video_bg_img' . $real_estate_developer_i)); ?>" alt="<?php echo esc_attr('video image', 'real-estate-developer'); ?>">
                            <?php } ?>
                            <a class="openBtn" data-target="videoOverlay<?php echo $real_estate_developer_i; ?>">
                              <i class="<?php echo esc_attr(get_theme_mod('real_estate_developer_video_button_icon', 'fas fa-play')); ?>"></i>
                            </a>
                          </div>
                        </div>
                      <?php } ?>
                    </div>
                  </div>
                  <!-- Popups moved outside the Swiper -->
                  <?php for ($real_estate_developer_i = 1; $real_estate_developer_i <= 3; $real_estate_developer_i++) { ?>
                    <div class="overlay videoOverlay" id="videoOverlay<?php echo $real_estate_developer_i; ?>">
                      <div class="popup">
                        <span class="close-btn"><i class="fas fa-times"></i></span>
                        <embed width="100%" height="100%" src="<?php echo esc_url(get_theme_mod('real_estate_developer_video_button_url' . $real_estate_developer_i)); ?>" frameborder="0" allowfullscreen></embed>
                      </div>
                    </div>
                  <?php } ?>
                <?php }?>
              </div>
              <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-5 col-12 align-self-end">
                <div class="phone-box position-relative">
                  <?php if (get_theme_mod('real_estate_developer_phone_bg_img') != "") { ?>
                    <img src="<?php echo esc_url(get_theme_mod('real_estate_developer_phone_bg_img')); ?>" alt="<?php echo esc_attr('phone image', 'real-estate-developer'); ?>">
                    <div class="phone-bg position-absolute"></div>
                  <?php }?>
                  <?php if (get_theme_mod('real_estate_developer_banner_phone_title') != '' || get_theme_mod('real_estate_developer_banner_phone_number') != '') { ?>
                    <div class="phone-content position-absolute">
                      <div class="row">
                        <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-3 align-self-center">
                          <a href="tel:<?php echo esc_attr( get_theme_mod('real_estate_developer_banner_phone_number') ); ?>"><i class="<?php echo esc_attr(get_theme_mod('real_estate_developer_banner_phone_icon','fa-solid fa-phone')); ?>"></i></a>
                        </div>
                        <div class="col-xxl-9 col-xl-9 col-lg-9 col-md-9 col-9 align-self-center ps-0">
                          <p class="phone-title py-1 px-3 text-capitalize mb-0"><?php echo esc_html(get_theme_mod('real_estate_developer_banner_phone_title')); ?></p>
                          <p class="phone-no mb-0"></p>
                        </div>
                      </div>
                    </div>
                  <?php }?>
                </div>
              </div>
              <div class="col-xxl-4 col-xl-5 col-lg-5 bnr-right-box align-self-end">
                <?php if (get_theme_mod('real_estate_developer_banner_top_img') != "") { ?>
                  <img src="<?php echo esc_url(get_theme_mod('real_estate_developer_banner_top_img')); ?>" class="banner-top-img" alt="<?php echo esc_attr('Banner Top Image', 'real-estate-developer'); ?>">
                <?php } else {?>
                  <img class="banner-top-img" src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/images/banner-top-img.png" alt="<?php echo esc_attr('Banner Top Image', 'real-estate-developer'); ?>">
                <?php }?>
              </div>
            </div>
          </div>
        </div>
        <div class="banner-content position-relative">
          <div class="container">
            <div class="banner-box py-4 position-relative">
              <div class="row">
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-12 align-self-center banner-text-box">
                  <?php if (get_theme_mod('real_estate_developer_banner_title') != '') { ?>
                    <h1 class="banner-title text-capitalize"><?php echo esc_html(get_theme_mod('real_estate_developer_banner_title')); ?></h1>
                  <?php } ?>
                  <?php if (get_theme_mod('real_estate_developer_banner_text') != '') { ?>
                    <p class="banner-text mb-4 mt-2"><?php echo esc_html(get_theme_mod('real_estate_developer_banner_text')); ?></p>
                  <?php } ?>
                  <?php if ( get_theme_mod('real_estate_developer_banner_button_label') != '' ) {?>
                    <div class ="banner-btn pb-3">
                      <a href="<?php echo esc_url(get_theme_mod('real_estate_developer_banner_button_url'));?>" class="text-capitalize"><?php echo esc_html(get_theme_mod('real_estate_developer_banner_button_label'));?><i class="<?php echo esc_attr(get_theme_mod('real_estate_developer_banner_btn_icon','fa-solid fa-house')); ?> ms-3"></i>
                      </a>
                    </div>
                  <?php }?>
                </div>
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-12 align-self-end bnr-img text-center position-relative">
                  <?php if (get_theme_mod('real_estate_developer_banner_side_img') != "") { ?>
                    <img src="<?php echo esc_url(get_theme_mod('real_estate_developer_banner_side_img')); ?>" class="position-absolute" alt="<?php echo esc_attr('banner image', 'real-estate-developer'); ?>">
                  <?php }?>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="banner-sun position-absolute"></div>
      </div>
    </section>
  <?php }?>
  <?php do_action( 'real_estate_developer_below_banner' ); ?>

  <!-- Category Section -->
  <?php if (get_theme_mod('real_estate_developer_category_section_hide_show', true)){ ?>
    <section id="category-section" class="my-4">
      <div class="container">
        <div class="category-sec-content mb-4 text-center">
          <?php if(get_theme_mod('real_estate_developer_category_section_title') != '') {?>
            <h2 class="section-title text-capitalize mb-2"><?php echo esc_html(get_theme_mod('real_estate_developer_category_section_title')) ?></h2>
          <?php }?>
          <?php if(get_theme_mod('real_estate_developer_category_section_text') != '') {?>
            <p class="small-text mb-2 text-capitalize"><?php echo esc_html(get_theme_mod('real_estate_developer_category_section_text')) ?></p>
          <?php }?>
        </div>
        <?php if (post_type_exists('property') && defined('ERE_METABOX_PREFIX')) : ?>
          <?php
            $real_estate_developer_property_terms = get_terms(array(
              'taxonomy' => 'property-type',
              'hide_empty' => false,
              'orderby' => 'name',
              'order' => 'ASC'
            ));

            if (!empty($real_estate_developer_property_terms)) {
              echo '<div class="property-nav d-flex justify-content-center mb-4">';
              echo '<select id="property-type-dropdown" class="form-select w-auto">';
              foreach ($real_estate_developer_property_terms as $real_estate_developer_term) {
                echo '<option value="' . esc_attr($real_estate_developer_term->term_id) . '">' . esc_html($real_estate_developer_term->name) . '</option>';
              }
              echo '</select>';
              echo '</div>';
            }
          ?>
          <div id="property-list">
            <div class="row category-listing-row">
              <?php 
              $real_estate_developer_args = array(
                'post_type' => 'property',
                'ignore_sticky_posts' => true,
                'posts_per_page' => 8,
                'orderby' => 'date',
                'order' => 'DESC',
                'post_status' => 'publish',
              );

              $real_estate_developer_latestloop = new WP_Query($real_estate_developer_args);
              if ($real_estate_developer_latestloop->have_posts()) :  
                while ($real_estate_developer_latestloop->have_posts()) : 
                  $real_estate_developer_latestloop->the_post();

                  $real_estate_developer_property_id = get_the_ID();
                  $real_estate_developer_property_type_terms = get_the_terms($real_estate_developer_property_id, 'property-type');
                  $real_estate_developer_property_type = $real_estate_developer_property_type_terms && !is_wp_error($real_estate_developer_property_type_terms)
                    ? implode(', ', wp_list_pluck($real_estate_developer_property_type_terms, 'name'))
                    : __('Not specified', 'real-estate-developer');

                  // Generate filtering classes
                  $real_estate_developer_property_type_classes = '';
                  if ($real_estate_developer_property_type_terms && !is_wp_error($real_estate_developer_property_type_terms)) {
                    foreach ($real_estate_developer_property_type_terms as $real_estate_developer_term) {
                      $real_estate_developer_property_type_classes .= ' property-type-' . $real_estate_developer_term->term_id;
                    }
                  }

                  $real_estate_developer_bedroom = get_post_meta($real_estate_developer_property_id, ERE_METABOX_PREFIX . 'property_bedrooms', true);
                  $real_estate_developer_bathroom = get_post_meta($real_estate_developer_property_id, ERE_METABOX_PREFIX . 'property_bathrooms', true);
                  $real_estate_developer_size = get_post_meta($real_estate_developer_property_id, ERE_METABOX_PREFIX . 'property_size', true);
                  $real_estate_developer_property_location = get_post_meta($real_estate_developer_property_id, ERE_METABOX_PREFIX . 'property_address', true);
                  $real_estate_developer_price_prefix = get_post_meta($real_estate_developer_property_id, ERE_METABOX_PREFIX . 'property_price_prefix', true);
                  $real_estate_developer_price_unit = get_post_meta($real_estate_developer_property_id, ERE_METABOX_PREFIX . 'property_price_unit', true);
                  $real_estate_developer_price_short = get_post_meta($real_estate_developer_property_id, ERE_METABOX_PREFIX . 'property_price_short', true);
                  $real_estate_developer_price_postfix = get_post_meta($real_estate_developer_property_id, ERE_METABOX_PREFIX . 'property_price_postfix', true);
              ?>          

              <div class="col-xl-3 col-lg-4 col-md-6 col-12 property-item mb-4<?php echo esc_attr($real_estate_developer_property_type_classes); ?>">
                <div class="property-content">
                  <div class="img-box position-relative mb-2">
                    <?php if (has_post_thumbnail()) : ?>
                      <?php the_post_thumbnail('real-estate-developer-slider'); ?>
                    <?php else : ?>
                      <div class="img-blank"></div>
                    <?php endif; ?>
                    <div class="property-type position-absolute">
                      <p class="mb-0 text-capitalize"><?php echo esc_html($real_estate_developer_property_type); ?></p>
                    </div>
                  </div>
                  <div class="property-text">
                    <div class="property-text-inner">
                      <h3 class="property-title mb-0 pb-3 text-capitalize"><?php the_title(); ?></h3>
                      <?php if (!empty($real_estate_developer_property_location)) : ?>
                        <p class="property-address mb-0 pb-3">
                          <i class="fas fa-map-marker-alt me-2"></i><?php echo esc_html($real_estate_developer_property_location); ?>
                        </p>
                      <?php endif; ?>
                    </div>
                    <div class="property-text-meta">
                      <div class="d-flex justify-content-between gap-2 pb-3 align-items-center">
                        <?php if (!empty($real_estate_developer_bedroom)) : ?>
                          <div class="property-meta-content">
                            <p class="mb-0"><?php echo esc_html__('Bedroom', 'real-estate-developer'); ?> </p>
                            <div class="property-count d-flex align-items-center">
                              <i class="fas fa-bed me-2"></i>
                              <p class="mb-0"><?php echo esc_html($real_estate_developer_bedroom); ?></p>
                            </div>
                          </div>
                        <?php endif; ?>
                        <?php if (!empty($real_estate_developer_bathroom)) : ?>
                          <div class="property-meta-content">
                            <p class="mb-0"><?php echo esc_html__('Bathroom', 'real-estate-developer'); ?> </p>
                            <div class="property-count d-flex align-items-center">
                              <i class="fa-solid fa-sink me-2"></i>
                              <p class="mb-0"><?php echo esc_html($real_estate_developer_bathroom); ?></p>
                            </div>
                          </div>
                        <?php endif; ?>
                        <?php if (!empty($real_estate_developer_size)) : ?>
                          <div class="property-meta-content">
                            <p class="mb-0"><?php echo esc_html__('Area', 'real-estate-developer'); ?></p>
                            <div class="property-count d-flex align-items-center">
                              <p class="mb-0"><?php echo esc_html($real_estate_developer_size); ?> <?php echo esc_html(ere_get_measurement_units_land_area()); ?></p>
                            </div>
                          </div>
                        <?php endif; ?>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-xl-6 col-lg-6 col-md-6 col-6 text-start align-self-center">
                        <p class="property-price mb-0">
                          <?php echo esc_html($real_estate_developer_price_prefix) . ' ' . esc_html(ere_get_format_money($real_estate_developer_price_short, $real_estate_developer_price_unit)) . ' ' . esc_html($real_estate_developer_price_postfix); ?>
                        </p>
                      </div>
                      <div class="col-xl-6 col-lg-6 col-md-6 col-6 text-end align-self-center">
                        <div class="property-view-btn">
                          <a href="<?php the_permalink(); ?>"><?php echo esc_html__('View', 'real-estate-developer'); ?><i class="fa-solid fa-house ms-3"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <?php 
                endwhile;
                wp_reset_postdata();
              endif; 
              ?>
            </div>
          </div>
        <?php endif; ?>
      </div>
    </section>
  <?php }?>
  <?php do_action( 'real_estate_developer_after_service' ); ?>

  <div id="content-vw" class="entry-content">
    <div class="container">
      <?php while (have_posts()) : the_post(); ?>
        <?php the_content(); ?>
      <?php endwhile; // end of the loop. 
      ?>
    </div>
  </div>
</main>

<?php get_footer(); ?> 