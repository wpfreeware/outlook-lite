<?php
/*
 *	Displays output for front-page image parallax content.
 *	
 *	@version 1.0
 *	@since outlook-lite 1.0
 */
 ?>
 <?php 
	/*
	 *	Enable/disable about section
	 *
	 *	@since outlook-lite 1.0
	 */
	$parallax_section	=	get_theme_mod( 'outlook_parallax_enable_disable', '1' );	
	
	if ( $parallax_section == true ):	?>
	
		<div class="ol-wrapper">
			<section id="ol-image-parallax">
				<div class="ol-overlay">	
					<div class="container">
						<div class="col-md-12">
							<div class="ol-image-parallax-area">
								
							<!-- title -->
							<?php 
								$parallax_section_title = esc_html( get_theme_mod( 'outlook_parallax_title', '' ) );
														
								if( $parallax_section_title ){	?>
									<h1><?php echo $parallax_section_title; ?></h1>
							<?php } ?>	
								
							<!-- description -->
							<?php 
								$parallax_section_desc = esc_textarea( get_theme_mod( 'outlook_parallax_desc', '' ) );
															
								if( $parallax_section_desc ){	?>								
									<p> <?php echo $parallax_section_desc; ?> </p>
								<?php } ?>
								
							<!-- button -->						
							<?php 
								$parallax_section_button_text 			= esc_html( get_theme_mod( 'outlook_parallax_button_text', '' ) );
								$parallax_section_button_url  			= esc_url( get_theme_mod( 'outlook_parallax_button_url', '' ) );
								$parallax_section_button_target_value	=	esc_html( get_theme_mod( 'outlook_parallax_button_url_target', '0' ) );
								$parallax_section_button_url_target		=	( $parallax_section_button_target_value ) ? '_blank' : '_self';							
															
								if( $parallax_section_button_text && $parallax_section_button_url ){	?>
									<a href="<?php echo $parallax_section_button_url; ?>" class="ol-button ol-learn-more" target="<?php echo $parallax_section_button_url_target; ?>"> 
										<?php echo $parallax_section_button_text; ?> 
									</a>
								<?php } ?>
								
							</div>
						</div>
					</div>
				</div>
			</section>
		</div>

<?php endif; ?>