        <!-- FOOTER -->
        <div id="outerfooter">
        	<div id="footercontainer">
                <div class="container">
                    <div class="row">

                        <div class="twelve columns">
                            <footer id="footer">
								<div class="copyrighttext">
                                        Copyright @ 2014 AQ-VA Hotel & Villas
                                </div>
                                <div class="footertext">
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


<script>
</script>
<script type="text/javascript">

var addthis_config = {"data_track_clickback":false,"data_track_addressbar":false,"data_track_textcopy":false};
var addthis_product = 'wpp-265';
</script><script type="text/javascript" src="//s7.addthis.com/js/250/addthis_widget.js#pubid=827e22816a5b4e4cc5796619e35b4c4d"></script><script type="text/javascript"></script><script type='text/javascript' src='themes/klasik/js/jquery.prettyPhoto.js?ver=3.1.5'></script>
<script type='text/javascript' src='themes/klasik/js/jquery.flexslider-min.js?ver=2.1'></script>
<script type='text/javascript' src='themes/klasik/js/jquery.elastislide.js?ver=1.0'></script>
<script type='text/javascript' src='themes/klasik/js/hoverIntent.js?ver=1.0'></script>
<script type='text/javascript' src='themes/klasik/js/superfish.js?ver=1.4.8'></script>
<script type='text/javascript' src='themes/klasik/js/supersubs.js?ver=0.2'></script>
<script type='text/javascript' src='themes/klasik/js/jquery.easing.1.3.js?ver=1.3'></script>
<script type='text/javascript' src='themes/klasik/js/tinynav.min.js?ver=1.0'></script>
<script type='text/javascript' src='themes/klasik/js/retina-1.1.0.min.js?ver=1.1.0'></script>
<script type='text/javascript' src='themes/klasik/js/camera.min.js?ver=1.3.3'></script>
<script type='text/javascript' src='js/custom.js?ver=1.0'></script>
<script type='text/javascript' src='js/jquery.isotope.min.js?ver=1.5.19'></script>

	<script type="text/javascript">
	//Add Class Js to html
	jQuery('html').addClass('js');	
	
	//=================================== MENU ===================================//
/*	jQuery("ul.sf-menu").supersubs({ 
	minWidth		: 13,		// requires em unit.
	maxWidth		: 13,		// requires em unit.
	extraWidth		: 3	// extra width can ensure lines don't sometimes turn over due to slight browser differences in how they round-off values
						   // due to slight rounding differences and font-family 
	}).superfish();  // call supersubs first, then superfish, so that subs are 
					 // not display:none when measuring. Call before initialising 
					 // containing tabs for same reason. */
	
	//=================================== MOBILE MENU DROPDOWN ===================================//
	jQuery('#topnav').tinyNav({
		active: 'current-menu-item'
	});	
	</script>
		<script type="text/javascript">
	jQuery(document).ready(function(){
		runprettyPhoto();
	});
	
	function runprettyPhoto(){
		//=================================== PRETTYPHOTO ===================================//
		jQuery('a[data-rel]').each(function() {jQuery(this).attr('rel', jQuery(this).data('rel'));});
		jQuery("a[rel^='prettyPhoto']").prettyPhoto({
			animationSpeed:'slow',
			theme:'pp_default', /* light_rounded / dark_rounded / light_square / dark_square / facebook */
			gallery_markup:'',
			slideshow:2000
		});
	}
	</script>

	<!--wp_footer-->
    <?php wp_footer(); ?>

	<script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
    
      ga('create', 'UA-54298693-1', 'auto');
      ga('send', 'pageview');
    
    </script>

    </body>
</html>