<?php
/*
 *	Displays output for front-page "blog posts" content.
 *	
 *	@version 1.0
 *	@since outlook-lite 1.0
 */
 ?>
 <?php 
/*
 *	Enable/disable blog section
 *
 *	@since outlook-lite 1.0
 */
$home_blog_section	=	get_theme_mod( 'outlook_home_blog_enable_disable', '1' );	

if ( $home_blog_section == true ):	?>

	<div class="ol-wrapper">
		<section id="ol-blog">
			<div class="container">	
				<div class="row">	
					<div class="col-md-12">
						<div class="ol-blog-area">
							
							<!-- Start blog title -->
							<?php 
								$home_blog_title	=	esc_html( get_theme_mod( 'outlook_home_blog_title', '' ) );
								
								if( $home_blog_title != '' ):	?>
									<div class="ol-title-area">
										<h2 class="ol-title"><?php echo $home_blog_title; ?></h2>
										<span class="ol-title-line"></span>
									</div>
							<?php endif; ?>
							<!-- End blog title -->
							
							<!-- Start blog posts -->
							<?php
								$home_blog_post_count	=	esc_html( get_theme_mod( 'outlook_home_blog_post_count', '3' ) );
								
								$home_blog_args = array( 
									'post_type' 			=> 'post', 
									'posts_per_page' 		=> $home_blog_post_count,
									'ignore_sticky_posts'	=> 1
								);	

								$home_blog_loop = new WP_Query( $home_blog_args );
									
								if ( $home_blog_loop -> have_posts() ) :	?>

								    						
									<div class="ol-blog-content">
										<div class="row">
											
											<!-- Start blog posts loop -->
											<?php while ( $home_blog_loop->have_posts() ) : $home_blog_loop->the_post(); ?>
											
												<!-- Start blog item -->
												<div class="col-md-4">
													<article class="ol-blog-item">
														<header class="ol-blog-item-head">
															
															<!-- thumbnail image -->
															<?php if( has_post_thumbnail() ): ?>
																<div class="ol-blog-item-img">
																	<a href="<?php esc_url( the_permalink() ); ?>">
																		<?php the_post_thumbnail( '', array( 'alt' => esc_attr( get_the_title() ) ) ); ?>
																	</a>
																</div>
															<?php endif; ?>
															
															<!-- post title -->
															<h2 class="ol-blog-title">
																<a href="<?php esc_url( the_permalink() ); ?>"><?php the_title(); ?></a>
															</h2>
															
															<!-- post meta -->
															<ul class="ol-blog-meta">
																<?php 
																	$home_blog_author_name	=	esc_html( get_theme_mod( 'outlook_home_blog_author_name', '0' ) );
																	if( $home_blog_author_name != true ) :
																?>
																	<li> <i class="fa fa-user">	</i> 
																		<a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>"><?php the_author(); ?></a>
																	</li>
																<?php endif; ?>
																
																<?php 
																	$home_blog_post_date	=	esc_html( get_theme_mod( 'outlook_home_blog_post_date', '0' ) );
																	if( $home_blog_post_date != true ) :
																?>																
																	<li> <i class="fa fa-calendar">	</i> <span><?php the_time( get_option( 'date_format' ) ); ?></span></li>
																<?php endif; ?>
																
															</ul>
															
														</header>
														
														<div class="ol-blog-item-content">
															<p>	<?php echo outlook_custom_post_excerpt(); ?> </p>
														</div>
														
														<?php 
															/*
															 *	Post comment count & Read more link
															 *
															 *	@since outlook-lite 1.0
															 */
															$home_blog_comment_count	=	esc_html( get_theme_mod( 'outlook_home_blog_post_comment_count', '0' ) );
															$home_blog_readmore_link	=	esc_html( get_theme_mod( 'outlook_home_blog_post_readmore_link', '0' ) );
															
															if( ( $home_blog_comment_count != true ) || ( $home_blog_readmore_link != true ) ): ?>
																<footer class="ol-blog-item-bottom">
																	
																	<?php if( $home_blog_comment_count != true ) : ?>
																		<?php if ( comments_open() ) :  ?>
																				<i class="fa fa-comments-o"></i> 
																				<span>
																					<?php 
																						comments_popup_link( 
																							__('0', 'outlook-lite'), 
																							__('1', 'outlook-lite'), 
																							__('%', 'outlook-lite') ); 
																					?>
																				</span>
																		<?php endif; ?>
																	<?php endif; ?>
																	
																	<?php if( $home_blog_readmore_link != true ) : ?>
																		<a href="<?php esc_url( the_permalink() ); ?>" class="ol-read-more">
																			<?php _e( 'Read More', 'outlook-lite' );?> <i class="fa fa-angle-right"></i>
																		</a>
																	<?php endif; ?>
																	
																</footer>
														<?php endif; ?>
														
													</article>
												</div>
												<!-- End blog item -->
											
											<?php endwhile; ?>
											<!-- End blog posts loop -->
											
										</div>							
										
										<?php
											$home_blog_button_text	=	esc_html( get_theme_mod( 'outlook_home_blog_button_text', '' ) );
											$home_blog_button_url	=	esc_url( get_theme_mod( 'outlook_home_blog_button_url', '' ) );
											
											if( $home_blog_button_text && $home_blog_button_url ) : 
										?>
											<div class="row">
												<div class="col-md-12">	
													<div class="ol-all-post-btn-area">
														<a class="ol-button ol-learn-more" href="<?php echo $home_blog_button_url; ?>">
															<?php echo $home_blog_button_text; ?>
														</a>
													</div>
												</div>
											</div>
										<?php endif; ?>
										<!-- End blog posts -->
										
									</div>							
							
							<?php	
								endif;
								wp_reset_postdata();
							?>							
							
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>

<?php endif;?>