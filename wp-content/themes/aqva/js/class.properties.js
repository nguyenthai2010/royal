// JavaScript Document
var properties = (function() {
	//PARAMATER
	var urlmain = '';
	var arraylist = ['suite-apartments','townhouses','villas','vip-apartments'];
	var arrayImage1 = [302, 307, 308];
	var arrayImage2 = [102];
	var arrayImage3 = [302, 307, 308];
	var arrayImage4 = [102, 201, 202, 203, 204, 205, 302, 404];
	
	//INIT
	function init(setting){
		var urlsite = setting[0]; 
		var url = setting[1]; 
		var term_list = setting[2]; 
		var properties_name = setting[3]; 
		
		var array = null;
		urlmain = urlsite;
		var url_img = url + '/images/properties/' + term_list;
		if(term_list == arraylist[0]){
			array = arrayImage1;
			var imgMain = '<img id="properties_main" src="'+url_img + '/f.png' +'" width="410" height="227" usemap="#Map">';
			
			jQuery('.term_list_img').html('');
			jQuery('.term_list_img').append(imgMain + '<map name="Map"><area shape="rect" coords="18,171,76,199" href="javascript:void(0);" onMouseOver="properties.hover(\'properties_' + array[2] + '\')" onClick="properties.changeURL(\'' + array[2] + '\')"><area shape="rect" coords="87,157,141,199" href="javascript:void(0);" onMouseOver="properties.hover(\'properties_' + array[1] + '\')" onClick="properties.changeURL(\'' + array[1] + '\')"><area shape="poly" coords="333,71,329,114,384,121,390,78" href="javascript:void(0);" onMouseOver="properties.hover(\'properties_' + array[0] + '\')" onClick="properties.changeURL(\'' + array[0] + '\')"></map>');

			for (i = 0; i < array.length; i++) { 
				var img = '<img class="processing_img" id="properties_'+ array[i] +'" src="'+url_img + '/f-' + array[i] + '.jpg' +'">';
				jQuery('.term_list_img').append(img);
			}
						
			jQuery('#properties_main').hover(function(){}, function(){
				hover('properties_' + properties_name);
			})
			hover('properties_' + properties_name);
		}
		if(term_list == arraylist[3]){
			create(array, url_img, properties_name);
		}
	}
	
	//FUNCTION create list image
	function create(array, url_img, properties_name){
		array = arrayImage4;
		var imgMain = '<img id="properties_main" src="'+url_img + '/f.png' +'" width="452" height="146" usemap="#Map">';
		
		jQuery('.term_list_img').html('');
		jQuery('.term_list_img').append(imgMain + '');

		for (i = 0; i < array.length; i++) { 
			var img = '<img class="processing_img" id="properties_'+ array[i] +'" src="'+url_img + '/f-' + array[i] + '.jpg' +'">';
			jQuery('.term_list_img').append(img);
		}
					
		jQuery('#properties_main').hover(function(){}, function(){
			hover('properties_' + properties_name);
		})
		hover('properties_' + properties_name);	
	}
	
	//FUNCTION
	function hover(id){
		jQuery('.processing_img').css('display','none')
		jQuery('#' + id).css('display','block')
		
	}
	
	function changeURL(properties_name){
		window.location.href = urlmain + '/properties/' + properties_name;
	}
	
	//RETURN
	return {
		init:init,
		changeURL:changeURL,
		hover:hover
	}
	
})();	
