<?php
/*
 * 	This file contains "Parallax" section dynamic css
 *
 *	@version 1.0
 *	@since outlook-lite 1.0
 */


function outlook_parallax_section_styles(){
	
	/*
	 *	Set variables
	 *
	 *	@since outlook-lite 1.0
	 */
	
	// background image 
	$parallax_bg_image_value 			= 	esc_url( get_theme_mod( 'outlook_parallax_bg_image', '' ) ); 
	$parallax_bg_image_url 				= 	'background-image: url( ' . $parallax_bg_image_value . ' );';
	$parallax_bg_image 					=	( $parallax_bg_image_value == '' ) ? '' : $parallax_bg_image_url;
	
	// retina background image
	$parallax_bg_retina_image_value		=	esc_url( get_theme_mod( 'outlook_parallax_bg_retina_image', '' ) );
	$parallax_bg_retina_image_url		=	'background-image: url( ' . $parallax_bg_retina_image_value . ' );';
	$parallax_bg_retina_image 			= 	( $parallax_bg_retina_image_value == '' ) ? 
													'' : '
															@media 
															screen and (-webkit-min-device-pixel-ratio: 1.25),
															screen and (-moz-min-device-pixel-ratio: 1.5),
															screen and (min-device-pixel-ratio: 1.5),
															(min-resolution: 120dpi) {
																#ol-image-parallax {
																	'. $parallax_bg_retina_image_url .'
																}
															}	
														';
	
	// background size
	$parallax_bg_size 					= 	'background-size:' . esc_html( get_theme_mod( 'outlook_parallax_bg_size', 'cover' ) ) . ';';
	// background repeat
	$parallax_bg_repeat 				= 	'background-repeat:' . esc_html( get_theme_mod( 'outlook_parallax_bg_repeat', 'no-repeat' ) ) . ';';
	// background color
	$parallax_bg_color 					= 	'background-color:' . esc_html( get_theme_mod( 'outlook_parallax_bg_color', 'rgba(0, 0, 0, 0.3)' ) ) . ';';
	
	// background effect
	$parallax_effect_value 				= 	esc_html( get_theme_mod( 'outlook_parallax_disable', '0' ) );
	$parallax_effect 					=	( $parallax_effect_value == true ) ? '' : 'background-attachment: fixed;';


	/*
	 *	Parallax Section - styles
	 *
	 *	@since outlook-lite 1.0
	 */			
	$parallax_section_styles	=	
	
		'<style type="text/css">
		
			#ol-image-parallax{
				'. $parallax_bg_image			.'
				'. $parallax_bg_size			.'
				'. $parallax_bg_repeat			.'
				'. $parallax_effect				.'
			}	
			
			/* retina display support */
				'. $parallax_bg_retina_image	.'
								
			#ol-image-parallax .ol-overlay{
				'. $parallax_bg_color			.'
			}		
		
		</style>';
	
	if( is_page_template( 'home-page.php' ) ){
		echo $parallax_section_styles;	
	}	

}
add_action( 'wp_head', 'outlook_parallax_section_styles' );