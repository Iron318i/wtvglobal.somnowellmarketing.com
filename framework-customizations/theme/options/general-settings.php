<?php

if (!defined('FW')) {
    die('Forbidden');
}

$options = array(
    'general' => array(
	'title' => __('General', 'unyson'),
	'type' => 'tab',
	'options' => array(
	    'team-box' => array(
		'title' => __('Our Team', 'wtvglobal'),
		'type' => 'box',
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
	    ),
	    'conversation-box' => array(
		'title' => __('Start a conversation', 'wtvglobal'),
		'type' => 'box',
		'options' => array(
		    'salesforce' => array(
			'type' => 'textarea',
			'label' => __('Form Code', 'fw'),
		    ),
		    'calendly' => array(
			'type' => 'textarea',
			'label' => __('Calendly inline widget', 'fw'),
		    ),
		)
	    ),
	    'gtm-box' => array(
		'title' => __('Google Tag Manager', 'wtvglobal'),
		'type' => 'box',
		'options' => array(
		    'is_gtm' => array(
			'label' => __('Enable', 'wtvglobal'),
			'type' => 'switch',
		    ),
		    'gtm_head' => array(
			'type' => 'textarea',
			'label' => __('Head Code', 'fw'),
		    ),
		    'gtm_body' => array(
			'type' => 'textarea',
			'label' => __('Body Code', 'fw'),
		    ),
		)
	    ),
	)
    )
);
