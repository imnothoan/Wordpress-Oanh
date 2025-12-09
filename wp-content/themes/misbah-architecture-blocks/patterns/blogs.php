<?php
/**
 * Title: Blogs
 * Slug: misbah-architecture-blocks/blogs
 * Categories: all, blogs
 * Keywords: blogs
 */

$misbah_architecture_blocks_images = array(
    MISBAH_ARCHITECTURE_BLOCKS_URL . 'assets/images/blog1.png',
    MISBAH_ARCHITECTURE_BLOCKS_URL . 'assets/images/user.png',
    MISBAH_ARCHITECTURE_BLOCKS_URL . 'assets/images/blog2.png',
    MISBAH_ARCHITECTURE_BLOCKS_URL . 'assets/images/blog3.png',
);

?>

<?php if ( class_exists( 'Gutentor' ) ) : ?>

<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"right":"0","left":"0"}}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-right:0;padding-left:0"><!-- wp:group {"style":{"color":{"background":"#f7f7f7"}},"layout":{"type":"constrained","contentSize":"80%"}} -->
<div class="wp-block-group has-background" style="background-color:#f7f7f7"><!-- wp:group {"className":"blog-heading","style":{"spacing":{"padding":{"top":"60px","bottom":"60px"}}},"layout":{"type":"constrained","contentSize":"80%"}} -->
<div class="wp-block-group blog-heading" style="padding-top:60px;padding-bottom:60px"><!-- wp:heading {"textAlign":"center","className":"blog-short-heading","style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"fontSize":"20px","fontStyle":"normal","fontWeight":"500"}},"textColor":"primary","fontFamily":"barlow-condensed"} -->
<h2 class="wp-block-heading has-text-align-center blog-short-heading has-primary-color has-text-color has-link-color has-barlow-condensed-font-family" style="font-size:20px;font-style:normal;font-weight:500"><?php esc_html_e( 'Our Blog', 'misbah-architecture-blocks' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:heading {"textAlign":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|secaccent"}}},"typography":{"fontSize":"25px","fontStyle":"normal","fontWeight":"500","textTransform":"uppercase"}},"textColor":"secaccent","fontFamily":"barlow-condensed"} -->
<h2 class="wp-block-heading has-text-align-center has-secaccent-color has-text-color has-link-color has-barlow-condensed-font-family" style="font-size:25px;font-style:normal;font-weight:500;text-transform:uppercase"><?php esc_html_e( 'Our Latest News & Blog', 'misbah-architecture-blocks' ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"blog-post-section","layout":{"type":"constrained","contentSize":"80%"}} -->
<div class="wp-block-group blog-post-section"><!-- wp:gutentor/p1 {"gID":"g-xvav4xi","pName":"gutentor/p1","blockSortableItems":[{"itemValue":"featured-image","itemLabel":"Featured Image"},{"on":false,"itemValue":"secondary-entry-meta","itemLabel":"Secondary Entry Meta"},{"on":true,"itemValue":"primary-entry-meta","itemLabel":"Primary Entry Meta"},{"on":true,"itemValue":"title","itemLabel":"Title"},{"on":false,"itemValue":"description","itemLabel":"Description/Excerpt"},{"on":true,"itemValue":"button","itemLabel":"Button"}],"timestamp":1756550055989,"blockItemsColumn":{"desktop":"grid-lg-3","tablet":"grid-md-4","mobile":"grid-12"},"pContentPadding":{"mTop":"","mRight":"","mBottom":"","mLeft":""},"pBxAlign":{"desktop":"text-align-center"},"pBxColor":{"enable":false,"normal":"","hover":""},"pBtnColor":{"enable":true,"normal":"rgba(0,0,0,0)","hover":"#1949d4"},"pBtnBgGt":{"normal":false,"hover":""},"pBtnTxtColor":{"enable":true,"normal":"#D99A4F","hover":"#fff"},"pBtnMargin":{"type":"px","mBottom":"","mLeft":""},"pBtnBorder":{"rTypeN":"px","rTypeH":"px","rTopN":"30","rTopH":"3","rRightN":"30","rRightH":"3","rBottomN":"0","rBottomH":"3","rLeftN":"30","rLeftH":"3","styleN":"solid","topN":"1","colorN":"#D99A4F","rightN":"1","bottomN":"1","leftN":"1"},"pBtnTypography":{"fontType":"google","desktopFontSize":"14px","tabletFontSize":16,"mobileFontSize":16,"textTransform":"normal","googleFont":"DM+Sans","fontWeight":"700"},"pBtnCName":"blog-btn","q1BtnTypography":{"fontType":"default","desktopFontSize":16,"tabletFontSize":16,"mobileFontSize":16,"textTransform":"normal"},"pOnDesc":false,"pDescTypography":{"desktopFontSize":"14px","fontType":"google","googleFont":"DM+Sans","fontWeight":"500"},"pTitleColor":{"enable":true,"normal":"#272727","hover":""},"pTitleTypography":{"desktopFontSize":"25px","fontType":"google","googleFont":"Barlow+Condensed","fontWeight":"regular"},"pOnCatMeta1":false,"pOnTagMeta1":false,"pOnCommentMeta1":false,"pMeta1Typography":{"desktopFontSize":"13px","fontType":"google","googleFont":"DM+Sans","fontWeight":"500"},"pOnMeta2":true,"pOnIconMeta2":false,"pOnAuthorMeta2":false,"pOnCatMeta2":false,"pOnTagMeta2":false,"pOnCommentMeta2":false,"pFImgOColor":{"enable":false,"normal":""},"pImgBxWidth":{"type":"%","desktop":100},"pImgBxHeight":{"desktop":300},"pAvatarPos":"g-avatar-img-t-l","wooPriceMargin":{"type":"px","mBottom":""},"align":"full"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<?php elseif ( ! did_action( 'gutentor_static_fallback_loaded' ) ) : ?>

    <?php do_action( 'gutentor_static_fallback_loaded' ); ?>
    
   <!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"right":"0","left":"0"}}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-right:0;padding-left:0"><!-- wp:group {"style":{"color":{"background":"#fbfbfb"}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group has-background" style="background-color:#fbfbfb"><!-- wp:group {"className":"blog-heading","style":{"spacing":{"padding":{"top":"60px","bottom":"60px"}}},"layout":{"type":"constrained","contentSize":"80%"}} -->
<div class="wp-block-group blog-heading" style="padding-top:60px;padding-bottom:60px"><!-- wp:heading {"textAlign":"center","className":"blog-short-heading","style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"fontSize":"20px","fontStyle":"normal","fontWeight":"500"}},"textColor":"primary","fontFamily":"barlow-condensed"} -->
<h2 class="wp-block-heading has-text-align-center blog-short-heading has-primary-color has-text-color has-link-color has-barlow-condensed-font-family" style="font-size:20px;font-style:normal;font-weight:500"><?php esc_html_e( 'Our Blog', 'misbah-architecture-blocks' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:heading {"textAlign":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|secaccent"}}},"typography":{"fontSize":"25px","fontStyle":"normal","fontWeight":"500","textTransform":"uppercase"}},"textColor":"secaccent","fontFamily":"barlow-condensed"} -->
<h2 class="wp-block-heading has-text-align-center has-secaccent-color has-text-color has-link-color has-barlow-condensed-font-family" style="font-size:25px;font-style:normal;font-weight:500;text-transform:uppercase"><?php esc_html_e( 'Our Latest News & Blog', 'misbah-architecture-blocks' ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"0px","bottom":"50px"}}},"layout":{"type":"constrained","contentSize":"80%"}} -->
<div class="wp-block-group" style="padding-top:0px;padding-bottom:50px"><!-- wp:columns {"className":"product-column"} -->
<div class="wp-block-columns product-column"><!-- wp:column {"width":"40%"} -->
<div class="wp-block-column" style="flex-basis:40%"><!-- wp:group {"className":"blog-box","style":{"spacing":{"padding":{"top":"0","bottom":"20px","left":"0px","right":"0px"},"blockGap":"var:preset|spacing|x-small"},"border":{"radius":"12px"}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group blog-box" style="border-radius:12px;padding-top:0;padding-right:0px;padding-bottom:20px;padding-left:0px"><!-- wp:group {"className":"date-box","style":{"border":{"radius":{"bottomRight":"30px"}}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group date-box" style="border-bottom-right-radius:30px"><!-- wp:image {"id":154,"sizeSlug":"full","linkDestination":"none","className":"blog-image","style":{"border":{"radius":"12px"}}} -->
<figure class="wp-block-image size-full has-custom-border blog-image"><img src="<?php echo esc_url($misbah_architecture_blocks_images[0]); ?>" alt="" class="wp-image-154" style="border-radius:12px"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"date-box-inner","layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group date-box-inner"><!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|accent-text"}}},"typography":{"fontSize":"30px","fontStyle":"normal","fontWeight":"500"},"border":{"radius":{"topLeft":"14px","topRight":"14px"}},"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}},"backgroundColor":"primary","textColor":"accent-text","fontFamily":"barlow-condensed"} -->
<p class="has-text-align-center has-accent-text-color has-primary-background-color has-text-color has-background has-link-color has-barlow-condensed-font-family" style="border-top-left-radius:14px;border-top-right-radius:14px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;font-size:30px;font-style:normal;font-weight:500"><?php esc_html_e( '12', 'misbah-architecture-blocks' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|accent-text"}}},"typography":{"fontSize":"14px","fontStyle":"normal","fontWeight":"300"},"spacing":{"padding":{"top":"8px","bottom":"8px","left":"5px","right":"5px"},"margin":{"top":"0","bottom":"0","left":"0","right":"0"}},"border":{"radius":{"bottomLeft":"14px","bottomRight":"14px"}}},"backgroundColor":"secaccent","textColor":"accent-text","fontFamily":"barlow-condensed"} -->
<p class="has-text-align-center has-accent-text-color has-secaccent-background-color has-text-color has-background has-link-color has-barlow-condensed-font-family" style="border-bottom-left-radius:14px;border-bottom-right-radius:14px;margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;padding-top:8px;padding-right:5px;padding-bottom:8px;padding-left:5px;font-size:14px;font-style:normal;font-weight:300"><?php esc_html_e( 'Aug, 2023', 'misbah-architecture-blocks' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"blog-content-box","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"20px","right":"20px"},"margin":{"top":"20px"}}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group blog-content-box" style="margin-top:20px;padding-top:0;padding-right:20px;padding-bottom:0;padding-left:20px"><!-- wp:group {"className":"blog-meta","layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group blog-meta"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:image {"id":172,"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"50%"}}} -->
<figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url($misbah_architecture_blocks_images[1]); ?>" alt="" class="wp-image-172" style="border-radius:50%"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|secaccent"}}},"typography":{"fontSize":"15px","fontStyle":"normal","fontWeight":"300"},"border":{"right":{"color":"#909090","width":"1px"},"bottom":{"style":"none","width":"0px"}},"spacing":{"padding":{"right":"30px"}}},"textColor":"secaccent","fontFamily":"poppins"} -->
<p class="has-secaccent-color has-text-color has-link-color has-poppins-font-family" style="border-right-color:#909090;border-right-width:1px;border-bottom-style:none;border-bottom-width:0px;padding-right:30px;font-size:15px;font-style:normal;font-weight:300"><?php esc_html_e( 'Admin', 'misbah-architecture-blocks' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|secaccent"}}},"typography":{"fontSize":"15px","fontStyle":"normal","fontWeight":"300"},"spacing":{"padding":{"left":"30px"}}},"textColor":"secaccent","fontFamily":"poppins"} -->
<p class="has-secaccent-color has-text-color has-link-color has-poppins-font-family" style="padding-left:30px;font-size:15px;font-style:normal;font-weight:300"><span class="dashicons dashicons-admin-comments"></span><?php esc_html_e( 'Comments', 'misbah-architecture-blocks' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:heading {"textAlign":"left","level":5,"style":{"elements":{"link":{"color":{"text":"var:preset|color|pure-black"}}},"typography":{"fontSize":"25px","fontStyle":"normal","fontWeight":"500","textTransform":"uppercase"}},"textColor":"pure-black","fontFamily":"barlow-condensed"} -->
<h5 class="wp-block-heading has-text-align-left has-pure-black-color has-text-color has-link-color has-barlow-condensed-font-family" style="font-size:25px;font-style:normal;font-weight:500;text-transform:uppercase"><?php esc_html_e( 'Tip’s about Real Estate Recent', 'misbah-architecture-blocks' ); ?> <br><?php esc_html_e( 'Conditions from Agent.', 'misbah-architecture-blocks' ); ?></h5>
<!-- /wp:heading -->

<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"28px","bottom":"28px"}}},"layout":{"type":"flex","justifyContent":"left"}} -->
<div class="wp-block-buttons" style="margin-top:28px;margin-bottom:28px"><!-- wp:button {"textAlign":"left","textColor":"secondary","width":100,"className":"blog-btn","style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}},"typography":{"fontSize":"18px","fontStyle":"normal","fontWeight":"500","letterSpacing":"2px","textTransform":"uppercase"},"spacing":{"padding":{"left":"25px","right":"25px","top":"12px","bottom":"12px"}},"border":{"radius":"8px","width":"0px","style":"none"},"color":{"background":"#fbede4"}},"fontFamily":"barlow-condensed"} -->
<div class="wp-block-button has-custom-width wp-block-button__width-100 blog-btn"><a class="wp-block-button__link has-secondary-color has-text-color has-background has-link-color has-barlow-condensed-font-family has-text-align-left has-custom-font-size wp-element-button" href="#" style="border-style:none;border-width:0px;border-radius:8px;background-color:#fbede4;padding-top:12px;padding-right:25px;padding-bottom:12px;padding-left:25px;font-size:18px;font-style:normal;font-weight:500;letter-spacing:2px;text-transform:uppercase"><?php esc_html_e( 'Read More', 'misbah-architecture-blocks' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"40%"} -->
<div class="wp-block-column" style="flex-basis:40%"><!-- wp:group {"className":"blog-box","style":{"spacing":{"padding":{"top":"0","bottom":"20px","left":"0px","right":"0px"},"blockGap":"var:preset|spacing|x-small"},"border":{"radius":"12px"}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group blog-box" style="border-radius:12px;padding-top:0;padding-right:0px;padding-bottom:20px;padding-left:0px"><!-- wp:group {"className":"date-box","style":{"border":{"radius":{"bottomRight":"30px"}}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group date-box" style="border-bottom-right-radius:30px"><!-- wp:image {"id":154,"sizeSlug":"full","linkDestination":"none","className":"blog-image","style":{"border":{"radius":"12px"}}} -->
<figure class="wp-block-image size-full has-custom-border blog-image"><img src="<?php echo esc_url($misbah_architecture_blocks_images[2]); ?>" alt="" class="wp-image-154" style="border-radius:12px"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"date-box-inner","layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group date-box-inner"><!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|accent-text"}}},"typography":{"fontSize":"30px","fontStyle":"normal","fontWeight":"500"},"border":{"radius":{"topLeft":"14px","topRight":"14px"}},"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}},"backgroundColor":"primary","textColor":"accent-text","fontFamily":"barlow-condensed"} -->
<p class="has-text-align-center has-accent-text-color has-primary-background-color has-text-color has-background has-link-color has-barlow-condensed-font-family" style="border-top-left-radius:14px;border-top-right-radius:14px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;font-size:30px;font-style:normal;font-weight:500"><?php esc_html_e( '12', 'misbah-architecture-blocks' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|accent-text"}}},"typography":{"fontSize":"14px","fontStyle":"normal","fontWeight":"300"},"spacing":{"padding":{"top":"8px","bottom":"8px","left":"5px","right":"5px"},"margin":{"top":"0","bottom":"0","left":"0","right":"0"}},"border":{"radius":{"bottomLeft":"14px","bottomRight":"14px"}}},"backgroundColor":"secaccent","textColor":"accent-text","fontFamily":"barlow-condensed"} -->
<p class="has-text-align-center has-accent-text-color has-secaccent-background-color has-text-color has-background has-link-color has-barlow-condensed-font-family" style="border-bottom-left-radius:14px;border-bottom-right-radius:14px;margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;padding-top:8px;padding-right:5px;padding-bottom:8px;padding-left:5px;font-size:14px;font-style:normal;font-weight:300"><?php esc_html_e( 'Aug, 2023', 'misbah-architecture-blocks' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"blog-content-box","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"20px","right":"20px"},"margin":{"top":"20px"}}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group blog-content-box" style="margin-top:20px;padding-top:0;padding-right:20px;padding-bottom:0;padding-left:20px"><!-- wp:group {"className":"blog-meta","layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group blog-meta"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:image {"id":172,"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"50%"}}} -->
<figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url($misbah_architecture_blocks_images[1]); ?>" alt="" class="wp-image-172" style="border-radius:50%"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|secaccent"}}},"typography":{"fontSize":"15px","fontStyle":"normal","fontWeight":"300"},"border":{"right":{"color":"#909090","width":"1px"},"bottom":{"style":"none","width":"0px"}},"spacing":{"padding":{"right":"30px"}}},"textColor":"secaccent","fontFamily":"poppins"} -->
<p class="has-secaccent-color has-text-color has-link-color has-poppins-font-family" style="border-right-color:#909090;border-right-width:1px;border-bottom-style:none;border-bottom-width:0px;padding-right:30px;font-size:15px;font-style:normal;font-weight:300"><?php esc_html_e( 'Admin', 'misbah-architecture-blocks' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|secaccent"}}},"typography":{"fontSize":"15px","fontStyle":"normal","fontWeight":"300"},"spacing":{"padding":{"left":"30px"}}},"textColor":"secaccent","fontFamily":"poppins"} -->
<p class="has-secaccent-color has-text-color has-link-color has-poppins-font-family" style="padding-left:30px;font-size:15px;font-style:normal;font-weight:300"><span class="dashicons dashicons-admin-comments"></span><?php esc_html_e( 'Comments', 'misbah-architecture-blocks' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:heading {"textAlign":"left","level":5,"style":{"elements":{"link":{"color":{"text":"var:preset|color|pure-black"}}},"typography":{"fontSize":"25px","fontStyle":"normal","fontWeight":"500","textTransform":"uppercase"}},"textColor":"pure-black","fontFamily":"barlow-condensed"} -->
<h5 class="wp-block-heading has-text-align-left has-pure-black-color has-text-color has-link-color has-barlow-condensed-font-family" style="font-size:25px;font-style:normal;font-weight:500;text-transform:uppercase"><?php esc_html_e( 'Insights on Current Real Estate  ', 'misbah-architecture-blocks' ); ?> <br><?php esc_html_e( 'Market Trends from an Agent', 'misbah-architecture-blocks' ); ?></h5>
<!-- /wp:heading -->

<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"28px","bottom":"28px"}}},"layout":{"type":"flex","justifyContent":"left"}} -->
<div class="wp-block-buttons" style="margin-top:28px;margin-bottom:28px"><!-- wp:button {"textAlign":"left","textColor":"secondary","width":100,"className":"blog-btn","style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}},"typography":{"fontSize":"18px","fontStyle":"normal","fontWeight":"500","letterSpacing":"2px","textTransform":"uppercase"},"spacing":{"padding":{"left":"25px","right":"25px","top":"12px","bottom":"12px"}},"border":{"radius":"8px","width":"0px","style":"none"},"color":{"background":"#fbede4"}},"fontFamily":"barlow-condensed"} -->
<div class="wp-block-button has-custom-width wp-block-button__width-100 blog-btn"><a class="wp-block-button__link has-secondary-color has-text-color has-background has-link-color has-barlow-condensed-font-family has-text-align-left has-custom-font-size wp-element-button" href="#" style="border-style:none;border-width:0px;border-radius:8px;background-color:#fbede4;padding-top:12px;padding-right:25px;padding-bottom:12px;padding-left:25px;font-size:18px;font-style:normal;font-weight:500;letter-spacing:2px;text-transform:uppercase"><?php esc_html_e( 'Read More', 'misbah-architecture-blocks' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"40%"} -->
<div class="wp-block-column" style="flex-basis:40%"><!-- wp:group {"className":"blog-box","style":{"spacing":{"padding":{"top":"0","bottom":"20px","left":"0px","right":"0px"},"blockGap":"var:preset|spacing|x-small"},"border":{"radius":"12px"}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group blog-box" style="border-radius:12px;padding-top:0;padding-right:0px;padding-bottom:20px;padding-left:0px"><!-- wp:group {"className":"date-box","style":{"border":{"radius":{"bottomRight":"30px"}}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group date-box" style="border-bottom-right-radius:30px"><!-- wp:image {"id":154,"sizeSlug":"full","linkDestination":"none","className":"blog-image","style":{"border":{"radius":"12px"}}} -->
<figure class="wp-block-image size-full has-custom-border blog-image"><img src="<?php echo esc_url($misbah_architecture_blocks_images[3]); ?>" alt="" class="wp-image-154" style="border-radius:12px"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"date-box-inner","layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group date-box-inner"><!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|accent-text"}}},"typography":{"fontSize":"30px","fontStyle":"normal","fontWeight":"500"},"border":{"radius":{"topLeft":"14px","topRight":"14px"}},"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}},"backgroundColor":"primary","textColor":"accent-text","fontFamily":"barlow-condensed"} -->
<p class="has-text-align-center has-accent-text-color has-primary-background-color has-text-color has-background has-link-color has-barlow-condensed-font-family" style="border-top-left-radius:14px;border-top-right-radius:14px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;font-size:30px;font-style:normal;font-weight:500"><?php esc_html_e( '12', 'misbah-architecture-blocks' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|accent-text"}}},"typography":{"fontSize":"14px","fontStyle":"normal","fontWeight":"300"},"spacing":{"padding":{"top":"8px","bottom":"8px","left":"5px","right":"5px"},"margin":{"top":"0","bottom":"0","left":"0","right":"0"}},"border":{"radius":{"bottomLeft":"14px","bottomRight":"14px"}}},"backgroundColor":"secaccent","textColor":"accent-text","fontFamily":"barlow-condensed"} -->
<p class="has-text-align-center has-accent-text-color has-secaccent-background-color has-text-color has-background has-link-color has-barlow-condensed-font-family" style="border-bottom-left-radius:14px;border-bottom-right-radius:14px;margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;padding-top:8px;padding-right:5px;padding-bottom:8px;padding-left:5px;font-size:14px;font-style:normal;font-weight:300"><?php esc_html_e( 'Aug, 2023', 'misbah-architecture-blocks' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"blog-content-box","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"20px","right":"20px"},"margin":{"top":"20px"}}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group blog-content-box" style="margin-top:20px;padding-top:0;padding-right:20px;padding-bottom:0;padding-left:20px"><!-- wp:group {"className":"blog-meta","layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group blog-meta"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:image {"id":172,"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"50%"}}} -->
<figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url($misbah_architecture_blocks_images[1]); ?>" alt="" class="wp-image-172" style="border-radius:50%"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|secaccent"}}},"typography":{"fontSize":"15px","fontStyle":"normal","fontWeight":"300"},"border":{"right":{"color":"#909090","width":"1px"},"bottom":{"style":"none","width":"0px"}},"spacing":{"padding":{"right":"30px"}}},"textColor":"secaccent","fontFamily":"poppins"} -->
<p class="has-secaccent-color has-text-color has-link-color has-poppins-font-family" style="border-right-color:#909090;border-right-width:1px;border-bottom-style:none;border-bottom-width:0px;padding-right:30px;font-size:15px;font-style:normal;font-weight:300"><?php esc_html_e( 'Admin', 'misbah-architecture-blocks' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|secaccent"}}},"typography":{"fontSize":"15px","fontStyle":"normal","fontWeight":"300"},"spacing":{"padding":{"left":"30px"}}},"textColor":"secaccent","fontFamily":"poppins"} -->
<p class="has-secaccent-color has-text-color has-link-color has-poppins-font-family" style="padding-left:30px;font-size:15px;font-style:normal;font-weight:300"><span class="dashicons dashicons-admin-comments"></span><?php esc_html_e( 'Comments', 'misbah-architecture-blocks' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:heading {"textAlign":"left","level":5,"style":{"elements":{"link":{"color":{"text":"var:preset|color|pure-black"}}},"typography":{"fontSize":"25px","fontStyle":"normal","fontWeight":"500","textTransform":"uppercase"}},"textColor":"pure-black","fontFamily":"barlow-condensed"} -->
<h5 class="wp-block-heading has-text-align-left has-pure-black-color has-text-color has-link-color has-barlow-condensed-font-family" style="font-size:25px;font-style:normal;font-weight:500;text-transform:uppercase"><?php esc_html_e( 'Latest Real Estate Market ', 'misbah-architecture-blocks' ); ?> <br><?php esc_html_e( 'Updates and Advice from an Agent', 'misbah-architecture-blocks' ); ?></h5>
<!-- /wp:heading -->

<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"28px","bottom":"28px"}}},"layout":{"type":"flex","justifyContent":"left"}} -->
<div class="wp-block-buttons" style="margin-top:28px;margin-bottom:28px"><!-- wp:button {"textAlign":"left","textColor":"secondary","width":100,"className":"blog-btn","style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}},"typography":{"fontSize":"18px","fontStyle":"normal","fontWeight":"500","letterSpacing":"2px","textTransform":"uppercase"},"spacing":{"padding":{"left":"25px","right":"25px","top":"12px","bottom":"12px"}},"border":{"radius":"8px","width":"0px","style":"none"},"color":{"background":"#fbede4"}},"fontFamily":"barlow-condensed"} -->
<div class="wp-block-button has-custom-width wp-block-button__width-100 blog-btn"><a class="wp-block-button__link has-secondary-color has-text-color has-background has-link-color has-barlow-condensed-font-family has-text-align-left has-custom-font-size wp-element-button" href="#" style="border-style:none;border-width:0px;border-radius:8px;background-color:#fbede4;padding-top:12px;padding-right:25px;padding-bottom:12px;padding-left:25px;font-size:18px;font-style:normal;font-weight:500;letter-spacing:2px;text-transform:uppercase"><?php esc_html_e( 'Read More', 'misbah-architecture-blocks' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<?php endif; ?>