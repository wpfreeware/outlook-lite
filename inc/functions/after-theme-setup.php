<?php
/*
 *	Contains theme basic setup, registration
 *
 *	@version 1.0
 *	@since outlook-lite 1.0
 */
  
/**
 * Set the content width based on the theme's design and stylesheet.
 *
 * @since outlook-lite 1.0
 */
if ( ! isset( $content_width ) ) {
	$content_width = 1140;
}
if ( ! function_exists( 'outlook_setup' ) ) :
 /**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.
 *
 * To override outlook_setup() in a child theme, add your own outlook_setup to your child theme's
 * functions.php file.
 *
 * @uses add_theme_support() To add support for post thumbnails, title, custom-logo and automatic feed links.
 * @uses register_nav_menus() To add support for navigation menus.
 * @uses add_custom_background() To add support for a custom background.
 * @uses add_editor_style() To style the visual editor.
 * @uses load_theme_textdomain() For translation/localization support.
 * @uses set_post_thumbnail_size() To set a custom post thumbnail size.
 *
 * @since outlook-lite 1.0
 */
function outlook_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 */
	load_theme_textdomain('outlook-lite', get_template_directory() . '/languages');
	
	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );
	
	/*
	 * Custom background color/image support
	 */		
	add_theme_support( 'custom-background', array( 'default-color' => '#ffffff') );
	
	/*
	 *  Custom Header
	 *
	 *	@since outlook-lite 1.0
	 */		
	add_theme_support( 'custom-header', apply_filters( 'outlook_custom_header_args', array(
		'default-image'          => '',
		'default-text-color'     => '',
		'width'                  => 1920,
		'height'                 => 450,
		'flex-height'            => true,
	) ) );	
	
	/*
	 *  Custom logo
	 *
	 *	@since outlook-lite 1.0
	 */		
	add_theme_support( 'custom-logo', array(
		'height'      => 90,
		'width'      => 250,	
		'flex-height' => false,
		'flex-width'  => true,
	) );			
	
	
	// post formats
 	add_theme_support( 'post-formats', array( 'video', 'gallery', 'link', 'quote', 'audio' ) );
	
	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 * & custom image sizes
	 *
	 * See: https://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 640, 418 ); 						// default size
	add_image_size( 'outlook-portfolio-thumb', 1200, 800 ); 	// portfolio-thumb
	add_image_size( 'outlook-testimonial-thumb', 80, 80 ); 		// testimonial-thumb
	
	
	
	/**
	 * Apply theme's stylesheet to the visual editor.
	 *
	 * @uses add_editor_style() Links a stylesheet to visual editor
	 *
	 *	@since outlook-lite 1.0
	 */
	 add_editor_style( 'css/editor-style.css' );
	
	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );
	
	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
	) );
	
	
	/*
	 *	Register menus
	 */
 	register_nav_menu( 'outlook-primary-menu', __( 'Home Primary Menu', 'outlook-lite' ) );				// primary menu
 	register_nav_menu( 'outlook-secondary-menu', __( 'Home Secondary Menu', 'outlook-lite' ) );			// secondary menu
 	register_nav_menu( 'outlook-global-primary-menu', __( 'Global Primary Menu', 'outlook-lite' ) );		// global primary menu
 	register_nav_menu( 'outlook-global-secondary-menu', __( 'Global Secondary Menu', 'outlook-lite' ) );	// global secondary menu
	
}
endif; // outlook_setup
add_action( 'after_setup_theme', 'outlook_setup' );