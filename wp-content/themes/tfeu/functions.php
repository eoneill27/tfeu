<?php

/* Disable WordPress Admin Bar for all users */
add_filter('show_admin_bar', '__return_false');

/* load css into the website's front end */
function mytheme_enqueue_style() {
	wp_enqueue_style('style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'mytheme_enqueue_style');

/* register custom menus */
function register_my_menu () {
	register_nav_menu('site-menu',__( 'Site Menu'));
}
add_action('init', 'register_my_menu');

/* get file path for anything */
function getFile($path) {
	return dirname(__FILE__) . '/' . $path;
}

/* get file path for component */
function getComponent($path) {
  include( dirname(__FILE__) . '/templates/components/' . $path . '.php' );
}

/* get file path for template */
function getPageTemplate($path) {
  include( dirname(__FILE__) . '/templates/pages/' . $path . '.php' );
}


// register ACF blocks

add_action( 'init', 'register_acf_blocks' );

function register_acf_blocks() {
	register_block_type( __DIR__ . '/blocks/sample-block' );
}


// Adding a new (custom) block category and show that category at the top

// function add_structure_category( $categories, $post ) {
// 	array_unshift( $categories, array(
// 		'slug'	=> 'structure',
// 		'title' => 'Page structure'
// 	) );
// 	return $categories;
// }
// add_filter( 'block_categories_all', 'add_structure_category', 15, 2);
//                                                    priority ^ (meaning the order it displays)

// function add_modules_category( $categories, $post ) {
// 	array_unshift( $categories, array(
// 		'slug'	=> 'modules',
// 		'title' => 'Modules'
// 	) );
// 	return $categories;
// }
// add_filter( 'block_categories_all', 'add_modules_category', 10, 2);



/**
 * MyFirstTheme's functions and definitions
 *
 * @package MyFirstTheme
 * @since MyFirstTheme 1.0
 */

/**
 * First, let's set the maximum content width based on the theme's
 * design and stylesheet.
 * This will limit the width of all uploaded images and embeds.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 800; /* pixels */
}


if ( ! function_exists( 'myfirsttheme_setup' ) ) :

	/**
	 * Sets up theme defaults and registers support for various
	 * WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme
	 * hook, which runs before the init hook. The init hook is too late
	 * for some features, such as indicating support post thumbnails.
	 */
	function myfirsttheme_setup() {

		/**
		 * Make theme available for translation.
		 * Translations can be placed in the /languages/ directory.
		 */
		load_theme_textdomain( 'myfirsttheme', get_template_directory() . '/languages' );

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
			'primary'   => __( 'Primary Menu', 'myfirsttheme' ),
			'secondary' => __( 'Secondary Menu', 'myfirsttheme' ),
		) );

		/**
		 * Enable support for the following post formats:
		 * aside, gallery, quote, image, and video
		 */
		add_theme_support( 'post-formats', array( 'aside', 'gallery', 'quote', 'image', 'video' ) );
	}
endif; // myfirsttheme_setup
add_action( 'after_setup_theme', 'myfirsttheme_setup' );






?>