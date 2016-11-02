<?php
/*
 *	This file contains portfolio metaboxes
 *	Contains: Portfolio informations & Title bar controls
 *
 *	@version 1.0
 *	@since outlook-lite 1.0
 */
add_action( 'cmb2_admin_init', 'outlook_portfolio_metabox' );

function outlook_portfolio_metabox() {
	
	$prefix = '_outlook_';

	/*
	 *	Portfolio MetaBox
	 *	Contains portfolio informations
	 *  Ex: clients | skills | date | button
	 *
	 *	@since outlook-lite 1.0
	 */
	$outlook_portfolio_metabox = new_cmb2_box( array(
		'id'            => $prefix . 'portfolio_info',
		'title'         => __( 'Portfolio Informations', 'outlook-lite' ),
		'object_types'  => array( 'jetpack-portfolio' ), // Post type
		'show_names' 	=> true, // Show field names on the left
		'closed'     	=> true, // true to keep the metabox closed by default
	) );
	
	$outlook_portfolio_metabox->add_field( array(
		'desc' 			=> __( 'Show some informations about this project.', 'outlook-lite' ),
		'id'   			=> $prefix . 'portfolio_info_title',
		'type' 			=> 'title',
	) );	

	// client
	$outlook_portfolio_metabox->add_field( array(
		'name'       	=> __( 'Client lebel', 'outlook-lite' ),
		'desc'       	=> __( 'Put a lebel. Ex: Client', 'outlook-lite' ),
		'id'         	=> $prefix . 'portfolio_client_lebel',
		'type'       	=> 'text',
	) );
	
	$outlook_portfolio_metabox->add_field( array(
		'name'       	=> __( 'Client name', 'outlook-lite' ),
		'desc'       	=> __( 'Put client name. Ex: Jon olsson', 'outlook-lite' ),
		'id'         	=> $prefix . 'portfolio_client_name',
		'type'       	=> 'text',
	) );
	
	// date
	$outlook_portfolio_metabox->add_field( array(
		'name'       	=> __( 'Date lebel', 'outlook-lite' ),
		'desc'       	=> __( 'Put a lebel for date. Ex: Date', 'outlook-lite' ),
		'id'         	=> $prefix . 'portfolio_date_lebel',
		'type'       	=> 'text',
	) );
	
	$outlook_portfolio_metabox->add_field( array(
		'name'       	=> __( 'Date', 'outlook-lite' ),
		'desc'       	=> __( 'Put this project completion date. Ex: January 1, 2015', 'outlook-lite' ),
		'id'         	=> $prefix . 'portfolio_complete_date',
		'type'       	=> 'text',
	) );
	
	// Skill
	$outlook_portfolio_metabox->add_field( array(
		'name'       	=> __( 'Skill lebel', 'outlook-lite' ),
		'desc'       	=> __( 'Put a lebel for skill or whatever you like to display. Ex: Skills', 'outlook-lite' ),
		'id'         	=> $prefix . 'portfolio_skill_lebel',
		'type'       	=> 'text',
	) );
	
	$outlook_portfolio_metabox->add_field( array(
		'name'       	=> __( 'Skill names', 'outlook-lite' ),
		'desc'       	=> __( 'Put skills that used to complete this project or whatever you like to display. Ex: Design, development', 'outlook-lite' ),
		'id'         	=> $prefix . 'portfolio_skill_names',
		'type'       	=> 'text',
	) );
	
	// button
	$outlook_portfolio_metabox->add_field( array(
		'name'       	=> __( 'Button text', 'outlook-lite' ),
		'id'         	=> $prefix . 'portfolio_button_text',
		'type'       	=> 'text',
	) );
	
	// button url
	$outlook_portfolio_metabox->add_field( array(
		'name'       	=> __( 'Button url', 'outlook-lite' ),
		'id'         	=> $prefix . 'portfolio_button_url',
		'type'       	=> 'text_url',
	) );
	
	// button target
	$outlook_portfolio_metabox->add_field( array(
	    'name' 			=> 'Button target',
	    'desc' 			=> 'Check to open in a new tab',
	    'id'   			=> $prefix . 'portfolio_button_target',
	    'type' 			=> 'checkbox',
	) );
	
	/*
	 *	MetaBox	- Portfolio single title
	 *	Contains portfolio title controls
	 *
	 *	@since outlook-lite 1.0
	 */
	$outlook_portfolio_title = new_cmb2_box( array(
		'id'            => $prefix . 'portfolio_title',
		'title'         => __( 'Portfolio Title Bar (PRO)', 'outlook-lite' ),		
		'object_types'  => array( 'jetpack-portfolio' ), // Post type
		'show_names' 	=> true, // Show field names on the left
		'closed'     	=> true, // true to keep the metabox closed by default
	) );		

	$outlook_portfolio_title->add_field( array(
	    'id'         	=> $prefix . 'portfolio_title_on_off',
	    'desc' 			=> __( 'Please upgrade to PRO to have these options.', 'outlook-lite' ),
	    'type'    		=> 'title',
	) );				

}