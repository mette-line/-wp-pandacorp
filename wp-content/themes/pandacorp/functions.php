<?php
/**
 * PandaCorp functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Rommel
 * @subpackage PandaCorp
 * @since 1.0.0
 */

/**
 * Exit if accessed directly.
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Define text domain.
 */
define( 'THEME_TEXTDOMAIN', 'pandacorp' );

/**
 * Register supported features.
 */
function pandacorp_register_supported_features() {
	// Register theme translations.
	load_theme_textdomain( THEME_TEXTDOMAIN, get_template_directory() . '/languages' );

	// Let WordPress manage the document title.
	// By adding theme support, we declare that this theme does not use a
	// hard-coded <title> tag in the document head, and expect WordPress to
	// provide it for us.
	add_theme_support( 'title-tag' );

	// Switch default core markup for search form, comment form, and comments
	// to output valid HTML5.
	add_theme_support(
		'html5',
		[
			'caption',
		]
	);

	// Add support for Block Styles.
	add_theme_support( 'wp-block-styles' );

	// Add support for full and wide align images.
	add_theme_support( 'align-wide' );

	// Add support for editor styles.
	add_theme_support( 'editor-styles' );

	// Enqueue editor styles.
	add_editor_style( 'editor-styles.css' );

	// Add support for responsive embedded content.
	add_theme_support( 'responsive-embeds' );

    // Add WP menus.
    register_nav_menus(
        array(
            'header-menu' => esc_html__( 'Header Menu' ),
            'footer-menu' => esc_html__( 'Footer Menu' ),
            'burger-menu' => esc_html__( 'Burger Menu' )
        )
    );

	// Set the content width in pixels, based on the theme's design and stylesheet.
	// This variable is intended to be overruled from themes.
	$GLOBALS['content_width'] = apply_filters( 'pandacorp_content_width', 1024 );
}

add_action( 'after_setup_theme', 'pandacorp_register_supported_features' );

/**
 * Enqueue scripts and styles.
 */
function pandacorp_scripts_and_styles() {
	// Enqueue style reset and base stylesheet.
	wp_enqueue_style( 'pandacorp-reset', get_stylesheet_directory_uri() . '/assets/css/reset.css', [], wp_get_theme()->get( 'Version' ) );
	//@TODO: Enqueue the style.
    wp_enqueue_style( 'pandacorp-style', get_stylesheet_directory_uri() . '/style.css', [], wp_get_theme()->get( 'Version' ) );
	//@TODO: Enqueue the JavaScript.
    wp_enqueue_script( 'pandacorp-js', get_stylesheet_directory_uri() . '/assets/js/main.js', [], wp_get_theme()->get( 'Version' ) );

}

add_action( 'wp_enqueue_scripts', 'pandacorp_scripts_and_styles' );


/**
 * Theme functions
 */

// Add support for custom logo
function pandacorp_custom_logo_setup() {
    
	$defaults = array(
		'height'               => 100,
		'width'                => 400,
		'flex-height'          => true,
		'flex-width'           => true,
		'header-text'          => array( 'site-title', 'site-description' ),
		'unlink-homepage-logo' => true, 
	);

	add_theme_support( 'custom-logo', $defaults );
}

add_action( 'after_setup_theme', 'pandacorp_custom_logo_setup' );

// Import Roboto Google font
function pandacorp_add_google_fonts() {
    wp_enqueue_style( 'pandacorp-google-fonts', 'https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;700&display=swap"', false );
}

add_action( 'wp_enqueue_scripts', 'pandacorp_add_google_fonts' ); 

// Add support for footer widgets
function footer_widgets() {
    register_sidebar(array(
        'name'          => 'Footer gallery',
        'id'            => 'footer_widgets_img',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<span class="widget-title">',
        'after_title'   => '</span>',
    ));
    register_sidebar(array(
        'name'          => 'Footer widgets 1',
        'id'            => 'footer_widgets_1',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<span class="widget-title">',
        'after_title'   => '</span>',
    ));
    register_sidebar(array(
        'name'          => 'Footer widgets 2',
        'id'            => 'footer_widgets_2',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<span class="widget-title">',
        'after_title'   => '</span>',
    ));
}

add_action('widgets_init', 'footer_widgets');

/**
 * Theme shortcodes
 */

function pandacorp_copyright_year () {
    $year = date_i18n ('Y');
    return $year;
    }
add_shortcode ('year', 'pandacorp_copyright_year');