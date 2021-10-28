<?php

if (!defined('FW')) {
    die('Forbidden');
}

$options = array(
    'platforms' => array(
	'type' => 'addable-popup',
	'label' => __('Our Partners', '{domain}'),
	'size' => 'large',
	'popup-options' => array(
	    'image' => array(
		'type' => 'upload',
		'label' => __('Image 360px or bigger', 'fw'),
		'desc' => __('Either upload a new, or choose an existing image from your media library', 'fw')
	    ),
	    'heading' => array(
		'type' => 'text',
		'label' => __('Heading', 'fw'),
	    ),
	    'content' => array(
		'type' => 'wp-editor',
		'label' => __('Text', 'fw'),
	    ),
	    'link' => array(
		'type' => 'text',
		'label' => __('Link', 'fw'),
	    ),
	),
	'limit' => 0, // limit the number of boxes that can be added
	'add-button-text' => __('Add', '{domain}'),
	'sortable' => true,
	'template' => '{{- heading }}', // box title
    ),
);

