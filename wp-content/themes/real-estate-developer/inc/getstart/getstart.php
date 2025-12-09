<?php
//about theme info
add_action( 'admin_menu', 'real_estate_developer_gettingstarted' );
function real_estate_developer_gettingstarted() {
	add_theme_page( esc_html__('About Real Estate Developer', 'real-estate-developer'), esc_html__('Theme Demo Import', 'real-estate-developer'), 'edit_theme_options', 'real_estate_developer_guide', 'real_estate_developer_mostrar_guide');
}

// Add a Custom CSS file to WP Admin Area
function real_estate_developer_admin_theme_style() {
	wp_enqueue_style('real-estate-developer-custom-admin-style', esc_url(get_template_directory_uri()) . '/inc/getstart/getstart.css');
	wp_enqueue_script('real-estate-developer-tabs', esc_url(get_template_directory_uri()) . '/inc/getstart/js/tab.js');
}
add_action('admin_enqueue_scripts', 'real_estate_developer_admin_theme_style');

//guidline for about theme
function real_estate_developer_mostrar_guide() { 
	//custom function about theme customizer
	$real_estate_developer_return = add_query_arg( array()) ;
	$real_estate_developer_theme = wp_get_theme( 'real-estate-developer' );
?>

<div class="wrapper-info">
    <div class="col-left sshot-section">
    	<h2><?php esc_html_e( 'Welcome to Real Estate Developer ', 'real-estate-developer' ); ?> <span class="version"><?php esc_html_e( 'Version', 'real-estate-developer' ); ?>: <?php echo esc_html($real_estate_developer_theme['Version']);?></span></h2>
    	<p><?php esc_html_e('All our WordPress themes are modern, minimalist, 100% responsive, seo-friendly,feature-rich, and multipurpose that best suit designers, bloggers and other professionals who are working in the creative fields.','real-estate-developer'); ?></p>
    </div>

    <div class="col-right coupen-section">
    	<div class="logo-section">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/screenshot.png" alt="" />
		</div>
		<div class="logo-right">			
			<div class="update-now">
				<div class="theme-info">
					<div class="theme-info-left">
						<h2><?php esc_html_e('TRY PREMIUM','real-estate-developer'); ?></h2>
						<h4><?php esc_html_e('REAL ESTATE DEVELOPER THEME','real-estate-developer'); ?></h4>
					</div>	
					<div class="theme-info-right"></div>
				</div>	
				<div class="dicount-row">
					<div class="disc-sec">	
						<h5 class="disc-text"><?php esc_html_e('GET THE FLAT DISCOUNT OF','real-estate-developer'); ?></h5>
						<h1 class="disc-per"><?php esc_html_e('20%','real-estate-developer'); ?></h1>	
					</div>
					<div class="coupen-info">
						<h5 class="coupen-code"><?php esc_html_e('"VWPRO20"','real-estate-developer'); ?></h5>
						<h5 class="coupen-text"><?php esc_html_e('USE COUPON CODE','real-estate-developer'); ?></h5>
						<div class="info-link">						
							<a href="<?php echo esc_url( REAL_ESTATE_DEVELOPER_BUY_NOW ); ?>" target="_blank"> <?php esc_html_e( 'UPGRADE TO PRO', 'real-estate-developer' ); ?></a>
						</div>	
					</div>	
				</div>				
			</div>
		</div>
    </div>

    <div class="tab-sec">
    	<div class="tab">
    		<button class="tablinks" onclick="real_estate_developer_open_tab(event, 'theme_offer')"><?php esc_html_e( 'Demo Importer', 'real-estate-developer' ); ?></button>
			<button class="tablinks" onclick="real_estate_developer_open_tab(event, 'lite_theme')"><?php esc_html_e( 'Setup With Customizer', 'real-estate-developer' ); ?></button>
			<button class="tablinks" onclick="real_estate_developer_open_tab(event, 'theme_pro')"><?php esc_html_e( 'Get Premium', 'real-estate-developer' ); ?></button>
  			<button class="tablinks" onclick="real_estate_developer_open_tab(event, 'free_pro')"><?php esc_html_e( 'Free VS Premium', 'real-estate-developer' ); ?></button>
  			<button class="tablinks" onclick="real_estate_developer_open_tab(event, 'get_bundle')"><?php esc_html_e( 'Get 350+ Themes Bundle at $99', 'real-estate-developer' ); ?></button>
		</div>

		<?php 
			$real_estate_developer_plugin_custom_css = '';
			if(class_exists('Ibtana_Visual_Editor_Menu_Class')){
				$real_estate_developer_plugin_custom_css ='display: block';
			}
		?>

		<div id="theme_offer" class="tabcontent open">
			<div class="demo-content">
				<h3><?php esc_html_e( 'Click the below run importer button to import demo content', 'real-estate-developer' ); ?></h3>
				<?php 
				/* Get Started. */ 
				require get_parent_theme_file_path( '/inc/getstart/demo-content.php' );
			 	?>
			</div> 	
		</div>


		<div id="lite_theme" class="tabcontent">
			<?php  if(!class_exists('Ibtana_Visual_Editor_Menu_Class')){ 
				$plugin_ins = Real_Estate_Developer_Plugin_Activation_Settings::get_instance();
				$real_estate_developer_actions = $plugin_ins->recommended_actions;
				?>
				<div class="real-estate-developer-recommended-plugins">
				    <div class="real-estate-developer-action-list">
				        <?php if ($real_estate_developer_actions): foreach ($real_estate_developer_actions as $key => $real_estate_developer_actionValue): ?>
				                <div class="real-estate-developer-action" id="<?php echo esc_attr($real_estate_developer_actionValue['id']);?>">
			                        <div class="action-inner">
			                            <h3 class="action-title"><?php echo esc_html($real_estate_developer_actionValue['title']); ?></h3>
			                            <div class="action-desc"><?php echo esc_html($real_estate_developer_actionValue['desc']); ?></div>
			                            <?php echo wp_kses_post($real_estate_developer_actionValue['link']); ?>
			                            <a class="ibtana-skip-btn" get-start-tab-id="lite-theme-tab" href="javascript:void(0);"><?php esc_html_e('Skip','real-estate-developer'); ?></a>
			                        </div>
				                </div>
				            <?php endforeach;
				        endif; ?>
				    </div>
				</div>
			<?php } ?>
			<div class="lite-theme-tab" style="<?php echo esc_attr($real_estate_developer_plugin_custom_css); ?>">
				<h3><?php esc_html_e( 'Lite Theme Information', 'real-estate-developer' ); ?></h3>
				<hr class="h3hr">
				<p><?php esc_html_e('The Real Estate Developer WordPress Theme is a powerful, professionally crafted website template designed specifically for real estate developers, agencies, brokers, consultants, property dealers, and real estate agents. Whether youre managing residential, commercial, industrial, luxury, or investment properties, this theme provides a perfect platform to promote and manage property listings, homes for sale, homes for rent, and real estate projects like gated communities or turnkey developments. Built with modern design elements and clean code, the theme offers intuitive navigation, property grids, filterable property search, and full-width banners for open house events or real estate video tours. Visually, it includes elegant layouts, interactive maps, virtual tour integration, property image galleries, and real estate photography tools to help clients explore listings with ease. This theme is optimized for real estate SEO, includes a blog and property news section, and integrates seamlessly with CRM tools to generate leads. Users can easily manage property documents, mortgage calculators, contact forms, and explore home financing options. Ideal for launching a real estate marketing platform, realtor network portal, or property showcase website, it is compatible with the Estatik Real Estate Plugin, making it a one-stop solution for professional property marketing, management, and lead generation.','real-estate-developer'); ?></p>
			  	<div class="col-left-inner">
			  		<h4><?php esc_html_e( 'Theme Documentation', 'real-estate-developer' ); ?></h4>
					<p><?php esc_html_e( 'If you need any assistance regarding setting up and configuring the Theme, our documentation is there.', 'real-estate-developer' ); ?></p>
					<div class="info-link">
						<a href="<?php echo esc_url( REAL_ESTATE_DEVELOPER_FREE_THEME_DOC ); ?>" target="_blank"> <?php esc_html_e( 'Documentation', 'real-estate-developer' ); ?></a>
					</div>
					<hr>
					<h4><?php esc_html_e('Theme Customizer', 'real-estate-developer'); ?></h4>
					<p> <?php esc_html_e('To begin customizing your website, start by clicking "Customize".', 'real-estate-developer'); ?></p>
					<div class="info-link">
						<a target="_blank" href="<?php echo esc_url( admin_url('customize.php') ); ?>"><?php esc_html_e('Customizing', 'real-estate-developer'); ?></a>
					</div>
					<hr>
					<h4><?php esc_html_e('Having Trouble, Need Support?', 'real-estate-developer'); ?></h4>
					<p> <?php esc_html_e('Our dedicated team is well prepared to help you out in case of queries and doubts regarding our theme.', 'real-estate-developer'); ?></p>
					<div class="info-link">
						<a href="<?php echo esc_url( REAL_ESTATE_DEVELOPER_SUPPORT ); ?>" target="_blank"><?php esc_html_e('Support Forum', 'real-estate-developer'); ?></a>
					</div>
					<hr>
					<h4><?php esc_html_e('Reviews & Testimonials', 'real-estate-developer'); ?></h4>
					<p> <?php esc_html_e('All the features and aspects of this WordPress Theme are phenomenal. I\'d recommend this theme to all.', 'real-estate-developer'); ?></p>
					<div class="info-link">
						<a href="<?php echo esc_url( REAL_ESTATE_DEVELOPER_REVIEW ); ?>" target="_blank"><?php esc_html_e('Reviews', 'real-estate-developer'); ?></a>
					</div>

					<div class="link-customizer">
						<h3><?php esc_html_e( 'Link to customizer', 'real-estate-developer' ); ?></h3>
						<hr class="h3hr">
						<div class="first-row">
							<div class="row-box">
								<div class="row-box1">
									<span class="dashicons dashicons-buddicons-buddypress-logo"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[control]=custom_logo') ); ?>" target="_blank"><?php esc_html_e('Upload your logo','real-estate-developer'); ?></a>
								</div>
								<div class="row-box2">
									<span class="dashicons dashicons-category"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=real_estate_developer_top_bar') ); ?>" target="_blank"><?php esc_html_e('Header','real-estate-developer'); ?></a>
								</div>
							</div>

							<div class="row-box">
								<div class="row-box1">
									<span class="dashicons dashicons-slides"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=real_estate_developer_banner_section') ); ?>" target="_blank"><?php esc_html_e('Banner Settings','real-estate-developer'); ?></a>
								</div>
								<div class="row-box2">
									<span class="dashicons dashicons-category"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=real_estate_developer_category_section') ); ?>" target="_blank"><?php esc_html_e('Category Section','real-estate-developer'); ?></a>
								</div>
							</div>
						
							<div class="row-box">
								<div class="row-box1">
									<span class="dashicons dashicons-text-page"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=real_estate_developer_footer') ); ?>" target="_blank"><?php esc_html_e('Footer Text','real-estate-developer'); ?></a>
								</div>
								<div class="row-box2">
									<span class="dashicons dashicons-menu"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[panel]=nav_menus') ); ?>" target="_blank"><?php esc_html_e('Menus','real-estate-developer'); ?></a>
								</div>
							</div>
							
							<div class="row-box">
								<div class="row-box1">
									<span class="dashicons dashicons-admin-generic"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=real_estate_developer_left_right') ); ?>" target="_blank"><?php esc_html_e('General Settings','real-estate-developer'); ?></a>
								</div>
								<div class="row-box2">
									<span class="dashicons dashicons-format-gallery"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=real_estate_developer_post_settings') ); ?>" target="_blank"><?php esc_html_e('Post settings','real-estate-developer'); ?></a>
								</div>
							</div>

							<div class="row-box">
								<div class="row-box1">
									<span class="dashicons dashicons-screenoptions"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[panel]=widgets') ); ?>" target="_blank"><?php esc_html_e('Footer Widget','real-estate-developer'); ?></a>
								</div>
							</div>
						</div>
					</div>
			  	</div>
				<div class="col-right-inner">
					<h3 class="page-template"><?php esc_html_e('How to set up Home Page Template','real-estate-developer'); ?></h3>
				  	<hr class="h3hr">
					<p><?php esc_html_e('Follow these instructions to setup Home page.','real-estate-developer'); ?></p>
                  	<p><span class="strong"><?php esc_html_e('1. Create a new page :','real-estate-developer'); ?></span><?php esc_html_e(' Go to ','real-estate-developer'); ?>
					  	<b><?php esc_html_e(' Dashboard >> Pages >> Add New Page','real-estate-developer'); ?></b></p>
                  	<p><?php esc_html_e('Name it as "Home" then select the template "Custom Home Page".','real-estate-developer'); ?></p>
                  	<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstart/images/home-page-template.png" alt="" />
                  	<p><span class="strong"><?php esc_html_e('2. Set the front page:','real-estate-developer'); ?></span><?php esc_html_e(' Go to ','real-estate-developer'); ?>
					  	<b><?php esc_html_e(' Settings >> Reading ','real-estate-developer'); ?></b></p>
				  	<p><?php esc_html_e('Select the option of Static Page, now select the page you created to be the homepage, while another page to be your default page.','real-estate-developer'); ?></p>
                  	<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstart/images/set-front-page.png" alt="" />
                  	<p><?php esc_html_e(' Once you are done with setup, then follow the','real-estate-developer'); ?> <a class="doc-links" href="<?php echo esc_url( REAL_ESTATE_DEVELOPER_FREE_THEME_DOC ); ?>" target="_blank"><?php esc_html_e('Documentation','real-estate-developer'); ?></a></p>
			  	</div>
			</div>
		</div>

		<div id="theme_pro" class="tabcontent">
		  	<h3><?php esc_html_e( 'Premium Theme Information', 'real-estate-developer' ); ?></h3>
			<hr class="h3hr">
		    <div class="col-left-pro">
		    	<p><?php esc_html_e('The Property Developer WordPress Theme is a powerful, professionally crafted theme tailored for real estate companies, property developers, real estate agents, and agencies looking to establish a strong digital presence. Whether you\'re promoting residential, commercial, or industrial properties, this theme offers a sophisticated platform to showcase your portfolio. With its modern, clean design and user-friendly interface, it’s perfect for listing homes for sale, apartments for rent, plots for sale, and more. From real estate brokers and consultants to large property management firms, this theme meets the needs of all. It supports MLS listings, integrates with real estate CRM, and offers layout flexibility through built-in customization tools. It includes sections for featured properties, testimonials, team profiles, contact forms, and stunning banners. Its responsive, retina-ready design ensures your listings look great on all devices. Ideal for creating property websites, real estate blogs, or launching a professional real estate portal, this theme offers optimized performance with fast page load times, SEO-friendly code, and modern animations.','real-estate-developer'); ?></p>
		    </div>
		    <div class="col-right-pro">
		    	<div class="pro-links">
			    	<a href="<?php echo esc_url( REAL_ESTATE_DEVELOPER_LIVE_DEMO ); ?>" target="_blank"><?php esc_html_e('Live Demo', 'real-estate-developer'); ?></a>
					<a href="<?php echo esc_url( REAL_ESTATE_DEVELOPER_BUY_NOW ); ?>" target="_blank"><?php esc_html_e('Buy Pro', 'real-estate-developer'); ?></a>
					<a href="<?php echo esc_url( REAL_ESTATE_DEVELOPER_PRO_DOC ); ?>" target="_blank"><?php esc_html_e('Pro Documentation', 'real-estate-developer'); ?></a>
					<a href="<?php echo esc_url( REAL_ESTATE_DEVELOPER_THEME_BUNDLE_BUY_NOW ); ?>" target="_blank"><?php esc_html_e('Get 350+ Themes Bundle at $99', 'real-estate-developer'); ?></a>
				</div>
		    	<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstart/images/responsive.png" alt="" />
		    </div>
		</div>

		<div id="free_pro" class="tabcontent">
		  	<div class="featurebox">
			    <h3><?php esc_html_e( 'Theme Features', 'real-estate-developer' ); ?></h3>
				<hr class="h3hr">
				<div class="table-image">
					<table class="tablebox">
						<thead>
							<tr>
								<th></th>
								<th><?php esc_html_e('Free Themes', 'real-estate-developer'); ?></th>
								<th><?php esc_html_e('Premium Themes', 'real-estate-developer'); ?></th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td><?php esc_html_e('Theme Customization', 'real-estate-developer'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Responsive Design', 'real-estate-developer'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Logo Upload', 'real-estate-developer'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Social Media Links', 'real-estate-developer'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Banner Settings', 'real-estate-developer'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Template Pages', 'real-estate-developer'); ?></td>
								<td class="table-img"><?php esc_html_e('3', 'real-estate-developer'); ?></td>
								<td class="table-img"><?php esc_html_e('10', 'real-estate-developer'); ?></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Home Page Template', 'real-estate-developer'); ?></td>
								<td class="table-img"><?php esc_html_e('1', 'real-estate-developer'); ?></td>
								<td class="table-img"><?php esc_html_e('1', 'real-estate-developer'); ?></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Theme sections', 'real-estate-developer'); ?></td>
								<td class="table-img"><?php esc_html_e('2', 'real-estate-developer'); ?></td>
								<td class="table-img"><?php esc_html_e('13', 'real-estate-developer'); ?></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Contact us Page Template / Support Templates', 'real-estate-developer'); ?></td>
								<td class="table-img">0</td>
								<td class="table-img"><?php esc_html_e('1', 'real-estate-developer'); ?></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Blog Templates & Layout', 'real-estate-developer'); ?></td>
								<td class="table-img">0</td>
								<td class="table-img"><?php esc_html_e('3(Full width/Left/Right Sidebar)', 'real-estate-developer'); ?></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Page Templates & Layout', 'real-estate-developer'); ?></td>
								<td class="table-img">0</td>
								<td class="table-img"><?php esc_html_e('3(Left/Right Sidebar)', 'real-estate-developer'); ?></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Color Pallete For Particular Sections', 'real-estate-developer'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Global Color Option', 'real-estate-developer'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Section Reordering', 'real-estate-developer'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Demo Importer', 'real-estate-developer'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Allow To Set Site Title, Tagline, Logo', 'real-estate-developer'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Enable Disable Options On All Sections, Logo', 'real-estate-developer'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Full Documentation', 'real-estate-developer'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Latest WordPress Compatibility', 'real-estate-developer'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Support 3rd Party Plugins', 'real-estate-developer'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Secure and Optimized Code', 'real-estate-developer'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Exclusive Functionalities', 'real-estate-developer'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Section Enable / Disable', 'real-estate-developer'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Section Google Font Choices', 'real-estate-developer'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Video Gallery', 'real-estate-developer'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Simple & Mega Menu Option', 'real-estate-developer'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Support to add custom CSS / JS ', 'real-estate-developer'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Shortcodes', 'real-estate-developer'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Custom Background, Colors, Header, Logo & Menu', 'real-estate-developer'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Premium Membership', 'real-estate-developer'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Budget Friendly Value', 'real-estate-developer'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Priority Error Fixing', 'real-estate-developer'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Custom Feature Addition', 'real-estate-developer'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('All Access Theme Pass', 'real-estate-developer'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Seamless Customer Support', 'real-estate-developer'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Real Estate Developer ', 'real-estate-developer'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Detail Services', 'real-estate-developer'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('About Business Page', 'real-estate-developer'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Team Member Page', 'real-estate-developer'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Project Description Page', 'real-estate-developer'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Support Page', 'real-estate-developer'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td></td>
								<td class="table-img"></td>
								<td class="update-link"><a href="<?php echo esc_url( REAL_ESTATE_DEVELOPER_BUY_NOW ); ?>" target="_blank"><?php esc_html_e('Upgrade to Pro', 'real-estate-developer'); ?></a></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>

		<div id="get_bundle" class="tabcontent">		  	
		   	<div class="col-left-pro">
		   		<h3><?php esc_html_e( 'WP Theme Bundle', 'real-estate-developer' ); ?></h3>
		    	<p><?php esc_html_e('Enhance your website effortlessly with our WP Theme Bundle. Get access to 350+ premium WordPress themes and 5+ powerful plugins, all designed to meet diverse business needs. Enjoy seamless integration with any plugins, ultimate customization flexibility, and regular updates to keep your site current and secure. Plus, benefit from our dedicated customer support, ensuring a smooth and professional web experience.','real-estate-developer'); ?></p>
		    	<div class="feature">
		    		<h4><?php esc_html_e( 'Features:', 'real-estate-developer' ); ?></h4>
		    		<p><?php esc_html_e('350+ Premium Themes & 5+ Plugins.', 'real-estate-developer'); ?></p>
		    		<p><?php esc_html_e('Seamless Integration.', 'real-estate-developer'); ?></p>
		    		<p><?php esc_html_e('Customization Flexibility.', 'real-estate-developer'); ?></p>
		    		<p><?php esc_html_e('Regular Updates.', 'real-estate-developer'); ?></p>
		    		<p><?php esc_html_e('Dedicated Support.', 'real-estate-developer'); ?></p>
		    	</div>
		    	<p><?php esc_html_e('Upgrade now and give your website the professional edge it deserves, all at an unbeatable price of $99!', 'real-estate-developer'); ?></p>
		    	<div class="pro-links">
					<a href="<?php echo esc_url( REAL_ESTATE_DEVELOPER_THEME_BUNDLE_BUY_NOW ); ?>" target="_blank"><?php esc_html_e('Buy Now', 'real-estate-developer'); ?></a>
					<a href="<?php echo esc_url( REAL_ESTATE_DEVELOPER_THEME_BUNDLE_DOC ); ?>" target="_blank"><?php esc_html_e('Documentation', 'real-estate-developer'); ?></a>
				</div>
		   	</div>
		   	<div class="col-right-pro">
		    	<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstart/images/bundle.png" alt="" />
		   	</div>		    
		</div>
	</div>
</div>

<?php } ?>