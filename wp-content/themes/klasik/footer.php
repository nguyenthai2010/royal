<?php
/**
 * The template for displaying the footer.
 *
 * @package WordPress
 * @subpackage Klasik
 * @since Klasik 1.0
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
								</div>
							</div>
							<?php 
							}
							?>
                            <div class="clear"></div>
                        </section><!-- content -->
                        
                        <?php if($pagelayout!='one-col'){ ?>
                        
                        <aside id="sidebar" class="four columns <?php if($pagelayout=="two-col-left"){echo "positionright";}else{echo "positionleft";}?>">
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
                    
                        <footer id="footersidebar">
                                    <?php 
									if ( ! dynamic_sidebar( 'footer' ) ){
										
									}// end general widget area 
									?>
                            <div class="clear"></div>
                        </footer>
    
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
									<?php echo __('Copyright', 'klasik') . ' &copy; 2012-2013'. ' <a href="'.home_url( '/').'">'.get_bloginfo('name') .'.</a>'; ?>
                                    <?php _e(' Designed by', 'klasik'); ?>	<a href="<?php echo esc_url( __( 'http://www.klasikthemes.com', 'klasik' ) ); ?>" title=""><?php _e('Klasik Themes','')?></a>.
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
