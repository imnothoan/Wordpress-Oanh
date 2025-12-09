<?php

$travel_booking_offers_tp_theme_css = '';

$travel_booking_offers_theme_lay = get_theme_mod( 'travel_booking_offers_tp_body_layout_settings','Full');
if($travel_booking_offers_theme_lay == 'Container'){
$travel_booking_offers_tp_theme_css .='body{';
$travel_booking_offers_tp_theme_css .='max-width: 1140px; width: 100%; padding-right: 15px; padding-left: 15px; margin-right: auto; margin-left: auto;';
$travel_booking_offers_tp_theme_css .='}';
$travel_booking_offers_tp_theme_css .='@media screen and (max-width:575px){';
$travel_booking_offers_tp_theme_css .='body{';
	$travel_booking_offers_tp_theme_css .='max-width: 100%; padding-right:0px; padding-left: 0px';
$travel_booking_offers_tp_theme_css .='} }';
$travel_booking_offers_tp_theme_css .='.scrolled{';
$travel_booking_offers_tp_theme_css .='width: auto; left:0; right:0;';
$travel_booking_offers_tp_theme_css .='}';
}else if($travel_booking_offers_theme_lay == 'Container Fluid'){
$travel_booking_offers_tp_theme_css .='body{';
$travel_booking_offers_tp_theme_css .='width: 100%;padding-right: 15px;padding-left: 15px;margin-right: auto;margin-left: auto;';
$travel_booking_offers_tp_theme_css .='}';
$travel_booking_offers_tp_theme_css .='@media screen and (max-width:575px){';
$travel_booking_offers_tp_theme_css .='body{';
	$travel_booking_offers_tp_theme_css .='max-width: 100%; padding-right:0px; padding-left:0px';
$travel_booking_offers_tp_theme_css .='} }';
$travel_booking_offers_tp_theme_css .='.scrolled{';
$travel_booking_offers_tp_theme_css .='width: auto; left:0; right:0;';
$travel_booking_offers_tp_theme_css .='}';
}else if($travel_booking_offers_theme_lay == 'Full'){
$travel_booking_offers_tp_theme_css .='body{';
$travel_booking_offers_tp_theme_css .='max-width: 100%;';
$travel_booking_offers_tp_theme_css .='}';
}

$travel_booking_offers_scroll_position = get_theme_mod( 'travel_booking_offers_scroll_top_position','Right');
if($travel_booking_offers_scroll_position == 'Right'){
$travel_booking_offers_tp_theme_css .='#return-to-top{';
$travel_booking_offers_tp_theme_css .='right: 20px;';
$travel_booking_offers_tp_theme_css .='}';
}else if($travel_booking_offers_scroll_position == 'Left'){
$travel_booking_offers_tp_theme_css .='#return-to-top{';
$travel_booking_offers_tp_theme_css .='left: 20px;';
$travel_booking_offers_tp_theme_css .='}';
}else if($travel_booking_offers_scroll_position == 'Center'){
$travel_booking_offers_tp_theme_css .='#return-to-top{';
$travel_booking_offers_tp_theme_css .='right: 50%;left: 50%;';
$travel_booking_offers_tp_theme_css .='}';
}

// related post
$travel_booking_offers_related_post_mob = get_theme_mod('travel_booking_offers_related_post_mob', true);
$travel_booking_offers_related_post = get_theme_mod('travel_booking_offers_remove_related_post', true);
$travel_booking_offers_tp_theme_css .= '.related-post-block {';
if ($travel_booking_offers_related_post == false) {
    $travel_booking_offers_tp_theme_css .= 'display: none;';
}
$travel_booking_offers_tp_theme_css .= '}';
$travel_booking_offers_tp_theme_css .= '@media screen and (max-width: 575px) {';
if ($travel_booking_offers_related_post == false || $travel_booking_offers_related_post_mob == false) {
    $travel_booking_offers_tp_theme_css .= '.related-post-block { display: none; }';
}
$travel_booking_offers_tp_theme_css .= '}';

