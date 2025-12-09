<?php
/**
 * Title: Blog Section 
 * Slug: interior-design-firm/blog-section
 * Categories: interior-design-firm, blog-section
 */
?>

<!-- wp:group {"className":"blog-section","backgroundColor":"base","layout":{"type":"constrained","contentSize":"80%"}} -->
<div class="wp-block-group blog-section has-base-background-color has-background"><!-- wp:spacer {"height":"24px"} -->
<div style="height:24px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"className":"blogsec-heading-box","layout":{"type":"default"}} -->
<div class="wp-block-group blogsec-heading-box"><!-- wp:heading {"textAlign":"left","level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"400","fontSize":"35px"}}} -->
<h3 class="wp-block-heading has-text-align-left" style="font-size:35px;font-style:normal;font-weight:400"><?php esc_html_e('Blog Section','interior-design-firm'); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"left","className":"blogsec-sub-heading","style":{"spacing":{"margin":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|60","left":"0"}},"typography":{"fontSize":"20px","fontStyle":"normal","fontWeight":"300","lineHeight":"1.5"}}} -->
<p class="has-text-align-left blogsec-sub-heading" style="margin-top:var(--wp--preset--spacing--40);margin-bottom:var(--wp--preset--spacing--60);margin-left:0;font-size:20px;font-style:normal;font-weight:300;line-height:1.5"><?php esc_html_e('&quot;Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.&quot;','interior-design-firm'); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":4,"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true,"taxQuery":null,"parents":[],"format":[]}} -->
<div class="wp-block-query"><!-- wp:post-template {"layout":{"type":"grid","columnCount":3}} -->
<!-- wp:group {"className":"blog-wrap  wow zoomIn","layout":{"type":"default"}} -->
<div class="wp-block-group blog-wrap  wow zoomIn"><!-- wp:cover {"useFeaturedImage":true,"dimRatio":10,"overlayColor":"foreground","isUserOverlayColor":true,"minHeight":450,"isDark":false,"style":{"border":{"radius":"15px"}},"layout":{"type":"default"}} -->
<div class="wp-block-cover is-light" style="border-radius:15px;min-height:450px"><span aria-hidden="true" class="wp-block-cover__background has-foreground-background-color has-background-dim-10 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
<p class="has-text-align-center has-large-font-size"></p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:cover -->

<!-- wp:group {"className":"blog-date-box","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}},"border":{"radius":{"topLeft":"15px"}}},"backgroundColor":"second-bg","layout":{"type":"default"}} -->
<div class="wp-block-group blog-date-box has-second-bg-background-color has-background" style="border-top-left-radius:15px;margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--40)"><!-- wp:post-date {"textAlign":"center","format":"j","style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}},"spacing":{"margin":{"top":"0","bottom":"0"}},"typography":{"fontSize":"18px"}},"textColor":"foreground","fontFamily":"gothic-a-1"} /-->

<!-- wp:post-date {"textAlign":"center","format":"M","style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}},"spacing":{"margin":{"top":"0","bottom":"0"}},"typography":{"fontSize":"16px"}},"textColor":"foreground","fontFamily":"gothic-a-1"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"className":"blog-txt-box","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"},"margin":{"top":"0","bottom":"0"}},"border":{"radius":{"bottomLeft":"15px"}}},"backgroundColor":"second-bg","layout":{"type":"default"}} -->
<div class="wp-block-group blog-txt-box has-second-bg-background-color has-background" style="border-bottom-left-radius:15px;margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)"><!-- wp:post-title {"style":{"typography":{"fontStyle":"normal","fontWeight":"400","fontSize":"18px"},"spacing":{"margin":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}}} /-->

<!-- wp:post-excerpt {"excerptLength":25,"style":{"typography":{"fontSize":"14px","fontStyle":"normal","fontWeight":"300"},"spacing":{"margin":{"top":"0","bottom":"0"}}}} /-->

<!-- wp:read-more {"content":"Read More","style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}},"typography":{"fontSize":"15px"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"foreground","fontFamily":"gothic-a-1"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query -->

<!-- wp:spacer {"height":"53px"} -->
<div style="height:53px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group -->