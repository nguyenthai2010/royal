<?PHP
	get_header();
?>

<body class="gallery page-template-default klasikt">

<div id="bodychild">
	<div id="outercontainer" class="contactPage">
		<?php
            get_template_part('tpl','header'); 
        ?>    
     
		<!-- AFTERHEADER -->
        <!-- SLIDER -->
        <div id="outerslider">
            <div class="container">
            	<div class="row">
	            	<div class="twelve columns">
						<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3943.9054048140847!2d115.16897700000001!3d-8.700532999999998!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd246dc459988e7%3A0x2508d6d9820b75a1!2sAQ-Va+Hotel+%26+Villas!5e0!3m2!1sen!2s!4v1409069077383" width="100%" height="300" frameborder="0" style="border:0"></iframe>
					</div>
				</div>
            </div>
        </div>
        <!-- END SLIDER -->        
		<!-- END AFTERHEADER -->


        <!-- MAIN CONTENT -->
		<div id="outermain" class="noslider">
        	<div id="maincontainer">
                <div class="container">
                    <div class="row">
                    
                                        
                        <section id="maincontent" class="twelve columns">
                        <section id="content" class="">
                            <!-- main -->
                            <div class="row">
                            	<div class="contenttop-container twelve columns">
                            		<div class="eight columns positionright">
                            			<h3>
                            				Send Us A Message
                            			</h3>
                            			<?php echo do_shortcode('[contact-form-7 id="169" title="Contact form 1"]'); ?>		
                            		</div>
                            		<div class="columns fitem four positionright">
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
                            	</div>
								
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
