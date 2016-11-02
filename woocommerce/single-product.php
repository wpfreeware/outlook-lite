<?php
/**
 * The Template for displaying all single products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

get_header( 'shop' ); ?>

<!-- Start Header -->
<?php get_template_part( 'inc/template-parts/headers/header', 'styles' );?>
<!-- End Header -->	

<!-- Start sub header -->
<?php get_template_part( 'inc/template-parts/woo', 'title' ); ?>
<!-- End sub header -->
	
<!-- Start main content -->
<div class="ol-main-content">
	<main role="main">
		
		<!-- Start wrapper -->
		<div class="ol-wrapper">
			<section id="ol-shop-archive">
				<div class="container">
					<div class="ol-shop-archive-area">
						<div class="row">

							<?php
								/**
								 * woocommerce_before_main_content hook.
								 *
								 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
								 * @hooked woocommerce_breadcrumb - 20
								 */
								do_action( 'woocommerce_before_main_content' );
							?>
						
								<?php while ( have_posts() ) : the_post(); ?>
						
									<?php wc_get_template_part( 'content', 'single-product' ); ?>
						
								<?php endwhile; // end of the loop. ?>
						
							<?php
								/**
								 * woocommerce_after_main_content hook.
								 *
								 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
								 */
								do_action( 'woocommerce_after_main_content' );
							?>
						
							<?php
								/**
								 * woocommerce_sidebar hook.
								 *
								 * @hooked woocommerce_get_sidebar - 10
								 */
								 
								/*
								 *	If right or left sidebar selected then go ahead display WooCommerce sidebar
								 *
								 *	@since outlook-lite 1.0
								 */
								$shop_layouts	=	esc_html( get_theme_mod( 'outlook_woocommerce_layout_option', 'ol-right-sidebar' ) );
								
								if( $shop_layouts == 'ol-right-sidebar' || $shop_layouts == 'ol-left-sidebar' ) :
									do_action( 'woocommerce_sidebar' );
								endif;
							?>

						</div>
					</div>
				</div>
			</section>
		</div>
		<!-- End wrapper -->
		
<!-- Start footer call to action section -->
<?php 
	/*
	 *	Enable/disable footer callout
	 *
	 *	@since outlook-lite 1.0
	 */
	$shop_callout	=	esc_html( get_theme_mod( 'outlook_woocommerce_footer_callout', '1' ) );
	if( $shop_callout == true ) :
		get_template_part( 'inc/template-parts/front-page/callout', 'footer' );
	endif;
?>
<!-- End footer call to action section -->		

<!-- Start footer top/bottom -->
<?php get_template_part( 'inc/template-parts/footer', 'top-bottom' ); ?>
<!-- End footer top/bottom -->

<?php get_footer( 'shop' ); ?>