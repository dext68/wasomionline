/*///////////////// SUBMENU HOVER EFFECT /////////////////////////*/
$(document).ready(function(){
	$('.box-body ul li a ').hover(function(){
		$(this).stop().animate({marginLeft: "30px" }, 300);
		
	}, function(){
	   $(this).stop().animate({marginLeft: "15px" }, 300);
	 
	});
});
/*///////////////// END SUBMENU HOVER EFFECT /////////////////////////*/

/*///////////////// FOOTER NAVIGATION HOVER EFFECT /////////////////////////*/
$(document).ready(function(){
	$('.footer-navigation li a').hover(function(){
		$(this).stop().animate({marginLeft: "15px" }, 300);
		
	}, function(){
	   $(this).stop().animate({marginLeft: "0px" }, 300);
	 
	});
});
/*///////////////// END FOOTER NAVIGATION HOVER EFFECT /////////////////////////*/

/*///////////////// LATEST POSTS HOVER EFFECT /////////////////////////*/
$(document).ready(function(){
	$('.latest-post').hover(function(){
		$(this).stop().animate({marginLeft: "10px" }, 300);
	
	}, function(){
	   $(this).stop().animate({marginLeft: "0px" }, 300);
	  
	 
	});
});
/*///////////////// END LATEST POSTS HOVER EFFECT /////////////////////////*/

