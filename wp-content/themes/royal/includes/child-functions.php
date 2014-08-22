<?php
function klasik_child_styles() {
	if (!is_admin()) {
		/********** STYLE CONFIGURATION *************/
		wp_deregister_style('googleFonts');
		wp_register_style('googleFonts', 'http://fonts.googleapis.com/css?family=Roboto+Condensed:300,400,700|Open+Sans:400,700');
		wp_enqueue_style( 'googleFonts');
		
		wp_register_style('camera-css', get_stylesheet_directory_uri().'/css/camera.css', '', '', 'screen, all');
		wp_enqueue_style( 'camera-css');
		
		wp_deregister_style( 'flexslider-css');
		wp_register_style('flexslider-css', get_stylesheet_directory_uri().'/css/flexslider.css', '', '', 'screen, all');
		wp_enqueue_style( 'flexslider-css');
		
		/********** SCRIPT CONFIGURATION *************/
		wp_register_script('camerajs', get_stylesheet_directory_uri().'/js/camera.min.js', array('jquery'), '1.3.3', true);
		wp_enqueue_script('camerajs');
		
		wp_dequeue_script('jquicksand');
		wp_register_script('jisotope', get_stylesheet_directory_uri().'/js/jquery.isotope.min.js', array('jquery'), '1.5.19', true);
		wp_enqueue_script('jisotope');
		
		wp_enqueue_script('jcustom');
		
	}
}
add_action('init', 'klasik_child_styles');

/********** IMAGE CONFIGURATION *************/
function klasik_child_setup() {
	
	add_image_size( 'image-slider', 1170, 450, true ); // Slider
	add_image_size( 'image-blog', 690, 230, true ); // blog
	add_image_size( 'widget-portfolio', 430, 271, true ); //portfolio
	add_image_size( 'widget-advancedpost', 430, 271, true );
	add_image_size( 'widget-post', 60, 60, true );
	add_image_size( 'widget-feature', 130, 78, true );
	add_image_size( 'widget-advancedpost', 230, 90, true );
	add_image_size( 'widget-team', 430, 279, true ); 
	

	remove_action("klasik_foot","klasik_print_js_quicksand",4);
	remove_action("klasik_foot","klasik_print_js_carousel",2);
}

add_action( 'after_setup_theme', 'klasik_child_setup' );

/********** SIDEBAR CONFIGURATION *************/
function klasik_custom_sidebar_init(){

	register_sidebar( array(
		'name' 				=> __( 'Post Sidebar', 'klasik' ),
		'id' 				=> 'post-sidebar',
		'description' 		=> __( 'Located at the left/right side of archives, single and search.', 'klasik' ),
		'before_widget' 	=> '<ul><li id="%1$s" class="widget-container %2$s">',
		'after_widget' 		=> '<div class="clear"></div></li></ul><div class="clear"></div>',
		'before_title' 		=> '<h3 class="widget-title">',
		'after_title' 			=> '</h3>',
	));	
	
	register_sidebar(array(
		'name'          => __('Content Top', 'klasik' ),
		'id'         	=> 'contenttop',
		'description'   => __( 'Located at the top of the content.', 'klasik' ),
		'before_widget' => '<div class="widget-contenttop"><ul><li id="%1$s" class="widget-container %2$s">',
		'after_widget' 	=> '<div class="clear"></div></li></ul><div class="clear"></div></div>',
		'before_title' 	=> '<h3 class="widget-title">',
		'after_title' 	=> '</h3>',
	));
	
	register_sidebar(array(
		'name'          => __('Content Bottom', 'klasik' ),
		'id'         	=> 'contentbottom',
		'description'   => __( 'Located at the bottom of the content.', 'klasik' ),
		'before_widget' => '<div class="widget-contentbottom"><ul><li id="%1$s" class="widget-container %2$s">',
		'after_widget' 	=> '<div class="clear"></div></li></ul><div class="clear"></div></div>',
		'before_title' 	=> '<h3 class="widget-title">',
		'after_title' 	=> '</h3>',
	));
	
	register_sidebar(array(
		'name'          => __('Main Top', 'klasik' ),
		'id'         	=> 'maintop',
		'description'   => __( 'Located at the top of the content.', 'klasik' ),
		'before_widget' => '<div class="widget-maintop"><ul><li id="%1$s" class="widget-container %2$s">',
		'after_widget' 	=> '<div class="clear"></div></li></ul><div class="clear"></div></div>',
		'before_title' 	=> '<h3 class="widget-title">',
		'after_title' 	=> '</h3>',
	));
	
	register_sidebar(array(
		'name'          => __('Main Bottom', 'klasik' ),
		'id'         	=> 'mainbottom',
		'description'   => __( 'Located at the bottom of the content.', 'klasik' ),
		'before_widget' => '<div class="widget-mainbottom"><ul><li id="%1$s" class="widget-container %2$s">',
		'after_widget' 	=> '<div class="clear"></div></li></ul><div class="clear"></div></div>',
		'before_title' 	=> '<h3 class="widget-title">',
		'after_title' 	=> '</h3>',
	));
	
	register_sidebar(array(
		'name'          => __('Bottom', 'klasik' ),
		'id'         	=> 'bottom',
		'description'   => __( 'Located at the bottom of the content.', 'klasik' ),
		'before_widget' => '<div class="widget-bottom"><ul><li id="%1$s" class="widget-container %2$s">',
		'after_widget' 	=> '<div class="clear"></div></li></ul><div class="clear"></div></div>',
		'before_title' 	=> '<h3 class="widget-title">',
		'after_title' 	=> '</h3>',
	));

}
add_action( 'widgets_init', 'klasik_custom_sidebar_init' );

