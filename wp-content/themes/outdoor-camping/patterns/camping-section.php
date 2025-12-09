<?php
 /**
  * Title: Camping Section
  * Slug: outdoor-camping/camping-section
  */
$outdoor_camping_pluginsList = get_option( 'active_plugins' );
$outdoor_camping_plugin = 'wp-travel/wp-travel.php';
$outdoor_camping_results = in_array( $outdoor_camping_plugin , $outdoor_camping_pluginsList);
if ( $outdoor_camping_results )  {
?>

<!-- wp:group {"className":"adventure-sec-dynamic alignfull","style":{"spacing":{"padding":{"top":"0","bottom":"var:preset|spacing|60","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"secaccent","layout":{"type":"constrained","contentSize":"80%"}} -->
<div class="wp-block-group adventure-sec-dynamic alignfull has-secaccent-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:var(--wp--preset--spacing--60);padding-left:0"><!-- wp:heading {"textAlign":"center","className":"sec-main-heading","style":{"typography":{"fontStyle":"normal","fontWeight":"400","fontSize":"18px"},"spacing":{"margin":{"top":"0","bottom":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary","fontFamily":"inika"} -->
<h2 class="wp-block-heading has-text-align-center sec-main-heading has-primary-color has-text-color has-link-color has-inika-font-family" style="margin-top:0;margin-bottom:0;font-size:18px;font-style:normal;font-weight:400"><?php esc_html_e('POPULAR SERVICES','outdoor-camping'); ?></h2>
<!-- /wp:heading -->

<!-- wp:heading {"textAlign":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|heading"}}},"typography":{"fontSize":"24px","fontStyle":"normal","fontWeight":"700"}},"textColor":"heading","fontFamily":"inika"} -->
<h2 class="wp-block-heading has-text-align-center has-heading-color has-text-color has-link-color has-inika-font-family" style="font-size:24px;font-style:normal;font-weight:700"><?php esc_html_e('Amazing Camping For Real Adventure','outdoor-camping'); ?></h2>
<!-- /wp:heading -->

<!-- wp:columns {"className":"camping-cols wow fadeInUp","style":{"spacing":{"margin":{"top":"var:preset|spacing|60"}}}} -->
<div class="wp-block-columns camping-cols wow fadeInUp" style="margin-top:var(--wp--preset--spacing--60)"><!-- wp:column {"className":"camping-box-shortcode"} -->
<div class="wp-block-column camping-box-shortcode"><!-- wp:shortcode -->
<!-- /wp:shortcode --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<?php } else { ?>

<!-- wp:group {"className":"adventure-sec alignfull","style":{"spacing":{"padding":{"top":"0","bottom":"var:preset|spacing|60","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"secaccent","layout":{"type":"constrained","contentSize":"80%"}} -->
<div class="wp-block-group adventure-sec alignfull has-secaccent-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:var(--wp--preset--spacing--60);padding-left:0"><!-- wp:heading {"textAlign":"center","className":"sec-main-heading","style":{"typography":{"fontStyle":"normal","fontWeight":"400","fontSize":"18px"},"spacing":{"margin":{"top":"0","bottom":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary","fontFamily":"inika"} -->
<h2 class="wp-block-heading has-text-align-center sec-main-heading has-primary-color has-text-color has-link-color has-inika-font-family" style="margin-top:0;margin-bottom:0;font-size:18px;font-style:normal;font-weight:400"><?php esc_html_e('POPULAR SERVICES','outdoor-camping'); ?></h2>
<!-- /wp:heading -->

<!-- wp:heading {"textAlign":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|heading"}}},"typography":{"fontSize":"24px","fontStyle":"normal","fontWeight":"700"}},"textColor":"heading","fontFamily":"inika"} -->
<h2 class="wp-block-heading has-text-align-center has-heading-color has-text-color has-link-color has-inika-font-family" style="font-size:24px;font-style:normal;font-weight:700"><?php esc_html_e('Amazing Camping For Real Adventure','outdoor-camping'); ?></h2>
<!-- /wp:heading -->

<!-- wp:columns {"className":"camping-cols wow fadeInUp","style":{"spacing":{"margin":{"top":"var:preset|spacing|60"}}}} -->
<div class="wp-block-columns camping-cols wow fadeInUp" style="margin-top:var(--wp--preset--spacing--60)"><!-- wp:column {"className":"camping-box"} -->
<div class="wp-block-column camping-box"><!-- wp:group {"className":"camping-box","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"}},"border":{"radius":"15px"}},"layout":{"type":"default"}} -->
<div class="wp-block-group camping-box" style="border-radius:15px;margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:image {"id":275,"width":"auto","height":"300px","sizeSlug":"full","linkDestination":"none","className":"camp-img","style":{"spacing":{"margin":{"top":"0","bottom":"0","left":"0","right":"0"}},"border":{"radius":"10px"}}} -->
<figure class="wp-block-image size-full is-resized has-custom-border camp-img" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0"><img src="<?php echo esc_url(get_parent_theme_file_uri( '/assets/images/service1.png' )); ?>" alt="" class="wp-image-275" style="border-radius:10px;width:auto;height:300px"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading"}}},"typography":{"fontSize":"20px","fontStyle":"normal","fontWeight":"600"},"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"var:preset|spacing|20","left":"0","right":"0"}}},"textColor":"heading","fontFamily":"inter"} -->
<p class="has-heading-color has-text-color has-link-color has-inter-font-family" style="margin-top:0;margin-right:0;margin-bottom:var(--wp--preset--spacing--20);margin-left:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;font-size:20px;font-style:normal;font-weight:600"><?php esc_html_e('Camping RV','outdoor-camping'); ?></p>
<!-- /wp:paragraph -->

<!-- wp:columns {"className":"camping-info-col","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"}}}} -->
<div class="wp-block-columns camping-info-col" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:column {"width":"50%","className":"camping-date"} -->
<div class="wp-block-column camping-date" style="flex-basis:50%"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"},"border":{"right":{"color":"var:preset|color|body-text","width":"1px"},"top":[],"bottom":[],"left":[]}},"layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-group" style="border-right-color:var(--wp--preset--color--body-text);border-right-width:1px"><!-- wp:image {"id":286,"width":"18px","height":"18px","scale":"contain","sizeSlug":"full","linkDestination":"none","className":"testimonial-img","style":{"border":{"radius":"5px"}}} -->
<figure class="wp-block-image size-full is-resized has-custom-border testimonial-img"><img src="<?php echo esc_url(get_parent_theme_file_uri( '/assets/images/date-icon.png' )); ?>" alt="" class="wp-image-286" style="border-radius:5px;object-fit:contain;width:18px;height:18px"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|body-text"}}},"typography":{"fontSize":"14px","fontStyle":"normal","fontWeight":"400"},"border":{"width":"0px","style":"none"}},"textColor":"body-text","fontFamily":"inter"} -->
<p class="has-body-text-color has-text-color has-link-color has-inter-font-family" style="border-style:none;border-width:0px;font-size:14px;font-style:normal;font-weight:400"><?php esc_html_e('29/08/2025','outdoor-camping'); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"25%","className":"camping-location"} -->
<div class="wp-block-column camping-location" style="flex-basis:25%"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"},"border":{"right":{"style":"none","width":"0px"},"top":[],"bottom":[],"left":[]}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"center"}} -->
<div class="wp-block-group" style="border-right-style:none;border-right-width:0px"><!-- wp:image {"id":296,"width":"18px","height":"18px","scale":"contain","sizeSlug":"full","linkDestination":"none","className":"testimonial-img","style":{"border":{"radius":"5px"}}} -->
<figure class="wp-block-image size-full is-resized has-custom-border testimonial-img"><img src="<?php echo esc_url(get_parent_theme_file_uri( '/assets/images/loc-icon.png' )); ?>" alt="" class="wp-image-296" style="border-radius:5px;object-fit:contain;width:18px;height:18px"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|body-text"}}},"typography":{"fontSize":"14px","fontStyle":"normal","fontWeight":"400"}},"textColor":"body-text","fontFamily":"inter"} -->
<p class="has-body-text-color has-text-color has-link-color has-inter-font-family" style="font-size:14px;font-style:normal;font-weight:400"><?php esc_html_e('Japan','outdoor-camping'); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"25%","className":"camping-user"} -->
<div class="wp-block-column camping-user" style="flex-basis:25%"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"},"border":{"right":{"width":"0px","style":"none"},"top":[],"bottom":[],"left":{"width":"1px"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"right"}} -->
<div class="wp-block-group" style="border-right-style:none;border-right-width:0px;border-left-width:1px"><!-- wp:image {"id":299,"width":"18px","height":"18px","scale":"contain","sizeSlug":"full","linkDestination":"none","className":"testimonial-img","style":{"border":{"radius":"5px"}}} -->
<figure class="wp-block-image size-full is-resized has-custom-border testimonial-img"><img src="<?php echo esc_url(get_parent_theme_file_uri( '/assets/images/users-icon.png' )); ?>" alt="" class="wp-image-299" style="border-radius:5px;object-fit:contain;width:18px;height:18px"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|body-text"}}},"typography":{"fontSize":"14px","fontStyle":"normal","fontWeight":"400"}},"textColor":"body-text","fontFamily":"inter"} -->
<p class="has-body-text-color has-text-color has-link-color has-inter-font-family" style="font-size:14px;font-style:normal;font-weight:400"><?php esc_html_e('4','outdoor-camping'); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:group {"className":"camping-price","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"var:preset|spacing|30","bottom":"0"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group camping-price" style="margin-top:var(--wp--preset--spacing--30);margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"fontSize":"17px","fontStyle":"normal","fontWeight":"700"}},"textColor":"primary","fontFamily":"inter"} -->
<p class="has-primary-color has-text-color has-link-color has-inter-font-family" style="font-size:17px;font-style:normal;font-weight:700"><?php esc_html_e('$150,00','outdoor-camping'); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"fontSize":"15px","fontStyle":"normal","fontWeight":"500"}},"textColor":"primary","fontFamily":"inter"} -->
<p class="has-primary-color has-text-color has-link-color has-inter-font-family" style="font-size:15px;font-style:normal;font-weight:500"><?php esc_html_e('/per Night','outdoor-camping'); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"className":"camping-box"} -->
<div class="wp-block-column camping-box"><!-- wp:group {"className":"camping-box","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"}},"border":{"radius":"15px"}},"layout":{"type":"default"}} -->
<div class="wp-block-group camping-box" style="border-radius:15px;margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:image {"id":93,"width":"auto","height":"300px","sizeSlug":"full","linkDestination":"none","className":"camp-img","style":{"spacing":{"margin":{"top":"0","bottom":"0","left":"0","right":"0"}},"border":{"radius":"10px"}}} -->
<figure class="wp-block-image size-full is-resized has-custom-border camp-img" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0"><img src="<?php echo esc_url(get_parent_theme_file_uri( '/assets/images/service2.png' )); ?>" alt="" class="wp-image-93" style="border-radius:10px;width:auto;height:300px"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading"}}},"typography":{"fontSize":"20px","fontStyle":"normal","fontWeight":"600"},"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"var:preset|spacing|20","left":"0","right":"0"}}},"textColor":"heading","fontFamily":"inter"} -->
<p class="has-heading-color has-text-color has-link-color has-inter-font-family" style="margin-top:0;margin-right:0;margin-bottom:var(--wp--preset--spacing--20);margin-left:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;font-size:20px;font-style:normal;font-weight:600"><?php esc_html_e('Camping area for tents','outdoor-camping'); ?></p>
<!-- /wp:paragraph -->

