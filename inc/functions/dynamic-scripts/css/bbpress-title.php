<?php
/*
 * 	This file contains "WooCommerce Title" section dynamic css
 *
 *	@version 1.0
 *	@since outlook-lite 1.0
 */


function outlook_bbpress_title_section_styles(){
	
	/*
	 *	Set variables
	 *
	 *	@since outlook-lite 1.0
	 */
	
	// background image
	$bbp_title_bg_image_value			=	esc_url( get_theme_mod( 'outlook_bbpress_title_bg_image', '' ) );
	$bbp_title_bg_image_url				=	'background-image: url( ' . $bbp_title_bg_image_value . ' );';
	$bbp_title_bg_image 				=	( $bbp_title_bg_image_value == '' ) ? '' : $bbp_title_bg_image_url;
	
	//retina bg
	$bbp_title_retina_bg_value			=	esc_url( get_theme_mod( 'outlook_bbpress_title_retina_bg_image', '' ) );
	$bbp_title_retina_bg_url			=	'background-image: url( ' . $bbp_title_retina_bg_value . ' );';
	$bbp_title_retina_bg 				= 	( $bbp_title_retina_bg_value == '' ) ? 
											'' : '
													@media 
													screen and (-webkit-min-device-pixel-ratio: 1.25),
													screen and (-moz-min-device-pixel-ratio: 1.5),
													screen and (min-device-pixel-ratio: 1.5),
													(min-resolution: 120dpi) {
														#ol-page-sub-header.ol-bbpress-sub-header {
															'. $bbp_title_retina_bg_url	.'
														}
													}	
											     ';	
	
	// title font size
	$bbp_title_font_size 				= 	'font-size:' . esc_html( get_theme_mod( 'outlook_bbpress_title_font_size', '35' ) ) . 'px;';
	// background size
	$bbp_title_bg_image_size 			= 	'background-size:' . esc_html( get_theme_mod( 'outlook_bbpress_title_bg_size', 'cover' ) ) . ';';
	// background repeat
	$bbp_title_bg_image_repeat 			= 	'background-repeat:' . esc_html( get_theme_mod( 'outlook_bbpress_title_bg_repeat', 'no-repeat' ) ) . ';';
	// top/bottom padding
	$bbp_title_section_padding 			= 	'padding:' . esc_html( get_theme_mod( 'outlook_bbpress_title_padding', '70' ) ) . 'px 0;';
	// background overlay color
	$bbp_title_section_bg_color 		= 	'background-color:' . esc_html( get_theme_mod( 'outlook_bbpress_title_overlay_color', 'rgba(0, 0, 0, 0.4)' ) ) . ';';	


	/*
	 *	Blog Title Section - styles
	 *
	 *	@since outlook-lite 1.0
	 */			
	$bbp_title_section_styles	=	
	
		'<style type="text/css">
		
			#ol-page-sub-header.ol-bbpress-sub-header{
				'. $bbp_title_bg_image			.'
				'. $bbp_title_bg_image_size		.'
				'. $bbp_title_bg_image_repeat	.'
			}
			
			/* retina background image */
			'. $bbp_title_retina_bg .'			
								
			.ol-bbpress-sub-header-area{
				'. $bbp_title_section_padding	.'
			}
			#ol-page-sub-header.ol-bbpress-sub-header:before{
				'. $bbp_title_section_bg_color	.'
			}
			.ol-bbpress-sub-header .ol-bbpress-sub-header-area .ol-subheader-title h1{
				'. $bbp_title_font_size .'
			}		
		
		</style>';
		
		
		/*
		 *	Output styles only on bbPress pages.
		 *
		 *	@since outlook-lite 1.0
		 */
		if ( function_exists( 'is_bbpress' ) ) :
			if( is_bbpress() ) :
				echo $bbp_title_section_styles;
			endif;
		endif;	

}
add_action( 'wp_head', 'outlook_bbpress_title_section_styles' );