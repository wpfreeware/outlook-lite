<?php
/**
 * Jetpack Compatibility File.
 *
 * @link https://jetpack.com/
 *
 *	@version 1.0
 *	@since outlook-lite 1.0
 */

/**
 * Jetpack setup function.
 *
 * See: https://jetpack.com/support/infinite-scroll/
 * See: https://jetpack.com/support/responsive-videos/
 */
function outlook_jetpack_setup() {
	// Add theme support for Infinite Scroll.
	add_theme_support( 'infinite-scroll', array(
		'container' 		=> 'jetpack-infinite-wrap',
		'render'    		=> 'outlook_infinite_scroll_render',
		'footer_widgets' 	=> 'outlook-footer-sidebar',
		'footer'    		=> false,
		'wrapper'        	=> false,
	) );

	// Add theme support for Responsive Videos.
	add_theme_support( 'jetpack-responsive-videos' );
}
add_action( 'after_setup_theme', 'outlook_jetpack_setup' );

/**
 * Custom render function for Infinite Scroll.
 */
function outlook_infinite_scroll_render() {
	while ( have_posts() ) {
		the_post();
			get_template_part( 'content', get_post_format() );
	}
}

/**
 * Infinite scroll button custom text for click event.
 */
if( class_exists( 'Jetpack' ) && Jetpack::is_module_active( 'infinite-scroll' ) ) :
	function outlook_infinite_scroll_custom_text() {
		 
		if ( is_home() || is_archive() ) {
	
			echo '
			
			    <script type="text/javascript">
				    //<![CDATA[
				    infiniteScroll.settings.text = "'. __( 'Load More', 'outlook-lite' ) .'";
				    //]]>
			    </script>
			    
			    ';		
			
		}
	}
	add_action( 'wp_footer', 'outlook_infinite_scroll_custom_text' );
endif;