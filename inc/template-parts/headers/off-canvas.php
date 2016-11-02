<?php
/*
 *	Displays output for off-canvas sliding content
 *	
 *	@version 1.0
 *	@since outlook-lite 1.0
 */
 ?>
	<div class="ol-side-menu-area">
		<div class="ol-side-menu">			
			<div class="ol-side-menu-inner">
				
				<a href="#" class="ol-side-menu-close-btn"><span class="ol-line"></span></a>
				
				<?php if ( is_active_sidebar( 'outlook-off-canvas-sidebar' ) ) : ?>
				
					<?php dynamic_sidebar( 'outlook-off-canvas-sidebar' ); ?>
						
				<?php endif; ?>
				
			</div>		
		</div>
	</div>