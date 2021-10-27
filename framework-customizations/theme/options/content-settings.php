<?php

if (!defined('FW')) {
    die('Forbidden');
}

$options = array(
    'content' => array(
	'title' => __('Content', 'unyson'),
	'type' => 'tab',
	'options' => array(
	    'partners-box' => array(
		'title' => __('Partners', 'wtvglobal'),
		'type' => 'box',
		'options' => array(
		    'partners' => array(
			'type' => 'addable-popup',
			'label' => __('Our Partners', '{domain}'),
			'size' => 'large',
			'popup-options' => array(
			    'image' => array(
				'type' => 'upload',
				'label' => __('Image 270px or bigger', 'fw'),
				'desc' => __('Either upload a new, or choose an existing image from your media library', 'fw')
			    ),
			    'heading' => array(
				'type' => 'text',
				'label' => __('Name', 'fw'),
			    ),
			    'partner_text' => array(
				'type' => 'wp-editor',
				'label' => __('Text', 'fw'),
			    ),
			),
			'limit' => 0, // limit the number of boxes that can be added
			'add-button-text' => __('Add', '{domain}'),
			'sortable' => true,
			'template' => '{{- heading }}', // box title
		    ),
		)
	    ),
	    'products-box' => array(
		'title' => __('Products', 'wtvglobal'),
		'type' => 'box',
		'options' => array(
		    'products' => array(
			'type' => 'addable-popup',
			'label' => __('Our products', '{domain}'),
			'size' => 'large',
			'popup-options' => array(
			    'image' => array(
				'type' => 'upload',
				'label' => __('Image 480x286px or bigger', 'fw'),
				'desc' => __('Either upload a new, or choose an existing image from your media library', 'fw')
			    ),
			    'link' => array(
				'type' => 'text',
				'label' => __('Link', 'fw'),
			    ),
			),
			'limit' => 0, // limit the number of boxes that can be added
			'add-button-text' => __('Add', '{domain}'),
			'sortable' => true,
		    ),
		)
	    ),
	    'testimonials-box' => array(
		'title' => __('Testimonials', 'wtvglobal'),
		'type' => 'box',
		'options' => array(
		    'testimonials' => array(
			'type' => 'addable-popup',
			'label' => __('Our clients say', '{domain}'),
			'size' => 'large',
			'popup-options' => array(
			    'quote_text' => array(
				'type' => 'wp-editor',
				'label' => __('Quote', 'fw'),
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
		)
	    ),
	    'logos-box' => array(
		'title' => __('Logos', 'wtvglobal'),
		'type' => 'box',
		'options' => array(
		    'logos' => array(
			'type' => 'multi-upload',
			'label' => __('Logos', '{domain}'),
			'images_only' => true,
		    ),
		)
	    ),
	    'metrics-box' => array(
		'title' => __('Data & metrics', 'wtvglobal'),
		'type' => 'box',
		'options' => array(
		    'metrics' => array(
			'type' => 'addable-popup',
			'label' => __('Metrics', '{domain}'),
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
		)
	    ),
	)
    )
);
