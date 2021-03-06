<?php

/**
 * Theme basic setup
 *
 * @package wtvglobal-theme
 */
// Exit if accessed directly.
defined('ABSPATH') || exit;

add_action('after_setup_theme', 'wtvglobal_setup');

if (!function_exists('wtvglobal_setup')) {

    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     */
    function wtvglobal_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on wtvglobal, use a find and replace
	 * to change 'wtvglobal' to the name of your theme in all the template files
	 */
	load_theme_textdomain('wtvglobal', get_template_directory() . '/languages');

	// Add default posts and comments RSS feed links to head.
	add_theme_support('automatic-feed-links');

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support('title-tag');

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
		    'primary' => __('Primary Menu', 'wtvglobal'),
		    'privacy' => __('Privacy Menu', 'wtvglobal'),
		    'footer' => __('Footer Menu', 'wtvglobal')
		)
	);

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support(
		'html5', array(
	    'search-form',
	    'comment-form',
	    'comment-list',
	    'gallery',
	    'caption',
	    'script',
	    'style',
		)
	);

	/*
	 * Adding Thumbnail basic support
	 */
	add_theme_support('post-thumbnails');

	/*
	 * Adding support for Widget edit icons in customizer
	 */
	add_theme_support('customize-selective-refresh-widgets');


	// Add support for responsive embedded content.
	add_theme_support('responsive-embeds');

	// Check and setup theme default settings.
	wtvglobal_setup_theme_default_settings();
    }

}


add_filter('excerpt_more', 'wtvglobal_custom_excerpt_more');

if (!function_exists('wtvglobal_custom_excerpt_more')) {

    /**
     * Removes the ... from the excerpt read more link
     *
     * @param string $more The excerpt.
     *
     * @return string
     */
    function wtvglobal_custom_excerpt_more($more) {
	if (!is_admin()) {
	    $more = '...';
	}
	return $more;
    }

}

//add_filter('wp_trim_excerpt', 'wtvglobal_all_excerpts_get_more_link');

if (!function_exists('wtvglobal_all_excerpts_get_more_link')) {

    /**
     * Adds a custom read more link to all excerpts, manually or automatically generated
     *
     * @param string $post_excerpt Posts's excerpt.
     *
     * @return string
     */
    function wtvglobal_all_excerpts_get_more_link($post_excerpt) {
	if (!is_admin()) {
	    $post_excerpt = $post_excerpt . '<p><a class="btn btn-sm btn-primary" href="' . esc_url(get_permalink(get_the_ID())) . '">' . __('Read More...', 'wtvglobal') . '</a></p>';
	}
	return $post_excerpt;
    }

}

// Disables the block editor from managing widgets in the Gutenberg plugin.
add_filter('gutenberg_use_widgets_block_editor', '__return_false');
// Disables the block editor from managing widgets.
add_filter('use_widgets_block_editor', '__return_false');


add_image_size('person', 110, 110, array('center', 'center'));
