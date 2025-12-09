<?php
/**
 * Interior Design Firm: Customizer
 *
 * @subpackage Interior Design Firm
 * @since 1.0
 */

function interior_design_firm_customize_register( $wp_customize ) {

	wp_enqueue_style('customizercustom_css', esc_url( get_template_directory_uri() ). '/inc/customizer/customizer.css');

	// Pro Section
 	$wp_customize->add_section('interior_design_firm_pro', array(
        'title'    => __('INTERIOR DESIGN FIRM PREMIUM', 'interior-design-firm'),
        'priority' => 1,
    ));
    $wp_customize->add_setting('interior_design_firm_pro', array(
        'default'           => null,
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control(new Interior_Design_Firm_Pro_Control($wp_customize, 'interior_design_firm_pro', array(
        'label'    => __('INTERIOR DESIGN FIRM PREMIUM', 'interior-design-firm'),
        'section'  => 'interior_design_firm_pro',
        'settings' => 'interior_design_firm_pro',
        'priority' => 1,
    )));
}
add_action( 'customize_register', 'interior_design_firm_customize_register' );


define('INTERIOR_DESIGN_FIRM_PRO_LINK',__('https://www.ovationthemes.com/products/interior-design-wordpress-theme','interior-design-firm'));

define('INTERIOR_DESIGN_FIRM_BUNDLE_BTN',__('https://www.ovationthemes.com/products/wordpress-bundle','interior-design-firm'));

/* Pro control */
if (class_exists('WP_Customize_Control') && !class_exists('Interior_Design_Firm_Pro_Control')):
    class Interior_Design_Firm_Pro_Control extends WP_Customize_Control{

    public function render_content(){?>
        <label style="overflow: hidden; zoom: 1;">
	        <div class="col-md upsell-btn">
                <a href="<?php echo esc_url( INTERIOR_DESIGN_FIRM_PRO_LINK ); ?>" target="blank" class="btn btn-success btn"><?php esc_html_e('UPGRADE INTERIOR DESIGN FIRM PREMIUM','interior-design-firm');?> </a>
	        </div>
            <div class="col-md">
                <img class="interior_design_firm_img_responsive " src="<?php echo esc_url(get_template_directory_uri()); ?>/screenshot.png">
            </div>
	        <div class="col-md">
                <ul style="padding-top:10px">
                    <li class="upsell-interior_design_firm"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Responsive Design', 'interior-design-firm');?> </li>                 
                    <li class="upsell-interior_design_firm"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Demo Importer', 'interior-design-firm');?> </li>
                    <li class="upsell-interior_design_firm"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Section Reordering', 'interior-design-firm');?> </li>
                    <li class="upsell-interior_design_firm"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Contact Page Template', 'interior-design-firm');?> </li>
                    <li class="upsell-interior_design_firm"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Multiple Blog Layouts', 'interior-design-firm');?> </li>
                    <li class="upsell-interior_design_firm"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Unlimited Color Options', 'interior-design-firm');?> </li>
                    <li class="upsell-interior_design_firm"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Cross Browser Support', 'interior-design-firm');?> </li>
                    <li class="upsell-interior_design_firm"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Detailed Documentation Included', 'interior-design-firm');?> </li>
                    <li class="upsell-interior_design_firm"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('WPML Compatible (Translation Ready)', 'interior-design-firm');?> </li>
                    <li class="upsell-interior_design_firm"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Woo-commerce Compatible', 'interior-design-firm');?> </li>
                    <li class="upsell-interior_design_firm"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Full Support', 'interior-design-firm');?> </li>
                    <li class="upsell-interior_design_firm"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('10+ Sections', 'interior-design-firm');?> </li>
                    <li class="upsell-interior_design_firm"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('SEO Friendly', 'interior-design-firm');?> </li>
                    <li class="upsell-interior_design_firm"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Supper Fast', 'interior-design-firm');?> </li>
                </ul>
        	</div>
            <div class="col-md upsell-btn upsell-btn-bottom">
                <a href="<?php echo esc_url( INTERIOR_DESIGN_FIRM_BUNDLE_BTN ); ?>" target="blank" class="btn btn-success btn"><?php esc_html_e('WP Theme Bundle (120+ Themes)','interior-design-firm');?> </a>
            </div>
        </label>
    <?php } }
endif;