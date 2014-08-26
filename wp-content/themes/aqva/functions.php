<?php
	//register menu
	function register_menu() {
	  register_nav_menu('menu_top',__( 'menu_top' ));
	  
		register_nav_menus( array(
			'menu_top' => 'Header - Menu',
			'footer_col1' => 'Footer - Column 1',
			'footer_col2' => 'Footer - Column 2'
		) );
	  
	}
	add_action( 'init', 'register_menu' );
	
	//add theme support
	add_theme_support('post-thumbnails',array('post','page','slider','facilities'));

	//register meta box
	// Initialize the metabox class
	add_action( 'init', 'be_initialize_cmb_meta_boxes', 9999 );
	function be_initialize_cmb_meta_boxes() {
		if ( !class_exists( 'cmb_Meta_Box' ) ) {
			require_once( 'meta-box/init.php' );
		}
	}	
	
	require_once( 'meta-box/custom.php' );
	
	//register post type
	include TEMPLATEPATH.'/post-type/registry-post-type.php';

	//register taxonomy
	include 'taxonomy-custom/taxonomy-custom.php';
	
	//options
	include 'inc/theme_options.php';