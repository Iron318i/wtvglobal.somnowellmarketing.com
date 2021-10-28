<?php

if (!defined('FW')) {
    die('Forbidden');
}

$options = array(
    'cards' => array(
	'type' => 'addable-popup',
	'label' => __('Card', '{domain}'),
	'size' => 'large',
	'popup-options' => array(
	    'image' => array(
		'type' => 'upload',
		'label' => __('Image', 'fw'),
		'desc' => __('Either upload a new, or choose an existing image from your media library', 'fw')
	    ),
	    'heading' => array(
		'type' => 'text',
		'label' => __('Name', 'fw'),
	    ),
	    'descriprion' => array(
		'type' => 'textarea',
		'label' => __('Full Description', 'fw'),
	    ),
	),
	'limit' => 0, // limit the number of boxes that can be added
	'add-button-text' => __('Add', '{domain}'),
	'sortable' => true,
	'template' => '{{- heading }}', // box title
    ),
);

