<?php
if ( ! function_exists( 'online_resume_setup' ) ) :
function online_resume_setup() {

// Root path/URI.
define( 'ONLINE_RESUME_PARENT_DIR', get_template_directory() );
define( 'ONLINE_RESUME_PARENT_URI', get_template_directory_uri() );

// Root path/URI.
define( 'ONLINE_RESUME_PARENT_INC_DIR', ONLINE_RESUME_PARENT_DIR . '/inc');
define( 'ONLINE_RESUME_PARENT_INC_URI', ONLINE_RESUME_PARENT_URI . '/inc');

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 */
	add_theme_support( 'title-tag' );
	
	add_theme_support( 'custom-header' );

	
	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 */
	add_theme_support( 'post-thumbnails' );
	
	//Add selective refresh for sidebar widget
	add_theme_support( 'customize-selective-refresh-widgets' );
	
	/*
	 * Make theme available for translation.
	 */
	load_theme_textdomain( 'online-resume' );
		
	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary_menu' => esc_html__( 'Primary Menu', 'online-resume' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );
	
	
	add_theme_support('custom-logo');

	/*
	 * WooCommerce Plugin Support
	 */
	add_theme_support( 'woocommerce' );
	
	// Gutenberg wide images.
	add_theme_support( 'align-wide' );
	
	/*
	 * This theme styles the visual editor to resemble the theme style,
	 * specifically font, colors, icons, and column width.
	 */
	add_editor_style( array( 'assets/css/editor-style.css', online_resume_google_font() ) );
	
	//Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'online_resume_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif;
add_action( 'after_setup_theme', 'online_resume_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function online_resume_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'online_resume_content_width', 1170 );
}
add_action( 'after_setup_theme', 'online_resume_content_width', 0 );


/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */

function online_resume_widgets_init() {
	
	register_sidebar( array(
		'name' => __( 'Sidebar Widget Area', 'online-resume' ),
		'id' => 'online-resume-sidebar-primary',
		'description' => __( 'The Primary Widget Area', 'online-resume' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h4 class="widget-title">',
		'after_title' => '</h4><div class="title"><span class="shap"></span></div>',
	) );
	
	register_sidebar( array(
		'name' => __( 'Footer Widget Area', 'online-resume' ),
		'id' => 'online-resume-footer-widget-area',
		'description' => __( 'The Footer Widget Area', 'online-resume' ),
		'before_widget' => '<div class="footer-widget col-lg-3 col-sm-6 wow fadeIn" data-wow-delay="0.2s"><aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside></div>',
		'before_title' => '<h5 class="widget-title w-title">',
		'after_title' => '</h5><span class="shap"></span>',
	) );

	register_sidebar( array(
		'name' => __( 'WooCommerce Widget Area', 'online-resume' ),
		'id' => 'online-resume-woocommerce-sidebar',
		'description' => __( 'This Widget area for WooCommerce Widget', 'online-resume' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h4 class="widget-title">',
		'after_title' => '</h4><div class="title"><span class="shap"></span></div>',
	) );
}
add_action( 'widgets_init', 'online_resume_widgets_init' );

/**
 * All Styles & Scripts.
 */

require_once get_template_directory() . '/inc/enqueue.php';

/**
 * Nav Walker fo Bootstrap Dropdown Menu.
 */

require_once get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';

/**
 * Implement the Custom Header feature.
 */
require_once get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require_once get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require_once get_template_directory() . '/inc/extras.php';


/**
 * Customizer additions.
 */
 require_once get_template_directory() . '/inc/onlineresume-customizer.php';

require_once get_template_directory() . '/inc/tab-control.php';



add_filter( 'nav_menu_link_attributes', 'online_resume_dropdown_data_attribute', 20, 3 );
/**
 * Use namespaced data attribute for Bootstrap's dropdown toggles.
 *
 * @param array    $atts HTML attributes applied to the item's `<a>` element.
 * @param WP_Post  $item The current menu item.
 * @param stdClass $args An object of wp_nav_menu() arguments.
 * @return array
 */
function online_resume_dropdown_data_attribute( $atts, $item, $args ) {
    if ( is_a( $args->walker, 'WP_Bootstrap_Navwalker' ) ) {
        if ( array_key_exists( 'data-toggle', $atts ) ) {
            unset( $atts['data-toggle'] );
            $atts['data-bs-toggle'] = 'dropdown';
        }
    }
    return $atts;
}


function home_renovationenqueue_font_awesome() {
    wp_enqueue_style('font-awesome', get_template_directory_uri() . '/assets/css/fontawesome.css');
}
add_action('wp_enqueue_scripts', 'home_renovationenqueue_font_awesome');



function online_resume_fonts() {
    wp_enqueue_style( 'online_resume-google-fonts-Philosopher', 'https://fonts.googleapis.com/css2?family=Philosopher:ital,wght@0,700;1,400&display=swap', false );
    
    wp_enqueue_style( 'online_resume-google-fonts-Kaushan', 'https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap', false );

    wp_enqueue_style( 'online_resume-google-fonts-Ubuntu', 'https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;700&display=swap', false );
}
add_action( 'wp_enqueue_scripts', 'online_resume_fonts' );
