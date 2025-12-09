<?php 
if (isset($_GET['import-demo']) && $_GET['import-demo'] == true) {

    // Function to install and activate plugins
    function author_writer_import_demo_content() {

        // Display the preloader only for plugin installation
        echo '<div id="plugin-loader" style="display: flex; align-items: center; justify-content: center; position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: rgba(255, 255, 255, 0.8); z-index: 9999;">
                <img src="' . esc_url(get_template_directory_uri()) . '/assets/images/loader.png" alt="Loading..." width="60" height="60" />
              </div>';

        // Define the plugins you want to install and activate
        $plugins = array(
            array(
                'slug' => 'contact-form-7',
                'file' => 'contact-form-7/wp-contact-form-7.php',
                'url'  => 'https://downloads.wordpress.org/plugin/contact-form-7.latest-stable.zip'
            ),
            array(
                'slug' => 'advanced-appointment-booking-scheduling',
                'file' => 'advanced-appointment-booking-scheduling/advanced-appointment-booking.php',
                'url'  => 'https://downloads.wordpress.org/plugin/advanced-appointment-booking-scheduling.zip'
            ),
        );

        // Include required files for plugin installation
        if (!function_exists('plugins_api')) {
            include_once(ABSPATH . 'wp-admin/includes/plugin-install.php');
        }
        if (!function_exists('activate_plugin')) {
            include_once(ABSPATH . 'wp-admin/includes/plugin.php');
        }
        include_once(ABSPATH . 'wp-admin/includes/file.php');
        include_once(ABSPATH . 'wp-admin/includes/misc.php');
        include_once(ABSPATH . 'wp-admin/includes/class-wp-upgrader.php');

        // Loop through each plugin
        foreach ($plugins as $plugin) {
            $plugin_file = WP_PLUGIN_DIR . '/' . $plugin['file'];

            // Check if the plugin is installed
            if (!file_exists($plugin_file)) {
                // If the plugin is not installed, download and install it
                $upgrader = new Plugin_Upgrader();
                $result = $upgrader->install($plugin['url']);

                // Check for installation errors
                if (is_wp_error($result)) {
                    error_log('Plugin installation failed: ' . $plugin['slug'] . ' - ' . $result->get_error_message());
                    continue;
                }
            }

            // If the plugin folder exists but the plugin is not active, activate it
            if (file_exists($plugin_file) && !is_plugin_active($plugin['file'])) {
                $result = activate_plugin($plugin['file']);

                // Check for activation errors
                if (is_wp_error($result)) {
                    error_log('Plugin activation failed: ' . $plugin['slug'] . ' - ' . $result->get_error_message());
                }
            }
        }

        // Hide the preloader after the process is complete
        echo '<script type="text/javascript">
                document.getElementById("plugin-loader").style.display = "none";
              </script>';

        // Add filter to skip WooCommerce setup wizard after activation
        add_filter('woocommerce_prevent_automatic_wizard_redirect', '__return_true');
    }

    // Call the import function
    author_writer_import_demo_content();
    
    // ------- Create Nav Menu --------
$travel_booking_offers_menuname = 'Main Menus';
$travel_booking_offers_bpmenulocation = 'primary-menu';
$travel_booking_offers_menu_exists = wp_get_nav_menu_object($travel_booking_offers_menuname);

if (!$travel_booking_offers_menu_exists) {
    $travel_booking_offers_menu_id = wp_create_nav_menu($travel_booking_offers_menuname);

    // Create Home Page
    $travel_booking_offers_home_title = 'Home';
    $travel_booking_offers_home = array(
        'post_type' => 'page',
        'post_title' => $travel_booking_offers_home_title,
        'post_content' => '',
        'post_status' => 'publish',
        'post_author' => 1,
        'post_slug' => 'home'
    );
    $travel_booking_offers_home_id = wp_insert_post($travel_booking_offers_home);

    // Assign Home Page Template
    add_post_meta($travel_booking_offers_home_id, '_wp_page_template', 'page-template/front-page.php');

    // Update options to set Home Page as the front page
    update_option('page_on_front', $travel_booking_offers_home_id);
    update_option('show_on_front', 'page');

    // Add Home Page to Menu
    wp_update_nav_menu_item($travel_booking_offers_menu_id, 0, array(
        'menu-item-title' => __('Home', 'travel-booking-offers'),
        'menu-item-classes' => 'home',
        'menu-item-url' => home_url('/'),
        'menu-item-status' => 'publish',
        'menu-item-object-id' => $travel_booking_offers_home_id,
        'menu-item-object' => 'page',
        'menu-item-type' => 'post_type'
    ));

    // Create About Us Page with Dummy Content
    $travel_booking_offers_about_title = 'About Us';
    $travel_booking_offers_about_content = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam...<br>

             Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960 with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.<br> 

                There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which dont look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isnt anything embarrassing hidden in the middle of text.<br> 

                All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.';
    $travel_booking_offers_about = array(
        'post_type' => 'page',
        'post_title' => $travel_booking_offers_about_title,
        'post_content' => $travel_booking_offers_about_content,
        'post_status' => 'publish',
        'post_author' => 1,
        'post_slug' => 'about-us'
    );
    $travel_booking_offers_about_id = wp_insert_post($travel_booking_offers_about);

    // Add About Us Page to Menu
    wp_update_nav_menu_item($travel_booking_offers_menu_id, 0, array(
        'menu-item-title' => __('About Us', 'travel-booking-offers'),
        'menu-item-classes' => 'about-us',
        'menu-item-url' => home_url('/about-us/'),
        'menu-item-status' => 'publish',
        'menu-item-object-id' => $travel_booking_offers_about_id,
        'menu-item-object' => 'page',
        'menu-item-type' => 'post_type'
    ));

    // Create Services Page with Dummy Content
    $travel_booking_offers_services_title = 'Services';
    $travel_booking_offers_services_content = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam...<br>

             Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960 with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.<br> 

                There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which dont look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isnt anything embarrassing hidden in the middle of text.<br> 

                All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.';
    $travel_booking_offers_services = array(
        'post_type' => 'page',
        'post_title' => $travel_booking_offers_services_title,
        'post_content' => $travel_booking_offers_services_content,
        'post_status' => 'publish',
        'post_author' => 1,
        'post_slug' => 'services'
    );
    $travel_booking_offers_services_id = wp_insert_post($travel_booking_offers_services);

    // Add Services Page to Menu
    wp_update_nav_menu_item($travel_booking_offers_menu_id, 0, array(
        'menu-item-title' => __('Services', 'travel-booking-offers'),
        'menu-item-classes' => 'services',
        'menu-item-url' => home_url('/services/'),
        'menu-item-status' => 'publish',
        'menu-item-object-id' => $travel_booking_offers_services_id,
        'menu-item-object' => 'page',
        'menu-item-type' => 'post_type'
    ));

    // Create Pages Page with Dummy Content
    $travel_booking_offers_pages_title = 'Pages';
    $travel_booking_offers_pages_content = '<h2>Our Pages</h2>
    <p>Explore all the pages we have on our website. Find information about our services, company, and more.</p>';
    $travel_booking_offers_pages = array(
        'post_type' => 'page',
        'post_title' => $travel_booking_offers_pages_title,
        'post_content' => $travel_booking_offers_pages_content,
        'post_status' => 'publish',
        'post_author' => 1,
        'post_slug' => 'pages'
    );
    $travel_booking_offers_pages_id = wp_insert_post($travel_booking_offers_pages);

    // Add Pages Page to Menu
    wp_update_nav_menu_item($travel_booking_offers_menu_id, 0, array(
        'menu-item-title' => __('Pages', 'travel-booking-offers'),
        'menu-item-classes' => 'pages',
        'menu-item-url' => home_url('/pages/'),
        'menu-item-status' => 'publish',
        'menu-item-object-id' => $travel_booking_offers_pages_id,
        'menu-item-object' => 'page',
        'menu-item-type' => 'post_type'
    ));

    // Create Contact Page with Dummy Content
    $travel_booking_offers_contact_title = 'Contact';
    $travel_booking_offers_contact_content = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam...<br>

             Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960 with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.<br> 

                There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which dont look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isnt anything embarrassing hidden in the middle of text.<br> 

                All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.';
    $travel_booking_offers_contact = array(
        'post_type' => 'page',
        'post_title' => $travel_booking_offers_contact_title,
        'post_content' => $travel_booking_offers_contact_content,
        'post_status' => 'publish',
        'post_author' => 1,
        'post_slug' => 'contact'
    );
    $travel_booking_offers_contact_id = wp_insert_post($travel_booking_offers_contact);

    // Add Contact Page to Menu
    wp_update_nav_menu_item($travel_booking_offers_menu_id, 0, array(
        'menu-item-title' => __('Contact', 'travel-booking-offers'),
        'menu-item-classes' => 'contact',
        'menu-item-url' => home_url('/contact/'),
        'menu-item-status' => 'publish',
        'menu-item-object-id' => $travel_booking_offers_contact_id,
        'menu-item-object' => 'page',
        'menu-item-type' => 'post_type'
    ));

    // Set the menu location if it's not already set
    if (!has_nav_menu($travel_booking_offers_bpmenulocation)) {
        $locations = get_theme_mod('nav_menu_locations'); // Use 'nav_menu_locations' to get locations array
        if (empty($locations)) {
            $locations = array();
        }
        $locations[$travel_booking_offers_bpmenulocation] = $travel_booking_offers_menu_id;
        set_theme_mod('nav_menu_locations', $locations);
    }
}

        //---Header--//
        set_theme_mod('travel_booking_offers_about_call_text', 'contact us');
        set_theme_mod('travel_booking_offers_about_call', '(770) 132 4657');

        // Slider Section
        set_theme_mod('travel_booking_offers_slider_arrows', true);
        set_theme_mod('travel_booking_offers_slider_short_heading', 'Our Journey');

        set_theme_mod('travel_booking_offers_projetcs_number', '4');
        set_theme_mod('travel_booking_offers_projetcs_text1', 'Tours');
        set_theme_mod('travel_booking_offers_projetcs_text2', 'Hotels');
        set_theme_mod('travel_booking_offers_projetcs_text3', 'Flights');
        set_theme_mod('travel_booking_offers_projetcs_text4', 'Cars');

        for ($i = 1; $i <= 4; $i++) {
            $travel_booking_offers_title = 'The Ultimate Destination for a Perfect Holiday';

            // Create post object
            $my_post = array(
                'post_title'    => wp_strip_all_tags($travel_booking_offers_title),
                'post_status'   => 'publish',
                'post_type'     => 'page',
            );

            // Insert the post into the database
            $post_id = wp_insert_post($my_post);

            if ($post_id) {
                // Set the theme mod for the slider page
                set_theme_mod('travel_booking_offers_slider_page' . $i, $post_id);

                $image_url = get_template_directory_uri() . '/assets/images/slider-img.png';
                $image_id = media_sideload_image($image_url, $post_id, null, 'id');

                if (!is_wp_error($image_id)) {
                    // Set the downloaded image as the post's featured image
                    set_post_thumbnail($post_id, $image_id);
                }
            }
        }

        // Set default shortcodes for each form (replace these with your actual form shortcodes)
        set_theme_mod('travel_booking_offers_projetcs_shortcode1', '');

        // Set default values for the contact form settings for Travel Booking Offers Contact Form
        $cf7title = 'Travel Booking Offers Contact Form'; // Modify the title as needed
        $cf7content = '
        <div class="travel-search-form">
            <div class="row">
                <div class="form-group col-12 col-md-2 col-lg-2 align-self-center select-with-icon">
                  <i class="fas fa-map-marker-alt info"></i><div class="select-icon-wrapper">[select* current-location "Current Location" "New York" "Los Angeles" "Chicago" "India"]<i class="fas fa-chevron-down dropdown-icon"></i></div>
                </div>
                <div class="form-group col-12 col-md-3 col-lg-3 align-self-center">
                    <i class="fas fa-map-marker-alt info"></i><div class="select-icon-wrapper">[select* destination-location "Destination Location" "Paris" "London" "Tokyo" "India"]<i class="fas fa-chevron-down dropdown-icon"></i></div>
                </div>
               <div class="form-group col-12 col-md-2 col-lg-2 d-md-flex align-items-center position-relative">
                 [date date-922 class:date-box]<span class="return-date-label">Travel Date</span>
               </div>
                <div class="form-group col-12 col-md-2 col-lg-2 d-md-flex align-items-center position-relative">
                 [date date-922 class:date-box]<span class="return-date-label">Return Date</span>
               </div>
                <div class="form-group col-12 col-md-2 col-lg-2 align-self-center user">
                    <i class="fa-solid fa-user info"></i></i><div class="select-icon-wrapper">[select* persons "Persons" "1 Person" "2 Persons" "3 Persons" "4+ Persons"]<i class="fas fa-chevron-down dropdown-icon"></i></div>
                </div>
                <div class="form-group col-12 col-md-1 col-lg-1 submit-button align-self-center">
                    <button type="submit"><i class="fas fa-search"></i></button>
                </div>
            </div>
        </div>
        ';

        // Insert the contact form post
        $cf7_post = array(
            'post_title'   => wp_strip_all_tags($cf7title),
            'post_content' => $cf7content,
            'post_status'  => 'publish',
            'post_type'    => 'wpcf7_contact_form',
        );

        // Insert post and get post ID
        $cf7post_id = wp_insert_post($cf7_post);

        // Check if the post insertion was successful
        if (!is_wp_error($cf7post_id)) {
            // Add form content to the post meta
            add_post_meta($cf7post_id, "_form", $cf7content);

            // Prepare email settings for the contact form
            $cf7mail_data = array(
                'subject'         => '[_site_title] "[your-subject]"',
                'sender'          => '[_site_title] <support@example.com>',
                'body'            => 'From: [your-name] <[your-email]>\nSubject: [your-subject]\nMessage Body:\n[your-message]\n\n--\nThis e-mail was sent from a contact form on [_site_title] ([_site_url])',
                'recipient'       => '[_site_admin_email]',
                'additional_headers' => 'Reply-To: [your-email]',
                'attachments'     => '',
                'use_html'        => 0,
                'exclude_blank'   => 0
            );

            // Add email data to the post meta
            add_post_meta($cf7post_id, "_mail", $cf7mail_data);

            // Generate the contact form shortcode
            $cf7shortcode = '[contact-form-7 id="' . $cf7post_id . '" title="' . $cf7title . '"]';

            // Save the shortcode in the theme settings
            set_theme_mod('travel_booking_offers_projetcs_shortcode1', $cf7shortcode);
        } else {
            // Handle errors, if any
            echo 'Error creating the form post: ' . $cf7post_id->get_error_message();
        }

        // Display the contact form using the saved shortcode
        $cf7_shortcode = get_theme_mod('travel_booking_offers_projetcs_shortcode1');

        // Check if the shortcode exists in the theme settings
        if ($cf7_shortcode) {
            echo 'Generated shortcode: ' . $cf7_shortcode . '<br>';
            echo do_shortcode($cf7_shortcode); // Output the contact form using the shortcode
        } else {
            echo 'Error: Contact form shortcode not found in theme mod.';
    }

        // Our Services Section //
        set_theme_mod('travel_booking_offers_courses_setting', true);
        set_theme_mod('travel_booking_offers_offer_section_tittle', 'top places');
        set_theme_mod('travel_booking_offers_offer_section_text', 'Most Popular Tours');

        set_theme_mod('travel_booking_offers_posts_to_show', '3');

        set_theme_mod('travel_booking_offers_star_rating1', '5');
        set_theme_mod('travel_booking_offers_star_rating2', '5');
        set_theme_mod('travel_booking_offers_star_rating3', '5');

        set_theme_mod('travel_booking_offers_add_price1', '$160');
        set_theme_mod('travel_booking_offers_add_price2', '$160');
        set_theme_mod('travel_booking_offers_add_price3', '$160');

        set_theme_mod('travel_booking_offers_total_no_beds1', '3');
        set_theme_mod('travel_booking_offers_total_no_beds2', '3');
        set_theme_mod('travel_booking_offers_total_no_beds3', '3');

        set_theme_mod('travel_booking_offers_total_no_baths1', '2');
        set_theme_mod('travel_booking_offers_total_no_baths2', '2');
        set_theme_mod('travel_booking_offers_total_no_baths3', '2');

        set_theme_mod('travel_booking_offers_total_no_guest1', '12');
        set_theme_mod('travel_booking_offers_total_no_guest2', '12');
        set_theme_mod('travel_booking_offers_total_no_guest3', '12');


        set_theme_mod('travel_booking_offers_offer_section_category', 'postcategory1');

        // Define post category names and post titles
        $travel_booking_offers_category_names = array('postcategory1');
        $travel_booking_offers_title_array = array(
            array("The Grand Canyons", "Hot Baloon Special Journey", "South Island, New Zealand.")
        );

        foreach ($travel_booking_offers_category_names as $travel_booking_offers_index => $travel_booking_offers_category_name) {
            // Create or retrieve the post category term ID
            $travel_booking_offers_term = term_exists($travel_booking_offers_category_name, 'category');
            if ($travel_booking_offers_term === 0 || $travel_booking_offers_term === null) {
                // If the term does not exist, create it
                $travel_booking_offers_term = wp_insert_term($travel_booking_offers_category_name, 'category');
            }
            if (is_wp_error($travel_booking_offers_term)) {
                error_log('Error creating category: ' . $travel_booking_offers_term->get_error_message());
                continue; // Skip to the next iteration if category creation fails
            }

            for ($travel_booking_offers_i = 0; $travel_booking_offers_i < 3; $travel_booking_offers_i++) {
                // Create post content
                $travel_booking_offers_title = $travel_booking_offers_title_array[$travel_booking_offers_index][$travel_booking_offers_i];

                $travel_booking_offers_content = 'Phosfluorescently engage worldwide methodologies with web-enabled';

                // Create post post object
                $travel_booking_offers_my_post = array(
                    'post_title'    => wp_strip_all_tags($travel_booking_offers_title),
                    'post_content'  => $travel_booking_offers_content,
                    'post_status'   => 'publish',
                    'post_type'     => 'post', // Post type set to 'post'
                );

                // Insert the post into the database
                $travel_booking_offers_post_id = wp_insert_post($travel_booking_offers_my_post);

                if (is_wp_error($travel_booking_offers_post_id)) {
                    error_log('Error creating post: ' . $travel_booking_offers_post_id->get_error_message());
                    continue; // Skip to the next post if creation fails
                }

                // Assign the category to the post
                wp_set_post_categories($travel_booking_offers_post_id, array((int)$travel_booking_offers_term['term_id']));

                // Handle the featured image using media_sideload_image
                $travel_booking_offers_image_url = get_template_directory_uri() . '/assets/images/post-img' . ($travel_booking_offers_i + 1) . '.png';
                $travel_booking_offers_image_id = media_sideload_image($travel_booking_offers_image_url, $travel_booking_offers_post_id, null, 'id');

                if (is_wp_error($travel_booking_offers_image_id)) {
                    error_log('Error downloading image: ' . $travel_booking_offers_image_id->get_error_message());
                    continue; // Skip to the next post if image download fails
                }

                // Assign featured image to post
                set_post_thumbnail($travel_booking_offers_post_id, $travel_booking_offers_image_id);
            }
        }
       

    }
?>