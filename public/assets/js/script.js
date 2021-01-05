$(document).ready(function(){
	
	if($("html").attr("dir") == "rtl")
	{
		$('.big-banner').slick({
		  infinite: true,
		  slidesToShow: 1,
		  slidesToScroll: 1,
		  autoPlay: true,
		  rtl:true,
		  dots:true,
		  arrows:true,
		  
		});
	}
	else
	{
		$('.big-banner').slick({
		  infinite: true,
		  slidesToShow: 1,
		  slidesToScroll: 1,
		  autoPlay: true,
		});
		
	}
	

});