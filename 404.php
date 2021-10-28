<?php

/**
 * The template for displaying 404 pages (not found)
 *
 * @package wtvglobal-theme
 */
// Exit if accessed directly.
defined('ABSPATH') || exit;

get_header();
$args = array(
    'posts_per_page' => 1,
    'post_type' => 'page',
    'page_id' => 821
);

$query = new WP_Query($args);

if ($query->have_posts()) {

    while ($query->have_posts()) {
	$query->the_post();
	the_content();
    }
}
get_footer();
