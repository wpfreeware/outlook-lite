<?php
/*
 *	Displays output for site logo content.
 *	
 *	@version 1.0
 *	@since outlook-lite 1.0
 */
 ?>

    <div class="navbar-header">
	    
	      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
	        <span class="sr-only"><?php _e( 'Toggle navigation', 'outlook-lite' );?></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
	      
      	<!-- Start Logo image/text -->
		<?php 
			if( function_exists( 'the_custom_logo' ) && has_custom_logo() ) :
			 
			$custom_logo_id 	= get_theme_mod( 'custom_logo' );
			$custom_logo 		= wp_get_attachment_image_src( $custom_logo_id , 'full' );		
		?>
			<!-- logo img -->
			<a class="navbar-brand ol-logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" >
				<img src="<?php echo $custom_logo[0]; ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" />
			</a>

		<?php else : ?>
		
			<!-- logo text -->				
			<a class="navbar-brand ol-logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" >
				<span><?php bloginfo( 'name', 'display' ); ?></span>
			</a>
			
		<?php endif; ?>				      
		<!-- End Logo image/text -->
      
   </div>