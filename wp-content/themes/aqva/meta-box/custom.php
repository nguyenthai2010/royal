<?php
function add_metaboxes_page( $meta_boxes ) {
    $prefix = '_cmb_'; // Prefix for all fields
    $meta_boxes['page_description'] = array(
        'id' => 'page_description',
        'title' => 'Description',
        'pages' => array('page'), // post type
        'context' => 'normal',
        'priority' => 'high',
        'show_names' => false, // Show field names on the left
        'fields' => array(
            array(
                'name' => '',
                'desc' => '',
                'id' => $prefix . 'page_description_text',
                'type' => 'wysiwyg'
            ),
        ),
    );

    return $meta_boxes;
}
add_filter( 'cmb_meta_boxes', 'add_metaboxes_properties' );


function add_metaboxes_properties( $meta_boxes ) {
    $prefix = '_cmb_'; // Prefix for all fields
    $meta_boxes['properties_image'] = array(
        'id' => 'properties_image',
        'title' => 'Image',
        'pages' => array('properties'), // post type
        'context' => 'normal',
        'priority' => 'high',
        'show_names' => false, // Show field names on the left
        'fields' => array(
			array(
                'name' => '',
                'desc' => '',
                'id' => $prefix . 'properties_description_text',
                'type' => 'wysiwyg'
            ),		
            array(
				'name' => __( 'Image', 'cmb' ),
				'desc' => __( 'Upload an image or enter a URL.', 'cmb' ),
				'id'   => $prefix . 'properties_image',
				'type' => 'file'				
            ),
        ),
    );

    return $meta_boxes;
}
add_filter( 'cmb_meta_boxes', 'add_metaboxes_page' );


