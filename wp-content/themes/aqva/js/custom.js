(function () {
 "use strict";
jQuery(document).ready(function(){
								
	//Add Class Js to html
	jQuery('html').addClass('js');	
	
    //=================================== MENU ===================================//
	jQuery("ul.sf-menu").supersubs({ 
	minWidth		: 10,		// requires em unit.
	maxWidth		: 12,		// requires em unit.
	extraWidth		: 3	// extra width can ensure lines don't sometimes turn over due to slight browser differences in how they round-off values
						   // due to slight rounding differences and font-family 
	}).superfish();  // call supersubs first, then superfish, so that subs are 
					 // not display:none when measuring. Call before initialising 
					 // containing tabs for same reason. 
	
});

jQuery(window).load(function() {
	runcameraslider();
});

//=================================== CAMERA SLIDER ===================================//
function runcameraslider(){
	if(jQuery('#slideritems').length){
		jQuery('#slideritems').camera({
			height: '43.5%', /* to set the slider height */
			fx: 'scrollLeft', /* to set the slider effect */
			autoAdvance: true,
			pagination: false,
			navigation:true,
			navigationHover: false,
			playPause: false,
			thumbnails: false,
			transPeriod: 1000,
			loader: 'none',
			imagePath: '../images/'
		});
	}
}


})(jQuery);
