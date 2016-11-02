<?php
/*
 *	This file contains "front page" panel, section & fields.
 *
 *	@version 1.0
 *	@since outlook-lite 1.0
 */
	/*
	 *	Panel -- Front Page
	 *
	 *  @since outlook-lite 1.0
	 */	 	
	outlook_Kirki::add_panel( 'outlook_front_page_panel', array(
	    'priority'    => 10,
	    'title'       => esc_attr__( 'Front Page', 'outlook-lite' ),
	) );

	
	/*  
	 *
	 *	Section/Fields - Slider | Front Page
	 *	Contains slider section & repeatable field group.
	 *
	 *	@since outlook-lite 1.0
	 */
	require_once( get_template_directory() . $customizer_path . '/front-page/featured-slider.php' );	

	/*  
	 *
	 *	Section/Fields - About | Front Page
	 *	Contains "About" section & fields.
	 *
	 *	@since outlook-lite 1.0
	 */
	require_once( get_template_directory() . $customizer_path . '/front-page/about.php' );	
	
	/*  
	 *
	 *	Section/Fields - Services | Front Page
	 *	Contains "Services" section & repeable fields group.
	 *
	 *	@since outlook-lite 1.0
	 */
	require_once( get_template_directory() . $customizer_path . '/front-page/services.php' );

	/*  
	 *
	 *	Section/Fields - Portfolio | Front Page
	 *	Contains "Portfolio" section & fields.
	 *
	 *	@since outlook-lite 1.0
	 */
	require_once( get_template_directory() . $customizer_path . '/front-page/portfolio.php' );	
	
	/*  
	 *
	 *	Section/Fields - Parallax Section | Front Page
	 *	Contains "parallax" section & fields.
	 *
	 *	@since outlook-lite 1.0
	 */
	require_once( get_template_directory() . $customizer_path . '/front-page/image-parallax.php' );
	
	/*  
	 *
	 *	Section/Fields - Testimonials & Faqs | Front Page
	 *	Contains "testimonials & faqs" section & fields.
	 *
	 *	@since outlook-lite 1.0
	 */
	require_once( get_template_directory() . $customizer_path . '/front-page/testimonials-faq.php' );
	
	/*  
	 *
	 *	Section/Fields - Blog | Front Page
	 *	Contains "Blog" section & fields.
	 *
	 *	@since outlook-lite 1.0
	 */
	require_once( get_template_directory() . $customizer_path . '/front-page/blog.php' );	
	
	/*  
	 *
	 *	Section/Fields - Call to action | Front Page
	 *	Contains "call to action" section & fields.
	 *
	 *	@since outlook-lite 1.0
	 */
	require_once( get_template_directory() . $customizer_path . '/front-page/callout-footer.php' );
	
	/*  
	 *
	 *	Section/Fields - unlock info | Front Page
	 *	Contains "unlock" section & fields.
	 *
	 *	@since outlook-lite 1.0
	 */
	require_once( get_template_directory() . $customizer_path . '/front-page/unlock-sections.php' );	