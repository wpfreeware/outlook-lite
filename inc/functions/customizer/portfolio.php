<?php
/*
 *	This file contains "Portfolio" section & fields.
 *	
 *	@version 1.0
 *	@since outlook-lite 1.0
 */

/*
 *	If jetpack installed & custom-content-types module activated
 *	then go ahead & display the portfolio section & controls.
 */	
if( class_exists( 'Jetpack' ) && Jetpack::is_module_active( 'custom-content-types' ) ) :
	
	/*
	 *	Section -- Portfolio
	 *
	 *	@since outlook-lite 1.0
	 */
	 
	outlook_Kirki::add_section( 'outlook_portfolio_section', array(
	    'title'          	=> __( 'Portfolio', 'outlook-lite' ),
	    'description'       => __( 'This options will be applied only on portfolio single pages', 'outlook-lite' ),
	    'priority'       	=> 10,
	    'capability'     	=> 'edit_theme_options',
	) );
	
	// next / prev
	outlook_Kirki::add_field( 'outlook_config', array(
		'type'        		=> 'switch',
		'settings'    		=> 'outlook_portfolio_next_prev',
		'label'       		=> __( 'Hide next/prev links', 'outlook-lite' ),
		'section'     		=> 'outlook_portfolio_section',
		'default'     		=> '0',
		'priority'    		=> 10,
		'choices'     		=> array(
			'on'  => esc_attr__( 'Show', 'outlook-lite' ),
			'off' => esc_attr__( 'Hide', 'outlook-lite' ),
		),
	) );
	
	// related portfolios
	outlook_Kirki::add_field( 'outlook_config', array(
		'type'        		=> 'switch',
		'settings'    		=> 'outlook_portfolio_related_projects',
		'label'       		=> __( 'Hide related projects', 'outlook-lite' ),
		'section'     		=> 'outlook_portfolio_section',
		'default'     		=> '0',
		'priority'    		=> 10,
		'choices'     		=> array(
			'on'  => esc_attr__( 'Show', 'outlook-lite' ),
			'off' => esc_attr__( 'Hide', 'outlook-lite' ),
		),
	) );
	
	// portfolio
	outlook_Kirki::add_field( 'outlook_config', array(
		'type'        		=> 'switch',
		'settings'    		=> 'outlook_portfolio_footer_callout',
		'label'       		=> __( 'Hide footer callout', 'outlook-lite' ),
		'section'     		=> 'outlook_portfolio_section',
		'default'     		=> '1',
		'priority'    		=> 10,
		'choices'     		=> array(
			'on'  => esc_attr__( 'Show', 'outlook-lite' ),
			'off' => esc_attr__( 'Hide', 'outlook-lite' ),
		),
	) );
	
endif;