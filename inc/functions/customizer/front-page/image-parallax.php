<?php
/*
 *	This file contains "Parallax" section & fields 
 *	
 *	@version 1.0
 *	@since outlook-lite 1.0
 */
 
  	/*
	 *	Section -- Parallax Image | Front Page
	 *
	 *	@since outlook-lite 1.0
	 */
	 
	outlook_Kirki::add_section( 'outlook_parallax_section', array(
	    'title'          	=> __( 'Parallax Image', 'outlook-lite' ),
	    'priority'       	=> 10,
	    'panel'       	 	=> 'outlook_front_page_panel',
	    'capability'     	=> 'edit_theme_options',
	) );
	
	
	/*
	 *	Fields -- Parallax Image | Call-to-action
	 *	Fields - Title | Description | Button text | Button url | Background Image
	 *
	 *	@since outlook-lite 1.0
	 */
	 
	// enable/disable
	outlook_Kirki::add_field( 'outlook_config', array(
		'type'        		=> 'switch',
		'settings'    		=> 'outlook_parallax_enable_disable',
		'label'       		=> __( 'Enable / Disable parallax image section', 'outlook-lite' ),		
		'section'     		=> 'outlook_parallax_section',
		'default'     		=> '1',
		'priority'    		=> 10,
		'choices'     		=> array(
			'on'  				=> esc_attr__( 'Enable', 'outlook-lite' ),
			'off' 				=> esc_attr__( 'Disable', 'outlook-lite' ),
		),
	) );
	
	// title
	outlook_Kirki::add_field( 'outlook_config', array(
		'type'     			=> 'text',
		'settings' 			=> 'outlook_parallax_title',
		'label'    			=> __( 'Title', 'outlook-lite' ),
		'section'  			=> 'outlook_parallax_section',
		'default'  			=> '',
		'priority' 			=> 10,
		'active_callback'   => array(
			array(
				'setting'  		=> 'outlook_parallax_enable_disable',
				'operator' 		=> '==',
				'value'    		=> 1,
			),
		),
        'transport'   		=> 'postMessage',
        'js_vars'     		=> array(
            array(
                'element'  		=> '.ol-image-parallax-area h1',
                'function' 		=> 'html',
            ),
        ),				
	) );
	
	// description
	outlook_Kirki::add_field( 'outlook_config', array(
		'type'     			=> 'textarea',
		'settings' 			=> 'outlook_parallax_desc',
		'label'    			=> __( 'Description', 'outlook-lite' ),
		'section'  			=> 'outlook_parallax_section',
		'default'  			=> '',
		'priority' 			=> 10,
		'active_callback'   => array(
			array(
				'setting'  		=> 'outlook_parallax_enable_disable',
				'operator' 		=> '==',
				'value'    		=> 1,
			),
		),
        'transport'   		=> 'postMessage',
        'js_vars'     		=> array(
            array(
                'element'  		=> '.ol-image-parallax-area p',
                'function' 		=> 'html',
            ),
        ),				
	) );
	
	// button text
	outlook_Kirki::add_field( 'outlook_config', array(
		'type'     			=> 'text',
		'settings' 			=> 'outlook_parallax_button_text',
		'label'    			=> __( 'Button Text', 'outlook-lite' ),
		'section'  			=> 'outlook_parallax_section',
		'default'  			=> '',
		'priority' 			=> 10,
		'active_callback'   => array(
			array(
				'setting'  		=> 'outlook_parallax_enable_disable',
				'operator' 		=> '==',
				'value'    		=> 1,
			),
		),
        'transport'   		=> 'postMessage',
        'js_vars'     		=> array(
            array(
                'element'  		=> '.ol-image-parallax-area .ol-learn-more',
                'function' 		=> 'html',
            ),
        ),				
	) );
	
	// button url	
	outlook_Kirki::add_field( 'outlook_config', array(
		'type'     			=> 'text',
		'settings' 			=> 'outlook_parallax_button_url',
		'label'    			=> __( 'Button URL', 'outlook-lite' ),
		'section'  			=> 'outlook_parallax_section',
		'sanitize_callback' => 'esc_url_raw',
		'default'     		=> '',
		'priority' 			=> 10,
		'active_callback'   => array(
			array(
				'setting'  		=> 'outlook_parallax_enable_disable',
				'operator' 		=> '==',
				'value'    		=> 1,
			),
		),		
	) );
	
	// button target
	outlook_Kirki::add_field( 'outlook_config', array(
		'type'     			=> 'checkbox',
		'settings' 			=> 'outlook_parallax_button_url_target',
		'label'    			=> __( 'Check to open the link in a new tab', 'outlook-lite' ),
		'section'  			=> 'outlook_parallax_section',
		'priority' 			=> 10,
		'default'     		=> '0',
		'active_callback'   => array(
			array(
				'setting'  		=> 'outlook_parallax_enable_disable',
				'operator' 		=> '==',
				'value'    		=> 1,
			),
		),		
	) );		
	 
    // background image
	outlook_Kirki::add_field( 'outlook_config', array(
		'type'        		=> 'image',
		'settings'    		=> 'outlook_parallax_bg_image',
		'label'       		=> __( 'Background Image', 'outlook-lite' ),
		'section'     		=> 'outlook_parallax_section',
		'default'     		=> '',
		'priority'    		=> 10,
		'active_callback'   => array(
			array(
				'setting'  		=> 'outlook_parallax_enable_disable',
				'operator' 		=> '==',
				'value'    		=> 1,
			),			
		),
        'transport'   		=> 'postMessage',
        'js_vars'     		=> array(
            array(
                'element'  		=> '#ol-image-parallax',
                'function' 		=> 'css',
                'property' 		=> 'background-image',
            ),
        ),			
	) );
		
	// background retina image
	outlook_Kirki::add_field( 'outlook_config', array(
		'type'        		=> 'image',
		'settings'    		=> 'outlook_parallax_bg_retina_image',
		'label'       		=> __( 'Upload 2x Image (optional)', 'outlook-lite' ),
        'description' 		=> __( 'retina devices required 2x (double pixel) size image for displaying HD view. The above image will appear in retina devices by default if no image uploaded.', 'outlook-lite' ),
		'section'     		=> 'outlook_parallax_section',
		'default'     		=> '',
		'priority'    		=> 10,
		'active_callback'   => array(
			array(
				'setting'  		=> 'outlook_parallax_enable_disable',
				'operator' 		=> '==',
				'value'    		=> 1,
			),			
		),
        'transport'   		=> 'postMessage',
        'js_vars'     		=> array(
            array(
                'element'  		=> '#ol-image-parallax',
                'function' 		=> 'css',
                'property' 		=> 'background-image',
            ),
        ),						
	) );
	
	// background size
	outlook_Kirki::add_field( 'outlook_config', array(
		'type'        		=> 'select',
		'settings'    		=> 'outlook_parallax_bg_size',
		'label'       		=> __( 'Background size', 'outlook-lite' ),
		'section'     		=> 'outlook_parallax_section',
		'default'     		=> 'cover',
		'priority'    		=> 10,
		'multiple'    		=> 1,
		'choices'     		=> array(
			'cover' 			=> esc_attr__( 'cover', 'outlook-lite' ),
			'contain' 			=> esc_attr__( 'contain', 'outlook-lite' ),
			'initial' 			=> esc_attr__( 'initial', 'outlook-lite' ),
		),
		'active_callback'   => array(
			array(
				'setting'  		=> 'outlook_parallax_enable_disable',
				'operator' 		=> '==',
				'value'    		=> 1,
			),			
		),		
	) );
	
	// background repeat
	outlook_Kirki::add_field( 'outlook_config', array(
		'type'        		=> 'select',
		'settings'    		=> 'outlook_parallax_bg_repeat',
		'label'       		=> __( 'Background repeat', 'outlook-lite' ),
		'section'     		=> 'outlook_parallax_section',
		'default'     		=> 'no-repeat',
		'priority'    		=> 10,
		'multiple'    		=> 1,
		'choices'     		=> array(
			'repeat' 			=> esc_attr__( 'Repeat', 'outlook-lite' ),
			'repeat-x' 			=> esc_attr__( 'Repeat X', 'outlook-lite' ),
			'repeat-y' 			=> esc_attr__( 'Repeat Y', 'outlook-lite' ),
			'no-repeat' 		=> esc_attr__( 'No Repeat', 'outlook-lite' ),
		),
		'active_callback'   => array(
			array(
				'setting'  		=> 'outlook_parallax_enable_disable',
				'operator' 		=> '==',
				'value'    		=> 1,
			),			
		),		
	) );		
	
	// background overlay color	 	
	outlook_Kirki::add_field( 'outlook_config', array(
		'type'        		=> 'color',
		'settings'    		=> 'outlook_parallax_bg_color',
		'label'       		=> __( 'Background overlay', 'outlook-lite' ),
		'section'     		=> 'outlook_parallax_section',
		'default'     		=> 'rgba(0, 0, 0, 0.3)',
		'priority'    		=> 10,
		'alpha'       		=> true,
		'active_callback'   => array(
			array(
				'setting'  		=> 'outlook_parallax_enable_disable',
				'operator' 		=> '==',
				'value'    		=> 1,
			),			
		),		
		'transport'   		=> 'auto',
        'output'      		=> array(
            array(
                'element'  		=> '#ol-image-parallax .ol-overlay',
                'property' 		=> 'background-color',
            ),
        ),					
	) );
	
	// enable/disable parallax effect
	outlook_Kirki::add_field( 'outlook_config', array(
		'type'     			=> 'checkbox',
		'settings' 			=> 'outlook_parallax_disable',
		'label'    			=> __( 'Check to disable parallax effect', 'outlook-lite' ),
		'section'  			=> 'outlook_parallax_section',
		'priority' 			=> 10,
		'default'     		=> '0',
		'active_callback'   => array(
			array(
				'setting'  		=> 'outlook_parallax_enable_disable',
				'operator' 		=> '==',
				'value'    		=> 1,
			),
		),		
	) );	