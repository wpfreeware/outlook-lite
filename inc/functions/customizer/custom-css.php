<?php
/*
 *	This file contains "Custom Css" section & fields 
 *	
 *	@version 1.0
 *	@since outlook-lite 1.0
 */
	
	/*
	 *	Section -- Custom Css
	 *
	 *	@since outlook-lite 1.0
	 */
	 
	outlook_Kirki::add_section( 'outlook_custom_css_section', array(
	    'title'          	=> __( 'Custom Css', 'outlook-lite' ),
	    'priority'       	=> 10,
	    'capability'     	=> 'edit_theme_options',
	) );
		
	outlook_Kirki::add_field( 'outlook_config', array(
		'type'        		=> 'code',
		'settings'    		=> 'outlook_custom_css_opton',
		'label'       		=> __( 'Custom Css', 'outlook-lite' ),
		'description'       => __( 'Put your css codes in the editor without the style tag. ex: body{ font-size: 12px; }', 'outlook-lite' ),
		'section'     		=> 'outlook_custom_css_section',
		'default'     		=> '',
		'priority'    		=> 10,
		'choices'     		=> array(
			'language' => 'css',
			'theme'    => 'monokai',
			'height'   => 250,
		),
	) );