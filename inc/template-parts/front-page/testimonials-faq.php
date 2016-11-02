<?php
/*
 *	Displays output for front-page "Testimonials & FAQ" content.
 *	
 *	@version 1.0
 *	@since outlook-lite 1.0
 */
 ?>
 <?php 
	/*
	 *	Enable/disable faq's & testimonials section
	 *
	 *	@since outlook-lite 1.0
	 */
	$testimonials_faqs_section	=	esc_html( get_theme_mod( 'outlook_testimonials_faqs_enable_disable', '1' ) );

	if ( $testimonials_faqs_section == true ):	?>
	
		<div class="ol-wrapper">
			<section id="ol-faq-testimonial">	
				<div class="container">	
					<div class="row">	
						<div class="col-md-12">	
							<div class="ol-faq-area">									
								
								<div class="ol-title-area">
									
									<!-- Start testimonaials & faqs Title -->
									<?php 
										
										$testimonials_faqs_title = esc_html( get_theme_mod( 'outlook_testimonials_faqs_title', '' ) );
										
										if( $testimonials_faqs_title ){	?>											
											<h2 class="ol-title"><?php echo $testimonials_faqs_title; ?></h2>
											<span class="ol-title-line"></span>
									<?php } ?>
									<!-- End testimonaials & faqs Title -->

									<!-- Start testimonaials & faqs description -->
									<?php 
										
										$testimonials_faqs_desc = esc_html( get_theme_mod( 'outlook_testimonials_faqs_desc', '' ) );
										
										if( $testimonials_faqs_desc ){	?>
																												
											<p> <?php echo $testimonials_faqs_desc; ?> </p>
									
									<?php } ?>
									<!-- End testimonaials & faqs description -->									
									
								</div>
								
								
								<div class="ol-faq-content">	
									<div class="row">
				
										<?php
											/*
											 *	If jetpack installed & custom-content-types activated
											 *	then go ahead & display the testimonial section.
											 */	
											if( class_exists( 'Jetpack' ) && Jetpack::is_module_active( 'custom-content-types' ) ) :	?>	

												<!-- Start client testimonial -->
												<div class="col-md-12">
													<div class="ol-faq-content-right">
														<div class="ol-clients-testimonial-content">	
															
															<?php
																$testimonials_args = array( 
																	'post_type' 		=> 'jetpack-testimonial', 
																	'posts_per_page' 	=> -1,
																	//'order'     		=> 'DESC',	//DESC ASC
																);	
							
																$testimonials_loop = new WP_Query( $testimonials_args );
																	
																if ( $testimonials_loop -> have_posts() ) :	?>
																    													
																	<div class="ol-clients-testimonial-slider">
																		
																		<?php while ( $testimonials_loop->have_posts() ) : $testimonials_loop->the_post(); ?>
																		
																			<!-- Start single slide item -->
																			<div class="ol-clients-testimonial-item">
																				<div class="ol-clients-testimonial-thumbonill">
																					<figure>
																						<?php 
																			    			if( has_post_thumbnail() ):
																			    				the_post_thumbnail( 
																			    					'outlook-testimonial-thumb', 
																			    					array( 
																			    						'alt' => esc_attr( get_the_title() ) 
																			    					));
																			    			endif; 
																			    		?>																			
																					</figure>
																				</div>
																				<span class="fa fa-quote-left ol-testimonial-quote"></span>
																				
																				<div class="ol-clients-testimonial-info">	
																					<?php the_content(); ?>
																					<?php the_title( '<h4 class="ol-clients-name">', '</h4>' );?>
																					
																					<?php
																						/*
																						 *  Testimonial Meta
																						 *	set variables
																						 *
																						 *	@since outlook-lite 1.0
																						 */
																						$testimonial_position = esc_html( get_post_meta( get_the_ID(), '_outlook_testimonial_position', true ) );
																					?>
																					
																					<?php if( $testimonial_position ): ?>
																						<span class="ol-clients-status"> <?php echo $testimonial_position; ?> </span>
																					<?php endif; ?>
																				</div>
																			</div>
																			<!-- End single slide item -->
																		
																		<?php endwhile;	?>	
																		
																	</div>
															
																<?php endif;
																wp_reset_postdata(); ?>											
															
														</div>
														
													</div>
												</div>
												<!-- End client testimonial --> 
										<?php endif; ?>
										<!-- end jetpack check -->
										
									</div>
								</div>
								
							</div>
						</div>
					</div>
				</div>
			</section>
		</div>

<?php endif;?>