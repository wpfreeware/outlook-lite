<?php
/*
 *	This template contains portfolio related posts based on category
 *
 *	@version 1.0
 *	@since outlook-lite 1.0
 */
?>
<div class="ol-portfolio-related-project">
 
	<?php
		// get the custom post type's taxonomy terms
		$portfolio_taxterms = wp_get_object_terms( $post->ID, 'jetpack-portfolio-type', array('fields' => 'ids') );
		// arguments
		$portfolio_args = array(
		'post_type' 		=> 'jetpack-portfolio',
		'post_status' 		=> 'publish',
		'posts_per_page' 	=> -1, // you may edit this number
		'orderby' 			=> 'rand',
		'tax_query' 		=> array(
		    array(
		        'taxonomy' 		=> 'jetpack-portfolio-type',
		        'field' 		=> 'id',
		        'terms' 		=> $portfolio_taxterms
		    )
		),
		'post__not_in' 		=> array ($post->ID),
		);
		$portfolio_related_items = new WP_Query( $portfolio_args );
		
		// loop over query
		if ( $portfolio_related_items->have_posts() ) :
		
			echo '<h3>'. __( 'Related Projects', 'outlook-lite' ) .'</h3>
				  <ul class="ol-related-project-slide row">';
				 
			while ( $portfolio_related_items->have_posts() ) : $portfolio_related_items->the_post(); ?>
	
				<li class="col-md-4">
					<div class="ol-work-item">
						
						<?php if( has_post_thumbnail() ): ?>
				    		<div class="ol-work-item-related-thumbonil">
					    		<figure>
					    			<?php the_post_thumbnail( 'outlook-portfolio-thumb', array( 'alt' => esc_attr( get_the_title() ) ) ); ?>
					    			<figcaption class="ol-work-item-link-area">
					    				<a href="<?php esc_url( the_permalink() ); ?>" class="ol-work-related-link" > <i class="fa fa-link" aria-hidden="true"></i></a>
					    			</figcaption>
					    		</figure>
				    		</div>
			    		<?php endif; ?>
			    		
		    		</div>
				</li>
							    
		<?php
			endwhile;
			
			echo '</ul>';
			
		endif;
		// Reset Post Data
		wp_reset_postdata();
	?>
</div>