<?php
/*
 *	This file contains "Header" section & fields.
 *	Contains: header styles, search icon, off-canvas area, woo minicart.
 *	
 *	@version 1.0
 *	@since outlook-lite 1.0
 */
	
	/*
	 *	Section -- Header
	 *
	 *	@since outlook-lite 1.0
	 */
	 
	outlook_Kirki::add_section( 'outlook_header_section', array(
	    'title'          	=> __( 'Header Styles', 'outlook-lite' ),
	    'priority'       	=> 9,
	    'capability'     	=> 'edit_theme_options',
	) );
	
	// header styles
	outlook_Kirki::add_field( 'outlook_config', array(
		'type'        		=> 'radio',
		'settings'    		=> 'outlook_header_styles',
		'label'       		=> __( 'Choose Header Style', 'outlook-lite' ),
		'section'     		=> 'outlook_header_section',
		'default'     		=> 'standard-header',
		'priority'    		=> 10,
		'choices'     		=> array(
			'standard-header'   => esc_attr__( 'Standard Header', 'outlook-lite' ),
			'split-header' 		=> esc_attr__( 'Split Header', 'outlook-lite' ),
			'centered-logo'  	=> esc_attr__( 'Centered Logo Header', 'outlook-lite' ),
			'box-header'  		=> esc_attr__( 'Box Header', 'outlook-lite' ),
			'double-header'  	=> esc_attr__( 'Double Header', 'outlook-lite' ),
		),
	) );
	
	outlook_Kirki::add_field( 'outlook_config', array(
		'type'     => 'text',
		'settings' => 'outlook_header_double_top_phone',
		'label'    => __( 'Phone', 'outlook-lite' ),
		'section'  => 'outlook_header_section',
		'default'  => '',
		'priority' => 10,
		'active_callback'   => array(
			array(
				'setting'  		=> 'outlook_header_styles',
				'operator' 		=> '==',
				'value'    		=> 'double-header',
			),
		),				
	) );
	
	outlook_Kirki::add_field( 'outlook_config', array(
		'type'     => 'text',
		'settings' => 'outlook_header_double_top_email',
		'label'    => __( 'Email', 'outlook-lite' ),
		'section'  => 'outlook_header_section',
		'default'  => '',
		'priority' => 10,
		'active_callback'   => array(
			array(
				'setting'  		=> 'outlook_header_styles',
				'operator' 		=> '==',
				'value'    		=> 'double-header',
			),
		),				
	) );		
	
	// search icon
	outlook_Kirki::add_field( 'outlook_config', array(
		'type'     			=> 'checkbox',
		'settings' 			=> 'outlook_header_search',
		'label'    			=> __( 'Check to hide search icon', 'outlook-lite' ),
		'section'  			=> 'outlook_header_section',
		'priority' 			=> 10,
		'default'     		=> '0',		
	) );
	
	// off-canvas - standard header
	outlook_Kirki::add_field( 'outlook_config', array(
		'type'     			=> 'checkbox',
		'settings' 			=> 'outlook_header_off_canvas',
		'label'    			=> __( 'Check to hide off-canvas', 'outlook-lite' ),
		'section'  			=> 'outlook_header_section',
		'priority' 			=> 10,
		'default'     		=> '0',
		'active_callback'   => array(
			array(
				'setting'  		=> 'outlook_header_styles',
				'operator' 		=> '==',
				'value'    		=> 'standard-header',
			),
		),				
	) );	