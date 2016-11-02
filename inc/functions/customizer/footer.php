<?php
/*
 *	This file contains "Footer" section & fields 
 *	
 *	@version 1.0
 *	@since outlook-lite 1.0
 */
	
	/*
	 *	Section -- Footer
	 *
	 *	@since outlook-lite 1.0
	 */
	 
	outlook_Kirki::add_section( 'outlook_footer_section', array(
	    'title'          	=> __( 'Footer', 'outlook-lite' ),
	    'priority'       	=> 10,
	    'capability'     	=> 'edit_theme_options',
	) );
	
	// header styles
	outlook_Kirki::add_field( 'outlook_config', array(
		'type'        		=> 'radio',
		'settings'    		=> 'outlook_footer_top_option',
		'label'       		=> __( 'Footer top style', 'outlook-lite' ),
		'description'       => __( 'Add some widgets to see the footer top in action from Widgets menu.', 'outlook-lite' ),
		'section'     		=> 'outlook_footer_section',
		'default'     		=> 'four-column',
		'priority'    		=> 10,
		'choices'     		=> array(
			'two-column'   		=> esc_attr__( 'Two Column', 'outlook-lite' ),
			'three-column' 		=> esc_attr__( 'Three Column', 'outlook-lite' ),
			'four-column'  		=> esc_attr__( 'Four Column', 'outlook-lite' ),
		),
	) );	
	
	// Footer bottom text
	outlook_Kirki::add_field( 'outlook_config', array(
		'type'     			=> 'text',
		'settings' 			=> 'outlook_footer_bottom_text',
		'label'    			=> __( 'Footer Text', 'outlook-lite' ),
		'section'  			=> 'outlook_footer_section',
		'priority' 			=> 10,
		'default'     		=> '',
        'transport'   		=> 'postMessage',
        'js_vars'     		=> array(
            array(
                'element'  		=> '.ol-footer-bottom-area p',
                'function' 		=> 'html',
            ),
        ),				
	) );	
	
	// Footer top enable/disable
	outlook_Kirki::add_field( 'outlook_config', array(
		'type'     			=> 'checkbox',
		'settings' 			=> 'outlook_footer_top',
		'label'    			=> __( 'Check to hide footer top globally.', 'outlook-lite' ),
		'section'  			=> 'outlook_footer_section',
		'priority' 			=> 10,
		'default'     		=> '0',		
	) );

	// Footer bottom enable/disable
	outlook_Kirki::add_field( 'outlook_config', array(
		'type'     			=> 'checkbox',
		'settings' 			=> 'outlook_footer_bottom',
		'label'    			=> __( 'Check to hide footer bottom globally.', 'outlook-lite' ),
		'section'  			=> 'outlook_footer_section',
		'priority' 			=> 10,
		'default'     		=> '0',		
	) );