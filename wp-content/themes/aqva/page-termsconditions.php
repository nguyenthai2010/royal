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
	                			If you have any further questions feel free to 
	                			<a href="<?php echo bloginfo('home')?>/contact" >contact us</a>
	                		</div>
	                	</div>
					<div class="clear"></div>
                    </div>
                </div>
            </div>
        </div>       
		<!-- END AFTERHEADER -->
		<div id="outermain" class="noslider faqPage">
        	<div id="maincontainer">
                <div class="container">
                    <div class="row">
	                    <section id="maincontent" class="hassidebar mborderright">
	                        <section id="content" class="twelve columns positionright specification_page">
								 <div class="row">
	                                <div class="contenttop-container twelve columns">
	                                	<div class="twelve columns positionright">
	                                		<div class="termcontent">
	                                			<?php
												//echo $page = get_post(get_page_id_by_slug('termsconditions'));
												$page = get_page_by_title('Terms/Conditions'); 
												$content = apply_filters('the_content', $page->post_content);
												echo $content;
												?>
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
