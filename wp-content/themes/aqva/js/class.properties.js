// JavaScript Document
var properties = (function() {
	//PARAMATER
	var settingRoom = {
		urlsite 		: '',
		url		 		: '',
		term_list 		: '',
		properties_name : '',
		floor_current	: ''
	};

	var arraylist = ['suite-apartments','townhouses','villas','vip-apartments'];
	var arrayImage1 = [302, 307, 308];
	var arrayImage2 = ['2b'];
	var arrayImage3 = ['m1','m2'];
	var arrayImage4 = [102, 201, 202, 203, 204, 205, '302-2', 404];
	
	var arrayFloor = ['','1st-floor','2nd-floor','3rd-floor','4th-floor'];
	
	//INIT
	function init(setting){
		settingRoom = setting;
		run(true);
	}
	
	// RUN
	function run(status){
		// can set settingRoom.floor_current khi muon thay doi floor
		if(settingRoom.term_list == arraylist[0]){
			create(arrayImage1, 0, status);
		}
		else if(settingRoom.term_list == arraylist[1]){
			create(arrayImage2, 1, status);
		}
		else if(settingRoom.term_list == arraylist[2]){
			create(arrayImage3, 2, status);
		}
		else if(settingRoom.term_list == arraylist[3]){
			create(arrayImage4, 3, status);
		}
		
	}
	//FUNCTION create list image
	function create(array, type, firsttime){
		var url_img = settingRoom.url + '/images/properties/' + settingRoom.term_list;
		var imgMain = '<img id="properties_main" src="'+url_img + '/f.png' +'" usemap="#Map">';
			
		// process floor
		var n = get_floor_number(settingRoom.floor_current);
		var strMap = '';
		if (n == 3 && type == 0){ // floor 3 :: suite-apartments
			strMap = imgMain + '<map name="Map"><area shape="rect" coords="18,171,76,199" href="javascript:void(0);" onMouseOver="properties.hover(\'properties_' + array[2] + '\')" onClick="properties.changeURL(\'' + array[2] + '\')"><area shape="rect" coords="87,157,141,199" href="javascript:void(0);" onMouseOver="properties.hover(\'properties_' + array[1] + '\')" onClick="properties.changeURL(\'' + array[1] + '\')"><area shape="poly" coords="333,71,329,114,384,121,390,78" href="javascript:void(0);" onMouseOver="properties.hover(\'properties_' + array[0] + '\')" onClick="properties.changeURL(\'' + array[0] + '\')"></map>';
		} 
		else if (n == 2 && type == 3){
			strMap = imgMain + '<map name="Map"><area class="201" shape="poly" coords="53,14,55,113,105,113,106,51,125,49,125,17" href="javascript:void(0);" onMouseOver="properties.hover(\'properties_' + array[1] + '\')" onClick="properties.changeURL(\'' + array[1] + '\')"><area class="202" shape="poly" coords="212,18,211,51,131,50,128,16" href="javascript:void(0);" onMouseOver="properties.hover(\'properties_' + array[2] + '\')" onClick="properties.changeURL(\'' + array[2] + '\')"><area class="203" shape="poly" coords="249,17,249,48,323,49,323,20" href="javascript:void(0);" onMouseOver="properties.hover(\'properties_' + array[3] + '\')" onClick="properties.changeURL(\'' + array[3] + '\')"><area class="204" shape="poly" coords="400,22,399,62,354,63,352,52,329,51,328,20" href="javascript:void(0);" onMouseOver="properties.hover(\'properties_' + array[4] + '\')" onClick="properties.changeURL(\'' + array[4] + '\')"><area class="205" shape="rect" coords="354,64,398,121" href="javascript:void(0);" onMouseOver="properties.hover(\'properties_' + array[5] + '\')" onClick="properties.changeURL(\'' + array[5] + '\')"></map>';
		} 		
		else if (type == 2){
			strMap = imgMain + '<map name="Map"><area shape="rect" coords="256,48,324,95" href="javascript:void(0);" onMouseOver="properties.hover(\'properties_' + array[0] + '\')" onClick="properties.changeURL(\'' + array[0] + '\')"><area shape="poly" coords="225,90,226,145,280,145,280,94,255,94,255,91" href="javascript:void(0);" onMouseOver="properties.hover(\'properties_' + array[1] + '\')" onClick="properties.changeURL(\'' + array[1] + '\')"></map>';
		}
		jQuery('.term_list_img').html('');
		jQuery('.term_list_img').append(strMap);
				
		//display floor
		//console.log(n + '-' + type);
		if(type==3){
			jQuery('.listfloor').html('<a class="menufloor1" href="javascript:void(0)" onClick="properties.changeURL(\'' + arrayImage4[0] + '\')">1ST FLOOR</a><a class="menufloor2" href="javascript:void(0)" onClick="properties.changeURL(\'' + arrayImage4[1] + '\')">2ND FLOOR</a><a href="javascript:void(0)" onClick="properties.changeURL(\'' + arrayImage4[6] + '\')" class="menufloor3">3RD FLOOR</a><a class="menufloor4" href="javascript:void(0)" onClick="properties.changeURL(\'' + arrayImage4[7] + '\')">4TH FLOOR</a>');
		}
		else if(type==0){
			jQuery('.listfloor').html('<a href="javascript:void(0)" class="soldout menufloor1" text="1ST FLOOR">1ST FLOOR</a><a href="javascript:void(0)" class="soldout menufloor2" text="2ND FLOOR">2ND FLOOR</a><a class="menufloor3" href="javascript:void(0)" onClick="properties.changeURL(\'' + arrayImage1[0] + '\')">3RD FLOOR</a>');
			
			jQuery('.soldout').hover( 
				function(){
					jQuery(this).html('SOLD OUT');
				},
				function(){
					var text = jQuery(this).attr('text');
					jQuery(this).html(text);
				}
			);
		}
		else {
			jQuery('.listfloor').html('');
		}
		
		jQuery('.menufloor' + n).addClass('active');
		
		// display list images
		for (i = 0; i < array.length; i++) { 
			var img = '<img class="processing_img" id="properties_'+ array[i] +'" src="'+url_img + '/f-' + array[i] + '.jpg' +'">';
			jQuery('.term_list_img').append(img);
		}
					
		// process hover			
		jQuery('#properties_main').hover(function(){}, function(){
			hover('properties_' + settingRoom.properties_name);
		})
		
		hover('properties_' + settingRoom.properties_name);
	}
	
	//FUNCTION
	function hover(id){
		jQuery('.processing_img').css('display','none')
		jQuery('#' + id).css('display','block')
	}
	
	function changeURL(properties_name){
		window.location.href = settingRoom.urlsite + '/properties/' + properties_name;
	}
	
	//FLOORS
	function get_floor_number(){
		for (i = 0; i < arrayFloor.length; i++) { 
			if(settingRoom.floor_current == arrayFloor[i])
				return i;
		}		
		return 0; 
	}
	
	//properties.changeFloor('3rd-floor')
	function changeFloor(floor_current){
		settingRoom.floor_current = floor_current;
		run(false);
	}
	
	//RETURN
	return {
		init:init,
		changeURL:changeURL,
		changeFloor:changeFloor,
		hover:hover
	}
	
})();	
