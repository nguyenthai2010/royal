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

add_filter( 'cmb_meta_boxes', 'add_metaboxes_images_facility' );
function add_metaboxes_images_facility( $meta_boxes ) {
    $prefix = '_cmb_'; // Prefix for all fields
    $meta_boxes['facility_image'] = array(
        'id' => 'facility_image',
        'title' => 'Image',
        'pages' => array('facilities'), // post type
        'context' => 'normal',
        'priority' => 'high',
        'show_names' => false, // Show field names on the left
        'fields' => array(
			array(
                'name' => '',
                'desc' => '',
                'id' => $prefix . 'facility_image',
                'type' => 'file'
            )
        ),
    );

    return $meta_boxes;
}


function add_metaboxes_gallery( $meta_boxes ) {
    $prefix = '_cmb_'; // Prefix for all fields
    $meta_boxes['gallery_image'] = array(
        'id' => 'gallery_image',
        'title' => 'Image',
        'pages' => array('gallery'), // post type
        'context' => 'normal',
        'priority' => 'high',
        'show_names' => false, // Show field names on the left
        'fields' => array(
            array(
				'name' => __( 'Thump', 'cmb' ),
				'desc' => __( 'Upload an thump image or enter a URL.', 'cmb' ),
				'id'   => $prefix . 'gallery_image_thump',
				'type' => 'file'				
            ),
            array(
				'name' => __( 'Image', 'cmb' ),
				'desc' => __( 'Upload an large image or enter a URL.', 'cmb' ),
				'id'   => $prefix . 'gallery_image_large',
				'type' => 'file'				
            ),
        ),
    );

    return $meta_boxes;
}
add_filter( 'cmb_meta_boxes', 'add_metaboxes_gallery' );


function add_metaboxes_slider_selling( $meta_boxes ) {
    $prefix = '_cmb_'; // Prefix for all fields
    $meta_boxes['gallery_image'] = array(
        'id' => 'gallery_image',
        'title' => 'Image',
        'pages' => array('slider'), // post type
        'context' => 'normal',
        'priority' => 'high',
        'show_names' => false, // Show field names on the left
        'fields' => array(
            array(
				'name' => __( 'Selling', 'cmb' ),
				'desc' => __( 'Select selling.', 'cmb' ),
				'id'   => $prefix . 'selling_slider',
				'type' => 'checkbox'				
            )
        ),
    );

    return $meta_boxes;
}
add_filter( 'cmb_meta_boxes', 'add_metaboxes_slider_selling' );