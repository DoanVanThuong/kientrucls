(function () {
    $('.dropdown').click(function (e) {
        e.preventDefault();
        $('.submenu').slideToggle();
    });
    //menu
    $(window).scroll(function () {
        var currentHeight = $(document).scrollTop();
        if ($('body').hasClass('home')) {
            var navHeight = $(".stonetile-banner").outerHeight();
            if (currentHeight >= navHeight) {
                $('#menu-top').hide();
                $('#scroll-menu').show();
                $('header.header-page nav').addClass('fixed');
            } else {
                $('#menu-top').show();
                $('#scroll-menu').hide();
                $('header.header-page nav').removeClass('fixed');
            }
        } else {
            if (currentHeight > 0) {
                $('header.header-page nav').addClass('fixed');
            } else {
                $('header.header-page nav').removeClass('fixed');
            }
        }
    });

    //when scrolling to 50px will be appear
    window.onscroll = function () { scrollFunction() };
    function scrollFunction() {
        if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
            document.getElementById('open').style.opacity = "0.5";
        } else {
            document.getElementById('scroll').style.display = "none";
        }
    }

    //scroll to top  
    $("#scroll").click(function (e) {
        e.preventDefault();
        $('html,body').animate({ scrollTop: 0 }, 600);
    });

    $('#search-btn').click(function () {
        $('#search').slideToggle();
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
    function scrollButton() {
        $('.scroll-btn').animate({
            top: '10px'
        }, 400);
    }
    //scroll to top  
    $("#scroll").click(function (e) {
        e.preventDefault();
        $('html,body').animate({ scrollTop: 0 }, 800);
    });


})();