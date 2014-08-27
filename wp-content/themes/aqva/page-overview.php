<?PHP
	get_header();
?>

<body class="overview page-template-default klasikt">

<div id="bodychild">
	<div id="outercontainer">
		<?php
            get_template_part('tpl','header'); 
        ?>    
     	
        <?php
        	$post = get_post(get_the_ID()); 
			//print_r($post);
		?>
		<!-- AFTERHEADER -->
		<div id="outerafterheader">
        	<div class="container">
            	<div class="row">
                	<div class="twelve columns">
                    <div id="afterheader">
						<?php
                        	echo $post->post_content;
						?>	                        
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
                        	<div class="overviewhotel">
                            	<img id="overvieimage-0" src="images/overview/0.jpg">
           						<img class="overvieimageprocessing" id="overvieimage-1" src="images/overview/1.jpg"/>
                                <img class="overvieimageprocessing" id="overvieimage-2" src="images/overview/2.jpg"/>
                                <img class="overvieimageprocessing" id="overvieimage-3" src="images/overview/3.jpg"/>
                                <img class="overvieimageprocessing" id="overvieimage-4" src="images/overview/4.jpg"/>
                                <div class="blockoverview block1" pic="#overvieimage-1" link="/properties/2b/"></div>
                                <div class="blockoverview block2" pic="#overvieimage-2" link="/properties/m1/"></div>
                                <div class="blockoverview block3" pic="#overvieimage-3" link="/properties/102/"></div>
                                <div class="blockoverview block4" pic="#overvieimage-4" link="/properties/302/"></div>
                          </div>
                        	
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
	overview.init();
});
</script>
