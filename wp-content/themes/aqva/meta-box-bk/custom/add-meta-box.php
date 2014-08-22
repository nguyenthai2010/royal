<?php
$prefix = 'tt_';
global $meta_boxes;
$meta_boxes = array();

$meta_boxes[] =array(
   'id'=>'gallery_image',
   'title'=>'Image',
   'pages'=>array('gallery'),
   'context' => 'normal',
   'priority' => 'high',
   'fields' => array(
   		array(
			'name'             => 'Thump (430*271)',
			'id'               => "{$prefix}libary_image_gallery_thump",
			'type'             => 'plupload_image',
			'max_file_uploads' => 1,
		),
		
		array(
			'name'             => 'Large',
			'id'               => "{$prefix}libary_image_gallery_large",
			'type'             => 'plupload_image',
			'max_file_uploads' => 1,
		)
	 )
);

$meta_boxes[] =array(
   'id'=>'page_description',
   'title'=>'Description',
   'pages'=>array('page'),
   'context' => 'normal',
   'priority' => 'high',
   'fields' => array(
   		array(
			'name'             => '',
			'id'               => "{$prefix}page_description",
			'type'             => 'textarea_small',
			'max_file_uploads' => 1,
		)
	 )
);


/**
 * Register meta boxes
 *
 * @return void
 */
function register_meta_boxes()
{
	// Make sure there's no errors when the plugin is deactivated or during upgrade
	if ( !class_exists( 'RW_Meta_Box' ) )
		return;

	global $meta_boxes;
	foreach ( $meta_boxes as $meta_box )
	{
		new RW_Meta_Box( $meta_box );
	}
}
// Hook to 'admin_init' to make sure the meta box class is loaded before
// (in case using the meta box class in another plugin)
// This is also helpful for some conditionals like checking page template, categories, etc.
add_action( 'admin_init', 'register_meta_boxes' );
