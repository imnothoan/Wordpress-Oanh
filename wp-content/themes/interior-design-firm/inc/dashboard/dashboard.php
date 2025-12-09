<?php

add_action( 'admin_menu', 'interior_design_firm_gettingstarted' );
function interior_design_firm_gettingstarted() {
	add_theme_page( esc_html__('Begin Installation', 'interior-design-firm'), esc_html__('Begin Installation', 'interior-design-firm'), 'edit_theme_options', 'interior-design-firm-guide-page', 'interior_design_firm_guide');
}

if ( ! defined( 'INTERIOR_DESIGN_FIRM_SUPPORT' ) ) {
define('INTERIOR_DESIGN_FIRM_SUPPORT',__('https://wordpress.org/support/theme/interior-design-firm/','interior-design-firm'));
}
if ( ! defined( 'INTERIOR_DESIGN_FIRM_REVIEW' ) ) {
define('INTERIOR_DESIGN_FIRM_REVIEW',__('https://wordpress.org/support/theme/interior-design-firm/reviews/','interior-design-firm'));
}
if ( ! defined( 'INTERIOR_DESIGN_FIRM_LIVE_DEMO' ) ) {
define('INTERIOR_DESIGN_FIRM_LIVE_DEMO',__('https://trial.ovationthemes.com/interior-design-firm/','interior-design-firm'));
}
if ( ! defined( 'INTERIOR_DESIGN_FIRM_BUY_PRO' ) ) {
define('INTERIOR_DESIGN_FIRM_BUY_PRO',__('https://www.ovationthemes.com/products/interior-design-wordpress-theme','interior-design-firm'));
}
if ( ! defined( 'INTERIOR_DESIGN_FIRM_PRO_DOC' ) ) {
define('INTERIOR_DESIGN_FIRM_PRO_DOC',__('https://trial.ovationthemes.com/docs/interior-design-firm-pro-doc/','interior-design-firm'));
}
if ( ! defined( 'INTERIOR_DESIGN_FIRM_FREE_DOC' ) ) {
define('INTERIOR_DESIGN_FIRM_FREE_DOC',__('https://trial.ovationthemes.com/docs/interior-design-firm-free-doc/','interior-design-firm'));
}
if ( ! defined( 'INTERIOR_DESIGN_FIRM_THEME_NAME' ) ) {
define('INTERIOR_DESIGN_FIRM_THEME_NAME',__('Premium Interior Design Firm Theme','interior-design-firm'));
}
if ( ! defined( 'INTERIOR_DESIGN_FIRM_BUNDLE_LINK' ) ) {
define('INTERIOR_DESIGN_FIRM_BUNDLE_LINK',__('https://www.ovationthemes.com/products/wordpress-bundle','interior-design-firm'));
}
/**
 * Theme Info Page
 */
function interior_design_firm_guide() {

	// Theme info
	$return = add_query_arg( array()) ;
	$theme = wp_get_theme( '' ); ?>

	<div class="getting-started__header">
		<div class="header-box-left">
			<h2><?php echo esc_html( $theme ); ?></h2>
			<p><?php esc_html_e('Version: ', 'interior-design-firm'); ?><?php echo esc_html($theme['Version']);?></p>
		</div>
		<div class="header-box-right">
			<div class="btn_box">
				<a class="button-primary" href="<?php echo esc_url( INTERIOR_DESIGN_FIRM_FREE_DOC ); ?>" target="_blank"><?php esc_html_e('Documentation', 'interior-design-firm'); ?></a>
				<a class="button-primary" href="<?php echo esc_url( INTERIOR_DESIGN_FIRM_SUPPORT ); ?>" target="_blank"><?php esc_html_e('Support', 'interior-design-firm'); ?></a>
				<a class="button-primary" href="<?php echo esc_url( INTERIOR_DESIGN_FIRM_REVIEW ); ?>" target="_blank"><?php esc_html_e('Review', 'interior-design-firm'); ?></a>
			</div>
		</div>
	</div>

	<div class="wrap getting-started">
		<div class="box-container">
			<div class="box-left-main">
				<div class="leftbox">
					<h3><?php esc_html_e('Documentation','interior-design-firm'); ?></h3>
					<p><?php $theme = wp_get_theme(); 
						echo wp_kses_post( apply_filters( 'description', esc_html( $theme->get( 'Description' ) ) ) );
					?></p>

					<h4><?php esc_html_e('Edit Your Site','interior-design-firm'); ?></h4>
					<p><?php esc_html_e('Now create your website with easy drag and drop powered by gutenburg.','interior-design-firm'); ?></p>
					<a class="button-primary" href="<?php echo esc_url( admin_url() . 'site-editor.php' ); ?>" target="_blank"><?php esc_html_e('Edit Your Site','interior-design-firm'); ?></a>

					<h4><?php esc_html_e('Visit Your Site','interior-design-firm'); ?></h4>
					<p><?php esc_html_e('To check your website click here','interior-design-firm'); ?></p>
					<a class="button-primary" href="<?php echo esc_url( home_url() ); ?>" target="_blank"><?php esc_html_e('Visit Your Site','interior-design-firm'); ?></a>

					<h4><?php esc_html_e('Theme Documentation','interior-design-firm'); ?></h4>
					<p><?php esc_html_e('Check the theme documentation to easily set up your website.','interior-design-firm'); ?></p>
					<a class="button-primary" href="<?php echo esc_url( INTERIOR_DESIGN_FIRM_FREE_DOC ); ?>" target="_blank"><?php esc_html_e('Documentation','interior-design-firm'); ?></a>
				</div>
       	</div>
			<div class="box-right-main">
				<h3><?php echo esc_html(INTERIOR_DESIGN_FIRM_THEME_NAME); ?></h3>
				<img class="interior_design_firm_img_responsive" style="width: 100%;" src="<?php echo esc_url( $theme->get_screenshot() ); ?>" />
				<div class="pro-links">
					<div class="pro-links-inner">
						<a class="button-primary livedemo" href="<?php echo esc_url( INTERIOR_DESIGN_FIRM_LIVE_DEMO ); ?>" target="_blank"><?php esc_html_e('Live Demo', 'interior-design-firm'); ?></a>
						<a class="button-primary buynow" href="<?php echo esc_url( INTERIOR_DESIGN_FIRM_BUY_PRO ); ?>" target="_blank"><?php esc_html_e('Buy Now', 'interior-design-firm'); ?></a>
						<a class="button-primary docs" href="<?php echo esc_url( INTERIOR_DESIGN_FIRM_PRO_DOC ); ?>" target="_blank"><?php esc_html_e('Documentation', 'interior-design-firm'); ?></a>
					</div>
						<a class="button-primary bundle-btn" href="<?php echo esc_url( INTERIOR_DESIGN_FIRM_BUNDLE_LINK ); ?>" target="_blank"><?php esc_html_e('WordPress Theme Bundle (120+ Themes at Just $89)', 'interior-design-firm'); ?></a>
				</div>
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
		</div>
	</div>

<?php }?>