// slider btn
$travel_booking_offers_slider_buttom_mob = get_theme_mod('travel_booking_offers_slider_buttom_mob', true);
$travel_booking_offers_slider_button = get_theme_mod('travel_booking_offers_slider_button', true);
$travel_booking_offers_tp_theme_css .= '#main-slider .more-btn {';
if ($travel_booking_offers_slider_button == false) {
    $travel_booking_offers_tp_theme_css .= 'display: none;';
}
$travel_booking_offers_tp_theme_css .= '}';
$travel_booking_offers_tp_theme_css .= '@media screen and (max-width: 575px) {';
if ($travel_booking_offers_slider_button == false || $travel_booking_offers_slider_buttom_mob == false) {
    $travel_booking_offers_tp_theme_css .= '#main-slider .more-btn { display: none; }';
}
$travel_booking_offers_tp_theme_css .= '}';

//return to header mobile               
$travel_booking_offers_return_to_header_mob = get_theme_mod('travel_booking_offers_return_to_header_mob', true);
$travel_booking_offers_return_to_header = get_theme_mod('travel_booking_offers_return_to_header', true);
$travel_booking_offers_tp_theme_css .= '.return-to-header{';
if ($travel_booking_offers_return_to_header == false) {
    $travel_booking_offers_tp_theme_css .= 'display: none;';
}
$travel_booking_offers_tp_theme_css .= '}';
$travel_booking_offers_tp_theme_css .= '@media screen and (max-width: 575px) {';
if ($travel_booking_offers_return_to_header == false || $travel_booking_offers_return_to_header_mob == false) {
    $travel_booking_offers_tp_theme_css .= '.return-to-header{ display: none; }';
}
$travel_booking_offers_tp_theme_css .= '}';

//blog description              
$travel_booking_offers_mobile_blog_description = get_theme_mod('travel_booking_offers_mobile_blog_description', true);
$travel_booking_offers_tp_theme_css .= '@media screen and (max-width: 575px) {';
if ($travel_booking_offers_mobile_blog_description == false) {
    $travel_booking_offers_tp_theme_css .= '.blog-description{ display: none; }';
}
$travel_booking_offers_tp_theme_css .= '}';


$travel_booking_offers_footer_widget_image = get_theme_mod('travel_booking_offers_footer_widget_image');
if($travel_booking_offers_footer_widget_image != false){
$travel_booking_offers_tp_theme_css .='#footer{';
$travel_booking_offers_tp_theme_css .='background: url('.esc_attr($travel_booking_offers_footer_widget_image).');';
$travel_booking_offers_tp_theme_css .='}';
}

//Social icon Font size
$travel_booking_offers_social_icon_fontsize = get_theme_mod('travel_booking_offers_social_icon_fontsize');
$travel_booking_offers_tp_theme_css .='.social-media a i{';
$travel_booking_offers_tp_theme_css .='font-size: '.esc_attr($travel_booking_offers_social_icon_fontsize).'px;';
$travel_booking_offers_tp_theme_css .='}';

// site title and tagline font size option
$travel_booking_offers_site_title_font_size = get_theme_mod('travel_booking_offers_site_title_font_size', ''); {
$travel_booking_offers_tp_theme_css .='.logo h1 a, .logo p a{';
$travel_booking_offers_tp_theme_css .='font-size: '.esc_attr($travel_booking_offers_site_title_font_size).'px !important;';
$travel_booking_offers_tp_theme_css .='}';
}

$travel_booking_offers_site_tagline_font_size = get_theme_mod('travel_booking_offers_site_tagline_font_size', '');{
$travel_booking_offers_tp_theme_css .='.logo p{';
$travel_booking_offers_tp_theme_css .='font-size: '.esc_attr($travel_booking_offers_site_tagline_font_size).'px;';
$travel_booking_offers_tp_theme_css .='}';
}

$travel_booking_offers_related_product = get_theme_mod('travel_booking_offers_related_product',true);
if($travel_booking_offers_related_product == false){
$travel_booking_offers_tp_theme_css .='.related.products{';
	$travel_booking_offers_tp_theme_css .='display: none;';
$travel_booking_offers_tp_theme_css .='}';
}

//menu font size
$travel_booking_offers_menu_font_size = get_theme_mod('travel_booking_offers_menu_font_size', '');{
$travel_booking_offers_tp_theme_css .='.main-navigation a, .main-navigation li.page_item_has_children:after, .main-navigation li.menu-item-has-children:after{';
	$travel_booking_offers_tp_theme_css .='font-size: '.esc_attr($travel_booking_offers_menu_font_size).'px;';
$travel_booking_offers_tp_theme_css .='}';
}

