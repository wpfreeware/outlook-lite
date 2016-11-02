<?php
/**
 * The Header for outlook theme
 *
 * Displays all of the <head> section and everything up till header styles
 *
 * 	@package WordPress
 * 	@subpackage outlook-lite
 *	@version 1.0
 *	@since outlook-lite 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> >
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="//gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
      
	<?php wp_head(); ?>
  </head>
  
	<?php 
		/*
		 *	site layout
		 *
		 *	@since outlook-lite 1.0
		 */
		$site_layout_value	=	esc_html( get_theme_mod( 'outlook_box_layout', '0' ) );
		
		if( $site_layout_value == true ) :
			$site_layout 	=	'ol-boxed';
		else:
			$site_layout 	=	'';
		endif;
	
		/*
		 *	If not front-page.php template then
		 *	go ahead & store a class "ol-page" for using on body tag.
		 */
		if( ! is_page_template( 'home-page.php' ) ):
			$body_class = 'ol-page ';
		else:
			$body_class = '';
		endif; 
	?>
	  
  <body <?php body_class( ''. $body_class . $site_layout .'' ); ?> >
  	
  	
  	<!-- Start scroll top -->
  	<?php 
	  	$scroll_top_disable	=	esc_html( get_theme_mod( 'outlook_scroll_top', '0' ) );
	  	
	  	if( $scroll_top_disable == false ) :
	  		get_template_part( 'inc/template-parts/scroll', 'top' );
	  	endif;
	?>
  	<!-- End scroll top -->
  	
  	
  	<!-- Start preloader -->
  	<?php 
		$preloader_disable	=	esc_html( get_theme_mod( 'outlook_preloaders_option', '1' ) );
		
		if( $preloader_disable == false ) :  	
	  		get_template_part( 'inc/template-parts/preloaders', '' );
	  	endif;
	?>	
  	<!-- End preloader -->