<?php
/*
 *	This file contains "Blog" section & fields 
 *	
 *	@version 1.0
 *	@since outlook-lite 1.0
 */
 
	/*
	 *	Section -- Blog | Front Page
	 *
	 *	@since outlook-lite 1.0
	 */
	 
	outlook_Kirki::add_section( 'outlook_home_blog_section', array(
	    'title'          => __( 'Blog', 'outlook-lite' ),
	    'priority'       => 10,
	    'panel'       	 => 'outlook_front_page_panel',
	    'capability'     => 'edit_theme_options',
	) );
	

	/*
	 *	Fields -- Blog
	 *	Fields - Switch | Title | Post count | Button text | Button url
	 *
	 *	@since outlook-lite 1.0
	 */
	
	// enable/disable	
	outlook_Kirki::add_field( 'outlook_config', array(
		'type'        		=> 'switch',
		'settings'    		=> 'outlook_home_blog_enable_disable',
		'label'       		=> __( 'Enable or disable Blog section', 'outlook-lite' ),		
		'section'     		=> 'outlook_home_blog_section',
		'default'     		=> '1',
		'priority'    		=> 10,
		'choices'     		=> array(
			'on'  => esc_attr__( 'Enable', 'outlook-lite' ),
			'off' => esc_attr__( 'Disable', 'outlook-lite' ),
		),
	) );
	
	// title
	outlook_Kirki::add_field( 'outlook_config', array(
		'type'     			=> 'text',
		'settings' 			=> 'outlook_home_blog_title',
		'label'    			=> __( 'Title', 'outlook-lite' ),
		'section'  			=> 'outlook_home_blog_section',
		'default'  			=> '',
		'priority' 			=> 10,
		'active_callback'   => array(
			array(
				'setting'  		=> 'outlook_home_blog_enable_disable',
				'operator' 		=> '==',
				'value'    		=> 1,
			),
		),
        'transport'   		=> 'postMessage',
        'js_vars'     		=> array(
            array(
                'element'  		=> '.ol-blog-area .ol-title-area .ol-title',
                'function' 		=> 'html',
            ),
        ),				
	) );
	
	// post count
	outlook_Kirki::add_field( 'outlook_config', array(
		'type'        		=> 'number',
		'settings'    		=> 'outlook_home_blog_post_count',
		'label'       		=> __( 'How many posts you want to display?', 'outlook-lite' ),
		'section'     		=> 'outlook_home_blog_section',
		'default'     		=> 3,
		'choices'     		=> array(
			'min'  => 3,
			'max'  => 30,
			'step' => 3,
		),
		'active_callback'   => array(
			array(
				'setting'  		=> 'outlook_home_blog_enable_disable',
				'operator' 		=> '==',
				'value'    		=> 1,
			),
		),				
	) );
	
	// enable/disable categories
	outlook_Kirki::add_field( 'outlook_config', array(
		'type'     			=> 'checkbox',
		'settings' 			=> 'outlook_home_blog_categories',
		'label'    			=> __( 'Check to disable categories', 'outlook-lite' ),
		'section'  			=> 'outlook_home_blog_section',
		'priority' 			=> 10,
		'default'     		=> '0',		
	) );
	
	// enable/disable author name
	outlook_Kirki::add_field( 'outlook_config', array(
		'type'     			=> 'checkbox',
		'settings' 			=> 'outlook_home_blog_author_name',
		'label'    			=> __( 'Check to disable author name', 'outlook-lite' ),
		'section'  			=> 'outlook_home_blog_section',
		'priority' 			=> 10,
		'default'     		=> '0',		
	) );
	
	// enable/disable post date
	outlook_Kirki::add_field( 'outlook_config', array(
		'type'     			=> 'checkbox',
		'settings' 			=> 'outlook_home_blog_post_date',
		'label'    			=> __( 'Check to disable post date', 'outlook-lite' ),
		'section'  			=> 'outlook_home_blog_section',
		'priority' 			=> 10,
		'default'     		=> '0',		
	) );
	
	// enable/disable comment
	outlook_Kirki::add_field( 'outlook_config', array(
		'type'     			=> 'checkbox',
		'settings' 			=> 'outlook_home_blog_post_comment_count',
		'label'    			=> __( 'Check to disable post comment count', 'outlook-lite' ),
		'section'  			=> 'outlook_home_blog_section',
		'priority' 			=> 10,
		'default'     		=> '0',		
	) );
	
	// enable/disable read more link
	outlook_Kirki::add_field( 'outlook_config', array(
		'type'     			=> 'checkbox',
		'settings' 			=> 'outlook_home_blog_post_readmore_link',
		'label'    			=> __( 'Check to disable post read more link', 'outlook-lite' ),
		'section'  			=> 'outlook_home_blog_section',
		'priority' 			=> 10,
		'default'     		=> '0',		
	) );			
	
	// button text
	outlook_Kirki::add_field( 'outlook_config', array(
		'type'     			=> 'text',
		'settings' 			=> 'outlook_home_blog_button_text',
		'label'    			=> __( 'Button text', 'outlook-lite' ),
		'section'  			=> 'outlook_home_blog_section',
		'default'  			=> '',
		'priority' 			=> 10,
		'active_callback'   => array(
			array(
				'setting'  		=> 'outlook_home_blog_enable_disable',
				'operator' 		=> '==',
				'value'    		=> 1,
			),
		),
        'transport'   		=> 'postMessage',
        'js_vars'     		=> array(
            array(
                'element'  		=> '.ol-all-post-btn-area .ol-button',
                'function' 		=> 'html',
            ),
        ),				
	) );
	
	// button url
	outlook_Kirki::add_field( 'outlook_config', array(
		'type'     			=> 'text',
		'settings' 			=> 'outlook_home_blog_button_url',
		'label'    			=> __( 'Button url', 'outlook-lite' ),
		'section'  			=> 'outlook_home_blog_section',
		'default'  			=> '',
		'priority' 			=> 10,
		'sanitize_callback' => 'esc_url_raw',
		'active_callback'   => array(
			array(
				'setting'  		=> 'outlook_home_blog_enable_disable',
				'operator' 		=> '==',
				'value'    		=> 1,
			),
		),				
	) );						