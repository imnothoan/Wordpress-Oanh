<?php
/**
 * Template part for displaying posts
 *
 * @package Travel Booking Offers
 * @subpackage travel_booking_offers
 */
?>
<?php $travel_booking_offers_column_layout = get_theme_mod( 'travel_booking_offers_sidebar_post_layout');
if($travel_booking_offers_column_layout == 'four-column' || $travel_booking_offers_column_layout == 'three-column' ){ ?>
  <div id="category-post">
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
      <div class="page-box">
        <?php if (!is_single() && function_exists('get_post_gallery')) {
          $gallery = get_post_gallery(get_the_ID(), false);
          if ($gallery && isset($gallery['ids'])) { 
            $gallery_ids = explode(',', $gallery['ids']); ?>
            <div class="container entry-gallery">
              <div class="row">
                <?php $travel_booking_offers_max_images = min(count($gallery_ids), 4);
                for ($index = 0; $index < $travel_booking_offers_max_images; $index++) {
                  $id = $gallery_ids[$index];
                  $travel_booking_offers_image_url = wp_get_attachment_image_url($id, 'full'); ?>
                  <div class="col-md-6 mb-1 align-self-center">
                    <img class="img-fluid" src="<?php echo esc_url($travel_booking_offers_image_url); ?>" alt="Gallery Image <?php echo ($index + 1); ?>">
                  </div>
                <?php } ?>
              </div>
            </div>
          <?php }
        } ?>
        <div class="box-content mt-2 text-center">
            <h4><a href="<?php echo esc_url( get_permalink() ); ?>" title="<?php the_title_attribute(); ?>"><?php the_title();?></a></h4>
          <div class="box-info">
            <?php 
            // Add 'time' to your default meta order array
            $travel_booking_offers_blog_archive_ordering = get_theme_mod('blog_meta_order', array('date', 'author', 'comment', 'category', 'time'));

            foreach ($travel_booking_offers_blog_archive_ordering as $travel_booking_offers_blog_data_order) : 
                if ('date' === $travel_booking_offers_blog_data_order) : ?>
                    <i class="far fa-calendar-alt mb-1"></i>
                    <a href="<?php echo esc_url(get_day_link(get_the_date('Y'), get_the_date('m'), get_the_date('d'))); ?>" class="entry-date">
                        <?php echo esc_html(get_the_date('j F, Y')); ?>
                    </a>
                <?php elseif ('author' === $travel_booking_offers_blog_data_order) : ?>
                    <i class="fas fa-user mb-1"></i>
                    <a href="<?php echo esc_url(get_author_posts_url(get_the_author_meta('ID'))); ?>" class="entry-author">
                        <?php the_author(); ?>
                    </a>
                <?php elseif ('comment' === $travel_booking_offers_blog_data_order) : ?>
                    <i class="fas fa-comments mb-1"></i>
                    <a href="<?php comments_link(); ?>" class="entry-comments">
                        <?php comments_number(__('0 Comments', 'travel-booking-offers'), __('1 Comment', 'travel-booking-offers'), __('% Comments', 'travel-booking-offers')); ?>
                    </a>
                <?php elseif ('category' === $travel_booking_offers_blog_data_order) : ?>
                    <i class="fas fa-list mb-1"></i>
                    <?php
                    $categories = get_the_category();
                    if (!empty($categories)) :
                        foreach ($categories as $category) : ?>
                            <a href="<?php echo esc_url(get_category_link($category->term_id)); ?>" class="entry-category">
                                <?php echo esc_html($category->name); ?>
                            </a>
                        <?php endforeach;
                    endif; 
                    ?>
                <?php elseif ('time' === $travel_booking_offers_blog_data_order) : ?>
                    <i class="fas fa-clock mb-1"></i>
                    <span class="entry-time">
                        <?php echo get_the_time(); ?>
                    </span>
                <?php endif;
            endforeach; ?>
          </div>
          <p><?php echo esc_html( wp_trim_words( get_the_content(), get_theme_mod( 'travel_booking_offers_excerpt_count', 35 ) ) ); ?></p>
          <?php if(get_theme_mod('travel_booking_offers_remove_read_button',true) != ''){ ?>
            <div class="readmore-btn">
              <a href="<?php echo esc_url( get_permalink() );?>" class="blogbutton-small" title="<?php esc_attr_e( 'Read More', 'travel-booking-offers' ); ?>"><?php echo esc_html(get_theme_mod('travel_booking_offers_read_more_text',__('Read More','travel-booking-offers')));?></a>
            </div>
          <?php }?>
        </div>
        <div class="clearfix"></div>
      </div>
    </article>
  </div>
<?php } else{ ?>
<div id="category-post">
  <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="page-box row">
      <?php $travel_booking_offers_post_layout = get_theme_mod( 'travel_booking_offers_post_layout','image-content');
      if($travel_booking_offers_post_layout == 'image-content'){ ?>
        <div class="col-lg-6 col-md-12 align-self-center">
          <?php if (!is_single() && function_exists('get_post_gallery')) {
            $gallery = get_post_gallery(get_the_ID(), false);
            if ($gallery && isset($gallery['ids'])) {  
              $gallery_ids = explode(',', $gallery['ids']); ?>
              <div class="container entry-gallery">
                <div class="row">
                  <?php $travel_booking_offers_max_images = min(count($gallery_ids), 4);
                  for ($index = 0; $index < $travel_booking_offers_max_images; $index++) {
                    $id = $gallery_ids[$index];
                    $travel_booking_offers_image_url = wp_get_attachment_image_url($id, 'full'); ?>
                    <div class="col-md-6 mb-1 align-self-center">
                      <img class="img-fluid" src="<?php echo esc_url($travel_booking_offers_image_url); ?>" alt="Gallery Image <?php echo ($index + 1); ?>">
                    </div>
                  <?php } ?>
                </div>
              </div>
            <?php }
          } ?>
        </div>
        <div class="box-content col-lg-6 col-md-12">
          <h4><a href="<?php echo esc_url( get_permalink() ); ?>" title="<?php the_title_attribute(); ?>"><?php the_title();?></a></h4>
          <div class="box-info">
            <?php 
            // Add 'time' to your default meta order array
            $travel_booking_offers_blog_archive_ordering = get_theme_mod('blog_meta_order', array('date', 'author', 'comment', 'category', 'time'));

            foreach ($travel_booking_offers_blog_archive_ordering as $travel_booking_offers_blog_data_order) : 
                if ('date' === $travel_booking_offers_blog_data_order) : ?>
                    <i class="far fa-calendar-alt mb-1"></i>
                    <a href="<?php echo esc_url(get_day_link(get_the_date('Y'), get_the_date('m'), get_the_date('d'))); ?>" class="entry-date">
                        <?php echo esc_html(get_the_date('j F, Y')); ?>
                    </a>
                <?php elseif ('author' === $travel_booking_offers_blog_data_order) : ?>
                    <i class="fas fa-user mb-1"></i>
                    <a href="<?php echo esc_url(get_author_posts_url(get_the_author_meta('ID'))); ?>" class="entry-author">
                        <?php the_author(); ?>
                    </a>
                <?php elseif ('comment' === $travel_booking_offers_blog_data_order) : ?>
                    <i class="fas fa-comments mb-1"></i>
                    <a href="<?php comments_link(); ?>" class="entry-comments">
                        <?php comments_number(__('0 Comments', 'travel-booking-offers'), __('1 Comment', 'travel-booking-offers'), __('% Comments', 'travel-booking-offers')); ?>
                    </a>
                <?php elseif ('category' === $travel_booking_offers_blog_data_order) : ?>
                    <i class="fas fa-list mb-1"></i>
                    <?php
                    $categories = get_the_category();
                    if (!empty($categories)) :
                        foreach ($categories as $category) : ?>
                            <a href="<?php echo esc_url(get_category_link($category->term_id)); ?>" class="entry-category">
                                <?php echo esc_html($category->name); ?>
                            </a>
                        <?php endforeach;
                    endif; 
                    ?>
                <?php elseif ('time' === $travel_booking_offers_blog_data_order) : ?>
                    <i class="fas fa-clock mb-1"></i>
                    <span class="entry-time">
                        <?php echo get_the_time(); ?>
                    </span>
                <?php endif;
            endforeach; ?>
          </div>
          <p><?php echo esc_html( wp_trim_words( get_the_content(), get_theme_mod( 'travel_booking_offers_excerpt_count', 35 ) ) ); ?></p>
          <?php if(get_theme_mod('travel_booking_offers_remove_read_button',true) != ''){ ?>
            <div class="readmore-btn">
              <a href="<?php echo esc_url( get_permalink() );?>" class="blogbutton-small" title="<?php esc_attr_e( 'Read More', 'travel-booking-offers' ); ?>"><?php echo esc_html(get_theme_mod('travel_booking_offers_read_more_text',__('Read More','travel-booking-offers')));?></a>
            </div>
          <?php }?>
        </div>
      <?php }
      else if($travel_booking_offers_post_layout == 'content-image'){ ?>
        <div class="box-content col-lg-6 col-md-12">
          <h4><a href="<?php echo esc_url( get_permalink() ); ?>" title="<?php the_title_attribute(); ?>"><?php the_title();?></a></h4>
          <div class="box-info">
            <?php 
            // Add 'time' to your default meta order array
            $travel_booking_offers_blog_archive_ordering = get_theme_mod('blog_meta_order', array('date', 'author', 'comment', 'category', 'time'));

            foreach ($travel_booking_offers_blog_archive_ordering as $travel_booking_offers_blog_data_order) : 
              if ('date' === $travel_booking_offers_blog_data_order) : ?>
                    <i class="far fa-calendar-alt mb-1"></i>
                    <a href="<?php echo esc_url(get_day_link(get_the_date('Y'), get_the_date('m'), get_the_date('d'))); ?>" class="entry-date">
                        <?php echo esc_html(get_the_date('j F, Y')); ?>
                    </a>
                <?php elseif ('author' === $travel_booking_offers_blog_data_order) : ?>
                    <i class="fas fa-user mb-1"></i>
                    <a href="<?php echo esc_url(get_author_posts_url(get_the_author_meta('ID'))); ?>" class="entry-author">
                        <?php the_author(); ?>
                    </a>
                <?php elseif ('comment' === $travel_booking_offers_blog_data_order) : ?>
                    <i class="fas fa-comments mb-1"></i>
                    <a href="<?php comments_link(); ?>" class="entry-comments">
                        <?php comments_number(__('0 Comments', 'travel-booking-offers'), __('1 Comment', 'travel-booking-offers'), __('% Comments', 'travel-booking-offers')); ?>
                    </a>
                <?php elseif ('category' === $travel_booking_offers_blog_data_order) : ?>
                    <i class="fas fa-list mb-1"></i>
                    <?php
                    $categories = get_the_category();
                    if (!empty($categories)) :
                        foreach ($categories as $category) : ?>
                            <a href="<?php echo esc_url(get_category_link($category->term_id)); ?>" class="entry-category">
                                <?php echo esc_html($category->name); ?>
                            </a>
                        <?php endforeach;
                    endif; 
                    ?>
                <?php elseif ('time' === $travel_booking_offers_blog_data_order) : ?>
                    <i class="fas fa-clock mb-1"></i>
                    <span class="entry-time">
                        <?php echo get_the_time(); ?>
                    </span>
                <?php endif;
            endforeach; ?>
          </div>
          <p><?php echo esc_html( wp_trim_words( get_the_content(), get_theme_mod( 'travel_booking_offers_excerpt_count', 35 ) ) ); ?></p>
          <?php if(get_theme_mod('travel_booking_offers_remove_read_button',true) != ''){ ?>
            <div class="readmore-btn">
              <a href="<?php echo esc_url( get_permalink() );?>" class="blogbutton-small" title="<?php esc_attr_e( 'Read More', 'travel-booking-offers' ); ?>"><?php echo esc_html(get_theme_mod('travel_booking_offers_read_more_text',__('Read More','travel-booking-offers')));?></a>
            </div>
          <?php }?>
        </div>
        <div class="col-lg-6 col-md-12 align-self-center pt-lg-0 pt-3">
          <?php if (!is_single() && function_exists('get_post_gallery')) {
            $gallery = get_post_gallery(get_the_ID(), false);
            if ($gallery && isset($gallery['ids'])) {  
              $gallery_ids = explode(',', $gallery['ids']); ?>
              <div class="container entry-gallery">
                <div class="row">
                  <?php $travel_booking_offers_max_images = min(count($gallery_ids), 4);
                  for ($index = 0; $index < $travel_booking_offers_max_images; $index++) {
                    $id = $gallery_ids[$index];
                    $travel_booking_offers_image_url = wp_get_attachment_image_url($id, 'full'); ?>
                    <div class="col-md-6 mb-1 align-self-center">
                      <img class="img-fluid" src="<?php echo esc_url($travel_booking_offers_image_url); ?>" alt="Gallery Image <?php echo ($index + 1); ?>">
                    </div>
                  <?php } ?>
                </div>
              </div>
            <?php }
          } ?>
        </div>
      <?php }?>
      <div class="clearfix"></div>
    </div>
  </article>
</div>
<?php } ?>