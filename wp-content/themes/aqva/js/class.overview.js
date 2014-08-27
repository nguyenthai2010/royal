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
				console.log(pic);
			},
			function(){
				var pic = jQuery(this).attr('pic');
				jQuery(pic).removeClass('active');
			}
		);
	}
	
	//FUNCTION
	
	
	//RETURN
	return {
		init:init
	}
	
})();	
