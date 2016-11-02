<?php
/*
 *	This template contains portfolio metabox information
 *
 *	@version 1.0
 *	@since outlook-lite 1.0
 */	
	
/*
 *  Portfolio Meta
 *	set variables
 *
 *	@since outlook-lite 1.0
 */
$client_lebel 			= esc_html( get_post_meta( get_the_ID(), '_outlook_portfolio_client_lebel', true ) );
$client_name 			= esc_html( get_post_meta( get_the_ID(), '_outlook_portfolio_client_name', true ) );
$date_lebel 			= esc_html( get_post_meta( get_the_ID(), '_outlook_portfolio_date_lebel', true ) );
$project_date 			= esc_html( get_post_meta( get_the_ID(), '_outlook_portfolio_complete_date', true ) );
$skill_lebel 			= esc_html( get_post_meta( get_the_ID(), '_outlook_portfolio_skill_lebel', true ) );
$skill_names 			= esc_html( get_post_meta( get_the_ID(), '_outlook_portfolio_skill_names', true ) );
$button_text 			= esc_html( get_post_meta( get_the_ID(), '_outlook_portfolio_button_text', true ) );
$button_url 			= esc_url( get_post_meta( get_the_ID(), '_outlook_portfolio_button_url', true ) );
$button_target_value 	= esc_html( get_post_meta( get_the_ID(), '_outlook_portfolio_button_target', true ) );
$button_target			= ( $button_target_value ) ? '_blank' : '_self' ;
?>
<div class="ol-portfolio-detail-info">
	<?php if( $client_lebel ): echo '<h5>' . $client_lebel . '</h5>' ; endif; ?>
	<?php if( $client_name ): echo '<p>' . $client_name . '</p>' ; endif; ?>
</div>
<div class="ol-portfolio-detail-info">
	<?php if( $date_lebel ): echo '<h5>' . $date_lebel . '</h5>' ; endif; ?>
	<?php if( $project_date ): echo '<p>' . $project_date . '</p>' ; endif; ?>
</div>
<div class="ol-portfolio-detail-info">
	<?php if( $skill_lebel ): echo '<h5>' . $skill_lebel . '</h5>' ; endif; ?>
	<?php if( $skill_names ): echo '<p>' . $skill_names . '</p>' ; endif; ?>
</div>

<?php if( $button_text & $button_url ): ?>
<a class="ol-button ol-learn-more" href="<?php echo $button_url; ?>" target="<?php echo $button_target;?>"><i class="fa fa-paper-plane-o"></i><?php echo $button_text; ?></a>
<?php endif; ?>