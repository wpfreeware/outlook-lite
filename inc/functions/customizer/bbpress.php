<?php
/*
 *	This file contains "bbPress" section & fields.
 *	
 *	@version 1.0
 *	@since outlook-lite 1.0
 */

/*
 *	Check first if bbPress is activated
 *
 *	@since outlook-lite 1.0
 */
if ( function_exists( 'is_bbpress' ) ) :

	/*
	 *	Section -- bbPress Layouts
	 *
	 *	@since outlook-lite 1.0
	 */
	 
	outlook_Kirki::add_section( 'outlook_bbpress_section', array(
	    'title'          	=> __( 'bbPress', 'outlook-lite' ),
	    'priority'       	=> 10,
	    'capability'     	=> 'edit_theme_options',
	) );
	
	// bbPress layouts
	outlook_Kirki::add_field( 'outlook_config', array(
		'type'        		=> 'radio',
		'settings'    		=> 'outlook_bbpress_layout_option',
		'label'       		=> __( 'bbPress layout', 'outlook-lite' ),
		'section'     		=> 'outlook_bbpress_section',
		'default'     		=> 'ol-bbp-right-sidebar',
		'priority'    		=> 10,
		'choices'     		=> array(
			'ol-bbp-right-sidebar'    => esc_attr__( 'Right sidebar', 'outlook-lite' ),
			'ol-bbp-left-sidebar' 	  => esc_attr__( 'Left sidebar', 'outlook-lite' ),
			'ol-bbp-no-sidebar'  	  => esc_attr__( 'No sidebar', 'outlook-lite' ),
			'ol-bbp-fullwidth'  	  => esc_attr__( 'Fullwidth', 'outlook-lite' ),
		),
	) );		
	
	
	// enable/disable bbPress title section
	outlook_Kirki::add_field( 'outlook_config', array(
		'type'        		=> 'switch',
		'settings'    		=> 'outlook_bbpress_title_option',
		'label'       		=> __( 'bbPress Title Bar', 'outlook-lite' ),	
		'section'     		=> 'outlook_bbpress_section',
		'default'     		=> '1',
		'priority'    		=> 10,
		'choices'     		=> array(
			'on'  => esc_attr__( 'Enable', 'outlook-lite' ),
			'off' => esc_attr__( 'Disable', 'outlook-lite' ),
		),		
	) );			
		
    // background image
	outlook_Kirki::add_field( 'outlook_config', array(
		'type'        		=> 'image',
		'settings'    		=> 'outlook_bbpress_title_bg_image',
		'label'       		=> __( 'Title Bar Background', 'outlook-lite' ),
		'section'     		=> 'outlook_bbpress_section',
		'default'     		=> '',
		'priority'    		=> 10,
		'active_callback'   => array(
			array(
				'setting'  		=> 'outlook_bbpress_title_option',
				'operator' 		=> '==',
				'value'    		=> 1,
			),
		),		
        'transport'   		=> 'postMessage',
        'js_vars'     		=> array(
            array(
                'element'  		=> '#ol-page-sub-header.ol-bbpress-sub-header',
                'function' 		=> 'css',
                'property' 		=> 'background-image',
            ),
        ),			
	) );
		
	// background retina image
	outlook_Kirki::add_field( 'outlook_config', array(
		'type'        		=> 'image',
		'settings'    		=> 'outlook_bbpress_title_retina_bg_image',
		'label'       		=> __( '2x Title Background (optional)', 'outlook-lite' ),
        'description' 		=> __( 'retina devices required 2x (double pixel) size image for displaying HD view. The above image will appear in retina devices by default if no image uploaded.', 'outlook-lite' ),
		'section'     		=> 'outlook_bbpress_section',
		'default'     		=> '',
		'priority'    		=> 10,
		'active_callback'   => array(
			array(
				'setting'  		=> 'outlook_bbpress_title_option',
				'operator' 		=> '==',
				'value'    		=> 1,
			),
		),		
        'transport'   		=> 'postMessage',
        'js_vars'     		=> array(
            array(
                'element'  		=> '#ol-page-sub-header.ol-bbpress-sub-header',
                'function' 		=> 'css',
                'property' 		=> 'background-image',
            ),
        ),						
	) );
	
	// background size
	outlook_Kirki::add_field( 'outlook_config', array(
		'type'        		=> 'select',
		'settings'    		=> 'outlook_bbpress_title_bg_size',
		'label'       		=> __( 'Background size', 'outlook-lite' ),
		'section'     		=> 'outlook_bbpress_section',
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
				'setting'  		=> 'outlook_bbpress_title_option',
				'operator' 		=> '==',
				'value'    		=> 1,
			),
		),		
	) );
	
	// background repeat
	outlook_Kirki::add_field( 'outlook_config', array(
		'type'        		=> 'select',
		'settings'    		=> 'outlook_bbpress_title_bg_repeat',
		'label'       		=> __( 'Background repeat', 'outlook-lite' ),
		'section'     		=> 'outlook_bbpress_section',
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
				'setting'  		=> 'outlook_bbpress_title_option',
				'operator' 		=> '==',
				'value'    		=> 1,
			),			
		),		
	) );	
	
	// background overlay color	 	
	outlook_Kirki::add_field( 'outlook_config', array(
		'type'        		=> 'color',
		'settings'    		=> 'outlook_bbpress_title_overlay_color',
		'label'       		=> __( 'Background overlay', 'outlook-lite' ),
		'section'     		=> 'outlook_bbpress_section',
		'default'     		=> 'rgba(0, 0, 0, 0.4)',
		'priority'    		=> 10,
		'alpha'       		=> true,	
		'transport'   		=> 'auto',
        'output'      		=> array(
            array(
                'element'  		=> '#ol-page-sub-header.ol-bbpress-sub-header:before',
                'property' 		=> 'background-color',
            ),
        ),
		'active_callback'   => array(
			array(
				'setting'  		=> 'outlook_bbpress_title_option',
				'operator' 		=> '==',
				'value'    		=> 1,
			),
		),        					
	) );
	
	// font-size
	outlook_Kirki::add_field( 'outlook_config', array(
		'type'        		=> 'slider',
		'settings'    		=> 'outlook_bbpress_title_font_size',
		'label'       		=> __( 'Title Font Size', 'outlook-lite' ),
		'section'     		=> 'outlook_bbpress_section',
		'default'     		=> 35,
		'choices'     		=> array(
			'min'  => '35',
			'max'  => '100',
			'step' => '1',
		),
		'active_callback'   => array(
			array(
				'setting'  		=> 'outlook_bbpress_title_option',
				'operator' 		=> '==',
				'value'    		=> 1,
			),
		),		
		'transport'   		=> 'auto',
        'output'      		=> array(
            array(
                'element'  		=> '.ol-bbpress-sub-header .ol-bbpress-sub-header-area .ol-subheader-title h1',
                'property' 		=> 'font-size',
                'units'    		=> 'px',
            ),            
        ),				
	) );		
	
	// top/bottom padding
	outlook_Kirki::add_field( 'outlook_config', array(
		'type'        		=> 'slider',
		'settings'    		=> 'outlook_bbpress_title_padding',
		'label'       		=> __( 'Title Top/Bottom Padding', 'outlook-lite' ),
		'section'     		=> 'outlook_bbpress_section',
		'default'     		=> 70,
		'choices'     		=> array(
			'min'  => '70',
			'max'  => '500',
			'step' => '1',
		),
		'active_callback'   => array(
			array(
				'setting'  		=> 'outlook_bbpress_title_option',
				'operator' 		=> '==',
				'value'    		=> 1,
			),
		),		
		'transport'   		=> 'auto',
        'output'      		=> array(
            array(
                'element'  		=> '.ol-bbpress-sub-header-area',
                'property' 		=> 'padding-top',
                'units'    		=> 'px',
            ),
            array(
                'element'  		=> '.ol-bbpress-sub-header-area',
                'property' 		=> 'padding-bottom',
                'units'    		=> 'px',
            ),            
        ),				
	) );			
	
	// on/off footer call to action
	outlook_Kirki::add_field( 'outlook_config', array(
		'type'     			=> 'switch',
		'settings' 			=> 'outlook_bbpress_footer_callout',
		'label'       		=> __( 'Footer Call To Action', 'outlook-lite' ),
		'section'  			=> 'outlook_bbpress_section',
		'priority' 			=> 10,
		'default'     		=> '1',
		'description'       => __( 'Disable footer callout text from bbPress pages.', 'outlook-lite' ),						
	) );

endif;