<!-- wp:columns {"className":"camping-info-col","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"}}}} -->
<div class="wp-block-columns camping-info-col" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:column {"width":"50%","className":"camping-date"} -->
<div class="wp-block-column camping-date" style="flex-basis:50%"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"},"border":{"right":{"color":"var:preset|color|body-text","width":"1px"},"top":[],"bottom":[],"left":[]}},"layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-group" style="border-right-color:var(--wp--preset--color--body-text);border-right-width:1px"><!-- wp:image {"id":286,"width":"18px","height":"18px","scale":"contain","sizeSlug":"full","linkDestination":"none","className":"testimonial-img","style":{"border":{"radius":"5px"}}} -->
<figure class="wp-block-image size-full is-resized has-custom-border testimonial-img"><img src="<?php echo esc_url(get_parent_theme_file_uri( '/assets/images/date-icon.png' )); ?>" alt="" class="wp-image-286" style="border-radius:5px;object-fit:contain;width:18px;height:18px"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|body-text"}}},"typography":{"fontSize":"14px","fontStyle":"normal","fontWeight":"400"},"border":{"width":"0px","style":"none"}},"textColor":"body-text","fontFamily":"inter"} -->
<p class="has-body-text-color has-text-color has-link-color has-inter-font-family" style="border-style:none;border-width:0px;font-size:14px;font-style:normal;font-weight:400"><?php esc_html_e('29/08/2025','outdoor-camping'); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"25%","className":"camping-location"} -->
<div class="wp-block-column camping-location" style="flex-basis:25%"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"},"border":{"right":{"style":"none","width":"0px"},"top":[],"bottom":[],"left":[]}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"center"}} -->
<div class="wp-block-group" style="border-right-style:none;border-right-width:0px"><!-- wp:image {"id":296,"width":"18px","height":"18px","scale":"contain","sizeSlug":"full","linkDestination":"none","className":"testimonial-img","style":{"border":{"radius":"5px"}}} -->
<figure class="wp-block-image size-full is-resized has-custom-border testimonial-img"><img src="<?php echo esc_url(get_parent_theme_file_uri( '/assets/images/loc-icon.png' )); ?>" alt="" class="wp-image-296" style="border-radius:5px;object-fit:contain;width:18px;height:18px"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|body-text"}}},"typography":{"fontSize":"14px","fontStyle":"normal","fontWeight":"400"}},"textColor":"body-text","fontFamily":"inter"} -->
<p class="has-body-text-color has-text-color has-link-color has-inter-font-family" style="font-size:14px;font-style:normal;font-weight:400"><?php esc_html_e('Japan','outdoor-camping'); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"25%","className":"camping-user"} -->
<div class="wp-block-column camping-user" style="flex-basis:25%"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"},"border":{"right":{"width":"0px","style":"none"},"top":[],"bottom":[],"left":{"width":"1px"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"right"}} -->
<div class="wp-block-group" style="border-right-style:none;border-right-width:0px;border-left-width:1px"><!-- wp:image {"id":299,"width":"18px","height":"18px","scale":"contain","sizeSlug":"full","linkDestination":"none","className":"testimonial-img","style":{"border":{"radius":"5px"}}} -->
<figure class="wp-block-image size-full is-resized has-custom-border testimonial-img"><img src="<?php echo esc_url(get_parent_theme_file_uri( '/assets/images/users-icon.png' )); ?>" alt="" class="wp-image-299" style="border-radius:5px;object-fit:contain;width:18px;height:18px"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|body-text"}}},"typography":{"fontSize":"14px","fontStyle":"normal","fontWeight":"400"}},"textColor":"body-text","fontFamily":"inter"} -->
<p class="has-body-text-color has-text-color has-link-color has-inter-font-family" style="font-size:14px;font-style:normal;font-weight:400"><?php esc_html_e('4','outdoor-camping'); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:group {"className":"camping-price","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"var:preset|spacing|30","bottom":"0"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group camping-price" style="margin-top:var(--wp--preset--spacing--30);margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"fontSize":"17px","fontStyle":"normal","fontWeight":"700"}},"textColor":"primary","fontFamily":"inter"} -->
<p class="has-primary-color has-text-color has-link-color has-inter-font-family" style="font-size:17px;font-style:normal;font-weight:700"><?php esc_html_e('$150,00','outdoor-camping'); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"fontSize":"15px","fontStyle":"normal","fontWeight":"500"}},"textColor":"primary","fontFamily":"inter"} -->
<p class="has-primary-color has-text-color has-link-color has-inter-font-family" style="font-size:15px;font-style:normal;font-weight:500"><?php esc_html_e('/per Night','outdoor-camping'); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"className":"camping-box"} -->
<div class="wp-block-column camping-box"><!-- wp:group {"className":"camping-box","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"}},"border":{"radius":"15px"}},"layout":{"type":"default"}} -->
<div class="wp-block-group camping-box" style="border-radius:15px;margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:image {"id":94,"width":"auto","height":"300px","sizeSlug":"full","linkDestination":"none","className":"camp-img","style":{"spacing":{"margin":{"top":"0","bottom":"0","left":"0","right":"0"}},"border":{"radius":"10px"}}} -->
<figure class="wp-block-image size-full is-resized has-custom-border camp-img" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0"><img src="<?php echo esc_url(get_parent_theme_file_uri( '/assets/images/service3.png' )); ?>" alt="" class="wp-image-94" style="border-radius:10px;width:auto;height:300px"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading"}}},"typography":{"fontSize":"20px","fontStyle":"normal","fontWeight":"600"},"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"var:preset|spacing|20","left":"0","right":"0"}}},"textColor":"heading","fontFamily":"inter"} -->
<p class="has-heading-color has-text-color has-link-color has-inter-font-family" style="margin-top:0;margin-right:0;margin-bottom:var(--wp--preset--spacing--20);margin-left:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;font-size:20px;font-style:normal;font-weight:600"><?php esc_html_e('Cabins and glamping','outdoor-camping'); ?></p>
<!-- /wp:paragraph -->

