<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

if ( ! function_exists( 'bhuta_setup' ) ) {
	add_action( 'after_setup_theme', 'bhuta_setup' );
	// Sets up theme defaults and registers support for various WordPress features.
	function bhuta_setup() {
		
		add_editor_style( 'style.css' );
		
	}
}

// Overwrite parent theme background defaults and registers support for WordPress features.
add_action( 'after_setup_theme', 'martanda_background_setup' );
function martanda_background_setup() {
	add_theme_support( "custom-background",
		array(
			'default-color' 		 => 'ffffff',
			'default-image'          => '',
			'default-repeat'         => 'repeat',
			'default-position-x'     => 'left',
			'default-position-y'     => 'top',
			'default-size'           => 'auto',
			'default-attachment'     => '',
			'wp-head-callback'       => '_custom_background_cb',
			'admin-head-callback'    => '',
			'admin-preview-callback' => ''
		)
	);
}

// Replace default fonts from parent theme
function martanda_get_font_face_styles() {
	return "
	@font-face{
		font-family: 'Roboto';
		font-weight: 100;
		font-style: normal;
		font-stretch: normal;
		font-display: swap;
		src: url('" . get_stylesheet_directory_uri() . "/fonts/Roboto-Thin.woff2') format('woff2');
	}
	@font-face{
		font-family: 'Roboto';
		font-weight: 200;
		font-style: normal;
		font-stretch: normal;
		font-display: swap;
		src: url('" . get_stylesheet_directory_uri() . "/fonts/Roboto-Thin.woff2') format('woff2');
	}
	@font-face{
		font-family: 'Roboto';
		font-weight: 300;
		font-style: normal;
		font-stretch: normal;
		font-display: swap;
		src: url('" . get_stylesheet_directory_uri() . "/fonts/Roboto-Light.woff2') format('woff2');
	}
	@font-face{
		font-family: 'Roboto';
		font-weight: 400;
		font-style: normal;
		font-stretch: normal;
		font-display: swap;
		src: url('" . get_stylesheet_directory_uri() . "/fonts/Roboto-Regular.woff2') format('woff2');
	}
	@font-face{
		font-family: 'Roboto';
		font-weight: 500;
		font-style: normal;
		font-stretch: normal;
		font-display: swap;
		src: url('" . get_stylesheet_directory_uri() . "/fonts/Roboto-Medium.woff2') format('woff2');
	}
	@font-face{
		font-family: 'Roboto';
		font-weight: 600;
		font-style: normal;
		font-stretch: normal;
		font-display: swap;
		src: url('" . get_stylesheet_directory_uri() . "/fonts/Roboto-Medium.woff2') format('woff2');
	}
	@font-face{
		font-family: 'Roboto';
		font-weight: 700;
		font-style: normal;
		font-stretch: normal;
		font-display: swap;
		src: url('" . get_stylesheet_directory_uri() . "/fonts/Roboto-Bold.woff2') format('woff2');
	}
	@font-face{
		font-family: 'Roboto';
		font-weight: 800;
		font-style: normal;
		font-stretch: normal;
		font-display: swap;
		src: url('" . get_stylesheet_directory_uri() . "/fonts/Roboto-Bold.woff2') format('woff2');
	}
	@font-face{
		font-family: 'Roboto';
		font-weight: 900;
		font-style: normal;
		font-stretch: normal;
		font-display: swap;
		src: url('" . get_stylesheet_directory_uri() . "/fonts/Roboto-Black.woff2') format('woff2');
	}
	";
}

