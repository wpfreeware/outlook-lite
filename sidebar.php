<?php
/**
 * The template for displaying sidebar contents
 *
 * Contains posts & pages content
 *
 *	@version 1.0
 *	@since outlook-lite 1.0
 */
?>
<aside class="ol-blog-sidebar" role="complementary">
	<?php		 
		
		if ( is_page() ):
			
			// Appear only pages
			if ( is_active_sidebar( 'outlook-page-sidebar' ) ) :	
				dynamic_sidebar('outlook-page-sidebar');
			endif;
			
		else:			
			
			// Appear everywhere except pages
			if ( is_active_sidebar( 'outlook-post-sidebar' ) ) :
				dynamic_sidebar('outlook-post-sidebar');
			endif;
			
		endif;
	
	?>
</aside>