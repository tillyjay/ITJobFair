<?php

/**
 * IT Job Fair functions and definitions
 *
 * @package itjobfair Theme
 * @since itjobfair 1.0
 */

/**
 * First, let's set the maximum content width based on the theme's
 * design and stylesheet.
 * This will limit the width of all uploaded images and embeds.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 1000; /* pixels */
}


if ( ! function_exists( 'itjobfair_setup' ) ) :

	/**
	 * Sets up theme defaults and registers support for various
	 * WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme
	 * hook, which runs before the init hook. The init hook is too late
	 * for some features, such as indicating support post thumbnails.
	 */
	function itjobfair_setup() {

		/**
		 * Add default posts and comments RSS feed links to <head>.
		 */
		add_theme_support( 'automatic-feed-links' );

		/**
		 * Enable support for post thumbnails and featured images.
		 */
		add_theme_support('post-thumbnails', array(
			'page'
		));
		

		/**
		 * Add support for two custom navigation menus.
		 */
		register_nav_menus( array(
			'Primary Menu'   => __( 'Primary Menu', 'itjobfair
        ' ),
			'Secondary Menu' => __( 'Secondary Menu', 'itjobfair
        ' ),
		) );

		/**
		 * Enable support for the following post formats:
		 * aside, gallery, quote, image, and video
		 */
		add_theme_support( 'post-formats', array( 'aside', 'gallery', 'quote', 'image', 'video' ) );
	}
endif; // itjobfair_setup
add_action( 'after_setup_theme', 'itjobfair_setup' );




//add styles and scripts
function itjobfair_enqueue_styles() {

    wp_enqueue_style('itjobfair
_theme_styles', get_stylesheet_uri());

    // Bootstrap css and js
    wp_enqueue_style('bootstrap_styles', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css');
    wp_enqueue_script('bootstrapscript','https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js');
}
add_action( 'wp_enqueue_scripts', 'itjobfair_enqueue_styles' );

//font awesome
function enqueue_font_awesome() {
    wp_enqueue_style('font-awesome', 'https://use.fontawesome.com/releases/v5.15.4/css/all.css');
}
add_action('wp_enqueue_scripts', 'enqueue_font_awesome');


//register and enqueue custom stylesheets
function custom_theme_enqueue_styles() {
    //register stylesheet
    wp_register_style( 'style', get_stylesheet_directory_uri() . '/assets/css/style.css', array(), '1.0', 'all' );
    
    //enqueue registered stylesheet
    wp_enqueue_style( 'style' );
}
add_action( 'wp_enqueue_scripts', 'custom_theme_enqueue_styles' );

//home page styles
function itjobfair_enqueue_homepage_styles() {
    //check if is home page
    if (is_page('home')) {
        //enqueue homePage.css stylesheet
        wp_enqueue_style('homePage', get_template_directory_uri() . '/assets/css/homePage.css', array(), '1.0.0', 'all');
    }
}
add_action('wp_enqueue_scripts', 'itjobfair_enqueue_homepage_styles');

//industry page styles
function itjobfair_enqueue_industrypage_styles() {
    if (is_page('industry')) {
        wp_enqueue_style('industryPage', get_template_directory_uri() . '/assets/css/industryPage.css', array(), '1.0.0', 'all');
    }
}
add_action('wp_enqueue_scripts', 'itjobfair_enqueue_industrypage_styles');

//student page styles

function itjobfair_enqueue_studentpage_styles() {
    if (is_page('students')) {
        wp_enqueue_style('studentPage', get_template_directory_uri() . '/assets/css/studentPage.css', array(), '1.0.0', 'all');
    }
}
add_action('wp_enqueue_scripts', 'itjobfair_enqueue_studentpage_styles');



//enqueue custom JavaScript
function itjobfair_enqueue_scripts() {

	//enqueue jQuery (if not already enqueued by Bootstrap)
	wp_enqueue_script('jquery');
	
    //enqueue custom JavaScript
    wp_enqueue_script('custom-script', get_template_directory_uri() . '/assets/js/custom-script.js', array('jquery'), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'itjobfair_enqueue_scripts');


?>