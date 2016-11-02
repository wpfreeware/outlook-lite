<?php
/*
 *	This file contents custom comments list template callback function
 *
 *	@version 1.0
 *	@since outlook-lite 1.0
 */

function outlook_custom_comments_list( $comment, $args, $depth ) {
    $is_by_author = false;

    if( $comment->comment_author_email == get_the_author_meta('email') ) {
        $is_by_author = true;
    }

   $GLOBALS['comment'] = $comment; ?>
	
	<li <?php if( $is_by_author ) { echo 'class="author-comments"'; }?> >
		<div <?php comment_class('media'); ?> id="comment-<?php comment_ID() ?>">
			
			<div class="media-left">
				<?php echo get_avatar( $comment->comment_author_email, 80 ); ?>
			</div>
			
			<div class="media-body">
				
				<h4 class="author-name"><?php esc_url( comment_author_link() );?></h4>
				<span class="comments-date"> <?php _e( 'Posted on', 'outlook-lite' ); ?> <?php comment_date( get_option( 'date_format') ); ?> </span>
				
				<?php if( $is_by_author == true) : ?>
					<span class="author-tag"><?php _e( 'Author', 'outlook-lite' );?></span>
				<?php endif; ?>
				
				<?php if ($comment->comment_approved == '0') : ?>
				 	<span class="comment-mod"><?php _e('Your comment is awaiting moderation', 'outlook-lite') ?></span>
				<?php endif; ?>
					       
				<?php comment_text() ?>
				<span class="reply-btn">
				   <?php comment_reply_link( array_merge( $args, array( 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?> <i class="fa fa-reply aria-hidden="true""></i>
				</span>
			
			</div>
			
		</div>
	</li>		
	
<?php }