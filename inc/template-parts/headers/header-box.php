<?php
/*
 *	Displays output for Box ( left logo | right menu ) header style content.
 *	
 *	@version 1.0
 *	@since outlook-lite 1.0
 */
 ?>
	<div class="ol-wrapper">
		<div id="ol-header-area">
			<header id="ol-header" class="ol-header-box" role="banner">
				<div class="container">
					<!-- Start Main Navigation -->
					<nav class="navbar ol-navbar" role="navigation">
					  <div class="container-fluid">
					    
					    <!-- Brand and toggle get grouped for better mobile display -->
						<?php get_template_part( 'inc/template-parts/headers/site', 'logo' ); ?>					    
					    
					    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					      
							<?php 
								
								if( is_page_template( 'home-page.php' ) ) {
									
									/* 
									 *	Home Primary Menu - right position 
									 */						
									wp_nav_menu( array(
									  'theme_location' 	=> 'outlook-primary-menu',
									  'depth' 			=> 2,
									  'container' 		=> false,
									  'menu_class' 		=> 'nav navbar-nav ol-header-box-nav ol-nav-scroll',
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
									  'menu_class' 		=> 'nav navbar-nav ol-header-box-nav ol-nav-scroll',
									  'fallback_cb'       => '',
									  'walker' 			=> new wp_bootstrap_navwalker(),  //Process nav menu using custom nav walker
									  )
									);
									
								}
																			
							?>						      
					      
					    </div><!-- /.navbar-collapse -->
					    
						<!--  Start header side button area -->
						<?php get_template_part( 'inc/template-parts/headers/side', 'menu-icons' ); ?>
					    <!--  End header side button area -->
					    
					  </div><!-- /.container-fluid -->
					</nav>
					<!-- End Main Navigation -->
				</div>
			</header>
		</div>
	</div>