<!-- wp:columns {"className":"camping-info-col","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"}}}} -->
<div class="wp-block-columns camping-info-col" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:column {"width":"50%","className":"camping-date"} -->
<div class="wp-block-column camping-date" style="flex-basis:50%"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"},"border":{"right":{"color":"var:preset|color|body-text","width":"1px"},"top":[],"bottom":[],"left":[]}},"layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-group" style="border-right-color:var(--wp--preset--color--body-text);border-right-width:1px"><!-- wp:image {"id":286,"width":"18px","height":"18px","scale":"contain","sizeSlug":"full","linkDestination":"none","className":"testimonial-img","style":{"border":{"radius":"5px"}}} -->
<figure class="wp-block-image size-full is-resized has-custom-border testimonial-img"><img src="<?php echo esc_url(get_parent_theme_file_uri( '/assets/images/date-icon.png' )); ?>" alt="" class="wp-image-286" style="border-radius:5px;object-fit:contain;width:18px;height:18px"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|body-text"}}},"typography":{"fontSize":"14px","fontStyle":"normal","fontWeight":"400"},"border":{"width":"0px","style":"none"}},"textColor":"body-text","fontFamily":"inter"} -->
<p class="has-body-text-color has-text-color has-link-color has-inter-font-family" style="border-style:none;border-width:0px;font-size:14px;font-style:normal;font-weight:400"><?php esc_html_e('29/08/2025','outdoor-camping'); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"25%","className":"camping-location"} -->
<div class="wp-block-column camping-location" style="flex-basis:25%"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"},"border":{"right":{"style":"none","width":"0px"},"top":[],"bottom":[],"left":[]}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"center"}} -->
<div class="wp-block-group" style="border-right-style:none;border-right-width:0px"><!-- wp:image {"id":296,"width":"18px","height":"18px","scale":"contain","sizeSlug":"full","linkDestination":"none","className":"testimonial-img","style":{"border":{"radius":"5px"}}} -->
<figure class="wp-block-image size-full is-resized has-custom-border testimonial-img"><img src="<?php echo esc_url(get_parent_theme_file_uri( '/assets/images/loc-icon.png' )); ?>" alt="" class="wp-image-296" style="border-radius:5px;object-fit:contain;width:18px;height:18px"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|body-text"}}},"typography":{"fontSize":"14px","fontStyle":"normal","fontWeight":"400"}},"textColor":"body-text","fontFamily":"inter"} -->
<p class="has-body-text-color has-text-color has-link-color has-inter-font-family" style="font-size:14px;font-style:normal;font-weight:400"><?php esc_html_e('Japan','outdoor-camping'); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"25%","className":"camping-user"} -->
<div class="wp-block-column camping-user" style="flex-basis:25%"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"},"border":{"right":{"width":"0px","style":"none"},"top":[],"bottom":[],"left":{"width":"1px"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"right"}} -->
<div class="wp-block-group" style="border-right-style:none;border-right-width:0px;border-left-width:1px"><!-- wp:image {"id":299,"width":"18px","height":"18px","scale":"contain","sizeSlug":"full","linkDestination":"none","className":"testimonial-img","style":{"border":{"radius":"5px"}}} -->
<figure class="wp-block-image size-full is-resized has-custom-border testimonial-img"><img src="<?php echo esc_url(get_parent_theme_file_uri( '/assets/images/users-icon.png' )); ?>" alt="" class="wp-image-299" style="border-radius:5px;object-fit:contain;width:18px;height:18px"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|body-text"}}},"typography":{"fontSize":"14px","fontStyle":"normal","fontWeight":"400"}},"textColor":"body-text","fontFamily":"inter"} -->
<p class="has-body-text-color has-text-color has-link-color has-inter-font-family" style="font-size:14px;font-style:normal;font-weight:400"><?php esc_html_e('4','outdoor-camping'); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:group {"className":"camping-price","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"var:preset|spacing|30","bottom":"0"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group camping-price" style="margin-top:var(--wp--preset--spacing--30);margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"fontSize":"17px","fontStyle":"normal","fontWeight":"700"}},"textColor":"primary","fontFamily":"inter"} -->
<p class="has-primary-color has-text-color has-link-color has-inter-font-family" style="font-size:17px;font-style:normal;font-weight:700"><?php esc_html_e('$150,00','outdoor-camping'); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"fontSize":"15px","fontStyle":"normal","fontWeight":"500"}},"textColor":"primary","fontFamily":"inter"} -->
<p class="has-primary-color has-text-color has-link-color has-inter-font-family" style="font-size:15px;font-style:normal;font-weight:500"><?php esc_html_e('/per Night','outdoor-camping'); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"className":"camping-box"} -->
<div class="wp-block-column camping-box"><!-- wp:group {"className":"camping-box","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"}},"border":{"radius":"15px"}},"layout":{"type":"default"}} -->
<div class="wp-block-group camping-box" style="border-radius:15px;margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:image {"id":95,"width":"auto","height":"300px","sizeSlug":"full","linkDestination":"none","className":"camp-img","style":{"spacing":{"margin":{"top":"0","bottom":"0","left":"0","right":"0"}},"border":{"radius":"10px"}}} -->
<figure class="wp-block-image size-full is-resized has-custom-border camp-img" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0"><img src="<?php echo esc_url(get_parent_theme_file_uri( '/assets/images/service4.png' )); ?>" alt="" class="wp-image-95" style="border-radius:10px;width:auto;height:300px"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading"}}},"typography":{"fontSize":"20px","fontStyle":"normal","fontWeight":"600"},"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"var:preset|spacing|20","left":"0","right":"0"}}},"textColor":"heading","fontFamily":"inter"} -->
<p class="has-heading-color has-text-color has-link-color has-inter-font-family" style="margin-top:0;margin-right:0;margin-bottom:var(--wp--preset--spacing--20);margin-left:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;font-size:20px;font-style:normal;font-weight:600"><?php esc_html_e('Caravan Pitch','outdoor-camping'); ?></p>
<!-- /wp:paragraph -->

