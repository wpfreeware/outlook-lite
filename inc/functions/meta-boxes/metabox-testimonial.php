<?php
/*
 *	Testimonial MetaBox
 *	Contains testimonial informations
 *  Ex: position
 *
 *	@version 1.0
 *	@since outlook-lite 1.0
 */
add_action( 'cmb2_admin_init', 'outlook_testimonial_metabox' );

function outlook_testimonial_metabox() {
	
	$prefix = '_outlook_';

	/**
	 * metabox & fields
	 */
	$outlook_portfolio_metabox = new_cmb2_box( array(
		'id'            => $prefix . 'testimonial_info',
		'title'         => __( 'Customer Info', 'outlook-lite' ),
		'object_types'  => array( 'jetpack-testimonial' ), // Post type
		'show_names' 	=> true, // Show field names on the left
		'closed'     	=> true, // true to keep the metabox closed by default
	) );	

	// position
	$outlook_portfolio_metabox->add_field( array(
		'name'       	=> __( 'Position', 'outlook-lite' ),
		'desc'       	=> __( 'Ex: CEO of company', 'outlook-lite' ),
		'id'         	=> $prefix . 'testimonial_position',
		'type'       	=> 'text',
	) );					

}