<?php
/*
 *	The comments template
 *
 *	@version 1.0
 *	@since outlook-lite 1.0
 */

// don't load it if you can't comment
if ( post_password_required() ) {
  return;
}

?>

<?php // You can start editing here. ?>

<?php if ( have_comments() ) : ?>
	
	<!--Start comment area-->
	<div id="comments" class="ol-comments-area"> 
	
		<h3>
			<?php 
				comments_number( 
					__( 'No Comments', 'outlook-lite' ), 
					__( '1 Comment', 'outlook-lite' ), 
					_n( '% Comment', '% Comments', 
					get_comments_number(), 'outlook-lite' ) );
			?>
		</h3>
		
		<div class="comments">
		  
			<ul class="commentlist">
			
			<!-- comment link -->
			  <?php
				wp_list_comments( array(
				  'style'             => 'ul',
				  'short_ping'        => true,
				  'avatar_size'       => 80,
				  'callback'          => 'outlook_custom_comments_list',
				  'type'              => 'all',
				  'reply_text'        => __( 'Reply' , 'outlook-lite' ),
				  'page'              => '',
				  'per_page'          => '',
				  'reverse_top_level' => null,
				  'reverse_children'  => ''
				) );
			  ?>			
			
			</ul>
		  
			<!--numeric comment pagination-->
			<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
				
			  <!-- start Comments navigation -->
			  	<nav class="pagination comments-pagination" >	
					<?php paginate_comments_links(); ?>
			  	</nav>
			  
			<?php endif; ?>		
		  
		</div>
		
		<?php if ( ! comments_open() ) : ?>
			<p class="ol-no-comments"><?php _e( 'Comments are closed' , 'outlook-lite' ); ?></p>
		<?php endif; ?>		
				
	</div>
	<!--End comment area-->

  <?php endif; // if ( have_comments() ) ?>
  
  
<?php comment_form(); ?>