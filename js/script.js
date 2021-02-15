//google jquery
$(document).ready(function () {
    // #####***** toggle button ******######
    $('.nav-toggle').click(function () {
        $('.nav-links').stop().slideToggle(1000);
    })
    // #####***** nav fixed ******######
    // $(window).scroll(function () {
    //     let scroll = $(window).scrollTop();
    //     if (scroll >= 70) {
    //         $('#nav').addClass('fixed-nav');
    //     }
    //     else {
    //         $('#nav').removeClass('fixed-nav');
    //     }
    // })
})