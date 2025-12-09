<?php
/**
 * Custom page walker for this theme.
 *
 * @package Omega Travel Agents
 */

if (!class_exists('Omega_Travel_Agents_Walker_Page')) {
    /**
     * CUSTOM PAGE WALKER
     * A custom walker for pages.
     */
    class Omega_Travel_Agents_Walker_Page extends Walker_Page
    {

        /**
         * Outputs the beginning of the current element in the tree.
         *
         * @param string $omega_travel_agents_output Used to append additional content. Passed by reference.
         * @param WP_Post $page Page data object.
         * @param int $omega_travel_agents_depth Optional. Depth of page. Used for padding. Default 0.
         * @param array $omega_travel_agents_args Optional. Array of arguments. Default empty array.
         * @param int $current_page Optional. Page ID. Default 0.
         * @since 2.1.0
         *
         * @see Walker::start_el()
         */

        public function start_lvl( &$omega_travel_agents_output, $omega_travel_agents_depth = 0, $omega_travel_agents_args = array() ) {
            $omega_travel_agents_indent  = str_repeat( "\t", $omega_travel_agents_depth );
            $omega_travel_agents_output .= "$omega_travel_agents_indent<ul class='sub-menu'>\n";
        }

        public function start_el(&$omega_travel_agents_output, $page, $omega_travel_agents_depth = 0, $omega_travel_agents_args = array(), $current_page = 0)
        {

            if (isset($omega_travel_agents_args['item_spacing']) && 'preserve' === $omega_travel_agents_args['item_spacing']) {
                $t = "\t";
                $n = "\n";
            } else {
                $t = '';
                $n = '';
            }
            if ($omega_travel_agents_depth) {
                $omega_travel_agents_indent = str_repeat($t, $omega_travel_agents_depth);
            } else {
                $omega_travel_agents_indent = '';
            }

            $omega_travel_agents_css_class = array('page_item', 'page-item-' . $page->ID);

            if (isset($omega_travel_agents_args['pages_with_children'][$page->ID])) {
                $omega_travel_agents_css_class[] = 'page_item_has_children';
            }

            if (!empty($current_page)) {
                $_current_page = get_post($current_page);
                if ($_current_page && in_array($page->ID, $_current_page->ancestors, true)) {
                    $omega_travel_agents_css_class[] = 'current_page_ancestor';
                }
                if ($page->ID === $current_page) {
                    $omega_travel_agents_css_class[] = 'current_page_item';
                } elseif ($_current_page && $page->ID === $_current_page->post_parent) {
                    $omega_travel_agents_css_class[] = 'current_page_parent';
                }
            } elseif (get_option('page_for_posts') === $page->ID) {
                $omega_travel_agents_css_class[] = 'current_page_parent';
            }

            /** This filter is documented in wp-includes/class-walker-page.php */
            $omega_travel_agents_css_classes = implode(' ', apply_filters('page_css_class', $omega_travel_agents_css_class, $page, $omega_travel_agents_depth, $omega_travel_agents_args, $current_page));
            $omega_travel_agents_css_classes = $omega_travel_agents_css_classes ? ' class="' . esc_attr($omega_travel_agents_css_classes) . '"' : '';

            if ('' === $page->post_title) {
                /* translators: %d: ID of a post. */
                $page->post_title = sprintf(__('#%d (no title)', 'omega-travel-agents'), $page->ID);
            }

            $omega_travel_agents_args['link_before'] = empty($omega_travel_agents_args['link_before']) ? '' : $omega_travel_agents_args['link_before'];
            $omega_travel_agents_args['link_after'] = empty($omega_travel_agents_args['link_after']) ? '' : $omega_travel_agents_args['link_after'];

            $omega_travel_agents_atts = array();
            $omega_travel_agents_atts['href'] = get_permalink($page->ID);
            $omega_travel_agents_atts['aria-current'] = ($page->ID === $current_page) ? 'page' : '';

            /** This filter is documented in wp-includes/class-walker-page.php */
            $omega_travel_agents_atts = apply_filters('page_menu_link_attributes', $omega_travel_agents_atts, $page, $omega_travel_agents_depth, $omega_travel_agents_args, $current_page);

            $omega_travel_agents_attributes = '';
            foreach ($omega_travel_agents_atts as $attr => $omega_travel_agents_value) {
                if (!empty($omega_travel_agents_value)) {
                    $omega_travel_agents_value = ('href' === $attr) ? esc_url($omega_travel_agents_value) : esc_attr($omega_travel_agents_value);
                    $omega_travel_agents_attributes .= ' ' . $attr . '="' . $omega_travel_agents_value . '"';
                }
            }

            $omega_travel_agents_args['list_item_before'] = '';
            $omega_travel_agents_args['list_item_after'] = '';
            $omega_travel_agents_args['icon_rennder'] = '';
            // Wrap the link in a div and append a sub menu toggle.
            if (isset($omega_travel_agents_args['show_toggles']) && true === $omega_travel_agents_args['show_toggles']) {
                // Wrap the menu item link contents in a div, used for positioning.
                $omega_travel_agents_args['list_item_after'] = '';
            }


            // Add icons to menu items with children.
            if (isset($omega_travel_agents_args['show_sub_menu_icons']) && true === $omega_travel_agents_args['show_sub_menu_icons']) {
                if (isset($omega_travel_agents_args['pages_with_children'][$page->ID])) {
                    $omega_travel_agents_args['icon_rennder'] = '';
                }
            }

            // Add icons to menu items with children.
            if (isset($omega_travel_agents_args['show_toggles']) && true === $omega_travel_agents_args['show_toggles']) {
                if (isset($omega_travel_agents_args['pages_with_children'][$page->ID])) {

                    $toggle_target_string = '.page_item.page-item-' . $page->ID . ' > .sub-menu';

                    $omega_travel_agents_args['list_item_after'] = '<button type="button" class="theme-aria-button submenu-toggle" data-toggle-target="' . $toggle_target_string . '" data-toggle-type="slidetoggle" data-toggle-duration="250"><span class="btn__content" tabindex="-1"><span class="screen-reader-text">' . __( 'Show sub menu', 'omega-travel-agents' ) . '</span>' . omega_travel_agents_get_theme_svg( 'chevron-down' ) . '</span></button>';
                }
            }

            if (isset($omega_travel_agents_args['show_toggles']) && true === $omega_travel_agents_args['show_toggles']) {

                $omega_travel_agents_output .= $omega_travel_agents_indent . sprintf(
                        '<li%s>%s%s<a%s>%s%s%s</a>%s%s',
                        $omega_travel_agents_css_classes,
                        '<div class="submenu-wrapper">',
                        $omega_travel_agents_args['list_item_before'],
                        $omega_travel_agents_attributes,
                        $omega_travel_agents_args['link_before'],
                        /** This filter is documented in wp-includes/post-template.php */
                        apply_filters('the_title', $page->post_title, $page->ID),
                        $omega_travel_agents_args['link_after'],
                        $omega_travel_agents_args['list_item_after'],
                        '</div>'
                    );

            }else{

                $omega_travel_agents_output .= $omega_travel_agents_indent . sprintf(
                        '<li%s>%s<a%s>%s%s%s%s</a>%s',
                        $omega_travel_agents_css_classes,
                        $omega_travel_agents_args['list_item_before'],
                        $omega_travel_agents_attributes,
                        $omega_travel_agents_args['link_before'],
                        /** This filter is documented in wp-includes/post-template.php */
                        apply_filters('the_title', $page->post_title, $page->ID),
                        $omega_travel_agents_args['icon_rennder'],
                        $omega_travel_agents_args['link_after'],
                        $omega_travel_agents_args['list_item_after']
                    );

            }

            if (!empty($omega_travel_agents_args['show_date'])) {
                if ('modified' === $omega_travel_agents_args['show_date']) {
                    $omega_travel_agents_time = $page->post_modified;
                } else {
                    $omega_travel_agents_time = $page->post_date;
                }

                $omega_travel_agents_date_format = empty($omega_travel_agents_args['date_format']) ? '' : $omega_travel_agents_args['date_format'];
                $omega_travel_agents_output .= ' ' . mysql2date($omega_travel_agents_date_format, $omega_travel_agents_time);
            }
        }
    }
}