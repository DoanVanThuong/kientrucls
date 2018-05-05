//when scrolling to 50px will be appear
window.onscroll = function () {
    scrollFunction()
};
function scrollFunction() {
    if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {

        document.getElementById('scroll').style.display = "block";
    } else {
        document.getElementById('scroll-menu').style.display = "none";
        document.getElementById('scroll').style.display = "none";
    }
}
//menu
// $(window).scroll(function () {
//     var navHeight = $(".scroll-menu").outerHeight();
//     var currentHeight = $(document).scrollTop();
//     if (currentHeight >= navHeight) {
//         $('.scroll-menu').addClass('fixed');
//         $('.scroll-menu').fadeIn(1500);
//     } else {
//         $('.scroll-menu').removeClass('fixed');
//         $('.scroll-menu').fadeOut(1500);
//     }
// });
//scroll to top
$("#scroll").click(function () {
    $('html,body').animate({
        scrollTop: $('header').offset().top
    },
        1000);
});
function clickSearch() {
    var search = document.getElementById('search');
    if (search.style.display == 'none') {
        search.style.display = 'block';
    } else {
        search.style.display = 'none';
    }
}