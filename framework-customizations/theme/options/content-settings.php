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
	)
    )
);
