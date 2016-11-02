<?php
/*
 *	Displays output for top-bottom menu ( top menu bar | bottom menu bar ) header style content.
 *	
 *	@version 1.0
 *	@since outlook-lite 1.0
 */
 ?>
	<div class="ol-wrapper">
		<div id="ol-header-area">
			<header id="ol-header" class="ol-header-with-topbar" role="banner">
				
				<!-- Start header top -->

				<div class="ol-header-top">
					<div class="container">
						<div class="ol-header-top-area">
							<div class="row">
								<div class="col-md-6 col-sm-6 col-xs-6">
									<div class="ol-header-top-left">
										<ul class="ol-info-list">
											<?php
												/*
												 *	Phone
												 *
												 *	@since outlook-lite 1.0
												 */ 
												$header_double_phone = esc_html( get_theme_mod( 'outlook_header_double_top_phone', '' ) );
												if( $header_double_phone != '' ) : ?>
													<li><i class="fa fa-phone"></i> <span><?php echo $header_double_phone; ?></span></li>
											<?php endif; ?>

											<?php
												/*
												 *	Email
												 *
												 *	@since outlook-lite 1.0
												 */ 
												$header_double_email = esc_html( get_theme_mod( 'outlook_header_double_top_email', '' ) );
												if( $header_double_email != '' ) : ?>												
													<li><i class="fa fa-envelope-o"></i><span><?php echo $header_double_email; ?></span></li>
											<?php endif; ?>
											
										</ul>
									</div>
								</div>
								<div class="col-md-6 col-sm-6 col-xs-6">
									<div class="ol-header-top-right">
										<nav role="navigation">
											
											<?php 
												
												if( is_page_template( 'home-page.php' ) ) {
													
													/* 
													 *	Home Secondary Menu	-	top position 
													 */																			
													wp_nav_menu( array(
													  'theme_location' 	=> 'outlook-secondary-menu',
													  'depth' 			=> 2,
													  'container' 		=> false,
													  'menu_class' 		=> 'ol-head-topnav',
													  'fallback_cb'       => '',
													  'walker' 			=> new wp_bootstrap_navwalker(),  //Process nav menu using custom nav walker
													  )
													);
													
												}else{
													
													/* 
													 *	Global Secondary Menu	-	top position 
													 */																			
													wp_nav_menu( array(
													  'theme_location' 	=> 'outlook-global-secondary-menu',
													  'depth' 			=> 2,
													  'container' 		=> false,
													  'menu_class' 		=> 'ol-head-topnav',
													  'fallback_cb'       => '',
													  'walker' 			=> new wp_bootstrap_navwalker(),  //Process nav menu using custom nav walker
													  )
													);
												}
																							
											?>	
																					
										</nav>
									</div>
								</div>
							</div>
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
								<?php get_template_part( 'inc/template-parts/headers/site', 'logo' ); ?>
							    
							    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							      
									<?php 
										
										if( is_page_template( 'home-page.php' ) ) {
											
											/* 
											 *	Home Primary Menu - bottom position 
											 */	
																
											wp_nav_menu( array(
											  'theme_location' 	=> 'outlook-primary-menu',
											  'depth' 			=> 2,
											  'container' 		=> false,
											  'menu_class' 		=> 'nav navbar-nav navbar-right ol-header-with-topnav ol-nav-scroll',
											  'fallback_cb'       => '',
											  'walker' 			=> new wp_bootstrap_navwalker(),  //Process nav menu using custom nav walker
											  )
											);
										
										}else{
											
											/* 
											 *	Global Primary Menu - bottom position 
											 */	
																
											wp_nav_menu( array(
											  'theme_location' 	=> 'outlook-global-primary-menu',
											  'depth' 			=> 2,
											  'container' 		=> false,
											  'menu_class' 		=> 'nav navbar-nav navbar-right ol-header-with-topnav ol-nav-scroll',
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