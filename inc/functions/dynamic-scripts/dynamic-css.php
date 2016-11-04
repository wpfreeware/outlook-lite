<?php
/*
 * 	This file contains theme dynamic css
 *	
 *	@version 1.0
 *	@since outlook-lite 1.0
 */	
 
/**
 *	set paths
 */
$dynamic_css_path = get_template_directory() . '/inc/functions/dynamic-scripts';

/**
 *	contains "Parallax" section styles
 *	
 *  @since outlook-lite 1.0
 */
require_once( $dynamic_css_path . '/css/parallax-image-css.php' );


/**
 *	contains "Blog Title" section styles.
 *	Will appear on blog archive pages.
 *	
 *  @since outlook-lite 1.0
 */
require_once( $dynamic_css_path . '/css/blog-title.php' );

/**
 *	contains "WooCommerce title" section styles.
 *	Will appear all shop pages.
 *	
 *  @since outlook-lite 1.0
 */
require_once( $dynamic_css_path . '/css/woo-title.php' );

/**
 *	contains "bbPress title" section styles.
 *	Will appear all bbPress pages.
 *	
 *  @since outlook-lite 1.0
 */
require_once( $dynamic_css_path . '/css/bbpress-title.php' );			