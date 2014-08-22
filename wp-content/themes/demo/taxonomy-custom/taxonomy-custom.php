<?php
add_action( 'init', 'create_tax_slider');

// create two taxonomies, genres and writers for the post type "book"
function create_tax_slider() {
	// Add new taxonomy, make it hierarchical (like categories)
	$labels = array(
		'name'              => _x( 'Color', 'Color' ),
		'singular_name'     => _x( 'color', 'color' ),
		'search_items'      => __( 'Search color' ),
		'all_items'         => __( 'All color' ),
		'parent_item'       => __( 'Parent color' ),
		'parent_item_colon' => __( 'Parent color' ),
		'edit_item'         => __( 'Edit color' ),
		'update_item'       => __( 'Update color' ),
		'add_new_item'      => __( 'Add color' ),
		'new_item_name'     => __( 'Add color' ),
		'menu_name'         => __( 'Color Category' ),
	);

	$args = array(
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => false,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'color-tax' ),
	);

	register_taxonomy('color-tax', array( 'slider' ), $args );
}
