<?php
/********** METABOXES CONFIGURATION *************/
global $meta_boxes;

$optarrange = array(
	'ASC' => 'Ascending',
	'DESC' => 'Descending'
);

$optcols = array(
	'2' => 'Two Columns',
	'3' => 'Three Columns',
	'4' => 'Four Columns',
	'5' => 'Five Columns',
	'6' => 'Six Columns'
);

$meta_boxes[] = array(
	'id' => 'page-option-meta-box',
	'title' => __('Page Settings','klasik'),
	'page' => 'page',
	'showbox' => 'meta_option_show_box',
	'context' => 'normal',
	'priority' => 'high',
	'fields' => array(
		array(
			'name' => __('Page Title','klasik'),
			'desc' => '<em>'.__('Enter your custom page title to show on heading.','klasik').'</em>',
			'id' => 'page-title',
			'type' => 'text',
			'std' => ''
		),
		array(
			'name' => __('Page Description','klasik'),
			'desc' => '<em>'.__('Enter your custom page description to show on heading.','klasik').'</em>',
			'id' => 'page-desc',
			'type' => 'text',
			'std' => ''
		)
	)
);