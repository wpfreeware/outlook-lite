<?php
/*
 *	Page MetaBox
 *	Contains Page layouts
 *
 *	@version 1.0
 *	@since outlook-lite 1.0
 */
add_action( 'cmb2_admin_init', 'outlook_page_metabox' );

function outlook_page_metabox() {
	
	$prefix = '_outlook_';

	/**
	 * metabox & fields
	 */
	$outlook_page_metabox_options = new_cmb2_box( array(
		'id'            	=> $prefix . 'page_layouts',
		'title'         	=> __( 'Page Options (PRO)', 'outlook-lite' ),
		'object_types'  	=> array( 'page' ), // Post type
		'show_names' 		=> true, // Show field names on the left
		'closed'     		=> true, // true to keep the metabox closed by default
	) );	
	
	// title bar info
	$outlook_page_metabox_options->add_field( array(
	    'desc' 			=> __( 'Please upgrade to PRO to have these options.', 'outlook-lite' ),
	    'type' 			=> 'title',
	    'id'         	=> $prefix . 'page_title_bar_info',
	) );						

}