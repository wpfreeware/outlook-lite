<?php
/*
 *	This file contains "Testimonials" section & fields 
 *	
 *	@version 1.0
 *	@since outlook-lite 1.0
 */
 
  	/*
	 *	Section -- Testimonials | Front Page
	 *
	 *	@since outlook-lite 1.0
	 */
	 
	outlook_Kirki::add_section( 'outlook_testimonials_faqs_section', array(
	    'title'          	=> __( 'Testimonials', 'outlook-lite' ),
	    'priority'       	=> 10,
	    'panel'       	 	=> 'outlook_front_page_panel',
	    'capability'     	=> 'edit_theme_options',
	) );
	
	
	/*
	 *	Fields -- Testimonials
	 *
	 *	@since outlook-lite 1.0
	 */
	 
	// enable/disable
	outlook_Kirki::add_field( 'outlook_config', array(
		'type'        		=> 'switch',
		'settings'    		=> 'outlook_testimonials_faqs_enable_disable',
		'label'       		=> __( 'Enable or disable testimonials section', 'outlook-lite' ),		
		'section'     		=> 'outlook_testimonials_faqs_section',
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
		'settings' 			=> 'outlook_testimonials_faqs_title',
		'label'    			=> __( 'Title', 'outlook-lite' ),
		'section'  			=> 'outlook_testimonials_faqs_section',
		'default'  			=> '',
		'priority' 			=> 10,
		'active_callback'   => array(
			array(
				'setting'  		=> 'outlook_testimonials_faqs_enable_disable',
				'operator' 		=> '==',
				'value'    		=> 1,
			),
		),
        'transport'   		=> 'postMessage',
        'js_vars'     		=> array(
            array(
                'element'  		=> '.ol-faq-area .ol-title-area .ol-title',
                'function' 		=> 'html',
            ),
        ),				
	) );
	
	// description
	outlook_Kirki::add_field( 'outlook_config', array(
		'type'     			=> 'textarea',
		'settings' 			=> 'outlook_testimonials_faqs_desc',
		'label'    			=> __( 'Description', 'outlook-lite' ),
		'section'  			=> 'outlook_testimonials_faqs_section',
		'default'  			=> '',
		'priority' 			=> 10,
		'active_callback'   => array(
			array(
				'setting'  		=> 'outlook_testimonials_faqs_enable_disable',
				'operator' 		=> '==',
				'value'    		=> 1,
			),
		),
        'transport'   		=> 'postMessage',
        'js_vars'     		=> array(
            array(
                'element'  		=> '.ol-faq-area .ol-title-area p',
                'function' 		=> 'html',
            ),
        ),				
	) );
	
	// testimonial slide speed
	outlook_Kirki::add_field( 'outlook_config', array(
		'type'        => 'slider',
		'settings'    => 'outlook_testimonial_slide_speed',
		'label'       => __( 'Testimonial Slide speed (milliseconds)', 'outlook-lite' ),
		'section'     => 'outlook_testimonials_faqs_section',
		'default'     => 3000,
		'choices'     => array(
			'min'  => '3000',
			'max'  => '100000',
			'step' => '1000',
		),
		'active_callback'   => array(
			array(
				'setting'  		=> 'outlook_testimonials_faqs_enable_disable',
				'operator' 		=> '==',
				'value'    		=> 1,
			),
		),		
	) );	
	
	// testimonial slide autoplay
	outlook_Kirki::add_field( 'outlook_config', array(
		'type'     			=> 'checkbox',
		'settings' 			=> 'outlook_testimonial_autoplay_on_off',
		'label'    			=> __( 'Disable testimonial slide autoplay', 'outlook-lite' ),
		'section'  			=> 'outlook_testimonials_faqs_section',
		'priority' 			=> 10,
		'default'     		=> '0',
		'active_callback'   => array(
			array(
				'setting'  		=> 'outlook_testimonials_faqs_enable_disable',
				'operator' 		=> '==',
				'value'    		=> 1,
			),
		),				
	) );	
	
	// testimonial slide dot nav	
	outlook_Kirki::add_field( 'outlook_config', array(
		'type'     			=> 'checkbox',
		'settings' 			=> 'outlook_testimonial_dot_nav',
		'label'    			=> __( 'Disable testimonial slide dot nav', 'outlook-lite' ),
		'section'  			=> 'outlook_testimonials_faqs_section',
		'priority' 			=> 10,
		'default'     		=> '0',
		'active_callback'   => array(
			array(
				'setting'  		=> 'outlook_testimonials_faqs_enable_disable',
				'operator' 		=> '==',
				'value'    		=> 1,
			),
		),				
	) ); 		    