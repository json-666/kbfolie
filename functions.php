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
function setup():void
{
    /**
     * Add variable for global lorem ipsum. This stuff is displayed whenever block space has no content, and it should.
     *
     * @branch feature/eko
     */
    define('_LOREM', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed luctus malesuada elit, nec gravida risus sodales at. Praesent at mauris in leo bibendum efficitur sit amet sollicitudin massa. Nulla sit amet porta felis. Praesent ullamcorper sapien ex. Curabitur commodo, nulla molestie venenatis lobortis, arcu libero semper lectus, ut porta augue diam tempus nunc. In bibendum augue sed urna pellentesque malesuada. Integer fringilla consequat nulla, id gravida sapien tincidunt quis. Praesent non ex sed justo placerat accumsan ac ac arcu. Phasellus faucibus orci at diam tincidunt, quis vulputate lacus vehicula. Duis lacinia diam ex, quis hendrerit tellus sollicitudin id. Etiam in tincidunt sapien. Quisque eget neque aliquam, tristique arcu quis, sagittis enim.');
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
function scripts():void
{
	wp_enqueue_style('style', get_stylesheet_uri(), [], _VERSION);
	wp_enqueue_style('style-custom', get_template_directory_uri().'/assets/css/master.css', [], filemtime(get_template_directory().'/assets/css/master.css'));
	wp_enqueue_style('style-hamburger', get_template_directory_uri()."/node_modules/hamburgers/dist/hamburgers.css", [], _VERSION);

	wp_enqueue_script('swiper-js', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js');
}
add_action('wp_enqueue_scripts', 'scripts');

add_action('enqueue_block_assets', function () {
	wp_enqueue_style('style-custom', get_template_directory_uri().'/assets/css/master.css', [], filemtime(get_template_directory().'/assets/css/master.css'));
});

/**
 * Enable .svg files import
 */
function cc_mime_types($mimes):array
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

/**
 * Register cusotm posty type for Co możemy zapakować Pages
 *
 * @branch feature/co-zapakowac-pages
 * */
function kbf_add_co_mozemy_zapakowac_post_type() {

    register_post_type( 'cozapakowac',
        // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Co możemy zapakować' ),
                'singular_name' => __( 'Co możemy zapakować' )
            ),
            'menu_icon' => 'dashicons-format-aside',
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'co-pakujemy'),
            'show_in_rest' => true,
        )
    );
}
add_action( 'init', 'kbf_add_co_mozemy_zapakowac_post_type' );
add_post_type_support( 'cozapakowac', 'thumbnail' );

add_filter('show_admin_bar', '__return_false');

/**
 * disable wordpress images permalinks
 */
function remove_media_link( $form_fields, $post ) {

    unset( $form_fields['url'] );

    return $form_fields;

}

add_filter( 'attachment_fields_to_edit', 'remove_media_link', 10, 2 );