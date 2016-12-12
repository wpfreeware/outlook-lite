<?php
/*
 *	This file contains "Unlock sections" info.
 *	
 *	@version 1.0
 *	@since outlook-lite 1.0
 */
 
	/*
	 *	Section -- Blog | Front Page
	 *
	 *	@since outlook-lite 1.0
	 */
	 
	outlook_Kirki::add_section( 'outlook_home_unlock_section', array(
	    'title'          => __( '7 MORE SECTIONS (PRO)', 'outlook-lite' ),
	    'priority'       => 10,
	    'panel'       	 => 'outlook_front_page_panel',
	    'capability'     => 'edit_theme_options',
	) );	

	/*
	 *	Fields -- unlock info
	 *
	 *	@since outlook-lite 1.0
	 */
	outlook_Kirki::add_field( 'outlook_config', array(
		'type'        		=> 'custom',
		'settings'    		=> 'outlook_menu_target_ids',
		'section'     		=> 'outlook_home_unlock_section',
		'default'     		=> '<div><a href="https://www.wpfreeware.com/outlook-pro/" target="_blank">'. esc_html__( 'Pro Version', 'outlook-lite' ) .'</a> '. esc_html__( 'comes with 7 more sections with awesome features such as counters, team members, pricing tables, client logos & some others. Upgrade to PRO to have them all.', 'outlook-lite' ) .'</div>',
		'priority'    		=> 10,
	) );