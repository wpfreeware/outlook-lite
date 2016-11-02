<?php
/*
 *	This file contains Portfolio section & fields 
 *	
 *	@version 1.0
 *	@since outlook-lite 1.0
 */
 
	/*
	 *	Section -- Portfolio | Front Page
	 *
	 *	@since outlook-lite 1.0
	 */
	 
	outlook_Kirki::add_section( 'outlook_front_portfolio_section', array(
	    'title'          => __( 'Portfolio', 'outlook-lite' ),
	    'priority'       => 10,
	    'panel'       	 => 'outlook_front_page_panel',
	    'capability'     => 'edit_theme_options',
	) );
	

	/*
	 *	Fields -- Portfolio
	 *	Fields - Switch | Image | Retina Image | Title | Descritpion | Button Text | Button Link
	 *
	 *	@since outlook-lite 1.0
	 */
	
	// enable/disable	
	outlook_Kirki::add_field( 'outlook_config', array(
		'type'        		=> 'switch',
		'settings'    		=> 'outlook_portfolio_enable_disable',
		'label'       		=> __( 'Enable or disable Portfolio section', 'outlook-lite' ),		
		'section'     		=> 'outlook_front_portfolio_section',
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
		'settings' 			=> 'outlook_portfolio_title',
		'label'    			=> __( 'Title', 'outlook-lite' ),
		'section'  			=> 'outlook_front_portfolio_section',
		'default'  			=> '',
		'priority' 			=> 10,
		'active_callback'   => array(
			array(
				'setting'  		=> 'outlook_portfolio_enable_disable',
				'operator' 		=> '==',
				'value'    		=> 1,
			),
		),
        'transport'   		=> 'postMessage',
        'js_vars'     		=> array(
            array(
                'element'  		=> '#ol-our-work .ol-title-area .ol-title',
                'function' 		=> 'html',
            ),
        ),				
	) );
	
	// column
	outlook_Kirki::add_field( 'outlook_config', array(
		'type'        => 'select',
		'settings'    => 'outlook_portfolio_column',
		'label'       => __( 'Column', 'outlook-lite' ),
		'section'     => 'outlook_front_portfolio_section',
		'default'     => '4',
		'priority'    => 10,
		'multiple'    => 1,
		'choices'     => array(
			'12' 	=> esc_attr__( '1 Column', 'outlook-lite' ),
			'6' 	=> esc_attr__( '2 Column', 'outlook-lite' ),
			'3' 	=> esc_attr__( '4 Column', 'outlook-lite' ),
			'4' 	=> esc_attr__( '3 Column', 'outlook-lite' ),			
		),
		'active_callback'   => array(
			array(
				'setting'  		=> 'outlook_portfolio_enable_disable',
				'operator' 		=> '==',
				'value'    		=> 1,
			),
		),		
	) );	
	
	// portfolio display style
	outlook_Kirki::add_field( 'outlook_config', array(
		'type'        => 'select',
		'settings'    => 'outlook_portfolio_display_style',
		'label'       => __( 'Content display', 'outlook-lite' ),
		'section'     => 'outlook_front_portfolio_section',
		'default'     => 'outlook-portfolio-image-top',
		'priority'    => 10,
		'multiple'    => 1,
		'choices'     => array(
			'outlook-portfolio-image-top' 	=> esc_attr__( 'Image top | Content bottom', 'outlook-lite' ),
			'outlook-portfolio-image-left' 	=> esc_attr__( 'Image left | Content right', 'outlook-lite' ),
		),
		'active_callback'   => array(
			array(
				'setting'  		=> 'outlook_portfolio_enable_disable',
				'operator' 		=> '==',
				'value'    		=> 1,
			),
		),		
	) );				