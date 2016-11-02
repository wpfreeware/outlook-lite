<?php
/**
 * The template for displaying the footer content
 *
 * Contains footer top & bottom contents
 *
 *	@version 1.0
 *	@since outlook-lite 1.0
 */
?>
<!-- Start footer -->
<!-- Start wrapper -->
<div class="ol-wrapper">
	<footer id="ol-footer" role="contentinfo">
		
		<!-- Start footer top -->
		<?php
			$footer_top	=	esc_html( get_theme_mod( 'outlook_footer_top', '0' ) );
			
			if( $footer_top == false) :
		?>
			<div class="ol-footer-top">
				<div class="container">
					<div class="ol-footer-top-area">
						<div class="row">
							
							<?php if ( is_active_sidebar( 'outlook-footer-sidebar' ) ) : ?>
							
								<?php dynamic_sidebar( 'outlook-footer-sidebar' ); ?>
									
							<?php endif; ?>
							
						</div>
					</div>
				</div>
			</div>
		<?php endif; ?>
		<!-- End footer top -->
		
		<!-- Start footer bottom -->
		<?php
			$footer_bottom 	=	esc_html( get_theme_mod( 'outlook_footer_bottom', '0' ) );
			
			if( $footer_bottom == false ) :
		?>
			<div class="ol-footer-bottom">
				<div class="container">
					<div class="ol-footer-bottom-area">
						
						<?php
							/*
							 *	Footer text
							 */
							$footer_bottom_text	=	esc_html( get_theme_mod( 'outlook_footer_bottom_text', '' ) );
							
							if( $footer_bottom_text != '' ) :
						?>
						<p> <?php echo $footer_bottom_text; ?> </p>
						<?php endif; ?>
						
					</div>
				</div>
			</div>
		<?php endif; ?>
		<!-- End footer bottom -->
		
	</footer>
</div>
<!-- End wrapper -->

<!-- End footer -->