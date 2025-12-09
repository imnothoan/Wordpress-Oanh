<?php
/**
 * Title: Banner
 * Slug: misbah-architecture-blocks/banner
 * Categories: all, banner
 * Keywords: banner
 */
$misbah_architecture_blocks_images = array(
    MISBAH_ARCHITECTURE_BLOCKS_URL . 'assets/images/banner-img1.png',
    MISBAH_ARCHITECTURE_BLOCKS_URL . 'assets/images/banner-img2.png',
    MISBAH_ARCHITECTURE_BLOCKS_URL . 'assets/images/banner-img3.png',
);

?>

<!-- wp:group {"tagName":"main","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"}}},"gradient":"primary-gradient","layout":{"type":"constrained","contentSize":"100%"}} -->
<main class="wp-block-group has-primary-gradient-gradient-background has-background" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group"><!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"0","left":"0"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"width":"10%"} -->
<div class="wp-block-column" style="flex-basis:10%"><!-- wp:social-links {"iconColor":"pure-black","iconColorValue":"#000000","iconBackgroundColor":"secondary-accent","iconBackgroundColorValue":"#FFFFFC","className":"is-style-default slider-social","style":{"spacing":{"padding":{"bottom":"0","top":"90%"}},"border":{"radius":"6px"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
<ul class="wp-block-social-links has-icon-color has-icon-background-color is-style-default slider-social" style="border-radius:6px;padding-top:90%;padding-bottom:0"><!-- wp:social-link {"url":"#","service":"facebook"} /-->

<!-- wp:social-link {"url":"#","service":"instagram"} /-->

<!-- wp:social-link {"url":"#","service":"x"} /-->

<!-- wp:social-link {"url":"#","service":"youtube"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"80%"} -->
<div class="wp-block-column" style="flex-basis:80%"><!-- wp:group {"tagName":"main","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<main class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"tagName":"main","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<main id="slider" class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"tagName":"main","className":"owl-carousel","style":{"spacing":{"padding":{"top":"0px","bottom":"0"},"blockGap":"0"}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<main class="wp-block-group owl-carousel" style="padding-top:0px;padding-bottom:0"><!-- wp:cover {"url":"<?php echo esc_url($misbah_architecture_blocks_images[0]); ?>","id":264,"dimRatio":0,"overlayColor":"foreground","isUserOverlayColor":true,"minHeight":600,"contentPosition":"center center","sizeSlug":"large","className":"banner-cover","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"layout":{"type":"constrained","contentSize":"95%"}} -->
<div class="wp-block-cover banner-cover" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;min-height:600px"><img class="wp-block-cover__image-background wp-image-264 size-large" alt="" src="<?php echo esc_url($misbah_architecture_blocks_images[0]); ?>" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-foreground-background-color has-background-dim-0 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"padding":{"right":"0","left":"0","top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"35%","justifyContent":"left"}} -->
<div class="wp-block-group" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"className":"slider-content-box","style":{"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|small","right":"var:preset|spacing|small"}}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group slider-content-box" style="padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--small)"><!-- wp:heading {"textAlign":"left","style":{"typography":{"fontSize":"40px","fontStyle":"normal","fontWeight":"700"},"elements":{"link":{"color":{"text":"var:preset|color|secaccent"}}}},"textColor":"secaccent","fontFamily":"barlow-condensed"} -->
<h2 class="wp-block-heading has-text-align-left has-secaccent-color has-text-color has-link-color has-barlow-condensed-font-family" style="font-size:40px;font-style:normal;font-weight:700"><?php esc_html_e( 'Modern Architecture', 'misbah-architecture-blocks' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"left","style":{"elements":{"link":{"color":{"text":"var:preset|color|pure-black"}}},"typography":{"fontSize":"14px","fontStyle":"normal","fontWeight":"400"},"spacing":{"margin":{"bottom":"20px"}}},"textColor":"pure-black","fontFamily":"poppins"} -->
<p class="has-text-align-left has-pure-black-color has-text-color has-link-color has-poppins-font-family" style="margin-bottom:20px;font-size:14px;font-style:normal;font-weight:400"><?php esc_html_e( 'Lorem Ipsum & is simply dummy text of the printing and typesetting industry.', 'misbah-architecture-blocks' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"}} -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"primary","textColor":"accent-text","className":"slider-btn","style":{"elements":{"link":{"color":{"text":"var:preset|color|accent-text"}}},"typography":{"fontSize":"16px","fontStyle":"normal","fontWeight":"600","textTransform":"uppercase"},"border":{"radius":{"topLeft":"6px","bottomLeft":"6px","bottomRight":"6px","topRight":"6px"}},"spacing":{"padding":{"left":"25px","right":"25px"}}},"fontFamily":"barlow-condensed"} -->
<div class="wp-block-button slider-btn"><a class="wp-block-button__link has-accent-text-color has-primary-background-color has-text-color has-background has-link-color has-barlow-condensed-font-family has-custom-font-size wp-element-button" style="border-top-left-radius:6px;border-top-right-radius:6px;border-bottom-left-radius:6px;border-bottom-right-radius:6px;padding-right:25px;padding-left:25px;font-size:16px;font-style:normal;font-weight:600;text-transform:uppercase"><?php esc_html_e( 'Find Property', 'misbah-architecture-blocks' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->

<!-- wp:cover {"url":"<?php echo esc_url($misbah_architecture_blocks_images[1]); ?>","id":216,"dimRatio":0,"overlayColor":"foreground","isUserOverlayColor":true,"minHeight":600,"contentPosition":"center center","sizeSlug":"full","className":"banner-cover","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"layout":{"type":"constrained","contentSize":"95%"}} -->
<div class="wp-block-cover banner-cover" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;min-height:600px"><img class="wp-block-cover__image-background wp-image-216 size-full" alt="" src="<?php echo esc_url($misbah_architecture_blocks_images[1]); ?>" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-foreground-background-color has-background-dim-0 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"padding":{"right":"0","left":"0","top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"35%","justifyContent":"left"}} -->
<div class="wp-block-group" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"className":"slider-content-box","style":{"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|small","right":"var:preset|spacing|small"}}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group slider-content-box" style="padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--small)"><!-- wp:heading {"textAlign":"left","style":{"typography":{"fontSize":"40px","fontStyle":"normal","fontWeight":"700"},"elements":{"link":{"color":{"text":"var:preset|color|secaccent"}}}},"textColor":"secaccent","fontFamily":"barlow-condensed"} -->
<h2 class="wp-block-heading has-text-align-left has-secaccent-color has-text-color has-link-color has-barlow-condensed-font-family" style="font-size:40px;font-style:normal;font-weight:700"><?php esc_html_e( 'Modern Architecture', 'misbah-architecture-blocks' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"left","style":{"elements":{"link":{"color":{"text":"var:preset|color|pure-black"}}},"typography":{"fontSize":"14px","fontStyle":"normal","fontWeight":"400"},"spacing":{"margin":{"bottom":"20px"}}},"textColor":"pure-black","fontFamily":"poppins"} -->
<p class="has-text-align-left has-pure-black-color has-text-color has-link-color has-poppins-font-family" style="margin-bottom:20px;font-size:14px;font-style:normal;font-weight:400"><?php esc_html_e( 'Lorem Ipsum & is simply dummy text of the printing and typesetting industry.', 'misbah-architecture-blocks' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"}} -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"primary","textColor":"accent-text","className":"slider-btn","style":{"elements":{"link":{"color":{"text":"var:preset|color|accent-text"}}},"typography":{"fontSize":"16px","fontStyle":"normal","fontWeight":"600","textTransform":"uppercase"},"border":{"radius":{"topLeft":"6px","bottomLeft":"6px","bottomRight":"6px","topRight":"6px"}},"spacing":{"padding":{"left":"25px","right":"25px"}}},"fontFamily":"barlow-condensed"} -->
<div class="wp-block-button slider-btn"><a class="wp-block-button__link has-accent-text-color has-primary-background-color has-text-color has-background has-link-color has-barlow-condensed-font-family has-custom-font-size wp-element-button" style="border-top-left-radius:6px;border-top-right-radius:6px;border-bottom-left-radius:6px;border-bottom-right-radius:6px;padding-right:25px;padding-left:25px;font-size:16px;font-style:normal;font-weight:600;text-transform:uppercase"><?php esc_html_e( 'Find Property', 'misbah-architecture-blocks' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->

<!-- wp:cover {"url":"<?php echo esc_url($misbah_architecture_blocks_images[2]); ?>","id":217,"dimRatio":0,"overlayColor":"foreground","isUserOverlayColor":true,"minHeight":600,"contentPosition":"center center","isDark":false,"sizeSlug":"full","className":"banner-cover","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"layout":{"type":"constrained","contentSize":"95%"}} -->
<div class="wp-block-cover is-light banner-cover" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;min-height:600px"><img class="wp-block-cover__image-background wp-image-217 size-full" alt="" src="<?php echo esc_url($misbah_architecture_blocks_images[2]); ?>" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-foreground-background-color has-background-dim-0 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"padding":{"right":"0","left":"0","top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"35%","justifyContent":"left"}} -->
<div class="wp-block-group" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"className":"slider-content-box","style":{"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|small","right":"var:preset|spacing|small"}}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group slider-content-box" style="padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--small)"><!-- wp:heading {"textAlign":"left","style":{"typography":{"fontSize":"40px","fontStyle":"normal","fontWeight":"700"},"elements":{"link":{"color":{"text":"var:preset|color|secaccent"}}}},"textColor":"secaccent","fontFamily":"barlow-condensed"} -->
<h2 class="wp-block-heading has-text-align-left has-secaccent-color has-text-color has-link-color has-barlow-condensed-font-family" style="font-size:40px;font-style:normal;font-weight:700"><?php esc_html_e( 'Modern Architecture', 'misbah-architecture-blocks' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"left","style":{"elements":{"link":{"color":{"text":"var:preset|color|pure-black"}}},"typography":{"fontSize":"14px","fontStyle":"normal","fontWeight":"400"},"spacing":{"margin":{"bottom":"20px"}}},"textColor":"pure-black","fontFamily":"poppins"} -->
<p class="has-text-align-left has-pure-black-color has-text-color has-link-color has-poppins-font-family" style="margin-bottom:20px;font-size:14px;font-style:normal;font-weight:400"><?php esc_html_e( 'Lorem Ipsum & is simply dummy text of the printing and typesetting industry.', 'misbah-architecture-blocks' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"}} -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"primary","textColor":"accent-text","className":"slider-btn","style":{"elements":{"link":{"color":{"text":"var:preset|color|accent-text"}}},"typography":{"fontSize":"16px","fontStyle":"normal","fontWeight":"600","textTransform":"uppercase"},"border":{"radius":{"topLeft":"6px","bottomLeft":"6px","bottomRight":"6px","topRight":"6px"}},"spacing":{"padding":{"left":"25px","right":"25px"}}},"fontFamily":"barlow-condensed"} -->
<div class="wp-block-button slider-btn"><a class="wp-block-button__link has-accent-text-color has-primary-background-color has-text-color has-background has-link-color has-barlow-condensed-font-family has-custom-font-size wp-element-button" style="border-top-left-radius:6px;border-top-right-radius:6px;border-bottom-left-radius:6px;border-bottom-right-radius:6px;padding-right:25px;padding-left:25px;font-size:16px;font-style:normal;font-weight:600;text-transform:uppercase"><?php esc_html_e( 'Find Property', 'misbah-architecture-blocks' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover --></main>
<!-- /wp:group --></main>
<!-- /wp:group --></main>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"10%"} -->
<div class="wp-block-column" style="flex-basis:10%"></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></main>
<!-- /wp:group -->