//google jquery
$(document).ready(function () {
    // #####***** toggle button ******######
    $('.nav-toggle').click(function () {
        $('.nav-links').stop().slideToggle(1000);
    })
    // #####***** nav fixed ******######
    $(window).scroll(function () {
        let scroll = $(window).scrollTop();
        if (scroll >= 200) {
            $('.nav').addClass('fixed-nav');
        }
        else {
            $('.nav').removeClass('fixed-nav');
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
    setTimeout(() => {
        $(".popup-feedback").fadeOut(2000);
    }, 2000);



    //  #####***** News Channel Subscribe ******######
    
    $("#subscribe-channel-form").submit(function (e) {
        //is form valid
        let valid = true;
        //RegEx for valid email
        const valid_email = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        //email input
        let email = $("#news-letter-email").val();
        //validating email
        if (email == '') {
            valid = false;
            $("#subs-email-error").text("Email can not be empty");
        } else if (!email.match(valid_email)) {
            valid = false;
            $("#subs-email-error").text("Please enter a valid email");
        } else {
            $("#subs-email-error").text("");
        }
        if (valid) {
            this.submit();
        } else {
            e.preventDefault();
            $("#subs-email-error").fadeIn(400);
            setTimeout(() => {
                $("#subs-email-error").fadeOut(1000);
            }, 3000);
        }
    });

    // set date //
    const date = document.getElementById("date").innerHTML = new Date().getFullYear();
})
