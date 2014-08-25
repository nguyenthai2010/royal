<?PHP
	get_header();
?>

<body class="page page-template-default klasikt">

<div id="bodychild">
	<div id="outercontainer">
		<?php
            get_template_part('tpl','header'); 
        ?>    


		<?php
            
             while ( have_posts() ) : the_post();
				$post = get_post(get_the_ID()); 
				//print_r($post);

				//Returns All Term Items for "my_taxonomy"
				$term_list = wp_get_post_terms($post->ID, 'properties-tax', array("fields" => "all"));
				print_r($term_list);
				
				
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
                        <span class="pagedesc"><?php echo $term_list[0]->name;?></span>                        
                        <br class="clear" />
                        <br class="clear" />
                    </div>
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
<div class="textwidget">Donec hendrerit vehicula est, in consequat hendrerit vehicula est, in consequat. Massa venenatis consectetur rhoncus euismod facilisi lacus inceptos rutrum tortor dictumst habitant sit quis viverra habitant ridiculus feugiat turpis non libero neque nam suscipit egestas vulputate aenean facilisis. </div>                            
                                                        <div class="clear"></div>
                        </section>
                                                <div class="clear"></div>
                        </section><!-- END #maincontent -->
                        
						                        <!-- BOTTOM -->
                        
                        <!-- END BOTTOM -->
                                                
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
