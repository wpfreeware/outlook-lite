<?php
/*
 *	functions for outlook-lite theme
 *
 *	@file	functions.php
 *	@version 1.0
 *	@since outlook-lite 1.0
 */
  
/*
 *  Load after_setup_theme action hook.
 *
 *  Contains basic theme setup, registration such as menu, 
 *  thumbnail image, title, nav menus, content-width etc.
 */
require_once( 'inc/functions/after-theme-setup.php' );

 /*
  *  Load Bootstrap navwalker custom class
  *	
  *	 @link https://github.com/twittem/wp-bootstrap-navwalker
  */
require_once( 'inc/functions/wp_bootstrap_navwalker.php' );
 
 /**
  * Register widget area.
  *
  * @link https://codex.wordpress.org/Function_Reference/register_sidebar
  */
function outlook_widget_areas() {

	// Post sidebar
	register_sidebar( array(
		'name'          => __( 'Post Sidebar', 'outlook-lite' ),
		'id'            => 'outlook-post-sidebar',
		'description'   => __( 'Add your desire widgets here. Widgets will appear in archive pages & post single.', 'outlook-lite' ),
		'before_widget' => '<div id="%1$s" class="ol-blog-single-sidebar %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widgettitle ol-sidebar-title">',
		'after_title'   => '</h3>',
	) );
	
	// Page sidebar
	register_sidebar( array(
		'name'          => __( 'Page Sidebar', 'outlook-lite' ),
		'id'            => 'outlook-page-sidebar',
		'description'   => __( 'Add your desire widgets here. Widgets will appear in pages only.', 'outlook-lite' ),
		'before_widget' => '<div id="%1$s" class="ol-blog-single-sidebar %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widgettitle ol-sidebar-title">',
		'after_title'   => '</h3>',
	) );
	
	/*
	 *	WooCommerce sidebar
	 *	Check if WooCommerce is installed & activated
	 *
	 *	@since outlook-lite 1.0
	 */
	if ( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) {
		register_sidebar( array(
			'name'          => __( 'Shop Sidebar', 'outlook-lite' ),
			'id'            => 'outlook-shop-sidebar',
			'description'   => __( 'Add your desire widgets here. Widgets will appear in shop pages only.', 'outlook-lite' ),
			'before_widget' => '<div id="%1$s" class="ol-shop-single-sidebar %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="widgettitle ol-sidebar-title">',
			'after_title'   => '</h3>',
		) );
	}
	
	
	/*
	 *	bbPress sidebar
	 *	Check if bbPress is installed & activated
	 *
	 *	@since outlook-lite 1.0
	 */
	if ( function_exists( 'is_bbpress' ) ) {
		register_sidebar( array(
			'name'          => __( 'bbPress Sidebar', 'outlook-lite' ),
			'id'            => 'outlook-bbp-sidebar',
			'description'   => __( 'Add your desire widgets here. Widgets will appear in bbPress forum pages only.', 'outlook-lite' ),
			'before_widget' => '<div id="%1$s" class="ol-blog-single-sidebar %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="widgettitle ol-sidebar-title">',
			'after_title'   => '</h3>',
		) );
	}			
		
	// off-canvas widget area
	register_sidebar( array(
		'name'          => __( 'Off Canvas', 'outlook-lite' ),
		'id'            => 'outlook-off-canvas-sidebar',
		'description'   => __( 'Add your desire widgets here. Widgets will appear in the off-canvas area.', 'outlook-lite' ),
		'before_widget' => '<div id="%1$s" class="ol-blog-single-sidebar %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widgettitle ol-side-menu-title" >',
		'after_title'   => '</h2>',
	) );
	
	// footer widget area
	register_sidebar( array(
		'name'          => __( 'Footer', 'outlook-lite' ),
		'id'            => 'outlook-footer-sidebar',
		'description'   => __( 'Add your desire widgets here. Widgets will appear in the footer top area.', 'outlook-lite' ),
		'before_widget' => '<div class=" '. outlook_footer_top_column() .' "> <div class="ol-footer-widget">',
		'after_widget'  => '</div></div>',
		'before_title'  => '<h4 class="widgettitle ol-footer-title">',
		'after_title'   => '</h4>',
	) );	
	
}
add_action( 'widgets_init', 'outlook_widget_areas' );

/*
 *	Load theme scripts & styles
 *
 *	Contains all necessary js & css scripts.
 */
require_once( 'inc/functions/enqueue.php' );

/*
 * Add required plugins using TGM plugin activation class
 *
 * @since outlook-lite 1.0
 */
require_once( 'inc/functions/tgm/outlook-required-plugins.php' );

/*
 *  Embeed Kirki framework
 *  @link https://github.com/aristath/kirki  
 *
 *  @since outlook-lite 1.0.3
 */
include_once( dirname( __FILE__ ) . '/inc/kirki/kirki.php' );
  
/*
 *  Add customizer settings
 *	Add kirki framework to build customizer optoins. 
 *  @link https://github.com/aristath/kirki  
 *
 *  @since outlook-lite 1.0
 */
if ( class_exists( 'Kirki' ) ) {
	require_once( 'inc/functions/customizer/customizer.php' );
}

/**
 *  Add dynamic css
 *
 *  @since outlook-lite 1.0
 */
 require_once( 'inc/functions/dynamic-scripts/dynamic-css.php' );
 
/**
 *  Add dynamic js call
 *
 *  @since outlook-lite 1.0
 */
 require_once( 'inc/functions/dynamic-scripts/dynamic-js.php' );
 
 /**
  *  Theme color scheme
  *
  *  @since outlook-lite 1.0
  */
 require_once( 'inc/functions/dynamic-scripts/color-scheme.php' );
 
 /**
  *  Jetpack configuration file
  *
  *  @since outlook-lite 1.0
  */
 require_once( 'inc/functions/jetpack.php' );
 
 /**
  *  Commnets list template
  *
  *  @since outlook-lite 1.0
  */
 require_once( 'inc/functions/wp_comments_list.php' );
 
 /**
  *  WooCommerce setup
  *
  *  @since outlook-lite 1.0
  */
 require_once( 'inc/functions/woo-setup.php' );
 
 /**
  *  Add various theme necessary functions.
  *
  *  @since outlook-lite 1.0
  */
 require_once( 'inc/functions/miscellaneous.php' );