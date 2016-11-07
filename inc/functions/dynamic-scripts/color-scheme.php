<?php
/*
 * 	This file contains theme color scheme
 *
 *	@version 1.0
 *	@since outlook-lite 1.0
 */

function outlook_site_color_scheme(){
	
	/*
	 *	Set variable
	 *
	 *	@since outlook-lite 1.0
	 */
	
	// color
	$theme_color 	= 	esc_html( get_theme_mod( 'outlook_color_scheme', '#f9ce06' ) ); 


	/*
	 *	Site main color scheme
	 *
	 *	@since outlook-lite 1.0
	 */			
	$site_color_scheme	=	
	
		'<style type="text/css">
		
			.ol-side-nav ul li a:hover,
			.ol-side-nav ul li a:focus{
				color: ' . $theme_color . ';
				border-color: ' . $theme_color . ';
			}
			
			.ol-side-menu-text p a{
				color: ' . $theme_color . ';
			}
			
			.ol-side-menu-category li a{
				color: ' . $theme_color . ';	
			}
			
			/* transparent navigation */
			
			.ol-transparent-nav li a:hover{
				color: ' . $theme_color . ';
			}
			
			.ol-transparent-nav .current a {
				color: ' . $theme_color . ';
			}
			
			.ol-transparent-nav a::before {
				color: ' . $theme_color . ';
				background: ' . $theme_color . ';
			}
			
			#ol-header.ol-transparent-header-fixed .ol-transparent-nav li a:hover,
			#ol-header.ol-transparent-header-fixed .ol-transparent-nav li a:focus,
			#ol-header.ol-transparent-header-fixed .ol-transparent-nav .current a{
				color: ' . $theme_color . ';
			}
			
			.ol-transparent-nav .dropdown-menu li a:hover{
				color: ' . $theme_color . ';
			}
			
			/* Header with top bar */
			
			.ol-header-top{
				background-color: ' . $theme_color . ';
			}
			
			.ol-shopping-cart-btn:hover,
			.ol-shopping-cart-btn:focus{
				background-color: ' . $theme_color . ';
			}
			
			.ol-cart-dropdown-menu .ol-cart-item .media-body .media-heading a:hover,
			.ol-cart-dropdown-menu .ol-cart-item .media-body .media-heading a:focus{
				color: ' . $theme_color . ';
			}
			
			.ol-cart-dropdown-menu .ol-cart-btn-area .ol-cart-view-btn:hover,
			.ol-cart-dropdown-menu .ol-cart-btn-area .ol-cart-view-btn:focus,
			.ol-cart-dropdown-menu .ol-cart-btn-area .ol-cart-check-btn:hover,
			.ol-cart-dropdown-menu .ol-cart-btn-area .ol-cart-check-btn:focus{
				background-color: ' . $theme_color . ';
				border-color: ' . $theme_color . ';
			}
			
			.ol-header-with-topnav li a:hover{
				color: ' . $theme_color . ';
			}
			
			.ol-header-with-topnav .current a{
				color: ' . $theme_color . ';
			}
			
			.ol-header-with-topnav a::before,
			.ol-header-with-topnav .current a:before{
				color: ' . $theme_color . ';
				background: ' . $theme_color . ';
			}
			
			.dropdown-menu li a:hover,
			#ol-header.ol-transparent-header-fixed .ol-transparent-nav li a:hover{
				color: ' . $theme_color . ';
			}
			
			.ol-header-with-topnav .dropdown-menu li a:hover{
				color: ' . $theme_color . ';
			}
			
			/* End Header with top bar */
			
			/* Center logo header */
			
			.ol-center-log-header-nav li a:hover{
				color: ' . $theme_color . ';
			}
			
			.ol-center-log-header-nav .current a{
				color: ' . $theme_color . ';
			}
			
			.ol-center-log-header-nav a::before,
			.ol-center-log-header-nav .current a:before{
				color: ' . $theme_color . ';
				background: ' . $theme_color . ';
			}
			
			.ol-center-log-header-nav .dropdown-menu li a:hover{
				color: ' . $theme_color . ';
			}
			
			/* End center lgogo header */
			
			/* header split navigation */
			
			.ol-header-split-nav li a:hover{
				color: ' . $theme_color . ';
			}
			
			.ol-header-split-nav .current a {
				color: ' . $theme_color . ';
			}
			
			.ol-header-split-nav a::before {
				color: ' . $theme_color . ';
				background: ' . $theme_color . ';
			}
			
			.ol-header-split-nav .dropdown-menu li a:hover{
				color: ' . $theme_color . ';
			}
			
			.ol-header-split-fixed .ol-header-split-nav li a:hover,
			.ol-header-split-fixed .ol-header-split-nav li a:focus{
				color: ' . $theme_color . ';
			}
			
			.woocommerce #ol-header.ol-header-box-fixed{
				background-color: ' . $theme_color . '!important;
			}
			
			/* End header split navigation */
			
			
			/* header box */
			
			#ol-header.ol-header-box .ol-navbar{
				background-color: ' . $theme_color . ';
			}
			
			#ol-header.ol-header-box-fixed{
				background-color: ' . $theme_color . ';
			}
			
			.ol-header-box-nav .dropdown-menu li a:hover{
				color: ' . $theme_color . ';
			}
			
			/* End header box */
			
			
			#ol-main-slider .flex-direction-nav a:hover{
				background-color: ' . $theme_color . ';
				border-color: ' . $theme_color . ';
			}
			
			#ol-main-slider .flex-control-paging li a{
				border: 3px solid ' . $theme_color . ';
			}
			
			.ol-button.ol-learn-more {
				background: ' . $theme_color . ';
			}
			
			.ol-learn-more::before {
				border: 2px solid ' . $theme_color . ';
			}
			
			.ol-learn-more:hover {
				color: ' . $theme_color . ';
			}
			
			.ol-button.ol-learn-more:focus{
				background-color: ' . $theme_color . ';
			}
			
			.ol-about-us-img::after {
			  background: ' . $theme_color . ' none repeat scroll 0 0;
			}
			
			.ol-about-us-right-content ul li:before{
				color: ' . $theme_color . ';
			}
			
			.ol-about-us-counter-item .ol-about-us-counter-icon{
				background: ' . $theme_color . ' none repeat scroll 0 0;
			}
			
			.ol-service-icon{
				color: ' . $theme_color . ';
			}
			
			.ol-work-item-thumbonil:before{
				background-color: ' . $theme_color . ';
			}
			
			.ol-work-item-link{
				background-color: ' . $theme_color . ';
			}
			
			.ol-testimonial-quote{
				color: ' . $theme_color . ';	
			}
			
			.ol-clients-status{
				color: ' . $theme_color . ';
			}
			
			.ol-clients-testimonial-slider .slick-dots li.slick-active button{
				background-color: ' . $theme_color . ';
			}
			
			.ol-our-team-info{
				background-color: ' . $theme_color . ';
			}
			
			.ol-our-team-social a:hover,
			.ol-our-team-social a:focus{
				color: ' . $theme_color . ';
			}
			
			.ol-our-team-slide .slick-prev,
			.ol-our-team-slide .slick-next {
				background-color: ' . $theme_color . ';
			}
			
			.ol-price-table-sinlge:hover .ol-learn-more{
				color: ' . $theme_color . ';
				border: 1px solid ' . $theme_color . ';	
			}
			
			.ol-price-popular-tag{
				background-color: ' . $theme_color . ';
			}
			
			#ol-video-play-btn:hover,
			#ol-video-play-btn:focus{
				background-color: ' . $theme_color . ';
			}
			
			.ol-faq-panel-group .panel-default .panel-heading .panel-title a:hover{
				color: ' . $theme_color . ';
			}
			
			.ol-subscribe-form input[type="email"]:focus{
				border-color: ' . $theme_color . '; 
			}
			
			.ol-subscribe-content .mc4wp-form input[type="email"]:focus{
				border-color: ' . $theme_color . '; 
			}
			
			.ol-subscribe-form .ol-subcribe-btn{
				background-color: ' . $theme_color . ';
			}
			
			.ol-subscribe-content .mc4wp-form .ol-subcribe-btn,
			.ol-subscribe-content .mc4wp-form input[type="submit"]{
				background-color: ' . $theme_color . ';
			}
			
			.ol-blog-title a:hover,
			.ol-blog-title a:focus{
				color: ' . $theme_color . ';
			}
			
			.ol-blog-meta li a:hover,
			.ol-blog-meta li a:focus{
				color: ' . $theme_color . ';
			}
			
			.ol-blog-item-bottom .ol-blog-item-comments:hover,
			.ol-blog-item-bottom .ol-blog-item-comments:focus{
				color: ' . $theme_color . ';
			}
			
			.ol-blog-item-bottom .ol-read-more{
				color: ' . $theme_color . ';
			}
			
			.wpcf7-form .wpcf7-submit:hover{
				background-color: ' . $theme_color . ';
				border-color: ' . $theme_color . ';
			}
			
			.ol-single-contact-feature i{
				color: ' . $theme_color . ';
			}
			
			#ol-footer-callto-action{
				background-color: ' . $theme_color . ';
			}
			
			.ol-call-to-btn:hover,
			.ol-call-to-btn:focus{
				color: ' . $theme_color . ';
			}
			
			.ol-footer-widget-social li a:hover,
			.ol-footer-widget-social li a:focus{
				background-color: ' . $theme_color . ';
				border-color: ' . $theme_color . ';
			}
			
			.ol-footer-quick-link li a:hover,
			.ol-footer-quick-link li a:focus{
				color: ' . $theme_color . ';
			}
			
			.ol-footer-bottom-area p a:hover,
			.ol-footer-bottom-area p a:focus{
				color: ' . $theme_color . ';
			}
			
			#ol-preloader-wrapper{
				background-color: ' . $theme_color . ';
			}
			
			.ol-scroll-top {
				background-color: ' . $theme_color . ';
			}
			
			.ol-our-team-slide .slick-dots li{
			  border: 3px solid ' . $theme_color . ';
			}
			
			.ol-our-team-slide .slick-dots li.slick-active{
				background-color: ' . $theme_color . ';
			}
			
			.ol-breadcrumb li.active,
			.ol-breadcrumb .breadcrumb_last{
				color: ' . $theme_color . ';
			}
			
			.ol-blog-item-blockquote blockquote i{
				color: ' . $theme_color . ';	
			}
			
			.ol-blog-single-sidebar ul li a:hover,
			.ol-blog-single-sidebar ul li a:focus{
				color: ' . $theme_color . ';
			}
			
			.ol-sidebar-title{
				color: ' . $theme_color . ';
			}
			
			.ol-side-catg-nav li:hover,
			.ol-side-catg-nav li:focus{
				color: ' . $theme_color . ';
			}
			
			.ol-side-latest-post .ol-blog-item-tag{
				color: ' . $theme_color . ';
			}
			
			.tagcloud a:hover,
			.tagcloud a:focus{
				border-color: ' . $theme_color . ';
				color: ' . $theme_color . ';
			}
			
			.ol-text-widget a{
				color: ' . $theme_color . ';
			}
			
			.ol-blog-pagination li a:hover,
			.ol-blog-pagination li a:focus,
			.ol-blog-pagination li span:hover,
			.ol-blog-pagination li span:focus,
			.ol-blog-pagination li .current{
				background-color: ' . $theme_color . ';
				border-color: ' . $theme_color . ';	
			}
			
			.ol-blog-search input[type="text"]:focus{
				border-color: ' . $theme_color . ';	
			}
			
			.ol-newsletter .ol-subscribe-form .ol-subcribe-btn:hover{
				background-color: ' . $theme_color . ';
				border-color: ' . $theme_color . ';
			}
			
			.mc4wp-form input[type="submit"]:hover{
				background-color: ' . $theme_color . ';
				border-color: ' . $theme_color . ';
			}
			
			.ol-social-widget a:hover,
			.ol-social-widget a:focus{
				background-color: ' . $theme_color . ';
				border-color: ' . $theme_color . ';
			}
			
			.ol-blog-navigation a:hover,
			.ol-blog-navigation a:focus{
				border-color: ' . $theme_color . ';
				color: ' . $theme_color . ';
			}
			
			.ol-blog-details .ol-blog-item-content a,
			.ol-blog-details-archive-content .ol-blog-item-content a{
				color: ' . $theme_color . ';
			}
			
			.ol-blog-details .ol-blog-item-content a:hover,
			.ol-blog-details .ol-blog-item-content a:focus{
				color: ' . $theme_color . ';
			}
			
			.ol-post-share li a:hover,
			.ol-post-share li a:focus,
			.ol-post-tag li a:hover,
			.ol-post-tag li a:focus{
				color: ' . $theme_color . ';
			}
			
			.ol-comments-area .comments .commentlist .comment-reply-link:hover, 
			.ol-comments-area .comments .commentlist .comment-reply-link:focus,
			.ol-comments-area .comments .commentlist #cancel-comment-reply-link:hover,
			.ol-comments-area .comments .commentlist .author-name a:hover,
			#respond .logged-in-as a:hover{
			  color: ' . $theme_color . ';
			}
			
			.ol-comments-area .comments .comments-pagination a:hover, 
			.ol-comments-area .comments .comments-pagination a:focus {
				border-color: ' . $theme_color . ';
				color: ' . $theme_color . ';
			}
			
			#respond input[type="text"]:focus,
			#respond input[type="email"]:focus,
			#respond input[type="url"]:focus,
			#respond textarea:focus{
				border-color: ' . $theme_color . ';
			}
			
			#respond input[type="submit"]:hover{
				background-color: ' . $theme_color . ';
				border-color: ' . $theme_color . ';
			}
			
			.calendar_wrap table tfoot td a:hover,
			.calendar_wrap table tfoot td a:focus{
				color: ' . $theme_color . ';
			}
			
			/* shop page */
			
			.woocommerce .ol-shop-single-item:hover{
				border-color: ' . $theme_color . ' transparent;
			}
			
			.woocommerce span.onsale {
				background: ' . $theme_color . ' none repeat scroll 0 0;
			}
			
			.woocommerce .star-rating{
				color: ' . $theme_color . ';
			}
			
			.woocommerce .ol-shop-item-title a:hover,
			.woocommerce .ol-shop-item-title a:focus{
				color: ' . $theme_color . ';
			}
			
			.woocommerce .add_to_cart_button:hover,
			.woocommerce .add_to_cart_button:focus,
			.woocommerce .compare-list .wc-forward:hover{
				background-color: ' . $theme_color . ' !important;
				border-color: ' . $theme_color . ';
			}
			
			.ol-shop-group-buttons a:hover,
			.ol-shop-group-buttons a:focus{
				color: ' . $theme_color . ';
			}
			
			.woocommerce nav.woocommerce-pagination ul li span.current{
				background-color: ' . $theme_color . ';
				border-color: ' . $theme_color . ';
			}
			
			.woocommerce nav.woocommerce-pagination ul li a:hover,
			.woocommerce nav.woocommerce-pagination ul li a:focus{
				background-color: ' . $theme_color . ';
				border-color: ' . $theme_color . ';
			}
			
			#yith-quick-view-modal .single_add_to_cart_button,
			.ol-shop-archive-content .summary button.single_add_to_cart_button,
			.woocommerce .ol-shop-archive-content .summary .woocommerce-variation-add-to-cart-disabled .button,
			.woocommerce .ol-shop-archive-content .summary .woocommerce-variation-add-to-cart-disabled .button:hover,
			.woocommerce .wishlist_table a.yith-wcqv-button,
			.woocommerce .wishlist_table .product-name a.yith-wcqv-button{
				background-color: ' . $theme_color . ';
				border: 1px solid ' . $theme_color . ';
			}
			
			#yith-quick-view-modal .single_add_to_cart_button:hover,
			#yith-quick-view-modal .single_add_to_cart_button:focus,
			.ol-shop-archive-content .summary button.single_add_to_cart_button:hover,
			.ol-shop-archive-content .summary button.single_add_to_cart_button:focus{
				color: ' . $theme_color . ';
			}
			
			#yith-quick-view-modal .product_meta a:hover,
			#yith-quick-view-modal .product_meta a:focus{
				color: ' . $theme_color . ';
			}
			
			.woocommerce .woocommerce-message a.button:hover,
			.woocommerce .woocommerce-message a.button:focus,
			.woocommerce .woocommerce-info a.button:hover,
			.woocommerce .woocommerce-info a.button:focus{
				background-color: ' . $theme_color . ';
				border-color: ' . $theme_color . ';
			}
			
			.yith-wcwl-wishlistexistsbrowse a:hover,
			.yith-wcwl-wishlistexistsbrowse a:focus,
			.yith-wcwl-wishlistaddedbrowse a:hover,
			.yith-wcwl-wishlistaddedbrowse a:focus,
			.ol-shop-archive-content .summary .product_meta a:hover,
			.ol-shop-archive-content .summary .product_meta a:focus{
				color: ' . $theme_color . ';
			}
			
			.woocommerce .summary .yith-wcwl-add-to-wishlist a.add_to_wishlist:hover,
			.woocommerce .summary .yith-wcwl-add-to-wishlist a.add_to_wishlist:focus,
			.woocommerce .summary .yith-wcwl-add-to-wishlist .show a.button:hover,
			.woocommerce .summary .yith-wcwl-add-to-wishlist .show a.button:focus,
			.woocommerce .summary a.compare:hover,
			.woocommerce .summary a.compare:focus{
				border-color: ' . $theme_color . ';
				color: ' . $theme_color . ';
			}
			
			.ol-shop-archive-content .related h2{
				color: ' . $theme_color . ';
			}
			
			.woocommerce #review_form #respond .form-submit input:hover{
				background-color: ' . $theme_color . ';
				border-color: ' . $theme_color . ';
			}
			
			.widget-title {
				color: ' . $theme_color . ';
			}
			
			.product-categories li a:hover,
			.product-categories li a:focus{
				color: ' . $theme_color . ';
			}
			
			.ol-shop-search input[type="text"]:focus {
			  	border-color: ' . $theme_color . ';
			}
			
			.woocommerce .ol-shop-details-categories a:hover,
			.woocommerce .ol-shop-details-categories a:focus{
				color: ' . $theme_color . ';
			}
			
			.woocommerce .ol-shop-checkout .panel-group .panel-default .panel-heading .panel-title a:hover,
			.woocommerce .ol-shop-checkout .panel-group .panel-default .panel-heading a[aria-expanded="true"]{
				border-color: ' . $theme_color . ';
				color: ' . $theme_color . ';
			}
			
			.woocommerce .ol-shop-checkout .panel-group .ol-checkout-login .ol-lost-password a:hover,
			.woocommerce .ol-shop-checkout .panel-group .ol-checkout-login .ol-lost-password a:focus{
				color: ' . $theme_color . ';
			}
			
			.woocommerce .in-stock{
				color: ' . $theme_color . ' !important;
			}
			
			.woocommerce .ol-shop-single-content .cart button.add_to_cart_button:hover{
				background-color: ' . $theme_color . ';
				border-color: ' . $theme_color . ';
			}
			
			.woocommerce .ol-shop-details-buttongroup .ol-wishlist-btn:hover,
			.woocommerce .ol-shop-details-buttongroup .ol-wishlist-btn:focus,
			.woocommerce .ol-shop-details-buttongroup .ol-compare-btn:hover,
			.woocommerce .ol-shop-details-buttongroup .ol-compare-btn:focus,
			.woocommerce .products .product_type_simple:hover,
			.woocommerce .products .product_type_simple:focus{
				background-color: ' . $theme_color . ';
				border-color: ' . $theme_color . ';	
			}
			
			.woocommerce .ol-shop-details-share a:hover,
			.woocommerce .ol-shop-details-share a:focus{
				color: ' . $theme_color . ';
			}
			
			.woocommerce .ol-shop-panel-group .panel-default .panel-heading .panel-title a:hover,
			.woocommerce .ol-shop-panel-group .panel-default .panel-heading .panel-title a:focus{
				color: ' . $theme_color . ';
			}
			
			.ol-shop-related-slide .slick-prev::before,
			.ol-shop-related-slide .slick-next::before{
				color: ' . $theme_color . ';
			}
			
			.woocommerce .shop_table tbody tr td a:hover,
			.shop_table tbody tr td a:focus{
				color: ' . $theme_color . ';
			}
			
			.woocommerce .login .ol-lost-password a:hover{
				color: ' . $theme_color . ';
			}
			
			.woocommerce .products .add_to_cart_button:hover,
			.woocommerce .products .add_to_cart_button:focus,
			.woocommerce table.wishlist_table td.product-add-to-cart a.add_to_cart{
				background-color: ' . $theme_color . ';
			}
			
			.woocommerce ul.products li.product:hover, 
			.woocommerce-page ul.products li.product:hover{
				border-color: ' . $theme_color . ' transparent;
			}
			
			.woocommerce a.compare:hover::before,
			.woocommerce a.yith-wcqv-button:hover::before{
				border-color: ' . $theme_color . ';
				color: ' . $theme_color . ';
			}
			
			.woocommerce ul.products li.product h3:hover,
			.woocommerce ul.products li.product h3:focus,
			.woocommerce ul.products li.product:hover h3{
				color: ' . $theme_color . ';
			}
			
			.woocommerce ul.products .wc-forward:hover,
			.woocommerce ul.products .wc-forward:focus{
				border-color: ' . $theme_color . ';
				color: ' . $theme_color . ';
			}
			
			.woocommerce-product-search input[type="submit"]:hover{
				background-color: ' . $theme_color . ';
				border-color: ' . $theme_color . ';
			}
			
			.woocommerce .widget_price_filter .ui-slider .ui-slider-range,
			.woocommerce .widget_price_filter .ui-slider .ui-slider-handle,
			.woocommerce .widget_price_filter .price_slider_amount .button:hover,
			.widget_shopping_cart_content a.button{
				background-color: ' . $theme_color . ';
			}	
			
			.woocommerce .widget_layered_nav ul li a:hover,
			.woocommerce .widget_layered_nav ul li a:focus,
			.woocommerce .widget_layered_nav_filters ul li a:hover,
			.woocommerce .widget_layered_nav_filters ul li a:focus{
				color: ' . $theme_color . ';
			}
			
			.woocommerce .yith-woocompare-widget li a:hover{
				color: ' . $theme_color . ';
			}
			
			.woocommerce .yith-woocompare-widget .clear-all:hover,
			.woocommerce .yith-woocompare-widget .clear-all:focus,
			.woocommerce .yith-woocompare-widget a.compare:hover,
			.woocommerce .yith-woocompare-widget a.compare:focus{
				background-color: ' . $theme_color . ';
				border-color: ' . $theme_color . ';
			}
			
			.woocommerce-message {
				border-color: ' . $theme_color . ';
			}
			
			.woocommerce-message::before,
			.woocommerce-message a:hover,
			.woocommerce-message a:focus{
				color: ' . $theme_color . ';
			}
			
			.woocommerce-product-search input[type="search"]:focus{
				border-color: ' . $theme_color . ';
			}
			
			.woocommerce ul.cart_list li a:hover, 
			.woocommerce ul.product_list_widget li a:hover{
				color: ' . $theme_color . ';
			}	
			
			.woocommerce table.shop_table input.button,
			.woocommerce table.shop_table input.button[disabled]:disabled,
			.wc-proceed-to-checkout a.checkout-button, 
			.woocommerce-cart .wc-proceed-to-checkout a.checkout-button, 
			.woocommerce-checkout .wc-proceed-to-checkout a.checkout-button,
			.woocommerce .return-to-shop .wc-backward:hover,
			.woocommerce .return-to-shop .wc-backward:focus{
				background-color: ' . $theme_color . ';	
			}
			
			.woocommerce .return-to-shop .wc-backward{
				border: 1px solid ' . $theme_color . ';
			}
			
			.woocommerce-info {
				border-top-color: ' . $theme_color . ';
			}
			
			.woocommerce-info::before {
				color: ' . $theme_color . ';
			}
			
			.woocommerce-checkout .login input[type="submit"],
			.woocommerce .lost_reset_password .form-row input[type="submit"],
			.woocommerce .lost_reset_password .form-row .button,
			.woocommerce .checkout_coupon .form-row input[type="submit"],
			.woocommerce #payment #place_order, 
			.woocommerce-page #payment #place_order,
			.woocommerce-account .login input[type="submit"],
			.woocommerce-account .edit-account input[type="submit"],
			.woocommerce-account .woocommerce-MyAccount-content form input[type="submit"],
			.woocommerce .woocommerce-MyAccount-content .order-again a.button{
				background-color: ' . $theme_color . ';
			}
			
			.woocommerce-account .woocommerce .woocommerce-MyAccount-navigation ul li a:hover,
			.woocommerce-account .woocommerce .woocommerce-MyAccount-navigation ul li a:focus{
				color: ' . $theme_color . ';
			}

			.ol-cart-btn{
				background-color: ' . $theme_color . ';
			}
			
			.ol-portfolio-navigation a:hover,
			.ol-portfolio-navigation a:focus{
				border-color: ' . $theme_color . ';
				color: ' . $theme_color . ';
			}
			
			.ol-portfolio-detail-info a:hover,
			.ol-portfolio-detail-info a:focus{
				color: ' . $theme_color . ';
			}
			
			.ol-portfolio-detail-share a:hover,
			.ol-portfolio-detail-share a:focus{
				color: ' . $theme_color . ';
			}
			
			.ol-portfolio-related-project h3{
				color: ' . $theme_color . ';
			}
			
			.ol-work-item-related-thumbonil:before{
				background-color: ' . $theme_color . ';
			}
			
			.ol-work-related-link{
				background-color: ' . $theme_color . ';
			}
			
			.ol-related-project-slide .slick-prev::before, 
			.ol-related-project-slide .slick-next::before {
			  color: ' . $theme_color . ';
			}
			
			.ol-portfolio #ol-header.ol-header-box-fixed {
			  background-color: ' . $theme_color . ' !important;
			}
			
			.ol-page #ol-header.ol-header-box-fixed{
				background-color: ' . $theme_color . ' !important;
			}
			
			
			.ol-blog #ol-header.ol-header-box-fixed{
				background-color: ' . $theme_color . ' !important;
			}
			
			.ol-error-page h2 {
				color: ' . $theme_color . ';
			}
			
			.ol-service-item:hover .ol-service-icon{
				border-color: ' . $theme_color . ';
				background-color: ' . $theme_color . ';
			} 
			
			.wpcf7-form .wpcf7-text:focus,
			.wpcf7-form .wpcf7-textarea:focus{
				border-color: ' . $theme_color . ';
			}
			
			#ol-header .navbar-header .navbar-toggle {
				background-color: ' . $theme_color . ';
			}
			
			.ol-blog-single-sidebar .widgettitle,
			.ol-blog-single-sidebar .widgettitle a{
				color: ' . $theme_color . ';
			}
			
			.ol-blog-item-link-post a:hover,
			.ol-blog-item-link-post a:focus{
				background-color: ' . $theme_color . ';
			}	
			
			.ol-author-social li a:hover,
			.ol-author-social li a:focus{
				border-color: ' . $theme_color . ';
				color: ' . $theme_color . ';
			}
			
			/* bbpress */
			
			#bbpress-forums #bbp-search-form #bbp_search:focus,
			#bbpress-forums li.bbp-header{
				border-color: ' . $theme_color . ';
			}
			
			#bbpress-forums #bbp-search-form #bbp_search_submit,
			.bbp-login-form .bbp-submit-wrapper button.user-submit:hover,
			#bbpress-forums li.bbp-header {
				background-color: ' . $theme_color . ';
			}
			
			.bbp-pagination-links a:hover,
			.bbp-pagination-links span.current {
				background-color: ' . $theme_color . ';
				border: 1px solid ' . $theme_color . ';
			}
			
			#bbpress-forums fieldset.bbp-form div.bbp-submit-wrapper button:hover,
			#bbpress-forums #bbp-your-profile .submit button:hover{
				background-color: ' . $theme_color . ';
				border-color: ' . $theme_color . ';
			}
			
			#bbpress-forums li.bbp-forum-info .bbp-forum-title{
				color: ' . $theme_color . ';
			}


			
			/* learn more btn */
			
			
			.ol-learn-more {
				color: #fff;
				font-size: 16px;
				font-weight: 700;
				text-align: center;
				-webkit-transition: background-color 0.3s, color 0.3s;
				transition: background-color 0.3s, color 0.3s;
			}
			
			.ol-learn-more::before {
				content: "";
				position: absolute;
				top: 0;
				left: 0;
				width: 100%;
				height: 100%;
				z-index: -1;
				border-radius: inherit;
				opacity: 0;
				-webkit-transform: scale3d(0.6, 0.6, 1);
				transform: scale3d(0.6, 0.6, 1);
				-webkit-transition: -webkit-transform 0.3s, opacity 0.3s;
				transition: transform 0.3s, opacity 0.3s;
				-webkit-transition-timing-function: cubic-bezier(0.75, 0, 0.125, 1);
				transition-timing-function: cubic-bezier(0.75, 0, 0.125, 1);
			}
			
			.ol-learn-more:hover{
				background-color: #fff;
				text-decoration: none;
			}
			
			.ol-learn-more:focus{
				color: #fff;
			}
			
			.ol-learn-more:hover::before {
				-webkit-transform: scale3d(1, 1, 1);
				transform: scale3d(1, 1, 1);
				opacity: 1;
			}	
			
			#infinite-handle button:hover,
			#infinite-handle span button:hover{
				color: ' . $theme_color . ' !important;
				border: 1px solid ' . $theme_color . ' !important;	
			}
					
		</style>';
	
	
	echo $site_color_scheme;	

}
add_action( 'wp_head', 'outlook_site_color_scheme' ); 