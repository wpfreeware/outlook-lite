<?php
/*
 *	This template contains single post & single portfolio next / previous links
 *
 *	@version 1.0
 *	@since outlook-lite 1.0
 */
?>
<?php 
	/*
	 *	Next/Prev on/off
	 *  setting - "outlook_blog_single_post_navi"  @file blog-settings.php
	 *
	 *	@since outlook-lite 1.0
	 */
	$post_navi	=	esc_html( get_theme_mod( 'outlook_blog_single_post_navi', '0' ) );
	if( $post_navi == false ) : ?>
	
		<div class="ol-blog-navigation-area">
			<nav class="ol-blog-navigation">
				<?php previous_post_link('<span class="ol-new-post"><i class="fa fa-long-arrow-left" aria-hidden="true"></i> %link </span>', __( 'Previous', 'outlook-lite' ) ); ?>
				<?php next_post_link( '<span class="ol-old-post"> %link <i class="fa fa-long-arrow-right" aria-hidden="true"></i></span>', __( 'Next', 'outlook-lite' ) ); ?>
			</nav>
		</div>
		
	<?php endif; ?>