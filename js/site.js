// Global variables
var pathname,base_json,bounds,stop = false;
var MAXIMUM_URL_LENGTH = 2083;

// jQuery
$(document).ready(function(){
	
	// Error catching
	$.ajaxSetup({"error":function(XMLHttpRequest,textStatus, errorThrown) {   
		if(bounds[1] - bounds[0] > 1) {
			bounds[1] = this.url.length;
			check_url(bounds[0] + (bounds[1] - bounds[0])/2);
		} else {
			$('#urlength').addClass('finished').after('<p>This is the maximum URL Character Length and it is likely that you have an issue with the connectivity between the server and your browser.</p>');
		}
  	}});
	
	pathname = document.URL;
	base_json = pathname + "json/?urlength=";
	bounds = [base_json.length,MAXIMUM_URL_LENGTH];
	$("#urlength span.maximum").html(MAXIMUM_URL_LENGTH);
	check_url(bounds[1]);
});

// Global function "check_url"
function check_url(length) {
	var _json = base_json;
	for(var i = base_json.length; i < length; i++) {
		_json = _json + "1";
	}
	$.getJSON( _json, function(data) {
		$('#urlength span.number').html(data[0].length + " (" + 100*data[0].length/MAXIMUM_URL_LENGTH + "%)");
		var width = $('#urlength').innerWidth() * (data[0].url.length/MAXIMUM_URL_LENGTH) - 4
		$('#urlength span.loading-bar').css({'width':width+'px'})
		if( data[0].length != 2083) {
			bounds[0] = data[0].url.length;
			check_url(bounds[0] + (bounds[1] - bounds[0])/2);
		} else {
			$('#urlength').addClass('finished').after('<p>This is the maximum URL Character Length for Microsoft Internet Explorer 6, 7 and 8 (not sure about 9 - awaiting some testing time). I stopped here due to existing technical limitations of the Microsoft browser.</p>');	
		}
	});
}