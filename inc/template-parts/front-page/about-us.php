<?php
/*
 *	Displays output for front-page about us content.
 *
 *	Contains main content wrapper "ol-main-content" & "about" section contents
 *	
 *	@version 1.0
 *	@since outlook-lite 1.0
 */
 ?>
	<!-- Start main content -->
	<div class="ol-main-content">
		<main role="main">
			
			<?php 
				/*
				 *	Enable/disable about section
				 *
				 *	@since outlook-lite 1.0
				 */
				$about_section	=	get_theme_mod( 'outlook_about_enable_disable', '1' );	
				
				if ( $about_section == true ):	?>
					
				<div class="ol-wrapper">
					
	 				<section id="ol-about-us">
						<div class="container">
							<div class="row">
								<div class="col-md-12">
									<div class="ol-about-us-area">
										<div class="row">
					
											<?php
												/*
												 *	Set variables
												 *
												 *	Image 
												 *	Title
												 *	Description
												 *	Button Text
												 *	Button Link
												 *	Button Target
												 *	
												 *	@since outlook-lite 1.0
												 */ 
												// standard image
												$about_image				=	esc_url( get_theme_mod( 'outlook_about_image', '' ) );	
												// retina image
												$about_retina_image			=	esc_url( get_theme_mod( 'outlook_about_retina_image', '' ) );
												// title
												$about_title				=	esc_html( get_theme_mod( 'outlook_about_title', '' ) );
												// description
												$about_description			=	esc_textarea( get_theme_mod( 'outlook_about_desc', '' ) );
												// button text
												$about_button_text			=	esc_html( get_theme_mod( 'outlook_about_button_text', '' ) );
												// button url
												$about_button_url			=	esc_url( get_theme_mod( 'outlook_about_button_url', '' ) );
												// button target value
												$about_button_target_value	=	esc_html( get_theme_mod( 'outlook_about_button_url_target', false ) );
												// button target
												$about_button_url_target	=	( $about_button_target_value ) ? '_blank' : '_self';
												
											?>	
															
											<div class="col-md-6">
																									
												<!-- image -->
												<?php if ( $about_image != '' ):	?>
																											
														<div class="ol-about-us-left">
															<figure class="ol-about-us-img">
																<img 
																class="about-us-row-image"
																src="<?php echo $about_image; ?>" 
																alt="<?php echo esc_attr( $about_title ); ?>" 
																<?php if( $about_retina_image ): ?> data-rjs="<?php echo $about_retina_image ;?>" <?php endif;?> />
															</figure>
														</div>
														
												<?php endif; ?>												
												
											</div>
																					
											
											<div class="col-md-6">
												<div class="ol-about-us-right">
													
													<!-- title -->
													<?php if( $about_title != '' ):	?>
														
														<div class="ol-title-area">
															<h2 class="ol-title"><?php echo $about_title; ?></h2>
															<span class="ol-title-line"></span>
														</div>
															
													<?php endif; ?>
													
													<div class="ol-about-us-right-content">
														
														<!-- description -->														
														<?php if( $about_description != '' ): ?>
														
															<p><?php echo $about_description; ?></p>	
														
														<?php endif; ?>
														
														<!-- button -->
														<?php if( $about_button_text && $about_button_url ): ?>
															
															<a class="ol-button ol-learn-more" href="<?php echo $about_button_url; ?>" target="<?php echo $about_button_url_target; ?>" >
																<?php echo $about_button_text; ?>
															</a>
											
														<?php endif; ?>
														
														 
													</div>
												</div>
											</div>
											
										</div>
									</div>
								</div>
							</div>
						</div>
					</section>
					
				</div>
			
			<?php endif;?>							