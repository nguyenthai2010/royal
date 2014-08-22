        <!-- FOOTER -->
        <div id="outerfooter">
        	<div id="footercontainer">
                <div class="container">
                    <div class="row">

                        <div class="twelve columns">
                            <footer id="footer">
								<div class="copyrighttext">
                                        Copyright &copy; 2013-2014 <a href="http://demowordpress.templatesquare.com/royal/">Royal.</a>                                         Designed by	<a href="http://www.templatesquare.com" title="">TemplateSquare.com</a>.
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
<script type='text/javascript' src='http://demowordpress.templatesquare.com/royal/wp-content/plugins/contact-form-7/includes/js/jquery.form.min.js?ver=3.46.0-2013.11.21'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var _wpcf7 = {"loaderUrl":"http:\/\/demowordpress.templatesquare.com\/royal\/wp-content\/plugins\/contact-form-7\/images\/ajax-loader.gif","sending":"Sending ..."};
/* ]]> */
</script>
<script type='text/javascript' src='http://demowordpress.templatesquare.com/royal/wp-content/plugins/contact-form-7/includes/js/scripts.js?ver=3.6'></script>
	<script type="text/javascript">
	//Add Class Js to html
	jQuery('html').addClass('js');	
	
	//=================================== MENU ===================================//
	jQuery("ul.sf-menu").supersubs({ 
	minWidth		: 10,		// requires em unit.
	maxWidth		: 13,		// requires em unit.
	extraWidth		: 3	// extra width can ensure lines don't sometimes turn over due to slight browser differences in how they round-off values
						   // due to slight rounding differences and font-family 
	}).superfish();  // call supersubs first, then superfish, so that subs are 
					 // not display:none when measuring. Call before initialising 
					 // containing tabs for same reason. 
	
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
		<script type="text/javascript">
	jQuery(document).ready(function(){
		//=================================== TABS AND TOGGLE ===================================//
		//jQuery tab
		jQuery(".tab-content").hide(); //Hide all content
		jQuery("ul.tabs li:first").addClass("active").show(); //Activate first tab
		jQuery(".tab-content:first").show(); //Show first tab content
		//On Click Event
		jQuery("ul.tabs li").click(function() {
			jQuery("ul.tabs li").removeClass("active"); //Remove any "active" class
			jQuery(this).addClass("active"); //Add "active" class to selected tab
			jQuery(".tab-content").hide(); //Hide all tab content
			var activeTab = jQuery(this).find("a").attr("href"); //Find the rel attribute value to identify the active tab + content
			jQuery(activeTab).show(); //Fade in the active content
			return false;
		});
	});
	</script>
	<!--wp_footer-->
    <?php wp_footer(); ?>
    </body>
</html>