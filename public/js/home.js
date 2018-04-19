(function () {

    //menu
    $(window).scroll(function () {
        $('.page-mouse-el').click(function () {
            $('html, body').animate({
                scrollTop: $('#products').offset().top
            }, 1000);
        });
    });

    //Banner
    $(document).ready(function () {
        $(".skitter-large").skitter({
            navigation: true,
            enable_navigation_keys: true,
            label: true,
            with_animations: ["cube", "cubeRandom", "block", "cubeStop", "cubeStopRandom", "cubeHide", "cubeSize", "horizontal", "showBars", "showBarsRandom", "tube", "fade", "fadeFour", "paralell", "blind", "blindHeight", "blindWidth", "directionTop", "directionBottom", "directionRight", "directionLeft", "cubeSpread", "glassCube", "glassBlock", "circles", "circlesInside", "circlesRotate", "cubeShow", "upBars", "downBars", "hideBars", "swapBars", "swapBarsBack", "swapBlocks", "cut"],
            auto_play: true,
            show_randomly: true
        });

        $('.prev_button').html('<img alt="" src="img/home/left.png" />');
        $('.next_button').html('<img alt="" src="img/home/right.png" />');

    });


    //Slider in setion products
    var productSlider = $('.hproduct-slider').slick({
        dots: false,
        infinite: true,
        // centerPadding: '0',
        slidesToShow: 3,
        autoplay: true,
        speed: 800,
        autoplaySpeed: 855500,
        slidesToScroll: 3,
        arrows: true,
        prevArrow: '<div class="slider-control left"><img src="img/home/left-btn.png" alt="" class="img-responsive"></div>',
        nextArrow: '<div class="slider-control right"><img src="img/home/right-btn.png" alt="" class="img-responsive"></div>',
        responsive: [{
            breakpoint: 1100,
            settings: {
                dots: true,
                arrows: false
            }
        },
        {
            breakpoint: 759,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1,
                dots: true,
                arrows: false
            }
        },
        {
            breakpoint: 480,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                dots: true,
                arrows: false
            }
        }
        ]
    });

    // productSlider.on('afterChange', function (event, slick, currentSlide) {
    //     //go last slide to first slide
    //     if (slick.slideCount == currentSlide + 1) {
    //         $('.hproduct-slider .right').css("visibility", "hidden");
    //     } else {
    //         $('.hproduct-slider .right').css("visibility", "visible");
    //         $('.hproduct-slider').slick('setOption', 'centerMode', true);
    //     }
    //     //first slide
    //     if (currentSlide == 0) {
    //         $('.hproduct-slider .left').css("visibility", "hidden");
    //         $('.hproduct-slider .right').css("visibility", "visible");
    //         $('.hproduct-slider').slick('setOption', 'centerMode', false);
    //     } else {
    //         $('.hproduct-slider .left').css("visibility", "visible");
    //     }
    // });



    //Slider logo
    $('.logos-slider').slick({
        dots: true,
        infinite: true,
        autoplay: false,
        speed: 1000,
        slidesToShow: 6,
        slidesToScroll: 6,
        arrows: false,
        responsive: [{
            breakpoint: 1024,
            settings: {
                slidesToShow: 4,
                slidesToScroll: 1
            }
        },
        {
            breakpoint: 759,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1
            }
        },
        {
            breakpoint: 480,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
        }
        ]
    });
    //when scrolling to 50px will be appear
    window.onscroll = function () { scrollFunction() };
    function scrollFunction() {
        if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
            document.getElementById('scroll').style.display = "block";
            // document.getElementById('open').style.opacity="0.5";
        } else {
            document.getElementById('scroll').style.display = "none";
        }
    }
    //scroll to top  
    $("#scroll").click(function (e) {
        e.preventDefault();
        $('html,body').animate({ scrollTop: 0 }, 800);
    });
    //Button go down

    $(document).ready(function () {

        var start = setInterval(scrollButton, 600);

        function scrollButton() {
            $('.scroll-btn').animate({
                top: '10px'
            }, 400);
        }

        var end = setInterval(scrollTopButton, 1200);

        function scrollTopButton() {
            $('.scroll-btn').animate({
                top: '0'
            }, 400);
        }

    });

    //Change src 
    $(document).ready(function () {

        $('.feature-item').first().addClass('feature-item-hover');

        $('.feature-item').hover(function (e) {
            e.preventDefault();
            $('.feature-item').find('h4').css('color', '#000');
            $('.feature-item').removeClass('feature-item-hover');
            var item = $(this);
            var bfore = $(this.before);
            var changeSrc = item.attr('data-src');
            $('.our-story-imgs img').attr('src', changeSrc);
            item.find('h4').css('color', '#f4bc16');
            item.addClass('feature-item-hover');
        });

    });

    //Back to top  
    /*$('.back-top-footer').click(function () {
        $('html, body').animate({
            scrollTop: 0
        }, 800);
        return false;
    });
    */

    //Custom Scroll
    $(document).ready(function () {
        $(".estimate-form").niceScroll({
            cursorcolor: '#a27904'
        });
    });
    // Enable Carousel Controls
    $("#myCarousel .left").click(function () {
        $("#myCarousel").carousel("prev");
    });

    $("#myCarousel .right").click(function () {
        $("#myCarousel").carousel("next");
    });
})();
