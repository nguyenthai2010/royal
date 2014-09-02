// JavaScript Document
var overview = (function() {
	//PARAMATER

	//INIT
	function init(){
		initEvent();
		fixedSidebar();
	}
	function specificationScroll(){
		jQuery('#sidebar li li a').click(function(){
			var href = jQuery(this).attr('data-link');
			jQuery('body, html').animate({ scrollTop: jQuery("#"+href).offset().top - 40 }, 800);
			return false;
		});
	}
	function fixedSidebar(){
		var sidebar = $('#sidebar');
	    $(window).scroll(function () {
	        if ($(this).scrollTop() > $('#outerheader').height() + $('#outerafterheader').height()) {
	            sidebar.addClass("fixed");
	        } else {
	            sidebar.removeClass("fixed");
	        }
	    });
	}
	function initEvent(){
		jQuery('.blockoverview').hover(
			function(){
				var pic = jQuery(this).attr('pic');
				jQuery(pic).addClass('active');
			},
			function(){
				var pic = jQuery(this).attr('pic');
				jQuery(pic).removeClass('active');
			}
		);
		
		jQuery('.blockoverview').click(function(e) {
			var link = jQuery(this).attr('link');
			window.location.href = link;
        });
		
		//
		jQuery(window).resize(function(e) {
            respone();
        });
		respone();
	}
	
	//RESPONE
	function respone(){
		var w = jQuery('#maincontainer .container').width();
		if(w > 900)
			w = 900;
		
		var font = (w*14)/900;		
		jQuery('.overview .overviewhotel').css('font-size', font + 'px' );

	}
	
	//RETURN
	return {
		init:init,
		specificationScroll:specificationScroll
	}
	
})();	
