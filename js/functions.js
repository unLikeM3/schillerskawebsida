$(document).ready(function() {
	/*var theWindow        = $(window),
	$bg              = $("#bg"),
	aspectRatio      = $bg.width() / $bg.height();
	    			    		
	function resizeBg() {
		
		if ( (theWindow.width() / theWindow.height()) < aspectRatio ) {
		    $bg
		    	.removeClass()
		    	.addClass('bgheight');
		} else {
		    $bg
		    	.removeClass()
		    	.addClass('bgwidth');
		}
					
	}
	                   			
	theWindow.resize(resizeBg).trigger("resize");*/
	

	$('#wrapper').fadeIn(1200);

	var toggle = false;
	$('#kontaktbtn').click(function() {
		if(toggle == false){
			$('#kontaktinfo').slideDown(1000);
			toggle = true;
		}else{
			$('#kontaktinfo').slideUp(500);
			toggle = false;
		}
		
	});
});

