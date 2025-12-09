<?php
/**
 * Title: Video
 * Slug: misbah-architecture-blocks/video
 * Categories: all, video
 * Keywords: video
 */

$misbah_architecture_blocks_images = array(
    MISBAH_ARCHITECTURE_BLOCKS_URL . 'assets/images/video-right.png',
    MISBAH_ARCHITECTURE_BLOCKS_URL . 'assets/images/call.png',
    MISBAH_ARCHITECTURE_BLOCKS_URL . 'assets/images/Video.png',
);

?>

<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"right":"0","left":"0","top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"className":"video-section","style":{"spacing":{"padding":{"top":"90px","bottom":"70px"}}},"layout":{"type":"constrained","contentSize":"80%"}} -->
<div class="wp-block-group video-section" style="padding-top:90px;padding-bottom:70px"><!-- wp:columns {"className":"video-main-box"} -->
<div class="wp-block-columns video-main-box"><!-- wp:column {"verticalAlignment":"center","width":"80%","className":"video-left","style":{"spacing":{"padding":{"top":"70px","bottom":"70px","left":"40px","right":"40px"}}},"backgroundColor":"secaccent"} -->
<div class="wp-block-column is-vertically-aligned-center video-left has-secaccent-background-color has-background" style="padding-top:70px;padding-right:40px;padding-bottom:70px;padding-left:40px;flex-basis:80%"><!-- wp:group {"className":"video-left-inner","style":{"dimensions":{"minHeight":""}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group video-left-inner"><!-- wp:heading {"textAlign":"left","level":6,"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"fontSize":"22px","fontStyle":"normal","fontWeight":"500"},"spacing":{"margin":{"bottom":"var:preset|spacing|x-small"}}},"textColor":"primary","fontFamily":"barlow-condensed"} -->
<h6 class="wp-block-heading has-text-align-left has-primary-color has-text-color has-link-color has-barlow-condensed-font-family" style="margin-bottom:var(--wp--preset--spacing--x-small);font-size:22px;font-style:normal;font-weight:500"><?php esc_html_e( 'Take a video tour', 'misbah-architecture-blocks' ); ?></h6>
<!-- /wp:heading -->

