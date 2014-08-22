<?php
function klasik_child_setup() {
	remove_action( 'widgets_init', 'klasik_footer1_sidebar_init' );
	remove_action( 'widgets_init', 'klasik_footer2_sidebar_init' );
	remove_action( 'widgets_init', 'klasik_footer3_sidebar_init' );
	remove_action( 'widgets_init', 'klasik_footer4_sidebar_init' );
	
}

add_action( 'after_setup_theme', 'klasik_child_setup' );