<?php
/*
 *  Add various theme necessary functions.
 *
 *	@version 1.0
 *	@since outlook-lite 1.0
 */

/*
 *	Add classes to author avatar img tag
 *
 *	@since outlook-lite 1.0
 */
function add_gravatar_class($class) {
    $class = str_replace("class='avatar", "class='avatar media-object ol-author-img", $class);
    return $class;
}
add_filter('get_avatar','add_gravatar_class');

 
/**
 *  set custom post exceprt length
 *
 *  @since outlook-lite 1.0
 */
 function outlook_custom_post_excerpt(){
	global $post;
	$excerpt = get_the_content();
	$excerpt = preg_replace(" (\[.*?\])",'',$excerpt);
	$excerpt = strip_shortcodes($excerpt);
	$excerpt = strip_tags($excerpt);
	$excerpt = substr($excerpt, 0, 250);	// set the length in character
	$excerpt = substr($excerpt, 0, strripos($excerpt, " "));
	$excerpt = trim(preg_replace( '/\s+/', ' ', $excerpt));
	return $excerpt;
}

/**
 *  Numeric post pagination
 *
 *  @since outlook-lite 1.0
 */

function outlook_numeric_page_navi() {
    global $wp_query;
    $big   = 999999999; // need an unlikely integer
    $pages = paginate_links( array(
            'base' 			=> str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
            'format' 		=> '?paged=%#%',
            'current' 		=> max( 1, get_query_var('paged') ),
            'total' 		=> $wp_query->max_num_pages,
            'prev_next' 	=> false,
            'type'  		=> 'array',
			'prev_text'    	=> '<i class="fa fa-chevron-left" aria-hidden="true"></i>',
			'next_text'    	=> '<i class="fa fa-chevron-right" aria-hidden="true"></i>',
			'end_size'     	=> 3,
			'mid_size'     	=> 3,			
        ) );
        
        if( is_array( $pages ) ) {
            $paged = ( get_query_var('paged') == 0 ) ? 1 : get_query_var('paged');
            echo '<ul class="pagination ol-blog-pagination">';
            foreach ( $pages as $page ) {
                    echo '<li> '. $page .' </li>';
            }
           echo '</ul>';
        }
}


/**
 *  Add class attribute with class 
 *	"ol-old-post" & "ol-new-post" to Next/Prev posts link
 *
 *	filters:
 *		next_posts_link_attributes			@ older posts
 *		previous_posts_link_attributes		@ newer posts
 *
 *  @since outlook-lite 1.0
 */

add_filter('next_posts_link_attributes', 'outlook_next_posts_link_class');
add_filter('previous_posts_link_attributes', 'outlook_previous_posts_link_class');

function outlook_next_posts_link_class() {
    return 'class="ol-old-post"';
}

function outlook_previous_posts_link_class() {
    return 'class="ol-new-post"';
}

/*
 *	Push header 30px to bottom 
 *	if toolbar is showing
 *
 *	@since outlook-lite 1.0
 */
if ( is_admin_bar_showing() ) {
	
	function outlook_push_bottom_header_area(){
	    ?>
		
		<style type="text/css">
			.navbar{
				margin-top: 30px;
			}
		</style>
		
		<?php
	}
	add_action( 'wp_head', 'outlook_push_bottom_header_area' );
	
}

 /*
  *  Footer top column style
  *	
  *	 @since outlook-lite 1.0
  */
function outlook_footer_top_column(){
	/*
	 *	Set variable for footer top column
	 *
	 *	@since outlook-lite 1.0
	 */
	$footer_top_style	=	esc_html( get_theme_mod( 'outlook_footer_top_option', 'four-column' ) );
	
	if( $footer_top_style 	  == 'four-column' ) :
		$footer_top_column	=	'col-md-3 col-sm-6 col-xs-12';
		
	elseif( $footer_top_style == 'three-column' ) :
		$footer_top_column	=	'col-md-4 col-sm-4 col-xs-12';
		
	elseif( $footer_top_style == 'two-column' ) :
		$footer_top_column	=	'col-md-6 col-sm-6 col-xs-12';
		
	endif;
	
	return 	$footer_top_column;
} 

/*
 *	Blog content column layouts
 *
 *	@since outlook-lite 1.0
 */
function outlook_blog_content_column(){

	 $blog_layout	=	esc_html( get_theme_mod( 'outlook_blog_layout_option', 'ol-right-sidebar' ) );
	 
	 // right sidebar
	 if( $blog_layout 	  == 'ol-right-sidebar' ) :
	 	
	 	$blog_content_column	=	'col-md-8';
	 
	 // left sidebar
	 elseif( $blog_layout == 'ol-left-sidebar' ) :
	 
	 	$blog_content_column	=	'col-md-8 col-md-push-4';
	 
	 // no sidebar	
	 elseif( $blog_layout == 'ol-no-sidebar' ) :
	 
	 	$blog_content_column	=	'col-md-8 col-md-offset-2';
	 
	 // fullwidth	
	 elseif( $blog_layout == 'ol-fullwidth' ) :
	 
	 	$blog_content_column	=	'col-md-12';									 
	 	
	 endif;
	 
	return $blog_content_column;	
}

/*
 *	Blog sidebar column layouts
 *
 *	@since outlook-lite 1.0
 */