function martanda_font_family_css() {
	// Get our settings
	$martanda_settings = wp_parse_args(
		get_option( 'martanda_settings', array() ),
		martanda_get_defaults()
	);

	// Initiate our class
	$css = new martanda_css;
	
	$og_defaults = martanda_get_defaults( false );
	
	$bodyclass = 'body';
	if ( is_admin() ) {
		$bodyclass = '.editor-styles-wrapper';
	}
	
	$bodyfont = $martanda_settings[ 'font_body' ];
	if ( $bodyfont == 'inherit' ) { $bodyfont = 'Roboto'; }
	
	$font_site_title = $martanda_settings[ 'font_site_title' ];
	if ( $font_site_title == 'inherit' ) { $font_site_title = 'Roboto'; }
	$font_navigation = $martanda_settings[ 'font_navigation' ];
	if ( $font_navigation == 'inherit' ) { $font_navigation = 'Roboto'; }
	$font_buttons = $martanda_settings[ 'font_buttons' ];
	if ( $font_buttons == 'inherit' ) { $font_buttons = 'Roboto'; }
	$font_heading_1 = $martanda_settings[ 'font_heading_1' ];
	if ( $font_heading_1 == 'inherit' ) { $font_heading_1 = 'Roboto'; }
	$font_heading_2 = $martanda_settings[ 'font_heading_2' ];
	if ( $font_heading_2 == 'inherit' ) { $font_heading_2 = 'Roboto'; }
	$font_heading_3 = $martanda_settings[ 'font_heading_3' ];
	if ( $font_heading_3 == 'inherit' ) { $font_heading_3 = 'Roboto'; }
	$font_heading_4 = $martanda_settings[ 'font_heading_4' ];
	if ( $font_heading_4 == 'inherit' ) { $font_heading_4 = 'Roboto'; }
	$font_heading_5 = $martanda_settings[ 'font_heading_5' ];
	if ( $font_heading_5 == 'inherit' ) { $font_heading_5 = 'Roboto'; }
	$font_heading_6 = $martanda_settings[ 'font_heading_6' ];
	if ( $font_heading_6 == 'inherit' ) { $font_heading_6 = 'Roboto'; }
	$font_footer = $martanda_settings[ 'font_footer' ];
	if ( $font_footer == 'inherit' ) { $font_footer = 'Roboto'; }
	$font_fixed_side = $martanda_settings[ 'font_fixed_side' ];
	if ( $font_fixed_side == 'inherit' ) { $font_fixed_side = 'Roboto'; }
	
	$css->set_selector( $bodyclass );
	$css->add_property( '--martanda--font-body', esc_attr( $bodyfont ) );
	$css->add_property( '--martanda--font-site-title', esc_attr( $font_site_title ) );
	$css->add_property( '--martanda--font-navigation', esc_attr( $font_navigation ) );
	$css->add_property( '--martanda--font-buttons', esc_attr( $font_buttons ) );
	$css->add_property( '--martanda--font-heading-1', esc_attr( $font_heading_1 ) );
	$css->add_property( '--martanda--font-heading-2', esc_attr( $font_heading_2 ) );
	$css->add_property( '--martanda--font-heading-3', esc_attr( $font_heading_3 ) );
	$css->add_property( '--martanda--font-heading-4', esc_attr( $font_heading_4 ) );
	$css->add_property( '--martanda--font-heading-5', esc_attr( $font_heading_5 ) );
	$css->add_property( '--martanda--font-heading-6', esc_attr( $font_heading_6 ) );
	$css->add_property( '--martanda--font-footer', esc_attr( $font_footer ) );
	$css->add_property( '--martanda--font-fixed-side', esc_attr( $font_fixed_side ) );
	
	$css->set_selector( '.editor-styles-wrapper .top-bar-socials button' );
	$css->add_property( 'background-color', 'inherit' );
	
	// Allow us to hook CSS into our output
	do_action( 'martanda_font_family_css', $css );

	return apply_filters( 'martanda_font_family_css_output', $css->css_output() );
}

// Overwrite theme URL
function martanda_theme_uri_link() {
	return 'https://wpkoi.com/bhuta-wpkoi-wordpress-theme/';
}

// Extra cutomizer functions
if ( ! function_exists( 'bhuta_customize_register' ) ) {
	add_action( 'customize_register', 'bhuta_customize_register' );
	function bhuta_customize_register( $wp_customize ) {
				
		// Add Bhuta customizer section
		$wp_customize->add_section(
			'bhuta_layout_effects',
			array(
				'title' => __( 'Bhuta Header Options', 'bhuta' ),
				'priority' => 24,
			)
		);
		
		// Menu border
		$wp_customize->add_setting(
			'bhuta_settings[menu_border]',
			array(
				'default' => 'enable',
				'type' => 'option',
				'sanitize_callback' => 'bhuta_sanitize_choices'
			)
		);

		$wp_customize->add_control(
			'bhuta_settings[menu_border]',
			array(
				'type' => 'select',
				'label' => __( 'Menu border', 'bhuta' ),
				'choices' => array(
					'enable' => __( 'Enable', 'bhuta' ),
					'disable' => __( 'Disable', 'bhuta' )
				),
				'settings' => 'bhuta_settings[menu_border]',
				'section' => 'bhuta_layout_effects',
				'priority' => 8
			)
		);
		
		// Responsive header font size
		$wp_customize->add_setting(
			'bhuta_settings[resp_hf]',
			array(
				'default' => 'enable',
				'type' => 'option',
				'sanitize_callback' => 'bhuta_sanitize_choices'
			)
		);

		$wp_customize->add_control(
			'bhuta_settings[resp_hf]',
			array(
				'type' => 'select',
				'label' => __( 'Responsive header font size', 'bhuta' ),
				'choices' => array(
					'enable' => __( 'Enable', 'bhuta' ),
					'disable' => __( 'Disable', 'bhuta' )
				),
				'settings' => 'bhuta_settings[resp_hf]',
				'section' => 'bhuta_layout_effects',
				'priority' => 10
			)
		);
		
		// Bhuta header font sizes
		$wp_customize->add_setting(
			'bhuta_settings[bhuta_title_size]', array(
				'default' => '5',
				'type' => 'option',
				'sanitize_callback' => 'bhuta_sanitize_float',
			)
		);

		$wp_customize->add_control(
			'bhuta_settings[bhuta_title_size]',
			array(
				'type' => 'number',
				'label' => __( 'Title font size (vw)', 'bhuta' ),
				'section' => 'bhuta_layout_effects',
				'settings' => 'bhuta_settings[bhuta_title_size]',
				'priority' => 45,
				'input_attrs'       => array(
					'min'           => 0,
					'max'           => 10,
					'step'          => 0.1,
				),
			)
		);
		
		$wp_customize->add_setting(
			'bhuta_settings[bhuta_menu_size]', array(
				'default' => '2',
				'type' => 'option',
				'sanitize_callback' => 'bhuta_sanitize_float',
			)
		);

		$wp_customize->add_control(
			'bhuta_settings[bhuta_menu_size]',
			array(
				'type' => 'number',
				'label' => __( 'Menu font size (vw)', 'bhuta' ),
				'section' => 'bhuta_layout_effects',
				'settings' => 'bhuta_settings[bhuta_menu_size]',
				'priority' => 45,
				'input_attrs'       => array(
					'min'           => 0,
					'max'           => 10,
					'step'          => 0.1,
				),
			)
		);
		
	}
}

