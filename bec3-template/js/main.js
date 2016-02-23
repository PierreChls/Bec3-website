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
});
