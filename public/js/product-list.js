$('.slider-wp').slick( {
    dots:false, infinite:true, speed:300, slidesToShow:3, slidesToScroll:1, autoplay:true, autoplaySpeed:2500, nextArrow:'<div class="slider-control right"><i class="fa fa-long-arrow-right btn-next" aria-hidden="true"></i></div>', prevArrow:'<div class="slider-control left"><i class="fa fa-long-arrow-left btn-prev" aria-hidden="true"></i></div>', responsive:[ {
        breakpoint:1024, settings: {
            slidesToShow: 3, slidesToScroll:1
        }
    }
    , {
        breakpoint:600, settings: {
            slidesToShow: 2, slidesToScroll:1
        }
    }
    , {
        breakpoint:480, settings: {
            slidesToShow: 1, slidesToScroll:1
        }
    } // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
    ]
}

);
$(".color-wp .img-thumb ").hover(function () {
    $(this).find(".triagle-top-left").hide('slow');
    $(this).find(".triagle-top-left-orange").show('slow');
    $(this).find(".title-color-supplies").css('color', '#fff');
    $(this).find(".title-color-supplies").css('margin-left', '80px');
    $(this).find(".sub-title").css('margin-left', '-30px ');
}

, function() {
    $(this).find(".triagle-top-left").show('slow');
    $(this).find(".triagle-top-left-orange").hide('slow');
    $(this).find(".title-color-supplies").css('color', '#f4bc16');
    $(this).find(".title-color-supplies").css('margin-left', '0');
    $(this).find(".sub-title").css('margin', '0');
}

);
$(".supplies-wp .img-thumb ").hover(function () {
    $(this).find(".triagle-top-right").hide('slow');
    $(this).find(".triagle-top-right-orange").show('slow');
    $(this).find(".title-color-supplies").css('color', '#fff');
    $(this).find(".sub-title").css('margin-left', '80px');
}

, function() {
    $(".triagle-top-right").show('slow');
    $(".triagle-top-right-orange").hide('slow');
    $(".title-color-supplies").css('color', '#f4bc16');
    $(this).find(".sub-title").css('margin-left', '0px');
}

);
$('.btn').click(function () {
    $('html, body').animate( {
        scrollTop: 0
    }
    , 800);
    return false;
}

);
// $(".btn").click(function(){
//             //         $('html,body').animate({
//             // scrollTop: $(".moldings").offset().top},
//             // 'slow');
//             alert("sds");
//             });
// $(document).ready(function() {
//            $(".btn").click(function(){
//                    $('html,body').animate({
//            scrollTop: $(".moldings").offset().top},
//            'slow');
//            });
//        });
$("#dr-accessories").click(function () {
    $('html,body').animate( {
        scrollTop: $(".acessories").offset().top
    }
    , 'slow');
}

);
$("#dr-moldings").click(function () {
    $('html,body').animate( {
        scrollTop: $(".moldings").offset().top
    }
    , 'slow');
}

);
$("#dr-tiles").click(function () {
    $('html,body').animate( {
        scrollTop: $(".tiles").offset().top
    }
    , 'slow');
}

);
//  $(".drop-down"):hover ,.dropdown-menu {
//   display: block;
// }
$(".dropdown").hover(function () {
    $(this).find(".dropdown-menu").show(); // $(".dropdown-menu").show();
}

, function() {
    // $(this).find(".dropdown-menu").css("display","none");
    $(this).find(".dropdown-menu").slideUp();
}

);
//menu
$(window).scroll(function () {
    var navHeight=$(".stonetile-banner").outerHeight();
    var currentHeight=$(document).scrollTop();
    if (currentHeight >=navHeight) {
        $('nav').addClass('fixed');
        $('nav').fadeIn(1000);
    }
    else {
        $('nav').removeClass('fixed');
    }
    $('.scroll-btn').click(function () {
        $('html, body').animate( {
            scrollTop: $('#products').offset().top
        }
        , 1000);
    }
    );
}

);