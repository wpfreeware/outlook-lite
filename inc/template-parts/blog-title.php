<?php
/*
 *	Displays output for title section.
 *	This content will appear blog, archive, search etc pages.
 *	
 *	@version 1.0
 *	@since outlook-lite 1.0
 */
 ?>
<?php
	/*
	 *	If blog title section enabled then
	 *	go ahead display the title section
	 *
	 *	@since outlook-lite 1.0
	 */
	$blog_title_section	=	esc_html( get_theme_mod( 'outlook_blog_title_section', '1' ) );
	
	if( $blog_title_section == true ) :
?>

	<div class="ol-wrapper">
		<section id="ol-blog-sub-header">
			<div class="container">
				<div class="ol-blog-sub-header-area">
					
					<?php $blog_title_text	=	esc_html( get_theme_mod( 'outlook_blog_title_text', '' ) ); ?>	
						
					<?php if ( is_category() ) : ?>
						<!-- category archive -->
						<div class="ol-subheader-title">
							<h1><?php single_cat_title( __( 'Archive for : ', 'outlook-lite' ), true ); ?></h1>
						</div>
						
					<?php elseif( is_tag() ) : ?>
						<!-- tag archive -->
						<div class="ol-subheader-title">
							<h1><?php single_tag_title( __( 'Archive for : ', 'outlook-lite' ), true ); ?></h1>
						</div>
						
					<?php elseif( is_day() ) : ?>
						<!-- daily archive -->
						<div class="ol-subheader-title">
							<h1><?php _e( 'Archive for : ', 'outlook-lite' ); the_time( get_option( 'date_format' ) ); ?> </h1>
						</div>
						
					<?php elseif( is_month() ) : ?>	
						<!-- monthly archive -->
						<div class="ol-subheader-title">
							<h1><?php _e( 'Archive for :  ', 'outlook-lite' ); the_time( get_option( 'date_format' ) ); ?></h1>
						</div>
						
					<?php elseif( is_year() ) : ?>
						<!-- yearly archive -->
						<div class="ol-subheader-title">
							<h1><?php _e( 'Archive for :  ', 'outlook-lite' ); echo date('Y'); ?></h1>
						</div>
						
					<?php elseif( is_search() ) : ?>
						<!-- search archive -->
						<div class="ol-subheader-title">
							<h1><?php printf( __( 'Results for : <span> %s</span>', 'outlook-lite' ), get_search_query() ); ?></h1>
						</div>
						
					<?php elseif( is_author() ) : ?>
						<!-- author archive -->
						<div class="ol-subheader-title">
							<h1><?php _e('Posts by : ', 'outlook-lite'); the_author(); ?></h1>
						</div>
						
					<?php elseif( isset( $_GET['paged'] ) && !empty( $_GET['paged'] ) ) : ?>
						<!-- paged archive -->
						<div class="ol-subheader-title">
							<h1><?php _e('Archives : ', 'outlook-lite'); ?></h1>
						</div>
						
					<?php else : ?>
						<!-- display default title if it's not archive pages -->
						<?php if($blog_title_text != ''): ?>
							<div class="ol-subheader-title">
								<h1><?php echo $blog_title_text; ?></h1>
							</div>
						<?php endif; ?>						
						
					<?php endif; ?>
					
					
					<?php if ( function_exists('yoast_breadcrumb') ) { ?>
						<!-- start breadcrumb -->
						<div class="ol-breadcrumb-area">
							<?php yoast_breadcrumb('<p class="ol-breadcrumb">','</p>'); ?>
						</div>
						<!-- End breadcrumb -->
					<?php } ?>			
					
				</div>
			</div>
		</section>
	</div>

<?php endif; ?>