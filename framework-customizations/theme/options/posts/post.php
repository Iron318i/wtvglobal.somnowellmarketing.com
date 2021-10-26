<?php

if (!defined('FW')) {
    die('Forbidden');
}
$options = array(
    'page-header' => array(
	'type' => 'box',
	'options' => array(
	    'header_image' => array(
		'type' => 'upload',
		'label' => __('Header Image ', 'fw'),
		'desc' => __('1920x400px', 'fw')
	    ),
	),
	'title' => __('Page Header', 'wtvglobal'),
	'attr' => array('class' => 'custom-class', 'data-foo' => 'bar'),
    ),
);
