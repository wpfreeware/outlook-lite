<?php
/**
 * The default template for displaying gallery content
 *
 * Used for index/archive/search.
 *
 *	@version 1.0
 *	@since outlook-lite 1.0
 */
?>
<?php if ( has_post_format('gallery') ) : ?>

	<!-- Start blog item -->
	<div class="col-md-12">
		<article id="post-<?php the_ID(); ?>" <?php post_class( 'ol-blog-item' ); ?> >
			<header class="ol-blog-item-head">
				
				<div class="ol-blog-item-media">
					<?php the_content();?>
				</div>
				
				<?php
					/*
					 *	on/off category in post meta
					 *
					 *	@since outlook-lite 1.0
					 */
					$meta_cat = esc_html( get_theme_mod( 'outlook_blog_meta_cat', '0' ) );
					
					if( $meta_cat == false ) : ?>
						<div class="ol-blog-item-tag">
							<?php the_category('<span>/</span> '); ?>
						</div>
				<?php endif; ?>
				
				<h2 class="ol-blog-title">
					<a href="<?php esc_url( the_permalink() ); ?>"><?php the_title(); ?></a>
				</h2>
				
				<?php get_template_part( 'post', 'meta' ); ?>
				
			</header>
		
		</article>
	</div>
	<!-- End blog item -->
	
<?php endif; ?>