<?php
/*
 *	Post MetaBox
 *	Contains post informations
 *  Ex: title
 *
 *	@version 1.0
 *	@since outlook-lite 1.0
 */
add_action( 'cmb2_admin_init', 'outlook_post_title_metabox' );

function outlook_post_title_metabox() {
	
	$prefix = '_outlook_';

	/**
	 * metabox & fields
	 */
	$outlook_post_metabox = new_cmb2_box( array(
		'id'            => $prefix . 'post_info',
		'title'         => __( 'Post Title Bar (Pro)', 'outlook-lite' ),
		'object_types'  => array( 'post' ), // Post type
		'show_names' 	=> true, // Show field names on the left
		'closed'     	=> true, // true to keep the metabox closed by default
	) );
	
	// title bar info
	$outlook_post_metabox->add_field( array(
	    'desc' 			=> __( 'Please upgrade to PRO to have these options', 'outlook-lite' ),
	    'type' 			=> 'title',
	    'id'         	=> $prefix . 'post_title_bar_info',
	) );						

}