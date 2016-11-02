<?php
/**
 * The default template for displaying post meta
 *
 * Used for index/archive/search.
 *
 *	@version 1.0
 *	@since outlook-lite 1.0
 */
?>
<ul class="ol-blog-meta">
	
	<?php
		/*
		 *	on/off author name in post meta
		 *
		 *	@since outlook-lite 1.0
		 */
		$meta_author = esc_html( get_theme_mod( 'outlook_blog_meta_author', '0' ) );
		
		if( $meta_author == false ) : ?>
			<li> <i class="fa fa-user" aria-hidden="true"></i> 
				<a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>"> <?php the_author(); ?> </a>
			</li>
	<?php endif; ?>


	<?php
		/*
		 *	on/off date in post meta
		 *
		 *	@since outlook-lite 1.0
		 */
		$meta_date = esc_html( get_theme_mod( 'outlook_blog_meta_date', '0' ) );
		
		if( $meta_date == false ) : ?>
			<li> <i class="fa fa-calendar" aria-hidden="true"></i> <span><?php the_time( get_option( 'date_format' ) ); ?></span></li>
	<?php endif; ?>
	
	<?php 
		/*
		 *	on/off comments count in single post meta
		 *
		 *	@since outlook-lite 1.0
		 */
		$comments_count = esc_html( get_theme_mod( 'outlook_blog_single_comments_count', '0' ) );		
		if( is_singular( 'post' ) && ( $comments_count == false ) ): ?>
		<li> 
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
		</li>
	<?php endif; ?>	
	
	<?php edit_post_link( __(' Edit', 'outlook-lite' ), '<li><i class="fa fa-pencil" aria-hidden="true"></i>', '</li>' ); ?>
	
</ul>