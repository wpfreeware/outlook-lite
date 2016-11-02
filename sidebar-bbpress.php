<?php
/**
 * The template for displaying bbPress sidebar contents
 *
 *	@version 1.0
 *	@since outlook-lite 1.0
 */
?>
<aside class="ol-blog-sidebar" role="complementary">
	<?php
		
		if ( function_exists( 'is_bbpress' ) ) :
			// Appear only bbpress forum pages
			if ( is_bbpress() && is_active_sidebar( 'outlook-bbp-sidebar' ) ) :
				dynamic_sidebar('outlook-bbp-sidebar');
			endif;			
		endif;
	
	?>
</aside>