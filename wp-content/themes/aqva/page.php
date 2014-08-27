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
        	$post = get_post(get_the_ID()); 
			//print_r($post);
		?>
		<!-- AFTERHEADER -->
		<div id="outerafterheader">
        	<div class="container">
            	<div class="row">
                	<div class="twelve columns">
                    <div id="afterheader">
						<h1 class="pagetitle"><?= the_title();?></h1>
                        <span class="pagedesc"></span>                        
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
<div class="textwidget"></div>                            
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
