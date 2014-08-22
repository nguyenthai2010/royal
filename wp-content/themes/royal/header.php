<?php
/**
 * The Header for our theme.
 *
 *
 * @package WordPress
 * @subpackage Royal
 * @since Royal 1.0
 */
?><!DOCTYPE html>
<!--[if IE 6]>
<html id="ie6" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 7]>
<html id="ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html id="ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title><?php klasik_document_title(); ?></title>
<?php $bodyclass = "klasikt"; ?>
<link rel="alternate" id="templateurl" href="<?php echo get_template_directory_uri(); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<?php 
	$disableResponsive = klasik_get_option( 'klasik_disable_responsive' ,'');
	if($disableResponsive!='1'){
?>
<!-- Mobile Specific Metas
  ================================================== -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<?php
	}
?>

<script>
  document.createElement('header');
  document.createElement('section');
  document.createElement('article');
  document.createElement('aside');
  document.createElement('nav');
  document.createElement('footer');
</script>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<?php

/* We add some JavaScript to pages with the comment form
 * to support sites with threaded comments (when in use).
 */
if ( is_singular() && get_option( 'thread_comments' ) )
	wp_enqueue_script( 'comment-reply' );

/* Always have wp_head() just before the closing </head>
 * tag of your theme, or you will break many plugins, which
 * generally use this hook to add elements to <head> such
 * as styles, scripts, and meta tags.
 */
wp_head();
?>
</head>

<body <?php body_class($bodyclass); ?>>

<?php $disableSlider = klasik_get_option( 'klasik_disable_slider' ,'');?>
<div id="bodychild">
	<div id="outercontainer">
    
        <!-- HEADER -->
        <div id="outerheader">
        	<div id="headercontainer">
                <div class="container">
                    <header id="header">
                        <div class="row">
                        	<div class="twelve columns">
                            	<div class="header-wrap">
                                    <div id="logo"><?php klasik_logo();?></div>
                                    <div class="clear"></div>
        
                                    <section id="navigation">
                                        <nav id="nav-wrap">
                                            <?php wp_nav_menu( array(
                                              'container'       => 'ul', 
                                              'menu_class'      => 'sf-menu',
                                              'menu_id'         => 'topnav', 
                                              'depth'           => 0,
                                              'sort_column'    => 'menu_order',
                                              'fallback_cb'     => 'nav_page_fallback',
                                              'theme_location' => 'mainmenu' 
                                              )); 
                                            ?>
                                          
                                            <form method="get" id="search-icon" action="<?php echo esc_url( home_url( '/' ) ); ?>">
                                                <input type="text" name="s" id="s" value="" autocomplete="off" />
                                                <input type="submit" id="searchbutton" value="" />
                                            </form>
                                            <div class="clear"></div>
                                        </nav><!-- nav -->	
                                    </section>
                                </div>
                        	</div>  
                        </div>
                    </header>
                </div>
                <div class="clear"></div>
            </div>
		</div>
        <!-- END HEADER -->

		<!-- AFTERHEADER -->
        <?php 
		$custom = klasik_get_customdata();
		$args = array(
			'post_type' => 'post',
			'post_status' => 'publish',
			'showposts' => 5,
			'orderby' => 'date',
			'ignore_sticky_posts' => 1
		);
		
		$args["meta_query"] = array(
			array(
				'key' => 'klasik_slider_post',
				'value' => 'on',
				'compare' => '='
			)
		);
		$nivocaption = "";
		$output="";
		$isfrontpage = is_front_page();
		global $wp_query;
		$temp = $wp_query;
		$wp_query= null;
		$wp_query = new WP_Query();
		$wp_query->query($args);
		global $post;
		
        if( $isfrontpage && $wp_query->have_posts() ){
		
			get_template_part( 'slider');
			$outermainclass = "";
        }else{
			$outermainclass = "noslider"; 
		}
		$wp_query = null; $wp_query = $temp; wp_reset_query();
		
		if($outermainclass=='noslider'){
		?>
        <div id="outerafterheader">
        	<div class="container">
            	<div class="row">
                	<div class="twelve columns">
                    <div id="afterheader">
						<?php  

                            klasik_page_title();	
							$custom = klasik_get_customdata();
							$cf_desc = (isset($custom["page-desc"][0]))? $custom["page-desc"][0] : "";
							
							if($cf_desc){
								echo '<span class="pagedesc">'.$cf_desc.'</span>';
							}
                           
                        ?>
                        <div class="clear"></div>
                    </div>
					<div class="clear"></div>
                    </div>
                </div>
            </div>
        </div>
        <?php
		}
		?>
        <!-- END AFTERHEADER -->


        <!-- MAIN CONTENT -->
        <div id="outermain" class="<?php echo $outermainclass; ?>">
        	<div id="maincontainer">
                <div class="container">
                    <div class="row">
                    
                    <?php if(is_active_sidebar('maintop') ){ ?>
                    <div class="maintop-container twelve columns">
                    	<?php if ( ! dynamic_sidebar( 'maintop' ) ){ } ?>
                        <div class="clear"></div>
                    </div>
                    <?php } ?>
                    
                    <?php 
                    $sidebarposition = klasik_get_option( 'klasik_sidebar_position' ,'two-col-left'); 
                    
                    if(is_home()){
						$pid = get_option('page_for_posts');
					}else{
						$pid = '';
					}
                    $custom_fields = klasik_get_customdata($pid);
                    
                    $pagelayout = $sidebarposition;
                    
                    if(isset( $custom_fields['klasik_layout'][0] ) && $custom_fields['klasik_layout'][0]!='default'){
                        $pagelayout = $custom_fields['klasik_layout'][0];
                    }
                    
                    if($pagelayout!='one-col'){
                        $mcontentclass = "hassidebar";
						$contentclass = 'nine columns ';
						
                        if($pagelayout=="two-col-left"){
                            $mcontentclass .= " mborderright";
							$contentclass .= "positionleft";
                        }else{
                            $mcontentclass .= " mborderleft";
							$contentclass .= "positionright";
                        }
                    }else{
                        $mcontentclass = "twelve columns";
						$contentclass = '';
                    }
                    ?>
                    <section id="maincontent" class="<?php echo $mcontentclass; ?>">
                        <section id="content" class="<?php echo $contentclass; ?>">
							<?php if ( function_exists('yoast_breadcrumb') && !$isfrontpage) {
                            yoast_breadcrumb('<div id="breadcrumbs">','</div>');
                                } 
                            ?>
                            <?php if(is_active_sidebar('contenttop') ){ ?>
                            <div class="row">
                                <div class="contenttop-container twelve columns">
                                <?php if ( ! dynamic_sidebar( 'contenttop' ) ){ } ?>
                                <div class="clear"></div>
                                </div>
                            </div>
                            <?php } ?>
                            
                            <?php 
						    $nocont="";
							if(get_the_content()== "" && is_page() && !is_page_template()){$nocont="nocontent";} ?>
                            <div class="main <?php echo $nocont; ?>">