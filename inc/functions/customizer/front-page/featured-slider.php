<?php
/*
 *	This file contains featured slider section & fields 
 *	
 *	@version 1.0
 *	@since outlook-lite 1.0
 */	
	/*
	 *	Section -- Slider | Front Page
	 *
	 *	@since outlook-lite 1.0
	 */
	 
	outlook_Kirki::add_section( 'outlook_slider_section', array(
	    'title'          => __( 'Featured Slider', 'outlook-lite' ),
	    'priority'       => 10,
	    'panel'       	 => 'outlook_front_page_panel',
	    'capability'     => 'edit_theme_options',
	) );

	
	/*
	 *	Fields -- slides | slider
	 *	Fields	-	Repeater ( Image | Retina Image | Title | Description | Button Text | Button Link | Button Target ) |
	 				
	 *	@since outlook-lite 1.0
	 */
		 
    outlook_Kirki::add_field( 'outlook_config', array(
        'type'        	=> 'repeater',
        'label'       	=> __( 'Add Slides', 'outlook-lite' ),
        'settings'    	=> 'outlook_slide_option',		        
        'priority'    	=> 10,
        'section'     	=> 'outlook_slider_section',        
        'default'     	=> array(),
		'row_label' 	=> array(               
	        'type' 	=> 'text',
	        'value' => esc_attr__( 'slide', 'outlook-lite' ),
		),
        'fields' 		=> array(
                'ol_slide_image'        	=> array(
                'type'                  	=> 'image',
                'label'                 	=> esc_attr__( 'Upload image', 'outlook-lite' ),
                'default'               	=> '',
            ),
                'ol_slide_retina_image' 	=> array(
                'type'                  	=> 'image',
                'label'                 	=> esc_attr__( 'Upload 2x image (optional)', 'outlook-lite' ),
				'description' 				=> esc_attr__( 'retina devices required 2x (double pixel) size image for displaying HD view. The above image will appear in retina devices by default if no image uploaded.', 'outlook-lite' ),
                'default'               	=> '',
            ),
                'ol_slide_text'         	=> array(
                'type'                  	=> 'text',
                'label'                 	=> esc_attr__( 'Slide title', 'outlook-lite' ),
                'default'               	=> '',
            ),
                'ol_slide_short_desc'   	=> array(
                'type'                  	=> 'textarea',
                'label'                 	=> esc_attr__( 'Slide short description', 'outlook-lite' ),
                'default'               	=> '',
            ),
                'ol_slide_button_text'  	=> array(
                'type'                  	=> 'text',
                'label'                 	=> esc_attr__( 'Button text', 'outlook-lite' ),
                'default'               	=> '',
            ),
                'ol_slide_button_link'  	=> array(
                'type'                  	=> 'text',
                'label'                 	=> esc_attr__( 'Button link', 'outlook-lite' ),
                'default'               	=> '',
            ),
                'ol_slide_button_target'	=> array(
                'type'                  	=> 'checkbox',
                'label'                 	=> esc_attr__( 'Check to open in a new tab', 'outlook-lite' ),
                'default'               	=> false,
            ),                                                           
        ),
    ) );
    
    // slide animation
	outlook_Kirki::add_field( 'outlook_config', array(
		'type'        	=> 'radio',
		'settings'    	=> 'outlook_slide_animation',
		'label'       	=> __( 'Slide Animation', 'outlook-lite' ),
		'section'     	=> 'outlook_slider_section',
		'default'     	=> 'slide',
		'priority'    	=> 10,
		'choices'     	=> array(
			'slide'  => esc_attr__( 'Slide', 'outlook-lite' ),
			'fade' 	 => esc_attr__( 'Fade', 'outlook-lite' ),
		),
	) );
	
	// slide speed
	outlook_Kirki::add_field( 'outlook_config', array(
		'type'        => 'slider',
		'settings'    => 'outlook_slide_speed',
		'label'       => __( 'Slide speed (milliseconds)', 'outlook-lite' ),
		'section'     => 'outlook_slider_section',
		'default'     => 7000,
		'choices'     => array(
			'min'  => '5000',
			'max'  => '100000',
			'step' => '1000',
		),
	) );	
	
	// slide autoplay
	outlook_Kirki::add_field( 'outlook_config', array(
		'type'     			=> 'checkbox',
		'settings' 			=> 'outlook_slide_autoplay_on_off',
		'label'    			=> __( 'Check to disable autoplay', 'outlook-lite' ),
		'section'  			=> 'outlook_slider_section',
		'priority' 			=> 10,
		'default'     		=> '0',		
	) );	
	
	// slide dot nav	
	outlook_Kirki::add_field( 'outlook_config', array(
		'type'     			=> 'checkbox',
		'settings' 			=> 'outlook_slide_dot_nav',
		'label'    			=> __( 'Check to disable slide dot nav', 'outlook-lite' ),
		'section'  			=> 'outlook_slider_section',
		'priority' 			=> 10,
		'default'     		=> '0',		
	) );	
	
	// slide next/prev nav
	outlook_Kirki::add_field( 'outlook_config', array(
		'type'     			=> 'checkbox',
		'settings' 			=> 'outlook_slide_next_prev_nav',
		'label'    			=> __( 'Check to disable slide next/prev nav', 'outlook-lite' ),
		'section'  			=> 'outlook_slider_section',
		'priority' 			=> 10,
		'default'     		=> '0',		
	) );					        	