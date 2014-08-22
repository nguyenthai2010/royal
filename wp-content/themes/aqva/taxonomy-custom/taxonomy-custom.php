<?php
add_action( 'init', 'create_tax_properties');

// create two taxonomies, genres and writers for the post type "book"
function create_tax_properties() {
	// Add new taxonomy, make it hierarchical (like categories)
	$labels = array(
		'name'              => _x( 'Properties', 'Properties' ),
		'singular_name'     => _x( 'properties', 'properties' ),
		'search_items'      => __( 'Search properties' ),
		'all_items'         => __( 'All properties' ),
		'parent_item'       => __( 'Parent properties' ),
		'parent_item_colon' => __( 'Parent properties' ),
		'edit_item'         => __( 'Edit properties' ),
		'update_item'       => __( 'Update properties' ),
		'add_new_item'      => __( 'Add properties' ),
		'new_item_name'     => __( 'Add properties' ),
		'menu_name'         => __( 'Category' ),
	);

	$args = array(
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => false,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'properties-tax' ),
	);

	register_taxonomy('properties-tax', array( 'properties' ), $args );
}
