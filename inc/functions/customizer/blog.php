<?php
/*
 *	This file contains Blog, Archive, Search & 
 *	Blog Single pages panel, section & fields.
 *	
 *	@version 1.0
 *	@since outlook-lite 1.0
 */
 
 	/*
	 *	Panel -- Blog
	 *
	 *  @since outlook-lite 1.0
	 */	 	
	outlook_Kirki::add_panel( 'outlook_blog_panel', array(
	    'priority'    => 10,
	    'title'       => __( 'Blog', 'outlook-lite' ),
	) );
	
	/*  
	 *
	 *	Section/Fields - Blog Settings | Blog Archive & Single pages
	 *	Contains Blog Settings section & fields.
	 *
	 *	@since outlook-lite 1.0
	 */
	require_once( get_template_directory() . $customizer_path . '/blog/blog-settings.php' );	
	
	/*  
	 *
	 *	Section/Fields - Blog Title | Blog Archive pages
	 *	Contains Blog Title section & fields.
	 *
	 *	@since outlook-lite 1.0
	 */
	require_once( get_template_directory() . $customizer_path . '/blog/blog-title.php' );