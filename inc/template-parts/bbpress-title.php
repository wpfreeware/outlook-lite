<?php
/*
 *	Displays output for bbPress title section.
 *	This content will only bbPress forum pages.
 *	
 *	@version 1.0
 *	@since outlook-lite 1.0
 */
 ?>
<?php 
	/*
	 *	If it's a bbPress page then go ahead & display bbPress title bar
	 *
	 *	@since outlook-lite 1.0
	 */
	
	// First check if bbPress is activated
	if ( function_exists( 'is_bbpress' ) ) : ?>
	
		<?php
		/*
		 *	Enable/disable bbPress title bar
		 *
		 *	@since outlook-lite 1.0
		 */ 
		$bbpress_title_bar	=	esc_html( get_theme_mod( 'outlook_bbpress_title_option', '1' ) );
		
		if( $bbpress_title_bar == true ) : ?>	
		 
			<div class="ol-wrapper">
				<section id="ol-page-sub-header" class="ol-bbpress-sub-header">
					<div class="container">
						<div class="ol-bbpress-sub-header-area">
							
							<div class="ol-subheader-title">
								<h1><?php echo get_the_title(); ?></h1>
							</div>							
							
							<?php if ( function_exists('yoast_breadcrumb') ) { ?>
								<!-- start breadcrumb -->
								<div class="ol-breadcrumb-area">
									<?php yoast_breadcrumb('<p class="ol-breadcrumb">','</p>'); ?>
								</div>
								<!-- End breadcrumb -->
							<?php } ?>
							
						</div>
					</div>
				</section>
			</div>
		
		<?php endif; ?>
		
<?php endif; ?>	