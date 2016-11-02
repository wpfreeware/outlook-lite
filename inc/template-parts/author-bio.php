<?php
/*
 *	This template contains single post author bio template
 *
 *	@version 1.0
 *	@since outlook-lite 1.0
 */
?>
<?php 
	/*
	 *	Author bio on/off
	 *
	 *	@since outlook-lite 1.0
	 */
	$author_bio	=	esc_html( get_theme_mod( 'outlook_blog_single_author_bio', '0' ) );
	if( $author_bio == false ) : ?>
	
		<div class="ol-author-bio">
		  	<div class="media">
		        <div class="media-left">
		            <?php echo get_avatar( get_the_author_meta( 'ID' ), 120 ); ?>
		        </div>
		        <div class="media-body">
		           <h4 class="ol-author-name"><?php the_author(); ?></h4>
		           <p><?php the_author_meta('description');?></p>
		           
		        </div>
		    </div>
		</div>
		
<?php endif; ?>		