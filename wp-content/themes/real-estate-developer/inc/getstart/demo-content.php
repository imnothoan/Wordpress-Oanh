<div class="theme-offer">
	<?php 
        // Check if the demo import has been completed
        $real_estate_developer_demo_import_completed = get_option('real_estate_developer_demo_import_completed', false);

        // If the demo import is completed, display the "View Site" button
        if ($real_estate_developer_demo_import_completed) {
        echo '<p class="notice-text">' . esc_html__('Your demo import has been completed successfully.', 'real-estate-developer') . '</p>';
        echo '<span><a href="' . esc_url(home_url()) . '" class="button button-primary site-btn" target="_blank">' . esc_html__('View Site', 'real-estate-developer') . '</a></span>';
        }

		// POST and update the customizer and other related data
        if (isset($_POST['submit'])) {

        // Check if Essential Real Estate is installed and activated
        if (!is_plugin_active('essential-real-estate/essential-real-estate.php')) {
          // Install the plugin if it doesn't exist
          $real_estate_developer_plugin_slug = 'essential-real-estate';
          $real_estate_developer_plugin_file = 'essential-real-estate/essential-real-estate.php';

          // Check if plugin is installed
          $real_estate_developer_installed_plugins = get_plugins();
          if (!isset($real_estate_developer_installed_plugins[$real_estate_developer_plugin_file])) {
              include_once(ABSPATH . 'wp-admin/includes/plugin-install.php');
              include_once(ABSPATH . 'wp-admin/includes/file.php');
              include_once(ABSPATH . 'wp-admin/includes/misc.php');
              include_once(ABSPATH . 'wp-admin/includes/class-wp-upgrader.php');

              // Install the plugin
              $real_estate_developer_upgrader = new Plugin_Upgrader();
              $real_estate_developer_upgrader->install('https://downloads.wordpress.org/plugin/essential-real-estate.latest-stable.zip');
          }
          // Activate the plugin
          activate_plugin($real_estate_developer_plugin_file);
        } 

        // Check if ibtana visual editor is installed and activated
        if (!is_plugin_active('ibtana-visual-editor/plugin.php')) {
          // Install the plugin if it doesn't exist
          $real_estate_developer_plugin_slug = 'ibtana-visual-editor';
          $real_estate_developer_plugin_file = 'ibtana-visual-editor/plugin.php';

          // Check if plugin is installed
          $real_estate_developer_installed_plugins = get_plugins();
          if (!isset($real_estate_developer_installed_plugins[$real_estate_developer_plugin_file])) {
              include_once(ABSPATH . 'wp-admin/includes/plugin-install.php');
              include_once(ABSPATH . 'wp-admin/includes/file.php');
              include_once(ABSPATH . 'wp-admin/includes/misc.php');
              include_once(ABSPATH . 'wp-admin/includes/class-wp-upgrader.php');

              // Install the plugin
              $real_estate_developer_upgrader = new Plugin_Upgrader();
              $real_estate_developer_upgrader->install('https://downloads.wordpress.org/plugin/ibtana-visual-editor.latest-stable.zip');
          }
          // Activate the plugin
          activate_plugin($real_estate_developer_plugin_file);
        }  

        // ------- Create Nav Menu --------
        $real_estate_developer_menuname = 'Main Menus';
        $real_estate_developer_bpmenulocation = 'primary';
        $real_estate_developer_menu_exists = wp_get_nav_menu_object($real_estate_developer_menuname);

        if (!$real_estate_developer_menu_exists) {
            $real_estate_developer_menu_id = wp_create_nav_menu($real_estate_developer_menuname);

            // Create Home Page
            $real_estate_developer_home_title = 'Home';
            $real_estate_developer_home = array(
                'post_type' => 'page',
                'post_title' => $real_estate_developer_home_title,
                'post_content' => '',
                'post_status' => 'publish',
                'post_author' => 1,
                'post_slug' => 'home'
            );
            $real_estate_developer_home_id = wp_insert_post($real_estate_developer_home);
            // Assign Home Page Template
            add_post_meta($real_estate_developer_home_id, '_wp_page_template', 'page-template/custom-home-page.php');
            // Update options to set Home Page as the front page
            update_option('page_on_front', $real_estate_developer_home_id);
            update_option('show_on_front', 'page');
            // Add Home Page to Menu
            wp_update_nav_menu_item($real_estate_developer_menu_id, 0, array(
                'menu-item-title' => __('Home', 'real-estate-developer'),
                'menu-item-classes' => 'home',
                'menu-item-url' => home_url('/'),
                'menu-item-status' => 'publish',
                'menu-item-object-id' => $real_estate_developer_home_id,
                'menu-item-object' => 'page',
                'menu-item-type' => 'post_type'
            ));

            // Create Pages Page with Dummy Content
            $real_estate_developer_pages_title = 'Pages';
            $real_estate_developer_pages_content = '
            Explore all the pages we have on our website. Find information about our services, company, and more.
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960 with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.<br>
            All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.';
            $real_estate_developer_pages = array(
                'post_type' => 'page',
                'post_title' => $real_estate_developer_pages_title,
                'post_content' => $real_estate_developer_pages_content,
                'post_status' => 'publish',
                'post_author' => 1,
                'post_slug' => 'pages'
            );
            $real_estate_developer_pages_id = wp_insert_post($real_estate_developer_pages);
            // Add Pages Page to Menu
            wp_update_nav_menu_item($real_estate_developer_menu_id, 0, array(
                'menu-item-title' => __('Pages', 'real-estate-developer'),
                'menu-item-classes' => 'pages',
                'menu-item-url' => home_url('/pages/'),
                'menu-item-status' => 'publish',
                'menu-item-object-id' => $real_estate_developer_pages_id,
                'menu-item-object' => 'page',
                'menu-item-type' => 'post_type'
            ));

            // Create About Us Page with Dummy Content
            $real_estate_developer_about_title = 'About Us';
            $real_estate_developer_about_content = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam...<br>
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960 with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.<br>
            There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which dont look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isnt anything embarrassing hidden in the middle of text.<br>
            All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.';
            $real_estate_developer_about = array(
                'post_type' => 'page',
                'post_title' => $real_estate_developer_about_title,
                'post_content' => $real_estate_developer_about_content,
                'post_status' => 'publish',
                'post_author' => 1,
                'post_slug' => 'about-us'
            );
            $real_estate_developer_about_id = wp_insert_post($real_estate_developer_about);
            // Add About Us Page to Menu
            wp_update_nav_menu_item($real_estate_developer_menu_id, 0, array(
                'menu-item-title' => __('About Us', 'real-estate-developer'),
                'menu-item-classes' => 'about-us',
                'menu-item-url' => home_url('/about-us/'),
                'menu-item-status' => 'publish',
                'menu-item-object-id' => $real_estate_developer_about_id,
                'menu-item-object' => 'page',
                'menu-item-type' => 'post_type'
            ));

            // Set the menu location if it's not already set
            if (!has_nav_menu($real_estate_developer_bpmenulocation)) {
                $real_estate_developer_locations = get_theme_mod('nav_menu_locations'); // Use 'nav_menu_locations' to get locations array
                if (empty($real_estate_developer_locations)) {
                    $real_estate_developer_locations = array();
                }
                $real_estate_developer_locations[$real_estate_developer_bpmenulocation] = $real_estate_developer_menu_id;
                set_theme_mod('nav_menu_locations', $real_estate_developer_locations);
            }
        }

        // Set the demo import completion flag
		update_option('real_estate_developer_demo_import_completed', true);
		// Display success message and "View Site" button
		echo '<p class="notice-text">' . esc_html__('Your demo import has been completed successfully.', 'real-estate-developer') . '</p>';
		echo '<span><a href="' . esc_url(home_url()) . '" class="button button-primary site-btn" target="_blank">' . esc_html__('View Site', 'real-estate-developer') . '</a></span>';
        //end 

        // Header
        set_theme_mod( 'real_estate_developer_topbar_button_url', '#' );
        
        // Banner
        set_theme_mod( 'real_estate_developer_banner_title', 'Find Your Dream Home – Explore the Properties Today!' );
        set_theme_mod( 'real_estate_developer_banner_text', 'Discover your perfect home with our expert real estate services. From luxury residences to budget-friendly properties, we offer tailored solutions for buyers, sellers, and investors. Explore top listings, get expert advice, and make informed decisions with our trusted real estate professionals.' );
        set_theme_mod( 'real_estate_developer_banner_button_label', 'Explore Properties' );
        set_theme_mod( 'real_estate_developer_banner_button_url', '#' );
        set_theme_mod( 'real_estate_developer_banner_side_img', get_template_directory_uri().'/assets/images/home.png' );
        for($real_estate_developer_i=1; $real_estate_developer_i<=3; $real_estate_developer_i++) {       
            set_theme_mod( 'real_estate_developer_video_bg_img'.$real_estate_developer_i, get_template_directory_uri().'/assets/images/video-bg' . $real_estate_developer_i . '.png' );
            set_theme_mod( 'real_estate_developer_video_button_url'.$real_estate_developer_i, '#' );
        }
        set_theme_mod( 'real_estate_developer_phone_bg_img', get_template_directory_uri().'/assets/images/phone-img.png' );
        set_theme_mod( 'real_estate_developer_banner_phone_title', 'Request a call' );
        set_theme_mod( 'real_estate_developer_banner_phone_number', '+12 3456789123' );

        // Category Section 
        set_theme_mod( 'real_estate_developer_category_section_title', 'Categories Listing' );
        set_theme_mod( 'real_estate_developer_category_section_text', 'Showcase the finest top listings and premium properties for exclusive buyers.' );

        // Create Properties
        call_user_func('register_post_type', 'property', array(
            'label'           => 'Properties',
            'public'          => true,
            'show_in_menu'    => true,
            'supports'        => array('title', 'editor', 'thumbnail'),
            'has_archive'     => true,
            'show_in_rest'    => true,
            'rewrite'         => array('slug' => 'properties'),
        ));
        
        // Ensure the taxonomy is registered
        if (!taxonomy_exists('property-type')) {
            call_user_func('register_taxonomy', 'property-type', 'property', array(
                'label'             => 'Property Types',
                'hierarchical'      => true,
                'public'            => true,
                'show_admin_column' => true,
                'show_in_rest'      => true,
                'rewrite'           => array('slug' => 'property-type'),
            ));
        }

        // Create demo property type terms
        $real_estate_developer_demo_property_types = array('Bunglow', 'Villa');
        foreach ($real_estate_developer_demo_property_types as $real_estate_developer_term_name) {
            if (!term_exists($real_estate_developer_term_name, 'property-type')) {
                wp_insert_term($real_estate_developer_term_name, 'property-type');
            }
        }

        // Demo property data with mixed single/multiple types
        $real_estate_developer_property_data = array(
            array(
                'title'         => 'Golden Horizon Retreat by Lake',
                'bedrooms'      => '4',
                'thumbnail'     => 'property1.png',
                'property_type' => 'Bunglow',
                'location'      => 'Buffalo, NY',
                'bathrooms'     => '4',
                'area'          => '4800',
                'price_prefix'  => '',
                'price_short'   => '7500000',
                'price_unit'    => '',
                'price_postfix' => '',
            ),
            array(
                'title'         => 'Whispering Pines Estate in Hills',
                'bedrooms'      => '4',
                'thumbnail'     => 'property2.png',
                'property_type' => 'Bunglow',
                'location'      => 'Buffalo, NY',
                'bathrooms'     => '4',
                'area'          => '4800',
                'price_prefix'  => '',
                'price_short'   => '7500000',
                'price_unit'    => '',
                'price_postfix' => '',
            ),
            array(
                'title'         => 'Tranquil Blossom Villa',
                'bedrooms'      => '4',
                'thumbnail'     => 'property3.png',
                'property_type' => 'Bunglow',
                'location'      => 'Buffalo, NY',
                'bathrooms'     => '4',
                'area'          => '4800',
                'price_prefix'  => '',
                'price_short'   => '7500000',
                'price_unit'    => '',
                'price_postfix' => '',
            ),
            array(
                'title'         => 'Azure Breeze Bungalow by Ocean',
                'bedrooms'      => '4',
                'thumbnail'     => 'property4.png',
                'property_type' => array('Bunglow', 'Villa'),
                'location'      => 'Buffalo, NY',
                'bathrooms'     => '4',
                'area'          => '4800',
                'price_prefix'  => '',
                'price_short'   => '7500000',
                'price_unit'    => '',
                'price_postfix' => '',
            ),
        );

        // Loop through each property
        foreach ($real_estate_developer_property_data as $real_estate_developer_property) {
            // Insert post
            $real_estate_developer_post_id = wp_insert_post(array(
                'post_title'   => wp_strip_all_tags($real_estate_developer_property['title']),
                'post_content' => 'Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s.',
                'post_status'  => 'publish',
                'post_type'    => 'property',
            ));

            // Add custom fields (meta)
            update_post_meta($real_estate_developer_post_id, ERE_METABOX_PREFIX . 'property_address', strtolower($real_estate_developer_property['location']));
            update_post_meta($real_estate_developer_post_id, ERE_METABOX_PREFIX . 'property_bedrooms', strtolower($real_estate_developer_property['bedrooms']));
            update_post_meta($real_estate_developer_post_id, ERE_METABOX_PREFIX . 'property_bathrooms', strtolower($real_estate_developer_property['bathrooms']));
            update_post_meta($real_estate_developer_post_id, ERE_METABOX_PREFIX . 'property_size', strtolower($real_estate_developer_property['area']));
            update_post_meta($real_estate_developer_post_id, ERE_METABOX_PREFIX . 'property_price_prefix', $real_estate_developer_property['price_prefix']);
            update_post_meta($real_estate_developer_post_id, ERE_METABOX_PREFIX . 'property_price_short', $real_estate_developer_property['price_short']);
            update_post_meta($real_estate_developer_post_id, ERE_METABOX_PREFIX . 'property_price_unit', $real_estate_developer_property['price_unit']);
            update_post_meta($real_estate_developer_post_id, ERE_METABOX_PREFIX . 'property_price_postfix', $real_estate_developer_property['price_postfix']);

            // Assign taxonomy terms (support multiple property types)
            $real_estate_developer_property_types = is_array($real_estate_developer_property['property_type']) ? $real_estate_developer_property['property_type'] : array($real_estate_developer_property['property_type']);

            foreach ($real_estate_developer_property_types as $real_estate_developer_term_name) {
                if (!term_exists($real_estate_developer_term_name, 'property-type')) {
                    wp_insert_term($real_estate_developer_term_name, 'property-type');
                }
            }
            wp_set_object_terms($real_estate_developer_post_id, $real_estate_developer_property_types, 'property-type');

            // Set featured image
            $real_estate_developer_image_url = get_template_directory_uri() . '/assets/images/' . $real_estate_developer_property['thumbnail'];
            $real_estate_developer_image_id  = media_sideload_image($real_estate_developer_image_url, $real_estate_developer_post_id, null, 'id');
            if (!is_wp_error($real_estate_developer_image_id)) {
                set_post_thumbnail($real_estate_developer_post_id, $real_estate_developer_image_id);
            }
        }

        //Copyright Text
        set_theme_mod( 'real_estate_developer_footer_text', 'By VWThemes' );  
     
        }
    ?>
  
	<p><?php esc_html_e('Please back up your website if it’s already live with data. This importer will overwrite your existing settings with the new customizer values for Real Estate Developer', 'real-estate-developer'); ?></p>
    <form action="<?php echo esc_url(home_url()); ?>/wp-admin/themes.php?page=real_estate_developer_guide" method="POST" onsubmit="return validate(this);">
        <?php if (!get_option('real_estate_developer_demo_import_completed')) : ?>
            <input class="run-import" type="submit" name="submit" value="<?php esc_attr_e('Run Importer', 'real-estate-developer'); ?>" class="button button-primary button-large">
        <?php endif; ?>
        <div id="spinner" style="display:none;">         
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/spinner.png" alt="" />
        </div>
    </form>
    <script type="text/javascript">
        function validate(form) {
            if (confirm("Do you really want to import the theme demo content?")) {
                // Show the spinner
                document.getElementById('spinner').style.display = 'block';
                // Allow the form to be submitted
                return true;
            } 
            else {
                return false;
            }
        }
    </script>
</div>