<!-- wp:columns {"className":"camping-info-col","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"}}}} -->
<div class="wp-block-columns camping-info-col" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:column {"width":"50%","className":"camping-date"} -->
<div class="wp-block-column camping-date" style="flex-basis:50%"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"},"border":{"right":{"color":"var:preset|color|body-text","width":"1px"},"top":[],"bottom":[],"left":[]}},"layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-group" style="border-right-color:var(--wp--preset--color--body-text);border-right-width:1px"><!-- wp:image {"id":286,"width":"18px","height":"18px","scale":"contain","sizeSlug":"full","linkDestination":"none","className":"testimonial-img","style":{"border":{"radius":"5px"}}} -->
<figure class="wp-block-image size-full is-resized has-custom-border testimonial-img"><img src="<?php echo esc_url(get_parent_theme_file_uri( '/assets/images/date-icon.png' )); ?>" alt="" class="wp-image-286" style="border-radius:5px;object-fit:contain;width:18px;height:18px"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|body-text"}}},"typography":{"fontSize":"14px","fontStyle":"normal","fontWeight":"400"},"border":{"width":"0px","style":"none"}},"textColor":"body-text","fontFamily":"inter"} -->
<p class="has-body-text-color has-text-color has-link-color has-inter-font-family" style="border-style:none;border-width:0px;font-size:14px;font-style:normal;font-weight:400"><?php esc_html_e('29/08/2025','outdoor-camping'); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"25%","className":"camping-location"} -->
<div class="wp-block-column camping-location" style="flex-basis:25%"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"},"border":{"right":{"style":"none","width":"0px"},"top":[],"bottom":[],"left":[]}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"center"}} -->
<div class="wp-block-group" style="border-right-style:none;border-right-width:0px"><!-- wp:image {"id":296,"width":"18px","height":"18px","scale":"contain","sizeSlug":"full","linkDestination":"none","className":"testimonial-img","style":{"border":{"radius":"5px"}}} -->
<figure class="wp-block-image size-full is-resized has-custom-border testimonial-img"><img src="<?php echo esc_url(get_parent_theme_file_uri( '/assets/images/loc-icon.png' )); ?>" alt="" class="wp-image-296" style="border-radius:5px;object-fit:contain;width:18px;height:18px"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|body-text"}}},"typography":{"fontSize":"14px","fontStyle":"normal","fontWeight":"400"}},"textColor":"body-text","fontFamily":"inter"} -->
<p class="has-body-text-color has-text-color has-link-color has-inter-font-family" style="font-size:14px;font-style:normal;font-weight:400"><?php esc_html_e('Japan','outdoor-camping'); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"25%","className":"camping-user"} -->
<div class="wp-block-column camping-user" style="flex-basis:25%"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"},"border":{"right":{"width":"0px","style":"none"},"top":[],"bottom":[],"left":{"width":"1px"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"right"}} -->
<div class="wp-block-group" style="border-right-style:none;border-right-width:0px;border-left-width:1px"><!-- wp:image {"id":299,"width":"18px","height":"18px","scale":"contain","sizeSlug":"full","linkDestination":"none","className":"testimonial-img","style":{"border":{"radius":"5px"}}} -->
<figure class="wp-block-image size-full is-resized has-custom-border testimonial-img"><img src="<?php echo esc_url(get_parent_theme_file_uri( '/assets/images/users-icon.png' )); ?>" alt="" class="wp-image-299" style="border-radius:5px;object-fit:contain;width:18px;height:18px"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|body-text"}}},"typography":{"fontSize":"14px","fontStyle":"normal","fontWeight":"400"}},"textColor":"body-text","fontFamily":"inter"} -->
<p class="has-body-text-color has-text-color has-link-color has-inter-font-family" style="font-size:14px;font-style:normal;font-weight:400"><?php esc_html_e('4','outdoor-camping'); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:group {"className":"camping-price","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"var:preset|spacing|30","bottom":"0"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group camping-price" style="margin-top:var(--wp--preset--spacing--30);margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"fontSize":"17px","fontStyle":"normal","fontWeight":"700"}},"textColor":"primary","fontFamily":"inter"} -->
<p class="has-primary-color has-text-color has-link-color has-inter-font-family" style="font-size:17px;font-style:normal;font-weight:700"><?php esc_html_e('$150,00','outdoor-camping'); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"fontSize":"15px","fontStyle":"normal","fontWeight":"500"}},"textColor":"primary","fontFamily":"inter"} -->
<p class="has-primary-color has-text-color has-link-color has-inter-font-family" style="font-size:15px;font-style:normal;font-weight:500"><?php esc_html_e('/per Night','outdoor-camping'); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<?php } ?>