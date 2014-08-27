// JavaScript Document
var overview = (function() {
	//PARAMATER

	//INIT
	function init(){
		initEvent();
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
	}
	
	//FUNCTION
	
	
	//RETURN
	return {
		init:init
	}
	
})();	
