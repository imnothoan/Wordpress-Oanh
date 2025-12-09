<?php
/**
 * Title: Service
 * Slug: misbah-architecture-blocks/service
 * Categories: all, service
 * Keywords: service
 */

$misbah_architecture_blocks_images = array(
    MISBAH_ARCHITECTURE_BLOCKS_URL . 'assets/images/service1.png',
    MISBAH_ARCHITECTURE_BLOCKS_URL . 'assets/images/service2.png',
    MISBAH_ARCHITECTURE_BLOCKS_URL . 'assets/images/service3.png',
);

?>

<!-- wp:group {"tagName":"main","className":"service-main","style":{"spacing":{"margin":{"top":"0px"},"padding":{"top":"60px","bottom":"60px","right":"0","left":"0"},"blockGap":"0"}},"backgroundColor":"primary","layout":{"type":"constrained","contentSize":"80%"}} -->
<main class="wp-block-group service-main has-primary-background-color has-background" style="margin-top:0px;padding-top:60px;padding-right:0;padding-bottom:60px;padding-left:0"><!-- wp:group {"className":"service-heading","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|small"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group service-heading" style="margin-bottom:var(--wp--preset--spacing--small)"><!-- wp:heading {"textAlign":"center","level":4,"className":"service-short-heading","style":{"typography":{"fontSize":"20px","fontStyle":"normal","fontWeight":"500"},"elements":{"link":{"color":{"text":"var:preset|color|secondary-accent"}}}},"textColor":"secondary-accent","fontFamily":"barlow-condensed"} -->
<h4 class="wp-block-heading has-text-align-center service-short-heading has-secondary-accent-color has-text-color has-link-color has-barlow-condensed-font-family" style="font-size:20px;font-style:normal;font-weight:500"><?php esc_html_e( 'Our Services', 'misbah-architecture-blocks' ); ?></h4>
<!-- /wp:heading -->

<!-- wp:heading {"textAlign":"center","level":4,"style":{"typography":{"fontSize":"25px","fontStyle":"normal","fontWeight":"500"},"spacing":{"margin":{"top":"0","bottom":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|secondary-accent"}}}},"textColor":"secondary-accent","fontFamily":"barlow-condensed"} -->
<h4 class="wp-block-heading has-text-align-center has-secondary-accent-color has-text-color has-link-color has-barlow-condensed-font-family" style="margin-top:0;margin-bottom:0;font-size:25px;font-style:normal;font-weight:500"><?php esc_html_e( 'We provide best Services For You', 'misbah-architecture-blocks' ); ?></h4>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:columns {"className":"service-column","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|small","left":"var:preset|spacing|small"}}}} -->
<div class="wp-block-columns service-column"><!-- wp:column {"width":"40%"} -->
<div class="wp-block-column" style="flex-basis:40%"><!-- wp:group {"className":"service-box","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"blockGap":"var:preset|spacing|x-small"}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group service-box" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"className":"service-image","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group service-image" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:image {"id":23,"sizeSlug":"full","linkDestination":"none","align":"full","style":{"border":{"radius":"12px"}}} -->
<figure class="wp-block-image alignfull size-full has-custom-border"><img src="<?php echo esc_url($misbah_architecture_blocks_images[0]); ?>" alt="" class="wp-image-23" style="border-radius:12px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"service-content","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"40px","left":"30px","right":"30px","bottom":"20px"}},"border":{"radius":{"bottomLeft":"12px","bottomRight":"12px"}}},"backgroundColor":"background","layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group service-content has-background-background-color has-background" style="border-bottom-left-radius:12px;border-bottom-right-radius:12px;margin-top:0;margin-bottom:0;padding-top:40px;padding-right:30px;padding-bottom:20px;padding-left:30px"><!-- wp:heading {"textAlign":"left","level":5,"style":{"elements":{"link":{"color":{"text":"var:preset|color|secaccent"}}},"typography":{"fontSize":"20px","fontStyle":"normal","fontWeight":"500"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"secaccent","fontFamily":"poppins"} -->
<h5 class="wp-block-heading has-text-align-left has-secaccent-color has-text-color has-link-color has-poppins-font-family" style="margin-top:0;margin-bottom:0;font-size:20px;font-style:normal;font-weight:500"><?php esc_html_e( 'Interior Design', 'misbah-architecture-blocks' ); ?></h5>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"15px","fontStyle":"normal","fontWeight":"300"},"elements":{"link":{"color":{"text":"#413e3c"}}},"color":{"text":"#413e3c"},"spacing":{"padding":{"top":"0","bottom":"0"},"margin":{"top":"0","bottom":"0"}}},"fontFamily":"poppins"} -->
<p class="has-text-color has-link-color has-poppins-font-family" style="color:#413e3c;margin-top:0;margin-bottom:0;padding-top:0;padding-bottom:0;font-size:15px;font-style:normal;font-weight:300"><?php esc_html_e( 'Lorem Ipsum &is simply dummy text of the printing and type setting industry', 'misbah-architecture-blocks' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"}} -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"secaccent","textColor":"accent-text","className":"service-btn","style":{"elements":{"link":{"color":{"text":"var:preset|color|accent-text"}}},"typography":{"fontSize":"16px","fontStyle":"normal","fontWeight":"700","textTransform":"uppercase","letterSpacing":"1.5px"},"spacing":{"padding":{"left":"30px","right":"30px","top":"12px","bottom":"12px"}},"border":{"radius":"6px"}},"fontFamily":"barlow-condensed"} -->
<div class="wp-block-button service-btn"><a class="wp-block-button__link has-accent-text-color has-secaccent-background-color has-text-color has-background has-link-color has-barlow-condensed-font-family has-custom-font-size wp-element-button" href="#" style="border-radius:6px;padding-top:12px;padding-right:30px;padding-bottom:12px;padding-left:30px;font-size:16px;font-style:normal;font-weight:700;letter-spacing:1.5px;text-transform:uppercase"><?php esc_html_e( 'Details', 'misbah-architecture-blocks' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"40%"} -->
<div class="wp-block-column" style="flex-basis:40%"><!-- wp:group {"className":"service-box","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"blockGap":"var:preset|spacing|x-small"}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group service-box" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"className":"service-image","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group service-image" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:image {"id":23,"sizeSlug":"full","linkDestination":"none","align":"full","style":{"border":{"radius":"12px"}}} -->
<figure class="wp-block-image alignfull size-full has-custom-border"><img src="<?php echo esc_url($misbah_architecture_blocks_images[1]); ?>" alt="" class="wp-image-23" style="border-radius:12px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"service-content","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"40px","left":"30px","right":"30px","bottom":"20px"}},"border":{"radius":{"bottomLeft":"12px","bottomRight":"12px"}}},"backgroundColor":"background","layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group service-content has-background-background-color has-background" style="border-bottom-left-radius:12px;border-bottom-right-radius:12px;margin-top:0;margin-bottom:0;padding-top:40px;padding-right:30px;padding-bottom:20px;padding-left:30px"><!-- wp:heading {"textAlign":"left","level":5,"style":{"elements":{"link":{"color":{"text":"var:preset|color|secaccent"}}},"typography":{"fontSize":"20px","fontStyle":"normal","fontWeight":"500"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"secaccent","fontFamily":"poppins"} -->
<h5 class="wp-block-heading has-text-align-left has-secaccent-color has-text-color has-link-color has-poppins-font-family" style="margin-top:0;margin-bottom:0;font-size:20px;font-style:normal;font-weight:500"><?php esc_html_e( 'Architecture Design', 'misbah-architecture-blocks' ); ?></h5>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"15px","fontStyle":"normal","fontWeight":"300"},"elements":{"link":{"color":{"text":"#413e3c"}}},"color":{"text":"#413e3c"},"spacing":{"padding":{"top":"0","bottom":"0"},"margin":{"top":"0","bottom":"0"}}},"fontFamily":"poppins"} -->
<p class="has-text-color has-link-color has-poppins-font-family" style="color:#413e3c;margin-top:0;margin-bottom:0;padding-top:0;padding-bottom:0;font-size:15px;font-style:normal;font-weight:300"><?php esc_html_e( 'Lorem Ipsum & is simply dummy text of the printing and type setting industry', 'misbah-architecture-blocks' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"}} -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"secaccent","textColor":"accent-text","className":"service-btn","style":{"elements":{"link":{"color":{"text":"var:preset|color|accent-text"}}},"typography":{"fontSize":"16px","fontStyle":"normal","fontWeight":"700","textTransform":"uppercase","letterSpacing":"1.5px"},"spacing":{"padding":{"left":"30px","right":"30px","top":"12px","bottom":"12px"}},"border":{"radius":"6px"}},"fontFamily":"barlow-condensed"} -->
<div class="wp-block-button service-btn"><a class="wp-block-button__link has-accent-text-color has-secaccent-background-color has-text-color has-background has-link-color has-barlow-condensed-font-family has-custom-font-size wp-element-button" href="#" style="border-radius:6px;padding-top:12px;padding-right:30px;padding-bottom:12px;padding-left:30px;font-size:16px;font-style:normal;font-weight:700;letter-spacing:1.5px;text-transform:uppercase"><?php esc_html_e( 'Details', 'misbah-architecture-blocks' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"40%"} -->
<div class="wp-block-column" style="flex-basis:40%"><!-- wp:group {"className":"service-box","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"blockGap":"var:preset|spacing|x-small"}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group service-box" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"className":"service-image","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group service-image" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:image {"id":23,"sizeSlug":"full","linkDestination":"none","align":"full","style":{"border":{"radius":"12px"}}} -->
<figure class="wp-block-image alignfull size-full has-custom-border"><img src="<?php echo esc_url($misbah_architecture_blocks_images[2]); ?>" alt="" class="wp-image-23" style="border-radius:12px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"service-content","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"40px","left":"30px","right":"30px","bottom":"20px"}},"border":{"radius":{"bottomLeft":"12px","bottomRight":"12px"}}},"backgroundColor":"background","layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group service-content has-background-background-color has-background" style="border-bottom-left-radius:12px;border-bottom-right-radius:12px;margin-top:0;margin-bottom:0;padding-top:40px;padding-right:30px;padding-bottom:20px;padding-left:30px"><!-- wp:heading {"textAlign":"left","level":5,"style":{"elements":{"link":{"color":{"text":"var:preset|color|secaccent"}}},"typography":{"fontSize":"20px","fontStyle":"normal","fontWeight":"500"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"secaccent","fontFamily":"poppins"} -->
<h5 class="wp-block-heading has-text-align-left has-secaccent-color has-text-color has-link-color has-poppins-font-family" style="margin-top:0;margin-bottom:0;font-size:20px;font-style:normal;font-weight:500"><?php esc_html_e( 'Urban Design', 'misbah-architecture-blocks' ); ?></h5>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"15px","fontStyle":"normal","fontWeight":"300"},"elements":{"link":{"color":{"text":"#413e3c"}}},"color":{"text":"#413e3c"},"spacing":{"padding":{"top":"0","bottom":"0"},"margin":{"top":"0","bottom":"0"}}},"fontFamily":"poppins"} -->
<p class="has-text-color has-link-color has-poppins-font-family" style="color:#413e3c;margin-top:0;margin-bottom:0;padding-top:0;padding-bottom:0;font-size:15px;font-style:normal;font-weight:300"><?php esc_html_e( 'Lorem Ipsum & is simply dummy text of the printing and type setting industry', 'misbah-architecture-blocks' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"}} -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"secaccent","textColor":"accent-text","className":"service-btn","style":{"elements":{"link":{"color":{"text":"var:preset|color|accent-text"}}},"typography":{"fontSize":"16px","fontStyle":"normal","fontWeight":"700","textTransform":"uppercase","letterSpacing":"1.5px"},"spacing":{"padding":{"left":"30px","right":"30px","top":"12px","bottom":"12px"}},"border":{"radius":"6px"}},"fontFamily":"barlow-condensed"} -->
<div class="wp-block-button service-btn"><a class="wp-block-button__link has-accent-text-color has-secaccent-background-color has-text-color has-background has-link-color has-barlow-condensed-font-family has-custom-font-size wp-element-button" href="#" style="border-radius:6px;padding-top:12px;padding-right:30px;padding-bottom:12px;padding-left:30px;font-size:16px;font-style:normal;font-weight:700;letter-spacing:1.5px;text-transform:uppercase"><?php esc_html_e( 'Details', 'misbah-architecture-blocks' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></main>
<!-- /wp:group -->