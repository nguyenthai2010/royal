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
						<h1 class="pagetitle">Our Facilities</h1>
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
	                        <section id="content" class="nine columns positionleft">
								 <div class="row">
	                                <div class="contenttop-container twelve columns">
	                                	
										<div class="widget-contenttop">
											<ul>
												<li id="klasik-features-widget-3" class="widget-container widget_klasik_features">
													<div class="klasik-features ">
														<div class="row">
														<?php
															$i = 0;
															$cls = '';
															
															$args_facilities = array(
																'post_type' 	 => 'facilities',
																'posts_per_page' => -1 ,
																'order'			 => 'asc'
															);
															$queryFacilities = get_posts($args_facilities);
							                                foreach ($queryFacilities as $facilities) {
							                                    $i++;
																$url = wp_get_attachment_url( get_post_thumbnail_id($facilities->ID) );
																if($i%2 != 0){
																	$cls = 'alpha';
																}
																else{
																	$cls = 'omega';
																}
																if($onsidebar !='Yes' || $onpage == 'on'){
									                     ?>
															
															<div class="columns fitem one_half feature<?= $i?> <?= $cls;?>">
																<div class="item-container">
																		<img src="<?= $url;?>" class="alignleft wp-post-image" alt="icon7">
																	<div class="recent-text-wrap">
																		<h3 class="feature-title"><?= $facilities->post_title;?></h3>
																		<div class="feature-text"><?= $facilities->post_content;?></div>
																		<div class="clear"></div>
																	</div>
																	<div class="clear"></div>
																</div>
															</div>
															<?php } } ?>
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
                        
                                                
                        <aside id="sidebar" class="three columns positionright" class="sbfacilities">
                            <div class="widget-area">
								<ul>
									<li id="klasik-advancedposts-widget-3" class="widget-container widget_klasik_advancedposts">
										<div class="klasik-advancedpost-widget ">
											<div class="row">
												<div class="columns">
													<h3 class="c57c5cf padbot12">OUR FACILITIES</h3>
												</div>
												<?php
													$args_facility_img = array(
														'post_type' 	 => 'post',
														'category'		 => 'special-offer',
														'posts_per_page' => 3 ,
														'order'			 => 'desc'
													);
													$queryFacility_img = get_posts($args_facility_img);
													
													foreach ($queryFacility_img as $facility) {
														$url = wp_get_attachment_url( get_post_thumbnail_id($facility->ID) );
												?>
												<div class="tpl1 columns twelve post1  format-">
													<div class="recent-item" style="margin-bottom: 20px;padding-bottom: 20px;">
														<h3 class="recent-title">
															<?= $facility->post_title;?>
														</h3>
														<div class="recent-thumb" style="margin-top: 5px;">
															<img width="230" height="90" src="<?= $url;?>" class="advpostimg wp-post-image" alt="">
														</div>
														<div class="clear"></div>
													</div>
												</div>
												<?php } ?>
											</div>
											<div class="clear"></div>
										</div>
										<div class="clear"></div>
									</li>
								</ul>
								<div class="clear"></div>
							</div>  
                        </aside><!-- sidebar -->
                        
                                                <div class="clear"></div>
                        </section><!-- END #maincontent -->
                        
                                                <div class="clear"></div>
						                         
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
