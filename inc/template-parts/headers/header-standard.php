<?php
/*
 *	Displays output for standard ( Logo left | menu right ) header style content.
 *	
 *	@version 1.0
 *	@since outlook-lite 1.0
 */
 ?>
	<div class="ol-wrapper">
		<div id="ol-header-area">
			<header id="ol-header" class="ol-transparent-header" role="banner">
				
				<!-- Start Main Navigation -->
				<nav class="navbar ol-navbar" role="navigation">
				  <div class="container-fluid">
					  
				    
				    <!-- Start Brand and toggle get grouped for better mobile display -->
					<?php get_template_part( 'inc/template-parts/headers/site', 'logo' ); ?>
				    
				    
				    <!-- Start navigation -->
				    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					    
						<?php 
							
							if( is_page_template( 'home-page.php' ) ) {
								
								/* Home Primary Menu */			
								wp_nav_menu( array(
								  'theme_location' 	=> 'outlook-primary-menu',
								  'depth' 			=> 2,
								  'container' 		=> false,
								  'menu_class' 		=> 'nav navbar-nav navbar-right ol-transparent-nav ol-nav-scroll',
								  'fallback_cb'       => '',
								  'walker' 			=> new wp_bootstrap_navwalker(),  //Process nav menu using custom nav walker
								  )
								);
								
							}else{
								
								/* Global Primary Menu */			
								wp_nav_menu( array(
								  'theme_location' 	=> 'outlook-global-primary-menu',
								  'depth' 			=> 2,
								  'container' 		=> false,
								  'menu_class' 		=> 'nav navbar-nav navbar-right ol-transparent-nav ol-nav-scroll',
								  'fallback_cb'       => '',
								  'walker' 			=> new wp_bootstrap_navwalker(),  //Process nav menu using custom nav walker
								  )
								);								
								
							}
																		
						?>
				      
				    </div>
				    <!-- End navigation -->
				    
					<!--  Start header side button area -->
					<?php get_template_part( 'inc/template-parts/headers/side', 'menu-icons' ); ?>
				    <!--  End header side button area -->
				    
				  </div><!-- /.container-fluid -->
				</nav>
				<!-- End Main Navigation -->
			</header>
		</div>
	</div>
	
	
	<!-- Start off-canvas area  -->
	<?php
		/*
		 *	If off-canvas disbled then go ahead & hide the off-canvas area
		 *
		 *	@since outlook-lite 1.0
		 */ 
		$header_off_canvas	=	esc_html( get_theme_mod( 'outlook_header_off_canvas', '0' ) );
		
		if( $header_off_canvas == false ) :	
			get_template_part( 'inc/template-parts/headers/off', 'canvas' );
		endif; 
	?>
	<!-- End off-canvas area  -->