<?php
/**
 * functions and definitions
 *
 *
 * @author M&J
 * @version 1.0.0
 * @package kbfolie
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 */

//require __DIR__ . '/includes/functions.php';

if (! defined('_VERSION')) {
	define('_VERSION', '1.0.0');
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function setup()
{
	/**
	 * Let WordPress manage the document title.
	 */
	add_theme_support('title-tag');

	/**
	 * Enable WP Post Thumbnails
	 */
	add_theme_support('post-thumbnails');

	// This theme uses wp_nav_menu() in multiple location.
	register_nav_menus(
		array(
			'menu-primary' => esc_html__('Menu Główne'),
		)
	);

	/**
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 162,
			'width'       => 162,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action('after_setup_theme', 'setup');


/**
 * Enqueue scripts and styles.
 */
function scripts()
{
	wp_enqueue_style('style', get_stylesheet_uri(), [], _VERSION);
	wp_enqueue_style('style-custom', get_template_directory_uri().'/assets/css/master.css', [], filemtime(get_template_directory().'/assets/css/master.css'));
	wp_enqueue_style('style-hamburger', get_template_directory_uri()."/node_modules/hamburgers/dist/hamburgers.css", [], _VERSION);

	wp_enqueue_script('swiper-js', get_template_directory_uri() . '/node_modules/swiper/swiper.js');
}
add_action('wp_enqueue_scripts', 'scripts');

function load_custom_wp_admin_style(){
	wp_enqueue_style('style-custom', get_template_directory_uri().'/assets/css/master.css', [], filemtime(get_template_directory().'/assets/css/master.css'));
}
add_action('admin_enqueue_scripts', 'load_custom_wp_admin_style');


/**
 * Enable .svg files import
 */
function cc_mime_types($mimes)
{
	$mimes['svg'] = 'image/svg+xml';
	return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');


/**
 * Register custom blocks category
 */
add_filter('block_categories_all', function ($categories) {
	$categories[] = array(
		'slug'  => 'kbfolie',
		'title' => 'Bloki motywu KBFolie'
	);
	return $categories;
});

/**
 * Autoregister blocks
 */
$block_json_files = glob(get_template_directory() . '/blocks/**/block.json');
foreach ($block_json_files as $block_json_file) {
	register_block_type($block_json_file);
}
