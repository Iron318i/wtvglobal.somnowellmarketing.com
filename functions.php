<?php

/**
 * wtvglobal-theme functions and definitions
 *
 * @package wtvglobal-theme
 */
// Exit if accessed directly.
defined('ABSPATH') || exit;

$wtvglobal_includes = array(
    '/theme-settings.php', // Initialize theme default settings.
    '/setup.php', // Theme setup and custom theme supports.
    '/enqueue.php', // Enqueue scripts and styles.
    '/template-tags.php', // Custom template tags for this theme.
    '/pagination.php', // Custom pagination for this theme.
    '/hooks.php', // Custom hooks.
    '/extras.php', // Custom functions that act independently of the theme templates.
    '/class-wp-bootstrap-navwalker.php', // Load custom WordPress nav walker.
    '/editor.php', // Load Editor functions.
    '/widgets.php',
    '/disable-comments.php',
    '/cpt.php'
);

foreach ($wtvglobal_includes as $file) {
    require_once get_template_directory() . '/inc' . $file;
}