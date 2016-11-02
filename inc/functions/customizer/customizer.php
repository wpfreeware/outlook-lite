<?php
/*
 *	This file contains theme customizer settings.
 *	All these setting options created using kirki 
 * 	@link https://github.com/aristath/kirki
 *
 *	@version 1.0
 *	@since outlook-lite 1.0
 */	

/*
 *	Add Kirki helper class
 *	@link https://github.com/aristath/kirki-helpers
 *
 *	@since outlook-lite 1.0
 */
 require_once( get_template_directory() . '/inc/functions/customizer/outlook-kirki.php' );

/*  
 *	Font-awesome icon classes for customizer
 *
 *	@since outlook-lite 1.0
 */ 
require_once( get_template_directory() . '/inc/functions/customizer/font-awesome-icons.php' ); 

/*
 *	Register customizer options
 *
 *	@since outlook-lite 1.0
 */
function outlook_customizer_register( $wp_customize ) {

	/*
	 * set paths
	 *
	 * @since outlook-lite 1.0
	 */
	$customizer_path = '/inc/functions/customizer';
	
	/*  
	 *
	 *	body background color 
	 *	set to postMessage by default
	 *
	 *	@since outlook-lite 1.0
	 */	
	$wp_customize->get_setting( 'background_color' )->transport = 'postMessage';	
	
	/*  
	 *
	 *	Customizer configuration setting.
	 *	Used globally for all fields.
	 *
	 *	options type - theme-mod
	 *
	 *	@since outlook-lite 1.0
	 */
	require_once( get_template_directory() . $customizer_path . '/config.php' );

	/*  
	 *
	 *	Theme Info - Sections, fields
	 *
	 *	@since outlook-lite 1.0
	 */
	require_once( get_template_directory() . $customizer_path . '/theme-info.php' );

	/*  
	 *
	 *	General Settings - Sections, fields
	 *
	 *	@since outlook-lite 1.0
	 */
	require_once( get_template_directory() . $customizer_path . '/general-settings.php' );

	/*  
	 *
	 *	Header - Sections, fields
	 *
	 *	@since outlook-lite 1.0
	 */
	require_once( get_template_directory() . $customizer_path . '/header.php' );
	
	/*  
	 *
	 *	Front page - panel, sections & fields.
	 *
	 *	@since outlook-lite 1.0
	 */
	require_once( get_template_directory() . $customizer_path . '/front-page.php' );
	
	/*  
	 *
	 *	Blog page - sections & fields.
	 *
	 *	@since outlook-lite 1.0
	 */
	require_once( get_template_directory() . $customizer_path . '/blog.php' );
	
	/*  
	 *
	 *	Portfolio - sections & fields.
	 *
	 *	@since outlook-lite 1.0
	 */
	require_once( get_template_directory() . $customizer_path . '/portfolio.php' );	
	
	/*  
	 *
	 *	WooCommerce - sections & fields.
	 *
	 *	@since outlook-lite 1.0
	 */
	require_once( get_template_directory() . $customizer_path . '/woocommerce.php' );
	
	/*  
	 *
	 *	bbPress Sections, fields
	 *
	 *	@since outlook-lite 1.0
	 */	 
	 require_once( get_template_directory() . $customizer_path . '/bbpress.php' );
	 	
	
	/*  
	 *
	 *	Footer - Sections, fields
	 *
	 *	@since outlook-lite 1.0
	 */
	require_once( get_template_directory() . $customizer_path . '/footer.php' );
	
	/*  
	 *
	 *	404 - Sections, fields
	 *
	 *	@since outlook-lite 1.0
	 */
	require_once( get_template_directory() . $customizer_path . '/404.php' );	
	
	/*  
	 *
	 *	Custom Css - Sections, fields
	 *
	 *	@since outlook-lite 1.0
	 */
	require_once( get_template_directory() . $customizer_path . '/custom-css.php' );													
	 		
   
}
add_action( 'customize_register', 'outlook_customizer_register' );

/*
 *	Text field validation for URL field for repeater field group 
 *	
 *	@since outlook-lite 1.0
 */
function outlook_sanitize_customizer( $value ) {

    if ( !is_array( $value ) ) {
        $value = array();
    }
	
	// featured slider
    foreach ( $value['outlook_slide_option'] as $key => $subvalue ) {
		
		// slide url
        if ( isset( $value['outlook_slide_option'][ $key ]['ol_slide_button_link'] ) ) {
            $value['outlook_slide_option'][ $key ]['ol_slide_button_link'] = esc_url_raw( $value['outlook_slide_option'][ $key ]['ol_slide_button_link'] );
        }

    }          

    return $value;

}
add_action( 'sanitize_option_theme_mods_outlook', 'outlook_sanitize_customizer' );