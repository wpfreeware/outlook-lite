<?php
/*
 *	This file contains theme info options.
 *	
 *	@version 1.0
 *	@since outlook-lite 1.0
 */
	
	/*
	 *	Section -- theme info
	 *
	 *	@since outlook-lite 1.0
	 */
	 
	outlook_Kirki::add_section( 'outlook_theme_info_section', array(
	    'title'          	=> __( 'Theme Info', 'outlook-lite' ),
	    'priority'       	=> 8,
	    'capability'     	=> 'edit_theme_options',
	) );
	
	// logo
	outlook_Kirki::add_field( 'outlook_config', array(
		'type'        		=> 'custom',
		'settings'    		=> 'outlook_theme_customizer_logo',
		'section'     		=> 'outlook_theme_info_section',
		'default'     		=> '<img src="'. get_template_directory_uri() . '/img/logo.png" alt="logo" />',
		'priority'    		=> 10,
	) );	
	
	// documentation
	outlook_Kirki::add_field( 'outlook_config', array(
		'type'        		=> 'custom',
		'settings'    		=> 'outlook_theme_doc',
		'label'       		=> __( 'Important Links', 'outlook-lite' ),
		'section'     		=> 'outlook_theme_info_section',
		'default'     		=> '<a href="https://www.wpfreeware.com" target="_blank">' . esc_html__( 'Documentation', 'outlook-lite' ) . '</a>',
		'priority'    		=> 10,
	) );
	
	// free vs pro
	outlook_Kirki::add_field( 'outlook_config', array(
		'type'        		=> 'custom',
		'settings'    		=> 'outlook_theme_free_vs_pro',
		'section'     		=> 'outlook_theme_info_section',
		'default'     		=> '<a href="https://www.wpfreeware.com" target="_blank">' . esc_html__( 'Free vs Pro', 'outlook-lite' ) . '</a>',
		'priority'    		=> 10,
	) );	
	
	// Support
	outlook_Kirki::add_field( 'outlook_config', array(
		'type'        		=> 'custom',
		'settings'    		=> 'outlook_theme_support',
		'section'     		=> 'outlook_theme_info_section',
		'default'     		=> '<a href="https://www.wpfreeware.com" target="_blank">' . esc_html__( 'Support', 'outlook-lite' ) . '</a>',
		'priority'    		=> 10,
	) );
	
	// leave review
	outlook_Kirki::add_field( 'outlook_config', array(
		'type'        		=> 'custom',
		'settings'    		=> 'outlook_theme_leave_review',
		'section'     		=> 'outlook_theme_info_section',
		'default'     		=> '<a href="https://www.wpfreeware.com" target="_blank">' . esc_html__( 'Leave a review', 'outlook-lite' ) . '</a>',
		'priority'    		=> 10,
	) );		