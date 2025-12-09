<?php
/**
 * Displays footer widgets if assigned
 *
 * @package Travel Booking Offers
 * @subpackage travel_booking_offers
 */
?>
<?php

// Determine the number of columns dynamically for the footer (you can replace this with your logic).
$travel_booking_offers_no_of_footer_col = get_theme_mod('travel_booking_offers_footer_columns', 4); // Change this value as needed.

// Calculate the Bootstrap class for large screens (col-lg-X) for footer.
$travel_booking_offers_col_lg_footer_class = 'col-lg-' . (12 / $travel_booking_offers_no_of_footer_col);

// Calculate the Bootstrap class for medium screens (col-md-X) for footer.
$travel_booking_offers_col_md_footer_class = 'col-md-' . (12 / $travel_booking_offers_no_of_footer_col);
?>
<div class="container">
    <aside class="widget-area row py-2 pt-3" role="complementary" aria-label="<?php esc_attr_e( 'Footer', 'travel-booking-offers' ); ?>">
        <?php
        $travel_booking_offers_default_widgets = array(
            1 => 'search',
            2 => 'archives',
            3 => 'meta',
            4 => 'categories'
        );

        for ($travel_booking_offers_i = 1; $travel_booking_offers_i <= $travel_booking_offers_no_of_footer_col; $travel_booking_offers_i++) :
            $travel_booking_offers_lg_class = esc_attr($travel_booking_offers_col_lg_footer_class);
            $travel_booking_offers_md_class = esc_attr($travel_booking_offers_col_md_footer_class);
            echo '<div class="col-12 ' . $travel_booking_offers_lg_class . ' ' . $travel_booking_offers_md_class . '">';

            if (is_active_sidebar('footer-' . $travel_booking_offers_i)) {
                dynamic_sidebar('footer-' . $travel_booking_offers_i);
            } else {
                // Display default widget content if not active.
                switch ($travel_booking_offers_default_widgets[$travel_booking_offers_i] ?? '') {
                    case 'search':
                        ?>
                        <aside class="widget" role="complementary" aria-label="<?php esc_attr_e('Search', 'travel-booking-offers'); ?>">
                            <h3 class="widget-title"><?php esc_html_e('Search', 'travel-booking-offers'); ?></h3>
                            <?php get_search_form(); ?>
                        </aside>
                        <?php
                        break;

                    case 'archives':
                        ?>
                        <aside class="widget" role="complementary" aria-label="<?php esc_attr_e('Archives', 'travel-booking-offers'); ?>">
                            <h3 class="widget-title"><?php esc_html_e('Archives', 'travel-booking-offers'); ?></h3>
                            <ul><?php wp_get_archives(['type' => 'monthly']); ?></ul>
                        </aside>
                        <?php
                        break;

                    case 'meta':
                        ?>
                        <aside class="widget" role="complementary" aria-label="<?php esc_attr_e('Meta', 'travel-booking-offers'); ?>">
                            <h3 class="widget-title"><?php esc_html_e('Meta', 'travel-booking-offers'); ?></h3>
                            <ul>
                                <?php wp_register(); ?>
                                <li><?php wp_loginout(); ?></li>
                                <?php wp_meta(); ?>
                            </ul>
                        </aside>
                        <?php
                        break;

                    case 'categories':
                        ?>
                        <aside class="widget" role="complementary" aria-label="<?php esc_attr_e('Categories', 'travel-booking-offers'); ?>">
                            <h3 class="widget-title"><?php esc_html_e('Categories', 'travel-booking-offers'); ?></h3>
                            <ul><?php wp_list_categories(['title_li' => '']); ?></ul>
                        </aside>
                        <?php
                        break;
                }
            }

            echo '</div>';
        endfor;
        ?>
    </aside>
</div>