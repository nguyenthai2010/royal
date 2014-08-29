<?PHP
	get_header();
?>

<body class="gallery page-template-default klasikt">

<div id="bodychild">
	<div id="outercontainer">
		<?php
            get_template_part('tpl','header'); 
        ?>    
     
		<!-- AFTERHEADER -->
        <!-- SLIDER -->
        <div id="outerslider">
            <div class="container">
				<?php
                    get_template_part('tpl','slider'); 
                ?>
            </div>
        </div>
        <!-- END SLIDER -->        
		<!-- END AFTERHEADER -->
<?php
	$i = 0;
	$args = array(
		'post_type' 	 => 'gallery',
		'posts_per_page' => 20 ,
		'order'			 => 'asc'
	);
	$queryRows = get_posts($args);
?>		
 

        <!-- MAIN CONTENT -->
		<div id="outermain" class="noslider">
        	<div id="maincontainer">
                <div class="container">
                    <div class="row">
                    
                                        
                        <section id="maincontent" class="twelve columns">
                        <section id="content" class="">
                            <!-- main -->
                            <div class="row">
<?php
	foreach ($queryRows as $row) {
		$i++;
		$idthump = get_post_meta($row->ID,'_cmb_gallery_image_thump',true);
		$idlarge = get_post_meta($row->ID,'_cmb_gallery_image_large',true);
?>
<div data-id="id-<?php echo $row->ID; ?>" class="item one_fourth columns alpha our-rooms" data-type="our-rooms"><div class="klasik-pf-img"><div class="shadowBottom"><a class="pfzoom" href="<?php echo $idlarge; ?>" data-rel="prettyPhoto[mixed]" title="" rel="prettyPhoto[mixed]"><span class="rollover" style="opacity: 0; display: inline;"></span><img width="430" height="271" src="<?php echo $idthump; ?>" class="attachment-widget-portfolio wp-post-image" alt="<?php echo $row->post_name;?>"></a><div class="clear"></div></div><div class="pfarrow"></div></div><div class="clear"></div></div>
<?php }?>                              
                            </div>
                        	<div class="clear"></div>
                        </section><!-- content -->
                        
                        <div class="clear"></div>
                        </section>
                        <!-- END #maincontent -->                        
                        <div class="clear"></div>
                    </div>
                </div>
            </div>
        </div>        
        <!-- END #outermain -->
        <!-- END MAIN CONTENT -->
        
		<?php
            get_template_part('tpl','footer'); 
        ?>         
<?php 
	get_footer();
?>
