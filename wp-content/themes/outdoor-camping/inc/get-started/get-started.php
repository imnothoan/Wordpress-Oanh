<?php
add_action( 'admin_menu', 'outdoor_camping_getting_started' );
function outdoor_camping_getting_started() {
	add_theme_page( esc_html__('Get Started', 'outdoor-camping'), esc_html__('Get Started', 'outdoor-camping'), 'edit_theme_options', 'outdoor-camping-guide-page', 'outdoor_camping_test_guide');
}

// Add a Custom CSS file to WP Admin Area
function outdoor_camping_admin_theme_style() {
   wp_enqueue_style('custom-admin-style', esc_url(get_template_directory_uri()) . '/inc/get-started/get-started.css');
   wp_enqueue_script( 'admin-notice-script', get_template_directory_uri() . '/get-started/js/admin-notice-script.js', array( 'jquery' ) );
}
add_action('admin_enqueue_scripts', 'outdoor_camping_admin_theme_style');

//guidline for about theme
function outdoor_camping_test_guide() { 
	//custom function about theme customizer
	$return = add_query_arg( array()) ;
	$theme = wp_get_theme( 'outdoor-camping' );
?>
	<div class="wrapper-outer">
		<div class="left-main-box">
			<div class="intro"><h3><?php echo esc_html( $theme->Name ); ?></h3></div>
			<div class="left-inner">
				<div class="about-wrapper">
					<div class="col-left">
						<p><?php echo esc_html( $theme->get( 'Description' ) ); ?></p>
					</div>
					<div class="col-right">
						<img role="img" src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/get-started/images/screenshot.png" alt="" />
					</div>
				</div>
				<div class="link-wrapper">
					<h4><?php esc_html_e('Important Links', 'outdoor-camping'); ?></h4>
					<div class="link-buttons">
						<a href="<?php echo esc_url( OUTDOOR_CAMPING_THEME_DOC ); ?>" target="_blank"><?php esc_html_e('Free Setup Guide', 'outdoor-camping'); ?></a>
						<a href="<?php echo esc_url( OUTDOOR_CAMPING_SUPPORT ); ?>" target="_blank"><?php esc_html_e('Support Forum', 'outdoor-camping'); ?></a>
						<a href="<?php echo esc_url( OUTDOOR_CAMPING_PRO_DEMO ); ?>" target="_blank"><?php esc_html_e('Live Demo', 'outdoor-camping'); ?></a>
						<a href="<?php echo esc_url( OUTDOOR_CAMPING_PRO_THEME_DOC ); ?>" target="_blank"><?php esc_html_e('Pro Setup Guide', 'outdoor-camping'); ?></a>
					</div>
				</div>
				<div class="support-wrapper">
					<div class="editor-box">
						<i class="dashicons dashicons-admin-appearance"></i>
						<h4><?php esc_html_e('Theme Customization', 'outdoor-camping'); ?></h4>
						<p><?php esc_html_e('Effortlessly modify & maintain your site using editor.', 'outdoor-camping'); ?></p>
						<div class="support-button">
							<a class="button button-primary" href="<?php echo esc_url( admin_url( 'site-editor.php' ) ); ?>" target="_blank"><?php esc_html_e('Site Editor', 'outdoor-camping'); ?></a>
						</div>
					</div>
					<div class="support-box">
						<i class="dashicons dashicons-microphone"></i>
						<h4><?php esc_html_e('Need Support?', 'outdoor-camping'); ?></h4>
						<p><?php esc_html_e('Go to our support forum to help you in case of queries.', 'outdoor-camping'); ?></p>
						<div class="support-button">
							<a class="button button-primary" href="<?php echo esc_url( OUTDOOR_CAMPING_SUPPORT ); ?>" target="_blank"><?php esc_html_e('Get Support', 'outdoor-camping'); ?></a>
						</div>
					</div>
					<div class="review-box">
						<i class="dashicons dashicons-star-filled"></i>
						<h4><?php esc_html_e('Leave Us A Review', 'outdoor-camping'); ?></h4>
						<p><?php esc_html_e('Are you enjoying Our Theme? We would Love to hear your Feedback.', 'outdoor-camping'); ?></p>
						<div class="support-button">
							<a class="button button-primary" href="<?php echo esc_url( OUTDOOR_CAMPING_REVIEW ); ?>" target="_blank"><?php esc_html_e('Rate Us', 'outdoor-camping'); ?></a>
						</div>
					</div>
				</div>
			</div>
			<div class="go-premium-box">
				<h4><?php esc_html_e('Why Go For Premium?', 'outdoor-camping'); ?></h4>
				<ul class="pro-list">
					<li><?php esc_html_e('Advanced Customization Options', 'outdoor-camping');?></li>
					<li><?php esc_html_e('One-Click Demo Import', 'outdoor-camping');?></li>
					<li><?php esc_html_e('WooCommerce Integration & Enhanced Features', 'outdoor-camping');?></li>
					<li><?php esc_html_e('Performance Optimization & SEO-Ready', 'outdoor-camping');?></li>
					<li><?php esc_html_e('Premium Support & Regular Updates', 'outdoor-camping');?></li>
				</ul>
			</div>
		</div>
		<div class="right-main-box">
			<div class="right-inner">
				<div class="pro-boxes">
					<h4><?php esc_html_e('Get Theme Bundle', 'outdoor-camping'); ?></h4>
					<p><?php esc_html_e('60+ Premium WordPress Themes', 'outdoor-camping'); ?></p>
					<p class="main-bundle-price" ><strong class="cancel-bundle-price"><?php esc_html_e('$2340', 'outdoor-camping'); ?></strong><span class="bundle-price"><?php esc_html_e('$86', 'outdoor-camping'); ?></span></p>
					<img role="img" src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/get-started/images/bundle.png" alt="bundle image" />
					<p><?php esc_html_e('SUMMER SALE: ', 'outdoor-camping'); ?><strong><?php esc_html_e('Extra 20%', 'outdoor-camping'); ?></strong><?php esc_html_e(' OFF on WordPress Theme Bundle Use Code: ', 'outdoor-camping'); ?><strong><?php esc_html_e('“HEAT20”', 'outdoor-camping'); ?></strong></p>
					<a href="<?php echo esc_url( OUTDOOR_CAMPING_PRO_THEME_BUNDLE ); ?>" target="_blank"><?php esc_html_e('Get Theme Bundle For ', 'outdoor-camping'); ?><span><?php esc_html_e('$86', 'outdoor-camping'); ?></a>
				</div>
				<div class="pro-boxes pro-theme-container">
					<h4><?php esc_html_e('Outdoor Camping Pro', 'outdoor-camping'); ?></h4>
					<p class="pro-theme-price" ><?php esc_html_e('$39', 'outdoor-camping'); ?></p>
					<img role="img" src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/get-started/images/premium.png" alt="premium image" />
					<p><?php esc_html_e('SUMMER SALE: ', 'outdoor-camping'); ?><strong><?php esc_html_e('Extra 25%', 'outdoor-camping'); ?></strong><?php esc_html_e(' OFF on WordPress Block Themes! Use Code: ', 'outdoor-camping'); ?><strong><?php esc_html_e('“SUMMER25”', 'outdoor-camping'); ?></strong></p>
					<a href="<?php echo esc_url( OUTDOOR_CAMPING_BUY_NOW ); ?>" target="_blank"><?php esc_html_e('Upgrade To Pro At Just at $29.25', 'outdoor-camping'); ?></a>
				</div>
				<div class="pro-boxes last-pro-box">
					<h4><?php esc_html_e('View All Our Themes', 'outdoor-camping'); ?></h4>
					<img role="img" src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/get-started/images/all-themes.png" alt="all themes image" />
					<a href="<?php echo esc_url( OUTDOOR_CAMPING_PRO_ALL_THEMES ); ?>" target="_blank"><?php esc_html_e('View All Our Premium Themes', 'outdoor-camping'); ?></a>
				</div>
			</div>
		</div>
	</div>
<?php } ?>