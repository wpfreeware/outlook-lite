<?php
/*
 *	Displays output for front-page featured slider content.
 *	
 *	@version 1.0
 *	@since outlook-lite 1.0
 */
 ?>
	<div class="ol-wrapper">
		<section id="ol-main-slider">
				  	
			<?php
			
				$featured_slider = get_theme_mod( 'outlook_slide_option', array() );
				
				if( $featured_slider ){	?>
					
					<!-- start slider -->
					<div class="flexslider">	
						<ul class="slides">
					
							<?php
							
								/*
								 *	Start slider loop
								 *
								 *	@since outlook-lite 1.0
								 */
								foreach ( $featured_slider as $slides ) {
								
								/*
								 *	set slide variables
								 *
								 *	@since outlook-lite 1.0
								 */
								$slide_image		=	wp_get_attachment_image_src( $slides['ol_slide_image'], 'full' );				// get slide image
								$slide_retina_image	=	wp_get_attachment_image_src( $slides['ol_slide_retina_image'], 'full' );		// get slide image for retina display
								$slide_image_alt	=	get_post_meta( $slides['ol_slide_image'], '_wp_attachment_image_alt', true );	// get image alt attribute
								$slide_title		=	esc_html( $slides['ol_slide_text'] );											// get slide title
								$slide_short_desc	=	esc_textarea( $slides['ol_slide_short_desc'] );									// get slide short description
								$slide_button_text	=	esc_html( $slides['ol_slide_button_text'] );									// get slide button text
								$slide_button_link	=	esc_url( $slides['ol_slide_button_link'] );										// get silde button link
								$slide_link_target	=	esc_html( $slides['ol_slide_button_target'] );									// get slide button target link
							?>
					
							<!-- start single slide item -->
							<li>
								<?php if( $slide_image ): ?>
									<img 
									src="<?php echo esc_url( $slide_image['0'] );?>" 
									alt="<?php echo $slide_image_alt; ?>" 
									<?php if( $slide_retina_image ): ?> data-rjs="<?php echo esc_url( $slide_retina_image['0'] );?>" <?php endif;?> />
								<?php endif; ?>
								
								<div class="ol-main-slider-content">
								
								
									<?php if ( $slide_title ):?>
										<h2> <?php echo $slide_title; ?> </h2>
									<?php endif;?>
									
									
									
									<?php if ( $slide_short_desc ):?>
										<p> <?php echo $slide_short_desc; ?> </p>
									<?php endif;?>
									
									
									
									<?php if( $slide_button_link && $slide_button_text ): ?>
									
										<?php $slide_button_link_target	=	( $slide_link_target )? '_blank' : '_self'; // button target ?>
										<a class="ol-button ol-learn-more" href="<?php echo $slide_button_link; ?>" target="<?php echo $slide_button_link_target; ?>" >
										<?php echo $slide_button_text; ?>
										</a>
									
									<?php endif;?>
								
								</div>
							</li>
							<!-- End single slide item -->							    
					
					<?php }	?>				
					
					</ul>
				</div>					
				<!-- end slider -->
							
			<?php } ?>			    

		</section>
	</div>