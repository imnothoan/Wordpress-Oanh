<?php
/**
 * The template part for Top Header
 *
 * @package Real Estate Developer 
 * @subpackage real-estate-developer
 * @since real-estate-developer 1.0
 */
?>

<div class="main-header mx-lg-5 mx-md-5 mx-2 <?php if( get_theme_mod( 'real_estate_developer_sticky_header', false) == 1 || get_theme_mod( 'real_estate_developer_stickyheader_hide_show', false) == 1) { ?> header-sticky"<?php } else { ?>close-sticky <?php } ?>">
  <div class="container">
    <div class="main-topbar py-2">
      <div class="row">
        <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-4 col-sm-4 col-6 align-self-center">
          <div class="logo pb-0 pb-md-0">
            <?php if ( has_custom_logo() ) : ?>
              <div class="site-logo"><?php the_custom_logo(); ?></div>
            <?php endif; ?>
            <?php $real_estate_developer_blog_info = get_bloginfo( 'name' ); ?>
              <?php if ( ! empty( $real_estate_developer_blog_info ) ) : ?>
                <?php if ( is_front_page() && is_home() ) : ?>
                  <?php if( get_theme_mod('real_estate_developer_logo_title_hide_show',true) == 1){ ?>
                    <p class="site-title mb-0 text-start"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
                  <?php } ?>
                <?php else : ?>
                  <?php if( get_theme_mod('real_estate_developer_logo_title_hide_show',true) == 1){ ?>
                    <p class="site-title mb-0 text-start"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
                  <?php } ?>
                <?php endif; ?>
              <?php endif; ?>
              <?php
                $real_estate_developer_description = get_bloginfo( 'description', 'display' );
                if ( $real_estate_developer_description || is_customize_preview() ) :
              ?>
              <?php if( get_theme_mod('real_estate_developer_tagline_hide_show',false) == 1){ ?>
                <p class="site-description mb-0 text-start">
                  <?php echo esc_html($real_estate_developer_description); ?>
                </p>
              <?php } ?>
            <?php endif; ?>
          </div>
        </div>
        <div class="col-xxl-9 col-xl-9 col-lg-9 col-md-4 col-sm-4 col-3 align-self-center">
          <?php get_template_part('template-parts/header/navigation'); ?>
        </div>
        <div class="col-xxl-1 col-xl-1 col-lg-1 col-md-4 col-sm-4 col-3 align-self-center text-end top-icons d-flex justify-content-end">
          <?php if ( get_theme_mod('real_estate_developer_topbar_button_url') != '') {?>
            <div class ="topbar-btn">
              <a href="<?php echo esc_url(get_theme_mod('real_estate_developer_topbar_button_url'));?>"><i class="<?php echo esc_attr(get_theme_mod('real_estate_developer_header_btn_icon','fa-solid fa-user')); ?>"></i>
              </a>
            </div>
          <?php }?>
        </div>
      </div>
    </div>
  </div>
</div>