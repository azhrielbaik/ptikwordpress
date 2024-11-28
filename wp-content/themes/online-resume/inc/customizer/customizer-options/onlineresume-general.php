<?php
function onlineresume_general_setting( $wp_customize ) {
$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';
	$wp_customize->add_panel(
		'onlineresume_general', array(
			'priority' => 31,
			'title' => esc_html__( 'General', 'online-resume' ),
		)
	);
	
	/*=========================================
	Clip Art
	=========================================*/
	$wp_customize->add_section(
		'clipart', array(
			'title' => esc_html__( 'Clip Art', 'online-resume' ),
			'priority' => 2,
			'panel' => 'onlineresume_general',
		)
	);
	
	$wp_customize->add_setting( 
		'hs_clipart' , 
			array(
			'default' => '1',
			'sanitize_callback' => 'onlineresume_sanitize_checkbox',
			'capability' => 'edit_theme_options',
			'priority' => 1,
		) 
	);
	
	$wp_customize->add_control(
	'hs_clipart', 
		array(
			'label'	      => esc_html__( 'Hide / Show Clip Art', 'online-resume' ),
			'section'     => 'clipart',
			'type'        => 'checkbox'
		) 
	);
	
	/*=========================================
	Breadcrumb  Section
	=========================================*/
	$wp_customize->add_section(
		'breadcrumb_setting', array(
			'title' => esc_html__( 'Breadcrumb Section', 'online-resume' ),
			'priority' => 1,
			'panel' => 'onlineresume_general',
		)
	);
	
	// Settings
	$wp_customize->add_setting(
		'breadcrumb_settings'
			,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'onlineresume_sanitize_text',
			'priority' => 1,
		)
	);

	$wp_customize->add_control(
	'breadcrumb_settings',
		array(
			'type' => 'hidden',
			'label' => __('Settings','online-resume'),
			'section' => 'breadcrumb_setting',
		)
	);
	
	// Breadcrumb Hide/ Show Setting // 
	$wp_customize->add_setting( 
		'hs_breadcrumb' , 
			array(
			'default' => '1',
			'sanitize_callback' => 'onlineresume_sanitize_checkbox',
			'capability' => 'edit_theme_options',
			'priority' => 2,
		) 
	);
	
	$wp_customize->add_control(
	'hs_breadcrumb', 
		array(
			'label'	      => esc_html__( 'Hide / Show Section', 'online-resume' ),
			'section'     => 'breadcrumb_setting',
			'settings'    => 'hs_breadcrumb',
			'type'        => 'checkbox'
		) 
	);
	
		
	// Background // 
	$wp_customize->add_setting(
		'breadcrumb_bg_head'
			,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'onlineresume_sanitize_text',
			'priority' => 9,
		)
	);

	$wp_customize->add_control(
	'breadcrumb_bg_head',
		array(
			'type' => 'hidden',
			'label' => __('Background','online-resume'),
			'section' => 'breadcrumb_setting',
		)
	);
	
	// Background Image // 
    $wp_customize->add_setting( 
    	'breadcrumb_bg_img' , 
    	array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'onlineresume_sanitize_url',	
			'priority' => 10,
		) 
	);
	
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize , 'breadcrumb_bg_img' ,
		array(
			'label'          => esc_html__( 'Background Image', 'online-resume'),
			'section'        => 'breadcrumb_setting',
		) 
	));
	
	// Background Attachment // 
	$wp_customize->add_setting( 
		'breadcrumb_back_attach' , 
			array(
			'default' => 'scroll',
			'capability'     => 'edit_theme_options',
			'sanitize_callback' => 'onlineresume_sanitize_select',
			'priority'  => 10,
		) 
	);
	
	$wp_customize->add_control(
	'breadcrumb_back_attach' , 
		array(
			'label'          => __( 'Background Attachment', 'online-resume' ),
			'section'        => 'breadcrumb_setting',
			'type'           => 'select',
			'choices'        => 
			array(
				'inherit' => __( 'Inherit', 'online-resume' ),
				'scroll' => __( 'Scroll', 'online-resume' ),
				'fixed'   => __( 'Fixed', 'online-resume' )
			) 
		) 
	);
}

add_action( 'customize_register', 'onlineresume_general_setting' );
