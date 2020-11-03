"use strict";

$(function () {
    var skillCarouselSettings = {
        accessibility: true,
        slidesToShow: 5,
        dots: false,
        slidesToScroll: 1,
        prevArrow: '<button type="button" data-role="none" class="slick-prev slick-arrow" aria-label="Previous" role="button" style="display: block;"><img src="uploads/images/arrowPrev.svg" alt="previous arrow" class=""></button>',
        nextArrow: '<button type="button" data-role="none" class="slick-next slick-arrow" aria-label="Previous" role="button" style="display: block;"><img src="uploads/images/arrowPrev.svg" alt="previous arrow" class=""></button>',
        responsive: [
            {
                breakpoint: 1400,
                settings: {
                    slidesToShow: 5,
                    slidesToScroll: 1,
                }
            },
            {
                breakpoint: 1220,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    infinite: true
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 3,
                    arrows: false,
                    slidesToScroll: 1,
                    variableWidth: true,
                    infinite: true
                }
            },
            {
                breakpoint: 640,
                settings: {
                    slidesToShow: 3,
                    arrows: false,
                    slidesToScroll: 1,
                    variableWidth: true,
                    infinite: true,
                    dots: false
                }
            }

            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
        ]
    };
	//HOME PAGE
	$(".testimonial-slide").slick({
        dots: false,
        infinite: true,
        speed: 750,
        centerMode: true,
        slidesToShow: 3,
				variableWidth: true,
				prevArrow: '<button type="button" data-role="none" class="slick-prev slick-arrow" aria-label="Previous" role="button" style="display: block;"><img src="uploads/images/arrowPrev.svg" alt="previous arrow" class=""></button>',
				nextArrow: '<button type="button" data-role="none" class="slick-next slick-arrow" aria-label="Previous" role="button" style="display: block;"><img src="uploads/images/arrowPrev.svg" alt="previous arrow" class=""></button>',
        slidesToScroll: 1,
        responsive: [
        	{
        		breakpoint: 850,
        		settings: {
        			centerPadding: '40px',
        			slidesToShow: 1
        		}
        	}
        ]
     });
    $('#skillsMenu2.navi.browse').slick({
        slide: 'li',
        infinite: true,
        slidesToShow: 4,
        slidesToScroll: 4,
        nextArrow: $('#skills .slick-next'),
        prevArrow: $('#skills .slick-prev')
    });        
    $(".course-slider").each(function(){
        $(this).slick(skillCarouselSettings);
        if($(this).data("skill")!="photography"){
            $(this).hide();
        }
    })
    $('#skillsMenu2 a').click(function () {   
        var elementName=".course-slider.slider-"+$(this).data("skill");
        $(".course-slider").each(function(){                
            $(this).hide();    
        });  
        $(elementName).show();    
        $(elementName).slick('unslick');
        $(elementName).slick(skillCarouselSettings);
    });

});
