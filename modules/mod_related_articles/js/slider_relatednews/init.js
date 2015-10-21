jQuery(document).ready(function($){

           $('.flexslider').flexslider({
			animation: "slide",
			slideshow: true,
			slideshowSpeed: 7000,
			animationSpeed: 600,  
			prevText: 'Prev',
			nextText: 'Next'
			});
		   
		   $(".slides li:not(.clone) a[rel^='prettyPhoto']").prettyPhoto({
						animation_speed: 'normal',
						autoplay_slideshow: true,
						slideshow: 3000
					});

});