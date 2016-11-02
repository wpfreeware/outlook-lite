<?php
/*
 *	This file contains "404 page" section & fields 
 *	
 *	@version 1.0
 *	@since outlook-lite 1.0
 */
	
	/*
	 *	Section -- 404 page
	 *
	 *	@since outlook-lite 1.0
	 */
	 
	outlook_Kirki::add_section( 'outlook_four_zero_four_section', array(
	    'title'          	=> __( '404 Page', 'outlook-lite' ),
	    'priority'       	=> 10,
	    'capability'     	=> 'edit_theme_options',
	) );
	
	// 404 text
	outlook_Kirki::add_field( 'outlook_config', array(
		'type'     			=> 'text',
		'settings' 			=> 'outlook_404_title_text',
		'label'    			=> __( '404 Text', 'outlook-lite' ),
		'section'  			=> 'outlook_four_zero_four_section',
		'priority' 			=> 10,
		'default'     		=> '',
        'transport'   		=> 'postMessage',
        'js_vars'     		=> array(
            array(
                'element'  		=> '.ol-error-page h2',
                'function' 		=> 'html',
            ),
        ),				
	) );
	
	// 404 subtitle text
	outlook_Kirki::add_field( 'outlook_config', array(
		'type'     			=> 'text',
		'settings' 			=> 'outlook_404_subtitle_text',
		'label'    			=> __( 'Subtitle Text', 'outlook-lite' ),
		'section'  			=> 'outlook_four_zero_four_section',
		'priority' 			=> 10,
		'default'     		=> '',
        'transport'   		=> 'postMessage',
        'js_vars'     		=> array(
            array(
                'element'  		=> '.ol-error-page span',
                'function' 		=> 'html',
            ),
        ),				
	) );
	
	// 404 short description
	outlook_Kirki::add_field( 'outlook_config', array(
		'type'     			=> 'textarea',
		'settings' 			=> 'outlook_404_short_desc_text',
		'label'    			=> __( 'Short Description', 'outlook-lite' ),
		'section'  			=> 'outlook_four_zero_four_section',
		'priority' 			=> 10,
		'default'     		=> '',
        'transport'   		=> 'postMessage',
        'js_vars'     		=> array(
            array(
                'element'  		=> '.ol-error-page p',
                'function' 		=> 'html',
            ),
        ),				
	) );
	
	// 404 button text
	outlook_Kirki::add_field( 'outlook_config', array(
		'type'     			=> 'text',
		'settings' 			=> 'outlook_404_btn_text',
		'label'    			=> __( 'Button text', 'outlook-lite' ),
		'section'  			=> 'outlook_four_zero_four_section',
		'priority' 			=> 10,
		'default'     		=> '',
        'transport'   		=> 'postMessage',
        'js_vars'     		=> array(
            array(
                'element'  		=> '.ol-error-page a',
                'function' 		=> 'html',
            ),
        ),				
	) );
	
	// 404 button url	
	outlook_Kirki::add_field( 'outlook_config', array(
		'type'     			=> 'text',
		'settings' 			=> 'outlook_404_btn_url',
		'label'    			=> __( 'Button URL', 'outlook-lite' ),
		'section'  			=> 'outlook_four_zero_four_section',
		'sanitize_callback' => 'esc_url_raw',
		'default'     		=> '',
		'priority' 			=> 10,		
	) );				