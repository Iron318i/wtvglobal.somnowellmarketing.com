<?php

if (!defined('FW')) {
    die('Forbidden');
}

$options = array(
    'title' => array(
	'type' => 'text',
	'label' => __('Heading Title', 'fw'),
	'desc' => __('Write the heading title content', 'fw'),
    ),
    'subtitle' => array(
	'type' => 'text',
	'label' => __('Heading Subtitle', 'fw'),
	'desc' => __('Write the heading subtitle content', 'fw'),
    ),
    'heading' => array(
	'type' => 'select',
	'label' => __('Heading Size', 'fw'),
	'choices' => array(
	    'h1' => 'H1',
	    'h2' => 'H2',
	    'h3' => 'H3',
	    'h4' => 'H4',
	    'h5' => 'H5',
	    'h6' => 'H6',
	)
    ),
    'heading_color' => array(
	'type' => 'select',
	'label' => __('Heading Color', 'fw'),
	'choices' => array(
	    '' => '---',
	    'text-dark' => 'Dark',
	    'text-white' => 'White',
	    'text-cyan' => 'Cyan',
	)
    ),
    'heading_weight' => array(
	'type' => 'select',
	'label' => __('Font weight', 'fw'),
	'choices' => array(
	    '' => 'Bold',
	    'fw-semibold' => 'Semibold',
	    'fw-normal' => 'Normal',
	    'fw-light' => 'Light',
	)
    ),
    'margin_bottom' => array(
	'label' => __('Margin Bottom', 'fw'),
	'type' => 'slider',
	'value' => 1,
	'properties' => array(
	    'min' => 0,
	    'max' => 5,
	    'step' => 1, // Set slider step. Always > 0. Could be fractional.
	),
    ),
    'alignment' => array(
	'type' => 'select',
	'label' => __('Text alignment', 'fw'),
	'choices' => array(
	    'text-start' => 'Left',
	    'text-center' => 'Center',
	    'text-end' => 'Right',
	)
    ),
    'lines' => array(
	'type' => 'switch',
	'label' => __('Lines', 'fw'),
    ),
    'ttu' => array(
	'type' => 'switch',
	'label' => __('Uppercase', 'fw'),
    ),
    'mw' => array(
	'type' => 'text',
	'label' => __('Max Width', 'fw'),
	'desc' => __('Enter width in px', 'fw')
    ),
);
