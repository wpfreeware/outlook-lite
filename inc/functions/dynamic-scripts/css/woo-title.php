<?php
/*
 * 	This file contains "WooCommerce Title" section dynamic css
 *
 *	@version 1.0
 *	@since outlook-lite 1.0
 */


function outlook_woo_title_section_styles(){
	
	/*
	 *	Set variables
	 *
	 *	@since outlook-lite 1.0
	 */
	
	// background image
	$shop_title_bg_image_value			=	esc_url( get_theme_mod( 'outlook_woocommerce_title_bg_image', '' ) );
	$shop_title_bg_image_url			=	'background-image: url( ' . $shop_title_bg_image_value . ' );';
	$shop_title_bg_image 				=	( $shop_title_bg_image_value == '' ) ? '' : $shop_title_bg_image_url;
	
	//retina bg
	$shop_title_retina_bg_value			=	esc_url( get_theme_mod( 'outlook_woocommerce_title_retina_bg_image', '' ) );
	$shop_title_retina_bg_url			=	'background-image: url( ' . $shop_title_retina_bg_value . ' );';
	$shop_title_retina_bg 				= 	( $shop_title_retina_bg_value == '' ) ? 
											'' : '
													@media 
													screen and (-webkit-min-device-pixel-ratio: 1.25),
													screen and (-moz-min-device-pixel-ratio: 1.5),
													screen and (min-device-pixel-ratio: 1.5),
													(min-resolution: 120dpi) {
														#ol-shop-sub-header {
															'. $shop_title_retina_bg_url	.'
														}
													}	
											     ';	
	
	// title font size
	$shop_title_font_size 				= 	'font-size:' . esc_html( get_theme_mod( 'outlook_woocommerce_title_font_size', '35' ) ) . 'px;';
	// background size
	$shop_title_bg_image_size 			= 	'background-size:' . esc_html( get_theme_mod( 'outlook_woocommerce_title_bg_size', 'cover' ) ) . ';';
	// background repeat
	$shop_title_bg_image_repeat 		= 	'background-repeat:' . esc_html( get_theme_mod( 'outlook_woocommerce_title_bg_repeat', 'no-repeat' ) ) . ';';
	// top/bottom padding
	$shop_title_section_padding 		= 	'padding:' . esc_html( get_theme_mod( 'outlook_woocommerce_title_padding', '70' ) ) . 'px 0;';
	// background overlay color
	$shop_title_section_bg_color 		= 	'background-color:' . esc_html( get_theme_mod( 'outlook_woocommerce_title_overlay_color', 'rgba(0, 0, 0, 0.4)' ) ) . ';';	


	/*
	 *	WooCommerce Title Section - styles
	 *
	 *	@since outlook-lite 1.0
	 */			
	$shop_title_section_styles	=	
	
		'<style type="text/css">
		
			#ol-shop-sub-header{
				'.  $shop_title_bg_image		.'
				'. $shop_title_bg_image_size	.'
				'. $shop_title_bg_image_repeat	.'
			}
			
			/* retina background image */
			'. $shop_title_retina_bg .'			
								
			.ol-shop-sub-header-area{
				'. $shop_title_section_padding	.'
			}
			#ol-shop-sub-header:before{
				'. $shop_title_section_bg_color	.'
			}
			.ol-shop-sub-header-area .ol-subheader-title h1{
				'. $shop_title_font_size .'
			}		
		
		</style>';
		
		/*
		 *	Check if WooCommerce installed & activated
		 *	
		 *	@since outlook-lite 1.0
		 */
		if ( class_exists( 'WooCommerce' ) ) :
			if( is_woocommerce() ) :
				echo $shop_title_section_styles;
			endif;
		endif;
			

}
add_action( 'wp_head', 'outlook_woo_title_section_styles' );