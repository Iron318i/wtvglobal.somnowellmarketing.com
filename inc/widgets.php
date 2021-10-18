<?php

/**
 * Declaring widgets
 *
 * @package wtvglobal-theme
 */
// Exit if accessed directly.
defined('ABSPATH') || exit;

add_action('widgets_init', 'wtvglobal_widgets_init');

if (!function_exists('wtvglobal_widgets_init')) {

    /**
     * Initializes themes widgets.
     */
    function wtvglobal_widgets_init() {
	register_sidebar(
		array(
		    'name' => __('Footer', 'wtvglobal'),
		    'id' => 'footer',
		    'before_widget' => '<div class="widget">',
		    'after_widget' => '</div>',
		    'before_title' => '<h4 class="widget-title">',
		    'after_title' => '</h4>',
		)
	);
	register_sidebar(
		array(
		    'name' => __('Single Post', 'loyaltybrokers'),
		    'id' => 'single-post',
		    'before_widget' => '<div class="widget">',
		    'after_widget' => '</div>',
		    'before_title' => '<h4 class="widget-title">',
		    'after_title' => '</h4>',
		)
	);
    }

} // End of function_exists( 'wtvglobal_widgets_init' ).