//Sanitize choices.
if ( ! function_exists( 'bhuta_sanitize_choices' ) ) {
	function bhuta_sanitize_choices( $input, $setting ) {
		// Ensure input is a slug
		$input = sanitize_key( $input );

		// Get list of choices from the control
		// associated with the setting
		$choices = $setting->manager->get_control( $setting->id )->choices;

		// If the input is a valid key, return it;
		// otherwise, return the default
		return ( array_key_exists( $input, $choices ) ? $input : $setting->default );
	}
}

//Sanitize choices.
if ( ! function_exists( 'bhuta_sanitize_float' ) ) {
	function bhuta_sanitize_float( $input ) {
		return filter_var($input, FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
	}
}

// Bhuta effects css
if ( ! function_exists( 'bhuta_effect_css' ) ) {
	function bhuta_effect_css() {
		// Get Customizer settings
		$bhuta_settings = get_option( 'bhuta_settings' );
		
		$bhuta_title_size	 = isset( $bhuta_settings['bhuta_title_size'] ) ? $bhuta_settings['bhuta_title_size'] : '5';
		$bhuta_menu_size	 = isset( $bhuta_settings['bhuta_menu_size'] ) ? $bhuta_settings['bhuta_menu_size'] : '2';
		
		$bhuta_extracss = 'body.bhuta-resp-hf {--martanda--site-title-font-size: ' . esc_attr( $bhuta_title_size ) . 'vw;--martanda--navigation-font-size: ' . esc_attr( $bhuta_menu_size ) . 'vw;}';
		
		return $bhuta_extracss;
	}
}

// The dynamic styles of the parent theme added inline to the parent stylesheet.
// For the customizer functions it is better to enqueue after the child theme stylesheet.
if ( ! function_exists( 'bhuta_remove_parent_dynamic_css' ) ) {
	add_action( 'init', 'bhuta_remove_parent_dynamic_css' );
	function bhuta_remove_parent_dynamic_css() {
		remove_action( 'wp_enqueue_scripts', 'martanda_enqueue_dynamic_css', 50 );
	}
}

// Enqueue this CSS after the child stylesheet, not after the parent stylesheet.
if ( ! function_exists( 'bhuta_enqueue_parent_dynamic_css' ) ) {
	add_action( 'wp_enqueue_scripts', 'bhuta_enqueue_parent_dynamic_css', 50 );
	function bhuta_enqueue_parent_dynamic_css() {
		$css = martanda_get_font_face_styles() . martanda_font_family_css() . martanda_base_css() . bhuta_effect_css();

		// escaped secure before in parent theme
		wp_add_inline_style( 'martanda-child', $css );
	}
}

//Adds custom classes to the array of body classes.
if ( ! function_exists( 'bhuta_body_classes' ) ) {
	add_filter( 'body_class', 'bhuta_body_classes' );
	function bhuta_body_classes( $classes ) {
		// Get Customizer settings
		$bhuta_settings = get_option( 'bhuta_settings' );
		
		$resp_hf 		= isset( $bhuta_settings['resp_hf'] ) ? $bhuta_settings['resp_hf'] : 'enable';
		$menu_border 	= isset( $bhuta_settings['menu_border'] ) ? $bhuta_settings['menu_border'] : 'enable';
		
		// Responsive header font size
		if ( $resp_hf != 'disable' ) {
			$classes[] = 'bhuta-resp-hf';
		}
		
		// Menu border
		if ( $menu_border != 'disable' ) {
			$classes[] = 'bhuta-menu-border';
		}
		
		return $classes;
	}
}