function outlook_blog_sidebar_column(){

	 $blog_layout	=	esc_html( get_theme_mod( 'outlook_blog_layout_option', 'ol-right-sidebar' ) );
	 
	 // right sidebar
	 if( $blog_layout 	  == 'ol-right-sidebar' ) :
	 	
	 	$blog_sidebar_column	=	'col-md-4';
	 
	 // left sidebar
	 elseif( $blog_layout == 'ol-left-sidebar' ) :
	 
	 	$blog_sidebar_column	=	'col-md-4 col-md-pull-8';
	 	
	 endif;
	 
	return $blog_sidebar_column;	
}

								 
/*
 *	Shop content column layouts
 *	called:	woo-setup.php
 *
 *	@since outlook-lite
 */
 
 // First check if WooCommerce installed & activated 
 if ( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) {
	 function outlook_shop_content_column(){
		 
		 $shop_layouts	=	esc_html( get_theme_mod( 'outlook_woocommerce_layout_option', 'ol-right-sidebar' ) );
		 
		 if( $shop_layouts == 'ol-right-sidebar' ) :
		 
		 	$shop_content_column	=	'col-md-9';
		 
		 elseif( $shop_layouts == 'ol-left-sidebar' ) :
		 	
		 	$shop_content_column	=	'col-md-9  col-md-push-3';
		 
		 elseif( $shop_layouts 	==	'ol-no-sidebar' ) :
		 	
		 	$shop_content_column	=	'col-md-10 col-md-offset-1';
		 
		 elseif( $shop_layouts == 'ol-fullwidth' ) :
		 	
		 	$shop_content_column	=	'col-md-12';
		 
		 endif;
		 
		 return $shop_content_column;
	 }
 }
 
 /*
  *	Shop sidebar column layouts
  *	called: sidebar-shop.php
  *	
  *	@since outlook-lite
  */
 
 // First check if WooCommerce installed & activated 
 if ( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) { 
	 function outlook_shop_sidebar_column(){
		 
		 $shop_layouts	=	esc_html( get_theme_mod( 'outlook_woocommerce_layout_option', 'ol-right-sidebar' ) );
		 
		 if( $shop_layouts == 'ol-right-sidebar' ) :
		 	
		 	$shop_sidebar_column	=	'col-md-3';
		 
		 elseif( $shop_layouts == 'ol-left-sidebar' ) :
		 	
		 	$shop_sidebar_column	=	'col-md-3 col-md-pull-9';
		 
		 endif;
		 
		 return $shop_sidebar_column;
		 
	 }
 }
 
 
 /*
 *	bbPress content column layouts
 *
 *	@since outlook-lite 1.0
 */
 
// First check if bbPress activated 
if ( function_exists( 'is_bbpress' ) ) {
	function outlook_bbpress_content_column(){
	
		 $bbpress_layout	=	esc_html( get_theme_mod( 'outlook_bbpress_layout_option', 'ol-bbp-right-sidebar' ) );
		 
		 // right sidebar
		 if( $bbpress_layout 	  == 'ol-bbp-right-sidebar' ) :
		 	
		 	$bbpress_content_column	 =	'col-md-8';
		 
		 // left sidebar
		 elseif( $bbpress_layout == 'ol-bbp-left-sidebar' ) :
		 
		 	$bbpress_content_column	=	'col-md-8 col-md-push-4';
		 
		 // no sidebar	
		 elseif( $bbpress_layout == 'ol-bbp-no-sidebar' ) :
		 
		 	$bbpress_content_column	=	'col-md-8 col-md-offset-2';
		 
		 // fullwidth	
		 elseif( $bbpress_layout == 'ol-bbp-fullwidth' ) :
		 
		 	$bbpress_content_column	=	'col-md-12';									 
		 	
		 endif;
		 
		return $bbpress_content_column;	
	}
}

/*
 *	bbPress sidebar column layouts
 *
 *	@since outlook-lite 1.0
 */

// First check if bbPress activated 
if ( function_exists( 'is_bbpress' ) ) { 
	function outlook_bbpress_sidebar_column(){
	
		 $bbpress_layout	=	esc_html( get_theme_mod( 'outlook_bbpress_layout_option', 'ol-bbp-right-sidebar' ) );
		 
		 // right sidebar
		 if( $bbpress_layout 	  == 'ol-bbp-right-sidebar' ) :
		 	
		 	$bbpress_sidebar_column	=	'col-md-4';
		 
		 // left sidebar
		 elseif( $bbpress_layout == 'ol-bbp-left-sidebar' ) :
		 
		 	$bbpress_sidebar_column	=	'col-md-4 col-md-pull-8';
		 	
		 endif;
		 
		return $bbpress_sidebar_column;	
	}
}

/**
 * 	Display upgrade notice on customizer page
 *
 *	@since outlook-lite 1.0
 */
function outlook_upsell_notice() {
	 // Enqueue the script
	 wp_enqueue_script(
		 'outlook-customizer-upsell',
		 get_template_directory_uri() . '/js/upsell.js',
		 array(), '1.0.0',
		 true
	 );
	 // Localize the script
	 wp_localize_script(
		 'outlook-customizer-upsell',
		 'outlookL10n',
		 array(
			 'outlookURL'	=> esc_url( 'https://www.wpfreeware.com' ),
			 'outlookLabel'	=> __( 'Upgrade Pro', 'outlook-lite' ),
		 )
	 );
}
add_action( 'customize_controls_enqueue_scripts', 'outlook_upsell_notice' );