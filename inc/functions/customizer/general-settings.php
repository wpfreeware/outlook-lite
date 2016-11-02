<?php
/*
 *	This file contains theme general setting options.
 *	Controls: preloaders, scroll top, site layout (box/wide)
 *	
 *	@version 1.0
 *	@since outlook-lite 1.0
 */
	
	/*
	 *	Section -- general settings
	 *
	 *	@since outlook-lite 1.0
	 */
	 
	outlook_Kirki::add_section( 'outlook_general_settings_section', array(
	    'title'          	=> __( 'General Settings', 'outlook-lite' ),
	    'priority'       	=> 8,
	    'capability'     	=> 'edit_theme_options',
	) );	
	
	// box / wide layouts
	outlook_Kirki::add_field( 'outlook_config', array(
		'type'        		=> 'checkbox',
		'settings'    		=> 'outlook_box_layout',
		'label'       		=> __( 'Check to have Box layout', 'outlook-lite' ),
		'section'     		=> 'outlook_general_settings_section',
		'default'     		=> '0',
		'priority'    		=> 10,
	) );
	
	outlook_Kirki::add_field( 'outlook_config', array(
		'type'        => 'color',
		'settings'    => 'outlook_color_scheme',
		'label'       => __( 'Site color scheme', 'outlook-lite' ),
		'section'     => 'outlook_general_settings_section',
		'default'     => '#f9ce06',
		'priority'    => 10,
		'alpha'       => true,
	) );	
	
	//	Preloader styles
	outlook_Kirki::add_field( 'outlook_config', array(
		'type'        		=> 'radio',
		'settings'    		=> 'outlook_preloaders_style',
		'label'       		=> __( 'Choose preloader style', 'outlook-lite' ),
		'section'     		=> 'outlook_general_settings_section',
		'default'     		=> 'style-1',
		'priority'    		=> 10,
		'choices'     		=> array(
			'style-1'   => esc_attr__( 'style 1', 'outlook-lite' ),
			'style-2' 	=> esc_attr__( 'style 2', 'outlook-lite' ),
			'style-3'   => esc_attr__( 'style 3', 'outlook-lite' ),
			'style-4' 	=> esc_attr__( 'style 4', 'outlook-lite' ),
			'style-5' 	=> esc_attr__( 'style 5', 'outlook-lite' ),				
		),
		'active_callback'   => array(
			array(
				'setting'  		=> 'outlook_preloaders_option',
				'operator' 		=> '==',
				'value'    		=> 0,
			),
		),		
	) );	
	
	// enable/disable preloader
	outlook_Kirki::add_field( 'outlook_config', array(
		'type'     			=> 'checkbox',
		'settings' 			=> 'outlook_preloaders_option',
		'label'    			=> __( 'Check to disable preloader', 'outlook-lite' ),
		'section'  			=> 'outlook_general_settings_section',
		'priority' 			=> 10,
		'default'     		=> '1',		
	) );
	
	// on/off scroll top
	outlook_Kirki::add_field( 'outlook_config', array(
		'type'     			=> 'checkbox',
		'settings' 			=> 'outlook_scroll_top',
		'label'    			=> __( 'Check to disable scroll top', 'outlook-lite' ),
		'section'  			=> 'outlook_general_settings_section',
		'priority' 			=> 10,
		'default'     		=> '0',		
	) );
	
	// home menu links
	outlook_Kirki::add_field( 'outlook_config', array(
		'type'        		=> 'custom',
		'settings'    		=> 'outlook_menu_target_ids',
		'label'       		=> __( 'Homepage menu target links', 'outlook-lite' ),
		'section'     		=> 'outlook_general_settings_section',
		'default'     		=> '<div style="background:#ffffff;padding:7px;">#ol-main-slider<br/> #ol-about-us<br/> #ol-service<br/> #ol-our-work<br/> #ol-faq-testimonial<br/> #ol-blog<br/></div>',
		'priority'    		=> 10,
	) );	
	
	// font-awesome icon
	outlook_Kirki::add_field( 'outlook_config', array(
		'type'        		=> 'switch',
		'settings'    		=> 'outlook_font_awesome_css',
		'label'       		=> __( 'Font-Awesome Icons', 'outlook-lite' ),
		'description'       => __( 'Disable Font-Awesome icons css for better site performance. Useful if you are using any 3rd party plugin that includes font-awesome icons. If you are not sure what you are doing then dont touch it.', 'outlook-lite' ),
		'section'     		=> 'outlook_general_settings_section',
		'default'     		=> '1',
		'priority'    		=> 10,
		'choices'     		=> array(
			'on'  => esc_attr__( 'Enable', 'outlook-lite' ),
			'off' => esc_attr__( 'Disable', 'outlook-lite' ),
		),
	) );
	
	// RTL enable/disable
	outlook_Kirki::add_field( 'outlook_config', array(
		'type'        		=> 'switch',
		'settings'    		=> 'outlook_rtl_option',
		'label'       		=> __( 'RTL', 'outlook-lite' ),
		'section'     		=> 'outlook_general_settings_section',
		'default'     		=> '0',
		'priority'    		=> 10,
		'choices'     		=> array(
			'on'  => esc_attr__( 'Enable', 'outlook-lite' ),
			'off' => esc_attr__( 'Disable', 'outlook-lite' ),
		),
	) );			