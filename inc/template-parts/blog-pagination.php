<?php
/*
 *	This template contains blog pagination
 *	Contains:
 *		@ numeric
 *		@ next/prev
 *
 *	@version 1.0
 *	@since outlook-lite 1.0
 */	
	
	/*
	 *	enable/disable blog navigation
	 *
	 *	@since outlook-lite 1.0
	 */
	 $blog_pagination	=	esc_html( get_theme_mod( 'outlook_blog_pagination_option', 'ol-numeric-navi' ) );
	 if( $blog_pagination != 'ol-disable-navi' ) :
	 
		/*
		 *	Numeric pagination
		 *
		 *	@since outlook-lite 1.0
		 */
		 if( $blog_pagination == 'ol-numeric-navi' ) : ?>
			<!-- Start blog pagination -->
			<div class="ol-blog-pagination-area">
				<nav aria-label="Page" >
					
					<?php echo outlook_numeric_page_navi(); ?>
				
				</nav>
			</div>
			<!-- End blog pagination-->
	<?php endif; ?>


	<?php
		/*
		 *	Numeric pagination
		 *
		 *	@since outlook-lite 1.0
		 */
		 if( $blog_pagination == 'ol-next-prev-navi' ) : ?>										
			<!-- Start next/prev navigation -->
			<div class="ol-blog-navigation-area">
				<nav class="ol-blog-navigation">
					
					<?php previous_posts_link( 
						sprintf( 
							__( '%1s Newer Posts', 'outlook-lite' ), 
							'<i class="fa fa-long-arrow-left" aria-hidden="true"></i>' 
						) ); 
					?>
					
					
					<?php next_posts_link( 
						sprintf( 
							__( 'Older posts %1s', 'outlook-lite' ), 
							'<i class="fa fa-long-arrow-right" aria-hidden="true"></i>' 
						) ); 
					?>
					
				</nav>
			</div>
			<!-- End next/prev navigation -->
	<?php endif; ?>
<?php endif; ?>