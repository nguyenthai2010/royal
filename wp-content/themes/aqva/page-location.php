<?PHP
	get_header();
?>

<body class="page page-template-default klasikt">

<div id="bodychild">
	<div id="outercontainer" class="">
		<?php
            get_template_part('tpl','header'); 
        ?>    
     
		<!-- AFTERHEADER -->
		<div id="outerafterheader">
        	<div class="container">
            	<div class="row">
                	<div class="twelve columns">
                		<div id="afterheader">
	                		<h1 class="pagetitle"><?= the_title();?></h1>
	                		<div class="pagedesc center">
	                			<?php
								$page = get_page_by_title( 'location' );
								$content = apply_filters('the_content', $page->post_content); 
								echo $content;
								?>
	                		</div>
	                	</div>
					<div class="clear"></div>
                    </div>
                </div>
            </div>
        </div>       
		<!-- END AFTERHEADER -->
		<div id="outermain" class="noslider">
        	<div id="maincontainer">
                <div class="container">
                    <div class="row">
	                    <section id="maincontent" class="hassidebar mborderright">
	                        <section id="content" class="twelve columns positionright specification_page">
								 <div class="row">
	                                <div class="contenttop-container twelve columns">
	                                	<div class="nine columns positionright">
	                                		<img src="images/location.jpg" />
	                                	</div>       
	                                	<div class="columns fitem three positionright">
	                                		<div class="box-contact">
	                                			<h3>Address</h3>
	                                			<p>
	                                				<?php echo get_option('contact_address');?>
												</p>
	                                		</div>
	                                		<div class="box-contact">
	                                			<h3>Contact details</h3>
	                                			<p>E-mail: <a href="mailto:<?php echo get_option('contact_email');?>" style="text-decoration: underline;"><?php echo get_option('contact_email');?></a></p>
												<p>Website: <?php echo get_option('contact_website');?></p>
												<p>Phone: <?php echo get_option('contact_phone');?></p>
	                                		</div>
	                                	</div>
										<div class="clear"></div>
	                                </div>
	                            </div>
	                           <div class="clear"></div>
	                        </section><!-- content -->
                        
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
