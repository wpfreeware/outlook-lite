<?php
/*
 *	TEMPLATE NAME: Front Page
 *	
 *	Handles output for front page content
 *
 *	@version 1.0
 *	@since outlook-lite 1.0
 */

get_header(); ?>
	
<!-- Start Header -->
<?php get_template_part( 'inc/template-parts/headers/header', 'styles' );?>
<!-- End Header -->

<!-- Start Main Slider -->
<?php get_template_part( 'inc/template-parts/front-page/featured', 'slider' );?>
<!-- End Main Slider -->
				
<!-- Start About us -->
<?php get_template_part( 'inc/template-parts/front-page/about', 'us' );?>
<!-- End About us -->


<!-- Start Services -->
<?php get_template_part( 'inc/template-parts/front-page/content', 'services' );?>
<!-- End Services -->


<!-- Start Portfolio section -->
<?php get_template_part( 'inc/template-parts/front-page/content', 'portfolio' ); ?>			
<!-- End Portfolio section -->


<!-- Start image parallax section -->
<?php get_template_part( 'inc/template-parts/front-page/image', 'parallax' ); ?>			
<!-- End image parallax section -->


<!-- Start FAQ & client testimonial section -->
<?php get_template_part( 'inc/template-parts/front-page/testimonials', 'faq' ); ?>
<!-- End FAQ & client testimonial section -->


<!-- Start blog Section -->
<?php get_template_part( 'inc/template-parts/front-page/content', 'blog' ); ?>
<!-- End blog Section -->


<!-- Start footer call to action section -->
<?php get_template_part( 'inc/template-parts/front-page/callout', 'footer' );?>
<!-- End footer call to action section -->
		
<!-- Start footer top/bottom -->
<?php get_template_part( 'inc/template-parts/footer', 'top-bottom' ); ?>
<!-- End footer top/bottom -->			
		
<?php get_footer(); ?>