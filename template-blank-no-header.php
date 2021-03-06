<?php
/*
 *	TEMPLATE NAME: Blank - No Container | No Header, Footer
 *	
 *	Handles output for blank container, no header, footer.
 *
 *	@version 1.0
 *	@since outlook-lite 1.0
 */

get_header(); ?>

<!-- Start main content -->
<div class="ol-main-content">
	<main role="main">
		
		<!-- start content loop -->											
		<?php 
			if ( have_posts() ) :
			
				while (have_posts()) : the_post();
														
					the_content();
			
				endwhile;
				
			endif;
		?>
		<!-- end content loop -->
		
<!-- Start footer top/bottom -->
<?php get_template_part( 'inc/template-parts/footer', 'top-bottom' ); ?>
<!-- End footer top/bottom -->			
		
<?php get_footer(); ?>