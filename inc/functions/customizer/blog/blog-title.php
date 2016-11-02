<?php
/*
 *	This file contains "Blog Title" section & fields.
 *	
 *	@version 1.0
 *	@since outlook-lite 1.0
 */
	/*
	 *	Section -- Blog Title
	 *
	 *	@since outlook-lite 1.0
	 */
	 
	outlook_Kirki::add_section( 'outlook_blog_section', array(
	    'title'          	=> __( 'Blog Title', 'outlook-lite' ),
	    'priority'       	=> 10,
	    'capability'     	=> 'edit_theme_options',
	    'panel'     		=> 'outlook_blog_panel',
	) );	
	
	// enable/disable title section
	outlook_Kirki::add_field( 'outlook_config', array(
		'type'        		=> 'switch',
		'settings'    		=> 'outlook_blog_title_section',
		'label'       		=> __( 'Enable/Disable title section', 'outlook-lite' ),
		'description'       => __( 'This section will apply on all the blog archive pages such as category, tag, search.', 'outlook-lite' ),
		'section'     		=> 'outlook_blog_section',
		'default'     		=> '1',
		'priority'    		=> 10,
		'choices'     		=> array(
			'on'  => esc_attr__( 'Enable', 'outlook-lite' ),
			'off' => esc_attr__( 'Disable', 'outlook-lite' ),
		),		
	) );
	
	// title
	outlook_Kirki::add_field( 'outlook_config', array(
		'type'     			=> 'text',
		'settings' 			=> 'outlook_blog_title_text',
		'label'    			=> __( 'Title', 'outlook-lite' ),
		'section'  			=> 'outlook_blog_section',
		'default'  			=> '',
		'priority' 			=> 10,
		'active_callback'   => array(
			array(
				'setting'  		=> 'outlook_blog_title_section',
				'operator' 		=> '==',
				'value'    		=> 1,
			),
		),
        'transport'   		=> 'postMessage',
        'js_vars'     		=> array(
            array(
                'element'  		=> '.ol-blog-sub-header-area .ol-subheader-title h1',
                'function' 		=> 'html',
            ),
        ),				
	) );
	
	// font-size
	outlook_Kirki::add_field( 'outlook_config', array(
		'type'        		=> 'slider',
		'settings'    		=> 'outlook_blog_title_text_size',
		'label'       		=> __( 'Title Font Size', 'outlook-lite' ),
		'section'     		=> 'outlook_blog_section',
		'default'     		=> 35,
		'choices'     		=> array(
			'min'  => '35',
			'max'  => '100',
			'step' => '1',
		),
		'active_callback'   => array(
			array(
				'setting'  		=> 'outlook_blog_title_section',
				'operator' 		=> '==',
				'value'    		=> 1,
			),			
		),
		'transport'   		=> 'auto',
        'output'      		=> array(
            array(
                'element'  		=> '.ol-blog-sub-header-area .ol-subheader-title h1',
                'property' 		=> 'font-size',
                'units'    		=> 'px',
            ),            
        ),				
	) );	
	
	outlook_Kirki::add_field( 'outlook_config', array(
		'type'        		=> 'custom',
		'settings'    		=> 'outlook_blog_title_bg_msg',
		'label'    			=> __( 'Background Image', 'outlook-lite' ),
		'section'     		=> 'outlook_blog_section',
		'default'     		=> __( 'Please upload image by going back to the Header Image menu', 'outlook-lite' ),
		'priority'    		=> 10,
		'active_callback'   => array(
			array(
				'setting'  		=> 'outlook_blog_title_section',
				'operator' 		=> '==',
				'value'    		=> 1,
			),			
		),		
	) );	
	
	// background size
	outlook_Kirki::add_field( 'outlook_config', array(
		'type'        		=> 'select',
		'settings'    		=> 'outlook_blog_title_bg_img_size',
		'label'       		=> __( 'Background size', 'outlook-lite' ),
		'section'     		=> 'outlook_blog_section',
		'default'     		=> 'cover',
		'priority'    		=> 10,
		'multiple'    		=> 1,
		'choices'     		=> array(
			'cover' 			=> esc_attr__( 'cover', 'outlook-lite' ),
			'contain' 			=> esc_attr__( 'contain', 'outlook-lite' ),
			'initial' 			=> esc_attr__( 'initial', 'outlook-lite' ),
		),
		'active_callback'   => array(
			array(
				'setting'  		=> 'outlook_blog_title_section',
				'operator' 		=> '==',
				'value'    		=> 1,
			),			
		),		
	) );	
	
	// background overlay color	 	
	outlook_Kirki::add_field( 'outlook_config', array(
		'type'        		=> 'color',
		'settings'    		=> 'outlook_blog_title_bg_img_color',
		'label'       		=> __( 'Background overlay', 'outlook-lite' ),
		'section'     		=> 'outlook_blog_section',
		'default'     		=> 'rgba(0, 0, 0, 0.4)',
		'priority'    		=> 10,
		'alpha'       		=> true,
		'active_callback'   => array(
			array(
				'setting'  		=> 'outlook_blog_title_section',
				'operator' 		=> '==',
				'value'    		=> 1,
			),			
		),		
		'transport'   		=> 'auto',
        'output'      		=> array(
            array(
                'element'  		=> '#ol-blog-sub-header:before',
                'property' 		=> 'background-color',
            ),
        ),					
	) );	
	
	// top/bottom padding
	outlook_Kirki::add_field( 'outlook_config', array(
		'type'        		=> 'slider',
		'settings'    		=> 'outlook_blog_title_padding',
		'label'       		=> __( 'Top/Bottom Padding', 'outlook-lite' ),
		'section'     		=> 'outlook_blog_section',
		'default'     		=> 400,
		'choices'     		=> array(
			'min'  => '70',
			'max'  => '1000',
			'step' => '1',
		),
		'active_callback'   => array(
			array(
				'setting'  		=> 'outlook_blog_title_section',
				'operator' 		=> '==',
				'value'    		=> 1,
			),			
		),
		'transport'   		=> 'auto',
        'output'      		=> array(
            array(
                'element'  		=> '.ol-blog-sub-header-area',
                'property' 		=> 'padding-top',
                'units'    		=> 'px',
            ),
            array(
                'element'  		=> '.ol-blog-sub-header-area',
                'property' 		=> 'padding-bottom',
                'units'    		=> 'px',
            ),            
        ),				
	) );