<!-- wp:heading {"style":{"elements":{"link":{"color":{"text":"var:preset|color|accent-text"}}},"typography":{"fontSize":"40px","fontStyle":"normal","fontWeight":"500","textTransform":"capitalize"},"spacing":{"margin":{"top":"5px"}}},"textColor":"accent-text","fontFamily":"barlow-condensed"} -->
<h2 class="wp-block-heading has-accent-text-color has-text-color has-link-color has-barlow-condensed-font-family" style="margin-top:5px;font-size:40px;font-style:normal;font-weight:500;text-transform:capitalize"><?php esc_html_e( 'Watch the video for taking', 'misbah-architecture-blocks' ); ?> <br><?php esc_html_e( 'your decision easily.', 'misbah-architecture-blocks' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"padding":{"top":"35px"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center" style="padding-top:35px"><!-- wp:column {"verticalAlignment":"center","width":"20%","className":"video-btn-main"} -->
<div class="wp-block-column is-vertically-aligned-center video-btn-main" style="flex-basis:20%"><!-- wp:buttons {"style":{"spacing":{"margin":{"top":"0px"}}},"layout":{"type":"flex","justifyContent":"left"}} -->
<div class="wp-block-buttons" style="margin-top:0px"><!-- wp:button {"backgroundColor":"primary","textColor":"accent-text","className":"video-btn","style":{"border":{"radius":"6px","width":"0px","style":"none"},"elements":{"link":{"color":{"text":"var:preset|color|accent-text"}}},"typography":{"fontSize":"20px","fontStyle":"normal","fontWeight":"600","textTransform":"uppercase"},"spacing":{"padding":{"left":"30px","right":"30px","top":"15px","bottom":"15px"}}},"fontFamily":"barlow-condensed"} -->
<div class="wp-block-button video-btn"><a class="wp-block-button__link has-accent-text-color has-primary-background-color has-text-color has-background has-link-color has-barlow-condensed-font-family has-custom-font-size wp-element-button" style="border-style:none;border-width:0px;border-radius:6px;padding-top:15px;padding-right:30px;padding-bottom:15px;padding-left:30px;font-size:20px;font-style:normal;font-weight:600;text-transform:uppercase"><?php esc_html_e( 'View All', 'misbah-architecture-blocks' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"30%","className":"video-contact"} -->
<div class="wp-block-column is-vertically-aligned-center video-contact" style="flex-basis:30%"><!-- wp:group {"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group"><!-- wp:columns {"verticalAlignment":"center"} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"15%","className":"icon-box-main"} -->
<div class="wp-block-column is-vertically-aligned-center icon-box-main" style="flex-basis:15%"><!-- wp:group {"className":"call-icon","style":{"color":{"background":"#ffffff29"},"border":{"radius":"50px"},"spacing":{"padding":{"top":"10px","bottom":"10px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group call-icon has-background" style="border-radius:50px;background-color:#ffffff29;padding-top:10px;padding-bottom:10px"><!-- wp:image {"id":7,"width":"32px","sizeSlug":"full","linkDestination":"none","align":"center"} -->
<figure class="wp-block-image aligncenter size-full is-resized"><img src="<?php echo esc_url($misbah_architecture_blocks_images[1]); ?>" alt="" class="wp-image-7" style="width:32px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"75%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:75%"><!-- wp:heading {"level":6,"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"fontSize":"15px","fontStyle":"normal","fontWeight":"500"},"spacing":{"padding":{"top":"0","bottom":"0"}}},"textColor":"primary","fontFamily":"barlow-condensed"} -->
<h6 class="wp-block-heading has-primary-color has-text-color has-link-color has-barlow-condensed-font-family" style="padding-top:0;padding-bottom:0;font-size:15px;font-style:normal;font-weight:500"><?php esc_html_e( 'Have a question?', 'misbah-architecture-blocks' ); ?></h6>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|pure-white"}}},"spacing":{"padding":{"top":"5px","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"}},"typography":{"fontSize":"20px","fontStyle":"normal","fontWeight":"500"}},"textColor":"pure-white","fontFamily":"barlow-condensed"} -->
<p class="has-pure-white-color has-text-color has-link-color has-barlow-condensed-font-family" style="margin-top:0;margin-bottom:0;padding-top:5px;padding-right:0;padding-bottom:0;padding-left:0;font-size:20px;font-style:normal;font-weight:500"><?php esc_html_e( '(+33)7 00 55 59 27', 'misbah-architecture-blocks' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"50%","className":"video-empty"} -->
<div class="wp-block-column is-vertically-aligned-center video-empty" style="flex-basis:50%"></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"20%"} -->
<div class="wp-block-column" style="flex-basis:20%"><!-- wp:group {"className":"video-right-image","layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group video-right-image"><!-- wp:image {"id":117,"sizeSlug":"full","linkDestination":"none","className":"video-1image"} -->
<figure class="wp-block-image size-full video-1image"><img src="<?php echo esc_url($misbah_architecture_blocks_images[0]); ?>" alt="" class="wp-image-117"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"video-popup","layout":{"type":"constrained"}} -->
<div class="wp-block-group video-popup"><!-- wp:gutentor/e11 {"gID":"g-07syqq0","e11Hold":"image-holder","e11ExtUrl":"https://www.youtube.com/watch?v=D0UnqGm_miA","image":{"uploading":false,"date":1756622741000,"filename":"Video-1.png","menuOrder":0,"uploadedTo":0,"type":"image","subtype":"png","id":18,"title":"Video","url":"<?php echo esc_url($misbah_architecture_blocks_images[2]); ?>","link":"#","alt":"","author":"1","description":"","caption":"","name":"video","status":"inherit","modified":1756622741000,"mime":"image/png","icon":"<?php echo esc_url( includes_url( 'images/media/default.svg' ) ); ?>","dateFormatted":"August 31, 2025","nonces":{"update":"7715849356","delete":"2252b6056e","edit":"a3f7250c2c"},"editLink":"<?php echo esc_url( get_edit_post_link( 18 ) ); ?>","meta":false,"authorName":"admin","authorLink":"<?php echo esc_url( admin_url( 'profile.php' ) ); ?>","filesizeInBytes":1253,"filesizeHumanReadable":"1 KB","context":"","height":74,"width":74,"orientation":"landscape","sizes":{"full":{"url":"<?php echo esc_url($misbah_architecture_blocks_images[2]); ?>","height":74,"width":74,"orientation":"landscape"}},"compat":{"item":"","meta":""}},"ePosTypeD":"g-pos-a","ePosMarginAutoD":true} -->
<div id="section-g-07syqq0" class="wp-block-gutentor-e11 section-g-07syqq0 gutentor-element gutentor-element-video-popup text-align-center-mobile"><div class="gutentor-element-video-popup-wrap gutentor-video-popup-image-holder"><a class="gutentor-video-popup-holder" href="https://www.youtube.com/watch?v=D0UnqGm_miA"><div class="gutentor-image-thumb"><img class="normal-image" src="<?php echo esc_url($misbah_architecture_blocks_images[2]); ?>" alt="" height="74" width="74"/></div></a></div></div>
<!-- /wp:gutentor/e11 --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:group {"className":"countor-box","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group countor-box" style="margin-top:0;margin-bottom:0"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"width":"70%"} -->
<div class="wp-block-column" style="flex-basis:70%"><!-- wp:columns {"className":"counter-main","style":{"spacing":{"padding":{"top":"20px"}}}} -->
<div class="wp-block-columns counter-main" style="padding-top:20px"><!-- wp:column {"className":"counter-single"} -->
<div class="wp-block-column counter-single"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0px","bottom":"0px","left":"0px","right":"0px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:heading {"textAlign":"center","level":5,"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"fontSize":"35px","fontStyle":"normal","fontWeight":"700"}},"textColor":"primary","fontFamily":"barlow-condensed"} -->
<h5 class="wp-block-heading has-text-align-center has-primary-color has-text-color has-link-color has-barlow-condensed-font-family" style="font-size:35px;font-style:normal;font-weight:700"><?php esc_html_e( '145+', 'misbah-architecture-blocks' ); ?></h5>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"typography":{"fontSize":"14px","fontStyle":"normal","fontWeight":"600"},"elements":{"link":{"color":{"text":"#110e0c"}}},"color":{"text":"#110e0c"}},"fontFamily":"poppins"} -->
<p class="has-text-align-center has-text-color has-link-color has-poppins-font-family" style="color:#110e0c;margin-top:0;margin-bottom:0;font-size:14px;font-style:normal;font-weight:600"><?php esc_html_e( 'Fresh Products', 'misbah-architecture-blocks' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"className":"counter-single"} -->
<div class="wp-block-column counter-single"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0px","bottom":"0px","left":"0px","right":"0px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:heading {"textAlign":"center","level":5,"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"fontSize":"35px","fontStyle":"normal","fontWeight":"700"}},"textColor":"primary","fontFamily":"barlow-condensed"} -->
<h5 class="wp-block-heading has-text-align-center has-primary-color has-text-color has-link-color has-barlow-condensed-font-family" style="font-size:35px;font-style:normal;font-weight:700"><?php esc_html_e( '100+', 'misbah-architecture-blocks' ); ?></h5>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"typography":{"fontSize":"14px","fontStyle":"normal","fontWeight":"600"},"elements":{"link":{"color":{"text":"#110e0c"}}},"color":{"text":"#110e0c"}},"fontFamily":"poppins"} -->
<p class="has-text-align-center has-text-color has-link-color has-poppins-font-family" style="color:#110e0c;margin-top:0;margin-bottom:0;font-size:14px;font-style:normal;font-weight:600"><?php esc_html_e( 'Team Members', 'misbah-architecture-blocks' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"className":"counter-single"} -->
<div class="wp-block-column counter-single"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0px","bottom":"0px","left":"0px","right":"0px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:heading {"textAlign":"center","level":5,"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"fontSize":"35px","fontStyle":"normal","fontWeight":"700"}},"textColor":"primary","fontFamily":"barlow-condensed"} -->
<h5 class="wp-block-heading has-text-align-center has-primary-color has-text-color has-link-color has-barlow-condensed-font-family" style="font-size:35px;font-style:normal;font-weight:700"><?php esc_html_e( '15K+', 'misbah-architecture-blocks' ); ?></h5>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"typography":{"fontSize":"14px","fontStyle":"normal","fontWeight":"600"},"elements":{"link":{"color":{"text":"#110e0c"}}},"color":{"text":"#110e0c"}},"fontFamily":"poppins"} -->
<p class="has-text-align-center has-text-color has-link-color has-poppins-font-family" style="color:#110e0c;margin-top:0;margin-bottom:0;font-size:14px;font-style:normal;font-weight:600"><?php esc_html_e( 'Project Completed', 'misbah-architecture-blocks' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"className":"counter-single"} -->
<div class="wp-block-column counter-single"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0px","bottom":"0px","left":"0px","right":"0px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:heading {"textAlign":"center","level":5,"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"fontSize":"35px","fontStyle":"normal","fontWeight":"700"}},"textColor":"primary","fontFamily":"barlow-condensed"} -->
<h5 class="wp-block-heading has-text-align-center has-primary-color has-text-color has-link-color has-barlow-condensed-font-family" style="font-size:35px;font-style:normal;font-weight:700"><?php esc_html_e( '100%', 'misbah-architecture-blocks' ); ?></h5>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"typography":{"fontSize":"14px","fontStyle":"normal","fontWeight":"600"},"elements":{"link":{"color":{"text":"#110e0c"}}},"color":{"text":"#110e0c"}},"fontFamily":"poppins"} -->
<p class="has-text-align-center has-text-color has-link-color has-poppins-font-family" style="color:#110e0c;margin-top:0;margin-bottom:0;font-size:14px;font-style:normal;font-weight:600"><?php esc_html_e( 'Satisfied Client', 'misbah-architecture-blocks' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"30%"} -->
<div class="wp-block-column" style="flex-basis:30%"></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->