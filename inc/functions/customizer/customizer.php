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

/*
 *	Translation kirki strings
 *	
 *	@since outlook-lite 1.0.3
 */
add_filter( 'kirki/my_config/l10n', function( $l10n ) {

	$l10n['background-color']      = esc_attr__( 'Background Color', 'outlook-lite' );
	$l10n['background-image']      = esc_attr__( 'Background Image', 'outlook-lite' );
	$l10n['no-repeat']             = esc_attr__( 'No Repeat', 'outlook-lite' );
	$l10n['repeat-all']            = esc_attr__( 'Repeat All', 'outlook-lite' );
	$l10n['repeat-x']              = esc_attr__( 'Repeat Horizontally', 'outlook-lite' );
	$l10n['repeat-y']              = esc_attr__( 'Repeat Vertically', 'outlook-lite' );
	$l10n['inherit']               = esc_attr__( 'Inherit', 'outlook-lite' );
	$l10n['background-repeat']     = esc_attr__( 'Background Repeat', 'outlook-lite' );
	$l10n['cover']                 = esc_attr__( 'Cover', 'outlook-lite' );
	$l10n['contain']               = esc_attr__( 'Contain', 'outlook-lite' );
	$l10n['background-size']       = esc_attr__( 'Background Size', 'outlook-lite' );
	$l10n['fixed']                 = esc_attr__( 'Fixed', 'outlook-lite' );
	$l10n['scroll']                = esc_attr__( 'Scroll', 'outlook-lite' );
	$l10n['background-attachment'] = esc_attr__( 'Background Attachment', 'outlook-lite' );
	$l10n['left-top']              = esc_attr__( 'Left Top', 'outlook-lite' );
	$l10n['left-center']           = esc_attr__( 'Left Center', 'outlook-lite' );
	$l10n['left-bottom']           = esc_attr__( 'Left Bottom', 'outlook-lite' );
	$l10n['right-top']             = esc_attr__( 'Right Top', 'outlook-lite' );
	$l10n['right-center']          = esc_attr__( 'Right Center', 'outlook-lite' );
	$l10n['right-bottom']          = esc_attr__( 'Right Bottom', 'outlook-lite' );
	$l10n['center-top']            = esc_attr__( 'Center Top', 'outlook-lite' );
	$l10n['center-center']         = esc_attr__( 'Center Center', 'outlook-lite' );
	$l10n['center-bottom']         = esc_attr__( 'Center Bottom', 'outlook-lite' );
	$l10n['background-position']   = esc_attr__( 'Background Position', 'outlook-lite' );
	$l10n['background-opacity']    = esc_attr__( 'Background Opacity', 'outlook-lite' );
	$l10n['on']                    = esc_attr__( 'ON', 'outlook-lite' );
	$l10n['off']                   = esc_attr__( 'OFF', 'outlook-lite' );
	$l10n['all']                   = esc_attr__( 'All', 'outlook-lite' );
	$l10n['cyrillic']              = esc_attr__( 'Cyrillic', 'outlook-lite' );
	$l10n['cyrillic-ext']          = esc_attr__( 'Cyrillic Extended', 'outlook-lite' );
	$l10n['devanagari']            = esc_attr__( 'Devanagari', 'outlook-lite' );
	$l10n['greek']                 = esc_attr__( 'Greek', 'outlook-lite' );
	$l10n['greek-ext']             = esc_attr__( 'Greek Extended', 'outlook-lite' );
	$l10n['khmer']                 = esc_attr__( 'Khmer', 'outlook-lite' );
	$l10n['latin']                 = esc_attr__( 'Latin', 'outlook-lite' );
	$l10n['latin-ext']             = esc_attr__( 'Latin Extended', 'outlook-lite' );
	$l10n['vietnamese']            = esc_attr__( 'Vietnamese', 'outlook-lite' );
	$l10n['hebrew']                = esc_attr__( 'Hebrew', 'outlook-lite' );
	$l10n['arabic']                = esc_attr__( 'Arabic', 'outlook-lite' );
	$l10n['bengali']               = esc_attr__( 'Bengali', 'outlook-lite' );
	$l10n['gujarati']              = esc_attr__( 'Gujarati', 'outlook-lite' );
	$l10n['tamil']                 = esc_attr__( 'Tamil', 'outlook-lite' );
	$l10n['telugu']                = esc_attr__( 'Telugu', 'outlook-lite' );
	$l10n['thai']                  = esc_attr__( 'Thai', 'outlook-lite' );
	$l10n['serif']                 = _x( 'Serif', 'font style', 'outlook-lite' );
	$l10n['sans-serif']            = _x( 'Sans Serif', 'font style', 'outlook-lite' );
	$l10n['monospace']             = _x( 'Monospace', 'font style', 'outlook-lite' );
	$l10n['font-family']           = esc_attr__( 'Font Family', 'outlook-lite' );
	$l10n['font-size']             = esc_attr__( 'Font Size', 'outlook-lite' );
	$l10n['font-weight']           = esc_attr__( 'Font Weight', 'outlook-lite' );
	$l10n['line-height']           = esc_attr__( 'Line Height', 'outlook-lite' );
	$l10n['font-style']            = esc_attr__( 'Font Style', 'outlook-lite' );
	$l10n['letter-spacing']        = esc_attr__( 'Letter Spacing', 'outlook-lite' );
	$l10n['top']                   = esc_attr__( 'Top', 'outlook-lite' );
	$l10n['bottom']                = esc_attr__( 'Bottom', 'outlook-lite' );
	$l10n['left']                  = esc_attr__( 'Left', 'outlook-lite' );
	$l10n['right']                 = esc_attr__( 'Right', 'outlook-lite' );
	$l10n['color']                 = esc_attr__( 'Color', 'outlook-lite' );
	$l10n['add-image']             = esc_attr__( 'Add Image', 'outlook-lite' );
	$l10n['change-image']          = esc_attr__( 'Change Image', 'outlook-lite' );
	$l10n['remove']                = esc_attr__( 'Remove', 'outlook-lite' );
	$l10n['no-image-selected']     = esc_attr__( 'No Image Selected', 'outlook-lite' );
	$l10n['select-font-family']    = esc_attr__( 'Select a font-family', 'outlook-lite' );
	$l10n['variant']               = esc_attr__( 'Variant', 'outlook-lite' );
	$l10n['subsets']               = esc_attr__( 'Subset', 'outlook-lite' );
	$l10n['size']                  = esc_attr__( 'Size', 'outlook-lite' );
	$l10n['height']                = esc_attr__( 'Height', 'outlook-lite' );
	$l10n['spacing']               = esc_attr__( 'Spacing', 'outlook-lite' );
	$l10n['ultra-light']           = esc_attr__( 'Ultra-Light 100', 'outlook-lite' );
	$l10n['ultra-light-italic']    = esc_attr__( 'Ultra-Light 100 Italic', 'outlook-lite' );
	$l10n['light']                 = esc_attr__( 'Light 200', 'outlook-lite' );
	$l10n['light-italic']          = esc_attr__( 'Light 200 Italic', 'outlook-lite' );
	$l10n['book']                  = esc_attr__( 'Book 300', 'outlook-lite' );
	$l10n['book-italic']           = esc_attr__( 'Book 300 Italic', 'outlook-lite' );
	$l10n['regular']               = esc_attr__( 'Normal 400', 'outlook-lite' );
	$l10n['italic']                = esc_attr__( 'Normal 400 Italic', 'outlook-lite' );
	$l10n['medium']                = esc_attr__( 'Medium 500', 'outlook-lite' );
	$l10n['medium-italic']         = esc_attr__( 'Medium 500 Italic', 'outlook-lite' );
	$l10n['semi-bold']             = esc_attr__( 'Semi-Bold 600', 'outlook-lite' );
	$l10n['semi-bold-italic']      = esc_attr__( 'Semi-Bold 600 Italic', 'outlook-lite' );
	$l10n['bold']                  = esc_attr__( 'Bold 700', 'outlook-lite' );
	$l10n['bold-italic']           = esc_attr__( 'Bold 700 Italic', 'outlook-lite' );
	$l10n['extra-bold']            = esc_attr__( 'Extra-Bold 800', 'outlook-lite' );
	$l10n['extra-bold-italic']     = esc_attr__( 'Extra-Bold 800 Italic', 'outlook-lite' );
	$l10n['ultra-bold']            = esc_attr__( 'Ultra-Bold 900', 'outlook-lite' );
	$l10n['ultra-bold-italic']     = esc_attr__( 'Ultra-Bold 900 Italic', 'outlook-lite' );
	$l10n['invalid-value']         = esc_attr__( 'Invalid Value', 'outlook-lite' );

	return $l10n;

} );