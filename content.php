<?php
/**
 * The default template for displaying standard content
 *
 * Used for index/archive/search.
 *
 *	@version 1.0
 *	@since outlook-lite 1.0
 */
?>

<!-- Start blog item -->
<div class="col-md-12">
	<article id="post-<?php the_ID(); ?>" <?php post_class( 'ol-blog-item' ); ?> >
		<header class="ol-blog-item-head">
			
			<?php if( has_post_thumbnail() ): ?>
				<div class="ol-blog-item-img">
					<a href="<?php esc_url( the_permalink() ); ?>">
						<?php the_post_thumbnail( 'post-thumbnail', array( 'alt' => esc_attr( get_the_title() ) ) ); ?>
					</a>
				</div>
			<?php endif; ?>
			
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
		
		<div class="ol-blog-item-content">
			
			<?php
				/*
				 *	excerpt or full content display
				 *
				 *	@since outlook-lite 1.0
				 */
				$excerpt_or_full_content = esc_html( get_theme_mod( 'outlook_blog_excerpt_full', 'ol-excerpt' ) );
				
				if( $excerpt_or_full_content == 'ol-excerpt' ) :
					
					the_excerpt();
				else :
					the_content();
				
				endif;
			?>
			
		</div>
		
		<?php if( $excerpt_or_full_content == 'ol-excerpt' ) : ?>
		
			<footer class="ol-blog-item-bottom">
		
				<?php if ( comments_open() ) :  ?>
					<i class="fa fa-comments-o" aria-hidden="true"></i> 
						<?php 
							comments_popup_link( 
								__('0', 'outlook-lite'), 
								__('1', 'outlook-lite'), 
								__('%', 'outlook-lite') 
							); 
						?>
				<?php endif; ?>			
	
				<a href="<?php esc_url( the_permalink() ); ?>" class="ol-read-more">
					<?php _e( 'Read More', 'outlook-lite' ); ?> <i class="fa fa-angle-right" aria-hidden="true"></i>
				</a>
	
			</footer>
			
		<?php endif; ?>
		
	</article>
</div>
<!-- End blog item -->