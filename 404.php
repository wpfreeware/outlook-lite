<?php
/**
 * 404 template file
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 *	@version 1.0
 *	@since outlook-lite 1.0
 */

get_header(); ?>

<!-- Start Header -->
<?php get_template_part( 'inc/template-parts/headers/header', 'styles' );?>
<!-- End Header -->	
	
	<!-- Start main content -->
	<div class="ol-main-content">
		<main role="main">
			
			<!-- Start wrapper -->
			<div class="ol-wrapper">
				<section id="ol-page">
					<div class="container">
						<div class="ol-page-area">
							<div class="ol-error-page">
					            
					            <?php
						            /*
							         *	Title
						             */
						            $fzf_title = esc_html( get_theme_mod( 'outlook_404_title_text', '' ) );
						            if ( $fzf_title != '' ) :
						            	echo '<h2> '. $fzf_title .' </h2>';
						            endif;
					            ?>
					            
					            <?php
						            /*
							         *	Sub Title
						             */
						            $fzf_subtitle = esc_html( get_theme_mod( 'outlook_404_subtitle_text', '' ) );
						            if ( $fzf_subtitle != '' ) :
						            	echo '<span> '. $fzf_subtitle .' </span>';
						            endif;
					            ?>					            
					            
					            <?php
						            /*
							         *	Short description
						             */
						            $fzf_short_description = esc_textarea( get_theme_mod( 'outlook_404_short_desc_text', '' ) );
						            if ( $fzf_short_description != '' ) :
						            	echo '<p> '. $fzf_short_description .' </p>';
						            endif;
					            ?>					            
					            
					            
					            <?php
						            /*
							         *	Button
						             */
						            $fzf_button_text = esc_html( get_theme_mod( 'outlook_404_btn_text', '' ) );
						            $fzf_button_url = esc_url( get_theme_mod( 'outlook_404_btn_url', '' ) );
						            
						            if ( ( $fzf_button_text != '' ) && ( $fzf_button_url != '' ) ) :
						            	echo '<a href="'. $fzf_button_url .'" class="ol-button ol-learn-more"> ' . $fzf_button_text . ' </a>';
						            endif;
					            ?>
					            
					            <?php get_search_form(); ?>
					            
							</div>
						</div>
					</div>
				</section>
			</div>
			<!-- End wrapper -->
			<!-- End Shop archive -->
			
<!-- Start footer top/bottom -->
<?php get_template_part( 'inc/template-parts/footer', 'top-bottom' ); ?>
<!-- End footer top/bottom -->			
			
<?php get_footer(); ?>