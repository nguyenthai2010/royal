<?PHP
	get_header();
?>

<body class="properties page-template-default klasikt">


<div id="bodychild">
	<div id="outercontainer">
		<?php
            get_template_part('tpl','header'); 
        ?>    


		<?php
            
             while ( have_posts() ) : the_post();
				$post = get_post(get_the_ID()); 
				$description_text = get_post_meta(get_the_ID(),'_cmb_properties_description_text',true);
				$properties_image = get_post_meta(get_the_ID(),'_cmb_properties_image',true);
				//print_r($post);
				
				$term_list = wp_get_post_terms($post->ID, 'properties-tax', array("fields" => "all"));
				$term_floor = wp_get_post_terms($post->ID, 'floor-tax', array("fields" => "all"));
				
				$term_list_img = get_bloginfo('template_url');	
				$properties_name = $post->post_name;
				$term_list_name = $term_list[0]->slug;
				$urlsite = get_site_url(); ;
				$term_floor_name = $term_floor[0]->slug; 
				
				//echo '123:'.add_query_arg( 'foo', 'bar' );
        ?> 

		<?php endwhile; ?>
		<!-- AFTERHEADER -->
		<div id="outerafterheader">
        	<div class="container">
            	<div class="row">
                	<div class="twelve columns">
                        <div id="afterheader">
                            <h1 class="pagetitle"><?php echo $term_list[0]->name;?></h1>
                            <div class="listfloor">
                               
                            </div>
                        </div>
                        <span class="pagedesc noting">Rollover the floorplan to see the available properties</span>     
                        <div class="term_list_img <?php echo $term_list_name;?>"></div>
                        <div class="clear"></div>
                    </div>
                    
                </div>
            </div>
        </div>       
		<!-- END AFTERHEADER -->


        <!-- MAIN CONTENT -->
		<div id="outermain" class="noslider">
        	<div id="maincontainer">
                <div class="container">
                    <div class="row">
                    	<section id="maincontent" class="hassidebar mborderright">
                            <section id="content" class="twelve columns positionleft">
                            	<!-- main -->
                                <div class="three_fourth column"><img src="<?php echo $properties_image?>"></div>
                                <div class="one_fourth column description">
                                	<h3><?php echo $description_text;?></h3>
                                    <p><?php echo $post->post_content;?></p>
                                    <a class="button" href="<?php echo bloginfo('home')?>/contact/?proID=<?php echo $post->ID;?>">CONTACT US FOR MORE INFORMATION</a>
                                </div>
                                <div class="clear"></div>
                            </section>
                        	<div class="clear"></div>
                        </section><!-- END #maincontent -->
                        <div class="clear"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END MAIN CONTENT -->
        
		<?php
            get_template_part('tpl','footer'); 
        ?>         
<?php 
	get_footer();
?>

<script>
jQuery(document).ready(function(e) {
	var setting = {
		urlsite 		: '<?php echo $urlsite;?>',
		url		 		: '<?php echo $term_list_img;?>',
		term_list 		: '<?php echo $term_list_name;?>',
		properties_name : '<?php echo $properties_name;?>',
		floor_current	: '<?php echo $term_floor_name;?>'
	};
    properties.init(setting);
});
</script>
