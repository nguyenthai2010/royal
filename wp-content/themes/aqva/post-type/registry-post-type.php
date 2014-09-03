<?php
/*slider*/
add_action( 'init', 'register_custom_post_slider' );
function register_custom_post_slider() {	
	$news_label = array(
    'name' => _x('Slider', 'Slider'),
    'singular_name' => _x('slider', 'slider'),
    'add_new' => _x('Add New', 'Slider'),
    'add_new_item' => __('Add New'),
    'edit_item' => __('Edit '),
    'new_item' => __('Add New'),
    'all_items' => __('View All'),
    'view_item' => __('View'),
    'search_items' => __('Search'),
    'not_found' =>  __('Not Find'),
    'not_found_in_trash' => __('Not Find in Trash'), 
    'parent_item_colon' => '',
    'menu_name' => 'Slider'
  );
  $news= array(
    'labels' => $news_label,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true, 
    'show_in_menu' => true, 
   'show_in_nav_menus'=>true,
    'query_var' => true,
    'rewrite' =>  array('slug'=>'slider'),
    'capability_type' => 'post',
    'has_archive' => true, 
    'hierarchical' => false,
    'menu_position' => 5,  
    'menu_icon'	=> get_bloginfo('template_url').'/post-type/images/slider.jpg',
  	'taxonomies'		=> array(''),
    'supports' => array('title','editor','thumbnail', 'excerpt'),
    
  ); 
 register_post_type('Slider',$news);
}

/*gallery*/
add_action( 'init', 'register_custom_post_gallery' );
function register_custom_post_gallery() {	
	$news_label = array(
    'name' => _x('Gallery', 'Gallery'),
    'singular_name' => _x('gallery', 'gallery'),
    'add_new' => _x('Add New', 'Gallery'),
    'add_new_item' => __('Add New'),
    'edit_item' => __('Edit '),
    'new_item' => __('Add New'),
    'all_items' => __('View All'),
    'view_item' => __('View'),
    'search_items' => __('Search'),
    'not_found' =>  __('Not Find'),
    'not_found_in_trash' => __('Not Find in Trash'), 
    'parent_item_colon' => '',
    'menu_name' => 'Gallery'
  );
  $news= array(
    'labels' => $news_label,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true, 
    'show_in_menu' => true, 
   'show_in_nav_menus'=>true,
    'query_var' => true,
    'rewrite' =>  array('slug'=>'gallery'),
    'capability_type' => 'post',
    'has_archive' => true, 
    'hierarchical' => false,
    'menu_position' => 5,  
    'menu_icon'	=> get_bloginfo('template_url').'/post-type/images/gallery.png',
  	'taxonomies'		=> array(''),
    'supports' => array('title','editor','thumbnail', 'excerpt'),
    
  ); 
 register_post_type('Gallery',$news);
}

/*properties*/
add_action( 'init', 'register_custom_post_properties' );
function register_custom_post_properties() {	
	$news_label = array(
    'name' => _x('Properties', 'Properties'),
    'singular_name' => _x('properties', 'properties'),
    'add_new' => _x('Add New', 'Properties'),
    'add_new_item' => __('Add New'),
    'edit_item' => __('Edit '),
    'new_item' => __('Add New'),
    'all_items' => __('View All'),
    'view_item' => __('View'),
    'search_items' => __('Search'),
    'not_found' =>  __('Not Find'),
    'not_found_in_trash' => __('Not Find in Trash'), 
    'parent_item_colon' => '',
    'menu_name' => 'Properties'
  );
  $news= array(
    'labels' => $news_label,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true, 
    'show_in_menu' => true, 
   'show_in_nav_menus'=>true,
    'query_var' => true,
    'rewrite' =>  array('slug'=>'properties'),
    'capability_type' => 'post',
    'has_archive' => true, 
    'hierarchical' => false,
    'menu_position' => 5,  
    'menu_icon'	=> get_bloginfo('template_url').'/post-type/images/properties.jpg',
  	'taxonomies'		=> array(''),
    'supports' => array('title','editor','thumbnail', 'excerpt'),
    
  ); 
 register_post_type('Properties',$news);
}

