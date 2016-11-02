<?php
/*
 *	Displays output for front-page services content.
 *	
 *	@version 1.0
 *	@since outlook-lite 1.0
 */
 ?>
 
<?php 
	/*
	 *	Enable/disable services section
	 *
	 *	@since outlook-lite 1.0
	 */
	$counter_section	=	esc_html( get_theme_mod( 'outlook_services_enable_disable', '1' ) );
	
	if ( $counter_section == true ):	?>
	 
		<div class="ol-wrapper">
			<section id="ol-service">
				<div class="container">
					<div class="row">	
						<div class="col-md-12">	
							<div class="ol-service-area">	
								
								<!-- Start Service Title -->
								<?php 
									$services_title = esc_html( get_theme_mod( 'outlook_services_title', '' ) );
									
									if( $services_title ){	?>
									
									<div class="ol-title-area">	
										<h2 class="ol-title">	
											<?php echo $services_title; ?>
										</h2>
										<span class="ol-title-line"></span>
									</div>							
									
								<?php } ?>
								<!-- End Service Title -->						
								
								<!-- Start Services -->
								<?php
									
									$services = get_theme_mod( 'outlook_services_option', array() );
									
									if( $services ){ ?>
															
										<div class="ol-service-content">
											
											<ul>
												
												<?php
												
													/*
													 *	Start service loop
													 *
													 *	@since outlook-lite 1.0
													 */
													foreach ( $services as $service_item ) {
													
													/*
													 *	set service variables
													 *
													 *	@since outlook-lite 1.0
													 */
													$service_icon		=	esc_html( $service_item['ol_service_icon'] );		// service icon
													$service_title		=	esc_html( $service_item['ol_service_title'] );		// service title
													$service_desc		=	esc_textarea( $service_item['ol_service_desc'] );	// service description
												?>										
													<!-- start single service item	 -->
													<li>
														<div class="ol-service-item">
															
															<?php if ( $service_icon ):?>
																<i class="fa <?php echo $service_icon; ?> ol-service-icon"></i>
															<?php endif;?>
																												
															<div class="ol-service-item-detail">
																
																<?php if ( $service_title ):?>
																	<h4><?php echo $service_title; ?></h4>
																<?php endif;?>
																
																<?php if ( $service_desc ):?>
																	<p><?php echo $service_desc; ?></p>
																<?php endif;?>																										
																
															</div>
														</div>
													</li>
													<!-- end single service item-->
												
												<?php }	?>
											
											</ul>
										</div>
								
								<?php } ?>
								<!-- End Services -->
															
							</div>
						</div>
					</div>
				</div>
			</section>
		</div>
		
	<?php endif;?>		