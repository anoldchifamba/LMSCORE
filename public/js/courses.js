"use strict";

$(function () {	
    var browsePageSkillCarouselSettings = {
        slide: 'li',
        infinite: true,
        slidesToShow: 7,
        slidesToScroll: 4,
        nextArrow: $('#browseSkills .slick-next'),
        prevArrow: $('#browseSkills .slick-prev'),
        responsive: [
            {
              breakpoint: 997,
                settings: {
                    slidesToShow: 4,
                    slidesToScroll: 4
                }
            },
            {
              breakpoint: 809,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3
                }
            },
            {
                breakpoint: 603,
                settings: 'unslick'
            }
        ]
    };    
	$("#browseSkillsMenu").slick(browsePageSkillCarouselSettings);
    $('#browseSkillsMenu li').click(function () {	
        var clickedElement = $(this);
        window.location.href=clickedElement.data("skill");

    });
});
