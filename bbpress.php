<?php
/**
 *	bbPress template
 *
 *	@version 1.0
 *	@since outlook-lite 1.0
 */

get_header(); ?>

<!-- Start Header -->
<?php get_template_part( 'inc/template-parts/headers/header', 'styles' );?>
<!-- End Header -->	

<!-- Start sub header -->
<?php get_template_part( 'inc/template-parts/bbpress', 'title' ); ?>
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
							<div class="<?php echo outlook_bbpress_content_column(); ?>">
								<div class="ol-blog-archive-content">
									<div class="row">
										
										<!-- start loop -->											
										<?php 
											if (have_posts()) :
												while (have_posts()) : the_post();
												
													the_content();
												
												endwhile;

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
								 $bbpress_layout	=	esc_html( get_theme_mod( 'outlook_bbpress_layout_option', 'ol-bbp-right-sidebar' ) );
								 
								 if( ( $bbpress_layout == 'ol-bbp-right-sidebar' ) || ( $bbpress_layout == 'ol-bbp-left-sidebar' ) ) :	?>
								 
									<!-- Start sidebar -->									
									<div class="<?php echo outlook_bbpress_sidebar_column(); ?>">
										<?php get_sidebar( 'bbpress' ); ?>
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
	$bbpress_callout	=	esc_html( get_theme_mod( 'outlook_bbpress_footer_callout', '1' ) );
	if( $bbpress_callout == true ) :
		get_template_part( 'inc/template-parts/front-page/callout', 'footer' );
	endif;
?>
<!-- End footer call to action section -->
		
<!-- Start footer top/bottom -->
<?php get_template_part( 'inc/template-parts/footer', 'top-bottom' ); ?>
<!-- End footer top/bottom -->
		
<?php get_footer(); ?>