/*facilities*/
add_action( 'init', 'register_custom_post_facilities' );
function register_custom_post_facilities() {	
	$news_label = array(
    'name' => _x('Facilities', 'Facilities'),
    'singular_name' => _x('facilities', 'facilities'),
    'add_new' => _x('Add New', 'Gallery'),
    'add_new_item' => __('Add New'),
    'edit_item' => __('Edit '),
    'new_item' => __('Add New'),
    'all_items' => __('View All'),
    'view_item' => __('View'),
    'search_items' => __('Search'),
    'not_found' =>  __('Not Find'),
    'not_found_in_trash' => __('Not Find in Trash'), 
    'parent_item_colon' => '',
    'menu_name' => 'Facilities'
  );
  $news= array(
    'labels' => $news_label,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true, 
    'show_in_menu' => true, 
   'show_in_nav_menus'=>true,
    'query_var' => true,
    'rewrite' =>  array('slug'=>'facilities'),
    'capability_type' => 'post',
    'has_archive' => true, 
    'hierarchical' => false,
    'menu_position' => 5,  
    'menu_icon'	=> get_bloginfo('template_url').'/post-type/images/facities.png',
  	'taxonomies'		=> array(''),
    'supports' => array('title','editor','thumbnail', 'excerpt'),
    
  ); 
 register_post_type('facilities',$news);
}

/*SPECIFICATIONS*/
add_action( 'init', 'register_custom_post_specifications' );
function register_custom_post_specifications() {	
	$news_label = array(
    'name' => _x('Specifications', 'Specifications'),
    'singular_name' => _x('specifications', 'specifications'),
    'add_new' => _x('Add New', 'Gallery'),
    'add_new_item' => __('Add New'),
    'edit_item' => __('Edit '),
    'new_item' => __('Add New'),
    'all_items' => __('View All'),
    'view_item' => __('View'),
    'search_items' => __('Search'),
    'not_found' =>  __('Not Find'),
    'not_found_in_trash' => __('Not Find in Trash'), 
    'parent_item_colon' => '',
    'menu_name' => 'Specifications'
  );
  $news= array(
    'labels' => $news_label,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true, 
    'show_in_menu' => true, 
   'show_in_nav_menus'=>true,
    'query_var' => true,
    'rewrite' =>  array('slug'=>'specifications'),
    'capability_type' => 'post',
    'has_archive' => true, 
    'hierarchical' => false,
    'menu_position' => 5,  
    'menu_icon'	=> get_bloginfo('template_url').'/post-type/images/specifications.png',
  	'taxonomies'		=> array(''),
    'supports' => array('title','editor','thumbnail', 'excerpt'),
    
  ); 
 register_post_type('specifications',$news);
}

/*REASON TO BUY*/
add_action( 'init', 'register_custom_post_reason_to_buy' );
function register_custom_post_reason_to_buy() {	
	$news_label = array(
    'name' => _x('Reason To Buy', 'Reasons To Buy'),
    'singular_name' => _x('Reason To Buy', 'Reasons To Buy'),
    'add_new' => _x('Add New', 'Reasons To Buy'),
    'add_new_item' => __('Add New'),
    'edit_item' => __('Edit '),
    'new_item' => __('Add New'),
    'all_items' => __('View All'),
    'view_item' => __('View'),
    'search_items' => __('Search'),
    'not_found' =>  __('Not Find'),
    'not_found_in_trash' => __('Not Find in Trash'), 
    'parent_item_colon' => '',
    'menu_name' => 'Reasons To Buy'
  );
  $news= array(
    'labels' => $news_label,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true, 
    'show_in_menu' => true, 
   'show_in_nav_menus'=>true,
    'query_var' => true,
    'rewrite' =>  array('slug'=>'reason-to-buy'),
    'capability_type' => 'post',
    'has_archive' => true, 
    'hierarchical' => false,
    'menu_position' => 5,  
    'menu_icon'	=> get_bloginfo('template_url').'/post-type/images/reasontobuy.png',
  	'taxonomies'		=> array(''),
    'supports' => array('title','editor','thumbnail', 'excerpt'),
    
  ); 
 register_post_type('reason-to-buy',$news);
}