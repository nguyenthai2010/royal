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
	                                			<li id="text-9" class="widget-container widget_text">			
													<div class="clear"></div>
												</li>
											</ul>
											<div class="clear"></div>
										</div>
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
									                     ?>
															
															<div class="columns fitem one_half feature<?= $i?> <?= $cls;?>" id="f-498">
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
															<?php } ?>
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
                        
                                                
                        <aside id="sidebar" class="three columns positionright">
                            <div class="widget-area">
	<ul><li id="klasik-advancedposts-widget-3" class="widget-container widget_klasik_advancedposts"><div class="klasik-advancedpost-widget "><div class="row"><div id="advpost-490" class="tpl1 columns twelve post1  format-"><div class="recent-item"><div class="recent-cat"><a href="http://demowordpress.templatesquare.com/royal/category/special-offer/" title="View all posts in Special Offer">Special Offer</a></div><h3 class="recent-title"><a href="http://demowordpress.templatesquare.com/royal/2014/03/20/buy-one-get-one/">Buy One Get One</a></h3><div class="recent-thumb"><img width="230" height="90" src="http://demowordpress.templatesquare.com/royal/files/2014/03/img61-230x90.jpg" class="advpostimg wp-post-image" alt="img6"></div><div class="recent-text">Nam molestie, tellus sit amet accumsan ullamcorper, risus diam dapibus urna, id posuere libero ligul</div><div class="clear"></div></div></div><div id="advpost-488" class="tpl1 columns twelve post1 omega format-"><div class="recent-item"><div class="recent-cat"><a href="http://demowordpress.templatesquare.com/royal/category/upcoming-event/" title="View all posts in Upcoming Event">Upcoming Event</a></div><h3 class="recent-title"><a href="http://demowordpress.templatesquare.com/royal/2014/03/20/live-music-concert/">Live Music Concert</a></h3><div class="recent-thumb"><img width="230" height="90" src="http://demowordpress.templatesquare.com/royal/files/2014/03/pic5-230x90.jpg" class="advpostimg wp-post-image" alt="pic5"></div><div class="recent-text">Nam molestie, tellus sit amet accumsan ullamcorper, risus diam dapibus urna, id posuere libero ligul</div><div class="clear"></div></div></div></div><div class="clear"></div></div><div class="clear"></div></li></ul><div class="clear"></div></div>  
                        </aside><!-- sidebar -->
                        
                                                <div class="clear"></div>
                        </section><!-- END #maincontent -->
                        
                                                <div class="clear"></div>
						                        <!-- BOTTOM -->
                        <div id="outerbottom">
                            <div class="container">
                                <div class="row">
                                    <div id="bottom-sidebar" class="twelve columns">
                                        <div class="widget-bottom"><ul><li id="klasik-pcarousel-widget-2" class="widget-container widget_klasik_pcarousel">
					<div class="flexslider-carousel row ">
                    
                    <div class="flex-viewport" style="overflow: hidden; position: relative;"><ul class="slides" style="width: 1200%; -webkit-transition: 0s; transition: 0s; -webkit-transform: translate3d(-328px, 0px, 0px);">
					<li style="width: 130px; float: left; display: block;"><img width="170" height="83" src="http://demowordpress.templatesquare.com/royal/files/2014/03/l12.jpg" class="attachment-widget-carousel" alt="l1"></li><li style="width: 130px; float: left; display: block;"><img width="170" height="83" src="http://demowordpress.templatesquare.com/royal/files/2014/03/l22.jpg" class="attachment-widget-carousel" alt="l2"></li><li style="width: 130px; float: left; display: block;"><img width="170" height="83" src="http://demowordpress.templatesquare.com/royal/files/2014/03/l32.jpg" class="attachment-widget-carousel" alt="l3"></li><li style="width: 130px; float: left; display: block;"><img width="170" height="83" src="http://demowordpress.templatesquare.com/royal/files/2014/03/l42.jpg" class="attachment-widget-carousel" alt="l4"></li><li style="width: 130px; float: left; display: block;"><img width="170" height="83" src="http://demowordpress.templatesquare.com/royal/files/2014/03/l52.jpg" class="attachment-widget-carousel" alt="l5"></li><li style="width: 130px; float: left; display: block;"><img width="170" height="83" src="http://demowordpress.templatesquare.com/royal/files/2014/03/l62.jpg" class="attachment-widget-carousel" alt="l6"></li>                    </ul></div><ul class="flex-direction-nav"><li><a class="flex-prev" href="#">Previous</a></li><li><a class="flex-next flex-disabled" href="#">Next</a></li></ul></div>
				<div class="clear"></div></li></ul><div class="clear"></div></div>                                        <div class="clear"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
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
