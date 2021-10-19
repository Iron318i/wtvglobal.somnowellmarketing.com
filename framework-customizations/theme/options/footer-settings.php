<?php

if (!defined('FW')) {
    die('Forbidden');
}

$options = array(
    'footer' => array(
	'title' => __('Footer', 'unyson'),
	'type' => 'tab',
	'options' => array(
	    'header-box' => array(
		'title' => __('Cities', 'wtvglobal'),
		'type' => 'box',
		'options' => array(
		    'cities' => array(
			'type' => 'addable-popup',
			'label' => __('Cities', 'wtvglobal'),
			'size' => 'large',
			'popup-options' => array(
			    'image' => array(
				'type' => 'upload',
				'label' => __('Image 360px or bigger', 'fw'),
				'desc' => __('Either upload a new, or choose an existing image from your media library', 'fw')
			    ),
			    'heading' => array(
				'type' => 'text',
				'label' => __('Name', 'fw'),
			    ),
			    'phone' => array(
				'type' => 'text',
				'label' => __('Phone', 'fw'),
			    ),
			    'email' => array(
				'type' => 'text',
				'label' => __('Email', 'fw'),
			    ),
			),
			'limit' => 0, // limit the number of boxes that can be added
			'add-button-text' => __('Add', 'wtvglobal'),
			'sortable' => true,
			'template' => '{{- heading }}', // box title
		    ),
		)
	    ),
	    'logo-box' => array(
		'title' => __('Logo', 'wtvglobal'),
		'type' => 'box',
		'options' => array(
		    'footer_logo' => array(
			'type' => 'upload',
			'label' => __('Footer Logo', 'fw'),
		    )
		)
	    ),
	)
    )
);
