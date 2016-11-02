<?php
/*
 *	This file contains "Callout Footer" section & fields 
 *	
 *	@version 1.0
 *	@since outlook-lite 1.0
 */
 
  	/*
	 *	Section -- Callout Footer | Front Page
	 *
	 *	@since outlook-lite 1.0
	 */
	 
	outlook_Kirki::add_section( 'outlook_callout_footer_section', array(
	    'title'          	=> __( 'Call To Action', 'outlook-lite' ),
	    'priority'       	=> 10,
	    'panel'       	 	=> 'outlook_front_page_panel',
	    'capability'     	=> 'edit_theme_options',
	) );
	
	
	/*
	 *	Fields -- Callout Footer
	 *	Fields - Enable,Disable | callout text | button text | button url
	 *
	 *	@since outlook-lite 1.0
	 */
	 
	// enable/disable
	outlook_Kirki::add_field( 'outlook_config', array(
		'type'        		=> 'switch',
		'settings'    		=> 'outlook_callout_enable_disable',
		'label'       		=> __( 'Call to action', 'outlook-lite' ),
		'description'       => __( 'Disable footer call to action from throughout the site.', 'outlook-lite' ),		
		'section'     		=> 'outlook_callout_footer_section',
		'default'     		=> '1',
		'priority'    		=> 10,
		'choices'     		=> array(
			'on'  				=> esc_attr__( 'Enable', 'outlook-lite' ),
			'off' 				=> esc_attr__( 'Disable', 'outlook-lite' ),
		),
	) );
	
	// callout text
	outlook_Kirki::add_field( 'outlook_config', array(
		'type'     			=> 'textarea',
		'settings' 			=> 'outlook_callout_text',
		'label'    			=> __( 'Callout Text', 'outlook-lite' ),
		'section'  			=> 'outlook_callout_footer_section',
		'default'  			=> '',
		'priority' 			=> 10,
		'active_callback'   => array(
			array(
				'setting'  		=> 'outlook_callout_enable_disable',
				'operator' 		=> '==',
				'value'    		=> 1,
			),
		),
        'transport'   		=> 'postMessage',
        'js_vars'     		=> array(
            array(
                'element'  		=> '.ol-footer-callto-action-area .ol-footer-callto-message p',
                'function' 		=> 'html',
            ),
        ),				
	) );
	
	// button text
	outlook_Kirki::add_field( 'outlook_config', array(
		'type'     			=> 'text',
		'settings' 			=> 'outlook_callout_button_text',
		'label'    			=> __( 'Button text', 'outlook-lite' ),
		'section'  			=> 'outlook_callout_footer_section',
		'default'  			=> '',
		'priority' 			=> 10,
		'active_callback'   => array(
			array(
				'setting'  		=> 'outlook_callout_enable_disable',
				'operator' 		=> '==',
				'value'    		=> 1,
			),
		),
        'transport'   		=> 'postMessage',
        'js_vars'     		=> array(
            array(
                'element'  		=> '.ol-footer-callto-button-area .ol-call-to-btn',
                'function' 		=> 'html',
            ),
        ),				
	) );
	
	// button url
	outlook_Kirki::add_field( 'outlook_config', array(
		'type'     			=> 'text',
		'settings' 			=> 'outlook_callout_button_url',
		'label'    			=> __( 'Button url', 'outlook-lite' ),
		'section'  			=> 'outlook_callout_footer_section',
		'sanitize_callback' => 'esc_url_raw',
		'default'  			=> '',
		'priority' 			=> 10,
		'active_callback'   => array(
			array(
				'setting'  		=> 'outlook_callout_enable_disable',
				'operator' 		=> '==',
				'value'    		=> 1,
			),
		),				
	) );
	
	// button target
	outlook_Kirki::add_field( 'outlook_config', array(
		'type'     			=> 'checkbox',
		'settings' 			=> 'outlook_callout_button_target',
		'label'    			=> __( 'Check to open the link in a new tab', 'outlook-lite' ),
		'section'  			=> 'outlook_callout_footer_section',
		'priority' 			=> 10,
		'default'     		=> '0',
		'active_callback'   => array(
			array(
				'setting'  		=> 'outlook_callout_enable_disable',
				'operator' 		=> '==',
				'value'    		=> 1,
			),
		),		
	) );		