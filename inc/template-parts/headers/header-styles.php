<?php
/*
 *	Displays all theme header styles, 
 *	including overlay search form, off-canvas sliding section & main-content container div "ol-main-content"
 *	
  *	@version 1.0
 *	@since outlook-lite 1.0
 */
 ?>
<?php 
	
	$header_styles	=	esc_html( get_theme_mod( 'outlook_header_styles', 'standard-header' ) );
	
	if( $header_styles == 'standard-header' ){

		/*
		 *	Standard header - Left logo | Menu right
		 */
		get_template_part( 'inc/template-parts/headers/header', 'standard' );	
		
	}elseif( $header_styles == 'split-header' ){
	
		/*
		 *	Split Menu header - Left menu | Logo | Menu right
		 */
		get_template_part( 'inc/template-parts/headers/header', 'split' );	
		
	}elseif( $header_styles == 'centered-logo' ){
		
		/*
		 *	Centered Menu header - Logo top | Menu bottom
		 */	
		get_template_part( 'inc/template-parts/headers/header', 'centered-logo' );		
		
	}elseif( $header_styles == 'box-header' ){
		
		/*
		 *	Box header - Logo left | Menu right
		 */
		get_template_part( 'inc/template-parts/headers/header', 'box' );		
		
	}elseif( $header_styles == 'double-header' ){
		
		/*
		 *	Double header - Top menu bar | Bottom menu bar
		 */
		get_template_part( 'inc/template-parts/headers/header', 'top-bottom' );		
		
	}else{
		
		/*
		 *	Fallback default header style	
		 *	Standard header - Left logo | Menu right
		 */
		get_template_part( 'inc/template-parts/headers/header', 'standard' );		
		
	}
	
?>

	<!-- Start Search Overlay -->
	<?php 
		$search_icon	=	esc_html( get_theme_mod( 'outlook_header_search', '0' ) );
		
		if( $search_icon == false ){
			get_template_part( 'inc/template-parts/headers/overlay', 'search-form' ); 	
		}
	?>
	<!-- End Search Overlay -->