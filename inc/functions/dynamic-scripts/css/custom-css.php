<?php
/*
 * 	This file contains "Custom Css" output
 *
 *	@version 1.0
 *	@since outlook-lite 1.0
 */


function outlook_custom_css_styles(){
	
	/*
	 *	Set variables
	 *
	 *	@since outlook-lite 1.0
	 */
	 $custom_css	=	esc_html( get_theme_mod( 'outlook_custom_css_opton', '' ) );

	/*
	 *	Custom Css styles
	 *
	 *	@since outlook-lite 1.0
	 */			
	$outlook_custom_css	=	
	
		'<style type="text/css">
			'. $custom_css .'
		</style>';
		
		if( $custom_css !== '' ) :
			echo $outlook_custom_css;
		endif;

}
add_action( 'wp_head', 'outlook_custom_css_styles' );