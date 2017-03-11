<?php
/*
 * 	This file contains "Blog Title" section dynamic css
 *
 *	@version 1.0
 *	@since outlook-lite 1.0
 */


function outlook_blog_title_section_styles(){
	
	/*
	 *	Set variables
	 *
	 *	@since outlook-lite 1.0
	 */
	
	// background image
	$blog_title_bg_image_value			=	esc_url( get_header_image() );
	$blog_title_bg_image_url			=	'background-image: url( ' . $blog_title_bg_image_value . ' );';
	$blog_title_bg_image 				=	( $blog_title_bg_image_value == '' ) ? '' : $blog_title_bg_image_url;	
	
	// title font size
	$blog_title_font_size 				= 	'font-size:' . esc_html( get_theme_mod( 'outlook_blog_title_text_size', '35' ) ) . 'px;';
	// background size
	$blog_title_bg_image_size 			= 	'background-size:' . esc_html( get_theme_mod( 'outlook_blog_title_bg_img_size', 'cover' ) ) . ';';
	// top/bottom padding
	$blog_title_section_padding 		= 	'padding:' . esc_html( get_theme_mod( 'outlook_blog_title_padding', '70' ) ) . 'px 0;';
	// background overlay color
	$blog_title_section_bg_color 		= 	'background-color:' . esc_html( get_theme_mod( 'outlook_blog_title_bg_img_color', 'rgba(0, 0, 0, 0.4)' ) ) . ';';	


	/*
	 *	Blog Title Section - styles
	 *
	 *	@since outlook-lite 1.0
	 */			
	$blog_title_section_styles	=	
	
		'<style type="text/css">
		
			#ol-blog-sub-header{
				'.  $blog_title_bg_image		.'
				'. $blog_title_bg_image_size	.'
			}
								
			.ol-blog-sub-header-area{
				'. $blog_title_section_padding	.'
			}
			#ol-blog-sub-header:before{
				'. $blog_title_section_bg_color	.'
			}
			.ol-blog-sub-header-area .ol-subheader-title h1{
				'. $blog_title_font_size .'
			}		
		
		</style>';
	
	if( is_home() || is_archive() || is_search() ){
		echo $blog_title_section_styles;	
	}	

}
add_action( 'wp_head', 'outlook_blog_title_section_styles' );