<?php
/**
 * The default template for displaying link content
 *
 * Used for index/archive/search.
 *
 *	@version 1.0
 *	@since outlook-lite 1.0
 */
?>
<?php	if ( has_post_format( 'link' ) ) :	?>
	<!-- Start blog item -->
	<div class="col-md-12">
		<article id="post-<?php the_ID(); ?>" <?php post_class( 'ol-blog-item' ); ?> >
			
			<header class="ol-blog-item-head">
				<div class="ol-blog-item-link-post">
					<a href="<?php echo get_the_content(); ?>" target="_blank">
	                   <?php the_title(); ?>
	                   <i class="fa fa-link" aria-hidden="true"></i>
	               	</a>
				</div>
			</header>
		
		</article>
	</div>
	<!-- End blog item -->
<?php endif; ?>