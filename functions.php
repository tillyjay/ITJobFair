<?php

/**
 * The Wave's functions and definitions
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
	$content_width = 800; /* pixels */
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
		add_theme_support( 'post-thumbnails' );

		/**
		 * Add support for two custom navigation menus.
		 */
		register_nav_menus( array(
			'primary'   => __( 'Primary Menu', 'itjobfair
        ' ),
			'secondary' => __( 'Secondary Menu', 'itjobfair
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

// Add styles and scripts
function itjobfair_enqueue_styles() {
    // Theme style.css
    wp_enqueue_style('itjobfair
_theme_styles', get_stylesheet_uri());

    // Bootstrap css and js
    wp_enqueue_style('bootstrap_styles', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css');
    wp_enqueue_script('bootstrapscript','https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js');
}
add_action( 'wp_enqueue_scripts', 'itjobfair_enqueue_styles' );

// Register and enqueue custom stylesheet
function custom_theme_enqueue_styles() {
    // Register the stylesheet
    wp_register_style( 'styles', get_stylesheet_directory_uri() . '/styles.css', array(), '1.0', 'all' );
    
    // Enqueue the registered stylesheet
    wp_enqueue_style( 'styles' );
}
add_action( 'wp_enqueue_scripts', 'custom_theme_enqueue_styles' );

?>