// menu text transform
$travel_booking_offers_menu_text_tranform = get_theme_mod( 'travel_booking_offers_menu_text_tranform','');
if($travel_booking_offers_menu_text_tranform == 'Uppercase'){
$travel_booking_offers_tp_theme_css .='.main-navigation a {';
	$travel_booking_offers_tp_theme_css .='text-transform: uppercase;';
$travel_booking_offers_tp_theme_css .='}';
}else if($travel_booking_offers_menu_text_tranform == 'Lowercase'){
$travel_booking_offers_tp_theme_css .='.main-navigation a {';
	$travel_booking_offers_tp_theme_css .='text-transform: lowercase;';
$travel_booking_offers_tp_theme_css .='}';
}
else if($travel_booking_offers_menu_text_tranform == 'Capitalize'){
$travel_booking_offers_tp_theme_css .='.main-navigation a {';
	$travel_booking_offers_tp_theme_css .='text-transform: capitalize;';
$travel_booking_offers_tp_theme_css .='}';
}

//sale position
$travel_booking_offers_scroll_position = get_theme_mod( 'travel_booking_offers_sale_tag_position','right');
if($travel_booking_offers_scroll_position == 'right'){
$travel_booking_offers_tp_theme_css .='.woocommerce ul.products li.product .onsale{';
    $travel_booking_offers_tp_theme_css .='right: 25px !important;';
$travel_booking_offers_tp_theme_css .='}';
}else if($travel_booking_offers_scroll_position == 'left'){
$travel_booking_offers_tp_theme_css .='.woocommerce ul.products li.product .onsale{';
    $travel_booking_offers_tp_theme_css .='left: 25px !important; right: auto !important;';
$travel_booking_offers_tp_theme_css .='}';
}

//Font Weight
$travel_booking_offers_menu_font_weight = get_theme_mod( 'travel_booking_offers_menu_font_weight','');
if($travel_booking_offers_menu_font_weight == '100'){
$travel_booking_offers_tp_theme_css .='.main-navigation a{';
    $travel_booking_offers_tp_theme_css .='font-weight: 100;';
$travel_booking_offers_tp_theme_css .='}';
}else if($travel_booking_offers_menu_font_weight == '200'){
$travel_booking_offers_tp_theme_css .='.main-navigation a{';
    $travel_booking_offers_tp_theme_css .='font-weight: 200;';
$travel_booking_offers_tp_theme_css .='}';
}else if($travel_booking_offers_menu_font_weight == '300'){
$travel_booking_offers_tp_theme_css .='.main-navigation a{';
    $travel_booking_offers_tp_theme_css .='font-weight: 300;';
$travel_booking_offers_tp_theme_css .='}';
}else if($travel_booking_offers_menu_font_weight == '400'){
$travel_booking_offers_tp_theme_css .='.main-navigation a{';
    $travel_booking_offers_tp_theme_css .='font-weight: 400;';
$travel_booking_offers_tp_theme_css .='}';
}else if($travel_booking_offers_menu_font_weight == '500'){
$travel_booking_offers_tp_theme_css .='.main-navigation a{';
    $travel_booking_offers_tp_theme_css .='font-weight: 500;';
$travel_booking_offers_tp_theme_css .='}';
}else if($travel_booking_offers_menu_font_weight == '600'){
$travel_booking_offers_tp_theme_css .='.main-navigation a{';
    $travel_booking_offers_tp_theme_css .='font-weight: 600;';
$travel_booking_offers_tp_theme_css .='}';
}else if($travel_booking_offers_menu_font_weight == '700'){
$travel_booking_offers_tp_theme_css .='.main-navigation a{';
    $travel_booking_offers_tp_theme_css .='font-weight: 700;';
$travel_booking_offers_tp_theme_css .='}';
}else if($travel_booking_offers_menu_font_weight == '800'){
$travel_booking_offers_tp_theme_css .='.main-navigation a{';
    $travel_booking_offers_tp_theme_css .='font-weight: 800;';
$travel_booking_offers_tp_theme_css .='}';
}else if($travel_booking_offers_menu_font_weight == '900'){
$travel_booking_offers_tp_theme_css .='.main-navigation a{';
    $travel_booking_offers_tp_theme_css .='font-weight: 900;';
$travel_booking_offers_tp_theme_css .='}';
}

