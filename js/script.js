//google jquery
$(document).ready(function () {
    // #####***** toggle button ******######
    $('.nav-toggle').click(function () {
        $('.nav-links').stop().slideToggle(1000);
    })
    // #####***** nav fixed ******######
    $(window).scroll(function () {
        let scroll = $(window).scrollTop();
        if (scroll >= 150) {
            $('#nav').addClass('fixed-nav');
        }
        else {
            $('#nav').removeClass('fixed-nav');
        }
    })
    // #####***** smooth scroll ******######
    $('.smooth-scroll').click(function (link) {
        link.preventDefault();
        let target = $(this).attr('href');
        $('html,body').stop().animate({
            scrollTop: $(target).offset().top - 70
        }, "slow");
    })
    //  #####***** fade pop up feedback ******######
    setTimeout(()=>{
        $(".popup-feedback").fadeOut(2000);
    },2000);

    //  #####***** New Owl Carousel ******######
    $('.owl-news').owlCarousel({
        items: 1,
        loop: true,
        margin: 10,
        lazyLoad: true,
        autoplay: true,
        autoplaySpeed:2000,
        autoplayTimeout:6000,
        autoplayHoverPause: true
    });
})
// set date //
const date = document.getElementById("date").innerHTML = new Date().getFullYear();
