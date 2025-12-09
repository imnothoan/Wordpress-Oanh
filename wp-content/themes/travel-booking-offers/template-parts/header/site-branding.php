<?php
/*
* Display Logo and contact details
*/
?>
<div class="main-header">
  <div class="headerbox">
    <div class="container-fuild">
      <div class="row">
        <div class="col-lg-2 col-md-4 col-12 align-self-center">
          <div class="logo my-2">
            <?php if( has_custom_logo() ) travel_booking_offers_the_custom_logo(); ?>
            <?php if(get_theme_mod('travel_booking_offers_site_title',true) == 1){ ?>
              <?php if (is_front_page() && is_home()) : ?>
                <h1 class="text-capitalize">
                  <a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a>
                </h1> 
              <?php else : ?>
                <p class="text-capitalize site-title mb-1">
                  <a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a>
                </p>
              <?php endif; ?>
            <?php }?>
            <?php $travel_booking_offers_description = get_bloginfo( 'description', 'display' );
            if ( $travel_booking_offers_description || is_customize_preview() ) : ?>
              <?php if(get_theme_mod('travel_booking_offers_site_tagline',false)){ ?>
                <p class="site-description mb-0"><?php echo esc_html($travel_booking_offers_description); ?></p>
              <?php }?>
            <?php endif; ?>
          </div>
        </div>
        <div class="col-lg-7 col-md-3 navigation-col align-self-center">
          <?php get_template_part('template-parts/navigation/site-nav'); ?>
        </div>
        <div class="col-lg-3 col-md-5 btn-col align-self-center">
          <div class="call">
            <?php if( get_theme_mod( 'travel_booking_offers_about_call_text' ) != '' || get_theme_mod( 'travel_booking_offers_about_call' ) != '') { ?>
              <div class="main-abt-contact-box">
                <div class="about-call-icon me-3"><i class="fas fa-phone-volume"></i></div>
                <div class="about-contact-text">
                    <p class="call-text mb-0 text-start"><?php echo esc_html( get_theme_mod('travel_booking_offers_about_call_text','') ); ?></p>
                    <p class="call-simplep mb-0 text-start"><a href="tel:<?php echo esc_html(get_theme_mod('travel_booking_offers_about_call')); ?>">
                        <?php echo esc_html(get_theme_mod('travel_booking_offers_about_call')); ?></a>
                    </p>
                </div>
              </div>
            <?php } ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>