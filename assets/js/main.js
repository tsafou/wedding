(function($) {

    'use strict';  

    jQuery(document).ready(function($) {

    	// OWL SLIDER
    	$("#owl-slider").owlCarousel({
            navigation : false,
	    	autoPlay: true,
            transitionStyle: "fade",
	    	singleItem:true
    	});

        // OWL GUEST BOOK
        $("#owl-text").owlCarousel({
            navigation : true,
            pagination: false,
            autoPlay: true,
            singleItem:true
        });

    	// COUNTDOWN TIMER
        $("#defaultCountdown").countdown({
            until: new Date(2017, 2 - 1, 11), // 24th JULY 2016 UNTIL
            format: 'OWDHMS'
        });

        // EQUAL HEIGHT
        function equalHeight(group) {
            var tallest = 0;
            group.each(function() {
                var thisHeight = $(this).height();
                if(thisHeight > tallest) {
                    tallest = thisHeight;
                }
            });
            group.height(tallest);
        }
        
        equalHeight($(".equal"));

        // MASONRY
        $(".testimonial-content").masonry({
          // options
          itemSelector: '.testimonial-grid',
          columnWidth: '.testimonial-grid',
          percentPosition: true
        }); 

        // FILTERING CONTENT
        $("#gallery-grid").mixItUp();
       
    });         

})( jQuery );