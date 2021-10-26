<?php

if (!defined('FW')) {
    die('Forbidden');
}

$options = array(
    'section_title' => array(
	'label' => __('Section Title', 'wtvglobal'),
	'type' => 'text',
    ),
    'is_fullwidth' => array(
	'label' => __('Full Width', 'wtvglobal'),
	'type' => 'switch',
    ),
    'type' => array(
	'label' => __('Wrapper Type', 'wtvglobal'),
	'type' => 'switch',
	'left-choice' => array(
	    'value' => 'section',
	    'label' => __('Section', '{domain}'),
	),
	'right-choice' => array(
	    'value' => 'div',
	    'label' => __('Div', '{domain}'),
	),
    ),
    'width' => array(
	'type' => 'select',
	'label' => __('Max Width', 'wtvglobal'),
	'choices' => array(
	    '' => '1600px',
	    'w-1440' => '1440px',
	)
    ),
    'justify_content' => array(
	'type' => 'select',
	'label' => __('Justify content', 'fw'),
	'choices' => array(
	    '' => '',
	    'justify-content-center' => 'Center',
	    'justify-content-end' => 'End',
	    'justify-content-around' => 'Around',
	    'justify-content-between' => 'Between',
	)
    ),
    'reverse' => array(
	'type' => 'select',
	'label' => __('Row reverse', 'wtvglobal'),
	'choices' => array(
	    '' => '---',
	    'flex-lg-row-reverse' => 'Up Large',
	    'flex-md-row-reverse' => 'Up Md',
	)
    ),
    'bgc' => array(
	'type' => 'select',
	'label' => __('Background Color', 'wtvglobal'),
	'choices' => array(
	    '' => 'None',
	    'bg-gray' => 'Gray',
	)
    ),
    'gutters' => array(
	'label' => __('Horizontal gutters', 'wtvglobal'),
	'type' => 'slider',
	'value' => 2,
	'properties' => array(
	    'min' => 0,
	    'max' => 5,
	    'step' => 1, // Set slider step. Always > 0. Could be fractional.
	),
    ),
    'padding_top' => array(
	'label' => __('Top Padding size', 'wtvglobal'),
	'type' => 'slider',
	'value' => 3,
	'properties' => array(
	    'min' => 0,
	    'max' => 5,
	    'step' => 1, // Set slider step. Always > 0. Could be fractional.
	),
    ),
    'padding_bottom' => array(
	'label' => __('Padding Bottom', 'wtvglobal'),
	'type' => 'slider',
	'value' => 3,
	'properties' => array(
	    'min' => 0,
	    'max' => 5,
	    'step' => 1, // Set slider step. Always > 0. Could be fractional.
	),
    ),
    'background_image' => array(
	'label' => __('Background Image', 'wtvglobal'),
	'desc' => __('Please select the background image', 'wtvglobal'),
	'type' => 'background-image',
	'choices' => array(//	in future may will set predefined images
	)
    ),
    'video' => array(
	'label' => __('Background Video', 'fw'),
	'desc' => __('Insert Video URL to embed this video', 'fw'),
	'type' => 'text',
    ),
    'is_shadow' => array(
	'label' => __('Shadow', 'wtvglobal'),
	'type' => 'switch',
    ),
    'custome_class' => array(
	'label' => __('Custome section class', 'wtvglobal'),
	'desc' => __('Insert Custome section class', 'wtvglobal'),
	'type' => 'text',
    ),
);
