<?php
	
	//register menu
	function register_my_menu() {
	  register_nav_menu('menu_top',__( 'menu_top' ));
	}
	add_action( 'init', 'register_my_menu' );
	
	//add theme support
	add_theme_support('post-thumbnails',array('post','slider'));
	
	//register post-type
	include 'post-type/registry-post-type.php';
	
	//register taxonomy
	include 'taxonomy-custom/taxonomy-custom.php';