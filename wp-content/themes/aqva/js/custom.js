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
	
	//=================================== FADE EFFECT ===================================//
	if (jQuery.browser.msie && jQuery.browser.version < 7) return; // Don't execute code if it's IE6 or below cause it doesn't support it.
	
	jQuery('.klasik-pf-img').hover(
		function() {
			jQuery(this).find('.rollover').stop().fadeTo(500, 0.6);
		},
		function() {
			jQuery(this).find('.rollover').stop().fadeTo(500, 0);
		}
	);
	jQuery('.klasik-pf-img').append('<div class="pfarrow" />');
	
	jQuery('.feature-title-container').append('<div class="sep" />');
	
	
});

function runisotope(){
	var $container = jQuery('.isotope');
		$container.isotope({
			itemSelector : '.item'
		});
		
	// filter items when filter link is clicked
	jQuery('#filter li').click(function(){
	jQuery('#filter li').removeClass('current');
		jQuery(this).addClass('current');
			var selector = jQuery(this).find('a').attr('data-filter');
			if(selector!='*' && selector.indexOf(".")!=0){
				selector = '.' + selector;
			}
			$container.isotope({ filter: selector });
		return false;
	}); 
};

jQuery(window).load(function() {
							 
    runisotope();
	runflexslider();
	runcameraslider();
	setTimeout(function(){
		jQuery('.selling').css('opacity',1);
	},1500);
});

//=================================== CAMERA SLIDER ===================================//
function runcameraslider(){
	if(jQuery('#slideritems').length){
		jQuery('#slideritems').camera({
			height: '42%', /* to set the slider height */
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

//=================================== FLEXSLIDER ===================================//
function runflexslider(){
	jQuery('#postgallery').flexslider({
		animation: "fade",
		touch:true,
		animationDuration: 6000,
		directionNav: true,
		controlNav: false
	});
	
	jQuery('.flexslider-carousel').flexslider({
		animation: "slide",
		touch:true,
		animationLoop: false,
		controlNav: false,
		itemWidth: 150, 
		itemMargin: 0,
		minItems: 2, 
		maxItems: 5
	});
	
}

})(jQuery);
