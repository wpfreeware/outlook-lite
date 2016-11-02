<?php
/*
 *	Displays output for front-page portfolio content.
 *	
 *	@version 1.0
 *	@since outlook-lite 1.0
 */
 ?>
<?php
/*
 *	If jetpack installed & custom-content-types module activated
 *	then go ahead & display the portfolio section.
 */	
if( class_exists( 'Jetpack' ) && Jetpack::is_module_active( 'custom-content-types' ) ) :	 
	
	/*
	 *	Enable/disable portfolio section
	 *
	 *	@since outlook-lite 1.0
	 */
	$portfolio_section	=	get_theme_mod( 'outlook_portfolio_enable_disable', '1' );	
	
	if ( $portfolio_section == true ):	?>
	
		<div class="ol-wrapper">	
			<section id="ol-our-work">	
				
				<?php
					/*
					 *	Set variables
					 *
					 *	Title
					 *	Column style
					 *	Content display style
					 *	
					 *	@since outlook-lite 1.0
					 */ 
					// title
					$portfolio_title			=	esc_html( get_theme_mod( 'outlook_portfolio_title', '' ) );	
					// column style
					$portfolio_column			=	esc_html( get_theme_mod( 'outlook_portfolio_column', '4' ) );
					// content display style
					$portfolio_display_style	=	esc_html( get_theme_mod( 'outlook_portfolio_display_style', 'outlook-portfolio-image-top' ) );
					
					// store display style starting markups based on user input
				    if( $portfolio_display_style == 'outlook-portfolio-image-top' ){
					    $thumb_markup_start				= '<div class="col-md-12"><div class="ol-work-item-info-top">';
					    $content_markup_start			= '<div class="col-md-12"><div class="ol-work-item-info-bottom">';
				    }
				    
				    if( $portfolio_display_style == 'outlook-portfolio-image-left' ){
					    $thumb_markup_start				= '<div class="col-md-8"><div class="ol-work-item-info-left">';
					    $content_markup_start			= '<div class="col-md-4"><div class="ol-work-item-info-right">';
				    }			
					
				?>					
				
				<?php if( $portfolio_title != '' ):	?>
				<!--start section title -->
					<div class="container">	
						<div class="row">	
							<div class="col-md-12">	
								<div class="ol-title-area">	
									<h2 class="ol-title"><?php echo $portfolio_title; ?></h2>
									<span class="ol-title-line"></span>
								</div>
							</div>
						</div>
					</div>
				<!-- End section title -->	
				<?php endif; ?>
				
				<!-- start portfolio content (added via jQuery) -->
				<div id="ol-work-item-details">
					<div class="container">
						<div class="row">	
							<div class="col-md-12">
								<div class="ol-work-item-details">
									<!-- portfolio details window close btn -->
									<a class="ol-work-details-close-btn" href="#"><span class="ol-line"></span></a>
									<div class="ol-work-item-details-content">	
										
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- End portfolio content (added via jQuery) -->
				
				<!-- Start work item -->
				<div class="ol-our-work-item">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<div class="ol-work-item-area">	
									<ul class="ol-work-item-nav">
										
										
										<?php
											$portfolio_args = array( 
												'post_type' 			=> 'jetpack-portfolio', 
												'posts_per_page' 		=> -1,
												'ignore_sticky_posts'	=> 1
											);	
		
											$portfolio_loop = new WP_Query( $portfolio_args );
												
											if ( $portfolio_loop -> have_posts() ) :	
												while ( $portfolio_loop->have_posts() ) : $portfolio_loop->the_post();
												    										    
											    ?>
												
												<!-- start single work item -->
												<li class="col-md-<?php echo $portfolio_column; ?> col-sm-6 col-xs-12">
													<div class="ol-work-item">
														
														<?php if( has_post_thumbnail() ): ?>
															<!-- portfolio thmubnail -->
															<div class="ol-work-item-thumbonil">
																<figure>
																	<?php the_post_thumbnail( 'outlook-portfolio-thumb', array( 'alt' => esc_attr( get_the_title() ) ) ); ?>
																	<figcaption class="ol-work-item-link-area">
																		<a class="ol-work-item-link" href="#ol-work-item-details"><i class="fa fa-expand"></i></a>
																	</figcaption>
																</figure>
															</div>
														<?php endif; ?>
														
														<!-- portfolio details -->
														<div class="ol-work-item-info">
															<div class="row">
																
																<?php if( has_post_thumbnail() ):	?>
																	<?php echo $thumb_markup_start; ?>
																			<a href="<?php the_permalink(); ?>">
																				<?php the_post_thumbnail( 'outlook-portfolio-thumb', array( 'alt' => esc_attr( get_the_title() ) ) ); ?>
																			</a>
																		</div>
																	</div>
																<?php endif; ?>
																
																<?php echo $content_markup_start; ?>
																	<?php the_title( '<h2>', '</h2>' ); ?>
																	<?php the_content(); ?>
																	<?php get_template_part( 'inc/template-parts/portfolio', 'info' ); ?>
																		
																	</div>
																</div>
															</div>
														</div>
												
													</div>
										    	</li>
										    	<!-- End single work item -->										
									
										<?php
											    endwhile;
											endif;
											wp_reset_postdata();
											
										?>
		
								    	
								    </ul>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- End work item -->
			</section>
		</div>
		
	<?php endif; ?>
	<!-- end enable/disable check-->
<?php endif; ?>
<!-- end jetpack check -->