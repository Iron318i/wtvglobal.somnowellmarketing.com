<?php

if (!defined('FW')) {
    die('Forbidden');
}

$options = array(
    'features' => array(
	'type' => 'addable-popup',
	'label' => __('Features', '{domain}'),
	'size' => 'large',
	'popup-options' => array(
	    'image' => array(
		'type' => 'upload',
		'label' => __('Image', 'fw'),
	    ),
	    'heading' => array(
		'type' => 'text',
		'label' => __('Name', 'fw'),
	    ),
	),
	'limit' => 0, // limit the number of boxes that can be added
	'add-button-text' => __('Add', '{domain}'),
	'sortable' => true,
	'template' => '{{- heading }}', // box title
    ),
);

