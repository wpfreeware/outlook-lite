<?php
/*
 *	enqueue theme required styles & scripts
 *	
 *	@version 1.0
 *	@since outlook-lite 1.0
 */
function outlook_scripts() {
	
	 /*
	  *	WP_Theme object
	  *
	  *	@since outlook-lite 1.0
	  */
	 $outlook_pro = wp_get_theme( );
	 
	/*-----------------------------*
	 *	css files
	 *-----------------------------*/

    // font-awesome
    $font_awesome_css	=	esc_html( get_theme_mod( 'outlook_font_awesome_css', '1' ) );
    if( $font_awesome_css ) :
		wp_enqueue_style( 'outlook-font-awesome', get_template_directory_uri() . '/css/font-awesome.min.css', array(), '4.6.3', 'all' );
	endif;
	
	// bootstrap style
    wp_enqueue_style( 'outlook-bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '3.3.6', 'all' );   
	
	if( is_page_template( 'home-page.php' ) ) :
		// flexslider styles
	    wp_enqueue_style( 'outlook-flexslider', get_template_directory_uri() . '/css/flexslider.css', array(), '2.6.1', 'all' );
    endif;
    
	// slick slider styles
    wp_enqueue_style( 'outlook-slickslider', get_template_directory_uri() . '/css/slick.css', array(), $outlook_pro->version, 'all' );
    
	/*
	 *	Shop styles
	 *	Check first if WooCommerce is activated
	 *
	 *	@since outlook-lite 1.0
	 */
	if ( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) :	
    	wp_enqueue_style( 'outlook-woo', get_template_directory_uri() . '/css/shop.css', array(), $outlook_pro->version, 'all' );
    endif; 
	// Merriweather font
    wp_enqueue_style( 'outlook-merriweather-font', "//fonts.googleapis.com/css?family=Merriweather:300,300i,400,400i,700", 'all' );
    // Raleway font
    wp_enqueue_style( 'outlook-raleway-font', "//fonts.googleapis.com/css?family=Raleway", 'all' );
	// outlook main stylesheet
    wp_enqueue_style( 'primary-style', get_template_directory_uri() . '/style.css', false, $outlook_pro->version, 'all' );
    
    // rtl css
    $rtl = esc_html( get_theme_mod( 'outlook_rtl_option', '0' ) );
    if( $rtl == true ) :
    	wp_enqueue_style( 'outlook-rtl', get_template_directory_uri() . '/css/rtl.css', false, $outlook_pro->version, 'all' );
    endif;   
    

	/*----------------------------*
	 *	jQuery files
	 *----------------------------*/
	 
	// comment reply
   	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' );
	// bootstrap js
	wp_enqueue_script( 'outlook-bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', array( 'jquery' ), '3.3.6', true );	
	
	// front-page condition
	if( is_page_template( 'home-page.php' ) ) :
		/*
		 *	flexslider js
		 */
		wp_enqueue_script( 'outlook-flexslider-js', get_template_directory_uri() . '/js/jquery.flexslider.js', array( 'jquery' ), '2.6.1', false );		
	endif;
	// end front-page condition
	
	// slick slider js
	wp_enqueue_script( 'outlook-slickslider-js', get_template_directory_uri() . '/js/slick.min.js', array( 'jquery' ), '1.6.0', true );
	// retina js
	wp_enqueue_script( 'outlook-retina-js', get_template_directory_uri() . '/js/retina.min.js', array(), '2.1.0', true );	
	// custom js
	wp_enqueue_script( 'outlook-custom-js', get_template_directory_uri() . '/js/custom.js', false, $outlook_pro->version , true );
	
		
	/*
	 *	if search icon disabled then 
	 *	go ahead & disable search overlay js call
	 */
	$search_icon	=	esc_html( get_theme_mod( 'outlook_header_search', '0' ) );
	if( $search_icon == false ) :
		wp_enqueue_script( 'outlook-search-overlay-call', get_template_directory_uri() . '/js/plugins-call/overlay-search.js', false, null, true );
	endif;
		
	/*
	 *	if off-canvas disabled then 
	 *	go ahead & disable off-canvas js call
	 */
	$header_off_canvas	=	esc_html( get_theme_mod( 'outlook_header_off_canvas', '0' ) );
	if( $header_off_canvas == false ) :		
		wp_enqueue_script( 'outlook-off-canvas-call', get_template_directory_uri() . '/js/plugins-call/off-canvas.js', false, null, true );
	endif;	
	
	// start front-page condition	
	if( is_page_template( 'home-page.php' ) ) :
		wp_enqueue_script( 'outlook-portfolio-call', get_template_directory_uri() . '/js/plugins-call/portfolio.js', false, null, true );	
	endif;
	// end front-page condition	

	// html5shiv & respond - IE Fallbacks
	wp_enqueue_script( 'outlook-html5shiv', get_template_directory_uri(). '/js/html5shiv.js', false, '3.7.3', false);
	wp_script_add_data( 'outlook-html5shiv', 'conditional', 'lt IE 9' );
	wp_enqueue_script( 'outlook-respond', get_template_directory_uri(). '/js/respond.js', false, null, false);
	wp_script_add_data( 'outlook-respond', 'conditional', 'lt IE 9' );

}
add_action( 'wp_enqueue_scripts', 'outlook_scripts' );