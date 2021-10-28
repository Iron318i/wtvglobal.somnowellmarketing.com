<?php

if (!defined('FW')) {
    die('Forbidden');
}

$options = array(
    'calendar' => array(
	'type' => 'addable-popup',
	'label' => __('Calendar', '{domain}'),
	'size' => 'large',
	'popup-options' => array(
	    'year' => array(
		'type' => 'text',
		'label' => __('Year', 'fw'),
	    ),
	    'content' => array(
		'type' => 'wp-editor',
		'label' => __('Text', 'fw'),
	    ),
	),
	'limit' => 0, // limit the number of boxes that can be added
	'add-button-text' => __('Add', '{domain}'),
	'sortable' => true,
	'template' => '{{- year }}', // box title
    ),
);

