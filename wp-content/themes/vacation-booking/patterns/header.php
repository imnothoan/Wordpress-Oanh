<?php
/**
 * Title: Header
 * Slug: vacation-booking/header
 * Categories: header
 * Block Types: core/template-part/header
 */
?>

<!-- wp:group {"className":"header-box-upper","style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}},"layout":{"type":"constrained","contentSize":"80%"}} -->
<div class="wp-block-group header-box-upper" style="padding-top:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20)"><!-- wp:columns {"className":"header-box-middle","style":{"border":{"radius":"10px","color":"#37353a","width":"1px"},"spacing":{"padding":{"top":"10px","bottom":"10px","left":"10px","right":"10px"}}},"backgroundColor":"base"} -->
<div class="wp-block-columns header-box-middle has-border-color has-base-background-color has-background" style="border-color:#37353a;border-width:1px;border-radius:10px;padding-top:10px;padding-right:10px;padding-bottom:10px;padding-left:10px"><!-- wp:column {"verticalAlignment":"center","width":"20%","className":"header-logo","style":{"spacing":{"padding":{"left":"0","right":"0","top":"0px","bottom":"0px"}}}} -->
<div class="wp-block-column is-vertically-aligned-center header-logo" style="padding-top:0px;padding-right:0;padding-bottom:0px;padding-left:0;flex-basis:20%"><!-- wp:site-title {"textAlign":"left","style":{"typography":{"fontStyle":"normal","fontWeight":"600","fontSize":"22px","textTransform":"uppercase"},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary","fontFamily":"fira-sans"} /--></div>
<!-- /wp:column -->

<!-- wp:column {"width":"80%","className":"menu-detail"} -->
<div class="wp-block-column menu-detail" style="flex-basis:80%"><!-- wp:columns {"className":"menu-btns","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}},"border":{"radius":{"topLeft":"0px","bottomLeft":"0px","bottomRight":"15px","topRight":"15px"}}}} -->
<div class="wp-block-columns menu-btns" style="border-top-left-radius:0px;border-top-right-radius:15px;border-bottom-left-radius:0px;border-bottom-right-radius:15px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:column {"verticalAlignment":"center","width":"70%","className":"menu-box"} -->
<div class="wp-block-column is-vertically-aligned-center menu-box" style="flex-basis:70%"><!-- wp:navigation {"customTextColor":"#141516","metadata":{"ignoredHookedBlocks":["woocommerce/customer-account"]},"className":"head-nav","style":{"typography":{"fontSize":"15px","fontStyle":"normal","fontWeight":"500"}},"fontFamily":"fira-sans","layout":{"type":"flex","justifyContent":"center"}} -->
<!-- wp:navigation-link {"label":"Home","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"About","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"Tour","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"Services","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"Blog","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"Contact Us","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->
<!-- /wp:navigation --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"30%","className":"header-button"} -->
<div class="wp-block-column header-button" style="flex-basis:30%"><!-- wp:buttons {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"flex","justifyContent":"right"}} -->
<div class="wp-block-buttons" style="margin-top:0;margin-bottom:0"><!-- wp:button {"backgroundColor":"primary","textColor":"base","style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}},"border":{"radius":"8px"},"typography":{"fontStyle":"normal","fontWeight":"500","textTransform":"capitalize","fontSize":"15px"},"spacing":{"padding":{"left":"20px","right":"20px","top":"7px","bottom":"7px"}}},"fontFamily":"fira-sans"} -->
<div class="wp-block-button"><a class="wp-block-button__link has-base-color has-primary-background-color has-text-color has-background has-link-color has-fira-sans-font-family has-custom-font-size wp-element-button" href="#" style="border-radius:8px;padding-top:7px;padding-right:20px;padding-bottom:7px;padding-left:20px;font-size:15px;font-style:normal;font-weight:500;text-transform:capitalize"><?php esc_html_e('Book Now', 'vacation-booking') ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->