// =============================== Child Theme Options ===============================
function klasik_child_options($val, $attr = '', $content = null){
	
	$shortname = 'klasik';
	
	$options = $val;
	$options[] = array( 'name' => __('Styles', 'klasik'),
		'type' => 'heading');
		
	$options[] = array( 'name' => __('Your Own Background', 'templatesquare'),
		'desc' => __('You can set your own background for your theme from here. It will overwrite the default theme background', 'templatesquare'),
		'id' => $shortname."_bgtheme",
		'std' => array(
			'color' => '',
			'image' => '',
			'repeat' => '',
			'position' => '',
			'attachment' => ''
		),
		'type' => 'background');
	
	return $options;
	
}
add_filter('klasik_optionsframework_options', 'klasik_child_options');

if(!function_exists("klasik_child_colorcss")){
	
	function klasik_child_colorcss(){

		$optBGTheme = klasik_get_option( 'klasik_bgtheme');
		
		$optBGThemeColor = '';
		$optBGThemeImage = '';
		$optBGThemePosition = 'top center';
		$optBGThemeStyle = 'repeat';
		$optBGThemeAttachment = 'scroll';
		
		if($optBGTheme['color']!="" || $optBGTheme['image']!=""){
			$optBGThemeColor = $optBGTheme['color'];
			$optBGThemeImage = $optBGTheme['image'];
			$optBGThemePosition = $optBGTheme['position'];
			$optBGThemeStyle = $optBGTheme['repeat'];
			$optBGThemeAttachment = $optBGTheme['attachment'];
		}
		?>
        
        <?php if($optBGThemeImage!="" || $optBGThemeColor!=""){?>
		<style type="text/css" media="screen">
        body{
            background-color:<?php echo $optBGThemeColor ; ?>;
            background-image:url(<?php echo $optBGThemeImage ; ?>);
            background-repeat:<?php echo $optBGThemeStyle ; ?>;
            background-position: <?php echo $optBGThemePosition; ?>;
            background-attachment: <?php echo $optBGThemeAttachment ; ?>;
            
        }
        </style>
        <?php } ?>
		
     
 

		<?php
        
	}
	add_action("klasik_head","klasik_child_colorcss",9);
}



// =============================== Klasik Advanced Pos widget ======================================
function klasik_child_advancedpost_item_template1($val, $content=''){
	$tpl ='<div id="advpost-%%ID%%" class="tpl1 %%CLASS%% %%FORMAT%%">';
		$tpl .='<div class="recent-item">';
				$tpl .= '<div class="recent-cat">%%CATEGORY%%</div>';
			
					$tpl .= '<h3 class="recent-title"><a href="%%LINK%%">%%TITLE%%</a></h3>';
					$tpl .= '<div class="recent-thumb">%%THUMB%%</div>';
					$tpl .='<div class="recent-text">%%TEXT%%</div>';

					$tpl .='<div class="clear"></div>';
				
		$tpl .='</div>';
	$tpl .='</div>';
	return $tpl;
}