/*------------- Blog Page------------------*/
$travel_booking_offers_post_image_round = get_theme_mod('travel_booking_offers_post_image_round', 0);
if($travel_booking_offers_post_image_round != false){
    $travel_booking_offers_tp_theme_css .='.blog .box-image img{';
        $travel_booking_offers_tp_theme_css .='border-radius: '.esc_attr($travel_booking_offers_post_image_round).'px;';
    $travel_booking_offers_tp_theme_css .='}';
}

$travel_booking_offers_post_image_width = get_theme_mod('travel_booking_offers_post_image_width', '');
if($travel_booking_offers_post_image_width != false){
    $travel_booking_offers_tp_theme_css .='.blog .box-image img{';
        $travel_booking_offers_tp_theme_css .='Width: '.esc_attr($travel_booking_offers_post_image_width).'px;';
    $travel_booking_offers_tp_theme_css .='}';
}

$travel_booking_offers_post_image_length = get_theme_mod('travel_booking_offers_post_image_length', '');
if($travel_booking_offers_post_image_length != false){
    $travel_booking_offers_tp_theme_css .='.blog .box-image img{';
        $travel_booking_offers_tp_theme_css .='height: '.esc_attr($travel_booking_offers_post_image_length).'px;';
    $travel_booking_offers_tp_theme_css .='}';
}

// footer widget title font size
$travel_booking_offers_footer_widget_title_font_size = get_theme_mod('travel_booking_offers_footer_widget_title_font_size', '');{
$travel_booking_offers_tp_theme_css .='#footer h3, #footer h2.wp-block-heading{';
    $travel_booking_offers_tp_theme_css .='font-size: '.esc_attr($travel_booking_offers_footer_widget_title_font_size).'px;';
$travel_booking_offers_tp_theme_css .='}';
}

// Copyright text font size
$travel_booking_offers_footer_copyright_font_size = get_theme_mod('travel_booking_offers_footer_copyright_font_size', '');{
$travel_booking_offers_tp_theme_css .='#footer .site-info p{';
    $travel_booking_offers_tp_theme_css .='font-size: '.esc_attr($travel_booking_offers_footer_copyright_font_size).'px;';
$travel_booking_offers_tp_theme_css .='}';
}

// copyright padding
$travel_booking_offers_footer_copyright_top_bottom_padding = get_theme_mod('travel_booking_offers_footer_copyright_top_bottom_padding', '');
if ($travel_booking_offers_footer_copyright_top_bottom_padding !== '') { 
    $travel_booking_offers_tp_theme_css .= '.site-info {';
    $travel_booking_offers_tp_theme_css .= 'padding-top: ' . esc_attr($travel_booking_offers_footer_copyright_top_bottom_padding) . 'px;';
    $travel_booking_offers_tp_theme_css .= 'padding-bottom: ' . esc_attr($travel_booking_offers_footer_copyright_top_bottom_padding) . 'px;';
    $travel_booking_offers_tp_theme_css .= '}';
}

// copyright position
$travel_booking_offers_copyright_text_position = get_theme_mod( 'travel_booking_offers_copyright_text_position','Center');
if($travel_booking_offers_copyright_text_position == 'Center'){
$travel_booking_offers_tp_theme_css .='#footer .site-info p{';
$travel_booking_offers_tp_theme_css .='text-align:center;';
$travel_booking_offers_tp_theme_css .='}';
}else if($travel_booking_offers_copyright_text_position == 'Left'){
$travel_booking_offers_tp_theme_css .='#footer .site-info p{';
$travel_booking_offers_tp_theme_css .='text-align:left;';
$travel_booking_offers_tp_theme_css .='}';
}else if($travel_booking_offers_copyright_text_position == 'Right'){
$travel_booking_offers_tp_theme_css .='#footer .site-info p{';
$travel_booking_offers_tp_theme_css .='text-align:right;';
$travel_booking_offers_tp_theme_css .='}';
}

// Header Image title font size
$travel_booking_offers_header_image_title_font_size = get_theme_mod('travel_booking_offers_header_image_title_font_size', '40');{
$travel_booking_offers_tp_theme_css .='.box-text h2{';
    $travel_booking_offers_tp_theme_css .='font-size: '.esc_attr($travel_booking_offers_header_image_title_font_size).'px;';
$travel_booking_offers_tp_theme_css .='}';
}

