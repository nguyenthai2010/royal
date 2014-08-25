<?PHP
	get_header();
?>

<body class="page page-template-default klasikt">

<div id="bodychild">
	<div id="outercontainer">
		<?php
            get_template_part('tpl','header'); 
        ?>    
     
		<!-- AFTERHEADER -->
		<div id="outerafterheader">
        	<div class="container">
            	<div class="row">
                	<div class="twelve columns">
                    <div id="afterheader">
						<h1 class="pagetitle">SPECIFICATIONS</h1>
						<span class="pagedesc">A unique development built and appointed to the highest standards</span>
                        <br class="clear" />
                    </div>
					<div class="clear"></div>
                    </div>
                </div>
            </div>
        </div>       
		<!-- END AFTERHEADER -->

		<?php
			$args_specifications = array(
				'post_type' 	 => 'specifications',
				'posts_per_page' => -1 ,
				'order'			 => 'asc'
			);
			$querySpecifications = get_posts($args_specifications);
		?>
        <!-- MAIN CONTENT -->
		<div id="outermain" class="noslider">
        	<div id="maincontainer">
                <div class="container">
                    <div class="row">
	                    <section id="maincontent" class="hassidebar mborderright">
	                    	<aside id="sidebar" class="three columns positionright">
	                            <div class="widget-area">
									<ul>
										<li id="categories-2" class="widget-container widget_categories">
											<h3 class="widget-title">Categories</h3>		
											<ul>
												<?php
					                                foreach ($querySpecifications as $speccategory) {
					                                	//print_r($speccategory);
												?>
												<li class="cat-item cat-item-2">
													<a href="<?php echo get_the_permalink($speccategory->ID);?>" title="<?= $speccategory->post_title;?>"><?= $speccategory->post_title;?></a>
												</li>
												<?php } ?>
											</ul>
											<div class="clear"></div>
										</li>
									</ul>
									<div class="clear"></div>
								</div>
							</aside>
	                        <section id="content" class="nine columns positionright specification_page">
								 <div class="row">
	                                <div class="contenttop-container twelve columns">
	                                	
										<div class="widget-contenttop">
											<ul>
												<li id="klasik-features-widget-3" class="widget-container widget_klasik_features">
													<div class="klasik-features ">
														<div class="row">
															<div class="columns fitem twelve">
																<div class="item-container">
																	<div class="recent-text-wrap">
																		<?php
											                                foreach ($querySpecifications as $specifications) {
											                                	//print_r($specifications);
																		?>
																		<div class="padbottom30">
																			<h3 class="recent-title"><?= $specifications->post_title;?></h3>
																			<?php echo $specifications->post_content;?>
																		</div>
																		<div class="clear"></div>
																		<?php } ?>
																	</div>
																	<div class="clear"></div>
																</div>
															</div>
															<div class="clear"></div>
														</div>
														<div class="clear"></div>
													</div>
												</li>
											</ul>
											<div class="clear"></div>
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
