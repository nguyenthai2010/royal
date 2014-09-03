// JavaScript Document
var contact = (function() {
	//PARAMATER

	//INIT
	function init(str){
		jQuery('input[name="your-subject"]').val(str);
	}
	
	//FUNCTIONS

	//RETURN
	return {
		init:init
	}
	
})();	
