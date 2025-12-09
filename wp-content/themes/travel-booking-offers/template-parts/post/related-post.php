<?php

$travel_booking_offers_post_args = array(
    'posts_per_page'    => get_theme_mod( 'travel_booking_offers_related_post_per_page', 3 ),
    'orderby'           => 'rand',
    'post__not_in'      => array( get_the_ID() ),
);

$travel_booking_offers_number_of_post_columns = get_theme_mod('travel_booking_offers_related_post_per_columns', 3);

$travel_booking_offers_col_lg_post_class = 'col-lg-' . (12 / $travel_booking_offers_number_of_post_columns);

$travel_booking_offers_related = wp_get_post_terms( get_the_ID(), 'category' );
$travel_booking_offers_ids = array();
foreach( $travel_booking_offers_related as $term ) {
    $travel_booking_offers_ids[] = $term->term_id;
}

$travel_booking_offers_post_args['category__in'] = $travel_booking_offers_ids; 

$travel_booking_offers_related_posts = new WP_Query( $travel_booking_offers_post_args );

if ( $travel_booking_offers_related_posts->have_posts() ) : ?>
        <div class="related-post-block">
        <h3 class="text-center mb-3"><?php echo esc_html(get_theme_mod('travel_booking_offers_related_post_heading',__('Related Posts','travel-booking-offers')));?></h3>
        <div class="row">
            <?php while ( $travel_booking_offers_related_posts->have_posts() ) : $travel_booking_offers_related_posts->the_post(); ?>
                <div class="<?php echo esc_attr($travel_booking_offers_col_lg_post_class); ?> col-md-6">
                    <div id="category-post">
                        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                            <div class="page-box">
                                <?php if(has_post_thumbnail()) { ?>
                                        <?php the_post_thumbnail();  ?>    
                                <?php } ?>
                                <div class="box-content text-start">
                                    <h4 class="text-start py-2"><a href="<?php echo esc_url( get_permalink() ); ?>" title="<?php the_title_attribute(); ?>"><?php the_title();?></a></h4>
                                    
                                    <p><?php echo wp_trim_words(get_the_content(), get_theme_mod('travel_booking_offers_excerpt_count',10) );?></p>
                                    <?php if(get_theme_mod('travel_booking_offers_remove_read_button',true) != ''){ ?>
                                    <div class="readmore-btn text-start mb-1">
                                        <a href="<?php echo esc_url( get_permalink() );?>" class="blogbutton-small" title="<?php esc_attr_e( 'Read More', 'travel-booking-offers' ); ?>"><?php echo esc_html(get_theme_mod('travel_booking_offers_read_more_text',__('Read More','travel-booking-offers')));?></a>
                                    </div>
                                    <?php }?>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </article>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
    </div>
<?php endif;
wp_reset_postdata();