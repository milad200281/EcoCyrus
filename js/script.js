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

    // $('.nonloop').owlCarousel({
    //     center: true,
    //     items: 1,
    //     loop: false,
    //     margin: 10,
    //     responsive: {
    //         600: {
    //             items: 1
    //         }
    //     }
    // });
})
// set date //
const date = document.getElementById("date").innerHTML = new Date().getFullYear();
