<?php

add_action('init', 'register_wtvglobal_post_type');

function register_wtvglobal_post_type() {

    register_post_type('work', array(
	'labels' => array(
	    'name' => 'Works',
	    'singular_name' => 'Work',
	    'menu_name' => 'Works',
	    'all_items' => 'All Works',
	    'add_new' => 'Add Work',
	    'add_new_item' => 'Add New Work',
	    'edit' => 'Edit',
	    'edit_item' => 'Edit Work',
	    'new_item' => 'New Work',
	),
	'description' => '',
	'public' => true,
	'publicly_queryable' => true,
	'show_ui' => true,
	'show_in_rest' => false,
	'rest_base' => '',
	'show_in_menu' => true,
	'exclude_from_search' => false,
	'rewrite' => array('slug' => 'work', 'with_front' => false),
	'has_archive' => false,
	'capability_type' => 'post',
	'supports' => array('title', 'editor', 'thumbnail'),
	'hierarchical' => false,
	'query_var' => true
    ));

    register_post_type('job', array(
	'labels' => array(
	    'name' => 'Jobs',
	    'singular_name' => 'Job',
	    'menu_name' => 'Jobs',
	    'all_items' => 'All Jobs',
	    'add_new' => 'Add Job',
	    'add_new_item' => 'Add New Job',
	    'edit' => 'Edit',
	    'edit_item' => 'Edit Job',
	    'new_item' => 'New Job',
	),
	'description' => '',
	'public' => true,
	'publicly_queryable' => true,
	'show_ui' => true,
	'show_in_rest' => false,
	'rest_base' => '',
	'show_in_menu' => true,
	'exclude_from_search' => false,
	'rewrite' => array('slug' => 'jobs', 'with_front' => false),
	'capability_type' => 'post',
	'supports' => array('title', 'editor', 'excerpt', 'thumbnail'),
	'hierarchical' => false,
	'query_var' => true
    ));
}
