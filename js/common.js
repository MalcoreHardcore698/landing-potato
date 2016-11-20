$(function() {

	$(".toggle-top").click(function() {
		$(this).toggleClass('on');
		$(".top-menu").slideToggle(400);
	});

	$(".toggle-footer").click(function() {
		$(this).toggleClass('on');
		$(".bottom-menu").slideToggle(400);
		$("html, body").animate({ scrollTop: $(".left-text").height()+9999 }, "slow")
	});

	$(".carousel").owlCarousel({
		items : 3,
		loop : true,
		nav : true,
		navText : false,
		center : true,
		autoWidth : true,
		margin : 50,
		responsiveClass:true,
		responsive : {
		    320 : {
		        items : 1
		    },
		    480 : {
		    	items : 1
		    }
		}
	});

	$(".top-menu").append("<li><a href='#' class='buy-it-now'>Buy It Now</a></li>");

});
