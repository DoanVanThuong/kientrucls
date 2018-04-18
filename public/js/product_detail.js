$('.slider1').slick({
    autoplay: true,
    autoplaySpeed: 5000,
    dots: true,
    speed: 300,
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
});

var slider2 = $('.slick-slider2').slick({
    arrows: true,
    slidesToShow: 3,
    autoplay: false,
    speed: 300,
    variableWidth: true,
    infinite: false,
    focusOnSelect: true,
    centerMode: false,
    responsive: [{
        breakpoint: 768,
        settings: {
            arrows: false,
            slidesToShow: 3
        }
    },
    {
        breakpoint: 480,
        settings: {
            arrows: false,
            slidesToShow: 1
        }
    }
    ]
});
$('.slick-slider2 .slick-next').click(function () {
    $('.slick-slider2 .slick-prev').css("visibility", "visible");
    $('.slider2 .bg-blur-reverse').css({
        "visibility": "visible"
    });

});

slider2.on('afterChange', function (event, slick, currentSlide) {
    //If we're on the first slide hide the Previous button and show the Next
    if (currentSlide == 0) {
        $('.slick-slider2 .slick-prev').css("visibility", "hidden");
        $('.slick-slider2 .slick-next').css("visibility", "visible");
        $('.slider2 .bg-blur').css("visibility", "visible");
        $('.slider2 .bg-blur-reverse').css("visibility", "hidden");
        $('.slick-slider2 .slick-list').css("padding", "0");
    } else {
        $('.slick-slider2 .slick-prev').css("visibility", "visible");
        $('.slider2 .bg-blur-reverse').css("visibility", "visible");
    }

    //If we're on the last slide hide the Next button.
    if (slick.slideCount == currentSlide + 1) {
        $('.slick-slider2 .slick-next').css("visibility", "hidden");
        $('.slider2 .bg-blur').css("visibility", "hidden");
    } else {
        $('.slick-slider2 .slick-next').css("visibility", "visible");
        $('.slider2 .bg-blur').css("visibility", "visible");
        $('.slick-slider2').slick('setOption', 'centerMode', true);
    }
    if (currentSlide == 0) {
        $('.slick-slider2').slick('setOption', 'centerMode', false);
    }
});