add_filter('klasik_advancedpost_item_template1', 'klasik_child_advancedpost_item_template1',2);

function klasik_child_advancedpost_item_template2($val, $content=''){
	$tpl2 ='<div id="advpost-%%ID%%" class="tpl1 %%CLASS%% %%FORMAT%%">';
		$tpl2 .='<div class="recent-item">';
	
				$tpl2 .= '<div class="recent-cat">%%CATEGORY%%</div>';

					$tpl2 .= '<h3 class="recent-title"><a href="%%LINK%%">%%TITLE%%</a></h3>';
					$tpl2 .= '<div class="recent-thumb">%%THUMB%%</div>';
					$tpl2 .='<div class="recent-text">%%TEXT%%</div>';

					$tpl2 .='<div class="clear"></div>';
		
	
		$tpl2 .='</div>';
	$tpl2 .='</div>';
	return $tpl2;
}

add_filter('klasik_advancedpost_item_template2', 'klasik_child_advancedpost_item_template2',2);

// =============================== Klasik Portfolio widget ======================================
function klasik_child_pfilter_item_template($val, $content=''){
	$tpl  = '<div data-id="id-%%ID%%" class="%%CLASS%%" data-type="%%KEY%%">';
	
		$tpl .= '<div class="klasik-pf-img"><div class="shadowBottom">';
			$tpl .= '<a class="pfzoom" href="%%FULLIMG%%" data-rel=prettyPhoto[mixed] title="%%FULLIMGTITLE%%"><span class="rollover"></span>%%THUMB%%</a>';
			$tpl .= '<div class="clear"></div>';
		$tpl .= '</div></div>';
		
		$tpl .= '<div class="klasik-pf-text">';
			$tpl .='<h3 class="pftitle"><a href="%%LINK%%" title="%%TITLE%%">';
				$tpl .='<span>%%TITLE%%</span>';
			$tpl .='</a></h3>';
			$tpl .='<div class="textcontainer">%%TEXT%%</div>';
			$tpl .='<div class="button-link"><a href="%%LINK%%" class="more-link">'.__('Read More','klasik').'</a></div>';
		$tpl .= '</div>';
		$tpl .= '<div class="clear"></div>';
	$tpl .= '</div>';
	return $tpl;
}

add_filter('klasik_pfilter_item_template', 'klasik_child_pfilter_item_template');

// =============================== Klasik Features widget ======================================
function klasik_child_features_item_template($val, $content=''){
	$tpl = '<div class="%%CLASS%%" id="f-%%ID%%">';
		$tpl .= '<div class="item-container">';
			$tpl .= '<div class="img-container">%%THUMB%%</div>';
			$tpl .='<div class="recent-text-wrap">';
				$tpl .= '<h3 class="feature-title">%%TITLE%%</h3>';
				$tpl .= '<div class="feature-text">%%TEXT%%</div>';
				$tpl .='<div class="clear"></div>';
			$tpl .='</div>';
		$tpl .='<div class="clear"></div>';
		$tpl .='</div>';
	$tpl .= '</div>';
	return $tpl;
}

add_filter('klasik_features_item_template', 'klasik_child_features_item_template',2);

// =============================== Klasik Testimonials widget ======================================
function klasik_child_testimonials_item_template($val, $content=''){
	$tpl = '<div id="testi-%%ID%%" class="%%CLASS%%">
			<div class="testi-quote"> 
				 %%TEXT%% 
				 <div class="testi-arrow"></div>
			</div>
			
			<div class="testi-thumb">%%THUMB%% </div>
			<div class="testi-name">
				<div class="testi-title">%%TITLE%%</div>
				<div class="testi-tag">%%TAG%%</div>
			</div>
			<div class="clear"></div>
			</div>';
			
	return $tpl;
}

add_filter('klasik_testimonials_item_template', 'klasik_child_testimonials_item_template',2);