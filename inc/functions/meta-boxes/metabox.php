<?php
/**
 * Include and setup custom metaboxes and fields. (make sure you copy this file to outside the CMB2 directory)
 *
 * Be sure to replace all instances of 'yourprefix_' with your project's prefix.
 * http://nacin.com/2010/05/11/in-wordpress-prefix-everything/
 *
 *  @package  CMB2
 *  @license  http://www.opensource.org/licenses/gpl-license.php GPL v2.0 (or later)
 *  @link     https://github.com/WebDevStudios/CMB2
 *
 *	@version 1.0
 *	@since outlook-lite 1.0
 */
 
 /*  
  *	Post metabox & fields
  *
  *	@since outlook-lite 1.0
  */ 
require_once( get_template_directory() . '/inc/functions/meta-boxes/metabox-post.php' );

 /*  
  *	Page metabox & fields
  *
  *	@since outlook-lite 1.0
  */ 
require_once( get_template_directory() . '/inc/functions/meta-boxes/metabox-page.php' );
 
 /*  
  *	Portfolio metaboxes & fileds
  *
  *	@since outlook-lite 1.0
  */ 
require_once( get_template_directory() . '/inc/functions/meta-boxes/metabox-portfolio.php' );

 /*  
  *	Jetpack Testimonial metabox & fields
  *
  *	@since outlook-lite 1.0
  */ 
require_once( get_template_directory() . '/inc/functions/meta-boxes/metabox-testimonial.php' );