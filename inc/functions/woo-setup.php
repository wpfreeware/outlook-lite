<?php
/**
 *  WooCommerce Functions for outlook-lite theme
 *
 *	@version 1.0
 *	@since outlook-lite 1.0
 */
 
if ( ! function_exists( 'outlook_woo_setup' ) ) :

	function outlook_woo_setup() {
		/*
		 * Enable support for WooCemmerce.
		*/
		add_theme_support( 'woocommerce' );
	
	}
	
endif; // outlook_woo_setup
add_action( 'after_setup_theme', 'outlook_woo_setup' );


// First let's remove original WooCommerce wrappers
remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20, 0);
remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);

// Now we can add our own, the same used for theme Pages
add_action('woocommerce_before_main_content', 'outlook_wrapper_start', 10);
add_action('woocommerce_after_main_content', 'outlook_wrapper_end', 10);

function outlook_wrapper_start() {
	
	echo ' <div class="'. outlook_shop_content_column() .'"> <div class="ol-shop-archive-content"> ';
	
}

function outlook_wrapper_end() {
	
	echo '</div> </div>';
	
}