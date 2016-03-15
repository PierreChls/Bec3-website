$(document).ready(function(){
  
	$('a[href^="#"]').click(function(){
		var the_id = $(this).attr("href");
	
		$('html, body').animate({
			scrollTop:$(the_id).offset().top
		}, 'slow');
		return false;
	});
	
	
	$(".image-block_1 img").addClass("imgGird");	
	$(".title-block_1 h3").addClass("sizeGird");
	$(".image-block_1 .videogallery-image-overlay").addClass("black_bg");
	
	
	$(".nav-icon").click(function(event){		
  		event.preventDefault();
  		if( $(".navbar-nav").hasClass("open") ){
  			$(".navbar-nav").removeClass("open");
  			$(".hamburger").removeClass("is-active");
  			$("header").removeClass("menu-open");
  		}
  		else{
	  		$(".navbar-nav").addClass("open");
	  		$(".hamburger").addClass("is-active");
	  		$("header").addClass("menu-open");
  		}	
  	});
  
	$( window ).resize(function() {
		menu_responsive();
	});
  
  
	function menu_responsive(){
		if( $(window).width() > 900){
			$(".hamburger").removeClass("is-active");
			$(".navbar-nav").removeClass("open");
			$("header").removeClass("menu-open");
		}
	}
	
});
