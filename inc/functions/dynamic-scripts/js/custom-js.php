<?php
/*
 * 	This file contains dynamic js calls
 *	Content	-	Featured slider | Testimonials Slider | Team member slider | Clients logo slider
 *
 *	@version 1.0
 *	@since outlook-lite 1.0
 */
 
function outlook_dynamic_js_call(){	?>
	
	<script type="text/javascript">
		
		(function( $ ){
			
			<?php if( is_page_template( 'home-page.php' ) ) : 
				
				/*
				 *	featured slider
				 */
				$featured_slide_animation		=	esc_html( get_theme_mod( 'outlook_slide_animation', 'slide' ) );
				$featured_slide_autoplay		=	esc_html( get_theme_mod( 'outlook_slide_autoplay_on_off', '0' ) );		
				$featured_slide_speed			=	esc_html( get_theme_mod( 'outlook_slide_speed', '7000' ) );
				$featured_slide_dot_nav			=	esc_html( get_theme_mod( 'outlook_slide_dot_nav', '0' ) );
				$featured_slide_next_prev_nav	=	esc_html( get_theme_mod( 'outlook_slide_next_prev_nav', '0' ) );
				 
				/*
				 *	Testimonial slider
				 */
				 $testimonial_slide_speed		=	esc_html( get_theme_mod( 'outlook_testimonial_slide_speed', '3000' ) );
				 $testimonial_slide_autoplay	=	esc_html( get_theme_mod( 'outlook_testimonial_autoplay_on_off', '0' ) );
				 $testimonial_slide_dot_nav		=	esc_html( get_theme_mod( 'outlook_testimonial_dot_nav', '0' ) );
				 				
			?>
				 			
				
				/* ----------------------------------------------------------- */
				/*  Featured Slider
				/* ----------------------------------------------------------- */	
				$('.flexslider').flexslider({
				    animation: 		"<?php echo $featured_slide_animation; ?>",								// slide animation
				    slideshow: 		<?php echo ( $featured_slide_autoplay ) ? 'false' : 'true'; ?>,			// autoplay
				    slideshowSpeed: <?php echo $featured_slide_speed; ?>,									// slide speed
				    controlNav: 	<?php echo ( $featured_slide_dot_nav ) ? 'false' : 'true'; ?>,			// dot nav
				    directionNav: 	<?php echo ( $featured_slide_next_prev_nav ) ? 'false' : 'true'; ?>, 	// next/prev nav
				    smoothHeight: true,
				});

				<?php 
					$testimonials_disable	=	esc_html( get_theme_mod( 'outlook_testimonials_disable', '0' ) ); 
					if( $testimonials_disable == false ) : ?>
						/* ----------------------------------------------------------- */
						/*  Testimonials
						/* ----------------------------------------------------------- */			
						$('.ol-clients-testimonial-slider').slick({
						  autoplaySpeed:	<?php echo $testimonial_slide_speed; ?>,
						  autoplay:			<?php echo ( $testimonial_slide_autoplay ) ? 'false' : 'true'; ?>,
						  dots:				<?php echo ( $testimonial_slide_dot_nav ) ? 'false' : 'true'; ?>,
						  arrows: false,
						  speed:300,			  
						  infinite: true,
						  cssEase: 'linear',
						  rtl:false,
						});
				<?php endif; ?>		
			
			// end home sliders call
			<?php endif; ?>
			
			<?php if( is_singular( 'jetpack-portfolio' ) ) : ?>
			
				/* ----------------------------------------------------------- */
				/*  RELATED PROJECT SLIDE ( SLICK SLIDER )
				/* ----------------------------------------------------------- */			
				$('.ol-related-project-slide').slick({
				  arrows: true,
				  infinite: true,
				  autoplay: true,
				  autoplaySpeed: 7000,
				  speed: 300,
				  slidesToShow: 3,
				  slidesToScroll: 1,
				  responsive: [
				    {
				      breakpoint: 1200,
				      settings: {
				        slidesToShow: 3,
				        slidesToScroll: 3,
				        infinite: true
				      }
				    },
				    {
				      breakpoint: 640,
				      settings: {
				        slidesToShow: 2,
				        slidesToScroll: 2
				      }
				    },
				    {
				      breakpoint: 480,
				      settings: {
				        slidesToShow: 1,
				        slidesToScroll: 1
				      }
				    }
				    // You can unslick at a given breakpoint now by adding:
				    // settings: "unslick"
				    // instead of a settings object
				  ]
				});			
			
				// End portfolio related project
			<?php endif; ?>
					
			})( jQuery );		
		
	</script>	
			
<?php
}
add_action( 'wp_footer', 'outlook_dynamic_js_call', 20 );