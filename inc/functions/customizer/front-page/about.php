<?php
/*
 *	This file contains "About" section & fields 
 *	
 *	@version 1.0
 *	@since outlook-lite 1.0
 */
 
 	/*
	 *	Section -- About | Front Page
	 *
	 *	@since outlook-lite 1.0
	 */
	 
	outlook_Kirki::add_section( 'outlook_about_section', array(
	    'title'          	=> __( 'About', 'outlook-lite' ),
	    'priority'       	=> 10,
	    'panel'       	 	=> 'outlook_front_page_panel',
	    'capability'     	=> 'edit_theme_options',
	) );
	

	/*
	 *	Fields -- About | About Area
	 *	Fields - Image | Retina Image | Title | Descritpion | Button Text | Button Link
	 *
	 *	@since outlook-lite 1.0
	 */
	
	// enable/disable	
	outlook_Kirki::add_field( 'outlook_config', array(
		'type'        		=> 'switch',
		'settings'    		=> 'outlook_about_enable_disable',
		'label'       		=> __( 'Enable or disable About section', 'outlook-lite' ),		
		'section'     		=> 'outlook_about_section',
		'default'     		=> '1',
		'priority'    		=> 10,
		'choices'     		=> array(
			'on'  => esc_attr__( 'Enable', 'outlook-lite' ),
			'off' => esc_attr__( 'Disable', 'outlook-lite' ),
		),
	) );		 
	
	// image 	
	outlook_Kirki::add_field( 'outlook_config', array(
		'type'        		=> 'image',
		'settings'    		=> 'outlook_about_image',
		'label'       		=> __( 'Upload Image', 'outlook-lite' ),
		'section'     		=> 'outlook_about_section',
		'default'     		=> '',
		'priority'    		=> 10,
		'active_callback'   => array(
			array(
				'setting'  		=> 'outlook_about_enable_disable',
				'operator' 		=> '==',
				'value'    		=> 1,
			),
		),
        'transport'   		=> 'postMessage',
        'js_vars'     		=> array(
            array(
                'element'  		=> '.about-us-row-image',
                'function' 		=> 'html',
                'attr'     		=> 'src',
            ),
        ),			
	) );
		
	// retina image
	outlook_Kirki::add_field( 'outlook_config', array(
		'type'        		=> 'image',
		'settings'    		=> 'outlook_about_retina_image',
		'label'       		=> __( 'Upload 2x Image (optional)', 'outlook-lite' ),
        'description' 		=> __( 'retina devices required 2x (double pixel) size image for displaying HD view. The above image will appear in retina devices by default if no image uploaded.', 'outlook-lite' ),
		'section'     		=> 'outlook_about_section',
		'default'     		=> '',
		'priority'    		=> 10,
		'active_callback'   => array(
			array(
				'setting'  		=> 'outlook_about_enable_disable',
				'operator' 		=> '==',
				'value'    		=> 1,
			),
		),
        'transport'   		=> 'postMessage',
        'js_vars'     		=> array(
            array(
                'element'  		=> '.about-us-row-image',
                'function' 		=> 'html',
                'attr'     		=> 'src',
            ),
        ),						
	) );
	
	// title
	outlook_Kirki::add_field( 'outlook_config', array(
		'type'     			=> 'text',
		'settings' 			=> 'outlook_about_title',
		'label'    			=> __( 'Title', 'outlook-lite' ),
		'section'  			=> 'outlook_about_section',
		'default'  			=> '',
		'priority' 			=> 10,
		'active_callback'   => array(
			array(
				'setting'  		=> 'outlook_about_enable_disable',
				'operator' 		=> '==',
				'value'    		=> 1,
			),
		),
        'transport'   		=> 'postMessage',
        'js_vars'     		=> array(
            array(
                'element'  		=> '.ol-about-us-right .ol-title-area .ol-title',
                'function' 		=> 'html',
            ),
        ),				
	) );
	
	// short description
	outlook_Kirki::add_field( 'outlook_config', array(
		'type'     			=> 'textarea',
		'settings' 			=> 'outlook_about_desc',
		'label'    			=> __( 'Description', 'outlook-lite' ),
		'section'  			=> 'outlook_about_section',
		'default'  			=> '',
		'priority' 			=> 10,
		'active_callback'   => array(
			array(
				'setting'  		=> 'outlook_about_enable_disable',
				'operator' 		=> '==',
				'value'    		=> 1,
			),
		),
        'transport'   		=> 'postMessage',
        'js_vars'     		=> array(
            array(
                'element'  		=> '.ol-about-us-right-content p',
                'function' 		=> 'html',
            ),
        ),				
	) );
	
	// button text
	outlook_Kirki::add_field( 'outlook_config', array(
		'type'     			=> 'text',
		'settings' 			=> 'outlook_about_button_text',
		'label'    			=> __( 'Button Text', 'outlook-lite' ),
		'section'  			=> 'outlook_about_section',
		'default'  			=> '',
		'priority' 			=> 10,
		'active_callback'   => array(
			array(
				'setting'  		=> 'outlook_about_enable_disable',
				'operator' 		=> '==',
				'value'    		=> 1,
			),
		),
        'transport'   		=> 'postMessage',
        'js_vars'     		=> array(
            array(
                'element'  		=> '.ol-about-us-right-content .ol-button',
                'function' 		=> 'html',
            ),
        ),				
	) );
	
	// button url	
	outlook_Kirki::add_field( 'outlook_config', array(
		'type'     			=> 'text',
		'settings' 			=> 'outlook_about_button_url',
		'label'    			=> __( 'Button URL', 'outlook-lite' ),
		'section'  			=> 'outlook_about_section',
		'sanitize_callback' => 'esc_url_raw',
		'default'     		=> '',
		'priority' 			=> 10,
		'active_callback'   => array(
			array(
				'setting'  		=> 'outlook_about_enable_disable',
				'operator' 		=> '==',
				'value'    		=> 1,
			),
		),		
	) );
	
	// button target
	outlook_Kirki::add_field( 'outlook_config', array(
		'type'     			=> 'checkbox',
		'settings' 			=> 'outlook_about_button_url_target',
		'label'    			=> __( 'Check to open in a new tab', 'outlook-lite' ),
		'section'  			=> 'outlook_about_section',
		'priority' 			=> 10,
		'default'     		=> false,
		'active_callback'   => array(
			array(
				'setting'  		=> 'outlook_about_enable_disable',
				'operator' 		=> '==',
				'value'    		=> 1,
			),
		),		
	) );