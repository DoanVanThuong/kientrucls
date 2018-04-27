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
        speed: 1000,
        autoplaySpeed: 1500,
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

    // shine effect
    function ShineImg(img) {

        this.imgToCanvas = function (img) {
            this.canvas = document.createElement('canvas');
            this.canvas.width = img.width;
            this.canvas.height = img.height;
            if (img.className != '') { this.canvas.className = img.className; }
            this.context = this.canvas.getContext('2d');
            this.image = img;
            this.context.drawImage(img, -1, 0, canvas.width, canvas.height);
            img.parentNode.replaceChild(this.canvas, img);
        }

        this.imgToCanvas(img);

        this.placeGradient = function (x, y) {
            this.context.save();
            this.gradient = this.context.createLinearGradient(x, 40 * Math.sin(15 * Math.PI / 180), x + 40, 40 * Math.sin(15 * Math.PI / 180));
            gradient.addColorStop(0, 'rgba(255,255,255,0)');
            gradient.addColorStop(0.5, 'rgba(255,255,255,0.5)');
            gradient.addColorStop(1, 'rgba(255,255,255,0)');
            this.context.rotate(15 * Math.PI / 180);
            this.context.fillStyle = gradient;
            this.context.globalCompositeOperation = 'source-atop';
            this.context.fillRect(x, y - x * Math.sin(15 * Math.PI / 180), 40, this.canvas.height / Math.cos(15 * Math.PI / 180) + 40 * Math.sin(15 * Math.PI / 180));
            this.context.restore();
        }

        var x = -(this.canvas.width + this.canvas.height * Math.sin(15 * Math.PI / 180));
        this.animateGradient = function () {
            this.animation = setInterval(function () {
                this.context.clearRect(0, 0, this.canvas.width, this.canvas.height);
                this.context.drawImage(img, -1, 0, canvas.width, canvas.height);
                this.placeGradient(x, -40 * Math.sin(15 * Math.PI / 180));
                x += 1;
                if (x > this.canvas.width + this.canvas.height * Math.sin(15 * Math.PI / 180)) {
                    x = -(this.canvas.width + this.canvas.height * Math.sin(15 * Math.PI / 180));
                    clearInterval(this.animation);
                }
            }, 1);
        }

        this.shine = setInterval(this.animateGradient, 6000);

        window.addEventListener('blur', function () {
            clearInterval(this.shine);
        }, false);

        window.addEventListener('focus', function () {
            this.shine = setInterval(this.animateGradient, 7000);
        }, false);

        return this;

    }

    window.onload = function () {
        ShineImg(document.getElementById('logo'));
    }

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
