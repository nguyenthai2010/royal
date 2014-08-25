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

				//Returns All Term Items for "my_taxonomy"
				$term_list = wp_get_post_terms($post->ID, 'properties-tax', array("fields" => "all"));
				$term_list_img = get_bloginfo('template_url').'/images/properties/'.$term_list[0]->slug.'.png';
				//print_r($term_list);
				
				//Returns All Term Items for "my_taxonomy"
				$term_floor = wp_get_post_terms($post->ID, 'floor-tax', array("fields" => "all"));
				//print_r($term_floor);
					
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
                                <a href="#">1ST FLOOR</a>
                                <a href="#">2ND FLOOR</a>
                                <a href="#">3RD FLOOR</a>
                            </div>
                        </div>
                        <span class="pagedesc noting">Rollover the floorplan to see the available properties</span>     
                        <div class="term_list_img"><img src="<?php echo $term_list_img;?>"></div>
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
