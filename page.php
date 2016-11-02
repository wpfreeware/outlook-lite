<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 *	@version 1.0
 *	@since outlook-lite 1.0
 */

get_header(); ?>

<!-- Start Header -->
<?php get_template_part( 'inc/template-parts/headers/header', 'styles' );?>
<!-- End Header -->

<!-- Start main content -->
<div class="ol-main-content">
	<main role="main">
		
		<!-- Start wrapper -->
		<div class="ol-wrapper">
			<section id="ol-blog-archive">
				<div class="container">
					
					<div class="ol-blog-archive-area">
						<div class="row">
							
							<!-- Start blog content -->
							<div class="col-md-8">
								
								<div class="ol-blog-archive-content ol-blog-details">
									<div class="row">
										
										<!-- start loop -->											
										<?php 
											if ( have_posts() ) :
												while (have_posts()) : the_post();	?>
												
													<!-- Start blog item -->
													<div class="col-md-12">
														<article id="post-<?php the_ID(); ?>" <?php post_class( 'ol-blog-item' ); ?> >
															
															<header class="ol-blog-item-head">
																
																<?php if( has_post_thumbnail() ): ?>
																	<div class="ol-blog-item-img">
																		<?php the_post_thumbnail( 'post-thumbnail', array( 'alt' => esc_attr( get_the_title() ) ) ); ?>
																	</div>
																<?php endif; ?>
																
																<?php the_title( '<h2 class="ol-blog-title">', '</h2>' ); ?>
																	
																<ul class="ol-blog-meta">
																	<?php edit_post_link( 
																			__(' Edit', 'outlook-lite' ),
																			'<li><i class="fa fa-pencil" aria-hidden="true"></i>',
																			'</li>' ); 
																	?>
																</ul>
																																
															</header>
															
															<div class="ol-blog-item-content">
																<?php the_content(); ?>
															</div>
															
														  <?php 
														  	/*
															 *	Single Page Pagination
															 *
															 *	@since outlook-lite 1.0
														  	 */
															wp_link_pages( array(
																'before'      => '<div class="ol-single-pagination"><span>'. __( 'Pages:', 'outlook-lite' ) .'</span>',
																'after'       => '</div>',
															) );								  
														  
														  ?>															
															
														</article>
													</div>
													<!-- End blog item -->
													
											
													<?php
														/*
														 *	If comments are open or we have at least one comment, load up the comment template.
														 *
														 *	@since outlook-lite 1.0
														 */
														if ( comments_open() || get_comments_number() ) :
															comments_template();
														endif;	?>																													
										
										<?php		
												endwhile;
												
												else : 
												
													get_template_part( 'content', 'none' );
											endif;
										?>
										<!-- end loop -->
										
									</div>
								</div>
								
							</div>
							<!-- End blog content -->
								 
							<!-- Start sidebar -->									
							<div class="col-md-4">
								<?php get_sidebar(); ?>
							</div>
							<!-- End sidebar -->
								
							
						</div>
					</div>
				</div>
			</section>
		</div>
		<!-- End wrapper -->
		
<!-- Start footer top/bottom -->
<?php get_template_part( 'inc/template-parts/footer', 'top-bottom' ); ?>
<!-- End footer top/bottom -->		
		
<?php get_footer(); ?>