<?php
/**
 *
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 *	@version 1.0
 *	@since outlook-lite 1.0
 */

get_header(); ?>

<!-- Start Header -->
<?php get_template_part( 'inc/template-parts/headers/header', 'styles' );?>
<!-- End Header -->	

<!-- Start sub header -->
<?php get_template_part( 'inc/template-parts/blog', 'title' ); ?>
<!-- End sub header -->

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
								<div class="ol-blog-archive-content">
									<div class="row" id="jetpack-infinite-wrap">
										
										<!-- start loop -->											
										<?php 
											if (have_posts()) :
												while (have_posts()) : the_post();
												
													get_template_part( 'content', get_post_format() );
												
												endwhile;
												
												else : 
												
													get_template_part( 'content', 'none' );
											endif;
										?>
										<!-- end loop -->
										
										
										<?php get_template_part( 'inc/template-parts/blog', 'pagination' );?>
										
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