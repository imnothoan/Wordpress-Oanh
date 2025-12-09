<?php

	$real_estate_developer_custom_css= "";

	/*-------------------- Highlight Color -------------------*/

	$real_estate_developer_first_color = get_theme_mod('real_estate_developer_first_color');
	$real_estate_developer_second_color = get_theme_mod('real_estate_developer_second_color');

	if($real_estate_developer_first_color != false){
		$real_estate_developer_custom_css .='#sidebar .wp-block-tag-cloud a:hover, .header-fixed.header-sticky.main-header, #footer, .custom-about-us a.custom_read_more, #footer .wp-block-tag-cloud a:hover, table.compare-list .add-to-cart td a:not(.unstyled_button), .main-navigation ul.sub-menu > li > a:hover, .main-navigation ul.sub-menu > li > a:focus, .main-navigation ul.children > li > a:hover, .main-navigation ul.children > li > a:focus, .main-header, #category-section .property-content .img-blank, .more-btn a , #comments input[type="submit"],#comments a.comment-reply-link,input[type="submit"],.woocommerce #respond input#submit, .woocommerce button.button, .woocommerce input.button,.woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt,.pro-button a, .woocommerce a.added_to_cart.wc-forward, .single-product .woocommerce-notices-wrapper .woocommerce-message .button.wc-forward, .single-product .yith-add-to-wishlist-button-block .yith-wcwl-add-to-wishlist-button, #preloader, #footer-2, #footer .wp-block-search .wp-block-search__button, #sidebar .wp-block-search .wp-block-search__button, .copyright .custom-social-icons i:hover, .bradcrumbs a, .post-categories li a, nav.navigation.posts-navigation .nav-previous a, nav.navigation.posts-navigation .nav-next a, #sidebar .custom-social-icons a, #sidebar .custom-social-icons a:hover, #footer .custom-social-icons a:hover, #sidebar h3:before,#sidebar .widget_block h3:before, #sidebar h2:before, #sidebar label.wp-block-search__label:before, #sidebar .tagcloud a:hover, .pagination span, .pagination a, .post-nav-links span, .post-nav-links a, .woocommerce span.onsale, nav.woocommerce-MyAccount-navigation ul li, nav.woocommerce-MyAccount-navigation ul li:hover, .woocommerce ul.products li.product .button, .woocommerce a.added_to_cart.wc-forward,a.added_to_cart.wc-forward, .wishlist-items-wrapper .product-add-to-cart a, .wishlist_table.mobile .product-add-to-cart a, a.button.product_type_simple.add_to_cart_button.ajax_add_to_cart, .woocommerce-cart .wc-block-grid__product-onsale,.woocommerce-cart .wc-block-grid .wc-block-grid__product-onsale, .wp-block-woocommerce-cart .wc-block-cart__submit-button,a.wc-block-components-checkout-return-to-cart-button, .wc-block-components-checkout-place-order-button, .wc-block-components-totals-coupon__button, .wp-block-woocommerce-cart .wc-block-cart__submit-button:hover, .wc-block-components-checkout-place-order-button:hover,a.wc-block-components-checkout-return-to-cart-button:hover, .wc-block-components-totals-coupon__button:hover, .search-form .search-submit, header.woocommerce-Address-title.title a, #tag-cloud-sec .tag-cloud-link{';
			$real_estate_developer_custom_css .='background-color: '.esc_attr($real_estate_developer_first_color).';';
		$real_estate_developer_custom_css .='}';
	}

	if($real_estate_developer_first_color != false){
		$real_estate_developer_custom_css .='.ere-property-wrap .property-tab .nav-item .nav-link.active, .woocommerce-pagination .page-numbers.current, .woocommerce-pagination a.page-numbers:hover, header.woocommerce-Address-title.title a:hover,#tag-cloud-sec .tag-cloud-link:hover,.wc-block-grid__product-add-to-cart.wp-block-button .wp-block-button__link:hover, #sidebar ul li::before, .wp-block-woocommerce-cart .wc-block-components-product-badge, .wc-block-components-order-summary-item__quantity, header.woocommerce-Address-title.title a:hover,#tag-cloud-sec .tag-cloud-link:hover,.wc-block-grid__product-add-to-cart.wp-block-button .wp-block-button__link:hover{';
			$real_estate_developer_custom_css .='background-color: '.esc_attr($real_estate_developer_first_color).'!important;';
		$real_estate_developer_custom_css .='}';
	}

	if($real_estate_developer_first_color != false){
		$real_estate_developer_custom_css .='a:hover, .sticky .post-main-box h2:before, #category-section .category-sec-content .section-title, #category-section .property-content .property-price, #category-section .property-content .property-meta-content p, #category-section .property-text .property-title, .ere-archive-property-wrap .ere-item-wrap .property-type-list a, .ere-archive-property-wrap .ere-item-wrap .property-date, #sidebar .widget_text p a, #sidebar .wp-block-heading a, .post-main-box:hover h2 a, .post-main-box:hover .post-info span a, .single-post .post-info:hover a, .middle-bar h6, .grid-post-main-box:hover h2 a, .grid-post-main-box:hover .post-info span a, #sidebar ul li:hover, .woocommerce-error::before, .pagination a:hover, .pagination .current, .post-navigation span.meta-nav, .post-navigation span.meta-nav:hover, .yith-wcwl-wishlistaddedbrowse span.feedback, .yith-wcwl-wishlistexistsbrowse span.feedback, .wishlist_table .product-name a, .wishlist_table.mobile .product-name a, .woocommerce-message::before,.woocommerce-info::before{';
			$real_estate_developer_custom_css .='color: '.esc_attr($real_estate_developer_first_color).';';
		$real_estate_developer_custom_css .='}';
	}

	if($real_estate_developer_first_color != false){
		$real_estate_developer_custom_css .='.tags-bg a:hover, #footer .custom-social-icons a:hover{';
			$real_estate_developer_custom_css .='color: '.esc_attr($real_estate_developer_first_color).'!important;';
		$real_estate_developer_custom_css .='}';
	}

	if($real_estate_developer_first_color != false){
		$real_estate_developer_custom_css .='#footer .wp-block-search .wp-block-search__button, #sidebar .wp-block-search .wp-block-search__button, .post-main-box, .grid-post-main-box, .bradcrumbs a, .post-categories li a, #sidebar .widget, .pagination span, .pagination a, .post-nav-links span, .post-nav-links a{';
			$real_estate_developer_custom_css .='border-color: '.esc_attr($real_estate_developer_first_color).';';
		$real_estate_developer_custom_css .='}';
	}

	if($real_estate_developer_first_color != false){
		$real_estate_developer_custom_css .='#footer .custom-social-icons a:hover{';
			$real_estate_developer_custom_css .='outline: 6px double '.esc_attr($real_estate_developer_first_color).';';
		$real_estate_developer_custom_css .='}';
	}

	if($real_estate_developer_first_color != false){
		$real_estate_developer_custom_css .='#sidebar .widget{';
			$real_estate_developer_custom_css .='border-bottom-color: '.esc_attr($real_estate_developer_first_color).';';
		$real_estate_developer_custom_css .='}';
	}

	if($real_estate_developer_first_color != false){
		$real_estate_developer_custom_css .='#sidebar .widget, .woocommerce-error, .woocommerce-message,.woocommerce-info{';
			$real_estate_developer_custom_css .='border-top-color: '.esc_attr($real_estate_developer_first_color).';';
		$real_estate_developer_custom_css .='}';
	}

	if($real_estate_developer_first_color != false){
		$real_estate_developer_custom_css .='#sidebar .widget{';
			$real_estate_developer_custom_css .='border-right-color: '.esc_attr($real_estate_developer_first_color).';';
		$real_estate_developer_custom_css .='}';
	}

	if($real_estate_developer_first_color != false){
		$real_estate_developer_custom_css .='#sidebar .widget{';
			$real_estate_developer_custom_css .='border-left-color: '.esc_attr($real_estate_developer_first_color).';';
		$real_estate_developer_custom_css .='}';
	}

	if($real_estate_developer_first_color != false){
		$real_estate_developer_custom_css .='@media screen and (max-width:1000px) {';
			$real_estate_developer_custom_css .='.sidenav .closebtn{';
				$real_estate_developer_custom_css .='background-color: '.esc_attr($real_estate_developer_first_color).';';
			$real_estate_developer_custom_css .='}';
		$real_estate_developer_custom_css .='}';
	}

	// Second color
	if($real_estate_developer_second_color != false){
		$real_estate_developer_custom_css .='#comments input[type="submit"]:hover, .woocommerce #respond input#submit:hover, .woocommerce a.button:hover, .woocommerce button.button:hover, .woocommerce input.button:hover,.woocommerce #respond input#submit.alt:hover, .woocommerce a.button.alt:hover, .woocommerce button.button.alt:hover, .woocommerce input.button.alt:hover,.widget_product_search button:hover, .woocommerce button.button:disabled:hover, .woocommerce button.button:disabled[disabled]:hover, .single-product .woocommerce-notices-wrapper .woocommerce-message .button.wc-forward:hover, #sidebar .wp-block-search .wp-block-search__button:hover, .main-header .topbar-btn a, #banner-sec .banner-img .banner-sun, #banner-sec .banner-content .banner-btn a:hover, #banner-sec .phone-box .phone-content i, #category-section .property-type p, #category-section .property-content:hover .property-view-btn a, .post-nav-links span:hover, .post-nav-links a:hover, #comments input[type="submit"]:hover, .more-btn a:hover,#footer .tagcloud a:hover, .pro-button a:hover, #comments a.comment-reply-link:hover, #footer .tagcloud a:hover, .scrollup i, .bradcrumbs a:hover, .post-categories li a:hover, .bradcrumbs span, a.added_to_cart.wc-forward:hover, a.button.product_type_simple.add_to_cart_button.ajax_add_to_cart:hover, .woocommerce ul.products li.product .button:hover{';
			$real_estate_developer_custom_css .='background-color: '.esc_attr($real_estate_developer_second_color).';';
		$real_estate_developer_custom_css .='}';
	}

	if($real_estate_developer_second_color != false){
		$real_estate_developer_custom_css .='.single-property-area .ere-heading-style2 h2:after, .single-property-area .ere-heading:after, .single-property-area .property-info-tabs .nav-link, .single-property-area .ere__single-property-contact-agent .btn.btn-primary, .search-properties-form .ui-slider-range, .search-properties-form .ui-slider-handle, .search-properties-form .submit-search-form .ere-advanced-search-btn, .single-property-area .ere__single-property-action .ere__loop-property_action-item:hover, .single-property-area .ere__single-property-social-share .social-share-list, .ere-archive-property-wrap .view-as-grid.active, .ere-archive-property-wrap .view-as-list.active, .ere-archive-property-wrap .view-as-grid:hover, .ere-archive-property-wrap .view-as-list:hover, .ere-archive-property-wrap .ere-item-wrap .ere__loop-property-info, .ere-archive-property-wrap .ere-item-wrap .property-action a, .ere-archive-property-wrap .above-archive-property .ere-heading:after, #compare-listings .compare-thumb-main .compare-property-remove, #compare-properties-listings .listing-btn, #compare-properties-listings .compare-properties-button, .single-agent .contact-agent .ere-heading-style2 h2:after, .single-agent .contact-agent .ere__btn-submit-contact-form, .single-agent .ere_single-agent-info .ere__single-agent-social a:hover, .single-property-area .ere__single-property-contact-agent .ere__single-agent-social a:hover, .single-agent .ere_single-agent-info .ere__single-agent-avatar a, .single-agent .ere__single-agent-property .ere-heading:after, .single-agent .ere__single-agent-property .property-info-inner, .single-agent .ere__single-agent-property .property-item .property-action a{';
			$real_estate_developer_custom_css .='background-color: '.esc_attr($real_estate_developer_second_color).' !important;';
		$real_estate_developer_custom_css .='}';
	}

	if($real_estate_developer_second_color != false){
		$real_estate_developer_custom_css .='#banner-sec .banner-img .banner-sun{';
			$real_estate_developer_custom_css .='box-shadow: 0px 0px 0px 15px '.esc_attr($real_estate_developer_second_color).';';
		$real_estate_developer_custom_css .='}';
	}

	if($real_estate_developer_second_color != false){
		$real_estate_developer_custom_css .='#sidebar .wp-block-search .wp-block-search__button:hover, #banner-sec .banner-content .banner-btn a, #category-section .property-content .property-view-btn a, #category-section .form-select, .single-property-area .ere__single-property-contact-agent .btn.btn-primary, #compare-properties-listings .listing-btn, #compare-properties-listings .compare-properties-button, .single-agent .contact-agent .ere__btn-submit-contact-form, .single-agent .ere_single-agent-info .ere__single-agent-avatar a, #footer .tagcloud a:hover, .bradcrumbs a:hover, .post-categories li a:hover, .bradcrumbs span{';
			$real_estate_developer_custom_css .='border-color: '.esc_attr($real_estate_developer_second_color).';';
		$real_estate_developer_custom_css .='}';
	}

	if($real_estate_developer_second_color != false){
		$real_estate_developer_custom_css .='.ere-archive-property-wrap .ere__apa-switch-layout span.active:before, .ere-archive-property-wrap .ere__apa-switch-layout span:hover:before{';
			$real_estate_developer_custom_css .='border-top-color: '.esc_attr($real_estate_developer_second_color).' !important;';
		$real_estate_developer_custom_css .='}';
	}

	if($real_estate_developer_second_color != false){
		$real_estate_developer_custom_css .='.ere-archive-property-wrap .ere__apa-switch-layout span.active:before, .ere-archive-property-wrap .ere__apa-switch-layout span:hover:before{';
			$real_estate_developer_custom_css .='border-bottom-color: '.esc_attr($real_estate_developer_second_color).' !important;';
		$real_estate_developer_custom_css .='}';
	}

	if($real_estate_developer_second_color != false){
		$real_estate_developer_custom_css .='#banner-sec .banner-content .banner-btn a i, #category-section .property-content i, #footer .footer-block .wp-block-heading a, #footer .footer-block .widget_text p a, #content-vw a,.entry-content a,.widget_text a,.woocommerce-page .entry-summary a,.comment-content p a{';
			$real_estate_developer_custom_css .='color: '.esc_attr($real_estate_developer_second_color).';';
		$real_estate_developer_custom_css .='}';
	}

	if($real_estate_developer_second_color != false){
		$real_estate_developer_custom_css .='.main-navigation .current_page_item > a, .main-navigation .current-menu-item > a, .single-property-area .ere__single-property-info i, .single-property-area .ere__single-property-location i, .single-property-area .open-on-google-maps, .single-property-area .open-on-google-maps i, .single-property-area .ere__single-property-info-footer .ere-property-element i, .ere-archive-property-wrap .ere-item-wrap .property-type-list i, .ere-archive-property-wrap .ere-item-wrap .property-date i, .single-agent .agent-contact i, .single-agent .ere__single-agent-property .property-item-content .property-element-inline i, .ere__single-property .ere__agent-content .ere__single-agent-contact-info i{';
			$real_estate_developer_custom_css .='color: '.esc_attr($real_estate_developer_second_color).' !important;';
		$real_estate_developer_custom_css .='}';
	}

	if($real_estate_developer_second_color != false){
		$real_estate_developer_custom_css .='@media screen and (max-width:1000px) {';
			$real_estate_developer_custom_css .='.toggle-nav i{';
				$real_estate_developer_custom_css .='background-color: '.esc_attr($real_estate_developer_second_color).';';
			$real_estate_developer_custom_css .='}';
		$real_estate_developer_custom_css .='}';
	}

	/*---------------------------Width Layout -------------------*/

	$real_estate_developer_theme_lay = get_theme_mod( 'real_estate_developer_width_option','Full Width');
    if($real_estate_developer_theme_lay == 'Boxed'){
		$real_estate_developer_custom_css .='body{';
			$real_estate_developer_custom_css .='max-width: 1140px; width: 100%; margin-right: auto; margin-left: auto;';
		$real_estate_developer_custom_css .='}';
		$real_estate_developer_custom_css .='.scrollup i{';
			$real_estate_developer_custom_css .='right: 100px;';
		$real_estate_developer_custom_css .='}';
		$real_estate_developer_custom_css .='.row.outer-logo{';
			$real_estate_developer_custom_css .='margin-left: 0px;';
		$real_estate_developer_custom_css .='}';
	}else if($real_estate_developer_theme_lay == 'Wide Width'){
		$real_estate_developer_custom_css .='body{';
			$real_estate_developer_custom_css .='width: 100%;padding-right: 15px;padding-left: 15px;margin-right: auto;margin-left: auto;';
		$real_estate_developer_custom_css .='}';
		$real_estate_developer_custom_css .='.scrollup i{';
			$real_estate_developer_custom_css .='right: 30px;';
		$real_estate_developer_custom_css .='}';
		$real_estate_developer_custom_css .='.row.outer-logo{';
			$real_estate_developer_custom_css .='margin-left: 0px;';
		$real_estate_developer_custom_css .='}';
	}else if($real_estate_developer_theme_lay == 'Full Width'){
		$real_estate_developer_custom_css .='body{';
			$real_estate_developer_custom_css .='max-width: 100%;';
		$real_estate_developer_custom_css .='}';
	}

	/*-------------- Sticky Header Padding ----------------*/

	$real_estate_developer_sticky_header_padding = get_theme_mod('real_estate_developer_sticky_header_padding');
	if($real_estate_developer_sticky_header_padding != false){
		$real_estate_developer_custom_css .='.header-fixed{';
			$real_estate_developer_custom_css .='padding: '.esc_attr($real_estate_developer_sticky_header_padding).';';
		$real_estate_developer_custom_css .='}';
	}

	$real_estate_developer_resp_stickyheader = get_theme_mod( 'real_estate_developer_stickyheader_hide_show',false);
	if($real_estate_developer_resp_stickyheader == true && get_theme_mod( 'real_estate_developer_sticky_header',false) != true){
    	$real_estate_developer_custom_css .='.header-fixed.header-sticky.main-header{';
			$real_estate_developer_custom_css .='position:static;';
		$real_estate_developer_custom_css .='} ';
	}
    if($real_estate_developer_resp_stickyheader == true){
    	$real_estate_developer_custom_css .='@media screen and (max-width:575px) {';
		$real_estate_developer_custom_css .='.header-fixed.header-sticky.main-header{';
			$real_estate_developer_custom_css .='position:fixed;';
		$real_estate_developer_custom_css .='} }';
	}else if($real_estate_developer_resp_stickyheader == false){
		$real_estate_developer_custom_css .='@media screen and (max-width:575px){';
		$real_estate_developer_custom_css .='.header-fixed.header-sticky.main-header{';
			$real_estate_developer_custom_css .='position:static;';
		$real_estate_developer_custom_css .='} }';
	}

	$real_estate_developer_responsive_preloader_hide = get_theme_mod('real_estate_developer_responsive_preloader_hide',false);
	if($real_estate_developer_responsive_preloader_hide == true && get_theme_mod('real_estate_developer_loader_enable',false) == false){
		$real_estate_developer_custom_css .='@media screen and (min-width:575px){
			#preloader{';
			$real_estate_developer_custom_css .='display:none !important;';
		$real_estate_developer_custom_css .='} }';
	}

	if($real_estate_developer_responsive_preloader_hide == false){
		$real_estate_developer_custom_css .='@media screen and (max-width:575px){
			#preloader{';
			$real_estate_developer_custom_css .='display:none !important;';
		$real_estate_developer_custom_css .='} }';
	}

	$real_estate_developer_resp_sidebar = get_theme_mod( 'real_estate_developer_sidebar_hide_show',true);
    if($real_estate_developer_resp_sidebar == true){
    	$real_estate_developer_custom_css .='@media screen and (max-width:575px) {';
		$real_estate_developer_custom_css .='#sidebar{';
			$real_estate_developer_custom_css .='display:block;';
		$real_estate_developer_custom_css .='} }';
	}else if($real_estate_developer_resp_sidebar == false){
		$real_estate_developer_custom_css .='@media screen and (max-width:575px) {';
		$real_estate_developer_custom_css .='#sidebar{';
			$real_estate_developer_custom_css .='display:none;';
		$real_estate_developer_custom_css .='} }';
	}
	$real_estate_developer_resp_scroll_top = get_theme_mod( 'real_estate_developer_resp_scroll_top_hide_show',true);
	if($real_estate_developer_resp_scroll_top == true && get_theme_mod( 'real_estate_developer_hide_show_scroll',true) == false){
    	$real_estate_developer_custom_css .='.scrollup i{';
			$real_estate_developer_custom_css .='visibility:hidden !important;';
		$real_estate_developer_custom_css .='} ';
	}
    if($real_estate_developer_resp_scroll_top == true){
    	$real_estate_developer_custom_css .='@media screen and (max-width:575px) {';
		$real_estate_developer_custom_css .='.scrollup i{';
			$real_estate_developer_custom_css .='visibility:visible !important;';
		$real_estate_developer_custom_css .='} }';
	}else if($real_estate_developer_resp_scroll_top == false){
		$real_estate_developer_custom_css .='@media screen and (max-width:575px){';
		$real_estate_developer_custom_css .='.scrollup i{';
			$real_estate_developer_custom_css .='visibility:hidden !important;';
		$real_estate_developer_custom_css .='} }';
	}

	/*------------- Slider Content Padding Settings ------------------*/

	$real_estate_developer_slider_content_padding_top_bottom = get_theme_mod('real_estate_developer_slider_content_padding_top_bottom');
	$real_estate_developer_slider_content_padding_left_right = get_theme_mod('real_estate_developer_slider_content_padding_left_right');
	if($real_estate_developer_slider_content_padding_top_bottom != false || $real_estate_developer_slider_content_padding_left_right != false){
		$real_estate_developer_custom_css .='#slider .carousel-caption{';
			$real_estate_developer_custom_css .='top: '.esc_attr($real_estate_developer_slider_content_padding_top_bottom).'; bottom: '.esc_attr($real_estate_developer_slider_content_padding_top_bottom).';left: '.esc_attr($real_estate_developer_slider_content_padding_left_right).';right: '.esc_attr($real_estate_developer_slider_content_padding_left_right).';';
		$real_estate_developer_custom_css .='}';
	}
	
	/*-------------- Copyright Alignment ----------------*/

	$real_estate_developer_copyright_alingment = get_theme_mod('real_estate_developer_copyright_alingment');
	if($real_estate_developer_copyright_alingment != false){
		$real_estate_developer_custom_css .='.copyright p{';
			$real_estate_developer_custom_css .='text-align: '.esc_attr($real_estate_developer_copyright_alingment).';';
		$real_estate_developer_custom_css .='}';
		$real_estate_developer_custom_css .='
		@media screen and (max-width:720px) {
			.copyright p{';
			$real_estate_developer_custom_css .='text-align: center;} }';
	}

	$real_estate_developer_align_footer_social_icon = get_theme_mod('real_estate_developer_align_footer_social_icon');
	if($real_estate_developer_align_footer_social_icon != false){
		$real_estate_developer_custom_css .='.copyright .widget{';
			$real_estate_developer_custom_css .='text-align: '.esc_attr($real_estate_developer_align_footer_social_icon).';';
		$real_estate_developer_custom_css .='}';
		$real_estate_developer_custom_css .='
		@media screen and (max-width:720px) {
			.copyright .widget{';
			$real_estate_developer_custom_css .='text-align: center;} }';
	}

	$real_estate_developer_resp_stickycopyright = get_theme_mod( 'real_estate_developer_stickycopyright_hide_show',false);
	if($real_estate_developer_resp_stickycopyright == true && get_theme_mod( 'real_estate_developer_copyright_sticky',false) != true){
    	$real_estate_developer_custom_css .='.copyright-sticky{';
			$real_estate_developer_custom_css .='position:static;';
		$real_estate_developer_custom_css .='} ';
	}

	$real_estate_developer_footer_social_icons_font_size = get_theme_mod('real_estate_developer_footer_social_icons_font_size','16');
	$real_estate_developer_custom_css .='.copyright .widget i{';
		$real_estate_developer_custom_css .='font-size: '.esc_attr($real_estate_developer_footer_social_icons_font_size).'px;';
	$real_estate_developer_custom_css .='}';

	$real_estate_developer_footer_background_color = get_theme_mod('real_estate_developer_footer_background_color');
	if($real_estate_developer_footer_background_color != false){
		$real_estate_developer_custom_css .='#footer{';
			$real_estate_developer_custom_css .='background-color: '.esc_attr($real_estate_developer_footer_background_color).';';
		$real_estate_developer_custom_css .='}';
	}

	/*------------- Preloader Background Color  -------------------*/

	$real_estate_developer_preloader_bg_color = get_theme_mod('real_estate_developer_preloader_bg_color');
	if($real_estate_developer_preloader_bg_color != false){
		$real_estate_developer_custom_css .='#preloader{';
			$real_estate_developer_custom_css .='background-color: '.esc_attr($real_estate_developer_preloader_bg_color).';';
		$real_estate_developer_custom_css .='}';
	}

	$real_estate_developer_preloader_border_color = get_theme_mod('real_estate_developer_preloader_border_color');
	if($real_estate_developer_preloader_border_color != false){
		$real_estate_developer_custom_css .='.loader-line{';
			$real_estate_developer_custom_css .='border-color: '.esc_attr($real_estate_developer_preloader_border_color).'!important;';
		$real_estate_developer_custom_css .='}';
	}

	$real_estate_developer_preloader_bg_img = get_theme_mod('real_estate_developer_preloader_bg_img');
	if($real_estate_developer_preloader_bg_img != false){
		$real_estate_developer_custom_css .='#preloader{';
			$real_estate_developer_custom_css .='background: url('.esc_attr($real_estate_developer_preloader_bg_img).');-webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover;';
		$real_estate_developer_custom_css .='}';
	}

	/*---------------------- Slider Image Overlay ------------------------*/

	$real_estate_developer_slider_image_overlay = get_theme_mod('real_estate_developer_slider_image_overlay', true);
	if($real_estate_developer_slider_image_overlay == false){
		$real_estate_developer_custom_css .='#slider img{';
			$real_estate_developer_custom_css .='opacity:1;';
		$real_estate_developer_custom_css .='}';
	}

	$real_estate_developer_slider_image_overlay_color = get_theme_mod('real_estate_developer_slider_image_overlay_color', true);
	if($real_estate_developer_slider_image_overlay_color != false){
		$real_estate_developer_custom_css .='#slider{';
			$real_estate_developer_custom_css .='background-color: '.esc_attr($real_estate_developer_slider_image_overlay_color).';';
		$real_estate_developer_custom_css .='}';
	}

	$real_estate_developer_copyright_background_color = get_theme_mod('real_estate_developer_copyright_background_color');
	if($real_estate_developer_copyright_background_color != false){
		$real_estate_developer_custom_css .='#footer-2{';
			$real_estate_developer_custom_css .='background-color: '.esc_attr($real_estate_developer_copyright_background_color).';';
		$real_estate_developer_custom_css .='}';
	}

	$real_estate_developer_footer_background_image = get_theme_mod('real_estate_developer_footer_background_image');
	if($real_estate_developer_footer_background_image != false){
		$real_estate_developer_custom_css .='#footer{';
			$real_estate_developer_custom_css .='background: url('.esc_attr($real_estate_developer_footer_background_image).')no-repeat;background-size:cover';
		$real_estate_developer_custom_css .='}';
	}

	$real_estate_developer_theme_lay = get_theme_mod( 'real_estate_developer_img_footer','scroll');
	if($real_estate_developer_theme_lay == 'fixed'){
		$real_estate_developer_custom_css .='#footer{';
			$real_estate_developer_custom_css .='background-attachment: fixed !important; background-position: center !important;';
		$real_estate_developer_custom_css .='}';
	}elseif ($real_estate_developer_theme_lay == 'scroll'){
		$real_estate_developer_custom_css .='#footer{';
			$real_estate_developer_custom_css .='background-attachment: scroll !important; background-position: center !important;';
		$real_estate_developer_custom_css .='}';
	}

	$real_estate_developer_footer_img_position = get_theme_mod('real_estate_developer_footer_img_position','center center');
	if($real_estate_developer_footer_img_position != false){
		$real_estate_developer_custom_css .='#footer{';
			$real_estate_developer_custom_css .='background-position: '.esc_attr($real_estate_developer_footer_img_position).'!important;';
		$real_estate_developer_custom_css .='}';
	}

	$real_estate_developer_footer_widgets_heading = get_theme_mod( 'real_estate_developer_footer_widgets_heading','Left');
    if($real_estate_developer_footer_widgets_heading == 'Left'){
		$real_estate_developer_custom_css .='#footer h3, #footer .wp-block-search .wp-block-search__label{';
		$real_estate_developer_custom_css .='text-align: left;';
		$real_estate_developer_custom_css .='}';
	}else if($real_estate_developer_footer_widgets_heading == 'Center'){
		$real_estate_developer_custom_css .='#footer h3, #footer .wp-block-search .wp-block-search__label{';
			$real_estate_developer_custom_css .='text-align: center;';
		$real_estate_developer_custom_css .='}';
	}else if($real_estate_developer_footer_widgets_heading == 'Right'){
		$real_estate_developer_custom_css .='#footer h3, #footer .wp-block-search .wp-block-search__label{';
			$real_estate_developer_custom_css .='text-align: right;';
		$real_estate_developer_custom_css .='}';
	}

	$real_estate_developer_footer_widgets_content = get_theme_mod( 'real_estate_developer_footer_widgets_content','Left');
    if($real_estate_developer_footer_widgets_content == 'Left'){
		$real_estate_developer_custom_css .='#footer .widget{';
		$real_estate_developer_custom_css .='text-align: left;';
		$real_estate_developer_custom_css .='}';
	}else if($real_estate_developer_footer_widgets_content == 'Center'){
		$real_estate_developer_custom_css .='#footer .widget{';
			$real_estate_developer_custom_css .='text-align: center;';
		$real_estate_developer_custom_css .='}';
	}else if($real_estate_developer_footer_widgets_content == 'Right'){
		$real_estate_developer_custom_css .='#footer .widget{';
			$real_estate_developer_custom_css .='text-align: right;';
		$real_estate_developer_custom_css .='}';
	}

	$real_estate_developer_copyright_font_size = get_theme_mod('real_estate_developer_copyright_font_size');
	if($real_estate_developer_copyright_font_size != false){
		$real_estate_developer_custom_css .='#footer-2 a, #footer-2 p{';
			$real_estate_developer_custom_css .='font-size: '.esc_attr($real_estate_developer_copyright_font_size).';';
		$real_estate_developer_custom_css .='}';
	}

	$real_estate_developer_copyright_padding_top_bottom = get_theme_mod('real_estate_developer_copyright_padding_top_bottom');
	if($real_estate_developer_copyright_padding_top_bottom != false){
		$real_estate_developer_custom_css .='#footer-2{';
			$real_estate_developer_custom_css .='padding-top: '.esc_attr($real_estate_developer_copyright_padding_top_bottom).'; padding-bottom: '.esc_attr($real_estate_developer_copyright_padding_top_bottom).';';
		$real_estate_developer_custom_css .='}';
	}

	$real_estate_developer_footer_padding = get_theme_mod('real_estate_developer_footer_padding');
	if($real_estate_developer_footer_padding != false){
		$real_estate_developer_custom_css .='#footer{';
			$real_estate_developer_custom_css .='padding: '.esc_attr($real_estate_developer_footer_padding).' 0;';
		$real_estate_developer_custom_css .='}';
	}

	/*----------------Scroll to top Settings ------------------*/

	$real_estate_developer_scroll_to_top_font_size = get_theme_mod('real_estate_developer_scroll_to_top_font_size');
	if($real_estate_developer_scroll_to_top_font_size != false){
		$real_estate_developer_custom_css .='.scrollup i{';
			$real_estate_developer_custom_css .='font-size: '.esc_attr($real_estate_developer_scroll_to_top_font_size).';';
		$real_estate_developer_custom_css .='}';
	}

	$real_estate_developer_scroll_to_top_padding = get_theme_mod('real_estate_developer_scroll_to_top_padding');
	$real_estate_developer_scroll_to_top_padding = get_theme_mod('real_estate_developer_scroll_to_top_padding');
	if($real_estate_developer_scroll_to_top_padding != false){
		$real_estate_developer_custom_css .='.scrollup i{';
			$real_estate_developer_custom_css .='padding-top: '.esc_attr($real_estate_developer_scroll_to_top_padding).';padding-bottom: '.esc_attr($real_estate_developer_scroll_to_top_padding).';';
		$real_estate_developer_custom_css .='}';
	}

	$real_estate_developer_scroll_to_top_width = get_theme_mod('real_estate_developer_scroll_to_top_width');
	if($real_estate_developer_scroll_to_top_width != false){
		$real_estate_developer_custom_css .='.scrollup i{';
			$real_estate_developer_custom_css .='width: '.esc_attr($real_estate_developer_scroll_to_top_width).';';
		$real_estate_developer_custom_css .='}';
	}

	$real_estate_developer_scroll_to_top_height = get_theme_mod('real_estate_developer_scroll_to_top_height');
	if($real_estate_developer_scroll_to_top_height != false){
		$real_estate_developer_custom_css .='.scrollup i{';
			$real_estate_developer_custom_css .='height: '.esc_attr($real_estate_developer_scroll_to_top_height).';';
		$real_estate_developer_custom_css .='}';
	}

	$real_estate_developer_scroll_to_top_border_radius = get_theme_mod('real_estate_developer_scroll_to_top_border_radius');
	if($real_estate_developer_scroll_to_top_border_radius != false){
		$real_estate_developer_custom_css .='.scrollup i{';
			$real_estate_developer_custom_css .='border-radius: '.esc_attr($real_estate_developer_scroll_to_top_border_radius).'px;';
		$real_estate_developer_custom_css .='}';
	}

	/*------------------ Logo  -------------------*/

	$real_estate_developer_logo_padding = get_theme_mod('real_estate_developer_logo_padding');
	if($real_estate_developer_logo_padding != false){
		$real_estate_developer_custom_css .='.logo{';
			$real_estate_developer_custom_css .='padding: '.esc_attr($real_estate_developer_logo_padding).' !important;';
		$real_estate_developer_custom_css .='}';
	}

	$real_estate_developer_logo_margin = get_theme_mod('real_estate_developer_logo_margin');
	if($real_estate_developer_logo_margin != false){
		$real_estate_developer_custom_css .='.logo{';
			$real_estate_developer_custom_css .='margin: '.esc_attr($real_estate_developer_logo_margin).';';
		$real_estate_developer_custom_css .='}';
	}

	// Site title Font Size
	$real_estate_developer_site_title_font_size = get_theme_mod('real_estate_developer_site_title_font_size');
	if($real_estate_developer_site_title_font_size != false){
		$real_estate_developer_custom_css .='.logo p.site-title, .logo h1{';
			$real_estate_developer_custom_css .='font-size: '.esc_attr($real_estate_developer_site_title_font_size).';';
		$real_estate_developer_custom_css .='}';
	}

	// Site tagline Font Size
	$real_estate_developer_site_tagline_font_size = get_theme_mod('real_estate_developer_site_tagline_font_size');
	if($real_estate_developer_site_tagline_font_size != false){
		$real_estate_developer_custom_css .='.logo p.site-description{';
			$real_estate_developer_custom_css .='font-size: '.esc_attr($real_estate_developer_site_tagline_font_size).';';
		$real_estate_developer_custom_css .='}';
	}

	$real_estate_developer_site_title_color = get_theme_mod('real_estate_developer_site_title_color');
	if($real_estate_developer_site_title_color != false){
		$real_estate_developer_custom_css .='p.site-title a, .logo h1 a{';
			$real_estate_developer_custom_css .='color: '.esc_attr($real_estate_developer_site_title_color).'!important;';
		$real_estate_developer_custom_css .='}';
	}

	$real_estate_developer_site_tagline_color = get_theme_mod('real_estate_developer_site_tagline_color');
	if($real_estate_developer_site_tagline_color != false){
		$real_estate_developer_custom_css .='.logo p.site-description{';
			$real_estate_developer_custom_css .='color: '.esc_attr($real_estate_developer_site_tagline_color).';';
		$real_estate_developer_custom_css .='}';
	}

	$real_estate_developer_logo_width = get_theme_mod('real_estate_developer_logo_width');
	if($real_estate_developer_logo_width != false){
		$real_estate_developer_custom_css .='.logo img{';
			$real_estate_developer_custom_css .='width: '.esc_attr($real_estate_developer_logo_width).';';
		$real_estate_developer_custom_css .='}';
	}

	$real_estate_developer_logo_height = get_theme_mod('real_estate_developer_logo_height');
	if($real_estate_developer_logo_height != false){
		$real_estate_developer_custom_css .='.logo img{';
			$real_estate_developer_custom_css .='height: '.esc_attr($real_estate_developer_logo_height).';object-fit:cover;';
		$real_estate_developer_custom_css .='}';
	}

	// Header Background Color
	$real_estate_developer_header_background_color = get_theme_mod('real_estate_developer_header_background_color');
	if($real_estate_developer_header_background_color != false){
		$real_estate_developer_custom_css .='.page-template-custom-home-page .home-page-header, .home-page-header{';
			$real_estate_developer_custom_css .='background-color: '.esc_attr($real_estate_developer_header_background_color).';';
		$real_estate_developer_custom_css .='}';
	}

	$real_estate_developer_header_img_position = get_theme_mod('real_estate_developer_header_img_position','center top');
	if($real_estate_developer_header_img_position != false){
		$real_estate_developer_custom_css .='.page-template-custom-home-page .home-page-header, .home-page-header{';
			$real_estate_developer_custom_css .='background-position: '.esc_attr($real_estate_developer_header_img_position).'!important;';
		$real_estate_developer_custom_css .='}';
	}

	/*---------------------------Blog Layout -------------------*/

	$real_estate_developer_theme_lay = get_theme_mod( 'real_estate_developer_blog_layout_option','Left');
    if($real_estate_developer_theme_lay == 'Default'){
		$real_estate_developer_custom_css .='.post-main-box{';
			$real_estate_developer_custom_css .='';
		$real_estate_developer_custom_css .='}';
	}else if($real_estate_developer_theme_lay == 'Center'){
		$real_estate_developer_custom_css .='.post-main-box, .post-main-box h2, .post-info, .new-text p, .content-bttn{';
			$real_estate_developer_custom_css .='text-align:center;';
		$real_estate_developer_custom_css .='}';
		$real_estate_developer_custom_css .='.post-info{';
			$real_estate_developer_custom_css .='margin-top:10px;';
		$real_estate_developer_custom_css .='}';
		$real_estate_developer_custom_css .='.post-info hr{';
			$real_estate_developer_custom_css .='margin:15px auto;';
		$real_estate_developer_custom_css .='}';
	}else if($real_estate_developer_theme_lay == 'Left'){
		$real_estate_developer_custom_css .='.post-main-box, .post-main-box h2, .post-info, .new-text p, .content-bttn, #our-services p{';
			$real_estate_developer_custom_css .='text-align:Left;';
		$real_estate_developer_custom_css .='}';
		$real_estate_developer_custom_css .='.post-info hr{';
			$real_estate_developer_custom_css .='margin-bottom:10px;';
		$real_estate_developer_custom_css .='}';
		$real_estate_developer_custom_css .='.post-main-box h2{';
			$real_estate_developer_custom_css .='margin-top:10px;';
		$real_estate_developer_custom_css .='}';
		$real_estate_developer_custom_css .='.service-text .more-btn{';
			$real_estate_developer_custom_css .='display:inline-block;';
		$real_estate_developer_custom_css .='}';
	}

	/*--------------------- Blog Page Posts -------------------*/

	$real_estate_developer_blog_page_posts_settings = get_theme_mod( 'real_estate_developer_blog_page_posts_settings','Into Blocks');
    if($real_estate_developer_blog_page_posts_settings == 'Without Blocks'){
		$real_estate_developer_custom_css .='.post-main-box{';
			$real_estate_developer_custom_css .='box-shadow: none; border: none; margin:30px 0;';
		$real_estate_developer_custom_css .='}';
	}

	// featured image dimention
	$real_estate_developer_blog_post_featured_image_dimension = get_theme_mod('real_estate_developer_blog_post_featured_image_dimension', 'default');
	$real_estate_developer_blog_post_featured_image_custom_width = get_theme_mod('real_estate_developer_blog_post_featured_image_custom_width',250);
	$real_estate_developer_blog_post_featured_image_custom_height = get_theme_mod('real_estate_developer_blog_post_featured_image_custom_height',250);
	if($real_estate_developer_blog_post_featured_image_dimension == 'custom'){
		$real_estate_developer_custom_css .='.post-main-box img{';
			$real_estate_developer_custom_css .='width: '.esc_attr($real_estate_developer_blog_post_featured_image_custom_width).'!important; height: '.esc_attr($real_estate_developer_blog_post_featured_image_custom_height).';';
		$real_estate_developer_custom_css .='}';
	}

	/*---------------- Posts Settings ------------------*/

	$real_estate_developer_featured_image_border_radius = get_theme_mod('real_estate_developer_featured_image_border_radius', 0);
	if($real_estate_developer_featured_image_border_radius != false){
		$real_estate_developer_custom_css .='.box-image img, .feature-box img{';
			$real_estate_developer_custom_css .='border-radius: '.esc_attr($real_estate_developer_featured_image_border_radius).'px;';
		$real_estate_developer_custom_css .='}';
	}

	$real_estate_developer_featured_image_box_shadow = get_theme_mod('real_estate_developer_featured_image_box_shadow',0);
	if($real_estate_developer_featured_image_box_shadow != false){
		$real_estate_developer_custom_css .='.box-image img, #content-vw img{';
			$real_estate_developer_custom_css .='box-shadow: '.esc_attr($real_estate_developer_featured_image_box_shadow).'px '.esc_attr($real_estate_developer_featured_image_box_shadow).'px '.esc_attr($real_estate_developer_featured_image_box_shadow).'px #cccccc;';
		$real_estate_developer_custom_css .='}';
	}

	$real_estate_developer_singlepost_image_box_shadow = get_theme_mod('real_estate_developer_singlepost_image_box_shadow',0);
	if($real_estate_developer_singlepost_image_box_shadow != false){
		$real_estate_developer_custom_css .='.feature-box img{';
			$real_estate_developer_custom_css .='box-shadow: '.esc_attr($real_estate_developer_singlepost_image_box_shadow).'px '.esc_attr($real_estate_developer_singlepost_image_box_shadow).'px '.esc_attr($real_estate_developer_singlepost_image_box_shadow).'px #cccccc;';
		$real_estate_developer_custom_css .='}';
	}

	$real_estate_developer_related_image_box_shadow = get_theme_mod('real_estate_developer_related_image_box_shadow',0);
	if($real_estate_developer_related_image_box_shadow != false){
		$real_estate_developer_custom_css .='.related-post .box-image img{';
			$real_estate_developer_custom_css .='box-shadow: '.esc_attr($real_estate_developer_related_image_box_shadow).'px '.esc_attr($real_estate_developer_related_image_box_shadow).'px '.esc_attr($real_estate_developer_related_image_box_shadow).'px #cccccc;';
		$real_estate_developer_custom_css .='}';
	}

	/*---------------- Button Settings ------------------*/

	$real_estate_developer_button_letter_spacing = get_theme_mod('real_estate_developer_button_letter_spacing');
	$real_estate_developer_custom_css .='.post-main-box .more-btn{';
		$real_estate_developer_custom_css .='letter-spacing: '.esc_attr($real_estate_developer_button_letter_spacing).';';
	$real_estate_developer_custom_css .='}';

	$real_estate_developer_button_border_radius = get_theme_mod('real_estate_developer_button_border_radius');
	if($real_estate_developer_button_border_radius != false){
		$real_estate_developer_custom_css .='.post-main-box .more-btn a{';
			$real_estate_developer_custom_css .='border-radius: '.esc_attr($real_estate_developer_button_border_radius).'px !important;';
		$real_estate_developer_custom_css .='}';
	}

	$real_estate_developer_button_top_bottom_padding = get_theme_mod('real_estate_developer_button_top_bottom_padding');
	$real_estate_developer_button_left_right_padding = get_theme_mod('real_estate_developer_button_left_right_padding');
	if($real_estate_developer_button_top_bottom_padding != false || $real_estate_developer_button_left_right_padding != false){
		$real_estate_developer_custom_css .='.post-main-box .more-btn{';
			$real_estate_developer_custom_css .='padding-top: '.esc_attr($real_estate_developer_button_top_bottom_padding).'!important; padding-bottom: '.esc_attr($real_estate_developer_button_top_bottom_padding).'!important;padding-left: '.esc_attr($real_estate_developer_button_left_right_padding).'!important;padding-right: '.esc_attr($real_estate_developer_button_left_right_padding).'!important;';
		$real_estate_developer_custom_css .='}';
	}

	$real_estate_developer_button_font_size = get_theme_mod('real_estate_developer_button_font_size',14);
	$real_estate_developer_custom_css .='.post-main-box .more-btn a{';
		$real_estate_developer_custom_css .='font-size: '.esc_attr($real_estate_developer_button_font_size).';';
	$real_estate_developer_custom_css .='}';

	$real_estate_developer_theme_lay = get_theme_mod( 'real_estate_developer_button_text_transform','Capitalize');
	if($real_estate_developer_theme_lay == 'Capitalize'){
		$real_estate_developer_custom_css .='.post-main-box .more-btn a{';
			$real_estate_developer_custom_css .='text-transform:Capitalize;';
		$real_estate_developer_custom_css .='}';
	}
	if($real_estate_developer_theme_lay == 'Lowercase'){
		$real_estate_developer_custom_css .='.post-main-box .more-btn a{';
			$real_estate_developer_custom_css .='text-transform:Lowercase;';
		$real_estate_developer_custom_css .='}';
	}
	if($real_estate_developer_theme_lay == 'Uppercase'){
		$real_estate_developer_custom_css .='.post-main-box .more-btn a{';
			$real_estate_developer_custom_css .='text-transform:Uppercase;';
		$real_estate_developer_custom_css .='}';
	}

	/*---------------- Single Blog Page Settings ------------------*/

	$real_estate_developer_single_blog_comment_button_text = get_theme_mod('real_estate_developer_single_blog_comment_button_text', 'Post Comment');
	if($real_estate_developer_single_blog_comment_button_text == ''){
		$real_estate_developer_custom_css .='#comments p.form-submit {';
			$real_estate_developer_custom_css .='display: none;';
		$real_estate_developer_custom_css .='}';
	}

	$real_estate_developer_comment_width = get_theme_mod('real_estate_developer_single_blog_comment_width');
	if($real_estate_developer_comment_width != false){
		$real_estate_developer_custom_css .='#comments textarea{';
			$real_estate_developer_custom_css .='width: '.esc_attr($real_estate_developer_comment_width).';';
		$real_estate_developer_custom_css .='}';
	}

	$real_estate_developer_single_blog_post_navigation_show_hide = get_theme_mod('real_estate_developer_single_blog_post_navigation_show_hide',true);
	if($real_estate_developer_single_blog_post_navigation_show_hide != true){
		$real_estate_developer_custom_css .='.post-navigation{';
			$real_estate_developer_custom_css .='display: none;';
		$real_estate_developer_custom_css .='}';
	}

	/*--------------------- Grid Posts Posts -------------------*/

	$real_estate_developer_display_grid_posts_settings = get_theme_mod( 'real_estate_developer_display_grid_posts_settings','Into Blocks');
    if($real_estate_developer_display_grid_posts_settings == 'Without Blocks'){
		$real_estate_developer_custom_css .='.grid-post-main-box{';
			$real_estate_developer_custom_css .='box-shadow: none; border: none; margin:30px 0;';
		$real_estate_developer_custom_css .='}';
	}

	$real_estate_developer_grid_featured_image_border_radius = get_theme_mod('real_estate_developer_grid_featured_image_border_radius', 0);
	if($real_estate_developer_grid_featured_image_border_radius != false){
		$real_estate_developer_custom_css .='.grid-post-main-box .box-image img, .grid-post-main-box .feature-box img{';
			$real_estate_developer_custom_css .='border-radius: '.esc_attr($real_estate_developer_grid_featured_image_border_radius).'px;';
		$real_estate_developer_custom_css .='}';
	}
	/*----------------Woocommerce Products Settings ------------------*/

	$real_estate_developer_related_product_show_hide = get_theme_mod('real_estate_developer_related_product_show_hide',true);
	if($real_estate_developer_related_product_show_hide != true){
		$real_estate_developer_custom_css .='.related.products{';
			$real_estate_developer_custom_css .='display: none;';
		$real_estate_developer_custom_css .='}';
	}

	/*----------------Woocommerce Products Settings ------------------*/

	$real_estate_developer_products_padding_top_bottom = get_theme_mod('real_estate_developer_products_padding_top_bottom');
	if($real_estate_developer_products_padding_top_bottom != false){
		$real_estate_developer_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
			$real_estate_developer_custom_css .='padding-top: '.esc_attr($real_estate_developer_products_padding_top_bottom).'!important; padding-bottom: '.esc_attr($real_estate_developer_products_padding_top_bottom).'!important;';
		$real_estate_developer_custom_css .='}';
	}

	$real_estate_developer_products_padding_left_right = get_theme_mod('real_estate_developer_products_padding_left_right');
	if($real_estate_developer_products_padding_left_right != false){
		$real_estate_developer_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
			$real_estate_developer_custom_css .='padding-left: '.esc_attr($real_estate_developer_products_padding_left_right).'!important; padding-right: '.esc_attr($real_estate_developer_products_padding_left_right).'!important;';
		$real_estate_developer_custom_css .='}';
	}

	$real_estate_developer_products_box_shadow = get_theme_mod('real_estate_developer_products_box_shadow');
	if($real_estate_developer_products_box_shadow != false){
		$real_estate_developer_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
				$real_estate_developer_custom_css .='box-shadow: '.esc_attr($real_estate_developer_products_box_shadow).'px '.esc_attr($real_estate_developer_products_box_shadow).'px '.esc_attr($real_estate_developer_products_box_shadow).'px #ddd;';
		$real_estate_developer_custom_css .='}';
	}

	$real_estate_developer_products_border_radius = get_theme_mod('real_estate_developer_products_border_radius');
	if($real_estate_developer_products_border_radius != false){
		$real_estate_developer_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
			$real_estate_developer_custom_css .='border-radius: '.esc_attr($real_estate_developer_products_border_radius).'px;';
		$real_estate_developer_custom_css .='}';
	}

	$real_estate_developer_products_btn_padding_top_bottom = get_theme_mod('real_estate_developer_products_btn_padding_top_bottom');
	if($real_estate_developer_products_btn_padding_top_bottom != false){
		$real_estate_developer_custom_css .='.woocommerce a.button{';
			$real_estate_developer_custom_css .='padding-top: '.esc_attr($real_estate_developer_products_btn_padding_top_bottom).' !important; padding-bottom: '.esc_attr($real_estate_developer_products_btn_padding_top_bottom).' !important;';
		$real_estate_developer_custom_css .='}';
	}

	$real_estate_developer_products_btn_padding_left_right = get_theme_mod('real_estate_developer_products_btn_padding_left_right');
	if($real_estate_developer_products_btn_padding_left_right != false){
		$real_estate_developer_custom_css .='.woocommerce a.button{';
			$real_estate_developer_custom_css .='padding-left: '.esc_attr($real_estate_developer_products_btn_padding_left_right).' !important; padding-right: '.esc_attr($real_estate_developer_products_btn_padding_left_right).' !important;';
		$real_estate_developer_custom_css .='}';
	}

	$real_estate_developer_products_button_border_radius = get_theme_mod('real_estate_developer_products_button_border_radius', 0);
	if($real_estate_developer_products_button_border_radius != false){
		$real_estate_developer_custom_css .='.woocommerce ul.products li.product .button, a.checkout-button.button.alt.wc-forward,.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt,.woocommerce a.button{';
			$real_estate_developer_custom_css .='border-radius: '.esc_attr($real_estate_developer_products_button_border_radius).'px !important;';
		$real_estate_developer_custom_css .='}';
	}

	$real_estate_developer_woocommerce_sale_position = get_theme_mod( 'real_estate_developer_woocommerce_sale_position','right');
    if($real_estate_developer_woocommerce_sale_position == 'left'){
		$real_estate_developer_custom_css .='.woocommerce ul.products li.product .onsale{';
			$real_estate_developer_custom_css .='left: 14px !important; right: auto !important;';
		$real_estate_developer_custom_css .='}';
	}else if($real_estate_developer_woocommerce_sale_position == 'right'){
		$real_estate_developer_custom_css .='.woocommerce ul.products li.product .onsale{';
			$real_estate_developer_custom_css .='left: auto!important; right: 14px !important;';
		$real_estate_developer_custom_css .='}';
	}

	$real_estate_developer_woocommerce_sale_font_size = get_theme_mod('real_estate_developer_woocommerce_sale_font_size');
	if($real_estate_developer_woocommerce_sale_font_size != false){
		$real_estate_developer_custom_css .='.woocommerce span.onsale{';
			$real_estate_developer_custom_css .='font-size: '.esc_attr($real_estate_developer_woocommerce_sale_font_size).';';
		$real_estate_developer_custom_css .='}';
	}

	$real_estate_developer_woocommerce_sale_padding_top_bottom = get_theme_mod('real_estate_developer_woocommerce_sale_padding_top_bottom');
	if($real_estate_developer_woocommerce_sale_padding_top_bottom != false){
		$real_estate_developer_custom_css .='.woocommerce span.onsale{';
			$real_estate_developer_custom_css .='padding-top: '.esc_attr($real_estate_developer_woocommerce_sale_padding_top_bottom).'; padding-bottom: '.esc_attr($real_estate_developer_woocommerce_sale_padding_top_bottom).';';
		$real_estate_developer_custom_css .='}';
	}

	$real_estate_developer_woocommerce_sale_padding_left_right = get_theme_mod('real_estate_developer_woocommerce_sale_padding_left_right');
	if($real_estate_developer_woocommerce_sale_padding_left_right != false){
		$real_estate_developer_custom_css .='.woocommerce span.onsale{';
			$real_estate_developer_custom_css .='padding-left: '.esc_attr($real_estate_developer_woocommerce_sale_padding_left_right).'; padding-right: '.esc_attr($real_estate_developer_woocommerce_sale_padding_left_right).';';
		$real_estate_developer_custom_css .='}';
	}

	$real_estate_developer_woocommerce_sale_border_radius = get_theme_mod('real_estate_developer_woocommerce_sale_border_radius', 0);
	if($real_estate_developer_woocommerce_sale_border_radius != false){
		$real_estate_developer_custom_css .='.woocommerce span.onsale{';
			$real_estate_developer_custom_css .='border-radius: '.esc_attr($real_estate_developer_woocommerce_sale_border_radius).'px;';
		$real_estate_developer_custom_css .='}';
	}

	/*-------------- Sticky Header Padding ----------------*/

	$real_estate_developer_sticky_header_padding = get_theme_mod('real_estate_developer_sticky_header_padding');
	if($real_estate_developer_sticky_header_padding != false){
		$real_estate_developer_custom_css .='.header-fixed{';
			$real_estate_developer_custom_css .='padding: '.esc_attr($real_estate_developer_sticky_header_padding).';';
		$real_estate_developer_custom_css .='}';
	}

	/*----------------Social Icons Settings ------------------*/

	$real_estate_developer_social_icon_font_size = get_theme_mod('real_estate_developer_social_icon_font_size');
	if($real_estate_developer_social_icon_font_size != false){
		$real_estate_developer_custom_css .='#sidebar .custom-social-icons i, #footer .custom-social-icons i{';
			$real_estate_developer_custom_css .='font-size: '.esc_attr($real_estate_developer_social_icon_font_size).';';
		$real_estate_developer_custom_css .='}';
	}

	$real_estate_developer_social_icon_padding = get_theme_mod('real_estate_developer_social_icon_padding');
	if($real_estate_developer_social_icon_padding != false){
		$real_estate_developer_custom_css .='#sidebar .custom-social-icons i, #footer .custom-social-icons i{';
			$real_estate_developer_custom_css .='padding: '.esc_attr($real_estate_developer_social_icon_padding).';';
		$real_estate_developer_custom_css .='}';
	}

	$real_estate_developer_social_icon_width = get_theme_mod('real_estate_developer_social_icon_width');
	if($real_estate_developer_social_icon_width != false){
		$real_estate_developer_custom_css .='#sidebar .custom-social-icons i, #footer .custom-social-icons i{';
			$real_estate_developer_custom_css .='width: '.esc_attr($real_estate_developer_social_icon_width).';';
		$real_estate_developer_custom_css .='}';
	}

	$real_estate_developer_social_icon_height = get_theme_mod('real_estate_developer_social_icon_height');
	if($real_estate_developer_social_icon_height != false){
		$real_estate_developer_custom_css .='#sidebar .custom-social-icons i, #footer .custom-social-icons i{';
			$real_estate_developer_custom_css .='height: '.esc_attr($real_estate_developer_social_icon_height).';';
		$real_estate_developer_custom_css .='}';
	}

	$real_estate_developer_social_icon_border_radius = get_theme_mod('real_estate_developer_social_icon_border_radius');
	if($real_estate_developer_social_icon_border_radius != false){
		$real_estate_developer_custom_css .='#sidebar .custom-social-icons i, #footer .custom-social-icons i{';
			$real_estate_developer_custom_css .='border-radius: '.esc_attr($real_estate_developer_social_icon_border_radius).'px;';
		$real_estate_developer_custom_css .='}';
	}

	$real_estate_developer_resp_menu_toggle_btn_bg_color = get_theme_mod('real_estate_developer_resp_menu_toggle_btn_bg_color');
	if($real_estate_developer_resp_menu_toggle_btn_bg_color != false){
		$real_estate_developer_custom_css .='.toggle-nav i,#mySidenav .closebtn{';
			$real_estate_developer_custom_css .='background: '.esc_attr($real_estate_developer_resp_menu_toggle_btn_bg_color).';';
		$real_estate_developer_custom_css .='}';
	}

	$real_estate_developer_grid_featured_image_box_shadow = get_theme_mod('real_estate_developer_grid_featured_image_box_shadow',0);
	if($real_estate_developer_grid_featured_image_box_shadow != false){
		$real_estate_developer_custom_css .='.grid-post-main-box .box-image img, .grid-post-main-box .feature-box img, #content-vw img{';
			$real_estate_developer_custom_css .='box-shadow: '.esc_attr($real_estate_developer_grid_featured_image_box_shadow).'px '.esc_attr($real_estate_developer_grid_featured_image_box_shadow).'px '.esc_attr($real_estate_developer_grid_featured_image_box_shadow).'px #cccccc;';
		$real_estate_developer_custom_css .='}';
	}


	/*-------------- Menus Setings ----------------*/

	$real_estate_developer_navigation_menu_font_size = get_theme_mod('real_estate_developer_navigation_menu_font_size');
	if($real_estate_developer_navigation_menu_font_size != false){
		$real_estate_developer_custom_css .='.main-navigation ul a{';
			$real_estate_developer_custom_css .='font-size: '.esc_attr($real_estate_developer_navigation_menu_font_size).';';
		$real_estate_developer_custom_css .='}';
	}

	$real_estate_developer_navigation_menu_font_weight = get_theme_mod('real_estate_developer_navigation_menu_font_weight','600');
	if($real_estate_developer_navigation_menu_font_weight != false){
		$real_estate_developer_custom_css .='.main-navigation ul a{';
			$real_estate_developer_custom_css .='font-weight: '.esc_attr($real_estate_developer_navigation_menu_font_weight).';';
		$real_estate_developer_custom_css .='}';
	}

	$real_estate_developer_header_menus_hover_color = get_theme_mod('real_estate_developer_header_menus_hover_color');
	if($real_estate_developer_header_menus_hover_color != false){
		$real_estate_developer_custom_css .='.main-navigation ul a:hover{';
			$real_estate_developer_custom_css .='color: '.esc_attr($real_estate_developer_header_menus_hover_color).';';
		$real_estate_developer_custom_css .='}';
	}

	$real_estate_developer_header_submenus_color = get_theme_mod('real_estate_developer_header_submenus_color');
	if($real_estate_developer_header_submenus_color != false){
		$real_estate_developer_custom_css .='.main-navigation ul ul a{';
			$real_estate_developer_custom_css .='color: '.esc_attr($real_estate_developer_header_submenus_color).';';
		$real_estate_developer_custom_css .='}';
	}

	$real_estate_developer_header_submenus_hover_color = get_theme_mod('real_estate_developer_header_submenus_hover_color');
	if($real_estate_developer_header_submenus_hover_color != false){
		$real_estate_developer_custom_css .='.main-navigation ul.sub-menu a:hover{';
			$real_estate_developer_custom_css .='color: '.esc_attr($real_estate_developer_header_submenus_hover_color).'!important;';
		$real_estate_developer_custom_css .='}';
	}

	$real_estate_developer_menus_item = get_theme_mod( 'real_estate_developer_menus_item_style','None');
    if($real_estate_developer_menus_item == 'None'){
		$real_estate_developer_custom_css .='.main-navigation ul a{';
			$real_estate_developer_custom_css .='';
		$real_estate_developer_custom_css .='}';
	}else if($real_estate_developer_menus_item == 'Zoom In'){
		$real_estate_developer_custom_css .='.main-navigation ul a:hover{';
			$real_estate_developer_custom_css .='transition: all 0.3s ease-in-out !important; transform: scale(1.2) !important;';
		$real_estate_developer_custom_css .='}';
	}

	/*---------------------------Footer Style -------------------*/

	$real_estate_developer_theme_lay = get_theme_mod( 'real_estate_developer_footer_template','real_estate_developer-footer-one');
    if($real_estate_developer_theme_lay == 'real_estate_developer-footer-one'){
		$real_estate_developer_custom_css .='#footer{';
			$real_estate_developer_custom_css .='';
		$real_estate_developer_custom_css .='}';

	}else if($real_estate_developer_theme_lay == 'real_estate_developer-footer-two'){
		$real_estate_developer_custom_css .='#footer{';
			$real_estate_developer_custom_css .='background: linear-gradient(to right, #f9f8ff, #dedafa);';
		$real_estate_developer_custom_css .='}';
		$real_estate_developer_custom_css .='#footer p, #footer li a, #footer, #footer h3, #footer a.rsswidget, #footer #wp-calendar a, .copyright a, #footer .custom_details, #footer ins span, #footer .tagcloud a, .main-inner-box span.entry-date a, nav.woocommerce-MyAccount-navigation ul li:hover a, #footer ul li a, #footer table, #footer th, #footer td, #footer caption, #sidebar caption,#footer nav.wp-calendar-nav a,#footer .search-form .search-field{';
			$real_estate_developer_custom_css .='color:#000;';
		$real_estate_developer_custom_css .='}';
		$real_estate_developer_custom_css .='#footer ul li::before{';
			$real_estate_developer_custom_css .='background:#000;';
		$real_estate_developer_custom_css .='}';
		$real_estate_developer_custom_css .='#footer table, #footer th, #footer td,#footer .search-form .search-field,#footer .tagcloud a{';
			$real_estate_developer_custom_css .='border: 1px solid #000;';
		$real_estate_developer_custom_css .='}';

	}else if($real_estate_developer_theme_lay == 'real_estate_developer-footer-three'){
		$real_estate_developer_custom_css .='#footer{';
			$real_estate_developer_custom_css .='background: #232524;';
		$real_estate_developer_custom_css .='}';
	}
	else if($real_estate_developer_theme_lay == 'real_estate_developer-footer-four'){
		$real_estate_developer_custom_css .='#footer{';
			$real_estate_developer_custom_css .='background: #1B3B4E;';
		$real_estate_developer_custom_css .='}';
		$real_estate_developer_custom_css .='#footer p, #footer li a, #footer, #footer h3, #footer a.rsswidget, #footer #wp-calendar a, .copyright a, #footer .custom_details, #footer ins span, #footer .tagcloud a, .main-inner-box span.entry-date a, nav.woocommerce-MyAccount-navigation ul li:hover a, #footer ul li a, #footer table, #footer th, #footer td, #footer caption, #sidebar caption,#footer nav.wp-calendar-nav a,#footer .search-form .search-field{';
			$real_estate_developer_custom_css .='color:#fff;';
		$real_estate_developer_custom_css .='}';
		$real_estate_developer_custom_css .='#footer ul li::before{';
			$real_estate_developer_custom_css .='background:#fff;';
		$real_estate_developer_custom_css .='}';
		$real_estate_developer_custom_css .='#footer table, #footer th, #footer td,#footer .search-form .search-field,#footer .tagcloud a{';
			$real_estate_developer_custom_css .='border: 1px solid #fff;';
		$real_estate_developer_custom_css .='}';
	}
	else if($real_estate_developer_theme_lay == 'real_estate_developer-footer-five'){
		$real_estate_developer_custom_css .='#footer{';
			$real_estate_developer_custom_css .='background: linear-gradient(to right, #01093a, #2d0b00);';
		$real_estate_developer_custom_css .='}';
	}

	/*---------------- Footer Settings ------------------*/

	$real_estate_developer_button_footer_heading_letter_spacing = get_theme_mod('real_estate_developer_button_footer_heading_letter_spacing',1);
	$real_estate_developer_custom_css .='#footer h3, a.rsswidget.rss-widget-title{';
		$real_estate_developer_custom_css .='letter-spacing: '.esc_attr($real_estate_developer_button_footer_heading_letter_spacing).'px;';
	$real_estate_developer_custom_css .='}';

	$real_estate_developer_button_footer_font_size = get_theme_mod('real_estate_developer_button_footer_font_size','30');
	$real_estate_developer_custom_css .='#footer h3, a.rsswidget.rss-widget-title{';
		$real_estate_developer_custom_css .='font-size: '.esc_attr($real_estate_developer_button_footer_font_size).'px;';
	$real_estate_developer_custom_css .='}';

	$real_estate_developer_theme_lay = get_theme_mod( 'real_estate_developer_button_footer_text_transform','Capitalize');
	if($real_estate_developer_theme_lay == 'Capitalize'){
		$real_estate_developer_custom_css .='#footer h3{';
			$real_estate_developer_custom_css .='text-transform:Capitalize;';
		$real_estate_developer_custom_css .='}';
	}
	if($real_estate_developer_theme_lay == 'Lowercase'){
		$real_estate_developer_custom_css .='#footer h3, a.rsswidget.rss-widget-title{';
			$real_estate_developer_custom_css .='text-transform:Lowercase;';
		$real_estate_developer_custom_css .='}';
	}
	if($real_estate_developer_theme_lay == 'Uppercase'){
		$real_estate_developer_custom_css .='#footer h3, a.rsswidget.rss-widget-title{';
			$real_estate_developer_custom_css .='text-transform:Uppercase;';
		$real_estate_developer_custom_css .='}';
	}

	$real_estate_developer_footer_heading_weight = get_theme_mod('real_estate_developer_footer_heading_weight','500');
	if($real_estate_developer_footer_heading_weight != false){
		$real_estate_developer_custom_css .='#footer h3, a.rsswidget.rss-widget-title{';
			$real_estate_developer_custom_css .='font-weight: '.esc_attr($real_estate_developer_footer_heading_weight).';';
		$real_estate_developer_custom_css .='}';
	}
	
	$real_estate_developer_slider_first_color = get_theme_mod('real_estate_developer_slider_first_color');

	$real_estate_developer_slider_second_color = get_theme_mod('real_estate_developer_slider_second_color');

	if($real_estate_developer_slider_first_color != false || $real_estate_developer_slider_second_color != false){
		$real_estate_developer_custom_css .='.box{
		background: linear-gradient(to top, '.esc_attr($real_estate_developer_slider_first_color).', '.esc_attr($real_estate_developer_slider_second_color).');
		}';
	}

	$real_estate_developer_services_icon_color = get_theme_mod('real_estate_developer_services_icon_color');
	if($real_estate_developer_services_icon_color != false){
		$real_estate_developer_custom_css .='#about-sec i{';
			$real_estate_developer_custom_css .='color: '.esc_attr($real_estate_developer_services_icon_color).';';
		$real_estate_developer_custom_css .='}';
	}

	$real_estate_developer_single_page_breadcrumb = get_theme_mod('real_estate_developer_single_page_breadcrumb',true);
	if($real_estate_developer_single_page_breadcrumb != true){
		$real_estate_developer_custom_css .='.page-breadcrumb{';
			$real_estate_developer_custom_css .='display: none;';
		$real_estate_developer_custom_css .='}';
	}

	// sticky sidebar
		$real_estate_developer_resp_stickysidebar = get_theme_mod( 'real_estate_developer_stickysidebar_hide_show',false);
	if($real_estate_developer_resp_stickysidebar == true && get_theme_mod( 'real_estate_developer_sticky_sidebar',false) != true){
		$real_estate_developer_custom_css .= '@media (min-width: 768px) {';
    	$real_estate_developer_custom_css .='#sidebar{';
			$real_estate_developer_custom_css .='position:static;';
		$real_estate_developer_custom_css .='} ';
		$real_estate_developer_custom_css .= '}';
	}
    // First Letter Capital
	$real_estate_developer_show_first_caps = get_theme_mod('real_estate_developer_show_first_caps', false);
	if ($real_estate_developer_show_first_caps ) {
	    $real_estate_developer_custom_css .= '.post-main-box .new-text p:nth-of-type(1)::first-letter {';
	    $real_estate_developer_custom_css .=' font-size: 55px;font-weight: 600;margin-right: 5px;';
	    $real_estate_developer_custom_css .='}';
	} else {
		$real_estate_developer_custom_css .= '.post-main-box .new-text p:nth-of-type(1)::first-letter {';
	    $real_estate_developer_custom_css .= 'display: none;';
	    $real_estate_developer_custom_css .='}';
	}