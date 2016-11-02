<?php
/*
 *	This template contains post single tags
 *
 *	@version 1.0
 *	@since outlook-lite 1.0
 */
?>
<div class="ol-single-post-bottom">
	
	
	<?php
		/*
		 *	Enable/disable post tags
		 *
		 *	@since outlook-lite 1.0
		 */
		 $post_tags_on_off 		= 	esc_html( get_theme_mod( 'outlook_blog_single_tags_on_off', '0' ) );
		 
		 if( $post_tags_on_off == false ) : ?>

			<ul class="ol-post-tag">
				<?php the_tags( '<li> '. __( 'Tags: ', 'outlook-lite' ) .'', ', ', '</li>' ); ?>
			</ul>
	<?php endif; ?>
	
</div>