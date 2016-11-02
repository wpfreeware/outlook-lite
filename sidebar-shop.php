<?php
/**
 * 	The template for displaying shop sidebar contents
 *
 *	@version 1.0
 *	@since outlook-lite 1.0
 */
?>
<div class="<?php echo outlook_shop_sidebar_column(); ?>">
	<aside class="ol-shop-sidebar" role="complementary">
		<?php 
			
			// Appear only shop pages
			if ( is_active_sidebar( 'outlook-shop-sidebar' ) ) :	
				dynamic_sidebar('outlook-shop-sidebar');
			endif;
		
		?>
	</aside>
</div>