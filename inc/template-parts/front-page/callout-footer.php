<?php
/*
 *	Displays output for front-page footer call-to-action content.
 *	
 *	@version 1.0
 *	@since outlook-lite 1.0
 */
 ?>
<?php
	$callout_section	=	esc_html( get_theme_mod( 'outlook_callout_enable_disable', '1' ) );
	
	if( $callout_section == true ) :
?>
	<div class="ol-wrapper">
		<section id="ol-footer-callto-action">
			<div class="container">
				<div class="ol-footer-callto-action-area">
					
					<?php
						$callout_text	=	esc_html( get_theme_mod( 'outlook_callout_text', '' ) );
						
						if( $callout_text ) :
					?>
						<div class="ol-footer-callto-message">
							<p>	<?php echo $callout_text; ?> </p>
						</div>
					<?php endif; ?>
					
					<?php
						$callout_button_text				=	esc_html( get_theme_mod( 'outlook_callout_button_text', '' ) );
						$callout_button_url					=	esc_url( get_theme_mod( 'outlook_callout_button_url', '' ) );
						$callout_button_target_value		=	esc_html( get_theme_mod( 'outlook_callout_button_target', '0' ) );
						$callout_button_target 				=	( $callout_button_target_value ) ? '_blank' : '_self' ;
						
						if( $callout_button_text && $callout_button_url ) : 				
					?>
						<div class="ol-footer-callto-button-area">
							<a class="ol-call-to-btn" href="<?php echo $callout_button_url; ?>" target="<?php echo $callout_button_target; ?>"><?php echo $callout_button_text; ?></a>
						</div>
					<?php endif; ?>
					
				</div>
			</div>
		</section>
	</div>
<?php endif; ?>