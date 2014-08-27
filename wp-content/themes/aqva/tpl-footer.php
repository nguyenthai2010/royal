        <!-- FOOTER SIDEBAR -->
        <div id="outerfootersidebar">
        	<div id="footersidebarcontainer">
                <div class="container">
                    <div class="row"> 
                    	<div class="twelve columns">
                        <footer id="footersidebar">
                        	<div class="row"> 
                            <div id="footcol1"  class="three columns">
                                <div class="widget-area">
                                    <div class="widget-bottom"><ul><li id="nav_menu-2" class="widget-container widget_nav_menu"><h3 class="widget-title">Customer Services</h3>
                                    
                                    <div class="menu-customer-services-container"><!--<ul id="menu-customer-services" class="menu"><li id="menu-item-355" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-355"><a href="#">FAQ</a></li>
<li id="menu-item-356" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-356"><a href="#">Returns</a></li>
<li id="menu-item-357" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-357"><a href="#">Careers</a></li>
</ul>-->
										<?php
                                            
                                            $defaults = array(
                                              'container'       => 'ul', 
                                              'menu_class'      => 'menu',
                                              'menu_id'         => 'menu-customer-services', 
                                              'depth'           => 0,
                                              'sort_column'    => 'menu_order',
                                              'fallback_cb'     => 'nav_page_fallback',
                                              'theme_location' => 'footer_col1' 
                                            );
                                            
                                            wp_nav_menu( $defaults );
                                            
                                        ?>
									</div>

									<div class="clear"></div></li></ul><div class="clear"></div></div>                                </div>
                            </div>
                            <div id="footcol2"  class="three columns">
                                 <div class="widget-area">
                                 	<div class="widget-bottom"><ul><li id="nav_menu-3" class="widget-container widget_nav_menu"><h3 class="widget-title">About</h3>
                                    
                                    <div class="menu-about-container">
                                    										<?php
                                            
                                            $defaults = array(
                                              'container'       => 'ul', 
                                              'menu_class'      => 'menu',
                                              'menu_id'         => 'menu-about', 
                                              'depth'           => 0,
                                              'sort_column'    => 'menu_order',
                                              'fallback_cb'     => 'nav_page_fallback',
                                              'theme_location' => 'footer_col2' 
                                            );
                                            
                                            wp_nav_menu( $defaults );
                                            
                                        ?>
                                    </div><div class="clear"></div></li></ul><div class="clear"></div></div>                                </div>
                            </div>
                            
                            <div id="footcol4"  class="three columns">
                                 <div class="widget-area">
                                 	<div class="widget-bottom">
                                 		<ul>
                                 			<li id="text-3" class="widget-container widget_text">			
                                 				<div class="textwidget">
                                 					<div class="wpcf7" id="wpcf7-f396-w1-o1">
                                 						<form action="" method="post" class="form-newsletter">
															<input name="action" type="hidden" class="action" value="sub_newsletter"/>
															<div class="newslatter">
																<h3>Newsletter</h3>
																<p>    
																	<span class="wpcf7-form-control-wrap your-email">
																		<input type="email" name="email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-email requiredField" aria-invalid="false" />
																	</span> 
																	<input type="submit" value="Go" class="wpcf7-form-control wpcf7-submit" />
																</p>
																<div class="loading"><img style="width: 16px;height:16px;" src="images/ajax-loader.gif" alt=""/></div>
															</div>
															<input name="ajaxurl" type="hidden" class="ajaxurl" value="<?php echo bloginfo('home').'/wp-admin/admin-ajax.php'; ?>"/>
                      										<input name="security" type="hidden" class="action" value="<?php echo wp_create_nonce('security')?>"/>
															<div class="wpcf7-response-output wpcf7-display-none"></div>
														</form>
													</div>
												</div>
												<div class="clear"></div>
											</li>
										</ul>
										<div class="clear"></div></div>                                
									</div>
                            	</div>
                            <div class="clear"></div>
                            </div>
                        </footer>
    					</div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END FOOTER SIDEBAR -->

        <script src="js/validate.js"></script>