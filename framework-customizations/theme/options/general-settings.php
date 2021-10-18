<?php

if (!defined('FW')) {
    die('Forbidden');
}

$options = array(
    'general' => array(
	'title' => __('General', 'unyson'),
	'type' => 'tab',
	'options' => array(
	    'persons' => array(
		'type' => 'addable-popup',
		'label' => __('Our Team', '{domain}'),
		'size' => 'large',
		'popup-options' => array(
		    'image' => array(
			'type' => 'upload',
			'label' => __('Image 110x110 px or bigger', 'fw'),
			'desc' => __('Either upload a new, or choose an existing image from your media library', 'fw')
		    ),
		    'heading' => array(
			'type' => 'text',
			'label' => __('Name', 'fw'),
		    ),
		    'position' => array(
			'type' => 'text',
			'label' => __('Position', 'fw'),
		    ),
		    'email' => array(
			'type' => 'text',
			'label' => __('Email', 'fw'),
		    ),
		    'division' => array(
			'type' => 'text',
			'label' => __('Division', 'fw'),
		    ),
		),
		'limit' => 0, // limit the number of boxes that can be added
		'add-button-text' => __('Add', '{domain}'),
		'sortable' => true,
		'template' => '{{- heading }}', // box title
	    ),
	)
    )
);
