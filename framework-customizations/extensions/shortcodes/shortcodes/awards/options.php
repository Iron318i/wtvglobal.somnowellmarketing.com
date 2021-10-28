<?php

if (!defined('FW')) {
    die('Forbidden');
}

$options = array(
    'awards' => array(
	'type' => 'addable-option',
	'label' => __('Awards', '{domain}'),
	'option' => array('type' => 'upload', 'images_only' => true),
	'add-button-text' => __('Add', '{domain}'),
	'sortable' => true,
    ),
);