// header
$travel_booking_offers_slider_arrows = get_theme_mod('travel_booking_offers_slider_arrows', true);
if($travel_booking_offers_slider_arrows == false){
$travel_booking_offers_tp_theme_css .='.page-template-front-page .headerbox{';
    $travel_booking_offers_tp_theme_css .='position:static;background:var(--color-primary1); padding-bottom:20px;';
$travel_booking_offers_tp_theme_css .='}';
$travel_booking_offers_tp_theme_css .='.main-contact-form .container{';
    $travel_booking_offers_tp_theme_css .='margin-top:30px;';
$travel_booking_offers_tp_theme_css .='}';
$travel_booking_offers_tp_theme_css .='.main-tab .tablinks{';
    $travel_booking_offers_tp_theme_css .='color:#000;';
$travel_booking_offers_tp_theme_css .='}';
}


/*--------------------------- banner image Opacity -------------------*/
    $travel_booking_offers_theme_lay = get_theme_mod( 'travel_booking_offers_header_banner_opacity_color','0.5');
        if($travel_booking_offers_theme_lay == '0'){
            $travel_booking_offers_tp_theme_css .='.single-page-img, .featured-image{';
                $travel_booking_offers_tp_theme_css .='opacity:0';
            $travel_booking_offers_tp_theme_css .='}';
        }else if($travel_booking_offers_theme_lay == '0.1'){
            $travel_booking_offers_tp_theme_css .='.single-page-img, .featured-image{';
                $travel_booking_offers_tp_theme_css .='opacity:0.1';
            $travel_booking_offers_tp_theme_css .='}';
        }else if($travel_booking_offers_theme_lay == '0.2'){
            $travel_booking_offers_tp_theme_css .='.single-page-img, .featured-image{';
                $travel_booking_offers_tp_theme_css .='opacity:0.2';
            $travel_booking_offers_tp_theme_css .='}';
        }else if($travel_booking_offers_theme_lay == '0.3'){
            $travel_booking_offers_tp_theme_css .='.single-page-img, .featured-image{';
                $travel_booking_offers_tp_theme_css .='opacity:0.3';
            $travel_booking_offers_tp_theme_css .='}';
        }else if($travel_booking_offers_theme_lay == '0.4'){
            $travel_booking_offers_tp_theme_css .='.single-page-img, .featured-image{';
                $travel_booking_offers_tp_theme_css .='opacity:0.4';
            $travel_booking_offers_tp_theme_css .='}';
        }else if($travel_booking_offers_theme_lay == '0.5'){
            $travel_booking_offers_tp_theme_css .='.single-page-img, .featured-image{';
                $travel_booking_offers_tp_theme_css .='opacity:0.5';
            $travel_booking_offers_tp_theme_css .='}';
        }else if($travel_booking_offers_theme_lay == '0.6'){
            $travel_booking_offers_tp_theme_css .='.single-page-img, .featured-image{';
                $travel_booking_offers_tp_theme_css .='opacity:0.6';
            $travel_booking_offers_tp_theme_css .='}';
        }else if($travel_booking_offers_theme_lay == '0.7'){
            $travel_booking_offers_tp_theme_css .='.single-page-img, .featured-image{';
                $travel_booking_offers_tp_theme_css .='opacity:0.7';
            $travel_booking_offers_tp_theme_css .='}';
        }else if($travel_booking_offers_theme_lay == '0.8'){
            $travel_booking_offers_tp_theme_css .='.single-page-img, .featured-image{';
                $travel_booking_offers_tp_theme_css .='opacity:0.8';
            $travel_booking_offers_tp_theme_css .='}';
        }else if($travel_booking_offers_theme_lay == '0.9'){
            $travel_booking_offers_tp_theme_css .='.single-page-img, .featured-image{';
                $travel_booking_offers_tp_theme_css .='opacity:0.9';
            $travel_booking_offers_tp_theme_css .='}';
        }else if($travel_booking_offers_theme_lay == '1'){
            $travel_booking_offers_tp_theme_css .='#main-slider img{';
                $travel_booking_offers_tp_theme_css .='opacity:1';
            $travel_booking_offers_tp_theme_css .='}';
        }

    $travel_booking_offers_header_banner_image_overlay = get_theme_mod('travel_booking_offers_header_banner_image_overlay', true);
    if($travel_booking_offers_header_banner_image_overlay == false){
        $travel_booking_offers_tp_theme_css .='.single-page-img, .featured-image{';
            $travel_booking_offers_tp_theme_css .='opacity:1;';
        $travel_booking_offers_tp_theme_css .='}';
    }

    $travel_booking_offers_header_banner_image_ooverlay_color = get_theme_mod('travel_booking_offers_header_banner_image_ooverlay_color', true);
    if($travel_booking_offers_header_banner_image_ooverlay_color != false){
        $travel_booking_offers_tp_theme_css .='.box-image-page{';
            $travel_booking_offers_tp_theme_css .='background-color: '.esc_attr($travel_booking_offers_header_banner_image_ooverlay_color).';';
        $travel_booking_offers_tp_theme_css .='}';
    }

    // Slider Height
    $travel_booking_offers_slider_img_height      = get_theme_mod('travel_booking_offers_slider_img_height');
    $travel_booking_offers_slider_img_height_resp = get_theme_mod('travel_booking_offers_slider_img_height_responsive');

    // Desktop height
    $travel_booking_offers_tp_theme_css .= '@media screen and (min-width: 768px) {';
    $travel_booking_offers_tp_theme_css .= '#slider img, .img-box::before {';
    if ( $travel_booking_offers_slider_img_height ) {
        $travel_booking_offers_tp_theme_css .= 'height: ' . esc_attr( $travel_booking_offers_slider_img_height ) . ';';
    }
    $travel_booking_offers_tp_theme_css .= 'width: 100%; object-fit: cover;';
    $travel_booking_offers_tp_theme_css .= '}';
    $travel_booking_offers_tp_theme_css .= '}';

    // Mobile height
    $travel_booking_offers_tp_theme_css .= '@media screen and (max-width: 767px) {';
    $travel_booking_offers_tp_theme_css .= '#slider img, .img-box::before {';
    if ( $travel_booking_offers_slider_img_height_resp ) {
        $travel_booking_offers_tp_theme_css .= 'height: ' . esc_attr( $travel_booking_offers_slider_img_height_resp ) . ' !important;';
    }
    $travel_booking_offers_tp_theme_css .= 'width: 100%; object-fit: cover;';
    $travel_booking_offers_tp_theme_css .= '}';
    $travel_booking_offers_tp_theme_css .= '}';

    //First Cap ( Blog Post )
    $travel_booking_offers_show_first_caps = get_theme_mod('travel_booking_offers_show_first_caps', 'false');
    if($travel_booking_offers_show_first_caps == 'true' ){
    $travel_booking_offers_tp_theme_css .='.blog .page-box p:nth-of-type(1)::first-letter{';
    $travel_booking_offers_tp_theme_css .=' font-size: 55px; font-weight: 600;';
    $travel_booking_offers_tp_theme_css .=' margin-right: 6px;';
    $travel_booking_offers_tp_theme_css .=' line-height: 1;';
    $travel_booking_offers_tp_theme_css .='}';
    }elseif($travel_booking_offers_show_first_caps == 'false' ){
    $travel_booking_offers_tp_theme_css .='.blog .page-box p:nth-of-type(1)::first-letter {';
    $travel_booking_offers_tp_theme_css .='display: none;';
    $travel_booking_offers_tp_theme_css .='}';
    }

    // Menu hover effect
    $travel_booking_offers_menus_item = get_theme_mod( 'travel_booking_offers_menus_item_style','None');
    if($travel_booking_offers_menus_item == 'None'){
        $travel_booking_offers_tp_theme_css .='.main-navigation a:hover{';
            $travel_booking_offers_tp_theme_css .='';
        $travel_booking_offers_tp_theme_css .='}';
    }else if($travel_booking_offers_menus_item == 'Zoom In'){
        $travel_booking_offers_tp_theme_css .='.main-navigation a:hover{';
            $travel_booking_offers_tp_theme_css .='transition: all 0.3s ease-in-out !important; transform: scale(1.2) !important;';
        $travel_booking_offers_tp_theme_css .='}';
    }
