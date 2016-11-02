<?php
/*
 *	This file contains "Blog Layouts" section & fields.
 *	
 *	@version 1.0
 *	@since outlook-lite 1.0
 */
	/*
	 *	Section -- Blog Layouts
	 *
	 *	@since outlook-lite 1.0
	 */
	 
	outlook_Kirki::add_section( 'outlook_blog_layout_section', array(
	    'title'          	=> __( 'Blog Settings', 'outlook-lite' ),
	    'priority'       	=> 10,
	    'capability'     	=> 'edit_theme_options',
	    'panel'     		=> 'outlook_blog_panel',
	) );
	
	outlook_Kirki::add_field( 'outlook_config', array(
		'type'        		=> 'radio',
		'settings'    		=> 'outlook_blog_layout_option',
		'label'       		=> __( 'Choose blog layout', 'outlook-lite' ),
		'section'     		=> 'outlook_blog_layout_section',
		'default'     		=> 'ol-right-sidebar',
		'priority'    		=> 10,
		'choices'     		=> array(
			'ol-right-sidebar'    => esc_attr__( 'Right sidebar', 'outlook-lite' ),
			'ol-left-sidebar' 	  => esc_attr__( 'Left sidebar', 'outlook-lite' ),
			'ol-no-sidebar'  	  => esc_attr__( 'No sidebar', 'outlook-lite' ),
			'ol-fullwidth'  	  => esc_attr__( 'Fullwidth', 'outlook-lite' ),
		),
	) );
	
	// excerpt or full content
	outlook_Kirki::add_field( 'outlook_config', array(
		'type'        		=> 'radio',
		'settings'    		=> 'outlook_blog_excerpt_full',
		'label'       		=> __( 'Excerpt or Full Content', 'outlook-lite' ),
		'description'       => __( 'Choose to have excerpt or full content on archive pages index/archive/search.', 'outlook-lite' ),		
		'section'     		=> 'outlook_blog_layout_section',
		'default'     		=> 'ol-excerpt',
		'priority'    		=> 10,
		'choices'     		=> array(
			'ol-excerpt'   		  => esc_attr__( 'Excerpt', 'outlook-lite' ),
			'ol-full-content' 	  => esc_attr__( 'Full Content', 'outlook-lite' ),
		),
	) );
	
	// pagination style
	outlook_Kirki::add_field( 'outlook_config', array(
		'type'        		=> 'radio',
		'settings'    		=> 'outlook_blog_pagination_option',
		'label'       		=> __( 'Pagination Style', 'outlook-lite' ),
		'description'       => __( 'Choose blog pagination style which will appear on archive pages index/archive/search.', 'outlook-lite' ),		
		'section'     		=> 'outlook_blog_layout_section',
		'default'     		=> 'ol-numeric-navi',
		'priority'    		=> 10,
		'choices'     		=> array(
			'ol-numeric-navi'   	=> esc_attr__( 'Numeric', 'outlook-lite' ),
			'ol-next-prev-navi' 	=> esc_attr__( 'Next / Previous', 'outlook-lite' ),
			'ol-disable-navi' 		=> esc_attr__( 'none', 'outlook-lite' ),
		),
	) );		
	
	// on/off category
	outlook_Kirki::add_field( 'outlook_config', array(
		'type'     			=> 'checkbox',
		'settings' 			=> 'outlook_blog_meta_cat',
		'label'    			=> __( 'Hide categories', 'outlook-lite' ),
		'section'  			=> 'outlook_blog_layout_section',
		'priority' 			=> 10,
		'default'     		=> '0',				
	) );
	
	// on/off author name
	outlook_Kirki::add_field( 'outlook_config', array(
		'type'     			=> 'checkbox',
		'settings' 			=> 'outlook_blog_meta_author',
		'label'    			=> __( 'Hide author name', 'outlook-lite' ),
		'section'  			=> 'outlook_blog_layout_section',
		'priority' 			=> 10,
		'default'     		=> '0',				
	) );
	
	// on/off date
	outlook_Kirki::add_field( 'outlook_config', array(
		'type'     			=> 'checkbox',
		'settings' 			=> 'outlook_blog_meta_date',
		'label'    			=> __( 'Hide date', 'outlook-lite' ),
		'section'  			=> 'outlook_blog_layout_section',
		'priority' 			=> 10,
		'default'     		=> '0',				
	) );
	
	// on/off comments
	outlook_Kirki::add_field( 'outlook_config', array(
		'type'     			=> 'checkbox',
		'settings' 			=> 'outlook_blog_single_comments_count',
		'label'    			=> __( 'Hide post single comments count', 'outlook-lite' ),
		'section'  			=> 'outlook_blog_layout_section',
		'priority' 			=> 10,
		'default'     		=> '0',				
	) );	

	// tags enable/disable
	outlook_Kirki::add_field( 'outlook_config', array(
		'type'     			=> 'checkbox',
		'settings' 			=> 'outlook_blog_single_tags_on_off',
		'label'    			=> __( 'Hide tags in post single', 'outlook-lite' ),
		'section'  			=> 'outlook_blog_layout_section',
		'priority' 			=> 10,
		'default'     		=> '0',				
	) );
	
	// next/prev enable/disable
	outlook_Kirki::add_field( 'outlook_config', array(
		'type'     			=> 'checkbox',
		'settings' 			=> 'outlook_blog_single_post_navi',
		'label'    			=> __( 'Hide next/prev in post single', 'outlook-lite' ),
		'section'  			=> 'outlook_blog_layout_section',
		'priority' 			=> 10,
		'default'     		=> '0',				
	) );
	
	// author bio enable/disable
	outlook_Kirki::add_field( 'outlook_config', array(
		'type'     			=> 'checkbox',
		'settings' 			=> 'outlook_blog_single_author_bio',
		'label'    			=> __( 'Hide author bio in post single', 'outlook-lite' ),
		'section'  			=> 'outlook_blog_layout_section',
		'priority' 			=> 10,
		'default'     		=> '0',				
	) );	
	
	// related posts enable/disable
	outlook_Kirki::add_field( 'outlook_config', array(
		'type'     			=> 'checkbox',
		'settings' 			=> 'outlook_blog_single_related_posts',
		'label'    			=> __( 'Hide related posts in post single', 'outlook-lite' ),
		'section'  			=> 'outlook_blog_layout_section',
		'priority' 			=> 10,
		'default'     		=> '0',				
	) );	
	
	// on/off footer call to action
	outlook_Kirki::add_field( 'outlook_config', array(
		'type'     			=> 'switch',
		'settings' 			=> 'outlook_blog_callout',
		'label'       		=> __( 'Footer Call To Action', 'outlook-lite' ),
		'section'  			=> 'outlook_blog_layout_section',
		'priority' 			=> 10,
		'default'     		=> '1',
		'description'       => __( 'Disable footer call to action from blog pages.', 'outlook-lite' ),						
	) );											