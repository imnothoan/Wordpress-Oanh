<?php 

function interior_design_firm_add_admin_menu() {
    add_menu_page(
        'Theme Settings', // Page title
        'Theme Settings', // Menu title
        'manage_options', // Capability
        'interior-design-firm-theme-settings', // Menu slug
        'interior_design_firm_settings_page' // Function to display the page
    );
}
add_action( 'admin_menu', 'interior_design_firm_add_admin_menu' );

function interior_design_firm_settings_page() {
    ?>
    <div class="wrap">
        <h1><?php esc_html_e( 'Theme Settings', 'interior-design-firm' ); ?></h1>
        <form action="options.php" method="post">
            <?php
            settings_fields( 'interior_design_firm_settings_group' );
            do_settings_sections( 'interior-design-firm-theme-settings' );
            submit_button();
            ?>
        </form>
    </div>
    <?php
}

function interior_design_firm_register_settings() {
    register_setting( 'interior_design_firm_settings_group', 'interior_design_firm_enable_animations' );

    add_settings_section(
        'interior_design_firm_settings_section',
        __( 'Animation Settings', 'interior-design-firm' ),
        null,
        'interior-design-firm-theme-settings'
    );

    add_settings_field(
        'interior_design_firm_enable_animations',
        __( 'Enable Animations', 'interior-design-firm' ),
        'interior_design_firm_enable_animations_callback',
        'interior-design-firm-theme-settings',
        'interior_design_firm_settings_section'
    );
}
add_action( 'admin_init', 'interior_design_firm_register_settings' );

function interior_design_firm_enable_animations_callback() {
    $checked = get_option( 'interior_design_firm_enable_animations', true );
    ?>
    <input type="checkbox" name="interior_design_firm_enable_animations" value="1" <?php checked( 1, $checked ); ?> />
    <?php
}

