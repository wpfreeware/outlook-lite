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
		<!-- Start Blog archive -->
		
		<!-- Start wrapper -->
		<div class="ol-wrapper">
			<section id="ol-blog-archive">
				<div class="container">
					
					<div class="ol-blog-archive-area">
						<div class="row">
							
								<!-- Start blog content -->
							<div class="<?php echo outlook_blog_content_column(); ?>">
								
								<div class="ol-blog-archive-content ol-blog-details">
									<div class="row">
										
										<!-- start loop -->											
										<?php 
											if ( have_posts() ) :
												while (have_posts()) : the_post();	?>
												
													<!-- Start blog item -->
													<div class="col-md-12">
														<article id="post-<?php the_ID(); ?>" <?php post_class( 'ol-blog-item' ); ?>>
															
															<header class="ol-blog-item-head">
																
																<?php if( has_post_thumbnail() ): ?>
																	<div class="ol-blog-item-img">
																		<?php the_post_thumbnail( 'post-thumbnail', array( 'alt' => esc_attr( get_the_title() ) ) ); ?>
																	</div>
																<?php endif; ?>
																
																<?php the_title( '<h2 class="ol-blog-title">', '</h2>' ); ?>
																
																<ul class="ol-blog-meta">
																	<?php get_template_part( 'post', 'meta' ); ?>
																</ul>
																
															</header>
															
															<div class="ol-blog-item-content">
																<?php the_content(); ?>
															</div>
															
														  <?php 
														  	/*
															 *	Single Post Pagination
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
													
													<!-- Start Share & Tags -->
													<?php get_template_part( 'inc/template-parts/tag', 'share' ); ?>
													<!-- End Share & Tags -->
													
													<!-- next/prev -->
													<?php get_template_part( 'inc/template-parts/next', 'prev' ); ?>
													<!-- next/prev -->
													
													<!-- Start author bio -->
													<?php get_template_part( 'inc/template-parts/author', 'bio' ); ?>
													<!-- End author bio -->
													
													<!-- Start related post -->
													<?php get_template_part( 'inc/template-parts/related', 'posts' ); ?>
													<!-- Start author post -->
											
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
							
							<?php 
								/*
								 *	If "right sidebar" or "left sidebar" option selected
								 *	Then go ahead & display the sidebar.
								 */
								 $blog_layout	=	esc_html( get_theme_mod( 'outlook_blog_layout_option', 'ol-right-sidebar' ) );
								 
								 if( ( $blog_layout == 'ol-right-sidebar' ) || ( $blog_layout == 'ol-left-sidebar' ) ) :	?>
								 
									<!-- Start sidebar -->									
									<div class="<?php echo outlook_blog_sidebar_column(); ?>">
										<?php get_sidebar(); ?>
									</div>
									<!-- End sidebar -->
								
							<?php endif; ?>
							
						</div>
					</div>
				</div>
			</section>
		</div>
		<!-- End wrapper -->
		<!-- End Blog archive -->
		
<!-- Start footer call to action section -->
<?php 
	/*
	 *	Enable/disable footer callout
	 *	Setting - "outlook_blog_callout"  @file blog-settings.php
	 *
	 *	@since outlook-lite 1.0
	 */
	$blog_callout	=	esc_html( get_theme_mod( 'outlook_blog_callout', '1' ) );
	if( $blog_callout == true ) :
		get_template_part( 'inc/template-parts/front-page/callout', 'footer' );
	endif;
?>
<!-- End footer call to action section -->
		
<!-- Start footer top/bottom -->
<?php get_template_part( 'inc/template-parts/footer', 'top-bottom' ); ?>
<!-- End footer top/bottom -->		
		
<?php get_footer(); ?>