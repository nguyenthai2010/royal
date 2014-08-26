<?PHP
	get_header();
?>

<body class="page page-template-default klasikt">

<div id="bodychild" class="reason-tobuy">
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
								$page = get_page_by_title( 'reason-to-buy' );
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
	                                	<div class="eight columns positionright">
	                                		<?php
												
												$args_reason = array(
													'post_type' 	 => 'reason-to-buy',
													'posts_per_page' => -1 ,
													'order'			 => 'asc'
												);
												$queryReason = get_posts($args_reason);
				                                foreach ($queryReason as $reasons) {
													$url = wp_get_attachment_url( get_post_thumbnail_id($reasons->ID) );
						                     ?>
	                                		<div class="columns fitem twelve feature1 alpha">
												<div class="item-container">
													<img src="<?= $url;?>" class="alignleft wp-post-image" alt="">
													<div class="recent-text-wrap">
														<h3 class="feature-title f26"><?= $reasons->post_title;?></h3>
														<div class="feature-text"><?= $reasons->post_content;?></div>
														<div class="clear"></div>
													</div>
													<div class="clear"></div>
												</div>
											</div>
											<?php } ?>
											<div class="clear"></div>
	                                	</div>       
	                                	<div class="columns fitem four positionright" style="margin-top: 15px;">
	                                		<img src="images/reason.jpg" />
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
