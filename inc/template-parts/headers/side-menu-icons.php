<?php
/*
 *	Displays output for header side menu.
 *	Contains search, off-canvas & woo minicart.
 *	
 *	@version 1.0
 *	@since outlook-lite 1.0
 */
 ?>
<div class="ol-side-button-area">
   	<ul>
	    <?php
		    /*
			 *	If search disbled then go ahead & hide the search icon
			 *
			 *	@since outlook-lite 1.0
		     */
		    $search_icon	=	esc_html( get_theme_mod( 'outlook_header_search', '0' ) );
		    
		    if( $search_icon == false ){	?>
			    <li><a class="ol-search-btn" href="#"><i class="fa fa-search"></i></a></li>
		<?php } ?>
		
	    <?php
		    /*
			 *	If off-canvas disbled then go ahead & hide the off-canvas area 
			 *	(avaialble for only standard header style)
			 *
			 *	@since outlook-lite 1.0
		     */
		    $header_off_canvas	=	esc_html( get_theme_mod( 'outlook_header_off_canvas', '0' ) );
		    
		    if( ( $header_off_canvas == false ) && ( get_theme_mod( 'outlook_header_styles', 'standard-header' ) == 'standard-header' ) ){	?>						    
				<li><a href="#" class="ol-sidemenu-btn"><i class="fa fa-bars"></i></a></li>
		<?php } ?>
	   	
   	</ul>
</div>