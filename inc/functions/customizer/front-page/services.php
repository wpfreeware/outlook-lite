<?php
/*
 *	This file contains "Services" section & fields 
 *	
 *	@version 1.0
 *	@since outlook-lite 1.0
 */
 
  	/*
	 *	Section -- Service | Front Page
	 *
	 *	@since outlook-lite 1.0
	 */
	 
	outlook_Kirki::add_section( 'outlook_services_section', array(
	    'title'          	=> __( 'Services', 'outlook-lite' ),
	    'priority'       	=> 10,
	    'panel'       	 	=> 'outlook_front_page_panel',
	    'capability'     	=> 'edit_theme_options',
	) );
	
	
	/*
	 *	Fields -- Services | Services Section
	 *	Fields - Title | Repeater Field ( icon | service | service description )
	 *
	 *	@since outlook-lite 1.0
	 */
	 
	// enable/disable
	outlook_Kirki::add_field( 'outlook_config', array(
		'type'        		=> 'switch',
		'settings'    		=> 'outlook_services_enable_disable',
		'label'       		=> __( 'Enable or disable Services section', 'outlook-lite' ),		
		'section'     		=> 'outlook_services_section',
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
		'settings' 			=> 'outlook_services_title',
		'label'    			=> __( 'Title', 'outlook-lite' ),
		'section'  			=> 'outlook_services_section',
		'default'  			=> '',
		'priority' 			=> 10,
		'active_callback'   => array(
			array(
				'setting'  		=> 'outlook_services_enable_disable',
				'operator' 		=> '==',
				'value'    		=> 1,
			),
		),
        'transport'   		=> 'postMessage',
        'js_vars'     		=> array(
            array(
                'element'  		=> '.ol-service-area .ol-title-area .ol-title',
                'function' 		=> 'html',
            ),
        ),				
	) );
	
	// Services
    outlook_Kirki::add_field( 'outlook_config', array(
        'type'        		=> 'repeater',
        'settings'    		=> 'outlook_services_option',        
        'label'       		=> __( 'Add Service', 'outlook-lite' ),
        'section'     		=> 'outlook_services_section',				        
        'priority'    		=> 10,
        'default'     		=> array(),
        'row_label' 		=> array(               
	        'type' 							=> 'text',
	        'value' 						=> esc_attr__( 'service', 'outlook-lite' ),
		),
		'active_callback'   => array(
			array(
				'setting'  					=> 'outlook_services_enable_disable',
				'operator' 					=> '==',
				'value'    					=> 1,
			),
		),		        
        'fields' 			=> array(
                'ol_service_icon'         	=> array(
                'type'                  	=> 'select',
                'label'                 	=> esc_attr__( 'Icon', 'outlook-lite' ),
                'choices'     				=> outlook_font_awesome(),                
                'default'               	=> '',               
            ),
                'ol_service_title'   		=> array(
                'type'                  	=> 'text',
                'label'                 	=> esc_attr__( 'Title', 'outlook-lite' ),
                'default'               	=> '',                
            ),
                'ol_service_desc'  			=> array(
                'type'                  	=> 'textarea',
                'label'                 	=> esc_attr__( 'Description', 'outlook-lite' ),
                'default'               	=> '',
            ),                                                          
        )
    ) );    