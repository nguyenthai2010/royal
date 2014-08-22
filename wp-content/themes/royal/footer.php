<?php
/**
 * The template for displaying the footer.
 *
 * @package WordPress
 * @subpackage Royal
 * @since Royal 1.0
 */
 
?>
			
						<?php 
                        $sidebarposition = klasik_get_option( 'klasik_sidebar_position' ,'two-col-left'); 
                		
						
                        if(is_home()){
							$pid = get_option('page_for_posts');
						}else{
							$pid = '';
						}
						$custom_fields = klasik_get_customdata($pid);
                        
                        $pagelayout = $sidebarposition;
                        
                        if(isset( $custom_fields['klasik_layout'][0] ) && $custom_fields['klasik_layout'][0]!='default'){
                            $pagelayout = $custom_fields['klasik_layout'][0];
                        }
						?>
						
                        		<div class="clear"></div>
                            </div><!-- main -->
                            
                            <?php
							if(is_active_sidebar('contentbottom') ){ 
							?>
							<div class="row">
								<div class="contentbottom-container twelve columns">
									<?php if ( ! dynamic_sidebar( 'contentbottom' ) ){ }?>
                                    <div class="clear"></div>
								</div>
							</div>
							<?php 
							}
							?>
                            <div class="clear"></div>
                        </section><!-- content -->
                        
                        <?php if($pagelayout!='one-col'){ ?>
                        
                        <aside id="sidebar" class="three columns <?php if($pagelayout=="two-col-left"){echo "positionright";}else{echo "positionleft";}?>">
                            <?php get_sidebar();?>  
                        </aside><!-- sidebar -->
                        
                        <?php } ?>
                        <div class="clear"></div>
                        </section><!-- END #maincontent -->
                        
                        <?php if(is_active_sidebar('mainbottom') ){ ?>
                        <div class="mainbottom-container twelve columns">
                            <?php if ( ! dynamic_sidebar( 'mainbottom' ) ){ } ?>
                            <div class="clear"></div>
                        </div>
                        <?php } ?>
                        <div class="clear"></div>
						<?php if(is_active_sidebar('bottom') ){ ?>
                        <!-- BOTTOM -->
                        <div id="outerbottom">
                            <div class="container">
                                <div class="row">
                                    <div id="bottom-sidebar" class="twelve columns">
                                        <?php if ( ! dynamic_sidebar( 'bottom' ) ){ } ?>
                                        <div class="clear"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END BOTTOM -->
                        <?php } ?>
                        
                        <div class="clear"></div>
                    </div>
                </div>
            </div>
        </div><!-- END #outermain -->
        <!-- END MAIN CONTENT -->
        
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
                                    <?php 
									$widgetargs = array( 
										'before_widget' => '<div class="widget-bottom"><ul><li id="%1$s" class="widget-container %2$s">',
										'after_widget' 	=> '<div class="clear"></div></li></ul><div class="clear"></div></div>',
										'before_title' 	=> '<h2 class="widget-title">',
										'after_title' 	=> '</h2>'
									);
									
									if ( ! dynamic_sidebar( 'footer1' ) ){
										$instances = array(
											'title' => __('About Us','klasik'),
											'text' => '<p>Ut non nulla mi, eget imperdiet sem. Nam lacus ligula, venenatis vel aliquet eu, venenatis congue magna. Sed rutrum faucibus semper.</p>'
										);
										the_widget('WP_Widget_Text',$instances, $widgetargs);
									}// end general widget area 
									?>
                                </div>
                            </div>
                            <div id="footcol2"  class="three columns">
                                 <div class="widget-area">
                                 	<?php 
									if ( ! dynamic_sidebar( 'footer2' ) ){
										
										$instances = array(
											'title' => __('Recent Comments','klasik'),
											'number'=> 5
										);
										the_widget('WP_Widget_Recent_Comments',$instances, $widgetargs);
									}// end general widget area 
									?>
                                </div>
                            </div>
                            <div id="footcol3"  class="three columns">
                                 <div class="widget-area">
                                 	<?php 
									if ( ! dynamic_sidebar( 'footer3' ) ){
										
										$instances = array(
											'title' => __('Recent Posts','klasik'),
											'number'=> 5
										);
										the_widget('WP_Widget_Recent_Posts',$instances, $widgetargs);
									}// end general widget area 
									?>
                                </div>
                            </div>
                            <div id="footcol4"  class="three columns">
                                 <div class="widget-area">
                                 	<?php 
									if ( ! dynamic_sidebar( 'footer4' ) ){
										
										$instances = array(
											'title' => __('Meta','klasik')
										);
										the_widget('WP_Widget_Meta',$instances, $widgetargs);
									}// end general widget area 
									?>
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
        
        <!-- FOOTER -->
        <div id="outerfooter">
        	<div id="footercontainer">
                <div class="container">
                    <div class="row">

                        <div class="twelve columns">
                            <footer id="footer">
								<div class="copyrighttext">
                                        <?php echo __('Copyright', 'klasik') . ' &copy; 2013-2014'. ' <a href="'.home_url( '/').'">'.get_bloginfo('name') .'.</a>'; ?>
                                        <?php _e(' Designed by', 'klasik'); ?>	<a href="<?php echo esc_url( __( 'http://www.templatesquare.com', 'klasik' ) ); ?>" title=""><?php _e('TemplateSquare.com','')?></a>.
                                </div>
                                <div class="footertext">
									<?php klasik_footer_text(); ?>
                                </div>
                            </footer>
                        </div>
                    
                    </div>
                </div>
            </div>
        </div>
        <!-- END FOOTER -->
        
	</div><!-- end outercontainer -->
</div><!-- end bodychild -->


<?php $footerscript = stripslashes(klasik_get_option('klasik_footerscript'));?>
<?php if($footerscript=="false"){?>
<?php }else{?>
<script>
<?php echo $footerscript; ?>
</script>
<?php } ?>
<?php
	/* Always have wp_footer() just before the closing </body>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to reference JavaScript files.
	 */

	wp_footer();
?>
</body>
</html>
