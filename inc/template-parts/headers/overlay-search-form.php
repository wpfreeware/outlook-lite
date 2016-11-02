<?php
/*
 *	Displays output for overlay search form.
 *	
 *	@version 1.0
 *	@since outlook-lite 1.0
 */
 ?>
	<div class="ol-search-full-overlay">
		<div class="ol-search-full-overlay-inner">
			<a class="ol-search-close-btn" href="#"><span class="ol-line"></span></a>
			<p><?php _e( 'Type Your Keyword(s) &amp; Hit Enter', 'outlook-lite' ); ?></p>
			
			<form role="search" method="get" id="ol-overlay-search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
              <input type="search" name="s" />
              <input type="hidden" name="post_type" value="post"/>          
            </form>
	            
		</div>
	</div>	