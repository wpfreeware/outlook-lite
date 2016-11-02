<?php
/*
 *	This template contains post single related posts
 *
 *	@version 1.0
 *	@since outlook-lite 1.0
 */
?>
<?php 
	/*
	 *	Related Posts on/off
	 *  setting - "outlook_blog_single_related_posts"  @file blog-settings.php
	 *
	 *	@since outlook-lite 1.0
	 */
	$related_posts	=	esc_html( get_theme_mod( 'outlook_blog_single_related_posts', '0' ) );
	if( $related_posts == false ) : ?>
	
		<div class="ol-related-post-area">
				
			<?php
				/*
				 *	Related posts by category
				 *
				 *	@since outlook-lite 1.0
				 */
				$categories = get_the_category( $post->ID );
				if ( $categories ) {
			
					$category_ids = array();
					foreach( $categories as $individual_category ) {
						$category_ids[] = $individual_category->term_id;
					}
				
					$args = array(
						'category__in' 			=> $category_ids,
						'post__not_in' 			=> array( $post->ID ),
						'posts_per_page'		=> 2, 
						'ignore_sticky_posts'	=> 1  
					);
				
					$related_posts_query = new WP_Query( $args );
					if( $related_posts_query->have_posts() ) {
						
						echo '<h3>'. __('You Might Also Like', 'outlook-lite') .'</h3>';
								
						while( $related_posts_query->have_posts() ) {		
							$related_posts_query->the_post(); ?>
								<div class="col-md-6">
									<article class="ol-blog-item">
										<header class="ol-blog-item-head">
											<div class="ol-blog-item-img">
												<?php the_post_thumbnail( 'post-thumbnail', array( 'alt' => esc_attr( get_the_title() ) ) ); ?>
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
												
												<li> <?php edit_post_link( __(' Edit','outlook-lite'), '<i class="fa fa-pencil" aria-hidden="true">', '</i>' ); ?></li>
												
											</ul>
											
											
										</header>
										
										<div class="ol-blog-item-content">
											<?php echo outlook_custom_post_excerpt(); ?>
										</div>
										
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
										
									</article>
								</div>	
			<?php		}
					}
				}
				wp_reset_query(); ?>
			
		</div>

<?php endif; ?>