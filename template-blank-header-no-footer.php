<?php
/*
 *	TEMPLATE NAME: Blank - No Container | Header, No Footer
 *	
 *	Handles output for blank container, header, no footer.
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
		
		<!-- start content loop -->											
		<?php 
			if ( have_posts() ) :
			
				while (have_posts()) : the_post();
														
					the_content();
			
				endwhile;
				
			endif;
		?>
		<!-- end content loop -->		
		
<?php get_footer(); ?>