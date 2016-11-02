<?php
/**
 * The template for displaying all single posts and attachments
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
				
				<section id="ol-portfolio-detail">
					<div class="container">
						<div class="ol-portfolio-detail-area">
							<div class="row">
								<div class="col-md-10 col-md-offset-1">
											
									<?php if ( have_posts() ) : ?>
									
										<div id="post-<?php the_ID(); ?>" <?php post_class( 'ol-portfolio-detail-content' ); ?>>
											
											<!-- start loop -->
											<?php while (have_posts()) : the_post();	?>
																					
												<?php if( has_post_thumbnail() ): ?>
													<div class="ol-portfolio-detail-media">
														<figure class="ol-portfolio-detail-img">
															<?php the_post_thumbnail( 'outlook-portfolio-thumb', array( 'alt' => esc_attr( get_the_title() ) ) ); ?>
														</figure>
													</div>
												<?php endif; ?>
												
												<div class="ol-portfolio-detail-description">
													<div class="row">
														
														<div class="ol-portfolio-detail-description-left col-md-8 col-sm-7">
															<?php the_title( '<h2>', '</h2>' ); ?>
															<?php the_content(); ?>
														</div>
													
													
														<div class="ol-portfolio-detail-description-right col-md-4 col-sm-5">
															
															<?php get_template_part( 'inc/template-parts/portfolio', 'info' ); ?>
															
														</div>
													
													</div>
												</div>
												
												
												<?php 
													/*
													 *	Portfolio next/prev navi
													 *
													 *	@since outlook-lite 1.0
													 */
													$portfolio_navi	=	esc_html( get_theme_mod( 'outlook_portfolio_next_prev', '1' ) );
													if( $portfolio_navi ) :
														get_template_part( 'inc/template-parts/next', 'prev' ); 
													endif;	
												?>
													
												<?php 
													/*
													 *	Related Projects
													 *
													 *	@since outlook-lite 1.0
													 */
													$related_projects	=	esc_html( get_theme_mod( 'outlook_portfolio_related_projects', '1' ) );
													if( $related_projects ) :
														get_template_part( 'inc/template-parts/related', 'posts-portfolio' );
													endif;
												?>
										
	
											<?php endwhile; ?>
											
										</div>
									
									<?php else : 
											
												get_template_part( 'content', 'none' );
												
										endif; ?>
									<!-- end loop -->																			
										
									</div>
								</div>
								
							</div>
						</div>
					</div>
				</section>
			</div>
			
<!-- Start footer call to action section -->
<?php 
	/*
	 *	Enable/disable footer callout
	 *
	 *	@since outlook-lite 1.0
	 */
	$blog_callout	=	esc_html( get_theme_mod( 'outlook_portfolio_footer_callout', '1' ) );
	if( $blog_callout == true ) :
		get_template_part( 'inc/template-parts/front-page/callout', 'footer' );
	endif;
?>
<!-- End footer call to action section -->
		
<?php get_footer(); ?>