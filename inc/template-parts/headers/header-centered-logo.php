<?php
/*
 *	Displays output for Centered logo ( Logo top center | menu bottom ) header style content.
 *	
 *	@version 1.0
 *	@since outlook-lite 1.0
 */
 ?>
	<div class="ol-wrapper">
		<div id="ol-header-area">
			<header id="ol-header" class="ol-center-logo-header" role="banner">
				
				<!-- Start header top -->
				<div class="ol-header-top">
					<div class="container">
						<div class="ol-header-top-area">							
							
					      	<!-- Start Logo image/text -->
							<?php 
								if( function_exists( 'the_custom_logo' ) && has_custom_logo() ) :
								 
								$custom_logo_id 	= get_theme_mod( 'custom_logo' );
								$custom_logo 		= wp_get_attachment_image_src( $custom_logo_id , 'full' );		
							?>
								<!-- logo img -->
								<a class="ol-logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" >
									
									<img src="<?php echo $custom_logo[0]; ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" />
									
								</a>
					
							<?php else : ?>
							
								<!-- logo text -->				
								<a class="ol-logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" >
									<span><?php bloginfo( 'name', 'display' ); ?></span>
								</a>
								
							<?php endif; ?>				      
							<!-- End Logo image/text -->
							 
							 
						</div>
					</div>
				</div>
				<!-- End header top -->
				
				<!-- Start header bottom  -->
				<div class="ol-header-bottom">
					<div class="container">
						<div class="ol-header-bottom-area">	
							<!-- Start Main Navigation -->
							<nav class="navbar ol-navbar" role="navigation">
							  <div class="container-fluid">
							    <!-- Brand and toggle get grouped for better mobile display -->
							    <div class="navbar-header">
							      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
							        <span class="sr-only"><?php _e( 'Toggle navigation', 'outlook-lite' ); ?></span>
							        <span class="icon-bar"></span>
							        <span class="icon-bar"></span>
							        <span class="icon-bar"></span>
							      </button>
							    </div>
							    
							    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							      
								<?php 
									
									if( is_page_template( 'home-page.php' ) ) {
										
										/* 
										 *	Home Primary Menu
										 */						
										wp_nav_menu( array(
										  'theme_location' 	=> 'outlook-primary-menu',
										  'depth' 			=> 2,
										  'container' 		=> false,
										  'menu_class' 		=> 'nav navbar-nav ol-center-log-header-nav ol-nav-scroll',
										  'fallback_cb'       => '',
										  'walker' 			=> new wp_bootstrap_navwalker(),  //Process nav menu using custom nav walker
										  )
										);
										
									}else{
										/*
										 *	Global Primary Menu
										 */
										wp_nav_menu( array(
										  'theme_location' 	=> 'outlook-global-primary-menu',
										  'depth' 			=> 2,
										  'container' 		=> false,
										  'menu_class' 		=> 'nav navbar-nav ol-center-log-header-nav ol-nav-scroll',
										  'fallback_cb'       => '',
										  'walker' 			=> new wp_bootstrap_navwalker(),  //Process nav menu using custom nav walker
										  )
										);
									}
																				
								?>							      
							      
							    </div><!-- /.navbar-collapse -->
							  </div><!-- /.container-fluid -->
							</nav>
							<!-- End Main Navigation -->
							
							<!--  Start header side button area -->
							<?php get_template_part( 'inc/template-parts/headers/side', 'menu-icons' ); ?>
						    <!--  End header side button area -->
						    
						</div>
					</div>
				</div>
				<!-- End header bottom  -->
			</header>
		</div>
	</div>