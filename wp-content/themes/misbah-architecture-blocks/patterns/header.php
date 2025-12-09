<?php
/**
 * Title: Header
 * Slug: misbah-architecture-blocks/header
 * Categories: header
 */

$misbah_architecture_blocks_images = array(
    MISBAH_ARCHITECTURE_BLOCKS_URL . 'assets/images/Call.png',
);

?>

<!-- wp:group {"className":"main-header-top","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}},"backgroundColor":"secaccent","layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group main-header-top has-secaccent-background-color has-background" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|x-small","bottom":"var:preset|spacing|x-small","right":"0","left":"0"}},"position":{"type":""},"border":{"style":"none","width":"0px"}},"layout":{"type":"constrained","contentSize":"80%"}} -->
<div class="wp-block-group" style="border-style:none;border-width:0px;padding-top:var(--wp--preset--spacing--x-small);padding-right:0;padding-bottom:var(--wp--preset--spacing--x-small);padding-left:0"><!-- wp:columns {"className":"main-header"} -->
<div class="wp-block-columns main-header"><!-- wp:column {"verticalAlignment":"center","width":"15%","className":"head-logo"} -->
<div class="wp-block-column is-vertically-aligned-center head-logo" style="flex-basis:15%"><!-- wp:group {"className":"logo-bg","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group logo-bg" style="margin-top:0;margin-bottom:0;padding-top:0;padding-bottom:0"><!-- wp:site-title {"style":{"typography":{"fontStyle":"normal","fontWeight":"600","fontSize":"30px"},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"spacing":{"padding":{"top":"var:preset|spacing|x-small","bottom":"var:preset|spacing|x-small"}}},"textColor":"primary","fontFamily":"barlow-condensed"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"60%","className":"header-menu","style":{"spacing":{"padding":{"top":"10px","bottom":"10px"}}}} -->
<div class="wp-block-column is-vertically-aligned-center header-menu" style="padding-top:10px;padding-bottom:10px;flex-basis:60%"><!-- wp:navigation {"textColor":"pure-white","icon":"menu","overlayTextColor":"pure-black","metadata":{"ignoredHookedBlocks":["woocommerce/customer-account"]},"style":{"spacing":{"blockGap":"var:preset|spacing|medium"},"typography":{"fontStyle":"normal","fontWeight":"500","fontSize":"16px","textTransform":"capitalize"}},"fontFamily":"barlow-condensed","layout":{"type":"flex","justifyContent":"left"}} -->
<!-- wp:navigation-link {"label":"Home","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"About Us","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"Services","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"Contact","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->
<!-- /wp:navigation --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"5%","className":"bk-hide-tab bk-hide-mob"} -->
<div class="wp-block-column is-vertically-aligned-center bk-hide-tab bk-hide-mob" style="flex-basis:5%"><!-- wp:search {"label":"Search","showLabel":false,"buttonText":"Search","buttonPosition":"button-only","buttonUseIcon":true,"isSearchFieldHidden":true,"style":{"border":{"radius":"10px"},"spacing":{"margin":{"top":"var:preset|spacing|small","bottom":"var:preset|spacing|small"}}},"backgroundColor":"primary"} /--></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"20%","className":"bk-hide-tab bk-hide-mob social-icon"} -->
<div class="wp-block-column is-vertically-aligned-center bk-hide-tab bk-hide-mob social-icon" style="flex-basis:20%"><!-- wp:columns {"verticalAlignment":"center"} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"15%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:15%"><!-- wp:group {"className":"phone-icon","style":{"border":{"radius":"9px"},"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}},"dimensions":{"minHeight":"42px"}},"backgroundColor":"primary","layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group phone-icon has-primary-background-color has-background" style="border-radius:9px;min-height:42px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:image {"id":8,"scale":"cover","sizeSlug":"full","linkDestination":"none","align":"center"} -->
<figure class="wp-block-image aligncenter size-full"><img src="<?php echo esc_url($misbah_architecture_blocks_images[0]); ?>" alt="" class="wp-image-8" style="object-fit:cover"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"66.66%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:66.66%"><!-- wp:heading {"level":6,"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"fontSize":"13px","fontStyle":"normal","fontWeight":"500"},"spacing":{"padding":{"top":"0","bottom":"0"}}},"textColor":"primary","fontFamily":"poppins"} -->
<h6 class="wp-block-heading has-primary-color has-text-color has-link-color has-poppins-font-family" style="padding-top:0;padding-bottom:0;font-size:13px;font-style:normal;font-weight:500"><?php esc_html_e( 'Call us', 'misbah-architecture-blocks' ); ?></h6>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|pure-white"}}},"spacing":{"padding":{"top":"5px","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"}},"typography":{"fontSize":"14px","fontStyle":"normal","fontWeight":"500"}},"textColor":"pure-white","fontFamily":"poppins"} -->
<p class="has-pure-white-color has-text-color has-link-color has-poppins-font-family" style="margin-top:0;margin-bottom:0;padding-top:5px;padding-right:0;padding-bottom:0;padding-left:0;font-size:14px;font-style:normal;font-weight:500"><?php esc_html_e( '(00) 123 456 789', 'misbah-architecture-blocks' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->